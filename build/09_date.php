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
$x8 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x8=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x8[0];list(,$WTypeError,$STypeError,$UTypeError)=$x8;$x9=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x10->class)&&$x10->class===\'Error\'&&!isset($x10->properties[\'file\'])&&!isset($x10->properties[\'line\'])&&!isset($x10->properties[\'column\'])){$x10->properties[\'file\']=$file;$x10->properties[\'line\']=$line;$x10->properties[\'column\']=$column;$x10->attributes[\'file\']=$x10->attributes[\'line\']=$x10->attributes[\'column\']=0;}throw new JSException($x10,$line,$column,$file);}$W5=$S5=$U5=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x5=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x11=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x5=$x12;}else{$x5=JS::$undefined;$U5=TRUE;}return array(&$x5,$W5,$S5,$U5);}', "\n";
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
$x13 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 3, 11, '<image>/09_date.js');
$x5 =& $x13[0]; list(,$W5,$S5,$U5) = $x13;
$x4 = $x5;
$x3->prototype = $x4;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 3, 11, '<image>/09_date.js');
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
$x20 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 3, 77, '<image>/09_date.js');
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
$x24 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x19, JS::toString('toString', $global), 3, 77, '<image>/09_date.js');
$x23 =& $x24[0]; list(,$W23,$S23,$U23) = $x24;
if (!(is_object($x23) && isset($x23->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x27 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 3, 77, '<image>/09_date.js');
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
$x33 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('arguments', $global), 15, 15, '<image>/09_date.js');
$_arguments =& $x33[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x33;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x34 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 15, 15, '<image>/09_date.js');
$_ReferenceError =& $x34[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x34;
$x35 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 15, 15);
$x36 = $x35($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/09_date.js';$x36->properties['line'] = 15;$x36->properties['column'] = 15;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 15, 15, '<image>/09_date.js');
}
unset($x37, $W37, $S37, $U37);
$x38 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_arguments, JS::toString(0, $global), 15, 24, '<image>/09_date.js');
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
$x45 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_value, JS::toString('valueOf', $global), 17, 20, '<image>/09_date.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
$x46 = $x44;
$x46 = ($x46 === JS::$undefined ? 'undefined' : (is_int($x46) || is_float($x46) ? 'number' : (is_bool($x46) ? 'boolean' : (is_string($x46) ? 'string' : (is_object($x46) && isset($x46->call) ? 'function' : 'object')))));
$x43 = (((gettype($x46) === gettype('function') && $x46 === 'function'))|| (((is_float($x46) || is_int($x46)) && (is_float('function') || is_int('function'))) && $x46 == 'function'));
if (JS::toBoolean($x43, $global)) {
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 18, 26, '<image>/09_date.js');
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
$x52 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x47, JS::toString('valueOf', $global), 18, 26, '<image>/09_date.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if (!(is_object($x51) && isset($x51->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x55 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 18, 26, '<image>/09_date.js');
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
$x60 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_value, JS::toString('toString', $global), 20, 27, '<image>/09_date.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
$x61 = $x59;
$x61 = ($x61 === JS::$undefined ? 'undefined' : (is_int($x61) || is_float($x61) ? 'number' : (is_bool($x61) ? 'boolean' : (is_string($x61) ? 'string' : (is_object($x61) && isset($x61->call) ? 'function' : 'object')))));
$x58 = (((gettype($x61) === gettype('function') && $x61 === 'function'))|| (((is_float($x61) || is_int($x61)) && (is_float('function') || is_int('function'))) && $x61 == 'function'));
if (JS::toBoolean($x58, $global)) {
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 21, 27, '<image>/09_date.js');
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
$x67 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x62, JS::toString('toString', $global), 21, 27, '<image>/09_date.js');
$x66 =& $x67[0]; list(,$W66,$S66,$U66) = $x67;
if (!(is_object($x66) && isset($x66->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 21, 27, '<image>/09_date.js');
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
$x75 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 24, 15, '<image>/09_date.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x76 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 24, 15, '<image>/09_date.js');
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
$x80 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_TypeError, JS::toString('prototype', $global), 24, 11, '<image>/09_date.js');
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
$x89 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 22, '<image>/09_date.js');
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
$x93 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x88, JS::toString('parse', $global), 31, 22, '<image>/09_date.js');
$x92 =& $x93[0]; list(,$W92,$S92,$U92) = $x93;
if (!(is_object($x92) && isset($x92->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x96 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 22, '<image>/09_date.js');
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$scope->properties[\'Date\']=$fn;$_Date=&$scope->properties[\'Date\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){$x3=clone JS::$objectTemplate;unset($x5,$W5,$S5,$U5);$x13=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),3,11,\'<image>/09_date.js\');$x5=&$x13[0];list(,$W5,$S5,$U5)=$x13;$x4=$x5;$x3->prototype=$x4;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),3,11,\'<image>/09_date.js\');$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x18=$x17($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=\'<image>/09_date.js\';$x18->properties[\'line\']=3;$x18->properties[\'column\']=11;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,3,11,\'<image>/09_date.js\');}$x14=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,11);$x15=$x14($global,$x3,$_Date,array($_year,$_month,$_date,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x4=$x15;if(is_object($x4)&&$x4!==JS::$undefined){$x3=$x4;}if($x3===JS::$undefined||$x3===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),3,77,\'<image>/09_date.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;$x21=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x22=$x21($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x22->class)&&$x22->class===\'Error\'&&!isset($x22->properties[\'file\'])&&!isset($x22->properties[\'line\'])&&!isset($x22->properties[\'column\'])){$x22->properties[\'file\']=\'<image>/09_date.js\';$x22->properties[\'line\']=3;$x22->properties[\'column\']=77;$x22->attributes[\'file\']=$x22->attributes[\'line\']=$x22->attributes[\'column\']=0;}throw new JSException($x22,3,77,\'<image>/09_date.js\');}$x19=JS::toObject($x3,$global);unset($x23,$W23,$S23,$U23);$x24=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x19,JS::toString(\'toString\',$global),3,77,\'<image>/09_date.js\');$x23=&$x24[0];list(,$W23,$S23,$U23)=$x24;if(!(is_object($x23)&&isset($x23->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),3,77,\'<image>/09_date.js\');$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x29=$x28($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'&&!isset($x29->properties[\'file\'])&&!isset($x29->properties[\'line\'])&&!isset($x29->properties[\'column\'])){$x29->properties[\'file\']=\'<image>/09_date.js\';$x29->properties[\'line\']=3;$x29->properties[\'column\']=77;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,3,77,\'<image>/09_date.js\');}$x25=$x23->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',3,77);$x26=$x25($global,$x19,$x23,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x26;}$x30=clone JS::$objectTemplate;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=$x30;$_d->prototype=$_Date->properties[\'prototype\'];$_d->class=\'Date\';$_d->extensible=TRUE;$x31=(((gettype($_year)===gettype(JS::$undefined)&&$_year===JS::$undefined))||(((is_float($_year)||is_int($_year))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_year==JS::$undefined));if(JS::toBoolean($x31,$global)){$_d->value=time();}else{$x32=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x32,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x33=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'arguments\',$global),15,15,\'<image>/09_date.js\');$_arguments=&$x33[0];list(,$Warguments,$Sarguments,$Uarguments)=$x33;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x34=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),15,15,\'<image>/09_date.js\');$_ReferenceError=&$x34[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x34;$x35=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',15,15);$x36=$x35($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x36->class)&&$x36->class===\'Error\'&&!isset($x36->properties[\'file\'])&&!isset($x36->properties[\'line\'])&&!isset($x36->properties[\'column\'])){$x36->properties[\'file\']=\'<image>/09_date.js\';$x36->properties[\'line\']=15;$x36->properties[\'column\']=15;$x36->attributes[\'file\']=$x36->attributes[\'line\']=$x36->attributes[\'column\']=0;}throw new JSException($x36,15,15,\'<image>/09_date.js\');}unset($x37,$W37,$S37,$U37);$x38=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_arguments,JS::toString(0,$global),15,24,\'<image>/09_date.js\');$x37=&$x38[0];list(,$W37,$S37,$U37)=$x38;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x37;$x41=$_value;$x41=($x41===JS::$undefined?\'undefined\':(is_int($x41)||is_float($x41)?\'number\':(is_bool($x41)?\'boolean\':(is_string($x41)?\'string\':(is_object($x41)&&isset($x41->call)?\'function\':\'object\')))));$x40=(((gettype($x41)===gettype(\'object\')&&$x41===\'object\'))||(((is_float($x41)||is_int($x41))&&(is_float(\'object\')||is_int(\'object\')))&&$x41==\'object\'));$x39=$x40;if(JS::toBoolean($x39,$global)){$x42=!(((gettype($_value)===gettype(NULL)&&$_value===NULL))||(((is_float($_value)||is_int($_value))&&(is_float(NULL)||is_int(NULL)))&&$_value==NULL));$x39=$x42;}if(JS::toBoolean($x39,$global)){unset($x44,$W44,$S44,$U44);$x45=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,JS::toString(\'valueOf\',$global),17,20,\'<image>/09_date.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;$x46=$x44;$x46=($x46===JS::$undefined?\'undefined\':(is_int($x46)||is_float($x46)?\'number\':(is_bool($x46)?\'boolean\':(is_string($x46)?\'string\':(is_object($x46)&&isset($x46->call)?\'function\':\'object\')))));$x43=(((gettype($x46)===gettype(\'function\')&&$x46===\'function\'))||(((is_float($x46)||is_int($x46))&&(is_float(\'function\')||is_int(\'function\')))&&$x46==\'function\'));if(JS::toBoolean($x43,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),18,26,\'<image>/09_date.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x50=$x49($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'&&!isset($x50->properties[\'file\'])&&!isset($x50->properties[\'line\'])&&!isset($x50->properties[\'column\'])){$x50->properties[\'file\']=\'<image>/09_date.js\';$x50->properties[\'line\']=18;$x50->properties[\'column\']=26;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,18,26,\'<image>/09_date.js\');}$x47=JS::toObject($_value,$global);unset($x51,$W51,$S51,$U51);$x52=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x47,JS::toString(\'valueOf\',$global),18,26,\'<image>/09_date.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if(!(is_object($x51)&&isset($x51->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x55=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),18,26,\'<image>/09_date.js\');$_TypeError=&$x55[0];list(,$WTypeError,$STypeError,$UTypeError)=$x55;$x56=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x57=$x56($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x57->class)&&$x57->class===\'Error\'&&!isset($x57->properties[\'file\'])&&!isset($x57->properties[\'line\'])&&!isset($x57->properties[\'column\'])){$x57->properties[\'file\']=\'<image>/09_date.js\';$x57->properties[\'line\']=18;$x57->properties[\'column\']=26;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,18,26,\'<image>/09_date.js\');}$x53=$x51->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',18,26);$x54=$x53($global,$x47,$x51,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x54;}else{unset($x59,$W59,$S59,$U59);$x60=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_value,JS::toString(\'toString\',$global),20,27,\'<image>/09_date.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;$x61=$x59;$x61=($x61===JS::$undefined?\'undefined\':(is_int($x61)||is_float($x61)?\'number\':(is_bool($x61)?\'boolean\':(is_string($x61)?\'string\':(is_object($x61)&&isset($x61->call)?\'function\':\'object\')))));$x58=(((gettype($x61)===gettype(\'function\')&&$x61===\'function\'))||(((is_float($x61)||is_int($x61))&&(is_float(\'function\')||is_int(\'function\')))&&$x61==\'function\'));if(JS::toBoolean($x58,$global)){if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),21,27,\'<image>/09_date.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x65=$x64($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=\'<image>/09_date.js\';$x65->properties[\'line\']=21;$x65->properties[\'column\']=27;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,21,27,\'<image>/09_date.js\');}$x62=JS::toObject($_value,$global);unset($x66,$W66,$S66,$U66);$x67=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x62,JS::toString(\'toString\',$global),21,27,\'<image>/09_date.js\');$x66=&$x67[0];list(,$W66,$S66,$U66)=$x67;if(!(is_object($x66)&&isset($x66->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),21,27,\'<image>/09_date.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x72=$x71($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'&&!isset($x72->properties[\'file\'])&&!isset($x72->properties[\'line\'])&&!isset($x72->properties[\'column\'])){$x72->properties[\'file\']=\'<image>/09_date.js\';$x72->properties[\'line\']=21;$x72->properties[\'column\']=27;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,21,27,\'<image>/09_date.js\');}$x68=$x66->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',21,27);$x69=$x68($global,$x62,$x66,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x69;}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),24,15,\'<image>/09_date.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x76=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),24,15,\'<image>/09_date.js\');$_ReferenceError=&$x76[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x76;$x77=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,15);$x78=$x77($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'&&!isset($x78->properties[\'file\'])&&!isset($x78->properties[\'line\'])&&!isset($x78->properties[\'column\'])){$x78->properties[\'file\']=\'<image>/09_date.js\';$x78->properties[\'line\']=24;$x78->properties[\'column\']=15;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,24,15,\'<image>/09_date.js\');}$x73=clone JS::$objectTemplate;unset($x79,$W79,$S79,$U79);$x80=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),24,11,\'<image>/09_date.js\');$x79=&$x80[0];list(,$W79,$S79,$U79)=$x80;$x74=$x79;$x73->prototype=$x74;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/09_date.js\';$x84->properties[\'line\']=24;$x84->properties[\'column\']=11;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,24,11,\'<image>/09_date.js\');}$x81=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',24,11);$x82=$x81($global,$x73,$_TypeError,array(\'Date(): cannot get value of object argument given\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x74=$x82;if(is_object($x74)&&$x74!==JS::$undefined){$x73=$x74;}if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/09_date.js\';$x73->properties[\'line\']=24;$x73->properties[\'column\']=5;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,24,5,\'<image>/09_date.js\');}}}else{$x85=JS::toPrimitive($_value,$global);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x85;}$x87=$_value;$x87=($x87===JS::$undefined?\'undefined\':(is_int($x87)||is_float($x87)?\'number\':(is_bool($x87)?\'boolean\':(is_string($x87)?\'string\':(is_object($x87)&&isset($x87->call)?\'function\':\'object\')))));$x86=(((gettype($x87)===gettype(\'string\')&&$x87===\'string\'))||(((is_float($x87)||is_int($x87))&&(is_float(\'string\')||is_int(\'string\')))&&$x87==\'string\'));if(JS::toBoolean($x86,$global)){if($_Date===JS::$undefined||$_Date===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x89=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,22,\'<image>/09_date.js\');$_TypeError=&$x89[0];list(,$WTypeError,$STypeError,$UTypeError)=$x89;$x90=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x91=$x90($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x91->class)&&$x91->class===\'Error\'&&!isset($x91->properties[\'file\'])&&!isset($x91->properties[\'line\'])&&!isset($x91->properties[\'column\'])){$x91->properties[\'file\']=\'<image>/09_date.js\';$x91->properties[\'line\']=31;$x91->properties[\'column\']=22;$x91->attributes[\'file\']=$x91->attributes[\'line\']=$x91->attributes[\'column\']=0;}throw new JSException($x91,31,22,\'<image>/09_date.js\');}$x88=JS::toObject($_Date,$global);unset($x92,$W92,$S92,$U92);$x93=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x88,JS::toString(\'parse\',$global),31,22,\'<image>/09_date.js\');$x92=&$x93[0];list(,$W92,$S92,$U92)=$x93;if(!(is_object($x92)&&isset($x92->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x96=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,22,\'<image>/09_date.js\');$_TypeError=&$x96[0];list(,$WTypeError,$STypeError,$UTypeError)=$x96;$x97=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x98=$x97($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x98->class)&&$x98->class===\'Error\'&&!isset($x98->properties[\'file\'])&&!isset($x98->properties[\'line\'])&&!isset($x98->properties[\'column\'])){$x98->properties[\'file\']=\'<image>/09_date.js\';$x98->properties[\'line\']=31;$x98->properties[\'column\']=22;$x98->attributes[\'file\']=$x98->attributes[\'line\']=$x98->attributes[\'column\']=0;}throw new JSException($x98,31,22,\'<image>/09_date.js\');}$x94=$x92->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',31,22);$x95=$x94($global,$x88,$x92,array($_value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x95;}$_d->value=JS::toNumber($_value,$global)/1000;}else{$x100=JS::toPrimitive($_year,$global);$x101=JS::toPrimitive(0,$global);$x102=!(is_string($x100)&&is_string($x101)?strcmp($x100,$x101)<0:(!is_nan($x103=JS::toNumber($x100,$global))&&!is_nan($x104=JS::toNumber($x101,$global))&&$x103<$x104));$x99=$x102;if(JS::toBoolean($x99,$global)){$x105=JS::toPrimitive($_year,$global);$x106=JS::toPrimitive(99,$global);$x107=!(is_string($x106)&&is_string($x105)?strcmp($x106,$x105)<0:(!is_nan($x108=JS::toNumber($x106,$global))&&!is_nan($x109=JS::toNumber($x105,$global))&&$x108<$x109));$x99=$x107;}if(JS::toBoolean($x99,$global)){$x110=1900;if($Uyear){$global->properties[\'year\']=$_year;$_year=&$global->properties[\'year\'];}$x111=JS::toPrimitive($_year,$global);$x112=JS::toPrimitive($x110,$global);$_year=(is_string($x111)||is_string($x112)?JS::toString($x111,$global).JS::toString($x112,$global):JS::toNumber($x111,$global)+JS::toNumber($x112,$global));}$x113=$_date;if(!JS::toBoolean($x113,$global)){$x113=1;}if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x113;$x114=$_hours;if(!JS::toBoolean($x114,$global)){$x114=0;}if($Uhours){$global->properties[\'hours\']=$_hours;$_hours=&$global->properties[\'hours\'];}$_hours=$x114;$x115=$_minutes;if(!JS::toBoolean($x115,$global)){$x115=0;}if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x115;$x116=$_seconds;if(!JS::toBoolean($x116,$global)){$x116=0;}if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x116;$x117=$_ms;if(!JS::toBoolean($x117,$global)){$x117=0;}if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x117;$_d->value=mktime($_hours,$_minutes,$_seconds,$_month,$_date,$_year)+$_ms/1000;}}return$_d;return JS::$undefined;}', "\n";
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
$x122 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('NaN', $global), 57, 10, '<image>/09_date.js');
$_NaN =& $x122[0]; list(,$WNaN,$SNaN,$UNaN) = $x122;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x123 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 57, 10, '<image>/09_date.js');
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x120=&$scope->properties[\'arguments\'];$x120->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x120->properties[$i]=$args[$i];$x120->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=strtotime($_string);$x121=(((gettype($_i)===gettype(false)&&$_i===false))||(((is_float($_i)||is_int($_i))&&(is_float(false)||is_int(false)))&&$_i==false));if(JS::toBoolean($x121,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x122=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'NaN\',$global),57,10,\'<image>/09_date.js\');$_NaN=&$x122[0];list(,$WNaN,$SNaN,$UNaN)=$x122;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x123=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),57,10,\'<image>/09_date.js\');$_ReferenceError=&$x123[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x123;$x124=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',57,10);$x125=$x124($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x125->class)&&$x125->class===\'Error\'&&!isset($x125->properties[\'file\'])&&!isset($x125->properties[\'line\'])&&!isset($x125->properties[\'column\'])){$x125->properties[\'file\']=\'<image>/09_date.js\';$x125->properties[\'line\']=57;$x125->properties[\'column\']=10;$x125->attributes[\'file\']=$x125->attributes[\'line\']=$x125->attributes[\'column\']=0;}throw new JSException($x125,57,10,\'<image>/09_date.js\');}return$_NaN;}return$_i*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x132 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x132[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x132;
$x133 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x134 = $x133($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error' && !isset($x134->properties['file']) && !isset($x134->properties['line']) && !isset($x134->properties['column'])) {$x134->properties['file'] = $file;$x134->properties['line'] = $line;$x134->properties['column'] = $column;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, $line, $column, $file);
}
$W131 = $S131 = $U131 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x131 =& $lookup->properties[$id]; $W131 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S131 = $lookup->setters[$id]; }
else { $x131 = JS::$undefined; $U131 = TRUE; }
return array(&$x131, $W131, $S131, $U131);
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x132=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x132[0];list(,$WTypeError,$STypeError,$UTypeError)=$x132;$x133=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x134=$x133($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x134->class)&&$x134->class===\'Error\'&&!isset($x134->properties[\'file\'])&&!isset($x134->properties[\'line\'])&&!isset($x134->properties[\'column\'])){$x134->properties[\'file\']=$file;$x134->properties[\'line\']=$line;$x134->properties[\'column\']=$column;$x134->attributes[\'file\']=$x134->attributes[\'line\']=$x134->attributes[\'column\']=0;}throw new JSException($x134,$line,$column,$file);}$W131=$S131=$U131=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x131=&$lookup->properties[$id];$W131=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S131=$lookup->setters[$id];}else{$x131=JS::$undefined;$U131=TRUE;}return array(&$x131,$W131,$S131,$U131);}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x140 =& $scope->properties['arguments'];
$x140->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x140->properties[$i] = $args[$i];
$x140->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x143 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 64, 12, '<image>/09_date.js');
$_NotImplementedError =& $x143[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x143;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x144 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 64, 12, '<image>/09_date.js');
$_ReferenceError =& $x144[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x144;
$x145 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 12);
$x146 = $x145($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x146->class) && $x146->class === 'Error' && !isset($x146->properties['file']) && !isset($x146->properties['line']) && !isset($x146->properties['column'])) {$x146->properties['file'] = '<image>/09_date.js';$x146->properties['line'] = 64;$x146->properties['column'] = 12;$x146->attributes['file'] = $x146->attributes['line'] = $x146->attributes['column'] = 0; }
throw new JSException($x146, 64, 12, '<image>/09_date.js');
}
$x141 = clone JS::$objectTemplate;
unset($x147, $W147, $S147, $U147);
$x148 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 64, 8, '<image>/09_date.js');
$x147 =& $x148[0]; list(,$W147,$S147,$U147) = $x148;
$x142 = $x147;
$x141->prototype = $x142;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x151 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 8, '<image>/09_date.js');
$_TypeError =& $x151[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x151;
$x152 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x153 = $x152($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x153->class) && $x153->class === 'Error' && !isset($x153->properties['file']) && !isset($x153->properties['line']) && !isset($x153->properties['column'])) {$x153->properties['file'] = '<image>/09_date.js';$x153->properties['line'] = 64;$x153->properties['column'] = 8;$x153->attributes['file'] = $x153->attributes['line'] = $x153->attributes['column'] = 0; }
throw new JSException($x153, 64, 8, '<image>/09_date.js');
}
$x149 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x150 = $x149($global, $x141, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x142 = $x150;
if (is_object($x142) && $x142 !== JS::$undefined) { $x141 = $x142; }
if (isset($x141->class) && $x141->class === 'Error' && !isset($x141->properties['file']) && !isset($x141->properties['line']) && !isset($x141->properties['column'])) {$x141->properties['file'] = '<image>/09_date.js';$x141->properties['line'] = 64;$x141->properties['column'] = 2;$x141->attributes['file'] = $x141->attributes['line'] = $x141->attributes['column'] = 0; }
throw new JSException($x141, 64, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x140=&$scope->properties[\'arguments\'];$x140->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x140->properties[$i]=$args[$i];$x140->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x143=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),64,12,\'<image>/09_date.js\');$_NotImplementedError=&$x143[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x143;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x144=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),64,12,\'<image>/09_date.js\');$_ReferenceError=&$x144[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x144;$x145=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,12);$x146=$x145($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x146->class)&&$x146->class===\'Error\'&&!isset($x146->properties[\'file\'])&&!isset($x146->properties[\'line\'])&&!isset($x146->properties[\'column\'])){$x146->properties[\'file\']=\'<image>/09_date.js\';$x146->properties[\'line\']=64;$x146->properties[\'column\']=12;$x146->attributes[\'file\']=$x146->attributes[\'line\']=$x146->attributes[\'column\']=0;}throw new JSException($x146,64,12,\'<image>/09_date.js\');}$x141=clone JS::$objectTemplate;unset($x147,$W147,$S147,$U147);$x148=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),64,8,\'<image>/09_date.js\');$x147=&$x148[0];list(,$W147,$S147,$U147)=$x148;$x142=$x147;$x141->prototype=$x142;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x151=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,8,\'<image>/09_date.js\');$_TypeError=&$x151[0];list(,$WTypeError,$STypeError,$UTypeError)=$x151;$x152=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x153=$x152($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x153->class)&&$x153->class===\'Error\'&&!isset($x153->properties[\'file\'])&&!isset($x153->properties[\'line\'])&&!isset($x153->properties[\'column\'])){$x153->properties[\'file\']=\'<image>/09_date.js\';$x153->properties[\'line\']=64;$x153->properties[\'column\']=8;$x153->attributes[\'file\']=$x153->attributes[\'line\']=$x153->attributes[\'column\']=0;}throw new JSException($x153,64,8,\'<image>/09_date.js\');}$x149=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x150=$x149($global,$x141,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x142=$x150;if(is_object($x142)&&$x142!==JS::$undefined){$x141=$x142;}if(isset($x141->class)&&$x141->class===\'Error\'&&!isset($x141->properties[\'file\'])&&!isset($x141->properties[\'line\'])&&!isset($x141->properties[\'column\'])){$x141->properties[\'file\']=\'<image>/09_date.js\';$x141->properties[\'line\']=64;$x141->properties[\'column\']=2;$x141->attributes[\'file\']=$x141->attributes[\'line\']=$x141->attributes[\'column\']=0;}throw new JSException($x141,64,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x165 =& $scope->properties['arguments'];
$x165->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x165->properties[$i] = $args[$i];
$x165->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x168 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 68, 13, '<image>/09_date.js');
$_Date =& $x168[0]; list(,$WDate,$SDate,$UDate) = $x168;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x169 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 13, '<image>/09_date.js');
$_ReferenceError =& $x169[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x169;
$x170 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 13);
$x171 = $x170($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x171->class) && $x171->class === 'Error' && !isset($x171->properties['file']) && !isset($x171->properties['line']) && !isset($x171->properties['column'])) {$x171->properties['file'] = '<image>/09_date.js';$x171->properties['line'] = 68;$x171->properties['column'] = 13;$x171->attributes['file'] = $x171->attributes['line'] = $x171->attributes['column'] = 0; }
throw new JSException($x171, 68, 13, '<image>/09_date.js');
}
$x166 = clone JS::$objectTemplate;
unset($x172, $W172, $S172, $U172);
$x173 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 68, 9, '<image>/09_date.js');
$x172 =& $x173[0]; list(,$W172,$S172,$U172) = $x173;
$x167 = $x172;
$x166->prototype = $x167;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x176 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 68, 9, '<image>/09_date.js');
$_TypeError =& $x176[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x176;
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x178 = $x177($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error' && !isset($x178->properties['file']) && !isset($x178->properties['line']) && !isset($x178->properties['column'])) {$x178->properties['file'] = '<image>/09_date.js';$x178->properties['line'] = 68;$x178->properties['column'] = 9;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 68, 9, '<image>/09_date.js');
}
$x174 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x175 = $x174($global, $x166, $_Date, array(time() * 1000), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x167 = $x175;
if (is_object($x167) && $x167 !== JS::$undefined) { $x166 = $x167; }
return $x166;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x165=&$scope->properties[\'arguments\'];$x165->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x165->properties[$i]=$args[$i];$x165->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x168=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),68,13,\'<image>/09_date.js\');$_Date=&$x168[0];list(,$WDate,$SDate,$UDate)=$x168;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x169=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,13,\'<image>/09_date.js\');$_ReferenceError=&$x169[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x169;$x170=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,13);$x171=$x170($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x171->class)&&$x171->class===\'Error\'&&!isset($x171->properties[\'file\'])&&!isset($x171->properties[\'line\'])&&!isset($x171->properties[\'column\'])){$x171->properties[\'file\']=\'<image>/09_date.js\';$x171->properties[\'line\']=68;$x171->properties[\'column\']=13;$x171->attributes[\'file\']=$x171->attributes[\'line\']=$x171->attributes[\'column\']=0;}throw new JSException($x171,68,13,\'<image>/09_date.js\');}$x166=clone JS::$objectTemplate;unset($x172,$W172,$S172,$U172);$x173=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),68,9,\'<image>/09_date.js\');$x172=&$x173[0];list(,$W172,$S172,$U172)=$x173;$x167=$x172;$x166->prototype=$x167;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x176=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),68,9,\'<image>/09_date.js\');$_TypeError=&$x176[0];list(,$WTypeError,$STypeError,$UTypeError)=$x176;$x177=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x178=$x177($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'&&!isset($x178->properties[\'file\'])&&!isset($x178->properties[\'line\'])&&!isset($x178->properties[\'column\'])){$x178->properties[\'file\']=\'<image>/09_date.js\';$x178->properties[\'line\']=68;$x178->properties[\'column\']=9;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,68,9,\'<image>/09_date.js\');}$x174=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x175=$x174($global,$x166,$_Date,array(time()*1000),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x167=$x175;if(is_object($x167)&&$x167!==JS::$undefined){$x166=$x167;}return$x166;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x215 =& $scope->properties['arguments'];
$x215->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x215->properties[$i] = $args[$i];
$x215->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x215=&$scope->properties[\'arguments\'];$x215->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x215->properties[$i]=$args[$i];$x215->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x229 =& $scope->properties['arguments'];
$x229->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x229->properties[$i] = $args[$i];
$x229->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x229=&$scope->properties[\'arguments\'];$x229->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x229->properties[$i]=$args[$i];$x229->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x243 =& $scope->properties['arguments'];
$x243->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x243->properties[$i] = $args[$i];
$x243->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x243=&$scope->properties[\'arguments\'];$x243->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x243->properties[$i]=$args[$i];$x243->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x302 =& $scope->properties['arguments'];
$x302->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x302->properties[$i] = $args[$i];
$x302->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value * 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x302=&$scope->properties[\'arguments\'];$x302->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x302->properties[$i]=$args[$i];$x302->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_12($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return (int) date('Y', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x331=&$scope->properties[\'arguments\'];$x331->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x331->properties[$i]=$args[$i];$x331->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'Y\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x345 =& $scope->properties['arguments'];
$x345->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x345->properties[$i] = $args[$i];
$x345->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x348 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 105, 12, '<image>/09_date.js');
$_NotImplementedError =& $x348[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x348;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x349 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 12, '<image>/09_date.js');
$_ReferenceError =& $x349[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x349;
$x350 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 12);
$x351 = $x350($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error' && !isset($x351->properties['file']) && !isset($x351->properties['line']) && !isset($x351->properties['column'])) {$x351->properties['file'] = '<image>/09_date.js';$x351->properties['line'] = 105;$x351->properties['column'] = 12;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 105, 12, '<image>/09_date.js');
}
$x346 = clone JS::$objectTemplate;
unset($x352, $W352, $S352, $U352);
$x353 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 105, 8, '<image>/09_date.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
$x347 = $x352;
$x346->prototype = $x347;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x356 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 8, '<image>/09_date.js');
$_TypeError =& $x356[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x356;
$x357 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x358 = $x357($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x358->class) && $x358->class === 'Error' && !isset($x358->properties['file']) && !isset($x358->properties['line']) && !isset($x358->properties['column'])) {$x358->properties['file'] = '<image>/09_date.js';$x358->properties['line'] = 105;$x358->properties['column'] = 8;$x358->attributes['file'] = $x358->attributes['line'] = $x358->attributes['column'] = 0; }
throw new JSException($x358, 105, 8, '<image>/09_date.js');
}
$x354 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x355 = $x354($global, $x346, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x347 = $x355;
if (is_object($x347) && $x347 !== JS::$undefined) { $x346 = $x347; }
if (isset($x346->class) && $x346->class === 'Error' && !isset($x346->properties['file']) && !isset($x346->properties['line']) && !isset($x346->properties['column'])) {$x346->properties['file'] = '<image>/09_date.js';$x346->properties['line'] = 105;$x346->properties['column'] = 2;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 105, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x345=&$scope->properties[\'arguments\'];$x345->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x345->properties[$i]=$args[$i];$x345->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x348=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),105,12,\'<image>/09_date.js\');$_NotImplementedError=&$x348[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x348;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x349=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,12,\'<image>/09_date.js\');$_ReferenceError=&$x349[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x349;$x350=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,12);$x351=$x350($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'&&!isset($x351->properties[\'file\'])&&!isset($x351->properties[\'line\'])&&!isset($x351->properties[\'column\'])){$x351->properties[\'file\']=\'<image>/09_date.js\';$x351->properties[\'line\']=105;$x351->properties[\'column\']=12;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,105,12,\'<image>/09_date.js\');}$x346=clone JS::$objectTemplate;unset($x352,$W352,$S352,$U352);$x353=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),105,8,\'<image>/09_date.js\');$x352=&$x353[0];list(,$W352,$S352,$U352)=$x353;$x347=$x352;$x346->prototype=$x347;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x356=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,8,\'<image>/09_date.js\');$_TypeError=&$x356[0];list(,$WTypeError,$STypeError,$UTypeError)=$x356;$x357=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x358=$x357($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x358->class)&&$x358->class===\'Error\'&&!isset($x358->properties[\'file\'])&&!isset($x358->properties[\'line\'])&&!isset($x358->properties[\'column\'])){$x358->properties[\'file\']=\'<image>/09_date.js\';$x358->properties[\'line\']=105;$x358->properties[\'column\']=8;$x358->attributes[\'file\']=$x358->attributes[\'line\']=$x358->attributes[\'column\']=0;}throw new JSException($x358,105,8,\'<image>/09_date.js\');}$x354=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x355=$x354($global,$x346,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x347=$x355;if(is_object($x347)&&$x347!==JS::$undefined){$x346=$x347;}if(isset($x346->class)&&$x346->class===\'Error\'&&!isset($x346->properties[\'file\'])&&!isset($x346->properties[\'line\'])&&!isset($x346->properties[\'column\'])){$x346->properties[\'file\']=\'<image>/09_date.js\';$x346->properties[\'line\']=105;$x346->properties[\'column\']=2;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,105,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x372 =& $scope->properties['arguments'];
$x372->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x372->properties[$i] = $args[$i];
$x372->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 25, '<image>/09_date.js');
$_TypeError =& $x374[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x374;
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x376 = $x375($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x376->class) && $x376->class === 'Error' && !isset($x376->properties['file']) && !isset($x376->properties['line']) && !isset($x376->properties['column'])) {$x376->properties['file'] = '<image>/09_date.js';$x376->properties['line'] = 109;$x376->properties['column'] = 25;$x376->attributes['file'] = $x376->attributes['line'] = $x376->attributes['column'] = 0; }
throw new JSException($x376, 109, 25, '<image>/09_date.js');
}
$x373 = JS::toObject($leThis, $global);
unset($x377, $W377, $S377, $U377);
$x378 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x373, JS::toString('getFullYear', $global), 109, 25, '<image>/09_date.js');
$x377 =& $x378[0]; list(,$W377,$S377,$U377) = $x378;
if (!(is_object($x377) && isset($x377->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x381 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 25, '<image>/09_date.js');
$_TypeError =& $x381[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x381;
$x382 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x383 = $x382($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x383->class) && $x383->class === 'Error' && !isset($x383->properties['file']) && !isset($x383->properties['line']) && !isset($x383->properties['column'])) {$x383->properties['file'] = '<image>/09_date.js';$x383->properties['line'] = 109;$x383->properties['column'] = 25;$x383->attributes['file'] = $x383->attributes['line'] = $x383->attributes['column'] = 0; }
throw new JSException($x383, 109, 25, '<image>/09_date.js');
}
$x379 = $x377->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x380 = $x379($global, $x373, $x377, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return (JS::toNumber($x380, $global) - JS::toNumber(1900, $global));
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x372=&$scope->properties[\'arguments\'];$x372->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x372->properties[$i]=$args[$i];$x372->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,25,\'<image>/09_date.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x376=$x375($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'&&!isset($x376->properties[\'file\'])&&!isset($x376->properties[\'line\'])&&!isset($x376->properties[\'column\'])){$x376->properties[\'file\']=\'<image>/09_date.js\';$x376->properties[\'line\']=109;$x376->properties[\'column\']=25;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,109,25,\'<image>/09_date.js\');}$x373=JS::toObject($leThis,$global);unset($x377,$W377,$S377,$U377);$x378=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x373,JS::toString(\'getFullYear\',$global),109,25,\'<image>/09_date.js\');$x377=&$x378[0];list(,$W377,$S377,$U377)=$x378;if(!(is_object($x377)&&isset($x377->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x381=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,25,\'<image>/09_date.js\');$_TypeError=&$x381[0];list(,$WTypeError,$STypeError,$UTypeError)=$x381;$x382=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x383=$x382($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x383->class)&&$x383->class===\'Error\'&&!isset($x383->properties[\'file\'])&&!isset($x383->properties[\'line\'])&&!isset($x383->properties[\'column\'])){$x383->properties[\'file\']=\'<image>/09_date.js\';$x383->properties[\'line\']=109;$x383->properties[\'column\']=25;$x383->attributes[\'file\']=$x383->attributes[\'line\']=$x383->attributes[\'column\']=0;}throw new JSException($x383,109,25,\'<image>/09_date.js\');}$x379=$x377->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x380=$x379($global,$x373,$x377,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return(JS::toNumber($x380,$global)-JS::toNumber(1900,$global));return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x412 =& $scope->properties['arguments'];
$x412->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x412->properties[$i] = $args[$i];
$x412->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('n', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x412=&$scope->properties[\'arguments\'];$x412->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x412->properties[$i]=$args[$i];$x412->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'n\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x441 =& $scope->properties['arguments'];
$x441->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x441->properties[$i] = $args[$i];
$x441->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('j', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x441=&$scope->properties[\'arguments\'];$x441->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x441->properties[$i]=$args[$i];$x441->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'j\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x470 =& $scope->properties['arguments'];
$x470->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x470->properties[$i] = $args[$i];
$x470->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('w', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x470=&$scope->properties[\'arguments\'];$x470->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x470->properties[$i]=$args[$i];$x470->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'w\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x499 =& $scope->properties['arguments'];
$x499->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x499->properties[$i] = $args[$i];
$x499->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('G', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x499=&$scope->properties[\'arguments\'];$x499->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x499->properties[$i]=$args[$i];$x499->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'G\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_19($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return (int) date('i', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x528=&$scope->properties[\'arguments\'];$x528->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x528->properties[$i]=$args[$i];$x528->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'i\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_20($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return (int) date('s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x557=&$scope->properties[\'arguments\'];$x557->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x557->properties[$i]=$args[$i];$x557->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x586 =& $scope->properties['arguments'];
$x586->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x586->properties[$i] = $args[$i];
$x586->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) (($leThis->value - (int) $leThis->value) * 1000);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x586=&$scope->properties[\'arguments\'];$x586->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x586->properties[$i]=$args[$i];$x586->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)(($leThis->value-(int)$leThis->value)*1000);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x615 =& $scope->properties['arguments'];
$x615->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x615->properties[$i] = $args[$i];
$x615->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Z', $leThis->value) / 60;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x615=&$scope->properties[\'arguments\'];$x615->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x615->properties[$i]=$args[$i];$x615->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Z\',$leThis->value)/60;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x629 =& $scope->properties['arguments'];
$x629->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x629->properties[$i] = $args[$i];
$x629->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x629=&$scope->properties[\'arguments\'];$x629->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x629->properties[$i]=$args[$i];$x629->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'time\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_time=&$scope->properties[\'time\'];$Utime=FALSE;$global->scope[++$global->scope_sp]=$scope;$leThis->value=JS::toNumber($_time/1000,$global);return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x643 =& $scope->properties['arguments'];
$x643->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x643->properties[$i] = $args[$i];
$x643->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['ms'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x646 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 166, 20, '<image>/09_date.js');
$_Date =& $x646[0]; list(,$WDate,$SDate,$UDate) = $x646;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x647 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 166, 20, '<image>/09_date.js');
$_ReferenceError =& $x647[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x647;
$x648 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 20);
$x649 = $x648($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x649->class) && $x649->class === 'Error' && !isset($x649->properties['file']) && !isset($x649->properties['line']) && !isset($x649->properties['column'])) {$x649->properties['file'] = '<image>/09_date.js';$x649->properties['line'] = 166;$x649->properties['column'] = 20;$x649->attributes['file'] = $x649->attributes['line'] = $x649->attributes['column'] = 0; }
throw new JSException($x649, 166, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x651 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 19, '<image>/09_date.js');
$_TypeError =& $x651[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x651;
$x652 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x653 = $x652($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x653->class) && $x653->class === 'Error' && !isset($x653->properties['file']) && !isset($x653->properties['line']) && !isset($x653->properties['column'])) {$x653->properties['file'] = '<image>/09_date.js';$x653->properties['line'] = 167;$x653->properties['column'] = 19;$x653->attributes['file'] = $x653->attributes['line'] = $x653->attributes['column'] = 0; }
throw new JSException($x653, 167, 19, '<image>/09_date.js');
}
$x650 = JS::toObject($leThis, $global);
unset($x654, $W654, $S654, $U654);
$x655 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x650, JS::toString('getFullYear', $global), 167, 19, '<image>/09_date.js');
$x654 =& $x655[0]; list(,$W654,$S654,$U654) = $x655;
if (!(is_object($x654) && isset($x654->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x658 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 19, '<image>/09_date.js');
$_TypeError =& $x658[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x658;
$x659 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x660 = $x659($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x660->class) && $x660->class === 'Error' && !isset($x660->properties['file']) && !isset($x660->properties['line']) && !isset($x660->properties['column'])) {$x660->properties['file'] = '<image>/09_date.js';$x660->properties['line'] = 167;$x660->properties['column'] = 19;$x660->attributes['file'] = $x660->attributes['line'] = $x660->attributes['column'] = 0; }
throw new JSException($x660, 167, 19, '<image>/09_date.js');
}
$x656 = $x654->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x657 = $x656($global, $x650, $x654, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x662 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 36, '<image>/09_date.js');
$_TypeError =& $x662[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x662;
$x663 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x664 = $x663($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x664->class) && $x664->class === 'Error' && !isset($x664->properties['file']) && !isset($x664->properties['line']) && !isset($x664->properties['column'])) {$x664->properties['file'] = '<image>/09_date.js';$x664->properties['line'] = 167;$x664->properties['column'] = 36;$x664->attributes['file'] = $x664->attributes['line'] = $x664->attributes['column'] = 0; }
throw new JSException($x664, 167, 36, '<image>/09_date.js');
}
$x661 = JS::toObject($leThis, $global);
unset($x665, $W665, $S665, $U665);
$x666 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x661, JS::toString('getMonth', $global), 167, 36, '<image>/09_date.js');
$x665 =& $x666[0]; list(,$W665,$S665,$U665) = $x666;
if (!(is_object($x665) && isset($x665->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x669 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 36, '<image>/09_date.js');
$_TypeError =& $x669[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x669;
$x670 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x671 = $x670($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x671->class) && $x671->class === 'Error' && !isset($x671->properties['file']) && !isset($x671->properties['line']) && !isset($x671->properties['column'])) {$x671->properties['file'] = '<image>/09_date.js';$x671->properties['line'] = 167;$x671->properties['column'] = 36;$x671->attributes['file'] = $x671->attributes['line'] = $x671->attributes['column'] = 0; }
throw new JSException($x671, 167, 36, '<image>/09_date.js');
}
$x667 = $x665->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x668 = $x667($global, $x661, $x665, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x673 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 52, '<image>/09_date.js');
$_TypeError =& $x673[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x673;
$x674 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x675 = $x674($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x675->class) && $x675->class === 'Error' && !isset($x675->properties['file']) && !isset($x675->properties['line']) && !isset($x675->properties['column'])) {$x675->properties['file'] = '<image>/09_date.js';$x675->properties['line'] = 167;$x675->properties['column'] = 52;$x675->attributes['file'] = $x675->attributes['line'] = $x675->attributes['column'] = 0; }
throw new JSException($x675, 167, 52, '<image>/09_date.js');
}
$x672 = JS::toObject($leThis, $global);
unset($x676, $W676, $S676, $U676);
$x677 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x672, JS::toString('getDate', $global), 167, 52, '<image>/09_date.js');
$x676 =& $x677[0]; list(,$W676,$S676,$U676) = $x677;
if (!(is_object($x676) && isset($x676->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x680 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 52, '<image>/09_date.js');
$_TypeError =& $x680[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x680;
$x681 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x682 = $x681($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x682->class) && $x682->class === 'Error' && !isset($x682->properties['file']) && !isset($x682->properties['line']) && !isset($x682->properties['column'])) {$x682->properties['file'] = '<image>/09_date.js';$x682->properties['line'] = 167;$x682->properties['column'] = 52;$x682->attributes['file'] = $x682->attributes['line'] = $x682->attributes['column'] = 0; }
throw new JSException($x682, 167, 52, '<image>/09_date.js');
}
$x678 = $x676->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x679 = $x678($global, $x672, $x676, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x684 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 16, '<image>/09_date.js');
$_TypeError =& $x684[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x684;
$x685 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x686 = $x685($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x686->class) && $x686->class === 'Error' && !isset($x686->properties['file']) && !isset($x686->properties['line']) && !isset($x686->properties['column'])) {$x686->properties['file'] = '<image>/09_date.js';$x686->properties['line'] = 168;$x686->properties['column'] = 16;$x686->attributes['file'] = $x686->attributes['line'] = $x686->attributes['column'] = 0; }
throw new JSException($x686, 168, 16, '<image>/09_date.js');
}
$x683 = JS::toObject($leThis, $global);
unset($x687, $W687, $S687, $U687);
$x688 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x683, JS::toString('getHours', $global), 168, 16, '<image>/09_date.js');
$x687 =& $x688[0]; list(,$W687,$S687,$U687) = $x688;
if (!(is_object($x687) && isset($x687->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 16, '<image>/09_date.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x693 = $x692($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error' && !isset($x693->properties['file']) && !isset($x693->properties['line']) && !isset($x693->properties['column'])) {$x693->properties['file'] = '<image>/09_date.js';$x693->properties['line'] = 168;$x693->properties['column'] = 16;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 168, 16, '<image>/09_date.js');
}
$x689 = $x687->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x690 = $x689($global, $x683, $x687, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x695 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 35, '<image>/09_date.js');
$_TypeError =& $x695[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x695;
$x696 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x697 = $x696($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x697->class) && $x697->class === 'Error' && !isset($x697->properties['file']) && !isset($x697->properties['line']) && !isset($x697->properties['column'])) {$x697->properties['file'] = '<image>/09_date.js';$x697->properties['line'] = 168;$x697->properties['column'] = 35;$x697->attributes['file'] = $x697->attributes['line'] = $x697->attributes['column'] = 0; }
throw new JSException($x697, 168, 35, '<image>/09_date.js');
}
$x694 = JS::toObject($leThis, $global);
unset($x698, $W698, $S698, $U698);
$x699 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x694, JS::toString('getMinutes', $global), 168, 35, '<image>/09_date.js');
$x698 =& $x699[0]; list(,$W698,$S698,$U698) = $x699;
if (!(is_object($x698) && isset($x698->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 35, '<image>/09_date.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x704 = $x703($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error' && !isset($x704->properties['file']) && !isset($x704->properties['line']) && !isset($x704->properties['column'])) {$x704->properties['file'] = '<image>/09_date.js';$x704->properties['line'] = 168;$x704->properties['column'] = 35;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 168, 35, '<image>/09_date.js');
}
$x700 = $x698->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x701 = $x700($global, $x694, $x698, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x706 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 54, '<image>/09_date.js');
$_TypeError =& $x706[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x706;
$x707 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x708 = $x707($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x708->class) && $x708->class === 'Error' && !isset($x708->properties['file']) && !isset($x708->properties['line']) && !isset($x708->properties['column'])) {$x708->properties['file'] = '<image>/09_date.js';$x708->properties['line'] = 168;$x708->properties['column'] = 54;$x708->attributes['file'] = $x708->attributes['line'] = $x708->attributes['column'] = 0; }
throw new JSException($x708, 168, 54, '<image>/09_date.js');
}
$x705 = JS::toObject($leThis, $global);
unset($x709, $W709, $S709, $U709);
$x710 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x705, JS::toString('getSeconds', $global), 168, 54, '<image>/09_date.js');
$x709 =& $x710[0]; list(,$W709,$S709,$U709) = $x710;
if (!(is_object($x709) && isset($x709->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x713 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 54, '<image>/09_date.js');
$_TypeError =& $x713[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x713;
$x714 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x715 = $x714($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x715->class) && $x715->class === 'Error' && !isset($x715->properties['file']) && !isset($x715->properties['line']) && !isset($x715->properties['column'])) {$x715->properties['file'] = '<image>/09_date.js';$x715->properties['line'] = 168;$x715->properties['column'] = 54;$x715->attributes['file'] = $x715->attributes['line'] = $x715->attributes['column'] = 0; }
throw new JSException($x715, 168, 54, '<image>/09_date.js');
}
$x711 = $x709->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x712 = $x711($global, $x705, $x709, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x644 = clone JS::$objectTemplate;
unset($x716, $W716, $S716, $U716);
$x717 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 166, 16, '<image>/09_date.js');
$x716 =& $x717[0]; list(,$W716,$S716,$U716) = $x717;
$x645 = $x716;
$x644->prototype = $x645;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x720 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 16, '<image>/09_date.js');
$_TypeError =& $x720[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x720;
$x721 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x722 = $x721($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x722->class) && $x722->class === 'Error' && !isset($x722->properties['file']) && !isset($x722->properties['line']) && !isset($x722->properties['column'])) {$x722->properties['file'] = '<image>/09_date.js';$x722->properties['line'] = 166;$x722->properties['column'] = 16;$x722->attributes['file'] = $x722->attributes['line'] = $x722->attributes['column'] = 0; }
throw new JSException($x722, 166, 16, '<image>/09_date.js');
}
$x718 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x719 = $x718($global, $x644, $_Date, array($x657, $x668, $x679, $x690, $x701, $x712, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x645 = $x719;
if (is_object($x645) && $x645 !== JS::$undefined) { $x644 = $x645; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x644;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x643=&$scope->properties[\'arguments\'];$x643->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x643->properties[$i]=$args[$i];$x643->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'ms\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x646=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),166,20,\'<image>/09_date.js\');$_Date=&$x646[0];list(,$WDate,$SDate,$UDate)=$x646;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x647=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),166,20,\'<image>/09_date.js\');$_ReferenceError=&$x647[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x647;$x648=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,20);$x649=$x648($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x649->class)&&$x649->class===\'Error\'&&!isset($x649->properties[\'file\'])&&!isset($x649->properties[\'line\'])&&!isset($x649->properties[\'column\'])){$x649->properties[\'file\']=\'<image>/09_date.js\';$x649->properties[\'line\']=166;$x649->properties[\'column\']=20;$x649->attributes[\'file\']=$x649->attributes[\'line\']=$x649->attributes[\'column\']=0;}throw new JSException($x649,166,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x651=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,19,\'<image>/09_date.js\');$_TypeError=&$x651[0];list(,$WTypeError,$STypeError,$UTypeError)=$x651;$x652=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x653=$x652($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x653->class)&&$x653->class===\'Error\'&&!isset($x653->properties[\'file\'])&&!isset($x653->properties[\'line\'])&&!isset($x653->properties[\'column\'])){$x653->properties[\'file\']=\'<image>/09_date.js\';$x653->properties[\'line\']=167;$x653->properties[\'column\']=19;$x653->attributes[\'file\']=$x653->attributes[\'line\']=$x653->attributes[\'column\']=0;}throw new JSException($x653,167,19,\'<image>/09_date.js\');}$x650=JS::toObject($leThis,$global);unset($x654,$W654,$S654,$U654);$x655=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x650,JS::toString(\'getFullYear\',$global),167,19,\'<image>/09_date.js\');$x654=&$x655[0];list(,$W654,$S654,$U654)=$x655;if(!(is_object($x654)&&isset($x654->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x658=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,19,\'<image>/09_date.js\');$_TypeError=&$x658[0];list(,$WTypeError,$STypeError,$UTypeError)=$x658;$x659=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x660=$x659($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x660->class)&&$x660->class===\'Error\'&&!isset($x660->properties[\'file\'])&&!isset($x660->properties[\'line\'])&&!isset($x660->properties[\'column\'])){$x660->properties[\'file\']=\'<image>/09_date.js\';$x660->properties[\'line\']=167;$x660->properties[\'column\']=19;$x660->attributes[\'file\']=$x660->attributes[\'line\']=$x660->attributes[\'column\']=0;}throw new JSException($x660,167,19,\'<image>/09_date.js\');}$x656=$x654->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x657=$x656($global,$x650,$x654,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x662=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,36,\'<image>/09_date.js\');$_TypeError=&$x662[0];list(,$WTypeError,$STypeError,$UTypeError)=$x662;$x663=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x664=$x663($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x664->class)&&$x664->class===\'Error\'&&!isset($x664->properties[\'file\'])&&!isset($x664->properties[\'line\'])&&!isset($x664->properties[\'column\'])){$x664->properties[\'file\']=\'<image>/09_date.js\';$x664->properties[\'line\']=167;$x664->properties[\'column\']=36;$x664->attributes[\'file\']=$x664->attributes[\'line\']=$x664->attributes[\'column\']=0;}throw new JSException($x664,167,36,\'<image>/09_date.js\');}$x661=JS::toObject($leThis,$global);unset($x665,$W665,$S665,$U665);$x666=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x661,JS::toString(\'getMonth\',$global),167,36,\'<image>/09_date.js\');$x665=&$x666[0];list(,$W665,$S665,$U665)=$x666;if(!(is_object($x665)&&isset($x665->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x669=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,36,\'<image>/09_date.js\');$_TypeError=&$x669[0];list(,$WTypeError,$STypeError,$UTypeError)=$x669;$x670=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x671=$x670($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x671->class)&&$x671->class===\'Error\'&&!isset($x671->properties[\'file\'])&&!isset($x671->properties[\'line\'])&&!isset($x671->properties[\'column\'])){$x671->properties[\'file\']=\'<image>/09_date.js\';$x671->properties[\'line\']=167;$x671->properties[\'column\']=36;$x671->attributes[\'file\']=$x671->attributes[\'line\']=$x671->attributes[\'column\']=0;}throw new JSException($x671,167,36,\'<image>/09_date.js\');}$x667=$x665->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x668=$x667($global,$x661,$x665,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x673=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,52,\'<image>/09_date.js\');$_TypeError=&$x673[0];list(,$WTypeError,$STypeError,$UTypeError)=$x673;$x674=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x675=$x674($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x675->class)&&$x675->class===\'Error\'&&!isset($x675->properties[\'file\'])&&!isset($x675->properties[\'line\'])&&!isset($x675->properties[\'column\'])){$x675->properties[\'file\']=\'<image>/09_date.js\';$x675->properties[\'line\']=167;$x675->properties[\'column\']=52;$x675->attributes[\'file\']=$x675->attributes[\'line\']=$x675->attributes[\'column\']=0;}throw new JSException($x675,167,52,\'<image>/09_date.js\');}$x672=JS::toObject($leThis,$global);unset($x676,$W676,$S676,$U676);$x677=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x672,JS::toString(\'getDate\',$global),167,52,\'<image>/09_date.js\');$x676=&$x677[0];list(,$W676,$S676,$U676)=$x677;if(!(is_object($x676)&&isset($x676->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x680=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,52,\'<image>/09_date.js\');$_TypeError=&$x680[0];list(,$WTypeError,$STypeError,$UTypeError)=$x680;$x681=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x682=$x681($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x682->class)&&$x682->class===\'Error\'&&!isset($x682->properties[\'file\'])&&!isset($x682->properties[\'line\'])&&!isset($x682->properties[\'column\'])){$x682->properties[\'file\']=\'<image>/09_date.js\';$x682->properties[\'line\']=167;$x682->properties[\'column\']=52;$x682->attributes[\'file\']=$x682->attributes[\'line\']=$x682->attributes[\'column\']=0;}throw new JSException($x682,167,52,\'<image>/09_date.js\');}$x678=$x676->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x679=$x678($global,$x672,$x676,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x684=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,16,\'<image>/09_date.js\');$_TypeError=&$x684[0];list(,$WTypeError,$STypeError,$UTypeError)=$x684;$x685=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x686=$x685($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x686->class)&&$x686->class===\'Error\'&&!isset($x686->properties[\'file\'])&&!isset($x686->properties[\'line\'])&&!isset($x686->properties[\'column\'])){$x686->properties[\'file\']=\'<image>/09_date.js\';$x686->properties[\'line\']=168;$x686->properties[\'column\']=16;$x686->attributes[\'file\']=$x686->attributes[\'line\']=$x686->attributes[\'column\']=0;}throw new JSException($x686,168,16,\'<image>/09_date.js\');}$x683=JS::toObject($leThis,$global);unset($x687,$W687,$S687,$U687);$x688=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x683,JS::toString(\'getHours\',$global),168,16,\'<image>/09_date.js\');$x687=&$x688[0];list(,$W687,$S687,$U687)=$x688;if(!(is_object($x687)&&isset($x687->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x691=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,16,\'<image>/09_date.js\');$_TypeError=&$x691[0];list(,$WTypeError,$STypeError,$UTypeError)=$x691;$x692=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x693=$x692($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x693->class)&&$x693->class===\'Error\'&&!isset($x693->properties[\'file\'])&&!isset($x693->properties[\'line\'])&&!isset($x693->properties[\'column\'])){$x693->properties[\'file\']=\'<image>/09_date.js\';$x693->properties[\'line\']=168;$x693->properties[\'column\']=16;$x693->attributes[\'file\']=$x693->attributes[\'line\']=$x693->attributes[\'column\']=0;}throw new JSException($x693,168,16,\'<image>/09_date.js\');}$x689=$x687->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x690=$x689($global,$x683,$x687,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x695=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,35,\'<image>/09_date.js\');$_TypeError=&$x695[0];list(,$WTypeError,$STypeError,$UTypeError)=$x695;$x696=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x697=$x696($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x697->class)&&$x697->class===\'Error\'&&!isset($x697->properties[\'file\'])&&!isset($x697->properties[\'line\'])&&!isset($x697->properties[\'column\'])){$x697->properties[\'file\']=\'<image>/09_date.js\';$x697->properties[\'line\']=168;$x697->properties[\'column\']=35;$x697->attributes[\'file\']=$x697->attributes[\'line\']=$x697->attributes[\'column\']=0;}throw new JSException($x697,168,35,\'<image>/09_date.js\');}$x694=JS::toObject($leThis,$global);unset($x698,$W698,$S698,$U698);$x699=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x694,JS::toString(\'getMinutes\',$global),168,35,\'<image>/09_date.js\');$x698=&$x699[0];list(,$W698,$S698,$U698)=$x699;if(!(is_object($x698)&&isset($x698->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x702=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,35,\'<image>/09_date.js\');$_TypeError=&$x702[0];list(,$WTypeError,$STypeError,$UTypeError)=$x702;$x703=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x704=$x703($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x704->class)&&$x704->class===\'Error\'&&!isset($x704->properties[\'file\'])&&!isset($x704->properties[\'line\'])&&!isset($x704->properties[\'column\'])){$x704->properties[\'file\']=\'<image>/09_date.js\';$x704->properties[\'line\']=168;$x704->properties[\'column\']=35;$x704->attributes[\'file\']=$x704->attributes[\'line\']=$x704->attributes[\'column\']=0;}throw new JSException($x704,168,35,\'<image>/09_date.js\');}$x700=$x698->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x701=$x700($global,$x694,$x698,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x706=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,54,\'<image>/09_date.js\');$_TypeError=&$x706[0];list(,$WTypeError,$STypeError,$UTypeError)=$x706;$x707=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x708=$x707($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x708->class)&&$x708->class===\'Error\'&&!isset($x708->properties[\'file\'])&&!isset($x708->properties[\'line\'])&&!isset($x708->properties[\'column\'])){$x708->properties[\'file\']=\'<image>/09_date.js\';$x708->properties[\'line\']=168;$x708->properties[\'column\']=54;$x708->attributes[\'file\']=$x708->attributes[\'line\']=$x708->attributes[\'column\']=0;}throw new JSException($x708,168,54,\'<image>/09_date.js\');}$x705=JS::toObject($leThis,$global);unset($x709,$W709,$S709,$U709);$x710=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x705,JS::toString(\'getSeconds\',$global),168,54,\'<image>/09_date.js\');$x709=&$x710[0];list(,$W709,$S709,$U709)=$x710;if(!(is_object($x709)&&isset($x709->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x713=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,54,\'<image>/09_date.js\');$_TypeError=&$x713[0];list(,$WTypeError,$STypeError,$UTypeError)=$x713;$x714=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x715=$x714($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x715->class)&&$x715->class===\'Error\'&&!isset($x715->properties[\'file\'])&&!isset($x715->properties[\'line\'])&&!isset($x715->properties[\'column\'])){$x715->properties[\'file\']=\'<image>/09_date.js\';$x715->properties[\'line\']=168;$x715->properties[\'column\']=54;$x715->attributes[\'file\']=$x715->attributes[\'line\']=$x715->attributes[\'column\']=0;}throw new JSException($x715,168,54,\'<image>/09_date.js\');}$x711=$x709->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x712=$x711($global,$x705,$x709,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x644=clone JS::$objectTemplate;unset($x716,$W716,$S716,$U716);$x717=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),166,16,\'<image>/09_date.js\');$x716=&$x717[0];list(,$W716,$S716,$U716)=$x717;$x645=$x716;$x644->prototype=$x645;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x720=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,16,\'<image>/09_date.js\');$_TypeError=&$x720[0];list(,$WTypeError,$STypeError,$UTypeError)=$x720;$x721=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x722=$x721($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x722->class)&&$x722->class===\'Error\'&&!isset($x722->properties[\'file\'])&&!isset($x722->properties[\'line\'])&&!isset($x722->properties[\'column\'])){$x722->properties[\'file\']=\'<image>/09_date.js\';$x722->properties[\'line\']=166;$x722->properties[\'column\']=16;$x722->attributes[\'file\']=$x722->attributes[\'line\']=$x722->attributes[\'column\']=0;}throw new JSException($x722,166,16,\'<image>/09_date.js\');}$x718=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x719=$x718($global,$x644,$_Date,array($x657,$x668,$x679,$x690,$x701,$x712,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x645=$x719;if(is_object($x645)&&$x645!==JS::$undefined){$x644=$x645;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x644;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x751 =& $scope->properties['arguments'];
$x751->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x751->properties[$i] = $args[$i];
$x751->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['seconds'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x752 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x752, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x754 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 180, 28, '<image>/09_date.js');
$_TypeError =& $x754[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x754;
$x755 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x756 = $x755($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x756->class) && $x756->class === 'Error' && !isset($x756->properties['file']) && !isset($x756->properties['line']) && !isset($x756->properties['column'])) {$x756->properties['file'] = '<image>/09_date.js';$x756->properties['line'] = 180;$x756->properties['column'] = 28;$x756->attributes['file'] = $x756->attributes['line'] = $x756->attributes['column'] = 0; }
throw new JSException($x756, 180, 28, '<image>/09_date.js');
}
$x753 = JS::toObject($leThis, $global);
unset($x757, $W757, $S757, $U757);
$x758 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x753, JS::toString('getMilliseconds', $global), 180, 28, '<image>/09_date.js');
$x757 =& $x758[0]; list(,$W757,$S757,$U757) = $x758;
if (!(is_object($x757) && isset($x757->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x761 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 180, 28, '<image>/09_date.js');
$_TypeError =& $x761[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x761;
$x762 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x763 = $x762($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x763->class) && $x763->class === 'Error' && !isset($x763->properties['file']) && !isset($x763->properties['line']) && !isset($x763->properties['column'])) {$x763->properties['file'] = '<image>/09_date.js';$x763->properties['line'] = 180;$x763->properties['column'] = 28;$x763->attributes['file'] = $x763->attributes['line'] = $x763->attributes['column'] = 0; }
throw new JSException($x763, 180, 28, '<image>/09_date.js');
}
$x759 = $x757->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x760 = $x759($global, $x753, $x757, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x760;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x766 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 183, 20, '<image>/09_date.js');
$_Date =& $x766[0]; list(,$WDate,$SDate,$UDate) = $x766;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x767 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 183, 20, '<image>/09_date.js');
$_ReferenceError =& $x767[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x767;
$x768 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 20);
$x769 = $x768($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x769->class) && $x769->class === 'Error' && !isset($x769->properties['file']) && !isset($x769->properties['line']) && !isset($x769->properties['column'])) {$x769->properties['file'] = '<image>/09_date.js';$x769->properties['line'] = 183;$x769->properties['column'] = 20;$x769->attributes['file'] = $x769->attributes['line'] = $x769->attributes['column'] = 0; }
throw new JSException($x769, 183, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x771 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 19, '<image>/09_date.js');
$_TypeError =& $x771[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x771;
$x772 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x773 = $x772($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x773->class) && $x773->class === 'Error' && !isset($x773->properties['file']) && !isset($x773->properties['line']) && !isset($x773->properties['column'])) {$x773->properties['file'] = '<image>/09_date.js';$x773->properties['line'] = 184;$x773->properties['column'] = 19;$x773->attributes['file'] = $x773->attributes['line'] = $x773->attributes['column'] = 0; }
throw new JSException($x773, 184, 19, '<image>/09_date.js');
}
$x770 = JS::toObject($leThis, $global);
unset($x774, $W774, $S774, $U774);
$x775 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x770, JS::toString('getFullYear', $global), 184, 19, '<image>/09_date.js');
$x774 =& $x775[0]; list(,$W774,$S774,$U774) = $x775;
if (!(is_object($x774) && isset($x774->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x778 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 19, '<image>/09_date.js');
$_TypeError =& $x778[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x778;
$x779 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x780 = $x779($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x780->class) && $x780->class === 'Error' && !isset($x780->properties['file']) && !isset($x780->properties['line']) && !isset($x780->properties['column'])) {$x780->properties['file'] = '<image>/09_date.js';$x780->properties['line'] = 184;$x780->properties['column'] = 19;$x780->attributes['file'] = $x780->attributes['line'] = $x780->attributes['column'] = 0; }
throw new JSException($x780, 184, 19, '<image>/09_date.js');
}
$x776 = $x774->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x777 = $x776($global, $x770, $x774, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x782 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 36, '<image>/09_date.js');
$_TypeError =& $x782[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x782;
$x783 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x784 = $x783($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x784->class) && $x784->class === 'Error' && !isset($x784->properties['file']) && !isset($x784->properties['line']) && !isset($x784->properties['column'])) {$x784->properties['file'] = '<image>/09_date.js';$x784->properties['line'] = 184;$x784->properties['column'] = 36;$x784->attributes['file'] = $x784->attributes['line'] = $x784->attributes['column'] = 0; }
throw new JSException($x784, 184, 36, '<image>/09_date.js');
}
$x781 = JS::toObject($leThis, $global);
unset($x785, $W785, $S785, $U785);
$x786 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x781, JS::toString('getMonth', $global), 184, 36, '<image>/09_date.js');
$x785 =& $x786[0]; list(,$W785,$S785,$U785) = $x786;
if (!(is_object($x785) && isset($x785->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x789 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 36, '<image>/09_date.js');
$_TypeError =& $x789[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x789;
$x790 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x791 = $x790($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x791->class) && $x791->class === 'Error' && !isset($x791->properties['file']) && !isset($x791->properties['line']) && !isset($x791->properties['column'])) {$x791->properties['file'] = '<image>/09_date.js';$x791->properties['line'] = 184;$x791->properties['column'] = 36;$x791->attributes['file'] = $x791->attributes['line'] = $x791->attributes['column'] = 0; }
throw new JSException($x791, 184, 36, '<image>/09_date.js');
}
$x787 = $x785->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x788 = $x787($global, $x781, $x785, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x793 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 52, '<image>/09_date.js');
$_TypeError =& $x793[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x793;
$x794 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x795 = $x794($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x795->class) && $x795->class === 'Error' && !isset($x795->properties['file']) && !isset($x795->properties['line']) && !isset($x795->properties['column'])) {$x795->properties['file'] = '<image>/09_date.js';$x795->properties['line'] = 184;$x795->properties['column'] = 52;$x795->attributes['file'] = $x795->attributes['line'] = $x795->attributes['column'] = 0; }
throw new JSException($x795, 184, 52, '<image>/09_date.js');
}
$x792 = JS::toObject($leThis, $global);
unset($x796, $W796, $S796, $U796);
$x797 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x792, JS::toString('getDate', $global), 184, 52, '<image>/09_date.js');
$x796 =& $x797[0]; list(,$W796,$S796,$U796) = $x797;
if (!(is_object($x796) && isset($x796->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x800 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 52, '<image>/09_date.js');
$_TypeError =& $x800[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x800;
$x801 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x802 = $x801($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x802->class) && $x802->class === 'Error' && !isset($x802->properties['file']) && !isset($x802->properties['line']) && !isset($x802->properties['column'])) {$x802->properties['file'] = '<image>/09_date.js';$x802->properties['line'] = 184;$x802->properties['column'] = 52;$x802->attributes['file'] = $x802->attributes['line'] = $x802->attributes['column'] = 0; }
throw new JSException($x802, 184, 52, '<image>/09_date.js');
}
$x798 = $x796->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x799 = $x798($global, $x792, $x796, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x804 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 16, '<image>/09_date.js');
$_TypeError =& $x804[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x804;
$x805 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x806 = $x805($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x806->class) && $x806->class === 'Error' && !isset($x806->properties['file']) && !isset($x806->properties['line']) && !isset($x806->properties['column'])) {$x806->properties['file'] = '<image>/09_date.js';$x806->properties['line'] = 185;$x806->properties['column'] = 16;$x806->attributes['file'] = $x806->attributes['line'] = $x806->attributes['column'] = 0; }
throw new JSException($x806, 185, 16, '<image>/09_date.js');
}
$x803 = JS::toObject($leThis, $global);
unset($x807, $W807, $S807, $U807);
$x808 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x803, JS::toString('getHours', $global), 185, 16, '<image>/09_date.js');
$x807 =& $x808[0]; list(,$W807,$S807,$U807) = $x808;
if (!(is_object($x807) && isset($x807->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x811 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 16, '<image>/09_date.js');
$_TypeError =& $x811[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x811;
$x812 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x813 = $x812($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x813->class) && $x813->class === 'Error' && !isset($x813->properties['file']) && !isset($x813->properties['line']) && !isset($x813->properties['column'])) {$x813->properties['file'] = '<image>/09_date.js';$x813->properties['line'] = 185;$x813->properties['column'] = 16;$x813->attributes['file'] = $x813->attributes['line'] = $x813->attributes['column'] = 0; }
throw new JSException($x813, 185, 16, '<image>/09_date.js');
}
$x809 = $x807->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x810 = $x809($global, $x803, $x807, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x815 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/09_date.js');
$_TypeError =& $x815[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x815;
$x816 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x817 = $x816($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x817->class) && $x817->class === 'Error' && !isset($x817->properties['file']) && !isset($x817->properties['line']) && !isset($x817->properties['column'])) {$x817->properties['file'] = '<image>/09_date.js';$x817->properties['line'] = 185;$x817->properties['column'] = 35;$x817->attributes['file'] = $x817->attributes['line'] = $x817->attributes['column'] = 0; }
throw new JSException($x817, 185, 35, '<image>/09_date.js');
}
$x814 = JS::toObject($leThis, $global);
unset($x818, $W818, $S818, $U818);
$x819 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x814, JS::toString('getMinutes', $global), 185, 35, '<image>/09_date.js');
$x818 =& $x819[0]; list(,$W818,$S818,$U818) = $x819;
if (!(is_object($x818) && isset($x818->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x822 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/09_date.js');
$_TypeError =& $x822[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x822;
$x823 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x824 = $x823($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x824->class) && $x824->class === 'Error' && !isset($x824->properties['file']) && !isset($x824->properties['line']) && !isset($x824->properties['column'])) {$x824->properties['file'] = '<image>/09_date.js';$x824->properties['line'] = 185;$x824->properties['column'] = 35;$x824->attributes['file'] = $x824->attributes['line'] = $x824->attributes['column'] = 0; }
throw new JSException($x824, 185, 35, '<image>/09_date.js');
}
$x820 = $x818->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x821 = $x820($global, $x814, $x818, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x764 = clone JS::$objectTemplate;
unset($x825, $W825, $S825, $U825);
$x826 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 183, 16, '<image>/09_date.js');
$x825 =& $x826[0]; list(,$W825,$S825,$U825) = $x826;
$x765 = $x825;
$x764->prototype = $x765;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x829 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 183, 16, '<image>/09_date.js');
$_TypeError =& $x829[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x829;
$x830 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x831 = $x830($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x831->class) && $x831->class === 'Error' && !isset($x831->properties['file']) && !isset($x831->properties['line']) && !isset($x831->properties['column'])) {$x831->properties['file'] = '<image>/09_date.js';$x831->properties['line'] = 183;$x831->properties['column'] = 16;$x831->attributes['file'] = $x831->attributes['line'] = $x831->attributes['column'] = 0; }
throw new JSException($x831, 183, 16, '<image>/09_date.js');
}
$x827 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x828 = $x827($global, $x764, $_Date, array($x777, $x788, $x799, $x810, $x821, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x765 = $x828;
if (is_object($x765) && $x765 !== JS::$undefined) { $x764 = $x765; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x764;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x751=&$scope->properties[\'arguments\'];$x751->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x751->properties[$i]=$args[$i];$x751->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'seconds\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x752=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x752,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x754=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),180,28,\'<image>/09_date.js\');$_TypeError=&$x754[0];list(,$WTypeError,$STypeError,$UTypeError)=$x754;$x755=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x756=$x755($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x756->class)&&$x756->class===\'Error\'&&!isset($x756->properties[\'file\'])&&!isset($x756->properties[\'line\'])&&!isset($x756->properties[\'column\'])){$x756->properties[\'file\']=\'<image>/09_date.js\';$x756->properties[\'line\']=180;$x756->properties[\'column\']=28;$x756->attributes[\'file\']=$x756->attributes[\'line\']=$x756->attributes[\'column\']=0;}throw new JSException($x756,180,28,\'<image>/09_date.js\');}$x753=JS::toObject($leThis,$global);unset($x757,$W757,$S757,$U757);$x758=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x753,JS::toString(\'getMilliseconds\',$global),180,28,\'<image>/09_date.js\');$x757=&$x758[0];list(,$W757,$S757,$U757)=$x758;if(!(is_object($x757)&&isset($x757->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x761=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),180,28,\'<image>/09_date.js\');$_TypeError=&$x761[0];list(,$WTypeError,$STypeError,$UTypeError)=$x761;$x762=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x763=$x762($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x763->class)&&$x763->class===\'Error\'&&!isset($x763->properties[\'file\'])&&!isset($x763->properties[\'line\'])&&!isset($x763->properties[\'column\'])){$x763->properties[\'file\']=\'<image>/09_date.js\';$x763->properties[\'line\']=180;$x763->properties[\'column\']=28;$x763->attributes[\'file\']=$x763->attributes[\'line\']=$x763->attributes[\'column\']=0;}throw new JSException($x763,180,28,\'<image>/09_date.js\');}$x759=$x757->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x760=$x759($global,$x753,$x757,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x760;}unset($_Date,$WDate,$SDate,$UDate);$x766=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),183,20,\'<image>/09_date.js\');$_Date=&$x766[0];list(,$WDate,$SDate,$UDate)=$x766;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x767=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),183,20,\'<image>/09_date.js\');$_ReferenceError=&$x767[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x767;$x768=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,20);$x769=$x768($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x769->class)&&$x769->class===\'Error\'&&!isset($x769->properties[\'file\'])&&!isset($x769->properties[\'line\'])&&!isset($x769->properties[\'column\'])){$x769->properties[\'file\']=\'<image>/09_date.js\';$x769->properties[\'line\']=183;$x769->properties[\'column\']=20;$x769->attributes[\'file\']=$x769->attributes[\'line\']=$x769->attributes[\'column\']=0;}throw new JSException($x769,183,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x771=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,19,\'<image>/09_date.js\');$_TypeError=&$x771[0];list(,$WTypeError,$STypeError,$UTypeError)=$x771;$x772=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x773=$x772($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x773->class)&&$x773->class===\'Error\'&&!isset($x773->properties[\'file\'])&&!isset($x773->properties[\'line\'])&&!isset($x773->properties[\'column\'])){$x773->properties[\'file\']=\'<image>/09_date.js\';$x773->properties[\'line\']=184;$x773->properties[\'column\']=19;$x773->attributes[\'file\']=$x773->attributes[\'line\']=$x773->attributes[\'column\']=0;}throw new JSException($x773,184,19,\'<image>/09_date.js\');}$x770=JS::toObject($leThis,$global);unset($x774,$W774,$S774,$U774);$x775=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x770,JS::toString(\'getFullYear\',$global),184,19,\'<image>/09_date.js\');$x774=&$x775[0];list(,$W774,$S774,$U774)=$x775;if(!(is_object($x774)&&isset($x774->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x778=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,19,\'<image>/09_date.js\');$_TypeError=&$x778[0];list(,$WTypeError,$STypeError,$UTypeError)=$x778;$x779=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x780=$x779($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x780->class)&&$x780->class===\'Error\'&&!isset($x780->properties[\'file\'])&&!isset($x780->properties[\'line\'])&&!isset($x780->properties[\'column\'])){$x780->properties[\'file\']=\'<image>/09_date.js\';$x780->properties[\'line\']=184;$x780->properties[\'column\']=19;$x780->attributes[\'file\']=$x780->attributes[\'line\']=$x780->attributes[\'column\']=0;}throw new JSException($x780,184,19,\'<image>/09_date.js\');}$x776=$x774->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x777=$x776($global,$x770,$x774,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x782=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,36,\'<image>/09_date.js\');$_TypeError=&$x782[0];list(,$WTypeError,$STypeError,$UTypeError)=$x782;$x783=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x784=$x783($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x784->class)&&$x784->class===\'Error\'&&!isset($x784->properties[\'file\'])&&!isset($x784->properties[\'line\'])&&!isset($x784->properties[\'column\'])){$x784->properties[\'file\']=\'<image>/09_date.js\';$x784->properties[\'line\']=184;$x784->properties[\'column\']=36;$x784->attributes[\'file\']=$x784->attributes[\'line\']=$x784->attributes[\'column\']=0;}throw new JSException($x784,184,36,\'<image>/09_date.js\');}$x781=JS::toObject($leThis,$global);unset($x785,$W785,$S785,$U785);$x786=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x781,JS::toString(\'getMonth\',$global),184,36,\'<image>/09_date.js\');$x785=&$x786[0];list(,$W785,$S785,$U785)=$x786;if(!(is_object($x785)&&isset($x785->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x789=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,36,\'<image>/09_date.js\');$_TypeError=&$x789[0];list(,$WTypeError,$STypeError,$UTypeError)=$x789;$x790=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x791=$x790($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x791->class)&&$x791->class===\'Error\'&&!isset($x791->properties[\'file\'])&&!isset($x791->properties[\'line\'])&&!isset($x791->properties[\'column\'])){$x791->properties[\'file\']=\'<image>/09_date.js\';$x791->properties[\'line\']=184;$x791->properties[\'column\']=36;$x791->attributes[\'file\']=$x791->attributes[\'line\']=$x791->attributes[\'column\']=0;}throw new JSException($x791,184,36,\'<image>/09_date.js\');}$x787=$x785->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x788=$x787($global,$x781,$x785,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x793=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,52,\'<image>/09_date.js\');$_TypeError=&$x793[0];list(,$WTypeError,$STypeError,$UTypeError)=$x793;$x794=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x795=$x794($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x795->class)&&$x795->class===\'Error\'&&!isset($x795->properties[\'file\'])&&!isset($x795->properties[\'line\'])&&!isset($x795->properties[\'column\'])){$x795->properties[\'file\']=\'<image>/09_date.js\';$x795->properties[\'line\']=184;$x795->properties[\'column\']=52;$x795->attributes[\'file\']=$x795->attributes[\'line\']=$x795->attributes[\'column\']=0;}throw new JSException($x795,184,52,\'<image>/09_date.js\');}$x792=JS::toObject($leThis,$global);unset($x796,$W796,$S796,$U796);$x797=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x792,JS::toString(\'getDate\',$global),184,52,\'<image>/09_date.js\');$x796=&$x797[0];list(,$W796,$S796,$U796)=$x797;if(!(is_object($x796)&&isset($x796->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x800=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,52,\'<image>/09_date.js\');$_TypeError=&$x800[0];list(,$WTypeError,$STypeError,$UTypeError)=$x800;$x801=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x802=$x801($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x802->class)&&$x802->class===\'Error\'&&!isset($x802->properties[\'file\'])&&!isset($x802->properties[\'line\'])&&!isset($x802->properties[\'column\'])){$x802->properties[\'file\']=\'<image>/09_date.js\';$x802->properties[\'line\']=184;$x802->properties[\'column\']=52;$x802->attributes[\'file\']=$x802->attributes[\'line\']=$x802->attributes[\'column\']=0;}throw new JSException($x802,184,52,\'<image>/09_date.js\');}$x798=$x796->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x799=$x798($global,$x792,$x796,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x804=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,16,\'<image>/09_date.js\');$_TypeError=&$x804[0];list(,$WTypeError,$STypeError,$UTypeError)=$x804;$x805=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x806=$x805($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x806->class)&&$x806->class===\'Error\'&&!isset($x806->properties[\'file\'])&&!isset($x806->properties[\'line\'])&&!isset($x806->properties[\'column\'])){$x806->properties[\'file\']=\'<image>/09_date.js\';$x806->properties[\'line\']=185;$x806->properties[\'column\']=16;$x806->attributes[\'file\']=$x806->attributes[\'line\']=$x806->attributes[\'column\']=0;}throw new JSException($x806,185,16,\'<image>/09_date.js\');}$x803=JS::toObject($leThis,$global);unset($x807,$W807,$S807,$U807);$x808=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x803,JS::toString(\'getHours\',$global),185,16,\'<image>/09_date.js\');$x807=&$x808[0];list(,$W807,$S807,$U807)=$x808;if(!(is_object($x807)&&isset($x807->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x811=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,16,\'<image>/09_date.js\');$_TypeError=&$x811[0];list(,$WTypeError,$STypeError,$UTypeError)=$x811;$x812=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x813=$x812($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x813->class)&&$x813->class===\'Error\'&&!isset($x813->properties[\'file\'])&&!isset($x813->properties[\'line\'])&&!isset($x813->properties[\'column\'])){$x813->properties[\'file\']=\'<image>/09_date.js\';$x813->properties[\'line\']=185;$x813->properties[\'column\']=16;$x813->attributes[\'file\']=$x813->attributes[\'line\']=$x813->attributes[\'column\']=0;}throw new JSException($x813,185,16,\'<image>/09_date.js\');}$x809=$x807->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x810=$x809($global,$x803,$x807,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x815=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/09_date.js\');$_TypeError=&$x815[0];list(,$WTypeError,$STypeError,$UTypeError)=$x815;$x816=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x817=$x816($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x817->class)&&$x817->class===\'Error\'&&!isset($x817->properties[\'file\'])&&!isset($x817->properties[\'line\'])&&!isset($x817->properties[\'column\'])){$x817->properties[\'file\']=\'<image>/09_date.js\';$x817->properties[\'line\']=185;$x817->properties[\'column\']=35;$x817->attributes[\'file\']=$x817->attributes[\'line\']=$x817->attributes[\'column\']=0;}throw new JSException($x817,185,35,\'<image>/09_date.js\');}$x814=JS::toObject($leThis,$global);unset($x818,$W818,$S818,$U818);$x819=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x814,JS::toString(\'getMinutes\',$global),185,35,\'<image>/09_date.js\');$x818=&$x819[0];list(,$W818,$S818,$U818)=$x819;if(!(is_object($x818)&&isset($x818->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x822=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/09_date.js\');$_TypeError=&$x822[0];list(,$WTypeError,$STypeError,$UTypeError)=$x822;$x823=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x824=$x823($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x824->class)&&$x824->class===\'Error\'&&!isset($x824->properties[\'file\'])&&!isset($x824->properties[\'line\'])&&!isset($x824->properties[\'column\'])){$x824->properties[\'file\']=\'<image>/09_date.js\';$x824->properties[\'line\']=185;$x824->properties[\'column\']=35;$x824->attributes[\'file\']=$x824->attributes[\'line\']=$x824->attributes[\'column\']=0;}throw new JSException($x824,185,35,\'<image>/09_date.js\');}$x820=$x818->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x821=$x820($global,$x814,$x818,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x764=clone JS::$objectTemplate;unset($x825,$W825,$S825,$U825);$x826=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),183,16,\'<image>/09_date.js\');$x825=&$x826[0];list(,$W825,$S825,$U825)=$x826;$x765=$x825;$x764->prototype=$x765;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x829=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),183,16,\'<image>/09_date.js\');$_TypeError=&$x829[0];list(,$WTypeError,$STypeError,$UTypeError)=$x829;$x830=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x831=$x830($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x831->class)&&$x831->class===\'Error\'&&!isset($x831->properties[\'file\'])&&!isset($x831->properties[\'line\'])&&!isset($x831->properties[\'column\'])){$x831->properties[\'file\']=\'<image>/09_date.js\';$x831->properties[\'line\']=183;$x831->properties[\'column\']=16;$x831->attributes[\'file\']=$x831->attributes[\'line\']=$x831->attributes[\'column\']=0;}throw new JSException($x831,183,16,\'<image>/09_date.js\');}$x827=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x828=$x827($global,$x764,$_Date,array($x777,$x788,$x799,$x810,$x821,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x765=$x828;if(is_object($x765)&&$x765!==JS::$undefined){$x764=$x765;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x764;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x860 =& $scope->properties['arguments'];
$x860->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x860->properties[$i] = $args[$i];
$x860->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x861 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x861, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x863 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 28, '<image>/09_date.js');
$_TypeError =& $x863[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x863;
$x864 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x865 = $x864($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x865->class) && $x865->class === 'Error' && !isset($x865->properties['file']) && !isset($x865->properties['line']) && !isset($x865->properties['column'])) {$x865->properties['file'] = '<image>/09_date.js';$x865->properties['line'] = 197;$x865->properties['column'] = 28;$x865->attributes['file'] = $x865->attributes['line'] = $x865->attributes['column'] = 0; }
throw new JSException($x865, 197, 28, '<image>/09_date.js');
}
$x862 = JS::toObject($leThis, $global);
unset($x866, $W866, $S866, $U866);
$x867 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x862, JS::toString('getSeconds', $global), 197, 28, '<image>/09_date.js');
$x866 =& $x867[0]; list(,$W866,$S866,$U866) = $x867;
if (!(is_object($x866) && isset($x866->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x870 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 28, '<image>/09_date.js');
$_TypeError =& $x870[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x870;
$x871 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x872 = $x871($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x872->class) && $x872->class === 'Error' && !isset($x872->properties['file']) && !isset($x872->properties['line']) && !isset($x872->properties['column'])) {$x872->properties['file'] = '<image>/09_date.js';$x872->properties['line'] = 197;$x872->properties['column'] = 28;$x872->attributes['file'] = $x872->attributes['line'] = $x872->attributes['column'] = 0; }
throw new JSException($x872, 197, 28, '<image>/09_date.js');
}
$x868 = $x866->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x869 = $x868($global, $x862, $x866, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x869;;
};
$x873 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x873, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x875 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 201, 28, '<image>/09_date.js');
$_TypeError =& $x875[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x875;
$x876 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x877 = $x876($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x877->class) && $x877->class === 'Error' && !isset($x877->properties['file']) && !isset($x877->properties['line']) && !isset($x877->properties['column'])) {$x877->properties['file'] = '<image>/09_date.js';$x877->properties['line'] = 201;$x877->properties['column'] = 28;$x877->attributes['file'] = $x877->attributes['line'] = $x877->attributes['column'] = 0; }
throw new JSException($x877, 201, 28, '<image>/09_date.js');
}
$x874 = JS::toObject($leThis, $global);
unset($x878, $W878, $S878, $U878);
$x879 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x874, JS::toString('getMilliseconds', $global), 201, 28, '<image>/09_date.js');
$x878 =& $x879[0]; list(,$W878,$S878,$U878) = $x879;
if (!(is_object($x878) && isset($x878->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x882 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 201, 28, '<image>/09_date.js');
$_TypeError =& $x882[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x882;
$x883 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x884 = $x883($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x884->class) && $x884->class === 'Error' && !isset($x884->properties['file']) && !isset($x884->properties['line']) && !isset($x884->properties['column'])) {$x884->properties['file'] = '<image>/09_date.js';$x884->properties['line'] = 201;$x884->properties['column'] = 28;$x884->attributes['file'] = $x884->attributes['line'] = $x884->attributes['column'] = 0; }
throw new JSException($x884, 201, 28, '<image>/09_date.js');
}
$x880 = $x878->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x881 = $x880($global, $x874, $x878, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x881;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x887 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 204, 20, '<image>/09_date.js');
$_Date =& $x887[0]; list(,$WDate,$SDate,$UDate) = $x887;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x888 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 204, 20, '<image>/09_date.js');
$_ReferenceError =& $x888[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x888;
$x889 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 20);
$x890 = $x889($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x890->class) && $x890->class === 'Error' && !isset($x890->properties['file']) && !isset($x890->properties['line']) && !isset($x890->properties['column'])) {$x890->properties['file'] = '<image>/09_date.js';$x890->properties['line'] = 204;$x890->properties['column'] = 20;$x890->attributes['file'] = $x890->attributes['line'] = $x890->attributes['column'] = 0; }
throw new JSException($x890, 204, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x892 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 19, '<image>/09_date.js');
$_TypeError =& $x892[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x892;
$x893 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x894 = $x893($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x894->class) && $x894->class === 'Error' && !isset($x894->properties['file']) && !isset($x894->properties['line']) && !isset($x894->properties['column'])) {$x894->properties['file'] = '<image>/09_date.js';$x894->properties['line'] = 205;$x894->properties['column'] = 19;$x894->attributes['file'] = $x894->attributes['line'] = $x894->attributes['column'] = 0; }
throw new JSException($x894, 205, 19, '<image>/09_date.js');
}
$x891 = JS::toObject($leThis, $global);
unset($x895, $W895, $S895, $U895);
$x896 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x891, JS::toString('getFullYear', $global), 205, 19, '<image>/09_date.js');
$x895 =& $x896[0]; list(,$W895,$S895,$U895) = $x896;
if (!(is_object($x895) && isset($x895->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x899 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 19, '<image>/09_date.js');
$_TypeError =& $x899[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x899;
$x900 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x901 = $x900($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x901->class) && $x901->class === 'Error' && !isset($x901->properties['file']) && !isset($x901->properties['line']) && !isset($x901->properties['column'])) {$x901->properties['file'] = '<image>/09_date.js';$x901->properties['line'] = 205;$x901->properties['column'] = 19;$x901->attributes['file'] = $x901->attributes['line'] = $x901->attributes['column'] = 0; }
throw new JSException($x901, 205, 19, '<image>/09_date.js');
}
$x897 = $x895->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x898 = $x897($global, $x891, $x895, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x903 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 36, '<image>/09_date.js');
$_TypeError =& $x903[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x903;
$x904 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x905 = $x904($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x905->class) && $x905->class === 'Error' && !isset($x905->properties['file']) && !isset($x905->properties['line']) && !isset($x905->properties['column'])) {$x905->properties['file'] = '<image>/09_date.js';$x905->properties['line'] = 205;$x905->properties['column'] = 36;$x905->attributes['file'] = $x905->attributes['line'] = $x905->attributes['column'] = 0; }
throw new JSException($x905, 205, 36, '<image>/09_date.js');
}
$x902 = JS::toObject($leThis, $global);
unset($x906, $W906, $S906, $U906);
$x907 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x902, JS::toString('getMonth', $global), 205, 36, '<image>/09_date.js');
$x906 =& $x907[0]; list(,$W906,$S906,$U906) = $x907;
if (!(is_object($x906) && isset($x906->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x910 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 36, '<image>/09_date.js');
$_TypeError =& $x910[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x910;
$x911 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x912 = $x911($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x912->class) && $x912->class === 'Error' && !isset($x912->properties['file']) && !isset($x912->properties['line']) && !isset($x912->properties['column'])) {$x912->properties['file'] = '<image>/09_date.js';$x912->properties['line'] = 205;$x912->properties['column'] = 36;$x912->attributes['file'] = $x912->attributes['line'] = $x912->attributes['column'] = 0; }
throw new JSException($x912, 205, 36, '<image>/09_date.js');
}
$x908 = $x906->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x909 = $x908($global, $x902, $x906, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x914 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 52, '<image>/09_date.js');
$_TypeError =& $x914[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x914;
$x915 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x916 = $x915($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x916->class) && $x916->class === 'Error' && !isset($x916->properties['file']) && !isset($x916->properties['line']) && !isset($x916->properties['column'])) {$x916->properties['file'] = '<image>/09_date.js';$x916->properties['line'] = 205;$x916->properties['column'] = 52;$x916->attributes['file'] = $x916->attributes['line'] = $x916->attributes['column'] = 0; }
throw new JSException($x916, 205, 52, '<image>/09_date.js');
}
$x913 = JS::toObject($leThis, $global);
unset($x917, $W917, $S917, $U917);
$x918 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x913, JS::toString('getDate', $global), 205, 52, '<image>/09_date.js');
$x917 =& $x918[0]; list(,$W917,$S917,$U917) = $x918;
if (!(is_object($x917) && isset($x917->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x921 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 52, '<image>/09_date.js');
$_TypeError =& $x921[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x921;
$x922 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x923 = $x922($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x923->class) && $x923->class === 'Error' && !isset($x923->properties['file']) && !isset($x923->properties['line']) && !isset($x923->properties['column'])) {$x923->properties['file'] = '<image>/09_date.js';$x923->properties['line'] = 205;$x923->properties['column'] = 52;$x923->attributes['file'] = $x923->attributes['line'] = $x923->attributes['column'] = 0; }
throw new JSException($x923, 205, 52, '<image>/09_date.js');
}
$x919 = $x917->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x920 = $x919($global, $x913, $x917, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x925 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 16, '<image>/09_date.js');
$_TypeError =& $x925[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x925;
$x926 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x927 = $x926($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x927->class) && $x927->class === 'Error' && !isset($x927->properties['file']) && !isset($x927->properties['line']) && !isset($x927->properties['column'])) {$x927->properties['file'] = '<image>/09_date.js';$x927->properties['line'] = 206;$x927->properties['column'] = 16;$x927->attributes['file'] = $x927->attributes['line'] = $x927->attributes['column'] = 0; }
throw new JSException($x927, 206, 16, '<image>/09_date.js');
}
$x924 = JS::toObject($leThis, $global);
unset($x928, $W928, $S928, $U928);
$x929 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x924, JS::toString('getHours', $global), 206, 16, '<image>/09_date.js');
$x928 =& $x929[0]; list(,$W928,$S928,$U928) = $x929;
if (!(is_object($x928) && isset($x928->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x932 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 16, '<image>/09_date.js');
$_TypeError =& $x932[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x932;
$x933 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x934 = $x933($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x934->class) && $x934->class === 'Error' && !isset($x934->properties['file']) && !isset($x934->properties['line']) && !isset($x934->properties['column'])) {$x934->properties['file'] = '<image>/09_date.js';$x934->properties['line'] = 206;$x934->properties['column'] = 16;$x934->attributes['file'] = $x934->attributes['line'] = $x934->attributes['column'] = 0; }
throw new JSException($x934, 206, 16, '<image>/09_date.js');
}
$x930 = $x928->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x931 = $x930($global, $x924, $x928, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x885 = clone JS::$objectTemplate;
unset($x935, $W935, $S935, $U935);
$x936 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 204, 16, '<image>/09_date.js');
$x935 =& $x936[0]; list(,$W935,$S935,$U935) = $x936;
$x886 = $x935;
$x885->prototype = $x886;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x939 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 204, 16, '<image>/09_date.js');
$_TypeError =& $x939[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x939;
$x940 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x941 = $x940($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x941->class) && $x941->class === 'Error' && !isset($x941->properties['file']) && !isset($x941->properties['line']) && !isset($x941->properties['column'])) {$x941->properties['file'] = '<image>/09_date.js';$x941->properties['line'] = 204;$x941->properties['column'] = 16;$x941->attributes['file'] = $x941->attributes['line'] = $x941->attributes['column'] = 0; }
throw new JSException($x941, 204, 16, '<image>/09_date.js');
}
$x937 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x938 = $x937($global, $x885, $_Date, array($x898, $x909, $x920, $x931, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x886 = $x938;
if (is_object($x886) && $x886 !== JS::$undefined) { $x885 = $x886; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x885;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x860=&$scope->properties[\'arguments\'];$x860->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x860->properties[$i]=$args[$i];$x860->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'minutes\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x861=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x861,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x863=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,28,\'<image>/09_date.js\');$_TypeError=&$x863[0];list(,$WTypeError,$STypeError,$UTypeError)=$x863;$x864=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x865=$x864($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x865->class)&&$x865->class===\'Error\'&&!isset($x865->properties[\'file\'])&&!isset($x865->properties[\'line\'])&&!isset($x865->properties[\'column\'])){$x865->properties[\'file\']=\'<image>/09_date.js\';$x865->properties[\'line\']=197;$x865->properties[\'column\']=28;$x865->attributes[\'file\']=$x865->attributes[\'line\']=$x865->attributes[\'column\']=0;}throw new JSException($x865,197,28,\'<image>/09_date.js\');}$x862=JS::toObject($leThis,$global);unset($x866,$W866,$S866,$U866);$x867=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x862,JS::toString(\'getSeconds\',$global),197,28,\'<image>/09_date.js\');$x866=&$x867[0];list(,$W866,$S866,$U866)=$x867;if(!(is_object($x866)&&isset($x866->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x870=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,28,\'<image>/09_date.js\');$_TypeError=&$x870[0];list(,$WTypeError,$STypeError,$UTypeError)=$x870;$x871=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x872=$x871($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x872->class)&&$x872->class===\'Error\'&&!isset($x872->properties[\'file\'])&&!isset($x872->properties[\'line\'])&&!isset($x872->properties[\'column\'])){$x872->properties[\'file\']=\'<image>/09_date.js\';$x872->properties[\'line\']=197;$x872->properties[\'column\']=28;$x872->attributes[\'file\']=$x872->attributes[\'line\']=$x872->attributes[\'column\']=0;}throw new JSException($x872,197,28,\'<image>/09_date.js\');}$x868=$x866->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x869=$x868($global,$x862,$x866,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x869;}$x873=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x873,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x875=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),201,28,\'<image>/09_date.js\');$_TypeError=&$x875[0];list(,$WTypeError,$STypeError,$UTypeError)=$x875;$x876=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x877=$x876($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x877->class)&&$x877->class===\'Error\'&&!isset($x877->properties[\'file\'])&&!isset($x877->properties[\'line\'])&&!isset($x877->properties[\'column\'])){$x877->properties[\'file\']=\'<image>/09_date.js\';$x877->properties[\'line\']=201;$x877->properties[\'column\']=28;$x877->attributes[\'file\']=$x877->attributes[\'line\']=$x877->attributes[\'column\']=0;}throw new JSException($x877,201,28,\'<image>/09_date.js\');}$x874=JS::toObject($leThis,$global);unset($x878,$W878,$S878,$U878);$x879=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x874,JS::toString(\'getMilliseconds\',$global),201,28,\'<image>/09_date.js\');$x878=&$x879[0];list(,$W878,$S878,$U878)=$x879;if(!(is_object($x878)&&isset($x878->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x882=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),201,28,\'<image>/09_date.js\');$_TypeError=&$x882[0];list(,$WTypeError,$STypeError,$UTypeError)=$x882;$x883=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x884=$x883($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x884->class)&&$x884->class===\'Error\'&&!isset($x884->properties[\'file\'])&&!isset($x884->properties[\'line\'])&&!isset($x884->properties[\'column\'])){$x884->properties[\'file\']=\'<image>/09_date.js\';$x884->properties[\'line\']=201;$x884->properties[\'column\']=28;$x884->attributes[\'file\']=$x884->attributes[\'line\']=$x884->attributes[\'column\']=0;}throw new JSException($x884,201,28,\'<image>/09_date.js\');}$x880=$x878->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x881=$x880($global,$x874,$x878,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x881;}unset($_Date,$WDate,$SDate,$UDate);$x887=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),204,20,\'<image>/09_date.js\');$_Date=&$x887[0];list(,$WDate,$SDate,$UDate)=$x887;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x888=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),204,20,\'<image>/09_date.js\');$_ReferenceError=&$x888[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x888;$x889=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,20);$x890=$x889($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x890->class)&&$x890->class===\'Error\'&&!isset($x890->properties[\'file\'])&&!isset($x890->properties[\'line\'])&&!isset($x890->properties[\'column\'])){$x890->properties[\'file\']=\'<image>/09_date.js\';$x890->properties[\'line\']=204;$x890->properties[\'column\']=20;$x890->attributes[\'file\']=$x890->attributes[\'line\']=$x890->attributes[\'column\']=0;}throw new JSException($x890,204,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x892=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,19,\'<image>/09_date.js\');$_TypeError=&$x892[0];list(,$WTypeError,$STypeError,$UTypeError)=$x892;$x893=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x894=$x893($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x894->class)&&$x894->class===\'Error\'&&!isset($x894->properties[\'file\'])&&!isset($x894->properties[\'line\'])&&!isset($x894->properties[\'column\'])){$x894->properties[\'file\']=\'<image>/09_date.js\';$x894->properties[\'line\']=205;$x894->properties[\'column\']=19;$x894->attributes[\'file\']=$x894->attributes[\'line\']=$x894->attributes[\'column\']=0;}throw new JSException($x894,205,19,\'<image>/09_date.js\');}$x891=JS::toObject($leThis,$global);unset($x895,$W895,$S895,$U895);$x896=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x891,JS::toString(\'getFullYear\',$global),205,19,\'<image>/09_date.js\');$x895=&$x896[0];list(,$W895,$S895,$U895)=$x896;if(!(is_object($x895)&&isset($x895->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x899=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,19,\'<image>/09_date.js\');$_TypeError=&$x899[0];list(,$WTypeError,$STypeError,$UTypeError)=$x899;$x900=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x901=$x900($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x901->class)&&$x901->class===\'Error\'&&!isset($x901->properties[\'file\'])&&!isset($x901->properties[\'line\'])&&!isset($x901->properties[\'column\'])){$x901->properties[\'file\']=\'<image>/09_date.js\';$x901->properties[\'line\']=205;$x901->properties[\'column\']=19;$x901->attributes[\'file\']=$x901->attributes[\'line\']=$x901->attributes[\'column\']=0;}throw new JSException($x901,205,19,\'<image>/09_date.js\');}$x897=$x895->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x898=$x897($global,$x891,$x895,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x903=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,36,\'<image>/09_date.js\');$_TypeError=&$x903[0];list(,$WTypeError,$STypeError,$UTypeError)=$x903;$x904=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x905=$x904($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x905->class)&&$x905->class===\'Error\'&&!isset($x905->properties[\'file\'])&&!isset($x905->properties[\'line\'])&&!isset($x905->properties[\'column\'])){$x905->properties[\'file\']=\'<image>/09_date.js\';$x905->properties[\'line\']=205;$x905->properties[\'column\']=36;$x905->attributes[\'file\']=$x905->attributes[\'line\']=$x905->attributes[\'column\']=0;}throw new JSException($x905,205,36,\'<image>/09_date.js\');}$x902=JS::toObject($leThis,$global);unset($x906,$W906,$S906,$U906);$x907=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x902,JS::toString(\'getMonth\',$global),205,36,\'<image>/09_date.js\');$x906=&$x907[0];list(,$W906,$S906,$U906)=$x907;if(!(is_object($x906)&&isset($x906->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x910=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,36,\'<image>/09_date.js\');$_TypeError=&$x910[0];list(,$WTypeError,$STypeError,$UTypeError)=$x910;$x911=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x912=$x911($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x912->class)&&$x912->class===\'Error\'&&!isset($x912->properties[\'file\'])&&!isset($x912->properties[\'line\'])&&!isset($x912->properties[\'column\'])){$x912->properties[\'file\']=\'<image>/09_date.js\';$x912->properties[\'line\']=205;$x912->properties[\'column\']=36;$x912->attributes[\'file\']=$x912->attributes[\'line\']=$x912->attributes[\'column\']=0;}throw new JSException($x912,205,36,\'<image>/09_date.js\');}$x908=$x906->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x909=$x908($global,$x902,$x906,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x914=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,52,\'<image>/09_date.js\');$_TypeError=&$x914[0];list(,$WTypeError,$STypeError,$UTypeError)=$x914;$x915=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x916=$x915($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x916->class)&&$x916->class===\'Error\'&&!isset($x916->properties[\'file\'])&&!isset($x916->properties[\'line\'])&&!isset($x916->properties[\'column\'])){$x916->properties[\'file\']=\'<image>/09_date.js\';$x916->properties[\'line\']=205;$x916->properties[\'column\']=52;$x916->attributes[\'file\']=$x916->attributes[\'line\']=$x916->attributes[\'column\']=0;}throw new JSException($x916,205,52,\'<image>/09_date.js\');}$x913=JS::toObject($leThis,$global);unset($x917,$W917,$S917,$U917);$x918=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x913,JS::toString(\'getDate\',$global),205,52,\'<image>/09_date.js\');$x917=&$x918[0];list(,$W917,$S917,$U917)=$x918;if(!(is_object($x917)&&isset($x917->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x921=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,52,\'<image>/09_date.js\');$_TypeError=&$x921[0];list(,$WTypeError,$STypeError,$UTypeError)=$x921;$x922=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x923=$x922($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x923->class)&&$x923->class===\'Error\'&&!isset($x923->properties[\'file\'])&&!isset($x923->properties[\'line\'])&&!isset($x923->properties[\'column\'])){$x923->properties[\'file\']=\'<image>/09_date.js\';$x923->properties[\'line\']=205;$x923->properties[\'column\']=52;$x923->attributes[\'file\']=$x923->attributes[\'line\']=$x923->attributes[\'column\']=0;}throw new JSException($x923,205,52,\'<image>/09_date.js\');}$x919=$x917->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x920=$x919($global,$x913,$x917,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x925=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),206,16,\'<image>/09_date.js\');$_TypeError=&$x925[0];list(,$WTypeError,$STypeError,$UTypeError)=$x925;$x926=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x927=$x926($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x927->class)&&$x927->class===\'Error\'&&!isset($x927->properties[\'file\'])&&!isset($x927->properties[\'line\'])&&!isset($x927->properties[\'column\'])){$x927->properties[\'file\']=\'<image>/09_date.js\';$x927->properties[\'line\']=206;$x927->properties[\'column\']=16;$x927->attributes[\'file\']=$x927->attributes[\'line\']=$x927->attributes[\'column\']=0;}throw new JSException($x927,206,16,\'<image>/09_date.js\');}$x924=JS::toObject($leThis,$global);unset($x928,$W928,$S928,$U928);$x929=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x924,JS::toString(\'getHours\',$global),206,16,\'<image>/09_date.js\');$x928=&$x929[0];list(,$W928,$S928,$U928)=$x929;if(!(is_object($x928)&&isset($x928->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x932=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),206,16,\'<image>/09_date.js\');$_TypeError=&$x932[0];list(,$WTypeError,$STypeError,$UTypeError)=$x932;$x933=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x934=$x933($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x934->class)&&$x934->class===\'Error\'&&!isset($x934->properties[\'file\'])&&!isset($x934->properties[\'line\'])&&!isset($x934->properties[\'column\'])){$x934->properties[\'file\']=\'<image>/09_date.js\';$x934->properties[\'line\']=206;$x934->properties[\'column\']=16;$x934->attributes[\'file\']=$x934->attributes[\'line\']=$x934->attributes[\'column\']=0;}throw new JSException($x934,206,16,\'<image>/09_date.js\');}$x930=$x928->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x931=$x930($global,$x924,$x928,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x885=clone JS::$objectTemplate;unset($x935,$W935,$S935,$U935);$x936=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),204,16,\'<image>/09_date.js\');$x935=&$x936[0];list(,$W935,$S935,$U935)=$x936;$x886=$x935;$x885->prototype=$x886;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x939=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),204,16,\'<image>/09_date.js\');$_TypeError=&$x939[0];list(,$WTypeError,$STypeError,$UTypeError)=$x939;$x940=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x941=$x940($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x941->class)&&$x941->class===\'Error\'&&!isset($x941->properties[\'file\'])&&!isset($x941->properties[\'line\'])&&!isset($x941->properties[\'column\'])){$x941->properties[\'file\']=\'<image>/09_date.js\';$x941->properties[\'line\']=204;$x941->properties[\'column\']=16;$x941->attributes[\'file\']=$x941->attributes[\'line\']=$x941->attributes[\'column\']=0;}throw new JSException($x941,204,16,\'<image>/09_date.js\');}$x937=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x938=$x937($global,$x885,$_Date,array($x898,$x909,$x920,$x931,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x886=$x938;if(is_object($x886)&&$x886!==JS::$undefined){$x885=$x886;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x885;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_27($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x970 =& $scope->properties['arguments'];
$x970->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x970->properties[$i] = $args[$i];
$x970->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x971 = (((gettype($_minutes) === gettype(JS::$undefined) && $_minutes === JS::$undefined))|| (((is_float($_minutes) || is_int($_minutes)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_minutes == JS::$undefined));
if (JS::toBoolean($x971, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x973 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 28, '<image>/09_date.js');
$_TypeError =& $x973[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x973;
$x974 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x975 = $x974($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x975->class) && $x975->class === 'Error' && !isset($x975->properties['file']) && !isset($x975->properties['line']) && !isset($x975->properties['column'])) {$x975->properties['file'] = '<image>/09_date.js';$x975->properties['line'] = 218;$x975->properties['column'] = 28;$x975->attributes['file'] = $x975->attributes['line'] = $x975->attributes['column'] = 0; }
throw new JSException($x975, 218, 28, '<image>/09_date.js');
}
$x972 = JS::toObject($leThis, $global);
unset($x976, $W976, $S976, $U976);
$x977 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x972, JS::toString('getMinutes', $global), 218, 28, '<image>/09_date.js');
$x976 =& $x977[0]; list(,$W976,$S976,$U976) = $x977;
if (!(is_object($x976) && isset($x976->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x980 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 28, '<image>/09_date.js');
$_TypeError =& $x980[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x980;
$x981 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x982 = $x981($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error' && !isset($x982->properties['file']) && !isset($x982->properties['line']) && !isset($x982->properties['column'])) {$x982->properties['file'] = '<image>/09_date.js';$x982->properties['line'] = 218;$x982->properties['column'] = 28;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 218, 28, '<image>/09_date.js');
}
$x978 = $x976->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x979 = $x978($global, $x972, $x976, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x979;;
};
$x983 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x983, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x985 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 28, '<image>/09_date.js');
$_TypeError =& $x985[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x985;
$x986 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x987 = $x986($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x987->class) && $x987->class === 'Error' && !isset($x987->properties['file']) && !isset($x987->properties['line']) && !isset($x987->properties['column'])) {$x987->properties['file'] = '<image>/09_date.js';$x987->properties['line'] = 222;$x987->properties['column'] = 28;$x987->attributes['file'] = $x987->attributes['line'] = $x987->attributes['column'] = 0; }
throw new JSException($x987, 222, 28, '<image>/09_date.js');
}
$x984 = JS::toObject($leThis, $global);
unset($x988, $W988, $S988, $U988);
$x989 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x984, JS::toString('getSeconds', $global), 222, 28, '<image>/09_date.js');
$x988 =& $x989[0]; list(,$W988,$S988,$U988) = $x989;
if (!(is_object($x988) && isset($x988->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x992 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 28, '<image>/09_date.js');
$_TypeError =& $x992[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x992;
$x993 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x994 = $x993($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x994->class) && $x994->class === 'Error' && !isset($x994->properties['file']) && !isset($x994->properties['line']) && !isset($x994->properties['column'])) {$x994->properties['file'] = '<image>/09_date.js';$x994->properties['line'] = 222;$x994->properties['column'] = 28;$x994->attributes['file'] = $x994->attributes['line'] = $x994->attributes['column'] = 0; }
throw new JSException($x994, 222, 28, '<image>/09_date.js');
}
$x990 = $x988->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x991 = $x990($global, $x984, $x988, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x991;;
};
$x995 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x995, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x997 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 226, 28, '<image>/09_date.js');
$_TypeError =& $x997[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x997;
$x998 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x999 = $x998($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x999->class) && $x999->class === 'Error' && !isset($x999->properties['file']) && !isset($x999->properties['line']) && !isset($x999->properties['column'])) {$x999->properties['file'] = '<image>/09_date.js';$x999->properties['line'] = 226;$x999->properties['column'] = 28;$x999->attributes['file'] = $x999->attributes['line'] = $x999->attributes['column'] = 0; }
throw new JSException($x999, 226, 28, '<image>/09_date.js');
}
$x996 = JS::toObject($leThis, $global);
unset($x1000, $W1000, $S1000, $U1000);
$x1001 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x996, JS::toString('getMilliseconds', $global), 226, 28, '<image>/09_date.js');
$x1000 =& $x1001[0]; list(,$W1000,$S1000,$U1000) = $x1001;
if (!(is_object($x1000) && isset($x1000->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1004 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 226, 28, '<image>/09_date.js');
$_TypeError =& $x1004[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1004;
$x1005 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x1006 = $x1005($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1006->class) && $x1006->class === 'Error' && !isset($x1006->properties['file']) && !isset($x1006->properties['line']) && !isset($x1006->properties['column'])) {$x1006->properties['file'] = '<image>/09_date.js';$x1006->properties['line'] = 226;$x1006->properties['column'] = 28;$x1006->attributes['file'] = $x1006->attributes['line'] = $x1006->attributes['column'] = 0; }
throw new JSException($x1006, 226, 28, '<image>/09_date.js');
}
$x1002 = $x1000->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x1003 = $x1002($global, $x996, $x1000, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x1003;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1009 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 229, 20, '<image>/09_date.js');
$_Date =& $x1009[0]; list(,$WDate,$SDate,$UDate) = $x1009;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1010 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 229, 20, '<image>/09_date.js');
$_ReferenceError =& $x1010[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1010;
$x1011 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 20);
$x1012 = $x1011($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1012->class) && $x1012->class === 'Error' && !isset($x1012->properties['file']) && !isset($x1012->properties['line']) && !isset($x1012->properties['column'])) {$x1012->properties['file'] = '<image>/09_date.js';$x1012->properties['line'] = 229;$x1012->properties['column'] = 20;$x1012->attributes['file'] = $x1012->attributes['line'] = $x1012->attributes['column'] = 0; }
throw new JSException($x1012, 229, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1014 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 19, '<image>/09_date.js');
$_TypeError =& $x1014[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1014;
$x1015 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1016 = $x1015($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1016->class) && $x1016->class === 'Error' && !isset($x1016->properties['file']) && !isset($x1016->properties['line']) && !isset($x1016->properties['column'])) {$x1016->properties['file'] = '<image>/09_date.js';$x1016->properties['line'] = 230;$x1016->properties['column'] = 19;$x1016->attributes['file'] = $x1016->attributes['line'] = $x1016->attributes['column'] = 0; }
throw new JSException($x1016, 230, 19, '<image>/09_date.js');
}
$x1013 = JS::toObject($leThis, $global);
unset($x1017, $W1017, $S1017, $U1017);
$x1018 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1013, JS::toString('getFullYear', $global), 230, 19, '<image>/09_date.js');
$x1017 =& $x1018[0]; list(,$W1017,$S1017,$U1017) = $x1018;
if (!(is_object($x1017) && isset($x1017->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1021 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 19, '<image>/09_date.js');
$_TypeError =& $x1021[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1021;
$x1022 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1023 = $x1022($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1023->class) && $x1023->class === 'Error' && !isset($x1023->properties['file']) && !isset($x1023->properties['line']) && !isset($x1023->properties['column'])) {$x1023->properties['file'] = '<image>/09_date.js';$x1023->properties['line'] = 230;$x1023->properties['column'] = 19;$x1023->attributes['file'] = $x1023->attributes['line'] = $x1023->attributes['column'] = 0; }
throw new JSException($x1023, 230, 19, '<image>/09_date.js');
}
$x1019 = $x1017->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1020 = $x1019($global, $x1013, $x1017, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1025 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 36, '<image>/09_date.js');
$_TypeError =& $x1025[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1025;
$x1026 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1027 = $x1026($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1027->class) && $x1027->class === 'Error' && !isset($x1027->properties['file']) && !isset($x1027->properties['line']) && !isset($x1027->properties['column'])) {$x1027->properties['file'] = '<image>/09_date.js';$x1027->properties['line'] = 230;$x1027->properties['column'] = 36;$x1027->attributes['file'] = $x1027->attributes['line'] = $x1027->attributes['column'] = 0; }
throw new JSException($x1027, 230, 36, '<image>/09_date.js');
}
$x1024 = JS::toObject($leThis, $global);
unset($x1028, $W1028, $S1028, $U1028);
$x1029 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1024, JS::toString('getMonth', $global), 230, 36, '<image>/09_date.js');
$x1028 =& $x1029[0]; list(,$W1028,$S1028,$U1028) = $x1029;
if (!(is_object($x1028) && isset($x1028->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1032 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 36, '<image>/09_date.js');
$_TypeError =& $x1032[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1032;
$x1033 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1034 = $x1033($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1034->class) && $x1034->class === 'Error' && !isset($x1034->properties['file']) && !isset($x1034->properties['line']) && !isset($x1034->properties['column'])) {$x1034->properties['file'] = '<image>/09_date.js';$x1034->properties['line'] = 230;$x1034->properties['column'] = 36;$x1034->attributes['file'] = $x1034->attributes['line'] = $x1034->attributes['column'] = 0; }
throw new JSException($x1034, 230, 36, '<image>/09_date.js');
}
$x1030 = $x1028->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1031 = $x1030($global, $x1024, $x1028, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1036 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 52, '<image>/09_date.js');
$_TypeError =& $x1036[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1036;
$x1037 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1038 = $x1037($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1038->class) && $x1038->class === 'Error' && !isset($x1038->properties['file']) && !isset($x1038->properties['line']) && !isset($x1038->properties['column'])) {$x1038->properties['file'] = '<image>/09_date.js';$x1038->properties['line'] = 230;$x1038->properties['column'] = 52;$x1038->attributes['file'] = $x1038->attributes['line'] = $x1038->attributes['column'] = 0; }
throw new JSException($x1038, 230, 52, '<image>/09_date.js');
}
$x1035 = JS::toObject($leThis, $global);
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1035, JS::toString('getDate', $global), 230, 52, '<image>/09_date.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
if (!(is_object($x1039) && isset($x1039->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1043 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 52, '<image>/09_date.js');
$_TypeError =& $x1043[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1043;
$x1044 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1045 = $x1044($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1045->class) && $x1045->class === 'Error' && !isset($x1045->properties['file']) && !isset($x1045->properties['line']) && !isset($x1045->properties['column'])) {$x1045->properties['file'] = '<image>/09_date.js';$x1045->properties['line'] = 230;$x1045->properties['column'] = 52;$x1045->attributes['file'] = $x1045->attributes['line'] = $x1045->attributes['column'] = 0; }
throw new JSException($x1045, 230, 52, '<image>/09_date.js');
}
$x1041 = $x1039->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1042 = $x1041($global, $x1035, $x1039, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1007 = clone JS::$objectTemplate;
unset($x1046, $W1046, $S1046, $U1046);
$x1047 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 229, 16, '<image>/09_date.js');
$x1046 =& $x1047[0]; list(,$W1046,$S1046,$U1046) = $x1047;
$x1008 = $x1046;
$x1007->prototype = $x1008;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1050 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 16, '<image>/09_date.js');
$_TypeError =& $x1050[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1050;
$x1051 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1052 = $x1051($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1052->class) && $x1052->class === 'Error' && !isset($x1052->properties['file']) && !isset($x1052->properties['line']) && !isset($x1052->properties['column'])) {$x1052->properties['file'] = '<image>/09_date.js';$x1052->properties['line'] = 229;$x1052->properties['column'] = 16;$x1052->attributes['file'] = $x1052->attributes['line'] = $x1052->attributes['column'] = 0; }
throw new JSException($x1052, 229, 16, '<image>/09_date.js');
}
$x1048 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1049 = $x1048($global, $x1007, $_Date, array($x1020, $x1031, $x1042, $_hours, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1008 = $x1049;
if (is_object($x1008) && $x1008 !== JS::$undefined) { $x1007 = $x1008; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1007;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_27($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x970=&$scope->properties[\'arguments\'];$x970->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x970->properties[$i]=$args[$i];$x970->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'hours\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x971=(((gettype($_minutes)===gettype(JS::$undefined)&&$_minutes===JS::$undefined))||(((is_float($_minutes)||is_int($_minutes))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_minutes==JS::$undefined));if(JS::toBoolean($x971,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x973=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,28,\'<image>/09_date.js\');$_TypeError=&$x973[0];list(,$WTypeError,$STypeError,$UTypeError)=$x973;$x974=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x975=$x974($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x975->class)&&$x975->class===\'Error\'&&!isset($x975->properties[\'file\'])&&!isset($x975->properties[\'line\'])&&!isset($x975->properties[\'column\'])){$x975->properties[\'file\']=\'<image>/09_date.js\';$x975->properties[\'line\']=218;$x975->properties[\'column\']=28;$x975->attributes[\'file\']=$x975->attributes[\'line\']=$x975->attributes[\'column\']=0;}throw new JSException($x975,218,28,\'<image>/09_date.js\');}$x972=JS::toObject($leThis,$global);unset($x976,$W976,$S976,$U976);$x977=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x972,JS::toString(\'getMinutes\',$global),218,28,\'<image>/09_date.js\');$x976=&$x977[0];list(,$W976,$S976,$U976)=$x977;if(!(is_object($x976)&&isset($x976->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x980=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,28,\'<image>/09_date.js\');$_TypeError=&$x980[0];list(,$WTypeError,$STypeError,$UTypeError)=$x980;$x981=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x982=$x981($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x982->class)&&$x982->class===\'Error\'&&!isset($x982->properties[\'file\'])&&!isset($x982->properties[\'line\'])&&!isset($x982->properties[\'column\'])){$x982->properties[\'file\']=\'<image>/09_date.js\';$x982->properties[\'line\']=218;$x982->properties[\'column\']=28;$x982->attributes[\'file\']=$x982->attributes[\'line\']=$x982->attributes[\'column\']=0;}throw new JSException($x982,218,28,\'<image>/09_date.js\');}$x978=$x976->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x979=$x978($global,$x972,$x976,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x979;}$x983=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x983,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x985=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,28,\'<image>/09_date.js\');$_TypeError=&$x985[0];list(,$WTypeError,$STypeError,$UTypeError)=$x985;$x986=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x987=$x986($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x987->class)&&$x987->class===\'Error\'&&!isset($x987->properties[\'file\'])&&!isset($x987->properties[\'line\'])&&!isset($x987->properties[\'column\'])){$x987->properties[\'file\']=\'<image>/09_date.js\';$x987->properties[\'line\']=222;$x987->properties[\'column\']=28;$x987->attributes[\'file\']=$x987->attributes[\'line\']=$x987->attributes[\'column\']=0;}throw new JSException($x987,222,28,\'<image>/09_date.js\');}$x984=JS::toObject($leThis,$global);unset($x988,$W988,$S988,$U988);$x989=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x984,JS::toString(\'getSeconds\',$global),222,28,\'<image>/09_date.js\');$x988=&$x989[0];list(,$W988,$S988,$U988)=$x989;if(!(is_object($x988)&&isset($x988->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x992=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,28,\'<image>/09_date.js\');$_TypeError=&$x992[0];list(,$WTypeError,$STypeError,$UTypeError)=$x992;$x993=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x994=$x993($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x994->class)&&$x994->class===\'Error\'&&!isset($x994->properties[\'file\'])&&!isset($x994->properties[\'line\'])&&!isset($x994->properties[\'column\'])){$x994->properties[\'file\']=\'<image>/09_date.js\';$x994->properties[\'line\']=222;$x994->properties[\'column\']=28;$x994->attributes[\'file\']=$x994->attributes[\'line\']=$x994->attributes[\'column\']=0;}throw new JSException($x994,222,28,\'<image>/09_date.js\');}$x990=$x988->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x991=$x990($global,$x984,$x988,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x991;}$x995=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x995,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x997=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),226,28,\'<image>/09_date.js\');$_TypeError=&$x997[0];list(,$WTypeError,$STypeError,$UTypeError)=$x997;$x998=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x999=$x998($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x999->class)&&$x999->class===\'Error\'&&!isset($x999->properties[\'file\'])&&!isset($x999->properties[\'line\'])&&!isset($x999->properties[\'column\'])){$x999->properties[\'file\']=\'<image>/09_date.js\';$x999->properties[\'line\']=226;$x999->properties[\'column\']=28;$x999->attributes[\'file\']=$x999->attributes[\'line\']=$x999->attributes[\'column\']=0;}throw new JSException($x999,226,28,\'<image>/09_date.js\');}$x996=JS::toObject($leThis,$global);unset($x1000,$W1000,$S1000,$U1000);$x1001=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x996,JS::toString(\'getMilliseconds\',$global),226,28,\'<image>/09_date.js\');$x1000=&$x1001[0];list(,$W1000,$S1000,$U1000)=$x1001;if(!(is_object($x1000)&&isset($x1000->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1004=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),226,28,\'<image>/09_date.js\');$_TypeError=&$x1004[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1004;$x1005=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x1006=$x1005($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1006->class)&&$x1006->class===\'Error\'&&!isset($x1006->properties[\'file\'])&&!isset($x1006->properties[\'line\'])&&!isset($x1006->properties[\'column\'])){$x1006->properties[\'file\']=\'<image>/09_date.js\';$x1006->properties[\'line\']=226;$x1006->properties[\'column\']=28;$x1006->attributes[\'file\']=$x1006->attributes[\'line\']=$x1006->attributes[\'column\']=0;}throw new JSException($x1006,226,28,\'<image>/09_date.js\');}$x1002=$x1000->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x1003=$x1002($global,$x996,$x1000,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x1003;}unset($_Date,$WDate,$SDate,$UDate);$x1009=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),229,20,\'<image>/09_date.js\');$_Date=&$x1009[0];list(,$WDate,$SDate,$UDate)=$x1009;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1010=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),229,20,\'<image>/09_date.js\');$_ReferenceError=&$x1010[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1010;$x1011=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,20);$x1012=$x1011($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1012->class)&&$x1012->class===\'Error\'&&!isset($x1012->properties[\'file\'])&&!isset($x1012->properties[\'line\'])&&!isset($x1012->properties[\'column\'])){$x1012->properties[\'file\']=\'<image>/09_date.js\';$x1012->properties[\'line\']=229;$x1012->properties[\'column\']=20;$x1012->attributes[\'file\']=$x1012->attributes[\'line\']=$x1012->attributes[\'column\']=0;}throw new JSException($x1012,229,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1014=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,19,\'<image>/09_date.js\');$_TypeError=&$x1014[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1014;$x1015=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1016=$x1015($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1016->class)&&$x1016->class===\'Error\'&&!isset($x1016->properties[\'file\'])&&!isset($x1016->properties[\'line\'])&&!isset($x1016->properties[\'column\'])){$x1016->properties[\'file\']=\'<image>/09_date.js\';$x1016->properties[\'line\']=230;$x1016->properties[\'column\']=19;$x1016->attributes[\'file\']=$x1016->attributes[\'line\']=$x1016->attributes[\'column\']=0;}throw new JSException($x1016,230,19,\'<image>/09_date.js\');}$x1013=JS::toObject($leThis,$global);unset($x1017,$W1017,$S1017,$U1017);$x1018=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1013,JS::toString(\'getFullYear\',$global),230,19,\'<image>/09_date.js\');$x1017=&$x1018[0];list(,$W1017,$S1017,$U1017)=$x1018;if(!(is_object($x1017)&&isset($x1017->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1021=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,19,\'<image>/09_date.js\');$_TypeError=&$x1021[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1021;$x1022=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1023=$x1022($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1023->class)&&$x1023->class===\'Error\'&&!isset($x1023->properties[\'file\'])&&!isset($x1023->properties[\'line\'])&&!isset($x1023->properties[\'column\'])){$x1023->properties[\'file\']=\'<image>/09_date.js\';$x1023->properties[\'line\']=230;$x1023->properties[\'column\']=19;$x1023->attributes[\'file\']=$x1023->attributes[\'line\']=$x1023->attributes[\'column\']=0;}throw new JSException($x1023,230,19,\'<image>/09_date.js\');}$x1019=$x1017->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1020=$x1019($global,$x1013,$x1017,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1025=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,36,\'<image>/09_date.js\');$_TypeError=&$x1025[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1025;$x1026=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1027=$x1026($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1027->class)&&$x1027->class===\'Error\'&&!isset($x1027->properties[\'file\'])&&!isset($x1027->properties[\'line\'])&&!isset($x1027->properties[\'column\'])){$x1027->properties[\'file\']=\'<image>/09_date.js\';$x1027->properties[\'line\']=230;$x1027->properties[\'column\']=36;$x1027->attributes[\'file\']=$x1027->attributes[\'line\']=$x1027->attributes[\'column\']=0;}throw new JSException($x1027,230,36,\'<image>/09_date.js\');}$x1024=JS::toObject($leThis,$global);unset($x1028,$W1028,$S1028,$U1028);$x1029=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1024,JS::toString(\'getMonth\',$global),230,36,\'<image>/09_date.js\');$x1028=&$x1029[0];list(,$W1028,$S1028,$U1028)=$x1029;if(!(is_object($x1028)&&isset($x1028->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1032=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,36,\'<image>/09_date.js\');$_TypeError=&$x1032[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1032;$x1033=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1034=$x1033($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1034->class)&&$x1034->class===\'Error\'&&!isset($x1034->properties[\'file\'])&&!isset($x1034->properties[\'line\'])&&!isset($x1034->properties[\'column\'])){$x1034->properties[\'file\']=\'<image>/09_date.js\';$x1034->properties[\'line\']=230;$x1034->properties[\'column\']=36;$x1034->attributes[\'file\']=$x1034->attributes[\'line\']=$x1034->attributes[\'column\']=0;}throw new JSException($x1034,230,36,\'<image>/09_date.js\');}$x1030=$x1028->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1031=$x1030($global,$x1024,$x1028,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1036=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,52,\'<image>/09_date.js\');$_TypeError=&$x1036[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1036;$x1037=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1038=$x1037($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1038->class)&&$x1038->class===\'Error\'&&!isset($x1038->properties[\'file\'])&&!isset($x1038->properties[\'line\'])&&!isset($x1038->properties[\'column\'])){$x1038->properties[\'file\']=\'<image>/09_date.js\';$x1038->properties[\'line\']=230;$x1038->properties[\'column\']=52;$x1038->attributes[\'file\']=$x1038->attributes[\'line\']=$x1038->attributes[\'column\']=0;}throw new JSException($x1038,230,52,\'<image>/09_date.js\');}$x1035=JS::toObject($leThis,$global);unset($x1039,$W1039,$S1039,$U1039);$x1040=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1035,JS::toString(\'getDate\',$global),230,52,\'<image>/09_date.js\');$x1039=&$x1040[0];list(,$W1039,$S1039,$U1039)=$x1040;if(!(is_object($x1039)&&isset($x1039->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1043=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,52,\'<image>/09_date.js\');$_TypeError=&$x1043[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1043;$x1044=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1045=$x1044($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1045->class)&&$x1045->class===\'Error\'&&!isset($x1045->properties[\'file\'])&&!isset($x1045->properties[\'line\'])&&!isset($x1045->properties[\'column\'])){$x1045->properties[\'file\']=\'<image>/09_date.js\';$x1045->properties[\'line\']=230;$x1045->properties[\'column\']=52;$x1045->attributes[\'file\']=$x1045->attributes[\'line\']=$x1045->attributes[\'column\']=0;}throw new JSException($x1045,230,52,\'<image>/09_date.js\');}$x1041=$x1039->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1042=$x1041($global,$x1035,$x1039,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1007=clone JS::$objectTemplate;unset($x1046,$W1046,$S1046,$U1046);$x1047=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),229,16,\'<image>/09_date.js\');$x1046=&$x1047[0];list(,$W1046,$S1046,$U1046)=$x1047;$x1008=$x1046;$x1007->prototype=$x1008;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1050=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),229,16,\'<image>/09_date.js\');$_TypeError=&$x1050[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1050;$x1051=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1052=$x1051($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1052->class)&&$x1052->class===\'Error\'&&!isset($x1052->properties[\'file\'])&&!isset($x1052->properties[\'line\'])&&!isset($x1052->properties[\'column\'])){$x1052->properties[\'file\']=\'<image>/09_date.js\';$x1052->properties[\'line\']=229;$x1052->properties[\'column\']=16;$x1052->attributes[\'file\']=$x1052->attributes[\'line\']=$x1052->attributes[\'column\']=0;}throw new JSException($x1052,229,16,\'<image>/09_date.js\');}$x1048=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1049=$x1048($global,$x1007,$_Date,array($x1020,$x1031,$x1042,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1008=$x1049;if(is_object($x1008)&&$x1008!==JS::$undefined){$x1007=$x1008;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1007;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_28($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1081 =& $scope->properties['arguments'];
$x1081->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1081->properties[$i] = $args[$i];
$x1081->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['date'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x1084 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 242, 20, '<image>/09_date.js');
$_Date =& $x1084[0]; list(,$WDate,$SDate,$UDate) = $x1084;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1085 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 242, 20, '<image>/09_date.js');
$_ReferenceError =& $x1085[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1085;
$x1086 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 20);
$x1087 = $x1086($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1087->class) && $x1087->class === 'Error' && !isset($x1087->properties['file']) && !isset($x1087->properties['line']) && !isset($x1087->properties['column'])) {$x1087->properties['file'] = '<image>/09_date.js';$x1087->properties['line'] = 242;$x1087->properties['column'] = 20;$x1087->attributes['file'] = $x1087->attributes['line'] = $x1087->attributes['column'] = 0; }
throw new JSException($x1087, 242, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1089 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 19, '<image>/09_date.js');
$_TypeError =& $x1089[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1089;
$x1090 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1091 = $x1090($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1091->class) && $x1091->class === 'Error' && !isset($x1091->properties['file']) && !isset($x1091->properties['line']) && !isset($x1091->properties['column'])) {$x1091->properties['file'] = '<image>/09_date.js';$x1091->properties['line'] = 243;$x1091->properties['column'] = 19;$x1091->attributes['file'] = $x1091->attributes['line'] = $x1091->attributes['column'] = 0; }
throw new JSException($x1091, 243, 19, '<image>/09_date.js');
}
$x1088 = JS::toObject($leThis, $global);
unset($x1092, $W1092, $S1092, $U1092);
$x1093 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1088, JS::toString('getFullYear', $global), 243, 19, '<image>/09_date.js');
$x1092 =& $x1093[0]; list(,$W1092,$S1092,$U1092) = $x1093;
if (!(is_object($x1092) && isset($x1092->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1096 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 19, '<image>/09_date.js');
$_TypeError =& $x1096[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1096;
$x1097 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1098 = $x1097($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1098->class) && $x1098->class === 'Error' && !isset($x1098->properties['file']) && !isset($x1098->properties['line']) && !isset($x1098->properties['column'])) {$x1098->properties['file'] = '<image>/09_date.js';$x1098->properties['line'] = 243;$x1098->properties['column'] = 19;$x1098->attributes['file'] = $x1098->attributes['line'] = $x1098->attributes['column'] = 0; }
throw new JSException($x1098, 243, 19, '<image>/09_date.js');
}
$x1094 = $x1092->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1095 = $x1094($global, $x1088, $x1092, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1100 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 36, '<image>/09_date.js');
$_TypeError =& $x1100[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1100;
$x1101 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1102 = $x1101($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1102->class) && $x1102->class === 'Error' && !isset($x1102->properties['file']) && !isset($x1102->properties['line']) && !isset($x1102->properties['column'])) {$x1102->properties['file'] = '<image>/09_date.js';$x1102->properties['line'] = 243;$x1102->properties['column'] = 36;$x1102->attributes['file'] = $x1102->attributes['line'] = $x1102->attributes['column'] = 0; }
throw new JSException($x1102, 243, 36, '<image>/09_date.js');
}
$x1099 = JS::toObject($leThis, $global);
unset($x1103, $W1103, $S1103, $U1103);
$x1104 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1099, JS::toString('getMonth', $global), 243, 36, '<image>/09_date.js');
$x1103 =& $x1104[0]; list(,$W1103,$S1103,$U1103) = $x1104;
if (!(is_object($x1103) && isset($x1103->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1107 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 36, '<image>/09_date.js');
$_TypeError =& $x1107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1107;
$x1108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1109 = $x1108($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1109->class) && $x1109->class === 'Error' && !isset($x1109->properties['file']) && !isset($x1109->properties['line']) && !isset($x1109->properties['column'])) {$x1109->properties['file'] = '<image>/09_date.js';$x1109->properties['line'] = 243;$x1109->properties['column'] = 36;$x1109->attributes['file'] = $x1109->attributes['line'] = $x1109->attributes['column'] = 0; }
throw new JSException($x1109, 243, 36, '<image>/09_date.js');
}
$x1105 = $x1103->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1106 = $x1105($global, $x1099, $x1103, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1111 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 16, '<image>/09_date.js');
$_TypeError =& $x1111[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1111;
$x1112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1113 = $x1112($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1113->class) && $x1113->class === 'Error' && !isset($x1113->properties['file']) && !isset($x1113->properties['line']) && !isset($x1113->properties['column'])) {$x1113->properties['file'] = '<image>/09_date.js';$x1113->properties['line'] = 244;$x1113->properties['column'] = 16;$x1113->attributes['file'] = $x1113->attributes['line'] = $x1113->attributes['column'] = 0; }
throw new JSException($x1113, 244, 16, '<image>/09_date.js');
}
$x1110 = JS::toObject($leThis, $global);
unset($x1114, $W1114, $S1114, $U1114);
$x1115 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1110, JS::toString('getHours', $global), 244, 16, '<image>/09_date.js');
$x1114 =& $x1115[0]; list(,$W1114,$S1114,$U1114) = $x1115;
if (!(is_object($x1114) && isset($x1114->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1118 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 16, '<image>/09_date.js');
$_TypeError =& $x1118[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1118;
$x1119 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1120 = $x1119($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1120->class) && $x1120->class === 'Error' && !isset($x1120->properties['file']) && !isset($x1120->properties['line']) && !isset($x1120->properties['column'])) {$x1120->properties['file'] = '<image>/09_date.js';$x1120->properties['line'] = 244;$x1120->properties['column'] = 16;$x1120->attributes['file'] = $x1120->attributes['line'] = $x1120->attributes['column'] = 0; }
throw new JSException($x1120, 244, 16, '<image>/09_date.js');
}
$x1116 = $x1114->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1117 = $x1116($global, $x1110, $x1114, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1122 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 35, '<image>/09_date.js');
$_TypeError =& $x1122[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1122;
$x1123 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1124 = $x1123($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1124->class) && $x1124->class === 'Error' && !isset($x1124->properties['file']) && !isset($x1124->properties['line']) && !isset($x1124->properties['column'])) {$x1124->properties['file'] = '<image>/09_date.js';$x1124->properties['line'] = 244;$x1124->properties['column'] = 35;$x1124->attributes['file'] = $x1124->attributes['line'] = $x1124->attributes['column'] = 0; }
throw new JSException($x1124, 244, 35, '<image>/09_date.js');
}
$x1121 = JS::toObject($leThis, $global);
unset($x1125, $W1125, $S1125, $U1125);
$x1126 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1121, JS::toString('getMinutes', $global), 244, 35, '<image>/09_date.js');
$x1125 =& $x1126[0]; list(,$W1125,$S1125,$U1125) = $x1126;
if (!(is_object($x1125) && isset($x1125->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1129 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 35, '<image>/09_date.js');
$_TypeError =& $x1129[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1129;
$x1130 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1131 = $x1130($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1131->class) && $x1131->class === 'Error' && !isset($x1131->properties['file']) && !isset($x1131->properties['line']) && !isset($x1131->properties['column'])) {$x1131->properties['file'] = '<image>/09_date.js';$x1131->properties['line'] = 244;$x1131->properties['column'] = 35;$x1131->attributes['file'] = $x1131->attributes['line'] = $x1131->attributes['column'] = 0; }
throw new JSException($x1131, 244, 35, '<image>/09_date.js');
}
$x1127 = $x1125->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1128 = $x1127($global, $x1121, $x1125, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1133 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 54, '<image>/09_date.js');
$_TypeError =& $x1133[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1133;
$x1134 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1135 = $x1134($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1135->class) && $x1135->class === 'Error' && !isset($x1135->properties['file']) && !isset($x1135->properties['line']) && !isset($x1135->properties['column'])) {$x1135->properties['file'] = '<image>/09_date.js';$x1135->properties['line'] = 244;$x1135->properties['column'] = 54;$x1135->attributes['file'] = $x1135->attributes['line'] = $x1135->attributes['column'] = 0; }
throw new JSException($x1135, 244, 54, '<image>/09_date.js');
}
$x1132 = JS::toObject($leThis, $global);
unset($x1136, $W1136, $S1136, $U1136);
$x1137 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1132, JS::toString('getSeconds', $global), 244, 54, '<image>/09_date.js');
$x1136 =& $x1137[0]; list(,$W1136,$S1136,$U1136) = $x1137;
if (!(is_object($x1136) && isset($x1136->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1140 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 54, '<image>/09_date.js');
$_TypeError =& $x1140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1140;
$x1141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1142 = $x1141($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1142->class) && $x1142->class === 'Error' && !isset($x1142->properties['file']) && !isset($x1142->properties['line']) && !isset($x1142->properties['column'])) {$x1142->properties['file'] = '<image>/09_date.js';$x1142->properties['line'] = 244;$x1142->properties['column'] = 54;$x1142->attributes['file'] = $x1142->attributes['line'] = $x1142->attributes['column'] = 0; }
throw new JSException($x1142, 244, 54, '<image>/09_date.js');
}
$x1138 = $x1136->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1139 = $x1138($global, $x1132, $x1136, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1144 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 78, '<image>/09_date.js');
$_TypeError =& $x1144[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1144;
$x1145 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1146 = $x1145($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1146->class) && $x1146->class === 'Error' && !isset($x1146->properties['file']) && !isset($x1146->properties['line']) && !isset($x1146->properties['column'])) {$x1146->properties['file'] = '<image>/09_date.js';$x1146->properties['line'] = 244;$x1146->properties['column'] = 78;$x1146->attributes['file'] = $x1146->attributes['line'] = $x1146->attributes['column'] = 0; }
throw new JSException($x1146, 244, 78, '<image>/09_date.js');
}
$x1143 = JS::toObject($leThis, $global);
unset($x1147, $W1147, $S1147, $U1147);
$x1148 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1143, JS::toString('getMilliseconds', $global), 244, 78, '<image>/09_date.js');
$x1147 =& $x1148[0]; list(,$W1147,$S1147,$U1147) = $x1148;
if (!(is_object($x1147) && isset($x1147->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1151 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 78, '<image>/09_date.js');
$_TypeError =& $x1151[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1151;
$x1152 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1153 = $x1152($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1153->class) && $x1153->class === 'Error' && !isset($x1153->properties['file']) && !isset($x1153->properties['line']) && !isset($x1153->properties['column'])) {$x1153->properties['file'] = '<image>/09_date.js';$x1153->properties['line'] = 244;$x1153->properties['column'] = 78;$x1153->attributes['file'] = $x1153->attributes['line'] = $x1153->attributes['column'] = 0; }
throw new JSException($x1153, 244, 78, '<image>/09_date.js');
}
$x1149 = $x1147->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1150 = $x1149($global, $x1143, $x1147, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1082 = clone JS::$objectTemplate;
unset($x1154, $W1154, $S1154, $U1154);
$x1155 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 242, 16, '<image>/09_date.js');
$x1154 =& $x1155[0]; list(,$W1154,$S1154,$U1154) = $x1155;
$x1083 = $x1154;
$x1082->prototype = $x1083;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1158 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 242, 16, '<image>/09_date.js');
$_TypeError =& $x1158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1158;
$x1159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1160 = $x1159($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1160->class) && $x1160->class === 'Error' && !isset($x1160->properties['file']) && !isset($x1160->properties['line']) && !isset($x1160->properties['column'])) {$x1160->properties['file'] = '<image>/09_date.js';$x1160->properties['line'] = 242;$x1160->properties['column'] = 16;$x1160->attributes['file'] = $x1160->attributes['line'] = $x1160->attributes['column'] = 0; }
throw new JSException($x1160, 242, 16, '<image>/09_date.js');
}
$x1156 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1157 = $x1156($global, $x1082, $_Date, array($x1095, $x1106, $_date, $x1117, $x1128, $x1139, $x1150), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1083 = $x1157;
if (is_object($x1083) && $x1083 !== JS::$undefined) { $x1082 = $x1083; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1082;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_28($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1081=&$scope->properties[\'arguments\'];$x1081->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1081->properties[$i]=$args[$i];$x1081->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'date\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x1084=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),242,20,\'<image>/09_date.js\');$_Date=&$x1084[0];list(,$WDate,$SDate,$UDate)=$x1084;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1085=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),242,20,\'<image>/09_date.js\');$_ReferenceError=&$x1085[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1085;$x1086=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,20);$x1087=$x1086($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1087->class)&&$x1087->class===\'Error\'&&!isset($x1087->properties[\'file\'])&&!isset($x1087->properties[\'line\'])&&!isset($x1087->properties[\'column\'])){$x1087->properties[\'file\']=\'<image>/09_date.js\';$x1087->properties[\'line\']=242;$x1087->properties[\'column\']=20;$x1087->attributes[\'file\']=$x1087->attributes[\'line\']=$x1087->attributes[\'column\']=0;}throw new JSException($x1087,242,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1089=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,19,\'<image>/09_date.js\');$_TypeError=&$x1089[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1089;$x1090=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1091=$x1090($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1091->class)&&$x1091->class===\'Error\'&&!isset($x1091->properties[\'file\'])&&!isset($x1091->properties[\'line\'])&&!isset($x1091->properties[\'column\'])){$x1091->properties[\'file\']=\'<image>/09_date.js\';$x1091->properties[\'line\']=243;$x1091->properties[\'column\']=19;$x1091->attributes[\'file\']=$x1091->attributes[\'line\']=$x1091->attributes[\'column\']=0;}throw new JSException($x1091,243,19,\'<image>/09_date.js\');}$x1088=JS::toObject($leThis,$global);unset($x1092,$W1092,$S1092,$U1092);$x1093=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1088,JS::toString(\'getFullYear\',$global),243,19,\'<image>/09_date.js\');$x1092=&$x1093[0];list(,$W1092,$S1092,$U1092)=$x1093;if(!(is_object($x1092)&&isset($x1092->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1096=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,19,\'<image>/09_date.js\');$_TypeError=&$x1096[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1096;$x1097=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1098=$x1097($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1098->class)&&$x1098->class===\'Error\'&&!isset($x1098->properties[\'file\'])&&!isset($x1098->properties[\'line\'])&&!isset($x1098->properties[\'column\'])){$x1098->properties[\'file\']=\'<image>/09_date.js\';$x1098->properties[\'line\']=243;$x1098->properties[\'column\']=19;$x1098->attributes[\'file\']=$x1098->attributes[\'line\']=$x1098->attributes[\'column\']=0;}throw new JSException($x1098,243,19,\'<image>/09_date.js\');}$x1094=$x1092->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1095=$x1094($global,$x1088,$x1092,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1100=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,36,\'<image>/09_date.js\');$_TypeError=&$x1100[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1100;$x1101=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1102=$x1101($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1102->class)&&$x1102->class===\'Error\'&&!isset($x1102->properties[\'file\'])&&!isset($x1102->properties[\'line\'])&&!isset($x1102->properties[\'column\'])){$x1102->properties[\'file\']=\'<image>/09_date.js\';$x1102->properties[\'line\']=243;$x1102->properties[\'column\']=36;$x1102->attributes[\'file\']=$x1102->attributes[\'line\']=$x1102->attributes[\'column\']=0;}throw new JSException($x1102,243,36,\'<image>/09_date.js\');}$x1099=JS::toObject($leThis,$global);unset($x1103,$W1103,$S1103,$U1103);$x1104=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1099,JS::toString(\'getMonth\',$global),243,36,\'<image>/09_date.js\');$x1103=&$x1104[0];list(,$W1103,$S1103,$U1103)=$x1104;if(!(is_object($x1103)&&isset($x1103->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1107=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,36,\'<image>/09_date.js\');$_TypeError=&$x1107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1107;$x1108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1109=$x1108($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1109->class)&&$x1109->class===\'Error\'&&!isset($x1109->properties[\'file\'])&&!isset($x1109->properties[\'line\'])&&!isset($x1109->properties[\'column\'])){$x1109->properties[\'file\']=\'<image>/09_date.js\';$x1109->properties[\'line\']=243;$x1109->properties[\'column\']=36;$x1109->attributes[\'file\']=$x1109->attributes[\'line\']=$x1109->attributes[\'column\']=0;}throw new JSException($x1109,243,36,\'<image>/09_date.js\');}$x1105=$x1103->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1106=$x1105($global,$x1099,$x1103,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1111=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,16,\'<image>/09_date.js\');$_TypeError=&$x1111[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1111;$x1112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1113=$x1112($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1113->class)&&$x1113->class===\'Error\'&&!isset($x1113->properties[\'file\'])&&!isset($x1113->properties[\'line\'])&&!isset($x1113->properties[\'column\'])){$x1113->properties[\'file\']=\'<image>/09_date.js\';$x1113->properties[\'line\']=244;$x1113->properties[\'column\']=16;$x1113->attributes[\'file\']=$x1113->attributes[\'line\']=$x1113->attributes[\'column\']=0;}throw new JSException($x1113,244,16,\'<image>/09_date.js\');}$x1110=JS::toObject($leThis,$global);unset($x1114,$W1114,$S1114,$U1114);$x1115=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1110,JS::toString(\'getHours\',$global),244,16,\'<image>/09_date.js\');$x1114=&$x1115[0];list(,$W1114,$S1114,$U1114)=$x1115;if(!(is_object($x1114)&&isset($x1114->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1118=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,16,\'<image>/09_date.js\');$_TypeError=&$x1118[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1118;$x1119=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1120=$x1119($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1120->class)&&$x1120->class===\'Error\'&&!isset($x1120->properties[\'file\'])&&!isset($x1120->properties[\'line\'])&&!isset($x1120->properties[\'column\'])){$x1120->properties[\'file\']=\'<image>/09_date.js\';$x1120->properties[\'line\']=244;$x1120->properties[\'column\']=16;$x1120->attributes[\'file\']=$x1120->attributes[\'line\']=$x1120->attributes[\'column\']=0;}throw new JSException($x1120,244,16,\'<image>/09_date.js\');}$x1116=$x1114->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1117=$x1116($global,$x1110,$x1114,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1122=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,35,\'<image>/09_date.js\');$_TypeError=&$x1122[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1122;$x1123=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1124=$x1123($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1124->class)&&$x1124->class===\'Error\'&&!isset($x1124->properties[\'file\'])&&!isset($x1124->properties[\'line\'])&&!isset($x1124->properties[\'column\'])){$x1124->properties[\'file\']=\'<image>/09_date.js\';$x1124->properties[\'line\']=244;$x1124->properties[\'column\']=35;$x1124->attributes[\'file\']=$x1124->attributes[\'line\']=$x1124->attributes[\'column\']=0;}throw new JSException($x1124,244,35,\'<image>/09_date.js\');}$x1121=JS::toObject($leThis,$global);unset($x1125,$W1125,$S1125,$U1125);$x1126=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1121,JS::toString(\'getMinutes\',$global),244,35,\'<image>/09_date.js\');$x1125=&$x1126[0];list(,$W1125,$S1125,$U1125)=$x1126;if(!(is_object($x1125)&&isset($x1125->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1129=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,35,\'<image>/09_date.js\');$_TypeError=&$x1129[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1129;$x1130=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1131=$x1130($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1131->class)&&$x1131->class===\'Error\'&&!isset($x1131->properties[\'file\'])&&!isset($x1131->properties[\'line\'])&&!isset($x1131->properties[\'column\'])){$x1131->properties[\'file\']=\'<image>/09_date.js\';$x1131->properties[\'line\']=244;$x1131->properties[\'column\']=35;$x1131->attributes[\'file\']=$x1131->attributes[\'line\']=$x1131->attributes[\'column\']=0;}throw new JSException($x1131,244,35,\'<image>/09_date.js\');}$x1127=$x1125->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1128=$x1127($global,$x1121,$x1125,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1133=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,54,\'<image>/09_date.js\');$_TypeError=&$x1133[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1133;$x1134=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1135=$x1134($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1135->class)&&$x1135->class===\'Error\'&&!isset($x1135->properties[\'file\'])&&!isset($x1135->properties[\'line\'])&&!isset($x1135->properties[\'column\'])){$x1135->properties[\'file\']=\'<image>/09_date.js\';$x1135->properties[\'line\']=244;$x1135->properties[\'column\']=54;$x1135->attributes[\'file\']=$x1135->attributes[\'line\']=$x1135->attributes[\'column\']=0;}throw new JSException($x1135,244,54,\'<image>/09_date.js\');}$x1132=JS::toObject($leThis,$global);unset($x1136,$W1136,$S1136,$U1136);$x1137=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1132,JS::toString(\'getSeconds\',$global),244,54,\'<image>/09_date.js\');$x1136=&$x1137[0];list(,$W1136,$S1136,$U1136)=$x1137;if(!(is_object($x1136)&&isset($x1136->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1140=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,54,\'<image>/09_date.js\');$_TypeError=&$x1140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1140;$x1141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1142=$x1141($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1142->class)&&$x1142->class===\'Error\'&&!isset($x1142->properties[\'file\'])&&!isset($x1142->properties[\'line\'])&&!isset($x1142->properties[\'column\'])){$x1142->properties[\'file\']=\'<image>/09_date.js\';$x1142->properties[\'line\']=244;$x1142->properties[\'column\']=54;$x1142->attributes[\'file\']=$x1142->attributes[\'line\']=$x1142->attributes[\'column\']=0;}throw new JSException($x1142,244,54,\'<image>/09_date.js\');}$x1138=$x1136->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1139=$x1138($global,$x1132,$x1136,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1144=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,78,\'<image>/09_date.js\');$_TypeError=&$x1144[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1144;$x1145=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1146=$x1145($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1146->class)&&$x1146->class===\'Error\'&&!isset($x1146->properties[\'file\'])&&!isset($x1146->properties[\'line\'])&&!isset($x1146->properties[\'column\'])){$x1146->properties[\'file\']=\'<image>/09_date.js\';$x1146->properties[\'line\']=244;$x1146->properties[\'column\']=78;$x1146->attributes[\'file\']=$x1146->attributes[\'line\']=$x1146->attributes[\'column\']=0;}throw new JSException($x1146,244,78,\'<image>/09_date.js\');}$x1143=JS::toObject($leThis,$global);unset($x1147,$W1147,$S1147,$U1147);$x1148=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1143,JS::toString(\'getMilliseconds\',$global),244,78,\'<image>/09_date.js\');$x1147=&$x1148[0];list(,$W1147,$S1147,$U1147)=$x1148;if(!(is_object($x1147)&&isset($x1147->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1151=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,78,\'<image>/09_date.js\');$_TypeError=&$x1151[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1151;$x1152=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1153=$x1152($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1153->class)&&$x1153->class===\'Error\'&&!isset($x1153->properties[\'file\'])&&!isset($x1153->properties[\'line\'])&&!isset($x1153->properties[\'column\'])){$x1153->properties[\'file\']=\'<image>/09_date.js\';$x1153->properties[\'line\']=244;$x1153->properties[\'column\']=78;$x1153->attributes[\'file\']=$x1153->attributes[\'line\']=$x1153->attributes[\'column\']=0;}throw new JSException($x1153,244,78,\'<image>/09_date.js\');}$x1149=$x1147->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1150=$x1149($global,$x1143,$x1147,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1082=clone JS::$objectTemplate;unset($x1154,$W1154,$S1154,$U1154);$x1155=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),242,16,\'<image>/09_date.js\');$x1154=&$x1155[0];list(,$W1154,$S1154,$U1154)=$x1155;$x1083=$x1154;$x1082->prototype=$x1083;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1158=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),242,16,\'<image>/09_date.js\');$_TypeError=&$x1158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1158;$x1159=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1160=$x1159($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1160->class)&&$x1160->class===\'Error\'&&!isset($x1160->properties[\'file\'])&&!isset($x1160->properties[\'line\'])&&!isset($x1160->properties[\'column\'])){$x1160->properties[\'file\']=\'<image>/09_date.js\';$x1160->properties[\'line\']=242;$x1160->properties[\'column\']=16;$x1160->attributes[\'file\']=$x1160->attributes[\'line\']=$x1160->attributes[\'column\']=0;}throw new JSException($x1160,242,16,\'<image>/09_date.js\');}$x1156=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1157=$x1156($global,$x1082,$_Date,array($x1095,$x1106,$_date,$x1117,$x1128,$x1139,$x1150),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1083=$x1157;if(is_object($x1083)&&$x1083!==JS::$undefined){$x1082=$x1083;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1082;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_29($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1189 =& $scope->properties['arguments'];
$x1189->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1189->properties[$i] = $args[$i];
$x1189->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['month'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1190 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1190, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1192 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 22, '<image>/09_date.js');
$_TypeError =& $x1192[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1192;
$x1193 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1194 = $x1193($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1194->class) && $x1194->class === 'Error' && !isset($x1194->properties['file']) && !isset($x1194->properties['line']) && !isset($x1194->properties['column'])) {$x1194->properties['file'] = '<image>/09_date.js';$x1194->properties['line'] = 256;$x1194->properties['column'] = 22;$x1194->attributes['file'] = $x1194->attributes['line'] = $x1194->attributes['column'] = 0; }
throw new JSException($x1194, 256, 22, '<image>/09_date.js');
}
$x1191 = JS::toObject($leThis, $global);
unset($x1195, $W1195, $S1195, $U1195);
$x1196 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1191, JS::toString('getDate', $global), 256, 22, '<image>/09_date.js');
$x1195 =& $x1196[0]; list(,$W1195,$S1195,$U1195) = $x1196;
if (!(is_object($x1195) && isset($x1195->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1199 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 22, '<image>/09_date.js');
$_TypeError =& $x1199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1199;
$x1200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1201 = $x1200($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1201->class) && $x1201->class === 'Error' && !isset($x1201->properties['file']) && !isset($x1201->properties['line']) && !isset($x1201->properties['column'])) {$x1201->properties['file'] = '<image>/09_date.js';$x1201->properties['line'] = 256;$x1201->properties['column'] = 22;$x1201->attributes['file'] = $x1201->attributes['line'] = $x1201->attributes['column'] = 0; }
throw new JSException($x1201, 256, 22, '<image>/09_date.js');
}
$x1197 = $x1195->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1198 = $x1197($global, $x1191, $x1195, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1198;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1204 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 259, 20, '<image>/09_date.js');
$_Date =& $x1204[0]; list(,$WDate,$SDate,$UDate) = $x1204;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1205 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 259, 20, '<image>/09_date.js');
$_ReferenceError =& $x1205[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1205;
$x1206 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 20);
$x1207 = $x1206($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1207->class) && $x1207->class === 'Error' && !isset($x1207->properties['file']) && !isset($x1207->properties['line']) && !isset($x1207->properties['column'])) {$x1207->properties['file'] = '<image>/09_date.js';$x1207->properties['line'] = 259;$x1207->properties['column'] = 20;$x1207->attributes['file'] = $x1207->attributes['line'] = $x1207->attributes['column'] = 0; }
throw new JSException($x1207, 259, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1209 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 260, 19, '<image>/09_date.js');
$_TypeError =& $x1209[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1209;
$x1210 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1211 = $x1210($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1211->class) && $x1211->class === 'Error' && !isset($x1211->properties['file']) && !isset($x1211->properties['line']) && !isset($x1211->properties['column'])) {$x1211->properties['file'] = '<image>/09_date.js';$x1211->properties['line'] = 260;$x1211->properties['column'] = 19;$x1211->attributes['file'] = $x1211->attributes['line'] = $x1211->attributes['column'] = 0; }
throw new JSException($x1211, 260, 19, '<image>/09_date.js');
}
$x1208 = JS::toObject($leThis, $global);
unset($x1212, $W1212, $S1212, $U1212);
$x1213 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1208, JS::toString('getFullYear', $global), 260, 19, '<image>/09_date.js');
$x1212 =& $x1213[0]; list(,$W1212,$S1212,$U1212) = $x1213;
if (!(is_object($x1212) && isset($x1212->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1216 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 260, 19, '<image>/09_date.js');
$_TypeError =& $x1216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1216;
$x1217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1218 = $x1217($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1218->class) && $x1218->class === 'Error' && !isset($x1218->properties['file']) && !isset($x1218->properties['line']) && !isset($x1218->properties['column'])) {$x1218->properties['file'] = '<image>/09_date.js';$x1218->properties['line'] = 260;$x1218->properties['column'] = 19;$x1218->attributes['file'] = $x1218->attributes['line'] = $x1218->attributes['column'] = 0; }
throw new JSException($x1218, 260, 19, '<image>/09_date.js');
}
$x1214 = $x1212->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1215 = $x1214($global, $x1208, $x1212, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1220 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 16, '<image>/09_date.js');
$_TypeError =& $x1220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1220;
$x1221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1222 = $x1221($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1222->class) && $x1222->class === 'Error' && !isset($x1222->properties['file']) && !isset($x1222->properties['line']) && !isset($x1222->properties['column'])) {$x1222->properties['file'] = '<image>/09_date.js';$x1222->properties['line'] = 261;$x1222->properties['column'] = 16;$x1222->attributes['file'] = $x1222->attributes['line'] = $x1222->attributes['column'] = 0; }
throw new JSException($x1222, 261, 16, '<image>/09_date.js');
}
$x1219 = JS::toObject($leThis, $global);
unset($x1223, $W1223, $S1223, $U1223);
$x1224 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1219, JS::toString('getHours', $global), 261, 16, '<image>/09_date.js');
$x1223 =& $x1224[0]; list(,$W1223,$S1223,$U1223) = $x1224;
if (!(is_object($x1223) && isset($x1223->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1227 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 16, '<image>/09_date.js');
$_TypeError =& $x1227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1227;
$x1228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1229 = $x1228($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1229->class) && $x1229->class === 'Error' && !isset($x1229->properties['file']) && !isset($x1229->properties['line']) && !isset($x1229->properties['column'])) {$x1229->properties['file'] = '<image>/09_date.js';$x1229->properties['line'] = 261;$x1229->properties['column'] = 16;$x1229->attributes['file'] = $x1229->attributes['line'] = $x1229->attributes['column'] = 0; }
throw new JSException($x1229, 261, 16, '<image>/09_date.js');
}
$x1225 = $x1223->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1226 = $x1225($global, $x1219, $x1223, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1231 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 35, '<image>/09_date.js');
$_TypeError =& $x1231[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1231;
$x1232 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1233 = $x1232($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1233->class) && $x1233->class === 'Error' && !isset($x1233->properties['file']) && !isset($x1233->properties['line']) && !isset($x1233->properties['column'])) {$x1233->properties['file'] = '<image>/09_date.js';$x1233->properties['line'] = 261;$x1233->properties['column'] = 35;$x1233->attributes['file'] = $x1233->attributes['line'] = $x1233->attributes['column'] = 0; }
throw new JSException($x1233, 261, 35, '<image>/09_date.js');
}
$x1230 = JS::toObject($leThis, $global);
unset($x1234, $W1234, $S1234, $U1234);
$x1235 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1230, JS::toString('getMinutes', $global), 261, 35, '<image>/09_date.js');
$x1234 =& $x1235[0]; list(,$W1234,$S1234,$U1234) = $x1235;
if (!(is_object($x1234) && isset($x1234->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1238 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 35, '<image>/09_date.js');
$_TypeError =& $x1238[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1238;
$x1239 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1240 = $x1239($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1240->class) && $x1240->class === 'Error' && !isset($x1240->properties['file']) && !isset($x1240->properties['line']) && !isset($x1240->properties['column'])) {$x1240->properties['file'] = '<image>/09_date.js';$x1240->properties['line'] = 261;$x1240->properties['column'] = 35;$x1240->attributes['file'] = $x1240->attributes['line'] = $x1240->attributes['column'] = 0; }
throw new JSException($x1240, 261, 35, '<image>/09_date.js');
}
$x1236 = $x1234->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1237 = $x1236($global, $x1230, $x1234, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1242 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 54, '<image>/09_date.js');
$_TypeError =& $x1242[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1242;
$x1243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1244 = $x1243($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1244->class) && $x1244->class === 'Error' && !isset($x1244->properties['file']) && !isset($x1244->properties['line']) && !isset($x1244->properties['column'])) {$x1244->properties['file'] = '<image>/09_date.js';$x1244->properties['line'] = 261;$x1244->properties['column'] = 54;$x1244->attributes['file'] = $x1244->attributes['line'] = $x1244->attributes['column'] = 0; }
throw new JSException($x1244, 261, 54, '<image>/09_date.js');
}
$x1241 = JS::toObject($leThis, $global);
unset($x1245, $W1245, $S1245, $U1245);
$x1246 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1241, JS::toString('getSeconds', $global), 261, 54, '<image>/09_date.js');
$x1245 =& $x1246[0]; list(,$W1245,$S1245,$U1245) = $x1246;
if (!(is_object($x1245) && isset($x1245->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1249 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 54, '<image>/09_date.js');
$_TypeError =& $x1249[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1249;
$x1250 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1251 = $x1250($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1251->class) && $x1251->class === 'Error' && !isset($x1251->properties['file']) && !isset($x1251->properties['line']) && !isset($x1251->properties['column'])) {$x1251->properties['file'] = '<image>/09_date.js';$x1251->properties['line'] = 261;$x1251->properties['column'] = 54;$x1251->attributes['file'] = $x1251->attributes['line'] = $x1251->attributes['column'] = 0; }
throw new JSException($x1251, 261, 54, '<image>/09_date.js');
}
$x1247 = $x1245->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1248 = $x1247($global, $x1241, $x1245, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1253 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 78, '<image>/09_date.js');
$_TypeError =& $x1253[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1253;
$x1254 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1255 = $x1254($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1255->class) && $x1255->class === 'Error' && !isset($x1255->properties['file']) && !isset($x1255->properties['line']) && !isset($x1255->properties['column'])) {$x1255->properties['file'] = '<image>/09_date.js';$x1255->properties['line'] = 261;$x1255->properties['column'] = 78;$x1255->attributes['file'] = $x1255->attributes['line'] = $x1255->attributes['column'] = 0; }
throw new JSException($x1255, 261, 78, '<image>/09_date.js');
}
$x1252 = JS::toObject($leThis, $global);
unset($x1256, $W1256, $S1256, $U1256);
$x1257 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1252, JS::toString('getMilliseconds', $global), 261, 78, '<image>/09_date.js');
$x1256 =& $x1257[0]; list(,$W1256,$S1256,$U1256) = $x1257;
if (!(is_object($x1256) && isset($x1256->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1260 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 78, '<image>/09_date.js');
$_TypeError =& $x1260[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1260;
$x1261 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1262 = $x1261($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1262->class) && $x1262->class === 'Error' && !isset($x1262->properties['file']) && !isset($x1262->properties['line']) && !isset($x1262->properties['column'])) {$x1262->properties['file'] = '<image>/09_date.js';$x1262->properties['line'] = 261;$x1262->properties['column'] = 78;$x1262->attributes['file'] = $x1262->attributes['line'] = $x1262->attributes['column'] = 0; }
throw new JSException($x1262, 261, 78, '<image>/09_date.js');
}
$x1258 = $x1256->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1259 = $x1258($global, $x1252, $x1256, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1202 = clone JS::$objectTemplate;
unset($x1263, $W1263, $S1263, $U1263);
$x1264 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 259, 16, '<image>/09_date.js');
$x1263 =& $x1264[0]; list(,$W1263,$S1263,$U1263) = $x1264;
$x1203 = $x1263;
$x1202->prototype = $x1203;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1267 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 259, 16, '<image>/09_date.js');
$_TypeError =& $x1267[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1267;
$x1268 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1269 = $x1268($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1269->class) && $x1269->class === 'Error' && !isset($x1269->properties['file']) && !isset($x1269->properties['line']) && !isset($x1269->properties['column'])) {$x1269->properties['file'] = '<image>/09_date.js';$x1269->properties['line'] = 259;$x1269->properties['column'] = 16;$x1269->attributes['file'] = $x1269->attributes['line'] = $x1269->attributes['column'] = 0; }
throw new JSException($x1269, 259, 16, '<image>/09_date.js');
}
$x1265 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1266 = $x1265($global, $x1202, $_Date, array($x1215, $_month, $_date, $x1226, $x1237, $x1248, $x1259), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1203 = $x1266;
if (is_object($x1203) && $x1203 !== JS::$undefined) { $x1202 = $x1203; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1202;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_29($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1189=&$scope->properties[\'arguments\'];$x1189->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1189->properties[$i]=$args[$i];$x1189->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'month\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1190=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1190,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1192=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,22,\'<image>/09_date.js\');$_TypeError=&$x1192[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1192;$x1193=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1194=$x1193($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1194->class)&&$x1194->class===\'Error\'&&!isset($x1194->properties[\'file\'])&&!isset($x1194->properties[\'line\'])&&!isset($x1194->properties[\'column\'])){$x1194->properties[\'file\']=\'<image>/09_date.js\';$x1194->properties[\'line\']=256;$x1194->properties[\'column\']=22;$x1194->attributes[\'file\']=$x1194->attributes[\'line\']=$x1194->attributes[\'column\']=0;}throw new JSException($x1194,256,22,\'<image>/09_date.js\');}$x1191=JS::toObject($leThis,$global);unset($x1195,$W1195,$S1195,$U1195);$x1196=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1191,JS::toString(\'getDate\',$global),256,22,\'<image>/09_date.js\');$x1195=&$x1196[0];list(,$W1195,$S1195,$U1195)=$x1196;if(!(is_object($x1195)&&isset($x1195->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1199=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,22,\'<image>/09_date.js\');$_TypeError=&$x1199[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1199;$x1200=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1201=$x1200($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1201->class)&&$x1201->class===\'Error\'&&!isset($x1201->properties[\'file\'])&&!isset($x1201->properties[\'line\'])&&!isset($x1201->properties[\'column\'])){$x1201->properties[\'file\']=\'<image>/09_date.js\';$x1201->properties[\'line\']=256;$x1201->properties[\'column\']=22;$x1201->attributes[\'file\']=$x1201->attributes[\'line\']=$x1201->attributes[\'column\']=0;}throw new JSException($x1201,256,22,\'<image>/09_date.js\');}$x1197=$x1195->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1198=$x1197($global,$x1191,$x1195,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1198;}unset($_Date,$WDate,$SDate,$UDate);$x1204=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),259,20,\'<image>/09_date.js\');$_Date=&$x1204[0];list(,$WDate,$SDate,$UDate)=$x1204;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1205=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),259,20,\'<image>/09_date.js\');$_ReferenceError=&$x1205[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1205;$x1206=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,20);$x1207=$x1206($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1207->class)&&$x1207->class===\'Error\'&&!isset($x1207->properties[\'file\'])&&!isset($x1207->properties[\'line\'])&&!isset($x1207->properties[\'column\'])){$x1207->properties[\'file\']=\'<image>/09_date.js\';$x1207->properties[\'line\']=259;$x1207->properties[\'column\']=20;$x1207->attributes[\'file\']=$x1207->attributes[\'line\']=$x1207->attributes[\'column\']=0;}throw new JSException($x1207,259,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1209=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),260,19,\'<image>/09_date.js\');$_TypeError=&$x1209[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1209;$x1210=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1211=$x1210($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1211->class)&&$x1211->class===\'Error\'&&!isset($x1211->properties[\'file\'])&&!isset($x1211->properties[\'line\'])&&!isset($x1211->properties[\'column\'])){$x1211->properties[\'file\']=\'<image>/09_date.js\';$x1211->properties[\'line\']=260;$x1211->properties[\'column\']=19;$x1211->attributes[\'file\']=$x1211->attributes[\'line\']=$x1211->attributes[\'column\']=0;}throw new JSException($x1211,260,19,\'<image>/09_date.js\');}$x1208=JS::toObject($leThis,$global);unset($x1212,$W1212,$S1212,$U1212);$x1213=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1208,JS::toString(\'getFullYear\',$global),260,19,\'<image>/09_date.js\');$x1212=&$x1213[0];list(,$W1212,$S1212,$U1212)=$x1213;if(!(is_object($x1212)&&isset($x1212->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1216=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),260,19,\'<image>/09_date.js\');$_TypeError=&$x1216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1216;$x1217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1218=$x1217($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1218->class)&&$x1218->class===\'Error\'&&!isset($x1218->properties[\'file\'])&&!isset($x1218->properties[\'line\'])&&!isset($x1218->properties[\'column\'])){$x1218->properties[\'file\']=\'<image>/09_date.js\';$x1218->properties[\'line\']=260;$x1218->properties[\'column\']=19;$x1218->attributes[\'file\']=$x1218->attributes[\'line\']=$x1218->attributes[\'column\']=0;}throw new JSException($x1218,260,19,\'<image>/09_date.js\');}$x1214=$x1212->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1215=$x1214($global,$x1208,$x1212,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1220=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,16,\'<image>/09_date.js\');$_TypeError=&$x1220[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1220;$x1221=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1222=$x1221($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1222->class)&&$x1222->class===\'Error\'&&!isset($x1222->properties[\'file\'])&&!isset($x1222->properties[\'line\'])&&!isset($x1222->properties[\'column\'])){$x1222->properties[\'file\']=\'<image>/09_date.js\';$x1222->properties[\'line\']=261;$x1222->properties[\'column\']=16;$x1222->attributes[\'file\']=$x1222->attributes[\'line\']=$x1222->attributes[\'column\']=0;}throw new JSException($x1222,261,16,\'<image>/09_date.js\');}$x1219=JS::toObject($leThis,$global);unset($x1223,$W1223,$S1223,$U1223);$x1224=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1219,JS::toString(\'getHours\',$global),261,16,\'<image>/09_date.js\');$x1223=&$x1224[0];list(,$W1223,$S1223,$U1223)=$x1224;if(!(is_object($x1223)&&isset($x1223->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1227=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,16,\'<image>/09_date.js\');$_TypeError=&$x1227[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1227;$x1228=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1229=$x1228($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1229->class)&&$x1229->class===\'Error\'&&!isset($x1229->properties[\'file\'])&&!isset($x1229->properties[\'line\'])&&!isset($x1229->properties[\'column\'])){$x1229->properties[\'file\']=\'<image>/09_date.js\';$x1229->properties[\'line\']=261;$x1229->properties[\'column\']=16;$x1229->attributes[\'file\']=$x1229->attributes[\'line\']=$x1229->attributes[\'column\']=0;}throw new JSException($x1229,261,16,\'<image>/09_date.js\');}$x1225=$x1223->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1226=$x1225($global,$x1219,$x1223,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1231=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,35,\'<image>/09_date.js\');$_TypeError=&$x1231[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1231;$x1232=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1233=$x1232($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1233->class)&&$x1233->class===\'Error\'&&!isset($x1233->properties[\'file\'])&&!isset($x1233->properties[\'line\'])&&!isset($x1233->properties[\'column\'])){$x1233->properties[\'file\']=\'<image>/09_date.js\';$x1233->properties[\'line\']=261;$x1233->properties[\'column\']=35;$x1233->attributes[\'file\']=$x1233->attributes[\'line\']=$x1233->attributes[\'column\']=0;}throw new JSException($x1233,261,35,\'<image>/09_date.js\');}$x1230=JS::toObject($leThis,$global);unset($x1234,$W1234,$S1234,$U1234);$x1235=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1230,JS::toString(\'getMinutes\',$global),261,35,\'<image>/09_date.js\');$x1234=&$x1235[0];list(,$W1234,$S1234,$U1234)=$x1235;if(!(is_object($x1234)&&isset($x1234->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1238=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,35,\'<image>/09_date.js\');$_TypeError=&$x1238[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1238;$x1239=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1240=$x1239($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1240->class)&&$x1240->class===\'Error\'&&!isset($x1240->properties[\'file\'])&&!isset($x1240->properties[\'line\'])&&!isset($x1240->properties[\'column\'])){$x1240->properties[\'file\']=\'<image>/09_date.js\';$x1240->properties[\'line\']=261;$x1240->properties[\'column\']=35;$x1240->attributes[\'file\']=$x1240->attributes[\'line\']=$x1240->attributes[\'column\']=0;}throw new JSException($x1240,261,35,\'<image>/09_date.js\');}$x1236=$x1234->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1237=$x1236($global,$x1230,$x1234,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1242=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,54,\'<image>/09_date.js\');$_TypeError=&$x1242[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1242;$x1243=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1244=$x1243($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1244->class)&&$x1244->class===\'Error\'&&!isset($x1244->properties[\'file\'])&&!isset($x1244->properties[\'line\'])&&!isset($x1244->properties[\'column\'])){$x1244->properties[\'file\']=\'<image>/09_date.js\';$x1244->properties[\'line\']=261;$x1244->properties[\'column\']=54;$x1244->attributes[\'file\']=$x1244->attributes[\'line\']=$x1244->attributes[\'column\']=0;}throw new JSException($x1244,261,54,\'<image>/09_date.js\');}$x1241=JS::toObject($leThis,$global);unset($x1245,$W1245,$S1245,$U1245);$x1246=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1241,JS::toString(\'getSeconds\',$global),261,54,\'<image>/09_date.js\');$x1245=&$x1246[0];list(,$W1245,$S1245,$U1245)=$x1246;if(!(is_object($x1245)&&isset($x1245->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1249=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,54,\'<image>/09_date.js\');$_TypeError=&$x1249[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1249;$x1250=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1251=$x1250($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1251->class)&&$x1251->class===\'Error\'&&!isset($x1251->properties[\'file\'])&&!isset($x1251->properties[\'line\'])&&!isset($x1251->properties[\'column\'])){$x1251->properties[\'file\']=\'<image>/09_date.js\';$x1251->properties[\'line\']=261;$x1251->properties[\'column\']=54;$x1251->attributes[\'file\']=$x1251->attributes[\'line\']=$x1251->attributes[\'column\']=0;}throw new JSException($x1251,261,54,\'<image>/09_date.js\');}$x1247=$x1245->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1248=$x1247($global,$x1241,$x1245,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1253=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,78,\'<image>/09_date.js\');$_TypeError=&$x1253[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1253;$x1254=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1255=$x1254($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1255->class)&&$x1255->class===\'Error\'&&!isset($x1255->properties[\'file\'])&&!isset($x1255->properties[\'line\'])&&!isset($x1255->properties[\'column\'])){$x1255->properties[\'file\']=\'<image>/09_date.js\';$x1255->properties[\'line\']=261;$x1255->properties[\'column\']=78;$x1255->attributes[\'file\']=$x1255->attributes[\'line\']=$x1255->attributes[\'column\']=0;}throw new JSException($x1255,261,78,\'<image>/09_date.js\');}$x1252=JS::toObject($leThis,$global);unset($x1256,$W1256,$S1256,$U1256);$x1257=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1252,JS::toString(\'getMilliseconds\',$global),261,78,\'<image>/09_date.js\');$x1256=&$x1257[0];list(,$W1256,$S1256,$U1256)=$x1257;if(!(is_object($x1256)&&isset($x1256->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1260=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,78,\'<image>/09_date.js\');$_TypeError=&$x1260[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1260;$x1261=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1262=$x1261($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1262->class)&&$x1262->class===\'Error\'&&!isset($x1262->properties[\'file\'])&&!isset($x1262->properties[\'line\'])&&!isset($x1262->properties[\'column\'])){$x1262->properties[\'file\']=\'<image>/09_date.js\';$x1262->properties[\'line\']=261;$x1262->properties[\'column\']=78;$x1262->attributes[\'file\']=$x1262->attributes[\'line\']=$x1262->attributes[\'column\']=0;}throw new JSException($x1262,261,78,\'<image>/09_date.js\');}$x1258=$x1256->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1259=$x1258($global,$x1252,$x1256,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1202=clone JS::$objectTemplate;unset($x1263,$W1263,$S1263,$U1263);$x1264=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),259,16,\'<image>/09_date.js\');$x1263=&$x1264[0];list(,$W1263,$S1263,$U1263)=$x1264;$x1203=$x1263;$x1202->prototype=$x1203;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1267=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),259,16,\'<image>/09_date.js\');$_TypeError=&$x1267[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1267;$x1268=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1269=$x1268($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1269->class)&&$x1269->class===\'Error\'&&!isset($x1269->properties[\'file\'])&&!isset($x1269->properties[\'line\'])&&!isset($x1269->properties[\'column\'])){$x1269->properties[\'file\']=\'<image>/09_date.js\';$x1269->properties[\'line\']=259;$x1269->properties[\'column\']=16;$x1269->attributes[\'file\']=$x1269->attributes[\'line\']=$x1269->attributes[\'column\']=0;}throw new JSException($x1269,259,16,\'<image>/09_date.js\');}$x1265=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1266=$x1265($global,$x1202,$_Date,array($x1215,$_month,$_date,$x1226,$x1237,$x1248,$x1259),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1203=$x1266;if(is_object($x1203)&&$x1203!==JS::$undefined){$x1202=$x1203;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1202;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_30($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1298 =& $scope->properties['arguments'];
$x1298->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1298->properties[$i] = $args[$i];
$x1298->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x1299 = (((gettype($_month) === gettype(JS::$undefined) && $_month === JS::$undefined))|| (((is_float($_month) || is_int($_month)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_month == JS::$undefined));
if (JS::toBoolean($x1299, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1301 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 24, '<image>/09_date.js');
$_TypeError =& $x1301[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1301;
$x1302 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1303 = $x1302($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1303->class) && $x1303->class === 'Error' && !isset($x1303->properties['file']) && !isset($x1303->properties['line']) && !isset($x1303->properties['column'])) {$x1303->properties['file'] = '<image>/09_date.js';$x1303->properties['line'] = 273;$x1303->properties['column'] = 24;$x1303->attributes['file'] = $x1303->attributes['line'] = $x1303->attributes['column'] = 0; }
throw new JSException($x1303, 273, 24, '<image>/09_date.js');
}
$x1300 = JS::toObject($leThis, $global);
unset($x1304, $W1304, $S1304, $U1304);
$x1305 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1300, JS::toString('getMonth', $global), 273, 24, '<image>/09_date.js');
$x1304 =& $x1305[0]; list(,$W1304,$S1304,$U1304) = $x1305;
if (!(is_object($x1304) && isset($x1304->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1308 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 24, '<image>/09_date.js');
$_TypeError =& $x1308[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1308;
$x1309 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1310 = $x1309($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1310->class) && $x1310->class === 'Error' && !isset($x1310->properties['file']) && !isset($x1310->properties['line']) && !isset($x1310->properties['column'])) {$x1310->properties['file'] = '<image>/09_date.js';$x1310->properties['line'] = 273;$x1310->properties['column'] = 24;$x1310->attributes['file'] = $x1310->attributes['line'] = $x1310->attributes['column'] = 0; }
throw new JSException($x1310, 273, 24, '<image>/09_date.js');
}
$x1306 = $x1304->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1307 = $x1306($global, $x1300, $x1304, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umonth) {$global->properties['month'] = $_month; $_month =& $global->properties['month']; }
$_month = $x1307;;
};
$x1311 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1311, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1313 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 277, 22, '<image>/09_date.js');
$_TypeError =& $x1313[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1313;
$x1314 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1315 = $x1314($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1315->class) && $x1315->class === 'Error' && !isset($x1315->properties['file']) && !isset($x1315->properties['line']) && !isset($x1315->properties['column'])) {$x1315->properties['file'] = '<image>/09_date.js';$x1315->properties['line'] = 277;$x1315->properties['column'] = 22;$x1315->attributes['file'] = $x1315->attributes['line'] = $x1315->attributes['column'] = 0; }
throw new JSException($x1315, 277, 22, '<image>/09_date.js');
}
$x1312 = JS::toObject($leThis, $global);
unset($x1316, $W1316, $S1316, $U1316);
$x1317 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1312, JS::toString('getDate', $global), 277, 22, '<image>/09_date.js');
$x1316 =& $x1317[0]; list(,$W1316,$S1316,$U1316) = $x1317;
if (!(is_object($x1316) && isset($x1316->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1320 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 277, 22, '<image>/09_date.js');
$_TypeError =& $x1320[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1320;
$x1321 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1322 = $x1321($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1322->class) && $x1322->class === 'Error' && !isset($x1322->properties['file']) && !isset($x1322->properties['line']) && !isset($x1322->properties['column'])) {$x1322->properties['file'] = '<image>/09_date.js';$x1322->properties['line'] = 277;$x1322->properties['column'] = 22;$x1322->attributes['file'] = $x1322->attributes['line'] = $x1322->attributes['column'] = 0; }
throw new JSException($x1322, 277, 22, '<image>/09_date.js');
}
$x1318 = $x1316->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1319 = $x1318($global, $x1312, $x1316, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1319;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1325 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 280, 20, '<image>/09_date.js');
$_Date =& $x1325[0]; list(,$WDate,$SDate,$UDate) = $x1325;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1326 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 280, 20, '<image>/09_date.js');
$_ReferenceError =& $x1326[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1326;
$x1327 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 20);
$x1328 = $x1327($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1328->class) && $x1328->class === 'Error' && !isset($x1328->properties['file']) && !isset($x1328->properties['line']) && !isset($x1328->properties['column'])) {$x1328->properties['file'] = '<image>/09_date.js';$x1328->properties['line'] = 280;$x1328->properties['column'] = 20;$x1328->attributes['file'] = $x1328->attributes['line'] = $x1328->attributes['column'] = 0; }
throw new JSException($x1328, 280, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1330 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 16, '<image>/09_date.js');
$_TypeError =& $x1330[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1330;
$x1331 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1332 = $x1331($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1332->class) && $x1332->class === 'Error' && !isset($x1332->properties['file']) && !isset($x1332->properties['line']) && !isset($x1332->properties['column'])) {$x1332->properties['file'] = '<image>/09_date.js';$x1332->properties['line'] = 282;$x1332->properties['column'] = 16;$x1332->attributes['file'] = $x1332->attributes['line'] = $x1332->attributes['column'] = 0; }
throw new JSException($x1332, 282, 16, '<image>/09_date.js');
}
$x1329 = JS::toObject($leThis, $global);
unset($x1333, $W1333, $S1333, $U1333);
$x1334 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1329, JS::toString('getHours', $global), 282, 16, '<image>/09_date.js');
$x1333 =& $x1334[0]; list(,$W1333,$S1333,$U1333) = $x1334;
if (!(is_object($x1333) && isset($x1333->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1337 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 16, '<image>/09_date.js');
$_TypeError =& $x1337[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1337;
$x1338 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1339 = $x1338($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1339->class) && $x1339->class === 'Error' && !isset($x1339->properties['file']) && !isset($x1339->properties['line']) && !isset($x1339->properties['column'])) {$x1339->properties['file'] = '<image>/09_date.js';$x1339->properties['line'] = 282;$x1339->properties['column'] = 16;$x1339->attributes['file'] = $x1339->attributes['line'] = $x1339->attributes['column'] = 0; }
throw new JSException($x1339, 282, 16, '<image>/09_date.js');
}
$x1335 = $x1333->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1336 = $x1335($global, $x1329, $x1333, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1341 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 35, '<image>/09_date.js');
$_TypeError =& $x1341[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1341;
$x1342 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1343 = $x1342($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1343->class) && $x1343->class === 'Error' && !isset($x1343->properties['file']) && !isset($x1343->properties['line']) && !isset($x1343->properties['column'])) {$x1343->properties['file'] = '<image>/09_date.js';$x1343->properties['line'] = 282;$x1343->properties['column'] = 35;$x1343->attributes['file'] = $x1343->attributes['line'] = $x1343->attributes['column'] = 0; }
throw new JSException($x1343, 282, 35, '<image>/09_date.js');
}
$x1340 = JS::toObject($leThis, $global);
unset($x1344, $W1344, $S1344, $U1344);
$x1345 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1340, JS::toString('getMinutes', $global), 282, 35, '<image>/09_date.js');
$x1344 =& $x1345[0]; list(,$W1344,$S1344,$U1344) = $x1345;
if (!(is_object($x1344) && isset($x1344->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1348 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 35, '<image>/09_date.js');
$_TypeError =& $x1348[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1348;
$x1349 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1350 = $x1349($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1350->class) && $x1350->class === 'Error' && !isset($x1350->properties['file']) && !isset($x1350->properties['line']) && !isset($x1350->properties['column'])) {$x1350->properties['file'] = '<image>/09_date.js';$x1350->properties['line'] = 282;$x1350->properties['column'] = 35;$x1350->attributes['file'] = $x1350->attributes['line'] = $x1350->attributes['column'] = 0; }
throw new JSException($x1350, 282, 35, '<image>/09_date.js');
}
$x1346 = $x1344->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1347 = $x1346($global, $x1340, $x1344, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1352 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 54, '<image>/09_date.js');
$_TypeError =& $x1352[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1352;
$x1353 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1354 = $x1353($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1354->class) && $x1354->class === 'Error' && !isset($x1354->properties['file']) && !isset($x1354->properties['line']) && !isset($x1354->properties['column'])) {$x1354->properties['file'] = '<image>/09_date.js';$x1354->properties['line'] = 282;$x1354->properties['column'] = 54;$x1354->attributes['file'] = $x1354->attributes['line'] = $x1354->attributes['column'] = 0; }
throw new JSException($x1354, 282, 54, '<image>/09_date.js');
}
$x1351 = JS::toObject($leThis, $global);
unset($x1355, $W1355, $S1355, $U1355);
$x1356 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1351, JS::toString('getSeconds', $global), 282, 54, '<image>/09_date.js');
$x1355 =& $x1356[0]; list(,$W1355,$S1355,$U1355) = $x1356;
if (!(is_object($x1355) && isset($x1355->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1359 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 54, '<image>/09_date.js');
$_TypeError =& $x1359[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1359;
$x1360 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1361 = $x1360($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1361->class) && $x1361->class === 'Error' && !isset($x1361->properties['file']) && !isset($x1361->properties['line']) && !isset($x1361->properties['column'])) {$x1361->properties['file'] = '<image>/09_date.js';$x1361->properties['line'] = 282;$x1361->properties['column'] = 54;$x1361->attributes['file'] = $x1361->attributes['line'] = $x1361->attributes['column'] = 0; }
throw new JSException($x1361, 282, 54, '<image>/09_date.js');
}
$x1357 = $x1355->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1358 = $x1357($global, $x1351, $x1355, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1363 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 78, '<image>/09_date.js');
$_TypeError =& $x1363[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1363;
$x1364 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1365 = $x1364($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1365->class) && $x1365->class === 'Error' && !isset($x1365->properties['file']) && !isset($x1365->properties['line']) && !isset($x1365->properties['column'])) {$x1365->properties['file'] = '<image>/09_date.js';$x1365->properties['line'] = 282;$x1365->properties['column'] = 78;$x1365->attributes['file'] = $x1365->attributes['line'] = $x1365->attributes['column'] = 0; }
throw new JSException($x1365, 282, 78, '<image>/09_date.js');
}
$x1362 = JS::toObject($leThis, $global);
unset($x1366, $W1366, $S1366, $U1366);
$x1367 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1362, JS::toString('getMilliseconds', $global), 282, 78, '<image>/09_date.js');
$x1366 =& $x1367[0]; list(,$W1366,$S1366,$U1366) = $x1367;
if (!(is_object($x1366) && isset($x1366->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1370 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 78, '<image>/09_date.js');
$_TypeError =& $x1370[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1370;
$x1371 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1372 = $x1371($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1372->class) && $x1372->class === 'Error' && !isset($x1372->properties['file']) && !isset($x1372->properties['line']) && !isset($x1372->properties['column'])) {$x1372->properties['file'] = '<image>/09_date.js';$x1372->properties['line'] = 282;$x1372->properties['column'] = 78;$x1372->attributes['file'] = $x1372->attributes['line'] = $x1372->attributes['column'] = 0; }
throw new JSException($x1372, 282, 78, '<image>/09_date.js');
}
$x1368 = $x1366->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1369 = $x1368($global, $x1362, $x1366, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1323 = clone JS::$objectTemplate;
unset($x1373, $W1373, $S1373, $U1373);
$x1374 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 280, 16, '<image>/09_date.js');
$x1373 =& $x1374[0]; list(,$W1373,$S1373,$U1373) = $x1374;
$x1324 = $x1373;
$x1323->prototype = $x1324;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1377 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 280, 16, '<image>/09_date.js');
$_TypeError =& $x1377[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1377;
$x1378 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1379 = $x1378($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1379->class) && $x1379->class === 'Error' && !isset($x1379->properties['file']) && !isset($x1379->properties['line']) && !isset($x1379->properties['column'])) {$x1379->properties['file'] = '<image>/09_date.js';$x1379->properties['line'] = 280;$x1379->properties['column'] = 16;$x1379->attributes['file'] = $x1379->attributes['line'] = $x1379->attributes['column'] = 0; }
throw new JSException($x1379, 280, 16, '<image>/09_date.js');
}
$x1375 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1376 = $x1375($global, $x1323, $_Date, array($_year, $_month, $_date, $x1336, $x1347, $x1358, $x1369), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1324 = $x1376;
if (is_object($x1324) && $x1324 !== JS::$undefined) { $x1323 = $x1324; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1323;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_30($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1298=&$scope->properties[\'arguments\'];$x1298->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1298->properties[$i]=$args[$i];$x1298->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1299=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x1299,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1301=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,24,\'<image>/09_date.js\');$_TypeError=&$x1301[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1301;$x1302=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1303=$x1302($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1303->class)&&$x1303->class===\'Error\'&&!isset($x1303->properties[\'file\'])&&!isset($x1303->properties[\'line\'])&&!isset($x1303->properties[\'column\'])){$x1303->properties[\'file\']=\'<image>/09_date.js\';$x1303->properties[\'line\']=273;$x1303->properties[\'column\']=24;$x1303->attributes[\'file\']=$x1303->attributes[\'line\']=$x1303->attributes[\'column\']=0;}throw new JSException($x1303,273,24,\'<image>/09_date.js\');}$x1300=JS::toObject($leThis,$global);unset($x1304,$W1304,$S1304,$U1304);$x1305=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1300,JS::toString(\'getMonth\',$global),273,24,\'<image>/09_date.js\');$x1304=&$x1305[0];list(,$W1304,$S1304,$U1304)=$x1305;if(!(is_object($x1304)&&isset($x1304->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1308=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,24,\'<image>/09_date.js\');$_TypeError=&$x1308[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1308;$x1309=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1310=$x1309($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1310->class)&&$x1310->class===\'Error\'&&!isset($x1310->properties[\'file\'])&&!isset($x1310->properties[\'line\'])&&!isset($x1310->properties[\'column\'])){$x1310->properties[\'file\']=\'<image>/09_date.js\';$x1310->properties[\'line\']=273;$x1310->properties[\'column\']=24;$x1310->attributes[\'file\']=$x1310->attributes[\'line\']=$x1310->attributes[\'column\']=0;}throw new JSException($x1310,273,24,\'<image>/09_date.js\');}$x1306=$x1304->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1307=$x1306($global,$x1300,$x1304,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umonth){$global->properties[\'month\']=$_month;$_month=&$global->properties[\'month\'];}$_month=$x1307;}$x1311=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1311,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1313=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),277,22,\'<image>/09_date.js\');$_TypeError=&$x1313[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1313;$x1314=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1315=$x1314($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1315->class)&&$x1315->class===\'Error\'&&!isset($x1315->properties[\'file\'])&&!isset($x1315->properties[\'line\'])&&!isset($x1315->properties[\'column\'])){$x1315->properties[\'file\']=\'<image>/09_date.js\';$x1315->properties[\'line\']=277;$x1315->properties[\'column\']=22;$x1315->attributes[\'file\']=$x1315->attributes[\'line\']=$x1315->attributes[\'column\']=0;}throw new JSException($x1315,277,22,\'<image>/09_date.js\');}$x1312=JS::toObject($leThis,$global);unset($x1316,$W1316,$S1316,$U1316);$x1317=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1312,JS::toString(\'getDate\',$global),277,22,\'<image>/09_date.js\');$x1316=&$x1317[0];list(,$W1316,$S1316,$U1316)=$x1317;if(!(is_object($x1316)&&isset($x1316->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1320=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),277,22,\'<image>/09_date.js\');$_TypeError=&$x1320[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1320;$x1321=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1322=$x1321($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1322->class)&&$x1322->class===\'Error\'&&!isset($x1322->properties[\'file\'])&&!isset($x1322->properties[\'line\'])&&!isset($x1322->properties[\'column\'])){$x1322->properties[\'file\']=\'<image>/09_date.js\';$x1322->properties[\'line\']=277;$x1322->properties[\'column\']=22;$x1322->attributes[\'file\']=$x1322->attributes[\'line\']=$x1322->attributes[\'column\']=0;}throw new JSException($x1322,277,22,\'<image>/09_date.js\');}$x1318=$x1316->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1319=$x1318($global,$x1312,$x1316,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1319;}unset($_Date,$WDate,$SDate,$UDate);$x1325=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),280,20,\'<image>/09_date.js\');$_Date=&$x1325[0];list(,$WDate,$SDate,$UDate)=$x1325;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1326=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),280,20,\'<image>/09_date.js\');$_ReferenceError=&$x1326[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1326;$x1327=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,20);$x1328=$x1327($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1328->class)&&$x1328->class===\'Error\'&&!isset($x1328->properties[\'file\'])&&!isset($x1328->properties[\'line\'])&&!isset($x1328->properties[\'column\'])){$x1328->properties[\'file\']=\'<image>/09_date.js\';$x1328->properties[\'line\']=280;$x1328->properties[\'column\']=20;$x1328->attributes[\'file\']=$x1328->attributes[\'line\']=$x1328->attributes[\'column\']=0;}throw new JSException($x1328,280,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1330=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,16,\'<image>/09_date.js\');$_TypeError=&$x1330[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1330;$x1331=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1332=$x1331($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1332->class)&&$x1332->class===\'Error\'&&!isset($x1332->properties[\'file\'])&&!isset($x1332->properties[\'line\'])&&!isset($x1332->properties[\'column\'])){$x1332->properties[\'file\']=\'<image>/09_date.js\';$x1332->properties[\'line\']=282;$x1332->properties[\'column\']=16;$x1332->attributes[\'file\']=$x1332->attributes[\'line\']=$x1332->attributes[\'column\']=0;}throw new JSException($x1332,282,16,\'<image>/09_date.js\');}$x1329=JS::toObject($leThis,$global);unset($x1333,$W1333,$S1333,$U1333);$x1334=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1329,JS::toString(\'getHours\',$global),282,16,\'<image>/09_date.js\');$x1333=&$x1334[0];list(,$W1333,$S1333,$U1333)=$x1334;if(!(is_object($x1333)&&isset($x1333->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1337=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,16,\'<image>/09_date.js\');$_TypeError=&$x1337[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1337;$x1338=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1339=$x1338($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1339->class)&&$x1339->class===\'Error\'&&!isset($x1339->properties[\'file\'])&&!isset($x1339->properties[\'line\'])&&!isset($x1339->properties[\'column\'])){$x1339->properties[\'file\']=\'<image>/09_date.js\';$x1339->properties[\'line\']=282;$x1339->properties[\'column\']=16;$x1339->attributes[\'file\']=$x1339->attributes[\'line\']=$x1339->attributes[\'column\']=0;}throw new JSException($x1339,282,16,\'<image>/09_date.js\');}$x1335=$x1333->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1336=$x1335($global,$x1329,$x1333,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1341=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,35,\'<image>/09_date.js\');$_TypeError=&$x1341[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1341;$x1342=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1343=$x1342($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1343->class)&&$x1343->class===\'Error\'&&!isset($x1343->properties[\'file\'])&&!isset($x1343->properties[\'line\'])&&!isset($x1343->properties[\'column\'])){$x1343->properties[\'file\']=\'<image>/09_date.js\';$x1343->properties[\'line\']=282;$x1343->properties[\'column\']=35;$x1343->attributes[\'file\']=$x1343->attributes[\'line\']=$x1343->attributes[\'column\']=0;}throw new JSException($x1343,282,35,\'<image>/09_date.js\');}$x1340=JS::toObject($leThis,$global);unset($x1344,$W1344,$S1344,$U1344);$x1345=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1340,JS::toString(\'getMinutes\',$global),282,35,\'<image>/09_date.js\');$x1344=&$x1345[0];list(,$W1344,$S1344,$U1344)=$x1345;if(!(is_object($x1344)&&isset($x1344->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1348=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,35,\'<image>/09_date.js\');$_TypeError=&$x1348[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1348;$x1349=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1350=$x1349($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1350->class)&&$x1350->class===\'Error\'&&!isset($x1350->properties[\'file\'])&&!isset($x1350->properties[\'line\'])&&!isset($x1350->properties[\'column\'])){$x1350->properties[\'file\']=\'<image>/09_date.js\';$x1350->properties[\'line\']=282;$x1350->properties[\'column\']=35;$x1350->attributes[\'file\']=$x1350->attributes[\'line\']=$x1350->attributes[\'column\']=0;}throw new JSException($x1350,282,35,\'<image>/09_date.js\');}$x1346=$x1344->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1347=$x1346($global,$x1340,$x1344,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1352=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,54,\'<image>/09_date.js\');$_TypeError=&$x1352[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1352;$x1353=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1354=$x1353($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1354->class)&&$x1354->class===\'Error\'&&!isset($x1354->properties[\'file\'])&&!isset($x1354->properties[\'line\'])&&!isset($x1354->properties[\'column\'])){$x1354->properties[\'file\']=\'<image>/09_date.js\';$x1354->properties[\'line\']=282;$x1354->properties[\'column\']=54;$x1354->attributes[\'file\']=$x1354->attributes[\'line\']=$x1354->attributes[\'column\']=0;}throw new JSException($x1354,282,54,\'<image>/09_date.js\');}$x1351=JS::toObject($leThis,$global);unset($x1355,$W1355,$S1355,$U1355);$x1356=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1351,JS::toString(\'getSeconds\',$global),282,54,\'<image>/09_date.js\');$x1355=&$x1356[0];list(,$W1355,$S1355,$U1355)=$x1356;if(!(is_object($x1355)&&isset($x1355->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1359=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,54,\'<image>/09_date.js\');$_TypeError=&$x1359[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1359;$x1360=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1361=$x1360($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1361->class)&&$x1361->class===\'Error\'&&!isset($x1361->properties[\'file\'])&&!isset($x1361->properties[\'line\'])&&!isset($x1361->properties[\'column\'])){$x1361->properties[\'file\']=\'<image>/09_date.js\';$x1361->properties[\'line\']=282;$x1361->properties[\'column\']=54;$x1361->attributes[\'file\']=$x1361->attributes[\'line\']=$x1361->attributes[\'column\']=0;}throw new JSException($x1361,282,54,\'<image>/09_date.js\');}$x1357=$x1355->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1358=$x1357($global,$x1351,$x1355,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1363=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,78,\'<image>/09_date.js\');$_TypeError=&$x1363[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1363;$x1364=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1365=$x1364($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1365->class)&&$x1365->class===\'Error\'&&!isset($x1365->properties[\'file\'])&&!isset($x1365->properties[\'line\'])&&!isset($x1365->properties[\'column\'])){$x1365->properties[\'file\']=\'<image>/09_date.js\';$x1365->properties[\'line\']=282;$x1365->properties[\'column\']=78;$x1365->attributes[\'file\']=$x1365->attributes[\'line\']=$x1365->attributes[\'column\']=0;}throw new JSException($x1365,282,78,\'<image>/09_date.js\');}$x1362=JS::toObject($leThis,$global);unset($x1366,$W1366,$S1366,$U1366);$x1367=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1362,JS::toString(\'getMilliseconds\',$global),282,78,\'<image>/09_date.js\');$x1366=&$x1367[0];list(,$W1366,$S1366,$U1366)=$x1367;if(!(is_object($x1366)&&isset($x1366->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1370=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,78,\'<image>/09_date.js\');$_TypeError=&$x1370[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1370;$x1371=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1372=$x1371($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1372->class)&&$x1372->class===\'Error\'&&!isset($x1372->properties[\'file\'])&&!isset($x1372->properties[\'line\'])&&!isset($x1372->properties[\'column\'])){$x1372->properties[\'file\']=\'<image>/09_date.js\';$x1372->properties[\'line\']=282;$x1372->properties[\'column\']=78;$x1372->attributes[\'file\']=$x1372->attributes[\'line\']=$x1372->attributes[\'column\']=0;}throw new JSException($x1372,282,78,\'<image>/09_date.js\');}$x1368=$x1366->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1369=$x1368($global,$x1362,$x1366,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1323=clone JS::$objectTemplate;unset($x1373,$W1373,$S1373,$U1373);$x1374=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),280,16,\'<image>/09_date.js\');$x1373=&$x1374[0];list(,$W1373,$S1373,$U1373)=$x1374;$x1324=$x1373;$x1323->prototype=$x1324;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1377=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),280,16,\'<image>/09_date.js\');$_TypeError=&$x1377[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1377;$x1378=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1379=$x1378($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1379->class)&&$x1379->class===\'Error\'&&!isset($x1379->properties[\'file\'])&&!isset($x1379->properties[\'line\'])&&!isset($x1379->properties[\'column\'])){$x1379->properties[\'file\']=\'<image>/09_date.js\';$x1379->properties[\'line\']=280;$x1379->properties[\'column\']=16;$x1379->attributes[\'file\']=$x1379->attributes[\'line\']=$x1379->attributes[\'column\']=0;}throw new JSException($x1379,280,16,\'<image>/09_date.js\');}$x1375=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1376=$x1375($global,$x1323,$_Date,array($_year,$_month,$_date,$x1336,$x1347,$x1358,$x1369),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1324=$x1376;if(is_object($x1324)&&$x1324!==JS::$undefined){$x1323=$x1324;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1323;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_31($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1423 =& $scope->properties['arguments'];
$x1423->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1423->properties[$i] = $args[$i];
$x1423->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value) .
		'T' . date('H:i:s', $leThis->value) .
		'.' . ((int) (($leThis->value - (int) $leThis->value) * 1000)) .
		date('P', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_31($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1423=&$scope->properties[\'arguments\'];$x1423->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1423->properties[$i]=$args[$i];$x1423->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value).\'T\'.date(\'H:i:s\',$leThis->value).\'.\'.((int)(($leThis->value-(int)$leThis->value)*1000)).date(\'P\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_32($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1437 =& $scope->properties['arguments'];
$x1437->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1437->properties[$i] = $args[$i];
$x1437->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['key'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_key =& $scope->properties['key'];
$Ukey = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1439 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 25, '<image>/09_date.js');
$_TypeError =& $x1439[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1439;
$x1440 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1441 = $x1440($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1441->class) && $x1441->class === 'Error' && !isset($x1441->properties['file']) && !isset($x1441->properties['line']) && !isset($x1441->properties['column'])) {$x1441->properties['file'] = '<image>/09_date.js';$x1441->properties['line'] = 302;$x1441->properties['column'] = 25;$x1441->attributes['file'] = $x1441->attributes['line'] = $x1441->attributes['column'] = 0; }
throw new JSException($x1441, 302, 25, '<image>/09_date.js');
}
$x1438 = JS::toObject($leThis, $global);
unset($x1442, $W1442, $S1442, $U1442);
$x1443 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1438, JS::toString('toISOString', $global), 302, 25, '<image>/09_date.js');
$x1442 =& $x1443[0]; list(,$W1442,$S1442,$U1442) = $x1443;
if (!(is_object($x1442) && isset($x1442->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1446 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 25, '<image>/09_date.js');
$_TypeError =& $x1446[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1446;
$x1447 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1448 = $x1447($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1448->class) && $x1448->class === 'Error' && !isset($x1448->properties['file']) && !isset($x1448->properties['line']) && !isset($x1448->properties['column'])) {$x1448->properties['file'] = '<image>/09_date.js';$x1448->properties['line'] = 302;$x1448->properties['column'] = 25;$x1448->attributes['file'] = $x1448->attributes['line'] = $x1448->attributes['column'] = 0; }
throw new JSException($x1448, 302, 25, '<image>/09_date.js');
}
$x1444 = $x1442->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1445 = $x1444($global, $x1438, $x1442, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x1445;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_32($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1437=&$scope->properties[\'arguments\'];$x1437->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1437->properties[$i]=$args[$i];$x1437->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'key\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_key=&$scope->properties[\'key\'];$Ukey=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1439=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,25,\'<image>/09_date.js\');$_TypeError=&$x1439[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1439;$x1440=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1441=$x1440($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1441->class)&&$x1441->class===\'Error\'&&!isset($x1441->properties[\'file\'])&&!isset($x1441->properties[\'line\'])&&!isset($x1441->properties[\'column\'])){$x1441->properties[\'file\']=\'<image>/09_date.js\';$x1441->properties[\'line\']=302;$x1441->properties[\'column\']=25;$x1441->attributes[\'file\']=$x1441->attributes[\'line\']=$x1441->attributes[\'column\']=0;}throw new JSException($x1441,302,25,\'<image>/09_date.js\');}$x1438=JS::toObject($leThis,$global);unset($x1442,$W1442,$S1442,$U1442);$x1443=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1438,JS::toString(\'toISOString\',$global),302,25,\'<image>/09_date.js\');$x1442=&$x1443[0];list(,$W1442,$S1442,$U1442)=$x1443;if(!(is_object($x1442)&&isset($x1442->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1446=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,25,\'<image>/09_date.js\');$_TypeError=&$x1446[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1446;$x1447=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1448=$x1447($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1448->class)&&$x1448->class===\'Error\'&&!isset($x1448->properties[\'file\'])&&!isset($x1448->properties[\'line\'])&&!isset($x1448->properties[\'column\'])){$x1448->properties[\'file\']=\'<image>/09_date.js\';$x1448->properties[\'line\']=302;$x1448->properties[\'column\']=25;$x1448->attributes[\'file\']=$x1448->attributes[\'line\']=$x1448->attributes[\'column\']=0;}throw new JSException($x1448,302,25,\'<image>/09_date.js\');}$x1444=$x1442->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1445=$x1444($global,$x1438,$x1442,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x1445;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/09_date.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/09_date.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
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
$x127 = JS::toString('parse', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x128 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 53, 12, '<image>/09_date.js');
$_TypeError =& $x128[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x128;
$x129 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x130 = $x129($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x130->class) && $x130->class === 'Error' && !isset($x130->properties['file']) && !isset($x130->properties['line']) && !isset($x130->properties['column'])) {$x130->properties['file'] = '<image>/09_date.js';$x130->properties['line'] = 53;$x130->properties['column'] = 12;$x130->attributes['file'] = $x130->attributes['line'] = $x130->attributes['column'] = 0; }
throw new JSException($x130, 53, 12, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x131, $W131, $S131, $U131);
$x135 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x127, $global), 53, 12, '<image>/09_date.js');
$x131 =& $x135[0]; list(,$W131,$S131,$U131) = $x135;
if ($U131 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x127] = $x131; $x131 =& $_Date->properties[$x127]; $_Date->attributes[$x127] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U131 = FALSE; $W131 = TRUE; }
if (isset($S131)) {
$x137 = $S131->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x138 = $x137($global, $_Date, $S131, array($x126), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x138;
} else {
if (!$U131) {$x136 = $x126;if ($W131) { $x131 = $x126; }  }
else { $x136 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('parse') && 'parse' >= $_Date->properties['length']) { $_Date->properties['length'] = 'parse' + 1; };
$x154 = clone JS::$functionTemplate; $x154->call = '_a3686fcdd5b5a69538641de6dddfbea8_6'; $x154->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x154->scope = $scope; $x154->properties['prototype'] = clone JS::$objectTemplate; $x154->attributes['prototype'] = JS::WRITABLE; $x154->properties['prototype']->properties['constructor'] = $x154; $x154->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x154->properties['length'] = 7; $x154->attributes['length'] = 0;
$x155 = JS::toString('UTC', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x156 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 10, '<image>/09_date.js');
$_TypeError =& $x156[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x156;
$x157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x158 = $x157($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error' && !isset($x158->properties['file']) && !isset($x158->properties['line']) && !isset($x158->properties['column'])) {$x158->properties['file'] = '<image>/09_date.js';$x158->properties['line'] = 63;$x158->properties['column'] = 10;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 63, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x159, $W159, $S159, $U159);
$x160 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x155, $global), 63, 10, '<image>/09_date.js');
$x159 =& $x160[0]; list(,$W159,$S159,$U159) = $x160;
if ($U159 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x155] = $x159; $x159 =& $_Date->properties[$x155]; $_Date->attributes[$x155] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U159 = FALSE; $W159 = TRUE; }
if (isset($S159)) {
$x162 = $S159->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x163 = $x162($global, $_Date, $S159, array($x154), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x161 = $x163;
} else {
if (!$U159) {$x161 = $x154;if ($W159) { $x159 = $x154; }  }
else { $x161 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('UTC') && 'UTC' >= $_Date->properties['length']) { $_Date->properties['length'] = 'UTC' + 1; };
$x179 = clone JS::$functionTemplate; $x179->call = '_a3686fcdd5b5a69538641de6dddfbea8_7'; $x179->parameters = array (
); $x179->scope = $scope; $x179->properties['prototype'] = clone JS::$objectTemplate; $x179->attributes['prototype'] = JS::WRITABLE; $x179->properties['prototype']->properties['constructor'] = $x179; $x179->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x179->properties['length'] = 0; $x179->attributes['length'] = 0;
$x180 = JS::toString('now', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 67, 10, '<image>/09_date.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
$x182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x183 = $x182($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x183->class) && $x183->class === 'Error' && !isset($x183->properties['file']) && !isset($x183->properties['line']) && !isset($x183->properties['column'])) {$x183->properties['file'] = '<image>/09_date.js';$x183->properties['line'] = 67;$x183->properties['column'] = 10;$x183->attributes['file'] = $x183->attributes['line'] = $x183->attributes['column'] = 0; }
throw new JSException($x183, 67, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x184, $W184, $S184, $U184);
$x185 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x180, $global), 67, 10, '<image>/09_date.js');
$x184 =& $x185[0]; list(,$W184,$S184,$U184) = $x185;
if ($U184 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x180] = $x184; $x184 =& $_Date->properties[$x180]; $_Date->attributes[$x180] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U184 = FALSE; $W184 = TRUE; }
if (isset($S184)) {
$x187 = $S184->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x188 = $x187($global, $_Date, $S184, array($x179), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x186 = $x188;
} else {
if (!$U184) {$x186 = $x179;if ($W184) { $x184 = $x179; }  }
else { $x186 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('now') && 'now' >= $_Date->properties['length']) { $_Date->properties['length'] = 'now' + 1; };
$x189 = clone JS::$objectTemplate;
$x190 = JS::toString('prototype', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x191 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 71, 16, '<image>/09_date.js');
$_TypeError =& $x191[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x191;
$x192 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x193 = $x192($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x193->class) && $x193->class === 'Error' && !isset($x193->properties['file']) && !isset($x193->properties['line']) && !isset($x193->properties['column'])) {$x193->properties['file'] = '<image>/09_date.js';$x193->properties['line'] = 71;$x193->properties['column'] = 16;$x193->attributes['file'] = $x193->attributes['line'] = $x193->attributes['column'] = 0; }
throw new JSException($x193, 71, 16, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x194, $W194, $S194, $U194);
$x195 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x190, $global), 71, 16, '<image>/09_date.js');
$x194 =& $x195[0]; list(,$W194,$S194,$U194) = $x195;
if ($U194 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x190] = $x194; $x194 =& $_Date->properties[$x190]; $_Date->attributes[$x190] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U194 = FALSE; $W194 = TRUE; }
if (isset($S194)) {
$x197 = $S194->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x198 = $x197($global, $_Date, $S194, array($x189), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x196 = $x198;
} else {
if (!$U194) {$x196 = $x189;if ($W194) { $x194 = $x189; }  }
else { $x196 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Date->properties['length']) { $_Date->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x199 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Object', $global), 72, 49, '<image>/09_date.js');
$_Object =& $x199[0]; list(,$WObject,$SObject,$UObject) = $x199;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x200 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 49, '<image>/09_date.js');
$_ReferenceError =& $x200[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x200;
$x201 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 72, 49);
$x202 = $x201($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x202->class) && $x202->class === 'Error' && !isset($x202->properties['file']) && !isset($x202->properties['line']) && !isset($x202->properties['column'])) {$x202->properties['file'] = '<image>/09_date.js';$x202->properties['line'] = 72;$x202->properties['column'] = 49;$x202->attributes['file'] = $x202->attributes['line'] = $x202->attributes['column'] = 0; }
throw new JSException($x202, 72, 49, '<image>/09_date.js');
}
$_Date->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Date->properties['prototype']->class = 'Date';
$_Date->properties['prototype']->extensible = TRUE;
$_Date->properties['prototype']->value = NAN;
unset($x203, $W203, $S203, $U203);
$x204 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 76, 5, '<image>/09_date.js');
$x203 =& $x204[0]; list(,$W203,$S203,$U203) = $x204;
$x205 = JS::toString('constructor', $global);
if ($x203 === JS::$undefined || $x203 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x206 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 76, 28, '<image>/09_date.js');
$_TypeError =& $x206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x206;
$x207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x208 = $x207($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error' && !isset($x208->properties['file']) && !isset($x208->properties['line']) && !isset($x208->properties['column'])) {$x208->properties['file'] = '<image>/09_date.js';$x208->properties['line'] = 76;$x208->properties['column'] = 28;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 76, 28, '<image>/09_date.js');
}
$x203 = JS::toObject($x203, $global);
unset($x209, $W209, $S209, $U209);
$x210 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x203, JS::toString($x205, $global), 76, 28, '<image>/09_date.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
if ($U209 && (!isset($x203->extensible) || $x203->extensible)) {$x203->properties[$x205] = $x209; $x209 =& $x203->properties[$x205]; $x203->attributes[$x205] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U209 = FALSE; $W209 = TRUE; }
if (isset($S209)) {
$x212 = $S209->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x213 = $x212($global, $x203, $S209, array($_Date), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x211 = $x213;
} else {
if (!$U209) {$x211 = $_Date;if ($W209) { $x209 = $_Date; }  }
else { $x211 = JS::$undefined; }
}
if (isset($x203->class) && $x203->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x203->properties['length']) { $x203->properties['length'] = 'constructor' + 1; };
$x216 = clone JS::$functionTemplate; $x216->call = '_a3686fcdd5b5a69538641de6dddfbea8_8'; $x216->parameters = array (
); $x216->scope = $scope; $x216->properties['prototype'] = clone JS::$objectTemplate; $x216->attributes['prototype'] = JS::WRITABLE; $x216->properties['prototype']->properties['constructor'] = $x216; $x216->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x216->properties['length'] = 0; $x216->attributes['length'] = 0;
unset($x217, $W217, $S217, $U217);
$x218 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 78, 5, '<image>/09_date.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
$x219 = JS::toString('toString', $global);
if ($x217 === JS::$undefined || $x217 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 25, '<image>/09_date.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x222 = $x221($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/09_date.js';$x222->properties['line'] = 78;$x222->properties['column'] = 25;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 78, 25, '<image>/09_date.js');
}
$x217 = JS::toObject($x217, $global);
unset($x223, $W223, $S223, $U223);
$x224 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x217, JS::toString($x219, $global), 78, 25, '<image>/09_date.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
if ($U223 && (!isset($x217->extensible) || $x217->extensible)) {$x217->properties[$x219] = $x223; $x223 =& $x217->properties[$x219]; $x217->attributes[$x219] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U223 = FALSE; $W223 = TRUE; }
if (isset($S223)) {
$x226 = $S223->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x227 = $x226($global, $x217, $S223, array($x216), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x225 = $x227;
} else {
if (!$U223) {$x225 = $x216;if ($W223) { $x223 = $x216; }  }
else { $x225 = JS::$undefined; }
}
if (isset($x217->class) && $x217->class === 'Array' &&  is_int('toString') && 'toString' >= $x217->properties['length']) { $x217->properties['length'] = 'toString' + 1; };
$x230 = clone JS::$functionTemplate; $x230->call = '_a3686fcdd5b5a69538641de6dddfbea8_9'; $x230->parameters = array (
); $x230->scope = $scope; $x230->properties['prototype'] = clone JS::$objectTemplate; $x230->attributes['prototype'] = JS::WRITABLE; $x230->properties['prototype']->properties['constructor'] = $x230; $x230->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x230->properties['length'] = 0; $x230->attributes['length'] = 0;
unset($x231, $W231, $S231, $U231);
$x232 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 82, 5, '<image>/09_date.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
$x233 = JS::toString('toDateString', $global);
if ($x231 === JS::$undefined || $x231 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x234 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 29, '<image>/09_date.js');
$_TypeError =& $x234[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x234;
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x236 = $x235($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error' && !isset($x236->properties['file']) && !isset($x236->properties['line']) && !isset($x236->properties['column'])) {$x236->properties['file'] = '<image>/09_date.js';$x236->properties['line'] = 82;$x236->properties['column'] = 29;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 82, 29, '<image>/09_date.js');
}
$x231 = JS::toObject($x231, $global);
unset($x237, $W237, $S237, $U237);
$x238 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x231, JS::toString($x233, $global), 82, 29, '<image>/09_date.js');
$x237 =& $x238[0]; list(,$W237,$S237,$U237) = $x238;
if ($U237 && (!isset($x231->extensible) || $x231->extensible)) {$x231->properties[$x233] = $x237; $x237 =& $x231->properties[$x233]; $x231->attributes[$x233] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U237 = FALSE; $W237 = TRUE; }
if (isset($S237)) {
$x240 = $S237->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x241 = $x240($global, $x231, $S237, array($x230), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x239 = $x241;
} else {
if (!$U237) {$x239 = $x230;if ($W237) { $x237 = $x230; }  }
else { $x239 = JS::$undefined; }
}
if (isset($x231->class) && $x231->class === 'Array' &&  is_int('toDateString') && 'toDateString' >= $x231->properties['length']) { $x231->properties['length'] = 'toDateString' + 1; };
$x244 = clone JS::$functionTemplate; $x244->call = '_a3686fcdd5b5a69538641de6dddfbea8_10'; $x244->parameters = array (
); $x244->scope = $scope; $x244->properties['prototype'] = clone JS::$objectTemplate; $x244->attributes['prototype'] = JS::WRITABLE; $x244->properties['prototype']->properties['constructor'] = $x244; $x244->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x244->properties['length'] = 0; $x244->attributes['length'] = 0;
unset($x245, $W245, $S245, $U245);
$x246 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 86, 5, '<image>/09_date.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
$x247 = JS::toString('toTimeString', $global);
if ($x245 === JS::$undefined || $x245 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x248 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 86, 29, '<image>/09_date.js');
$_TypeError =& $x248[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x248;
$x249 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x250 = $x249($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/09_date.js';$x250->properties['line'] = 86;$x250->properties['column'] = 29;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 86, 29, '<image>/09_date.js');
}
$x245 = JS::toObject($x245, $global);
unset($x251, $W251, $S251, $U251);
$x252 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x245, JS::toString($x247, $global), 86, 29, '<image>/09_date.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
if ($U251 && (!isset($x245->extensible) || $x245->extensible)) {$x245->properties[$x247] = $x251; $x251 =& $x245->properties[$x247]; $x245->attributes[$x247] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U251 = FALSE; $W251 = TRUE; }
if (isset($S251)) {
$x254 = $S251->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x255 = $x254($global, $x245, $S251, array($x244), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x253 = $x255;
} else {
if (!$U251) {$x253 = $x244;if ($W251) { $x251 = $x244; }  }
else { $x253 = JS::$undefined; }
}
if (isset($x245->class) && $x245->class === 'Array' &&  is_int('toTimeString') && 'toTimeString' >= $x245->properties['length']) { $x245->properties['length'] = 'toTimeString' + 1; };
unset($x256, $W256, $S256, $U256);
$x257 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 90, 37, '<image>/09_date.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
unset($x258, $W258, $S258, $U258);
$x259 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x256, JS::toString('toString', $global), 90, 47, '<image>/09_date.js');
$x258 =& $x259[0]; list(,$W258,$S258,$U258) = $x259;
unset($x260, $W260, $S260, $U260);
$x261 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 90, 5, '<image>/09_date.js');
$x260 =& $x261[0]; list(,$W260,$S260,$U260) = $x261;
$x262 = JS::toString('toLocaleString', $global);
if ($x260 === JS::$undefined || $x260 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x263 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 31, '<image>/09_date.js');
$_TypeError =& $x263[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x263;
$x264 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x265 = $x264($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x265->class) && $x265->class === 'Error' && !isset($x265->properties['file']) && !isset($x265->properties['line']) && !isset($x265->properties['column'])) {$x265->properties['file'] = '<image>/09_date.js';$x265->properties['line'] = 90;$x265->properties['column'] = 31;$x265->attributes['file'] = $x265->attributes['line'] = $x265->attributes['column'] = 0; }
throw new JSException($x265, 90, 31, '<image>/09_date.js');
}
$x260 = JS::toObject($x260, $global);
unset($x266, $W266, $S266, $U266);
$x267 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x260, JS::toString($x262, $global), 90, 31, '<image>/09_date.js');
$x266 =& $x267[0]; list(,$W266,$S266,$U266) = $x267;
if ($U266 && (!isset($x260->extensible) || $x260->extensible)) {$x260->properties[$x262] = $x266; $x266 =& $x260->properties[$x262]; $x260->attributes[$x262] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U266 = FALSE; $W266 = TRUE; }
if (isset($S266)) {
$x269 = $S266->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x270 = $x269($global, $x260, $S266, array($x258), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x268 = $x270;
} else {
if (!$U266) {$x268 = $x258;if ($W266) { $x266 = $x258; }  }
else { $x268 = JS::$undefined; }
}
if (isset($x260->class) && $x260->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x260->properties['length']) { $x260->properties['length'] = 'toLocaleString' + 1; };
unset($x271, $W271, $S271, $U271);
$x272 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 91, 41, '<image>/09_date.js');
$x271 =& $x272[0]; list(,$W271,$S271,$U271) = $x272;
unset($x273, $W273, $S273, $U273);
$x274 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x271, JS::toString('toDateString', $global), 91, 51, '<image>/09_date.js');
$x273 =& $x274[0]; list(,$W273,$S273,$U273) = $x274;
unset($x275, $W275, $S275, $U275);
$x276 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 91, 5, '<image>/09_date.js');
$x275 =& $x276[0]; list(,$W275,$S275,$U275) = $x276;
$x277 = JS::toString('toLocaleDateString', $global);
if ($x275 === JS::$undefined || $x275 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x278 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 91, 35, '<image>/09_date.js');
$_TypeError =& $x278[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x278;
$x279 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x280 = $x279($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x280->class) && $x280->class === 'Error' && !isset($x280->properties['file']) && !isset($x280->properties['line']) && !isset($x280->properties['column'])) {$x280->properties['file'] = '<image>/09_date.js';$x280->properties['line'] = 91;$x280->properties['column'] = 35;$x280->attributes['file'] = $x280->attributes['line'] = $x280->attributes['column'] = 0; }
throw new JSException($x280, 91, 35, '<image>/09_date.js');
}
$x275 = JS::toObject($x275, $global);
unset($x281, $W281, $S281, $U281);
$x282 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x275, JS::toString($x277, $global), 91, 35, '<image>/09_date.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
if ($U281 && (!isset($x275->extensible) || $x275->extensible)) {$x275->properties[$x277] = $x281; $x281 =& $x275->properties[$x277]; $x275->attributes[$x277] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U281 = FALSE; $W281 = TRUE; }
if (isset($S281)) {
$x284 = $S281->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x285 = $x284($global, $x275, $S281, array($x273), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x283 = $x285;
} else {
if (!$U281) {$x283 = $x273;if ($W281) { $x281 = $x273; }  }
else { $x283 = JS::$undefined; }
}
if (isset($x275->class) && $x275->class === 'Array' &&  is_int('toLocaleDateString') && 'toLocaleDateString' >= $x275->properties['length']) { $x275->properties['length'] = 'toLocaleDateString' + 1; };
unset($x286, $W286, $S286, $U286);
$x287 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 92, 41, '<image>/09_date.js');
$x286 =& $x287[0]; list(,$W286,$S286,$U286) = $x287;
unset($x288, $W288, $S288, $U288);
$x289 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x286, JS::toString('toTimeString', $global), 92, 51, '<image>/09_date.js');
$x288 =& $x289[0]; list(,$W288,$S288,$U288) = $x289;
unset($x290, $W290, $S290, $U290);
$x291 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 92, 5, '<image>/09_date.js');
$x290 =& $x291[0]; list(,$W290,$S290,$U290) = $x291;
$x292 = JS::toString('toLocaleTimeString', $global);
if ($x290 === JS::$undefined || $x290 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x293 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 92, 35, '<image>/09_date.js');
$_TypeError =& $x293[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x293;
$x294 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x295 = $x294($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x295->class) && $x295->class === 'Error' && !isset($x295->properties['file']) && !isset($x295->properties['line']) && !isset($x295->properties['column'])) {$x295->properties['file'] = '<image>/09_date.js';$x295->properties['line'] = 92;$x295->properties['column'] = 35;$x295->attributes['file'] = $x295->attributes['line'] = $x295->attributes['column'] = 0; }
throw new JSException($x295, 92, 35, '<image>/09_date.js');
}
$x290 = JS::toObject($x290, $global);
unset($x296, $W296, $S296, $U296);
$x297 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x290, JS::toString($x292, $global), 92, 35, '<image>/09_date.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
if ($U296 && (!isset($x290->extensible) || $x290->extensible)) {$x290->properties[$x292] = $x296; $x296 =& $x290->properties[$x292]; $x290->attributes[$x292] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U296 = FALSE; $W296 = TRUE; }
if (isset($S296)) {
$x299 = $S296->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x300 = $x299($global, $x290, $S296, array($x288), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x298 = $x300;
} else {
if (!$U296) {$x298 = $x288;if ($W296) { $x296 = $x288; }  }
else { $x298 = JS::$undefined; }
}
if (isset($x290->class) && $x290->class === 'Array' &&  is_int('toLocaleTimeString') && 'toLocaleTimeString' >= $x290->properties['length']) { $x290->properties['length'] = 'toLocaleTimeString' + 1; };
$x303 = clone JS::$functionTemplate; $x303->call = '_a3686fcdd5b5a69538641de6dddfbea8_11'; $x303->parameters = array (
); $x303->scope = $scope; $x303->properties['prototype'] = clone JS::$objectTemplate; $x303->attributes['prototype'] = JS::WRITABLE; $x303->properties['prototype']->properties['constructor'] = $x303; $x303->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x303->properties['length'] = 0; $x303->attributes['length'] = 0;
unset($x304, $W304, $S304, $U304);
$x305 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 94, 5, '<image>/09_date.js');
$x304 =& $x305[0]; list(,$W304,$S304,$U304) = $x305;
$x306 = JS::toString('valueOf', $global);
if ($x304 === JS::$undefined || $x304 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x307 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 94, 24, '<image>/09_date.js');
$_TypeError =& $x307[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x307;
$x308 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x309 = $x308($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x309->class) && $x309->class === 'Error' && !isset($x309->properties['file']) && !isset($x309->properties['line']) && !isset($x309->properties['column'])) {$x309->properties['file'] = '<image>/09_date.js';$x309->properties['line'] = 94;$x309->properties['column'] = 24;$x309->attributes['file'] = $x309->attributes['line'] = $x309->attributes['column'] = 0; }
throw new JSException($x309, 94, 24, '<image>/09_date.js');
}
$x304 = JS::toObject($x304, $global);
unset($x310, $W310, $S310, $U310);
$x311 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x304, JS::toString($x306, $global), 94, 24, '<image>/09_date.js');
$x310 =& $x311[0]; list(,$W310,$S310,$U310) = $x311;
if ($U310 && (!isset($x304->extensible) || $x304->extensible)) {$x304->properties[$x306] = $x310; $x310 =& $x304->properties[$x306]; $x304->attributes[$x306] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U310 = FALSE; $W310 = TRUE; }
if (isset($S310)) {
$x313 = $S310->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x314 = $x313($global, $x304, $S310, array($x303), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x312 = $x314;
} else {
if (!$U310) {$x312 = $x303;if ($W310) { $x310 = $x303; }  }
else { $x312 = JS::$undefined; }
}
if (isset($x304->class) && $x304->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x304->properties['length']) { $x304->properties['length'] = 'valueOf' + 1; };
unset($x315, $W315, $S315, $U315);
$x316 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 98, 30, '<image>/09_date.js');
$x315 =& $x316[0]; list(,$W315,$S315,$U315) = $x316;
unset($x317, $W317, $S317, $U317);
$x318 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x315, JS::toString('valueOf', $global), 98, 40, '<image>/09_date.js');
$x317 =& $x318[0]; list(,$W317,$S317,$U317) = $x318;
unset($x319, $W319, $S319, $U319);
$x320 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 98, 5, '<image>/09_date.js');
$x319 =& $x320[0]; list(,$W319,$S319,$U319) = $x320;
$x321 = JS::toString('getTime', $global);
if ($x319 === JS::$undefined || $x319 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x322 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 98, 24, '<image>/09_date.js');
$_TypeError =& $x322[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x322;
$x323 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x324 = $x323($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x324->class) && $x324->class === 'Error' && !isset($x324->properties['file']) && !isset($x324->properties['line']) && !isset($x324->properties['column'])) {$x324->properties['file'] = '<image>/09_date.js';$x324->properties['line'] = 98;$x324->properties['column'] = 24;$x324->attributes['file'] = $x324->attributes['line'] = $x324->attributes['column'] = 0; }
throw new JSException($x324, 98, 24, '<image>/09_date.js');
}
$x319 = JS::toObject($x319, $global);
unset($x325, $W325, $S325, $U325);
$x326 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x319, JS::toString($x321, $global), 98, 24, '<image>/09_date.js');
$x325 =& $x326[0]; list(,$W325,$S325,$U325) = $x326;
if ($U325 && (!isset($x319->extensible) || $x319->extensible)) {$x319->properties[$x321] = $x325; $x325 =& $x319->properties[$x321]; $x319->attributes[$x321] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U325 = FALSE; $W325 = TRUE; }
if (isset($S325)) {
$x328 = $S325->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x329 = $x328($global, $x319, $S325, array($x317), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x329;
} else {
if (!$U325) {$x327 = $x317;if ($W325) { $x325 = $x317; }  }
else { $x327 = JS::$undefined; }
}
if (isset($x319->class) && $x319->class === 'Array' &&  is_int('getTime') && 'getTime' >= $x319->properties['length']) { $x319->properties['length'] = 'getTime' + 1; };
$x332 = clone JS::$functionTemplate; $x332->call = '_a3686fcdd5b5a69538641de6dddfbea8_12'; $x332->parameters = array (
); $x332->scope = $scope; $x332->properties['prototype'] = clone JS::$objectTemplate; $x332->attributes['prototype'] = JS::WRITABLE; $x332->properties['prototype']->properties['constructor'] = $x332; $x332->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x332->properties['length'] = 0; $x332->attributes['length'] = 0;
unset($x333, $W333, $S333, $U333);
$x334 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 100, 5, '<image>/09_date.js');
$x333 =& $x334[0]; list(,$W333,$S333,$U333) = $x334;
$x335 = JS::toString('getFullYear', $global);
if ($x333 === JS::$undefined || $x333 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 100, 28, '<image>/09_date.js');
$_TypeError =& $x336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x336;
$x337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x338 = $x337($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x338->class) && $x338->class === 'Error' && !isset($x338->properties['file']) && !isset($x338->properties['line']) && !isset($x338->properties['column'])) {$x338->properties['file'] = '<image>/09_date.js';$x338->properties['line'] = 100;$x338->properties['column'] = 28;$x338->attributes['file'] = $x338->attributes['line'] = $x338->attributes['column'] = 0; }
throw new JSException($x338, 100, 28, '<image>/09_date.js');
}
$x333 = JS::toObject($x333, $global);
unset($x339, $W339, $S339, $U339);
$x340 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x333, JS::toString($x335, $global), 100, 28, '<image>/09_date.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if ($U339 && (!isset($x333->extensible) || $x333->extensible)) {$x333->properties[$x335] = $x339; $x339 =& $x333->properties[$x335]; $x333->attributes[$x335] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U339 = FALSE; $W339 = TRUE; }
if (isset($S339)) {
$x342 = $S339->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x343 = $x342($global, $x333, $S339, array($x332), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x341 = $x343;
} else {
if (!$U339) {$x341 = $x332;if ($W339) { $x339 = $x332; }  }
else { $x341 = JS::$undefined; }
}
if (isset($x333->class) && $x333->class === 'Array' &&  is_int('getFullYear') && 'getFullYear' >= $x333->properties['length']) { $x333->properties['length'] = 'getFullYear' + 1; };
$x359 = clone JS::$functionTemplate; $x359->call = '_a3686fcdd5b5a69538641de6dddfbea8_13'; $x359->parameters = array (
); $x359->scope = $scope; $x359->properties['prototype'] = clone JS::$objectTemplate; $x359->attributes['prototype'] = JS::WRITABLE; $x359->properties['prototype']->properties['constructor'] = $x359; $x359->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x359->properties['length'] = 0; $x359->attributes['length'] = 0;
unset($x360, $W360, $S360, $U360);
$x361 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 104, 5, '<image>/09_date.js');
$x360 =& $x361[0]; list(,$W360,$S360,$U360) = $x361;
$x362 = JS::toString('getUTCFullYear', $global);
if ($x360 === JS::$undefined || $x360 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x363 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 104, 31, '<image>/09_date.js');
$_TypeError =& $x363[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x363;
$x364 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x365 = $x364($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x365->class) && $x365->class === 'Error' && !isset($x365->properties['file']) && !isset($x365->properties['line']) && !isset($x365->properties['column'])) {$x365->properties['file'] = '<image>/09_date.js';$x365->properties['line'] = 104;$x365->properties['column'] = 31;$x365->attributes['file'] = $x365->attributes['line'] = $x365->attributes['column'] = 0; }
throw new JSException($x365, 104, 31, '<image>/09_date.js');
}
$x360 = JS::toObject($x360, $global);
unset($x366, $W366, $S366, $U366);
$x367 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x360, JS::toString($x362, $global), 104, 31, '<image>/09_date.js');
$x366 =& $x367[0]; list(,$W366,$S366,$U366) = $x367;
if ($U366 && (!isset($x360->extensible) || $x360->extensible)) {$x360->properties[$x362] = $x366; $x366 =& $x360->properties[$x362]; $x360->attributes[$x362] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U366 = FALSE; $W366 = TRUE; }
if (isset($S366)) {
$x369 = $S366->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x370 = $x369($global, $x360, $S366, array($x359), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x368 = $x370;
} else {
if (!$U366) {$x368 = $x359;if ($W366) { $x366 = $x359; }  }
else { $x368 = JS::$undefined; }
}
if (isset($x360->class) && $x360->class === 'Array' &&  is_int('getUTCFullYear') && 'getUTCFullYear' >= $x360->properties['length']) { $x360->properties['length'] = 'getUTCFullYear' + 1; };
$x384 = clone JS::$functionTemplate; $x384->call = '_a3686fcdd5b5a69538641de6dddfbea8_14'; $x384->parameters = array (
); $x384->scope = $scope; $x384->properties['prototype'] = clone JS::$objectTemplate; $x384->attributes['prototype'] = JS::WRITABLE; $x384->properties['prototype']->properties['constructor'] = $x384; $x384->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x384->properties['length'] = 0; $x384->attributes['length'] = 0;
unset($x385, $W385, $S385, $U385);
$x386 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 108, 5, '<image>/09_date.js');
$x385 =& $x386[0]; list(,$W385,$S385,$U385) = $x386;
$x387 = JS::toString('getYear', $global);
if ($x385 === JS::$undefined || $x385 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x388 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 108, 24, '<image>/09_date.js');
$_TypeError =& $x388[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x388;
$x389 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x390 = $x389($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x390->class) && $x390->class === 'Error' && !isset($x390->properties['file']) && !isset($x390->properties['line']) && !isset($x390->properties['column'])) {$x390->properties['file'] = '<image>/09_date.js';$x390->properties['line'] = 108;$x390->properties['column'] = 24;$x390->attributes['file'] = $x390->attributes['line'] = $x390->attributes['column'] = 0; }
throw new JSException($x390, 108, 24, '<image>/09_date.js');
}
$x385 = JS::toObject($x385, $global);
unset($x391, $W391, $S391, $U391);
$x392 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x385, JS::toString($x387, $global), 108, 24, '<image>/09_date.js');
$x391 =& $x392[0]; list(,$W391,$S391,$U391) = $x392;
if ($U391 && (!isset($x385->extensible) || $x385->extensible)) {$x385->properties[$x387] = $x391; $x391 =& $x385->properties[$x387]; $x385->attributes[$x387] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U391 = FALSE; $W391 = TRUE; }
if (isset($S391)) {
$x394 = $S391->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x395 = $x394($global, $x385, $S391, array($x384), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x393 = $x395;
} else {
if (!$U391) {$x393 = $x384;if ($W391) { $x391 = $x384; }  }
else { $x393 = JS::$undefined; }
}
if (isset($x385->class) && $x385->class === 'Array' &&  is_int('getYear') && 'getYear' >= $x385->properties['length']) { $x385->properties['length'] = 'getYear' + 1; };
unset($x396, $W396, $S396, $U396);
$x397 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 112, 33, '<image>/09_date.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
unset($x398, $W398, $S398, $U398);
$x399 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x396, JS::toString('getUTCFullYear', $global), 112, 43, '<image>/09_date.js');
$x398 =& $x399[0]; list(,$W398,$S398,$U398) = $x399;
unset($x400, $W400, $S400, $U400);
$x401 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 112, 5, '<image>/09_date.js');
$x400 =& $x401[0]; list(,$W400,$S400,$U400) = $x401;
$x402 = JS::toString('getUTCYear', $global);
if ($x400 === JS::$undefined || $x400 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x403 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 112, 27, '<image>/09_date.js');
$_TypeError =& $x403[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x403;
$x404 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x405 = $x404($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x405->class) && $x405->class === 'Error' && !isset($x405->properties['file']) && !isset($x405->properties['line']) && !isset($x405->properties['column'])) {$x405->properties['file'] = '<image>/09_date.js';$x405->properties['line'] = 112;$x405->properties['column'] = 27;$x405->attributes['file'] = $x405->attributes['line'] = $x405->attributes['column'] = 0; }
throw new JSException($x405, 112, 27, '<image>/09_date.js');
}
$x400 = JS::toObject($x400, $global);
unset($x406, $W406, $S406, $U406);
$x407 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x400, JS::toString($x402, $global), 112, 27, '<image>/09_date.js');
$x406 =& $x407[0]; list(,$W406,$S406,$U406) = $x407;
if ($U406 && (!isset($x400->extensible) || $x400->extensible)) {$x400->properties[$x402] = $x406; $x406 =& $x400->properties[$x402]; $x400->attributes[$x402] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U406 = FALSE; $W406 = TRUE; }
if (isset($S406)) {
$x409 = $S406->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x410 = $x409($global, $x400, $S406, array($x398), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x408 = $x410;
} else {
if (!$U406) {$x408 = $x398;if ($W406) { $x406 = $x398; }  }
else { $x408 = JS::$undefined; }
}
if (isset($x400->class) && $x400->class === 'Array' &&  is_int('getUTCYear') && 'getUTCYear' >= $x400->properties['length']) { $x400->properties['length'] = 'getUTCYear' + 1; };
$x413 = clone JS::$functionTemplate; $x413->call = '_a3686fcdd5b5a69538641de6dddfbea8_15'; $x413->parameters = array (
); $x413->scope = $scope; $x413->properties['prototype'] = clone JS::$objectTemplate; $x413->attributes['prototype'] = JS::WRITABLE; $x413->properties['prototype']->properties['constructor'] = $x413; $x413->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x413->properties['length'] = 0; $x413->attributes['length'] = 0;
unset($x414, $W414, $S414, $U414);
$x415 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 114, 5, '<image>/09_date.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
$x416 = JS::toString('getMonth', $global);
if ($x414 === JS::$undefined || $x414 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x417 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 114, 25, '<image>/09_date.js');
$_TypeError =& $x417[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x417;
$x418 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x419 = $x418($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x419->class) && $x419->class === 'Error' && !isset($x419->properties['file']) && !isset($x419->properties['line']) && !isset($x419->properties['column'])) {$x419->properties['file'] = '<image>/09_date.js';$x419->properties['line'] = 114;$x419->properties['column'] = 25;$x419->attributes['file'] = $x419->attributes['line'] = $x419->attributes['column'] = 0; }
throw new JSException($x419, 114, 25, '<image>/09_date.js');
}
$x414 = JS::toObject($x414, $global);
unset($x420, $W420, $S420, $U420);
$x421 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x414, JS::toString($x416, $global), 114, 25, '<image>/09_date.js');
$x420 =& $x421[0]; list(,$W420,$S420,$U420) = $x421;
if ($U420 && (!isset($x414->extensible) || $x414->extensible)) {$x414->properties[$x416] = $x420; $x420 =& $x414->properties[$x416]; $x414->attributes[$x416] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U420 = FALSE; $W420 = TRUE; }
if (isset($S420)) {
$x423 = $S420->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x424 = $x423($global, $x414, $S420, array($x413), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x422 = $x424;
} else {
if (!$U420) {$x422 = $x413;if ($W420) { $x420 = $x413; }  }
else { $x422 = JS::$undefined; }
}
if (isset($x414->class) && $x414->class === 'Array' &&  is_int('getMonth') && 'getMonth' >= $x414->properties['length']) { $x414->properties['length'] = 'getMonth' + 1; };
unset($x425, $W425, $S425, $U425);
$x426 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 118, 34, '<image>/09_date.js');
$x425 =& $x426[0]; list(,$W425,$S425,$U425) = $x426;
unset($x427, $W427, $S427, $U427);
$x428 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x425, JS::toString('getUTCFullYear', $global), 118, 44, '<image>/09_date.js');
$x427 =& $x428[0]; list(,$W427,$S427,$U427) = $x428;
unset($x429, $W429, $S429, $U429);
$x430 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 118, 5, '<image>/09_date.js');
$x429 =& $x430[0]; list(,$W429,$S429,$U429) = $x430;
$x431 = JS::toString('getUTCMonth', $global);
if ($x429 === JS::$undefined || $x429 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x432 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 118, 28, '<image>/09_date.js');
$_TypeError =& $x432[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x432;
$x433 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x434 = $x433($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x434->class) && $x434->class === 'Error' && !isset($x434->properties['file']) && !isset($x434->properties['line']) && !isset($x434->properties['column'])) {$x434->properties['file'] = '<image>/09_date.js';$x434->properties['line'] = 118;$x434->properties['column'] = 28;$x434->attributes['file'] = $x434->attributes['line'] = $x434->attributes['column'] = 0; }
throw new JSException($x434, 118, 28, '<image>/09_date.js');
}
$x429 = JS::toObject($x429, $global);
unset($x435, $W435, $S435, $U435);
$x436 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x429, JS::toString($x431, $global), 118, 28, '<image>/09_date.js');
$x435 =& $x436[0]; list(,$W435,$S435,$U435) = $x436;
if ($U435 && (!isset($x429->extensible) || $x429->extensible)) {$x429->properties[$x431] = $x435; $x435 =& $x429->properties[$x431]; $x429->attributes[$x431] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U435 = FALSE; $W435 = TRUE; }
if (isset($S435)) {
$x438 = $S435->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x439 = $x438($global, $x429, $S435, array($x427), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x437 = $x439;
} else {
if (!$U435) {$x437 = $x427;if ($W435) { $x435 = $x427; }  }
else { $x437 = JS::$undefined; }
}
if (isset($x429->class) && $x429->class === 'Array' &&  is_int('getUTCMonth') && 'getUTCMonth' >= $x429->properties['length']) { $x429->properties['length'] = 'getUTCMonth' + 1; };
$x442 = clone JS::$functionTemplate; $x442->call = '_a3686fcdd5b5a69538641de6dddfbea8_16'; $x442->parameters = array (
); $x442->scope = $scope; $x442->properties['prototype'] = clone JS::$objectTemplate; $x442->attributes['prototype'] = JS::WRITABLE; $x442->properties['prototype']->properties['constructor'] = $x442; $x442->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x442->properties['length'] = 0; $x442->attributes['length'] = 0;
unset($x443, $W443, $S443, $U443);
$x444 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 120, 5, '<image>/09_date.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
$x445 = JS::toString('getDate', $global);
if ($x443 === JS::$undefined || $x443 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x446 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 24, '<image>/09_date.js');
$_TypeError =& $x446[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x446;
$x447 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x448 = $x447($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x448->class) && $x448->class === 'Error' && !isset($x448->properties['file']) && !isset($x448->properties['line']) && !isset($x448->properties['column'])) {$x448->properties['file'] = '<image>/09_date.js';$x448->properties['line'] = 120;$x448->properties['column'] = 24;$x448->attributes['file'] = $x448->attributes['line'] = $x448->attributes['column'] = 0; }
throw new JSException($x448, 120, 24, '<image>/09_date.js');
}
$x443 = JS::toObject($x443, $global);
unset($x449, $W449, $S449, $U449);
$x450 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x443, JS::toString($x445, $global), 120, 24, '<image>/09_date.js');
$x449 =& $x450[0]; list(,$W449,$S449,$U449) = $x450;
if ($U449 && (!isset($x443->extensible) || $x443->extensible)) {$x443->properties[$x445] = $x449; $x449 =& $x443->properties[$x445]; $x443->attributes[$x445] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U449 = FALSE; $W449 = TRUE; }
if (isset($S449)) {
$x452 = $S449->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x453 = $x452($global, $x443, $S449, array($x442), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x451 = $x453;
} else {
if (!$U449) {$x451 = $x442;if ($W449) { $x449 = $x442; }  }
else { $x451 = JS::$undefined; }
}
if (isset($x443->class) && $x443->class === 'Array' &&  is_int('getDate') && 'getDate' >= $x443->properties['length']) { $x443->properties['length'] = 'getDate' + 1; };
unset($x454, $W454, $S454, $U454);
$x455 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 124, 33, '<image>/09_date.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
unset($x456, $W456, $S456, $U456);
$x457 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x454, JS::toString('getUTCFullYear', $global), 124, 43, '<image>/09_date.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
unset($x458, $W458, $S458, $U458);
$x459 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 124, 5, '<image>/09_date.js');
$x458 =& $x459[0]; list(,$W458,$S458,$U458) = $x459;
$x460 = JS::toString('getUTCDate', $global);
if ($x458 === JS::$undefined || $x458 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x461 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 124, 27, '<image>/09_date.js');
$_TypeError =& $x461[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x461;
$x462 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x463 = $x462($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x463->class) && $x463->class === 'Error' && !isset($x463->properties['file']) && !isset($x463->properties['line']) && !isset($x463->properties['column'])) {$x463->properties['file'] = '<image>/09_date.js';$x463->properties['line'] = 124;$x463->properties['column'] = 27;$x463->attributes['file'] = $x463->attributes['line'] = $x463->attributes['column'] = 0; }
throw new JSException($x463, 124, 27, '<image>/09_date.js');
}
$x458 = JS::toObject($x458, $global);
unset($x464, $W464, $S464, $U464);
$x465 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x458, JS::toString($x460, $global), 124, 27, '<image>/09_date.js');
$x464 =& $x465[0]; list(,$W464,$S464,$U464) = $x465;
if ($U464 && (!isset($x458->extensible) || $x458->extensible)) {$x458->properties[$x460] = $x464; $x464 =& $x458->properties[$x460]; $x458->attributes[$x460] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U464 = FALSE; $W464 = TRUE; }
if (isset($S464)) {
$x467 = $S464->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x468 = $x467($global, $x458, $S464, array($x456), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x466 = $x468;
} else {
if (!$U464) {$x466 = $x456;if ($W464) { $x464 = $x456; }  }
else { $x466 = JS::$undefined; }
}
if (isset($x458->class) && $x458->class === 'Array' &&  is_int('getUTCDate') && 'getUTCDate' >= $x458->properties['length']) { $x458->properties['length'] = 'getUTCDate' + 1; };
$x471 = clone JS::$functionTemplate; $x471->call = '_a3686fcdd5b5a69538641de6dddfbea8_17'; $x471->parameters = array (
); $x471->scope = $scope; $x471->properties['prototype'] = clone JS::$objectTemplate; $x471->attributes['prototype'] = JS::WRITABLE; $x471->properties['prototype']->properties['constructor'] = $x471; $x471->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x471->properties['length'] = 0; $x471->attributes['length'] = 0;
unset($x472, $W472, $S472, $U472);
$x473 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 126, 5, '<image>/09_date.js');
$x472 =& $x473[0]; list(,$W472,$S472,$U472) = $x473;
$x474 = JS::toString('getDay', $global);
if ($x472 === JS::$undefined || $x472 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x475 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 126, 23, '<image>/09_date.js');
$_TypeError =& $x475[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x475;
$x476 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x477 = $x476($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x477->class) && $x477->class === 'Error' && !isset($x477->properties['file']) && !isset($x477->properties['line']) && !isset($x477->properties['column'])) {$x477->properties['file'] = '<image>/09_date.js';$x477->properties['line'] = 126;$x477->properties['column'] = 23;$x477->attributes['file'] = $x477->attributes['line'] = $x477->attributes['column'] = 0; }
throw new JSException($x477, 126, 23, '<image>/09_date.js');
}
$x472 = JS::toObject($x472, $global);
unset($x478, $W478, $S478, $U478);
$x479 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x472, JS::toString($x474, $global), 126, 23, '<image>/09_date.js');
$x478 =& $x479[0]; list(,$W478,$S478,$U478) = $x479;
if ($U478 && (!isset($x472->extensible) || $x472->extensible)) {$x472->properties[$x474] = $x478; $x478 =& $x472->properties[$x474]; $x472->attributes[$x474] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U478 = FALSE; $W478 = TRUE; }
if (isset($S478)) {
$x481 = $S478->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x482 = $x481($global, $x472, $S478, array($x471), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x480 = $x482;
} else {
if (!$U478) {$x480 = $x471;if ($W478) { $x478 = $x471; }  }
else { $x480 = JS::$undefined; }
}
if (isset($x472->class) && $x472->class === 'Array' &&  is_int('getDay') && 'getDay' >= $x472->properties['length']) { $x472->properties['length'] = 'getDay' + 1; };
unset($x483, $W483, $S483, $U483);
$x484 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 130, 32, '<image>/09_date.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
unset($x485, $W485, $S485, $U485);
$x486 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x483, JS::toString('getUTCFullYear', $global), 130, 42, '<image>/09_date.js');
$x485 =& $x486[0]; list(,$W485,$S485,$U485) = $x486;
unset($x487, $W487, $S487, $U487);
$x488 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 130, 5, '<image>/09_date.js');
$x487 =& $x488[0]; list(,$W487,$S487,$U487) = $x488;
$x489 = JS::toString('getUTCDay', $global);
if ($x487 === JS::$undefined || $x487 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x490 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 130, 26, '<image>/09_date.js');
$_TypeError =& $x490[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x490;
$x491 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x492 = $x491($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x492->class) && $x492->class === 'Error' && !isset($x492->properties['file']) && !isset($x492->properties['line']) && !isset($x492->properties['column'])) {$x492->properties['file'] = '<image>/09_date.js';$x492->properties['line'] = 130;$x492->properties['column'] = 26;$x492->attributes['file'] = $x492->attributes['line'] = $x492->attributes['column'] = 0; }
throw new JSException($x492, 130, 26, '<image>/09_date.js');
}
$x487 = JS::toObject($x487, $global);
unset($x493, $W493, $S493, $U493);
$x494 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x487, JS::toString($x489, $global), 130, 26, '<image>/09_date.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
if ($U493 && (!isset($x487->extensible) || $x487->extensible)) {$x487->properties[$x489] = $x493; $x493 =& $x487->properties[$x489]; $x487->attributes[$x489] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U493 = FALSE; $W493 = TRUE; }
if (isset($S493)) {
$x496 = $S493->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x497 = $x496($global, $x487, $S493, array($x485), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x495 = $x497;
} else {
if (!$U493) {$x495 = $x485;if ($W493) { $x493 = $x485; }  }
else { $x495 = JS::$undefined; }
}
if (isset($x487->class) && $x487->class === 'Array' &&  is_int('getUTCDay') && 'getUTCDay' >= $x487->properties['length']) { $x487->properties['length'] = 'getUTCDay' + 1; };
$x500 = clone JS::$functionTemplate; $x500->call = '_a3686fcdd5b5a69538641de6dddfbea8_18'; $x500->parameters = array (
); $x500->scope = $scope; $x500->properties['prototype'] = clone JS::$objectTemplate; $x500->attributes['prototype'] = JS::WRITABLE; $x500->properties['prototype']->properties['constructor'] = $x500; $x500->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x500->properties['length'] = 0; $x500->attributes['length'] = 0;
unset($x501, $W501, $S501, $U501);
$x502 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 132, 5, '<image>/09_date.js');
$x501 =& $x502[0]; list(,$W501,$S501,$U501) = $x502;
$x503 = JS::toString('getHours', $global);
if ($x501 === JS::$undefined || $x501 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x504 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 132, 25, '<image>/09_date.js');
$_TypeError =& $x504[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x504;
$x505 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x506 = $x505($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x506->class) && $x506->class === 'Error' && !isset($x506->properties['file']) && !isset($x506->properties['line']) && !isset($x506->properties['column'])) {$x506->properties['file'] = '<image>/09_date.js';$x506->properties['line'] = 132;$x506->properties['column'] = 25;$x506->attributes['file'] = $x506->attributes['line'] = $x506->attributes['column'] = 0; }
throw new JSException($x506, 132, 25, '<image>/09_date.js');
}
$x501 = JS::toObject($x501, $global);
unset($x507, $W507, $S507, $U507);
$x508 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x501, JS::toString($x503, $global), 132, 25, '<image>/09_date.js');
$x507 =& $x508[0]; list(,$W507,$S507,$U507) = $x508;
if ($U507 && (!isset($x501->extensible) || $x501->extensible)) {$x501->properties[$x503] = $x507; $x507 =& $x501->properties[$x503]; $x501->attributes[$x503] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U507 = FALSE; $W507 = TRUE; }
if (isset($S507)) {
$x510 = $S507->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x511 = $x510($global, $x501, $S507, array($x500), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x509 = $x511;
} else {
if (!$U507) {$x509 = $x500;if ($W507) { $x507 = $x500; }  }
else { $x509 = JS::$undefined; }
}
if (isset($x501->class) && $x501->class === 'Array' &&  is_int('getHours') && 'getHours' >= $x501->properties['length']) { $x501->properties['length'] = 'getHours' + 1; };
unset($x512, $W512, $S512, $U512);
$x513 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 136, 34, '<image>/09_date.js');
$x512 =& $x513[0]; list(,$W512,$S512,$U512) = $x513;
unset($x514, $W514, $S514, $U514);
$x515 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x512, JS::toString('getUTCFullYear', $global), 136, 44, '<image>/09_date.js');
$x514 =& $x515[0]; list(,$W514,$S514,$U514) = $x515;
unset($x516, $W516, $S516, $U516);
$x517 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 136, 5, '<image>/09_date.js');
$x516 =& $x517[0]; list(,$W516,$S516,$U516) = $x517;
$x518 = JS::toString('getUTCHours', $global);
if ($x516 === JS::$undefined || $x516 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x519 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 136, 28, '<image>/09_date.js');
$_TypeError =& $x519[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x519;
$x520 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x521 = $x520($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x521->class) && $x521->class === 'Error' && !isset($x521->properties['file']) && !isset($x521->properties['line']) && !isset($x521->properties['column'])) {$x521->properties['file'] = '<image>/09_date.js';$x521->properties['line'] = 136;$x521->properties['column'] = 28;$x521->attributes['file'] = $x521->attributes['line'] = $x521->attributes['column'] = 0; }
throw new JSException($x521, 136, 28, '<image>/09_date.js');
}
$x516 = JS::toObject($x516, $global);
unset($x522, $W522, $S522, $U522);
$x523 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x516, JS::toString($x518, $global), 136, 28, '<image>/09_date.js');
$x522 =& $x523[0]; list(,$W522,$S522,$U522) = $x523;
if ($U522 && (!isset($x516->extensible) || $x516->extensible)) {$x516->properties[$x518] = $x522; $x522 =& $x516->properties[$x518]; $x516->attributes[$x518] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U522 = FALSE; $W522 = TRUE; }
if (isset($S522)) {
$x525 = $S522->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x526 = $x525($global, $x516, $S522, array($x514), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x524 = $x526;
} else {
if (!$U522) {$x524 = $x514;if ($W522) { $x522 = $x514; }  }
else { $x524 = JS::$undefined; }
}
if (isset($x516->class) && $x516->class === 'Array' &&  is_int('getUTCHours') && 'getUTCHours' >= $x516->properties['length']) { $x516->properties['length'] = 'getUTCHours' + 1; };
$x529 = clone JS::$functionTemplate; $x529->call = '_a3686fcdd5b5a69538641de6dddfbea8_19'; $x529->parameters = array (
); $x529->scope = $scope; $x529->properties['prototype'] = clone JS::$objectTemplate; $x529->attributes['prototype'] = JS::WRITABLE; $x529->properties['prototype']->properties['constructor'] = $x529; $x529->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x529->properties['length'] = 0; $x529->attributes['length'] = 0;
unset($x530, $W530, $S530, $U530);
$x531 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 138, 5, '<image>/09_date.js');
$x530 =& $x531[0]; list(,$W530,$S530,$U530) = $x531;
$x532 = JS::toString('getMinutes', $global);
if ($x530 === JS::$undefined || $x530 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x533 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 138, 27, '<image>/09_date.js');
$_TypeError =& $x533[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x533;
$x534 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x535 = $x534($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x535->class) && $x535->class === 'Error' && !isset($x535->properties['file']) && !isset($x535->properties['line']) && !isset($x535->properties['column'])) {$x535->properties['file'] = '<image>/09_date.js';$x535->properties['line'] = 138;$x535->properties['column'] = 27;$x535->attributes['file'] = $x535->attributes['line'] = $x535->attributes['column'] = 0; }
throw new JSException($x535, 138, 27, '<image>/09_date.js');
}
$x530 = JS::toObject($x530, $global);
unset($x536, $W536, $S536, $U536);
$x537 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x530, JS::toString($x532, $global), 138, 27, '<image>/09_date.js');
$x536 =& $x537[0]; list(,$W536,$S536,$U536) = $x537;
if ($U536 && (!isset($x530->extensible) || $x530->extensible)) {$x530->properties[$x532] = $x536; $x536 =& $x530->properties[$x532]; $x530->attributes[$x532] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U536 = FALSE; $W536 = TRUE; }
if (isset($S536)) {
$x539 = $S536->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x540 = $x539($global, $x530, $S536, array($x529), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x538 = $x540;
} else {
if (!$U536) {$x538 = $x529;if ($W536) { $x536 = $x529; }  }
else { $x538 = JS::$undefined; }
}
if (isset($x530->class) && $x530->class === 'Array' &&  is_int('getMinutes') && 'getMinutes' >= $x530->properties['length']) { $x530->properties['length'] = 'getMinutes' + 1; };
unset($x541, $W541, $S541, $U541);
$x542 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 142, 36, '<image>/09_date.js');
$x541 =& $x542[0]; list(,$W541,$S541,$U541) = $x542;
unset($x543, $W543, $S543, $U543);
$x544 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x541, JS::toString('getUTCFullYear', $global), 142, 46, '<image>/09_date.js');
$x543 =& $x544[0]; list(,$W543,$S543,$U543) = $x544;
unset($x545, $W545, $S545, $U545);
$x546 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 142, 5, '<image>/09_date.js');
$x545 =& $x546[0]; list(,$W545,$S545,$U545) = $x546;
$x547 = JS::toString('getUTCMinutes', $global);
if ($x545 === JS::$undefined || $x545 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x548 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 142, 30, '<image>/09_date.js');
$_TypeError =& $x548[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x548;
$x549 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x550 = $x549($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x550->class) && $x550->class === 'Error' && !isset($x550->properties['file']) && !isset($x550->properties['line']) && !isset($x550->properties['column'])) {$x550->properties['file'] = '<image>/09_date.js';$x550->properties['line'] = 142;$x550->properties['column'] = 30;$x550->attributes['file'] = $x550->attributes['line'] = $x550->attributes['column'] = 0; }
throw new JSException($x550, 142, 30, '<image>/09_date.js');
}
$x545 = JS::toObject($x545, $global);
unset($x551, $W551, $S551, $U551);
$x552 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x545, JS::toString($x547, $global), 142, 30, '<image>/09_date.js');
$x551 =& $x552[0]; list(,$W551,$S551,$U551) = $x552;
if ($U551 && (!isset($x545->extensible) || $x545->extensible)) {$x545->properties[$x547] = $x551; $x551 =& $x545->properties[$x547]; $x545->attributes[$x547] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U551 = FALSE; $W551 = TRUE; }
if (isset($S551)) {
$x554 = $S551->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x555 = $x554($global, $x545, $S551, array($x543), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x553 = $x555;
} else {
if (!$U551) {$x553 = $x543;if ($W551) { $x551 = $x543; }  }
else { $x553 = JS::$undefined; }
}
if (isset($x545->class) && $x545->class === 'Array' &&  is_int('getUTCMinutes') && 'getUTCMinutes' >= $x545->properties['length']) { $x545->properties['length'] = 'getUTCMinutes' + 1; };
$x558 = clone JS::$functionTemplate; $x558->call = '_a3686fcdd5b5a69538641de6dddfbea8_20'; $x558->parameters = array (
); $x558->scope = $scope; $x558->properties['prototype'] = clone JS::$objectTemplate; $x558->attributes['prototype'] = JS::WRITABLE; $x558->properties['prototype']->properties['constructor'] = $x558; $x558->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x558->properties['length'] = 0; $x558->attributes['length'] = 0;
unset($x559, $W559, $S559, $U559);
$x560 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 144, 5, '<image>/09_date.js');
$x559 =& $x560[0]; list(,$W559,$S559,$U559) = $x560;
$x561 = JS::toString('getSeconds', $global);
if ($x559 === JS::$undefined || $x559 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x562 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 27, '<image>/09_date.js');
$_TypeError =& $x562[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x562;
$x563 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x564 = $x563($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x564->class) && $x564->class === 'Error' && !isset($x564->properties['file']) && !isset($x564->properties['line']) && !isset($x564->properties['column'])) {$x564->properties['file'] = '<image>/09_date.js';$x564->properties['line'] = 144;$x564->properties['column'] = 27;$x564->attributes['file'] = $x564->attributes['line'] = $x564->attributes['column'] = 0; }
throw new JSException($x564, 144, 27, '<image>/09_date.js');
}
$x559 = JS::toObject($x559, $global);
unset($x565, $W565, $S565, $U565);
$x566 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x559, JS::toString($x561, $global), 144, 27, '<image>/09_date.js');
$x565 =& $x566[0]; list(,$W565,$S565,$U565) = $x566;
if ($U565 && (!isset($x559->extensible) || $x559->extensible)) {$x559->properties[$x561] = $x565; $x565 =& $x559->properties[$x561]; $x559->attributes[$x561] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U565 = FALSE; $W565 = TRUE; }
if (isset($S565)) {
$x568 = $S565->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x569 = $x568($global, $x559, $S565, array($x558), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x567 = $x569;
} else {
if (!$U565) {$x567 = $x558;if ($W565) { $x565 = $x558; }  }
else { $x567 = JS::$undefined; }
}
if (isset($x559->class) && $x559->class === 'Array' &&  is_int('getSeconds') && 'getSeconds' >= $x559->properties['length']) { $x559->properties['length'] = 'getSeconds' + 1; };
unset($x570, $W570, $S570, $U570);
$x571 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 148, 36, '<image>/09_date.js');
$x570 =& $x571[0]; list(,$W570,$S570,$U570) = $x571;
unset($x572, $W572, $S572, $U572);
$x573 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x570, JS::toString('getUTCFullYear', $global), 148, 46, '<image>/09_date.js');
$x572 =& $x573[0]; list(,$W572,$S572,$U572) = $x573;
unset($x574, $W574, $S574, $U574);
$x575 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 148, 5, '<image>/09_date.js');
$x574 =& $x575[0]; list(,$W574,$S574,$U574) = $x575;
$x576 = JS::toString('getUTCSeconds', $global);
if ($x574 === JS::$undefined || $x574 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x577 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 148, 30, '<image>/09_date.js');
$_TypeError =& $x577[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x577;
$x578 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x579 = $x578($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x579->class) && $x579->class === 'Error' && !isset($x579->properties['file']) && !isset($x579->properties['line']) && !isset($x579->properties['column'])) {$x579->properties['file'] = '<image>/09_date.js';$x579->properties['line'] = 148;$x579->properties['column'] = 30;$x579->attributes['file'] = $x579->attributes['line'] = $x579->attributes['column'] = 0; }
throw new JSException($x579, 148, 30, '<image>/09_date.js');
}
$x574 = JS::toObject($x574, $global);
unset($x580, $W580, $S580, $U580);
$x581 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x574, JS::toString($x576, $global), 148, 30, '<image>/09_date.js');
$x580 =& $x581[0]; list(,$W580,$S580,$U580) = $x581;
if ($U580 && (!isset($x574->extensible) || $x574->extensible)) {$x574->properties[$x576] = $x580; $x580 =& $x574->properties[$x576]; $x574->attributes[$x576] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U580 = FALSE; $W580 = TRUE; }
if (isset($S580)) {
$x583 = $S580->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x584 = $x583($global, $x574, $S580, array($x572), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x582 = $x584;
} else {
if (!$U580) {$x582 = $x572;if ($W580) { $x580 = $x572; }  }
else { $x582 = JS::$undefined; }
}
if (isset($x574->class) && $x574->class === 'Array' &&  is_int('getUTCSeconds') && 'getUTCSeconds' >= $x574->properties['length']) { $x574->properties['length'] = 'getUTCSeconds' + 1; };
$x587 = clone JS::$functionTemplate; $x587->call = '_a3686fcdd5b5a69538641de6dddfbea8_21'; $x587->parameters = array (
); $x587->scope = $scope; $x587->properties['prototype'] = clone JS::$objectTemplate; $x587->attributes['prototype'] = JS::WRITABLE; $x587->properties['prototype']->properties['constructor'] = $x587; $x587->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x587->properties['length'] = 0; $x587->attributes['length'] = 0;
unset($x588, $W588, $S588, $U588);
$x589 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 150, 5, '<image>/09_date.js');
$x588 =& $x589[0]; list(,$W588,$S588,$U588) = $x589;
$x590 = JS::toString('getMilliseconds', $global);
if ($x588 === JS::$undefined || $x588 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x591 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 150, 32, '<image>/09_date.js');
$_TypeError =& $x591[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x591;
$x592 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x593 = $x592($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x593->class) && $x593->class === 'Error' && !isset($x593->properties['file']) && !isset($x593->properties['line']) && !isset($x593->properties['column'])) {$x593->properties['file'] = '<image>/09_date.js';$x593->properties['line'] = 150;$x593->properties['column'] = 32;$x593->attributes['file'] = $x593->attributes['line'] = $x593->attributes['column'] = 0; }
throw new JSException($x593, 150, 32, '<image>/09_date.js');
}
$x588 = JS::toObject($x588, $global);
unset($x594, $W594, $S594, $U594);
$x595 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x588, JS::toString($x590, $global), 150, 32, '<image>/09_date.js');
$x594 =& $x595[0]; list(,$W594,$S594,$U594) = $x595;
if ($U594 && (!isset($x588->extensible) || $x588->extensible)) {$x588->properties[$x590] = $x594; $x594 =& $x588->properties[$x590]; $x588->attributes[$x590] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U594 = FALSE; $W594 = TRUE; }
if (isset($S594)) {
$x597 = $S594->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x598 = $x597($global, $x588, $S594, array($x587), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x596 = $x598;
} else {
if (!$U594) {$x596 = $x587;if ($W594) { $x594 = $x587; }  }
else { $x596 = JS::$undefined; }
}
if (isset($x588->class) && $x588->class === 'Array' &&  is_int('getMilliseconds') && 'getMilliseconds' >= $x588->properties['length']) { $x588->properties['length'] = 'getMilliseconds' + 1; };
unset($x599, $W599, $S599, $U599);
$x600 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 154, 41, '<image>/09_date.js');
$x599 =& $x600[0]; list(,$W599,$S599,$U599) = $x600;
unset($x601, $W601, $S601, $U601);
$x602 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x599, JS::toString('getUTCFullYear', $global), 154, 51, '<image>/09_date.js');
$x601 =& $x602[0]; list(,$W601,$S601,$U601) = $x602;
unset($x603, $W603, $S603, $U603);
$x604 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 154, 5, '<image>/09_date.js');
$x603 =& $x604[0]; list(,$W603,$S603,$U603) = $x604;
$x605 = JS::toString('getUTCMilliseconds', $global);
if ($x603 === JS::$undefined || $x603 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x606 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 35, '<image>/09_date.js');
$_TypeError =& $x606[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x606;
$x607 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x608 = $x607($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x608->class) && $x608->class === 'Error' && !isset($x608->properties['file']) && !isset($x608->properties['line']) && !isset($x608->properties['column'])) {$x608->properties['file'] = '<image>/09_date.js';$x608->properties['line'] = 154;$x608->properties['column'] = 35;$x608->attributes['file'] = $x608->attributes['line'] = $x608->attributes['column'] = 0; }
throw new JSException($x608, 154, 35, '<image>/09_date.js');
}
$x603 = JS::toObject($x603, $global);
unset($x609, $W609, $S609, $U609);
$x610 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x603, JS::toString($x605, $global), 154, 35, '<image>/09_date.js');
$x609 =& $x610[0]; list(,$W609,$S609,$U609) = $x610;
if ($U609 && (!isset($x603->extensible) || $x603->extensible)) {$x603->properties[$x605] = $x609; $x609 =& $x603->properties[$x605]; $x603->attributes[$x605] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U609 = FALSE; $W609 = TRUE; }
if (isset($S609)) {
$x612 = $S609->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x613 = $x612($global, $x603, $S609, array($x601), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x611 = $x613;
} else {
if (!$U609) {$x611 = $x601;if ($W609) { $x609 = $x601; }  }
else { $x611 = JS::$undefined; }
}
if (isset($x603->class) && $x603->class === 'Array' &&  is_int('getUTCMilliseconds') && 'getUTCMilliseconds' >= $x603->properties['length']) { $x603->properties['length'] = 'getUTCMilliseconds' + 1; };
$x616 = clone JS::$functionTemplate; $x616->call = '_a3686fcdd5b5a69538641de6dddfbea8_22'; $x616->parameters = array (
); $x616->scope = $scope; $x616->properties['prototype'] = clone JS::$objectTemplate; $x616->attributes['prototype'] = JS::WRITABLE; $x616->properties['prototype']->properties['constructor'] = $x616; $x616->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x616->properties['length'] = 0; $x616->attributes['length'] = 0;
unset($x617, $W617, $S617, $U617);
$x618 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 156, 5, '<image>/09_date.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
$x619 = JS::toString('getTimezoneOffset', $global);
if ($x617 === JS::$undefined || $x617 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x620 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 156, 34, '<image>/09_date.js');
$_TypeError =& $x620[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x620;
$x621 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x622 = $x621($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x622->class) && $x622->class === 'Error' && !isset($x622->properties['file']) && !isset($x622->properties['line']) && !isset($x622->properties['column'])) {$x622->properties['file'] = '<image>/09_date.js';$x622->properties['line'] = 156;$x622->properties['column'] = 34;$x622->attributes['file'] = $x622->attributes['line'] = $x622->attributes['column'] = 0; }
throw new JSException($x622, 156, 34, '<image>/09_date.js');
}
$x617 = JS::toObject($x617, $global);
unset($x623, $W623, $S623, $U623);
$x624 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x617, JS::toString($x619, $global), 156, 34, '<image>/09_date.js');
$x623 =& $x624[0]; list(,$W623,$S623,$U623) = $x624;
if ($U623 && (!isset($x617->extensible) || $x617->extensible)) {$x617->properties[$x619] = $x623; $x623 =& $x617->properties[$x619]; $x617->attributes[$x619] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U623 = FALSE; $W623 = TRUE; }
if (isset($S623)) {
$x626 = $S623->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x627 = $x626($global, $x617, $S623, array($x616), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x625 = $x627;
} else {
if (!$U623) {$x625 = $x616;if ($W623) { $x623 = $x616; }  }
else { $x625 = JS::$undefined; }
}
if (isset($x617->class) && $x617->class === 'Array' &&  is_int('getTimezoneOffset') && 'getTimezoneOffset' >= $x617->properties['length']) { $x617->properties['length'] = 'getTimezoneOffset' + 1; };
$x630 = clone JS::$functionTemplate; $x630->call = '_a3686fcdd5b5a69538641de6dddfbea8_23'; $x630->parameters = array (
  0 => 'time',
); $x630->scope = $scope; $x630->properties['prototype'] = clone JS::$objectTemplate; $x630->attributes['prototype'] = JS::WRITABLE; $x630->properties['prototype']->properties['constructor'] = $x630; $x630->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x630->properties['length'] = 1; $x630->attributes['length'] = 0;
unset($x631, $W631, $S631, $U631);
$x632 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 160, 5, '<image>/09_date.js');
$x631 =& $x632[0]; list(,$W631,$S631,$U631) = $x632;
$x633 = JS::toString('setTime', $global);
if ($x631 === JS::$undefined || $x631 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 24, '<image>/09_date.js');
$_TypeError =& $x634[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x634;
$x635 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x636 = $x635($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x636->class) && $x636->class === 'Error' && !isset($x636->properties['file']) && !isset($x636->properties['line']) && !isset($x636->properties['column'])) {$x636->properties['file'] = '<image>/09_date.js';$x636->properties['line'] = 160;$x636->properties['column'] = 24;$x636->attributes['file'] = $x636->attributes['line'] = $x636->attributes['column'] = 0; }
throw new JSException($x636, 160, 24, '<image>/09_date.js');
}
$x631 = JS::toObject($x631, $global);
unset($x637, $W637, $S637, $U637);
$x638 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x631, JS::toString($x633, $global), 160, 24, '<image>/09_date.js');
$x637 =& $x638[0]; list(,$W637,$S637,$U637) = $x638;
if ($U637 && (!isset($x631->extensible) || $x631->extensible)) {$x631->properties[$x633] = $x637; $x637 =& $x631->properties[$x633]; $x631->attributes[$x633] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U637 = FALSE; $W637 = TRUE; }
if (isset($S637)) {
$x640 = $S637->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x641 = $x640($global, $x631, $S637, array($x630), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x639 = $x641;
} else {
if (!$U637) {$x639 = $x630;if ($W637) { $x637 = $x630; }  }
else { $x639 = JS::$undefined; }
}
if (isset($x631->class) && $x631->class === 'Array' &&  is_int('setTime') && 'setTime' >= $x631->properties['length']) { $x631->properties['length'] = 'setTime' + 1; };
$x723 = clone JS::$functionTemplate; $x723->call = '_a3686fcdd5b5a69538641de6dddfbea8_24'; $x723->parameters = array (
  0 => 'ms',
); $x723->scope = $scope; $x723->properties['prototype'] = clone JS::$objectTemplate; $x723->attributes['prototype'] = JS::WRITABLE; $x723->properties['prototype']->properties['constructor'] = $x723; $x723->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x723->properties['length'] = 1; $x723->attributes['length'] = 0;
unset($x724, $W724, $S724, $U724);
$x725 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 165, 5, '<image>/09_date.js');
$x724 =& $x725[0]; list(,$W724,$S724,$U724) = $x725;
$x726 = JS::toString('setMilliseconds', $global);
if ($x724 === JS::$undefined || $x724 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x727 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 165, 32, '<image>/09_date.js');
$_TypeError =& $x727[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x727;
$x728 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x729 = $x728($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x729->class) && $x729->class === 'Error' && !isset($x729->properties['file']) && !isset($x729->properties['line']) && !isset($x729->properties['column'])) {$x729->properties['file'] = '<image>/09_date.js';$x729->properties['line'] = 165;$x729->properties['column'] = 32;$x729->attributes['file'] = $x729->attributes['line'] = $x729->attributes['column'] = 0; }
throw new JSException($x729, 165, 32, '<image>/09_date.js');
}
$x724 = JS::toObject($x724, $global);
unset($x730, $W730, $S730, $U730);
$x731 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x724, JS::toString($x726, $global), 165, 32, '<image>/09_date.js');
$x730 =& $x731[0]; list(,$W730,$S730,$U730) = $x731;
if ($U730 && (!isset($x724->extensible) || $x724->extensible)) {$x724->properties[$x726] = $x730; $x730 =& $x724->properties[$x726]; $x724->attributes[$x726] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U730 = FALSE; $W730 = TRUE; }
if (isset($S730)) {
$x733 = $S730->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x734 = $x733($global, $x724, $S730, array($x723), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x732 = $x734;
} else {
if (!$U730) {$x732 = $x723;if ($W730) { $x730 = $x723; }  }
else { $x732 = JS::$undefined; }
}
if (isset($x724->class) && $x724->class === 'Array' &&  is_int('setMilliseconds') && 'setMilliseconds' >= $x724->properties['length']) { $x724->properties['length'] = 'setMilliseconds' + 1; };
unset($x735, $W735, $S735, $U735);
$x736 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 176, 41, '<image>/09_date.js');
$x735 =& $x736[0]; list(,$W735,$S735,$U735) = $x736;
unset($x737, $W737, $S737, $U737);
$x738 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x735, JS::toString('getUTCFullYear', $global), 176, 51, '<image>/09_date.js');
$x737 =& $x738[0]; list(,$W737,$S737,$U737) = $x738;
unset($x739, $W739, $S739, $U739);
$x740 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 176, 5, '<image>/09_date.js');
$x739 =& $x740[0]; list(,$W739,$S739,$U739) = $x740;
$x741 = JS::toString('setUTCMilliseconds', $global);
if ($x739 === JS::$undefined || $x739 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x742 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 176, 35, '<image>/09_date.js');
$_TypeError =& $x742[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x742;
$x743 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x744 = $x743($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x744->class) && $x744->class === 'Error' && !isset($x744->properties['file']) && !isset($x744->properties['line']) && !isset($x744->properties['column'])) {$x744->properties['file'] = '<image>/09_date.js';$x744->properties['line'] = 176;$x744->properties['column'] = 35;$x744->attributes['file'] = $x744->attributes['line'] = $x744->attributes['column'] = 0; }
throw new JSException($x744, 176, 35, '<image>/09_date.js');
}
$x739 = JS::toObject($x739, $global);
unset($x745, $W745, $S745, $U745);
$x746 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x739, JS::toString($x741, $global), 176, 35, '<image>/09_date.js');
$x745 =& $x746[0]; list(,$W745,$S745,$U745) = $x746;
if ($U745 && (!isset($x739->extensible) || $x739->extensible)) {$x739->properties[$x741] = $x745; $x745 =& $x739->properties[$x741]; $x739->attributes[$x741] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U745 = FALSE; $W745 = TRUE; }
if (isset($S745)) {
$x748 = $S745->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x749 = $x748($global, $x739, $S745, array($x737), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x747 = $x749;
} else {
if (!$U745) {$x747 = $x737;if ($W745) { $x745 = $x737; }  }
else { $x747 = JS::$undefined; }
}
if (isset($x739->class) && $x739->class === 'Array' &&  is_int('setUTCMilliseconds') && 'setUTCMilliseconds' >= $x739->properties['length']) { $x739->properties['length'] = 'setUTCMilliseconds' + 1; };
$x832 = clone JS::$functionTemplate; $x832->call = '_a3686fcdd5b5a69538641de6dddfbea8_25'; $x832->parameters = array (
  0 => 'seconds',
  1 => 'ms',
); $x832->scope = $scope; $x832->properties['prototype'] = clone JS::$objectTemplate; $x832->attributes['prototype'] = JS::WRITABLE; $x832->properties['prototype']->properties['constructor'] = $x832; $x832->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x832->properties['length'] = 2; $x832->attributes['length'] = 0;
unset($x833, $W833, $S833, $U833);
$x834 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 178, 5, '<image>/09_date.js');
$x833 =& $x834[0]; list(,$W833,$S833,$U833) = $x834;
$x835 = JS::toString('setSeconds', $global);
if ($x833 === JS::$undefined || $x833 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x836 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 178, 27, '<image>/09_date.js');
$_TypeError =& $x836[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x836;
$x837 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x838 = $x837($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x838->class) && $x838->class === 'Error' && !isset($x838->properties['file']) && !isset($x838->properties['line']) && !isset($x838->properties['column'])) {$x838->properties['file'] = '<image>/09_date.js';$x838->properties['line'] = 178;$x838->properties['column'] = 27;$x838->attributes['file'] = $x838->attributes['line'] = $x838->attributes['column'] = 0; }
throw new JSException($x838, 178, 27, '<image>/09_date.js');
}
$x833 = JS::toObject($x833, $global);
unset($x839, $W839, $S839, $U839);
$x840 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x833, JS::toString($x835, $global), 178, 27, '<image>/09_date.js');
$x839 =& $x840[0]; list(,$W839,$S839,$U839) = $x840;
if ($U839 && (!isset($x833->extensible) || $x833->extensible)) {$x833->properties[$x835] = $x839; $x839 =& $x833->properties[$x835]; $x833->attributes[$x835] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U839 = FALSE; $W839 = TRUE; }
if (isset($S839)) {
$x842 = $S839->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x843 = $x842($global, $x833, $S839, array($x832), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x841 = $x843;
} else {
if (!$U839) {$x841 = $x832;if ($W839) { $x839 = $x832; }  }
else { $x841 = JS::$undefined; }
}
if (isset($x833->class) && $x833->class === 'Array' &&  is_int('setSeconds') && 'setSeconds' >= $x833->properties['length']) { $x833->properties['length'] = 'setSeconds' + 1; };
unset($x844, $W844, $S844, $U844);
$x845 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 193, 36, '<image>/09_date.js');
$x844 =& $x845[0]; list(,$W844,$S844,$U844) = $x845;
unset($x846, $W846, $S846, $U846);
$x847 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x844, JS::toString('getUTCFullYear', $global), 193, 46, '<image>/09_date.js');
$x846 =& $x847[0]; list(,$W846,$S846,$U846) = $x847;
unset($x848, $W848, $S848, $U848);
$x849 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 193, 5, '<image>/09_date.js');
$x848 =& $x849[0]; list(,$W848,$S848,$U848) = $x849;
$x850 = JS::toString('setUTCSeconds', $global);
if ($x848 === JS::$undefined || $x848 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x851 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 193, 30, '<image>/09_date.js');
$_TypeError =& $x851[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x851;
$x852 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x853 = $x852($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x853->class) && $x853->class === 'Error' && !isset($x853->properties['file']) && !isset($x853->properties['line']) && !isset($x853->properties['column'])) {$x853->properties['file'] = '<image>/09_date.js';$x853->properties['line'] = 193;$x853->properties['column'] = 30;$x853->attributes['file'] = $x853->attributes['line'] = $x853->attributes['column'] = 0; }
throw new JSException($x853, 193, 30, '<image>/09_date.js');
}
$x848 = JS::toObject($x848, $global);
unset($x854, $W854, $S854, $U854);
$x855 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x848, JS::toString($x850, $global), 193, 30, '<image>/09_date.js');
$x854 =& $x855[0]; list(,$W854,$S854,$U854) = $x855;
if ($U854 && (!isset($x848->extensible) || $x848->extensible)) {$x848->properties[$x850] = $x854; $x854 =& $x848->properties[$x850]; $x848->attributes[$x850] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U854 = FALSE; $W854 = TRUE; }
if (isset($S854)) {
$x857 = $S854->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x858 = $x857($global, $x848, $S854, array($x846), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x856 = $x858;
} else {
if (!$U854) {$x856 = $x846;if ($W854) { $x854 = $x846; }  }
else { $x856 = JS::$undefined; }
}
if (isset($x848->class) && $x848->class === 'Array' &&  is_int('setUTCSeconds') && 'setUTCSeconds' >= $x848->properties['length']) { $x848->properties['length'] = 'setUTCSeconds' + 1; };
$x942 = clone JS::$functionTemplate; $x942->call = '_a3686fcdd5b5a69538641de6dddfbea8_26'; $x942->parameters = array (
  0 => 'minutes',
  1 => 'seconds',
  2 => 'ms',
); $x942->scope = $scope; $x942->properties['prototype'] = clone JS::$objectTemplate; $x942->attributes['prototype'] = JS::WRITABLE; $x942->properties['prototype']->properties['constructor'] = $x942; $x942->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x942->properties['length'] = 3; $x942->attributes['length'] = 0;
unset($x943, $W943, $S943, $U943);
$x944 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 195, 5, '<image>/09_date.js');
$x943 =& $x944[0]; list(,$W943,$S943,$U943) = $x944;
$x945 = JS::toString('setMinutes', $global);
if ($x943 === JS::$undefined || $x943 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x946 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 27, '<image>/09_date.js');
$_TypeError =& $x946[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x946;
$x947 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x948 = $x947($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x948->class) && $x948->class === 'Error' && !isset($x948->properties['file']) && !isset($x948->properties['line']) && !isset($x948->properties['column'])) {$x948->properties['file'] = '<image>/09_date.js';$x948->properties['line'] = 195;$x948->properties['column'] = 27;$x948->attributes['file'] = $x948->attributes['line'] = $x948->attributes['column'] = 0; }
throw new JSException($x948, 195, 27, '<image>/09_date.js');
}
$x943 = JS::toObject($x943, $global);
unset($x949, $W949, $S949, $U949);
$x950 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x943, JS::toString($x945, $global), 195, 27, '<image>/09_date.js');
$x949 =& $x950[0]; list(,$W949,$S949,$U949) = $x950;
if ($U949 && (!isset($x943->extensible) || $x943->extensible)) {$x943->properties[$x945] = $x949; $x949 =& $x943->properties[$x945]; $x943->attributes[$x945] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U949 = FALSE; $W949 = TRUE; }
if (isset($S949)) {
$x952 = $S949->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x953 = $x952($global, $x943, $S949, array($x942), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x951 = $x953;
} else {
if (!$U949) {$x951 = $x942;if ($W949) { $x949 = $x942; }  }
else { $x951 = JS::$undefined; }
}
if (isset($x943->class) && $x943->class === 'Array' &&  is_int('setMinutes') && 'setMinutes' >= $x943->properties['length']) { $x943->properties['length'] = 'setMinutes' + 1; };
unset($x954, $W954, $S954, $U954);
$x955 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 214, 36, '<image>/09_date.js');
$x954 =& $x955[0]; list(,$W954,$S954,$U954) = $x955;
unset($x956, $W956, $S956, $U956);
$x957 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x954, JS::toString('getUTCFullYear', $global), 214, 46, '<image>/09_date.js');
$x956 =& $x957[0]; list(,$W956,$S956,$U956) = $x957;
unset($x958, $W958, $S958, $U958);
$x959 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 214, 5, '<image>/09_date.js');
$x958 =& $x959[0]; list(,$W958,$S958,$U958) = $x959;
$x960 = JS::toString('setUTCMinutes', $global);
if ($x958 === JS::$undefined || $x958 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x961 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 214, 30, '<image>/09_date.js');
$_TypeError =& $x961[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x961;
$x962 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x963 = $x962($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x963->class) && $x963->class === 'Error' && !isset($x963->properties['file']) && !isset($x963->properties['line']) && !isset($x963->properties['column'])) {$x963->properties['file'] = '<image>/09_date.js';$x963->properties['line'] = 214;$x963->properties['column'] = 30;$x963->attributes['file'] = $x963->attributes['line'] = $x963->attributes['column'] = 0; }
throw new JSException($x963, 214, 30, '<image>/09_date.js');
}
$x958 = JS::toObject($x958, $global);
unset($x964, $W964, $S964, $U964);
$x965 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x958, JS::toString($x960, $global), 214, 30, '<image>/09_date.js');
$x964 =& $x965[0]; list(,$W964,$S964,$U964) = $x965;
if ($U964 && (!isset($x958->extensible) || $x958->extensible)) {$x958->properties[$x960] = $x964; $x964 =& $x958->properties[$x960]; $x958->attributes[$x960] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U964 = FALSE; $W964 = TRUE; }
if (isset($S964)) {
$x967 = $S964->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x968 = $x967($global, $x958, $S964, array($x956), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x966 = $x968;
} else {
if (!$U964) {$x966 = $x956;if ($W964) { $x964 = $x956; }  }
else { $x966 = JS::$undefined; }
}
if (isset($x958->class) && $x958->class === 'Array' &&  is_int('setUTCMinutes') && 'setUTCMinutes' >= $x958->properties['length']) { $x958->properties['length'] = 'setUTCMinutes' + 1; };
$x1053 = clone JS::$functionTemplate; $x1053->call = '_a3686fcdd5b5a69538641de6dddfbea8_27'; $x1053->parameters = array (
  0 => 'hours',
  1 => 'minutes',
  2 => 'seconds',
  3 => 'ms',
); $x1053->scope = $scope; $x1053->properties['prototype'] = clone JS::$objectTemplate; $x1053->attributes['prototype'] = JS::WRITABLE; $x1053->properties['prototype']->properties['constructor'] = $x1053; $x1053->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1053->properties['length'] = 4; $x1053->attributes['length'] = 0;
unset($x1054, $W1054, $S1054, $U1054);
$x1055 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 216, 5, '<image>/09_date.js');
$x1054 =& $x1055[0]; list(,$W1054,$S1054,$U1054) = $x1055;
$x1056 = JS::toString('setHours', $global);
if ($x1054 === JS::$undefined || $x1054 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1057 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 216, 25, '<image>/09_date.js');
$_TypeError =& $x1057[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1057;
$x1058 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1059 = $x1058($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1059->class) && $x1059->class === 'Error' && !isset($x1059->properties['file']) && !isset($x1059->properties['line']) && !isset($x1059->properties['column'])) {$x1059->properties['file'] = '<image>/09_date.js';$x1059->properties['line'] = 216;$x1059->properties['column'] = 25;$x1059->attributes['file'] = $x1059->attributes['line'] = $x1059->attributes['column'] = 0; }
throw new JSException($x1059, 216, 25, '<image>/09_date.js');
}
$x1054 = JS::toObject($x1054, $global);
unset($x1060, $W1060, $S1060, $U1060);
$x1061 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1054, JS::toString($x1056, $global), 216, 25, '<image>/09_date.js');
$x1060 =& $x1061[0]; list(,$W1060,$S1060,$U1060) = $x1061;
if ($U1060 && (!isset($x1054->extensible) || $x1054->extensible)) {$x1054->properties[$x1056] = $x1060; $x1060 =& $x1054->properties[$x1056]; $x1054->attributes[$x1056] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1060 = FALSE; $W1060 = TRUE; }
if (isset($S1060)) {
$x1063 = $S1060->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1064 = $x1063($global, $x1054, $S1060, array($x1053), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1062 = $x1064;
} else {
if (!$U1060) {$x1062 = $x1053;if ($W1060) { $x1060 = $x1053; }  }
else { $x1062 = JS::$undefined; }
}
if (isset($x1054->class) && $x1054->class === 'Array' &&  is_int('setHours') && 'setHours' >= $x1054->properties['length']) { $x1054->properties['length'] = 'setHours' + 1; };
unset($x1065, $W1065, $S1065, $U1065);
$x1066 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 239, 34, '<image>/09_date.js');
$x1065 =& $x1066[0]; list(,$W1065,$S1065,$U1065) = $x1066;
unset($x1067, $W1067, $S1067, $U1067);
$x1068 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1065, JS::toString('getUTCFullYear', $global), 239, 44, '<image>/09_date.js');
$x1067 =& $x1068[0]; list(,$W1067,$S1067,$U1067) = $x1068;
unset($x1069, $W1069, $S1069, $U1069);
$x1070 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 239, 5, '<image>/09_date.js');
$x1069 =& $x1070[0]; list(,$W1069,$S1069,$U1069) = $x1070;
$x1071 = JS::toString('setUTCHours', $global);
if ($x1069 === JS::$undefined || $x1069 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1072 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 239, 28, '<image>/09_date.js');
$_TypeError =& $x1072[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1072;
$x1073 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1074 = $x1073($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1074->class) && $x1074->class === 'Error' && !isset($x1074->properties['file']) && !isset($x1074->properties['line']) && !isset($x1074->properties['column'])) {$x1074->properties['file'] = '<image>/09_date.js';$x1074->properties['line'] = 239;$x1074->properties['column'] = 28;$x1074->attributes['file'] = $x1074->attributes['line'] = $x1074->attributes['column'] = 0; }
throw new JSException($x1074, 239, 28, '<image>/09_date.js');
}
$x1069 = JS::toObject($x1069, $global);
unset($x1075, $W1075, $S1075, $U1075);
$x1076 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1069, JS::toString($x1071, $global), 239, 28, '<image>/09_date.js');
$x1075 =& $x1076[0]; list(,$W1075,$S1075,$U1075) = $x1076;
if ($U1075 && (!isset($x1069->extensible) || $x1069->extensible)) {$x1069->properties[$x1071] = $x1075; $x1075 =& $x1069->properties[$x1071]; $x1069->attributes[$x1071] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1075 = FALSE; $W1075 = TRUE; }
if (isset($S1075)) {
$x1078 = $S1075->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1079 = $x1078($global, $x1069, $S1075, array($x1067), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1077 = $x1079;
} else {
if (!$U1075) {$x1077 = $x1067;if ($W1075) { $x1075 = $x1067; }  }
else { $x1077 = JS::$undefined; }
}
if (isset($x1069->class) && $x1069->class === 'Array' &&  is_int('setUTCHours') && 'setUTCHours' >= $x1069->properties['length']) { $x1069->properties['length'] = 'setUTCHours' + 1; };
$x1161 = clone JS::$functionTemplate; $x1161->call = '_a3686fcdd5b5a69538641de6dddfbea8_28'; $x1161->parameters = array (
  0 => 'date',
); $x1161->scope = $scope; $x1161->properties['prototype'] = clone JS::$objectTemplate; $x1161->attributes['prototype'] = JS::WRITABLE; $x1161->properties['prototype']->properties['constructor'] = $x1161; $x1161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1161->properties['length'] = 1; $x1161->attributes['length'] = 0;
unset($x1162, $W1162, $S1162, $U1162);
$x1163 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 241, 5, '<image>/09_date.js');
$x1162 =& $x1163[0]; list(,$W1162,$S1162,$U1162) = $x1163;
$x1164 = JS::toString('setDate', $global);
if ($x1162 === JS::$undefined || $x1162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1165 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 241, 24, '<image>/09_date.js');
$_TypeError =& $x1165[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1165;
$x1166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1167 = $x1166($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1167->class) && $x1167->class === 'Error' && !isset($x1167->properties['file']) && !isset($x1167->properties['line']) && !isset($x1167->properties['column'])) {$x1167->properties['file'] = '<image>/09_date.js';$x1167->properties['line'] = 241;$x1167->properties['column'] = 24;$x1167->attributes['file'] = $x1167->attributes['line'] = $x1167->attributes['column'] = 0; }
throw new JSException($x1167, 241, 24, '<image>/09_date.js');
}
$x1162 = JS::toObject($x1162, $global);
unset($x1168, $W1168, $S1168, $U1168);
$x1169 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1162, JS::toString($x1164, $global), 241, 24, '<image>/09_date.js');
$x1168 =& $x1169[0]; list(,$W1168,$S1168,$U1168) = $x1169;
if ($U1168 && (!isset($x1162->extensible) || $x1162->extensible)) {$x1162->properties[$x1164] = $x1168; $x1168 =& $x1162->properties[$x1164]; $x1162->attributes[$x1164] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1168 = FALSE; $W1168 = TRUE; }
if (isset($S1168)) {
$x1171 = $S1168->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1172 = $x1171($global, $x1162, $S1168, array($x1161), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1170 = $x1172;
} else {
if (!$U1168) {$x1170 = $x1161;if ($W1168) { $x1168 = $x1161; }  }
else { $x1170 = JS::$undefined; }
}
if (isset($x1162->class) && $x1162->class === 'Array' &&  is_int('setDate') && 'setDate' >= $x1162->properties['length']) { $x1162->properties['length'] = 'setDate' + 1; };
unset($x1173, $W1173, $S1173, $U1173);
$x1174 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 252, 33, '<image>/09_date.js');
$x1173 =& $x1174[0]; list(,$W1173,$S1173,$U1173) = $x1174;
unset($x1175, $W1175, $S1175, $U1175);
$x1176 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1173, JS::toString('getUTCFullYear', $global), 252, 43, '<image>/09_date.js');
$x1175 =& $x1176[0]; list(,$W1175,$S1175,$U1175) = $x1176;
unset($x1177, $W1177, $S1177, $U1177);
$x1178 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 252, 5, '<image>/09_date.js');
$x1177 =& $x1178[0]; list(,$W1177,$S1177,$U1177) = $x1178;
$x1179 = JS::toString('setUTCDate', $global);
if ($x1177 === JS::$undefined || $x1177 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1180 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 252, 27, '<image>/09_date.js');
$_TypeError =& $x1180[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1180;
$x1181 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1182 = $x1181($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1182->class) && $x1182->class === 'Error' && !isset($x1182->properties['file']) && !isset($x1182->properties['line']) && !isset($x1182->properties['column'])) {$x1182->properties['file'] = '<image>/09_date.js';$x1182->properties['line'] = 252;$x1182->properties['column'] = 27;$x1182->attributes['file'] = $x1182->attributes['line'] = $x1182->attributes['column'] = 0; }
throw new JSException($x1182, 252, 27, '<image>/09_date.js');
}
$x1177 = JS::toObject($x1177, $global);
unset($x1183, $W1183, $S1183, $U1183);
$x1184 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1177, JS::toString($x1179, $global), 252, 27, '<image>/09_date.js');
$x1183 =& $x1184[0]; list(,$W1183,$S1183,$U1183) = $x1184;
if ($U1183 && (!isset($x1177->extensible) || $x1177->extensible)) {$x1177->properties[$x1179] = $x1183; $x1183 =& $x1177->properties[$x1179]; $x1177->attributes[$x1179] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1183 = FALSE; $W1183 = TRUE; }
if (isset($S1183)) {
$x1186 = $S1183->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1187 = $x1186($global, $x1177, $S1183, array($x1175), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1185 = $x1187;
} else {
if (!$U1183) {$x1185 = $x1175;if ($W1183) { $x1183 = $x1175; }  }
else { $x1185 = JS::$undefined; }
}
if (isset($x1177->class) && $x1177->class === 'Array' &&  is_int('setUTCDate') && 'setUTCDate' >= $x1177->properties['length']) { $x1177->properties['length'] = 'setUTCDate' + 1; };
$x1270 = clone JS::$functionTemplate; $x1270->call = '_a3686fcdd5b5a69538641de6dddfbea8_29'; $x1270->parameters = array (
  0 => 'month',
  1 => 'date',
); $x1270->scope = $scope; $x1270->properties['prototype'] = clone JS::$objectTemplate; $x1270->attributes['prototype'] = JS::WRITABLE; $x1270->properties['prototype']->properties['constructor'] = $x1270; $x1270->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1270->properties['length'] = 2; $x1270->attributes['length'] = 0;
unset($x1271, $W1271, $S1271, $U1271);
$x1272 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 254, 5, '<image>/09_date.js');
$x1271 =& $x1272[0]; list(,$W1271,$S1271,$U1271) = $x1272;
$x1273 = JS::toString('setMonth', $global);
if ($x1271 === JS::$undefined || $x1271 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1274 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 25, '<image>/09_date.js');
$_TypeError =& $x1274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1274;
$x1275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1276 = $x1275($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1276->class) && $x1276->class === 'Error' && !isset($x1276->properties['file']) && !isset($x1276->properties['line']) && !isset($x1276->properties['column'])) {$x1276->properties['file'] = '<image>/09_date.js';$x1276->properties['line'] = 254;$x1276->properties['column'] = 25;$x1276->attributes['file'] = $x1276->attributes['line'] = $x1276->attributes['column'] = 0; }
throw new JSException($x1276, 254, 25, '<image>/09_date.js');
}
$x1271 = JS::toObject($x1271, $global);
unset($x1277, $W1277, $S1277, $U1277);
$x1278 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1271, JS::toString($x1273, $global), 254, 25, '<image>/09_date.js');
$x1277 =& $x1278[0]; list(,$W1277,$S1277,$U1277) = $x1278;
if ($U1277 && (!isset($x1271->extensible) || $x1271->extensible)) {$x1271->properties[$x1273] = $x1277; $x1277 =& $x1271->properties[$x1273]; $x1271->attributes[$x1273] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1277 = FALSE; $W1277 = TRUE; }
if (isset($S1277)) {
$x1280 = $S1277->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1281 = $x1280($global, $x1271, $S1277, array($x1270), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1279 = $x1281;
} else {
if (!$U1277) {$x1279 = $x1270;if ($W1277) { $x1277 = $x1270; }  }
else { $x1279 = JS::$undefined; }
}
if (isset($x1271->class) && $x1271->class === 'Array' &&  is_int('setMonth') && 'setMonth' >= $x1271->properties['length']) { $x1271->properties['length'] = 'setMonth' + 1; };
unset($x1282, $W1282, $S1282, $U1282);
$x1283 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 269, 34, '<image>/09_date.js');
$x1282 =& $x1283[0]; list(,$W1282,$S1282,$U1282) = $x1283;
unset($x1284, $W1284, $S1284, $U1284);
$x1285 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1282, JS::toString('getUTCFullYear', $global), 269, 44, '<image>/09_date.js');
$x1284 =& $x1285[0]; list(,$W1284,$S1284,$U1284) = $x1285;
unset($x1286, $W1286, $S1286, $U1286);
$x1287 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 269, 5, '<image>/09_date.js');
$x1286 =& $x1287[0]; list(,$W1286,$S1286,$U1286) = $x1287;
$x1288 = JS::toString('setUTCMonth', $global);
if ($x1286 === JS::$undefined || $x1286 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1289 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 269, 28, '<image>/09_date.js');
$_TypeError =& $x1289[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1289;
$x1290 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1291 = $x1290($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1291->class) && $x1291->class === 'Error' && !isset($x1291->properties['file']) && !isset($x1291->properties['line']) && !isset($x1291->properties['column'])) {$x1291->properties['file'] = '<image>/09_date.js';$x1291->properties['line'] = 269;$x1291->properties['column'] = 28;$x1291->attributes['file'] = $x1291->attributes['line'] = $x1291->attributes['column'] = 0; }
throw new JSException($x1291, 269, 28, '<image>/09_date.js');
}
$x1286 = JS::toObject($x1286, $global);
unset($x1292, $W1292, $S1292, $U1292);
$x1293 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1286, JS::toString($x1288, $global), 269, 28, '<image>/09_date.js');
$x1292 =& $x1293[0]; list(,$W1292,$S1292,$U1292) = $x1293;
if ($U1292 && (!isset($x1286->extensible) || $x1286->extensible)) {$x1286->properties[$x1288] = $x1292; $x1292 =& $x1286->properties[$x1288]; $x1286->attributes[$x1288] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1292 = FALSE; $W1292 = TRUE; }
if (isset($S1292)) {
$x1295 = $S1292->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1296 = $x1295($global, $x1286, $S1292, array($x1284), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1294 = $x1296;
} else {
if (!$U1292) {$x1294 = $x1284;if ($W1292) { $x1292 = $x1284; }  }
else { $x1294 = JS::$undefined; }
}
if (isset($x1286->class) && $x1286->class === 'Array' &&  is_int('setUTCMonth') && 'setUTCMonth' >= $x1286->properties['length']) { $x1286->properties['length'] = 'setUTCMonth' + 1; };
$x1380 = clone JS::$functionTemplate; $x1380->call = '_a3686fcdd5b5a69538641de6dddfbea8_30'; $x1380->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
); $x1380->scope = $scope; $x1380->properties['prototype'] = clone JS::$objectTemplate; $x1380->attributes['prototype'] = JS::WRITABLE; $x1380->properties['prototype']->properties['constructor'] = $x1380; $x1380->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1380->properties['length'] = 3; $x1380->attributes['length'] = 0;
unset($x1381, $W1381, $S1381, $U1381);
$x1382 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 271, 5, '<image>/09_date.js');
$x1381 =& $x1382[0]; list(,$W1381,$S1381,$U1381) = $x1382;
$x1383 = JS::toString('setFullYear', $global);
if ($x1381 === JS::$undefined || $x1381 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1384 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 271, 28, '<image>/09_date.js');
$_TypeError =& $x1384[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1384;
$x1385 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1386 = $x1385($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1386->class) && $x1386->class === 'Error' && !isset($x1386->properties['file']) && !isset($x1386->properties['line']) && !isset($x1386->properties['column'])) {$x1386->properties['file'] = '<image>/09_date.js';$x1386->properties['line'] = 271;$x1386->properties['column'] = 28;$x1386->attributes['file'] = $x1386->attributes['line'] = $x1386->attributes['column'] = 0; }
throw new JSException($x1386, 271, 28, '<image>/09_date.js');
}
$x1381 = JS::toObject($x1381, $global);
unset($x1387, $W1387, $S1387, $U1387);
$x1388 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1381, JS::toString($x1383, $global), 271, 28, '<image>/09_date.js');
$x1387 =& $x1388[0]; list(,$W1387,$S1387,$U1387) = $x1388;
if ($U1387 && (!isset($x1381->extensible) || $x1381->extensible)) {$x1381->properties[$x1383] = $x1387; $x1387 =& $x1381->properties[$x1383]; $x1381->attributes[$x1383] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1387 = FALSE; $W1387 = TRUE; }
if (isset($S1387)) {
$x1390 = $S1387->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1391 = $x1390($global, $x1381, $S1387, array($x1380), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1389 = $x1391;
} else {
if (!$U1387) {$x1389 = $x1380;if ($W1387) { $x1387 = $x1380; }  }
else { $x1389 = JS::$undefined; }
}
if (isset($x1381->class) && $x1381->class === 'Array' &&  is_int('setFullYear') && 'setFullYear' >= $x1381->properties['length']) { $x1381->properties['length'] = 'setFullYear' + 1; };
unset($x1392, $W1392, $S1392, $U1392);
$x1393 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 290, 37, '<image>/09_date.js');
$x1392 =& $x1393[0]; list(,$W1392,$S1392,$U1392) = $x1393;
unset($x1394, $W1394, $S1394, $U1394);
$x1395 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1392, JS::toString('getUTCFullYear', $global), 290, 47, '<image>/09_date.js');
$x1394 =& $x1395[0]; list(,$W1394,$S1394,$U1394) = $x1395;
unset($x1396, $W1396, $S1396, $U1396);
$x1397 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 290, 5, '<image>/09_date.js');
$x1396 =& $x1397[0]; list(,$W1396,$S1396,$U1396) = $x1397;
$x1398 = JS::toString('setUTCFullYear', $global);
if ($x1396 === JS::$undefined || $x1396 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1399 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 290, 31, '<image>/09_date.js');
$_TypeError =& $x1399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1399;
$x1400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1401 = $x1400($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1401->class) && $x1401->class === 'Error' && !isset($x1401->properties['file']) && !isset($x1401->properties['line']) && !isset($x1401->properties['column'])) {$x1401->properties['file'] = '<image>/09_date.js';$x1401->properties['line'] = 290;$x1401->properties['column'] = 31;$x1401->attributes['file'] = $x1401->attributes['line'] = $x1401->attributes['column'] = 0; }
throw new JSException($x1401, 290, 31, '<image>/09_date.js');
}
$x1396 = JS::toObject($x1396, $global);
unset($x1402, $W1402, $S1402, $U1402);
$x1403 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1396, JS::toString($x1398, $global), 290, 31, '<image>/09_date.js');
$x1402 =& $x1403[0]; list(,$W1402,$S1402,$U1402) = $x1403;
if ($U1402 && (!isset($x1396->extensible) || $x1396->extensible)) {$x1396->properties[$x1398] = $x1402; $x1402 =& $x1396->properties[$x1398]; $x1396->attributes[$x1398] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1402 = FALSE; $W1402 = TRUE; }
if (isset($S1402)) {
$x1405 = $S1402->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1406 = $x1405($global, $x1396, $S1402, array($x1394), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1404 = $x1406;
} else {
if (!$U1402) {$x1404 = $x1394;if ($W1402) { $x1402 = $x1394; }  }
else { $x1404 = JS::$undefined; }
}
if (isset($x1396->class) && $x1396->class === 'Array' &&  is_int('setUTCFullYear') && 'setUTCFullYear' >= $x1396->properties['length']) { $x1396->properties['length'] = 'setUTCFullYear' + 1; };
unset($x1407, $W1407, $S1407, $U1407);
$x1408 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 292, 34, '<image>/09_date.js');
$x1407 =& $x1408[0]; list(,$W1407,$S1407,$U1407) = $x1408;
unset($x1409, $W1409, $S1409, $U1409);
$x1410 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1407, JS::toString('getUTCFullYear', $global), 292, 44, '<image>/09_date.js');
$x1409 =& $x1410[0]; list(,$W1409,$S1409,$U1409) = $x1410;
unset($x1411, $W1411, $S1411, $U1411);
$x1412 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 292, 5, '<image>/09_date.js');
$x1411 =& $x1412[0]; list(,$W1411,$S1411,$U1411) = $x1412;
$x1413 = JS::toString('toUTCString', $global);
if ($x1411 === JS::$undefined || $x1411 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1414 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 292, 28, '<image>/09_date.js');
$_TypeError =& $x1414[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1414;
$x1415 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1416 = $x1415($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1416->class) && $x1416->class === 'Error' && !isset($x1416->properties['file']) && !isset($x1416->properties['line']) && !isset($x1416->properties['column'])) {$x1416->properties['file'] = '<image>/09_date.js';$x1416->properties['line'] = 292;$x1416->properties['column'] = 28;$x1416->attributes['file'] = $x1416->attributes['line'] = $x1416->attributes['column'] = 0; }
throw new JSException($x1416, 292, 28, '<image>/09_date.js');
}
$x1411 = JS::toObject($x1411, $global);
unset($x1417, $W1417, $S1417, $U1417);
$x1418 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1411, JS::toString($x1413, $global), 292, 28, '<image>/09_date.js');
$x1417 =& $x1418[0]; list(,$W1417,$S1417,$U1417) = $x1418;
if ($U1417 && (!isset($x1411->extensible) || $x1411->extensible)) {$x1411->properties[$x1413] = $x1417; $x1417 =& $x1411->properties[$x1413]; $x1411->attributes[$x1413] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1417 = FALSE; $W1417 = TRUE; }
if (isset($S1417)) {
$x1420 = $S1417->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1421 = $x1420($global, $x1411, $S1417, array($x1409), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1419 = $x1421;
} else {
if (!$U1417) {$x1419 = $x1409;if ($W1417) { $x1417 = $x1409; }  }
else { $x1419 = JS::$undefined; }
}
if (isset($x1411->class) && $x1411->class === 'Array' &&  is_int('toUTCString') && 'toUTCString' >= $x1411->properties['length']) { $x1411->properties['length'] = 'toUTCString' + 1; };
$x1424 = clone JS::$functionTemplate; $x1424->call = '_a3686fcdd5b5a69538641de6dddfbea8_31'; $x1424->parameters = array (
); $x1424->scope = $scope; $x1424->properties['prototype'] = clone JS::$objectTemplate; $x1424->attributes['prototype'] = JS::WRITABLE; $x1424->properties['prototype']->properties['constructor'] = $x1424; $x1424->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1424->properties['length'] = 0; $x1424->attributes['length'] = 0;
unset($x1425, $W1425, $S1425, $U1425);
$x1426 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 294, 5, '<image>/09_date.js');
$x1425 =& $x1426[0]; list(,$W1425,$S1425,$U1425) = $x1426;
$x1427 = JS::toString('toISOString', $global);
if ($x1425 === JS::$undefined || $x1425 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1428 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 294, 28, '<image>/09_date.js');
$_TypeError =& $x1428[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1428;
$x1429 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1430 = $x1429($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1430->class) && $x1430->class === 'Error' && !isset($x1430->properties['file']) && !isset($x1430->properties['line']) && !isset($x1430->properties['column'])) {$x1430->properties['file'] = '<image>/09_date.js';$x1430->properties['line'] = 294;$x1430->properties['column'] = 28;$x1430->attributes['file'] = $x1430->attributes['line'] = $x1430->attributes['column'] = 0; }
throw new JSException($x1430, 294, 28, '<image>/09_date.js');
}
$x1425 = JS::toObject($x1425, $global);
unset($x1431, $W1431, $S1431, $U1431);
$x1432 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1425, JS::toString($x1427, $global), 294, 28, '<image>/09_date.js');
$x1431 =& $x1432[0]; list(,$W1431,$S1431,$U1431) = $x1432;
if ($U1431 && (!isset($x1425->extensible) || $x1425->extensible)) {$x1425->properties[$x1427] = $x1431; $x1431 =& $x1425->properties[$x1427]; $x1425->attributes[$x1427] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1431 = FALSE; $W1431 = TRUE; }
if (isset($S1431)) {
$x1434 = $S1431->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1435 = $x1434($global, $x1425, $S1431, array($x1424), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1433 = $x1435;
} else {
if (!$U1431) {$x1433 = $x1424;if ($W1431) { $x1431 = $x1424; }  }
else { $x1433 = JS::$undefined; }
}
if (isset($x1425->class) && $x1425->class === 'Array' &&  is_int('toISOString') && 'toISOString' >= $x1425->properties['length']) { $x1425->properties['length'] = 'toISOString' + 1; };
$x1449 = clone JS::$functionTemplate; $x1449->call = '_a3686fcdd5b5a69538641de6dddfbea8_32'; $x1449->parameters = array (
  0 => 'key',
); $x1449->scope = $scope; $x1449->properties['prototype'] = clone JS::$objectTemplate; $x1449->attributes['prototype'] = JS::WRITABLE; $x1449->properties['prototype']->properties['constructor'] = $x1449; $x1449->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1449->properties['length'] = 1; $x1449->attributes['length'] = 0;
unset($x1450, $W1450, $S1450, $U1450);
$x1451 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 301, 5, '<image>/09_date.js');
$x1450 =& $x1451[0]; list(,$W1450,$S1450,$U1450) = $x1451;
$x1452 = JS::toString('toJSON', $global);
if ($x1450 === JS::$undefined || $x1450 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1453 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 301, 23, '<image>/09_date.js');
$_TypeError =& $x1453[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1453;
$x1454 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1455 = $x1454($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1455->class) && $x1455->class === 'Error' && !isset($x1455->properties['file']) && !isset($x1455->properties['line']) && !isset($x1455->properties['column'])) {$x1455->properties['file'] = '<image>/09_date.js';$x1455->properties['line'] = 301;$x1455->properties['column'] = 23;$x1455->attributes['file'] = $x1455->attributes['line'] = $x1455->attributes['column'] = 0; }
throw new JSException($x1455, 301, 23, '<image>/09_date.js');
}
$x1450 = JS::toObject($x1450, $global);
unset($x1456, $W1456, $S1456, $U1456);
$x1457 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1450, JS::toString($x1452, $global), 301, 23, '<image>/09_date.js');
$x1456 =& $x1457[0]; list(,$W1456,$S1456,$U1456) = $x1457;
if ($U1456 && (!isset($x1450->extensible) || $x1450->extensible)) {$x1450->properties[$x1452] = $x1456; $x1456 =& $x1450->properties[$x1452]; $x1450->attributes[$x1452] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1456 = FALSE; $W1456 = TRUE; }
if (isset($S1456)) {
$x1459 = $S1456->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1460 = $x1459($global, $x1450, $S1456, array($x1449), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1458 = $x1460;
} else {
if (!$U1456) {$x1458 = $x1449;if ($W1456) { $x1456 = $x1449; }  }
else { $x1458 = JS::$undefined; }
}
if (isset($x1450->class) && $x1450->class === 'Array' &&  is_int('toJSON') && 'toJSON' >= $x1450->properties['length']) { $x1450->properties['length'] = 'toJSON' + 1; };
;
return JS::$undefined;
}
