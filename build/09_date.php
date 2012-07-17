function _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x6=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x7=$x6($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x7;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x8 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x8[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x8;
$x9 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x10->class) && $x10->class === 'Error') {$x10->properties['file'] = $file;$x10->properties['line'] = $line;$x10->properties['column'] = $column;$x10->attributes['file'] = $x10->attributes['line'] = $x10->attributes['column'] = 0; }
throw new JSException($x10, $line, $column, $file);
}
$W5 = $S5 = $U5 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x5 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x11 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x5 = $x12; }
else { $x5 = JS::$undefined; $U5 = TRUE; }
return array(&$x5, $W5, $S5, $U5);
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x8=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x8[0];list(,$WTypeError,$STypeError,$UTypeError)=$x8;$x9=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x10->class)&&$x10->class===\'Error\'){$x10->properties[\'file\']=$file;$x10->properties[\'line\']=$line;$x10->properties[\'column\']=$column;$x10->attributes[\'file\']=$x10->attributes[\'line\']=$x10->attributes[\'column\']=0;}throw new JSException($x10,$line,$column,$file);}$W5=$S5=$U5=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x5=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x11=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x5=$x12;}else{$x5=JS::$undefined;$U5=TRUE;}return array(&$x5,$W5,$S5,$U5);}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['year'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_year =& $scope->properties['year'];
$Uyear = FALSE;
$scope->properties['month'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$scope->properties['hours'] = array_key_exists(3, $args) ? $args[3] : JS::$undefined;
$_hours =& $scope->properties['hours'];
$Uhours = FALSE;
$scope->properties['minutes'] = array_key_exists(4, $args) ? $args[4] : JS::$undefined;
$_minutes =& $scope->properties['minutes'];
$Uminutes = FALSE;
$scope->properties['seconds'] = array_key_exists(5, $args) ? $args[5] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(6, $args) ? $args[6] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$scope->properties['Date'] = $fn;
$_Date =& $scope->properties['Date'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {
$x3 = clone JS::$objectTemplate;
unset($x5, $W5, $S5, $U5);
$x13 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 3, 11, '<image>/09_date.js');
$x5 =& $x13[0]; list(,$W5,$S5,$U5) = $x13;
$x4 = $x5;
$x3->prototype = $x4;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 3, 11, '<image>/09_date.js');
$_TypeError =& $x16[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x16;
$x17 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 3, 11);
$x18 = $x17($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x18->class) && $x18->class === 'Error') {$x18->properties['file'] = '<image>/09_date.js';$x18->properties['line'] = 3;$x18->properties['column'] = 11;$x18->attributes['file'] = $x18->attributes['line'] = $x18->attributes['column'] = 0; }
throw new JSException($x18, 3, 11, '<image>/09_date.js');
}
$x14 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 3, 11);
$x15 = $x14($global, $x3, $_Date, array($_year, $_month, $_date, $_hours, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x4 = $x15;
if (is_object($x4) && $x4 !== JS::$undefined) { $x3 = $x4; }
if ($x3 === JS::$undefined || $x3 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x20 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 3, 77, '<image>/09_date.js');
$_TypeError =& $x20[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x20;
$x21 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 3, 77);
$x22 = $x21($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x22->class) && $x22->class === 'Error') {$x22->properties['file'] = '<image>/09_date.js';$x22->properties['line'] = 3;$x22->properties['column'] = 77;$x22->attributes['file'] = $x22->attributes['line'] = $x22->attributes['column'] = 0; }
throw new JSException($x22, 3, 77, '<image>/09_date.js');
}
$x19 = JS::toObject($x3, $global);
unset($x23, $W23, $S23, $U23);
$x24 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x19, (string) 'toString', 3, 77, '<image>/09_date.js');
$x23 =& $x24[0]; list(,$W23,$S23,$U23) = $x24;
if (!(is_object($x23) && isset($x23->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x27 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 3, 77, '<image>/09_date.js');
$_TypeError =& $x27[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x27;
$x28 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 3, 77);
$x29 = $x28($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error') {$x29->properties['file'] = '<image>/09_date.js';$x29->properties['line'] = 3;$x29->properties['column'] = 77;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
throw new JSException($x29, 3, 77, '<image>/09_date.js');
}
$x25 = $x23->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 3, 77);
$x26 = $x25($global, $x19, $x23, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x26;;
};
$x30 = clone JS::$objectTemplate;
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = $x30;
$_d->prototype =$_Date->properties['prototype'];
$_d->class = 'Date';
$_d->extensible = TRUE;
$x31 = (((gettype($_year) === gettype(JS::$undefined) && $_year === JS::$undefined))|| (((is_float($_year) || is_int($_year)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_year == JS::$undefined));
if (JS::toBoolean($x31, $global)) {

$_d->value = time();;
}
else {
$x32 = (((gettype($_month) === gettype(JS::$undefined) && $_month === JS::$undefined))|| (((is_float($_month) || is_int($_month)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_month == JS::$undefined));
if (JS::toBoolean($x32, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x33 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'arguments', 15, 15, '<image>/09_date.js');
$_arguments =& $x33[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x33;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x34 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 15, 15, '<image>/09_date.js');
$_ReferenceError =& $x34[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x34;
$x35 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 15, 15);
$x36 = $x35($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x36->class) && $x36->class === 'Error') {$x36->properties['file'] = '<image>/09_date.js';$x36->properties['line'] = 15;$x36->properties['column'] = 15;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 15, 15, '<image>/09_date.js');
}
unset($x37, $W37, $S37, $U37);
$x38 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_arguments, (string) 0, 15, 24, '<image>/09_date.js');
$x37 =& $x38[0]; list(,$W37,$S37,$U37) = $x38;
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x37;
$x41 = $_value;
$x41 = ($x41 === JS::$undefined ? 'undefined' : (is_int($x41) || is_float($x41) ? 'number' : (is_bool($x41) ? 'boolean' : (is_string($x41) ? 'string' : (is_object($x41) && isset($x41->call) ? 'function' : 'object')))));
$x40 = (((gettype($x41) === gettype('object') && $x41 === 'object'))|| (((is_float($x41) || is_int($x41)) && (is_float('object') || is_int('object'))) && $x41 == 'object'));
$x39 = $x40;
if (JS::toBoolean($x39, $global)) {
$x42 = !(((gettype($_value) === gettype(NULL) && $_value === NULL))|| (((is_float($_value) || is_int($_value)) && (is_float(NULL) || is_int(NULL))) && $_value == NULL));
$x39 = $x42; }
if (JS::toBoolean($x39, $global)) {
unset($x44, $W44, $S44, $U44);
$x45 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_value, (string) 'valueOf', 17, 20, '<image>/09_date.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
$x46 = $x44;
$x46 = ($x46 === JS::$undefined ? 'undefined' : (is_int($x46) || is_float($x46) ? 'number' : (is_bool($x46) ? 'boolean' : (is_string($x46) ? 'string' : (is_object($x46) && isset($x46->call) ? 'function' : 'object')))));
$x43 = (((gettype($x46) === gettype('function') && $x46 === 'function'))|| (((is_float($x46) || is_int($x46)) && (is_float('function') || is_int('function'))) && $x46 == 'function'));
if (JS::toBoolean($x43, $global)) {
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 18, 26, '<image>/09_date.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 18, 26);
$x50 = $x49($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error') {$x50->properties['file'] = '<image>/09_date.js';$x50->properties['line'] = 18;$x50->properties['column'] = 26;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 18, 26, '<image>/09_date.js');
}
$x47 = JS::toObject($_value, $global);
unset($x51, $W51, $S51, $U51);
$x52 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x47, (string) 'valueOf', 18, 26, '<image>/09_date.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if (!(is_object($x51) && isset($x51->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x55 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 18, 26, '<image>/09_date.js');
$_TypeError =& $x55[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x55;
$x56 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 18, 26);
$x57 = $x56($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x57->class) && $x57->class === 'Error') {$x57->properties['file'] = '<image>/09_date.js';$x57->properties['line'] = 18;$x57->properties['column'] = 26;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
throw new JSException($x57, 18, 26, '<image>/09_date.js');
}
$x53 = $x51->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 18, 26);
$x54 = $x53($global, $x47, $x51, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x54;;
}
else {
unset($x59, $W59, $S59, $U59);
$x60 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_value, (string) 'toString', 20, 27, '<image>/09_date.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
$x61 = $x59;
$x61 = ($x61 === JS::$undefined ? 'undefined' : (is_int($x61) || is_float($x61) ? 'number' : (is_bool($x61) ? 'boolean' : (is_string($x61) ? 'string' : (is_object($x61) && isset($x61->call) ? 'function' : 'object')))));
$x58 = (((gettype($x61) === gettype('function') && $x61 === 'function'))|| (((is_float($x61) || is_int($x61)) && (is_float('function') || is_int('function'))) && $x61 == 'function'));
if (JS::toBoolean($x58, $global)) {
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 21, 27, '<image>/09_date.js');
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 21, 27);
$x65 = $x64($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error') {$x65->properties['file'] = '<image>/09_date.js';$x65->properties['line'] = 21;$x65->properties['column'] = 27;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 21, 27, '<image>/09_date.js');
}
$x62 = JS::toObject($_value, $global);
unset($x66, $W66, $S66, $U66);
$x67 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x62, (string) 'toString', 21, 27, '<image>/09_date.js');
$x66 =& $x67[0]; list(,$W66,$S66,$U66) = $x67;
if (!(is_object($x66) && isset($x66->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 21, 27, '<image>/09_date.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
$x71 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 21, 27);
$x72 = $x71($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x72->class) && $x72->class === 'Error') {$x72->properties['file'] = '<image>/09_date.js';$x72->properties['line'] = 21;$x72->properties['column'] = 27;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
throw new JSException($x72, 21, 27, '<image>/09_date.js');
}
$x68 = $x66->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 21, 27);
$x69 = $x68($global, $x62, $x66, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x69;;
}
else {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 24, 15, '<image>/09_date.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x76 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 24, 15, '<image>/09_date.js');
$_ReferenceError =& $x76[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x76;
$x77 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 24, 15);
$x78 = $x77($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x78->class) && $x78->class === 'Error') {$x78->properties['file'] = '<image>/09_date.js';$x78->properties['line'] = 24;$x78->properties['column'] = 15;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
throw new JSException($x78, 24, 15, '<image>/09_date.js');
}
$x73 = clone JS::$objectTemplate;
unset($x79, $W79, $S79, $U79);
$x80 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_TypeError, (string) 'prototype', 24, 11, '<image>/09_date.js');
$x79 =& $x80[0]; list(,$W79,$S79,$U79) = $x80;
$x74 = $x79;
$x73->prototype = $x74;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 24, 11);
$x84 = $x83($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error') {$x84->properties['file'] = '<image>/09_date.js';$x84->properties['line'] = 24;$x84->properties['column'] = 11;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 24, 11, '<image>/09_date.js');
}
$x81 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 24, 11);
$x82 = $x81($global, $x73, $_TypeError, array('Date(): cannot get value of object argument given'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x74 = $x82;
if (is_object($x74) && $x74 !== JS::$undefined) { $x73 = $x74; }
if (isset($x73->class) && $x73->class === 'Error') {$x73->properties['file'] = '<image>/09_date.js';$x73->properties['line'] = 24;$x73->properties['column'] = 5;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 24, 5, '<image>/09_date.js');;
};
};
}
else {
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = JS::toPrimitive($_value, $global);;
};
$x86 = $_value;
$x86 = ($x86 === JS::$undefined ? 'undefined' : (is_int($x86) || is_float($x86) ? 'number' : (is_bool($x86) ? 'boolean' : (is_string($x86) ? 'string' : (is_object($x86) && isset($x86->call) ? 'function' : 'object')))));
$x85 = (((gettype($x86) === gettype('string') && $x86 === 'string'))|| (((is_float($x86) || is_int($x86)) && (is_float('string') || is_int('string'))) && $x86 == 'string'));
if (JS::toBoolean($x85, $global)) {
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 31, 22, '<image>/09_date.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x90 = $x89($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error') {$x90->properties['file'] = '<image>/09_date.js';$x90->properties['line'] = 31;$x90->properties['column'] = 22;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 31, 22, '<image>/09_date.js');
}
$x87 = JS::toObject($_Date, $global);
unset($x91, $W91, $S91, $U91);
$x92 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x87, (string) 'parse', 31, 22, '<image>/09_date.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
if (!(is_object($x91) && isset($x91->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 31, 22, '<image>/09_date.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x97 = $x96($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error') {$x97->properties['file'] = '<image>/09_date.js';$x97->properties['line'] = 31;$x97->properties['column'] = 22;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 31, 22, '<image>/09_date.js');
}
$x93 = $x91->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x94 = $x93($global, $x87, $x91, array($_value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x94;;
};
$_d->value = JS::toNumber($_value, $global) / 1000;;
}
else {
$x99 = JS::toPrimitive($_year, $global);
$x100 = JS::toPrimitive(0, $global);
$x101 = !(is_string($x99) && is_string($x100) ? strcmp($x99, $x100) < 0 : (!is_nan($x102 = JS::toNumber($x99, $global)) && !is_nan($x103 = JS::toNumber($x100, $global)) && $x102 < $x103));
$x98 = $x101;
if (JS::toBoolean($x98, $global)) {
$x104 = JS::toPrimitive($_year, $global);
$x105 = JS::toPrimitive(99, $global);
$x106 = !(is_string($x105) && is_string($x104) ? strcmp($x105, $x104) < 0 : (!is_nan($x107 = JS::toNumber($x105, $global)) && !is_nan($x108 = JS::toNumber($x104, $global)) && $x107 < $x108));
$x98 = $x106; }
if (JS::toBoolean($x98, $global)) {
if ($Uyear) {$global->properties['year'] = $_year; $_year =& $global->properties['year']; }
$x109 = JS::toPrimitive($_year, $global);
$x110 = JS::toPrimitive(1900, $global);
$_year = (is_string($x109) || is_string($x110) ? JS::toString($x109, $global) . JS::toString($x110, $global) : JS::toNumber($x109, $global) + JS::toNumber($x110, $global));;
};
$x111 = $_date;
if (!JS::toBoolean($x111, $global)) {
$x111 = 1; }
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x111;
$x112 = $_hours;
if (!JS::toBoolean($x112, $global)) {
$x112 = 0; }
if ($Uhours) {$global->properties['hours'] = $_hours; $_hours =& $global->properties['hours']; }
$_hours = $x112;
$x113 = $_minutes;
if (!JS::toBoolean($x113, $global)) {
$x113 = 0; }
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x113;
$x114 = $_seconds;
if (!JS::toBoolean($x114, $global)) {
$x114 = 0; }
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x114;
$x115 = $_ms;
if (!JS::toBoolean($x115, $global)) {
$x115 = 0; }
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x115;
$_d->value = mktime($_hours,$_minutes,$_seconds,$_month,$_date,$_year) +$_ms/ 1000;;
};
};
return $_d;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$scope->properties[\'Date\']=$fn;$_Date=&$scope->properties[\'Date\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){$x3=clone JS::$objectTemplate;unset($x5,$W5,$S5,$U5);$x13=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',3,11,\'<image>/09_date.js\');$x5=&$x13[0];list(,$W5,$S5,$U5)=$x13;$x4=$x5;$x3->prototype=$x4;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,11,\'<image>/09_date.js\');$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x18=$x17($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'){$x18->properties[\'file\']=\'<image>/09_date.js\';$x18->properties[\'line\']=3;$x18->properties[\'column\']=11;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,3,11,\'<image>/09_date.js\');}$x14=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x15=$x14($global,$x3,$_Date,array($_year,$_month,$_date,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x4=$x15;if(is_object($x4)&&$x4!==JS::$undefined){$x3=$x4;}if($x3===JS::$undefined||$x3===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,77,\'<image>/09_date.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;$x21=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x22=$x21($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x22->class)&&$x22->class===\'Error\'){$x22->properties[\'file\']=\'<image>/09_date.js\';$x22->properties[\'line\']=3;$x22->properties[\'column\']=77;$x22->attributes[\'file\']=$x22->attributes[\'line\']=$x22->attributes[\'column\']=0;}throw new JSException($x22,3,77,\'<image>/09_date.js\');}$x19=JS::toObject($x3,$global);unset($x23,$W23,$S23,$U23);$x24=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x19,(string)\'toString\',3,77,\'<image>/09_date.js\');$x23=&$x24[0];list(,$W23,$S23,$U23)=$x24;if(!(is_object($x23)&&isset($x23->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,77,\'<image>/09_date.js\');$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x29=$x28($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'){$x29->properties[\'file\']=\'<image>/09_date.js\';$x29->properties[\'line\']=3;$x29->properties[\'column\']=77;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,3,77,\'<image>/09_date.js\');}$x25=$x23->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x26=$x25($global,$x19,$x23,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x26;}$x30=clone JS::$objectTemplate;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=$x30;$_d->prototype=$_Date->properties[\'prototype\'];$_d->class=\'Date\';$_d->extensible=TRUE;$x31=(((gettype($_year)===gettype(JS::$undefined)&&$_year===JS::$undefined))||(((is_float($_year)||is_int($_year))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_year==JS::$undefined));if(JS::toBoolean($x31,$global)){$_d->value=time();}else{$x32=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x32,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x33=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'arguments\',15,15,\'<image>/09_date.js\');$_arguments=&$x33[0];list(,$Warguments,$Sarguments,$Uarguments)=$x33;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x34=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',15,15,\'<image>/09_date.js\');$_ReferenceError=&$x34[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x34;$x35=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',15,15);$x36=$x35($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x36->class)&&$x36->class===\'Error\'){$x36->properties[\'file\']=\'<image>/09_date.js\';$x36->properties[\'line\']=15;$x36->properties[\'column\']=15;$x36->attributes[\'file\']=$x36->attributes[\'line\']=$x36->attributes[\'column\']=0;}throw new JSException($x36,15,15,\'<image>/09_date.js\');}unset($x37,$W37,$S37,$U37);$x38=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_arguments,(string)0,15,24,\'<image>/09_date.js\');$x37=&$x38[0];list(,$W37,$S37,$U37)=$x38;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x37;$x41=$_value;$x41=($x41===JS::$undefined?\'undefined\':(is_int($x41)||is_float($x41)?\'number\':(is_bool($x41)?\'boolean\':(is_string($x41)?\'string\':(is_object($x41)&&isset($x41->call)?\'function\':\'object\')))));$x40=(((gettype($x41)===gettype(\'object\')&&$x41===\'object\'))||(((is_float($x41)||is_int($x41))&&(is_float(\'object\')||is_int(\'object\')))&&$x41==\'object\'));$x39=$x40;if(JS::toBoolean($x39,$global)){$x42=!(((gettype($_value)===gettype(NULL)&&$_value===NULL))||(((is_float($_value)||is_int($_value))&&(is_float(NULL)||is_int(NULL)))&&$_value==NULL));$x39=$x42;}if(JS::toBoolean($x39,$global)){unset($x44,$W44,$S44,$U44);$x45=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,(string)\'valueOf\',17,20,\'<image>/09_date.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;$x46=$x44;$x46=($x46===JS::$undefined?\'undefined\':(is_int($x46)||is_float($x46)?\'number\':(is_bool($x46)?\'boolean\':(is_string($x46)?\'string\':(is_object($x46)&&isset($x46->call)?\'function\':\'object\')))));$x43=(((gettype($x46)===gettype(\'function\')&&$x46===\'function\'))||(((is_float($x46)||is_int($x46))&&(is_float(\'function\')||is_int(\'function\')))&&$x46==\'function\'));if(JS::toBoolean($x43,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',18,26,\'<image>/09_date.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x50=$x49($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'){$x50->properties[\'file\']=\'<image>/09_date.js\';$x50->properties[\'line\']=18;$x50->properties[\'column\']=26;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,18,26,\'<image>/09_date.js\');}$x47=JS::toObject($_value,$global);unset($x51,$W51,$S51,$U51);$x52=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x47,(string)\'valueOf\',18,26,\'<image>/09_date.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if(!(is_object($x51)&&isset($x51->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x55=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',18,26,\'<image>/09_date.js\');$_TypeError=&$x55[0];list(,$WTypeError,$STypeError,$UTypeError)=$x55;$x56=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x57=$x56($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x57->class)&&$x57->class===\'Error\'){$x57->properties[\'file\']=\'<image>/09_date.js\';$x57->properties[\'line\']=18;$x57->properties[\'column\']=26;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,18,26,\'<image>/09_date.js\');}$x53=$x51->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x54=$x53($global,$x47,$x51,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x54;}else{unset($x59,$W59,$S59,$U59);$x60=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,(string)\'toString\',20,27,\'<image>/09_date.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;$x61=$x59;$x61=($x61===JS::$undefined?\'undefined\':(is_int($x61)||is_float($x61)?\'number\':(is_bool($x61)?\'boolean\':(is_string($x61)?\'string\':(is_object($x61)&&isset($x61->call)?\'function\':\'object\')))));$x58=(((gettype($x61)===gettype(\'function\')&&$x61===\'function\'))||(((is_float($x61)||is_int($x61))&&(is_float(\'function\')||is_int(\'function\')))&&$x61==\'function\'));if(JS::toBoolean($x58,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',21,27,\'<image>/09_date.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x65=$x64($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'){$x65->properties[\'file\']=\'<image>/09_date.js\';$x65->properties[\'line\']=21;$x65->properties[\'column\']=27;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,21,27,\'<image>/09_date.js\');}$x62=JS::toObject($_value,$global);unset($x66,$W66,$S66,$U66);$x67=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x62,(string)\'toString\',21,27,\'<image>/09_date.js\');$x66=&$x67[0];list(,$W66,$S66,$U66)=$x67;if(!(is_object($x66)&&isset($x66->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',21,27,\'<image>/09_date.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x72=$x71($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'){$x72->properties[\'file\']=\'<image>/09_date.js\';$x72->properties[\'line\']=21;$x72->properties[\'column\']=27;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,21,27,\'<image>/09_date.js\');}$x68=$x66->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x69=$x68($global,$x62,$x66,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x69;}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',24,15,\'<image>/09_date.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x76=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',24,15,\'<image>/09_date.js\');$_ReferenceError=&$x76[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x76;$x77=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,15);$x78=$x77($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'){$x78->properties[\'file\']=\'<image>/09_date.js\';$x78->properties[\'line\']=24;$x78->properties[\'column\']=15;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,24,15,\'<image>/09_date.js\');}$x73=clone JS::$objectTemplate;unset($x79,$W79,$S79,$U79);$x80=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_TypeError,(string)\'prototype\',24,11,\'<image>/09_date.js\');$x79=&$x80[0];list(,$W79,$S79,$U79)=$x80;$x74=$x79;$x73->prototype=$x74;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'){$x84->properties[\'file\']=\'<image>/09_date.js\';$x84->properties[\'line\']=24;$x84->properties[\'column\']=11;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,24,11,\'<image>/09_date.js\');}$x81=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x82=$x81($global,$x73,$_TypeError,array(\'Date(): cannot get value of object argument given\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x74=$x82;if(is_object($x74)&&$x74!==JS::$undefined){$x73=$x74;}if(isset($x73->class)&&$x73->class===\'Error\'){$x73->properties[\'file\']=\'<image>/09_date.js\';$x73->properties[\'line\']=24;$x73->properties[\'column\']=5;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,24,5,\'<image>/09_date.js\');}}}else{if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=JS::toPrimitive($_value,$global);}$x86=$_value;$x86=($x86===JS::$undefined?\'undefined\':(is_int($x86)||is_float($x86)?\'number\':(is_bool($x86)?\'boolean\':(is_string($x86)?\'string\':(is_object($x86)&&isset($x86->call)?\'function\':\'object\')))));$x85=(((gettype($x86)===gettype(\'string\')&&$x86===\'string\'))||(((is_float($x86)||is_int($x86))&&(is_float(\'string\')||is_int(\'string\')))&&$x86==\'string\'));if(JS::toBoolean($x85,$global)){if($_Date===JS::$undefined||$_Date===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x88=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',31,22,\'<image>/09_date.js\');$_TypeError=&$x88[0];list(,$WTypeError,$STypeError,$UTypeError)=$x88;$x89=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x90=$x89($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x90->class)&&$x90->class===\'Error\'){$x90->properties[\'file\']=\'<image>/09_date.js\';$x90->properties[\'line\']=31;$x90->properties[\'column\']=22;$x90->attributes[\'file\']=$x90->attributes[\'line\']=$x90->attributes[\'column\']=0;}throw new JSException($x90,31,22,\'<image>/09_date.js\');}$x87=JS::toObject($_Date,$global);unset($x91,$W91,$S91,$U91);$x92=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x87,(string)\'parse\',31,22,\'<image>/09_date.js\');$x91=&$x92[0];list(,$W91,$S91,$U91)=$x92;if(!(is_object($x91)&&isset($x91->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',31,22,\'<image>/09_date.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x97=$x96($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'){$x97->properties[\'file\']=\'<image>/09_date.js\';$x97->properties[\'line\']=31;$x97->properties[\'column\']=22;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,31,22,\'<image>/09_date.js\');}$x93=$x91->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x94=$x93($global,$x87,$x91,array($_value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x94;}$_d->value=JS::toNumber($_value,$global)/1000;}else{$x99=JS::toPrimitive($_year,$global);$x100=JS::toPrimitive(0,$global);$x101=!(is_string($x99)&&is_string($x100)?strcmp($x99,$x100)<0:(!is_nan($x102=JS::toNumber($x99,$global))&&!is_nan($x103=JS::toNumber($x100,$global))&&$x102<$x103));$x98=$x101;if(JS::toBoolean($x98,$global)){$x104=JS::toPrimitive($_year,$global);$x105=JS::toPrimitive(99,$global);$x106=!(is_string($x105)&&is_string($x104)?strcmp($x105,$x104)<0:(!is_nan($x107=JS::toNumber($x105,$global))&&!is_nan($x108=JS::toNumber($x104,$global))&&$x107<$x108));$x98=$x106;}if(JS::toBoolean($x98,$global)){if($Uyear){$global->properties[\'year\']=$_year;$_year=&$global->properties[\'year\'];}$x109=JS::toPrimitive($_year,$global);$x110=JS::toPrimitive(1900,$global);$_year=(is_string($x109)||is_string($x110)?JS::toString($x109,$global).JS::toString($x110,$global):JS::toNumber($x109,$global)+JS::toNumber($x110,$global));}$x111=$_date;if(!JS::toBoolean($x111,$global)){$x111=1;}if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x111;$x112=$_hours;if(!JS::toBoolean($x112,$global)){$x112=0;}if($Uhours){$global->properties[\'hours\']=$_hours;$_hours=&$global->properties[\'hours\'];}$_hours=$x112;$x113=$_minutes;if(!JS::toBoolean($x113,$global)){$x113=0;}if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x113;$x114=$_seconds;if(!JS::toBoolean($x114,$global)){$x114=0;}if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x114;$x115=$_ms;if(!JS::toBoolean($x115,$global)){$x115=0;}if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x115;$_d->value=mktime($_hours,$_minutes,$_seconds,$_month,$_date,$_year)+$_ms/1000;}}return$_d;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x118 =& $scope->properties['arguments'];
$x118->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x118->properties[$i] = $args[$i];
$x118->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = strtotime($_string);
$x119 = (((gettype($_i) === gettype(false) && $_i === false))|| (((is_float($_i) || is_int($_i)) && (is_float(false) || is_int(false))) && $_i == false));
if (JS::toBoolean($x119, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x120 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NaN', 57, 10, '<image>/09_date.js');
$_NaN =& $x120[0]; list(,$WNaN,$SNaN,$UNaN) = $x120;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x121 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 57, 10, '<image>/09_date.js');
$_ReferenceError =& $x121[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x121;
$x122 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 57, 10);
$x123 = $x122($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error') {$x123->properties['file'] = '<image>/09_date.js';$x123->properties['line'] = 57;$x123->properties['column'] = 10;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 57, 10, '<image>/09_date.js');
}
return $_NaN;;
};
return $_i* 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x118=&$scope->properties[\'arguments\'];$x118->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x118->properties[$i]=$args[$i];$x118->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=strtotime($_string);$x119=(((gettype($_i)===gettype(false)&&$_i===false))||(((is_float($_i)||is_int($_i))&&(is_float(false)||is_int(false)))&&$_i==false));if(JS::toBoolean($x119,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x120=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NaN\',57,10,\'<image>/09_date.js\');$_NaN=&$x120[0];list(,$WNaN,$SNaN,$UNaN)=$x120;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x121=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',57,10,\'<image>/09_date.js\');$_ReferenceError=&$x121[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x121;$x122=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',57,10);$x123=$x122($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'){$x123->properties[\'file\']=\'<image>/09_date.js\';$x123->properties[\'line\']=57;$x123->properties[\'column\']=10;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,57,10,\'<image>/09_date.js\');}return$_NaN;}return$_i*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x129 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x129[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x129;
$x130 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x131 = $x130($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x131->class) && $x131->class === 'Error') {$x131->properties['file'] = $file;$x131->properties['line'] = $line;$x131->properties['column'] = $column;$x131->attributes['file'] = $x131->attributes['line'] = $x131->attributes['column'] = 0; }
throw new JSException($x131, $line, $column, $file);
}
$W128 = $S128 = $U128 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x128 =& $lookup->properties[$id]; $W128 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S128 = $lookup->setters[$id]; }
else { $x128 = JS::$undefined; $U128 = TRUE; }
return array(&$x128, $W128, $S128, $U128);
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x129=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x129[0];list(,$WTypeError,$STypeError,$UTypeError)=$x129;$x130=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x131=$x130($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x131->class)&&$x131->class===\'Error\'){$x131->properties[\'file\']=$file;$x131->properties[\'line\']=$line;$x131->properties[\'column\']=$column;$x131->attributes[\'file\']=$x131->attributes[\'line\']=$x131->attributes[\'column\']=0;}throw new JSException($x131,$line,$column,$file);}$W128=$S128=$U128=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x128=&$lookup->properties[$id];$W128=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S128=$lookup->setters[$id];}else{$x128=JS::$undefined;$U128=TRUE;}return array(&$x128,$W128,$S128,$U128);}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x137 =& $scope->properties['arguments'];
$x137->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x137->properties[$i] = $args[$i];
$x137->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['year'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_year =& $scope->properties['year'];
$Uyear = FALSE;
$scope->properties['month'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$scope->properties['hours'] = array_key_exists(3, $args) ? $args[3] : JS::$undefined;
$_hours =& $scope->properties['hours'];
$Uhours = FALSE;
$scope->properties['minutes'] = array_key_exists(4, $args) ? $args[4] : JS::$undefined;
$_minutes =& $scope->properties['minutes'];
$Uminutes = FALSE;
$scope->properties['seconds'] = array_key_exists(5, $args) ? $args[5] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(6, $args) ? $args[6] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x140 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NotImplementedError', 64, 12, '<image>/09_date.js');
$_NotImplementedError =& $x140[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x140;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x141 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 64, 12, '<image>/09_date.js');
$_ReferenceError =& $x141[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x141;
$x142 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 12);
$x143 = $x142($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x143->class) && $x143->class === 'Error') {$x143->properties['file'] = '<image>/09_date.js';$x143->properties['line'] = 64;$x143->properties['column'] = 12;$x143->attributes['file'] = $x143->attributes['line'] = $x143->attributes['column'] = 0; }
throw new JSException($x143, 64, 12, '<image>/09_date.js');
}
$x138 = clone JS::$objectTemplate;
unset($x144, $W144, $S144, $U144);
$x145 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, (string) 'prototype', 64, 8, '<image>/09_date.js');
$x144 =& $x145[0]; list(,$W144,$S144,$U144) = $x145;
$x139 = $x144;
$x138->prototype = $x139;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x148 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 64, 8, '<image>/09_date.js');
$_TypeError =& $x148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x148;
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x150 = $x149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error') {$x150->properties['file'] = '<image>/09_date.js';$x150->properties['line'] = 64;$x150->properties['column'] = 8;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 64, 8, '<image>/09_date.js');
}
$x146 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x147 = $x146($global, $x138, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x139 = $x147;
if (is_object($x139) && $x139 !== JS::$undefined) { $x138 = $x139; }
if (isset($x138->class) && $x138->class === 'Error') {$x138->properties['file'] = '<image>/09_date.js';$x138->properties['line'] = 64;$x138->properties['column'] = 2;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 64, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x137=&$scope->properties[\'arguments\'];$x137->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x137->properties[$i]=$args[$i];$x137->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x140=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NotImplementedError\',64,12,\'<image>/09_date.js\');$_NotImplementedError=&$x140[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x140;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x141=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',64,12,\'<image>/09_date.js\');$_ReferenceError=&$x141[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x141;$x142=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,12);$x143=$x142($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x143->class)&&$x143->class===\'Error\'){$x143->properties[\'file\']=\'<image>/09_date.js\';$x143->properties[\'line\']=64;$x143->properties[\'column\']=12;$x143->attributes[\'file\']=$x143->attributes[\'line\']=$x143->attributes[\'column\']=0;}throw new JSException($x143,64,12,\'<image>/09_date.js\');}$x138=clone JS::$objectTemplate;unset($x144,$W144,$S144,$U144);$x145=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,(string)\'prototype\',64,8,\'<image>/09_date.js\');$x144=&$x145[0];list(,$W144,$S144,$U144)=$x145;$x139=$x144;$x138->prototype=$x139;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x148=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',64,8,\'<image>/09_date.js\');$_TypeError=&$x148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x148;$x149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x150=$x149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x150->class)&&$x150->class===\'Error\'){$x150->properties[\'file\']=\'<image>/09_date.js\';$x150->properties[\'line\']=64;$x150->properties[\'column\']=8;$x150->attributes[\'file\']=$x150->attributes[\'line\']=$x150->attributes[\'column\']=0;}throw new JSException($x150,64,8,\'<image>/09_date.js\');}$x146=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x147=$x146($global,$x138,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x139=$x147;if(is_object($x139)&&$x139!==JS::$undefined){$x138=$x139;}if(isset($x138->class)&&$x138->class===\'Error\'){$x138->properties[\'file\']=\'<image>/09_date.js\';$x138->properties[\'line\']=64;$x138->properties[\'column\']=2;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,64,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x161 =& $scope->properties['arguments'];
$x161->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x161->properties[$i] = $args[$i];
$x161->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x164 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 68, 13, '<image>/09_date.js');
$_Date =& $x164[0]; list(,$WDate,$SDate,$UDate) = $x164;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x165 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 68, 13, '<image>/09_date.js');
$_ReferenceError =& $x165[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x165;
$x166 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 13);
$x167 = $x166($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error') {$x167->properties['file'] = '<image>/09_date.js';$x167->properties['line'] = 68;$x167->properties['column'] = 13;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 68, 13, '<image>/09_date.js');
}
$x162 = clone JS::$objectTemplate;
unset($x168, $W168, $S168, $U168);
$x169 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 68, 9, '<image>/09_date.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
$x163 = $x168;
$x162->prototype = $x163;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x172 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 68, 9, '<image>/09_date.js');
$_TypeError =& $x172[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x172;
$x173 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x174 = $x173($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x174->class) && $x174->class === 'Error') {$x174->properties['file'] = '<image>/09_date.js';$x174->properties['line'] = 68;$x174->properties['column'] = 9;$x174->attributes['file'] = $x174->attributes['line'] = $x174->attributes['column'] = 0; }
throw new JSException($x174, 68, 9, '<image>/09_date.js');
}
$x170 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x171 = $x170($global, $x162, $_Date, array(time() * 1000), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x163 = $x171;
if (is_object($x163) && $x163 !== JS::$undefined) { $x162 = $x163; }
return $x162;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x161=&$scope->properties[\'arguments\'];$x161->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x161->properties[$i]=$args[$i];$x161->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x164=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',68,13,\'<image>/09_date.js\');$_Date=&$x164[0];list(,$WDate,$SDate,$UDate)=$x164;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x165=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',68,13,\'<image>/09_date.js\');$_ReferenceError=&$x165[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x165;$x166=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,13);$x167=$x166($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x167->class)&&$x167->class===\'Error\'){$x167->properties[\'file\']=\'<image>/09_date.js\';$x167->properties[\'line\']=68;$x167->properties[\'column\']=13;$x167->attributes[\'file\']=$x167->attributes[\'line\']=$x167->attributes[\'column\']=0;}throw new JSException($x167,68,13,\'<image>/09_date.js\');}$x162=clone JS::$objectTemplate;unset($x168,$W168,$S168,$U168);$x169=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',68,9,\'<image>/09_date.js\');$x168=&$x169[0];list(,$W168,$S168,$U168)=$x169;$x163=$x168;$x162->prototype=$x163;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x172=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',68,9,\'<image>/09_date.js\');$_TypeError=&$x172[0];list(,$WTypeError,$STypeError,$UTypeError)=$x172;$x173=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x174=$x173($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x174->class)&&$x174->class===\'Error\'){$x174->properties[\'file\']=\'<image>/09_date.js\';$x174->properties[\'line\']=68;$x174->properties[\'column\']=9;$x174->attributes[\'file\']=$x174->attributes[\'line\']=$x174->attributes[\'column\']=0;}throw new JSException($x174,68,9,\'<image>/09_date.js\');}$x170=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x171=$x170($global,$x162,$_Date,array(time()*1000),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x163=$x171;if(is_object($x163)&&$x163!==JS::$undefined){$x162=$x163;}return$x162;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x208 =& $scope->properties['arguments'];
$x208->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x208->properties[$i] = $args[$i];
$x208->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x208=&$scope->properties[\'arguments\'];$x208->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x208->properties[$i]=$args[$i];$x208->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x221 =& $scope->properties['arguments'];
$x221->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x221->properties[$i] = $args[$i];
$x221->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x221=&$scope->properties[\'arguments\'];$x221->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x221->properties[$i]=$args[$i];$x221->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x234 =& $scope->properties['arguments'];
$x234->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x234->properties[$i] = $args[$i];
$x234->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x234=&$scope->properties[\'arguments\'];$x234->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x234->properties[$i]=$args[$i];$x234->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x289 =& $scope->properties['arguments'];
$x289->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x289->properties[$i] = $args[$i];
$x289->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value * 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x289=&$scope->properties[\'arguments\'];$x289->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x289->properties[$i]=$args[$i];$x289->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x316 =& $scope->properties['arguments'];
$x316->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x316->properties[$i] = $args[$i];
$x316->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('Y', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x316=&$scope->properties[\'arguments\'];$x316->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x316->properties[$i]=$args[$i];$x316->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'Y\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x329 =& $scope->properties['arguments'];
$x329->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x329->properties[$i] = $args[$i];
$x329->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x332 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NotImplementedError', 105, 12, '<image>/09_date.js');
$_NotImplementedError =& $x332[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x332;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x333 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 105, 12, '<image>/09_date.js');
$_ReferenceError =& $x333[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x333;
$x334 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 12);
$x335 = $x334($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x335->class) && $x335->class === 'Error') {$x335->properties['file'] = '<image>/09_date.js';$x335->properties['line'] = 105;$x335->properties['column'] = 12;$x335->attributes['file'] = $x335->attributes['line'] = $x335->attributes['column'] = 0; }
throw new JSException($x335, 105, 12, '<image>/09_date.js');
}
$x330 = clone JS::$objectTemplate;
unset($x336, $W336, $S336, $U336);
$x337 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, (string) 'prototype', 105, 8, '<image>/09_date.js');
$x336 =& $x337[0]; list(,$W336,$S336,$U336) = $x337;
$x331 = $x336;
$x330->prototype = $x331;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x340 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 105, 8, '<image>/09_date.js');
$_TypeError =& $x340[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x340;
$x341 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x342 = $x341($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x342->class) && $x342->class === 'Error') {$x342->properties['file'] = '<image>/09_date.js';$x342->properties['line'] = 105;$x342->properties['column'] = 8;$x342->attributes['file'] = $x342->attributes['line'] = $x342->attributes['column'] = 0; }
throw new JSException($x342, 105, 8, '<image>/09_date.js');
}
$x338 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x339 = $x338($global, $x330, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x331 = $x339;
if (is_object($x331) && $x331 !== JS::$undefined) { $x330 = $x331; }
if (isset($x330->class) && $x330->class === 'Error') {$x330->properties['file'] = '<image>/09_date.js';$x330->properties['line'] = 105;$x330->properties['column'] = 2;$x330->attributes['file'] = $x330->attributes['line'] = $x330->attributes['column'] = 0; }
throw new JSException($x330, 105, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x329=&$scope->properties[\'arguments\'];$x329->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x329->properties[$i]=$args[$i];$x329->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x332=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NotImplementedError\',105,12,\'<image>/09_date.js\');$_NotImplementedError=&$x332[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x332;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x333=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',105,12,\'<image>/09_date.js\');$_ReferenceError=&$x333[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x333;$x334=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,12);$x335=$x334($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x335->class)&&$x335->class===\'Error\'){$x335->properties[\'file\']=\'<image>/09_date.js\';$x335->properties[\'line\']=105;$x335->properties[\'column\']=12;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,105,12,\'<image>/09_date.js\');}$x330=clone JS::$objectTemplate;unset($x336,$W336,$S336,$U336);$x337=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,(string)\'prototype\',105,8,\'<image>/09_date.js\');$x336=&$x337[0];list(,$W336,$S336,$U336)=$x337;$x331=$x336;$x330->prototype=$x331;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x340=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',105,8,\'<image>/09_date.js\');$_TypeError=&$x340[0];list(,$WTypeError,$STypeError,$UTypeError)=$x340;$x341=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x342=$x341($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x342->class)&&$x342->class===\'Error\'){$x342->properties[\'file\']=\'<image>/09_date.js\';$x342->properties[\'line\']=105;$x342->properties[\'column\']=8;$x342->attributes[\'file\']=$x342->attributes[\'line\']=$x342->attributes[\'column\']=0;}throw new JSException($x342,105,8,\'<image>/09_date.js\');}$x338=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x339=$x338($global,$x330,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x331=$x339;if(is_object($x331)&&$x331!==JS::$undefined){$x330=$x331;}if(isset($x330->class)&&$x330->class===\'Error\'){$x330->properties[\'file\']=\'<image>/09_date.js\';$x330->properties[\'line\']=105;$x330->properties[\'column\']=2;$x330->attributes[\'file\']=$x330->attributes[\'line\']=$x330->attributes[\'column\']=0;}throw new JSException($x330,105,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x355 =& $scope->properties['arguments'];
$x355->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x355->properties[$i] = $args[$i];
$x355->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x357 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 109, 25, '<image>/09_date.js');
$_TypeError =& $x357[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x357;
$x358 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x359 = $x358($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x359->class) && $x359->class === 'Error') {$x359->properties['file'] = '<image>/09_date.js';$x359->properties['line'] = 109;$x359->properties['column'] = 25;$x359->attributes['file'] = $x359->attributes['line'] = $x359->attributes['column'] = 0; }
throw new JSException($x359, 109, 25, '<image>/09_date.js');
}
$x356 = JS::toObject($leThis, $global);
unset($x360, $W360, $S360, $U360);
$x361 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x356, (string) 'getFullYear', 109, 25, '<image>/09_date.js');
$x360 =& $x361[0]; list(,$W360,$S360,$U360) = $x361;
if (!(is_object($x360) && isset($x360->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x364 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 109, 25, '<image>/09_date.js');
$_TypeError =& $x364[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x364;
$x365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x366 = $x365($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x366->class) && $x366->class === 'Error') {$x366->properties['file'] = '<image>/09_date.js';$x366->properties['line'] = 109;$x366->properties['column'] = 25;$x366->attributes['file'] = $x366->attributes['line'] = $x366->attributes['column'] = 0; }
throw new JSException($x366, 109, 25, '<image>/09_date.js');
}
$x362 = $x360->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x363 = $x362($global, $x356, $x360, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return (JS::toNumber($x363, $global) - JS::toNumber(1900, $global));
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x355=&$scope->properties[\'arguments\'];$x355->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x355->properties[$i]=$args[$i];$x355->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x357=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',109,25,\'<image>/09_date.js\');$_TypeError=&$x357[0];list(,$WTypeError,$STypeError,$UTypeError)=$x357;$x358=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x359=$x358($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x359->class)&&$x359->class===\'Error\'){$x359->properties[\'file\']=\'<image>/09_date.js\';$x359->properties[\'line\']=109;$x359->properties[\'column\']=25;$x359->attributes[\'file\']=$x359->attributes[\'line\']=$x359->attributes[\'column\']=0;}throw new JSException($x359,109,25,\'<image>/09_date.js\');}$x356=JS::toObject($leThis,$global);unset($x360,$W360,$S360,$U360);$x361=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x356,(string)\'getFullYear\',109,25,\'<image>/09_date.js\');$x360=&$x361[0];list(,$W360,$S360,$U360)=$x361;if(!(is_object($x360)&&isset($x360->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x364=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',109,25,\'<image>/09_date.js\');$_TypeError=&$x364[0];list(,$WTypeError,$STypeError,$UTypeError)=$x364;$x365=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x366=$x365($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x366->class)&&$x366->class===\'Error\'){$x366->properties[\'file\']=\'<image>/09_date.js\';$x366->properties[\'line\']=109;$x366->properties[\'column\']=25;$x366->attributes[\'file\']=$x366->attributes[\'line\']=$x366->attributes[\'column\']=0;}throw new JSException($x366,109,25,\'<image>/09_date.js\');}$x362=$x360->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x363=$x362($global,$x356,$x360,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return(JS::toNumber($x363,$global)-JS::toNumber(1900,$global));return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x393 =& $scope->properties['arguments'];
$x393->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x393->properties[$i] = $args[$i];
$x393->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('n', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x393=&$scope->properties[\'arguments\'];$x393->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x393->properties[$i]=$args[$i];$x393->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'n\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x420 =& $scope->properties['arguments'];
$x420->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x420->properties[$i] = $args[$i];
$x420->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('j', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x420=&$scope->properties[\'arguments\'];$x420->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x420->properties[$i]=$args[$i];$x420->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'j\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_17($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
return (int) date('w', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x447=&$scope->properties[\'arguments\'];$x447->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x447->properties[$i]=$args[$i];$x447->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'w\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x474 =& $scope->properties['arguments'];
$x474->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x474->properties[$i] = $args[$i];
$x474->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('G', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x474=&$scope->properties[\'arguments\'];$x474->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x474->properties[$i]=$args[$i];$x474->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'G\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x501 =& $scope->properties['arguments'];
$x501->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x501->properties[$i] = $args[$i];
$x501->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('i', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x501=&$scope->properties[\'arguments\'];$x501->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x501->properties[$i]=$args[$i];$x501->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'i\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x528 =& $scope->properties['arguments'];
$x528->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x528->properties[$i] = $args[$i];
$x528->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x528=&$scope->properties[\'arguments\'];$x528->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x528->properties[$i]=$args[$i];$x528->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x555 =& $scope->properties['arguments'];
$x555->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x555->properties[$i] = $args[$i];
$x555->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) (($leThis->value - (int) $leThis->value) * 1000);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x555=&$scope->properties[\'arguments\'];$x555->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x555->properties[$i]=$args[$i];$x555->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)(($leThis->value-(int)$leThis->value)*1000);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x582 =& $scope->properties['arguments'];
$x582->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x582->properties[$i] = $args[$i];
$x582->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Z', $leThis->value) / 60;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x582=&$scope->properties[\'arguments\'];$x582->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x582->properties[$i]=$args[$i];$x582->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Z\',$leThis->value)/60;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x595 =& $scope->properties['arguments'];
$x595->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x595->properties[$i] = $args[$i];
$x595->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['time'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_time =& $scope->properties['time'];
$Utime = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$leThis->value = JS::toNumber($_time/ 1000, $global);
return $leThis->value * 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x595=&$scope->properties[\'arguments\'];$x595->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x595->properties[$i]=$args[$i];$x595->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'time\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_time=&$scope->properties[\'time\'];$Utime=FALSE;$global->scope[++$global->scope_sp]=$scope;$leThis->value=JS::toNumber($_time/1000,$global);return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x608 =& $scope->properties['arguments'];
$x608->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x608->properties[$i] = $args[$i];
$x608->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['ms'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x611 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 166, 20, '<image>/09_date.js');
$_Date =& $x611[0]; list(,$WDate,$SDate,$UDate) = $x611;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x612 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 166, 20, '<image>/09_date.js');
$_ReferenceError =& $x612[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x612;
$x613 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 20);
$x614 = $x613($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x614->class) && $x614->class === 'Error') {$x614->properties['file'] = '<image>/09_date.js';$x614->properties['line'] = 166;$x614->properties['column'] = 20;$x614->attributes['file'] = $x614->attributes['line'] = $x614->attributes['column'] = 0; }
throw new JSException($x614, 166, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x616 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 19, '<image>/09_date.js');
$_TypeError =& $x616[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x616;
$x617 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x618 = $x617($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x618->class) && $x618->class === 'Error') {$x618->properties['file'] = '<image>/09_date.js';$x618->properties['line'] = 167;$x618->properties['column'] = 19;$x618->attributes['file'] = $x618->attributes['line'] = $x618->attributes['column'] = 0; }
throw new JSException($x618, 167, 19, '<image>/09_date.js');
}
$x615 = JS::toObject($leThis, $global);
unset($x619, $W619, $S619, $U619);
$x620 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x615, (string) 'getFullYear', 167, 19, '<image>/09_date.js');
$x619 =& $x620[0]; list(,$W619,$S619,$U619) = $x620;
if (!(is_object($x619) && isset($x619->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x623 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 19, '<image>/09_date.js');
$_TypeError =& $x623[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x623;
$x624 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x625 = $x624($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x625->class) && $x625->class === 'Error') {$x625->properties['file'] = '<image>/09_date.js';$x625->properties['line'] = 167;$x625->properties['column'] = 19;$x625->attributes['file'] = $x625->attributes['line'] = $x625->attributes['column'] = 0; }
throw new JSException($x625, 167, 19, '<image>/09_date.js');
}
$x621 = $x619->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x622 = $x621($global, $x615, $x619, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x627 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 36, '<image>/09_date.js');
$_TypeError =& $x627[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x627;
$x628 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x629 = $x628($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x629->class) && $x629->class === 'Error') {$x629->properties['file'] = '<image>/09_date.js';$x629->properties['line'] = 167;$x629->properties['column'] = 36;$x629->attributes['file'] = $x629->attributes['line'] = $x629->attributes['column'] = 0; }
throw new JSException($x629, 167, 36, '<image>/09_date.js');
}
$x626 = JS::toObject($leThis, $global);
unset($x630, $W630, $S630, $U630);
$x631 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x626, (string) 'getMonth', 167, 36, '<image>/09_date.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
if (!(is_object($x630) && isset($x630->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 36, '<image>/09_date.js');
$_TypeError =& $x634[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x634;
$x635 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x636 = $x635($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x636->class) && $x636->class === 'Error') {$x636->properties['file'] = '<image>/09_date.js';$x636->properties['line'] = 167;$x636->properties['column'] = 36;$x636->attributes['file'] = $x636->attributes['line'] = $x636->attributes['column'] = 0; }
throw new JSException($x636, 167, 36, '<image>/09_date.js');
}
$x632 = $x630->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x633 = $x632($global, $x626, $x630, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x638 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 52, '<image>/09_date.js');
$_TypeError =& $x638[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x638;
$x639 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x640 = $x639($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x640->class) && $x640->class === 'Error') {$x640->properties['file'] = '<image>/09_date.js';$x640->properties['line'] = 167;$x640->properties['column'] = 52;$x640->attributes['file'] = $x640->attributes['line'] = $x640->attributes['column'] = 0; }
throw new JSException($x640, 167, 52, '<image>/09_date.js');
}
$x637 = JS::toObject($leThis, $global);
unset($x641, $W641, $S641, $U641);
$x642 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x637, (string) 'getDate', 167, 52, '<image>/09_date.js');
$x641 =& $x642[0]; list(,$W641,$S641,$U641) = $x642;
if (!(is_object($x641) && isset($x641->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x645 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 52, '<image>/09_date.js');
$_TypeError =& $x645[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x645;
$x646 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x647 = $x646($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x647->class) && $x647->class === 'Error') {$x647->properties['file'] = '<image>/09_date.js';$x647->properties['line'] = 167;$x647->properties['column'] = 52;$x647->attributes['file'] = $x647->attributes['line'] = $x647->attributes['column'] = 0; }
throw new JSException($x647, 167, 52, '<image>/09_date.js');
}
$x643 = $x641->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x644 = $x643($global, $x637, $x641, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x649 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 16, '<image>/09_date.js');
$_TypeError =& $x649[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x649;
$x650 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x651 = $x650($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x651->class) && $x651->class === 'Error') {$x651->properties['file'] = '<image>/09_date.js';$x651->properties['line'] = 168;$x651->properties['column'] = 16;$x651->attributes['file'] = $x651->attributes['line'] = $x651->attributes['column'] = 0; }
throw new JSException($x651, 168, 16, '<image>/09_date.js');
}
$x648 = JS::toObject($leThis, $global);
unset($x652, $W652, $S652, $U652);
$x653 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x648, (string) 'getHours', 168, 16, '<image>/09_date.js');
$x652 =& $x653[0]; list(,$W652,$S652,$U652) = $x653;
if (!(is_object($x652) && isset($x652->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x656 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 16, '<image>/09_date.js');
$_TypeError =& $x656[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x656;
$x657 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x658 = $x657($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x658->class) && $x658->class === 'Error') {$x658->properties['file'] = '<image>/09_date.js';$x658->properties['line'] = 168;$x658->properties['column'] = 16;$x658->attributes['file'] = $x658->attributes['line'] = $x658->attributes['column'] = 0; }
throw new JSException($x658, 168, 16, '<image>/09_date.js');
}
$x654 = $x652->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x655 = $x654($global, $x648, $x652, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x660 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 35, '<image>/09_date.js');
$_TypeError =& $x660[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x660;
$x661 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x662 = $x661($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x662->class) && $x662->class === 'Error') {$x662->properties['file'] = '<image>/09_date.js';$x662->properties['line'] = 168;$x662->properties['column'] = 35;$x662->attributes['file'] = $x662->attributes['line'] = $x662->attributes['column'] = 0; }
throw new JSException($x662, 168, 35, '<image>/09_date.js');
}
$x659 = JS::toObject($leThis, $global);
unset($x663, $W663, $S663, $U663);
$x664 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x659, (string) 'getMinutes', 168, 35, '<image>/09_date.js');
$x663 =& $x664[0]; list(,$W663,$S663,$U663) = $x664;
if (!(is_object($x663) && isset($x663->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x667 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 35, '<image>/09_date.js');
$_TypeError =& $x667[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x667;
$x668 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x669 = $x668($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x669->class) && $x669->class === 'Error') {$x669->properties['file'] = '<image>/09_date.js';$x669->properties['line'] = 168;$x669->properties['column'] = 35;$x669->attributes['file'] = $x669->attributes['line'] = $x669->attributes['column'] = 0; }
throw new JSException($x669, 168, 35, '<image>/09_date.js');
}
$x665 = $x663->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x666 = $x665($global, $x659, $x663, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x671 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 54, '<image>/09_date.js');
$_TypeError =& $x671[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x671;
$x672 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x673 = $x672($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x673->class) && $x673->class === 'Error') {$x673->properties['file'] = '<image>/09_date.js';$x673->properties['line'] = 168;$x673->properties['column'] = 54;$x673->attributes['file'] = $x673->attributes['line'] = $x673->attributes['column'] = 0; }
throw new JSException($x673, 168, 54, '<image>/09_date.js');
}
$x670 = JS::toObject($leThis, $global);
unset($x674, $W674, $S674, $U674);
$x675 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x670, (string) 'getSeconds', 168, 54, '<image>/09_date.js');
$x674 =& $x675[0]; list(,$W674,$S674,$U674) = $x675;
if (!(is_object($x674) && isset($x674->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x678 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 54, '<image>/09_date.js');
$_TypeError =& $x678[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x678;
$x679 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x680 = $x679($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x680->class) && $x680->class === 'Error') {$x680->properties['file'] = '<image>/09_date.js';$x680->properties['line'] = 168;$x680->properties['column'] = 54;$x680->attributes['file'] = $x680->attributes['line'] = $x680->attributes['column'] = 0; }
throw new JSException($x680, 168, 54, '<image>/09_date.js');
}
$x676 = $x674->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x677 = $x676($global, $x670, $x674, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x609 = clone JS::$objectTemplate;
unset($x681, $W681, $S681, $U681);
$x682 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 166, 16, '<image>/09_date.js');
$x681 =& $x682[0]; list(,$W681,$S681,$U681) = $x682;
$x610 = $x681;
$x609->prototype = $x610;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x685 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 166, 16, '<image>/09_date.js');
$_TypeError =& $x685[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x685;
$x686 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x687 = $x686($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x687->class) && $x687->class === 'Error') {$x687->properties['file'] = '<image>/09_date.js';$x687->properties['line'] = 166;$x687->properties['column'] = 16;$x687->attributes['file'] = $x687->attributes['line'] = $x687->attributes['column'] = 0; }
throw new JSException($x687, 166, 16, '<image>/09_date.js');
}
$x683 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x684 = $x683($global, $x609, $_Date, array($x622, $x633, $x644, $x655, $x666, $x677, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x610 = $x684;
if (is_object($x610) && $x610 !== JS::$undefined) { $x609 = $x610; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x609;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x608=&$scope->properties[\'arguments\'];$x608->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x608->properties[$i]=$args[$i];$x608->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'ms\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x611=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',166,20,\'<image>/09_date.js\');$_Date=&$x611[0];list(,$WDate,$SDate,$UDate)=$x611;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x612=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',166,20,\'<image>/09_date.js\');$_ReferenceError=&$x612[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x612;$x613=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,20);$x614=$x613($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x614->class)&&$x614->class===\'Error\'){$x614->properties[\'file\']=\'<image>/09_date.js\';$x614->properties[\'line\']=166;$x614->properties[\'column\']=20;$x614->attributes[\'file\']=$x614->attributes[\'line\']=$x614->attributes[\'column\']=0;}throw new JSException($x614,166,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x616=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,19,\'<image>/09_date.js\');$_TypeError=&$x616[0];list(,$WTypeError,$STypeError,$UTypeError)=$x616;$x617=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x618=$x617($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x618->class)&&$x618->class===\'Error\'){$x618->properties[\'file\']=\'<image>/09_date.js\';$x618->properties[\'line\']=167;$x618->properties[\'column\']=19;$x618->attributes[\'file\']=$x618->attributes[\'line\']=$x618->attributes[\'column\']=0;}throw new JSException($x618,167,19,\'<image>/09_date.js\');}$x615=JS::toObject($leThis,$global);unset($x619,$W619,$S619,$U619);$x620=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x615,(string)\'getFullYear\',167,19,\'<image>/09_date.js\');$x619=&$x620[0];list(,$W619,$S619,$U619)=$x620;if(!(is_object($x619)&&isset($x619->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x623=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,19,\'<image>/09_date.js\');$_TypeError=&$x623[0];list(,$WTypeError,$STypeError,$UTypeError)=$x623;$x624=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x625=$x624($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x625->class)&&$x625->class===\'Error\'){$x625->properties[\'file\']=\'<image>/09_date.js\';$x625->properties[\'line\']=167;$x625->properties[\'column\']=19;$x625->attributes[\'file\']=$x625->attributes[\'line\']=$x625->attributes[\'column\']=0;}throw new JSException($x625,167,19,\'<image>/09_date.js\');}$x621=$x619->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x622=$x621($global,$x615,$x619,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x627=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,36,\'<image>/09_date.js\');$_TypeError=&$x627[0];list(,$WTypeError,$STypeError,$UTypeError)=$x627;$x628=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x629=$x628($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x629->class)&&$x629->class===\'Error\'){$x629->properties[\'file\']=\'<image>/09_date.js\';$x629->properties[\'line\']=167;$x629->properties[\'column\']=36;$x629->attributes[\'file\']=$x629->attributes[\'line\']=$x629->attributes[\'column\']=0;}throw new JSException($x629,167,36,\'<image>/09_date.js\');}$x626=JS::toObject($leThis,$global);unset($x630,$W630,$S630,$U630);$x631=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x626,(string)\'getMonth\',167,36,\'<image>/09_date.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;if(!(is_object($x630)&&isset($x630->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x634=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,36,\'<image>/09_date.js\');$_TypeError=&$x634[0];list(,$WTypeError,$STypeError,$UTypeError)=$x634;$x635=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x636=$x635($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x636->class)&&$x636->class===\'Error\'){$x636->properties[\'file\']=\'<image>/09_date.js\';$x636->properties[\'line\']=167;$x636->properties[\'column\']=36;$x636->attributes[\'file\']=$x636->attributes[\'line\']=$x636->attributes[\'column\']=0;}throw new JSException($x636,167,36,\'<image>/09_date.js\');}$x632=$x630->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x633=$x632($global,$x626,$x630,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x638=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,52,\'<image>/09_date.js\');$_TypeError=&$x638[0];list(,$WTypeError,$STypeError,$UTypeError)=$x638;$x639=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x640=$x639($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x640->class)&&$x640->class===\'Error\'){$x640->properties[\'file\']=\'<image>/09_date.js\';$x640->properties[\'line\']=167;$x640->properties[\'column\']=52;$x640->attributes[\'file\']=$x640->attributes[\'line\']=$x640->attributes[\'column\']=0;}throw new JSException($x640,167,52,\'<image>/09_date.js\');}$x637=JS::toObject($leThis,$global);unset($x641,$W641,$S641,$U641);$x642=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x637,(string)\'getDate\',167,52,\'<image>/09_date.js\');$x641=&$x642[0];list(,$W641,$S641,$U641)=$x642;if(!(is_object($x641)&&isset($x641->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x645=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,52,\'<image>/09_date.js\');$_TypeError=&$x645[0];list(,$WTypeError,$STypeError,$UTypeError)=$x645;$x646=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x647=$x646($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x647->class)&&$x647->class===\'Error\'){$x647->properties[\'file\']=\'<image>/09_date.js\';$x647->properties[\'line\']=167;$x647->properties[\'column\']=52;$x647->attributes[\'file\']=$x647->attributes[\'line\']=$x647->attributes[\'column\']=0;}throw new JSException($x647,167,52,\'<image>/09_date.js\');}$x643=$x641->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x644=$x643($global,$x637,$x641,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x649=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,16,\'<image>/09_date.js\');$_TypeError=&$x649[0];list(,$WTypeError,$STypeError,$UTypeError)=$x649;$x650=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x651=$x650($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x651->class)&&$x651->class===\'Error\'){$x651->properties[\'file\']=\'<image>/09_date.js\';$x651->properties[\'line\']=168;$x651->properties[\'column\']=16;$x651->attributes[\'file\']=$x651->attributes[\'line\']=$x651->attributes[\'column\']=0;}throw new JSException($x651,168,16,\'<image>/09_date.js\');}$x648=JS::toObject($leThis,$global);unset($x652,$W652,$S652,$U652);$x653=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x648,(string)\'getHours\',168,16,\'<image>/09_date.js\');$x652=&$x653[0];list(,$W652,$S652,$U652)=$x653;if(!(is_object($x652)&&isset($x652->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x656=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,16,\'<image>/09_date.js\');$_TypeError=&$x656[0];list(,$WTypeError,$STypeError,$UTypeError)=$x656;$x657=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x658=$x657($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x658->class)&&$x658->class===\'Error\'){$x658->properties[\'file\']=\'<image>/09_date.js\';$x658->properties[\'line\']=168;$x658->properties[\'column\']=16;$x658->attributes[\'file\']=$x658->attributes[\'line\']=$x658->attributes[\'column\']=0;}throw new JSException($x658,168,16,\'<image>/09_date.js\');}$x654=$x652->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x655=$x654($global,$x648,$x652,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x660=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,35,\'<image>/09_date.js\');$_TypeError=&$x660[0];list(,$WTypeError,$STypeError,$UTypeError)=$x660;$x661=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x662=$x661($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x662->class)&&$x662->class===\'Error\'){$x662->properties[\'file\']=\'<image>/09_date.js\';$x662->properties[\'line\']=168;$x662->properties[\'column\']=35;$x662->attributes[\'file\']=$x662->attributes[\'line\']=$x662->attributes[\'column\']=0;}throw new JSException($x662,168,35,\'<image>/09_date.js\');}$x659=JS::toObject($leThis,$global);unset($x663,$W663,$S663,$U663);$x664=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x659,(string)\'getMinutes\',168,35,\'<image>/09_date.js\');$x663=&$x664[0];list(,$W663,$S663,$U663)=$x664;if(!(is_object($x663)&&isset($x663->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x667=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,35,\'<image>/09_date.js\');$_TypeError=&$x667[0];list(,$WTypeError,$STypeError,$UTypeError)=$x667;$x668=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x669=$x668($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x669->class)&&$x669->class===\'Error\'){$x669->properties[\'file\']=\'<image>/09_date.js\';$x669->properties[\'line\']=168;$x669->properties[\'column\']=35;$x669->attributes[\'file\']=$x669->attributes[\'line\']=$x669->attributes[\'column\']=0;}throw new JSException($x669,168,35,\'<image>/09_date.js\');}$x665=$x663->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x666=$x665($global,$x659,$x663,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x671=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,54,\'<image>/09_date.js\');$_TypeError=&$x671[0];list(,$WTypeError,$STypeError,$UTypeError)=$x671;$x672=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x673=$x672($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x673->class)&&$x673->class===\'Error\'){$x673->properties[\'file\']=\'<image>/09_date.js\';$x673->properties[\'line\']=168;$x673->properties[\'column\']=54;$x673->attributes[\'file\']=$x673->attributes[\'line\']=$x673->attributes[\'column\']=0;}throw new JSException($x673,168,54,\'<image>/09_date.js\');}$x670=JS::toObject($leThis,$global);unset($x674,$W674,$S674,$U674);$x675=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x670,(string)\'getSeconds\',168,54,\'<image>/09_date.js\');$x674=&$x675[0];list(,$W674,$S674,$U674)=$x675;if(!(is_object($x674)&&isset($x674->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x678=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,54,\'<image>/09_date.js\');$_TypeError=&$x678[0];list(,$WTypeError,$STypeError,$UTypeError)=$x678;$x679=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x680=$x679($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x680->class)&&$x680->class===\'Error\'){$x680->properties[\'file\']=\'<image>/09_date.js\';$x680->properties[\'line\']=168;$x680->properties[\'column\']=54;$x680->attributes[\'file\']=$x680->attributes[\'line\']=$x680->attributes[\'column\']=0;}throw new JSException($x680,168,54,\'<image>/09_date.js\');}$x676=$x674->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x677=$x676($global,$x670,$x674,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x609=clone JS::$objectTemplate;unset($x681,$W681,$S681,$U681);$x682=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',166,16,\'<image>/09_date.js\');$x681=&$x682[0];list(,$W681,$S681,$U681)=$x682;$x610=$x681;$x609->prototype=$x610;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x685=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',166,16,\'<image>/09_date.js\');$_TypeError=&$x685[0];list(,$WTypeError,$STypeError,$UTypeError)=$x685;$x686=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x687=$x686($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x687->class)&&$x687->class===\'Error\'){$x687->properties[\'file\']=\'<image>/09_date.js\';$x687->properties[\'line\']=166;$x687->properties[\'column\']=16;$x687->attributes[\'file\']=$x687->attributes[\'line\']=$x687->attributes[\'column\']=0;}throw new JSException($x687,166,16,\'<image>/09_date.js\');}$x683=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x684=$x683($global,$x609,$_Date,array($x622,$x633,$x644,$x655,$x666,$x677,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x610=$x684;if(is_object($x610)&&$x610!==JS::$undefined){$x609=$x610;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x609;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x714 =& $scope->properties['arguments'];
$x714->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x714->properties[$i] = $args[$i];
$x714->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['seconds'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x715 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x715, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x717 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 180, 28, '<image>/09_date.js');
$_TypeError =& $x717[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x717;
$x718 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x719 = $x718($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x719->class) && $x719->class === 'Error') {$x719->properties['file'] = '<image>/09_date.js';$x719->properties['line'] = 180;$x719->properties['column'] = 28;$x719->attributes['file'] = $x719->attributes['line'] = $x719->attributes['column'] = 0; }
throw new JSException($x719, 180, 28, '<image>/09_date.js');
}
$x716 = JS::toObject($leThis, $global);
unset($x720, $W720, $S720, $U720);
$x721 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x716, (string) 'getMilliseconds', 180, 28, '<image>/09_date.js');
$x720 =& $x721[0]; list(,$W720,$S720,$U720) = $x721;
if (!(is_object($x720) && isset($x720->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x724 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 180, 28, '<image>/09_date.js');
$_TypeError =& $x724[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x724;
$x725 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x726 = $x725($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x726->class) && $x726->class === 'Error') {$x726->properties['file'] = '<image>/09_date.js';$x726->properties['line'] = 180;$x726->properties['column'] = 28;$x726->attributes['file'] = $x726->attributes['line'] = $x726->attributes['column'] = 0; }
throw new JSException($x726, 180, 28, '<image>/09_date.js');
}
$x722 = $x720->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x723 = $x722($global, $x716, $x720, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x723;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x729 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 183, 20, '<image>/09_date.js');
$_Date =& $x729[0]; list(,$WDate,$SDate,$UDate) = $x729;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x730 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 183, 20, '<image>/09_date.js');
$_ReferenceError =& $x730[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x730;
$x731 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 20);
$x732 = $x731($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x732->class) && $x732->class === 'Error') {$x732->properties['file'] = '<image>/09_date.js';$x732->properties['line'] = 183;$x732->properties['column'] = 20;$x732->attributes['file'] = $x732->attributes['line'] = $x732->attributes['column'] = 0; }
throw new JSException($x732, 183, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x734 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 19, '<image>/09_date.js');
$_TypeError =& $x734[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x734;
$x735 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x736 = $x735($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x736->class) && $x736->class === 'Error') {$x736->properties['file'] = '<image>/09_date.js';$x736->properties['line'] = 184;$x736->properties['column'] = 19;$x736->attributes['file'] = $x736->attributes['line'] = $x736->attributes['column'] = 0; }
throw new JSException($x736, 184, 19, '<image>/09_date.js');
}
$x733 = JS::toObject($leThis, $global);
unset($x737, $W737, $S737, $U737);
$x738 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x733, (string) 'getFullYear', 184, 19, '<image>/09_date.js');
$x737 =& $x738[0]; list(,$W737,$S737,$U737) = $x738;
if (!(is_object($x737) && isset($x737->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x741 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 19, '<image>/09_date.js');
$_TypeError =& $x741[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x741;
$x742 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x743 = $x742($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x743->class) && $x743->class === 'Error') {$x743->properties['file'] = '<image>/09_date.js';$x743->properties['line'] = 184;$x743->properties['column'] = 19;$x743->attributes['file'] = $x743->attributes['line'] = $x743->attributes['column'] = 0; }
throw new JSException($x743, 184, 19, '<image>/09_date.js');
}
$x739 = $x737->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x740 = $x739($global, $x733, $x737, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x745 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 36, '<image>/09_date.js');
$_TypeError =& $x745[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x745;
$x746 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x747 = $x746($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x747->class) && $x747->class === 'Error') {$x747->properties['file'] = '<image>/09_date.js';$x747->properties['line'] = 184;$x747->properties['column'] = 36;$x747->attributes['file'] = $x747->attributes['line'] = $x747->attributes['column'] = 0; }
throw new JSException($x747, 184, 36, '<image>/09_date.js');
}
$x744 = JS::toObject($leThis, $global);
unset($x748, $W748, $S748, $U748);
$x749 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x744, (string) 'getMonth', 184, 36, '<image>/09_date.js');
$x748 =& $x749[0]; list(,$W748,$S748,$U748) = $x749;
if (!(is_object($x748) && isset($x748->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x752 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 36, '<image>/09_date.js');
$_TypeError =& $x752[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x752;
$x753 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x754 = $x753($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x754->class) && $x754->class === 'Error') {$x754->properties['file'] = '<image>/09_date.js';$x754->properties['line'] = 184;$x754->properties['column'] = 36;$x754->attributes['file'] = $x754->attributes['line'] = $x754->attributes['column'] = 0; }
throw new JSException($x754, 184, 36, '<image>/09_date.js');
}
$x750 = $x748->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x751 = $x750($global, $x744, $x748, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x756 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 52, '<image>/09_date.js');
$_TypeError =& $x756[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x756;
$x757 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x758 = $x757($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x758->class) && $x758->class === 'Error') {$x758->properties['file'] = '<image>/09_date.js';$x758->properties['line'] = 184;$x758->properties['column'] = 52;$x758->attributes['file'] = $x758->attributes['line'] = $x758->attributes['column'] = 0; }
throw new JSException($x758, 184, 52, '<image>/09_date.js');
}
$x755 = JS::toObject($leThis, $global);
unset($x759, $W759, $S759, $U759);
$x760 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x755, (string) 'getDate', 184, 52, '<image>/09_date.js');
$x759 =& $x760[0]; list(,$W759,$S759,$U759) = $x760;
if (!(is_object($x759) && isset($x759->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x763 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 52, '<image>/09_date.js');
$_TypeError =& $x763[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x763;
$x764 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x765 = $x764($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x765->class) && $x765->class === 'Error') {$x765->properties['file'] = '<image>/09_date.js';$x765->properties['line'] = 184;$x765->properties['column'] = 52;$x765->attributes['file'] = $x765->attributes['line'] = $x765->attributes['column'] = 0; }
throw new JSException($x765, 184, 52, '<image>/09_date.js');
}
$x761 = $x759->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x762 = $x761($global, $x755, $x759, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x767 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 16, '<image>/09_date.js');
$_TypeError =& $x767[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x767;
$x768 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x769 = $x768($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x769->class) && $x769->class === 'Error') {$x769->properties['file'] = '<image>/09_date.js';$x769->properties['line'] = 185;$x769->properties['column'] = 16;$x769->attributes['file'] = $x769->attributes['line'] = $x769->attributes['column'] = 0; }
throw new JSException($x769, 185, 16, '<image>/09_date.js');
}
$x766 = JS::toObject($leThis, $global);
unset($x770, $W770, $S770, $U770);
$x771 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x766, (string) 'getHours', 185, 16, '<image>/09_date.js');
$x770 =& $x771[0]; list(,$W770,$S770,$U770) = $x771;
if (!(is_object($x770) && isset($x770->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x774 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 16, '<image>/09_date.js');
$_TypeError =& $x774[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x774;
$x775 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x776 = $x775($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x776->class) && $x776->class === 'Error') {$x776->properties['file'] = '<image>/09_date.js';$x776->properties['line'] = 185;$x776->properties['column'] = 16;$x776->attributes['file'] = $x776->attributes['line'] = $x776->attributes['column'] = 0; }
throw new JSException($x776, 185, 16, '<image>/09_date.js');
}
$x772 = $x770->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x773 = $x772($global, $x766, $x770, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x778 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 35, '<image>/09_date.js');
$_TypeError =& $x778[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x778;
$x779 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x780 = $x779($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x780->class) && $x780->class === 'Error') {$x780->properties['file'] = '<image>/09_date.js';$x780->properties['line'] = 185;$x780->properties['column'] = 35;$x780->attributes['file'] = $x780->attributes['line'] = $x780->attributes['column'] = 0; }
throw new JSException($x780, 185, 35, '<image>/09_date.js');
}
$x777 = JS::toObject($leThis, $global);
unset($x781, $W781, $S781, $U781);
$x782 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x777, (string) 'getMinutes', 185, 35, '<image>/09_date.js');
$x781 =& $x782[0]; list(,$W781,$S781,$U781) = $x782;
if (!(is_object($x781) && isset($x781->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x785 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 35, '<image>/09_date.js');
$_TypeError =& $x785[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x785;
$x786 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x787 = $x786($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x787->class) && $x787->class === 'Error') {$x787->properties['file'] = '<image>/09_date.js';$x787->properties['line'] = 185;$x787->properties['column'] = 35;$x787->attributes['file'] = $x787->attributes['line'] = $x787->attributes['column'] = 0; }
throw new JSException($x787, 185, 35, '<image>/09_date.js');
}
$x783 = $x781->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x784 = $x783($global, $x777, $x781, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x727 = clone JS::$objectTemplate;
unset($x788, $W788, $S788, $U788);
$x789 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 183, 16, '<image>/09_date.js');
$x788 =& $x789[0]; list(,$W788,$S788,$U788) = $x789;
$x728 = $x788;
$x727->prototype = $x728;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x792 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 183, 16, '<image>/09_date.js');
$_TypeError =& $x792[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x792;
$x793 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x794 = $x793($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x794->class) && $x794->class === 'Error') {$x794->properties['file'] = '<image>/09_date.js';$x794->properties['line'] = 183;$x794->properties['column'] = 16;$x794->attributes['file'] = $x794->attributes['line'] = $x794->attributes['column'] = 0; }
throw new JSException($x794, 183, 16, '<image>/09_date.js');
}
$x790 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x791 = $x790($global, $x727, $_Date, array($x740, $x751, $x762, $x773, $x784, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x728 = $x791;
if (is_object($x728) && $x728 !== JS::$undefined) { $x727 = $x728; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x727;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x714=&$scope->properties[\'arguments\'];$x714->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x714->properties[$i]=$args[$i];$x714->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'seconds\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x715=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x715,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x717=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',180,28,\'<image>/09_date.js\');$_TypeError=&$x717[0];list(,$WTypeError,$STypeError,$UTypeError)=$x717;$x718=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x719=$x718($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x719->class)&&$x719->class===\'Error\'){$x719->properties[\'file\']=\'<image>/09_date.js\';$x719->properties[\'line\']=180;$x719->properties[\'column\']=28;$x719->attributes[\'file\']=$x719->attributes[\'line\']=$x719->attributes[\'column\']=0;}throw new JSException($x719,180,28,\'<image>/09_date.js\');}$x716=JS::toObject($leThis,$global);unset($x720,$W720,$S720,$U720);$x721=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x716,(string)\'getMilliseconds\',180,28,\'<image>/09_date.js\');$x720=&$x721[0];list(,$W720,$S720,$U720)=$x721;if(!(is_object($x720)&&isset($x720->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x724=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',180,28,\'<image>/09_date.js\');$_TypeError=&$x724[0];list(,$WTypeError,$STypeError,$UTypeError)=$x724;$x725=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x726=$x725($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x726->class)&&$x726->class===\'Error\'){$x726->properties[\'file\']=\'<image>/09_date.js\';$x726->properties[\'line\']=180;$x726->properties[\'column\']=28;$x726->attributes[\'file\']=$x726->attributes[\'line\']=$x726->attributes[\'column\']=0;}throw new JSException($x726,180,28,\'<image>/09_date.js\');}$x722=$x720->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x723=$x722($global,$x716,$x720,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x723;}unset($_Date,$WDate,$SDate,$UDate);$x729=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',183,20,\'<image>/09_date.js\');$_Date=&$x729[0];list(,$WDate,$SDate,$UDate)=$x729;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x730=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',183,20,\'<image>/09_date.js\');$_ReferenceError=&$x730[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x730;$x731=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,20);$x732=$x731($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x732->class)&&$x732->class===\'Error\'){$x732->properties[\'file\']=\'<image>/09_date.js\';$x732->properties[\'line\']=183;$x732->properties[\'column\']=20;$x732->attributes[\'file\']=$x732->attributes[\'line\']=$x732->attributes[\'column\']=0;}throw new JSException($x732,183,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x734=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,19,\'<image>/09_date.js\');$_TypeError=&$x734[0];list(,$WTypeError,$STypeError,$UTypeError)=$x734;$x735=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x736=$x735($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x736->class)&&$x736->class===\'Error\'){$x736->properties[\'file\']=\'<image>/09_date.js\';$x736->properties[\'line\']=184;$x736->properties[\'column\']=19;$x736->attributes[\'file\']=$x736->attributes[\'line\']=$x736->attributes[\'column\']=0;}throw new JSException($x736,184,19,\'<image>/09_date.js\');}$x733=JS::toObject($leThis,$global);unset($x737,$W737,$S737,$U737);$x738=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x733,(string)\'getFullYear\',184,19,\'<image>/09_date.js\');$x737=&$x738[0];list(,$W737,$S737,$U737)=$x738;if(!(is_object($x737)&&isset($x737->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x741=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,19,\'<image>/09_date.js\');$_TypeError=&$x741[0];list(,$WTypeError,$STypeError,$UTypeError)=$x741;$x742=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x743=$x742($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x743->class)&&$x743->class===\'Error\'){$x743->properties[\'file\']=\'<image>/09_date.js\';$x743->properties[\'line\']=184;$x743->properties[\'column\']=19;$x743->attributes[\'file\']=$x743->attributes[\'line\']=$x743->attributes[\'column\']=0;}throw new JSException($x743,184,19,\'<image>/09_date.js\');}$x739=$x737->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x740=$x739($global,$x733,$x737,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x745=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,36,\'<image>/09_date.js\');$_TypeError=&$x745[0];list(,$WTypeError,$STypeError,$UTypeError)=$x745;$x746=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x747=$x746($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x747->class)&&$x747->class===\'Error\'){$x747->properties[\'file\']=\'<image>/09_date.js\';$x747->properties[\'line\']=184;$x747->properties[\'column\']=36;$x747->attributes[\'file\']=$x747->attributes[\'line\']=$x747->attributes[\'column\']=0;}throw new JSException($x747,184,36,\'<image>/09_date.js\');}$x744=JS::toObject($leThis,$global);unset($x748,$W748,$S748,$U748);$x749=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x744,(string)\'getMonth\',184,36,\'<image>/09_date.js\');$x748=&$x749[0];list(,$W748,$S748,$U748)=$x749;if(!(is_object($x748)&&isset($x748->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x752=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,36,\'<image>/09_date.js\');$_TypeError=&$x752[0];list(,$WTypeError,$STypeError,$UTypeError)=$x752;$x753=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x754=$x753($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x754->class)&&$x754->class===\'Error\'){$x754->properties[\'file\']=\'<image>/09_date.js\';$x754->properties[\'line\']=184;$x754->properties[\'column\']=36;$x754->attributes[\'file\']=$x754->attributes[\'line\']=$x754->attributes[\'column\']=0;}throw new JSException($x754,184,36,\'<image>/09_date.js\');}$x750=$x748->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x751=$x750($global,$x744,$x748,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x756=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,52,\'<image>/09_date.js\');$_TypeError=&$x756[0];list(,$WTypeError,$STypeError,$UTypeError)=$x756;$x757=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x758=$x757($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x758->class)&&$x758->class===\'Error\'){$x758->properties[\'file\']=\'<image>/09_date.js\';$x758->properties[\'line\']=184;$x758->properties[\'column\']=52;$x758->attributes[\'file\']=$x758->attributes[\'line\']=$x758->attributes[\'column\']=0;}throw new JSException($x758,184,52,\'<image>/09_date.js\');}$x755=JS::toObject($leThis,$global);unset($x759,$W759,$S759,$U759);$x760=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x755,(string)\'getDate\',184,52,\'<image>/09_date.js\');$x759=&$x760[0];list(,$W759,$S759,$U759)=$x760;if(!(is_object($x759)&&isset($x759->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x763=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,52,\'<image>/09_date.js\');$_TypeError=&$x763[0];list(,$WTypeError,$STypeError,$UTypeError)=$x763;$x764=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x765=$x764($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x765->class)&&$x765->class===\'Error\'){$x765->properties[\'file\']=\'<image>/09_date.js\';$x765->properties[\'line\']=184;$x765->properties[\'column\']=52;$x765->attributes[\'file\']=$x765->attributes[\'line\']=$x765->attributes[\'column\']=0;}throw new JSException($x765,184,52,\'<image>/09_date.js\');}$x761=$x759->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x762=$x761($global,$x755,$x759,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x767=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,16,\'<image>/09_date.js\');$_TypeError=&$x767[0];list(,$WTypeError,$STypeError,$UTypeError)=$x767;$x768=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x769=$x768($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x769->class)&&$x769->class===\'Error\'){$x769->properties[\'file\']=\'<image>/09_date.js\';$x769->properties[\'line\']=185;$x769->properties[\'column\']=16;$x769->attributes[\'file\']=$x769->attributes[\'line\']=$x769->attributes[\'column\']=0;}throw new JSException($x769,185,16,\'<image>/09_date.js\');}$x766=JS::toObject($leThis,$global);unset($x770,$W770,$S770,$U770);$x771=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x766,(string)\'getHours\',185,16,\'<image>/09_date.js\');$x770=&$x771[0];list(,$W770,$S770,$U770)=$x771;if(!(is_object($x770)&&isset($x770->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x774=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,16,\'<image>/09_date.js\');$_TypeError=&$x774[0];list(,$WTypeError,$STypeError,$UTypeError)=$x774;$x775=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x776=$x775($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x776->class)&&$x776->class===\'Error\'){$x776->properties[\'file\']=\'<image>/09_date.js\';$x776->properties[\'line\']=185;$x776->properties[\'column\']=16;$x776->attributes[\'file\']=$x776->attributes[\'line\']=$x776->attributes[\'column\']=0;}throw new JSException($x776,185,16,\'<image>/09_date.js\');}$x772=$x770->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x773=$x772($global,$x766,$x770,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x778=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,35,\'<image>/09_date.js\');$_TypeError=&$x778[0];list(,$WTypeError,$STypeError,$UTypeError)=$x778;$x779=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x780=$x779($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x780->class)&&$x780->class===\'Error\'){$x780->properties[\'file\']=\'<image>/09_date.js\';$x780->properties[\'line\']=185;$x780->properties[\'column\']=35;$x780->attributes[\'file\']=$x780->attributes[\'line\']=$x780->attributes[\'column\']=0;}throw new JSException($x780,185,35,\'<image>/09_date.js\');}$x777=JS::toObject($leThis,$global);unset($x781,$W781,$S781,$U781);$x782=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x777,(string)\'getMinutes\',185,35,\'<image>/09_date.js\');$x781=&$x782[0];list(,$W781,$S781,$U781)=$x782;if(!(is_object($x781)&&isset($x781->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x785=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,35,\'<image>/09_date.js\');$_TypeError=&$x785[0];list(,$WTypeError,$STypeError,$UTypeError)=$x785;$x786=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x787=$x786($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x787->class)&&$x787->class===\'Error\'){$x787->properties[\'file\']=\'<image>/09_date.js\';$x787->properties[\'line\']=185;$x787->properties[\'column\']=35;$x787->attributes[\'file\']=$x787->attributes[\'line\']=$x787->attributes[\'column\']=0;}throw new JSException($x787,185,35,\'<image>/09_date.js\');}$x783=$x781->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x784=$x783($global,$x777,$x781,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x727=clone JS::$objectTemplate;unset($x788,$W788,$S788,$U788);$x789=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',183,16,\'<image>/09_date.js\');$x788=&$x789[0];list(,$W788,$S788,$U788)=$x789;$x728=$x788;$x727->prototype=$x728;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x792=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',183,16,\'<image>/09_date.js\');$_TypeError=&$x792[0];list(,$WTypeError,$STypeError,$UTypeError)=$x792;$x793=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x794=$x793($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x794->class)&&$x794->class===\'Error\'){$x794->properties[\'file\']=\'<image>/09_date.js\';$x794->properties[\'line\']=183;$x794->properties[\'column\']=16;$x794->attributes[\'file\']=$x794->attributes[\'line\']=$x794->attributes[\'column\']=0;}throw new JSException($x794,183,16,\'<image>/09_date.js\');}$x790=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x791=$x790($global,$x727,$_Date,array($x740,$x751,$x762,$x773,$x784,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x728=$x791;if(is_object($x728)&&$x728!==JS::$undefined){$x727=$x728;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x727;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x821 =& $scope->properties['arguments'];
$x821->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x821->properties[$i] = $args[$i];
$x821->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['minutes'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_minutes =& $scope->properties['minutes'];
$Uminutes = FALSE;
$scope->properties['seconds'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x822 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x822, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x824 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 197, 28, '<image>/09_date.js');
$_TypeError =& $x824[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x824;
$x825 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x826 = $x825($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x826->class) && $x826->class === 'Error') {$x826->properties['file'] = '<image>/09_date.js';$x826->properties['line'] = 197;$x826->properties['column'] = 28;$x826->attributes['file'] = $x826->attributes['line'] = $x826->attributes['column'] = 0; }
throw new JSException($x826, 197, 28, '<image>/09_date.js');
}
$x823 = JS::toObject($leThis, $global);
unset($x827, $W827, $S827, $U827);
$x828 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x823, (string) 'getSeconds', 197, 28, '<image>/09_date.js');
$x827 =& $x828[0]; list(,$W827,$S827,$U827) = $x828;
if (!(is_object($x827) && isset($x827->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x831 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 197, 28, '<image>/09_date.js');
$_TypeError =& $x831[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x831;
$x832 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x833 = $x832($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x833->class) && $x833->class === 'Error') {$x833->properties['file'] = '<image>/09_date.js';$x833->properties['line'] = 197;$x833->properties['column'] = 28;$x833->attributes['file'] = $x833->attributes['line'] = $x833->attributes['column'] = 0; }
throw new JSException($x833, 197, 28, '<image>/09_date.js');
}
$x829 = $x827->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x830 = $x829($global, $x823, $x827, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x830;;
};
$x834 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x834, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x836 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 201, 28, '<image>/09_date.js');
$_TypeError =& $x836[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x836;
$x837 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x838 = $x837($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x838->class) && $x838->class === 'Error') {$x838->properties['file'] = '<image>/09_date.js';$x838->properties['line'] = 201;$x838->properties['column'] = 28;$x838->attributes['file'] = $x838->attributes['line'] = $x838->attributes['column'] = 0; }
throw new JSException($x838, 201, 28, '<image>/09_date.js');
}
$x835 = JS::toObject($leThis, $global);
unset($x839, $W839, $S839, $U839);
$x840 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x835, (string) 'getMilliseconds', 201, 28, '<image>/09_date.js');
$x839 =& $x840[0]; list(,$W839,$S839,$U839) = $x840;
if (!(is_object($x839) && isset($x839->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x843 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 201, 28, '<image>/09_date.js');
$_TypeError =& $x843[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x843;
$x844 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x845 = $x844($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x845->class) && $x845->class === 'Error') {$x845->properties['file'] = '<image>/09_date.js';$x845->properties['line'] = 201;$x845->properties['column'] = 28;$x845->attributes['file'] = $x845->attributes['line'] = $x845->attributes['column'] = 0; }
throw new JSException($x845, 201, 28, '<image>/09_date.js');
}
$x841 = $x839->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x842 = $x841($global, $x835, $x839, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x842;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x848 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 204, 20, '<image>/09_date.js');
$_Date =& $x848[0]; list(,$WDate,$SDate,$UDate) = $x848;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x849 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 204, 20, '<image>/09_date.js');
$_ReferenceError =& $x849[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x849;
$x850 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 20);
$x851 = $x850($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x851->class) && $x851->class === 'Error') {$x851->properties['file'] = '<image>/09_date.js';$x851->properties['line'] = 204;$x851->properties['column'] = 20;$x851->attributes['file'] = $x851->attributes['line'] = $x851->attributes['column'] = 0; }
throw new JSException($x851, 204, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x853 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 19, '<image>/09_date.js');
$_TypeError =& $x853[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x853;
$x854 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x855 = $x854($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x855->class) && $x855->class === 'Error') {$x855->properties['file'] = '<image>/09_date.js';$x855->properties['line'] = 205;$x855->properties['column'] = 19;$x855->attributes['file'] = $x855->attributes['line'] = $x855->attributes['column'] = 0; }
throw new JSException($x855, 205, 19, '<image>/09_date.js');
}
$x852 = JS::toObject($leThis, $global);
unset($x856, $W856, $S856, $U856);
$x857 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x852, (string) 'getFullYear', 205, 19, '<image>/09_date.js');
$x856 =& $x857[0]; list(,$W856,$S856,$U856) = $x857;
if (!(is_object($x856) && isset($x856->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x860 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 19, '<image>/09_date.js');
$_TypeError =& $x860[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x860;
$x861 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x862 = $x861($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x862->class) && $x862->class === 'Error') {$x862->properties['file'] = '<image>/09_date.js';$x862->properties['line'] = 205;$x862->properties['column'] = 19;$x862->attributes['file'] = $x862->attributes['line'] = $x862->attributes['column'] = 0; }
throw new JSException($x862, 205, 19, '<image>/09_date.js');
}
$x858 = $x856->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x859 = $x858($global, $x852, $x856, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x864 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 36, '<image>/09_date.js');
$_TypeError =& $x864[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x864;
$x865 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x866 = $x865($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x866->class) && $x866->class === 'Error') {$x866->properties['file'] = '<image>/09_date.js';$x866->properties['line'] = 205;$x866->properties['column'] = 36;$x866->attributes['file'] = $x866->attributes['line'] = $x866->attributes['column'] = 0; }
throw new JSException($x866, 205, 36, '<image>/09_date.js');
}
$x863 = JS::toObject($leThis, $global);
unset($x867, $W867, $S867, $U867);
$x868 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x863, (string) 'getMonth', 205, 36, '<image>/09_date.js');
$x867 =& $x868[0]; list(,$W867,$S867,$U867) = $x868;
if (!(is_object($x867) && isset($x867->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x871 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 36, '<image>/09_date.js');
$_TypeError =& $x871[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x871;
$x872 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x873 = $x872($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x873->class) && $x873->class === 'Error') {$x873->properties['file'] = '<image>/09_date.js';$x873->properties['line'] = 205;$x873->properties['column'] = 36;$x873->attributes['file'] = $x873->attributes['line'] = $x873->attributes['column'] = 0; }
throw new JSException($x873, 205, 36, '<image>/09_date.js');
}
$x869 = $x867->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x870 = $x869($global, $x863, $x867, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x875 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 52, '<image>/09_date.js');
$_TypeError =& $x875[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x875;
$x876 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x877 = $x876($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x877->class) && $x877->class === 'Error') {$x877->properties['file'] = '<image>/09_date.js';$x877->properties['line'] = 205;$x877->properties['column'] = 52;$x877->attributes['file'] = $x877->attributes['line'] = $x877->attributes['column'] = 0; }
throw new JSException($x877, 205, 52, '<image>/09_date.js');
}
$x874 = JS::toObject($leThis, $global);
unset($x878, $W878, $S878, $U878);
$x879 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x874, (string) 'getDate', 205, 52, '<image>/09_date.js');
$x878 =& $x879[0]; list(,$W878,$S878,$U878) = $x879;
if (!(is_object($x878) && isset($x878->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x882 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 52, '<image>/09_date.js');
$_TypeError =& $x882[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x882;
$x883 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x884 = $x883($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x884->class) && $x884->class === 'Error') {$x884->properties['file'] = '<image>/09_date.js';$x884->properties['line'] = 205;$x884->properties['column'] = 52;$x884->attributes['file'] = $x884->attributes['line'] = $x884->attributes['column'] = 0; }
throw new JSException($x884, 205, 52, '<image>/09_date.js');
}
$x880 = $x878->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x881 = $x880($global, $x874, $x878, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x886 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 206, 16, '<image>/09_date.js');
$_TypeError =& $x886[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x886;
$x887 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x888 = $x887($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x888->class) && $x888->class === 'Error') {$x888->properties['file'] = '<image>/09_date.js';$x888->properties['line'] = 206;$x888->properties['column'] = 16;$x888->attributes['file'] = $x888->attributes['line'] = $x888->attributes['column'] = 0; }
throw new JSException($x888, 206, 16, '<image>/09_date.js');
}
$x885 = JS::toObject($leThis, $global);
unset($x889, $W889, $S889, $U889);
$x890 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x885, (string) 'getHours', 206, 16, '<image>/09_date.js');
$x889 =& $x890[0]; list(,$W889,$S889,$U889) = $x890;
if (!(is_object($x889) && isset($x889->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x893 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 206, 16, '<image>/09_date.js');
$_TypeError =& $x893[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x893;
$x894 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x895 = $x894($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x895->class) && $x895->class === 'Error') {$x895->properties['file'] = '<image>/09_date.js';$x895->properties['line'] = 206;$x895->properties['column'] = 16;$x895->attributes['file'] = $x895->attributes['line'] = $x895->attributes['column'] = 0; }
throw new JSException($x895, 206, 16, '<image>/09_date.js');
}
$x891 = $x889->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x892 = $x891($global, $x885, $x889, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x846 = clone JS::$objectTemplate;
unset($x896, $W896, $S896, $U896);
$x897 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 204, 16, '<image>/09_date.js');
$x896 =& $x897[0]; list(,$W896,$S896,$U896) = $x897;
$x847 = $x896;
$x846->prototype = $x847;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x900 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 204, 16, '<image>/09_date.js');
$_TypeError =& $x900[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x900;
$x901 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x902 = $x901($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x902->class) && $x902->class === 'Error') {$x902->properties['file'] = '<image>/09_date.js';$x902->properties['line'] = 204;$x902->properties['column'] = 16;$x902->attributes['file'] = $x902->attributes['line'] = $x902->attributes['column'] = 0; }
throw new JSException($x902, 204, 16, '<image>/09_date.js');
}
$x898 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x899 = $x898($global, $x846, $_Date, array($x859, $x870, $x881, $x892, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x847 = $x899;
if (is_object($x847) && $x847 !== JS::$undefined) { $x846 = $x847; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x846;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x821=&$scope->properties[\'arguments\'];$x821->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x821->properties[$i]=$args[$i];$x821->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'minutes\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x822=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x822,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x824=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',197,28,\'<image>/09_date.js\');$_TypeError=&$x824[0];list(,$WTypeError,$STypeError,$UTypeError)=$x824;$x825=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x826=$x825($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x826->class)&&$x826->class===\'Error\'){$x826->properties[\'file\']=\'<image>/09_date.js\';$x826->properties[\'line\']=197;$x826->properties[\'column\']=28;$x826->attributes[\'file\']=$x826->attributes[\'line\']=$x826->attributes[\'column\']=0;}throw new JSException($x826,197,28,\'<image>/09_date.js\');}$x823=JS::toObject($leThis,$global);unset($x827,$W827,$S827,$U827);$x828=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x823,(string)\'getSeconds\',197,28,\'<image>/09_date.js\');$x827=&$x828[0];list(,$W827,$S827,$U827)=$x828;if(!(is_object($x827)&&isset($x827->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x831=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',197,28,\'<image>/09_date.js\');$_TypeError=&$x831[0];list(,$WTypeError,$STypeError,$UTypeError)=$x831;$x832=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x833=$x832($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x833->class)&&$x833->class===\'Error\'){$x833->properties[\'file\']=\'<image>/09_date.js\';$x833->properties[\'line\']=197;$x833->properties[\'column\']=28;$x833->attributes[\'file\']=$x833->attributes[\'line\']=$x833->attributes[\'column\']=0;}throw new JSException($x833,197,28,\'<image>/09_date.js\');}$x829=$x827->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x830=$x829($global,$x823,$x827,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x830;}$x834=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x834,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x836=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',201,28,\'<image>/09_date.js\');$_TypeError=&$x836[0];list(,$WTypeError,$STypeError,$UTypeError)=$x836;$x837=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x838=$x837($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x838->class)&&$x838->class===\'Error\'){$x838->properties[\'file\']=\'<image>/09_date.js\';$x838->properties[\'line\']=201;$x838->properties[\'column\']=28;$x838->attributes[\'file\']=$x838->attributes[\'line\']=$x838->attributes[\'column\']=0;}throw new JSException($x838,201,28,\'<image>/09_date.js\');}$x835=JS::toObject($leThis,$global);unset($x839,$W839,$S839,$U839);$x840=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x835,(string)\'getMilliseconds\',201,28,\'<image>/09_date.js\');$x839=&$x840[0];list(,$W839,$S839,$U839)=$x840;if(!(is_object($x839)&&isset($x839->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x843=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',201,28,\'<image>/09_date.js\');$_TypeError=&$x843[0];list(,$WTypeError,$STypeError,$UTypeError)=$x843;$x844=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x845=$x844($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x845->class)&&$x845->class===\'Error\'){$x845->properties[\'file\']=\'<image>/09_date.js\';$x845->properties[\'line\']=201;$x845->properties[\'column\']=28;$x845->attributes[\'file\']=$x845->attributes[\'line\']=$x845->attributes[\'column\']=0;}throw new JSException($x845,201,28,\'<image>/09_date.js\');}$x841=$x839->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x842=$x841($global,$x835,$x839,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x842;}unset($_Date,$WDate,$SDate,$UDate);$x848=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',204,20,\'<image>/09_date.js\');$_Date=&$x848[0];list(,$WDate,$SDate,$UDate)=$x848;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x849=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',204,20,\'<image>/09_date.js\');$_ReferenceError=&$x849[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x849;$x850=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,20);$x851=$x850($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x851->class)&&$x851->class===\'Error\'){$x851->properties[\'file\']=\'<image>/09_date.js\';$x851->properties[\'line\']=204;$x851->properties[\'column\']=20;$x851->attributes[\'file\']=$x851->attributes[\'line\']=$x851->attributes[\'column\']=0;}throw new JSException($x851,204,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x853=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,19,\'<image>/09_date.js\');$_TypeError=&$x853[0];list(,$WTypeError,$STypeError,$UTypeError)=$x853;$x854=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x855=$x854($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x855->class)&&$x855->class===\'Error\'){$x855->properties[\'file\']=\'<image>/09_date.js\';$x855->properties[\'line\']=205;$x855->properties[\'column\']=19;$x855->attributes[\'file\']=$x855->attributes[\'line\']=$x855->attributes[\'column\']=0;}throw new JSException($x855,205,19,\'<image>/09_date.js\');}$x852=JS::toObject($leThis,$global);unset($x856,$W856,$S856,$U856);$x857=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x852,(string)\'getFullYear\',205,19,\'<image>/09_date.js\');$x856=&$x857[0];list(,$W856,$S856,$U856)=$x857;if(!(is_object($x856)&&isset($x856->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x860=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,19,\'<image>/09_date.js\');$_TypeError=&$x860[0];list(,$WTypeError,$STypeError,$UTypeError)=$x860;$x861=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x862=$x861($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x862->class)&&$x862->class===\'Error\'){$x862->properties[\'file\']=\'<image>/09_date.js\';$x862->properties[\'line\']=205;$x862->properties[\'column\']=19;$x862->attributes[\'file\']=$x862->attributes[\'line\']=$x862->attributes[\'column\']=0;}throw new JSException($x862,205,19,\'<image>/09_date.js\');}$x858=$x856->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x859=$x858($global,$x852,$x856,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x864=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,36,\'<image>/09_date.js\');$_TypeError=&$x864[0];list(,$WTypeError,$STypeError,$UTypeError)=$x864;$x865=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x866=$x865($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x866->class)&&$x866->class===\'Error\'){$x866->properties[\'file\']=\'<image>/09_date.js\';$x866->properties[\'line\']=205;$x866->properties[\'column\']=36;$x866->attributes[\'file\']=$x866->attributes[\'line\']=$x866->attributes[\'column\']=0;}throw new JSException($x866,205,36,\'<image>/09_date.js\');}$x863=JS::toObject($leThis,$global);unset($x867,$W867,$S867,$U867);$x868=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x863,(string)\'getMonth\',205,36,\'<image>/09_date.js\');$x867=&$x868[0];list(,$W867,$S867,$U867)=$x868;if(!(is_object($x867)&&isset($x867->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x871=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,36,\'<image>/09_date.js\');$_TypeError=&$x871[0];list(,$WTypeError,$STypeError,$UTypeError)=$x871;$x872=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x873=$x872($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x873->class)&&$x873->class===\'Error\'){$x873->properties[\'file\']=\'<image>/09_date.js\';$x873->properties[\'line\']=205;$x873->properties[\'column\']=36;$x873->attributes[\'file\']=$x873->attributes[\'line\']=$x873->attributes[\'column\']=0;}throw new JSException($x873,205,36,\'<image>/09_date.js\');}$x869=$x867->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x870=$x869($global,$x863,$x867,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x875=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,52,\'<image>/09_date.js\');$_TypeError=&$x875[0];list(,$WTypeError,$STypeError,$UTypeError)=$x875;$x876=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x877=$x876($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x877->class)&&$x877->class===\'Error\'){$x877->properties[\'file\']=\'<image>/09_date.js\';$x877->properties[\'line\']=205;$x877->properties[\'column\']=52;$x877->attributes[\'file\']=$x877->attributes[\'line\']=$x877->attributes[\'column\']=0;}throw new JSException($x877,205,52,\'<image>/09_date.js\');}$x874=JS::toObject($leThis,$global);unset($x878,$W878,$S878,$U878);$x879=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x874,(string)\'getDate\',205,52,\'<image>/09_date.js\');$x878=&$x879[0];list(,$W878,$S878,$U878)=$x879;if(!(is_object($x878)&&isset($x878->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x882=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,52,\'<image>/09_date.js\');$_TypeError=&$x882[0];list(,$WTypeError,$STypeError,$UTypeError)=$x882;$x883=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x884=$x883($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x884->class)&&$x884->class===\'Error\'){$x884->properties[\'file\']=\'<image>/09_date.js\';$x884->properties[\'line\']=205;$x884->properties[\'column\']=52;$x884->attributes[\'file\']=$x884->attributes[\'line\']=$x884->attributes[\'column\']=0;}throw new JSException($x884,205,52,\'<image>/09_date.js\');}$x880=$x878->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x881=$x880($global,$x874,$x878,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x886=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',206,16,\'<image>/09_date.js\');$_TypeError=&$x886[0];list(,$WTypeError,$STypeError,$UTypeError)=$x886;$x887=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x888=$x887($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x888->class)&&$x888->class===\'Error\'){$x888->properties[\'file\']=\'<image>/09_date.js\';$x888->properties[\'line\']=206;$x888->properties[\'column\']=16;$x888->attributes[\'file\']=$x888->attributes[\'line\']=$x888->attributes[\'column\']=0;}throw new JSException($x888,206,16,\'<image>/09_date.js\');}$x885=JS::toObject($leThis,$global);unset($x889,$W889,$S889,$U889);$x890=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x885,(string)\'getHours\',206,16,\'<image>/09_date.js\');$x889=&$x890[0];list(,$W889,$S889,$U889)=$x890;if(!(is_object($x889)&&isset($x889->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x893=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',206,16,\'<image>/09_date.js\');$_TypeError=&$x893[0];list(,$WTypeError,$STypeError,$UTypeError)=$x893;$x894=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x895=$x894($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x895->class)&&$x895->class===\'Error\'){$x895->properties[\'file\']=\'<image>/09_date.js\';$x895->properties[\'line\']=206;$x895->properties[\'column\']=16;$x895->attributes[\'file\']=$x895->attributes[\'line\']=$x895->attributes[\'column\']=0;}throw new JSException($x895,206,16,\'<image>/09_date.js\');}$x891=$x889->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x892=$x891($global,$x885,$x889,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x846=clone JS::$objectTemplate;unset($x896,$W896,$S896,$U896);$x897=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',204,16,\'<image>/09_date.js\');$x896=&$x897[0];list(,$W896,$S896,$U896)=$x897;$x847=$x896;$x846->prototype=$x847;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x900=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',204,16,\'<image>/09_date.js\');$_TypeError=&$x900[0];list(,$WTypeError,$STypeError,$UTypeError)=$x900;$x901=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x902=$x901($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x902->class)&&$x902->class===\'Error\'){$x902->properties[\'file\']=\'<image>/09_date.js\';$x902->properties[\'line\']=204;$x902->properties[\'column\']=16;$x902->attributes[\'file\']=$x902->attributes[\'line\']=$x902->attributes[\'column\']=0;}throw new JSException($x902,204,16,\'<image>/09_date.js\');}$x898=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x899=$x898($global,$x846,$_Date,array($x859,$x870,$x881,$x892,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x847=$x899;if(is_object($x847)&&$x847!==JS::$undefined){$x846=$x847;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x846;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_27($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x929 =& $scope->properties['arguments'];
$x929->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x929->properties[$i] = $args[$i];
$x929->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['hours'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_hours =& $scope->properties['hours'];
$Uhours = FALSE;
$scope->properties['minutes'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_minutes =& $scope->properties['minutes'];
$Uminutes = FALSE;
$scope->properties['seconds'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(3, $args) ? $args[3] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x930 = (((gettype($_minutes) === gettype(JS::$undefined) && $_minutes === JS::$undefined))|| (((is_float($_minutes) || is_int($_minutes)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_minutes == JS::$undefined));
if (JS::toBoolean($x930, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x932 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 218, 28, '<image>/09_date.js');
$_TypeError =& $x932[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x932;
$x933 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x934 = $x933($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x934->class) && $x934->class === 'Error') {$x934->properties['file'] = '<image>/09_date.js';$x934->properties['line'] = 218;$x934->properties['column'] = 28;$x934->attributes['file'] = $x934->attributes['line'] = $x934->attributes['column'] = 0; }
throw new JSException($x934, 218, 28, '<image>/09_date.js');
}
$x931 = JS::toObject($leThis, $global);
unset($x935, $W935, $S935, $U935);
$x936 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x931, (string) 'getMinutes', 218, 28, '<image>/09_date.js');
$x935 =& $x936[0]; list(,$W935,$S935,$U935) = $x936;
if (!(is_object($x935) && isset($x935->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x939 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 218, 28, '<image>/09_date.js');
$_TypeError =& $x939[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x939;
$x940 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x941 = $x940($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x941->class) && $x941->class === 'Error') {$x941->properties['file'] = '<image>/09_date.js';$x941->properties['line'] = 218;$x941->properties['column'] = 28;$x941->attributes['file'] = $x941->attributes['line'] = $x941->attributes['column'] = 0; }
throw new JSException($x941, 218, 28, '<image>/09_date.js');
}
$x937 = $x935->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x938 = $x937($global, $x931, $x935, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x938;;
};
$x942 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x942, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x944 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 222, 28, '<image>/09_date.js');
$_TypeError =& $x944[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x944;
$x945 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x946 = $x945($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x946->class) && $x946->class === 'Error') {$x946->properties['file'] = '<image>/09_date.js';$x946->properties['line'] = 222;$x946->properties['column'] = 28;$x946->attributes['file'] = $x946->attributes['line'] = $x946->attributes['column'] = 0; }
throw new JSException($x946, 222, 28, '<image>/09_date.js');
}
$x943 = JS::toObject($leThis, $global);
unset($x947, $W947, $S947, $U947);
$x948 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x943, (string) 'getSeconds', 222, 28, '<image>/09_date.js');
$x947 =& $x948[0]; list(,$W947,$S947,$U947) = $x948;
if (!(is_object($x947) && isset($x947->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x951 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 222, 28, '<image>/09_date.js');
$_TypeError =& $x951[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x951;
$x952 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x953 = $x952($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x953->class) && $x953->class === 'Error') {$x953->properties['file'] = '<image>/09_date.js';$x953->properties['line'] = 222;$x953->properties['column'] = 28;$x953->attributes['file'] = $x953->attributes['line'] = $x953->attributes['column'] = 0; }
throw new JSException($x953, 222, 28, '<image>/09_date.js');
}
$x949 = $x947->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x950 = $x949($global, $x943, $x947, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x950;;
};
$x954 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x954, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x956 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 226, 28, '<image>/09_date.js');
$_TypeError =& $x956[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x956;
$x957 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x958 = $x957($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x958->class) && $x958->class === 'Error') {$x958->properties['file'] = '<image>/09_date.js';$x958->properties['line'] = 226;$x958->properties['column'] = 28;$x958->attributes['file'] = $x958->attributes['line'] = $x958->attributes['column'] = 0; }
throw new JSException($x958, 226, 28, '<image>/09_date.js');
}
$x955 = JS::toObject($leThis, $global);
unset($x959, $W959, $S959, $U959);
$x960 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x955, (string) 'getMilliseconds', 226, 28, '<image>/09_date.js');
$x959 =& $x960[0]; list(,$W959,$S959,$U959) = $x960;
if (!(is_object($x959) && isset($x959->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x963 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 226, 28, '<image>/09_date.js');
$_TypeError =& $x963[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x963;
$x964 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x965 = $x964($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x965->class) && $x965->class === 'Error') {$x965->properties['file'] = '<image>/09_date.js';$x965->properties['line'] = 226;$x965->properties['column'] = 28;$x965->attributes['file'] = $x965->attributes['line'] = $x965->attributes['column'] = 0; }
throw new JSException($x965, 226, 28, '<image>/09_date.js');
}
$x961 = $x959->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x962 = $x961($global, $x955, $x959, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x962;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x968 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 229, 20, '<image>/09_date.js');
$_Date =& $x968[0]; list(,$WDate,$SDate,$UDate) = $x968;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x969 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 229, 20, '<image>/09_date.js');
$_ReferenceError =& $x969[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x969;
$x970 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 20);
$x971 = $x970($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x971->class) && $x971->class === 'Error') {$x971->properties['file'] = '<image>/09_date.js';$x971->properties['line'] = 229;$x971->properties['column'] = 20;$x971->attributes['file'] = $x971->attributes['line'] = $x971->attributes['column'] = 0; }
throw new JSException($x971, 229, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x973 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 19, '<image>/09_date.js');
$_TypeError =& $x973[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x973;
$x974 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x975 = $x974($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x975->class) && $x975->class === 'Error') {$x975->properties['file'] = '<image>/09_date.js';$x975->properties['line'] = 230;$x975->properties['column'] = 19;$x975->attributes['file'] = $x975->attributes['line'] = $x975->attributes['column'] = 0; }
throw new JSException($x975, 230, 19, '<image>/09_date.js');
}
$x972 = JS::toObject($leThis, $global);
unset($x976, $W976, $S976, $U976);
$x977 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x972, (string) 'getFullYear', 230, 19, '<image>/09_date.js');
$x976 =& $x977[0]; list(,$W976,$S976,$U976) = $x977;
if (!(is_object($x976) && isset($x976->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x980 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 19, '<image>/09_date.js');
$_TypeError =& $x980[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x980;
$x981 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x982 = $x981($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error') {$x982->properties['file'] = '<image>/09_date.js';$x982->properties['line'] = 230;$x982->properties['column'] = 19;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 230, 19, '<image>/09_date.js');
}
$x978 = $x976->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x979 = $x978($global, $x972, $x976, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x984 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 36, '<image>/09_date.js');
$_TypeError =& $x984[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x984;
$x985 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x986 = $x985($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x986->class) && $x986->class === 'Error') {$x986->properties['file'] = '<image>/09_date.js';$x986->properties['line'] = 230;$x986->properties['column'] = 36;$x986->attributes['file'] = $x986->attributes['line'] = $x986->attributes['column'] = 0; }
throw new JSException($x986, 230, 36, '<image>/09_date.js');
}
$x983 = JS::toObject($leThis, $global);
unset($x987, $W987, $S987, $U987);
$x988 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x983, (string) 'getMonth', 230, 36, '<image>/09_date.js');
$x987 =& $x988[0]; list(,$W987,$S987,$U987) = $x988;
if (!(is_object($x987) && isset($x987->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x991 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 36, '<image>/09_date.js');
$_TypeError =& $x991[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x991;
$x992 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x993 = $x992($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x993->class) && $x993->class === 'Error') {$x993->properties['file'] = '<image>/09_date.js';$x993->properties['line'] = 230;$x993->properties['column'] = 36;$x993->attributes['file'] = $x993->attributes['line'] = $x993->attributes['column'] = 0; }
throw new JSException($x993, 230, 36, '<image>/09_date.js');
}
$x989 = $x987->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x990 = $x989($global, $x983, $x987, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x995 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 52, '<image>/09_date.js');
$_TypeError =& $x995[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x995;
$x996 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x997 = $x996($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x997->class) && $x997->class === 'Error') {$x997->properties['file'] = '<image>/09_date.js';$x997->properties['line'] = 230;$x997->properties['column'] = 52;$x997->attributes['file'] = $x997->attributes['line'] = $x997->attributes['column'] = 0; }
throw new JSException($x997, 230, 52, '<image>/09_date.js');
}
$x994 = JS::toObject($leThis, $global);
unset($x998, $W998, $S998, $U998);
$x999 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x994, (string) 'getDate', 230, 52, '<image>/09_date.js');
$x998 =& $x999[0]; list(,$W998,$S998,$U998) = $x999;
if (!(is_object($x998) && isset($x998->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1002 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 52, '<image>/09_date.js');
$_TypeError =& $x1002[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1002;
$x1003 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1004 = $x1003($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1004->class) && $x1004->class === 'Error') {$x1004->properties['file'] = '<image>/09_date.js';$x1004->properties['line'] = 230;$x1004->properties['column'] = 52;$x1004->attributes['file'] = $x1004->attributes['line'] = $x1004->attributes['column'] = 0; }
throw new JSException($x1004, 230, 52, '<image>/09_date.js');
}
$x1000 = $x998->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1001 = $x1000($global, $x994, $x998, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x966 = clone JS::$objectTemplate;
unset($x1005, $W1005, $S1005, $U1005);
$x1006 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 229, 16, '<image>/09_date.js');
$x1005 =& $x1006[0]; list(,$W1005,$S1005,$U1005) = $x1006;
$x967 = $x1005;
$x966->prototype = $x967;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1009 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 229, 16, '<image>/09_date.js');
$_TypeError =& $x1009[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1009;
$x1010 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1011 = $x1010($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1011->class) && $x1011->class === 'Error') {$x1011->properties['file'] = '<image>/09_date.js';$x1011->properties['line'] = 229;$x1011->properties['column'] = 16;$x1011->attributes['file'] = $x1011->attributes['line'] = $x1011->attributes['column'] = 0; }
throw new JSException($x1011, 229, 16, '<image>/09_date.js');
}
$x1007 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1008 = $x1007($global, $x966, $_Date, array($x979, $x990, $x1001, $_hours, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x967 = $x1008;
if (is_object($x967) && $x967 !== JS::$undefined) { $x966 = $x967; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x966;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_27($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x929=&$scope->properties[\'arguments\'];$x929->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x929->properties[$i]=$args[$i];$x929->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'hours\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x930=(((gettype($_minutes)===gettype(JS::$undefined)&&$_minutes===JS::$undefined))||(((is_float($_minutes)||is_int($_minutes))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_minutes==JS::$undefined));if(JS::toBoolean($x930,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x932=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',218,28,\'<image>/09_date.js\');$_TypeError=&$x932[0];list(,$WTypeError,$STypeError,$UTypeError)=$x932;$x933=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x934=$x933($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x934->class)&&$x934->class===\'Error\'){$x934->properties[\'file\']=\'<image>/09_date.js\';$x934->properties[\'line\']=218;$x934->properties[\'column\']=28;$x934->attributes[\'file\']=$x934->attributes[\'line\']=$x934->attributes[\'column\']=0;}throw new JSException($x934,218,28,\'<image>/09_date.js\');}$x931=JS::toObject($leThis,$global);unset($x935,$W935,$S935,$U935);$x936=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x931,(string)\'getMinutes\',218,28,\'<image>/09_date.js\');$x935=&$x936[0];list(,$W935,$S935,$U935)=$x936;if(!(is_object($x935)&&isset($x935->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x939=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',218,28,\'<image>/09_date.js\');$_TypeError=&$x939[0];list(,$WTypeError,$STypeError,$UTypeError)=$x939;$x940=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x941=$x940($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x941->class)&&$x941->class===\'Error\'){$x941->properties[\'file\']=\'<image>/09_date.js\';$x941->properties[\'line\']=218;$x941->properties[\'column\']=28;$x941->attributes[\'file\']=$x941->attributes[\'line\']=$x941->attributes[\'column\']=0;}throw new JSException($x941,218,28,\'<image>/09_date.js\');}$x937=$x935->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x938=$x937($global,$x931,$x935,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x938;}$x942=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x942,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x944=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',222,28,\'<image>/09_date.js\');$_TypeError=&$x944[0];list(,$WTypeError,$STypeError,$UTypeError)=$x944;$x945=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x946=$x945($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x946->class)&&$x946->class===\'Error\'){$x946->properties[\'file\']=\'<image>/09_date.js\';$x946->properties[\'line\']=222;$x946->properties[\'column\']=28;$x946->attributes[\'file\']=$x946->attributes[\'line\']=$x946->attributes[\'column\']=0;}throw new JSException($x946,222,28,\'<image>/09_date.js\');}$x943=JS::toObject($leThis,$global);unset($x947,$W947,$S947,$U947);$x948=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x943,(string)\'getSeconds\',222,28,\'<image>/09_date.js\');$x947=&$x948[0];list(,$W947,$S947,$U947)=$x948;if(!(is_object($x947)&&isset($x947->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x951=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',222,28,\'<image>/09_date.js\');$_TypeError=&$x951[0];list(,$WTypeError,$STypeError,$UTypeError)=$x951;$x952=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x953=$x952($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x953->class)&&$x953->class===\'Error\'){$x953->properties[\'file\']=\'<image>/09_date.js\';$x953->properties[\'line\']=222;$x953->properties[\'column\']=28;$x953->attributes[\'file\']=$x953->attributes[\'line\']=$x953->attributes[\'column\']=0;}throw new JSException($x953,222,28,\'<image>/09_date.js\');}$x949=$x947->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x950=$x949($global,$x943,$x947,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x950;}$x954=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x954,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x956=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',226,28,\'<image>/09_date.js\');$_TypeError=&$x956[0];list(,$WTypeError,$STypeError,$UTypeError)=$x956;$x957=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x958=$x957($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x958->class)&&$x958->class===\'Error\'){$x958->properties[\'file\']=\'<image>/09_date.js\';$x958->properties[\'line\']=226;$x958->properties[\'column\']=28;$x958->attributes[\'file\']=$x958->attributes[\'line\']=$x958->attributes[\'column\']=0;}throw new JSException($x958,226,28,\'<image>/09_date.js\');}$x955=JS::toObject($leThis,$global);unset($x959,$W959,$S959,$U959);$x960=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x955,(string)\'getMilliseconds\',226,28,\'<image>/09_date.js\');$x959=&$x960[0];list(,$W959,$S959,$U959)=$x960;if(!(is_object($x959)&&isset($x959->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x963=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',226,28,\'<image>/09_date.js\');$_TypeError=&$x963[0];list(,$WTypeError,$STypeError,$UTypeError)=$x963;$x964=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x965=$x964($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x965->class)&&$x965->class===\'Error\'){$x965->properties[\'file\']=\'<image>/09_date.js\';$x965->properties[\'line\']=226;$x965->properties[\'column\']=28;$x965->attributes[\'file\']=$x965->attributes[\'line\']=$x965->attributes[\'column\']=0;}throw new JSException($x965,226,28,\'<image>/09_date.js\');}$x961=$x959->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x962=$x961($global,$x955,$x959,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x962;}unset($_Date,$WDate,$SDate,$UDate);$x968=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',229,20,\'<image>/09_date.js\');$_Date=&$x968[0];list(,$WDate,$SDate,$UDate)=$x968;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x969=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',229,20,\'<image>/09_date.js\');$_ReferenceError=&$x969[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x969;$x970=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,20);$x971=$x970($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x971->class)&&$x971->class===\'Error\'){$x971->properties[\'file\']=\'<image>/09_date.js\';$x971->properties[\'line\']=229;$x971->properties[\'column\']=20;$x971->attributes[\'file\']=$x971->attributes[\'line\']=$x971->attributes[\'column\']=0;}throw new JSException($x971,229,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x973=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,19,\'<image>/09_date.js\');$_TypeError=&$x973[0];list(,$WTypeError,$STypeError,$UTypeError)=$x973;$x974=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x975=$x974($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x975->class)&&$x975->class===\'Error\'){$x975->properties[\'file\']=\'<image>/09_date.js\';$x975->properties[\'line\']=230;$x975->properties[\'column\']=19;$x975->attributes[\'file\']=$x975->attributes[\'line\']=$x975->attributes[\'column\']=0;}throw new JSException($x975,230,19,\'<image>/09_date.js\');}$x972=JS::toObject($leThis,$global);unset($x976,$W976,$S976,$U976);$x977=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x972,(string)\'getFullYear\',230,19,\'<image>/09_date.js\');$x976=&$x977[0];list(,$W976,$S976,$U976)=$x977;if(!(is_object($x976)&&isset($x976->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x980=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,19,\'<image>/09_date.js\');$_TypeError=&$x980[0];list(,$WTypeError,$STypeError,$UTypeError)=$x980;$x981=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x982=$x981($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x982->class)&&$x982->class===\'Error\'){$x982->properties[\'file\']=\'<image>/09_date.js\';$x982->properties[\'line\']=230;$x982->properties[\'column\']=19;$x982->attributes[\'file\']=$x982->attributes[\'line\']=$x982->attributes[\'column\']=0;}throw new JSException($x982,230,19,\'<image>/09_date.js\');}$x978=$x976->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x979=$x978($global,$x972,$x976,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x984=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,36,\'<image>/09_date.js\');$_TypeError=&$x984[0];list(,$WTypeError,$STypeError,$UTypeError)=$x984;$x985=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x986=$x985($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x986->class)&&$x986->class===\'Error\'){$x986->properties[\'file\']=\'<image>/09_date.js\';$x986->properties[\'line\']=230;$x986->properties[\'column\']=36;$x986->attributes[\'file\']=$x986->attributes[\'line\']=$x986->attributes[\'column\']=0;}throw new JSException($x986,230,36,\'<image>/09_date.js\');}$x983=JS::toObject($leThis,$global);unset($x987,$W987,$S987,$U987);$x988=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x983,(string)\'getMonth\',230,36,\'<image>/09_date.js\');$x987=&$x988[0];list(,$W987,$S987,$U987)=$x988;if(!(is_object($x987)&&isset($x987->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x991=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,36,\'<image>/09_date.js\');$_TypeError=&$x991[0];list(,$WTypeError,$STypeError,$UTypeError)=$x991;$x992=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x993=$x992($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x993->class)&&$x993->class===\'Error\'){$x993->properties[\'file\']=\'<image>/09_date.js\';$x993->properties[\'line\']=230;$x993->properties[\'column\']=36;$x993->attributes[\'file\']=$x993->attributes[\'line\']=$x993->attributes[\'column\']=0;}throw new JSException($x993,230,36,\'<image>/09_date.js\');}$x989=$x987->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x990=$x989($global,$x983,$x987,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x995=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,52,\'<image>/09_date.js\');$_TypeError=&$x995[0];list(,$WTypeError,$STypeError,$UTypeError)=$x995;$x996=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x997=$x996($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x997->class)&&$x997->class===\'Error\'){$x997->properties[\'file\']=\'<image>/09_date.js\';$x997->properties[\'line\']=230;$x997->properties[\'column\']=52;$x997->attributes[\'file\']=$x997->attributes[\'line\']=$x997->attributes[\'column\']=0;}throw new JSException($x997,230,52,\'<image>/09_date.js\');}$x994=JS::toObject($leThis,$global);unset($x998,$W998,$S998,$U998);$x999=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x994,(string)\'getDate\',230,52,\'<image>/09_date.js\');$x998=&$x999[0];list(,$W998,$S998,$U998)=$x999;if(!(is_object($x998)&&isset($x998->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1002=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,52,\'<image>/09_date.js\');$_TypeError=&$x1002[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1002;$x1003=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1004=$x1003($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1004->class)&&$x1004->class===\'Error\'){$x1004->properties[\'file\']=\'<image>/09_date.js\';$x1004->properties[\'line\']=230;$x1004->properties[\'column\']=52;$x1004->attributes[\'file\']=$x1004->attributes[\'line\']=$x1004->attributes[\'column\']=0;}throw new JSException($x1004,230,52,\'<image>/09_date.js\');}$x1000=$x998->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1001=$x1000($global,$x994,$x998,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x966=clone JS::$objectTemplate;unset($x1005,$W1005,$S1005,$U1005);$x1006=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',229,16,\'<image>/09_date.js\');$x1005=&$x1006[0];list(,$W1005,$S1005,$U1005)=$x1006;$x967=$x1005;$x966->prototype=$x967;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1009=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',229,16,\'<image>/09_date.js\');$_TypeError=&$x1009[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1009;$x1010=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1011=$x1010($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1011->class)&&$x1011->class===\'Error\'){$x1011->properties[\'file\']=\'<image>/09_date.js\';$x1011->properties[\'line\']=229;$x1011->properties[\'column\']=16;$x1011->attributes[\'file\']=$x1011->attributes[\'line\']=$x1011->attributes[\'column\']=0;}throw new JSException($x1011,229,16,\'<image>/09_date.js\');}$x1007=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1008=$x1007($global,$x966,$_Date,array($x979,$x990,$x1001,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x967=$x1008;if(is_object($x967)&&$x967!==JS::$undefined){$x966=$x967;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x966;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_28($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1038 =& $scope->properties['arguments'];
$x1038->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1038->properties[$i] = $args[$i];
$x1038->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['date'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x1041 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 242, 20, '<image>/09_date.js');
$_Date =& $x1041[0]; list(,$WDate,$SDate,$UDate) = $x1041;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1042 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 242, 20, '<image>/09_date.js');
$_ReferenceError =& $x1042[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1042;
$x1043 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 20);
$x1044 = $x1043($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1044->class) && $x1044->class === 'Error') {$x1044->properties['file'] = '<image>/09_date.js';$x1044->properties['line'] = 242;$x1044->properties['column'] = 20;$x1044->attributes['file'] = $x1044->attributes['line'] = $x1044->attributes['column'] = 0; }
throw new JSException($x1044, 242, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1046 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 19, '<image>/09_date.js');
$_TypeError =& $x1046[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1046;
$x1047 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1048 = $x1047($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1048->class) && $x1048->class === 'Error') {$x1048->properties['file'] = '<image>/09_date.js';$x1048->properties['line'] = 243;$x1048->properties['column'] = 19;$x1048->attributes['file'] = $x1048->attributes['line'] = $x1048->attributes['column'] = 0; }
throw new JSException($x1048, 243, 19, '<image>/09_date.js');
}
$x1045 = JS::toObject($leThis, $global);
unset($x1049, $W1049, $S1049, $U1049);
$x1050 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1045, (string) 'getFullYear', 243, 19, '<image>/09_date.js');
$x1049 =& $x1050[0]; list(,$W1049,$S1049,$U1049) = $x1050;
if (!(is_object($x1049) && isset($x1049->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1053 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 19, '<image>/09_date.js');
$_TypeError =& $x1053[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1053;
$x1054 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1055 = $x1054($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1055->class) && $x1055->class === 'Error') {$x1055->properties['file'] = '<image>/09_date.js';$x1055->properties['line'] = 243;$x1055->properties['column'] = 19;$x1055->attributes['file'] = $x1055->attributes['line'] = $x1055->attributes['column'] = 0; }
throw new JSException($x1055, 243, 19, '<image>/09_date.js');
}
$x1051 = $x1049->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1052 = $x1051($global, $x1045, $x1049, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1057 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 36, '<image>/09_date.js');
$_TypeError =& $x1057[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1057;
$x1058 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1059 = $x1058($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1059->class) && $x1059->class === 'Error') {$x1059->properties['file'] = '<image>/09_date.js';$x1059->properties['line'] = 243;$x1059->properties['column'] = 36;$x1059->attributes['file'] = $x1059->attributes['line'] = $x1059->attributes['column'] = 0; }
throw new JSException($x1059, 243, 36, '<image>/09_date.js');
}
$x1056 = JS::toObject($leThis, $global);
unset($x1060, $W1060, $S1060, $U1060);
$x1061 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1056, (string) 'getMonth', 243, 36, '<image>/09_date.js');
$x1060 =& $x1061[0]; list(,$W1060,$S1060,$U1060) = $x1061;
if (!(is_object($x1060) && isset($x1060->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1064 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 36, '<image>/09_date.js');
$_TypeError =& $x1064[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1064;
$x1065 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1066 = $x1065($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1066->class) && $x1066->class === 'Error') {$x1066->properties['file'] = '<image>/09_date.js';$x1066->properties['line'] = 243;$x1066->properties['column'] = 36;$x1066->attributes['file'] = $x1066->attributes['line'] = $x1066->attributes['column'] = 0; }
throw new JSException($x1066, 243, 36, '<image>/09_date.js');
}
$x1062 = $x1060->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1063 = $x1062($global, $x1056, $x1060, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1068 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 16, '<image>/09_date.js');
$_TypeError =& $x1068[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1068;
$x1069 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1070 = $x1069($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1070->class) && $x1070->class === 'Error') {$x1070->properties['file'] = '<image>/09_date.js';$x1070->properties['line'] = 244;$x1070->properties['column'] = 16;$x1070->attributes['file'] = $x1070->attributes['line'] = $x1070->attributes['column'] = 0; }
throw new JSException($x1070, 244, 16, '<image>/09_date.js');
}
$x1067 = JS::toObject($leThis, $global);
unset($x1071, $W1071, $S1071, $U1071);
$x1072 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1067, (string) 'getHours', 244, 16, '<image>/09_date.js');
$x1071 =& $x1072[0]; list(,$W1071,$S1071,$U1071) = $x1072;
if (!(is_object($x1071) && isset($x1071->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1075 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 16, '<image>/09_date.js');
$_TypeError =& $x1075[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1075;
$x1076 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1077 = $x1076($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1077->class) && $x1077->class === 'Error') {$x1077->properties['file'] = '<image>/09_date.js';$x1077->properties['line'] = 244;$x1077->properties['column'] = 16;$x1077->attributes['file'] = $x1077->attributes['line'] = $x1077->attributes['column'] = 0; }
throw new JSException($x1077, 244, 16, '<image>/09_date.js');
}
$x1073 = $x1071->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1074 = $x1073($global, $x1067, $x1071, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1079 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 35, '<image>/09_date.js');
$_TypeError =& $x1079[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1079;
$x1080 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1081 = $x1080($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1081->class) && $x1081->class === 'Error') {$x1081->properties['file'] = '<image>/09_date.js';$x1081->properties['line'] = 244;$x1081->properties['column'] = 35;$x1081->attributes['file'] = $x1081->attributes['line'] = $x1081->attributes['column'] = 0; }
throw new JSException($x1081, 244, 35, '<image>/09_date.js');
}
$x1078 = JS::toObject($leThis, $global);
unset($x1082, $W1082, $S1082, $U1082);
$x1083 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1078, (string) 'getMinutes', 244, 35, '<image>/09_date.js');
$x1082 =& $x1083[0]; list(,$W1082,$S1082,$U1082) = $x1083;
if (!(is_object($x1082) && isset($x1082->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1086 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 35, '<image>/09_date.js');
$_TypeError =& $x1086[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1086;
$x1087 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1088 = $x1087($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1088->class) && $x1088->class === 'Error') {$x1088->properties['file'] = '<image>/09_date.js';$x1088->properties['line'] = 244;$x1088->properties['column'] = 35;$x1088->attributes['file'] = $x1088->attributes['line'] = $x1088->attributes['column'] = 0; }
throw new JSException($x1088, 244, 35, '<image>/09_date.js');
}
$x1084 = $x1082->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1085 = $x1084($global, $x1078, $x1082, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1090 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 54, '<image>/09_date.js');
$_TypeError =& $x1090[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1090;
$x1091 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1092 = $x1091($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1092->class) && $x1092->class === 'Error') {$x1092->properties['file'] = '<image>/09_date.js';$x1092->properties['line'] = 244;$x1092->properties['column'] = 54;$x1092->attributes['file'] = $x1092->attributes['line'] = $x1092->attributes['column'] = 0; }
throw new JSException($x1092, 244, 54, '<image>/09_date.js');
}
$x1089 = JS::toObject($leThis, $global);
unset($x1093, $W1093, $S1093, $U1093);
$x1094 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1089, (string) 'getSeconds', 244, 54, '<image>/09_date.js');
$x1093 =& $x1094[0]; list(,$W1093,$S1093,$U1093) = $x1094;
if (!(is_object($x1093) && isset($x1093->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1097 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 54, '<image>/09_date.js');
$_TypeError =& $x1097[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1097;
$x1098 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1099 = $x1098($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1099->class) && $x1099->class === 'Error') {$x1099->properties['file'] = '<image>/09_date.js';$x1099->properties['line'] = 244;$x1099->properties['column'] = 54;$x1099->attributes['file'] = $x1099->attributes['line'] = $x1099->attributes['column'] = 0; }
throw new JSException($x1099, 244, 54, '<image>/09_date.js');
}
$x1095 = $x1093->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1096 = $x1095($global, $x1089, $x1093, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1101 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 78, '<image>/09_date.js');
$_TypeError =& $x1101[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1101;
$x1102 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1103 = $x1102($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1103->class) && $x1103->class === 'Error') {$x1103->properties['file'] = '<image>/09_date.js';$x1103->properties['line'] = 244;$x1103->properties['column'] = 78;$x1103->attributes['file'] = $x1103->attributes['line'] = $x1103->attributes['column'] = 0; }
throw new JSException($x1103, 244, 78, '<image>/09_date.js');
}
$x1100 = JS::toObject($leThis, $global);
unset($x1104, $W1104, $S1104, $U1104);
$x1105 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1100, (string) 'getMilliseconds', 244, 78, '<image>/09_date.js');
$x1104 =& $x1105[0]; list(,$W1104,$S1104,$U1104) = $x1105;
if (!(is_object($x1104) && isset($x1104->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1108 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 78, '<image>/09_date.js');
$_TypeError =& $x1108[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1108;
$x1109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1110 = $x1109($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1110->class) && $x1110->class === 'Error') {$x1110->properties['file'] = '<image>/09_date.js';$x1110->properties['line'] = 244;$x1110->properties['column'] = 78;$x1110->attributes['file'] = $x1110->attributes['line'] = $x1110->attributes['column'] = 0; }
throw new JSException($x1110, 244, 78, '<image>/09_date.js');
}
$x1106 = $x1104->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1107 = $x1106($global, $x1100, $x1104, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1039 = clone JS::$objectTemplate;
unset($x1111, $W1111, $S1111, $U1111);
$x1112 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 242, 16, '<image>/09_date.js');
$x1111 =& $x1112[0]; list(,$W1111,$S1111,$U1111) = $x1112;
$x1040 = $x1111;
$x1039->prototype = $x1040;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1115 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 242, 16, '<image>/09_date.js');
$_TypeError =& $x1115[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1115;
$x1116 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1117 = $x1116($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1117->class) && $x1117->class === 'Error') {$x1117->properties['file'] = '<image>/09_date.js';$x1117->properties['line'] = 242;$x1117->properties['column'] = 16;$x1117->attributes['file'] = $x1117->attributes['line'] = $x1117->attributes['column'] = 0; }
throw new JSException($x1117, 242, 16, '<image>/09_date.js');
}
$x1113 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1114 = $x1113($global, $x1039, $_Date, array($x1052, $x1063, $_date, $x1074, $x1085, $x1096, $x1107), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1040 = $x1114;
if (is_object($x1040) && $x1040 !== JS::$undefined) { $x1039 = $x1040; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1039;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_28($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1038=&$scope->properties[\'arguments\'];$x1038->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1038->properties[$i]=$args[$i];$x1038->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'date\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x1041=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',242,20,\'<image>/09_date.js\');$_Date=&$x1041[0];list(,$WDate,$SDate,$UDate)=$x1041;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1042=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',242,20,\'<image>/09_date.js\');$_ReferenceError=&$x1042[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1042;$x1043=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,20);$x1044=$x1043($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1044->class)&&$x1044->class===\'Error\'){$x1044->properties[\'file\']=\'<image>/09_date.js\';$x1044->properties[\'line\']=242;$x1044->properties[\'column\']=20;$x1044->attributes[\'file\']=$x1044->attributes[\'line\']=$x1044->attributes[\'column\']=0;}throw new JSException($x1044,242,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1046=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,19,\'<image>/09_date.js\');$_TypeError=&$x1046[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1046;$x1047=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1048=$x1047($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1048->class)&&$x1048->class===\'Error\'){$x1048->properties[\'file\']=\'<image>/09_date.js\';$x1048->properties[\'line\']=243;$x1048->properties[\'column\']=19;$x1048->attributes[\'file\']=$x1048->attributes[\'line\']=$x1048->attributes[\'column\']=0;}throw new JSException($x1048,243,19,\'<image>/09_date.js\');}$x1045=JS::toObject($leThis,$global);unset($x1049,$W1049,$S1049,$U1049);$x1050=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1045,(string)\'getFullYear\',243,19,\'<image>/09_date.js\');$x1049=&$x1050[0];list(,$W1049,$S1049,$U1049)=$x1050;if(!(is_object($x1049)&&isset($x1049->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1053=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,19,\'<image>/09_date.js\');$_TypeError=&$x1053[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1053;$x1054=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1055=$x1054($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1055->class)&&$x1055->class===\'Error\'){$x1055->properties[\'file\']=\'<image>/09_date.js\';$x1055->properties[\'line\']=243;$x1055->properties[\'column\']=19;$x1055->attributes[\'file\']=$x1055->attributes[\'line\']=$x1055->attributes[\'column\']=0;}throw new JSException($x1055,243,19,\'<image>/09_date.js\');}$x1051=$x1049->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1052=$x1051($global,$x1045,$x1049,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1057=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,36,\'<image>/09_date.js\');$_TypeError=&$x1057[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1057;$x1058=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1059=$x1058($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1059->class)&&$x1059->class===\'Error\'){$x1059->properties[\'file\']=\'<image>/09_date.js\';$x1059->properties[\'line\']=243;$x1059->properties[\'column\']=36;$x1059->attributes[\'file\']=$x1059->attributes[\'line\']=$x1059->attributes[\'column\']=0;}throw new JSException($x1059,243,36,\'<image>/09_date.js\');}$x1056=JS::toObject($leThis,$global);unset($x1060,$W1060,$S1060,$U1060);$x1061=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1056,(string)\'getMonth\',243,36,\'<image>/09_date.js\');$x1060=&$x1061[0];list(,$W1060,$S1060,$U1060)=$x1061;if(!(is_object($x1060)&&isset($x1060->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1064=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,36,\'<image>/09_date.js\');$_TypeError=&$x1064[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1064;$x1065=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1066=$x1065($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1066->class)&&$x1066->class===\'Error\'){$x1066->properties[\'file\']=\'<image>/09_date.js\';$x1066->properties[\'line\']=243;$x1066->properties[\'column\']=36;$x1066->attributes[\'file\']=$x1066->attributes[\'line\']=$x1066->attributes[\'column\']=0;}throw new JSException($x1066,243,36,\'<image>/09_date.js\');}$x1062=$x1060->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1063=$x1062($global,$x1056,$x1060,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1068=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,16,\'<image>/09_date.js\');$_TypeError=&$x1068[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1068;$x1069=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1070=$x1069($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1070->class)&&$x1070->class===\'Error\'){$x1070->properties[\'file\']=\'<image>/09_date.js\';$x1070->properties[\'line\']=244;$x1070->properties[\'column\']=16;$x1070->attributes[\'file\']=$x1070->attributes[\'line\']=$x1070->attributes[\'column\']=0;}throw new JSException($x1070,244,16,\'<image>/09_date.js\');}$x1067=JS::toObject($leThis,$global);unset($x1071,$W1071,$S1071,$U1071);$x1072=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1067,(string)\'getHours\',244,16,\'<image>/09_date.js\');$x1071=&$x1072[0];list(,$W1071,$S1071,$U1071)=$x1072;if(!(is_object($x1071)&&isset($x1071->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1075=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,16,\'<image>/09_date.js\');$_TypeError=&$x1075[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1075;$x1076=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1077=$x1076($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1077->class)&&$x1077->class===\'Error\'){$x1077->properties[\'file\']=\'<image>/09_date.js\';$x1077->properties[\'line\']=244;$x1077->properties[\'column\']=16;$x1077->attributes[\'file\']=$x1077->attributes[\'line\']=$x1077->attributes[\'column\']=0;}throw new JSException($x1077,244,16,\'<image>/09_date.js\');}$x1073=$x1071->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1074=$x1073($global,$x1067,$x1071,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1079=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,35,\'<image>/09_date.js\');$_TypeError=&$x1079[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1079;$x1080=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1081=$x1080($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1081->class)&&$x1081->class===\'Error\'){$x1081->properties[\'file\']=\'<image>/09_date.js\';$x1081->properties[\'line\']=244;$x1081->properties[\'column\']=35;$x1081->attributes[\'file\']=$x1081->attributes[\'line\']=$x1081->attributes[\'column\']=0;}throw new JSException($x1081,244,35,\'<image>/09_date.js\');}$x1078=JS::toObject($leThis,$global);unset($x1082,$W1082,$S1082,$U1082);$x1083=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1078,(string)\'getMinutes\',244,35,\'<image>/09_date.js\');$x1082=&$x1083[0];list(,$W1082,$S1082,$U1082)=$x1083;if(!(is_object($x1082)&&isset($x1082->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1086=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,35,\'<image>/09_date.js\');$_TypeError=&$x1086[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1086;$x1087=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1088=$x1087($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1088->class)&&$x1088->class===\'Error\'){$x1088->properties[\'file\']=\'<image>/09_date.js\';$x1088->properties[\'line\']=244;$x1088->properties[\'column\']=35;$x1088->attributes[\'file\']=$x1088->attributes[\'line\']=$x1088->attributes[\'column\']=0;}throw new JSException($x1088,244,35,\'<image>/09_date.js\');}$x1084=$x1082->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1085=$x1084($global,$x1078,$x1082,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1090=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,54,\'<image>/09_date.js\');$_TypeError=&$x1090[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1090;$x1091=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1092=$x1091($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1092->class)&&$x1092->class===\'Error\'){$x1092->properties[\'file\']=\'<image>/09_date.js\';$x1092->properties[\'line\']=244;$x1092->properties[\'column\']=54;$x1092->attributes[\'file\']=$x1092->attributes[\'line\']=$x1092->attributes[\'column\']=0;}throw new JSException($x1092,244,54,\'<image>/09_date.js\');}$x1089=JS::toObject($leThis,$global);unset($x1093,$W1093,$S1093,$U1093);$x1094=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1089,(string)\'getSeconds\',244,54,\'<image>/09_date.js\');$x1093=&$x1094[0];list(,$W1093,$S1093,$U1093)=$x1094;if(!(is_object($x1093)&&isset($x1093->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1097=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,54,\'<image>/09_date.js\');$_TypeError=&$x1097[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1097;$x1098=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1099=$x1098($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1099->class)&&$x1099->class===\'Error\'){$x1099->properties[\'file\']=\'<image>/09_date.js\';$x1099->properties[\'line\']=244;$x1099->properties[\'column\']=54;$x1099->attributes[\'file\']=$x1099->attributes[\'line\']=$x1099->attributes[\'column\']=0;}throw new JSException($x1099,244,54,\'<image>/09_date.js\');}$x1095=$x1093->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1096=$x1095($global,$x1089,$x1093,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1101=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,78,\'<image>/09_date.js\');$_TypeError=&$x1101[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1101;$x1102=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1103=$x1102($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1103->class)&&$x1103->class===\'Error\'){$x1103->properties[\'file\']=\'<image>/09_date.js\';$x1103->properties[\'line\']=244;$x1103->properties[\'column\']=78;$x1103->attributes[\'file\']=$x1103->attributes[\'line\']=$x1103->attributes[\'column\']=0;}throw new JSException($x1103,244,78,\'<image>/09_date.js\');}$x1100=JS::toObject($leThis,$global);unset($x1104,$W1104,$S1104,$U1104);$x1105=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1100,(string)\'getMilliseconds\',244,78,\'<image>/09_date.js\');$x1104=&$x1105[0];list(,$W1104,$S1104,$U1104)=$x1105;if(!(is_object($x1104)&&isset($x1104->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1108=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,78,\'<image>/09_date.js\');$_TypeError=&$x1108[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1108;$x1109=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1110=$x1109($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1110->class)&&$x1110->class===\'Error\'){$x1110->properties[\'file\']=\'<image>/09_date.js\';$x1110->properties[\'line\']=244;$x1110->properties[\'column\']=78;$x1110->attributes[\'file\']=$x1110->attributes[\'line\']=$x1110->attributes[\'column\']=0;}throw new JSException($x1110,244,78,\'<image>/09_date.js\');}$x1106=$x1104->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1107=$x1106($global,$x1100,$x1104,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1039=clone JS::$objectTemplate;unset($x1111,$W1111,$S1111,$U1111);$x1112=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',242,16,\'<image>/09_date.js\');$x1111=&$x1112[0];list(,$W1111,$S1111,$U1111)=$x1112;$x1040=$x1111;$x1039->prototype=$x1040;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1115=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',242,16,\'<image>/09_date.js\');$_TypeError=&$x1115[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1115;$x1116=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1117=$x1116($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1117->class)&&$x1117->class===\'Error\'){$x1117->properties[\'file\']=\'<image>/09_date.js\';$x1117->properties[\'line\']=242;$x1117->properties[\'column\']=16;$x1117->attributes[\'file\']=$x1117->attributes[\'line\']=$x1117->attributes[\'column\']=0;}throw new JSException($x1117,242,16,\'<image>/09_date.js\');}$x1113=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1114=$x1113($global,$x1039,$_Date,array($x1052,$x1063,$_date,$x1074,$x1085,$x1096,$x1107),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1040=$x1114;if(is_object($x1040)&&$x1040!==JS::$undefined){$x1039=$x1040;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1039;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_29($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1144 =& $scope->properties['arguments'];
$x1144->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1144->properties[$i] = $args[$i];
$x1144->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['month'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1145 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1145, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1147 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 256, 22, '<image>/09_date.js');
$_TypeError =& $x1147[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1147;
$x1148 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1149 = $x1148($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1149->class) && $x1149->class === 'Error') {$x1149->properties['file'] = '<image>/09_date.js';$x1149->properties['line'] = 256;$x1149->properties['column'] = 22;$x1149->attributes['file'] = $x1149->attributes['line'] = $x1149->attributes['column'] = 0; }
throw new JSException($x1149, 256, 22, '<image>/09_date.js');
}
$x1146 = JS::toObject($leThis, $global);
unset($x1150, $W1150, $S1150, $U1150);
$x1151 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1146, (string) 'getDate', 256, 22, '<image>/09_date.js');
$x1150 =& $x1151[0]; list(,$W1150,$S1150,$U1150) = $x1151;
if (!(is_object($x1150) && isset($x1150->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1154 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 256, 22, '<image>/09_date.js');
$_TypeError =& $x1154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1154;
$x1155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1156 = $x1155($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1156->class) && $x1156->class === 'Error') {$x1156->properties['file'] = '<image>/09_date.js';$x1156->properties['line'] = 256;$x1156->properties['column'] = 22;$x1156->attributes['file'] = $x1156->attributes['line'] = $x1156->attributes['column'] = 0; }
throw new JSException($x1156, 256, 22, '<image>/09_date.js');
}
$x1152 = $x1150->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1153 = $x1152($global, $x1146, $x1150, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1153;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1159 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 259, 20, '<image>/09_date.js');
$_Date =& $x1159[0]; list(,$WDate,$SDate,$UDate) = $x1159;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1160 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 259, 20, '<image>/09_date.js');
$_ReferenceError =& $x1160[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1160;
$x1161 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 20);
$x1162 = $x1161($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1162->class) && $x1162->class === 'Error') {$x1162->properties['file'] = '<image>/09_date.js';$x1162->properties['line'] = 259;$x1162->properties['column'] = 20;$x1162->attributes['file'] = $x1162->attributes['line'] = $x1162->attributes['column'] = 0; }
throw new JSException($x1162, 259, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1164 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 260, 19, '<image>/09_date.js');
$_TypeError =& $x1164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1164;
$x1165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1166 = $x1165($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1166->class) && $x1166->class === 'Error') {$x1166->properties['file'] = '<image>/09_date.js';$x1166->properties['line'] = 260;$x1166->properties['column'] = 19;$x1166->attributes['file'] = $x1166->attributes['line'] = $x1166->attributes['column'] = 0; }
throw new JSException($x1166, 260, 19, '<image>/09_date.js');
}
$x1163 = JS::toObject($leThis, $global);
unset($x1167, $W1167, $S1167, $U1167);
$x1168 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1163, (string) 'getFullYear', 260, 19, '<image>/09_date.js');
$x1167 =& $x1168[0]; list(,$W1167,$S1167,$U1167) = $x1168;
if (!(is_object($x1167) && isset($x1167->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1171 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 260, 19, '<image>/09_date.js');
$_TypeError =& $x1171[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1171;
$x1172 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1173 = $x1172($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1173->class) && $x1173->class === 'Error') {$x1173->properties['file'] = '<image>/09_date.js';$x1173->properties['line'] = 260;$x1173->properties['column'] = 19;$x1173->attributes['file'] = $x1173->attributes['line'] = $x1173->attributes['column'] = 0; }
throw new JSException($x1173, 260, 19, '<image>/09_date.js');
}
$x1169 = $x1167->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1170 = $x1169($global, $x1163, $x1167, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1175 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 16, '<image>/09_date.js');
$_TypeError =& $x1175[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1175;
$x1176 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1177 = $x1176($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1177->class) && $x1177->class === 'Error') {$x1177->properties['file'] = '<image>/09_date.js';$x1177->properties['line'] = 261;$x1177->properties['column'] = 16;$x1177->attributes['file'] = $x1177->attributes['line'] = $x1177->attributes['column'] = 0; }
throw new JSException($x1177, 261, 16, '<image>/09_date.js');
}
$x1174 = JS::toObject($leThis, $global);
unset($x1178, $W1178, $S1178, $U1178);
$x1179 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1174, (string) 'getHours', 261, 16, '<image>/09_date.js');
$x1178 =& $x1179[0]; list(,$W1178,$S1178,$U1178) = $x1179;
if (!(is_object($x1178) && isset($x1178->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1182 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 16, '<image>/09_date.js');
$_TypeError =& $x1182[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1182;
$x1183 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1184 = $x1183($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1184->class) && $x1184->class === 'Error') {$x1184->properties['file'] = '<image>/09_date.js';$x1184->properties['line'] = 261;$x1184->properties['column'] = 16;$x1184->attributes['file'] = $x1184->attributes['line'] = $x1184->attributes['column'] = 0; }
throw new JSException($x1184, 261, 16, '<image>/09_date.js');
}
$x1180 = $x1178->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1181 = $x1180($global, $x1174, $x1178, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1186 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 35, '<image>/09_date.js');
$_TypeError =& $x1186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1186;
$x1187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1188 = $x1187($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1188->class) && $x1188->class === 'Error') {$x1188->properties['file'] = '<image>/09_date.js';$x1188->properties['line'] = 261;$x1188->properties['column'] = 35;$x1188->attributes['file'] = $x1188->attributes['line'] = $x1188->attributes['column'] = 0; }
throw new JSException($x1188, 261, 35, '<image>/09_date.js');
}
$x1185 = JS::toObject($leThis, $global);
unset($x1189, $W1189, $S1189, $U1189);
$x1190 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1185, (string) 'getMinutes', 261, 35, '<image>/09_date.js');
$x1189 =& $x1190[0]; list(,$W1189,$S1189,$U1189) = $x1190;
if (!(is_object($x1189) && isset($x1189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1193 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 35, '<image>/09_date.js');
$_TypeError =& $x1193[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1193;
$x1194 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1195 = $x1194($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1195->class) && $x1195->class === 'Error') {$x1195->properties['file'] = '<image>/09_date.js';$x1195->properties['line'] = 261;$x1195->properties['column'] = 35;$x1195->attributes['file'] = $x1195->attributes['line'] = $x1195->attributes['column'] = 0; }
throw new JSException($x1195, 261, 35, '<image>/09_date.js');
}
$x1191 = $x1189->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1192 = $x1191($global, $x1185, $x1189, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1197 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 54, '<image>/09_date.js');
$_TypeError =& $x1197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1197;
$x1198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1199 = $x1198($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1199->class) && $x1199->class === 'Error') {$x1199->properties['file'] = '<image>/09_date.js';$x1199->properties['line'] = 261;$x1199->properties['column'] = 54;$x1199->attributes['file'] = $x1199->attributes['line'] = $x1199->attributes['column'] = 0; }
throw new JSException($x1199, 261, 54, '<image>/09_date.js');
}
$x1196 = JS::toObject($leThis, $global);
unset($x1200, $W1200, $S1200, $U1200);
$x1201 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1196, (string) 'getSeconds', 261, 54, '<image>/09_date.js');
$x1200 =& $x1201[0]; list(,$W1200,$S1200,$U1200) = $x1201;
if (!(is_object($x1200) && isset($x1200->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1204 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 54, '<image>/09_date.js');
$_TypeError =& $x1204[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1204;
$x1205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1206 = $x1205($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1206->class) && $x1206->class === 'Error') {$x1206->properties['file'] = '<image>/09_date.js';$x1206->properties['line'] = 261;$x1206->properties['column'] = 54;$x1206->attributes['file'] = $x1206->attributes['line'] = $x1206->attributes['column'] = 0; }
throw new JSException($x1206, 261, 54, '<image>/09_date.js');
}
$x1202 = $x1200->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1203 = $x1202($global, $x1196, $x1200, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1208 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 78, '<image>/09_date.js');
$_TypeError =& $x1208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1208;
$x1209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1210 = $x1209($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1210->class) && $x1210->class === 'Error') {$x1210->properties['file'] = '<image>/09_date.js';$x1210->properties['line'] = 261;$x1210->properties['column'] = 78;$x1210->attributes['file'] = $x1210->attributes['line'] = $x1210->attributes['column'] = 0; }
throw new JSException($x1210, 261, 78, '<image>/09_date.js');
}
$x1207 = JS::toObject($leThis, $global);
unset($x1211, $W1211, $S1211, $U1211);
$x1212 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1207, (string) 'getMilliseconds', 261, 78, '<image>/09_date.js');
$x1211 =& $x1212[0]; list(,$W1211,$S1211,$U1211) = $x1212;
if (!(is_object($x1211) && isset($x1211->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1215 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 78, '<image>/09_date.js');
$_TypeError =& $x1215[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1215;
$x1216 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1217 = $x1216($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1217->class) && $x1217->class === 'Error') {$x1217->properties['file'] = '<image>/09_date.js';$x1217->properties['line'] = 261;$x1217->properties['column'] = 78;$x1217->attributes['file'] = $x1217->attributes['line'] = $x1217->attributes['column'] = 0; }
throw new JSException($x1217, 261, 78, '<image>/09_date.js');
}
$x1213 = $x1211->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1214 = $x1213($global, $x1207, $x1211, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1157 = clone JS::$objectTemplate;
unset($x1218, $W1218, $S1218, $U1218);
$x1219 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 259, 16, '<image>/09_date.js');
$x1218 =& $x1219[0]; list(,$W1218,$S1218,$U1218) = $x1219;
$x1158 = $x1218;
$x1157->prototype = $x1158;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1222 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 259, 16, '<image>/09_date.js');
$_TypeError =& $x1222[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1222;
$x1223 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1224 = $x1223($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1224->class) && $x1224->class === 'Error') {$x1224->properties['file'] = '<image>/09_date.js';$x1224->properties['line'] = 259;$x1224->properties['column'] = 16;$x1224->attributes['file'] = $x1224->attributes['line'] = $x1224->attributes['column'] = 0; }
throw new JSException($x1224, 259, 16, '<image>/09_date.js');
}
$x1220 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1221 = $x1220($global, $x1157, $_Date, array($x1170, $_month, $_date, $x1181, $x1192, $x1203, $x1214), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1158 = $x1221;
if (is_object($x1158) && $x1158 !== JS::$undefined) { $x1157 = $x1158; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1157;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_29($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1144=&$scope->properties[\'arguments\'];$x1144->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1144->properties[$i]=$args[$i];$x1144->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'month\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1145=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1145,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1147=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',256,22,\'<image>/09_date.js\');$_TypeError=&$x1147[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1147;$x1148=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1149=$x1148($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1149->class)&&$x1149->class===\'Error\'){$x1149->properties[\'file\']=\'<image>/09_date.js\';$x1149->properties[\'line\']=256;$x1149->properties[\'column\']=22;$x1149->attributes[\'file\']=$x1149->attributes[\'line\']=$x1149->attributes[\'column\']=0;}throw new JSException($x1149,256,22,\'<image>/09_date.js\');}$x1146=JS::toObject($leThis,$global);unset($x1150,$W1150,$S1150,$U1150);$x1151=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1146,(string)\'getDate\',256,22,\'<image>/09_date.js\');$x1150=&$x1151[0];list(,$W1150,$S1150,$U1150)=$x1151;if(!(is_object($x1150)&&isset($x1150->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1154=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',256,22,\'<image>/09_date.js\');$_TypeError=&$x1154[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1154;$x1155=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1156=$x1155($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1156->class)&&$x1156->class===\'Error\'){$x1156->properties[\'file\']=\'<image>/09_date.js\';$x1156->properties[\'line\']=256;$x1156->properties[\'column\']=22;$x1156->attributes[\'file\']=$x1156->attributes[\'line\']=$x1156->attributes[\'column\']=0;}throw new JSException($x1156,256,22,\'<image>/09_date.js\');}$x1152=$x1150->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1153=$x1152($global,$x1146,$x1150,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1153;}unset($_Date,$WDate,$SDate,$UDate);$x1159=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',259,20,\'<image>/09_date.js\');$_Date=&$x1159[0];list(,$WDate,$SDate,$UDate)=$x1159;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1160=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',259,20,\'<image>/09_date.js\');$_ReferenceError=&$x1160[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1160;$x1161=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,20);$x1162=$x1161($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1162->class)&&$x1162->class===\'Error\'){$x1162->properties[\'file\']=\'<image>/09_date.js\';$x1162->properties[\'line\']=259;$x1162->properties[\'column\']=20;$x1162->attributes[\'file\']=$x1162->attributes[\'line\']=$x1162->attributes[\'column\']=0;}throw new JSException($x1162,259,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1164=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',260,19,\'<image>/09_date.js\');$_TypeError=&$x1164[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1164;$x1165=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1166=$x1165($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1166->class)&&$x1166->class===\'Error\'){$x1166->properties[\'file\']=\'<image>/09_date.js\';$x1166->properties[\'line\']=260;$x1166->properties[\'column\']=19;$x1166->attributes[\'file\']=$x1166->attributes[\'line\']=$x1166->attributes[\'column\']=0;}throw new JSException($x1166,260,19,\'<image>/09_date.js\');}$x1163=JS::toObject($leThis,$global);unset($x1167,$W1167,$S1167,$U1167);$x1168=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1163,(string)\'getFullYear\',260,19,\'<image>/09_date.js\');$x1167=&$x1168[0];list(,$W1167,$S1167,$U1167)=$x1168;if(!(is_object($x1167)&&isset($x1167->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1171=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',260,19,\'<image>/09_date.js\');$_TypeError=&$x1171[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1171;$x1172=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1173=$x1172($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1173->class)&&$x1173->class===\'Error\'){$x1173->properties[\'file\']=\'<image>/09_date.js\';$x1173->properties[\'line\']=260;$x1173->properties[\'column\']=19;$x1173->attributes[\'file\']=$x1173->attributes[\'line\']=$x1173->attributes[\'column\']=0;}throw new JSException($x1173,260,19,\'<image>/09_date.js\');}$x1169=$x1167->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1170=$x1169($global,$x1163,$x1167,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1175=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,16,\'<image>/09_date.js\');$_TypeError=&$x1175[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1175;$x1176=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1177=$x1176($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1177->class)&&$x1177->class===\'Error\'){$x1177->properties[\'file\']=\'<image>/09_date.js\';$x1177->properties[\'line\']=261;$x1177->properties[\'column\']=16;$x1177->attributes[\'file\']=$x1177->attributes[\'line\']=$x1177->attributes[\'column\']=0;}throw new JSException($x1177,261,16,\'<image>/09_date.js\');}$x1174=JS::toObject($leThis,$global);unset($x1178,$W1178,$S1178,$U1178);$x1179=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1174,(string)\'getHours\',261,16,\'<image>/09_date.js\');$x1178=&$x1179[0];list(,$W1178,$S1178,$U1178)=$x1179;if(!(is_object($x1178)&&isset($x1178->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1182=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,16,\'<image>/09_date.js\');$_TypeError=&$x1182[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1182;$x1183=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1184=$x1183($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1184->class)&&$x1184->class===\'Error\'){$x1184->properties[\'file\']=\'<image>/09_date.js\';$x1184->properties[\'line\']=261;$x1184->properties[\'column\']=16;$x1184->attributes[\'file\']=$x1184->attributes[\'line\']=$x1184->attributes[\'column\']=0;}throw new JSException($x1184,261,16,\'<image>/09_date.js\');}$x1180=$x1178->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1181=$x1180($global,$x1174,$x1178,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1186=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,35,\'<image>/09_date.js\');$_TypeError=&$x1186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1186;$x1187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1188=$x1187($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1188->class)&&$x1188->class===\'Error\'){$x1188->properties[\'file\']=\'<image>/09_date.js\';$x1188->properties[\'line\']=261;$x1188->properties[\'column\']=35;$x1188->attributes[\'file\']=$x1188->attributes[\'line\']=$x1188->attributes[\'column\']=0;}throw new JSException($x1188,261,35,\'<image>/09_date.js\');}$x1185=JS::toObject($leThis,$global);unset($x1189,$W1189,$S1189,$U1189);$x1190=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1185,(string)\'getMinutes\',261,35,\'<image>/09_date.js\');$x1189=&$x1190[0];list(,$W1189,$S1189,$U1189)=$x1190;if(!(is_object($x1189)&&isset($x1189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1193=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,35,\'<image>/09_date.js\');$_TypeError=&$x1193[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1193;$x1194=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1195=$x1194($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1195->class)&&$x1195->class===\'Error\'){$x1195->properties[\'file\']=\'<image>/09_date.js\';$x1195->properties[\'line\']=261;$x1195->properties[\'column\']=35;$x1195->attributes[\'file\']=$x1195->attributes[\'line\']=$x1195->attributes[\'column\']=0;}throw new JSException($x1195,261,35,\'<image>/09_date.js\');}$x1191=$x1189->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1192=$x1191($global,$x1185,$x1189,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1197=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,54,\'<image>/09_date.js\');$_TypeError=&$x1197[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1197;$x1198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1199=$x1198($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1199->class)&&$x1199->class===\'Error\'){$x1199->properties[\'file\']=\'<image>/09_date.js\';$x1199->properties[\'line\']=261;$x1199->properties[\'column\']=54;$x1199->attributes[\'file\']=$x1199->attributes[\'line\']=$x1199->attributes[\'column\']=0;}throw new JSException($x1199,261,54,\'<image>/09_date.js\');}$x1196=JS::toObject($leThis,$global);unset($x1200,$W1200,$S1200,$U1200);$x1201=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1196,(string)\'getSeconds\',261,54,\'<image>/09_date.js\');$x1200=&$x1201[0];list(,$W1200,$S1200,$U1200)=$x1201;if(!(is_object($x1200)&&isset($x1200->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1204=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,54,\'<image>/09_date.js\');$_TypeError=&$x1204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1204;$x1205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1206=$x1205($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1206->class)&&$x1206->class===\'Error\'){$x1206->properties[\'file\']=\'<image>/09_date.js\';$x1206->properties[\'line\']=261;$x1206->properties[\'column\']=54;$x1206->attributes[\'file\']=$x1206->attributes[\'line\']=$x1206->attributes[\'column\']=0;}throw new JSException($x1206,261,54,\'<image>/09_date.js\');}$x1202=$x1200->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1203=$x1202($global,$x1196,$x1200,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1208=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,78,\'<image>/09_date.js\');$_TypeError=&$x1208[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1208;$x1209=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1210=$x1209($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1210->class)&&$x1210->class===\'Error\'){$x1210->properties[\'file\']=\'<image>/09_date.js\';$x1210->properties[\'line\']=261;$x1210->properties[\'column\']=78;$x1210->attributes[\'file\']=$x1210->attributes[\'line\']=$x1210->attributes[\'column\']=0;}throw new JSException($x1210,261,78,\'<image>/09_date.js\');}$x1207=JS::toObject($leThis,$global);unset($x1211,$W1211,$S1211,$U1211);$x1212=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1207,(string)\'getMilliseconds\',261,78,\'<image>/09_date.js\');$x1211=&$x1212[0];list(,$W1211,$S1211,$U1211)=$x1212;if(!(is_object($x1211)&&isset($x1211->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1215=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,78,\'<image>/09_date.js\');$_TypeError=&$x1215[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1215;$x1216=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1217=$x1216($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1217->class)&&$x1217->class===\'Error\'){$x1217->properties[\'file\']=\'<image>/09_date.js\';$x1217->properties[\'line\']=261;$x1217->properties[\'column\']=78;$x1217->attributes[\'file\']=$x1217->attributes[\'line\']=$x1217->attributes[\'column\']=0;}throw new JSException($x1217,261,78,\'<image>/09_date.js\');}$x1213=$x1211->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1214=$x1213($global,$x1207,$x1211,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1157=clone JS::$objectTemplate;unset($x1218,$W1218,$S1218,$U1218);$x1219=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',259,16,\'<image>/09_date.js\');$x1218=&$x1219[0];list(,$W1218,$S1218,$U1218)=$x1219;$x1158=$x1218;$x1157->prototype=$x1158;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1222=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',259,16,\'<image>/09_date.js\');$_TypeError=&$x1222[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1222;$x1223=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1224=$x1223($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1224->class)&&$x1224->class===\'Error\'){$x1224->properties[\'file\']=\'<image>/09_date.js\';$x1224->properties[\'line\']=259;$x1224->properties[\'column\']=16;$x1224->attributes[\'file\']=$x1224->attributes[\'line\']=$x1224->attributes[\'column\']=0;}throw new JSException($x1224,259,16,\'<image>/09_date.js\');}$x1220=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1221=$x1220($global,$x1157,$_Date,array($x1170,$_month,$_date,$x1181,$x1192,$x1203,$x1214),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1158=$x1221;if(is_object($x1158)&&$x1158!==JS::$undefined){$x1157=$x1158;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1157;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_30($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1251 =& $scope->properties['arguments'];
$x1251->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1251->properties[$i] = $args[$i];
$x1251->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['year'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_year =& $scope->properties['year'];
$Uyear = FALSE;
$scope->properties['month'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1252 = (((gettype($_month) === gettype(JS::$undefined) && $_month === JS::$undefined))|| (((is_float($_month) || is_int($_month)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_month == JS::$undefined));
if (JS::toBoolean($x1252, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1254 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 273, 24, '<image>/09_date.js');
$_TypeError =& $x1254[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1254;
$x1255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1256 = $x1255($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1256->class) && $x1256->class === 'Error') {$x1256->properties['file'] = '<image>/09_date.js';$x1256->properties['line'] = 273;$x1256->properties['column'] = 24;$x1256->attributes['file'] = $x1256->attributes['line'] = $x1256->attributes['column'] = 0; }
throw new JSException($x1256, 273, 24, '<image>/09_date.js');
}
$x1253 = JS::toObject($leThis, $global);
unset($x1257, $W1257, $S1257, $U1257);
$x1258 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1253, (string) 'getMonth', 273, 24, '<image>/09_date.js');
$x1257 =& $x1258[0]; list(,$W1257,$S1257,$U1257) = $x1258;
if (!(is_object($x1257) && isset($x1257->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1261 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 273, 24, '<image>/09_date.js');
$_TypeError =& $x1261[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1261;
$x1262 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1263 = $x1262($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1263->class) && $x1263->class === 'Error') {$x1263->properties['file'] = '<image>/09_date.js';$x1263->properties['line'] = 273;$x1263->properties['column'] = 24;$x1263->attributes['file'] = $x1263->attributes['line'] = $x1263->attributes['column'] = 0; }
throw new JSException($x1263, 273, 24, '<image>/09_date.js');
}
$x1259 = $x1257->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1260 = $x1259($global, $x1253, $x1257, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umonth) {$global->properties['month'] = $_month; $_month =& $global->properties['month']; }
$_month = $x1260;;
};
$x1264 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1264, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1266 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 277, 22, '<image>/09_date.js');
$_TypeError =& $x1266[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1266;
$x1267 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1268 = $x1267($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1268->class) && $x1268->class === 'Error') {$x1268->properties['file'] = '<image>/09_date.js';$x1268->properties['line'] = 277;$x1268->properties['column'] = 22;$x1268->attributes['file'] = $x1268->attributes['line'] = $x1268->attributes['column'] = 0; }
throw new JSException($x1268, 277, 22, '<image>/09_date.js');
}
$x1265 = JS::toObject($leThis, $global);
unset($x1269, $W1269, $S1269, $U1269);
$x1270 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1265, (string) 'getDate', 277, 22, '<image>/09_date.js');
$x1269 =& $x1270[0]; list(,$W1269,$S1269,$U1269) = $x1270;
if (!(is_object($x1269) && isset($x1269->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1273 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 277, 22, '<image>/09_date.js');
$_TypeError =& $x1273[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1273;
$x1274 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1275 = $x1274($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1275->class) && $x1275->class === 'Error') {$x1275->properties['file'] = '<image>/09_date.js';$x1275->properties['line'] = 277;$x1275->properties['column'] = 22;$x1275->attributes['file'] = $x1275->attributes['line'] = $x1275->attributes['column'] = 0; }
throw new JSException($x1275, 277, 22, '<image>/09_date.js');
}
$x1271 = $x1269->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1272 = $x1271($global, $x1265, $x1269, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1272;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1278 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 280, 20, '<image>/09_date.js');
$_Date =& $x1278[0]; list(,$WDate,$SDate,$UDate) = $x1278;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1279 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 280, 20, '<image>/09_date.js');
$_ReferenceError =& $x1279[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1279;
$x1280 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 20);
$x1281 = $x1280($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1281->class) && $x1281->class === 'Error') {$x1281->properties['file'] = '<image>/09_date.js';$x1281->properties['line'] = 280;$x1281->properties['column'] = 20;$x1281->attributes['file'] = $x1281->attributes['line'] = $x1281->attributes['column'] = 0; }
throw new JSException($x1281, 280, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1283 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 16, '<image>/09_date.js');
$_TypeError =& $x1283[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1283;
$x1284 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1285 = $x1284($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1285->class) && $x1285->class === 'Error') {$x1285->properties['file'] = '<image>/09_date.js';$x1285->properties['line'] = 282;$x1285->properties['column'] = 16;$x1285->attributes['file'] = $x1285->attributes['line'] = $x1285->attributes['column'] = 0; }
throw new JSException($x1285, 282, 16, '<image>/09_date.js');
}
$x1282 = JS::toObject($leThis, $global);
unset($x1286, $W1286, $S1286, $U1286);
$x1287 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1282, (string) 'getHours', 282, 16, '<image>/09_date.js');
$x1286 =& $x1287[0]; list(,$W1286,$S1286,$U1286) = $x1287;
if (!(is_object($x1286) && isset($x1286->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1290 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 16, '<image>/09_date.js');
$_TypeError =& $x1290[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1290;
$x1291 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1292 = $x1291($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1292->class) && $x1292->class === 'Error') {$x1292->properties['file'] = '<image>/09_date.js';$x1292->properties['line'] = 282;$x1292->properties['column'] = 16;$x1292->attributes['file'] = $x1292->attributes['line'] = $x1292->attributes['column'] = 0; }
throw new JSException($x1292, 282, 16, '<image>/09_date.js');
}
$x1288 = $x1286->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1289 = $x1288($global, $x1282, $x1286, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1294 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 35, '<image>/09_date.js');
$_TypeError =& $x1294[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1294;
$x1295 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1296 = $x1295($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1296->class) && $x1296->class === 'Error') {$x1296->properties['file'] = '<image>/09_date.js';$x1296->properties['line'] = 282;$x1296->properties['column'] = 35;$x1296->attributes['file'] = $x1296->attributes['line'] = $x1296->attributes['column'] = 0; }
throw new JSException($x1296, 282, 35, '<image>/09_date.js');
}
$x1293 = JS::toObject($leThis, $global);
unset($x1297, $W1297, $S1297, $U1297);
$x1298 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1293, (string) 'getMinutes', 282, 35, '<image>/09_date.js');
$x1297 =& $x1298[0]; list(,$W1297,$S1297,$U1297) = $x1298;
if (!(is_object($x1297) && isset($x1297->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1301 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 35, '<image>/09_date.js');
$_TypeError =& $x1301[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1301;
$x1302 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1303 = $x1302($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1303->class) && $x1303->class === 'Error') {$x1303->properties['file'] = '<image>/09_date.js';$x1303->properties['line'] = 282;$x1303->properties['column'] = 35;$x1303->attributes['file'] = $x1303->attributes['line'] = $x1303->attributes['column'] = 0; }
throw new JSException($x1303, 282, 35, '<image>/09_date.js');
}
$x1299 = $x1297->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1300 = $x1299($global, $x1293, $x1297, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1305 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 54, '<image>/09_date.js');
$_TypeError =& $x1305[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1305;
$x1306 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1307 = $x1306($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1307->class) && $x1307->class === 'Error') {$x1307->properties['file'] = '<image>/09_date.js';$x1307->properties['line'] = 282;$x1307->properties['column'] = 54;$x1307->attributes['file'] = $x1307->attributes['line'] = $x1307->attributes['column'] = 0; }
throw new JSException($x1307, 282, 54, '<image>/09_date.js');
}
$x1304 = JS::toObject($leThis, $global);
unset($x1308, $W1308, $S1308, $U1308);
$x1309 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1304, (string) 'getSeconds', 282, 54, '<image>/09_date.js');
$x1308 =& $x1309[0]; list(,$W1308,$S1308,$U1308) = $x1309;
if (!(is_object($x1308) && isset($x1308->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1312 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 54, '<image>/09_date.js');
$_TypeError =& $x1312[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1312;
$x1313 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1314 = $x1313($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1314->class) && $x1314->class === 'Error') {$x1314->properties['file'] = '<image>/09_date.js';$x1314->properties['line'] = 282;$x1314->properties['column'] = 54;$x1314->attributes['file'] = $x1314->attributes['line'] = $x1314->attributes['column'] = 0; }
throw new JSException($x1314, 282, 54, '<image>/09_date.js');
}
$x1310 = $x1308->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1311 = $x1310($global, $x1304, $x1308, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1316 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 78, '<image>/09_date.js');
$_TypeError =& $x1316[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1316;
$x1317 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1318 = $x1317($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1318->class) && $x1318->class === 'Error') {$x1318->properties['file'] = '<image>/09_date.js';$x1318->properties['line'] = 282;$x1318->properties['column'] = 78;$x1318->attributes['file'] = $x1318->attributes['line'] = $x1318->attributes['column'] = 0; }
throw new JSException($x1318, 282, 78, '<image>/09_date.js');
}
$x1315 = JS::toObject($leThis, $global);
unset($x1319, $W1319, $S1319, $U1319);
$x1320 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1315, (string) 'getMilliseconds', 282, 78, '<image>/09_date.js');
$x1319 =& $x1320[0]; list(,$W1319,$S1319,$U1319) = $x1320;
if (!(is_object($x1319) && isset($x1319->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1323 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 78, '<image>/09_date.js');
$_TypeError =& $x1323[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1323;
$x1324 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1325 = $x1324($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1325->class) && $x1325->class === 'Error') {$x1325->properties['file'] = '<image>/09_date.js';$x1325->properties['line'] = 282;$x1325->properties['column'] = 78;$x1325->attributes['file'] = $x1325->attributes['line'] = $x1325->attributes['column'] = 0; }
throw new JSException($x1325, 282, 78, '<image>/09_date.js');
}
$x1321 = $x1319->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1322 = $x1321($global, $x1315, $x1319, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1276 = clone JS::$objectTemplate;
unset($x1326, $W1326, $S1326, $U1326);
$x1327 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 280, 16, '<image>/09_date.js');
$x1326 =& $x1327[0]; list(,$W1326,$S1326,$U1326) = $x1327;
$x1277 = $x1326;
$x1276->prototype = $x1277;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1330 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 280, 16, '<image>/09_date.js');
$_TypeError =& $x1330[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1330;
$x1331 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1332 = $x1331($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1332->class) && $x1332->class === 'Error') {$x1332->properties['file'] = '<image>/09_date.js';$x1332->properties['line'] = 280;$x1332->properties['column'] = 16;$x1332->attributes['file'] = $x1332->attributes['line'] = $x1332->attributes['column'] = 0; }
throw new JSException($x1332, 280, 16, '<image>/09_date.js');
}
$x1328 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1329 = $x1328($global, $x1276, $_Date, array($_year, $_month, $_date, $x1289, $x1300, $x1311, $x1322), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1277 = $x1329;
if (is_object($x1277) && $x1277 !== JS::$undefined) { $x1276 = $x1277; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1276;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_30($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1251=&$scope->properties[\'arguments\'];$x1251->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1251->properties[$i]=$args[$i];$x1251->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1252=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x1252,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1254=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',273,24,\'<image>/09_date.js\');$_TypeError=&$x1254[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1254;$x1255=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1256=$x1255($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1256->class)&&$x1256->class===\'Error\'){$x1256->properties[\'file\']=\'<image>/09_date.js\';$x1256->properties[\'line\']=273;$x1256->properties[\'column\']=24;$x1256->attributes[\'file\']=$x1256->attributes[\'line\']=$x1256->attributes[\'column\']=0;}throw new JSException($x1256,273,24,\'<image>/09_date.js\');}$x1253=JS::toObject($leThis,$global);unset($x1257,$W1257,$S1257,$U1257);$x1258=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1253,(string)\'getMonth\',273,24,\'<image>/09_date.js\');$x1257=&$x1258[0];list(,$W1257,$S1257,$U1257)=$x1258;if(!(is_object($x1257)&&isset($x1257->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1261=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',273,24,\'<image>/09_date.js\');$_TypeError=&$x1261[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1261;$x1262=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1263=$x1262($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1263->class)&&$x1263->class===\'Error\'){$x1263->properties[\'file\']=\'<image>/09_date.js\';$x1263->properties[\'line\']=273;$x1263->properties[\'column\']=24;$x1263->attributes[\'file\']=$x1263->attributes[\'line\']=$x1263->attributes[\'column\']=0;}throw new JSException($x1263,273,24,\'<image>/09_date.js\');}$x1259=$x1257->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1260=$x1259($global,$x1253,$x1257,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umonth){$global->properties[\'month\']=$_month;$_month=&$global->properties[\'month\'];}$_month=$x1260;}$x1264=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1264,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1266=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',277,22,\'<image>/09_date.js\');$_TypeError=&$x1266[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1266;$x1267=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1268=$x1267($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1268->class)&&$x1268->class===\'Error\'){$x1268->properties[\'file\']=\'<image>/09_date.js\';$x1268->properties[\'line\']=277;$x1268->properties[\'column\']=22;$x1268->attributes[\'file\']=$x1268->attributes[\'line\']=$x1268->attributes[\'column\']=0;}throw new JSException($x1268,277,22,\'<image>/09_date.js\');}$x1265=JS::toObject($leThis,$global);unset($x1269,$W1269,$S1269,$U1269);$x1270=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1265,(string)\'getDate\',277,22,\'<image>/09_date.js\');$x1269=&$x1270[0];list(,$W1269,$S1269,$U1269)=$x1270;if(!(is_object($x1269)&&isset($x1269->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1273=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',277,22,\'<image>/09_date.js\');$_TypeError=&$x1273[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1273;$x1274=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1275=$x1274($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1275->class)&&$x1275->class===\'Error\'){$x1275->properties[\'file\']=\'<image>/09_date.js\';$x1275->properties[\'line\']=277;$x1275->properties[\'column\']=22;$x1275->attributes[\'file\']=$x1275->attributes[\'line\']=$x1275->attributes[\'column\']=0;}throw new JSException($x1275,277,22,\'<image>/09_date.js\');}$x1271=$x1269->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1272=$x1271($global,$x1265,$x1269,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1272;}unset($_Date,$WDate,$SDate,$UDate);$x1278=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',280,20,\'<image>/09_date.js\');$_Date=&$x1278[0];list(,$WDate,$SDate,$UDate)=$x1278;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1279=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',280,20,\'<image>/09_date.js\');$_ReferenceError=&$x1279[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1279;$x1280=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,20);$x1281=$x1280($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1281->class)&&$x1281->class===\'Error\'){$x1281->properties[\'file\']=\'<image>/09_date.js\';$x1281->properties[\'line\']=280;$x1281->properties[\'column\']=20;$x1281->attributes[\'file\']=$x1281->attributes[\'line\']=$x1281->attributes[\'column\']=0;}throw new JSException($x1281,280,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1283=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,16,\'<image>/09_date.js\');$_TypeError=&$x1283[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1283;$x1284=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1285=$x1284($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1285->class)&&$x1285->class===\'Error\'){$x1285->properties[\'file\']=\'<image>/09_date.js\';$x1285->properties[\'line\']=282;$x1285->properties[\'column\']=16;$x1285->attributes[\'file\']=$x1285->attributes[\'line\']=$x1285->attributes[\'column\']=0;}throw new JSException($x1285,282,16,\'<image>/09_date.js\');}$x1282=JS::toObject($leThis,$global);unset($x1286,$W1286,$S1286,$U1286);$x1287=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1282,(string)\'getHours\',282,16,\'<image>/09_date.js\');$x1286=&$x1287[0];list(,$W1286,$S1286,$U1286)=$x1287;if(!(is_object($x1286)&&isset($x1286->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1290=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,16,\'<image>/09_date.js\');$_TypeError=&$x1290[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1290;$x1291=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1292=$x1291($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1292->class)&&$x1292->class===\'Error\'){$x1292->properties[\'file\']=\'<image>/09_date.js\';$x1292->properties[\'line\']=282;$x1292->properties[\'column\']=16;$x1292->attributes[\'file\']=$x1292->attributes[\'line\']=$x1292->attributes[\'column\']=0;}throw new JSException($x1292,282,16,\'<image>/09_date.js\');}$x1288=$x1286->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1289=$x1288($global,$x1282,$x1286,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1294=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,35,\'<image>/09_date.js\');$_TypeError=&$x1294[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1294;$x1295=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1296=$x1295($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1296->class)&&$x1296->class===\'Error\'){$x1296->properties[\'file\']=\'<image>/09_date.js\';$x1296->properties[\'line\']=282;$x1296->properties[\'column\']=35;$x1296->attributes[\'file\']=$x1296->attributes[\'line\']=$x1296->attributes[\'column\']=0;}throw new JSException($x1296,282,35,\'<image>/09_date.js\');}$x1293=JS::toObject($leThis,$global);unset($x1297,$W1297,$S1297,$U1297);$x1298=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1293,(string)\'getMinutes\',282,35,\'<image>/09_date.js\');$x1297=&$x1298[0];list(,$W1297,$S1297,$U1297)=$x1298;if(!(is_object($x1297)&&isset($x1297->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1301=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,35,\'<image>/09_date.js\');$_TypeError=&$x1301[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1301;$x1302=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1303=$x1302($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1303->class)&&$x1303->class===\'Error\'){$x1303->properties[\'file\']=\'<image>/09_date.js\';$x1303->properties[\'line\']=282;$x1303->properties[\'column\']=35;$x1303->attributes[\'file\']=$x1303->attributes[\'line\']=$x1303->attributes[\'column\']=0;}throw new JSException($x1303,282,35,\'<image>/09_date.js\');}$x1299=$x1297->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1300=$x1299($global,$x1293,$x1297,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1305=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,54,\'<image>/09_date.js\');$_TypeError=&$x1305[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1305;$x1306=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1307=$x1306($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1307->class)&&$x1307->class===\'Error\'){$x1307->properties[\'file\']=\'<image>/09_date.js\';$x1307->properties[\'line\']=282;$x1307->properties[\'column\']=54;$x1307->attributes[\'file\']=$x1307->attributes[\'line\']=$x1307->attributes[\'column\']=0;}throw new JSException($x1307,282,54,\'<image>/09_date.js\');}$x1304=JS::toObject($leThis,$global);unset($x1308,$W1308,$S1308,$U1308);$x1309=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1304,(string)\'getSeconds\',282,54,\'<image>/09_date.js\');$x1308=&$x1309[0];list(,$W1308,$S1308,$U1308)=$x1309;if(!(is_object($x1308)&&isset($x1308->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1312=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,54,\'<image>/09_date.js\');$_TypeError=&$x1312[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1312;$x1313=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1314=$x1313($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1314->class)&&$x1314->class===\'Error\'){$x1314->properties[\'file\']=\'<image>/09_date.js\';$x1314->properties[\'line\']=282;$x1314->properties[\'column\']=54;$x1314->attributes[\'file\']=$x1314->attributes[\'line\']=$x1314->attributes[\'column\']=0;}throw new JSException($x1314,282,54,\'<image>/09_date.js\');}$x1310=$x1308->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1311=$x1310($global,$x1304,$x1308,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1316=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,78,\'<image>/09_date.js\');$_TypeError=&$x1316[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1316;$x1317=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1318=$x1317($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1318->class)&&$x1318->class===\'Error\'){$x1318->properties[\'file\']=\'<image>/09_date.js\';$x1318->properties[\'line\']=282;$x1318->properties[\'column\']=78;$x1318->attributes[\'file\']=$x1318->attributes[\'line\']=$x1318->attributes[\'column\']=0;}throw new JSException($x1318,282,78,\'<image>/09_date.js\');}$x1315=JS::toObject($leThis,$global);unset($x1319,$W1319,$S1319,$U1319);$x1320=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1315,(string)\'getMilliseconds\',282,78,\'<image>/09_date.js\');$x1319=&$x1320[0];list(,$W1319,$S1319,$U1319)=$x1320;if(!(is_object($x1319)&&isset($x1319->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1323=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,78,\'<image>/09_date.js\');$_TypeError=&$x1323[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1323;$x1324=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1325=$x1324($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1325->class)&&$x1325->class===\'Error\'){$x1325->properties[\'file\']=\'<image>/09_date.js\';$x1325->properties[\'line\']=282;$x1325->properties[\'column\']=78;$x1325->attributes[\'file\']=$x1325->attributes[\'line\']=$x1325->attributes[\'column\']=0;}throw new JSException($x1325,282,78,\'<image>/09_date.js\');}$x1321=$x1319->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1322=$x1321($global,$x1315,$x1319,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1276=clone JS::$objectTemplate;unset($x1326,$W1326,$S1326,$U1326);$x1327=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',280,16,\'<image>/09_date.js\');$x1326=&$x1327[0];list(,$W1326,$S1326,$U1326)=$x1327;$x1277=$x1326;$x1276->prototype=$x1277;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1330=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',280,16,\'<image>/09_date.js\');$_TypeError=&$x1330[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1330;$x1331=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1332=$x1331($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1332->class)&&$x1332->class===\'Error\'){$x1332->properties[\'file\']=\'<image>/09_date.js\';$x1332->properties[\'line\']=280;$x1332->properties[\'column\']=16;$x1332->attributes[\'file\']=$x1332->attributes[\'line\']=$x1332->attributes[\'column\']=0;}throw new JSException($x1332,280,16,\'<image>/09_date.js\');}$x1328=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1329=$x1328($global,$x1276,$_Date,array($_year,$_month,$_date,$x1289,$x1300,$x1311,$x1322),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1277=$x1329;if(is_object($x1277)&&$x1277!==JS::$undefined){$x1276=$x1277;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1276;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_31($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1373 =& $scope->properties['arguments'];
$x1373->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1373->properties[$i] = $args[$i];
$x1373->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value) .
		'T' . date('H:i:s', $leThis->value) .
		'.' . ((int) (($leThis->value - (int) $leThis->value) * 1000)) .
		date('P', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_31($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1373=&$scope->properties[\'arguments\'];$x1373->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1373->properties[$i]=$args[$i];$x1373->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value).\'T\'.date(\'H:i:s\',$leThis->value).\'.\'.((int)(($leThis->value-(int)$leThis->value)*1000)).date(\'P\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_32($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1386 =& $scope->properties['arguments'];
$x1386->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1386->properties[$i] = $args[$i];
$x1386->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['key'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_key =& $scope->properties['key'];
$Ukey = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1388 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 302, 25, '<image>/09_date.js');
$_TypeError =& $x1388[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1388;
$x1389 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1390 = $x1389($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1390->class) && $x1390->class === 'Error') {$x1390->properties['file'] = '<image>/09_date.js';$x1390->properties['line'] = 302;$x1390->properties['column'] = 25;$x1390->attributes['file'] = $x1390->attributes['line'] = $x1390->attributes['column'] = 0; }
throw new JSException($x1390, 302, 25, '<image>/09_date.js');
}
$x1387 = JS::toObject($leThis, $global);
unset($x1391, $W1391, $S1391, $U1391);
$x1392 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1387, (string) 'toISOString', 302, 25, '<image>/09_date.js');
$x1391 =& $x1392[0]; list(,$W1391,$S1391,$U1391) = $x1392;
if (!(is_object($x1391) && isset($x1391->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1395 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 302, 25, '<image>/09_date.js');
$_TypeError =& $x1395[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1395;
$x1396 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1397 = $x1396($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1397->class) && $x1397->class === 'Error') {$x1397->properties['file'] = '<image>/09_date.js';$x1397->properties['line'] = 302;$x1397->properties['column'] = 25;$x1397->attributes['file'] = $x1397->attributes['line'] = $x1397->attributes['column'] = 0; }
throw new JSException($x1397, 302, 25, '<image>/09_date.js');
}
$x1393 = $x1391->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1394 = $x1393($global, $x1387, $x1391, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x1394;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_32($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1386=&$scope->properties[\'arguments\'];$x1386->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1386->properties[$i]=$args[$i];$x1386->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'key\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_key=&$scope->properties[\'key\'];$Ukey=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1388=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',302,25,\'<image>/09_date.js\');$_TypeError=&$x1388[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1388;$x1389=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1390=$x1389($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1390->class)&&$x1390->class===\'Error\'){$x1390->properties[\'file\']=\'<image>/09_date.js\';$x1390->properties[\'line\']=302;$x1390->properties[\'column\']=25;$x1390->attributes[\'file\']=$x1390->attributes[\'line\']=$x1390->attributes[\'column\']=0;}throw new JSException($x1390,302,25,\'<image>/09_date.js\');}$x1387=JS::toObject($leThis,$global);unset($x1391,$W1391,$S1391,$U1391);$x1392=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1387,(string)\'toISOString\',302,25,\'<image>/09_date.js\');$x1391=&$x1392[0];list(,$W1391,$S1391,$U1391)=$x1392;if(!(is_object($x1391)&&isset($x1391->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1395=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',302,25,\'<image>/09_date.js\');$_TypeError=&$x1395[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1395;$x1396=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1397=$x1396($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1397->class)&&$x1397->class===\'Error\'){$x1397->properties[\'file\']=\'<image>/09_date.js\';$x1397->properties[\'line\']=302;$x1397->properties[\'column\']=25;$x1397->attributes[\'file\']=$x1397->attributes[\'line\']=$x1397->attributes[\'column\']=0;}throw new JSException($x1397,302,25,\'<image>/09_date.js\');}$x1393=$x1391->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1394=$x1393($global,$x1387,$x1391,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x1394;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/09_date.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/09_date.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Date;
$x116 = clone JS::$functionTemplate; $x116->call = '_a3686fcdd5b5a69538641de6dddfbea8_1'; $x116->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x116->name = 'Date'; $x116->scope = $scope; $x116->properties['prototype'] = clone JS::$objectTemplate; $x116->attributes['prototype'] = JS::WRITABLE; $x116->properties['prototype']->properties['constructor'] = $x116; $x116->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x116->properties['length'] = 7; $x116->attributes['length'] = 0;
$scope->properties['Date'] = JS::$undefined; $_Date =& $scope->properties['Date'];
$UDate = FALSE;
$_Date = $x116;
$x124 = clone JS::$functionTemplate; $x124->call = '_a3686fcdd5b5a69538641de6dddfbea8_4'; $x124->parameters = array (
  0 => 'string',
); $x124->scope = $scope; $x124->properties['prototype'] = clone JS::$objectTemplate; $x124->attributes['prototype'] = JS::WRITABLE; $x124->properties['prototype']->properties['constructor'] = $x124; $x124->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x124->properties['length'] = 1; $x124->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x125 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 53, 12, '<image>/09_date.js');
$_TypeError =& $x125[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x125;
$x126 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x127 = $x126($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x127->class) && $x127->class === 'Error') {$x127->properties['file'] = '<image>/09_date.js';$x127->properties['line'] = 53;$x127->properties['column'] = 12;$x127->attributes['file'] = $x127->attributes['line'] = $x127->attributes['column'] = 0; }
throw new JSException($x127, 53, 12, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x128, $W128, $S128, $U128);
$x132 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'parse', 53, 12, '<image>/09_date.js');
$x128 =& $x132[0]; list(,$W128,$S128,$U128) = $x132;
if ($U128 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['parse'] = $x128; $x128 =& $_Date->properties['parse']; $_Date->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U128 = FALSE; $W128 = TRUE; }
if (isset($S128)) {
$x134 = $S128->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x135 = $x134($global, $_Date, $S128, array($x124), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x133 = $x135;
} else {
if (!$U128) {$x133 = $x124;if ($W128) { $x128 = $x124; }  }
else { $x133 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('parse') && 'parse' >= $_Date->properties['length']) { $_Date->properties['length'] = 'parse' + 1; };
$x151 = clone JS::$functionTemplate; $x151->call = '_a3686fcdd5b5a69538641de6dddfbea8_6'; $x151->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x151->scope = $scope; $x151->properties['prototype'] = clone JS::$objectTemplate; $x151->attributes['prototype'] = JS::WRITABLE; $x151->properties['prototype']->properties['constructor'] = $x151; $x151->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x151->properties['length'] = 7; $x151->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x152 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 63, 10, '<image>/09_date.js');
$_TypeError =& $x152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x152;
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x154 = $x153($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error') {$x154->properties['file'] = '<image>/09_date.js';$x154->properties['line'] = 63;$x154->properties['column'] = 10;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 63, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x155, $W155, $S155, $U155);
$x156 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'UTC', 63, 10, '<image>/09_date.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
if ($U155 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['UTC'] = $x155; $x155 =& $_Date->properties['UTC']; $_Date->attributes['UTC'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U155 = FALSE; $W155 = TRUE; }
if (isset($S155)) {
$x158 = $S155->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x159 = $x158($global, $_Date, $S155, array($x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x157 = $x159;
} else {
if (!$U155) {$x157 = $x151;if ($W155) { $x155 = $x151; }  }
else { $x157 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('UTC') && 'UTC' >= $_Date->properties['length']) { $_Date->properties['length'] = 'UTC' + 1; };
$x175 = clone JS::$functionTemplate; $x175->call = '_a3686fcdd5b5a69538641de6dddfbea8_7'; $x175->parameters = array (
); $x175->scope = $scope; $x175->properties['prototype'] = clone JS::$objectTemplate; $x175->attributes['prototype'] = JS::WRITABLE; $x175->properties['prototype']->properties['constructor'] = $x175; $x175->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x175->properties['length'] = 0; $x175->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x176 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 67, 10, '<image>/09_date.js');
$_TypeError =& $x176[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x176;
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x178 = $x177($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error') {$x178->properties['file'] = '<image>/09_date.js';$x178->properties['line'] = 67;$x178->properties['column'] = 10;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 67, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x179, $W179, $S179, $U179);
$x180 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'now', 67, 10, '<image>/09_date.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
if ($U179 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['now'] = $x179; $x179 =& $_Date->properties['now']; $_Date->attributes['now'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U179 = FALSE; $W179 = TRUE; }
if (isset($S179)) {
$x182 = $S179->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x183 = $x182($global, $_Date, $S179, array($x175), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x181 = $x183;
} else {
if (!$U179) {$x181 = $x175;if ($W179) { $x179 = $x175; }  }
else { $x181 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('now') && 'now' >= $_Date->properties['length']) { $_Date->properties['length'] = 'now' + 1; };
$x184 = clone JS::$objectTemplate;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x185 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 71, 16, '<image>/09_date.js');
$_TypeError =& $x185[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x185;
$x186 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x187 = $x186($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x187->class) && $x187->class === 'Error') {$x187->properties['file'] = '<image>/09_date.js';$x187->properties['line'] = 71;$x187->properties['column'] = 16;$x187->attributes['file'] = $x187->attributes['line'] = $x187->attributes['column'] = 0; }
throw new JSException($x187, 71, 16, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x188, $W188, $S188, $U188);
$x189 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'prototype', 71, 16, '<image>/09_date.js');
$x188 =& $x189[0]; list(,$W188,$S188,$U188) = $x189;
if ($U188 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['prototype'] = $x188; $x188 =& $_Date->properties['prototype']; $_Date->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U188 = FALSE; $W188 = TRUE; }
if (isset($S188)) {
$x191 = $S188->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x192 = $x191($global, $_Date, $S188, array($x184), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x190 = $x192;
} else {
if (!$U188) {$x190 = $x184;if ($W188) { $x188 = $x184; }  }
else { $x190 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Date->properties['length']) { $_Date->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x193 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Object', 72, 49, '<image>/09_date.js');
$_Object =& $x193[0]; list(,$WObject,$SObject,$UObject) = $x193;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x194 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 72, 49, '<image>/09_date.js');
$_ReferenceError =& $x194[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x194;
$x195 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 72, 49);
$x196 = $x195($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x196->class) && $x196->class === 'Error') {$x196->properties['file'] = '<image>/09_date.js';$x196->properties['line'] = 72;$x196->properties['column'] = 49;$x196->attributes['file'] = $x196->attributes['line'] = $x196->attributes['column'] = 0; }
throw new JSException($x196, 72, 49, '<image>/09_date.js');
}
$_Date->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Date->properties['prototype']->class = 'Date';
$_Date->properties['prototype']->extensible = TRUE;
$_Date->properties['prototype']->value = NAN;
unset($x197, $W197, $S197, $U197);
$x198 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 76, 5, '<image>/09_date.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($x197 === JS::$undefined || $x197 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x199 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 76, 28, '<image>/09_date.js');
$_TypeError =& $x199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x199;
$x200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x201 = $x200($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x201->class) && $x201->class === 'Error') {$x201->properties['file'] = '<image>/09_date.js';$x201->properties['line'] = 76;$x201->properties['column'] = 28;$x201->attributes['file'] = $x201->attributes['line'] = $x201->attributes['column'] = 0; }
throw new JSException($x201, 76, 28, '<image>/09_date.js');
}
$x197 = JS::toObject($x197, $global);
unset($x202, $W202, $S202, $U202);
$x203 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x197, (string) 'constructor', 76, 28, '<image>/09_date.js');
$x202 =& $x203[0]; list(,$W202,$S202,$U202) = $x203;
if ($U202 && (!isset($x197->extensible) || $x197->extensible)) {$x197->properties['constructor'] = $x202; $x202 =& $x197->properties['constructor']; $x197->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U202 = FALSE; $W202 = TRUE; }
if (isset($S202)) {
$x205 = $S202->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x206 = $x205($global, $x197, $S202, array($_Date), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x204 = $x206;
} else {
if (!$U202) {$x204 = $_Date;if ($W202) { $x202 = $_Date; }  }
else { $x204 = JS::$undefined; }
}
if (isset($x197->class) && $x197->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x197->properties['length']) { $x197->properties['length'] = 'constructor' + 1; };
$x209 = clone JS::$functionTemplate; $x209->call = '_a3686fcdd5b5a69538641de6dddfbea8_8'; $x209->parameters = array (
); $x209->scope = $scope; $x209->properties['prototype'] = clone JS::$objectTemplate; $x209->attributes['prototype'] = JS::WRITABLE; $x209->properties['prototype']->properties['constructor'] = $x209; $x209->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x209->properties['length'] = 0; $x209->attributes['length'] = 0;
unset($x210, $W210, $S210, $U210);
$x211 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 78, 5, '<image>/09_date.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
if ($x210 === JS::$undefined || $x210 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x212 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 78, 25, '<image>/09_date.js');
$_TypeError =& $x212[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x212;
$x213 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x214 = $x213($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x214->class) && $x214->class === 'Error') {$x214->properties['file'] = '<image>/09_date.js';$x214->properties['line'] = 78;$x214->properties['column'] = 25;$x214->attributes['file'] = $x214->attributes['line'] = $x214->attributes['column'] = 0; }
throw new JSException($x214, 78, 25, '<image>/09_date.js');
}
$x210 = JS::toObject($x210, $global);
unset($x215, $W215, $S215, $U215);
$x216 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x210, (string) 'toString', 78, 25, '<image>/09_date.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
if ($U215 && (!isset($x210->extensible) || $x210->extensible)) {$x210->properties['toString'] = $x215; $x215 =& $x210->properties['toString']; $x210->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U215 = FALSE; $W215 = TRUE; }
if (isset($S215)) {
$x218 = $S215->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x219 = $x218($global, $x210, $S215, array($x209), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x217 = $x219;
} else {
if (!$U215) {$x217 = $x209;if ($W215) { $x215 = $x209; }  }
else { $x217 = JS::$undefined; }
}
if (isset($x210->class) && $x210->class === 'Array' &&  is_int('toString') && 'toString' >= $x210->properties['length']) { $x210->properties['length'] = 'toString' + 1; };
$x222 = clone JS::$functionTemplate; $x222->call = '_a3686fcdd5b5a69538641de6dddfbea8_9'; $x222->parameters = array (
); $x222->scope = $scope; $x222->properties['prototype'] = clone JS::$objectTemplate; $x222->attributes['prototype'] = JS::WRITABLE; $x222->properties['prototype']->properties['constructor'] = $x222; $x222->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x222->properties['length'] = 0; $x222->attributes['length'] = 0;
unset($x223, $W223, $S223, $U223);
$x224 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 82, 5, '<image>/09_date.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
if ($x223 === JS::$undefined || $x223 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x225 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 82, 29, '<image>/09_date.js');
$_TypeError =& $x225[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x225;
$x226 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x227 = $x226($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error') {$x227->properties['file'] = '<image>/09_date.js';$x227->properties['line'] = 82;$x227->properties['column'] = 29;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 82, 29, '<image>/09_date.js');
}
$x223 = JS::toObject($x223, $global);
unset($x228, $W228, $S228, $U228);
$x229 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x223, (string) 'toDateString', 82, 29, '<image>/09_date.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
if ($U228 && (!isset($x223->extensible) || $x223->extensible)) {$x223->properties['toDateString'] = $x228; $x228 =& $x223->properties['toDateString']; $x223->attributes['toDateString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U228 = FALSE; $W228 = TRUE; }
if (isset($S228)) {
$x231 = $S228->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x232 = $x231($global, $x223, $S228, array($x222), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x230 = $x232;
} else {
if (!$U228) {$x230 = $x222;if ($W228) { $x228 = $x222; }  }
else { $x230 = JS::$undefined; }
}
if (isset($x223->class) && $x223->class === 'Array' &&  is_int('toDateString') && 'toDateString' >= $x223->properties['length']) { $x223->properties['length'] = 'toDateString' + 1; };
$x235 = clone JS::$functionTemplate; $x235->call = '_a3686fcdd5b5a69538641de6dddfbea8_10'; $x235->parameters = array (
); $x235->scope = $scope; $x235->properties['prototype'] = clone JS::$objectTemplate; $x235->attributes['prototype'] = JS::WRITABLE; $x235->properties['prototype']->properties['constructor'] = $x235; $x235->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x235->properties['length'] = 0; $x235->attributes['length'] = 0;
unset($x236, $W236, $S236, $U236);
$x237 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 86, 5, '<image>/09_date.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
if ($x236 === JS::$undefined || $x236 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x238 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 86, 29, '<image>/09_date.js');
$_TypeError =& $x238[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x238;
$x239 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x240 = $x239($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x240->class) && $x240->class === 'Error') {$x240->properties['file'] = '<image>/09_date.js';$x240->properties['line'] = 86;$x240->properties['column'] = 29;$x240->attributes['file'] = $x240->attributes['line'] = $x240->attributes['column'] = 0; }
throw new JSException($x240, 86, 29, '<image>/09_date.js');
}
$x236 = JS::toObject($x236, $global);
unset($x241, $W241, $S241, $U241);
$x242 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x236, (string) 'toTimeString', 86, 29, '<image>/09_date.js');
$x241 =& $x242[0]; list(,$W241,$S241,$U241) = $x242;
if ($U241 && (!isset($x236->extensible) || $x236->extensible)) {$x236->properties['toTimeString'] = $x241; $x241 =& $x236->properties['toTimeString']; $x236->attributes['toTimeString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U241 = FALSE; $W241 = TRUE; }
if (isset($S241)) {
$x244 = $S241->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x245 = $x244($global, $x236, $S241, array($x235), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x243 = $x245;
} else {
if (!$U241) {$x243 = $x235;if ($W241) { $x241 = $x235; }  }
else { $x243 = JS::$undefined; }
}
if (isset($x236->class) && $x236->class === 'Array' &&  is_int('toTimeString') && 'toTimeString' >= $x236->properties['length']) { $x236->properties['length'] = 'toTimeString' + 1; };
unset($x246, $W246, $S246, $U246);
$x247 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 90, 37, '<image>/09_date.js');
$x246 =& $x247[0]; list(,$W246,$S246,$U246) = $x247;
unset($x248, $W248, $S248, $U248);
$x249 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x246, (string) 'toString', 90, 47, '<image>/09_date.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
unset($x250, $W250, $S250, $U250);
$x251 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 90, 5, '<image>/09_date.js');
$x250 =& $x251[0]; list(,$W250,$S250,$U250) = $x251;
if ($x250 === JS::$undefined || $x250 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x252 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 90, 31, '<image>/09_date.js');
$_TypeError =& $x252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x252;
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x254 = $x253($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x254->class) && $x254->class === 'Error') {$x254->properties['file'] = '<image>/09_date.js';$x254->properties['line'] = 90;$x254->properties['column'] = 31;$x254->attributes['file'] = $x254->attributes['line'] = $x254->attributes['column'] = 0; }
throw new JSException($x254, 90, 31, '<image>/09_date.js');
}
$x250 = JS::toObject($x250, $global);
unset($x255, $W255, $S255, $U255);
$x256 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x250, (string) 'toLocaleString', 90, 31, '<image>/09_date.js');
$x255 =& $x256[0]; list(,$W255,$S255,$U255) = $x256;
if ($U255 && (!isset($x250->extensible) || $x250->extensible)) {$x250->properties['toLocaleString'] = $x255; $x255 =& $x250->properties['toLocaleString']; $x250->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U255 = FALSE; $W255 = TRUE; }
if (isset($S255)) {
$x258 = $S255->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x259 = $x258($global, $x250, $S255, array($x248), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x257 = $x259;
} else {
if (!$U255) {$x257 = $x248;if ($W255) { $x255 = $x248; }  }
else { $x257 = JS::$undefined; }
}
if (isset($x250->class) && $x250->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x250->properties['length']) { $x250->properties['length'] = 'toLocaleString' + 1; };
unset($x260, $W260, $S260, $U260);
$x261 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 91, 41, '<image>/09_date.js');
$x260 =& $x261[0]; list(,$W260,$S260,$U260) = $x261;
unset($x262, $W262, $S262, $U262);
$x263 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x260, (string) 'toDateString', 91, 51, '<image>/09_date.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
unset($x264, $W264, $S264, $U264);
$x265 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 91, 5, '<image>/09_date.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
if ($x264 === JS::$undefined || $x264 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x266 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 91, 35, '<image>/09_date.js');
$_TypeError =& $x266[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x266;
$x267 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x268 = $x267($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x268->class) && $x268->class === 'Error') {$x268->properties['file'] = '<image>/09_date.js';$x268->properties['line'] = 91;$x268->properties['column'] = 35;$x268->attributes['file'] = $x268->attributes['line'] = $x268->attributes['column'] = 0; }
throw new JSException($x268, 91, 35, '<image>/09_date.js');
}
$x264 = JS::toObject($x264, $global);
unset($x269, $W269, $S269, $U269);
$x270 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x264, (string) 'toLocaleDateString', 91, 35, '<image>/09_date.js');
$x269 =& $x270[0]; list(,$W269,$S269,$U269) = $x270;
if ($U269 && (!isset($x264->extensible) || $x264->extensible)) {$x264->properties['toLocaleDateString'] = $x269; $x269 =& $x264->properties['toLocaleDateString']; $x264->attributes['toLocaleDateString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U269 = FALSE; $W269 = TRUE; }
if (isset($S269)) {
$x272 = $S269->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x273 = $x272($global, $x264, $S269, array($x262), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x271 = $x273;
} else {
if (!$U269) {$x271 = $x262;if ($W269) { $x269 = $x262; }  }
else { $x271 = JS::$undefined; }
}
if (isset($x264->class) && $x264->class === 'Array' &&  is_int('toLocaleDateString') && 'toLocaleDateString' >= $x264->properties['length']) { $x264->properties['length'] = 'toLocaleDateString' + 1; };
unset($x274, $W274, $S274, $U274);
$x275 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 92, 41, '<image>/09_date.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
unset($x276, $W276, $S276, $U276);
$x277 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x274, (string) 'toTimeString', 92, 51, '<image>/09_date.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
unset($x278, $W278, $S278, $U278);
$x279 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 92, 5, '<image>/09_date.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
if ($x278 === JS::$undefined || $x278 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 92, 35, '<image>/09_date.js');
$_TypeError =& $x280[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x280;
$x281 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x282 = $x281($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x282->class) && $x282->class === 'Error') {$x282->properties['file'] = '<image>/09_date.js';$x282->properties['line'] = 92;$x282->properties['column'] = 35;$x282->attributes['file'] = $x282->attributes['line'] = $x282->attributes['column'] = 0; }
throw new JSException($x282, 92, 35, '<image>/09_date.js');
}
$x278 = JS::toObject($x278, $global);
unset($x283, $W283, $S283, $U283);
$x284 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x278, (string) 'toLocaleTimeString', 92, 35, '<image>/09_date.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
if ($U283 && (!isset($x278->extensible) || $x278->extensible)) {$x278->properties['toLocaleTimeString'] = $x283; $x283 =& $x278->properties['toLocaleTimeString']; $x278->attributes['toLocaleTimeString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U283 = FALSE; $W283 = TRUE; }
if (isset($S283)) {
$x286 = $S283->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x287 = $x286($global, $x278, $S283, array($x276), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x285 = $x287;
} else {
if (!$U283) {$x285 = $x276;if ($W283) { $x283 = $x276; }  }
else { $x285 = JS::$undefined; }
}
if (isset($x278->class) && $x278->class === 'Array' &&  is_int('toLocaleTimeString') && 'toLocaleTimeString' >= $x278->properties['length']) { $x278->properties['length'] = 'toLocaleTimeString' + 1; };
$x290 = clone JS::$functionTemplate; $x290->call = '_a3686fcdd5b5a69538641de6dddfbea8_11'; $x290->parameters = array (
); $x290->scope = $scope; $x290->properties['prototype'] = clone JS::$objectTemplate; $x290->attributes['prototype'] = JS::WRITABLE; $x290->properties['prototype']->properties['constructor'] = $x290; $x290->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x290->properties['length'] = 0; $x290->attributes['length'] = 0;
unset($x291, $W291, $S291, $U291);
$x292 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 94, 5, '<image>/09_date.js');
$x291 =& $x292[0]; list(,$W291,$S291,$U291) = $x292;
if ($x291 === JS::$undefined || $x291 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x293 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 94, 24, '<image>/09_date.js');
$_TypeError =& $x293[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x293;
$x294 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x295 = $x294($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x295->class) && $x295->class === 'Error') {$x295->properties['file'] = '<image>/09_date.js';$x295->properties['line'] = 94;$x295->properties['column'] = 24;$x295->attributes['file'] = $x295->attributes['line'] = $x295->attributes['column'] = 0; }
throw new JSException($x295, 94, 24, '<image>/09_date.js');
}
$x291 = JS::toObject($x291, $global);
unset($x296, $W296, $S296, $U296);
$x297 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x291, (string) 'valueOf', 94, 24, '<image>/09_date.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
if ($U296 && (!isset($x291->extensible) || $x291->extensible)) {$x291->properties['valueOf'] = $x296; $x296 =& $x291->properties['valueOf']; $x291->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U296 = FALSE; $W296 = TRUE; }
if (isset($S296)) {
$x299 = $S296->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x300 = $x299($global, $x291, $S296, array($x290), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x298 = $x300;
} else {
if (!$U296) {$x298 = $x290;if ($W296) { $x296 = $x290; }  }
else { $x298 = JS::$undefined; }
}
if (isset($x291->class) && $x291->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x291->properties['length']) { $x291->properties['length'] = 'valueOf' + 1; };
unset($x301, $W301, $S301, $U301);
$x302 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 98, 30, '<image>/09_date.js');
$x301 =& $x302[0]; list(,$W301,$S301,$U301) = $x302;
unset($x303, $W303, $S303, $U303);
$x304 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x301, (string) 'valueOf', 98, 40, '<image>/09_date.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
unset($x305, $W305, $S305, $U305);
$x306 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 98, 5, '<image>/09_date.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
if ($x305 === JS::$undefined || $x305 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x307 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 98, 24, '<image>/09_date.js');
$_TypeError =& $x307[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x307;
$x308 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x309 = $x308($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x309->class) && $x309->class === 'Error') {$x309->properties['file'] = '<image>/09_date.js';$x309->properties['line'] = 98;$x309->properties['column'] = 24;$x309->attributes['file'] = $x309->attributes['line'] = $x309->attributes['column'] = 0; }
throw new JSException($x309, 98, 24, '<image>/09_date.js');
}
$x305 = JS::toObject($x305, $global);
unset($x310, $W310, $S310, $U310);
$x311 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x305, (string) 'getTime', 98, 24, '<image>/09_date.js');
$x310 =& $x311[0]; list(,$W310,$S310,$U310) = $x311;
if ($U310 && (!isset($x305->extensible) || $x305->extensible)) {$x305->properties['getTime'] = $x310; $x310 =& $x305->properties['getTime']; $x305->attributes['getTime'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U310 = FALSE; $W310 = TRUE; }
if (isset($S310)) {
$x313 = $S310->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x314 = $x313($global, $x305, $S310, array($x303), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x312 = $x314;
} else {
if (!$U310) {$x312 = $x303;if ($W310) { $x310 = $x303; }  }
else { $x312 = JS::$undefined; }
}
if (isset($x305->class) && $x305->class === 'Array' &&  is_int('getTime') && 'getTime' >= $x305->properties['length']) { $x305->properties['length'] = 'getTime' + 1; };
$x317 = clone JS::$functionTemplate; $x317->call = '_a3686fcdd5b5a69538641de6dddfbea8_12'; $x317->parameters = array (
); $x317->scope = $scope; $x317->properties['prototype'] = clone JS::$objectTemplate; $x317->attributes['prototype'] = JS::WRITABLE; $x317->properties['prototype']->properties['constructor'] = $x317; $x317->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x317->properties['length'] = 0; $x317->attributes['length'] = 0;
unset($x318, $W318, $S318, $U318);
$x319 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 100, 5, '<image>/09_date.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if ($x318 === JS::$undefined || $x318 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x320 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 100, 28, '<image>/09_date.js');
$_TypeError =& $x320[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x320;
$x321 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x322 = $x321($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x322->class) && $x322->class === 'Error') {$x322->properties['file'] = '<image>/09_date.js';$x322->properties['line'] = 100;$x322->properties['column'] = 28;$x322->attributes['file'] = $x322->attributes['line'] = $x322->attributes['column'] = 0; }
throw new JSException($x322, 100, 28, '<image>/09_date.js');
}
$x318 = JS::toObject($x318, $global);
unset($x323, $W323, $S323, $U323);
$x324 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x318, (string) 'getFullYear', 100, 28, '<image>/09_date.js');
$x323 =& $x324[0]; list(,$W323,$S323,$U323) = $x324;
if ($U323 && (!isset($x318->extensible) || $x318->extensible)) {$x318->properties['getFullYear'] = $x323; $x323 =& $x318->properties['getFullYear']; $x318->attributes['getFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U323 = FALSE; $W323 = TRUE; }
if (isset($S323)) {
$x326 = $S323->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x327 = $x326($global, $x318, $S323, array($x317), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x325 = $x327;
} else {
if (!$U323) {$x325 = $x317;if ($W323) { $x323 = $x317; }  }
else { $x325 = JS::$undefined; }
}
if (isset($x318->class) && $x318->class === 'Array' &&  is_int('getFullYear') && 'getFullYear' >= $x318->properties['length']) { $x318->properties['length'] = 'getFullYear' + 1; };
$x343 = clone JS::$functionTemplate; $x343->call = '_a3686fcdd5b5a69538641de6dddfbea8_13'; $x343->parameters = array (
); $x343->scope = $scope; $x343->properties['prototype'] = clone JS::$objectTemplate; $x343->attributes['prototype'] = JS::WRITABLE; $x343->properties['prototype']->properties['constructor'] = $x343; $x343->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x343->properties['length'] = 0; $x343->attributes['length'] = 0;
unset($x344, $W344, $S344, $U344);
$x345 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 104, 5, '<image>/09_date.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
if ($x344 === JS::$undefined || $x344 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x346 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 104, 31, '<image>/09_date.js');
$_TypeError =& $x346[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x346;
$x347 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x348 = $x347($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x348->class) && $x348->class === 'Error') {$x348->properties['file'] = '<image>/09_date.js';$x348->properties['line'] = 104;$x348->properties['column'] = 31;$x348->attributes['file'] = $x348->attributes['line'] = $x348->attributes['column'] = 0; }
throw new JSException($x348, 104, 31, '<image>/09_date.js');
}
$x344 = JS::toObject($x344, $global);
unset($x349, $W349, $S349, $U349);
$x350 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x344, (string) 'getUTCFullYear', 104, 31, '<image>/09_date.js');
$x349 =& $x350[0]; list(,$W349,$S349,$U349) = $x350;
if ($U349 && (!isset($x344->extensible) || $x344->extensible)) {$x344->properties['getUTCFullYear'] = $x349; $x349 =& $x344->properties['getUTCFullYear']; $x344->attributes['getUTCFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U349 = FALSE; $W349 = TRUE; }
if (isset($S349)) {
$x352 = $S349->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x353 = $x352($global, $x344, $S349, array($x343), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x351 = $x353;
} else {
if (!$U349) {$x351 = $x343;if ($W349) { $x349 = $x343; }  }
else { $x351 = JS::$undefined; }
}
if (isset($x344->class) && $x344->class === 'Array' &&  is_int('getUTCFullYear') && 'getUTCFullYear' >= $x344->properties['length']) { $x344->properties['length'] = 'getUTCFullYear' + 1; };
$x367 = clone JS::$functionTemplate; $x367->call = '_a3686fcdd5b5a69538641de6dddfbea8_14'; $x367->parameters = array (
); $x367->scope = $scope; $x367->properties['prototype'] = clone JS::$objectTemplate; $x367->attributes['prototype'] = JS::WRITABLE; $x367->properties['prototype']->properties['constructor'] = $x367; $x367->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x367->properties['length'] = 0; $x367->attributes['length'] = 0;
unset($x368, $W368, $S368, $U368);
$x369 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 108, 5, '<image>/09_date.js');
$x368 =& $x369[0]; list(,$W368,$S368,$U368) = $x369;
if ($x368 === JS::$undefined || $x368 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x370 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 108, 24, '<image>/09_date.js');
$_TypeError =& $x370[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x370;
$x371 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x372 = $x371($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x372->class) && $x372->class === 'Error') {$x372->properties['file'] = '<image>/09_date.js';$x372->properties['line'] = 108;$x372->properties['column'] = 24;$x372->attributes['file'] = $x372->attributes['line'] = $x372->attributes['column'] = 0; }
throw new JSException($x372, 108, 24, '<image>/09_date.js');
}
$x368 = JS::toObject($x368, $global);
unset($x373, $W373, $S373, $U373);
$x374 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x368, (string) 'getYear', 108, 24, '<image>/09_date.js');
$x373 =& $x374[0]; list(,$W373,$S373,$U373) = $x374;
if ($U373 && (!isset($x368->extensible) || $x368->extensible)) {$x368->properties['getYear'] = $x373; $x373 =& $x368->properties['getYear']; $x368->attributes['getYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U373 = FALSE; $W373 = TRUE; }
if (isset($S373)) {
$x376 = $S373->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x377 = $x376($global, $x368, $S373, array($x367), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x375 = $x377;
} else {
if (!$U373) {$x375 = $x367;if ($W373) { $x373 = $x367; }  }
else { $x375 = JS::$undefined; }
}
if (isset($x368->class) && $x368->class === 'Array' &&  is_int('getYear') && 'getYear' >= $x368->properties['length']) { $x368->properties['length'] = 'getYear' + 1; };
unset($x378, $W378, $S378, $U378);
$x379 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 112, 33, '<image>/09_date.js');
$x378 =& $x379[0]; list(,$W378,$S378,$U378) = $x379;
unset($x380, $W380, $S380, $U380);
$x381 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x378, (string) 'getUTCFullYear', 112, 43, '<image>/09_date.js');
$x380 =& $x381[0]; list(,$W380,$S380,$U380) = $x381;
unset($x382, $W382, $S382, $U382);
$x383 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 112, 5, '<image>/09_date.js');
$x382 =& $x383[0]; list(,$W382,$S382,$U382) = $x383;
if ($x382 === JS::$undefined || $x382 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x384 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 112, 27, '<image>/09_date.js');
$_TypeError =& $x384[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x384;
$x385 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x386 = $x385($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x386->class) && $x386->class === 'Error') {$x386->properties['file'] = '<image>/09_date.js';$x386->properties['line'] = 112;$x386->properties['column'] = 27;$x386->attributes['file'] = $x386->attributes['line'] = $x386->attributes['column'] = 0; }
throw new JSException($x386, 112, 27, '<image>/09_date.js');
}
$x382 = JS::toObject($x382, $global);
unset($x387, $W387, $S387, $U387);
$x388 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x382, (string) 'getUTCYear', 112, 27, '<image>/09_date.js');
$x387 =& $x388[0]; list(,$W387,$S387,$U387) = $x388;
if ($U387 && (!isset($x382->extensible) || $x382->extensible)) {$x382->properties['getUTCYear'] = $x387; $x387 =& $x382->properties['getUTCYear']; $x382->attributes['getUTCYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U387 = FALSE; $W387 = TRUE; }
if (isset($S387)) {
$x390 = $S387->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x391 = $x390($global, $x382, $S387, array($x380), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x389 = $x391;
} else {
if (!$U387) {$x389 = $x380;if ($W387) { $x387 = $x380; }  }
else { $x389 = JS::$undefined; }
}
if (isset($x382->class) && $x382->class === 'Array' &&  is_int('getUTCYear') && 'getUTCYear' >= $x382->properties['length']) { $x382->properties['length'] = 'getUTCYear' + 1; };
$x394 = clone JS::$functionTemplate; $x394->call = '_a3686fcdd5b5a69538641de6dddfbea8_15'; $x394->parameters = array (
); $x394->scope = $scope; $x394->properties['prototype'] = clone JS::$objectTemplate; $x394->attributes['prototype'] = JS::WRITABLE; $x394->properties['prototype']->properties['constructor'] = $x394; $x394->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x394->properties['length'] = 0; $x394->attributes['length'] = 0;
unset($x395, $W395, $S395, $U395);
$x396 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 114, 5, '<image>/09_date.js');
$x395 =& $x396[0]; list(,$W395,$S395,$U395) = $x396;
if ($x395 === JS::$undefined || $x395 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x397 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 114, 25, '<image>/09_date.js');
$_TypeError =& $x397[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x397;
$x398 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x399 = $x398($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x399->class) && $x399->class === 'Error') {$x399->properties['file'] = '<image>/09_date.js';$x399->properties['line'] = 114;$x399->properties['column'] = 25;$x399->attributes['file'] = $x399->attributes['line'] = $x399->attributes['column'] = 0; }
throw new JSException($x399, 114, 25, '<image>/09_date.js');
}
$x395 = JS::toObject($x395, $global);
unset($x400, $W400, $S400, $U400);
$x401 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x395, (string) 'getMonth', 114, 25, '<image>/09_date.js');
$x400 =& $x401[0]; list(,$W400,$S400,$U400) = $x401;
if ($U400 && (!isset($x395->extensible) || $x395->extensible)) {$x395->properties['getMonth'] = $x400; $x400 =& $x395->properties['getMonth']; $x395->attributes['getMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U400 = FALSE; $W400 = TRUE; }
if (isset($S400)) {
$x403 = $S400->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x404 = $x403($global, $x395, $S400, array($x394), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x402 = $x404;
} else {
if (!$U400) {$x402 = $x394;if ($W400) { $x400 = $x394; }  }
else { $x402 = JS::$undefined; }
}
if (isset($x395->class) && $x395->class === 'Array' &&  is_int('getMonth') && 'getMonth' >= $x395->properties['length']) { $x395->properties['length'] = 'getMonth' + 1; };
unset($x405, $W405, $S405, $U405);
$x406 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 118, 34, '<image>/09_date.js');
$x405 =& $x406[0]; list(,$W405,$S405,$U405) = $x406;
unset($x407, $W407, $S407, $U407);
$x408 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x405, (string) 'getUTCFullYear', 118, 44, '<image>/09_date.js');
$x407 =& $x408[0]; list(,$W407,$S407,$U407) = $x408;
unset($x409, $W409, $S409, $U409);
$x410 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 118, 5, '<image>/09_date.js');
$x409 =& $x410[0]; list(,$W409,$S409,$U409) = $x410;
if ($x409 === JS::$undefined || $x409 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x411 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 118, 28, '<image>/09_date.js');
$_TypeError =& $x411[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x411;
$x412 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x413 = $x412($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x413->class) && $x413->class === 'Error') {$x413->properties['file'] = '<image>/09_date.js';$x413->properties['line'] = 118;$x413->properties['column'] = 28;$x413->attributes['file'] = $x413->attributes['line'] = $x413->attributes['column'] = 0; }
throw new JSException($x413, 118, 28, '<image>/09_date.js');
}
$x409 = JS::toObject($x409, $global);
unset($x414, $W414, $S414, $U414);
$x415 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x409, (string) 'getUTCMonth', 118, 28, '<image>/09_date.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
if ($U414 && (!isset($x409->extensible) || $x409->extensible)) {$x409->properties['getUTCMonth'] = $x414; $x414 =& $x409->properties['getUTCMonth']; $x409->attributes['getUTCMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U414 = FALSE; $W414 = TRUE; }
if (isset($S414)) {
$x417 = $S414->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x418 = $x417($global, $x409, $S414, array($x407), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x416 = $x418;
} else {
if (!$U414) {$x416 = $x407;if ($W414) { $x414 = $x407; }  }
else { $x416 = JS::$undefined; }
}
if (isset($x409->class) && $x409->class === 'Array' &&  is_int('getUTCMonth') && 'getUTCMonth' >= $x409->properties['length']) { $x409->properties['length'] = 'getUTCMonth' + 1; };
$x421 = clone JS::$functionTemplate; $x421->call = '_a3686fcdd5b5a69538641de6dddfbea8_16'; $x421->parameters = array (
); $x421->scope = $scope; $x421->properties['prototype'] = clone JS::$objectTemplate; $x421->attributes['prototype'] = JS::WRITABLE; $x421->properties['prototype']->properties['constructor'] = $x421; $x421->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x421->properties['length'] = 0; $x421->attributes['length'] = 0;
unset($x422, $W422, $S422, $U422);
$x423 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 120, 5, '<image>/09_date.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
if ($x422 === JS::$undefined || $x422 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x424 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 120, 24, '<image>/09_date.js');
$_TypeError =& $x424[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x424;
$x425 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x426 = $x425($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x426->class) && $x426->class === 'Error') {$x426->properties['file'] = '<image>/09_date.js';$x426->properties['line'] = 120;$x426->properties['column'] = 24;$x426->attributes['file'] = $x426->attributes['line'] = $x426->attributes['column'] = 0; }
throw new JSException($x426, 120, 24, '<image>/09_date.js');
}
$x422 = JS::toObject($x422, $global);
unset($x427, $W427, $S427, $U427);
$x428 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x422, (string) 'getDate', 120, 24, '<image>/09_date.js');
$x427 =& $x428[0]; list(,$W427,$S427,$U427) = $x428;
if ($U427 && (!isset($x422->extensible) || $x422->extensible)) {$x422->properties['getDate'] = $x427; $x427 =& $x422->properties['getDate']; $x422->attributes['getDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U427 = FALSE; $W427 = TRUE; }
if (isset($S427)) {
$x430 = $S427->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x431 = $x430($global, $x422, $S427, array($x421), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x429 = $x431;
} else {
if (!$U427) {$x429 = $x421;if ($W427) { $x427 = $x421; }  }
else { $x429 = JS::$undefined; }
}
if (isset($x422->class) && $x422->class === 'Array' &&  is_int('getDate') && 'getDate' >= $x422->properties['length']) { $x422->properties['length'] = 'getDate' + 1; };
unset($x432, $W432, $S432, $U432);
$x433 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 124, 33, '<image>/09_date.js');
$x432 =& $x433[0]; list(,$W432,$S432,$U432) = $x433;
unset($x434, $W434, $S434, $U434);
$x435 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x432, (string) 'getUTCFullYear', 124, 43, '<image>/09_date.js');
$x434 =& $x435[0]; list(,$W434,$S434,$U434) = $x435;
unset($x436, $W436, $S436, $U436);
$x437 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 124, 5, '<image>/09_date.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
if ($x436 === JS::$undefined || $x436 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x438 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 124, 27, '<image>/09_date.js');
$_TypeError =& $x438[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x438;
$x439 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x440 = $x439($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x440->class) && $x440->class === 'Error') {$x440->properties['file'] = '<image>/09_date.js';$x440->properties['line'] = 124;$x440->properties['column'] = 27;$x440->attributes['file'] = $x440->attributes['line'] = $x440->attributes['column'] = 0; }
throw new JSException($x440, 124, 27, '<image>/09_date.js');
}
$x436 = JS::toObject($x436, $global);
unset($x441, $W441, $S441, $U441);
$x442 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x436, (string) 'getUTCDate', 124, 27, '<image>/09_date.js');
$x441 =& $x442[0]; list(,$W441,$S441,$U441) = $x442;
if ($U441 && (!isset($x436->extensible) || $x436->extensible)) {$x436->properties['getUTCDate'] = $x441; $x441 =& $x436->properties['getUTCDate']; $x436->attributes['getUTCDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U441 = FALSE; $W441 = TRUE; }
if (isset($S441)) {
$x444 = $S441->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x445 = $x444($global, $x436, $S441, array($x434), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x443 = $x445;
} else {
if (!$U441) {$x443 = $x434;if ($W441) { $x441 = $x434; }  }
else { $x443 = JS::$undefined; }
}
if (isset($x436->class) && $x436->class === 'Array' &&  is_int('getUTCDate') && 'getUTCDate' >= $x436->properties['length']) { $x436->properties['length'] = 'getUTCDate' + 1; };
$x448 = clone JS::$functionTemplate; $x448->call = '_a3686fcdd5b5a69538641de6dddfbea8_17'; $x448->parameters = array (
); $x448->scope = $scope; $x448->properties['prototype'] = clone JS::$objectTemplate; $x448->attributes['prototype'] = JS::WRITABLE; $x448->properties['prototype']->properties['constructor'] = $x448; $x448->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x448->properties['length'] = 0; $x448->attributes['length'] = 0;
unset($x449, $W449, $S449, $U449);
$x450 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 126, 5, '<image>/09_date.js');
$x449 =& $x450[0]; list(,$W449,$S449,$U449) = $x450;
if ($x449 === JS::$undefined || $x449 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x451 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 126, 23, '<image>/09_date.js');
$_TypeError =& $x451[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x451;
$x452 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x453 = $x452($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x453->class) && $x453->class === 'Error') {$x453->properties['file'] = '<image>/09_date.js';$x453->properties['line'] = 126;$x453->properties['column'] = 23;$x453->attributes['file'] = $x453->attributes['line'] = $x453->attributes['column'] = 0; }
throw new JSException($x453, 126, 23, '<image>/09_date.js');
}
$x449 = JS::toObject($x449, $global);
unset($x454, $W454, $S454, $U454);
$x455 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x449, (string) 'getDay', 126, 23, '<image>/09_date.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
if ($U454 && (!isset($x449->extensible) || $x449->extensible)) {$x449->properties['getDay'] = $x454; $x454 =& $x449->properties['getDay']; $x449->attributes['getDay'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U454 = FALSE; $W454 = TRUE; }
if (isset($S454)) {
$x457 = $S454->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x458 = $x457($global, $x449, $S454, array($x448), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x456 = $x458;
} else {
if (!$U454) {$x456 = $x448;if ($W454) { $x454 = $x448; }  }
else { $x456 = JS::$undefined; }
}
if (isset($x449->class) && $x449->class === 'Array' &&  is_int('getDay') && 'getDay' >= $x449->properties['length']) { $x449->properties['length'] = 'getDay' + 1; };
unset($x459, $W459, $S459, $U459);
$x460 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 130, 32, '<image>/09_date.js');
$x459 =& $x460[0]; list(,$W459,$S459,$U459) = $x460;
unset($x461, $W461, $S461, $U461);
$x462 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x459, (string) 'getUTCFullYear', 130, 42, '<image>/09_date.js');
$x461 =& $x462[0]; list(,$W461,$S461,$U461) = $x462;
unset($x463, $W463, $S463, $U463);
$x464 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 130, 5, '<image>/09_date.js');
$x463 =& $x464[0]; list(,$W463,$S463,$U463) = $x464;
if ($x463 === JS::$undefined || $x463 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x465 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 130, 26, '<image>/09_date.js');
$_TypeError =& $x465[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x465;
$x466 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x467 = $x466($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x467->class) && $x467->class === 'Error') {$x467->properties['file'] = '<image>/09_date.js';$x467->properties['line'] = 130;$x467->properties['column'] = 26;$x467->attributes['file'] = $x467->attributes['line'] = $x467->attributes['column'] = 0; }
throw new JSException($x467, 130, 26, '<image>/09_date.js');
}
$x463 = JS::toObject($x463, $global);
unset($x468, $W468, $S468, $U468);
$x469 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x463, (string) 'getUTCDay', 130, 26, '<image>/09_date.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if ($U468 && (!isset($x463->extensible) || $x463->extensible)) {$x463->properties['getUTCDay'] = $x468; $x468 =& $x463->properties['getUTCDay']; $x463->attributes['getUTCDay'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U468 = FALSE; $W468 = TRUE; }
if (isset($S468)) {
$x471 = $S468->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x472 = $x471($global, $x463, $S468, array($x461), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x470 = $x472;
} else {
if (!$U468) {$x470 = $x461;if ($W468) { $x468 = $x461; }  }
else { $x470 = JS::$undefined; }
}
if (isset($x463->class) && $x463->class === 'Array' &&  is_int('getUTCDay') && 'getUTCDay' >= $x463->properties['length']) { $x463->properties['length'] = 'getUTCDay' + 1; };
$x475 = clone JS::$functionTemplate; $x475->call = '_a3686fcdd5b5a69538641de6dddfbea8_18'; $x475->parameters = array (
); $x475->scope = $scope; $x475->properties['prototype'] = clone JS::$objectTemplate; $x475->attributes['prototype'] = JS::WRITABLE; $x475->properties['prototype']->properties['constructor'] = $x475; $x475->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x475->properties['length'] = 0; $x475->attributes['length'] = 0;
unset($x476, $W476, $S476, $U476);
$x477 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 132, 5, '<image>/09_date.js');
$x476 =& $x477[0]; list(,$W476,$S476,$U476) = $x477;
if ($x476 === JS::$undefined || $x476 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x478 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 132, 25, '<image>/09_date.js');
$_TypeError =& $x478[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x478;
$x479 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x480 = $x479($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x480->class) && $x480->class === 'Error') {$x480->properties['file'] = '<image>/09_date.js';$x480->properties['line'] = 132;$x480->properties['column'] = 25;$x480->attributes['file'] = $x480->attributes['line'] = $x480->attributes['column'] = 0; }
throw new JSException($x480, 132, 25, '<image>/09_date.js');
}
$x476 = JS::toObject($x476, $global);
unset($x481, $W481, $S481, $U481);
$x482 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x476, (string) 'getHours', 132, 25, '<image>/09_date.js');
$x481 =& $x482[0]; list(,$W481,$S481,$U481) = $x482;
if ($U481 && (!isset($x476->extensible) || $x476->extensible)) {$x476->properties['getHours'] = $x481; $x481 =& $x476->properties['getHours']; $x476->attributes['getHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U481 = FALSE; $W481 = TRUE; }
if (isset($S481)) {
$x484 = $S481->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x485 = $x484($global, $x476, $S481, array($x475), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x483 = $x485;
} else {
if (!$U481) {$x483 = $x475;if ($W481) { $x481 = $x475; }  }
else { $x483 = JS::$undefined; }
}
if (isset($x476->class) && $x476->class === 'Array' &&  is_int('getHours') && 'getHours' >= $x476->properties['length']) { $x476->properties['length'] = 'getHours' + 1; };
unset($x486, $W486, $S486, $U486);
$x487 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 136, 34, '<image>/09_date.js');
$x486 =& $x487[0]; list(,$W486,$S486,$U486) = $x487;
unset($x488, $W488, $S488, $U488);
$x489 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x486, (string) 'getUTCFullYear', 136, 44, '<image>/09_date.js');
$x488 =& $x489[0]; list(,$W488,$S488,$U488) = $x489;
unset($x490, $W490, $S490, $U490);
$x491 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 136, 5, '<image>/09_date.js');
$x490 =& $x491[0]; list(,$W490,$S490,$U490) = $x491;
if ($x490 === JS::$undefined || $x490 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x492 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 136, 28, '<image>/09_date.js');
$_TypeError =& $x492[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x492;
$x493 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x494 = $x493($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x494->class) && $x494->class === 'Error') {$x494->properties['file'] = '<image>/09_date.js';$x494->properties['line'] = 136;$x494->properties['column'] = 28;$x494->attributes['file'] = $x494->attributes['line'] = $x494->attributes['column'] = 0; }
throw new JSException($x494, 136, 28, '<image>/09_date.js');
}
$x490 = JS::toObject($x490, $global);
unset($x495, $W495, $S495, $U495);
$x496 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x490, (string) 'getUTCHours', 136, 28, '<image>/09_date.js');
$x495 =& $x496[0]; list(,$W495,$S495,$U495) = $x496;
if ($U495 && (!isset($x490->extensible) || $x490->extensible)) {$x490->properties['getUTCHours'] = $x495; $x495 =& $x490->properties['getUTCHours']; $x490->attributes['getUTCHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U495 = FALSE; $W495 = TRUE; }
if (isset($S495)) {
$x498 = $S495->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x499 = $x498($global, $x490, $S495, array($x488), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x497 = $x499;
} else {
if (!$U495) {$x497 = $x488;if ($W495) { $x495 = $x488; }  }
else { $x497 = JS::$undefined; }
}
if (isset($x490->class) && $x490->class === 'Array' &&  is_int('getUTCHours') && 'getUTCHours' >= $x490->properties['length']) { $x490->properties['length'] = 'getUTCHours' + 1; };
$x502 = clone JS::$functionTemplate; $x502->call = '_a3686fcdd5b5a69538641de6dddfbea8_19'; $x502->parameters = array (
); $x502->scope = $scope; $x502->properties['prototype'] = clone JS::$objectTemplate; $x502->attributes['prototype'] = JS::WRITABLE; $x502->properties['prototype']->properties['constructor'] = $x502; $x502->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x502->properties['length'] = 0; $x502->attributes['length'] = 0;
unset($x503, $W503, $S503, $U503);
$x504 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 138, 5, '<image>/09_date.js');
$x503 =& $x504[0]; list(,$W503,$S503,$U503) = $x504;
if ($x503 === JS::$undefined || $x503 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x505 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 138, 27, '<image>/09_date.js');
$_TypeError =& $x505[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x505;
$x506 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x507 = $x506($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x507->class) && $x507->class === 'Error') {$x507->properties['file'] = '<image>/09_date.js';$x507->properties['line'] = 138;$x507->properties['column'] = 27;$x507->attributes['file'] = $x507->attributes['line'] = $x507->attributes['column'] = 0; }
throw new JSException($x507, 138, 27, '<image>/09_date.js');
}
$x503 = JS::toObject($x503, $global);
unset($x508, $W508, $S508, $U508);
$x509 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x503, (string) 'getMinutes', 138, 27, '<image>/09_date.js');
$x508 =& $x509[0]; list(,$W508,$S508,$U508) = $x509;
if ($U508 && (!isset($x503->extensible) || $x503->extensible)) {$x503->properties['getMinutes'] = $x508; $x508 =& $x503->properties['getMinutes']; $x503->attributes['getMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U508 = FALSE; $W508 = TRUE; }
if (isset($S508)) {
$x511 = $S508->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x512 = $x511($global, $x503, $S508, array($x502), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x510 = $x512;
} else {
if (!$U508) {$x510 = $x502;if ($W508) { $x508 = $x502; }  }
else { $x510 = JS::$undefined; }
}
if (isset($x503->class) && $x503->class === 'Array' &&  is_int('getMinutes') && 'getMinutes' >= $x503->properties['length']) { $x503->properties['length'] = 'getMinutes' + 1; };
unset($x513, $W513, $S513, $U513);
$x514 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 142, 36, '<image>/09_date.js');
$x513 =& $x514[0]; list(,$W513,$S513,$U513) = $x514;
unset($x515, $W515, $S515, $U515);
$x516 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x513, (string) 'getUTCFullYear', 142, 46, '<image>/09_date.js');
$x515 =& $x516[0]; list(,$W515,$S515,$U515) = $x516;
unset($x517, $W517, $S517, $U517);
$x518 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 142, 5, '<image>/09_date.js');
$x517 =& $x518[0]; list(,$W517,$S517,$U517) = $x518;
if ($x517 === JS::$undefined || $x517 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x519 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 142, 30, '<image>/09_date.js');
$_TypeError =& $x519[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x519;
$x520 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x521 = $x520($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x521->class) && $x521->class === 'Error') {$x521->properties['file'] = '<image>/09_date.js';$x521->properties['line'] = 142;$x521->properties['column'] = 30;$x521->attributes['file'] = $x521->attributes['line'] = $x521->attributes['column'] = 0; }
throw new JSException($x521, 142, 30, '<image>/09_date.js');
}
$x517 = JS::toObject($x517, $global);
unset($x522, $W522, $S522, $U522);
$x523 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x517, (string) 'getUTCMinutes', 142, 30, '<image>/09_date.js');
$x522 =& $x523[0]; list(,$W522,$S522,$U522) = $x523;
if ($U522 && (!isset($x517->extensible) || $x517->extensible)) {$x517->properties['getUTCMinutes'] = $x522; $x522 =& $x517->properties['getUTCMinutes']; $x517->attributes['getUTCMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U522 = FALSE; $W522 = TRUE; }
if (isset($S522)) {
$x525 = $S522->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x526 = $x525($global, $x517, $S522, array($x515), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x524 = $x526;
} else {
if (!$U522) {$x524 = $x515;if ($W522) { $x522 = $x515; }  }
else { $x524 = JS::$undefined; }
}
if (isset($x517->class) && $x517->class === 'Array' &&  is_int('getUTCMinutes') && 'getUTCMinutes' >= $x517->properties['length']) { $x517->properties['length'] = 'getUTCMinutes' + 1; };
$x529 = clone JS::$functionTemplate; $x529->call = '_a3686fcdd5b5a69538641de6dddfbea8_20'; $x529->parameters = array (
); $x529->scope = $scope; $x529->properties['prototype'] = clone JS::$objectTemplate; $x529->attributes['prototype'] = JS::WRITABLE; $x529->properties['prototype']->properties['constructor'] = $x529; $x529->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x529->properties['length'] = 0; $x529->attributes['length'] = 0;
unset($x530, $W530, $S530, $U530);
$x531 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 144, 5, '<image>/09_date.js');
$x530 =& $x531[0]; list(,$W530,$S530,$U530) = $x531;
if ($x530 === JS::$undefined || $x530 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x532 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 144, 27, '<image>/09_date.js');
$_TypeError =& $x532[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x532;
$x533 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x534 = $x533($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x534->class) && $x534->class === 'Error') {$x534->properties['file'] = '<image>/09_date.js';$x534->properties['line'] = 144;$x534->properties['column'] = 27;$x534->attributes['file'] = $x534->attributes['line'] = $x534->attributes['column'] = 0; }
throw new JSException($x534, 144, 27, '<image>/09_date.js');
}
$x530 = JS::toObject($x530, $global);
unset($x535, $W535, $S535, $U535);
$x536 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x530, (string) 'getSeconds', 144, 27, '<image>/09_date.js');
$x535 =& $x536[0]; list(,$W535,$S535,$U535) = $x536;
if ($U535 && (!isset($x530->extensible) || $x530->extensible)) {$x530->properties['getSeconds'] = $x535; $x535 =& $x530->properties['getSeconds']; $x530->attributes['getSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U535 = FALSE; $W535 = TRUE; }
if (isset($S535)) {
$x538 = $S535->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x539 = $x538($global, $x530, $S535, array($x529), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x537 = $x539;
} else {
if (!$U535) {$x537 = $x529;if ($W535) { $x535 = $x529; }  }
else { $x537 = JS::$undefined; }
}
if (isset($x530->class) && $x530->class === 'Array' &&  is_int('getSeconds') && 'getSeconds' >= $x530->properties['length']) { $x530->properties['length'] = 'getSeconds' + 1; };
unset($x540, $W540, $S540, $U540);
$x541 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 148, 36, '<image>/09_date.js');
$x540 =& $x541[0]; list(,$W540,$S540,$U540) = $x541;
unset($x542, $W542, $S542, $U542);
$x543 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x540, (string) 'getUTCFullYear', 148, 46, '<image>/09_date.js');
$x542 =& $x543[0]; list(,$W542,$S542,$U542) = $x543;
unset($x544, $W544, $S544, $U544);
$x545 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 148, 5, '<image>/09_date.js');
$x544 =& $x545[0]; list(,$W544,$S544,$U544) = $x545;
if ($x544 === JS::$undefined || $x544 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x546 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 148, 30, '<image>/09_date.js');
$_TypeError =& $x546[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x546;
$x547 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x548 = $x547($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x548->class) && $x548->class === 'Error') {$x548->properties['file'] = '<image>/09_date.js';$x548->properties['line'] = 148;$x548->properties['column'] = 30;$x548->attributes['file'] = $x548->attributes['line'] = $x548->attributes['column'] = 0; }
throw new JSException($x548, 148, 30, '<image>/09_date.js');
}
$x544 = JS::toObject($x544, $global);
unset($x549, $W549, $S549, $U549);
$x550 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x544, (string) 'getUTCSeconds', 148, 30, '<image>/09_date.js');
$x549 =& $x550[0]; list(,$W549,$S549,$U549) = $x550;
if ($U549 && (!isset($x544->extensible) || $x544->extensible)) {$x544->properties['getUTCSeconds'] = $x549; $x549 =& $x544->properties['getUTCSeconds']; $x544->attributes['getUTCSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U549 = FALSE; $W549 = TRUE; }
if (isset($S549)) {
$x552 = $S549->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x553 = $x552($global, $x544, $S549, array($x542), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x551 = $x553;
} else {
if (!$U549) {$x551 = $x542;if ($W549) { $x549 = $x542; }  }
else { $x551 = JS::$undefined; }
}
if (isset($x544->class) && $x544->class === 'Array' &&  is_int('getUTCSeconds') && 'getUTCSeconds' >= $x544->properties['length']) { $x544->properties['length'] = 'getUTCSeconds' + 1; };
$x556 = clone JS::$functionTemplate; $x556->call = '_a3686fcdd5b5a69538641de6dddfbea8_21'; $x556->parameters = array (
); $x556->scope = $scope; $x556->properties['prototype'] = clone JS::$objectTemplate; $x556->attributes['prototype'] = JS::WRITABLE; $x556->properties['prototype']->properties['constructor'] = $x556; $x556->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x556->properties['length'] = 0; $x556->attributes['length'] = 0;
unset($x557, $W557, $S557, $U557);
$x558 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 150, 5, '<image>/09_date.js');
$x557 =& $x558[0]; list(,$W557,$S557,$U557) = $x558;
if ($x557 === JS::$undefined || $x557 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x559 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 150, 32, '<image>/09_date.js');
$_TypeError =& $x559[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x559;
$x560 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x561 = $x560($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x561->class) && $x561->class === 'Error') {$x561->properties['file'] = '<image>/09_date.js';$x561->properties['line'] = 150;$x561->properties['column'] = 32;$x561->attributes['file'] = $x561->attributes['line'] = $x561->attributes['column'] = 0; }
throw new JSException($x561, 150, 32, '<image>/09_date.js');
}
$x557 = JS::toObject($x557, $global);
unset($x562, $W562, $S562, $U562);
$x563 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x557, (string) 'getMilliseconds', 150, 32, '<image>/09_date.js');
$x562 =& $x563[0]; list(,$W562,$S562,$U562) = $x563;
if ($U562 && (!isset($x557->extensible) || $x557->extensible)) {$x557->properties['getMilliseconds'] = $x562; $x562 =& $x557->properties['getMilliseconds']; $x557->attributes['getMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U562 = FALSE; $W562 = TRUE; }
if (isset($S562)) {
$x565 = $S562->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x566 = $x565($global, $x557, $S562, array($x556), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x564 = $x566;
} else {
if (!$U562) {$x564 = $x556;if ($W562) { $x562 = $x556; }  }
else { $x564 = JS::$undefined; }
}
if (isset($x557->class) && $x557->class === 'Array' &&  is_int('getMilliseconds') && 'getMilliseconds' >= $x557->properties['length']) { $x557->properties['length'] = 'getMilliseconds' + 1; };
unset($x567, $W567, $S567, $U567);
$x568 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 154, 41, '<image>/09_date.js');
$x567 =& $x568[0]; list(,$W567,$S567,$U567) = $x568;
unset($x569, $W569, $S569, $U569);
$x570 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x567, (string) 'getUTCFullYear', 154, 51, '<image>/09_date.js');
$x569 =& $x570[0]; list(,$W569,$S569,$U569) = $x570;
unset($x571, $W571, $S571, $U571);
$x572 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 154, 5, '<image>/09_date.js');
$x571 =& $x572[0]; list(,$W571,$S571,$U571) = $x572;
if ($x571 === JS::$undefined || $x571 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x573 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 154, 35, '<image>/09_date.js');
$_TypeError =& $x573[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x573;
$x574 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x575 = $x574($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x575->class) && $x575->class === 'Error') {$x575->properties['file'] = '<image>/09_date.js';$x575->properties['line'] = 154;$x575->properties['column'] = 35;$x575->attributes['file'] = $x575->attributes['line'] = $x575->attributes['column'] = 0; }
throw new JSException($x575, 154, 35, '<image>/09_date.js');
}
$x571 = JS::toObject($x571, $global);
unset($x576, $W576, $S576, $U576);
$x577 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x571, (string) 'getUTCMilliseconds', 154, 35, '<image>/09_date.js');
$x576 =& $x577[0]; list(,$W576,$S576,$U576) = $x577;
if ($U576 && (!isset($x571->extensible) || $x571->extensible)) {$x571->properties['getUTCMilliseconds'] = $x576; $x576 =& $x571->properties['getUTCMilliseconds']; $x571->attributes['getUTCMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U576 = FALSE; $W576 = TRUE; }
if (isset($S576)) {
$x579 = $S576->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x580 = $x579($global, $x571, $S576, array($x569), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x578 = $x580;
} else {
if (!$U576) {$x578 = $x569;if ($W576) { $x576 = $x569; }  }
else { $x578 = JS::$undefined; }
}
if (isset($x571->class) && $x571->class === 'Array' &&  is_int('getUTCMilliseconds') && 'getUTCMilliseconds' >= $x571->properties['length']) { $x571->properties['length'] = 'getUTCMilliseconds' + 1; };
$x583 = clone JS::$functionTemplate; $x583->call = '_a3686fcdd5b5a69538641de6dddfbea8_22'; $x583->parameters = array (
); $x583->scope = $scope; $x583->properties['prototype'] = clone JS::$objectTemplate; $x583->attributes['prototype'] = JS::WRITABLE; $x583->properties['prototype']->properties['constructor'] = $x583; $x583->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x583->properties['length'] = 0; $x583->attributes['length'] = 0;
unset($x584, $W584, $S584, $U584);
$x585 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 156, 5, '<image>/09_date.js');
$x584 =& $x585[0]; list(,$W584,$S584,$U584) = $x585;
if ($x584 === JS::$undefined || $x584 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x586 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 156, 34, '<image>/09_date.js');
$_TypeError =& $x586[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x586;
$x587 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x588 = $x587($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x588->class) && $x588->class === 'Error') {$x588->properties['file'] = '<image>/09_date.js';$x588->properties['line'] = 156;$x588->properties['column'] = 34;$x588->attributes['file'] = $x588->attributes['line'] = $x588->attributes['column'] = 0; }
throw new JSException($x588, 156, 34, '<image>/09_date.js');
}
$x584 = JS::toObject($x584, $global);
unset($x589, $W589, $S589, $U589);
$x590 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x584, (string) 'getTimezoneOffset', 156, 34, '<image>/09_date.js');
$x589 =& $x590[0]; list(,$W589,$S589,$U589) = $x590;
if ($U589 && (!isset($x584->extensible) || $x584->extensible)) {$x584->properties['getTimezoneOffset'] = $x589; $x589 =& $x584->properties['getTimezoneOffset']; $x584->attributes['getTimezoneOffset'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U589 = FALSE; $W589 = TRUE; }
if (isset($S589)) {
$x592 = $S589->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x593 = $x592($global, $x584, $S589, array($x583), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x591 = $x593;
} else {
if (!$U589) {$x591 = $x583;if ($W589) { $x589 = $x583; }  }
else { $x591 = JS::$undefined; }
}
if (isset($x584->class) && $x584->class === 'Array' &&  is_int('getTimezoneOffset') && 'getTimezoneOffset' >= $x584->properties['length']) { $x584->properties['length'] = 'getTimezoneOffset' + 1; };
$x596 = clone JS::$functionTemplate; $x596->call = '_a3686fcdd5b5a69538641de6dddfbea8_23'; $x596->parameters = array (
  0 => 'time',
); $x596->scope = $scope; $x596->properties['prototype'] = clone JS::$objectTemplate; $x596->attributes['prototype'] = JS::WRITABLE; $x596->properties['prototype']->properties['constructor'] = $x596; $x596->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x596->properties['length'] = 1; $x596->attributes['length'] = 0;
unset($x597, $W597, $S597, $U597);
$x598 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 160, 5, '<image>/09_date.js');
$x597 =& $x598[0]; list(,$W597,$S597,$U597) = $x598;
if ($x597 === JS::$undefined || $x597 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x599 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 160, 24, '<image>/09_date.js');
$_TypeError =& $x599[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x599;
$x600 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x601 = $x600($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x601->class) && $x601->class === 'Error') {$x601->properties['file'] = '<image>/09_date.js';$x601->properties['line'] = 160;$x601->properties['column'] = 24;$x601->attributes['file'] = $x601->attributes['line'] = $x601->attributes['column'] = 0; }
throw new JSException($x601, 160, 24, '<image>/09_date.js');
}
$x597 = JS::toObject($x597, $global);
unset($x602, $W602, $S602, $U602);
$x603 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x597, (string) 'setTime', 160, 24, '<image>/09_date.js');
$x602 =& $x603[0]; list(,$W602,$S602,$U602) = $x603;
if ($U602 && (!isset($x597->extensible) || $x597->extensible)) {$x597->properties['setTime'] = $x602; $x602 =& $x597->properties['setTime']; $x597->attributes['setTime'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U602 = FALSE; $W602 = TRUE; }
if (isset($S602)) {
$x605 = $S602->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x606 = $x605($global, $x597, $S602, array($x596), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x604 = $x606;
} else {
if (!$U602) {$x604 = $x596;if ($W602) { $x602 = $x596; }  }
else { $x604 = JS::$undefined; }
}
if (isset($x597->class) && $x597->class === 'Array' &&  is_int('setTime') && 'setTime' >= $x597->properties['length']) { $x597->properties['length'] = 'setTime' + 1; };
$x688 = clone JS::$functionTemplate; $x688->call = '_a3686fcdd5b5a69538641de6dddfbea8_24'; $x688->parameters = array (
  0 => 'ms',
); $x688->scope = $scope; $x688->properties['prototype'] = clone JS::$objectTemplate; $x688->attributes['prototype'] = JS::WRITABLE; $x688->properties['prototype']->properties['constructor'] = $x688; $x688->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x688->properties['length'] = 1; $x688->attributes['length'] = 0;
unset($x689, $W689, $S689, $U689);
$x690 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 165, 5, '<image>/09_date.js');
$x689 =& $x690[0]; list(,$W689,$S689,$U689) = $x690;
if ($x689 === JS::$undefined || $x689 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 165, 32, '<image>/09_date.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x693 = $x692($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error') {$x693->properties['file'] = '<image>/09_date.js';$x693->properties['line'] = 165;$x693->properties['column'] = 32;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 165, 32, '<image>/09_date.js');
}
$x689 = JS::toObject($x689, $global);
unset($x694, $W694, $S694, $U694);
$x695 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x689, (string) 'setMilliseconds', 165, 32, '<image>/09_date.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
if ($U694 && (!isset($x689->extensible) || $x689->extensible)) {$x689->properties['setMilliseconds'] = $x694; $x694 =& $x689->properties['setMilliseconds']; $x689->attributes['setMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U694 = FALSE; $W694 = TRUE; }
if (isset($S694)) {
$x697 = $S694->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x698 = $x697($global, $x689, $S694, array($x688), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x696 = $x698;
} else {
if (!$U694) {$x696 = $x688;if ($W694) { $x694 = $x688; }  }
else { $x696 = JS::$undefined; }
}
if (isset($x689->class) && $x689->class === 'Array' &&  is_int('setMilliseconds') && 'setMilliseconds' >= $x689->properties['length']) { $x689->properties['length'] = 'setMilliseconds' + 1; };
unset($x699, $W699, $S699, $U699);
$x700 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 176, 41, '<image>/09_date.js');
$x699 =& $x700[0]; list(,$W699,$S699,$U699) = $x700;
unset($x701, $W701, $S701, $U701);
$x702 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x699, (string) 'getUTCFullYear', 176, 51, '<image>/09_date.js');
$x701 =& $x702[0]; list(,$W701,$S701,$U701) = $x702;
unset($x703, $W703, $S703, $U703);
$x704 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 176, 5, '<image>/09_date.js');
$x703 =& $x704[0]; list(,$W703,$S703,$U703) = $x704;
if ($x703 === JS::$undefined || $x703 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x705 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 176, 35, '<image>/09_date.js');
$_TypeError =& $x705[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x705;
$x706 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x707 = $x706($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x707->class) && $x707->class === 'Error') {$x707->properties['file'] = '<image>/09_date.js';$x707->properties['line'] = 176;$x707->properties['column'] = 35;$x707->attributes['file'] = $x707->attributes['line'] = $x707->attributes['column'] = 0; }
throw new JSException($x707, 176, 35, '<image>/09_date.js');
}
$x703 = JS::toObject($x703, $global);
unset($x708, $W708, $S708, $U708);
$x709 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x703, (string) 'setUTCMilliseconds', 176, 35, '<image>/09_date.js');
$x708 =& $x709[0]; list(,$W708,$S708,$U708) = $x709;
if ($U708 && (!isset($x703->extensible) || $x703->extensible)) {$x703->properties['setUTCMilliseconds'] = $x708; $x708 =& $x703->properties['setUTCMilliseconds']; $x703->attributes['setUTCMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U708 = FALSE; $W708 = TRUE; }
if (isset($S708)) {
$x711 = $S708->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x712 = $x711($global, $x703, $S708, array($x701), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x710 = $x712;
} else {
if (!$U708) {$x710 = $x701;if ($W708) { $x708 = $x701; }  }
else { $x710 = JS::$undefined; }
}
if (isset($x703->class) && $x703->class === 'Array' &&  is_int('setUTCMilliseconds') && 'setUTCMilliseconds' >= $x703->properties['length']) { $x703->properties['length'] = 'setUTCMilliseconds' + 1; };
$x795 = clone JS::$functionTemplate; $x795->call = '_a3686fcdd5b5a69538641de6dddfbea8_25'; $x795->parameters = array (
  0 => 'seconds',
  1 => 'ms',
); $x795->scope = $scope; $x795->properties['prototype'] = clone JS::$objectTemplate; $x795->attributes['prototype'] = JS::WRITABLE; $x795->properties['prototype']->properties['constructor'] = $x795; $x795->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x795->properties['length'] = 2; $x795->attributes['length'] = 0;
unset($x796, $W796, $S796, $U796);
$x797 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 178, 5, '<image>/09_date.js');
$x796 =& $x797[0]; list(,$W796,$S796,$U796) = $x797;
if ($x796 === JS::$undefined || $x796 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x798 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 178, 27, '<image>/09_date.js');
$_TypeError =& $x798[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x798;
$x799 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x800 = $x799($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x800->class) && $x800->class === 'Error') {$x800->properties['file'] = '<image>/09_date.js';$x800->properties['line'] = 178;$x800->properties['column'] = 27;$x800->attributes['file'] = $x800->attributes['line'] = $x800->attributes['column'] = 0; }
throw new JSException($x800, 178, 27, '<image>/09_date.js');
}
$x796 = JS::toObject($x796, $global);
unset($x801, $W801, $S801, $U801);
$x802 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x796, (string) 'setSeconds', 178, 27, '<image>/09_date.js');
$x801 =& $x802[0]; list(,$W801,$S801,$U801) = $x802;
if ($U801 && (!isset($x796->extensible) || $x796->extensible)) {$x796->properties['setSeconds'] = $x801; $x801 =& $x796->properties['setSeconds']; $x796->attributes['setSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U801 = FALSE; $W801 = TRUE; }
if (isset($S801)) {
$x804 = $S801->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x805 = $x804($global, $x796, $S801, array($x795), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x803 = $x805;
} else {
if (!$U801) {$x803 = $x795;if ($W801) { $x801 = $x795; }  }
else { $x803 = JS::$undefined; }
}
if (isset($x796->class) && $x796->class === 'Array' &&  is_int('setSeconds') && 'setSeconds' >= $x796->properties['length']) { $x796->properties['length'] = 'setSeconds' + 1; };
unset($x806, $W806, $S806, $U806);
$x807 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 193, 36, '<image>/09_date.js');
$x806 =& $x807[0]; list(,$W806,$S806,$U806) = $x807;
unset($x808, $W808, $S808, $U808);
$x809 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x806, (string) 'getUTCFullYear', 193, 46, '<image>/09_date.js');
$x808 =& $x809[0]; list(,$W808,$S808,$U808) = $x809;
unset($x810, $W810, $S810, $U810);
$x811 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 193, 5, '<image>/09_date.js');
$x810 =& $x811[0]; list(,$W810,$S810,$U810) = $x811;
if ($x810 === JS::$undefined || $x810 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x812 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 193, 30, '<image>/09_date.js');
$_TypeError =& $x812[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x812;
$x813 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x814 = $x813($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x814->class) && $x814->class === 'Error') {$x814->properties['file'] = '<image>/09_date.js';$x814->properties['line'] = 193;$x814->properties['column'] = 30;$x814->attributes['file'] = $x814->attributes['line'] = $x814->attributes['column'] = 0; }
throw new JSException($x814, 193, 30, '<image>/09_date.js');
}
$x810 = JS::toObject($x810, $global);
unset($x815, $W815, $S815, $U815);
$x816 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x810, (string) 'setUTCSeconds', 193, 30, '<image>/09_date.js');
$x815 =& $x816[0]; list(,$W815,$S815,$U815) = $x816;
if ($U815 && (!isset($x810->extensible) || $x810->extensible)) {$x810->properties['setUTCSeconds'] = $x815; $x815 =& $x810->properties['setUTCSeconds']; $x810->attributes['setUTCSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U815 = FALSE; $W815 = TRUE; }
if (isset($S815)) {
$x818 = $S815->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x819 = $x818($global, $x810, $S815, array($x808), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x817 = $x819;
} else {
if (!$U815) {$x817 = $x808;if ($W815) { $x815 = $x808; }  }
else { $x817 = JS::$undefined; }
}
if (isset($x810->class) && $x810->class === 'Array' &&  is_int('setUTCSeconds') && 'setUTCSeconds' >= $x810->properties['length']) { $x810->properties['length'] = 'setUTCSeconds' + 1; };
$x903 = clone JS::$functionTemplate; $x903->call = '_a3686fcdd5b5a69538641de6dddfbea8_26'; $x903->parameters = array (
  0 => 'minutes',
  1 => 'seconds',
  2 => 'ms',
); $x903->scope = $scope; $x903->properties['prototype'] = clone JS::$objectTemplate; $x903->attributes['prototype'] = JS::WRITABLE; $x903->properties['prototype']->properties['constructor'] = $x903; $x903->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x903->properties['length'] = 3; $x903->attributes['length'] = 0;
unset($x904, $W904, $S904, $U904);
$x905 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 195, 5, '<image>/09_date.js');
$x904 =& $x905[0]; list(,$W904,$S904,$U904) = $x905;
if ($x904 === JS::$undefined || $x904 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x906 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 195, 27, '<image>/09_date.js');
$_TypeError =& $x906[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x906;
$x907 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x908 = $x907($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x908->class) && $x908->class === 'Error') {$x908->properties['file'] = '<image>/09_date.js';$x908->properties['line'] = 195;$x908->properties['column'] = 27;$x908->attributes['file'] = $x908->attributes['line'] = $x908->attributes['column'] = 0; }
throw new JSException($x908, 195, 27, '<image>/09_date.js');
}
$x904 = JS::toObject($x904, $global);
unset($x909, $W909, $S909, $U909);
$x910 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x904, (string) 'setMinutes', 195, 27, '<image>/09_date.js');
$x909 =& $x910[0]; list(,$W909,$S909,$U909) = $x910;
if ($U909 && (!isset($x904->extensible) || $x904->extensible)) {$x904->properties['setMinutes'] = $x909; $x909 =& $x904->properties['setMinutes']; $x904->attributes['setMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U909 = FALSE; $W909 = TRUE; }
if (isset($S909)) {
$x912 = $S909->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x913 = $x912($global, $x904, $S909, array($x903), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x911 = $x913;
} else {
if (!$U909) {$x911 = $x903;if ($W909) { $x909 = $x903; }  }
else { $x911 = JS::$undefined; }
}
if (isset($x904->class) && $x904->class === 'Array' &&  is_int('setMinutes') && 'setMinutes' >= $x904->properties['length']) { $x904->properties['length'] = 'setMinutes' + 1; };
unset($x914, $W914, $S914, $U914);
$x915 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 214, 36, '<image>/09_date.js');
$x914 =& $x915[0]; list(,$W914,$S914,$U914) = $x915;
unset($x916, $W916, $S916, $U916);
$x917 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x914, (string) 'getUTCFullYear', 214, 46, '<image>/09_date.js');
$x916 =& $x917[0]; list(,$W916,$S916,$U916) = $x917;
unset($x918, $W918, $S918, $U918);
$x919 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 214, 5, '<image>/09_date.js');
$x918 =& $x919[0]; list(,$W918,$S918,$U918) = $x919;
if ($x918 === JS::$undefined || $x918 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x920 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 214, 30, '<image>/09_date.js');
$_TypeError =& $x920[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x920;
$x921 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x922 = $x921($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x922->class) && $x922->class === 'Error') {$x922->properties['file'] = '<image>/09_date.js';$x922->properties['line'] = 214;$x922->properties['column'] = 30;$x922->attributes['file'] = $x922->attributes['line'] = $x922->attributes['column'] = 0; }
throw new JSException($x922, 214, 30, '<image>/09_date.js');
}
$x918 = JS::toObject($x918, $global);
unset($x923, $W923, $S923, $U923);
$x924 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x918, (string) 'setUTCMinutes', 214, 30, '<image>/09_date.js');
$x923 =& $x924[0]; list(,$W923,$S923,$U923) = $x924;
if ($U923 && (!isset($x918->extensible) || $x918->extensible)) {$x918->properties['setUTCMinutes'] = $x923; $x923 =& $x918->properties['setUTCMinutes']; $x918->attributes['setUTCMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U923 = FALSE; $W923 = TRUE; }
if (isset($S923)) {
$x926 = $S923->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x927 = $x926($global, $x918, $S923, array($x916), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x925 = $x927;
} else {
if (!$U923) {$x925 = $x916;if ($W923) { $x923 = $x916; }  }
else { $x925 = JS::$undefined; }
}
if (isset($x918->class) && $x918->class === 'Array' &&  is_int('setUTCMinutes') && 'setUTCMinutes' >= $x918->properties['length']) { $x918->properties['length'] = 'setUTCMinutes' + 1; };
$x1012 = clone JS::$functionTemplate; $x1012->call = '_a3686fcdd5b5a69538641de6dddfbea8_27'; $x1012->parameters = array (
  0 => 'hours',
  1 => 'minutes',
  2 => 'seconds',
  3 => 'ms',
); $x1012->scope = $scope; $x1012->properties['prototype'] = clone JS::$objectTemplate; $x1012->attributes['prototype'] = JS::WRITABLE; $x1012->properties['prototype']->properties['constructor'] = $x1012; $x1012->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1012->properties['length'] = 4; $x1012->attributes['length'] = 0;
unset($x1013, $W1013, $S1013, $U1013);
$x1014 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 216, 5, '<image>/09_date.js');
$x1013 =& $x1014[0]; list(,$W1013,$S1013,$U1013) = $x1014;
if ($x1013 === JS::$undefined || $x1013 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1015 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 216, 25, '<image>/09_date.js');
$_TypeError =& $x1015[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1015;
$x1016 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1017 = $x1016($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1017->class) && $x1017->class === 'Error') {$x1017->properties['file'] = '<image>/09_date.js';$x1017->properties['line'] = 216;$x1017->properties['column'] = 25;$x1017->attributes['file'] = $x1017->attributes['line'] = $x1017->attributes['column'] = 0; }
throw new JSException($x1017, 216, 25, '<image>/09_date.js');
}
$x1013 = JS::toObject($x1013, $global);
unset($x1018, $W1018, $S1018, $U1018);
$x1019 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1013, (string) 'setHours', 216, 25, '<image>/09_date.js');
$x1018 =& $x1019[0]; list(,$W1018,$S1018,$U1018) = $x1019;
if ($U1018 && (!isset($x1013->extensible) || $x1013->extensible)) {$x1013->properties['setHours'] = $x1018; $x1018 =& $x1013->properties['setHours']; $x1013->attributes['setHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1018 = FALSE; $W1018 = TRUE; }
if (isset($S1018)) {
$x1021 = $S1018->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1022 = $x1021($global, $x1013, $S1018, array($x1012), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1020 = $x1022;
} else {
if (!$U1018) {$x1020 = $x1012;if ($W1018) { $x1018 = $x1012; }  }
else { $x1020 = JS::$undefined; }
}
if (isset($x1013->class) && $x1013->class === 'Array' &&  is_int('setHours') && 'setHours' >= $x1013->properties['length']) { $x1013->properties['length'] = 'setHours' + 1; };
unset($x1023, $W1023, $S1023, $U1023);
$x1024 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 239, 34, '<image>/09_date.js');
$x1023 =& $x1024[0]; list(,$W1023,$S1023,$U1023) = $x1024;
unset($x1025, $W1025, $S1025, $U1025);
$x1026 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1023, (string) 'getUTCFullYear', 239, 44, '<image>/09_date.js');
$x1025 =& $x1026[0]; list(,$W1025,$S1025,$U1025) = $x1026;
unset($x1027, $W1027, $S1027, $U1027);
$x1028 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 239, 5, '<image>/09_date.js');
$x1027 =& $x1028[0]; list(,$W1027,$S1027,$U1027) = $x1028;
if ($x1027 === JS::$undefined || $x1027 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1029 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 239, 28, '<image>/09_date.js');
$_TypeError =& $x1029[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1029;
$x1030 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1031 = $x1030($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1031->class) && $x1031->class === 'Error') {$x1031->properties['file'] = '<image>/09_date.js';$x1031->properties['line'] = 239;$x1031->properties['column'] = 28;$x1031->attributes['file'] = $x1031->attributes['line'] = $x1031->attributes['column'] = 0; }
throw new JSException($x1031, 239, 28, '<image>/09_date.js');
}
$x1027 = JS::toObject($x1027, $global);
unset($x1032, $W1032, $S1032, $U1032);
$x1033 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1027, (string) 'setUTCHours', 239, 28, '<image>/09_date.js');
$x1032 =& $x1033[0]; list(,$W1032,$S1032,$U1032) = $x1033;
if ($U1032 && (!isset($x1027->extensible) || $x1027->extensible)) {$x1027->properties['setUTCHours'] = $x1032; $x1032 =& $x1027->properties['setUTCHours']; $x1027->attributes['setUTCHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1032 = FALSE; $W1032 = TRUE; }
if (isset($S1032)) {
$x1035 = $S1032->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1036 = $x1035($global, $x1027, $S1032, array($x1025), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1034 = $x1036;
} else {
if (!$U1032) {$x1034 = $x1025;if ($W1032) { $x1032 = $x1025; }  }
else { $x1034 = JS::$undefined; }
}
if (isset($x1027->class) && $x1027->class === 'Array' &&  is_int('setUTCHours') && 'setUTCHours' >= $x1027->properties['length']) { $x1027->properties['length'] = 'setUTCHours' + 1; };
$x1118 = clone JS::$functionTemplate; $x1118->call = '_a3686fcdd5b5a69538641de6dddfbea8_28'; $x1118->parameters = array (
  0 => 'date',
); $x1118->scope = $scope; $x1118->properties['prototype'] = clone JS::$objectTemplate; $x1118->attributes['prototype'] = JS::WRITABLE; $x1118->properties['prototype']->properties['constructor'] = $x1118; $x1118->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1118->properties['length'] = 1; $x1118->attributes['length'] = 0;
unset($x1119, $W1119, $S1119, $U1119);
$x1120 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 241, 5, '<image>/09_date.js');
$x1119 =& $x1120[0]; list(,$W1119,$S1119,$U1119) = $x1120;
if ($x1119 === JS::$undefined || $x1119 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1121 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 241, 24, '<image>/09_date.js');
$_TypeError =& $x1121[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1121;
$x1122 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1123 = $x1122($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1123->class) && $x1123->class === 'Error') {$x1123->properties['file'] = '<image>/09_date.js';$x1123->properties['line'] = 241;$x1123->properties['column'] = 24;$x1123->attributes['file'] = $x1123->attributes['line'] = $x1123->attributes['column'] = 0; }
throw new JSException($x1123, 241, 24, '<image>/09_date.js');
}
$x1119 = JS::toObject($x1119, $global);
unset($x1124, $W1124, $S1124, $U1124);
$x1125 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1119, (string) 'setDate', 241, 24, '<image>/09_date.js');
$x1124 =& $x1125[0]; list(,$W1124,$S1124,$U1124) = $x1125;
if ($U1124 && (!isset($x1119->extensible) || $x1119->extensible)) {$x1119->properties['setDate'] = $x1124; $x1124 =& $x1119->properties['setDate']; $x1119->attributes['setDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1124 = FALSE; $W1124 = TRUE; }
if (isset($S1124)) {
$x1127 = $S1124->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1128 = $x1127($global, $x1119, $S1124, array($x1118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1126 = $x1128;
} else {
if (!$U1124) {$x1126 = $x1118;if ($W1124) { $x1124 = $x1118; }  }
else { $x1126 = JS::$undefined; }
}
if (isset($x1119->class) && $x1119->class === 'Array' &&  is_int('setDate') && 'setDate' >= $x1119->properties['length']) { $x1119->properties['length'] = 'setDate' + 1; };
unset($x1129, $W1129, $S1129, $U1129);
$x1130 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 252, 33, '<image>/09_date.js');
$x1129 =& $x1130[0]; list(,$W1129,$S1129,$U1129) = $x1130;
unset($x1131, $W1131, $S1131, $U1131);
$x1132 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1129, (string) 'getUTCFullYear', 252, 43, '<image>/09_date.js');
$x1131 =& $x1132[0]; list(,$W1131,$S1131,$U1131) = $x1132;
unset($x1133, $W1133, $S1133, $U1133);
$x1134 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 252, 5, '<image>/09_date.js');
$x1133 =& $x1134[0]; list(,$W1133,$S1133,$U1133) = $x1134;
if ($x1133 === JS::$undefined || $x1133 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1135 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 252, 27, '<image>/09_date.js');
$_TypeError =& $x1135[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1135;
$x1136 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1137 = $x1136($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1137->class) && $x1137->class === 'Error') {$x1137->properties['file'] = '<image>/09_date.js';$x1137->properties['line'] = 252;$x1137->properties['column'] = 27;$x1137->attributes['file'] = $x1137->attributes['line'] = $x1137->attributes['column'] = 0; }
throw new JSException($x1137, 252, 27, '<image>/09_date.js');
}
$x1133 = JS::toObject($x1133, $global);
unset($x1138, $W1138, $S1138, $U1138);
$x1139 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1133, (string) 'setUTCDate', 252, 27, '<image>/09_date.js');
$x1138 =& $x1139[0]; list(,$W1138,$S1138,$U1138) = $x1139;
if ($U1138 && (!isset($x1133->extensible) || $x1133->extensible)) {$x1133->properties['setUTCDate'] = $x1138; $x1138 =& $x1133->properties['setUTCDate']; $x1133->attributes['setUTCDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1138 = FALSE; $W1138 = TRUE; }
if (isset($S1138)) {
$x1141 = $S1138->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1142 = $x1141($global, $x1133, $S1138, array($x1131), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1140 = $x1142;
} else {
if (!$U1138) {$x1140 = $x1131;if ($W1138) { $x1138 = $x1131; }  }
else { $x1140 = JS::$undefined; }
}
if (isset($x1133->class) && $x1133->class === 'Array' &&  is_int('setUTCDate') && 'setUTCDate' >= $x1133->properties['length']) { $x1133->properties['length'] = 'setUTCDate' + 1; };
$x1225 = clone JS::$functionTemplate; $x1225->call = '_a3686fcdd5b5a69538641de6dddfbea8_29'; $x1225->parameters = array (
  0 => 'month',
  1 => 'date',
); $x1225->scope = $scope; $x1225->properties['prototype'] = clone JS::$objectTemplate; $x1225->attributes['prototype'] = JS::WRITABLE; $x1225->properties['prototype']->properties['constructor'] = $x1225; $x1225->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1225->properties['length'] = 2; $x1225->attributes['length'] = 0;
unset($x1226, $W1226, $S1226, $U1226);
$x1227 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 254, 5, '<image>/09_date.js');
$x1226 =& $x1227[0]; list(,$W1226,$S1226,$U1226) = $x1227;
if ($x1226 === JS::$undefined || $x1226 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1228 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 254, 25, '<image>/09_date.js');
$_TypeError =& $x1228[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1228;
$x1229 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1230 = $x1229($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1230->class) && $x1230->class === 'Error') {$x1230->properties['file'] = '<image>/09_date.js';$x1230->properties['line'] = 254;$x1230->properties['column'] = 25;$x1230->attributes['file'] = $x1230->attributes['line'] = $x1230->attributes['column'] = 0; }
throw new JSException($x1230, 254, 25, '<image>/09_date.js');
}
$x1226 = JS::toObject($x1226, $global);
unset($x1231, $W1231, $S1231, $U1231);
$x1232 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1226, (string) 'setMonth', 254, 25, '<image>/09_date.js');
$x1231 =& $x1232[0]; list(,$W1231,$S1231,$U1231) = $x1232;
if ($U1231 && (!isset($x1226->extensible) || $x1226->extensible)) {$x1226->properties['setMonth'] = $x1231; $x1231 =& $x1226->properties['setMonth']; $x1226->attributes['setMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1231 = FALSE; $W1231 = TRUE; }
if (isset($S1231)) {
$x1234 = $S1231->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1235 = $x1234($global, $x1226, $S1231, array($x1225), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1233 = $x1235;
} else {
if (!$U1231) {$x1233 = $x1225;if ($W1231) { $x1231 = $x1225; }  }
else { $x1233 = JS::$undefined; }
}
if (isset($x1226->class) && $x1226->class === 'Array' &&  is_int('setMonth') && 'setMonth' >= $x1226->properties['length']) { $x1226->properties['length'] = 'setMonth' + 1; };
unset($x1236, $W1236, $S1236, $U1236);
$x1237 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 269, 34, '<image>/09_date.js');
$x1236 =& $x1237[0]; list(,$W1236,$S1236,$U1236) = $x1237;
unset($x1238, $W1238, $S1238, $U1238);
$x1239 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1236, (string) 'getUTCFullYear', 269, 44, '<image>/09_date.js');
$x1238 =& $x1239[0]; list(,$W1238,$S1238,$U1238) = $x1239;
unset($x1240, $W1240, $S1240, $U1240);
$x1241 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 269, 5, '<image>/09_date.js');
$x1240 =& $x1241[0]; list(,$W1240,$S1240,$U1240) = $x1241;
if ($x1240 === JS::$undefined || $x1240 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1242 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 269, 28, '<image>/09_date.js');
$_TypeError =& $x1242[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1242;
$x1243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1244 = $x1243($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1244->class) && $x1244->class === 'Error') {$x1244->properties['file'] = '<image>/09_date.js';$x1244->properties['line'] = 269;$x1244->properties['column'] = 28;$x1244->attributes['file'] = $x1244->attributes['line'] = $x1244->attributes['column'] = 0; }
throw new JSException($x1244, 269, 28, '<image>/09_date.js');
}
$x1240 = JS::toObject($x1240, $global);
unset($x1245, $W1245, $S1245, $U1245);
$x1246 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1240, (string) 'setUTCMonth', 269, 28, '<image>/09_date.js');
$x1245 =& $x1246[0]; list(,$W1245,$S1245,$U1245) = $x1246;
if ($U1245 && (!isset($x1240->extensible) || $x1240->extensible)) {$x1240->properties['setUTCMonth'] = $x1245; $x1245 =& $x1240->properties['setUTCMonth']; $x1240->attributes['setUTCMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1245 = FALSE; $W1245 = TRUE; }
if (isset($S1245)) {
$x1248 = $S1245->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1249 = $x1248($global, $x1240, $S1245, array($x1238), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1247 = $x1249;
} else {
if (!$U1245) {$x1247 = $x1238;if ($W1245) { $x1245 = $x1238; }  }
else { $x1247 = JS::$undefined; }
}
if (isset($x1240->class) && $x1240->class === 'Array' &&  is_int('setUTCMonth') && 'setUTCMonth' >= $x1240->properties['length']) { $x1240->properties['length'] = 'setUTCMonth' + 1; };
$x1333 = clone JS::$functionTemplate; $x1333->call = '_a3686fcdd5b5a69538641de6dddfbea8_30'; $x1333->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
); $x1333->scope = $scope; $x1333->properties['prototype'] = clone JS::$objectTemplate; $x1333->attributes['prototype'] = JS::WRITABLE; $x1333->properties['prototype']->properties['constructor'] = $x1333; $x1333->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1333->properties['length'] = 3; $x1333->attributes['length'] = 0;
unset($x1334, $W1334, $S1334, $U1334);
$x1335 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 271, 5, '<image>/09_date.js');
$x1334 =& $x1335[0]; list(,$W1334,$S1334,$U1334) = $x1335;
if ($x1334 === JS::$undefined || $x1334 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1336 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 271, 28, '<image>/09_date.js');
$_TypeError =& $x1336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1336;
$x1337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1338 = $x1337($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1338->class) && $x1338->class === 'Error') {$x1338->properties['file'] = '<image>/09_date.js';$x1338->properties['line'] = 271;$x1338->properties['column'] = 28;$x1338->attributes['file'] = $x1338->attributes['line'] = $x1338->attributes['column'] = 0; }
throw new JSException($x1338, 271, 28, '<image>/09_date.js');
}
$x1334 = JS::toObject($x1334, $global);
unset($x1339, $W1339, $S1339, $U1339);
$x1340 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1334, (string) 'setFullYear', 271, 28, '<image>/09_date.js');
$x1339 =& $x1340[0]; list(,$W1339,$S1339,$U1339) = $x1340;
if ($U1339 && (!isset($x1334->extensible) || $x1334->extensible)) {$x1334->properties['setFullYear'] = $x1339; $x1339 =& $x1334->properties['setFullYear']; $x1334->attributes['setFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1339 = FALSE; $W1339 = TRUE; }
if (isset($S1339)) {
$x1342 = $S1339->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1343 = $x1342($global, $x1334, $S1339, array($x1333), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1341 = $x1343;
} else {
if (!$U1339) {$x1341 = $x1333;if ($W1339) { $x1339 = $x1333; }  }
else { $x1341 = JS::$undefined; }
}
if (isset($x1334->class) && $x1334->class === 'Array' &&  is_int('setFullYear') && 'setFullYear' >= $x1334->properties['length']) { $x1334->properties['length'] = 'setFullYear' + 1; };
unset($x1344, $W1344, $S1344, $U1344);
$x1345 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 290, 37, '<image>/09_date.js');
$x1344 =& $x1345[0]; list(,$W1344,$S1344,$U1344) = $x1345;
unset($x1346, $W1346, $S1346, $U1346);
$x1347 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1344, (string) 'getUTCFullYear', 290, 47, '<image>/09_date.js');
$x1346 =& $x1347[0]; list(,$W1346,$S1346,$U1346) = $x1347;
unset($x1348, $W1348, $S1348, $U1348);
$x1349 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 290, 5, '<image>/09_date.js');
$x1348 =& $x1349[0]; list(,$W1348,$S1348,$U1348) = $x1349;
if ($x1348 === JS::$undefined || $x1348 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1350 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 290, 31, '<image>/09_date.js');
$_TypeError =& $x1350[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1350;
$x1351 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1352 = $x1351($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1352->class) && $x1352->class === 'Error') {$x1352->properties['file'] = '<image>/09_date.js';$x1352->properties['line'] = 290;$x1352->properties['column'] = 31;$x1352->attributes['file'] = $x1352->attributes['line'] = $x1352->attributes['column'] = 0; }
throw new JSException($x1352, 290, 31, '<image>/09_date.js');
}
$x1348 = JS::toObject($x1348, $global);
unset($x1353, $W1353, $S1353, $U1353);
$x1354 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1348, (string) 'setUTCFullYear', 290, 31, '<image>/09_date.js');
$x1353 =& $x1354[0]; list(,$W1353,$S1353,$U1353) = $x1354;
if ($U1353 && (!isset($x1348->extensible) || $x1348->extensible)) {$x1348->properties['setUTCFullYear'] = $x1353; $x1353 =& $x1348->properties['setUTCFullYear']; $x1348->attributes['setUTCFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1353 = FALSE; $W1353 = TRUE; }
if (isset($S1353)) {
$x1356 = $S1353->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1357 = $x1356($global, $x1348, $S1353, array($x1346), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1355 = $x1357;
} else {
if (!$U1353) {$x1355 = $x1346;if ($W1353) { $x1353 = $x1346; }  }
else { $x1355 = JS::$undefined; }
}
if (isset($x1348->class) && $x1348->class === 'Array' &&  is_int('setUTCFullYear') && 'setUTCFullYear' >= $x1348->properties['length']) { $x1348->properties['length'] = 'setUTCFullYear' + 1; };
unset($x1358, $W1358, $S1358, $U1358);
$x1359 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 292, 34, '<image>/09_date.js');
$x1358 =& $x1359[0]; list(,$W1358,$S1358,$U1358) = $x1359;
unset($x1360, $W1360, $S1360, $U1360);
$x1361 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1358, (string) 'getUTCFullYear', 292, 44, '<image>/09_date.js');
$x1360 =& $x1361[0]; list(,$W1360,$S1360,$U1360) = $x1361;
unset($x1362, $W1362, $S1362, $U1362);
$x1363 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 292, 5, '<image>/09_date.js');
$x1362 =& $x1363[0]; list(,$W1362,$S1362,$U1362) = $x1363;
if ($x1362 === JS::$undefined || $x1362 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1364 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 292, 28, '<image>/09_date.js');
$_TypeError =& $x1364[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1364;
$x1365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1366 = $x1365($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1366->class) && $x1366->class === 'Error') {$x1366->properties['file'] = '<image>/09_date.js';$x1366->properties['line'] = 292;$x1366->properties['column'] = 28;$x1366->attributes['file'] = $x1366->attributes['line'] = $x1366->attributes['column'] = 0; }
throw new JSException($x1366, 292, 28, '<image>/09_date.js');
}
$x1362 = JS::toObject($x1362, $global);
unset($x1367, $W1367, $S1367, $U1367);
$x1368 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1362, (string) 'toUTCString', 292, 28, '<image>/09_date.js');
$x1367 =& $x1368[0]; list(,$W1367,$S1367,$U1367) = $x1368;
if ($U1367 && (!isset($x1362->extensible) || $x1362->extensible)) {$x1362->properties['toUTCString'] = $x1367; $x1367 =& $x1362->properties['toUTCString']; $x1362->attributes['toUTCString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1367 = FALSE; $W1367 = TRUE; }
if (isset($S1367)) {
$x1370 = $S1367->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1371 = $x1370($global, $x1362, $S1367, array($x1360), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1369 = $x1371;
} else {
if (!$U1367) {$x1369 = $x1360;if ($W1367) { $x1367 = $x1360; }  }
else { $x1369 = JS::$undefined; }
}
if (isset($x1362->class) && $x1362->class === 'Array' &&  is_int('toUTCString') && 'toUTCString' >= $x1362->properties['length']) { $x1362->properties['length'] = 'toUTCString' + 1; };
$x1374 = clone JS::$functionTemplate; $x1374->call = '_a3686fcdd5b5a69538641de6dddfbea8_31'; $x1374->parameters = array (
); $x1374->scope = $scope; $x1374->properties['prototype'] = clone JS::$objectTemplate; $x1374->attributes['prototype'] = JS::WRITABLE; $x1374->properties['prototype']->properties['constructor'] = $x1374; $x1374->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1374->properties['length'] = 0; $x1374->attributes['length'] = 0;
unset($x1375, $W1375, $S1375, $U1375);
$x1376 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 294, 5, '<image>/09_date.js');
$x1375 =& $x1376[0]; list(,$W1375,$S1375,$U1375) = $x1376;
if ($x1375 === JS::$undefined || $x1375 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1377 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 294, 28, '<image>/09_date.js');
$_TypeError =& $x1377[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1377;
$x1378 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1379 = $x1378($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1379->class) && $x1379->class === 'Error') {$x1379->properties['file'] = '<image>/09_date.js';$x1379->properties['line'] = 294;$x1379->properties['column'] = 28;$x1379->attributes['file'] = $x1379->attributes['line'] = $x1379->attributes['column'] = 0; }
throw new JSException($x1379, 294, 28, '<image>/09_date.js');
}
$x1375 = JS::toObject($x1375, $global);
unset($x1380, $W1380, $S1380, $U1380);
$x1381 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1375, (string) 'toISOString', 294, 28, '<image>/09_date.js');
$x1380 =& $x1381[0]; list(,$W1380,$S1380,$U1380) = $x1381;
if ($U1380 && (!isset($x1375->extensible) || $x1375->extensible)) {$x1375->properties['toISOString'] = $x1380; $x1380 =& $x1375->properties['toISOString']; $x1375->attributes['toISOString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1380 = FALSE; $W1380 = TRUE; }
if (isset($S1380)) {
$x1383 = $S1380->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1384 = $x1383($global, $x1375, $S1380, array($x1374), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1382 = $x1384;
} else {
if (!$U1380) {$x1382 = $x1374;if ($W1380) { $x1380 = $x1374; }  }
else { $x1382 = JS::$undefined; }
}
if (isset($x1375->class) && $x1375->class === 'Array' &&  is_int('toISOString') && 'toISOString' >= $x1375->properties['length']) { $x1375->properties['length'] = 'toISOString' + 1; };
$x1398 = clone JS::$functionTemplate; $x1398->call = '_a3686fcdd5b5a69538641de6dddfbea8_32'; $x1398->parameters = array (
  0 => 'key',
); $x1398->scope = $scope; $x1398->properties['prototype'] = clone JS::$objectTemplate; $x1398->attributes['prototype'] = JS::WRITABLE; $x1398->properties['prototype']->properties['constructor'] = $x1398; $x1398->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1398->properties['length'] = 1; $x1398->attributes['length'] = 0;
unset($x1399, $W1399, $S1399, $U1399);
$x1400 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 301, 5, '<image>/09_date.js');
$x1399 =& $x1400[0]; list(,$W1399,$S1399,$U1399) = $x1400;
if ($x1399 === JS::$undefined || $x1399 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1401 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 301, 23, '<image>/09_date.js');
$_TypeError =& $x1401[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1401;
$x1402 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1403 = $x1402($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1403->class) && $x1403->class === 'Error') {$x1403->properties['file'] = '<image>/09_date.js';$x1403->properties['line'] = 301;$x1403->properties['column'] = 23;$x1403->attributes['file'] = $x1403->attributes['line'] = $x1403->attributes['column'] = 0; }
throw new JSException($x1403, 301, 23, '<image>/09_date.js');
}
$x1399 = JS::toObject($x1399, $global);
unset($x1404, $W1404, $S1404, $U1404);
$x1405 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1399, (string) 'toJSON', 301, 23, '<image>/09_date.js');
$x1404 =& $x1405[0]; list(,$W1404,$S1404,$U1404) = $x1405;
if ($U1404 && (!isset($x1399->extensible) || $x1399->extensible)) {$x1399->properties['toJSON'] = $x1404; $x1404 =& $x1399->properties['toJSON']; $x1399->attributes['toJSON'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1404 = FALSE; $W1404 = TRUE; }
if (isset($S1404)) {
$x1407 = $S1404->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1408 = $x1407($global, $x1399, $S1404, array($x1398), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1406 = $x1408;
} else {
if (!$U1404) {$x1406 = $x1398;if ($W1404) { $x1404 = $x1398; }  }
else { $x1406 = JS::$undefined; }
}
if (isset($x1399->class) && $x1399->class === 'Array' &&  is_int('toJSON') && 'toJSON' >= $x1399->properties['length']) { $x1399->properties['length'] = 'toJSON' + 1; };
;
return JS::$undefined;
}
