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
if (isset($x10->class) && $x10->class === 'Error' && !isset($x10->properties['file']) && !isset($x10->properties['line']) && !isset($x10->properties['column'])) {$x10->properties['file'] = $file;$x10->properties['line'] = $line;$x10->properties['column'] = $column;$x10->attributes['file'] = $x10->attributes['line'] = $x10->attributes['column'] = 0; }
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x8=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x8[0];list(,$WTypeError,$STypeError,$UTypeError)=$x8;$x9=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x10->class)&&$x10->class===\'Error\'&&!isset($x10->properties[\'file\'])&&!isset($x10->properties[\'line\'])&&!isset($x10->properties[\'column\'])){$x10->properties[\'file\']=$file;$x10->properties[\'line\']=$line;$x10->properties[\'column\']=$column;$x10->attributes[\'file\']=$x10->attributes[\'line\']=$x10->attributes[\'column\']=0;}throw new JSException($x10,$line,$column,$file);}$W5=$S5=$U5=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x5=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x11=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x5=$x12;}else{$x5=JS::$undefined;$U5=TRUE;}return array(&$x5,$W5,$S5,$U5);}', "\n";
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
if (isset($x18->class) && $x18->class === 'Error' && !isset($x18->properties['file']) && !isset($x18->properties['line']) && !isset($x18->properties['column'])) {$x18->properties['file'] = '<image>/09_date.js';$x18->properties['line'] = 3;$x18->properties['column'] = 11;$x18->attributes['file'] = $x18->attributes['line'] = $x18->attributes['column'] = 0; }
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
if (isset($x22->class) && $x22->class === 'Error' && !isset($x22->properties['file']) && !isset($x22->properties['line']) && !isset($x22->properties['column'])) {$x22->properties['file'] = '<image>/09_date.js';$x22->properties['line'] = 3;$x22->properties['column'] = 77;$x22->attributes['file'] = $x22->attributes['line'] = $x22->attributes['column'] = 0; }
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
if (isset($x29->class) && $x29->class === 'Error' && !isset($x29->properties['file']) && !isset($x29->properties['line']) && !isset($x29->properties['column'])) {$x29->properties['file'] = '<image>/09_date.js';$x29->properties['line'] = 3;$x29->properties['column'] = 77;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
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
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/09_date.js';$x36->properties['line'] = 15;$x36->properties['column'] = 15;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
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
if (isset($x50->class) && $x50->class === 'Error' && !isset($x50->properties['file']) && !isset($x50->properties['line']) && !isset($x50->properties['column'])) {$x50->properties['file'] = '<image>/09_date.js';$x50->properties['line'] = 18;$x50->properties['column'] = 26;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
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
if (isset($x57->class) && $x57->class === 'Error' && !isset($x57->properties['file']) && !isset($x57->properties['line']) && !isset($x57->properties['column'])) {$x57->properties['file'] = '<image>/09_date.js';$x57->properties['line'] = 18;$x57->properties['column'] = 26;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
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
if (isset($x65->class) && $x65->class === 'Error' && !isset($x65->properties['file']) && !isset($x65->properties['line']) && !isset($x65->properties['column'])) {$x65->properties['file'] = '<image>/09_date.js';$x65->properties['line'] = 21;$x65->properties['column'] = 27;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
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
if (isset($x72->class) && $x72->class === 'Error' && !isset($x72->properties['file']) && !isset($x72->properties['line']) && !isset($x72->properties['column'])) {$x72->properties['file'] = '<image>/09_date.js';$x72->properties['line'] = 21;$x72->properties['column'] = 27;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
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
if (isset($x78->class) && $x78->class === 'Error' && !isset($x78->properties['file']) && !isset($x78->properties['line']) && !isset($x78->properties['column'])) {$x78->properties['file'] = '<image>/09_date.js';$x78->properties['line'] = 24;$x78->properties['column'] = 15;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
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
if (isset($x84->class) && $x84->class === 'Error' && !isset($x84->properties['file']) && !isset($x84->properties['line']) && !isset($x84->properties['column'])) {$x84->properties['file'] = '<image>/09_date.js';$x84->properties['line'] = 24;$x84->properties['column'] = 11;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 24, 11, '<image>/09_date.js');
}
$x81 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 24, 11);
$x82 = $x81($global, $x73, $_TypeError, array('Date(): cannot get value of object argument given'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x74 = $x82;
if (is_object($x74) && $x74 !== JS::$undefined) { $x73 = $x74; }
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/09_date.js';$x73->properties['line'] = 24;$x73->properties['column'] = 5;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 24, 5, '<image>/09_date.js');;
};
};
}
else {
$x85 = JS::toPrimitive($_value, $global);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x85;;
};
$x87 = $_value;
$x87 = ($x87 === JS::$undefined ? 'undefined' : (is_int($x87) || is_float($x87) ? 'number' : (is_bool($x87) ? 'boolean' : (is_string($x87) ? 'string' : (is_object($x87) && isset($x87->call) ? 'function' : 'object')))));
$x86 = (((gettype($x87) === gettype('string') && $x87 === 'string'))|| (((is_float($x87) || is_int($x87)) && (is_float('string') || is_int('string'))) && $x87 == 'string'));
if (JS::toBoolean($x86, $global)) {
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x89 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 31, 22, '<image>/09_date.js');
$_TypeError =& $x89[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x89;
$x90 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x91 = $x90($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x91->class) && $x91->class === 'Error' && !isset($x91->properties['file']) && !isset($x91->properties['line']) && !isset($x91->properties['column'])) {$x91->properties['file'] = '<image>/09_date.js';$x91->properties['line'] = 31;$x91->properties['column'] = 22;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 31, 22, '<image>/09_date.js');
}
$x88 = JS::toObject($_Date, $global);
unset($x92, $W92, $S92, $U92);
$x93 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x88, (string) 'parse', 31, 22, '<image>/09_date.js');
$x92 =& $x93[0]; list(,$W92,$S92,$U92) = $x93;
if (!(is_object($x92) && isset($x92->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x96 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 31, 22, '<image>/09_date.js');
$_TypeError =& $x96[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x96;
$x97 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x98 = $x97($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x98->class) && $x98->class === 'Error' && !isset($x98->properties['file']) && !isset($x98->properties['line']) && !isset($x98->properties['column'])) {$x98->properties['file'] = '<image>/09_date.js';$x98->properties['line'] = 31;$x98->properties['column'] = 22;$x98->attributes['file'] = $x98->attributes['line'] = $x98->attributes['column'] = 0; }
throw new JSException($x98, 31, 22, '<image>/09_date.js');
}
$x94 = $x92->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 31, 22);
$x95 = $x94($global, $x88, $x92, array($_value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x95;;
};
$_d->value = JS::toNumber($_value, $global) / 1000;;
}
else {
$x100 = JS::toPrimitive($_year, $global);
$x101 = JS::toPrimitive(0, $global);
$x102 = !(is_string($x100) && is_string($x101) ? strcmp($x100, $x101) < 0 : (!is_nan($x103 = JS::toNumber($x100, $global)) && !is_nan($x104 = JS::toNumber($x101, $global)) && $x103 < $x104));
$x99 = $x102;
if (JS::toBoolean($x99, $global)) {
$x105 = JS::toPrimitive($_year, $global);
$x106 = JS::toPrimitive(99, $global);
$x107 = !(is_string($x106) && is_string($x105) ? strcmp($x106, $x105) < 0 : (!is_nan($x108 = JS::toNumber($x106, $global)) && !is_nan($x109 = JS::toNumber($x105, $global)) && $x108 < $x109));
$x99 = $x107; }
if (JS::toBoolean($x99, $global)) {
$x110 = 1900;
if ($Uyear) {$global->properties['year'] = $_year; $_year =& $global->properties['year']; }
$x111 = JS::toPrimitive($_year, $global);
$x112 = JS::toPrimitive($x110, $global);
$_year = (is_string($x111) || is_string($x112) ? JS::toString($x111, $global) . JS::toString($x112, $global) : JS::toNumber($x111, $global) + JS::toNumber($x112, $global));;
};
$x113 = $_date;
if (!JS::toBoolean($x113, $global)) {
$x113 = 1; }
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x113;
$x114 = $_hours;
if (!JS::toBoolean($x114, $global)) {
$x114 = 0; }
if ($Uhours) {$global->properties['hours'] = $_hours; $_hours =& $global->properties['hours']; }
$_hours = $x114;
$x115 = $_minutes;
if (!JS::toBoolean($x115, $global)) {
$x115 = 0; }
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x115;
$x116 = $_seconds;
if (!JS::toBoolean($x116, $global)) {
$x116 = 0; }
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x116;
$x117 = $_ms;
if (!JS::toBoolean($x117, $global)) {
$x117 = 0; }
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x117;
$_d->value = mktime($_hours,$_minutes,$_seconds,$_month,$_date,$_year) +$_ms/ 1000;;
};
};
return $_d;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$scope->properties[\'Date\']=$fn;$_Date=&$scope->properties[\'Date\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){$x3=clone JS::$objectTemplate;unset($x5,$W5,$S5,$U5);$x13=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',3,11,\'<image>/09_date.js\');$x5=&$x13[0];list(,$W5,$S5,$U5)=$x13;$x4=$x5;$x3->prototype=$x4;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,11,\'<image>/09_date.js\');$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x18=$x17($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=\'<image>/09_date.js\';$x18->properties[\'line\']=3;$x18->properties[\'column\']=11;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,3,11,\'<image>/09_date.js\');}$x14=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x15=$x14($global,$x3,$_Date,array($_year,$_month,$_date,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x4=$x15;if(is_object($x4)&&$x4!==JS::$undefined){$x3=$x4;}if($x3===JS::$undefined||$x3===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,77,\'<image>/09_date.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;$x21=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x22=$x21($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x22->class)&&$x22->class===\'Error\'&&!isset($x22->properties[\'file\'])&&!isset($x22->properties[\'line\'])&&!isset($x22->properties[\'column\'])){$x22->properties[\'file\']=\'<image>/09_date.js\';$x22->properties[\'line\']=3;$x22->properties[\'column\']=77;$x22->attributes[\'file\']=$x22->attributes[\'line\']=$x22->attributes[\'column\']=0;}throw new JSException($x22,3,77,\'<image>/09_date.js\');}$x19=JS::toObject($x3,$global);unset($x23,$W23,$S23,$U23);$x24=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x19,(string)\'toString\',3,77,\'<image>/09_date.js\');$x23=&$x24[0];list(,$W23,$S23,$U23)=$x24;if(!(is_object($x23)&&isset($x23->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',3,77,\'<image>/09_date.js\');$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x29=$x28($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'&&!isset($x29->properties[\'file\'])&&!isset($x29->properties[\'line\'])&&!isset($x29->properties[\'column\'])){$x29->properties[\'file\']=\'<image>/09_date.js\';$x29->properties[\'line\']=3;$x29->properties[\'column\']=77;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,3,77,\'<image>/09_date.js\');}$x25=$x23->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x26=$x25($global,$x19,$x23,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x26;}$x30=clone JS::$objectTemplate;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=$x30;$_d->prototype=$_Date->properties[\'prototype\'];$_d->class=\'Date\';$_d->extensible=TRUE;$x31=(((gettype($_year)===gettype(JS::$undefined)&&$_year===JS::$undefined))||(((is_float($_year)||is_int($_year))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_year==JS::$undefined));if(JS::toBoolean($x31,$global)){$_d->value=time();}else{$x32=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x32,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x33=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'arguments\',15,15,\'<image>/09_date.js\');$_arguments=&$x33[0];list(,$Warguments,$Sarguments,$Uarguments)=$x33;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x34=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',15,15,\'<image>/09_date.js\');$_ReferenceError=&$x34[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x34;$x35=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',15,15);$x36=$x35($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x36->class)&&$x36->class===\'Error\'&&!isset($x36->properties[\'file\'])&&!isset($x36->properties[\'line\'])&&!isset($x36->properties[\'column\'])){$x36->properties[\'file\']=\'<image>/09_date.js\';$x36->properties[\'line\']=15;$x36->properties[\'column\']=15;$x36->attributes[\'file\']=$x36->attributes[\'line\']=$x36->attributes[\'column\']=0;}throw new JSException($x36,15,15,\'<image>/09_date.js\');}unset($x37,$W37,$S37,$U37);$x38=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_arguments,(string)0,15,24,\'<image>/09_date.js\');$x37=&$x38[0];list(,$W37,$S37,$U37)=$x38;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x37;$x41=$_value;$x41=($x41===JS::$undefined?\'undefined\':(is_int($x41)||is_float($x41)?\'number\':(is_bool($x41)?\'boolean\':(is_string($x41)?\'string\':(is_object($x41)&&isset($x41->call)?\'function\':\'object\')))));$x40=(((gettype($x41)===gettype(\'object\')&&$x41===\'object\'))||(((is_float($x41)||is_int($x41))&&(is_float(\'object\')||is_int(\'object\')))&&$x41==\'object\'));$x39=$x40;if(JS::toBoolean($x39,$global)){$x42=!(((gettype($_value)===gettype(NULL)&&$_value===NULL))||(((is_float($_value)||is_int($_value))&&(is_float(NULL)||is_int(NULL)))&&$_value==NULL));$x39=$x42;}if(JS::toBoolean($x39,$global)){unset($x44,$W44,$S44,$U44);$x45=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,(string)\'valueOf\',17,20,\'<image>/09_date.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;$x46=$x44;$x46=($x46===JS::$undefined?\'undefined\':(is_int($x46)||is_float($x46)?\'number\':(is_bool($x46)?\'boolean\':(is_string($x46)?\'string\':(is_object($x46)&&isset($x46->call)?\'function\':\'object\')))));$x43=(((gettype($x46)===gettype(\'function\')&&$x46===\'function\'))||(((is_float($x46)||is_int($x46))&&(is_float(\'function\')||is_int(\'function\')))&&$x46==\'function\'));if(JS::toBoolean($x43,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',18,26,\'<image>/09_date.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x50=$x49($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'&&!isset($x50->properties[\'file\'])&&!isset($x50->properties[\'line\'])&&!isset($x50->properties[\'column\'])){$x50->properties[\'file\']=\'<image>/09_date.js\';$x50->properties[\'line\']=18;$x50->properties[\'column\']=26;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,18,26,\'<image>/09_date.js\');}$x47=JS::toObject($_value,$global);unset($x51,$W51,$S51,$U51);$x52=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x47,(string)\'valueOf\',18,26,\'<image>/09_date.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if(!(is_object($x51)&&isset($x51->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x55=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',18,26,\'<image>/09_date.js\');$_TypeError=&$x55[0];list(,$WTypeError,$STypeError,$UTypeError)=$x55;$x56=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x57=$x56($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x57->class)&&$x57->class===\'Error\'&&!isset($x57->properties[\'file\'])&&!isset($x57->properties[\'line\'])&&!isset($x57->properties[\'column\'])){$x57->properties[\'file\']=\'<image>/09_date.js\';$x57->properties[\'line\']=18;$x57->properties[\'column\']=26;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,18,26,\'<image>/09_date.js\');}$x53=$x51->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x54=$x53($global,$x47,$x51,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x54;}else{unset($x59,$W59,$S59,$U59);$x60=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,(string)\'toString\',20,27,\'<image>/09_date.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;$x61=$x59;$x61=($x61===JS::$undefined?\'undefined\':(is_int($x61)||is_float($x61)?\'number\':(is_bool($x61)?\'boolean\':(is_string($x61)?\'string\':(is_object($x61)&&isset($x61->call)?\'function\':\'object\')))));$x58=(((gettype($x61)===gettype(\'function\')&&$x61===\'function\'))||(((is_float($x61)||is_int($x61))&&(is_float(\'function\')||is_int(\'function\')))&&$x61==\'function\'));if(JS::toBoolean($x58,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',21,27,\'<image>/09_date.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x65=$x64($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=\'<image>/09_date.js\';$x65->properties[\'line\']=21;$x65->properties[\'column\']=27;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,21,27,\'<image>/09_date.js\');}$x62=JS::toObject($_value,$global);unset($x66,$W66,$S66,$U66);$x67=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x62,(string)\'toString\',21,27,\'<image>/09_date.js\');$x66=&$x67[0];list(,$W66,$S66,$U66)=$x67;if(!(is_object($x66)&&isset($x66->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',21,27,\'<image>/09_date.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x72=$x71($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'&&!isset($x72->properties[\'file\'])&&!isset($x72->properties[\'line\'])&&!isset($x72->properties[\'column\'])){$x72->properties[\'file\']=\'<image>/09_date.js\';$x72->properties[\'line\']=21;$x72->properties[\'column\']=27;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,21,27,\'<image>/09_date.js\');}$x68=$x66->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x69=$x68($global,$x62,$x66,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x69;}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',24,15,\'<image>/09_date.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x76=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',24,15,\'<image>/09_date.js\');$_ReferenceError=&$x76[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x76;$x77=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,15);$x78=$x77($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'&&!isset($x78->properties[\'file\'])&&!isset($x78->properties[\'line\'])&&!isset($x78->properties[\'column\'])){$x78->properties[\'file\']=\'<image>/09_date.js\';$x78->properties[\'line\']=24;$x78->properties[\'column\']=15;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,24,15,\'<image>/09_date.js\');}$x73=clone JS::$objectTemplate;unset($x79,$W79,$S79,$U79);$x80=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_TypeError,(string)\'prototype\',24,11,\'<image>/09_date.js\');$x79=&$x80[0];list(,$W79,$S79,$U79)=$x80;$x74=$x79;$x73->prototype=$x74;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/09_date.js\';$x84->properties[\'line\']=24;$x84->properties[\'column\']=11;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,24,11,\'<image>/09_date.js\');}$x81=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x82=$x81($global,$x73,$_TypeError,array(\'Date(): cannot get value of object argument given\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x74=$x82;if(is_object($x74)&&$x74!==JS::$undefined){$x73=$x74;}if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/09_date.js\';$x73->properties[\'line\']=24;$x73->properties[\'column\']=5;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,24,5,\'<image>/09_date.js\');}}}else{$x85=JS::toPrimitive($_value,$global);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x85;}$x87=$_value;$x87=($x87===JS::$undefined?\'undefined\':(is_int($x87)||is_float($x87)?\'number\':(is_bool($x87)?\'boolean\':(is_string($x87)?\'string\':(is_object($x87)&&isset($x87->call)?\'function\':\'object\')))));$x86=(((gettype($x87)===gettype(\'string\')&&$x87===\'string\'))||(((is_float($x87)||is_int($x87))&&(is_float(\'string\')||is_int(\'string\')))&&$x87==\'string\'));if(JS::toBoolean($x86,$global)){if($_Date===JS::$undefined||$_Date===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x89=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',31,22,\'<image>/09_date.js\');$_TypeError=&$x89[0];list(,$WTypeError,$STypeError,$UTypeError)=$x89;$x90=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x91=$x90($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x91->class)&&$x91->class===\'Error\'&&!isset($x91->properties[\'file\'])&&!isset($x91->properties[\'line\'])&&!isset($x91->properties[\'column\'])){$x91->properties[\'file\']=\'<image>/09_date.js\';$x91->properties[\'line\']=31;$x91->properties[\'column\']=22;$x91->attributes[\'file\']=$x91->attributes[\'line\']=$x91->attributes[\'column\']=0;}throw new JSException($x91,31,22,\'<image>/09_date.js\');}$x88=JS::toObject($_Date,$global);unset($x92,$W92,$S92,$U92);$x93=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x88,(string)\'parse\',31,22,\'<image>/09_date.js\');$x92=&$x93[0];list(,$W92,$S92,$U92)=$x93;if(!(is_object($x92)&&isset($x92->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x96=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',31,22,\'<image>/09_date.js\');$_TypeError=&$x96[0];list(,$WTypeError,$STypeError,$UTypeError)=$x96;$x97=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x98=$x97($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x98->class)&&$x98->class===\'Error\'&&!isset($x98->properties[\'file\'])&&!isset($x98->properties[\'line\'])&&!isset($x98->properties[\'column\'])){$x98->properties[\'file\']=\'<image>/09_date.js\';$x98->properties[\'line\']=31;$x98->properties[\'column\']=22;$x98->attributes[\'file\']=$x98->attributes[\'line\']=$x98->attributes[\'column\']=0;}throw new JSException($x98,31,22,\'<image>/09_date.js\');}$x94=$x92->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x95=$x94($global,$x88,$x92,array($_value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x95;}$_d->value=JS::toNumber($_value,$global)/1000;}else{$x100=JS::toPrimitive($_year,$global);$x101=JS::toPrimitive(0,$global);$x102=!(is_string($x100)&&is_string($x101)?strcmp($x100,$x101)<0:(!is_nan($x103=JS::toNumber($x100,$global))&&!is_nan($x104=JS::toNumber($x101,$global))&&$x103<$x104));$x99=$x102;if(JS::toBoolean($x99,$global)){$x105=JS::toPrimitive($_year,$global);$x106=JS::toPrimitive(99,$global);$x107=!(is_string($x106)&&is_string($x105)?strcmp($x106,$x105)<0:(!is_nan($x108=JS::toNumber($x106,$global))&&!is_nan($x109=JS::toNumber($x105,$global))&&$x108<$x109));$x99=$x107;}if(JS::toBoolean($x99,$global)){$x110=1900;if($Uyear){$global->properties[\'year\']=$_year;$_year=&$global->properties[\'year\'];}$x111=JS::toPrimitive($_year,$global);$x112=JS::toPrimitive($x110,$global);$_year=(is_string($x111)||is_string($x112)?JS::toString($x111,$global).JS::toString($x112,$global):JS::toNumber($x111,$global)+JS::toNumber($x112,$global));}$x113=$_date;if(!JS::toBoolean($x113,$global)){$x113=1;}if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x113;$x114=$_hours;if(!JS::toBoolean($x114,$global)){$x114=0;}if($Uhours){$global->properties[\'hours\']=$_hours;$_hours=&$global->properties[\'hours\'];}$_hours=$x114;$x115=$_minutes;if(!JS::toBoolean($x115,$global)){$x115=0;}if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x115;$x116=$_seconds;if(!JS::toBoolean($x116,$global)){$x116=0;}if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x116;$x117=$_ms;if(!JS::toBoolean($x117,$global)){$x117=0;}if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x117;$_d->value=mktime($_hours,$_minutes,$_seconds,$_month,$_date,$_year)+$_ms/1000;}}return$_d;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x120 =& $scope->properties['arguments'];
$x120->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x120->properties[$i] = $args[$i];
$x120->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = strtotime($_string);
$x121 = (((gettype($_i) === gettype(false) && $_i === false))|| (((is_float($_i) || is_int($_i)) && (is_float(false) || is_int(false))) && $_i == false));
if (JS::toBoolean($x121, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x122 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NaN', 57, 10, '<image>/09_date.js');
$_NaN =& $x122[0]; list(,$WNaN,$SNaN,$UNaN) = $x122;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x123 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 57, 10, '<image>/09_date.js');
$_ReferenceError =& $x123[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x123;
$x124 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 57, 10);
$x125 = $x124($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x125->class) && $x125->class === 'Error' && !isset($x125->properties['file']) && !isset($x125->properties['line']) && !isset($x125->properties['column'])) {$x125->properties['file'] = '<image>/09_date.js';$x125->properties['line'] = 57;$x125->properties['column'] = 10;$x125->attributes['file'] = $x125->attributes['line'] = $x125->attributes['column'] = 0; }
throw new JSException($x125, 57, 10, '<image>/09_date.js');
}
return $_NaN;;
};
return $_i* 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x120=&$scope->properties[\'arguments\'];$x120->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x120->properties[$i]=$args[$i];$x120->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=strtotime($_string);$x121=(((gettype($_i)===gettype(false)&&$_i===false))||(((is_float($_i)||is_int($_i))&&(is_float(false)||is_int(false)))&&$_i==false));if(JS::toBoolean($x121,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x122=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NaN\',57,10,\'<image>/09_date.js\');$_NaN=&$x122[0];list(,$WNaN,$SNaN,$UNaN)=$x122;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x123=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',57,10,\'<image>/09_date.js\');$_ReferenceError=&$x123[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x123;$x124=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',57,10);$x125=$x124($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x125->class)&&$x125->class===\'Error\'&&!isset($x125->properties[\'file\'])&&!isset($x125->properties[\'line\'])&&!isset($x125->properties[\'column\'])){$x125->properties[\'file\']=\'<image>/09_date.js\';$x125->properties[\'line\']=57;$x125->properties[\'column\']=10;$x125->attributes[\'file\']=$x125->attributes[\'line\']=$x125->attributes[\'column\']=0;}throw new JSException($x125,57,10,\'<image>/09_date.js\');}return$_NaN;}return$_i*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x133 = $x132($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error' && !isset($x133->properties['file']) && !isset($x133->properties['line']) && !isset($x133->properties['column'])) {$x133->properties['file'] = $file;$x133->properties['line'] = $line;$x133->properties['column'] = $column;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, $line, $column, $file);
}
$W130 = $S130 = $U130 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x130 =& $lookup->properties[$id]; $W130 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S130 = $lookup->setters[$id]; }
else { $x130 = JS::$undefined; $U130 = TRUE; }
return array(&$x130, $W130, $S130, $U130);
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x131=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x131[0];list(,$WTypeError,$STypeError,$UTypeError)=$x131;$x132=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x133=$x132($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x133->class)&&$x133->class===\'Error\'&&!isset($x133->properties[\'file\'])&&!isset($x133->properties[\'line\'])&&!isset($x133->properties[\'column\'])){$x133->properties[\'file\']=$file;$x133->properties[\'line\']=$line;$x133->properties[\'column\']=$column;$x133->attributes[\'file\']=$x133->attributes[\'line\']=$x133->attributes[\'column\']=0;}throw new JSException($x133,$line,$column,$file);}$W130=$S130=$U130=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x130=&$lookup->properties[$id];$W130=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S130=$lookup->setters[$id];}else{$x130=JS::$undefined;$U130=TRUE;}return array(&$x130,$W130,$S130,$U130);}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x142 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NotImplementedError', 64, 12, '<image>/09_date.js');
$_NotImplementedError =& $x142[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x142;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x143 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 64, 12, '<image>/09_date.js');
$_ReferenceError =& $x143[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x143;
$x144 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 12);
$x145 = $x144($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x145->class) && $x145->class === 'Error' && !isset($x145->properties['file']) && !isset($x145->properties['line']) && !isset($x145->properties['column'])) {$x145->properties['file'] = '<image>/09_date.js';$x145->properties['line'] = 64;$x145->properties['column'] = 12;$x145->attributes['file'] = $x145->attributes['line'] = $x145->attributes['column'] = 0; }
throw new JSException($x145, 64, 12, '<image>/09_date.js');
}
$x140 = clone JS::$objectTemplate;
unset($x146, $W146, $S146, $U146);
$x147 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, (string) 'prototype', 64, 8, '<image>/09_date.js');
$x146 =& $x147[0]; list(,$W146,$S146,$U146) = $x147;
$x141 = $x146;
$x140->prototype = $x141;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x150 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 64, 8, '<image>/09_date.js');
$_TypeError =& $x150[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x150;
$x151 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x152 = $x151($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/09_date.js';$x152->properties['line'] = 64;$x152->properties['column'] = 8;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 64, 8, '<image>/09_date.js');
}
$x148 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x149 = $x148($global, $x140, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x141 = $x149;
if (is_object($x141) && $x141 !== JS::$undefined) { $x140 = $x141; }
if (isset($x140->class) && $x140->class === 'Error' && !isset($x140->properties['file']) && !isset($x140->properties['line']) && !isset($x140->properties['column'])) {$x140->properties['file'] = '<image>/09_date.js';$x140->properties['line'] = 64;$x140->properties['column'] = 2;$x140->attributes['file'] = $x140->attributes['line'] = $x140->attributes['column'] = 0; }
throw new JSException($x140, 64, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x139=&$scope->properties[\'arguments\'];$x139->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x139->properties[$i]=$args[$i];$x139->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x142=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NotImplementedError\',64,12,\'<image>/09_date.js\');$_NotImplementedError=&$x142[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x142;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x143=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',64,12,\'<image>/09_date.js\');$_ReferenceError=&$x143[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x143;$x144=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,12);$x145=$x144($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x145->class)&&$x145->class===\'Error\'&&!isset($x145->properties[\'file\'])&&!isset($x145->properties[\'line\'])&&!isset($x145->properties[\'column\'])){$x145->properties[\'file\']=\'<image>/09_date.js\';$x145->properties[\'line\']=64;$x145->properties[\'column\']=12;$x145->attributes[\'file\']=$x145->attributes[\'line\']=$x145->attributes[\'column\']=0;}throw new JSException($x145,64,12,\'<image>/09_date.js\');}$x140=clone JS::$objectTemplate;unset($x146,$W146,$S146,$U146);$x147=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,(string)\'prototype\',64,8,\'<image>/09_date.js\');$x146=&$x147[0];list(,$W146,$S146,$U146)=$x147;$x141=$x146;$x140->prototype=$x141;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x150=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',64,8,\'<image>/09_date.js\');$_TypeError=&$x150[0];list(,$WTypeError,$STypeError,$UTypeError)=$x150;$x151=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x152=$x151($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/09_date.js\';$x152->properties[\'line\']=64;$x152->properties[\'column\']=8;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,64,8,\'<image>/09_date.js\');}$x148=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x149=$x148($global,$x140,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x141=$x149;if(is_object($x141)&&$x141!==JS::$undefined){$x140=$x141;}if(isset($x140->class)&&$x140->class===\'Error\'&&!isset($x140->properties[\'file\'])&&!isset($x140->properties[\'line\'])&&!isset($x140->properties[\'column\'])){$x140->properties[\'file\']=\'<image>/09_date.js\';$x140->properties[\'line\']=64;$x140->properties[\'column\']=2;$x140->attributes[\'file\']=$x140->attributes[\'line\']=$x140->attributes[\'column\']=0;}throw new JSException($x140,64,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x163 =& $scope->properties['arguments'];
$x163->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x163->properties[$i] = $args[$i];
$x163->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x166 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 68, 13, '<image>/09_date.js');
$_Date =& $x166[0]; list(,$WDate,$SDate,$UDate) = $x166;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x167 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 68, 13, '<image>/09_date.js');
$_ReferenceError =& $x167[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x167;
$x168 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 13);
$x169 = $x168($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/09_date.js';$x169->properties['line'] = 68;$x169->properties['column'] = 13;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 68, 13, '<image>/09_date.js');
}
$x164 = clone JS::$objectTemplate;
unset($x170, $W170, $S170, $U170);
$x171 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 68, 9, '<image>/09_date.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
$x165 = $x170;
$x164->prototype = $x165;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x174 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 68, 9, '<image>/09_date.js');
$_TypeError =& $x174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x174;
$x175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x176 = $x175($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x176->class) && $x176->class === 'Error' && !isset($x176->properties['file']) && !isset($x176->properties['line']) && !isset($x176->properties['column'])) {$x176->properties['file'] = '<image>/09_date.js';$x176->properties['line'] = 68;$x176->properties['column'] = 9;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 68, 9, '<image>/09_date.js');
}
$x172 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x173 = $x172($global, $x164, $_Date, array(time() * 1000), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x165 = $x173;
if (is_object($x165) && $x165 !== JS::$undefined) { $x164 = $x165; }
return $x164;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x163=&$scope->properties[\'arguments\'];$x163->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x163->properties[$i]=$args[$i];$x163->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x166=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',68,13,\'<image>/09_date.js\');$_Date=&$x166[0];list(,$WDate,$SDate,$UDate)=$x166;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x167=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',68,13,\'<image>/09_date.js\');$_ReferenceError=&$x167[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x167;$x168=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,13);$x169=$x168($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x169->class)&&$x169->class===\'Error\'&&!isset($x169->properties[\'file\'])&&!isset($x169->properties[\'line\'])&&!isset($x169->properties[\'column\'])){$x169->properties[\'file\']=\'<image>/09_date.js\';$x169->properties[\'line\']=68;$x169->properties[\'column\']=13;$x169->attributes[\'file\']=$x169->attributes[\'line\']=$x169->attributes[\'column\']=0;}throw new JSException($x169,68,13,\'<image>/09_date.js\');}$x164=clone JS::$objectTemplate;unset($x170,$W170,$S170,$U170);$x171=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',68,9,\'<image>/09_date.js\');$x170=&$x171[0];list(,$W170,$S170,$U170)=$x171;$x165=$x170;$x164->prototype=$x165;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x174=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',68,9,\'<image>/09_date.js\');$_TypeError=&$x174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x174;$x175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x176=$x175($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x176->class)&&$x176->class===\'Error\'&&!isset($x176->properties[\'file\'])&&!isset($x176->properties[\'line\'])&&!isset($x176->properties[\'column\'])){$x176->properties[\'file\']=\'<image>/09_date.js\';$x176->properties[\'line\']=68;$x176->properties[\'column\']=9;$x176->attributes[\'file\']=$x176->attributes[\'line\']=$x176->attributes[\'column\']=0;}throw new JSException($x176,68,9,\'<image>/09_date.js\');}$x172=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x173=$x172($global,$x164,$_Date,array(time()*1000),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x165=$x173;if(is_object($x165)&&$x165!==JS::$undefined){$x164=$x165;}return$x164;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x210 =& $scope->properties['arguments'];
$x210->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x210->properties[$i] = $args[$i];
$x210->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x210=&$scope->properties[\'arguments\'];$x210->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x210->properties[$i]=$args[$i];$x210->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x223 =& $scope->properties['arguments'];
$x223->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x223->properties[$i] = $args[$i];
$x223->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x223=&$scope->properties[\'arguments\'];$x223->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x223->properties[$i]=$args[$i];$x223->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x236 =& $scope->properties['arguments'];
$x236->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x236->properties[$i] = $args[$i];
$x236->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x236=&$scope->properties[\'arguments\'];$x236->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x236->properties[$i]=$args[$i];$x236->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x291 =& $scope->properties['arguments'];
$x291->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x291->properties[$i] = $args[$i];
$x291->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value * 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x291=&$scope->properties[\'arguments\'];$x291->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x291->properties[$i]=$args[$i];$x291->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x318 =& $scope->properties['arguments'];
$x318->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x318->properties[$i] = $args[$i];
$x318->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('Y', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x318=&$scope->properties[\'arguments\'];$x318->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x318->properties[$i]=$args[$i];$x318->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'Y\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x331 =& $scope->properties['arguments'];
$x331->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x331->properties[$i] = $args[$i];
$x331->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x334 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'NotImplementedError', 105, 12, '<image>/09_date.js');
$_NotImplementedError =& $x334[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x334;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x335 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 105, 12, '<image>/09_date.js');
$_ReferenceError =& $x335[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x335;
$x336 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 12);
$x337 = $x336($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x337->class) && $x337->class === 'Error' && !isset($x337->properties['file']) && !isset($x337->properties['line']) && !isset($x337->properties['column'])) {$x337->properties['file'] = '<image>/09_date.js';$x337->properties['line'] = 105;$x337->properties['column'] = 12;$x337->attributes['file'] = $x337->attributes['line'] = $x337->attributes['column'] = 0; }
throw new JSException($x337, 105, 12, '<image>/09_date.js');
}
$x332 = clone JS::$objectTemplate;
unset($x338, $W338, $S338, $U338);
$x339 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, (string) 'prototype', 105, 8, '<image>/09_date.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x333 = $x338;
$x332->prototype = $x333;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 105, 8, '<image>/09_date.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x344 = $x343($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x344->class) && $x344->class === 'Error' && !isset($x344->properties['file']) && !isset($x344->properties['line']) && !isset($x344->properties['column'])) {$x344->properties['file'] = '<image>/09_date.js';$x344->properties['line'] = 105;$x344->properties['column'] = 8;$x344->attributes['file'] = $x344->attributes['line'] = $x344->attributes['column'] = 0; }
throw new JSException($x344, 105, 8, '<image>/09_date.js');
}
$x340 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x341 = $x340($global, $x332, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x333 = $x341;
if (is_object($x333) && $x333 !== JS::$undefined) { $x332 = $x333; }
if (isset($x332->class) && $x332->class === 'Error' && !isset($x332->properties['file']) && !isset($x332->properties['line']) && !isset($x332->properties['column'])) {$x332->properties['file'] = '<image>/09_date.js';$x332->properties['line'] = 105;$x332->properties['column'] = 2;$x332->attributes['file'] = $x332->attributes['line'] = $x332->attributes['column'] = 0; }
throw new JSException($x332, 105, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x331=&$scope->properties[\'arguments\'];$x331->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x331->properties[$i]=$args[$i];$x331->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x334=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'NotImplementedError\',105,12,\'<image>/09_date.js\');$_NotImplementedError=&$x334[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x334;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x335=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',105,12,\'<image>/09_date.js\');$_ReferenceError=&$x335[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x335;$x336=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,12);$x337=$x336($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x337->class)&&$x337->class===\'Error\'&&!isset($x337->properties[\'file\'])&&!isset($x337->properties[\'line\'])&&!isset($x337->properties[\'column\'])){$x337->properties[\'file\']=\'<image>/09_date.js\';$x337->properties[\'line\']=105;$x337->properties[\'column\']=12;$x337->attributes[\'file\']=$x337->attributes[\'line\']=$x337->attributes[\'column\']=0;}throw new JSException($x337,105,12,\'<image>/09_date.js\');}$x332=clone JS::$objectTemplate;unset($x338,$W338,$S338,$U338);$x339=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,(string)\'prototype\',105,8,\'<image>/09_date.js\');$x338=&$x339[0];list(,$W338,$S338,$U338)=$x339;$x333=$x338;$x332->prototype=$x333;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',105,8,\'<image>/09_date.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x344=$x343($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/09_date.js\';$x344->properties[\'line\']=105;$x344->properties[\'column\']=8;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,105,8,\'<image>/09_date.js\');}$x340=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x341=$x340($global,$x332,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x333=$x341;if(is_object($x333)&&$x333!==JS::$undefined){$x332=$x333;}if(isset($x332->class)&&$x332->class===\'Error\'&&!isset($x332->properties[\'file\'])&&!isset($x332->properties[\'line\'])&&!isset($x332->properties[\'column\'])){$x332->properties[\'file\']=\'<image>/09_date.js\';$x332->properties[\'line\']=105;$x332->properties[\'column\']=2;$x332->attributes[\'file\']=$x332->attributes[\'line\']=$x332->attributes[\'column\']=0;}throw new JSException($x332,105,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x357 =& $scope->properties['arguments'];
$x357->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x357->properties[$i] = $args[$i];
$x357->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x359 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 109, 25, '<image>/09_date.js');
$_TypeError =& $x359[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x359;
$x360 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x361 = $x360($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x361->class) && $x361->class === 'Error' && !isset($x361->properties['file']) && !isset($x361->properties['line']) && !isset($x361->properties['column'])) {$x361->properties['file'] = '<image>/09_date.js';$x361->properties['line'] = 109;$x361->properties['column'] = 25;$x361->attributes['file'] = $x361->attributes['line'] = $x361->attributes['column'] = 0; }
throw new JSException($x361, 109, 25, '<image>/09_date.js');
}
$x358 = JS::toObject($leThis, $global);
unset($x362, $W362, $S362, $U362);
$x363 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x358, (string) 'getFullYear', 109, 25, '<image>/09_date.js');
$x362 =& $x363[0]; list(,$W362,$S362,$U362) = $x363;
if (!(is_object($x362) && isset($x362->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x366 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 109, 25, '<image>/09_date.js');
$_TypeError =& $x366[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x366;
$x367 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x368 = $x367($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x368->class) && $x368->class === 'Error' && !isset($x368->properties['file']) && !isset($x368->properties['line']) && !isset($x368->properties['column'])) {$x368->properties['file'] = '<image>/09_date.js';$x368->properties['line'] = 109;$x368->properties['column'] = 25;$x368->attributes['file'] = $x368->attributes['line'] = $x368->attributes['column'] = 0; }
throw new JSException($x368, 109, 25, '<image>/09_date.js');
}
$x364 = $x362->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x365 = $x364($global, $x358, $x362, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return (JS::toNumber($x365, $global) - JS::toNumber(1900, $global));
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x357=&$scope->properties[\'arguments\'];$x357->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x357->properties[$i]=$args[$i];$x357->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x359=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',109,25,\'<image>/09_date.js\');$_TypeError=&$x359[0];list(,$WTypeError,$STypeError,$UTypeError)=$x359;$x360=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x361=$x360($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x361->class)&&$x361->class===\'Error\'&&!isset($x361->properties[\'file\'])&&!isset($x361->properties[\'line\'])&&!isset($x361->properties[\'column\'])){$x361->properties[\'file\']=\'<image>/09_date.js\';$x361->properties[\'line\']=109;$x361->properties[\'column\']=25;$x361->attributes[\'file\']=$x361->attributes[\'line\']=$x361->attributes[\'column\']=0;}throw new JSException($x361,109,25,\'<image>/09_date.js\');}$x358=JS::toObject($leThis,$global);unset($x362,$W362,$S362,$U362);$x363=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x358,(string)\'getFullYear\',109,25,\'<image>/09_date.js\');$x362=&$x363[0];list(,$W362,$S362,$U362)=$x363;if(!(is_object($x362)&&isset($x362->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x366=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',109,25,\'<image>/09_date.js\');$_TypeError=&$x366[0];list(,$WTypeError,$STypeError,$UTypeError)=$x366;$x367=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x368=$x367($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x368->class)&&$x368->class===\'Error\'&&!isset($x368->properties[\'file\'])&&!isset($x368->properties[\'line\'])&&!isset($x368->properties[\'column\'])){$x368->properties[\'file\']=\'<image>/09_date.js\';$x368->properties[\'line\']=109;$x368->properties[\'column\']=25;$x368->attributes[\'file\']=$x368->attributes[\'line\']=$x368->attributes[\'column\']=0;}throw new JSException($x368,109,25,\'<image>/09_date.js\');}$x364=$x362->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x365=$x364($global,$x358,$x362,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return(JS::toNumber($x365,$global)-JS::toNumber(1900,$global));return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x395 =& $scope->properties['arguments'];
$x395->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x395->properties[$i] = $args[$i];
$x395->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('n', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x395=&$scope->properties[\'arguments\'];$x395->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x395->properties[$i]=$args[$i];$x395->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'n\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x422 =& $scope->properties['arguments'];
$x422->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x422->properties[$i] = $args[$i];
$x422->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('j', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x422=&$scope->properties[\'arguments\'];$x422->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x422->properties[$i]=$args[$i];$x422->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'j\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x449 =& $scope->properties['arguments'];
$x449->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x449->properties[$i] = $args[$i];
$x449->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('w', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x449=&$scope->properties[\'arguments\'];$x449->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x449->properties[$i]=$args[$i];$x449->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'w\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x476 =& $scope->properties['arguments'];
$x476->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x476->properties[$i] = $args[$i];
$x476->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('G', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x476=&$scope->properties[\'arguments\'];$x476->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x476->properties[$i]=$args[$i];$x476->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'G\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x503 =& $scope->properties['arguments'];
$x503->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x503->properties[$i] = $args[$i];
$x503->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('i', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x503=&$scope->properties[\'arguments\'];$x503->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x503->properties[$i]=$args[$i];$x503->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'i\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x530 =& $scope->properties['arguments'];
$x530->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x530->properties[$i] = $args[$i];
$x530->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x530=&$scope->properties[\'arguments\'];$x530->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x530->properties[$i]=$args[$i];$x530->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x557 =& $scope->properties['arguments'];
$x557->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x557->properties[$i] = $args[$i];
$x557->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) (($leThis->value - (int) $leThis->value) * 1000);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x557=&$scope->properties[\'arguments\'];$x557->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x557->properties[$i]=$args[$i];$x557->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)(($leThis->value-(int)$leThis->value)*1000);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x584 =& $scope->properties['arguments'];
$x584->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x584->properties[$i] = $args[$i];
$x584->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Z', $leThis->value) / 60;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x584=&$scope->properties[\'arguments\'];$x584->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x584->properties[$i]=$args[$i];$x584->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Z\',$leThis->value)/60;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x597 =& $scope->properties['arguments'];
$x597->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x597->properties[$i] = $args[$i];
$x597->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x597=&$scope->properties[\'arguments\'];$x597->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x597->properties[$i]=$args[$i];$x597->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'time\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_time=&$scope->properties[\'time\'];$Utime=FALSE;$global->scope[++$global->scope_sp]=$scope;$leThis->value=JS::toNumber($_time/1000,$global);return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x610 =& $scope->properties['arguments'];
$x610->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x610->properties[$i] = $args[$i];
$x610->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['ms'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x613 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 166, 20, '<image>/09_date.js');
$_Date =& $x613[0]; list(,$WDate,$SDate,$UDate) = $x613;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x614 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 166, 20, '<image>/09_date.js');
$_ReferenceError =& $x614[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x614;
$x615 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 20);
$x616 = $x615($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x616->class) && $x616->class === 'Error' && !isset($x616->properties['file']) && !isset($x616->properties['line']) && !isset($x616->properties['column'])) {$x616->properties['file'] = '<image>/09_date.js';$x616->properties['line'] = 166;$x616->properties['column'] = 20;$x616->attributes['file'] = $x616->attributes['line'] = $x616->attributes['column'] = 0; }
throw new JSException($x616, 166, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x618 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 19, '<image>/09_date.js');
$_TypeError =& $x618[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x618;
$x619 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x620 = $x619($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x620->class) && $x620->class === 'Error' && !isset($x620->properties['file']) && !isset($x620->properties['line']) && !isset($x620->properties['column'])) {$x620->properties['file'] = '<image>/09_date.js';$x620->properties['line'] = 167;$x620->properties['column'] = 19;$x620->attributes['file'] = $x620->attributes['line'] = $x620->attributes['column'] = 0; }
throw new JSException($x620, 167, 19, '<image>/09_date.js');
}
$x617 = JS::toObject($leThis, $global);
unset($x621, $W621, $S621, $U621);
$x622 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x617, (string) 'getFullYear', 167, 19, '<image>/09_date.js');
$x621 =& $x622[0]; list(,$W621,$S621,$U621) = $x622;
if (!(is_object($x621) && isset($x621->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x625 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 19, '<image>/09_date.js');
$_TypeError =& $x625[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x625;
$x626 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x627 = $x626($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x627->class) && $x627->class === 'Error' && !isset($x627->properties['file']) && !isset($x627->properties['line']) && !isset($x627->properties['column'])) {$x627->properties['file'] = '<image>/09_date.js';$x627->properties['line'] = 167;$x627->properties['column'] = 19;$x627->attributes['file'] = $x627->attributes['line'] = $x627->attributes['column'] = 0; }
throw new JSException($x627, 167, 19, '<image>/09_date.js');
}
$x623 = $x621->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x624 = $x623($global, $x617, $x621, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x629 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 36, '<image>/09_date.js');
$_TypeError =& $x629[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x629;
$x630 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x631 = $x630($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x631->class) && $x631->class === 'Error' && !isset($x631->properties['file']) && !isset($x631->properties['line']) && !isset($x631->properties['column'])) {$x631->properties['file'] = '<image>/09_date.js';$x631->properties['line'] = 167;$x631->properties['column'] = 36;$x631->attributes['file'] = $x631->attributes['line'] = $x631->attributes['column'] = 0; }
throw new JSException($x631, 167, 36, '<image>/09_date.js');
}
$x628 = JS::toObject($leThis, $global);
unset($x632, $W632, $S632, $U632);
$x633 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x628, (string) 'getMonth', 167, 36, '<image>/09_date.js');
$x632 =& $x633[0]; list(,$W632,$S632,$U632) = $x633;
if (!(is_object($x632) && isset($x632->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x636 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 36, '<image>/09_date.js');
$_TypeError =& $x636[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x636;
$x637 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x638 = $x637($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x638->class) && $x638->class === 'Error' && !isset($x638->properties['file']) && !isset($x638->properties['line']) && !isset($x638->properties['column'])) {$x638->properties['file'] = '<image>/09_date.js';$x638->properties['line'] = 167;$x638->properties['column'] = 36;$x638->attributes['file'] = $x638->attributes['line'] = $x638->attributes['column'] = 0; }
throw new JSException($x638, 167, 36, '<image>/09_date.js');
}
$x634 = $x632->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x635 = $x634($global, $x628, $x632, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x640 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 52, '<image>/09_date.js');
$_TypeError =& $x640[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x640;
$x641 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x642 = $x641($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x642->class) && $x642->class === 'Error' && !isset($x642->properties['file']) && !isset($x642->properties['line']) && !isset($x642->properties['column'])) {$x642->properties['file'] = '<image>/09_date.js';$x642->properties['line'] = 167;$x642->properties['column'] = 52;$x642->attributes['file'] = $x642->attributes['line'] = $x642->attributes['column'] = 0; }
throw new JSException($x642, 167, 52, '<image>/09_date.js');
}
$x639 = JS::toObject($leThis, $global);
unset($x643, $W643, $S643, $U643);
$x644 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x639, (string) 'getDate', 167, 52, '<image>/09_date.js');
$x643 =& $x644[0]; list(,$W643,$S643,$U643) = $x644;
if (!(is_object($x643) && isset($x643->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x647 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 167, 52, '<image>/09_date.js');
$_TypeError =& $x647[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x647;
$x648 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x649 = $x648($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x649->class) && $x649->class === 'Error' && !isset($x649->properties['file']) && !isset($x649->properties['line']) && !isset($x649->properties['column'])) {$x649->properties['file'] = '<image>/09_date.js';$x649->properties['line'] = 167;$x649->properties['column'] = 52;$x649->attributes['file'] = $x649->attributes['line'] = $x649->attributes['column'] = 0; }
throw new JSException($x649, 167, 52, '<image>/09_date.js');
}
$x645 = $x643->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x646 = $x645($global, $x639, $x643, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x651 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 16, '<image>/09_date.js');
$_TypeError =& $x651[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x651;
$x652 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x653 = $x652($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x653->class) && $x653->class === 'Error' && !isset($x653->properties['file']) && !isset($x653->properties['line']) && !isset($x653->properties['column'])) {$x653->properties['file'] = '<image>/09_date.js';$x653->properties['line'] = 168;$x653->properties['column'] = 16;$x653->attributes['file'] = $x653->attributes['line'] = $x653->attributes['column'] = 0; }
throw new JSException($x653, 168, 16, '<image>/09_date.js');
}
$x650 = JS::toObject($leThis, $global);
unset($x654, $W654, $S654, $U654);
$x655 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x650, (string) 'getHours', 168, 16, '<image>/09_date.js');
$x654 =& $x655[0]; list(,$W654,$S654,$U654) = $x655;
if (!(is_object($x654) && isset($x654->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x658 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 16, '<image>/09_date.js');
$_TypeError =& $x658[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x658;
$x659 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x660 = $x659($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x660->class) && $x660->class === 'Error' && !isset($x660->properties['file']) && !isset($x660->properties['line']) && !isset($x660->properties['column'])) {$x660->properties['file'] = '<image>/09_date.js';$x660->properties['line'] = 168;$x660->properties['column'] = 16;$x660->attributes['file'] = $x660->attributes['line'] = $x660->attributes['column'] = 0; }
throw new JSException($x660, 168, 16, '<image>/09_date.js');
}
$x656 = $x654->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x657 = $x656($global, $x650, $x654, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x662 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 35, '<image>/09_date.js');
$_TypeError =& $x662[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x662;
$x663 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x664 = $x663($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x664->class) && $x664->class === 'Error' && !isset($x664->properties['file']) && !isset($x664->properties['line']) && !isset($x664->properties['column'])) {$x664->properties['file'] = '<image>/09_date.js';$x664->properties['line'] = 168;$x664->properties['column'] = 35;$x664->attributes['file'] = $x664->attributes['line'] = $x664->attributes['column'] = 0; }
throw new JSException($x664, 168, 35, '<image>/09_date.js');
}
$x661 = JS::toObject($leThis, $global);
unset($x665, $W665, $S665, $U665);
$x666 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x661, (string) 'getMinutes', 168, 35, '<image>/09_date.js');
$x665 =& $x666[0]; list(,$W665,$S665,$U665) = $x666;
if (!(is_object($x665) && isset($x665->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x669 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 35, '<image>/09_date.js');
$_TypeError =& $x669[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x669;
$x670 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x671 = $x670($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x671->class) && $x671->class === 'Error' && !isset($x671->properties['file']) && !isset($x671->properties['line']) && !isset($x671->properties['column'])) {$x671->properties['file'] = '<image>/09_date.js';$x671->properties['line'] = 168;$x671->properties['column'] = 35;$x671->attributes['file'] = $x671->attributes['line'] = $x671->attributes['column'] = 0; }
throw new JSException($x671, 168, 35, '<image>/09_date.js');
}
$x667 = $x665->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x668 = $x667($global, $x661, $x665, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x673 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 54, '<image>/09_date.js');
$_TypeError =& $x673[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x673;
$x674 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x675 = $x674($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x675->class) && $x675->class === 'Error' && !isset($x675->properties['file']) && !isset($x675->properties['line']) && !isset($x675->properties['column'])) {$x675->properties['file'] = '<image>/09_date.js';$x675->properties['line'] = 168;$x675->properties['column'] = 54;$x675->attributes['file'] = $x675->attributes['line'] = $x675->attributes['column'] = 0; }
throw new JSException($x675, 168, 54, '<image>/09_date.js');
}
$x672 = JS::toObject($leThis, $global);
unset($x676, $W676, $S676, $U676);
$x677 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x672, (string) 'getSeconds', 168, 54, '<image>/09_date.js');
$x676 =& $x677[0]; list(,$W676,$S676,$U676) = $x677;
if (!(is_object($x676) && isset($x676->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x680 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 168, 54, '<image>/09_date.js');
$_TypeError =& $x680[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x680;
$x681 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x682 = $x681($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x682->class) && $x682->class === 'Error' && !isset($x682->properties['file']) && !isset($x682->properties['line']) && !isset($x682->properties['column'])) {$x682->properties['file'] = '<image>/09_date.js';$x682->properties['line'] = 168;$x682->properties['column'] = 54;$x682->attributes['file'] = $x682->attributes['line'] = $x682->attributes['column'] = 0; }
throw new JSException($x682, 168, 54, '<image>/09_date.js');
}
$x678 = $x676->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x679 = $x678($global, $x672, $x676, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x611 = clone JS::$objectTemplate;
unset($x683, $W683, $S683, $U683);
$x684 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 166, 16, '<image>/09_date.js');
$x683 =& $x684[0]; list(,$W683,$S683,$U683) = $x684;
$x612 = $x683;
$x611->prototype = $x612;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x687 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 166, 16, '<image>/09_date.js');
$_TypeError =& $x687[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x687;
$x688 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x689 = $x688($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x689->class) && $x689->class === 'Error' && !isset($x689->properties['file']) && !isset($x689->properties['line']) && !isset($x689->properties['column'])) {$x689->properties['file'] = '<image>/09_date.js';$x689->properties['line'] = 166;$x689->properties['column'] = 16;$x689->attributes['file'] = $x689->attributes['line'] = $x689->attributes['column'] = 0; }
throw new JSException($x689, 166, 16, '<image>/09_date.js');
}
$x685 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x686 = $x685($global, $x611, $_Date, array($x624, $x635, $x646, $x657, $x668, $x679, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x612 = $x686;
if (is_object($x612) && $x612 !== JS::$undefined) { $x611 = $x612; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x611;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x610=&$scope->properties[\'arguments\'];$x610->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x610->properties[$i]=$args[$i];$x610->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'ms\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x613=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',166,20,\'<image>/09_date.js\');$_Date=&$x613[0];list(,$WDate,$SDate,$UDate)=$x613;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x614=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',166,20,\'<image>/09_date.js\');$_ReferenceError=&$x614[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x614;$x615=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,20);$x616=$x615($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x616->class)&&$x616->class===\'Error\'&&!isset($x616->properties[\'file\'])&&!isset($x616->properties[\'line\'])&&!isset($x616->properties[\'column\'])){$x616->properties[\'file\']=\'<image>/09_date.js\';$x616->properties[\'line\']=166;$x616->properties[\'column\']=20;$x616->attributes[\'file\']=$x616->attributes[\'line\']=$x616->attributes[\'column\']=0;}throw new JSException($x616,166,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x618=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,19,\'<image>/09_date.js\');$_TypeError=&$x618[0];list(,$WTypeError,$STypeError,$UTypeError)=$x618;$x619=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x620=$x619($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x620->class)&&$x620->class===\'Error\'&&!isset($x620->properties[\'file\'])&&!isset($x620->properties[\'line\'])&&!isset($x620->properties[\'column\'])){$x620->properties[\'file\']=\'<image>/09_date.js\';$x620->properties[\'line\']=167;$x620->properties[\'column\']=19;$x620->attributes[\'file\']=$x620->attributes[\'line\']=$x620->attributes[\'column\']=0;}throw new JSException($x620,167,19,\'<image>/09_date.js\');}$x617=JS::toObject($leThis,$global);unset($x621,$W621,$S621,$U621);$x622=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x617,(string)\'getFullYear\',167,19,\'<image>/09_date.js\');$x621=&$x622[0];list(,$W621,$S621,$U621)=$x622;if(!(is_object($x621)&&isset($x621->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x625=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,19,\'<image>/09_date.js\');$_TypeError=&$x625[0];list(,$WTypeError,$STypeError,$UTypeError)=$x625;$x626=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x627=$x626($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x627->class)&&$x627->class===\'Error\'&&!isset($x627->properties[\'file\'])&&!isset($x627->properties[\'line\'])&&!isset($x627->properties[\'column\'])){$x627->properties[\'file\']=\'<image>/09_date.js\';$x627->properties[\'line\']=167;$x627->properties[\'column\']=19;$x627->attributes[\'file\']=$x627->attributes[\'line\']=$x627->attributes[\'column\']=0;}throw new JSException($x627,167,19,\'<image>/09_date.js\');}$x623=$x621->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x624=$x623($global,$x617,$x621,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x629=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,36,\'<image>/09_date.js\');$_TypeError=&$x629[0];list(,$WTypeError,$STypeError,$UTypeError)=$x629;$x630=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x631=$x630($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x631->class)&&$x631->class===\'Error\'&&!isset($x631->properties[\'file\'])&&!isset($x631->properties[\'line\'])&&!isset($x631->properties[\'column\'])){$x631->properties[\'file\']=\'<image>/09_date.js\';$x631->properties[\'line\']=167;$x631->properties[\'column\']=36;$x631->attributes[\'file\']=$x631->attributes[\'line\']=$x631->attributes[\'column\']=0;}throw new JSException($x631,167,36,\'<image>/09_date.js\');}$x628=JS::toObject($leThis,$global);unset($x632,$W632,$S632,$U632);$x633=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x628,(string)\'getMonth\',167,36,\'<image>/09_date.js\');$x632=&$x633[0];list(,$W632,$S632,$U632)=$x633;if(!(is_object($x632)&&isset($x632->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x636=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,36,\'<image>/09_date.js\');$_TypeError=&$x636[0];list(,$WTypeError,$STypeError,$UTypeError)=$x636;$x637=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x638=$x637($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x638->class)&&$x638->class===\'Error\'&&!isset($x638->properties[\'file\'])&&!isset($x638->properties[\'line\'])&&!isset($x638->properties[\'column\'])){$x638->properties[\'file\']=\'<image>/09_date.js\';$x638->properties[\'line\']=167;$x638->properties[\'column\']=36;$x638->attributes[\'file\']=$x638->attributes[\'line\']=$x638->attributes[\'column\']=0;}throw new JSException($x638,167,36,\'<image>/09_date.js\');}$x634=$x632->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x635=$x634($global,$x628,$x632,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x640=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,52,\'<image>/09_date.js\');$_TypeError=&$x640[0];list(,$WTypeError,$STypeError,$UTypeError)=$x640;$x641=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x642=$x641($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x642->class)&&$x642->class===\'Error\'&&!isset($x642->properties[\'file\'])&&!isset($x642->properties[\'line\'])&&!isset($x642->properties[\'column\'])){$x642->properties[\'file\']=\'<image>/09_date.js\';$x642->properties[\'line\']=167;$x642->properties[\'column\']=52;$x642->attributes[\'file\']=$x642->attributes[\'line\']=$x642->attributes[\'column\']=0;}throw new JSException($x642,167,52,\'<image>/09_date.js\');}$x639=JS::toObject($leThis,$global);unset($x643,$W643,$S643,$U643);$x644=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x639,(string)\'getDate\',167,52,\'<image>/09_date.js\');$x643=&$x644[0];list(,$W643,$S643,$U643)=$x644;if(!(is_object($x643)&&isset($x643->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x647=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',167,52,\'<image>/09_date.js\');$_TypeError=&$x647[0];list(,$WTypeError,$STypeError,$UTypeError)=$x647;$x648=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x649=$x648($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x649->class)&&$x649->class===\'Error\'&&!isset($x649->properties[\'file\'])&&!isset($x649->properties[\'line\'])&&!isset($x649->properties[\'column\'])){$x649->properties[\'file\']=\'<image>/09_date.js\';$x649->properties[\'line\']=167;$x649->properties[\'column\']=52;$x649->attributes[\'file\']=$x649->attributes[\'line\']=$x649->attributes[\'column\']=0;}throw new JSException($x649,167,52,\'<image>/09_date.js\');}$x645=$x643->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x646=$x645($global,$x639,$x643,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x651=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,16,\'<image>/09_date.js\');$_TypeError=&$x651[0];list(,$WTypeError,$STypeError,$UTypeError)=$x651;$x652=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x653=$x652($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x653->class)&&$x653->class===\'Error\'&&!isset($x653->properties[\'file\'])&&!isset($x653->properties[\'line\'])&&!isset($x653->properties[\'column\'])){$x653->properties[\'file\']=\'<image>/09_date.js\';$x653->properties[\'line\']=168;$x653->properties[\'column\']=16;$x653->attributes[\'file\']=$x653->attributes[\'line\']=$x653->attributes[\'column\']=0;}throw new JSException($x653,168,16,\'<image>/09_date.js\');}$x650=JS::toObject($leThis,$global);unset($x654,$W654,$S654,$U654);$x655=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x650,(string)\'getHours\',168,16,\'<image>/09_date.js\');$x654=&$x655[0];list(,$W654,$S654,$U654)=$x655;if(!(is_object($x654)&&isset($x654->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x658=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,16,\'<image>/09_date.js\');$_TypeError=&$x658[0];list(,$WTypeError,$STypeError,$UTypeError)=$x658;$x659=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x660=$x659($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x660->class)&&$x660->class===\'Error\'&&!isset($x660->properties[\'file\'])&&!isset($x660->properties[\'line\'])&&!isset($x660->properties[\'column\'])){$x660->properties[\'file\']=\'<image>/09_date.js\';$x660->properties[\'line\']=168;$x660->properties[\'column\']=16;$x660->attributes[\'file\']=$x660->attributes[\'line\']=$x660->attributes[\'column\']=0;}throw new JSException($x660,168,16,\'<image>/09_date.js\');}$x656=$x654->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x657=$x656($global,$x650,$x654,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x662=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,35,\'<image>/09_date.js\');$_TypeError=&$x662[0];list(,$WTypeError,$STypeError,$UTypeError)=$x662;$x663=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x664=$x663($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x664->class)&&$x664->class===\'Error\'&&!isset($x664->properties[\'file\'])&&!isset($x664->properties[\'line\'])&&!isset($x664->properties[\'column\'])){$x664->properties[\'file\']=\'<image>/09_date.js\';$x664->properties[\'line\']=168;$x664->properties[\'column\']=35;$x664->attributes[\'file\']=$x664->attributes[\'line\']=$x664->attributes[\'column\']=0;}throw new JSException($x664,168,35,\'<image>/09_date.js\');}$x661=JS::toObject($leThis,$global);unset($x665,$W665,$S665,$U665);$x666=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x661,(string)\'getMinutes\',168,35,\'<image>/09_date.js\');$x665=&$x666[0];list(,$W665,$S665,$U665)=$x666;if(!(is_object($x665)&&isset($x665->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x669=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,35,\'<image>/09_date.js\');$_TypeError=&$x669[0];list(,$WTypeError,$STypeError,$UTypeError)=$x669;$x670=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x671=$x670($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x671->class)&&$x671->class===\'Error\'&&!isset($x671->properties[\'file\'])&&!isset($x671->properties[\'line\'])&&!isset($x671->properties[\'column\'])){$x671->properties[\'file\']=\'<image>/09_date.js\';$x671->properties[\'line\']=168;$x671->properties[\'column\']=35;$x671->attributes[\'file\']=$x671->attributes[\'line\']=$x671->attributes[\'column\']=0;}throw new JSException($x671,168,35,\'<image>/09_date.js\');}$x667=$x665->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x668=$x667($global,$x661,$x665,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x673=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,54,\'<image>/09_date.js\');$_TypeError=&$x673[0];list(,$WTypeError,$STypeError,$UTypeError)=$x673;$x674=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x675=$x674($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x675->class)&&$x675->class===\'Error\'&&!isset($x675->properties[\'file\'])&&!isset($x675->properties[\'line\'])&&!isset($x675->properties[\'column\'])){$x675->properties[\'file\']=\'<image>/09_date.js\';$x675->properties[\'line\']=168;$x675->properties[\'column\']=54;$x675->attributes[\'file\']=$x675->attributes[\'line\']=$x675->attributes[\'column\']=0;}throw new JSException($x675,168,54,\'<image>/09_date.js\');}$x672=JS::toObject($leThis,$global);unset($x676,$W676,$S676,$U676);$x677=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x672,(string)\'getSeconds\',168,54,\'<image>/09_date.js\');$x676=&$x677[0];list(,$W676,$S676,$U676)=$x677;if(!(is_object($x676)&&isset($x676->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x680=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',168,54,\'<image>/09_date.js\');$_TypeError=&$x680[0];list(,$WTypeError,$STypeError,$UTypeError)=$x680;$x681=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x682=$x681($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x682->class)&&$x682->class===\'Error\'&&!isset($x682->properties[\'file\'])&&!isset($x682->properties[\'line\'])&&!isset($x682->properties[\'column\'])){$x682->properties[\'file\']=\'<image>/09_date.js\';$x682->properties[\'line\']=168;$x682->properties[\'column\']=54;$x682->attributes[\'file\']=$x682->attributes[\'line\']=$x682->attributes[\'column\']=0;}throw new JSException($x682,168,54,\'<image>/09_date.js\');}$x678=$x676->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x679=$x678($global,$x672,$x676,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x611=clone JS::$objectTemplate;unset($x683,$W683,$S683,$U683);$x684=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',166,16,\'<image>/09_date.js\');$x683=&$x684[0];list(,$W683,$S683,$U683)=$x684;$x612=$x683;$x611->prototype=$x612;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x687=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',166,16,\'<image>/09_date.js\');$_TypeError=&$x687[0];list(,$WTypeError,$STypeError,$UTypeError)=$x687;$x688=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x689=$x688($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x689->class)&&$x689->class===\'Error\'&&!isset($x689->properties[\'file\'])&&!isset($x689->properties[\'line\'])&&!isset($x689->properties[\'column\'])){$x689->properties[\'file\']=\'<image>/09_date.js\';$x689->properties[\'line\']=166;$x689->properties[\'column\']=16;$x689->attributes[\'file\']=$x689->attributes[\'line\']=$x689->attributes[\'column\']=0;}throw new JSException($x689,166,16,\'<image>/09_date.js\');}$x685=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x686=$x685($global,$x611,$_Date,array($x624,$x635,$x646,$x657,$x668,$x679,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x612=$x686;if(is_object($x612)&&$x612!==JS::$undefined){$x611=$x612;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x611;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x716 =& $scope->properties['arguments'];
$x716->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x716->properties[$i] = $args[$i];
$x716->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['seconds'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x717 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x717, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x719 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 180, 28, '<image>/09_date.js');
$_TypeError =& $x719[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x719;
$x720 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x721 = $x720($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x721->class) && $x721->class === 'Error' && !isset($x721->properties['file']) && !isset($x721->properties['line']) && !isset($x721->properties['column'])) {$x721->properties['file'] = '<image>/09_date.js';$x721->properties['line'] = 180;$x721->properties['column'] = 28;$x721->attributes['file'] = $x721->attributes['line'] = $x721->attributes['column'] = 0; }
throw new JSException($x721, 180, 28, '<image>/09_date.js');
}
$x718 = JS::toObject($leThis, $global);
unset($x722, $W722, $S722, $U722);
$x723 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x718, (string) 'getMilliseconds', 180, 28, '<image>/09_date.js');
$x722 =& $x723[0]; list(,$W722,$S722,$U722) = $x723;
if (!(is_object($x722) && isset($x722->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x726 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 180, 28, '<image>/09_date.js');
$_TypeError =& $x726[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x726;
$x727 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x728 = $x727($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x728->class) && $x728->class === 'Error' && !isset($x728->properties['file']) && !isset($x728->properties['line']) && !isset($x728->properties['column'])) {$x728->properties['file'] = '<image>/09_date.js';$x728->properties['line'] = 180;$x728->properties['column'] = 28;$x728->attributes['file'] = $x728->attributes['line'] = $x728->attributes['column'] = 0; }
throw new JSException($x728, 180, 28, '<image>/09_date.js');
}
$x724 = $x722->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x725 = $x724($global, $x718, $x722, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x725;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x731 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 183, 20, '<image>/09_date.js');
$_Date =& $x731[0]; list(,$WDate,$SDate,$UDate) = $x731;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x732 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 183, 20, '<image>/09_date.js');
$_ReferenceError =& $x732[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x732;
$x733 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 20);
$x734 = $x733($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x734->class) && $x734->class === 'Error' && !isset($x734->properties['file']) && !isset($x734->properties['line']) && !isset($x734->properties['column'])) {$x734->properties['file'] = '<image>/09_date.js';$x734->properties['line'] = 183;$x734->properties['column'] = 20;$x734->attributes['file'] = $x734->attributes['line'] = $x734->attributes['column'] = 0; }
throw new JSException($x734, 183, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x736 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 19, '<image>/09_date.js');
$_TypeError =& $x736[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x736;
$x737 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x738 = $x737($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x738->class) && $x738->class === 'Error' && !isset($x738->properties['file']) && !isset($x738->properties['line']) && !isset($x738->properties['column'])) {$x738->properties['file'] = '<image>/09_date.js';$x738->properties['line'] = 184;$x738->properties['column'] = 19;$x738->attributes['file'] = $x738->attributes['line'] = $x738->attributes['column'] = 0; }
throw new JSException($x738, 184, 19, '<image>/09_date.js');
}
$x735 = JS::toObject($leThis, $global);
unset($x739, $W739, $S739, $U739);
$x740 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x735, (string) 'getFullYear', 184, 19, '<image>/09_date.js');
$x739 =& $x740[0]; list(,$W739,$S739,$U739) = $x740;
if (!(is_object($x739) && isset($x739->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x743 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 19, '<image>/09_date.js');
$_TypeError =& $x743[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x743;
$x744 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x745 = $x744($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x745->class) && $x745->class === 'Error' && !isset($x745->properties['file']) && !isset($x745->properties['line']) && !isset($x745->properties['column'])) {$x745->properties['file'] = '<image>/09_date.js';$x745->properties['line'] = 184;$x745->properties['column'] = 19;$x745->attributes['file'] = $x745->attributes['line'] = $x745->attributes['column'] = 0; }
throw new JSException($x745, 184, 19, '<image>/09_date.js');
}
$x741 = $x739->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x742 = $x741($global, $x735, $x739, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x747 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 36, '<image>/09_date.js');
$_TypeError =& $x747[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x747;
$x748 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x749 = $x748($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x749->class) && $x749->class === 'Error' && !isset($x749->properties['file']) && !isset($x749->properties['line']) && !isset($x749->properties['column'])) {$x749->properties['file'] = '<image>/09_date.js';$x749->properties['line'] = 184;$x749->properties['column'] = 36;$x749->attributes['file'] = $x749->attributes['line'] = $x749->attributes['column'] = 0; }
throw new JSException($x749, 184, 36, '<image>/09_date.js');
}
$x746 = JS::toObject($leThis, $global);
unset($x750, $W750, $S750, $U750);
$x751 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x746, (string) 'getMonth', 184, 36, '<image>/09_date.js');
$x750 =& $x751[0]; list(,$W750,$S750,$U750) = $x751;
if (!(is_object($x750) && isset($x750->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x754 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 36, '<image>/09_date.js');
$_TypeError =& $x754[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x754;
$x755 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x756 = $x755($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x756->class) && $x756->class === 'Error' && !isset($x756->properties['file']) && !isset($x756->properties['line']) && !isset($x756->properties['column'])) {$x756->properties['file'] = '<image>/09_date.js';$x756->properties['line'] = 184;$x756->properties['column'] = 36;$x756->attributes['file'] = $x756->attributes['line'] = $x756->attributes['column'] = 0; }
throw new JSException($x756, 184, 36, '<image>/09_date.js');
}
$x752 = $x750->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x753 = $x752($global, $x746, $x750, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x758 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 52, '<image>/09_date.js');
$_TypeError =& $x758[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x758;
$x759 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x760 = $x759($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x760->class) && $x760->class === 'Error' && !isset($x760->properties['file']) && !isset($x760->properties['line']) && !isset($x760->properties['column'])) {$x760->properties['file'] = '<image>/09_date.js';$x760->properties['line'] = 184;$x760->properties['column'] = 52;$x760->attributes['file'] = $x760->attributes['line'] = $x760->attributes['column'] = 0; }
throw new JSException($x760, 184, 52, '<image>/09_date.js');
}
$x757 = JS::toObject($leThis, $global);
unset($x761, $W761, $S761, $U761);
$x762 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x757, (string) 'getDate', 184, 52, '<image>/09_date.js');
$x761 =& $x762[0]; list(,$W761,$S761,$U761) = $x762;
if (!(is_object($x761) && isset($x761->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x765 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 184, 52, '<image>/09_date.js');
$_TypeError =& $x765[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x765;
$x766 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x767 = $x766($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x767->class) && $x767->class === 'Error' && !isset($x767->properties['file']) && !isset($x767->properties['line']) && !isset($x767->properties['column'])) {$x767->properties['file'] = '<image>/09_date.js';$x767->properties['line'] = 184;$x767->properties['column'] = 52;$x767->attributes['file'] = $x767->attributes['line'] = $x767->attributes['column'] = 0; }
throw new JSException($x767, 184, 52, '<image>/09_date.js');
}
$x763 = $x761->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x764 = $x763($global, $x757, $x761, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x769 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 16, '<image>/09_date.js');
$_TypeError =& $x769[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x769;
$x770 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x771 = $x770($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x771->class) && $x771->class === 'Error' && !isset($x771->properties['file']) && !isset($x771->properties['line']) && !isset($x771->properties['column'])) {$x771->properties['file'] = '<image>/09_date.js';$x771->properties['line'] = 185;$x771->properties['column'] = 16;$x771->attributes['file'] = $x771->attributes['line'] = $x771->attributes['column'] = 0; }
throw new JSException($x771, 185, 16, '<image>/09_date.js');
}
$x768 = JS::toObject($leThis, $global);
unset($x772, $W772, $S772, $U772);
$x773 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x768, (string) 'getHours', 185, 16, '<image>/09_date.js');
$x772 =& $x773[0]; list(,$W772,$S772,$U772) = $x773;
if (!(is_object($x772) && isset($x772->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x776 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 16, '<image>/09_date.js');
$_TypeError =& $x776[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x776;
$x777 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x778 = $x777($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x778->class) && $x778->class === 'Error' && !isset($x778->properties['file']) && !isset($x778->properties['line']) && !isset($x778->properties['column'])) {$x778->properties['file'] = '<image>/09_date.js';$x778->properties['line'] = 185;$x778->properties['column'] = 16;$x778->attributes['file'] = $x778->attributes['line'] = $x778->attributes['column'] = 0; }
throw new JSException($x778, 185, 16, '<image>/09_date.js');
}
$x774 = $x772->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x775 = $x774($global, $x768, $x772, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x780 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 35, '<image>/09_date.js');
$_TypeError =& $x780[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x780;
$x781 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x782 = $x781($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x782->class) && $x782->class === 'Error' && !isset($x782->properties['file']) && !isset($x782->properties['line']) && !isset($x782->properties['column'])) {$x782->properties['file'] = '<image>/09_date.js';$x782->properties['line'] = 185;$x782->properties['column'] = 35;$x782->attributes['file'] = $x782->attributes['line'] = $x782->attributes['column'] = 0; }
throw new JSException($x782, 185, 35, '<image>/09_date.js');
}
$x779 = JS::toObject($leThis, $global);
unset($x783, $W783, $S783, $U783);
$x784 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x779, (string) 'getMinutes', 185, 35, '<image>/09_date.js');
$x783 =& $x784[0]; list(,$W783,$S783,$U783) = $x784;
if (!(is_object($x783) && isset($x783->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x787 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 185, 35, '<image>/09_date.js');
$_TypeError =& $x787[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x787;
$x788 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x789 = $x788($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x789->class) && $x789->class === 'Error' && !isset($x789->properties['file']) && !isset($x789->properties['line']) && !isset($x789->properties['column'])) {$x789->properties['file'] = '<image>/09_date.js';$x789->properties['line'] = 185;$x789->properties['column'] = 35;$x789->attributes['file'] = $x789->attributes['line'] = $x789->attributes['column'] = 0; }
throw new JSException($x789, 185, 35, '<image>/09_date.js');
}
$x785 = $x783->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x786 = $x785($global, $x779, $x783, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x729 = clone JS::$objectTemplate;
unset($x790, $W790, $S790, $U790);
$x791 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 183, 16, '<image>/09_date.js');
$x790 =& $x791[0]; list(,$W790,$S790,$U790) = $x791;
$x730 = $x790;
$x729->prototype = $x730;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x794 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 183, 16, '<image>/09_date.js');
$_TypeError =& $x794[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x794;
$x795 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x796 = $x795($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x796->class) && $x796->class === 'Error' && !isset($x796->properties['file']) && !isset($x796->properties['line']) && !isset($x796->properties['column'])) {$x796->properties['file'] = '<image>/09_date.js';$x796->properties['line'] = 183;$x796->properties['column'] = 16;$x796->attributes['file'] = $x796->attributes['line'] = $x796->attributes['column'] = 0; }
throw new JSException($x796, 183, 16, '<image>/09_date.js');
}
$x792 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x793 = $x792($global, $x729, $_Date, array($x742, $x753, $x764, $x775, $x786, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x730 = $x793;
if (is_object($x730) && $x730 !== JS::$undefined) { $x729 = $x730; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x729;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x716=&$scope->properties[\'arguments\'];$x716->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x716->properties[$i]=$args[$i];$x716->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'seconds\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x717=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x717,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x719=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',180,28,\'<image>/09_date.js\');$_TypeError=&$x719[0];list(,$WTypeError,$STypeError,$UTypeError)=$x719;$x720=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x721=$x720($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x721->class)&&$x721->class===\'Error\'&&!isset($x721->properties[\'file\'])&&!isset($x721->properties[\'line\'])&&!isset($x721->properties[\'column\'])){$x721->properties[\'file\']=\'<image>/09_date.js\';$x721->properties[\'line\']=180;$x721->properties[\'column\']=28;$x721->attributes[\'file\']=$x721->attributes[\'line\']=$x721->attributes[\'column\']=0;}throw new JSException($x721,180,28,\'<image>/09_date.js\');}$x718=JS::toObject($leThis,$global);unset($x722,$W722,$S722,$U722);$x723=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x718,(string)\'getMilliseconds\',180,28,\'<image>/09_date.js\');$x722=&$x723[0];list(,$W722,$S722,$U722)=$x723;if(!(is_object($x722)&&isset($x722->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x726=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',180,28,\'<image>/09_date.js\');$_TypeError=&$x726[0];list(,$WTypeError,$STypeError,$UTypeError)=$x726;$x727=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x728=$x727($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x728->class)&&$x728->class===\'Error\'&&!isset($x728->properties[\'file\'])&&!isset($x728->properties[\'line\'])&&!isset($x728->properties[\'column\'])){$x728->properties[\'file\']=\'<image>/09_date.js\';$x728->properties[\'line\']=180;$x728->properties[\'column\']=28;$x728->attributes[\'file\']=$x728->attributes[\'line\']=$x728->attributes[\'column\']=0;}throw new JSException($x728,180,28,\'<image>/09_date.js\');}$x724=$x722->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x725=$x724($global,$x718,$x722,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x725;}unset($_Date,$WDate,$SDate,$UDate);$x731=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',183,20,\'<image>/09_date.js\');$_Date=&$x731[0];list(,$WDate,$SDate,$UDate)=$x731;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x732=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',183,20,\'<image>/09_date.js\');$_ReferenceError=&$x732[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x732;$x733=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,20);$x734=$x733($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x734->class)&&$x734->class===\'Error\'&&!isset($x734->properties[\'file\'])&&!isset($x734->properties[\'line\'])&&!isset($x734->properties[\'column\'])){$x734->properties[\'file\']=\'<image>/09_date.js\';$x734->properties[\'line\']=183;$x734->properties[\'column\']=20;$x734->attributes[\'file\']=$x734->attributes[\'line\']=$x734->attributes[\'column\']=0;}throw new JSException($x734,183,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x736=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,19,\'<image>/09_date.js\');$_TypeError=&$x736[0];list(,$WTypeError,$STypeError,$UTypeError)=$x736;$x737=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x738=$x737($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x738->class)&&$x738->class===\'Error\'&&!isset($x738->properties[\'file\'])&&!isset($x738->properties[\'line\'])&&!isset($x738->properties[\'column\'])){$x738->properties[\'file\']=\'<image>/09_date.js\';$x738->properties[\'line\']=184;$x738->properties[\'column\']=19;$x738->attributes[\'file\']=$x738->attributes[\'line\']=$x738->attributes[\'column\']=0;}throw new JSException($x738,184,19,\'<image>/09_date.js\');}$x735=JS::toObject($leThis,$global);unset($x739,$W739,$S739,$U739);$x740=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x735,(string)\'getFullYear\',184,19,\'<image>/09_date.js\');$x739=&$x740[0];list(,$W739,$S739,$U739)=$x740;if(!(is_object($x739)&&isset($x739->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x743=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,19,\'<image>/09_date.js\');$_TypeError=&$x743[0];list(,$WTypeError,$STypeError,$UTypeError)=$x743;$x744=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x745=$x744($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x745->class)&&$x745->class===\'Error\'&&!isset($x745->properties[\'file\'])&&!isset($x745->properties[\'line\'])&&!isset($x745->properties[\'column\'])){$x745->properties[\'file\']=\'<image>/09_date.js\';$x745->properties[\'line\']=184;$x745->properties[\'column\']=19;$x745->attributes[\'file\']=$x745->attributes[\'line\']=$x745->attributes[\'column\']=0;}throw new JSException($x745,184,19,\'<image>/09_date.js\');}$x741=$x739->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x742=$x741($global,$x735,$x739,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x747=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,36,\'<image>/09_date.js\');$_TypeError=&$x747[0];list(,$WTypeError,$STypeError,$UTypeError)=$x747;$x748=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x749=$x748($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x749->class)&&$x749->class===\'Error\'&&!isset($x749->properties[\'file\'])&&!isset($x749->properties[\'line\'])&&!isset($x749->properties[\'column\'])){$x749->properties[\'file\']=\'<image>/09_date.js\';$x749->properties[\'line\']=184;$x749->properties[\'column\']=36;$x749->attributes[\'file\']=$x749->attributes[\'line\']=$x749->attributes[\'column\']=0;}throw new JSException($x749,184,36,\'<image>/09_date.js\');}$x746=JS::toObject($leThis,$global);unset($x750,$W750,$S750,$U750);$x751=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x746,(string)\'getMonth\',184,36,\'<image>/09_date.js\');$x750=&$x751[0];list(,$W750,$S750,$U750)=$x751;if(!(is_object($x750)&&isset($x750->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x754=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,36,\'<image>/09_date.js\');$_TypeError=&$x754[0];list(,$WTypeError,$STypeError,$UTypeError)=$x754;$x755=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x756=$x755($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x756->class)&&$x756->class===\'Error\'&&!isset($x756->properties[\'file\'])&&!isset($x756->properties[\'line\'])&&!isset($x756->properties[\'column\'])){$x756->properties[\'file\']=\'<image>/09_date.js\';$x756->properties[\'line\']=184;$x756->properties[\'column\']=36;$x756->attributes[\'file\']=$x756->attributes[\'line\']=$x756->attributes[\'column\']=0;}throw new JSException($x756,184,36,\'<image>/09_date.js\');}$x752=$x750->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x753=$x752($global,$x746,$x750,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x758=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,52,\'<image>/09_date.js\');$_TypeError=&$x758[0];list(,$WTypeError,$STypeError,$UTypeError)=$x758;$x759=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x760=$x759($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x760->class)&&$x760->class===\'Error\'&&!isset($x760->properties[\'file\'])&&!isset($x760->properties[\'line\'])&&!isset($x760->properties[\'column\'])){$x760->properties[\'file\']=\'<image>/09_date.js\';$x760->properties[\'line\']=184;$x760->properties[\'column\']=52;$x760->attributes[\'file\']=$x760->attributes[\'line\']=$x760->attributes[\'column\']=0;}throw new JSException($x760,184,52,\'<image>/09_date.js\');}$x757=JS::toObject($leThis,$global);unset($x761,$W761,$S761,$U761);$x762=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x757,(string)\'getDate\',184,52,\'<image>/09_date.js\');$x761=&$x762[0];list(,$W761,$S761,$U761)=$x762;if(!(is_object($x761)&&isset($x761->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x765=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',184,52,\'<image>/09_date.js\');$_TypeError=&$x765[0];list(,$WTypeError,$STypeError,$UTypeError)=$x765;$x766=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x767=$x766($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x767->class)&&$x767->class===\'Error\'&&!isset($x767->properties[\'file\'])&&!isset($x767->properties[\'line\'])&&!isset($x767->properties[\'column\'])){$x767->properties[\'file\']=\'<image>/09_date.js\';$x767->properties[\'line\']=184;$x767->properties[\'column\']=52;$x767->attributes[\'file\']=$x767->attributes[\'line\']=$x767->attributes[\'column\']=0;}throw new JSException($x767,184,52,\'<image>/09_date.js\');}$x763=$x761->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x764=$x763($global,$x757,$x761,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x769=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,16,\'<image>/09_date.js\');$_TypeError=&$x769[0];list(,$WTypeError,$STypeError,$UTypeError)=$x769;$x770=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x771=$x770($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x771->class)&&$x771->class===\'Error\'&&!isset($x771->properties[\'file\'])&&!isset($x771->properties[\'line\'])&&!isset($x771->properties[\'column\'])){$x771->properties[\'file\']=\'<image>/09_date.js\';$x771->properties[\'line\']=185;$x771->properties[\'column\']=16;$x771->attributes[\'file\']=$x771->attributes[\'line\']=$x771->attributes[\'column\']=0;}throw new JSException($x771,185,16,\'<image>/09_date.js\');}$x768=JS::toObject($leThis,$global);unset($x772,$W772,$S772,$U772);$x773=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x768,(string)\'getHours\',185,16,\'<image>/09_date.js\');$x772=&$x773[0];list(,$W772,$S772,$U772)=$x773;if(!(is_object($x772)&&isset($x772->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x776=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,16,\'<image>/09_date.js\');$_TypeError=&$x776[0];list(,$WTypeError,$STypeError,$UTypeError)=$x776;$x777=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x778=$x777($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x778->class)&&$x778->class===\'Error\'&&!isset($x778->properties[\'file\'])&&!isset($x778->properties[\'line\'])&&!isset($x778->properties[\'column\'])){$x778->properties[\'file\']=\'<image>/09_date.js\';$x778->properties[\'line\']=185;$x778->properties[\'column\']=16;$x778->attributes[\'file\']=$x778->attributes[\'line\']=$x778->attributes[\'column\']=0;}throw new JSException($x778,185,16,\'<image>/09_date.js\');}$x774=$x772->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x775=$x774($global,$x768,$x772,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x780=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,35,\'<image>/09_date.js\');$_TypeError=&$x780[0];list(,$WTypeError,$STypeError,$UTypeError)=$x780;$x781=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x782=$x781($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x782->class)&&$x782->class===\'Error\'&&!isset($x782->properties[\'file\'])&&!isset($x782->properties[\'line\'])&&!isset($x782->properties[\'column\'])){$x782->properties[\'file\']=\'<image>/09_date.js\';$x782->properties[\'line\']=185;$x782->properties[\'column\']=35;$x782->attributes[\'file\']=$x782->attributes[\'line\']=$x782->attributes[\'column\']=0;}throw new JSException($x782,185,35,\'<image>/09_date.js\');}$x779=JS::toObject($leThis,$global);unset($x783,$W783,$S783,$U783);$x784=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x779,(string)\'getMinutes\',185,35,\'<image>/09_date.js\');$x783=&$x784[0];list(,$W783,$S783,$U783)=$x784;if(!(is_object($x783)&&isset($x783->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x787=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',185,35,\'<image>/09_date.js\');$_TypeError=&$x787[0];list(,$WTypeError,$STypeError,$UTypeError)=$x787;$x788=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x789=$x788($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x789->class)&&$x789->class===\'Error\'&&!isset($x789->properties[\'file\'])&&!isset($x789->properties[\'line\'])&&!isset($x789->properties[\'column\'])){$x789->properties[\'file\']=\'<image>/09_date.js\';$x789->properties[\'line\']=185;$x789->properties[\'column\']=35;$x789->attributes[\'file\']=$x789->attributes[\'line\']=$x789->attributes[\'column\']=0;}throw new JSException($x789,185,35,\'<image>/09_date.js\');}$x785=$x783->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x786=$x785($global,$x779,$x783,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x729=clone JS::$objectTemplate;unset($x790,$W790,$S790,$U790);$x791=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',183,16,\'<image>/09_date.js\');$x790=&$x791[0];list(,$W790,$S790,$U790)=$x791;$x730=$x790;$x729->prototype=$x730;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x794=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',183,16,\'<image>/09_date.js\');$_TypeError=&$x794[0];list(,$WTypeError,$STypeError,$UTypeError)=$x794;$x795=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x796=$x795($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x796->class)&&$x796->class===\'Error\'&&!isset($x796->properties[\'file\'])&&!isset($x796->properties[\'line\'])&&!isset($x796->properties[\'column\'])){$x796->properties[\'file\']=\'<image>/09_date.js\';$x796->properties[\'line\']=183;$x796->properties[\'column\']=16;$x796->attributes[\'file\']=$x796->attributes[\'line\']=$x796->attributes[\'column\']=0;}throw new JSException($x796,183,16,\'<image>/09_date.js\');}$x792=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x793=$x792($global,$x729,$_Date,array($x742,$x753,$x764,$x775,$x786,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x730=$x793;if(is_object($x730)&&$x730!==JS::$undefined){$x729=$x730;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x729;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x823 =& $scope->properties['arguments'];
$x823->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x823->properties[$i] = $args[$i];
$x823->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x824 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x824, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x826 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 197, 28, '<image>/09_date.js');
$_TypeError =& $x826[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x826;
$x827 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x828 = $x827($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x828->class) && $x828->class === 'Error' && !isset($x828->properties['file']) && !isset($x828->properties['line']) && !isset($x828->properties['column'])) {$x828->properties['file'] = '<image>/09_date.js';$x828->properties['line'] = 197;$x828->properties['column'] = 28;$x828->attributes['file'] = $x828->attributes['line'] = $x828->attributes['column'] = 0; }
throw new JSException($x828, 197, 28, '<image>/09_date.js');
}
$x825 = JS::toObject($leThis, $global);
unset($x829, $W829, $S829, $U829);
$x830 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x825, (string) 'getSeconds', 197, 28, '<image>/09_date.js');
$x829 =& $x830[0]; list(,$W829,$S829,$U829) = $x830;
if (!(is_object($x829) && isset($x829->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x833 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 197, 28, '<image>/09_date.js');
$_TypeError =& $x833[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x833;
$x834 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x835 = $x834($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x835->class) && $x835->class === 'Error' && !isset($x835->properties['file']) && !isset($x835->properties['line']) && !isset($x835->properties['column'])) {$x835->properties['file'] = '<image>/09_date.js';$x835->properties['line'] = 197;$x835->properties['column'] = 28;$x835->attributes['file'] = $x835->attributes['line'] = $x835->attributes['column'] = 0; }
throw new JSException($x835, 197, 28, '<image>/09_date.js');
}
$x831 = $x829->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x832 = $x831($global, $x825, $x829, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x832;;
};
$x836 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x836, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x838 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 201, 28, '<image>/09_date.js');
$_TypeError =& $x838[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x838;
$x839 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x840 = $x839($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x840->class) && $x840->class === 'Error' && !isset($x840->properties['file']) && !isset($x840->properties['line']) && !isset($x840->properties['column'])) {$x840->properties['file'] = '<image>/09_date.js';$x840->properties['line'] = 201;$x840->properties['column'] = 28;$x840->attributes['file'] = $x840->attributes['line'] = $x840->attributes['column'] = 0; }
throw new JSException($x840, 201, 28, '<image>/09_date.js');
}
$x837 = JS::toObject($leThis, $global);
unset($x841, $W841, $S841, $U841);
$x842 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x837, (string) 'getMilliseconds', 201, 28, '<image>/09_date.js');
$x841 =& $x842[0]; list(,$W841,$S841,$U841) = $x842;
if (!(is_object($x841) && isset($x841->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x845 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 201, 28, '<image>/09_date.js');
$_TypeError =& $x845[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x845;
$x846 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x847 = $x846($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x847->class) && $x847->class === 'Error' && !isset($x847->properties['file']) && !isset($x847->properties['line']) && !isset($x847->properties['column'])) {$x847->properties['file'] = '<image>/09_date.js';$x847->properties['line'] = 201;$x847->properties['column'] = 28;$x847->attributes['file'] = $x847->attributes['line'] = $x847->attributes['column'] = 0; }
throw new JSException($x847, 201, 28, '<image>/09_date.js');
}
$x843 = $x841->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x844 = $x843($global, $x837, $x841, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x844;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x850 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 204, 20, '<image>/09_date.js');
$_Date =& $x850[0]; list(,$WDate,$SDate,$UDate) = $x850;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x851 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 204, 20, '<image>/09_date.js');
$_ReferenceError =& $x851[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x851;
$x852 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 20);
$x853 = $x852($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x853->class) && $x853->class === 'Error' && !isset($x853->properties['file']) && !isset($x853->properties['line']) && !isset($x853->properties['column'])) {$x853->properties['file'] = '<image>/09_date.js';$x853->properties['line'] = 204;$x853->properties['column'] = 20;$x853->attributes['file'] = $x853->attributes['line'] = $x853->attributes['column'] = 0; }
throw new JSException($x853, 204, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x855 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 19, '<image>/09_date.js');
$_TypeError =& $x855[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x855;
$x856 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x857 = $x856($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x857->class) && $x857->class === 'Error' && !isset($x857->properties['file']) && !isset($x857->properties['line']) && !isset($x857->properties['column'])) {$x857->properties['file'] = '<image>/09_date.js';$x857->properties['line'] = 205;$x857->properties['column'] = 19;$x857->attributes['file'] = $x857->attributes['line'] = $x857->attributes['column'] = 0; }
throw new JSException($x857, 205, 19, '<image>/09_date.js');
}
$x854 = JS::toObject($leThis, $global);
unset($x858, $W858, $S858, $U858);
$x859 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x854, (string) 'getFullYear', 205, 19, '<image>/09_date.js');
$x858 =& $x859[0]; list(,$W858,$S858,$U858) = $x859;
if (!(is_object($x858) && isset($x858->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x862 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 19, '<image>/09_date.js');
$_TypeError =& $x862[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x862;
$x863 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x864 = $x863($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x864->class) && $x864->class === 'Error' && !isset($x864->properties['file']) && !isset($x864->properties['line']) && !isset($x864->properties['column'])) {$x864->properties['file'] = '<image>/09_date.js';$x864->properties['line'] = 205;$x864->properties['column'] = 19;$x864->attributes['file'] = $x864->attributes['line'] = $x864->attributes['column'] = 0; }
throw new JSException($x864, 205, 19, '<image>/09_date.js');
}
$x860 = $x858->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x861 = $x860($global, $x854, $x858, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x866 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 36, '<image>/09_date.js');
$_TypeError =& $x866[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x866;
$x867 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x868 = $x867($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x868->class) && $x868->class === 'Error' && !isset($x868->properties['file']) && !isset($x868->properties['line']) && !isset($x868->properties['column'])) {$x868->properties['file'] = '<image>/09_date.js';$x868->properties['line'] = 205;$x868->properties['column'] = 36;$x868->attributes['file'] = $x868->attributes['line'] = $x868->attributes['column'] = 0; }
throw new JSException($x868, 205, 36, '<image>/09_date.js');
}
$x865 = JS::toObject($leThis, $global);
unset($x869, $W869, $S869, $U869);
$x870 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x865, (string) 'getMonth', 205, 36, '<image>/09_date.js');
$x869 =& $x870[0]; list(,$W869,$S869,$U869) = $x870;
if (!(is_object($x869) && isset($x869->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x873 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 36, '<image>/09_date.js');
$_TypeError =& $x873[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x873;
$x874 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x875 = $x874($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x875->class) && $x875->class === 'Error' && !isset($x875->properties['file']) && !isset($x875->properties['line']) && !isset($x875->properties['column'])) {$x875->properties['file'] = '<image>/09_date.js';$x875->properties['line'] = 205;$x875->properties['column'] = 36;$x875->attributes['file'] = $x875->attributes['line'] = $x875->attributes['column'] = 0; }
throw new JSException($x875, 205, 36, '<image>/09_date.js');
}
$x871 = $x869->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x872 = $x871($global, $x865, $x869, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x877 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 52, '<image>/09_date.js');
$_TypeError =& $x877[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x877;
$x878 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x879 = $x878($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x879->class) && $x879->class === 'Error' && !isset($x879->properties['file']) && !isset($x879->properties['line']) && !isset($x879->properties['column'])) {$x879->properties['file'] = '<image>/09_date.js';$x879->properties['line'] = 205;$x879->properties['column'] = 52;$x879->attributes['file'] = $x879->attributes['line'] = $x879->attributes['column'] = 0; }
throw new JSException($x879, 205, 52, '<image>/09_date.js');
}
$x876 = JS::toObject($leThis, $global);
unset($x880, $W880, $S880, $U880);
$x881 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x876, (string) 'getDate', 205, 52, '<image>/09_date.js');
$x880 =& $x881[0]; list(,$W880,$S880,$U880) = $x881;
if (!(is_object($x880) && isset($x880->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x884 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 205, 52, '<image>/09_date.js');
$_TypeError =& $x884[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x884;
$x885 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x886 = $x885($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x886->class) && $x886->class === 'Error' && !isset($x886->properties['file']) && !isset($x886->properties['line']) && !isset($x886->properties['column'])) {$x886->properties['file'] = '<image>/09_date.js';$x886->properties['line'] = 205;$x886->properties['column'] = 52;$x886->attributes['file'] = $x886->attributes['line'] = $x886->attributes['column'] = 0; }
throw new JSException($x886, 205, 52, '<image>/09_date.js');
}
$x882 = $x880->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x883 = $x882($global, $x876, $x880, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x888 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 206, 16, '<image>/09_date.js');
$_TypeError =& $x888[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x888;
$x889 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x890 = $x889($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x890->class) && $x890->class === 'Error' && !isset($x890->properties['file']) && !isset($x890->properties['line']) && !isset($x890->properties['column'])) {$x890->properties['file'] = '<image>/09_date.js';$x890->properties['line'] = 206;$x890->properties['column'] = 16;$x890->attributes['file'] = $x890->attributes['line'] = $x890->attributes['column'] = 0; }
throw new JSException($x890, 206, 16, '<image>/09_date.js');
}
$x887 = JS::toObject($leThis, $global);
unset($x891, $W891, $S891, $U891);
$x892 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x887, (string) 'getHours', 206, 16, '<image>/09_date.js');
$x891 =& $x892[0]; list(,$W891,$S891,$U891) = $x892;
if (!(is_object($x891) && isset($x891->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x895 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 206, 16, '<image>/09_date.js');
$_TypeError =& $x895[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x895;
$x896 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x897 = $x896($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x897->class) && $x897->class === 'Error' && !isset($x897->properties['file']) && !isset($x897->properties['line']) && !isset($x897->properties['column'])) {$x897->properties['file'] = '<image>/09_date.js';$x897->properties['line'] = 206;$x897->properties['column'] = 16;$x897->attributes['file'] = $x897->attributes['line'] = $x897->attributes['column'] = 0; }
throw new JSException($x897, 206, 16, '<image>/09_date.js');
}
$x893 = $x891->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x894 = $x893($global, $x887, $x891, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x848 = clone JS::$objectTemplate;
unset($x898, $W898, $S898, $U898);
$x899 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 204, 16, '<image>/09_date.js');
$x898 =& $x899[0]; list(,$W898,$S898,$U898) = $x899;
$x849 = $x898;
$x848->prototype = $x849;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x902 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 204, 16, '<image>/09_date.js');
$_TypeError =& $x902[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x902;
$x903 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x904 = $x903($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x904->class) && $x904->class === 'Error' && !isset($x904->properties['file']) && !isset($x904->properties['line']) && !isset($x904->properties['column'])) {$x904->properties['file'] = '<image>/09_date.js';$x904->properties['line'] = 204;$x904->properties['column'] = 16;$x904->attributes['file'] = $x904->attributes['line'] = $x904->attributes['column'] = 0; }
throw new JSException($x904, 204, 16, '<image>/09_date.js');
}
$x900 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x901 = $x900($global, $x848, $_Date, array($x861, $x872, $x883, $x894, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x849 = $x901;
if (is_object($x849) && $x849 !== JS::$undefined) { $x848 = $x849; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x848;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x823=&$scope->properties[\'arguments\'];$x823->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x823->properties[$i]=$args[$i];$x823->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'minutes\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x824=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x824,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x826=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',197,28,\'<image>/09_date.js\');$_TypeError=&$x826[0];list(,$WTypeError,$STypeError,$UTypeError)=$x826;$x827=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x828=$x827($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x828->class)&&$x828->class===\'Error\'&&!isset($x828->properties[\'file\'])&&!isset($x828->properties[\'line\'])&&!isset($x828->properties[\'column\'])){$x828->properties[\'file\']=\'<image>/09_date.js\';$x828->properties[\'line\']=197;$x828->properties[\'column\']=28;$x828->attributes[\'file\']=$x828->attributes[\'line\']=$x828->attributes[\'column\']=0;}throw new JSException($x828,197,28,\'<image>/09_date.js\');}$x825=JS::toObject($leThis,$global);unset($x829,$W829,$S829,$U829);$x830=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x825,(string)\'getSeconds\',197,28,\'<image>/09_date.js\');$x829=&$x830[0];list(,$W829,$S829,$U829)=$x830;if(!(is_object($x829)&&isset($x829->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x833=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',197,28,\'<image>/09_date.js\');$_TypeError=&$x833[0];list(,$WTypeError,$STypeError,$UTypeError)=$x833;$x834=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x835=$x834($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x835->class)&&$x835->class===\'Error\'&&!isset($x835->properties[\'file\'])&&!isset($x835->properties[\'line\'])&&!isset($x835->properties[\'column\'])){$x835->properties[\'file\']=\'<image>/09_date.js\';$x835->properties[\'line\']=197;$x835->properties[\'column\']=28;$x835->attributes[\'file\']=$x835->attributes[\'line\']=$x835->attributes[\'column\']=0;}throw new JSException($x835,197,28,\'<image>/09_date.js\');}$x831=$x829->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x832=$x831($global,$x825,$x829,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x832;}$x836=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x836,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x838=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',201,28,\'<image>/09_date.js\');$_TypeError=&$x838[0];list(,$WTypeError,$STypeError,$UTypeError)=$x838;$x839=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x840=$x839($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x840->class)&&$x840->class===\'Error\'&&!isset($x840->properties[\'file\'])&&!isset($x840->properties[\'line\'])&&!isset($x840->properties[\'column\'])){$x840->properties[\'file\']=\'<image>/09_date.js\';$x840->properties[\'line\']=201;$x840->properties[\'column\']=28;$x840->attributes[\'file\']=$x840->attributes[\'line\']=$x840->attributes[\'column\']=0;}throw new JSException($x840,201,28,\'<image>/09_date.js\');}$x837=JS::toObject($leThis,$global);unset($x841,$W841,$S841,$U841);$x842=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x837,(string)\'getMilliseconds\',201,28,\'<image>/09_date.js\');$x841=&$x842[0];list(,$W841,$S841,$U841)=$x842;if(!(is_object($x841)&&isset($x841->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x845=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',201,28,\'<image>/09_date.js\');$_TypeError=&$x845[0];list(,$WTypeError,$STypeError,$UTypeError)=$x845;$x846=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x847=$x846($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x847->class)&&$x847->class===\'Error\'&&!isset($x847->properties[\'file\'])&&!isset($x847->properties[\'line\'])&&!isset($x847->properties[\'column\'])){$x847->properties[\'file\']=\'<image>/09_date.js\';$x847->properties[\'line\']=201;$x847->properties[\'column\']=28;$x847->attributes[\'file\']=$x847->attributes[\'line\']=$x847->attributes[\'column\']=0;}throw new JSException($x847,201,28,\'<image>/09_date.js\');}$x843=$x841->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x844=$x843($global,$x837,$x841,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x844;}unset($_Date,$WDate,$SDate,$UDate);$x850=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',204,20,\'<image>/09_date.js\');$_Date=&$x850[0];list(,$WDate,$SDate,$UDate)=$x850;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x851=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',204,20,\'<image>/09_date.js\');$_ReferenceError=&$x851[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x851;$x852=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,20);$x853=$x852($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x853->class)&&$x853->class===\'Error\'&&!isset($x853->properties[\'file\'])&&!isset($x853->properties[\'line\'])&&!isset($x853->properties[\'column\'])){$x853->properties[\'file\']=\'<image>/09_date.js\';$x853->properties[\'line\']=204;$x853->properties[\'column\']=20;$x853->attributes[\'file\']=$x853->attributes[\'line\']=$x853->attributes[\'column\']=0;}throw new JSException($x853,204,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x855=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,19,\'<image>/09_date.js\');$_TypeError=&$x855[0];list(,$WTypeError,$STypeError,$UTypeError)=$x855;$x856=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x857=$x856($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x857->class)&&$x857->class===\'Error\'&&!isset($x857->properties[\'file\'])&&!isset($x857->properties[\'line\'])&&!isset($x857->properties[\'column\'])){$x857->properties[\'file\']=\'<image>/09_date.js\';$x857->properties[\'line\']=205;$x857->properties[\'column\']=19;$x857->attributes[\'file\']=$x857->attributes[\'line\']=$x857->attributes[\'column\']=0;}throw new JSException($x857,205,19,\'<image>/09_date.js\');}$x854=JS::toObject($leThis,$global);unset($x858,$W858,$S858,$U858);$x859=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x854,(string)\'getFullYear\',205,19,\'<image>/09_date.js\');$x858=&$x859[0];list(,$W858,$S858,$U858)=$x859;if(!(is_object($x858)&&isset($x858->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x862=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,19,\'<image>/09_date.js\');$_TypeError=&$x862[0];list(,$WTypeError,$STypeError,$UTypeError)=$x862;$x863=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x864=$x863($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x864->class)&&$x864->class===\'Error\'&&!isset($x864->properties[\'file\'])&&!isset($x864->properties[\'line\'])&&!isset($x864->properties[\'column\'])){$x864->properties[\'file\']=\'<image>/09_date.js\';$x864->properties[\'line\']=205;$x864->properties[\'column\']=19;$x864->attributes[\'file\']=$x864->attributes[\'line\']=$x864->attributes[\'column\']=0;}throw new JSException($x864,205,19,\'<image>/09_date.js\');}$x860=$x858->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x861=$x860($global,$x854,$x858,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x866=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,36,\'<image>/09_date.js\');$_TypeError=&$x866[0];list(,$WTypeError,$STypeError,$UTypeError)=$x866;$x867=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x868=$x867($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x868->class)&&$x868->class===\'Error\'&&!isset($x868->properties[\'file\'])&&!isset($x868->properties[\'line\'])&&!isset($x868->properties[\'column\'])){$x868->properties[\'file\']=\'<image>/09_date.js\';$x868->properties[\'line\']=205;$x868->properties[\'column\']=36;$x868->attributes[\'file\']=$x868->attributes[\'line\']=$x868->attributes[\'column\']=0;}throw new JSException($x868,205,36,\'<image>/09_date.js\');}$x865=JS::toObject($leThis,$global);unset($x869,$W869,$S869,$U869);$x870=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x865,(string)\'getMonth\',205,36,\'<image>/09_date.js\');$x869=&$x870[0];list(,$W869,$S869,$U869)=$x870;if(!(is_object($x869)&&isset($x869->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x873=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,36,\'<image>/09_date.js\');$_TypeError=&$x873[0];list(,$WTypeError,$STypeError,$UTypeError)=$x873;$x874=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x875=$x874($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x875->class)&&$x875->class===\'Error\'&&!isset($x875->properties[\'file\'])&&!isset($x875->properties[\'line\'])&&!isset($x875->properties[\'column\'])){$x875->properties[\'file\']=\'<image>/09_date.js\';$x875->properties[\'line\']=205;$x875->properties[\'column\']=36;$x875->attributes[\'file\']=$x875->attributes[\'line\']=$x875->attributes[\'column\']=0;}throw new JSException($x875,205,36,\'<image>/09_date.js\');}$x871=$x869->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x872=$x871($global,$x865,$x869,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x877=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,52,\'<image>/09_date.js\');$_TypeError=&$x877[0];list(,$WTypeError,$STypeError,$UTypeError)=$x877;$x878=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x879=$x878($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x879->class)&&$x879->class===\'Error\'&&!isset($x879->properties[\'file\'])&&!isset($x879->properties[\'line\'])&&!isset($x879->properties[\'column\'])){$x879->properties[\'file\']=\'<image>/09_date.js\';$x879->properties[\'line\']=205;$x879->properties[\'column\']=52;$x879->attributes[\'file\']=$x879->attributes[\'line\']=$x879->attributes[\'column\']=0;}throw new JSException($x879,205,52,\'<image>/09_date.js\');}$x876=JS::toObject($leThis,$global);unset($x880,$W880,$S880,$U880);$x881=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x876,(string)\'getDate\',205,52,\'<image>/09_date.js\');$x880=&$x881[0];list(,$W880,$S880,$U880)=$x881;if(!(is_object($x880)&&isset($x880->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x884=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',205,52,\'<image>/09_date.js\');$_TypeError=&$x884[0];list(,$WTypeError,$STypeError,$UTypeError)=$x884;$x885=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x886=$x885($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x886->class)&&$x886->class===\'Error\'&&!isset($x886->properties[\'file\'])&&!isset($x886->properties[\'line\'])&&!isset($x886->properties[\'column\'])){$x886->properties[\'file\']=\'<image>/09_date.js\';$x886->properties[\'line\']=205;$x886->properties[\'column\']=52;$x886->attributes[\'file\']=$x886->attributes[\'line\']=$x886->attributes[\'column\']=0;}throw new JSException($x886,205,52,\'<image>/09_date.js\');}$x882=$x880->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x883=$x882($global,$x876,$x880,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x888=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',206,16,\'<image>/09_date.js\');$_TypeError=&$x888[0];list(,$WTypeError,$STypeError,$UTypeError)=$x888;$x889=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x890=$x889($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x890->class)&&$x890->class===\'Error\'&&!isset($x890->properties[\'file\'])&&!isset($x890->properties[\'line\'])&&!isset($x890->properties[\'column\'])){$x890->properties[\'file\']=\'<image>/09_date.js\';$x890->properties[\'line\']=206;$x890->properties[\'column\']=16;$x890->attributes[\'file\']=$x890->attributes[\'line\']=$x890->attributes[\'column\']=0;}throw new JSException($x890,206,16,\'<image>/09_date.js\');}$x887=JS::toObject($leThis,$global);unset($x891,$W891,$S891,$U891);$x892=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x887,(string)\'getHours\',206,16,\'<image>/09_date.js\');$x891=&$x892[0];list(,$W891,$S891,$U891)=$x892;if(!(is_object($x891)&&isset($x891->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x895=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',206,16,\'<image>/09_date.js\');$_TypeError=&$x895[0];list(,$WTypeError,$STypeError,$UTypeError)=$x895;$x896=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x897=$x896($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x897->class)&&$x897->class===\'Error\'&&!isset($x897->properties[\'file\'])&&!isset($x897->properties[\'line\'])&&!isset($x897->properties[\'column\'])){$x897->properties[\'file\']=\'<image>/09_date.js\';$x897->properties[\'line\']=206;$x897->properties[\'column\']=16;$x897->attributes[\'file\']=$x897->attributes[\'line\']=$x897->attributes[\'column\']=0;}throw new JSException($x897,206,16,\'<image>/09_date.js\');}$x893=$x891->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x894=$x893($global,$x887,$x891,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x848=clone JS::$objectTemplate;unset($x898,$W898,$S898,$U898);$x899=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',204,16,\'<image>/09_date.js\');$x898=&$x899[0];list(,$W898,$S898,$U898)=$x899;$x849=$x898;$x848->prototype=$x849;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x902=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',204,16,\'<image>/09_date.js\');$_TypeError=&$x902[0];list(,$WTypeError,$STypeError,$UTypeError)=$x902;$x903=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x904=$x903($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x904->class)&&$x904->class===\'Error\'&&!isset($x904->properties[\'file\'])&&!isset($x904->properties[\'line\'])&&!isset($x904->properties[\'column\'])){$x904->properties[\'file\']=\'<image>/09_date.js\';$x904->properties[\'line\']=204;$x904->properties[\'column\']=16;$x904->attributes[\'file\']=$x904->attributes[\'line\']=$x904->attributes[\'column\']=0;}throw new JSException($x904,204,16,\'<image>/09_date.js\');}$x900=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x901=$x900($global,$x848,$_Date,array($x861,$x872,$x883,$x894,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x849=$x901;if(is_object($x849)&&$x849!==JS::$undefined){$x848=$x849;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x848;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_27($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x931 =& $scope->properties['arguments'];
$x931->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x931->properties[$i] = $args[$i];
$x931->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x932 = (((gettype($_minutes) === gettype(JS::$undefined) && $_minutes === JS::$undefined))|| (((is_float($_minutes) || is_int($_minutes)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_minutes == JS::$undefined));
if (JS::toBoolean($x932, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x934 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 218, 28, '<image>/09_date.js');
$_TypeError =& $x934[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x934;
$x935 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x936 = $x935($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x936->class) && $x936->class === 'Error' && !isset($x936->properties['file']) && !isset($x936->properties['line']) && !isset($x936->properties['column'])) {$x936->properties['file'] = '<image>/09_date.js';$x936->properties['line'] = 218;$x936->properties['column'] = 28;$x936->attributes['file'] = $x936->attributes['line'] = $x936->attributes['column'] = 0; }
throw new JSException($x936, 218, 28, '<image>/09_date.js');
}
$x933 = JS::toObject($leThis, $global);
unset($x937, $W937, $S937, $U937);
$x938 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x933, (string) 'getMinutes', 218, 28, '<image>/09_date.js');
$x937 =& $x938[0]; list(,$W937,$S937,$U937) = $x938;
if (!(is_object($x937) && isset($x937->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x941 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 218, 28, '<image>/09_date.js');
$_TypeError =& $x941[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x941;
$x942 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x943 = $x942($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x943->class) && $x943->class === 'Error' && !isset($x943->properties['file']) && !isset($x943->properties['line']) && !isset($x943->properties['column'])) {$x943->properties['file'] = '<image>/09_date.js';$x943->properties['line'] = 218;$x943->properties['column'] = 28;$x943->attributes['file'] = $x943->attributes['line'] = $x943->attributes['column'] = 0; }
throw new JSException($x943, 218, 28, '<image>/09_date.js');
}
$x939 = $x937->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x940 = $x939($global, $x933, $x937, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x940;;
};
$x944 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x944, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x946 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 222, 28, '<image>/09_date.js');
$_TypeError =& $x946[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x946;
$x947 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x948 = $x947($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x948->class) && $x948->class === 'Error' && !isset($x948->properties['file']) && !isset($x948->properties['line']) && !isset($x948->properties['column'])) {$x948->properties['file'] = '<image>/09_date.js';$x948->properties['line'] = 222;$x948->properties['column'] = 28;$x948->attributes['file'] = $x948->attributes['line'] = $x948->attributes['column'] = 0; }
throw new JSException($x948, 222, 28, '<image>/09_date.js');
}
$x945 = JS::toObject($leThis, $global);
unset($x949, $W949, $S949, $U949);
$x950 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x945, (string) 'getSeconds', 222, 28, '<image>/09_date.js');
$x949 =& $x950[0]; list(,$W949,$S949,$U949) = $x950;
if (!(is_object($x949) && isset($x949->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x953 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 222, 28, '<image>/09_date.js');
$_TypeError =& $x953[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x953;
$x954 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x955 = $x954($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x955->class) && $x955->class === 'Error' && !isset($x955->properties['file']) && !isset($x955->properties['line']) && !isset($x955->properties['column'])) {$x955->properties['file'] = '<image>/09_date.js';$x955->properties['line'] = 222;$x955->properties['column'] = 28;$x955->attributes['file'] = $x955->attributes['line'] = $x955->attributes['column'] = 0; }
throw new JSException($x955, 222, 28, '<image>/09_date.js');
}
$x951 = $x949->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x952 = $x951($global, $x945, $x949, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x952;;
};
$x956 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x956, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x958 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 226, 28, '<image>/09_date.js');
$_TypeError =& $x958[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x958;
$x959 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x960 = $x959($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x960->class) && $x960->class === 'Error' && !isset($x960->properties['file']) && !isset($x960->properties['line']) && !isset($x960->properties['column'])) {$x960->properties['file'] = '<image>/09_date.js';$x960->properties['line'] = 226;$x960->properties['column'] = 28;$x960->attributes['file'] = $x960->attributes['line'] = $x960->attributes['column'] = 0; }
throw new JSException($x960, 226, 28, '<image>/09_date.js');
}
$x957 = JS::toObject($leThis, $global);
unset($x961, $W961, $S961, $U961);
$x962 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x957, (string) 'getMilliseconds', 226, 28, '<image>/09_date.js');
$x961 =& $x962[0]; list(,$W961,$S961,$U961) = $x962;
if (!(is_object($x961) && isset($x961->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x965 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 226, 28, '<image>/09_date.js');
$_TypeError =& $x965[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x965;
$x966 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x967 = $x966($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x967->class) && $x967->class === 'Error' && !isset($x967->properties['file']) && !isset($x967->properties['line']) && !isset($x967->properties['column'])) {$x967->properties['file'] = '<image>/09_date.js';$x967->properties['line'] = 226;$x967->properties['column'] = 28;$x967->attributes['file'] = $x967->attributes['line'] = $x967->attributes['column'] = 0; }
throw new JSException($x967, 226, 28, '<image>/09_date.js');
}
$x963 = $x961->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x964 = $x963($global, $x957, $x961, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x964;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x970 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 229, 20, '<image>/09_date.js');
$_Date =& $x970[0]; list(,$WDate,$SDate,$UDate) = $x970;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x971 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 229, 20, '<image>/09_date.js');
$_ReferenceError =& $x971[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x971;
$x972 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 20);
$x973 = $x972($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x973->class) && $x973->class === 'Error' && !isset($x973->properties['file']) && !isset($x973->properties['line']) && !isset($x973->properties['column'])) {$x973->properties['file'] = '<image>/09_date.js';$x973->properties['line'] = 229;$x973->properties['column'] = 20;$x973->attributes['file'] = $x973->attributes['line'] = $x973->attributes['column'] = 0; }
throw new JSException($x973, 229, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x975 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 19, '<image>/09_date.js');
$_TypeError =& $x975[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x975;
$x976 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x977 = $x976($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x977->class) && $x977->class === 'Error' && !isset($x977->properties['file']) && !isset($x977->properties['line']) && !isset($x977->properties['column'])) {$x977->properties['file'] = '<image>/09_date.js';$x977->properties['line'] = 230;$x977->properties['column'] = 19;$x977->attributes['file'] = $x977->attributes['line'] = $x977->attributes['column'] = 0; }
throw new JSException($x977, 230, 19, '<image>/09_date.js');
}
$x974 = JS::toObject($leThis, $global);
unset($x978, $W978, $S978, $U978);
$x979 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x974, (string) 'getFullYear', 230, 19, '<image>/09_date.js');
$x978 =& $x979[0]; list(,$W978,$S978,$U978) = $x979;
if (!(is_object($x978) && isset($x978->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x982 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 19, '<image>/09_date.js');
$_TypeError =& $x982[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x982;
$x983 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x984 = $x983($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x984->class) && $x984->class === 'Error' && !isset($x984->properties['file']) && !isset($x984->properties['line']) && !isset($x984->properties['column'])) {$x984->properties['file'] = '<image>/09_date.js';$x984->properties['line'] = 230;$x984->properties['column'] = 19;$x984->attributes['file'] = $x984->attributes['line'] = $x984->attributes['column'] = 0; }
throw new JSException($x984, 230, 19, '<image>/09_date.js');
}
$x980 = $x978->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x981 = $x980($global, $x974, $x978, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x986 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 36, '<image>/09_date.js');
$_TypeError =& $x986[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x986;
$x987 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x988 = $x987($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x988->class) && $x988->class === 'Error' && !isset($x988->properties['file']) && !isset($x988->properties['line']) && !isset($x988->properties['column'])) {$x988->properties['file'] = '<image>/09_date.js';$x988->properties['line'] = 230;$x988->properties['column'] = 36;$x988->attributes['file'] = $x988->attributes['line'] = $x988->attributes['column'] = 0; }
throw new JSException($x988, 230, 36, '<image>/09_date.js');
}
$x985 = JS::toObject($leThis, $global);
unset($x989, $W989, $S989, $U989);
$x990 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x985, (string) 'getMonth', 230, 36, '<image>/09_date.js');
$x989 =& $x990[0]; list(,$W989,$S989,$U989) = $x990;
if (!(is_object($x989) && isset($x989->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x993 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 36, '<image>/09_date.js');
$_TypeError =& $x993[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x993;
$x994 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x995 = $x994($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x995->class) && $x995->class === 'Error' && !isset($x995->properties['file']) && !isset($x995->properties['line']) && !isset($x995->properties['column'])) {$x995->properties['file'] = '<image>/09_date.js';$x995->properties['line'] = 230;$x995->properties['column'] = 36;$x995->attributes['file'] = $x995->attributes['line'] = $x995->attributes['column'] = 0; }
throw new JSException($x995, 230, 36, '<image>/09_date.js');
}
$x991 = $x989->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x992 = $x991($global, $x985, $x989, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x997 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 52, '<image>/09_date.js');
$_TypeError =& $x997[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x997;
$x998 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x999 = $x998($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x999->class) && $x999->class === 'Error' && !isset($x999->properties['file']) && !isset($x999->properties['line']) && !isset($x999->properties['column'])) {$x999->properties['file'] = '<image>/09_date.js';$x999->properties['line'] = 230;$x999->properties['column'] = 52;$x999->attributes['file'] = $x999->attributes['line'] = $x999->attributes['column'] = 0; }
throw new JSException($x999, 230, 52, '<image>/09_date.js');
}
$x996 = JS::toObject($leThis, $global);
unset($x1000, $W1000, $S1000, $U1000);
$x1001 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x996, (string) 'getDate', 230, 52, '<image>/09_date.js');
$x1000 =& $x1001[0]; list(,$W1000,$S1000,$U1000) = $x1001;
if (!(is_object($x1000) && isset($x1000->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1004 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 230, 52, '<image>/09_date.js');
$_TypeError =& $x1004[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1004;
$x1005 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1006 = $x1005($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1006->class) && $x1006->class === 'Error' && !isset($x1006->properties['file']) && !isset($x1006->properties['line']) && !isset($x1006->properties['column'])) {$x1006->properties['file'] = '<image>/09_date.js';$x1006->properties['line'] = 230;$x1006->properties['column'] = 52;$x1006->attributes['file'] = $x1006->attributes['line'] = $x1006->attributes['column'] = 0; }
throw new JSException($x1006, 230, 52, '<image>/09_date.js');
}
$x1002 = $x1000->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1003 = $x1002($global, $x996, $x1000, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x968 = clone JS::$objectTemplate;
unset($x1007, $W1007, $S1007, $U1007);
$x1008 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 229, 16, '<image>/09_date.js');
$x1007 =& $x1008[0]; list(,$W1007,$S1007,$U1007) = $x1008;
$x969 = $x1007;
$x968->prototype = $x969;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1011 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 229, 16, '<image>/09_date.js');
$_TypeError =& $x1011[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1011;
$x1012 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1013 = $x1012($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1013->class) && $x1013->class === 'Error' && !isset($x1013->properties['file']) && !isset($x1013->properties['line']) && !isset($x1013->properties['column'])) {$x1013->properties['file'] = '<image>/09_date.js';$x1013->properties['line'] = 229;$x1013->properties['column'] = 16;$x1013->attributes['file'] = $x1013->attributes['line'] = $x1013->attributes['column'] = 0; }
throw new JSException($x1013, 229, 16, '<image>/09_date.js');
}
$x1009 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1010 = $x1009($global, $x968, $_Date, array($x981, $x992, $x1003, $_hours, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x969 = $x1010;
if (is_object($x969) && $x969 !== JS::$undefined) { $x968 = $x969; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x968;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_27($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x931=&$scope->properties[\'arguments\'];$x931->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x931->properties[$i]=$args[$i];$x931->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'hours\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x932=(((gettype($_minutes)===gettype(JS::$undefined)&&$_minutes===JS::$undefined))||(((is_float($_minutes)||is_int($_minutes))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_minutes==JS::$undefined));if(JS::toBoolean($x932,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x934=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',218,28,\'<image>/09_date.js\');$_TypeError=&$x934[0];list(,$WTypeError,$STypeError,$UTypeError)=$x934;$x935=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x936=$x935($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x936->class)&&$x936->class===\'Error\'&&!isset($x936->properties[\'file\'])&&!isset($x936->properties[\'line\'])&&!isset($x936->properties[\'column\'])){$x936->properties[\'file\']=\'<image>/09_date.js\';$x936->properties[\'line\']=218;$x936->properties[\'column\']=28;$x936->attributes[\'file\']=$x936->attributes[\'line\']=$x936->attributes[\'column\']=0;}throw new JSException($x936,218,28,\'<image>/09_date.js\');}$x933=JS::toObject($leThis,$global);unset($x937,$W937,$S937,$U937);$x938=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x933,(string)\'getMinutes\',218,28,\'<image>/09_date.js\');$x937=&$x938[0];list(,$W937,$S937,$U937)=$x938;if(!(is_object($x937)&&isset($x937->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x941=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',218,28,\'<image>/09_date.js\');$_TypeError=&$x941[0];list(,$WTypeError,$STypeError,$UTypeError)=$x941;$x942=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x943=$x942($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x943->class)&&$x943->class===\'Error\'&&!isset($x943->properties[\'file\'])&&!isset($x943->properties[\'line\'])&&!isset($x943->properties[\'column\'])){$x943->properties[\'file\']=\'<image>/09_date.js\';$x943->properties[\'line\']=218;$x943->properties[\'column\']=28;$x943->attributes[\'file\']=$x943->attributes[\'line\']=$x943->attributes[\'column\']=0;}throw new JSException($x943,218,28,\'<image>/09_date.js\');}$x939=$x937->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x940=$x939($global,$x933,$x937,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x940;}$x944=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x944,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x946=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',222,28,\'<image>/09_date.js\');$_TypeError=&$x946[0];list(,$WTypeError,$STypeError,$UTypeError)=$x946;$x947=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x948=$x947($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x948->class)&&$x948->class===\'Error\'&&!isset($x948->properties[\'file\'])&&!isset($x948->properties[\'line\'])&&!isset($x948->properties[\'column\'])){$x948->properties[\'file\']=\'<image>/09_date.js\';$x948->properties[\'line\']=222;$x948->properties[\'column\']=28;$x948->attributes[\'file\']=$x948->attributes[\'line\']=$x948->attributes[\'column\']=0;}throw new JSException($x948,222,28,\'<image>/09_date.js\');}$x945=JS::toObject($leThis,$global);unset($x949,$W949,$S949,$U949);$x950=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x945,(string)\'getSeconds\',222,28,\'<image>/09_date.js\');$x949=&$x950[0];list(,$W949,$S949,$U949)=$x950;if(!(is_object($x949)&&isset($x949->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x953=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',222,28,\'<image>/09_date.js\');$_TypeError=&$x953[0];list(,$WTypeError,$STypeError,$UTypeError)=$x953;$x954=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x955=$x954($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x955->class)&&$x955->class===\'Error\'&&!isset($x955->properties[\'file\'])&&!isset($x955->properties[\'line\'])&&!isset($x955->properties[\'column\'])){$x955->properties[\'file\']=\'<image>/09_date.js\';$x955->properties[\'line\']=222;$x955->properties[\'column\']=28;$x955->attributes[\'file\']=$x955->attributes[\'line\']=$x955->attributes[\'column\']=0;}throw new JSException($x955,222,28,\'<image>/09_date.js\');}$x951=$x949->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x952=$x951($global,$x945,$x949,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x952;}$x956=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x956,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x958=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',226,28,\'<image>/09_date.js\');$_TypeError=&$x958[0];list(,$WTypeError,$STypeError,$UTypeError)=$x958;$x959=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x960=$x959($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x960->class)&&$x960->class===\'Error\'&&!isset($x960->properties[\'file\'])&&!isset($x960->properties[\'line\'])&&!isset($x960->properties[\'column\'])){$x960->properties[\'file\']=\'<image>/09_date.js\';$x960->properties[\'line\']=226;$x960->properties[\'column\']=28;$x960->attributes[\'file\']=$x960->attributes[\'line\']=$x960->attributes[\'column\']=0;}throw new JSException($x960,226,28,\'<image>/09_date.js\');}$x957=JS::toObject($leThis,$global);unset($x961,$W961,$S961,$U961);$x962=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x957,(string)\'getMilliseconds\',226,28,\'<image>/09_date.js\');$x961=&$x962[0];list(,$W961,$S961,$U961)=$x962;if(!(is_object($x961)&&isset($x961->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x965=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',226,28,\'<image>/09_date.js\');$_TypeError=&$x965[0];list(,$WTypeError,$STypeError,$UTypeError)=$x965;$x966=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x967=$x966($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x967->class)&&$x967->class===\'Error\'&&!isset($x967->properties[\'file\'])&&!isset($x967->properties[\'line\'])&&!isset($x967->properties[\'column\'])){$x967->properties[\'file\']=\'<image>/09_date.js\';$x967->properties[\'line\']=226;$x967->properties[\'column\']=28;$x967->attributes[\'file\']=$x967->attributes[\'line\']=$x967->attributes[\'column\']=0;}throw new JSException($x967,226,28,\'<image>/09_date.js\');}$x963=$x961->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x964=$x963($global,$x957,$x961,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x964;}unset($_Date,$WDate,$SDate,$UDate);$x970=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',229,20,\'<image>/09_date.js\');$_Date=&$x970[0];list(,$WDate,$SDate,$UDate)=$x970;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x971=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',229,20,\'<image>/09_date.js\');$_ReferenceError=&$x971[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x971;$x972=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,20);$x973=$x972($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x973->class)&&$x973->class===\'Error\'&&!isset($x973->properties[\'file\'])&&!isset($x973->properties[\'line\'])&&!isset($x973->properties[\'column\'])){$x973->properties[\'file\']=\'<image>/09_date.js\';$x973->properties[\'line\']=229;$x973->properties[\'column\']=20;$x973->attributes[\'file\']=$x973->attributes[\'line\']=$x973->attributes[\'column\']=0;}throw new JSException($x973,229,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x975=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,19,\'<image>/09_date.js\');$_TypeError=&$x975[0];list(,$WTypeError,$STypeError,$UTypeError)=$x975;$x976=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x977=$x976($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x977->class)&&$x977->class===\'Error\'&&!isset($x977->properties[\'file\'])&&!isset($x977->properties[\'line\'])&&!isset($x977->properties[\'column\'])){$x977->properties[\'file\']=\'<image>/09_date.js\';$x977->properties[\'line\']=230;$x977->properties[\'column\']=19;$x977->attributes[\'file\']=$x977->attributes[\'line\']=$x977->attributes[\'column\']=0;}throw new JSException($x977,230,19,\'<image>/09_date.js\');}$x974=JS::toObject($leThis,$global);unset($x978,$W978,$S978,$U978);$x979=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x974,(string)\'getFullYear\',230,19,\'<image>/09_date.js\');$x978=&$x979[0];list(,$W978,$S978,$U978)=$x979;if(!(is_object($x978)&&isset($x978->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x982=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,19,\'<image>/09_date.js\');$_TypeError=&$x982[0];list(,$WTypeError,$STypeError,$UTypeError)=$x982;$x983=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x984=$x983($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x984->class)&&$x984->class===\'Error\'&&!isset($x984->properties[\'file\'])&&!isset($x984->properties[\'line\'])&&!isset($x984->properties[\'column\'])){$x984->properties[\'file\']=\'<image>/09_date.js\';$x984->properties[\'line\']=230;$x984->properties[\'column\']=19;$x984->attributes[\'file\']=$x984->attributes[\'line\']=$x984->attributes[\'column\']=0;}throw new JSException($x984,230,19,\'<image>/09_date.js\');}$x980=$x978->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x981=$x980($global,$x974,$x978,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x986=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,36,\'<image>/09_date.js\');$_TypeError=&$x986[0];list(,$WTypeError,$STypeError,$UTypeError)=$x986;$x987=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x988=$x987($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x988->class)&&$x988->class===\'Error\'&&!isset($x988->properties[\'file\'])&&!isset($x988->properties[\'line\'])&&!isset($x988->properties[\'column\'])){$x988->properties[\'file\']=\'<image>/09_date.js\';$x988->properties[\'line\']=230;$x988->properties[\'column\']=36;$x988->attributes[\'file\']=$x988->attributes[\'line\']=$x988->attributes[\'column\']=0;}throw new JSException($x988,230,36,\'<image>/09_date.js\');}$x985=JS::toObject($leThis,$global);unset($x989,$W989,$S989,$U989);$x990=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x985,(string)\'getMonth\',230,36,\'<image>/09_date.js\');$x989=&$x990[0];list(,$W989,$S989,$U989)=$x990;if(!(is_object($x989)&&isset($x989->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x993=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,36,\'<image>/09_date.js\');$_TypeError=&$x993[0];list(,$WTypeError,$STypeError,$UTypeError)=$x993;$x994=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x995=$x994($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x995->class)&&$x995->class===\'Error\'&&!isset($x995->properties[\'file\'])&&!isset($x995->properties[\'line\'])&&!isset($x995->properties[\'column\'])){$x995->properties[\'file\']=\'<image>/09_date.js\';$x995->properties[\'line\']=230;$x995->properties[\'column\']=36;$x995->attributes[\'file\']=$x995->attributes[\'line\']=$x995->attributes[\'column\']=0;}throw new JSException($x995,230,36,\'<image>/09_date.js\');}$x991=$x989->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x992=$x991($global,$x985,$x989,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x997=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,52,\'<image>/09_date.js\');$_TypeError=&$x997[0];list(,$WTypeError,$STypeError,$UTypeError)=$x997;$x998=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x999=$x998($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x999->class)&&$x999->class===\'Error\'&&!isset($x999->properties[\'file\'])&&!isset($x999->properties[\'line\'])&&!isset($x999->properties[\'column\'])){$x999->properties[\'file\']=\'<image>/09_date.js\';$x999->properties[\'line\']=230;$x999->properties[\'column\']=52;$x999->attributes[\'file\']=$x999->attributes[\'line\']=$x999->attributes[\'column\']=0;}throw new JSException($x999,230,52,\'<image>/09_date.js\');}$x996=JS::toObject($leThis,$global);unset($x1000,$W1000,$S1000,$U1000);$x1001=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x996,(string)\'getDate\',230,52,\'<image>/09_date.js\');$x1000=&$x1001[0];list(,$W1000,$S1000,$U1000)=$x1001;if(!(is_object($x1000)&&isset($x1000->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1004=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',230,52,\'<image>/09_date.js\');$_TypeError=&$x1004[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1004;$x1005=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1006=$x1005($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1006->class)&&$x1006->class===\'Error\'&&!isset($x1006->properties[\'file\'])&&!isset($x1006->properties[\'line\'])&&!isset($x1006->properties[\'column\'])){$x1006->properties[\'file\']=\'<image>/09_date.js\';$x1006->properties[\'line\']=230;$x1006->properties[\'column\']=52;$x1006->attributes[\'file\']=$x1006->attributes[\'line\']=$x1006->attributes[\'column\']=0;}throw new JSException($x1006,230,52,\'<image>/09_date.js\');}$x1002=$x1000->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1003=$x1002($global,$x996,$x1000,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x968=clone JS::$objectTemplate;unset($x1007,$W1007,$S1007,$U1007);$x1008=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',229,16,\'<image>/09_date.js\');$x1007=&$x1008[0];list(,$W1007,$S1007,$U1007)=$x1008;$x969=$x1007;$x968->prototype=$x969;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1011=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',229,16,\'<image>/09_date.js\');$_TypeError=&$x1011[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1011;$x1012=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1013=$x1012($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1013->class)&&$x1013->class===\'Error\'&&!isset($x1013->properties[\'file\'])&&!isset($x1013->properties[\'line\'])&&!isset($x1013->properties[\'column\'])){$x1013->properties[\'file\']=\'<image>/09_date.js\';$x1013->properties[\'line\']=229;$x1013->properties[\'column\']=16;$x1013->attributes[\'file\']=$x1013->attributes[\'line\']=$x1013->attributes[\'column\']=0;}throw new JSException($x1013,229,16,\'<image>/09_date.js\');}$x1009=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1010=$x1009($global,$x968,$_Date,array($x981,$x992,$x1003,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x969=$x1010;if(is_object($x969)&&$x969!==JS::$undefined){$x968=$x969;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x968;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_28($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1040 =& $scope->properties['arguments'];
$x1040->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1040->properties[$i] = $args[$i];
$x1040->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['date'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x1043 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 242, 20, '<image>/09_date.js');
$_Date =& $x1043[0]; list(,$WDate,$SDate,$UDate) = $x1043;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1044 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 242, 20, '<image>/09_date.js');
$_ReferenceError =& $x1044[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1044;
$x1045 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 20);
$x1046 = $x1045($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1046->class) && $x1046->class === 'Error' && !isset($x1046->properties['file']) && !isset($x1046->properties['line']) && !isset($x1046->properties['column'])) {$x1046->properties['file'] = '<image>/09_date.js';$x1046->properties['line'] = 242;$x1046->properties['column'] = 20;$x1046->attributes['file'] = $x1046->attributes['line'] = $x1046->attributes['column'] = 0; }
throw new JSException($x1046, 242, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1048 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 19, '<image>/09_date.js');
$_TypeError =& $x1048[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1048;
$x1049 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1050 = $x1049($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1050->class) && $x1050->class === 'Error' && !isset($x1050->properties['file']) && !isset($x1050->properties['line']) && !isset($x1050->properties['column'])) {$x1050->properties['file'] = '<image>/09_date.js';$x1050->properties['line'] = 243;$x1050->properties['column'] = 19;$x1050->attributes['file'] = $x1050->attributes['line'] = $x1050->attributes['column'] = 0; }
throw new JSException($x1050, 243, 19, '<image>/09_date.js');
}
$x1047 = JS::toObject($leThis, $global);
unset($x1051, $W1051, $S1051, $U1051);
$x1052 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1047, (string) 'getFullYear', 243, 19, '<image>/09_date.js');
$x1051 =& $x1052[0]; list(,$W1051,$S1051,$U1051) = $x1052;
if (!(is_object($x1051) && isset($x1051->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1055 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 19, '<image>/09_date.js');
$_TypeError =& $x1055[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1055;
$x1056 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1057 = $x1056($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1057->class) && $x1057->class === 'Error' && !isset($x1057->properties['file']) && !isset($x1057->properties['line']) && !isset($x1057->properties['column'])) {$x1057->properties['file'] = '<image>/09_date.js';$x1057->properties['line'] = 243;$x1057->properties['column'] = 19;$x1057->attributes['file'] = $x1057->attributes['line'] = $x1057->attributes['column'] = 0; }
throw new JSException($x1057, 243, 19, '<image>/09_date.js');
}
$x1053 = $x1051->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1054 = $x1053($global, $x1047, $x1051, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1059 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 36, '<image>/09_date.js');
$_TypeError =& $x1059[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1059;
$x1060 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1061 = $x1060($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1061->class) && $x1061->class === 'Error' && !isset($x1061->properties['file']) && !isset($x1061->properties['line']) && !isset($x1061->properties['column'])) {$x1061->properties['file'] = '<image>/09_date.js';$x1061->properties['line'] = 243;$x1061->properties['column'] = 36;$x1061->attributes['file'] = $x1061->attributes['line'] = $x1061->attributes['column'] = 0; }
throw new JSException($x1061, 243, 36, '<image>/09_date.js');
}
$x1058 = JS::toObject($leThis, $global);
unset($x1062, $W1062, $S1062, $U1062);
$x1063 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1058, (string) 'getMonth', 243, 36, '<image>/09_date.js');
$x1062 =& $x1063[0]; list(,$W1062,$S1062,$U1062) = $x1063;
if (!(is_object($x1062) && isset($x1062->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1066 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 243, 36, '<image>/09_date.js');
$_TypeError =& $x1066[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1066;
$x1067 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1068 = $x1067($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1068->class) && $x1068->class === 'Error' && !isset($x1068->properties['file']) && !isset($x1068->properties['line']) && !isset($x1068->properties['column'])) {$x1068->properties['file'] = '<image>/09_date.js';$x1068->properties['line'] = 243;$x1068->properties['column'] = 36;$x1068->attributes['file'] = $x1068->attributes['line'] = $x1068->attributes['column'] = 0; }
throw new JSException($x1068, 243, 36, '<image>/09_date.js');
}
$x1064 = $x1062->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1065 = $x1064($global, $x1058, $x1062, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1070 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 16, '<image>/09_date.js');
$_TypeError =& $x1070[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1070;
$x1071 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1072 = $x1071($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1072->class) && $x1072->class === 'Error' && !isset($x1072->properties['file']) && !isset($x1072->properties['line']) && !isset($x1072->properties['column'])) {$x1072->properties['file'] = '<image>/09_date.js';$x1072->properties['line'] = 244;$x1072->properties['column'] = 16;$x1072->attributes['file'] = $x1072->attributes['line'] = $x1072->attributes['column'] = 0; }
throw new JSException($x1072, 244, 16, '<image>/09_date.js');
}
$x1069 = JS::toObject($leThis, $global);
unset($x1073, $W1073, $S1073, $U1073);
$x1074 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1069, (string) 'getHours', 244, 16, '<image>/09_date.js');
$x1073 =& $x1074[0]; list(,$W1073,$S1073,$U1073) = $x1074;
if (!(is_object($x1073) && isset($x1073->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1077 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 16, '<image>/09_date.js');
$_TypeError =& $x1077[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1077;
$x1078 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1079 = $x1078($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1079->class) && $x1079->class === 'Error' && !isset($x1079->properties['file']) && !isset($x1079->properties['line']) && !isset($x1079->properties['column'])) {$x1079->properties['file'] = '<image>/09_date.js';$x1079->properties['line'] = 244;$x1079->properties['column'] = 16;$x1079->attributes['file'] = $x1079->attributes['line'] = $x1079->attributes['column'] = 0; }
throw new JSException($x1079, 244, 16, '<image>/09_date.js');
}
$x1075 = $x1073->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1076 = $x1075($global, $x1069, $x1073, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1081 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 35, '<image>/09_date.js');
$_TypeError =& $x1081[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1081;
$x1082 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1083 = $x1082($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1083->class) && $x1083->class === 'Error' && !isset($x1083->properties['file']) && !isset($x1083->properties['line']) && !isset($x1083->properties['column'])) {$x1083->properties['file'] = '<image>/09_date.js';$x1083->properties['line'] = 244;$x1083->properties['column'] = 35;$x1083->attributes['file'] = $x1083->attributes['line'] = $x1083->attributes['column'] = 0; }
throw new JSException($x1083, 244, 35, '<image>/09_date.js');
}
$x1080 = JS::toObject($leThis, $global);
unset($x1084, $W1084, $S1084, $U1084);
$x1085 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1080, (string) 'getMinutes', 244, 35, '<image>/09_date.js');
$x1084 =& $x1085[0]; list(,$W1084,$S1084,$U1084) = $x1085;
if (!(is_object($x1084) && isset($x1084->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1088 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 35, '<image>/09_date.js');
$_TypeError =& $x1088[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1088;
$x1089 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1090 = $x1089($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1090->class) && $x1090->class === 'Error' && !isset($x1090->properties['file']) && !isset($x1090->properties['line']) && !isset($x1090->properties['column'])) {$x1090->properties['file'] = '<image>/09_date.js';$x1090->properties['line'] = 244;$x1090->properties['column'] = 35;$x1090->attributes['file'] = $x1090->attributes['line'] = $x1090->attributes['column'] = 0; }
throw new JSException($x1090, 244, 35, '<image>/09_date.js');
}
$x1086 = $x1084->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1087 = $x1086($global, $x1080, $x1084, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1092 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 54, '<image>/09_date.js');
$_TypeError =& $x1092[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1092;
$x1093 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1094 = $x1093($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1094->class) && $x1094->class === 'Error' && !isset($x1094->properties['file']) && !isset($x1094->properties['line']) && !isset($x1094->properties['column'])) {$x1094->properties['file'] = '<image>/09_date.js';$x1094->properties['line'] = 244;$x1094->properties['column'] = 54;$x1094->attributes['file'] = $x1094->attributes['line'] = $x1094->attributes['column'] = 0; }
throw new JSException($x1094, 244, 54, '<image>/09_date.js');
}
$x1091 = JS::toObject($leThis, $global);
unset($x1095, $W1095, $S1095, $U1095);
$x1096 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1091, (string) 'getSeconds', 244, 54, '<image>/09_date.js');
$x1095 =& $x1096[0]; list(,$W1095,$S1095,$U1095) = $x1096;
if (!(is_object($x1095) && isset($x1095->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1099 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 54, '<image>/09_date.js');
$_TypeError =& $x1099[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1099;
$x1100 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1101 = $x1100($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1101->class) && $x1101->class === 'Error' && !isset($x1101->properties['file']) && !isset($x1101->properties['line']) && !isset($x1101->properties['column'])) {$x1101->properties['file'] = '<image>/09_date.js';$x1101->properties['line'] = 244;$x1101->properties['column'] = 54;$x1101->attributes['file'] = $x1101->attributes['line'] = $x1101->attributes['column'] = 0; }
throw new JSException($x1101, 244, 54, '<image>/09_date.js');
}
$x1097 = $x1095->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1098 = $x1097($global, $x1091, $x1095, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1103 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 78, '<image>/09_date.js');
$_TypeError =& $x1103[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1103;
$x1104 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1105 = $x1104($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1105->class) && $x1105->class === 'Error' && !isset($x1105->properties['file']) && !isset($x1105->properties['line']) && !isset($x1105->properties['column'])) {$x1105->properties['file'] = '<image>/09_date.js';$x1105->properties['line'] = 244;$x1105->properties['column'] = 78;$x1105->attributes['file'] = $x1105->attributes['line'] = $x1105->attributes['column'] = 0; }
throw new JSException($x1105, 244, 78, '<image>/09_date.js');
}
$x1102 = JS::toObject($leThis, $global);
unset($x1106, $W1106, $S1106, $U1106);
$x1107 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1102, (string) 'getMilliseconds', 244, 78, '<image>/09_date.js');
$x1106 =& $x1107[0]; list(,$W1106,$S1106,$U1106) = $x1107;
if (!(is_object($x1106) && isset($x1106->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1110 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 244, 78, '<image>/09_date.js');
$_TypeError =& $x1110[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1110;
$x1111 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1112 = $x1111($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1112->class) && $x1112->class === 'Error' && !isset($x1112->properties['file']) && !isset($x1112->properties['line']) && !isset($x1112->properties['column'])) {$x1112->properties['file'] = '<image>/09_date.js';$x1112->properties['line'] = 244;$x1112->properties['column'] = 78;$x1112->attributes['file'] = $x1112->attributes['line'] = $x1112->attributes['column'] = 0; }
throw new JSException($x1112, 244, 78, '<image>/09_date.js');
}
$x1108 = $x1106->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1109 = $x1108($global, $x1102, $x1106, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1041 = clone JS::$objectTemplate;
unset($x1113, $W1113, $S1113, $U1113);
$x1114 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 242, 16, '<image>/09_date.js');
$x1113 =& $x1114[0]; list(,$W1113,$S1113,$U1113) = $x1114;
$x1042 = $x1113;
$x1041->prototype = $x1042;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1117 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 242, 16, '<image>/09_date.js');
$_TypeError =& $x1117[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1117;
$x1118 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1119 = $x1118($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1119->class) && $x1119->class === 'Error' && !isset($x1119->properties['file']) && !isset($x1119->properties['line']) && !isset($x1119->properties['column'])) {$x1119->properties['file'] = '<image>/09_date.js';$x1119->properties['line'] = 242;$x1119->properties['column'] = 16;$x1119->attributes['file'] = $x1119->attributes['line'] = $x1119->attributes['column'] = 0; }
throw new JSException($x1119, 242, 16, '<image>/09_date.js');
}
$x1115 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1116 = $x1115($global, $x1041, $_Date, array($x1054, $x1065, $_date, $x1076, $x1087, $x1098, $x1109), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1042 = $x1116;
if (is_object($x1042) && $x1042 !== JS::$undefined) { $x1041 = $x1042; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1041;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_28($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1040=&$scope->properties[\'arguments\'];$x1040->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1040->properties[$i]=$args[$i];$x1040->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'date\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x1043=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',242,20,\'<image>/09_date.js\');$_Date=&$x1043[0];list(,$WDate,$SDate,$UDate)=$x1043;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1044=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',242,20,\'<image>/09_date.js\');$_ReferenceError=&$x1044[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1044;$x1045=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,20);$x1046=$x1045($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1046->class)&&$x1046->class===\'Error\'&&!isset($x1046->properties[\'file\'])&&!isset($x1046->properties[\'line\'])&&!isset($x1046->properties[\'column\'])){$x1046->properties[\'file\']=\'<image>/09_date.js\';$x1046->properties[\'line\']=242;$x1046->properties[\'column\']=20;$x1046->attributes[\'file\']=$x1046->attributes[\'line\']=$x1046->attributes[\'column\']=0;}throw new JSException($x1046,242,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1048=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,19,\'<image>/09_date.js\');$_TypeError=&$x1048[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1048;$x1049=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1050=$x1049($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1050->class)&&$x1050->class===\'Error\'&&!isset($x1050->properties[\'file\'])&&!isset($x1050->properties[\'line\'])&&!isset($x1050->properties[\'column\'])){$x1050->properties[\'file\']=\'<image>/09_date.js\';$x1050->properties[\'line\']=243;$x1050->properties[\'column\']=19;$x1050->attributes[\'file\']=$x1050->attributes[\'line\']=$x1050->attributes[\'column\']=0;}throw new JSException($x1050,243,19,\'<image>/09_date.js\');}$x1047=JS::toObject($leThis,$global);unset($x1051,$W1051,$S1051,$U1051);$x1052=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1047,(string)\'getFullYear\',243,19,\'<image>/09_date.js\');$x1051=&$x1052[0];list(,$W1051,$S1051,$U1051)=$x1052;if(!(is_object($x1051)&&isset($x1051->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1055=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,19,\'<image>/09_date.js\');$_TypeError=&$x1055[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1055;$x1056=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1057=$x1056($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1057->class)&&$x1057->class===\'Error\'&&!isset($x1057->properties[\'file\'])&&!isset($x1057->properties[\'line\'])&&!isset($x1057->properties[\'column\'])){$x1057->properties[\'file\']=\'<image>/09_date.js\';$x1057->properties[\'line\']=243;$x1057->properties[\'column\']=19;$x1057->attributes[\'file\']=$x1057->attributes[\'line\']=$x1057->attributes[\'column\']=0;}throw new JSException($x1057,243,19,\'<image>/09_date.js\');}$x1053=$x1051->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1054=$x1053($global,$x1047,$x1051,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1059=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,36,\'<image>/09_date.js\');$_TypeError=&$x1059[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1059;$x1060=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1061=$x1060($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1061->class)&&$x1061->class===\'Error\'&&!isset($x1061->properties[\'file\'])&&!isset($x1061->properties[\'line\'])&&!isset($x1061->properties[\'column\'])){$x1061->properties[\'file\']=\'<image>/09_date.js\';$x1061->properties[\'line\']=243;$x1061->properties[\'column\']=36;$x1061->attributes[\'file\']=$x1061->attributes[\'line\']=$x1061->attributes[\'column\']=0;}throw new JSException($x1061,243,36,\'<image>/09_date.js\');}$x1058=JS::toObject($leThis,$global);unset($x1062,$W1062,$S1062,$U1062);$x1063=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1058,(string)\'getMonth\',243,36,\'<image>/09_date.js\');$x1062=&$x1063[0];list(,$W1062,$S1062,$U1062)=$x1063;if(!(is_object($x1062)&&isset($x1062->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1066=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',243,36,\'<image>/09_date.js\');$_TypeError=&$x1066[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1066;$x1067=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1068=$x1067($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1068->class)&&$x1068->class===\'Error\'&&!isset($x1068->properties[\'file\'])&&!isset($x1068->properties[\'line\'])&&!isset($x1068->properties[\'column\'])){$x1068->properties[\'file\']=\'<image>/09_date.js\';$x1068->properties[\'line\']=243;$x1068->properties[\'column\']=36;$x1068->attributes[\'file\']=$x1068->attributes[\'line\']=$x1068->attributes[\'column\']=0;}throw new JSException($x1068,243,36,\'<image>/09_date.js\');}$x1064=$x1062->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1065=$x1064($global,$x1058,$x1062,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1070=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,16,\'<image>/09_date.js\');$_TypeError=&$x1070[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1070;$x1071=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1072=$x1071($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1072->class)&&$x1072->class===\'Error\'&&!isset($x1072->properties[\'file\'])&&!isset($x1072->properties[\'line\'])&&!isset($x1072->properties[\'column\'])){$x1072->properties[\'file\']=\'<image>/09_date.js\';$x1072->properties[\'line\']=244;$x1072->properties[\'column\']=16;$x1072->attributes[\'file\']=$x1072->attributes[\'line\']=$x1072->attributes[\'column\']=0;}throw new JSException($x1072,244,16,\'<image>/09_date.js\');}$x1069=JS::toObject($leThis,$global);unset($x1073,$W1073,$S1073,$U1073);$x1074=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1069,(string)\'getHours\',244,16,\'<image>/09_date.js\');$x1073=&$x1074[0];list(,$W1073,$S1073,$U1073)=$x1074;if(!(is_object($x1073)&&isset($x1073->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1077=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,16,\'<image>/09_date.js\');$_TypeError=&$x1077[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1077;$x1078=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1079=$x1078($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1079->class)&&$x1079->class===\'Error\'&&!isset($x1079->properties[\'file\'])&&!isset($x1079->properties[\'line\'])&&!isset($x1079->properties[\'column\'])){$x1079->properties[\'file\']=\'<image>/09_date.js\';$x1079->properties[\'line\']=244;$x1079->properties[\'column\']=16;$x1079->attributes[\'file\']=$x1079->attributes[\'line\']=$x1079->attributes[\'column\']=0;}throw new JSException($x1079,244,16,\'<image>/09_date.js\');}$x1075=$x1073->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1076=$x1075($global,$x1069,$x1073,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1081=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,35,\'<image>/09_date.js\');$_TypeError=&$x1081[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1081;$x1082=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1083=$x1082($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1083->class)&&$x1083->class===\'Error\'&&!isset($x1083->properties[\'file\'])&&!isset($x1083->properties[\'line\'])&&!isset($x1083->properties[\'column\'])){$x1083->properties[\'file\']=\'<image>/09_date.js\';$x1083->properties[\'line\']=244;$x1083->properties[\'column\']=35;$x1083->attributes[\'file\']=$x1083->attributes[\'line\']=$x1083->attributes[\'column\']=0;}throw new JSException($x1083,244,35,\'<image>/09_date.js\');}$x1080=JS::toObject($leThis,$global);unset($x1084,$W1084,$S1084,$U1084);$x1085=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1080,(string)\'getMinutes\',244,35,\'<image>/09_date.js\');$x1084=&$x1085[0];list(,$W1084,$S1084,$U1084)=$x1085;if(!(is_object($x1084)&&isset($x1084->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1088=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,35,\'<image>/09_date.js\');$_TypeError=&$x1088[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1088;$x1089=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1090=$x1089($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1090->class)&&$x1090->class===\'Error\'&&!isset($x1090->properties[\'file\'])&&!isset($x1090->properties[\'line\'])&&!isset($x1090->properties[\'column\'])){$x1090->properties[\'file\']=\'<image>/09_date.js\';$x1090->properties[\'line\']=244;$x1090->properties[\'column\']=35;$x1090->attributes[\'file\']=$x1090->attributes[\'line\']=$x1090->attributes[\'column\']=0;}throw new JSException($x1090,244,35,\'<image>/09_date.js\');}$x1086=$x1084->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1087=$x1086($global,$x1080,$x1084,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1092=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,54,\'<image>/09_date.js\');$_TypeError=&$x1092[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1092;$x1093=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1094=$x1093($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1094->class)&&$x1094->class===\'Error\'&&!isset($x1094->properties[\'file\'])&&!isset($x1094->properties[\'line\'])&&!isset($x1094->properties[\'column\'])){$x1094->properties[\'file\']=\'<image>/09_date.js\';$x1094->properties[\'line\']=244;$x1094->properties[\'column\']=54;$x1094->attributes[\'file\']=$x1094->attributes[\'line\']=$x1094->attributes[\'column\']=0;}throw new JSException($x1094,244,54,\'<image>/09_date.js\');}$x1091=JS::toObject($leThis,$global);unset($x1095,$W1095,$S1095,$U1095);$x1096=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1091,(string)\'getSeconds\',244,54,\'<image>/09_date.js\');$x1095=&$x1096[0];list(,$W1095,$S1095,$U1095)=$x1096;if(!(is_object($x1095)&&isset($x1095->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1099=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,54,\'<image>/09_date.js\');$_TypeError=&$x1099[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1099;$x1100=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1101=$x1100($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1101->class)&&$x1101->class===\'Error\'&&!isset($x1101->properties[\'file\'])&&!isset($x1101->properties[\'line\'])&&!isset($x1101->properties[\'column\'])){$x1101->properties[\'file\']=\'<image>/09_date.js\';$x1101->properties[\'line\']=244;$x1101->properties[\'column\']=54;$x1101->attributes[\'file\']=$x1101->attributes[\'line\']=$x1101->attributes[\'column\']=0;}throw new JSException($x1101,244,54,\'<image>/09_date.js\');}$x1097=$x1095->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1098=$x1097($global,$x1091,$x1095,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1103=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,78,\'<image>/09_date.js\');$_TypeError=&$x1103[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1103;$x1104=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1105=$x1104($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1105->class)&&$x1105->class===\'Error\'&&!isset($x1105->properties[\'file\'])&&!isset($x1105->properties[\'line\'])&&!isset($x1105->properties[\'column\'])){$x1105->properties[\'file\']=\'<image>/09_date.js\';$x1105->properties[\'line\']=244;$x1105->properties[\'column\']=78;$x1105->attributes[\'file\']=$x1105->attributes[\'line\']=$x1105->attributes[\'column\']=0;}throw new JSException($x1105,244,78,\'<image>/09_date.js\');}$x1102=JS::toObject($leThis,$global);unset($x1106,$W1106,$S1106,$U1106);$x1107=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1102,(string)\'getMilliseconds\',244,78,\'<image>/09_date.js\');$x1106=&$x1107[0];list(,$W1106,$S1106,$U1106)=$x1107;if(!(is_object($x1106)&&isset($x1106->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1110=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',244,78,\'<image>/09_date.js\');$_TypeError=&$x1110[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1110;$x1111=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1112=$x1111($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1112->class)&&$x1112->class===\'Error\'&&!isset($x1112->properties[\'file\'])&&!isset($x1112->properties[\'line\'])&&!isset($x1112->properties[\'column\'])){$x1112->properties[\'file\']=\'<image>/09_date.js\';$x1112->properties[\'line\']=244;$x1112->properties[\'column\']=78;$x1112->attributes[\'file\']=$x1112->attributes[\'line\']=$x1112->attributes[\'column\']=0;}throw new JSException($x1112,244,78,\'<image>/09_date.js\');}$x1108=$x1106->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1109=$x1108($global,$x1102,$x1106,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1041=clone JS::$objectTemplate;unset($x1113,$W1113,$S1113,$U1113);$x1114=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',242,16,\'<image>/09_date.js\');$x1113=&$x1114[0];list(,$W1113,$S1113,$U1113)=$x1114;$x1042=$x1113;$x1041->prototype=$x1042;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1117=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',242,16,\'<image>/09_date.js\');$_TypeError=&$x1117[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1117;$x1118=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1119=$x1118($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1119->class)&&$x1119->class===\'Error\'&&!isset($x1119->properties[\'file\'])&&!isset($x1119->properties[\'line\'])&&!isset($x1119->properties[\'column\'])){$x1119->properties[\'file\']=\'<image>/09_date.js\';$x1119->properties[\'line\']=242;$x1119->properties[\'column\']=16;$x1119->attributes[\'file\']=$x1119->attributes[\'line\']=$x1119->attributes[\'column\']=0;}throw new JSException($x1119,242,16,\'<image>/09_date.js\');}$x1115=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1116=$x1115($global,$x1041,$_Date,array($x1054,$x1065,$_date,$x1076,$x1087,$x1098,$x1109),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1042=$x1116;if(is_object($x1042)&&$x1042!==JS::$undefined){$x1041=$x1042;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1041;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_29($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1146 =& $scope->properties['arguments'];
$x1146->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1146->properties[$i] = $args[$i];
$x1146->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['month'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1147 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1147, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1149 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 256, 22, '<image>/09_date.js');
$_TypeError =& $x1149[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1149;
$x1150 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1151 = $x1150($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1151->class) && $x1151->class === 'Error' && !isset($x1151->properties['file']) && !isset($x1151->properties['line']) && !isset($x1151->properties['column'])) {$x1151->properties['file'] = '<image>/09_date.js';$x1151->properties['line'] = 256;$x1151->properties['column'] = 22;$x1151->attributes['file'] = $x1151->attributes['line'] = $x1151->attributes['column'] = 0; }
throw new JSException($x1151, 256, 22, '<image>/09_date.js');
}
$x1148 = JS::toObject($leThis, $global);
unset($x1152, $W1152, $S1152, $U1152);
$x1153 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1148, (string) 'getDate', 256, 22, '<image>/09_date.js');
$x1152 =& $x1153[0]; list(,$W1152,$S1152,$U1152) = $x1153;
if (!(is_object($x1152) && isset($x1152->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1156 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 256, 22, '<image>/09_date.js');
$_TypeError =& $x1156[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1156;
$x1157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1158 = $x1157($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1158->class) && $x1158->class === 'Error' && !isset($x1158->properties['file']) && !isset($x1158->properties['line']) && !isset($x1158->properties['column'])) {$x1158->properties['file'] = '<image>/09_date.js';$x1158->properties['line'] = 256;$x1158->properties['column'] = 22;$x1158->attributes['file'] = $x1158->attributes['line'] = $x1158->attributes['column'] = 0; }
throw new JSException($x1158, 256, 22, '<image>/09_date.js');
}
$x1154 = $x1152->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1155 = $x1154($global, $x1148, $x1152, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1155;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1161 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 259, 20, '<image>/09_date.js');
$_Date =& $x1161[0]; list(,$WDate,$SDate,$UDate) = $x1161;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1162 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 259, 20, '<image>/09_date.js');
$_ReferenceError =& $x1162[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1162;
$x1163 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 20);
$x1164 = $x1163($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1164->class) && $x1164->class === 'Error' && !isset($x1164->properties['file']) && !isset($x1164->properties['line']) && !isset($x1164->properties['column'])) {$x1164->properties['file'] = '<image>/09_date.js';$x1164->properties['line'] = 259;$x1164->properties['column'] = 20;$x1164->attributes['file'] = $x1164->attributes['line'] = $x1164->attributes['column'] = 0; }
throw new JSException($x1164, 259, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1166 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 260, 19, '<image>/09_date.js');
$_TypeError =& $x1166[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1166;
$x1167 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1168 = $x1167($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1168->class) && $x1168->class === 'Error' && !isset($x1168->properties['file']) && !isset($x1168->properties['line']) && !isset($x1168->properties['column'])) {$x1168->properties['file'] = '<image>/09_date.js';$x1168->properties['line'] = 260;$x1168->properties['column'] = 19;$x1168->attributes['file'] = $x1168->attributes['line'] = $x1168->attributes['column'] = 0; }
throw new JSException($x1168, 260, 19, '<image>/09_date.js');
}
$x1165 = JS::toObject($leThis, $global);
unset($x1169, $W1169, $S1169, $U1169);
$x1170 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1165, (string) 'getFullYear', 260, 19, '<image>/09_date.js');
$x1169 =& $x1170[0]; list(,$W1169,$S1169,$U1169) = $x1170;
if (!(is_object($x1169) && isset($x1169->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1173 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 260, 19, '<image>/09_date.js');
$_TypeError =& $x1173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1173;
$x1174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1175 = $x1174($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1175->class) && $x1175->class === 'Error' && !isset($x1175->properties['file']) && !isset($x1175->properties['line']) && !isset($x1175->properties['column'])) {$x1175->properties['file'] = '<image>/09_date.js';$x1175->properties['line'] = 260;$x1175->properties['column'] = 19;$x1175->attributes['file'] = $x1175->attributes['line'] = $x1175->attributes['column'] = 0; }
throw new JSException($x1175, 260, 19, '<image>/09_date.js');
}
$x1171 = $x1169->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1172 = $x1171($global, $x1165, $x1169, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1177 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 16, '<image>/09_date.js');
$_TypeError =& $x1177[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1177;
$x1178 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1179 = $x1178($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1179->class) && $x1179->class === 'Error' && !isset($x1179->properties['file']) && !isset($x1179->properties['line']) && !isset($x1179->properties['column'])) {$x1179->properties['file'] = '<image>/09_date.js';$x1179->properties['line'] = 261;$x1179->properties['column'] = 16;$x1179->attributes['file'] = $x1179->attributes['line'] = $x1179->attributes['column'] = 0; }
throw new JSException($x1179, 261, 16, '<image>/09_date.js');
}
$x1176 = JS::toObject($leThis, $global);
unset($x1180, $W1180, $S1180, $U1180);
$x1181 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1176, (string) 'getHours', 261, 16, '<image>/09_date.js');
$x1180 =& $x1181[0]; list(,$W1180,$S1180,$U1180) = $x1181;
if (!(is_object($x1180) && isset($x1180->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1184 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 16, '<image>/09_date.js');
$_TypeError =& $x1184[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1184;
$x1185 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1186 = $x1185($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1186->class) && $x1186->class === 'Error' && !isset($x1186->properties['file']) && !isset($x1186->properties['line']) && !isset($x1186->properties['column'])) {$x1186->properties['file'] = '<image>/09_date.js';$x1186->properties['line'] = 261;$x1186->properties['column'] = 16;$x1186->attributes['file'] = $x1186->attributes['line'] = $x1186->attributes['column'] = 0; }
throw new JSException($x1186, 261, 16, '<image>/09_date.js');
}
$x1182 = $x1180->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1183 = $x1182($global, $x1176, $x1180, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1188 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 35, '<image>/09_date.js');
$_TypeError =& $x1188[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1188;
$x1189 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1190 = $x1189($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1190->class) && $x1190->class === 'Error' && !isset($x1190->properties['file']) && !isset($x1190->properties['line']) && !isset($x1190->properties['column'])) {$x1190->properties['file'] = '<image>/09_date.js';$x1190->properties['line'] = 261;$x1190->properties['column'] = 35;$x1190->attributes['file'] = $x1190->attributes['line'] = $x1190->attributes['column'] = 0; }
throw new JSException($x1190, 261, 35, '<image>/09_date.js');
}
$x1187 = JS::toObject($leThis, $global);
unset($x1191, $W1191, $S1191, $U1191);
$x1192 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1187, (string) 'getMinutes', 261, 35, '<image>/09_date.js');
$x1191 =& $x1192[0]; list(,$W1191,$S1191,$U1191) = $x1192;
if (!(is_object($x1191) && isset($x1191->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1195 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 35, '<image>/09_date.js');
$_TypeError =& $x1195[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1195;
$x1196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1197 = $x1196($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1197->class) && $x1197->class === 'Error' && !isset($x1197->properties['file']) && !isset($x1197->properties['line']) && !isset($x1197->properties['column'])) {$x1197->properties['file'] = '<image>/09_date.js';$x1197->properties['line'] = 261;$x1197->properties['column'] = 35;$x1197->attributes['file'] = $x1197->attributes['line'] = $x1197->attributes['column'] = 0; }
throw new JSException($x1197, 261, 35, '<image>/09_date.js');
}
$x1193 = $x1191->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1194 = $x1193($global, $x1187, $x1191, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1199 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 54, '<image>/09_date.js');
$_TypeError =& $x1199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1199;
$x1200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1201 = $x1200($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1201->class) && $x1201->class === 'Error' && !isset($x1201->properties['file']) && !isset($x1201->properties['line']) && !isset($x1201->properties['column'])) {$x1201->properties['file'] = '<image>/09_date.js';$x1201->properties['line'] = 261;$x1201->properties['column'] = 54;$x1201->attributes['file'] = $x1201->attributes['line'] = $x1201->attributes['column'] = 0; }
throw new JSException($x1201, 261, 54, '<image>/09_date.js');
}
$x1198 = JS::toObject($leThis, $global);
unset($x1202, $W1202, $S1202, $U1202);
$x1203 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1198, (string) 'getSeconds', 261, 54, '<image>/09_date.js');
$x1202 =& $x1203[0]; list(,$W1202,$S1202,$U1202) = $x1203;
if (!(is_object($x1202) && isset($x1202->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1206 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 54, '<image>/09_date.js');
$_TypeError =& $x1206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1206;
$x1207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1208 = $x1207($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1208->class) && $x1208->class === 'Error' && !isset($x1208->properties['file']) && !isset($x1208->properties['line']) && !isset($x1208->properties['column'])) {$x1208->properties['file'] = '<image>/09_date.js';$x1208->properties['line'] = 261;$x1208->properties['column'] = 54;$x1208->attributes['file'] = $x1208->attributes['line'] = $x1208->attributes['column'] = 0; }
throw new JSException($x1208, 261, 54, '<image>/09_date.js');
}
$x1204 = $x1202->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1205 = $x1204($global, $x1198, $x1202, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1210 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 78, '<image>/09_date.js');
$_TypeError =& $x1210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1210;
$x1211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1212 = $x1211($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1212->class) && $x1212->class === 'Error' && !isset($x1212->properties['file']) && !isset($x1212->properties['line']) && !isset($x1212->properties['column'])) {$x1212->properties['file'] = '<image>/09_date.js';$x1212->properties['line'] = 261;$x1212->properties['column'] = 78;$x1212->attributes['file'] = $x1212->attributes['line'] = $x1212->attributes['column'] = 0; }
throw new JSException($x1212, 261, 78, '<image>/09_date.js');
}
$x1209 = JS::toObject($leThis, $global);
unset($x1213, $W1213, $S1213, $U1213);
$x1214 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1209, (string) 'getMilliseconds', 261, 78, '<image>/09_date.js');
$x1213 =& $x1214[0]; list(,$W1213,$S1213,$U1213) = $x1214;
if (!(is_object($x1213) && isset($x1213->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1217 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 261, 78, '<image>/09_date.js');
$_TypeError =& $x1217[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1217;
$x1218 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1219 = $x1218($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1219->class) && $x1219->class === 'Error' && !isset($x1219->properties['file']) && !isset($x1219->properties['line']) && !isset($x1219->properties['column'])) {$x1219->properties['file'] = '<image>/09_date.js';$x1219->properties['line'] = 261;$x1219->properties['column'] = 78;$x1219->attributes['file'] = $x1219->attributes['line'] = $x1219->attributes['column'] = 0; }
throw new JSException($x1219, 261, 78, '<image>/09_date.js');
}
$x1215 = $x1213->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1216 = $x1215($global, $x1209, $x1213, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1159 = clone JS::$objectTemplate;
unset($x1220, $W1220, $S1220, $U1220);
$x1221 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 259, 16, '<image>/09_date.js');
$x1220 =& $x1221[0]; list(,$W1220,$S1220,$U1220) = $x1221;
$x1160 = $x1220;
$x1159->prototype = $x1160;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1224 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 259, 16, '<image>/09_date.js');
$_TypeError =& $x1224[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1224;
$x1225 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1226 = $x1225($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1226->class) && $x1226->class === 'Error' && !isset($x1226->properties['file']) && !isset($x1226->properties['line']) && !isset($x1226->properties['column'])) {$x1226->properties['file'] = '<image>/09_date.js';$x1226->properties['line'] = 259;$x1226->properties['column'] = 16;$x1226->attributes['file'] = $x1226->attributes['line'] = $x1226->attributes['column'] = 0; }
throw new JSException($x1226, 259, 16, '<image>/09_date.js');
}
$x1222 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1223 = $x1222($global, $x1159, $_Date, array($x1172, $_month, $_date, $x1183, $x1194, $x1205, $x1216), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1160 = $x1223;
if (is_object($x1160) && $x1160 !== JS::$undefined) { $x1159 = $x1160; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1159;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_29($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1146=&$scope->properties[\'arguments\'];$x1146->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1146->properties[$i]=$args[$i];$x1146->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'month\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1147=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1147,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1149=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',256,22,\'<image>/09_date.js\');$_TypeError=&$x1149[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1149;$x1150=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1151=$x1150($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1151->class)&&$x1151->class===\'Error\'&&!isset($x1151->properties[\'file\'])&&!isset($x1151->properties[\'line\'])&&!isset($x1151->properties[\'column\'])){$x1151->properties[\'file\']=\'<image>/09_date.js\';$x1151->properties[\'line\']=256;$x1151->properties[\'column\']=22;$x1151->attributes[\'file\']=$x1151->attributes[\'line\']=$x1151->attributes[\'column\']=0;}throw new JSException($x1151,256,22,\'<image>/09_date.js\');}$x1148=JS::toObject($leThis,$global);unset($x1152,$W1152,$S1152,$U1152);$x1153=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1148,(string)\'getDate\',256,22,\'<image>/09_date.js\');$x1152=&$x1153[0];list(,$W1152,$S1152,$U1152)=$x1153;if(!(is_object($x1152)&&isset($x1152->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1156=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',256,22,\'<image>/09_date.js\');$_TypeError=&$x1156[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1156;$x1157=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1158=$x1157($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1158->class)&&$x1158->class===\'Error\'&&!isset($x1158->properties[\'file\'])&&!isset($x1158->properties[\'line\'])&&!isset($x1158->properties[\'column\'])){$x1158->properties[\'file\']=\'<image>/09_date.js\';$x1158->properties[\'line\']=256;$x1158->properties[\'column\']=22;$x1158->attributes[\'file\']=$x1158->attributes[\'line\']=$x1158->attributes[\'column\']=0;}throw new JSException($x1158,256,22,\'<image>/09_date.js\');}$x1154=$x1152->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1155=$x1154($global,$x1148,$x1152,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1155;}unset($_Date,$WDate,$SDate,$UDate);$x1161=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',259,20,\'<image>/09_date.js\');$_Date=&$x1161[0];list(,$WDate,$SDate,$UDate)=$x1161;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1162=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',259,20,\'<image>/09_date.js\');$_ReferenceError=&$x1162[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1162;$x1163=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,20);$x1164=$x1163($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1164->class)&&$x1164->class===\'Error\'&&!isset($x1164->properties[\'file\'])&&!isset($x1164->properties[\'line\'])&&!isset($x1164->properties[\'column\'])){$x1164->properties[\'file\']=\'<image>/09_date.js\';$x1164->properties[\'line\']=259;$x1164->properties[\'column\']=20;$x1164->attributes[\'file\']=$x1164->attributes[\'line\']=$x1164->attributes[\'column\']=0;}throw new JSException($x1164,259,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1166=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',260,19,\'<image>/09_date.js\');$_TypeError=&$x1166[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1166;$x1167=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1168=$x1167($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1168->class)&&$x1168->class===\'Error\'&&!isset($x1168->properties[\'file\'])&&!isset($x1168->properties[\'line\'])&&!isset($x1168->properties[\'column\'])){$x1168->properties[\'file\']=\'<image>/09_date.js\';$x1168->properties[\'line\']=260;$x1168->properties[\'column\']=19;$x1168->attributes[\'file\']=$x1168->attributes[\'line\']=$x1168->attributes[\'column\']=0;}throw new JSException($x1168,260,19,\'<image>/09_date.js\');}$x1165=JS::toObject($leThis,$global);unset($x1169,$W1169,$S1169,$U1169);$x1170=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1165,(string)\'getFullYear\',260,19,\'<image>/09_date.js\');$x1169=&$x1170[0];list(,$W1169,$S1169,$U1169)=$x1170;if(!(is_object($x1169)&&isset($x1169->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1173=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',260,19,\'<image>/09_date.js\');$_TypeError=&$x1173[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1173;$x1174=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1175=$x1174($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1175->class)&&$x1175->class===\'Error\'&&!isset($x1175->properties[\'file\'])&&!isset($x1175->properties[\'line\'])&&!isset($x1175->properties[\'column\'])){$x1175->properties[\'file\']=\'<image>/09_date.js\';$x1175->properties[\'line\']=260;$x1175->properties[\'column\']=19;$x1175->attributes[\'file\']=$x1175->attributes[\'line\']=$x1175->attributes[\'column\']=0;}throw new JSException($x1175,260,19,\'<image>/09_date.js\');}$x1171=$x1169->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1172=$x1171($global,$x1165,$x1169,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1177=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,16,\'<image>/09_date.js\');$_TypeError=&$x1177[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1177;$x1178=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1179=$x1178($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1179->class)&&$x1179->class===\'Error\'&&!isset($x1179->properties[\'file\'])&&!isset($x1179->properties[\'line\'])&&!isset($x1179->properties[\'column\'])){$x1179->properties[\'file\']=\'<image>/09_date.js\';$x1179->properties[\'line\']=261;$x1179->properties[\'column\']=16;$x1179->attributes[\'file\']=$x1179->attributes[\'line\']=$x1179->attributes[\'column\']=0;}throw new JSException($x1179,261,16,\'<image>/09_date.js\');}$x1176=JS::toObject($leThis,$global);unset($x1180,$W1180,$S1180,$U1180);$x1181=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1176,(string)\'getHours\',261,16,\'<image>/09_date.js\');$x1180=&$x1181[0];list(,$W1180,$S1180,$U1180)=$x1181;if(!(is_object($x1180)&&isset($x1180->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1184=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,16,\'<image>/09_date.js\');$_TypeError=&$x1184[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1184;$x1185=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1186=$x1185($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1186->class)&&$x1186->class===\'Error\'&&!isset($x1186->properties[\'file\'])&&!isset($x1186->properties[\'line\'])&&!isset($x1186->properties[\'column\'])){$x1186->properties[\'file\']=\'<image>/09_date.js\';$x1186->properties[\'line\']=261;$x1186->properties[\'column\']=16;$x1186->attributes[\'file\']=$x1186->attributes[\'line\']=$x1186->attributes[\'column\']=0;}throw new JSException($x1186,261,16,\'<image>/09_date.js\');}$x1182=$x1180->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1183=$x1182($global,$x1176,$x1180,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1188=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,35,\'<image>/09_date.js\');$_TypeError=&$x1188[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1188;$x1189=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1190=$x1189($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1190->class)&&$x1190->class===\'Error\'&&!isset($x1190->properties[\'file\'])&&!isset($x1190->properties[\'line\'])&&!isset($x1190->properties[\'column\'])){$x1190->properties[\'file\']=\'<image>/09_date.js\';$x1190->properties[\'line\']=261;$x1190->properties[\'column\']=35;$x1190->attributes[\'file\']=$x1190->attributes[\'line\']=$x1190->attributes[\'column\']=0;}throw new JSException($x1190,261,35,\'<image>/09_date.js\');}$x1187=JS::toObject($leThis,$global);unset($x1191,$W1191,$S1191,$U1191);$x1192=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1187,(string)\'getMinutes\',261,35,\'<image>/09_date.js\');$x1191=&$x1192[0];list(,$W1191,$S1191,$U1191)=$x1192;if(!(is_object($x1191)&&isset($x1191->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1195=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,35,\'<image>/09_date.js\');$_TypeError=&$x1195[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1195;$x1196=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1197=$x1196($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1197->class)&&$x1197->class===\'Error\'&&!isset($x1197->properties[\'file\'])&&!isset($x1197->properties[\'line\'])&&!isset($x1197->properties[\'column\'])){$x1197->properties[\'file\']=\'<image>/09_date.js\';$x1197->properties[\'line\']=261;$x1197->properties[\'column\']=35;$x1197->attributes[\'file\']=$x1197->attributes[\'line\']=$x1197->attributes[\'column\']=0;}throw new JSException($x1197,261,35,\'<image>/09_date.js\');}$x1193=$x1191->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1194=$x1193($global,$x1187,$x1191,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1199=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,54,\'<image>/09_date.js\');$_TypeError=&$x1199[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1199;$x1200=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1201=$x1200($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1201->class)&&$x1201->class===\'Error\'&&!isset($x1201->properties[\'file\'])&&!isset($x1201->properties[\'line\'])&&!isset($x1201->properties[\'column\'])){$x1201->properties[\'file\']=\'<image>/09_date.js\';$x1201->properties[\'line\']=261;$x1201->properties[\'column\']=54;$x1201->attributes[\'file\']=$x1201->attributes[\'line\']=$x1201->attributes[\'column\']=0;}throw new JSException($x1201,261,54,\'<image>/09_date.js\');}$x1198=JS::toObject($leThis,$global);unset($x1202,$W1202,$S1202,$U1202);$x1203=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1198,(string)\'getSeconds\',261,54,\'<image>/09_date.js\');$x1202=&$x1203[0];list(,$W1202,$S1202,$U1202)=$x1203;if(!(is_object($x1202)&&isset($x1202->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1206=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,54,\'<image>/09_date.js\');$_TypeError=&$x1206[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1206;$x1207=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1208=$x1207($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1208->class)&&$x1208->class===\'Error\'&&!isset($x1208->properties[\'file\'])&&!isset($x1208->properties[\'line\'])&&!isset($x1208->properties[\'column\'])){$x1208->properties[\'file\']=\'<image>/09_date.js\';$x1208->properties[\'line\']=261;$x1208->properties[\'column\']=54;$x1208->attributes[\'file\']=$x1208->attributes[\'line\']=$x1208->attributes[\'column\']=0;}throw new JSException($x1208,261,54,\'<image>/09_date.js\');}$x1204=$x1202->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1205=$x1204($global,$x1198,$x1202,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1210=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,78,\'<image>/09_date.js\');$_TypeError=&$x1210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1210;$x1211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1212=$x1211($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1212->class)&&$x1212->class===\'Error\'&&!isset($x1212->properties[\'file\'])&&!isset($x1212->properties[\'line\'])&&!isset($x1212->properties[\'column\'])){$x1212->properties[\'file\']=\'<image>/09_date.js\';$x1212->properties[\'line\']=261;$x1212->properties[\'column\']=78;$x1212->attributes[\'file\']=$x1212->attributes[\'line\']=$x1212->attributes[\'column\']=0;}throw new JSException($x1212,261,78,\'<image>/09_date.js\');}$x1209=JS::toObject($leThis,$global);unset($x1213,$W1213,$S1213,$U1213);$x1214=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1209,(string)\'getMilliseconds\',261,78,\'<image>/09_date.js\');$x1213=&$x1214[0];list(,$W1213,$S1213,$U1213)=$x1214;if(!(is_object($x1213)&&isset($x1213->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1217=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',261,78,\'<image>/09_date.js\');$_TypeError=&$x1217[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1217;$x1218=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1219=$x1218($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1219->class)&&$x1219->class===\'Error\'&&!isset($x1219->properties[\'file\'])&&!isset($x1219->properties[\'line\'])&&!isset($x1219->properties[\'column\'])){$x1219->properties[\'file\']=\'<image>/09_date.js\';$x1219->properties[\'line\']=261;$x1219->properties[\'column\']=78;$x1219->attributes[\'file\']=$x1219->attributes[\'line\']=$x1219->attributes[\'column\']=0;}throw new JSException($x1219,261,78,\'<image>/09_date.js\');}$x1215=$x1213->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1216=$x1215($global,$x1209,$x1213,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1159=clone JS::$objectTemplate;unset($x1220,$W1220,$S1220,$U1220);$x1221=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',259,16,\'<image>/09_date.js\');$x1220=&$x1221[0];list(,$W1220,$S1220,$U1220)=$x1221;$x1160=$x1220;$x1159->prototype=$x1160;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1224=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',259,16,\'<image>/09_date.js\');$_TypeError=&$x1224[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1224;$x1225=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1226=$x1225($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1226->class)&&$x1226->class===\'Error\'&&!isset($x1226->properties[\'file\'])&&!isset($x1226->properties[\'line\'])&&!isset($x1226->properties[\'column\'])){$x1226->properties[\'file\']=\'<image>/09_date.js\';$x1226->properties[\'line\']=259;$x1226->properties[\'column\']=16;$x1226->attributes[\'file\']=$x1226->attributes[\'line\']=$x1226->attributes[\'column\']=0;}throw new JSException($x1226,259,16,\'<image>/09_date.js\');}$x1222=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1223=$x1222($global,$x1159,$_Date,array($x1172,$_month,$_date,$x1183,$x1194,$x1205,$x1216),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1160=$x1223;if(is_object($x1160)&&$x1160!==JS::$undefined){$x1159=$x1160;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1159;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_30($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1253 =& $scope->properties['arguments'];
$x1253->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1253->properties[$i] = $args[$i];
$x1253->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x1254 = (((gettype($_month) === gettype(JS::$undefined) && $_month === JS::$undefined))|| (((is_float($_month) || is_int($_month)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_month == JS::$undefined));
if (JS::toBoolean($x1254, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1256 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 273, 24, '<image>/09_date.js');
$_TypeError =& $x1256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1256;
$x1257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1258 = $x1257($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1258->class) && $x1258->class === 'Error' && !isset($x1258->properties['file']) && !isset($x1258->properties['line']) && !isset($x1258->properties['column'])) {$x1258->properties['file'] = '<image>/09_date.js';$x1258->properties['line'] = 273;$x1258->properties['column'] = 24;$x1258->attributes['file'] = $x1258->attributes['line'] = $x1258->attributes['column'] = 0; }
throw new JSException($x1258, 273, 24, '<image>/09_date.js');
}
$x1255 = JS::toObject($leThis, $global);
unset($x1259, $W1259, $S1259, $U1259);
$x1260 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1255, (string) 'getMonth', 273, 24, '<image>/09_date.js');
$x1259 =& $x1260[0]; list(,$W1259,$S1259,$U1259) = $x1260;
if (!(is_object($x1259) && isset($x1259->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1263 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 273, 24, '<image>/09_date.js');
$_TypeError =& $x1263[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1263;
$x1264 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1265 = $x1264($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1265->class) && $x1265->class === 'Error' && !isset($x1265->properties['file']) && !isset($x1265->properties['line']) && !isset($x1265->properties['column'])) {$x1265->properties['file'] = '<image>/09_date.js';$x1265->properties['line'] = 273;$x1265->properties['column'] = 24;$x1265->attributes['file'] = $x1265->attributes['line'] = $x1265->attributes['column'] = 0; }
throw new JSException($x1265, 273, 24, '<image>/09_date.js');
}
$x1261 = $x1259->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1262 = $x1261($global, $x1255, $x1259, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umonth) {$global->properties['month'] = $_month; $_month =& $global->properties['month']; }
$_month = $x1262;;
};
$x1266 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1266, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1268 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 277, 22, '<image>/09_date.js');
$_TypeError =& $x1268[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1268;
$x1269 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1270 = $x1269($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1270->class) && $x1270->class === 'Error' && !isset($x1270->properties['file']) && !isset($x1270->properties['line']) && !isset($x1270->properties['column'])) {$x1270->properties['file'] = '<image>/09_date.js';$x1270->properties['line'] = 277;$x1270->properties['column'] = 22;$x1270->attributes['file'] = $x1270->attributes['line'] = $x1270->attributes['column'] = 0; }
throw new JSException($x1270, 277, 22, '<image>/09_date.js');
}
$x1267 = JS::toObject($leThis, $global);
unset($x1271, $W1271, $S1271, $U1271);
$x1272 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1267, (string) 'getDate', 277, 22, '<image>/09_date.js');
$x1271 =& $x1272[0]; list(,$W1271,$S1271,$U1271) = $x1272;
if (!(is_object($x1271) && isset($x1271->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1275 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 277, 22, '<image>/09_date.js');
$_TypeError =& $x1275[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1275;
$x1276 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1277 = $x1276($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1277->class) && $x1277->class === 'Error' && !isset($x1277->properties['file']) && !isset($x1277->properties['line']) && !isset($x1277->properties['column'])) {$x1277->properties['file'] = '<image>/09_date.js';$x1277->properties['line'] = 277;$x1277->properties['column'] = 22;$x1277->attributes['file'] = $x1277->attributes['line'] = $x1277->attributes['column'] = 0; }
throw new JSException($x1277, 277, 22, '<image>/09_date.js');
}
$x1273 = $x1271->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1274 = $x1273($global, $x1267, $x1271, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1274;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1280 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Date', 280, 20, '<image>/09_date.js');
$_Date =& $x1280[0]; list(,$WDate,$SDate,$UDate) = $x1280;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1281 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 280, 20, '<image>/09_date.js');
$_ReferenceError =& $x1281[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1281;
$x1282 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 20);
$x1283 = $x1282($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1283->class) && $x1283->class === 'Error' && !isset($x1283->properties['file']) && !isset($x1283->properties['line']) && !isset($x1283->properties['column'])) {$x1283->properties['file'] = '<image>/09_date.js';$x1283->properties['line'] = 280;$x1283->properties['column'] = 20;$x1283->attributes['file'] = $x1283->attributes['line'] = $x1283->attributes['column'] = 0; }
throw new JSException($x1283, 280, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1285 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 16, '<image>/09_date.js');
$_TypeError =& $x1285[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1285;
$x1286 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1287 = $x1286($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1287->class) && $x1287->class === 'Error' && !isset($x1287->properties['file']) && !isset($x1287->properties['line']) && !isset($x1287->properties['column'])) {$x1287->properties['file'] = '<image>/09_date.js';$x1287->properties['line'] = 282;$x1287->properties['column'] = 16;$x1287->attributes['file'] = $x1287->attributes['line'] = $x1287->attributes['column'] = 0; }
throw new JSException($x1287, 282, 16, '<image>/09_date.js');
}
$x1284 = JS::toObject($leThis, $global);
unset($x1288, $W1288, $S1288, $U1288);
$x1289 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1284, (string) 'getHours', 282, 16, '<image>/09_date.js');
$x1288 =& $x1289[0]; list(,$W1288,$S1288,$U1288) = $x1289;
if (!(is_object($x1288) && isset($x1288->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1292 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 16, '<image>/09_date.js');
$_TypeError =& $x1292[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1292;
$x1293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1294 = $x1293($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1294->class) && $x1294->class === 'Error' && !isset($x1294->properties['file']) && !isset($x1294->properties['line']) && !isset($x1294->properties['column'])) {$x1294->properties['file'] = '<image>/09_date.js';$x1294->properties['line'] = 282;$x1294->properties['column'] = 16;$x1294->attributes['file'] = $x1294->attributes['line'] = $x1294->attributes['column'] = 0; }
throw new JSException($x1294, 282, 16, '<image>/09_date.js');
}
$x1290 = $x1288->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1291 = $x1290($global, $x1284, $x1288, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1296 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 35, '<image>/09_date.js');
$_TypeError =& $x1296[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1296;
$x1297 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1298 = $x1297($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1298->class) && $x1298->class === 'Error' && !isset($x1298->properties['file']) && !isset($x1298->properties['line']) && !isset($x1298->properties['column'])) {$x1298->properties['file'] = '<image>/09_date.js';$x1298->properties['line'] = 282;$x1298->properties['column'] = 35;$x1298->attributes['file'] = $x1298->attributes['line'] = $x1298->attributes['column'] = 0; }
throw new JSException($x1298, 282, 35, '<image>/09_date.js');
}
$x1295 = JS::toObject($leThis, $global);
unset($x1299, $W1299, $S1299, $U1299);
$x1300 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1295, (string) 'getMinutes', 282, 35, '<image>/09_date.js');
$x1299 =& $x1300[0]; list(,$W1299,$S1299,$U1299) = $x1300;
if (!(is_object($x1299) && isset($x1299->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1303 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 35, '<image>/09_date.js');
$_TypeError =& $x1303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1303;
$x1304 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1305 = $x1304($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1305->class) && $x1305->class === 'Error' && !isset($x1305->properties['file']) && !isset($x1305->properties['line']) && !isset($x1305->properties['column'])) {$x1305->properties['file'] = '<image>/09_date.js';$x1305->properties['line'] = 282;$x1305->properties['column'] = 35;$x1305->attributes['file'] = $x1305->attributes['line'] = $x1305->attributes['column'] = 0; }
throw new JSException($x1305, 282, 35, '<image>/09_date.js');
}
$x1301 = $x1299->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1302 = $x1301($global, $x1295, $x1299, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1307 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 54, '<image>/09_date.js');
$_TypeError =& $x1307[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1307;
$x1308 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1309 = $x1308($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1309->class) && $x1309->class === 'Error' && !isset($x1309->properties['file']) && !isset($x1309->properties['line']) && !isset($x1309->properties['column'])) {$x1309->properties['file'] = '<image>/09_date.js';$x1309->properties['line'] = 282;$x1309->properties['column'] = 54;$x1309->attributes['file'] = $x1309->attributes['line'] = $x1309->attributes['column'] = 0; }
throw new JSException($x1309, 282, 54, '<image>/09_date.js');
}
$x1306 = JS::toObject($leThis, $global);
unset($x1310, $W1310, $S1310, $U1310);
$x1311 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1306, (string) 'getSeconds', 282, 54, '<image>/09_date.js');
$x1310 =& $x1311[0]; list(,$W1310,$S1310,$U1310) = $x1311;
if (!(is_object($x1310) && isset($x1310->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1314 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 54, '<image>/09_date.js');
$_TypeError =& $x1314[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1314;
$x1315 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1316 = $x1315($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1316->class) && $x1316->class === 'Error' && !isset($x1316->properties['file']) && !isset($x1316->properties['line']) && !isset($x1316->properties['column'])) {$x1316->properties['file'] = '<image>/09_date.js';$x1316->properties['line'] = 282;$x1316->properties['column'] = 54;$x1316->attributes['file'] = $x1316->attributes['line'] = $x1316->attributes['column'] = 0; }
throw new JSException($x1316, 282, 54, '<image>/09_date.js');
}
$x1312 = $x1310->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1313 = $x1312($global, $x1306, $x1310, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1318 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 78, '<image>/09_date.js');
$_TypeError =& $x1318[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1318;
$x1319 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1320 = $x1319($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1320->class) && $x1320->class === 'Error' && !isset($x1320->properties['file']) && !isset($x1320->properties['line']) && !isset($x1320->properties['column'])) {$x1320->properties['file'] = '<image>/09_date.js';$x1320->properties['line'] = 282;$x1320->properties['column'] = 78;$x1320->attributes['file'] = $x1320->attributes['line'] = $x1320->attributes['column'] = 0; }
throw new JSException($x1320, 282, 78, '<image>/09_date.js');
}
$x1317 = JS::toObject($leThis, $global);
unset($x1321, $W1321, $S1321, $U1321);
$x1322 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1317, (string) 'getMilliseconds', 282, 78, '<image>/09_date.js');
$x1321 =& $x1322[0]; list(,$W1321,$S1321,$U1321) = $x1322;
if (!(is_object($x1321) && isset($x1321->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1325 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 282, 78, '<image>/09_date.js');
$_TypeError =& $x1325[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1325;
$x1326 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1327 = $x1326($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1327->class) && $x1327->class === 'Error' && !isset($x1327->properties['file']) && !isset($x1327->properties['line']) && !isset($x1327->properties['column'])) {$x1327->properties['file'] = '<image>/09_date.js';$x1327->properties['line'] = 282;$x1327->properties['column'] = 78;$x1327->attributes['file'] = $x1327->attributes['line'] = $x1327->attributes['column'] = 0; }
throw new JSException($x1327, 282, 78, '<image>/09_date.js');
}
$x1323 = $x1321->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1324 = $x1323($global, $x1317, $x1321, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1278 = clone JS::$objectTemplate;
unset($x1328, $W1328, $S1328, $U1328);
$x1329 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 280, 16, '<image>/09_date.js');
$x1328 =& $x1329[0]; list(,$W1328,$S1328,$U1328) = $x1329;
$x1279 = $x1328;
$x1278->prototype = $x1279;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1332 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 280, 16, '<image>/09_date.js');
$_TypeError =& $x1332[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1332;
$x1333 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1334 = $x1333($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1334->class) && $x1334->class === 'Error' && !isset($x1334->properties['file']) && !isset($x1334->properties['line']) && !isset($x1334->properties['column'])) {$x1334->properties['file'] = '<image>/09_date.js';$x1334->properties['line'] = 280;$x1334->properties['column'] = 16;$x1334->attributes['file'] = $x1334->attributes['line'] = $x1334->attributes['column'] = 0; }
throw new JSException($x1334, 280, 16, '<image>/09_date.js');
}
$x1330 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1331 = $x1330($global, $x1278, $_Date, array($_year, $_month, $_date, $x1291, $x1302, $x1313, $x1324), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1279 = $x1331;
if (is_object($x1279) && $x1279 !== JS::$undefined) { $x1278 = $x1279; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1278;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_30($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1253=&$scope->properties[\'arguments\'];$x1253->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1253->properties[$i]=$args[$i];$x1253->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1254=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x1254,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1256=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',273,24,\'<image>/09_date.js\');$_TypeError=&$x1256[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1256;$x1257=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1258=$x1257($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1258->class)&&$x1258->class===\'Error\'&&!isset($x1258->properties[\'file\'])&&!isset($x1258->properties[\'line\'])&&!isset($x1258->properties[\'column\'])){$x1258->properties[\'file\']=\'<image>/09_date.js\';$x1258->properties[\'line\']=273;$x1258->properties[\'column\']=24;$x1258->attributes[\'file\']=$x1258->attributes[\'line\']=$x1258->attributes[\'column\']=0;}throw new JSException($x1258,273,24,\'<image>/09_date.js\');}$x1255=JS::toObject($leThis,$global);unset($x1259,$W1259,$S1259,$U1259);$x1260=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1255,(string)\'getMonth\',273,24,\'<image>/09_date.js\');$x1259=&$x1260[0];list(,$W1259,$S1259,$U1259)=$x1260;if(!(is_object($x1259)&&isset($x1259->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1263=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',273,24,\'<image>/09_date.js\');$_TypeError=&$x1263[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1263;$x1264=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1265=$x1264($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1265->class)&&$x1265->class===\'Error\'&&!isset($x1265->properties[\'file\'])&&!isset($x1265->properties[\'line\'])&&!isset($x1265->properties[\'column\'])){$x1265->properties[\'file\']=\'<image>/09_date.js\';$x1265->properties[\'line\']=273;$x1265->properties[\'column\']=24;$x1265->attributes[\'file\']=$x1265->attributes[\'line\']=$x1265->attributes[\'column\']=0;}throw new JSException($x1265,273,24,\'<image>/09_date.js\');}$x1261=$x1259->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1262=$x1261($global,$x1255,$x1259,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umonth){$global->properties[\'month\']=$_month;$_month=&$global->properties[\'month\'];}$_month=$x1262;}$x1266=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1266,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1268=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',277,22,\'<image>/09_date.js\');$_TypeError=&$x1268[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1268;$x1269=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1270=$x1269($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1270->class)&&$x1270->class===\'Error\'&&!isset($x1270->properties[\'file\'])&&!isset($x1270->properties[\'line\'])&&!isset($x1270->properties[\'column\'])){$x1270->properties[\'file\']=\'<image>/09_date.js\';$x1270->properties[\'line\']=277;$x1270->properties[\'column\']=22;$x1270->attributes[\'file\']=$x1270->attributes[\'line\']=$x1270->attributes[\'column\']=0;}throw new JSException($x1270,277,22,\'<image>/09_date.js\');}$x1267=JS::toObject($leThis,$global);unset($x1271,$W1271,$S1271,$U1271);$x1272=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1267,(string)\'getDate\',277,22,\'<image>/09_date.js\');$x1271=&$x1272[0];list(,$W1271,$S1271,$U1271)=$x1272;if(!(is_object($x1271)&&isset($x1271->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1275=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',277,22,\'<image>/09_date.js\');$_TypeError=&$x1275[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1275;$x1276=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1277=$x1276($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1277->class)&&$x1277->class===\'Error\'&&!isset($x1277->properties[\'file\'])&&!isset($x1277->properties[\'line\'])&&!isset($x1277->properties[\'column\'])){$x1277->properties[\'file\']=\'<image>/09_date.js\';$x1277->properties[\'line\']=277;$x1277->properties[\'column\']=22;$x1277->attributes[\'file\']=$x1277->attributes[\'line\']=$x1277->attributes[\'column\']=0;}throw new JSException($x1277,277,22,\'<image>/09_date.js\');}$x1273=$x1271->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1274=$x1273($global,$x1267,$x1271,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1274;}unset($_Date,$WDate,$SDate,$UDate);$x1280=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'Date\',280,20,\'<image>/09_date.js\');$_Date=&$x1280[0];list(,$WDate,$SDate,$UDate)=$x1280;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1281=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'ReferenceError\',280,20,\'<image>/09_date.js\');$_ReferenceError=&$x1281[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1281;$x1282=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,20);$x1283=$x1282($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1283->class)&&$x1283->class===\'Error\'&&!isset($x1283->properties[\'file\'])&&!isset($x1283->properties[\'line\'])&&!isset($x1283->properties[\'column\'])){$x1283->properties[\'file\']=\'<image>/09_date.js\';$x1283->properties[\'line\']=280;$x1283->properties[\'column\']=20;$x1283->attributes[\'file\']=$x1283->attributes[\'line\']=$x1283->attributes[\'column\']=0;}throw new JSException($x1283,280,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1285=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,16,\'<image>/09_date.js\');$_TypeError=&$x1285[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1285;$x1286=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1287=$x1286($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1287->class)&&$x1287->class===\'Error\'&&!isset($x1287->properties[\'file\'])&&!isset($x1287->properties[\'line\'])&&!isset($x1287->properties[\'column\'])){$x1287->properties[\'file\']=\'<image>/09_date.js\';$x1287->properties[\'line\']=282;$x1287->properties[\'column\']=16;$x1287->attributes[\'file\']=$x1287->attributes[\'line\']=$x1287->attributes[\'column\']=0;}throw new JSException($x1287,282,16,\'<image>/09_date.js\');}$x1284=JS::toObject($leThis,$global);unset($x1288,$W1288,$S1288,$U1288);$x1289=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1284,(string)\'getHours\',282,16,\'<image>/09_date.js\');$x1288=&$x1289[0];list(,$W1288,$S1288,$U1288)=$x1289;if(!(is_object($x1288)&&isset($x1288->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1292=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,16,\'<image>/09_date.js\');$_TypeError=&$x1292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1292;$x1293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1294=$x1293($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1294->class)&&$x1294->class===\'Error\'&&!isset($x1294->properties[\'file\'])&&!isset($x1294->properties[\'line\'])&&!isset($x1294->properties[\'column\'])){$x1294->properties[\'file\']=\'<image>/09_date.js\';$x1294->properties[\'line\']=282;$x1294->properties[\'column\']=16;$x1294->attributes[\'file\']=$x1294->attributes[\'line\']=$x1294->attributes[\'column\']=0;}throw new JSException($x1294,282,16,\'<image>/09_date.js\');}$x1290=$x1288->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1291=$x1290($global,$x1284,$x1288,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1296=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,35,\'<image>/09_date.js\');$_TypeError=&$x1296[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1296;$x1297=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1298=$x1297($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1298->class)&&$x1298->class===\'Error\'&&!isset($x1298->properties[\'file\'])&&!isset($x1298->properties[\'line\'])&&!isset($x1298->properties[\'column\'])){$x1298->properties[\'file\']=\'<image>/09_date.js\';$x1298->properties[\'line\']=282;$x1298->properties[\'column\']=35;$x1298->attributes[\'file\']=$x1298->attributes[\'line\']=$x1298->attributes[\'column\']=0;}throw new JSException($x1298,282,35,\'<image>/09_date.js\');}$x1295=JS::toObject($leThis,$global);unset($x1299,$W1299,$S1299,$U1299);$x1300=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1295,(string)\'getMinutes\',282,35,\'<image>/09_date.js\');$x1299=&$x1300[0];list(,$W1299,$S1299,$U1299)=$x1300;if(!(is_object($x1299)&&isset($x1299->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1303=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,35,\'<image>/09_date.js\');$_TypeError=&$x1303[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1303;$x1304=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1305=$x1304($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1305->class)&&$x1305->class===\'Error\'&&!isset($x1305->properties[\'file\'])&&!isset($x1305->properties[\'line\'])&&!isset($x1305->properties[\'column\'])){$x1305->properties[\'file\']=\'<image>/09_date.js\';$x1305->properties[\'line\']=282;$x1305->properties[\'column\']=35;$x1305->attributes[\'file\']=$x1305->attributes[\'line\']=$x1305->attributes[\'column\']=0;}throw new JSException($x1305,282,35,\'<image>/09_date.js\');}$x1301=$x1299->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1302=$x1301($global,$x1295,$x1299,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1307=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,54,\'<image>/09_date.js\');$_TypeError=&$x1307[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1307;$x1308=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1309=$x1308($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1309->class)&&$x1309->class===\'Error\'&&!isset($x1309->properties[\'file\'])&&!isset($x1309->properties[\'line\'])&&!isset($x1309->properties[\'column\'])){$x1309->properties[\'file\']=\'<image>/09_date.js\';$x1309->properties[\'line\']=282;$x1309->properties[\'column\']=54;$x1309->attributes[\'file\']=$x1309->attributes[\'line\']=$x1309->attributes[\'column\']=0;}throw new JSException($x1309,282,54,\'<image>/09_date.js\');}$x1306=JS::toObject($leThis,$global);unset($x1310,$W1310,$S1310,$U1310);$x1311=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1306,(string)\'getSeconds\',282,54,\'<image>/09_date.js\');$x1310=&$x1311[0];list(,$W1310,$S1310,$U1310)=$x1311;if(!(is_object($x1310)&&isset($x1310->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1314=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,54,\'<image>/09_date.js\');$_TypeError=&$x1314[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1314;$x1315=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1316=$x1315($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1316->class)&&$x1316->class===\'Error\'&&!isset($x1316->properties[\'file\'])&&!isset($x1316->properties[\'line\'])&&!isset($x1316->properties[\'column\'])){$x1316->properties[\'file\']=\'<image>/09_date.js\';$x1316->properties[\'line\']=282;$x1316->properties[\'column\']=54;$x1316->attributes[\'file\']=$x1316->attributes[\'line\']=$x1316->attributes[\'column\']=0;}throw new JSException($x1316,282,54,\'<image>/09_date.js\');}$x1312=$x1310->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1313=$x1312($global,$x1306,$x1310,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1318=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,78,\'<image>/09_date.js\');$_TypeError=&$x1318[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1318;$x1319=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1320=$x1319($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1320->class)&&$x1320->class===\'Error\'&&!isset($x1320->properties[\'file\'])&&!isset($x1320->properties[\'line\'])&&!isset($x1320->properties[\'column\'])){$x1320->properties[\'file\']=\'<image>/09_date.js\';$x1320->properties[\'line\']=282;$x1320->properties[\'column\']=78;$x1320->attributes[\'file\']=$x1320->attributes[\'line\']=$x1320->attributes[\'column\']=0;}throw new JSException($x1320,282,78,\'<image>/09_date.js\');}$x1317=JS::toObject($leThis,$global);unset($x1321,$W1321,$S1321,$U1321);$x1322=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1317,(string)\'getMilliseconds\',282,78,\'<image>/09_date.js\');$x1321=&$x1322[0];list(,$W1321,$S1321,$U1321)=$x1322;if(!(is_object($x1321)&&isset($x1321->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1325=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',282,78,\'<image>/09_date.js\');$_TypeError=&$x1325[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1325;$x1326=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1327=$x1326($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1327->class)&&$x1327->class===\'Error\'&&!isset($x1327->properties[\'file\'])&&!isset($x1327->properties[\'line\'])&&!isset($x1327->properties[\'column\'])){$x1327->properties[\'file\']=\'<image>/09_date.js\';$x1327->properties[\'line\']=282;$x1327->properties[\'column\']=78;$x1327->attributes[\'file\']=$x1327->attributes[\'line\']=$x1327->attributes[\'column\']=0;}throw new JSException($x1327,282,78,\'<image>/09_date.js\');}$x1323=$x1321->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1324=$x1323($global,$x1317,$x1321,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1278=clone JS::$objectTemplate;unset($x1328,$W1328,$S1328,$U1328);$x1329=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,(string)\'prototype\',280,16,\'<image>/09_date.js\');$x1328=&$x1329[0];list(,$W1328,$S1328,$U1328)=$x1329;$x1279=$x1328;$x1278->prototype=$x1279;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1332=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',280,16,\'<image>/09_date.js\');$_TypeError=&$x1332[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1332;$x1333=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1334=$x1333($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1334->class)&&$x1334->class===\'Error\'&&!isset($x1334->properties[\'file\'])&&!isset($x1334->properties[\'line\'])&&!isset($x1334->properties[\'column\'])){$x1334->properties[\'file\']=\'<image>/09_date.js\';$x1334->properties[\'line\']=280;$x1334->properties[\'column\']=16;$x1334->attributes[\'file\']=$x1334->attributes[\'line\']=$x1334->attributes[\'column\']=0;}throw new JSException($x1334,280,16,\'<image>/09_date.js\');}$x1330=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1331=$x1330($global,$x1278,$_Date,array($_year,$_month,$_date,$x1291,$x1302,$x1313,$x1324),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1279=$x1331;if(is_object($x1279)&&$x1279!==JS::$undefined){$x1278=$x1279;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1278;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_31($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1375 =& $scope->properties['arguments'];
$x1375->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1375->properties[$i] = $args[$i];
$x1375->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value) .
		'T' . date('H:i:s', $leThis->value) .
		'.' . ((int) (($leThis->value - (int) $leThis->value) * 1000)) .
		date('P', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_31($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1375=&$scope->properties[\'arguments\'];$x1375->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1375->properties[$i]=$args[$i];$x1375->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value).\'T\'.date(\'H:i:s\',$leThis->value).\'.\'.((int)(($leThis->value-(int)$leThis->value)*1000)).date(\'P\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_32($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1388 =& $scope->properties['arguments'];
$x1388->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1388->properties[$i] = $args[$i];
$x1388->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['key'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_key =& $scope->properties['key'];
$Ukey = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1390 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 302, 25, '<image>/09_date.js');
$_TypeError =& $x1390[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1390;
$x1391 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1392 = $x1391($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1392->class) && $x1392->class === 'Error' && !isset($x1392->properties['file']) && !isset($x1392->properties['line']) && !isset($x1392->properties['column'])) {$x1392->properties['file'] = '<image>/09_date.js';$x1392->properties['line'] = 302;$x1392->properties['column'] = 25;$x1392->attributes['file'] = $x1392->attributes['line'] = $x1392->attributes['column'] = 0; }
throw new JSException($x1392, 302, 25, '<image>/09_date.js');
}
$x1389 = JS::toObject($leThis, $global);
unset($x1393, $W1393, $S1393, $U1393);
$x1394 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1389, (string) 'toISOString', 302, 25, '<image>/09_date.js');
$x1393 =& $x1394[0]; list(,$W1393,$S1393,$U1393) = $x1394;
if (!(is_object($x1393) && isset($x1393->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1397 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 302, 25, '<image>/09_date.js');
$_TypeError =& $x1397[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1397;
$x1398 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1399 = $x1398($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1399->class) && $x1399->class === 'Error' && !isset($x1399->properties['file']) && !isset($x1399->properties['line']) && !isset($x1399->properties['column'])) {$x1399->properties['file'] = '<image>/09_date.js';$x1399->properties['line'] = 302;$x1399->properties['column'] = 25;$x1399->attributes['file'] = $x1399->attributes['line'] = $x1399->attributes['column'] = 0; }
throw new JSException($x1399, 302, 25, '<image>/09_date.js');
}
$x1395 = $x1393->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1396 = $x1395($global, $x1389, $x1393, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x1396;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_32($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1388=&$scope->properties[\'arguments\'];$x1388->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1388->properties[$i]=$args[$i];$x1388->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'key\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_key=&$scope->properties[\'key\'];$Ukey=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1390=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',302,25,\'<image>/09_date.js\');$_TypeError=&$x1390[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1390;$x1391=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1392=$x1391($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1392->class)&&$x1392->class===\'Error\'&&!isset($x1392->properties[\'file\'])&&!isset($x1392->properties[\'line\'])&&!isset($x1392->properties[\'column\'])){$x1392->properties[\'file\']=\'<image>/09_date.js\';$x1392->properties[\'line\']=302;$x1392->properties[\'column\']=25;$x1392->attributes[\'file\']=$x1392->attributes[\'line\']=$x1392->attributes[\'column\']=0;}throw new JSException($x1392,302,25,\'<image>/09_date.js\');}$x1389=JS::toObject($leThis,$global);unset($x1393,$W1393,$S1393,$U1393);$x1394=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1389,(string)\'toISOString\',302,25,\'<image>/09_date.js\');$x1393=&$x1394[0];list(,$W1393,$S1393,$U1393)=$x1394;if(!(is_object($x1393)&&isset($x1393->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1397=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,(string)\'TypeError\',302,25,\'<image>/09_date.js\');$_TypeError=&$x1397[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1397;$x1398=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1399=$x1398($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1399->class)&&$x1399->class===\'Error\'&&!isset($x1399->properties[\'file\'])&&!isset($x1399->properties[\'line\'])&&!isset($x1399->properties[\'column\'])){$x1399->properties[\'file\']=\'<image>/09_date.js\';$x1399->properties[\'line\']=302;$x1399->properties[\'column\']=25;$x1399->attributes[\'file\']=$x1399->attributes[\'line\']=$x1399->attributes[\'column\']=0;}throw new JSException($x1399,302,25,\'<image>/09_date.js\');}$x1395=$x1393->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1396=$x1395($global,$x1389,$x1393,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x1396;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/09_date.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/09_date.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Date;
$x118 = clone JS::$functionTemplate; $x118->call = '_a3686fcdd5b5a69538641de6dddfbea8_1'; $x118->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x118->name = 'Date'; $x118->scope = $scope; $x118->properties['prototype'] = clone JS::$objectTemplate; $x118->attributes['prototype'] = JS::WRITABLE; $x118->properties['prototype']->properties['constructor'] = $x118; $x118->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x118->properties['length'] = 7; $x118->attributes['length'] = 0;
$scope->properties['Date'] = JS::$undefined; $_Date =& $scope->properties['Date'];
$UDate = FALSE;
$_Date = $x118;
$x126 = clone JS::$functionTemplate; $x126->call = '_a3686fcdd5b5a69538641de6dddfbea8_4'; $x126->parameters = array (
  0 => 'string',
); $x126->scope = $scope; $x126->properties['prototype'] = clone JS::$objectTemplate; $x126->attributes['prototype'] = JS::WRITABLE; $x126->properties['prototype']->properties['constructor'] = $x126; $x126->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x126->properties['length'] = 1; $x126->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x127 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 53, 12, '<image>/09_date.js');
$_TypeError =& $x127[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x127;
$x128 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x129 = $x128($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error' && !isset($x129->properties['file']) && !isset($x129->properties['line']) && !isset($x129->properties['column'])) {$x129->properties['file'] = '<image>/09_date.js';$x129->properties['line'] = 53;$x129->properties['column'] = 12;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 53, 12, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x130, $W130, $S130, $U130);
$x134 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'parse', 53, 12, '<image>/09_date.js');
$x130 =& $x134[0]; list(,$W130,$S130,$U130) = $x134;
if ($U130 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['parse'] = $x130; $x130 =& $_Date->properties['parse']; $_Date->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U130 = FALSE; $W130 = TRUE; }
if (isset($S130)) {
$x136 = $S130->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x137 = $x136($global, $_Date, $S130, array($x126), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x135 = $x137;
} else {
if (!$U130) {$x135 = $x126;if ($W130) { $x130 = $x126; }  }
else { $x135 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('parse') && 'parse' >= $_Date->properties['length']) { $_Date->properties['length'] = 'parse' + 1; };
$x153 = clone JS::$functionTemplate; $x153->call = '_a3686fcdd5b5a69538641de6dddfbea8_6'; $x153->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x153->scope = $scope; $x153->properties['prototype'] = clone JS::$objectTemplate; $x153->attributes['prototype'] = JS::WRITABLE; $x153->properties['prototype']->properties['constructor'] = $x153; $x153->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x153->properties['length'] = 7; $x153->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 63, 10, '<image>/09_date.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x156 = $x155($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x156->class) && $x156->class === 'Error' && !isset($x156->properties['file']) && !isset($x156->properties['line']) && !isset($x156->properties['column'])) {$x156->properties['file'] = '<image>/09_date.js';$x156->properties['line'] = 63;$x156->properties['column'] = 10;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 63, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x157, $W157, $S157, $U157);
$x158 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'UTC', 63, 10, '<image>/09_date.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
if ($U157 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['UTC'] = $x157; $x157 =& $_Date->properties['UTC']; $_Date->attributes['UTC'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U157 = FALSE; $W157 = TRUE; }
if (isset($S157)) {
$x160 = $S157->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x161 = $x160($global, $_Date, $S157, array($x153), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x159 = $x161;
} else {
if (!$U157) {$x159 = $x153;if ($W157) { $x157 = $x153; }  }
else { $x159 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('UTC') && 'UTC' >= $_Date->properties['length']) { $_Date->properties['length'] = 'UTC' + 1; };
$x177 = clone JS::$functionTemplate; $x177->call = '_a3686fcdd5b5a69538641de6dddfbea8_7'; $x177->parameters = array (
); $x177->scope = $scope; $x177->properties['prototype'] = clone JS::$objectTemplate; $x177->attributes['prototype'] = JS::WRITABLE; $x177->properties['prototype']->properties['constructor'] = $x177; $x177->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x177->properties['length'] = 0; $x177->attributes['length'] = 0;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x178 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 67, 10, '<image>/09_date.js');
$_TypeError =& $x178[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x178;
$x179 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x180 = $x179($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x180->class) && $x180->class === 'Error' && !isset($x180->properties['file']) && !isset($x180->properties['line']) && !isset($x180->properties['column'])) {$x180->properties['file'] = '<image>/09_date.js';$x180->properties['line'] = 67;$x180->properties['column'] = 10;$x180->attributes['file'] = $x180->attributes['line'] = $x180->attributes['column'] = 0; }
throw new JSException($x180, 67, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x181, $W181, $S181, $U181);
$x182 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'now', 67, 10, '<image>/09_date.js');
$x181 =& $x182[0]; list(,$W181,$S181,$U181) = $x182;
if ($U181 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['now'] = $x181; $x181 =& $_Date->properties['now']; $_Date->attributes['now'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U181 = FALSE; $W181 = TRUE; }
if (isset($S181)) {
$x184 = $S181->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x185 = $x184($global, $_Date, $S181, array($x177), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x183 = $x185;
} else {
if (!$U181) {$x183 = $x177;if ($W181) { $x181 = $x177; }  }
else { $x183 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('now') && 'now' >= $_Date->properties['length']) { $_Date->properties['length'] = 'now' + 1; };
$x186 = clone JS::$objectTemplate;
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x187 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 71, 16, '<image>/09_date.js');
$_TypeError =& $x187[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x187;
$x188 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x189 = $x188($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x189->class) && $x189->class === 'Error' && !isset($x189->properties['file']) && !isset($x189->properties['line']) && !isset($x189->properties['column'])) {$x189->properties['file'] = '<image>/09_date.js';$x189->properties['line'] = 71;$x189->properties['column'] = 16;$x189->attributes['file'] = $x189->attributes['line'] = $x189->attributes['column'] = 0; }
throw new JSException($x189, 71, 16, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x190, $W190, $S190, $U190);
$x191 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, (string) 'prototype', 71, 16, '<image>/09_date.js');
$x190 =& $x191[0]; list(,$W190,$S190,$U190) = $x191;
if ($U190 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties['prototype'] = $x190; $x190 =& $_Date->properties['prototype']; $_Date->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U190 = FALSE; $W190 = TRUE; }
if (isset($S190)) {
$x193 = $S190->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x194 = $x193($global, $_Date, $S190, array($x186), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x192 = $x194;
} else {
if (!$U190) {$x192 = $x186;if ($W190) { $x190 = $x186; }  }
else { $x192 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Date->properties['length']) { $_Date->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x195 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'Object', 72, 49, '<image>/09_date.js');
$_Object =& $x195[0]; list(,$WObject,$SObject,$UObject) = $x195;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x196 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'ReferenceError', 72, 49, '<image>/09_date.js');
$_ReferenceError =& $x196[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x196;
$x197 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 72, 49);
$x198 = $x197($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x198->class) && $x198->class === 'Error' && !isset($x198->properties['file']) && !isset($x198->properties['line']) && !isset($x198->properties['column'])) {$x198->properties['file'] = '<image>/09_date.js';$x198->properties['line'] = 72;$x198->properties['column'] = 49;$x198->attributes['file'] = $x198->attributes['line'] = $x198->attributes['column'] = 0; }
throw new JSException($x198, 72, 49, '<image>/09_date.js');
}
$_Date->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Date->properties['prototype']->class = 'Date';
$_Date->properties['prototype']->extensible = TRUE;
$_Date->properties['prototype']->value = NAN;
unset($x199, $W199, $S199, $U199);
$x200 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 76, 5, '<image>/09_date.js');
$x199 =& $x200[0]; list(,$W199,$S199,$U199) = $x200;
if ($x199 === JS::$undefined || $x199 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x201 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 76, 28, '<image>/09_date.js');
$_TypeError =& $x201[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x201;
$x202 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x203 = $x202($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x203->class) && $x203->class === 'Error' && !isset($x203->properties['file']) && !isset($x203->properties['line']) && !isset($x203->properties['column'])) {$x203->properties['file'] = '<image>/09_date.js';$x203->properties['line'] = 76;$x203->properties['column'] = 28;$x203->attributes['file'] = $x203->attributes['line'] = $x203->attributes['column'] = 0; }
throw new JSException($x203, 76, 28, '<image>/09_date.js');
}
$x199 = JS::toObject($x199, $global);
unset($x204, $W204, $S204, $U204);
$x205 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x199, (string) 'constructor', 76, 28, '<image>/09_date.js');
$x204 =& $x205[0]; list(,$W204,$S204,$U204) = $x205;
if ($U204 && (!isset($x199->extensible) || $x199->extensible)) {$x199->properties['constructor'] = $x204; $x204 =& $x199->properties['constructor']; $x199->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U204 = FALSE; $W204 = TRUE; }
if (isset($S204)) {
$x207 = $S204->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x208 = $x207($global, $x199, $S204, array($_Date), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x206 = $x208;
} else {
if (!$U204) {$x206 = $_Date;if ($W204) { $x204 = $_Date; }  }
else { $x206 = JS::$undefined; }
}
if (isset($x199->class) && $x199->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x199->properties['length']) { $x199->properties['length'] = 'constructor' + 1; };
$x211 = clone JS::$functionTemplate; $x211->call = '_a3686fcdd5b5a69538641de6dddfbea8_8'; $x211->parameters = array (
); $x211->scope = $scope; $x211->properties['prototype'] = clone JS::$objectTemplate; $x211->attributes['prototype'] = JS::WRITABLE; $x211->properties['prototype']->properties['constructor'] = $x211; $x211->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x211->properties['length'] = 0; $x211->attributes['length'] = 0;
unset($x212, $W212, $S212, $U212);
$x213 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 78, 5, '<image>/09_date.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if ($x212 === JS::$undefined || $x212 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x214 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 78, 25, '<image>/09_date.js');
$_TypeError =& $x214[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x214;
$x215 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x216 = $x215($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error' && !isset($x216->properties['file']) && !isset($x216->properties['line']) && !isset($x216->properties['column'])) {$x216->properties['file'] = '<image>/09_date.js';$x216->properties['line'] = 78;$x216->properties['column'] = 25;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 78, 25, '<image>/09_date.js');
}
$x212 = JS::toObject($x212, $global);
unset($x217, $W217, $S217, $U217);
$x218 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x212, (string) 'toString', 78, 25, '<image>/09_date.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
if ($U217 && (!isset($x212->extensible) || $x212->extensible)) {$x212->properties['toString'] = $x217; $x217 =& $x212->properties['toString']; $x212->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U217 = FALSE; $W217 = TRUE; }
if (isset($S217)) {
$x220 = $S217->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x221 = $x220($global, $x212, $S217, array($x211), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x219 = $x221;
} else {
if (!$U217) {$x219 = $x211;if ($W217) { $x217 = $x211; }  }
else { $x219 = JS::$undefined; }
}
if (isset($x212->class) && $x212->class === 'Array' &&  is_int('toString') && 'toString' >= $x212->properties['length']) { $x212->properties['length'] = 'toString' + 1; };
$x224 = clone JS::$functionTemplate; $x224->call = '_a3686fcdd5b5a69538641de6dddfbea8_9'; $x224->parameters = array (
); $x224->scope = $scope; $x224->properties['prototype'] = clone JS::$objectTemplate; $x224->attributes['prototype'] = JS::WRITABLE; $x224->properties['prototype']->properties['constructor'] = $x224; $x224->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x224->properties['length'] = 0; $x224->attributes['length'] = 0;
unset($x225, $W225, $S225, $U225);
$x226 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 82, 5, '<image>/09_date.js');
$x225 =& $x226[0]; list(,$W225,$S225,$U225) = $x226;
if ($x225 === JS::$undefined || $x225 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 82, 29, '<image>/09_date.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
$x228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x229 = $x228($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/09_date.js';$x229->properties['line'] = 82;$x229->properties['column'] = 29;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 82, 29, '<image>/09_date.js');
}
$x225 = JS::toObject($x225, $global);
unset($x230, $W230, $S230, $U230);
$x231 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x225, (string) 'toDateString', 82, 29, '<image>/09_date.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if ($U230 && (!isset($x225->extensible) || $x225->extensible)) {$x225->properties['toDateString'] = $x230; $x230 =& $x225->properties['toDateString']; $x225->attributes['toDateString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U230 = FALSE; $W230 = TRUE; }
if (isset($S230)) {
$x233 = $S230->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x234 = $x233($global, $x225, $S230, array($x224), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x232 = $x234;
} else {
if (!$U230) {$x232 = $x224;if ($W230) { $x230 = $x224; }  }
else { $x232 = JS::$undefined; }
}
if (isset($x225->class) && $x225->class === 'Array' &&  is_int('toDateString') && 'toDateString' >= $x225->properties['length']) { $x225->properties['length'] = 'toDateString' + 1; };
$x237 = clone JS::$functionTemplate; $x237->call = '_a3686fcdd5b5a69538641de6dddfbea8_10'; $x237->parameters = array (
); $x237->scope = $scope; $x237->properties['prototype'] = clone JS::$objectTemplate; $x237->attributes['prototype'] = JS::WRITABLE; $x237->properties['prototype']->properties['constructor'] = $x237; $x237->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x237->properties['length'] = 0; $x237->attributes['length'] = 0;
unset($x238, $W238, $S238, $U238);
$x239 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 86, 5, '<image>/09_date.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
if ($x238 === JS::$undefined || $x238 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 86, 29, '<image>/09_date.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x242 = $x241($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/09_date.js';$x242->properties['line'] = 86;$x242->properties['column'] = 29;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 86, 29, '<image>/09_date.js');
}
$x238 = JS::toObject($x238, $global);
unset($x243, $W243, $S243, $U243);
$x244 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x238, (string) 'toTimeString', 86, 29, '<image>/09_date.js');
$x243 =& $x244[0]; list(,$W243,$S243,$U243) = $x244;
if ($U243 && (!isset($x238->extensible) || $x238->extensible)) {$x238->properties['toTimeString'] = $x243; $x243 =& $x238->properties['toTimeString']; $x238->attributes['toTimeString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U243 = FALSE; $W243 = TRUE; }
if (isset($S243)) {
$x246 = $S243->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x247 = $x246($global, $x238, $S243, array($x237), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x245 = $x247;
} else {
if (!$U243) {$x245 = $x237;if ($W243) { $x243 = $x237; }  }
else { $x245 = JS::$undefined; }
}
if (isset($x238->class) && $x238->class === 'Array' &&  is_int('toTimeString') && 'toTimeString' >= $x238->properties['length']) { $x238->properties['length'] = 'toTimeString' + 1; };
unset($x248, $W248, $S248, $U248);
$x249 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 90, 37, '<image>/09_date.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
unset($x250, $W250, $S250, $U250);
$x251 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x248, (string) 'toString', 90, 47, '<image>/09_date.js');
$x250 =& $x251[0]; list(,$W250,$S250,$U250) = $x251;
unset($x252, $W252, $S252, $U252);
$x253 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 90, 5, '<image>/09_date.js');
$x252 =& $x253[0]; list(,$W252,$S252,$U252) = $x253;
if ($x252 === JS::$undefined || $x252 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x254 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 90, 31, '<image>/09_date.js');
$_TypeError =& $x254[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x254;
$x255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x256 = $x255($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error' && !isset($x256->properties['file']) && !isset($x256->properties['line']) && !isset($x256->properties['column'])) {$x256->properties['file'] = '<image>/09_date.js';$x256->properties['line'] = 90;$x256->properties['column'] = 31;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 90, 31, '<image>/09_date.js');
}
$x252 = JS::toObject($x252, $global);
unset($x257, $W257, $S257, $U257);
$x258 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x252, (string) 'toLocaleString', 90, 31, '<image>/09_date.js');
$x257 =& $x258[0]; list(,$W257,$S257,$U257) = $x258;
if ($U257 && (!isset($x252->extensible) || $x252->extensible)) {$x252->properties['toLocaleString'] = $x257; $x257 =& $x252->properties['toLocaleString']; $x252->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U257 = FALSE; $W257 = TRUE; }
if (isset($S257)) {
$x260 = $S257->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x261 = $x260($global, $x252, $S257, array($x250), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x259 = $x261;
} else {
if (!$U257) {$x259 = $x250;if ($W257) { $x257 = $x250; }  }
else { $x259 = JS::$undefined; }
}
if (isset($x252->class) && $x252->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x252->properties['length']) { $x252->properties['length'] = 'toLocaleString' + 1; };
unset($x262, $W262, $S262, $U262);
$x263 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 91, 41, '<image>/09_date.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
unset($x264, $W264, $S264, $U264);
$x265 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x262, (string) 'toDateString', 91, 51, '<image>/09_date.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
unset($x266, $W266, $S266, $U266);
$x267 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 91, 5, '<image>/09_date.js');
$x266 =& $x267[0]; list(,$W266,$S266,$U266) = $x267;
if ($x266 === JS::$undefined || $x266 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x268 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 91, 35, '<image>/09_date.js');
$_TypeError =& $x268[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x268;
$x269 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x270 = $x269($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x270->class) && $x270->class === 'Error' && !isset($x270->properties['file']) && !isset($x270->properties['line']) && !isset($x270->properties['column'])) {$x270->properties['file'] = '<image>/09_date.js';$x270->properties['line'] = 91;$x270->properties['column'] = 35;$x270->attributes['file'] = $x270->attributes['line'] = $x270->attributes['column'] = 0; }
throw new JSException($x270, 91, 35, '<image>/09_date.js');
}
$x266 = JS::toObject($x266, $global);
unset($x271, $W271, $S271, $U271);
$x272 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x266, (string) 'toLocaleDateString', 91, 35, '<image>/09_date.js');
$x271 =& $x272[0]; list(,$W271,$S271,$U271) = $x272;
if ($U271 && (!isset($x266->extensible) || $x266->extensible)) {$x266->properties['toLocaleDateString'] = $x271; $x271 =& $x266->properties['toLocaleDateString']; $x266->attributes['toLocaleDateString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U271 = FALSE; $W271 = TRUE; }
if (isset($S271)) {
$x274 = $S271->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x275 = $x274($global, $x266, $S271, array($x264), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x273 = $x275;
} else {
if (!$U271) {$x273 = $x264;if ($W271) { $x271 = $x264; }  }
else { $x273 = JS::$undefined; }
}
if (isset($x266->class) && $x266->class === 'Array' &&  is_int('toLocaleDateString') && 'toLocaleDateString' >= $x266->properties['length']) { $x266->properties['length'] = 'toLocaleDateString' + 1; };
unset($x276, $W276, $S276, $U276);
$x277 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 92, 41, '<image>/09_date.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
unset($x278, $W278, $S278, $U278);
$x279 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x276, (string) 'toTimeString', 92, 51, '<image>/09_date.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
unset($x280, $W280, $S280, $U280);
$x281 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 92, 5, '<image>/09_date.js');
$x280 =& $x281[0]; list(,$W280,$S280,$U280) = $x281;
if ($x280 === JS::$undefined || $x280 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x282 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 92, 35, '<image>/09_date.js');
$_TypeError =& $x282[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x282;
$x283 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x284 = $x283($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x284->class) && $x284->class === 'Error' && !isset($x284->properties['file']) && !isset($x284->properties['line']) && !isset($x284->properties['column'])) {$x284->properties['file'] = '<image>/09_date.js';$x284->properties['line'] = 92;$x284->properties['column'] = 35;$x284->attributes['file'] = $x284->attributes['line'] = $x284->attributes['column'] = 0; }
throw new JSException($x284, 92, 35, '<image>/09_date.js');
}
$x280 = JS::toObject($x280, $global);
unset($x285, $W285, $S285, $U285);
$x286 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x280, (string) 'toLocaleTimeString', 92, 35, '<image>/09_date.js');
$x285 =& $x286[0]; list(,$W285,$S285,$U285) = $x286;
if ($U285 && (!isset($x280->extensible) || $x280->extensible)) {$x280->properties['toLocaleTimeString'] = $x285; $x285 =& $x280->properties['toLocaleTimeString']; $x280->attributes['toLocaleTimeString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U285 = FALSE; $W285 = TRUE; }
if (isset($S285)) {
$x288 = $S285->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x289 = $x288($global, $x280, $S285, array($x278), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x287 = $x289;
} else {
if (!$U285) {$x287 = $x278;if ($W285) { $x285 = $x278; }  }
else { $x287 = JS::$undefined; }
}
if (isset($x280->class) && $x280->class === 'Array' &&  is_int('toLocaleTimeString') && 'toLocaleTimeString' >= $x280->properties['length']) { $x280->properties['length'] = 'toLocaleTimeString' + 1; };
$x292 = clone JS::$functionTemplate; $x292->call = '_a3686fcdd5b5a69538641de6dddfbea8_11'; $x292->parameters = array (
); $x292->scope = $scope; $x292->properties['prototype'] = clone JS::$objectTemplate; $x292->attributes['prototype'] = JS::WRITABLE; $x292->properties['prototype']->properties['constructor'] = $x292; $x292->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x292->properties['length'] = 0; $x292->attributes['length'] = 0;
unset($x293, $W293, $S293, $U293);
$x294 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 94, 5, '<image>/09_date.js');
$x293 =& $x294[0]; list(,$W293,$S293,$U293) = $x294;
if ($x293 === JS::$undefined || $x293 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x295 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 94, 24, '<image>/09_date.js');
$_TypeError =& $x295[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x295;
$x296 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x297 = $x296($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x297->class) && $x297->class === 'Error' && !isset($x297->properties['file']) && !isset($x297->properties['line']) && !isset($x297->properties['column'])) {$x297->properties['file'] = '<image>/09_date.js';$x297->properties['line'] = 94;$x297->properties['column'] = 24;$x297->attributes['file'] = $x297->attributes['line'] = $x297->attributes['column'] = 0; }
throw new JSException($x297, 94, 24, '<image>/09_date.js');
}
$x293 = JS::toObject($x293, $global);
unset($x298, $W298, $S298, $U298);
$x299 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x293, (string) 'valueOf', 94, 24, '<image>/09_date.js');
$x298 =& $x299[0]; list(,$W298,$S298,$U298) = $x299;
if ($U298 && (!isset($x293->extensible) || $x293->extensible)) {$x293->properties['valueOf'] = $x298; $x298 =& $x293->properties['valueOf']; $x293->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U298 = FALSE; $W298 = TRUE; }
if (isset($S298)) {
$x301 = $S298->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x302 = $x301($global, $x293, $S298, array($x292), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x300 = $x302;
} else {
if (!$U298) {$x300 = $x292;if ($W298) { $x298 = $x292; }  }
else { $x300 = JS::$undefined; }
}
if (isset($x293->class) && $x293->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x293->properties['length']) { $x293->properties['length'] = 'valueOf' + 1; };
unset($x303, $W303, $S303, $U303);
$x304 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 98, 30, '<image>/09_date.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
unset($x305, $W305, $S305, $U305);
$x306 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x303, (string) 'valueOf', 98, 40, '<image>/09_date.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
unset($x307, $W307, $S307, $U307);
$x308 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 98, 5, '<image>/09_date.js');
$x307 =& $x308[0]; list(,$W307,$S307,$U307) = $x308;
if ($x307 === JS::$undefined || $x307 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x309 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 98, 24, '<image>/09_date.js');
$_TypeError =& $x309[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x309;
$x310 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x311 = $x310($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x311->class) && $x311->class === 'Error' && !isset($x311->properties['file']) && !isset($x311->properties['line']) && !isset($x311->properties['column'])) {$x311->properties['file'] = '<image>/09_date.js';$x311->properties['line'] = 98;$x311->properties['column'] = 24;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 98, 24, '<image>/09_date.js');
}
$x307 = JS::toObject($x307, $global);
unset($x312, $W312, $S312, $U312);
$x313 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x307, (string) 'getTime', 98, 24, '<image>/09_date.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if ($U312 && (!isset($x307->extensible) || $x307->extensible)) {$x307->properties['getTime'] = $x312; $x312 =& $x307->properties['getTime']; $x307->attributes['getTime'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U312 = FALSE; $W312 = TRUE; }
if (isset($S312)) {
$x315 = $S312->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x316 = $x315($global, $x307, $S312, array($x305), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x314 = $x316;
} else {
if (!$U312) {$x314 = $x305;if ($W312) { $x312 = $x305; }  }
else { $x314 = JS::$undefined; }
}
if (isset($x307->class) && $x307->class === 'Array' &&  is_int('getTime') && 'getTime' >= $x307->properties['length']) { $x307->properties['length'] = 'getTime' + 1; };
$x319 = clone JS::$functionTemplate; $x319->call = '_a3686fcdd5b5a69538641de6dddfbea8_12'; $x319->parameters = array (
); $x319->scope = $scope; $x319->properties['prototype'] = clone JS::$objectTemplate; $x319->attributes['prototype'] = JS::WRITABLE; $x319->properties['prototype']->properties['constructor'] = $x319; $x319->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x319->properties['length'] = 0; $x319->attributes['length'] = 0;
unset($x320, $W320, $S320, $U320);
$x321 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 100, 5, '<image>/09_date.js');
$x320 =& $x321[0]; list(,$W320,$S320,$U320) = $x321;
if ($x320 === JS::$undefined || $x320 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x322 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 100, 28, '<image>/09_date.js');
$_TypeError =& $x322[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x322;
$x323 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x324 = $x323($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x324->class) && $x324->class === 'Error' && !isset($x324->properties['file']) && !isset($x324->properties['line']) && !isset($x324->properties['column'])) {$x324->properties['file'] = '<image>/09_date.js';$x324->properties['line'] = 100;$x324->properties['column'] = 28;$x324->attributes['file'] = $x324->attributes['line'] = $x324->attributes['column'] = 0; }
throw new JSException($x324, 100, 28, '<image>/09_date.js');
}
$x320 = JS::toObject($x320, $global);
unset($x325, $W325, $S325, $U325);
$x326 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x320, (string) 'getFullYear', 100, 28, '<image>/09_date.js');
$x325 =& $x326[0]; list(,$W325,$S325,$U325) = $x326;
if ($U325 && (!isset($x320->extensible) || $x320->extensible)) {$x320->properties['getFullYear'] = $x325; $x325 =& $x320->properties['getFullYear']; $x320->attributes['getFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U325 = FALSE; $W325 = TRUE; }
if (isset($S325)) {
$x328 = $S325->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x329 = $x328($global, $x320, $S325, array($x319), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x329;
} else {
if (!$U325) {$x327 = $x319;if ($W325) { $x325 = $x319; }  }
else { $x327 = JS::$undefined; }
}
if (isset($x320->class) && $x320->class === 'Array' &&  is_int('getFullYear') && 'getFullYear' >= $x320->properties['length']) { $x320->properties['length'] = 'getFullYear' + 1; };
$x345 = clone JS::$functionTemplate; $x345->call = '_a3686fcdd5b5a69538641de6dddfbea8_13'; $x345->parameters = array (
); $x345->scope = $scope; $x345->properties['prototype'] = clone JS::$objectTemplate; $x345->attributes['prototype'] = JS::WRITABLE; $x345->properties['prototype']->properties['constructor'] = $x345; $x345->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x345->properties['length'] = 0; $x345->attributes['length'] = 0;
unset($x346, $W346, $S346, $U346);
$x347 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 104, 5, '<image>/09_date.js');
$x346 =& $x347[0]; list(,$W346,$S346,$U346) = $x347;
if ($x346 === JS::$undefined || $x346 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x348 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 104, 31, '<image>/09_date.js');
$_TypeError =& $x348[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x348;
$x349 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x350 = $x349($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x350->class) && $x350->class === 'Error' && !isset($x350->properties['file']) && !isset($x350->properties['line']) && !isset($x350->properties['column'])) {$x350->properties['file'] = '<image>/09_date.js';$x350->properties['line'] = 104;$x350->properties['column'] = 31;$x350->attributes['file'] = $x350->attributes['line'] = $x350->attributes['column'] = 0; }
throw new JSException($x350, 104, 31, '<image>/09_date.js');
}
$x346 = JS::toObject($x346, $global);
unset($x351, $W351, $S351, $U351);
$x352 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x346, (string) 'getUTCFullYear', 104, 31, '<image>/09_date.js');
$x351 =& $x352[0]; list(,$W351,$S351,$U351) = $x352;
if ($U351 && (!isset($x346->extensible) || $x346->extensible)) {$x346->properties['getUTCFullYear'] = $x351; $x351 =& $x346->properties['getUTCFullYear']; $x346->attributes['getUTCFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U351 = FALSE; $W351 = TRUE; }
if (isset($S351)) {
$x354 = $S351->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x355 = $x354($global, $x346, $S351, array($x345), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x353 = $x355;
} else {
if (!$U351) {$x353 = $x345;if ($W351) { $x351 = $x345; }  }
else { $x353 = JS::$undefined; }
}
if (isset($x346->class) && $x346->class === 'Array' &&  is_int('getUTCFullYear') && 'getUTCFullYear' >= $x346->properties['length']) { $x346->properties['length'] = 'getUTCFullYear' + 1; };
$x369 = clone JS::$functionTemplate; $x369->call = '_a3686fcdd5b5a69538641de6dddfbea8_14'; $x369->parameters = array (
); $x369->scope = $scope; $x369->properties['prototype'] = clone JS::$objectTemplate; $x369->attributes['prototype'] = JS::WRITABLE; $x369->properties['prototype']->properties['constructor'] = $x369; $x369->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x369->properties['length'] = 0; $x369->attributes['length'] = 0;
unset($x370, $W370, $S370, $U370);
$x371 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 108, 5, '<image>/09_date.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if ($x370 === JS::$undefined || $x370 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x372 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 108, 24, '<image>/09_date.js');
$_TypeError =& $x372[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x372;
$x373 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x374 = $x373($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x374->class) && $x374->class === 'Error' && !isset($x374->properties['file']) && !isset($x374->properties['line']) && !isset($x374->properties['column'])) {$x374->properties['file'] = '<image>/09_date.js';$x374->properties['line'] = 108;$x374->properties['column'] = 24;$x374->attributes['file'] = $x374->attributes['line'] = $x374->attributes['column'] = 0; }
throw new JSException($x374, 108, 24, '<image>/09_date.js');
}
$x370 = JS::toObject($x370, $global);
unset($x375, $W375, $S375, $U375);
$x376 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x370, (string) 'getYear', 108, 24, '<image>/09_date.js');
$x375 =& $x376[0]; list(,$W375,$S375,$U375) = $x376;
if ($U375 && (!isset($x370->extensible) || $x370->extensible)) {$x370->properties['getYear'] = $x375; $x375 =& $x370->properties['getYear']; $x370->attributes['getYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U375 = FALSE; $W375 = TRUE; }
if (isset($S375)) {
$x378 = $S375->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x379 = $x378($global, $x370, $S375, array($x369), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x377 = $x379;
} else {
if (!$U375) {$x377 = $x369;if ($W375) { $x375 = $x369; }  }
else { $x377 = JS::$undefined; }
}
if (isset($x370->class) && $x370->class === 'Array' &&  is_int('getYear') && 'getYear' >= $x370->properties['length']) { $x370->properties['length'] = 'getYear' + 1; };
unset($x380, $W380, $S380, $U380);
$x381 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 112, 33, '<image>/09_date.js');
$x380 =& $x381[0]; list(,$W380,$S380,$U380) = $x381;
unset($x382, $W382, $S382, $U382);
$x383 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x380, (string) 'getUTCFullYear', 112, 43, '<image>/09_date.js');
$x382 =& $x383[0]; list(,$W382,$S382,$U382) = $x383;
unset($x384, $W384, $S384, $U384);
$x385 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 112, 5, '<image>/09_date.js');
$x384 =& $x385[0]; list(,$W384,$S384,$U384) = $x385;
if ($x384 === JS::$undefined || $x384 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x386 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 112, 27, '<image>/09_date.js');
$_TypeError =& $x386[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x386;
$x387 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x388 = $x387($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x388->class) && $x388->class === 'Error' && !isset($x388->properties['file']) && !isset($x388->properties['line']) && !isset($x388->properties['column'])) {$x388->properties['file'] = '<image>/09_date.js';$x388->properties['line'] = 112;$x388->properties['column'] = 27;$x388->attributes['file'] = $x388->attributes['line'] = $x388->attributes['column'] = 0; }
throw new JSException($x388, 112, 27, '<image>/09_date.js');
}
$x384 = JS::toObject($x384, $global);
unset($x389, $W389, $S389, $U389);
$x390 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x384, (string) 'getUTCYear', 112, 27, '<image>/09_date.js');
$x389 =& $x390[0]; list(,$W389,$S389,$U389) = $x390;
if ($U389 && (!isset($x384->extensible) || $x384->extensible)) {$x384->properties['getUTCYear'] = $x389; $x389 =& $x384->properties['getUTCYear']; $x384->attributes['getUTCYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U389 = FALSE; $W389 = TRUE; }
if (isset($S389)) {
$x392 = $S389->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x393 = $x392($global, $x384, $S389, array($x382), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x391 = $x393;
} else {
if (!$U389) {$x391 = $x382;if ($W389) { $x389 = $x382; }  }
else { $x391 = JS::$undefined; }
}
if (isset($x384->class) && $x384->class === 'Array' &&  is_int('getUTCYear') && 'getUTCYear' >= $x384->properties['length']) { $x384->properties['length'] = 'getUTCYear' + 1; };
$x396 = clone JS::$functionTemplate; $x396->call = '_a3686fcdd5b5a69538641de6dddfbea8_15'; $x396->parameters = array (
); $x396->scope = $scope; $x396->properties['prototype'] = clone JS::$objectTemplate; $x396->attributes['prototype'] = JS::WRITABLE; $x396->properties['prototype']->properties['constructor'] = $x396; $x396->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x396->properties['length'] = 0; $x396->attributes['length'] = 0;
unset($x397, $W397, $S397, $U397);
$x398 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 114, 5, '<image>/09_date.js');
$x397 =& $x398[0]; list(,$W397,$S397,$U397) = $x398;
if ($x397 === JS::$undefined || $x397 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 114, 25, '<image>/09_date.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
$x400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x401 = $x400($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x401->class) && $x401->class === 'Error' && !isset($x401->properties['file']) && !isset($x401->properties['line']) && !isset($x401->properties['column'])) {$x401->properties['file'] = '<image>/09_date.js';$x401->properties['line'] = 114;$x401->properties['column'] = 25;$x401->attributes['file'] = $x401->attributes['line'] = $x401->attributes['column'] = 0; }
throw new JSException($x401, 114, 25, '<image>/09_date.js');
}
$x397 = JS::toObject($x397, $global);
unset($x402, $W402, $S402, $U402);
$x403 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x397, (string) 'getMonth', 114, 25, '<image>/09_date.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
if ($U402 && (!isset($x397->extensible) || $x397->extensible)) {$x397->properties['getMonth'] = $x402; $x402 =& $x397->properties['getMonth']; $x397->attributes['getMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U402 = FALSE; $W402 = TRUE; }
if (isset($S402)) {
$x405 = $S402->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x406 = $x405($global, $x397, $S402, array($x396), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x404 = $x406;
} else {
if (!$U402) {$x404 = $x396;if ($W402) { $x402 = $x396; }  }
else { $x404 = JS::$undefined; }
}
if (isset($x397->class) && $x397->class === 'Array' &&  is_int('getMonth') && 'getMonth' >= $x397->properties['length']) { $x397->properties['length'] = 'getMonth' + 1; };
unset($x407, $W407, $S407, $U407);
$x408 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 118, 34, '<image>/09_date.js');
$x407 =& $x408[0]; list(,$W407,$S407,$U407) = $x408;
unset($x409, $W409, $S409, $U409);
$x410 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x407, (string) 'getUTCFullYear', 118, 44, '<image>/09_date.js');
$x409 =& $x410[0]; list(,$W409,$S409,$U409) = $x410;
unset($x411, $W411, $S411, $U411);
$x412 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 118, 5, '<image>/09_date.js');
$x411 =& $x412[0]; list(,$W411,$S411,$U411) = $x412;
if ($x411 === JS::$undefined || $x411 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x413 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 118, 28, '<image>/09_date.js');
$_TypeError =& $x413[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x413;
$x414 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x415 = $x414($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x415->class) && $x415->class === 'Error' && !isset($x415->properties['file']) && !isset($x415->properties['line']) && !isset($x415->properties['column'])) {$x415->properties['file'] = '<image>/09_date.js';$x415->properties['line'] = 118;$x415->properties['column'] = 28;$x415->attributes['file'] = $x415->attributes['line'] = $x415->attributes['column'] = 0; }
throw new JSException($x415, 118, 28, '<image>/09_date.js');
}
$x411 = JS::toObject($x411, $global);
unset($x416, $W416, $S416, $U416);
$x417 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x411, (string) 'getUTCMonth', 118, 28, '<image>/09_date.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
if ($U416 && (!isset($x411->extensible) || $x411->extensible)) {$x411->properties['getUTCMonth'] = $x416; $x416 =& $x411->properties['getUTCMonth']; $x411->attributes['getUTCMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U416 = FALSE; $W416 = TRUE; }
if (isset($S416)) {
$x419 = $S416->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x420 = $x419($global, $x411, $S416, array($x409), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x418 = $x420;
} else {
if (!$U416) {$x418 = $x409;if ($W416) { $x416 = $x409; }  }
else { $x418 = JS::$undefined; }
}
if (isset($x411->class) && $x411->class === 'Array' &&  is_int('getUTCMonth') && 'getUTCMonth' >= $x411->properties['length']) { $x411->properties['length'] = 'getUTCMonth' + 1; };
$x423 = clone JS::$functionTemplate; $x423->call = '_a3686fcdd5b5a69538641de6dddfbea8_16'; $x423->parameters = array (
); $x423->scope = $scope; $x423->properties['prototype'] = clone JS::$objectTemplate; $x423->attributes['prototype'] = JS::WRITABLE; $x423->properties['prototype']->properties['constructor'] = $x423; $x423->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x423->properties['length'] = 0; $x423->attributes['length'] = 0;
unset($x424, $W424, $S424, $U424);
$x425 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 120, 5, '<image>/09_date.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if ($x424 === JS::$undefined || $x424 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x426 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 120, 24, '<image>/09_date.js');
$_TypeError =& $x426[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x426;
$x427 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x428 = $x427($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x428->class) && $x428->class === 'Error' && !isset($x428->properties['file']) && !isset($x428->properties['line']) && !isset($x428->properties['column'])) {$x428->properties['file'] = '<image>/09_date.js';$x428->properties['line'] = 120;$x428->properties['column'] = 24;$x428->attributes['file'] = $x428->attributes['line'] = $x428->attributes['column'] = 0; }
throw new JSException($x428, 120, 24, '<image>/09_date.js');
}
$x424 = JS::toObject($x424, $global);
unset($x429, $W429, $S429, $U429);
$x430 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x424, (string) 'getDate', 120, 24, '<image>/09_date.js');
$x429 =& $x430[0]; list(,$W429,$S429,$U429) = $x430;
if ($U429 && (!isset($x424->extensible) || $x424->extensible)) {$x424->properties['getDate'] = $x429; $x429 =& $x424->properties['getDate']; $x424->attributes['getDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U429 = FALSE; $W429 = TRUE; }
if (isset($S429)) {
$x432 = $S429->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x433 = $x432($global, $x424, $S429, array($x423), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x431 = $x433;
} else {
if (!$U429) {$x431 = $x423;if ($W429) { $x429 = $x423; }  }
else { $x431 = JS::$undefined; }
}
if (isset($x424->class) && $x424->class === 'Array' &&  is_int('getDate') && 'getDate' >= $x424->properties['length']) { $x424->properties['length'] = 'getDate' + 1; };
unset($x434, $W434, $S434, $U434);
$x435 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 124, 33, '<image>/09_date.js');
$x434 =& $x435[0]; list(,$W434,$S434,$U434) = $x435;
unset($x436, $W436, $S436, $U436);
$x437 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x434, (string) 'getUTCFullYear', 124, 43, '<image>/09_date.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
unset($x438, $W438, $S438, $U438);
$x439 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 124, 5, '<image>/09_date.js');
$x438 =& $x439[0]; list(,$W438,$S438,$U438) = $x439;
if ($x438 === JS::$undefined || $x438 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x440 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 124, 27, '<image>/09_date.js');
$_TypeError =& $x440[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x440;
$x441 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x442 = $x441($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x442->class) && $x442->class === 'Error' && !isset($x442->properties['file']) && !isset($x442->properties['line']) && !isset($x442->properties['column'])) {$x442->properties['file'] = '<image>/09_date.js';$x442->properties['line'] = 124;$x442->properties['column'] = 27;$x442->attributes['file'] = $x442->attributes['line'] = $x442->attributes['column'] = 0; }
throw new JSException($x442, 124, 27, '<image>/09_date.js');
}
$x438 = JS::toObject($x438, $global);
unset($x443, $W443, $S443, $U443);
$x444 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x438, (string) 'getUTCDate', 124, 27, '<image>/09_date.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
if ($U443 && (!isset($x438->extensible) || $x438->extensible)) {$x438->properties['getUTCDate'] = $x443; $x443 =& $x438->properties['getUTCDate']; $x438->attributes['getUTCDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U443 = FALSE; $W443 = TRUE; }
if (isset($S443)) {
$x446 = $S443->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x447 = $x446($global, $x438, $S443, array($x436), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x445 = $x447;
} else {
if (!$U443) {$x445 = $x436;if ($W443) { $x443 = $x436; }  }
else { $x445 = JS::$undefined; }
}
if (isset($x438->class) && $x438->class === 'Array' &&  is_int('getUTCDate') && 'getUTCDate' >= $x438->properties['length']) { $x438->properties['length'] = 'getUTCDate' + 1; };
$x450 = clone JS::$functionTemplate; $x450->call = '_a3686fcdd5b5a69538641de6dddfbea8_17'; $x450->parameters = array (
); $x450->scope = $scope; $x450->properties['prototype'] = clone JS::$objectTemplate; $x450->attributes['prototype'] = JS::WRITABLE; $x450->properties['prototype']->properties['constructor'] = $x450; $x450->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x450->properties['length'] = 0; $x450->attributes['length'] = 0;
unset($x451, $W451, $S451, $U451);
$x452 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 126, 5, '<image>/09_date.js');
$x451 =& $x452[0]; list(,$W451,$S451,$U451) = $x452;
if ($x451 === JS::$undefined || $x451 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x453 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 126, 23, '<image>/09_date.js');
$_TypeError =& $x453[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x453;
$x454 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x455 = $x454($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x455->class) && $x455->class === 'Error' && !isset($x455->properties['file']) && !isset($x455->properties['line']) && !isset($x455->properties['column'])) {$x455->properties['file'] = '<image>/09_date.js';$x455->properties['line'] = 126;$x455->properties['column'] = 23;$x455->attributes['file'] = $x455->attributes['line'] = $x455->attributes['column'] = 0; }
throw new JSException($x455, 126, 23, '<image>/09_date.js');
}
$x451 = JS::toObject($x451, $global);
unset($x456, $W456, $S456, $U456);
$x457 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x451, (string) 'getDay', 126, 23, '<image>/09_date.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
if ($U456 && (!isset($x451->extensible) || $x451->extensible)) {$x451->properties['getDay'] = $x456; $x456 =& $x451->properties['getDay']; $x451->attributes['getDay'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U456 = FALSE; $W456 = TRUE; }
if (isset($S456)) {
$x459 = $S456->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x460 = $x459($global, $x451, $S456, array($x450), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x458 = $x460;
} else {
if (!$U456) {$x458 = $x450;if ($W456) { $x456 = $x450; }  }
else { $x458 = JS::$undefined; }
}
if (isset($x451->class) && $x451->class === 'Array' &&  is_int('getDay') && 'getDay' >= $x451->properties['length']) { $x451->properties['length'] = 'getDay' + 1; };
unset($x461, $W461, $S461, $U461);
$x462 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 130, 32, '<image>/09_date.js');
$x461 =& $x462[0]; list(,$W461,$S461,$U461) = $x462;
unset($x463, $W463, $S463, $U463);
$x464 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x461, (string) 'getUTCFullYear', 130, 42, '<image>/09_date.js');
$x463 =& $x464[0]; list(,$W463,$S463,$U463) = $x464;
unset($x465, $W465, $S465, $U465);
$x466 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 130, 5, '<image>/09_date.js');
$x465 =& $x466[0]; list(,$W465,$S465,$U465) = $x466;
if ($x465 === JS::$undefined || $x465 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x467 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 130, 26, '<image>/09_date.js');
$_TypeError =& $x467[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x467;
$x468 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x469 = $x468($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x469->class) && $x469->class === 'Error' && !isset($x469->properties['file']) && !isset($x469->properties['line']) && !isset($x469->properties['column'])) {$x469->properties['file'] = '<image>/09_date.js';$x469->properties['line'] = 130;$x469->properties['column'] = 26;$x469->attributes['file'] = $x469->attributes['line'] = $x469->attributes['column'] = 0; }
throw new JSException($x469, 130, 26, '<image>/09_date.js');
}
$x465 = JS::toObject($x465, $global);
unset($x470, $W470, $S470, $U470);
$x471 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x465, (string) 'getUTCDay', 130, 26, '<image>/09_date.js');
$x470 =& $x471[0]; list(,$W470,$S470,$U470) = $x471;
if ($U470 && (!isset($x465->extensible) || $x465->extensible)) {$x465->properties['getUTCDay'] = $x470; $x470 =& $x465->properties['getUTCDay']; $x465->attributes['getUTCDay'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U470 = FALSE; $W470 = TRUE; }
if (isset($S470)) {
$x473 = $S470->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x474 = $x473($global, $x465, $S470, array($x463), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x472 = $x474;
} else {
if (!$U470) {$x472 = $x463;if ($W470) { $x470 = $x463; }  }
else { $x472 = JS::$undefined; }
}
if (isset($x465->class) && $x465->class === 'Array' &&  is_int('getUTCDay') && 'getUTCDay' >= $x465->properties['length']) { $x465->properties['length'] = 'getUTCDay' + 1; };
$x477 = clone JS::$functionTemplate; $x477->call = '_a3686fcdd5b5a69538641de6dddfbea8_18'; $x477->parameters = array (
); $x477->scope = $scope; $x477->properties['prototype'] = clone JS::$objectTemplate; $x477->attributes['prototype'] = JS::WRITABLE; $x477->properties['prototype']->properties['constructor'] = $x477; $x477->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x477->properties['length'] = 0; $x477->attributes['length'] = 0;
unset($x478, $W478, $S478, $U478);
$x479 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 132, 5, '<image>/09_date.js');
$x478 =& $x479[0]; list(,$W478,$S478,$U478) = $x479;
if ($x478 === JS::$undefined || $x478 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x480 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 132, 25, '<image>/09_date.js');
$_TypeError =& $x480[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x480;
$x481 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x482 = $x481($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x482->class) && $x482->class === 'Error' && !isset($x482->properties['file']) && !isset($x482->properties['line']) && !isset($x482->properties['column'])) {$x482->properties['file'] = '<image>/09_date.js';$x482->properties['line'] = 132;$x482->properties['column'] = 25;$x482->attributes['file'] = $x482->attributes['line'] = $x482->attributes['column'] = 0; }
throw new JSException($x482, 132, 25, '<image>/09_date.js');
}
$x478 = JS::toObject($x478, $global);
unset($x483, $W483, $S483, $U483);
$x484 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x478, (string) 'getHours', 132, 25, '<image>/09_date.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
if ($U483 && (!isset($x478->extensible) || $x478->extensible)) {$x478->properties['getHours'] = $x483; $x483 =& $x478->properties['getHours']; $x478->attributes['getHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U483 = FALSE; $W483 = TRUE; }
if (isset($S483)) {
$x486 = $S483->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x487 = $x486($global, $x478, $S483, array($x477), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x485 = $x487;
} else {
if (!$U483) {$x485 = $x477;if ($W483) { $x483 = $x477; }  }
else { $x485 = JS::$undefined; }
}
if (isset($x478->class) && $x478->class === 'Array' &&  is_int('getHours') && 'getHours' >= $x478->properties['length']) { $x478->properties['length'] = 'getHours' + 1; };
unset($x488, $W488, $S488, $U488);
$x489 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 136, 34, '<image>/09_date.js');
$x488 =& $x489[0]; list(,$W488,$S488,$U488) = $x489;
unset($x490, $W490, $S490, $U490);
$x491 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x488, (string) 'getUTCFullYear', 136, 44, '<image>/09_date.js');
$x490 =& $x491[0]; list(,$W490,$S490,$U490) = $x491;
unset($x492, $W492, $S492, $U492);
$x493 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 136, 5, '<image>/09_date.js');
$x492 =& $x493[0]; list(,$W492,$S492,$U492) = $x493;
if ($x492 === JS::$undefined || $x492 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x494 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 136, 28, '<image>/09_date.js');
$_TypeError =& $x494[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x494;
$x495 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x496 = $x495($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x496->class) && $x496->class === 'Error' && !isset($x496->properties['file']) && !isset($x496->properties['line']) && !isset($x496->properties['column'])) {$x496->properties['file'] = '<image>/09_date.js';$x496->properties['line'] = 136;$x496->properties['column'] = 28;$x496->attributes['file'] = $x496->attributes['line'] = $x496->attributes['column'] = 0; }
throw new JSException($x496, 136, 28, '<image>/09_date.js');
}
$x492 = JS::toObject($x492, $global);
unset($x497, $W497, $S497, $U497);
$x498 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x492, (string) 'getUTCHours', 136, 28, '<image>/09_date.js');
$x497 =& $x498[0]; list(,$W497,$S497,$U497) = $x498;
if ($U497 && (!isset($x492->extensible) || $x492->extensible)) {$x492->properties['getUTCHours'] = $x497; $x497 =& $x492->properties['getUTCHours']; $x492->attributes['getUTCHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U497 = FALSE; $W497 = TRUE; }
if (isset($S497)) {
$x500 = $S497->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x501 = $x500($global, $x492, $S497, array($x490), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x499 = $x501;
} else {
if (!$U497) {$x499 = $x490;if ($W497) { $x497 = $x490; }  }
else { $x499 = JS::$undefined; }
}
if (isset($x492->class) && $x492->class === 'Array' &&  is_int('getUTCHours') && 'getUTCHours' >= $x492->properties['length']) { $x492->properties['length'] = 'getUTCHours' + 1; };
$x504 = clone JS::$functionTemplate; $x504->call = '_a3686fcdd5b5a69538641de6dddfbea8_19'; $x504->parameters = array (
); $x504->scope = $scope; $x504->properties['prototype'] = clone JS::$objectTemplate; $x504->attributes['prototype'] = JS::WRITABLE; $x504->properties['prototype']->properties['constructor'] = $x504; $x504->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x504->properties['length'] = 0; $x504->attributes['length'] = 0;
unset($x505, $W505, $S505, $U505);
$x506 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 138, 5, '<image>/09_date.js');
$x505 =& $x506[0]; list(,$W505,$S505,$U505) = $x506;
if ($x505 === JS::$undefined || $x505 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x507 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 138, 27, '<image>/09_date.js');
$_TypeError =& $x507[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x507;
$x508 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x509 = $x508($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x509->class) && $x509->class === 'Error' && !isset($x509->properties['file']) && !isset($x509->properties['line']) && !isset($x509->properties['column'])) {$x509->properties['file'] = '<image>/09_date.js';$x509->properties['line'] = 138;$x509->properties['column'] = 27;$x509->attributes['file'] = $x509->attributes['line'] = $x509->attributes['column'] = 0; }
throw new JSException($x509, 138, 27, '<image>/09_date.js');
}
$x505 = JS::toObject($x505, $global);
unset($x510, $W510, $S510, $U510);
$x511 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x505, (string) 'getMinutes', 138, 27, '<image>/09_date.js');
$x510 =& $x511[0]; list(,$W510,$S510,$U510) = $x511;
if ($U510 && (!isset($x505->extensible) || $x505->extensible)) {$x505->properties['getMinutes'] = $x510; $x510 =& $x505->properties['getMinutes']; $x505->attributes['getMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U510 = FALSE; $W510 = TRUE; }
if (isset($S510)) {
$x513 = $S510->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x514 = $x513($global, $x505, $S510, array($x504), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x512 = $x514;
} else {
if (!$U510) {$x512 = $x504;if ($W510) { $x510 = $x504; }  }
else { $x512 = JS::$undefined; }
}
if (isset($x505->class) && $x505->class === 'Array' &&  is_int('getMinutes') && 'getMinutes' >= $x505->properties['length']) { $x505->properties['length'] = 'getMinutes' + 1; };
unset($x515, $W515, $S515, $U515);
$x516 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 142, 36, '<image>/09_date.js');
$x515 =& $x516[0]; list(,$W515,$S515,$U515) = $x516;
unset($x517, $W517, $S517, $U517);
$x518 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x515, (string) 'getUTCFullYear', 142, 46, '<image>/09_date.js');
$x517 =& $x518[0]; list(,$W517,$S517,$U517) = $x518;
unset($x519, $W519, $S519, $U519);
$x520 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 142, 5, '<image>/09_date.js');
$x519 =& $x520[0]; list(,$W519,$S519,$U519) = $x520;
if ($x519 === JS::$undefined || $x519 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x521 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 142, 30, '<image>/09_date.js');
$_TypeError =& $x521[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x521;
$x522 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x523 = $x522($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error' && !isset($x523->properties['file']) && !isset($x523->properties['line']) && !isset($x523->properties['column'])) {$x523->properties['file'] = '<image>/09_date.js';$x523->properties['line'] = 142;$x523->properties['column'] = 30;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 142, 30, '<image>/09_date.js');
}
$x519 = JS::toObject($x519, $global);
unset($x524, $W524, $S524, $U524);
$x525 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x519, (string) 'getUTCMinutes', 142, 30, '<image>/09_date.js');
$x524 =& $x525[0]; list(,$W524,$S524,$U524) = $x525;
if ($U524 && (!isset($x519->extensible) || $x519->extensible)) {$x519->properties['getUTCMinutes'] = $x524; $x524 =& $x519->properties['getUTCMinutes']; $x519->attributes['getUTCMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U524 = FALSE; $W524 = TRUE; }
if (isset($S524)) {
$x527 = $S524->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x528 = $x527($global, $x519, $S524, array($x517), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x526 = $x528;
} else {
if (!$U524) {$x526 = $x517;if ($W524) { $x524 = $x517; }  }
else { $x526 = JS::$undefined; }
}
if (isset($x519->class) && $x519->class === 'Array' &&  is_int('getUTCMinutes') && 'getUTCMinutes' >= $x519->properties['length']) { $x519->properties['length'] = 'getUTCMinutes' + 1; };
$x531 = clone JS::$functionTemplate; $x531->call = '_a3686fcdd5b5a69538641de6dddfbea8_20'; $x531->parameters = array (
); $x531->scope = $scope; $x531->properties['prototype'] = clone JS::$objectTemplate; $x531->attributes['prototype'] = JS::WRITABLE; $x531->properties['prototype']->properties['constructor'] = $x531; $x531->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x531->properties['length'] = 0; $x531->attributes['length'] = 0;
unset($x532, $W532, $S532, $U532);
$x533 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 144, 5, '<image>/09_date.js');
$x532 =& $x533[0]; list(,$W532,$S532,$U532) = $x533;
if ($x532 === JS::$undefined || $x532 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x534 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 144, 27, '<image>/09_date.js');
$_TypeError =& $x534[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x534;
$x535 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x536 = $x535($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x536->class) && $x536->class === 'Error' && !isset($x536->properties['file']) && !isset($x536->properties['line']) && !isset($x536->properties['column'])) {$x536->properties['file'] = '<image>/09_date.js';$x536->properties['line'] = 144;$x536->properties['column'] = 27;$x536->attributes['file'] = $x536->attributes['line'] = $x536->attributes['column'] = 0; }
throw new JSException($x536, 144, 27, '<image>/09_date.js');
}
$x532 = JS::toObject($x532, $global);
unset($x537, $W537, $S537, $U537);
$x538 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x532, (string) 'getSeconds', 144, 27, '<image>/09_date.js');
$x537 =& $x538[0]; list(,$W537,$S537,$U537) = $x538;
if ($U537 && (!isset($x532->extensible) || $x532->extensible)) {$x532->properties['getSeconds'] = $x537; $x537 =& $x532->properties['getSeconds']; $x532->attributes['getSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U537 = FALSE; $W537 = TRUE; }
if (isset($S537)) {
$x540 = $S537->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x541 = $x540($global, $x532, $S537, array($x531), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x539 = $x541;
} else {
if (!$U537) {$x539 = $x531;if ($W537) { $x537 = $x531; }  }
else { $x539 = JS::$undefined; }
}
if (isset($x532->class) && $x532->class === 'Array' &&  is_int('getSeconds') && 'getSeconds' >= $x532->properties['length']) { $x532->properties['length'] = 'getSeconds' + 1; };
unset($x542, $W542, $S542, $U542);
$x543 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 148, 36, '<image>/09_date.js');
$x542 =& $x543[0]; list(,$W542,$S542,$U542) = $x543;
unset($x544, $W544, $S544, $U544);
$x545 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x542, (string) 'getUTCFullYear', 148, 46, '<image>/09_date.js');
$x544 =& $x545[0]; list(,$W544,$S544,$U544) = $x545;
unset($x546, $W546, $S546, $U546);
$x547 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 148, 5, '<image>/09_date.js');
$x546 =& $x547[0]; list(,$W546,$S546,$U546) = $x547;
if ($x546 === JS::$undefined || $x546 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x548 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 148, 30, '<image>/09_date.js');
$_TypeError =& $x548[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x548;
$x549 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x550 = $x549($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x550->class) && $x550->class === 'Error' && !isset($x550->properties['file']) && !isset($x550->properties['line']) && !isset($x550->properties['column'])) {$x550->properties['file'] = '<image>/09_date.js';$x550->properties['line'] = 148;$x550->properties['column'] = 30;$x550->attributes['file'] = $x550->attributes['line'] = $x550->attributes['column'] = 0; }
throw new JSException($x550, 148, 30, '<image>/09_date.js');
}
$x546 = JS::toObject($x546, $global);
unset($x551, $W551, $S551, $U551);
$x552 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x546, (string) 'getUTCSeconds', 148, 30, '<image>/09_date.js');
$x551 =& $x552[0]; list(,$W551,$S551,$U551) = $x552;
if ($U551 && (!isset($x546->extensible) || $x546->extensible)) {$x546->properties['getUTCSeconds'] = $x551; $x551 =& $x546->properties['getUTCSeconds']; $x546->attributes['getUTCSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U551 = FALSE; $W551 = TRUE; }
if (isset($S551)) {
$x554 = $S551->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x555 = $x554($global, $x546, $S551, array($x544), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x553 = $x555;
} else {
if (!$U551) {$x553 = $x544;if ($W551) { $x551 = $x544; }  }
else { $x553 = JS::$undefined; }
}
if (isset($x546->class) && $x546->class === 'Array' &&  is_int('getUTCSeconds') && 'getUTCSeconds' >= $x546->properties['length']) { $x546->properties['length'] = 'getUTCSeconds' + 1; };
$x558 = clone JS::$functionTemplate; $x558->call = '_a3686fcdd5b5a69538641de6dddfbea8_21'; $x558->parameters = array (
); $x558->scope = $scope; $x558->properties['prototype'] = clone JS::$objectTemplate; $x558->attributes['prototype'] = JS::WRITABLE; $x558->properties['prototype']->properties['constructor'] = $x558; $x558->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x558->properties['length'] = 0; $x558->attributes['length'] = 0;
unset($x559, $W559, $S559, $U559);
$x560 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 150, 5, '<image>/09_date.js');
$x559 =& $x560[0]; list(,$W559,$S559,$U559) = $x560;
if ($x559 === JS::$undefined || $x559 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x561 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 150, 32, '<image>/09_date.js');
$_TypeError =& $x561[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x561;
$x562 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x563 = $x562($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x563->class) && $x563->class === 'Error' && !isset($x563->properties['file']) && !isset($x563->properties['line']) && !isset($x563->properties['column'])) {$x563->properties['file'] = '<image>/09_date.js';$x563->properties['line'] = 150;$x563->properties['column'] = 32;$x563->attributes['file'] = $x563->attributes['line'] = $x563->attributes['column'] = 0; }
throw new JSException($x563, 150, 32, '<image>/09_date.js');
}
$x559 = JS::toObject($x559, $global);
unset($x564, $W564, $S564, $U564);
$x565 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x559, (string) 'getMilliseconds', 150, 32, '<image>/09_date.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
if ($U564 && (!isset($x559->extensible) || $x559->extensible)) {$x559->properties['getMilliseconds'] = $x564; $x564 =& $x559->properties['getMilliseconds']; $x559->attributes['getMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U564 = FALSE; $W564 = TRUE; }
if (isset($S564)) {
$x567 = $S564->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x568 = $x567($global, $x559, $S564, array($x558), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x566 = $x568;
} else {
if (!$U564) {$x566 = $x558;if ($W564) { $x564 = $x558; }  }
else { $x566 = JS::$undefined; }
}
if (isset($x559->class) && $x559->class === 'Array' &&  is_int('getMilliseconds') && 'getMilliseconds' >= $x559->properties['length']) { $x559->properties['length'] = 'getMilliseconds' + 1; };
unset($x569, $W569, $S569, $U569);
$x570 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 154, 41, '<image>/09_date.js');
$x569 =& $x570[0]; list(,$W569,$S569,$U569) = $x570;
unset($x571, $W571, $S571, $U571);
$x572 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x569, (string) 'getUTCFullYear', 154, 51, '<image>/09_date.js');
$x571 =& $x572[0]; list(,$W571,$S571,$U571) = $x572;
unset($x573, $W573, $S573, $U573);
$x574 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 154, 5, '<image>/09_date.js');
$x573 =& $x574[0]; list(,$W573,$S573,$U573) = $x574;
if ($x573 === JS::$undefined || $x573 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x575 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 154, 35, '<image>/09_date.js');
$_TypeError =& $x575[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x575;
$x576 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x577 = $x576($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x577->class) && $x577->class === 'Error' && !isset($x577->properties['file']) && !isset($x577->properties['line']) && !isset($x577->properties['column'])) {$x577->properties['file'] = '<image>/09_date.js';$x577->properties['line'] = 154;$x577->properties['column'] = 35;$x577->attributes['file'] = $x577->attributes['line'] = $x577->attributes['column'] = 0; }
throw new JSException($x577, 154, 35, '<image>/09_date.js');
}
$x573 = JS::toObject($x573, $global);
unset($x578, $W578, $S578, $U578);
$x579 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x573, (string) 'getUTCMilliseconds', 154, 35, '<image>/09_date.js');
$x578 =& $x579[0]; list(,$W578,$S578,$U578) = $x579;
if ($U578 && (!isset($x573->extensible) || $x573->extensible)) {$x573->properties['getUTCMilliseconds'] = $x578; $x578 =& $x573->properties['getUTCMilliseconds']; $x573->attributes['getUTCMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U578 = FALSE; $W578 = TRUE; }
if (isset($S578)) {
$x581 = $S578->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x582 = $x581($global, $x573, $S578, array($x571), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x580 = $x582;
} else {
if (!$U578) {$x580 = $x571;if ($W578) { $x578 = $x571; }  }
else { $x580 = JS::$undefined; }
}
if (isset($x573->class) && $x573->class === 'Array' &&  is_int('getUTCMilliseconds') && 'getUTCMilliseconds' >= $x573->properties['length']) { $x573->properties['length'] = 'getUTCMilliseconds' + 1; };
$x585 = clone JS::$functionTemplate; $x585->call = '_a3686fcdd5b5a69538641de6dddfbea8_22'; $x585->parameters = array (
); $x585->scope = $scope; $x585->properties['prototype'] = clone JS::$objectTemplate; $x585->attributes['prototype'] = JS::WRITABLE; $x585->properties['prototype']->properties['constructor'] = $x585; $x585->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x585->properties['length'] = 0; $x585->attributes['length'] = 0;
unset($x586, $W586, $S586, $U586);
$x587 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 156, 5, '<image>/09_date.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
if ($x586 === JS::$undefined || $x586 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x588 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 156, 34, '<image>/09_date.js');
$_TypeError =& $x588[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x588;
$x589 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x590 = $x589($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x590->class) && $x590->class === 'Error' && !isset($x590->properties['file']) && !isset($x590->properties['line']) && !isset($x590->properties['column'])) {$x590->properties['file'] = '<image>/09_date.js';$x590->properties['line'] = 156;$x590->properties['column'] = 34;$x590->attributes['file'] = $x590->attributes['line'] = $x590->attributes['column'] = 0; }
throw new JSException($x590, 156, 34, '<image>/09_date.js');
}
$x586 = JS::toObject($x586, $global);
unset($x591, $W591, $S591, $U591);
$x592 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x586, (string) 'getTimezoneOffset', 156, 34, '<image>/09_date.js');
$x591 =& $x592[0]; list(,$W591,$S591,$U591) = $x592;
if ($U591 && (!isset($x586->extensible) || $x586->extensible)) {$x586->properties['getTimezoneOffset'] = $x591; $x591 =& $x586->properties['getTimezoneOffset']; $x586->attributes['getTimezoneOffset'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U591 = FALSE; $W591 = TRUE; }
if (isset($S591)) {
$x594 = $S591->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x595 = $x594($global, $x586, $S591, array($x585), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x593 = $x595;
} else {
if (!$U591) {$x593 = $x585;if ($W591) { $x591 = $x585; }  }
else { $x593 = JS::$undefined; }
}
if (isset($x586->class) && $x586->class === 'Array' &&  is_int('getTimezoneOffset') && 'getTimezoneOffset' >= $x586->properties['length']) { $x586->properties['length'] = 'getTimezoneOffset' + 1; };
$x598 = clone JS::$functionTemplate; $x598->call = '_a3686fcdd5b5a69538641de6dddfbea8_23'; $x598->parameters = array (
  0 => 'time',
); $x598->scope = $scope; $x598->properties['prototype'] = clone JS::$objectTemplate; $x598->attributes['prototype'] = JS::WRITABLE; $x598->properties['prototype']->properties['constructor'] = $x598; $x598->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x598->properties['length'] = 1; $x598->attributes['length'] = 0;
unset($x599, $W599, $S599, $U599);
$x600 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 160, 5, '<image>/09_date.js');
$x599 =& $x600[0]; list(,$W599,$S599,$U599) = $x600;
if ($x599 === JS::$undefined || $x599 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x601 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 160, 24, '<image>/09_date.js');
$_TypeError =& $x601[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x601;
$x602 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x603 = $x602($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x603->class) && $x603->class === 'Error' && !isset($x603->properties['file']) && !isset($x603->properties['line']) && !isset($x603->properties['column'])) {$x603->properties['file'] = '<image>/09_date.js';$x603->properties['line'] = 160;$x603->properties['column'] = 24;$x603->attributes['file'] = $x603->attributes['line'] = $x603->attributes['column'] = 0; }
throw new JSException($x603, 160, 24, '<image>/09_date.js');
}
$x599 = JS::toObject($x599, $global);
unset($x604, $W604, $S604, $U604);
$x605 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x599, (string) 'setTime', 160, 24, '<image>/09_date.js');
$x604 =& $x605[0]; list(,$W604,$S604,$U604) = $x605;
if ($U604 && (!isset($x599->extensible) || $x599->extensible)) {$x599->properties['setTime'] = $x604; $x604 =& $x599->properties['setTime']; $x599->attributes['setTime'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U604 = FALSE; $W604 = TRUE; }
if (isset($S604)) {
$x607 = $S604->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x608 = $x607($global, $x599, $S604, array($x598), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x606 = $x608;
} else {
if (!$U604) {$x606 = $x598;if ($W604) { $x604 = $x598; }  }
else { $x606 = JS::$undefined; }
}
if (isset($x599->class) && $x599->class === 'Array' &&  is_int('setTime') && 'setTime' >= $x599->properties['length']) { $x599->properties['length'] = 'setTime' + 1; };
$x690 = clone JS::$functionTemplate; $x690->call = '_a3686fcdd5b5a69538641de6dddfbea8_24'; $x690->parameters = array (
  0 => 'ms',
); $x690->scope = $scope; $x690->properties['prototype'] = clone JS::$objectTemplate; $x690->attributes['prototype'] = JS::WRITABLE; $x690->properties['prototype']->properties['constructor'] = $x690; $x690->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x690->properties['length'] = 1; $x690->attributes['length'] = 0;
unset($x691, $W691, $S691, $U691);
$x692 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 165, 5, '<image>/09_date.js');
$x691 =& $x692[0]; list(,$W691,$S691,$U691) = $x692;
if ($x691 === JS::$undefined || $x691 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x693 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 165, 32, '<image>/09_date.js');
$_TypeError =& $x693[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x693;
$x694 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x695 = $x694($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x695->class) && $x695->class === 'Error' && !isset($x695->properties['file']) && !isset($x695->properties['line']) && !isset($x695->properties['column'])) {$x695->properties['file'] = '<image>/09_date.js';$x695->properties['line'] = 165;$x695->properties['column'] = 32;$x695->attributes['file'] = $x695->attributes['line'] = $x695->attributes['column'] = 0; }
throw new JSException($x695, 165, 32, '<image>/09_date.js');
}
$x691 = JS::toObject($x691, $global);
unset($x696, $W696, $S696, $U696);
$x697 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x691, (string) 'setMilliseconds', 165, 32, '<image>/09_date.js');
$x696 =& $x697[0]; list(,$W696,$S696,$U696) = $x697;
if ($U696 && (!isset($x691->extensible) || $x691->extensible)) {$x691->properties['setMilliseconds'] = $x696; $x696 =& $x691->properties['setMilliseconds']; $x691->attributes['setMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U696 = FALSE; $W696 = TRUE; }
if (isset($S696)) {
$x699 = $S696->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x700 = $x699($global, $x691, $S696, array($x690), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x698 = $x700;
} else {
if (!$U696) {$x698 = $x690;if ($W696) { $x696 = $x690; }  }
else { $x698 = JS::$undefined; }
}
if (isset($x691->class) && $x691->class === 'Array' &&  is_int('setMilliseconds') && 'setMilliseconds' >= $x691->properties['length']) { $x691->properties['length'] = 'setMilliseconds' + 1; };
unset($x701, $W701, $S701, $U701);
$x702 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 176, 41, '<image>/09_date.js');
$x701 =& $x702[0]; list(,$W701,$S701,$U701) = $x702;
unset($x703, $W703, $S703, $U703);
$x704 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x701, (string) 'getUTCFullYear', 176, 51, '<image>/09_date.js');
$x703 =& $x704[0]; list(,$W703,$S703,$U703) = $x704;
unset($x705, $W705, $S705, $U705);
$x706 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 176, 5, '<image>/09_date.js');
$x705 =& $x706[0]; list(,$W705,$S705,$U705) = $x706;
if ($x705 === JS::$undefined || $x705 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x707 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 176, 35, '<image>/09_date.js');
$_TypeError =& $x707[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x707;
$x708 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x709 = $x708($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x709->class) && $x709->class === 'Error' && !isset($x709->properties['file']) && !isset($x709->properties['line']) && !isset($x709->properties['column'])) {$x709->properties['file'] = '<image>/09_date.js';$x709->properties['line'] = 176;$x709->properties['column'] = 35;$x709->attributes['file'] = $x709->attributes['line'] = $x709->attributes['column'] = 0; }
throw new JSException($x709, 176, 35, '<image>/09_date.js');
}
$x705 = JS::toObject($x705, $global);
unset($x710, $W710, $S710, $U710);
$x711 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x705, (string) 'setUTCMilliseconds', 176, 35, '<image>/09_date.js');
$x710 =& $x711[0]; list(,$W710,$S710,$U710) = $x711;
if ($U710 && (!isset($x705->extensible) || $x705->extensible)) {$x705->properties['setUTCMilliseconds'] = $x710; $x710 =& $x705->properties['setUTCMilliseconds']; $x705->attributes['setUTCMilliseconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U710 = FALSE; $W710 = TRUE; }
if (isset($S710)) {
$x713 = $S710->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x714 = $x713($global, $x705, $S710, array($x703), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x712 = $x714;
} else {
if (!$U710) {$x712 = $x703;if ($W710) { $x710 = $x703; }  }
else { $x712 = JS::$undefined; }
}
if (isset($x705->class) && $x705->class === 'Array' &&  is_int('setUTCMilliseconds') && 'setUTCMilliseconds' >= $x705->properties['length']) { $x705->properties['length'] = 'setUTCMilliseconds' + 1; };
$x797 = clone JS::$functionTemplate; $x797->call = '_a3686fcdd5b5a69538641de6dddfbea8_25'; $x797->parameters = array (
  0 => 'seconds',
  1 => 'ms',
); $x797->scope = $scope; $x797->properties['prototype'] = clone JS::$objectTemplate; $x797->attributes['prototype'] = JS::WRITABLE; $x797->properties['prototype']->properties['constructor'] = $x797; $x797->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x797->properties['length'] = 2; $x797->attributes['length'] = 0;
unset($x798, $W798, $S798, $U798);
$x799 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 178, 5, '<image>/09_date.js');
$x798 =& $x799[0]; list(,$W798,$S798,$U798) = $x799;
if ($x798 === JS::$undefined || $x798 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x800 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 178, 27, '<image>/09_date.js');
$_TypeError =& $x800[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x800;
$x801 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x802 = $x801($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x802->class) && $x802->class === 'Error' && !isset($x802->properties['file']) && !isset($x802->properties['line']) && !isset($x802->properties['column'])) {$x802->properties['file'] = '<image>/09_date.js';$x802->properties['line'] = 178;$x802->properties['column'] = 27;$x802->attributes['file'] = $x802->attributes['line'] = $x802->attributes['column'] = 0; }
throw new JSException($x802, 178, 27, '<image>/09_date.js');
}
$x798 = JS::toObject($x798, $global);
unset($x803, $W803, $S803, $U803);
$x804 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x798, (string) 'setSeconds', 178, 27, '<image>/09_date.js');
$x803 =& $x804[0]; list(,$W803,$S803,$U803) = $x804;
if ($U803 && (!isset($x798->extensible) || $x798->extensible)) {$x798->properties['setSeconds'] = $x803; $x803 =& $x798->properties['setSeconds']; $x798->attributes['setSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U803 = FALSE; $W803 = TRUE; }
if (isset($S803)) {
$x806 = $S803->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x807 = $x806($global, $x798, $S803, array($x797), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x805 = $x807;
} else {
if (!$U803) {$x805 = $x797;if ($W803) { $x803 = $x797; }  }
else { $x805 = JS::$undefined; }
}
if (isset($x798->class) && $x798->class === 'Array' &&  is_int('setSeconds') && 'setSeconds' >= $x798->properties['length']) { $x798->properties['length'] = 'setSeconds' + 1; };
unset($x808, $W808, $S808, $U808);
$x809 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 193, 36, '<image>/09_date.js');
$x808 =& $x809[0]; list(,$W808,$S808,$U808) = $x809;
unset($x810, $W810, $S810, $U810);
$x811 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x808, (string) 'getUTCFullYear', 193, 46, '<image>/09_date.js');
$x810 =& $x811[0]; list(,$W810,$S810,$U810) = $x811;
unset($x812, $W812, $S812, $U812);
$x813 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 193, 5, '<image>/09_date.js');
$x812 =& $x813[0]; list(,$W812,$S812,$U812) = $x813;
if ($x812 === JS::$undefined || $x812 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x814 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 193, 30, '<image>/09_date.js');
$_TypeError =& $x814[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x814;
$x815 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x816 = $x815($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x816->class) && $x816->class === 'Error' && !isset($x816->properties['file']) && !isset($x816->properties['line']) && !isset($x816->properties['column'])) {$x816->properties['file'] = '<image>/09_date.js';$x816->properties['line'] = 193;$x816->properties['column'] = 30;$x816->attributes['file'] = $x816->attributes['line'] = $x816->attributes['column'] = 0; }
throw new JSException($x816, 193, 30, '<image>/09_date.js');
}
$x812 = JS::toObject($x812, $global);
unset($x817, $W817, $S817, $U817);
$x818 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x812, (string) 'setUTCSeconds', 193, 30, '<image>/09_date.js');
$x817 =& $x818[0]; list(,$W817,$S817,$U817) = $x818;
if ($U817 && (!isset($x812->extensible) || $x812->extensible)) {$x812->properties['setUTCSeconds'] = $x817; $x817 =& $x812->properties['setUTCSeconds']; $x812->attributes['setUTCSeconds'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U817 = FALSE; $W817 = TRUE; }
if (isset($S817)) {
$x820 = $S817->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x821 = $x820($global, $x812, $S817, array($x810), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x819 = $x821;
} else {
if (!$U817) {$x819 = $x810;if ($W817) { $x817 = $x810; }  }
else { $x819 = JS::$undefined; }
}
if (isset($x812->class) && $x812->class === 'Array' &&  is_int('setUTCSeconds') && 'setUTCSeconds' >= $x812->properties['length']) { $x812->properties['length'] = 'setUTCSeconds' + 1; };
$x905 = clone JS::$functionTemplate; $x905->call = '_a3686fcdd5b5a69538641de6dddfbea8_26'; $x905->parameters = array (
  0 => 'minutes',
  1 => 'seconds',
  2 => 'ms',
); $x905->scope = $scope; $x905->properties['prototype'] = clone JS::$objectTemplate; $x905->attributes['prototype'] = JS::WRITABLE; $x905->properties['prototype']->properties['constructor'] = $x905; $x905->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x905->properties['length'] = 3; $x905->attributes['length'] = 0;
unset($x906, $W906, $S906, $U906);
$x907 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 195, 5, '<image>/09_date.js');
$x906 =& $x907[0]; list(,$W906,$S906,$U906) = $x907;
if ($x906 === JS::$undefined || $x906 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x908 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 195, 27, '<image>/09_date.js');
$_TypeError =& $x908[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x908;
$x909 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x910 = $x909($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x910->class) && $x910->class === 'Error' && !isset($x910->properties['file']) && !isset($x910->properties['line']) && !isset($x910->properties['column'])) {$x910->properties['file'] = '<image>/09_date.js';$x910->properties['line'] = 195;$x910->properties['column'] = 27;$x910->attributes['file'] = $x910->attributes['line'] = $x910->attributes['column'] = 0; }
throw new JSException($x910, 195, 27, '<image>/09_date.js');
}
$x906 = JS::toObject($x906, $global);
unset($x911, $W911, $S911, $U911);
$x912 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x906, (string) 'setMinutes', 195, 27, '<image>/09_date.js');
$x911 =& $x912[0]; list(,$W911,$S911,$U911) = $x912;
if ($U911 && (!isset($x906->extensible) || $x906->extensible)) {$x906->properties['setMinutes'] = $x911; $x911 =& $x906->properties['setMinutes']; $x906->attributes['setMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U911 = FALSE; $W911 = TRUE; }
if (isset($S911)) {
$x914 = $S911->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x915 = $x914($global, $x906, $S911, array($x905), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x913 = $x915;
} else {
if (!$U911) {$x913 = $x905;if ($W911) { $x911 = $x905; }  }
else { $x913 = JS::$undefined; }
}
if (isset($x906->class) && $x906->class === 'Array' &&  is_int('setMinutes') && 'setMinutes' >= $x906->properties['length']) { $x906->properties['length'] = 'setMinutes' + 1; };
unset($x916, $W916, $S916, $U916);
$x917 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 214, 36, '<image>/09_date.js');
$x916 =& $x917[0]; list(,$W916,$S916,$U916) = $x917;
unset($x918, $W918, $S918, $U918);
$x919 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x916, (string) 'getUTCFullYear', 214, 46, '<image>/09_date.js');
$x918 =& $x919[0]; list(,$W918,$S918,$U918) = $x919;
unset($x920, $W920, $S920, $U920);
$x921 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 214, 5, '<image>/09_date.js');
$x920 =& $x921[0]; list(,$W920,$S920,$U920) = $x921;
if ($x920 === JS::$undefined || $x920 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x922 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 214, 30, '<image>/09_date.js');
$_TypeError =& $x922[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x922;
$x923 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x924 = $x923($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x924->class) && $x924->class === 'Error' && !isset($x924->properties['file']) && !isset($x924->properties['line']) && !isset($x924->properties['column'])) {$x924->properties['file'] = '<image>/09_date.js';$x924->properties['line'] = 214;$x924->properties['column'] = 30;$x924->attributes['file'] = $x924->attributes['line'] = $x924->attributes['column'] = 0; }
throw new JSException($x924, 214, 30, '<image>/09_date.js');
}
$x920 = JS::toObject($x920, $global);
unset($x925, $W925, $S925, $U925);
$x926 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x920, (string) 'setUTCMinutes', 214, 30, '<image>/09_date.js');
$x925 =& $x926[0]; list(,$W925,$S925,$U925) = $x926;
if ($U925 && (!isset($x920->extensible) || $x920->extensible)) {$x920->properties['setUTCMinutes'] = $x925; $x925 =& $x920->properties['setUTCMinutes']; $x920->attributes['setUTCMinutes'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U925 = FALSE; $W925 = TRUE; }
if (isset($S925)) {
$x928 = $S925->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x929 = $x928($global, $x920, $S925, array($x918), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x927 = $x929;
} else {
if (!$U925) {$x927 = $x918;if ($W925) { $x925 = $x918; }  }
else { $x927 = JS::$undefined; }
}
if (isset($x920->class) && $x920->class === 'Array' &&  is_int('setUTCMinutes') && 'setUTCMinutes' >= $x920->properties['length']) { $x920->properties['length'] = 'setUTCMinutes' + 1; };
$x1014 = clone JS::$functionTemplate; $x1014->call = '_a3686fcdd5b5a69538641de6dddfbea8_27'; $x1014->parameters = array (
  0 => 'hours',
  1 => 'minutes',
  2 => 'seconds',
  3 => 'ms',
); $x1014->scope = $scope; $x1014->properties['prototype'] = clone JS::$objectTemplate; $x1014->attributes['prototype'] = JS::WRITABLE; $x1014->properties['prototype']->properties['constructor'] = $x1014; $x1014->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1014->properties['length'] = 4; $x1014->attributes['length'] = 0;
unset($x1015, $W1015, $S1015, $U1015);
$x1016 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 216, 5, '<image>/09_date.js');
$x1015 =& $x1016[0]; list(,$W1015,$S1015,$U1015) = $x1016;
if ($x1015 === JS::$undefined || $x1015 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1017 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 216, 25, '<image>/09_date.js');
$_TypeError =& $x1017[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1017;
$x1018 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1019 = $x1018($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1019->class) && $x1019->class === 'Error' && !isset($x1019->properties['file']) && !isset($x1019->properties['line']) && !isset($x1019->properties['column'])) {$x1019->properties['file'] = '<image>/09_date.js';$x1019->properties['line'] = 216;$x1019->properties['column'] = 25;$x1019->attributes['file'] = $x1019->attributes['line'] = $x1019->attributes['column'] = 0; }
throw new JSException($x1019, 216, 25, '<image>/09_date.js');
}
$x1015 = JS::toObject($x1015, $global);
unset($x1020, $W1020, $S1020, $U1020);
$x1021 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1015, (string) 'setHours', 216, 25, '<image>/09_date.js');
$x1020 =& $x1021[0]; list(,$W1020,$S1020,$U1020) = $x1021;
if ($U1020 && (!isset($x1015->extensible) || $x1015->extensible)) {$x1015->properties['setHours'] = $x1020; $x1020 =& $x1015->properties['setHours']; $x1015->attributes['setHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1020 = FALSE; $W1020 = TRUE; }
if (isset($S1020)) {
$x1023 = $S1020->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1024 = $x1023($global, $x1015, $S1020, array($x1014), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1022 = $x1024;
} else {
if (!$U1020) {$x1022 = $x1014;if ($W1020) { $x1020 = $x1014; }  }
else { $x1022 = JS::$undefined; }
}
if (isset($x1015->class) && $x1015->class === 'Array' &&  is_int('setHours') && 'setHours' >= $x1015->properties['length']) { $x1015->properties['length'] = 'setHours' + 1; };
unset($x1025, $W1025, $S1025, $U1025);
$x1026 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 239, 34, '<image>/09_date.js');
$x1025 =& $x1026[0]; list(,$W1025,$S1025,$U1025) = $x1026;
unset($x1027, $W1027, $S1027, $U1027);
$x1028 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1025, (string) 'getUTCFullYear', 239, 44, '<image>/09_date.js');
$x1027 =& $x1028[0]; list(,$W1027,$S1027,$U1027) = $x1028;
unset($x1029, $W1029, $S1029, $U1029);
$x1030 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 239, 5, '<image>/09_date.js');
$x1029 =& $x1030[0]; list(,$W1029,$S1029,$U1029) = $x1030;
if ($x1029 === JS::$undefined || $x1029 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1031 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 239, 28, '<image>/09_date.js');
$_TypeError =& $x1031[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1031;
$x1032 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1033 = $x1032($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1033->class) && $x1033->class === 'Error' && !isset($x1033->properties['file']) && !isset($x1033->properties['line']) && !isset($x1033->properties['column'])) {$x1033->properties['file'] = '<image>/09_date.js';$x1033->properties['line'] = 239;$x1033->properties['column'] = 28;$x1033->attributes['file'] = $x1033->attributes['line'] = $x1033->attributes['column'] = 0; }
throw new JSException($x1033, 239, 28, '<image>/09_date.js');
}
$x1029 = JS::toObject($x1029, $global);
unset($x1034, $W1034, $S1034, $U1034);
$x1035 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1029, (string) 'setUTCHours', 239, 28, '<image>/09_date.js');
$x1034 =& $x1035[0]; list(,$W1034,$S1034,$U1034) = $x1035;
if ($U1034 && (!isset($x1029->extensible) || $x1029->extensible)) {$x1029->properties['setUTCHours'] = $x1034; $x1034 =& $x1029->properties['setUTCHours']; $x1029->attributes['setUTCHours'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1034 = FALSE; $W1034 = TRUE; }
if (isset($S1034)) {
$x1037 = $S1034->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1038 = $x1037($global, $x1029, $S1034, array($x1027), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1036 = $x1038;
} else {
if (!$U1034) {$x1036 = $x1027;if ($W1034) { $x1034 = $x1027; }  }
else { $x1036 = JS::$undefined; }
}
if (isset($x1029->class) && $x1029->class === 'Array' &&  is_int('setUTCHours') && 'setUTCHours' >= $x1029->properties['length']) { $x1029->properties['length'] = 'setUTCHours' + 1; };
$x1120 = clone JS::$functionTemplate; $x1120->call = '_a3686fcdd5b5a69538641de6dddfbea8_28'; $x1120->parameters = array (
  0 => 'date',
); $x1120->scope = $scope; $x1120->properties['prototype'] = clone JS::$objectTemplate; $x1120->attributes['prototype'] = JS::WRITABLE; $x1120->properties['prototype']->properties['constructor'] = $x1120; $x1120->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1120->properties['length'] = 1; $x1120->attributes['length'] = 0;
unset($x1121, $W1121, $S1121, $U1121);
$x1122 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 241, 5, '<image>/09_date.js');
$x1121 =& $x1122[0]; list(,$W1121,$S1121,$U1121) = $x1122;
if ($x1121 === JS::$undefined || $x1121 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1123 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 241, 24, '<image>/09_date.js');
$_TypeError =& $x1123[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1123;
$x1124 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1125 = $x1124($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1125->class) && $x1125->class === 'Error' && !isset($x1125->properties['file']) && !isset($x1125->properties['line']) && !isset($x1125->properties['column'])) {$x1125->properties['file'] = '<image>/09_date.js';$x1125->properties['line'] = 241;$x1125->properties['column'] = 24;$x1125->attributes['file'] = $x1125->attributes['line'] = $x1125->attributes['column'] = 0; }
throw new JSException($x1125, 241, 24, '<image>/09_date.js');
}
$x1121 = JS::toObject($x1121, $global);
unset($x1126, $W1126, $S1126, $U1126);
$x1127 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1121, (string) 'setDate', 241, 24, '<image>/09_date.js');
$x1126 =& $x1127[0]; list(,$W1126,$S1126,$U1126) = $x1127;
if ($U1126 && (!isset($x1121->extensible) || $x1121->extensible)) {$x1121->properties['setDate'] = $x1126; $x1126 =& $x1121->properties['setDate']; $x1121->attributes['setDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1126 = FALSE; $W1126 = TRUE; }
if (isset($S1126)) {
$x1129 = $S1126->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1130 = $x1129($global, $x1121, $S1126, array($x1120), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1128 = $x1130;
} else {
if (!$U1126) {$x1128 = $x1120;if ($W1126) { $x1126 = $x1120; }  }
else { $x1128 = JS::$undefined; }
}
if (isset($x1121->class) && $x1121->class === 'Array' &&  is_int('setDate') && 'setDate' >= $x1121->properties['length']) { $x1121->properties['length'] = 'setDate' + 1; };
unset($x1131, $W1131, $S1131, $U1131);
$x1132 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 252, 33, '<image>/09_date.js');
$x1131 =& $x1132[0]; list(,$W1131,$S1131,$U1131) = $x1132;
unset($x1133, $W1133, $S1133, $U1133);
$x1134 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1131, (string) 'getUTCFullYear', 252, 43, '<image>/09_date.js');
$x1133 =& $x1134[0]; list(,$W1133,$S1133,$U1133) = $x1134;
unset($x1135, $W1135, $S1135, $U1135);
$x1136 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 252, 5, '<image>/09_date.js');
$x1135 =& $x1136[0]; list(,$W1135,$S1135,$U1135) = $x1136;
if ($x1135 === JS::$undefined || $x1135 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1137 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 252, 27, '<image>/09_date.js');
$_TypeError =& $x1137[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1137;
$x1138 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1139 = $x1138($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1139->class) && $x1139->class === 'Error' && !isset($x1139->properties['file']) && !isset($x1139->properties['line']) && !isset($x1139->properties['column'])) {$x1139->properties['file'] = '<image>/09_date.js';$x1139->properties['line'] = 252;$x1139->properties['column'] = 27;$x1139->attributes['file'] = $x1139->attributes['line'] = $x1139->attributes['column'] = 0; }
throw new JSException($x1139, 252, 27, '<image>/09_date.js');
}
$x1135 = JS::toObject($x1135, $global);
unset($x1140, $W1140, $S1140, $U1140);
$x1141 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1135, (string) 'setUTCDate', 252, 27, '<image>/09_date.js');
$x1140 =& $x1141[0]; list(,$W1140,$S1140,$U1140) = $x1141;
if ($U1140 && (!isset($x1135->extensible) || $x1135->extensible)) {$x1135->properties['setUTCDate'] = $x1140; $x1140 =& $x1135->properties['setUTCDate']; $x1135->attributes['setUTCDate'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1140 = FALSE; $W1140 = TRUE; }
if (isset($S1140)) {
$x1143 = $S1140->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1144 = $x1143($global, $x1135, $S1140, array($x1133), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1142 = $x1144;
} else {
if (!$U1140) {$x1142 = $x1133;if ($W1140) { $x1140 = $x1133; }  }
else { $x1142 = JS::$undefined; }
}
if (isset($x1135->class) && $x1135->class === 'Array' &&  is_int('setUTCDate') && 'setUTCDate' >= $x1135->properties['length']) { $x1135->properties['length'] = 'setUTCDate' + 1; };
$x1227 = clone JS::$functionTemplate; $x1227->call = '_a3686fcdd5b5a69538641de6dddfbea8_29'; $x1227->parameters = array (
  0 => 'month',
  1 => 'date',
); $x1227->scope = $scope; $x1227->properties['prototype'] = clone JS::$objectTemplate; $x1227->attributes['prototype'] = JS::WRITABLE; $x1227->properties['prototype']->properties['constructor'] = $x1227; $x1227->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1227->properties['length'] = 2; $x1227->attributes['length'] = 0;
unset($x1228, $W1228, $S1228, $U1228);
$x1229 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 254, 5, '<image>/09_date.js');
$x1228 =& $x1229[0]; list(,$W1228,$S1228,$U1228) = $x1229;
if ($x1228 === JS::$undefined || $x1228 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1230 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 254, 25, '<image>/09_date.js');
$_TypeError =& $x1230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1230;
$x1231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1232 = $x1231($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1232->class) && $x1232->class === 'Error' && !isset($x1232->properties['file']) && !isset($x1232->properties['line']) && !isset($x1232->properties['column'])) {$x1232->properties['file'] = '<image>/09_date.js';$x1232->properties['line'] = 254;$x1232->properties['column'] = 25;$x1232->attributes['file'] = $x1232->attributes['line'] = $x1232->attributes['column'] = 0; }
throw new JSException($x1232, 254, 25, '<image>/09_date.js');
}
$x1228 = JS::toObject($x1228, $global);
unset($x1233, $W1233, $S1233, $U1233);
$x1234 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1228, (string) 'setMonth', 254, 25, '<image>/09_date.js');
$x1233 =& $x1234[0]; list(,$W1233,$S1233,$U1233) = $x1234;
if ($U1233 && (!isset($x1228->extensible) || $x1228->extensible)) {$x1228->properties['setMonth'] = $x1233; $x1233 =& $x1228->properties['setMonth']; $x1228->attributes['setMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1233 = FALSE; $W1233 = TRUE; }
if (isset($S1233)) {
$x1236 = $S1233->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1237 = $x1236($global, $x1228, $S1233, array($x1227), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1235 = $x1237;
} else {
if (!$U1233) {$x1235 = $x1227;if ($W1233) { $x1233 = $x1227; }  }
else { $x1235 = JS::$undefined; }
}
if (isset($x1228->class) && $x1228->class === 'Array' &&  is_int('setMonth') && 'setMonth' >= $x1228->properties['length']) { $x1228->properties['length'] = 'setMonth' + 1; };
unset($x1238, $W1238, $S1238, $U1238);
$x1239 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 269, 34, '<image>/09_date.js');
$x1238 =& $x1239[0]; list(,$W1238,$S1238,$U1238) = $x1239;
unset($x1240, $W1240, $S1240, $U1240);
$x1241 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1238, (string) 'getUTCFullYear', 269, 44, '<image>/09_date.js');
$x1240 =& $x1241[0]; list(,$W1240,$S1240,$U1240) = $x1241;
unset($x1242, $W1242, $S1242, $U1242);
$x1243 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 269, 5, '<image>/09_date.js');
$x1242 =& $x1243[0]; list(,$W1242,$S1242,$U1242) = $x1243;
if ($x1242 === JS::$undefined || $x1242 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1244 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 269, 28, '<image>/09_date.js');
$_TypeError =& $x1244[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1244;
$x1245 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1246 = $x1245($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1246->class) && $x1246->class === 'Error' && !isset($x1246->properties['file']) && !isset($x1246->properties['line']) && !isset($x1246->properties['column'])) {$x1246->properties['file'] = '<image>/09_date.js';$x1246->properties['line'] = 269;$x1246->properties['column'] = 28;$x1246->attributes['file'] = $x1246->attributes['line'] = $x1246->attributes['column'] = 0; }
throw new JSException($x1246, 269, 28, '<image>/09_date.js');
}
$x1242 = JS::toObject($x1242, $global);
unset($x1247, $W1247, $S1247, $U1247);
$x1248 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1242, (string) 'setUTCMonth', 269, 28, '<image>/09_date.js');
$x1247 =& $x1248[0]; list(,$W1247,$S1247,$U1247) = $x1248;
if ($U1247 && (!isset($x1242->extensible) || $x1242->extensible)) {$x1242->properties['setUTCMonth'] = $x1247; $x1247 =& $x1242->properties['setUTCMonth']; $x1242->attributes['setUTCMonth'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1247 = FALSE; $W1247 = TRUE; }
if (isset($S1247)) {
$x1250 = $S1247->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1251 = $x1250($global, $x1242, $S1247, array($x1240), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1249 = $x1251;
} else {
if (!$U1247) {$x1249 = $x1240;if ($W1247) { $x1247 = $x1240; }  }
else { $x1249 = JS::$undefined; }
}
if (isset($x1242->class) && $x1242->class === 'Array' &&  is_int('setUTCMonth') && 'setUTCMonth' >= $x1242->properties['length']) { $x1242->properties['length'] = 'setUTCMonth' + 1; };
$x1335 = clone JS::$functionTemplate; $x1335->call = '_a3686fcdd5b5a69538641de6dddfbea8_30'; $x1335->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
); $x1335->scope = $scope; $x1335->properties['prototype'] = clone JS::$objectTemplate; $x1335->attributes['prototype'] = JS::WRITABLE; $x1335->properties['prototype']->properties['constructor'] = $x1335; $x1335->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1335->properties['length'] = 3; $x1335->attributes['length'] = 0;
unset($x1336, $W1336, $S1336, $U1336);
$x1337 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 271, 5, '<image>/09_date.js');
$x1336 =& $x1337[0]; list(,$W1336,$S1336,$U1336) = $x1337;
if ($x1336 === JS::$undefined || $x1336 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1338 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 271, 28, '<image>/09_date.js');
$_TypeError =& $x1338[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1338;
$x1339 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1340 = $x1339($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1340->class) && $x1340->class === 'Error' && !isset($x1340->properties['file']) && !isset($x1340->properties['line']) && !isset($x1340->properties['column'])) {$x1340->properties['file'] = '<image>/09_date.js';$x1340->properties['line'] = 271;$x1340->properties['column'] = 28;$x1340->attributes['file'] = $x1340->attributes['line'] = $x1340->attributes['column'] = 0; }
throw new JSException($x1340, 271, 28, '<image>/09_date.js');
}
$x1336 = JS::toObject($x1336, $global);
unset($x1341, $W1341, $S1341, $U1341);
$x1342 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1336, (string) 'setFullYear', 271, 28, '<image>/09_date.js');
$x1341 =& $x1342[0]; list(,$W1341,$S1341,$U1341) = $x1342;
if ($U1341 && (!isset($x1336->extensible) || $x1336->extensible)) {$x1336->properties['setFullYear'] = $x1341; $x1341 =& $x1336->properties['setFullYear']; $x1336->attributes['setFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1341 = FALSE; $W1341 = TRUE; }
if (isset($S1341)) {
$x1344 = $S1341->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1345 = $x1344($global, $x1336, $S1341, array($x1335), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1343 = $x1345;
} else {
if (!$U1341) {$x1343 = $x1335;if ($W1341) { $x1341 = $x1335; }  }
else { $x1343 = JS::$undefined; }
}
if (isset($x1336->class) && $x1336->class === 'Array' &&  is_int('setFullYear') && 'setFullYear' >= $x1336->properties['length']) { $x1336->properties['length'] = 'setFullYear' + 1; };
unset($x1346, $W1346, $S1346, $U1346);
$x1347 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 290, 37, '<image>/09_date.js');
$x1346 =& $x1347[0]; list(,$W1346,$S1346,$U1346) = $x1347;
unset($x1348, $W1348, $S1348, $U1348);
$x1349 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1346, (string) 'getUTCFullYear', 290, 47, '<image>/09_date.js');
$x1348 =& $x1349[0]; list(,$W1348,$S1348,$U1348) = $x1349;
unset($x1350, $W1350, $S1350, $U1350);
$x1351 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 290, 5, '<image>/09_date.js');
$x1350 =& $x1351[0]; list(,$W1350,$S1350,$U1350) = $x1351;
if ($x1350 === JS::$undefined || $x1350 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1352 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 290, 31, '<image>/09_date.js');
$_TypeError =& $x1352[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1352;
$x1353 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1354 = $x1353($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1354->class) && $x1354->class === 'Error' && !isset($x1354->properties['file']) && !isset($x1354->properties['line']) && !isset($x1354->properties['column'])) {$x1354->properties['file'] = '<image>/09_date.js';$x1354->properties['line'] = 290;$x1354->properties['column'] = 31;$x1354->attributes['file'] = $x1354->attributes['line'] = $x1354->attributes['column'] = 0; }
throw new JSException($x1354, 290, 31, '<image>/09_date.js');
}
$x1350 = JS::toObject($x1350, $global);
unset($x1355, $W1355, $S1355, $U1355);
$x1356 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1350, (string) 'setUTCFullYear', 290, 31, '<image>/09_date.js');
$x1355 =& $x1356[0]; list(,$W1355,$S1355,$U1355) = $x1356;
if ($U1355 && (!isset($x1350->extensible) || $x1350->extensible)) {$x1350->properties['setUTCFullYear'] = $x1355; $x1355 =& $x1350->properties['setUTCFullYear']; $x1350->attributes['setUTCFullYear'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1355 = FALSE; $W1355 = TRUE; }
if (isset($S1355)) {
$x1358 = $S1355->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1359 = $x1358($global, $x1350, $S1355, array($x1348), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1357 = $x1359;
} else {
if (!$U1355) {$x1357 = $x1348;if ($W1355) { $x1355 = $x1348; }  }
else { $x1357 = JS::$undefined; }
}
if (isset($x1350->class) && $x1350->class === 'Array' &&  is_int('setUTCFullYear') && 'setUTCFullYear' >= $x1350->properties['length']) { $x1350->properties['length'] = 'setUTCFullYear' + 1; };
unset($x1360, $W1360, $S1360, $U1360);
$x1361 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 292, 34, '<image>/09_date.js');
$x1360 =& $x1361[0]; list(,$W1360,$S1360,$U1360) = $x1361;
unset($x1362, $W1362, $S1362, $U1362);
$x1363 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1360, (string) 'getUTCFullYear', 292, 44, '<image>/09_date.js');
$x1362 =& $x1363[0]; list(,$W1362,$S1362,$U1362) = $x1363;
unset($x1364, $W1364, $S1364, $U1364);
$x1365 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 292, 5, '<image>/09_date.js');
$x1364 =& $x1365[0]; list(,$W1364,$S1364,$U1364) = $x1365;
if ($x1364 === JS::$undefined || $x1364 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1366 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 292, 28, '<image>/09_date.js');
$_TypeError =& $x1366[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1366;
$x1367 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1368 = $x1367($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1368->class) && $x1368->class === 'Error' && !isset($x1368->properties['file']) && !isset($x1368->properties['line']) && !isset($x1368->properties['column'])) {$x1368->properties['file'] = '<image>/09_date.js';$x1368->properties['line'] = 292;$x1368->properties['column'] = 28;$x1368->attributes['file'] = $x1368->attributes['line'] = $x1368->attributes['column'] = 0; }
throw new JSException($x1368, 292, 28, '<image>/09_date.js');
}
$x1364 = JS::toObject($x1364, $global);
unset($x1369, $W1369, $S1369, $U1369);
$x1370 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1364, (string) 'toUTCString', 292, 28, '<image>/09_date.js');
$x1369 =& $x1370[0]; list(,$W1369,$S1369,$U1369) = $x1370;
if ($U1369 && (!isset($x1364->extensible) || $x1364->extensible)) {$x1364->properties['toUTCString'] = $x1369; $x1369 =& $x1364->properties['toUTCString']; $x1364->attributes['toUTCString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1369 = FALSE; $W1369 = TRUE; }
if (isset($S1369)) {
$x1372 = $S1369->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1373 = $x1372($global, $x1364, $S1369, array($x1362), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1371 = $x1373;
} else {
if (!$U1369) {$x1371 = $x1362;if ($W1369) { $x1369 = $x1362; }  }
else { $x1371 = JS::$undefined; }
}
if (isset($x1364->class) && $x1364->class === 'Array' &&  is_int('toUTCString') && 'toUTCString' >= $x1364->properties['length']) { $x1364->properties['length'] = 'toUTCString' + 1; };
$x1376 = clone JS::$functionTemplate; $x1376->call = '_a3686fcdd5b5a69538641de6dddfbea8_31'; $x1376->parameters = array (
); $x1376->scope = $scope; $x1376->properties['prototype'] = clone JS::$objectTemplate; $x1376->attributes['prototype'] = JS::WRITABLE; $x1376->properties['prototype']->properties['constructor'] = $x1376; $x1376->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1376->properties['length'] = 0; $x1376->attributes['length'] = 0;
unset($x1377, $W1377, $S1377, $U1377);
$x1378 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 294, 5, '<image>/09_date.js');
$x1377 =& $x1378[0]; list(,$W1377,$S1377,$U1377) = $x1378;
if ($x1377 === JS::$undefined || $x1377 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1379 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 294, 28, '<image>/09_date.js');
$_TypeError =& $x1379[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1379;
$x1380 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1381 = $x1380($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1381->class) && $x1381->class === 'Error' && !isset($x1381->properties['file']) && !isset($x1381->properties['line']) && !isset($x1381->properties['column'])) {$x1381->properties['file'] = '<image>/09_date.js';$x1381->properties['line'] = 294;$x1381->properties['column'] = 28;$x1381->attributes['file'] = $x1381->attributes['line'] = $x1381->attributes['column'] = 0; }
throw new JSException($x1381, 294, 28, '<image>/09_date.js');
}
$x1377 = JS::toObject($x1377, $global);
unset($x1382, $W1382, $S1382, $U1382);
$x1383 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1377, (string) 'toISOString', 294, 28, '<image>/09_date.js');
$x1382 =& $x1383[0]; list(,$W1382,$S1382,$U1382) = $x1383;
if ($U1382 && (!isset($x1377->extensible) || $x1377->extensible)) {$x1377->properties['toISOString'] = $x1382; $x1382 =& $x1377->properties['toISOString']; $x1377->attributes['toISOString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1382 = FALSE; $W1382 = TRUE; }
if (isset($S1382)) {
$x1385 = $S1382->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1386 = $x1385($global, $x1377, $S1382, array($x1376), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1384 = $x1386;
} else {
if (!$U1382) {$x1384 = $x1376;if ($W1382) { $x1382 = $x1376; }  }
else { $x1384 = JS::$undefined; }
}
if (isset($x1377->class) && $x1377->class === 'Array' &&  is_int('toISOString') && 'toISOString' >= $x1377->properties['length']) { $x1377->properties['length'] = 'toISOString' + 1; };
$x1400 = clone JS::$functionTemplate; $x1400->call = '_a3686fcdd5b5a69538641de6dddfbea8_32'; $x1400->parameters = array (
  0 => 'key',
); $x1400->scope = $scope; $x1400->properties['prototype'] = clone JS::$objectTemplate; $x1400->attributes['prototype'] = JS::WRITABLE; $x1400->properties['prototype']->properties['constructor'] = $x1400; $x1400->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1400->properties['length'] = 1; $x1400->attributes['length'] = 0;
unset($x1401, $W1401, $S1401, $U1401);
$x1402 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, (string) 'prototype', 301, 5, '<image>/09_date.js');
$x1401 =& $x1402[0]; list(,$W1401,$S1401,$U1401) = $x1402;
if ($x1401 === JS::$undefined || $x1401 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1403 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, (string) 'TypeError', 301, 23, '<image>/09_date.js');
$_TypeError =& $x1403[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1403;
$x1404 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1405 = $x1404($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1405->class) && $x1405->class === 'Error' && !isset($x1405->properties['file']) && !isset($x1405->properties['line']) && !isset($x1405->properties['column'])) {$x1405->properties['file'] = '<image>/09_date.js';$x1405->properties['line'] = 301;$x1405->properties['column'] = 23;$x1405->attributes['file'] = $x1405->attributes['line'] = $x1405->attributes['column'] = 0; }
throw new JSException($x1405, 301, 23, '<image>/09_date.js');
}
$x1401 = JS::toObject($x1401, $global);
unset($x1406, $W1406, $S1406, $U1406);
$x1407 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1401, (string) 'toJSON', 301, 23, '<image>/09_date.js');
$x1406 =& $x1407[0]; list(,$W1406,$S1406,$U1406) = $x1407;
if ($U1406 && (!isset($x1401->extensible) || $x1401->extensible)) {$x1401->properties['toJSON'] = $x1406; $x1406 =& $x1401->properties['toJSON']; $x1401->attributes['toJSON'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1406 = FALSE; $W1406 = TRUE; }
if (isset($S1406)) {
$x1409 = $S1406->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1410 = $x1409($global, $x1401, $S1406, array($x1400), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1408 = $x1410;
} else {
if (!$U1406) {$x1408 = $x1400;if ($W1406) { $x1406 = $x1400; }  }
else { $x1408 = JS::$undefined; }
}
if (isset($x1401->class) && $x1401->class === 'Array' &&  is_int('toJSON') && 'toJSON' >= $x1401->properties['length']) { $x1401->properties['length'] = 'toJSON' + 1; };
;
return JS::$undefined;
}
