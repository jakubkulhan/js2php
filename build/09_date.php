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
$x141 =& $scope->properties['arguments'];
$x141->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x141->properties[$i] = $args[$i];
$x141->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x144 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 64, 12, '<image>/09_date.js');
$_NotImplementedError =& $x144[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x144;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x145 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 64, 12, '<image>/09_date.js');
$_ReferenceError =& $x145[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x145;
$x146 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 12);
$x147 = $x146($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x147->class) && $x147->class === 'Error' && !isset($x147->properties['file']) && !isset($x147->properties['line']) && !isset($x147->properties['column'])) {$x147->properties['file'] = '<image>/09_date.js';$x147->properties['line'] = 64;$x147->properties['column'] = 12;$x147->attributes['file'] = $x147->attributes['line'] = $x147->attributes['column'] = 0; }
throw new JSException($x147, 64, 12, '<image>/09_date.js');
}
$x142 = clone JS::$objectTemplate;
unset($x148, $W148, $S148, $U148);
$x149 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 64, 8, '<image>/09_date.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
$x143 = $x148;
$x142->prototype = $x143;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x152 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 8, '<image>/09_date.js');
$_TypeError =& $x152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x152;
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x154 = $x153($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error' && !isset($x154->properties['file']) && !isset($x154->properties['line']) && !isset($x154->properties['column'])) {$x154->properties['file'] = '<image>/09_date.js';$x154->properties['line'] = 64;$x154->properties['column'] = 8;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 64, 8, '<image>/09_date.js');
}
$x150 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 64, 8);
$x151 = $x150($global, $x142, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x143 = $x151;
if (is_object($x143) && $x143 !== JS::$undefined) { $x142 = $x143; }
if (isset($x142->class) && $x142->class === 'Error' && !isset($x142->properties['file']) && !isset($x142->properties['line']) && !isset($x142->properties['column'])) {$x142->properties['file'] = '<image>/09_date.js';$x142->properties['line'] = 64;$x142->properties['column'] = 2;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 64, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x141=&$scope->properties[\'arguments\'];$x141->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x141->properties[$i]=$args[$i];$x141->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$scope->properties[\'hours\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(4,$args)?$args[4]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(5,$args)?$args[5]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(6,$args)?$args[6]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x144=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),64,12,\'<image>/09_date.js\');$_NotImplementedError=&$x144[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x144;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x145=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),64,12,\'<image>/09_date.js\');$_ReferenceError=&$x145[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x145;$x146=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,12);$x147=$x146($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x147->class)&&$x147->class===\'Error\'&&!isset($x147->properties[\'file\'])&&!isset($x147->properties[\'line\'])&&!isset($x147->properties[\'column\'])){$x147->properties[\'file\']=\'<image>/09_date.js\';$x147->properties[\'line\']=64;$x147->properties[\'column\']=12;$x147->attributes[\'file\']=$x147->attributes[\'line\']=$x147->attributes[\'column\']=0;}throw new JSException($x147,64,12,\'<image>/09_date.js\');}$x142=clone JS::$objectTemplate;unset($x148,$W148,$S148,$U148);$x149=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),64,8,\'<image>/09_date.js\');$x148=&$x149[0];list(,$W148,$S148,$U148)=$x149;$x143=$x148;$x142->prototype=$x143;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x152=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,8,\'<image>/09_date.js\');$_TypeError=&$x152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x152;$x153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x154=$x153($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x154->class)&&$x154->class===\'Error\'&&!isset($x154->properties[\'file\'])&&!isset($x154->properties[\'line\'])&&!isset($x154->properties[\'column\'])){$x154->properties[\'file\']=\'<image>/09_date.js\';$x154->properties[\'line\']=64;$x154->properties[\'column\']=8;$x154->attributes[\'file\']=$x154->attributes[\'line\']=$x154->attributes[\'column\']=0;}throw new JSException($x154,64,8,\'<image>/09_date.js\');}$x150=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',64,8);$x151=$x150($global,$x142,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x143=$x151;if(is_object($x143)&&$x143!==JS::$undefined){$x142=$x143;}if(isset($x142->class)&&$x142->class===\'Error\'&&!isset($x142->properties[\'file\'])&&!isset($x142->properties[\'line\'])&&!isset($x142->properties[\'column\'])){$x142->properties[\'file\']=\'<image>/09_date.js\';$x142->properties[\'line\']=64;$x142->properties[\'column\']=2;$x142->attributes[\'file\']=$x142->attributes[\'line\']=$x142->attributes[\'column\']=0;}throw new JSException($x142,64,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x167 =& $scope->properties['arguments'];
$x167->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x167->properties[$i] = $args[$i];
$x167->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x170 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 68, 13, '<image>/09_date.js');
$_Date =& $x170[0]; list(,$WDate,$SDate,$UDate) = $x170;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x171 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 13, '<image>/09_date.js');
$_ReferenceError =& $x171[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x171;
$x172 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 13);
$x173 = $x172($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x173->class) && $x173->class === 'Error' && !isset($x173->properties['file']) && !isset($x173->properties['line']) && !isset($x173->properties['column'])) {$x173->properties['file'] = '<image>/09_date.js';$x173->properties['line'] = 68;$x173->properties['column'] = 13;$x173->attributes['file'] = $x173->attributes['line'] = $x173->attributes['column'] = 0; }
throw new JSException($x173, 68, 13, '<image>/09_date.js');
}
$x168 = clone JS::$objectTemplate;
unset($x174, $W174, $S174, $U174);
$x175 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 68, 9, '<image>/09_date.js');
$x174 =& $x175[0]; list(,$W174,$S174,$U174) = $x175;
$x169 = $x174;
$x168->prototype = $x169;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x178 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 68, 9, '<image>/09_date.js');
$_TypeError =& $x178[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x178;
$x179 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x180 = $x179($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x180->class) && $x180->class === 'Error' && !isset($x180->properties['file']) && !isset($x180->properties['line']) && !isset($x180->properties['column'])) {$x180->properties['file'] = '<image>/09_date.js';$x180->properties['line'] = 68;$x180->properties['column'] = 9;$x180->attributes['file'] = $x180->attributes['line'] = $x180->attributes['column'] = 0; }
throw new JSException($x180, 68, 9, '<image>/09_date.js');
}
$x176 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 68, 9);
$x177 = $x176($global, $x168, $_Date, array(time() * 1000), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x177;
if (is_object($x169) && $x169 !== JS::$undefined) { $x168 = $x169; }
return $x168;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x167=&$scope->properties[\'arguments\'];$x167->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x167->properties[$i]=$args[$i];$x167->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x170=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),68,13,\'<image>/09_date.js\');$_Date=&$x170[0];list(,$WDate,$SDate,$UDate)=$x170;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x171=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,13,\'<image>/09_date.js\');$_ReferenceError=&$x171[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x171;$x172=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,13);$x173=$x172($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x173->class)&&$x173->class===\'Error\'&&!isset($x173->properties[\'file\'])&&!isset($x173->properties[\'line\'])&&!isset($x173->properties[\'column\'])){$x173->properties[\'file\']=\'<image>/09_date.js\';$x173->properties[\'line\']=68;$x173->properties[\'column\']=13;$x173->attributes[\'file\']=$x173->attributes[\'line\']=$x173->attributes[\'column\']=0;}throw new JSException($x173,68,13,\'<image>/09_date.js\');}$x168=clone JS::$objectTemplate;unset($x174,$W174,$S174,$U174);$x175=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),68,9,\'<image>/09_date.js\');$x174=&$x175[0];list(,$W174,$S174,$U174)=$x175;$x169=$x174;$x168->prototype=$x169;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x178=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),68,9,\'<image>/09_date.js\');$_TypeError=&$x178[0];list(,$WTypeError,$STypeError,$UTypeError)=$x178;$x179=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x180=$x179($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x180->class)&&$x180->class===\'Error\'&&!isset($x180->properties[\'file\'])&&!isset($x180->properties[\'line\'])&&!isset($x180->properties[\'column\'])){$x180->properties[\'file\']=\'<image>/09_date.js\';$x180->properties[\'line\']=68;$x180->properties[\'column\']=9;$x180->attributes[\'file\']=$x180->attributes[\'line\']=$x180->attributes[\'column\']=0;}throw new JSException($x180,68,9,\'<image>/09_date.js\');}$x176=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',68,9);$x177=$x176($global,$x168,$_Date,array(time()*1000),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x169=$x177;if(is_object($x169)&&$x169!==JS::$undefined){$x168=$x169;}return$x168;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x220 =& $scope->properties['arguments'];
$x220->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x220->properties[$i] = $args[$i];
$x220->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x220=&$scope->properties[\'arguments\'];$x220->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x220->properties[$i]=$args[$i];$x220->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x235 =& $scope->properties['arguments'];
$x235->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x235->properties[$i] = $args[$i];
$x235->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x235=&$scope->properties[\'arguments\'];$x235->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x235->properties[$i]=$args[$i];$x235->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x250 =& $scope->properties['arguments'];
$x250->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x250->properties[$i] = $args[$i];
$x250->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('H:i:s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x250=&$scope->properties[\'arguments\'];$x250->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x250->properties[$i]=$args[$i];$x250->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'H:i:s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x313 =& $scope->properties['arguments'];
$x313->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x313->properties[$i] = $args[$i];
$x313->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value * 1000;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x313=&$scope->properties[\'arguments\'];$x313->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x313->properties[$i]=$args[$i];$x313->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x344 =& $scope->properties['arguments'];
$x344->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x344->properties[$i] = $args[$i];
$x344->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('Y', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x344=&$scope->properties[\'arguments\'];$x344->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x344->properties[$i]=$args[$i];$x344->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'Y\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x359 =& $scope->properties['arguments'];
$x359->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x359->properties[$i] = $args[$i];
$x359->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x362 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 105, 12, '<image>/09_date.js');
$_NotImplementedError =& $x362[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x362;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x363 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 12, '<image>/09_date.js');
$_ReferenceError =& $x363[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x363;
$x364 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 12);
$x365 = $x364($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x365->class) && $x365->class === 'Error' && !isset($x365->properties['file']) && !isset($x365->properties['line']) && !isset($x365->properties['column'])) {$x365->properties['file'] = '<image>/09_date.js';$x365->properties['line'] = 105;$x365->properties['column'] = 12;$x365->attributes['file'] = $x365->attributes['line'] = $x365->attributes['column'] = 0; }
throw new JSException($x365, 105, 12, '<image>/09_date.js');
}
$x360 = clone JS::$objectTemplate;
unset($x366, $W366, $S366, $U366);
$x367 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 105, 8, '<image>/09_date.js');
$x366 =& $x367[0]; list(,$W366,$S366,$U366) = $x367;
$x361 = $x366;
$x360->prototype = $x361;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x370 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 8, '<image>/09_date.js');
$_TypeError =& $x370[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x370;
$x371 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x372 = $x371($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x372->class) && $x372->class === 'Error' && !isset($x372->properties['file']) && !isset($x372->properties['line']) && !isset($x372->properties['column'])) {$x372->properties['file'] = '<image>/09_date.js';$x372->properties['line'] = 105;$x372->properties['column'] = 8;$x372->attributes['file'] = $x372->attributes['line'] = $x372->attributes['column'] = 0; }
throw new JSException($x372, 105, 8, '<image>/09_date.js');
}
$x368 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 105, 8);
$x369 = $x368($global, $x360, $_NotImplementedError, array('UTC functions not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x361 = $x369;
if (is_object($x361) && $x361 !== JS::$undefined) { $x360 = $x361; }
if (isset($x360->class) && $x360->class === 'Error' && !isset($x360->properties['file']) && !isset($x360->properties['line']) && !isset($x360->properties['column'])) {$x360->properties['file'] = '<image>/09_date.js';$x360->properties['line'] = 105;$x360->properties['column'] = 2;$x360->attributes['file'] = $x360->attributes['line'] = $x360->attributes['column'] = 0; }
throw new JSException($x360, 105, 2, '<image>/09_date.js');
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x359=&$scope->properties[\'arguments\'];$x359->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x359->properties[$i]=$args[$i];$x359->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x362=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),105,12,\'<image>/09_date.js\');$_NotImplementedError=&$x362[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x362;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x363=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,12,\'<image>/09_date.js\');$_ReferenceError=&$x363[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x363;$x364=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,12);$x365=$x364($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x365->class)&&$x365->class===\'Error\'&&!isset($x365->properties[\'file\'])&&!isset($x365->properties[\'line\'])&&!isset($x365->properties[\'column\'])){$x365->properties[\'file\']=\'<image>/09_date.js\';$x365->properties[\'line\']=105;$x365->properties[\'column\']=12;$x365->attributes[\'file\']=$x365->attributes[\'line\']=$x365->attributes[\'column\']=0;}throw new JSException($x365,105,12,\'<image>/09_date.js\');}$x360=clone JS::$objectTemplate;unset($x366,$W366,$S366,$U366);$x367=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),105,8,\'<image>/09_date.js\');$x366=&$x367[0];list(,$W366,$S366,$U366)=$x367;$x361=$x366;$x360->prototype=$x361;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x370=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,8,\'<image>/09_date.js\');$_TypeError=&$x370[0];list(,$WTypeError,$STypeError,$UTypeError)=$x370;$x371=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x372=$x371($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x372->class)&&$x372->class===\'Error\'&&!isset($x372->properties[\'file\'])&&!isset($x372->properties[\'line\'])&&!isset($x372->properties[\'column\'])){$x372->properties[\'file\']=\'<image>/09_date.js\';$x372->properties[\'line\']=105;$x372->properties[\'column\']=8;$x372->attributes[\'file\']=$x372->attributes[\'line\']=$x372->attributes[\'column\']=0;}throw new JSException($x372,105,8,\'<image>/09_date.js\');}$x368=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',105,8);$x369=$x368($global,$x360,$_NotImplementedError,array(\'UTC functions not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x361=$x369;if(is_object($x361)&&$x361!==JS::$undefined){$x360=$x361;}if(isset($x360->class)&&$x360->class===\'Error\'&&!isset($x360->properties[\'file\'])&&!isset($x360->properties[\'line\'])&&!isset($x360->properties[\'column\'])){$x360->properties[\'file\']=\'<image>/09_date.js\';$x360->properties[\'line\']=105;$x360->properties[\'column\']=2;$x360->attributes[\'file\']=$x360->attributes[\'line\']=$x360->attributes[\'column\']=0;}throw new JSException($x360,105,2,\'<image>/09_date.js\');return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_14($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x389 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 25, '<image>/09_date.js');
$_TypeError =& $x389[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x389;
$x390 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x391 = $x390($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x391->class) && $x391->class === 'Error' && !isset($x391->properties['file']) && !isset($x391->properties['line']) && !isset($x391->properties['column'])) {$x391->properties['file'] = '<image>/09_date.js';$x391->properties['line'] = 109;$x391->properties['column'] = 25;$x391->attributes['file'] = $x391->attributes['line'] = $x391->attributes['column'] = 0; }
throw new JSException($x391, 109, 25, '<image>/09_date.js');
}
$x388 = JS::toObject($leThis, $global);
unset($x392, $W392, $S392, $U392);
$x393 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x388, JS::toString('getFullYear', $global), 109, 25, '<image>/09_date.js');
$x392 =& $x393[0]; list(,$W392,$S392,$U392) = $x393;
if (!(is_object($x392) && isset($x392->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x396 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 25, '<image>/09_date.js');
$_TypeError =& $x396[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x396;
$x397 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x398 = $x397($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x398->class) && $x398->class === 'Error' && !isset($x398->properties['file']) && !isset($x398->properties['line']) && !isset($x398->properties['column'])) {$x398->properties['file'] = '<image>/09_date.js';$x398->properties['line'] = 109;$x398->properties['column'] = 25;$x398->attributes['file'] = $x398->attributes['line'] = $x398->attributes['column'] = 0; }
throw new JSException($x398, 109, 25, '<image>/09_date.js');
}
$x394 = $x392->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 109, 25);
$x395 = $x394($global, $x388, $x392, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return (JS::toNumber($x395, $global) - JS::toNumber(1900, $global));
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x387=&$scope->properties[\'arguments\'];$x387->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x387->properties[$i]=$args[$i];$x387->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x389=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,25,\'<image>/09_date.js\');$_TypeError=&$x389[0];list(,$WTypeError,$STypeError,$UTypeError)=$x389;$x390=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x391=$x390($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x391->class)&&$x391->class===\'Error\'&&!isset($x391->properties[\'file\'])&&!isset($x391->properties[\'line\'])&&!isset($x391->properties[\'column\'])){$x391->properties[\'file\']=\'<image>/09_date.js\';$x391->properties[\'line\']=109;$x391->properties[\'column\']=25;$x391->attributes[\'file\']=$x391->attributes[\'line\']=$x391->attributes[\'column\']=0;}throw new JSException($x391,109,25,\'<image>/09_date.js\');}$x388=JS::toObject($leThis,$global);unset($x392,$W392,$S392,$U392);$x393=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x388,JS::toString(\'getFullYear\',$global),109,25,\'<image>/09_date.js\');$x392=&$x393[0];list(,$W392,$S392,$U392)=$x393;if(!(is_object($x392)&&isset($x392->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x396=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,25,\'<image>/09_date.js\');$_TypeError=&$x396[0];list(,$WTypeError,$STypeError,$UTypeError)=$x396;$x397=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x398=$x397($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x398->class)&&$x398->class===\'Error\'&&!isset($x398->properties[\'file\'])&&!isset($x398->properties[\'line\'])&&!isset($x398->properties[\'column\'])){$x398->properties[\'file\']=\'<image>/09_date.js\';$x398->properties[\'line\']=109;$x398->properties[\'column\']=25;$x398->attributes[\'file\']=$x398->attributes[\'line\']=$x398->attributes[\'column\']=0;}throw new JSException($x398,109,25,\'<image>/09_date.js\');}$x394=$x392->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',109,25);$x395=$x394($global,$x388,$x392,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return(JS::toNumber($x395,$global)-JS::toNumber(1900,$global));return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x429 =& $scope->properties['arguments'];
$x429->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x429->properties[$i] = $args[$i];
$x429->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('n', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x429=&$scope->properties[\'arguments\'];$x429->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x429->properties[$i]=$args[$i];$x429->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'n\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x460 =& $scope->properties['arguments'];
$x460->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x460->properties[$i] = $args[$i];
$x460->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('j', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x460=&$scope->properties[\'arguments\'];$x460->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x460->properties[$i]=$args[$i];$x460->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'j\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x491 =& $scope->properties['arguments'];
$x491->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x491->properties[$i] = $args[$i];
$x491->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('w', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x491=&$scope->properties[\'arguments\'];$x491->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x491->properties[$i]=$args[$i];$x491->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'w\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x522 =& $scope->properties['arguments'];
$x522->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x522->properties[$i] = $args[$i];
$x522->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('G', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x522=&$scope->properties[\'arguments\'];$x522->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x522->properties[$i]=$args[$i];$x522->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'G\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x553 =& $scope->properties['arguments'];
$x553->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x553->properties[$i] = $args[$i];
$x553->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return (int) date('i', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x553=&$scope->properties[\'arguments\'];$x553->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x553->properties[$i]=$args[$i];$x553->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'i\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_20($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return (int) date('s', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x584=&$scope->properties[\'arguments\'];$x584->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x584->properties[$i]=$args[$i];$x584->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)date(\'s\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_21($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return (int) (($leThis->value - (int) $leThis->value) * 1000);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x615=&$scope->properties[\'arguments\'];$x615->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x615->properties[$i]=$args[$i];$x615->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return(int)(($leThis->value-(int)$leThis->value)*1000);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x646 =& $scope->properties['arguments'];
$x646->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x646->properties[$i] = $args[$i];
$x646->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Z', $leThis->value) / 60;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x646=&$scope->properties[\'arguments\'];$x646->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x646->properties[$i]=$args[$i];$x646->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Z\',$leThis->value)/60;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x661 =& $scope->properties['arguments'];
$x661->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x661->properties[$i] = $args[$i];
$x661->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x661=&$scope->properties[\'arguments\'];$x661->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x661->properties[$i]=$args[$i];$x661->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'time\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_time=&$scope->properties[\'time\'];$Utime=FALSE;$global->scope[++$global->scope_sp]=$scope;$leThis->value=JS::toNumber($_time/1000,$global);return$leThis->value*1000;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x676 =& $scope->properties['arguments'];
$x676->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x676->properties[$i] = $args[$i];
$x676->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['ms'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x679 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 166, 20, '<image>/09_date.js');
$_Date =& $x679[0]; list(,$WDate,$SDate,$UDate) = $x679;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x680 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 166, 20, '<image>/09_date.js');
$_ReferenceError =& $x680[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x680;
$x681 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 20);
$x682 = $x681($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x682->class) && $x682->class === 'Error' && !isset($x682->properties['file']) && !isset($x682->properties['line']) && !isset($x682->properties['column'])) {$x682->properties['file'] = '<image>/09_date.js';$x682->properties['line'] = 166;$x682->properties['column'] = 20;$x682->attributes['file'] = $x682->attributes['line'] = $x682->attributes['column'] = 0; }
throw new JSException($x682, 166, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x684 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 19, '<image>/09_date.js');
$_TypeError =& $x684[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x684;
$x685 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x686 = $x685($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x686->class) && $x686->class === 'Error' && !isset($x686->properties['file']) && !isset($x686->properties['line']) && !isset($x686->properties['column'])) {$x686->properties['file'] = '<image>/09_date.js';$x686->properties['line'] = 167;$x686->properties['column'] = 19;$x686->attributes['file'] = $x686->attributes['line'] = $x686->attributes['column'] = 0; }
throw new JSException($x686, 167, 19, '<image>/09_date.js');
}
$x683 = JS::toObject($leThis, $global);
unset($x687, $W687, $S687, $U687);
$x688 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x683, JS::toString('getFullYear', $global), 167, 19, '<image>/09_date.js');
$x687 =& $x688[0]; list(,$W687,$S687,$U687) = $x688;
if (!(is_object($x687) && isset($x687->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 19, '<image>/09_date.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x693 = $x692($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error' && !isset($x693->properties['file']) && !isset($x693->properties['line']) && !isset($x693->properties['column'])) {$x693->properties['file'] = '<image>/09_date.js';$x693->properties['line'] = 167;$x693->properties['column'] = 19;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 167, 19, '<image>/09_date.js');
}
$x689 = $x687->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 19);
$x690 = $x689($global, $x683, $x687, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x695 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 36, '<image>/09_date.js');
$_TypeError =& $x695[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x695;
$x696 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x697 = $x696($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x697->class) && $x697->class === 'Error' && !isset($x697->properties['file']) && !isset($x697->properties['line']) && !isset($x697->properties['column'])) {$x697->properties['file'] = '<image>/09_date.js';$x697->properties['line'] = 167;$x697->properties['column'] = 36;$x697->attributes['file'] = $x697->attributes['line'] = $x697->attributes['column'] = 0; }
throw new JSException($x697, 167, 36, '<image>/09_date.js');
}
$x694 = JS::toObject($leThis, $global);
unset($x698, $W698, $S698, $U698);
$x699 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x694, JS::toString('getMonth', $global), 167, 36, '<image>/09_date.js');
$x698 =& $x699[0]; list(,$W698,$S698,$U698) = $x699;
if (!(is_object($x698) && isset($x698->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 36, '<image>/09_date.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x704 = $x703($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error' && !isset($x704->properties['file']) && !isset($x704->properties['line']) && !isset($x704->properties['column'])) {$x704->properties['file'] = '<image>/09_date.js';$x704->properties['line'] = 167;$x704->properties['column'] = 36;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 167, 36, '<image>/09_date.js');
}
$x700 = $x698->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 36);
$x701 = $x700($global, $x694, $x698, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x706 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 52, '<image>/09_date.js');
$_TypeError =& $x706[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x706;
$x707 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x708 = $x707($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x708->class) && $x708->class === 'Error' && !isset($x708->properties['file']) && !isset($x708->properties['line']) && !isset($x708->properties['column'])) {$x708->properties['file'] = '<image>/09_date.js';$x708->properties['line'] = 167;$x708->properties['column'] = 52;$x708->attributes['file'] = $x708->attributes['line'] = $x708->attributes['column'] = 0; }
throw new JSException($x708, 167, 52, '<image>/09_date.js');
}
$x705 = JS::toObject($leThis, $global);
unset($x709, $W709, $S709, $U709);
$x710 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x705, JS::toString('getDate', $global), 167, 52, '<image>/09_date.js');
$x709 =& $x710[0]; list(,$W709,$S709,$U709) = $x710;
if (!(is_object($x709) && isset($x709->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x713 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 52, '<image>/09_date.js');
$_TypeError =& $x713[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x713;
$x714 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x715 = $x714($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x715->class) && $x715->class === 'Error' && !isset($x715->properties['file']) && !isset($x715->properties['line']) && !isset($x715->properties['column'])) {$x715->properties['file'] = '<image>/09_date.js';$x715->properties['line'] = 167;$x715->properties['column'] = 52;$x715->attributes['file'] = $x715->attributes['line'] = $x715->attributes['column'] = 0; }
throw new JSException($x715, 167, 52, '<image>/09_date.js');
}
$x711 = $x709->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 167, 52);
$x712 = $x711($global, $x705, $x709, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x717 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 16, '<image>/09_date.js');
$_TypeError =& $x717[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x717;
$x718 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x719 = $x718($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x719->class) && $x719->class === 'Error' && !isset($x719->properties['file']) && !isset($x719->properties['line']) && !isset($x719->properties['column'])) {$x719->properties['file'] = '<image>/09_date.js';$x719->properties['line'] = 168;$x719->properties['column'] = 16;$x719->attributes['file'] = $x719->attributes['line'] = $x719->attributes['column'] = 0; }
throw new JSException($x719, 168, 16, '<image>/09_date.js');
}
$x716 = JS::toObject($leThis, $global);
unset($x720, $W720, $S720, $U720);
$x721 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x716, JS::toString('getHours', $global), 168, 16, '<image>/09_date.js');
$x720 =& $x721[0]; list(,$W720,$S720,$U720) = $x721;
if (!(is_object($x720) && isset($x720->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x724 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 16, '<image>/09_date.js');
$_TypeError =& $x724[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x724;
$x725 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x726 = $x725($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x726->class) && $x726->class === 'Error' && !isset($x726->properties['file']) && !isset($x726->properties['line']) && !isset($x726->properties['column'])) {$x726->properties['file'] = '<image>/09_date.js';$x726->properties['line'] = 168;$x726->properties['column'] = 16;$x726->attributes['file'] = $x726->attributes['line'] = $x726->attributes['column'] = 0; }
throw new JSException($x726, 168, 16, '<image>/09_date.js');
}
$x722 = $x720->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 16);
$x723 = $x722($global, $x716, $x720, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x728 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 35, '<image>/09_date.js');
$_TypeError =& $x728[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x728;
$x729 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x730 = $x729($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x730->class) && $x730->class === 'Error' && !isset($x730->properties['file']) && !isset($x730->properties['line']) && !isset($x730->properties['column'])) {$x730->properties['file'] = '<image>/09_date.js';$x730->properties['line'] = 168;$x730->properties['column'] = 35;$x730->attributes['file'] = $x730->attributes['line'] = $x730->attributes['column'] = 0; }
throw new JSException($x730, 168, 35, '<image>/09_date.js');
}
$x727 = JS::toObject($leThis, $global);
unset($x731, $W731, $S731, $U731);
$x732 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x727, JS::toString('getMinutes', $global), 168, 35, '<image>/09_date.js');
$x731 =& $x732[0]; list(,$W731,$S731,$U731) = $x732;
if (!(is_object($x731) && isset($x731->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x735 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 35, '<image>/09_date.js');
$_TypeError =& $x735[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x735;
$x736 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x737 = $x736($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x737->class) && $x737->class === 'Error' && !isset($x737->properties['file']) && !isset($x737->properties['line']) && !isset($x737->properties['column'])) {$x737->properties['file'] = '<image>/09_date.js';$x737->properties['line'] = 168;$x737->properties['column'] = 35;$x737->attributes['file'] = $x737->attributes['line'] = $x737->attributes['column'] = 0; }
throw new JSException($x737, 168, 35, '<image>/09_date.js');
}
$x733 = $x731->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 35);
$x734 = $x733($global, $x727, $x731, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x739 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 54, '<image>/09_date.js');
$_TypeError =& $x739[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x739;
$x740 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x741 = $x740($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x741->class) && $x741->class === 'Error' && !isset($x741->properties['file']) && !isset($x741->properties['line']) && !isset($x741->properties['column'])) {$x741->properties['file'] = '<image>/09_date.js';$x741->properties['line'] = 168;$x741->properties['column'] = 54;$x741->attributes['file'] = $x741->attributes['line'] = $x741->attributes['column'] = 0; }
throw new JSException($x741, 168, 54, '<image>/09_date.js');
}
$x738 = JS::toObject($leThis, $global);
unset($x742, $W742, $S742, $U742);
$x743 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x738, JS::toString('getSeconds', $global), 168, 54, '<image>/09_date.js');
$x742 =& $x743[0]; list(,$W742,$S742,$U742) = $x743;
if (!(is_object($x742) && isset($x742->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x746 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 168, 54, '<image>/09_date.js');
$_TypeError =& $x746[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x746;
$x747 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x748 = $x747($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x748->class) && $x748->class === 'Error' && !isset($x748->properties['file']) && !isset($x748->properties['line']) && !isset($x748->properties['column'])) {$x748->properties['file'] = '<image>/09_date.js';$x748->properties['line'] = 168;$x748->properties['column'] = 54;$x748->attributes['file'] = $x748->attributes['line'] = $x748->attributes['column'] = 0; }
throw new JSException($x748, 168, 54, '<image>/09_date.js');
}
$x744 = $x742->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 168, 54);
$x745 = $x744($global, $x738, $x742, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x677 = clone JS::$objectTemplate;
unset($x749, $W749, $S749, $U749);
$x750 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 166, 16, '<image>/09_date.js');
$x749 =& $x750[0]; list(,$W749,$S749,$U749) = $x750;
$x678 = $x749;
$x677->prototype = $x678;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x753 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 16, '<image>/09_date.js');
$_TypeError =& $x753[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x753;
$x754 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x755 = $x754($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x755->class) && $x755->class === 'Error' && !isset($x755->properties['file']) && !isset($x755->properties['line']) && !isset($x755->properties['column'])) {$x755->properties['file'] = '<image>/09_date.js';$x755->properties['line'] = 166;$x755->properties['column'] = 16;$x755->attributes['file'] = $x755->attributes['line'] = $x755->attributes['column'] = 0; }
throw new JSException($x755, 166, 16, '<image>/09_date.js');
}
$x751 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 166, 16);
$x752 = $x751($global, $x677, $_Date, array($x690, $x701, $x712, $x723, $x734, $x745, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x678 = $x752;
if (is_object($x678) && $x678 !== JS::$undefined) { $x677 = $x678; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x677;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x676=&$scope->properties[\'arguments\'];$x676->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x676->properties[$i]=$args[$i];$x676->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'ms\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x679=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),166,20,\'<image>/09_date.js\');$_Date=&$x679[0];list(,$WDate,$SDate,$UDate)=$x679;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x680=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),166,20,\'<image>/09_date.js\');$_ReferenceError=&$x680[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x680;$x681=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,20);$x682=$x681($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x682->class)&&$x682->class===\'Error\'&&!isset($x682->properties[\'file\'])&&!isset($x682->properties[\'line\'])&&!isset($x682->properties[\'column\'])){$x682->properties[\'file\']=\'<image>/09_date.js\';$x682->properties[\'line\']=166;$x682->properties[\'column\']=20;$x682->attributes[\'file\']=$x682->attributes[\'line\']=$x682->attributes[\'column\']=0;}throw new JSException($x682,166,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x684=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,19,\'<image>/09_date.js\');$_TypeError=&$x684[0];list(,$WTypeError,$STypeError,$UTypeError)=$x684;$x685=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x686=$x685($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x686->class)&&$x686->class===\'Error\'&&!isset($x686->properties[\'file\'])&&!isset($x686->properties[\'line\'])&&!isset($x686->properties[\'column\'])){$x686->properties[\'file\']=\'<image>/09_date.js\';$x686->properties[\'line\']=167;$x686->properties[\'column\']=19;$x686->attributes[\'file\']=$x686->attributes[\'line\']=$x686->attributes[\'column\']=0;}throw new JSException($x686,167,19,\'<image>/09_date.js\');}$x683=JS::toObject($leThis,$global);unset($x687,$W687,$S687,$U687);$x688=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x683,JS::toString(\'getFullYear\',$global),167,19,\'<image>/09_date.js\');$x687=&$x688[0];list(,$W687,$S687,$U687)=$x688;if(!(is_object($x687)&&isset($x687->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x691=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,19,\'<image>/09_date.js\');$_TypeError=&$x691[0];list(,$WTypeError,$STypeError,$UTypeError)=$x691;$x692=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x693=$x692($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x693->class)&&$x693->class===\'Error\'&&!isset($x693->properties[\'file\'])&&!isset($x693->properties[\'line\'])&&!isset($x693->properties[\'column\'])){$x693->properties[\'file\']=\'<image>/09_date.js\';$x693->properties[\'line\']=167;$x693->properties[\'column\']=19;$x693->attributes[\'file\']=$x693->attributes[\'line\']=$x693->attributes[\'column\']=0;}throw new JSException($x693,167,19,\'<image>/09_date.js\');}$x689=$x687->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,19);$x690=$x689($global,$x683,$x687,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x695=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,36,\'<image>/09_date.js\');$_TypeError=&$x695[0];list(,$WTypeError,$STypeError,$UTypeError)=$x695;$x696=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x697=$x696($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x697->class)&&$x697->class===\'Error\'&&!isset($x697->properties[\'file\'])&&!isset($x697->properties[\'line\'])&&!isset($x697->properties[\'column\'])){$x697->properties[\'file\']=\'<image>/09_date.js\';$x697->properties[\'line\']=167;$x697->properties[\'column\']=36;$x697->attributes[\'file\']=$x697->attributes[\'line\']=$x697->attributes[\'column\']=0;}throw new JSException($x697,167,36,\'<image>/09_date.js\');}$x694=JS::toObject($leThis,$global);unset($x698,$W698,$S698,$U698);$x699=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x694,JS::toString(\'getMonth\',$global),167,36,\'<image>/09_date.js\');$x698=&$x699[0];list(,$W698,$S698,$U698)=$x699;if(!(is_object($x698)&&isset($x698->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x702=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,36,\'<image>/09_date.js\');$_TypeError=&$x702[0];list(,$WTypeError,$STypeError,$UTypeError)=$x702;$x703=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x704=$x703($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x704->class)&&$x704->class===\'Error\'&&!isset($x704->properties[\'file\'])&&!isset($x704->properties[\'line\'])&&!isset($x704->properties[\'column\'])){$x704->properties[\'file\']=\'<image>/09_date.js\';$x704->properties[\'line\']=167;$x704->properties[\'column\']=36;$x704->attributes[\'file\']=$x704->attributes[\'line\']=$x704->attributes[\'column\']=0;}throw new JSException($x704,167,36,\'<image>/09_date.js\');}$x700=$x698->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,36);$x701=$x700($global,$x694,$x698,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x706=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,52,\'<image>/09_date.js\');$_TypeError=&$x706[0];list(,$WTypeError,$STypeError,$UTypeError)=$x706;$x707=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x708=$x707($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x708->class)&&$x708->class===\'Error\'&&!isset($x708->properties[\'file\'])&&!isset($x708->properties[\'line\'])&&!isset($x708->properties[\'column\'])){$x708->properties[\'file\']=\'<image>/09_date.js\';$x708->properties[\'line\']=167;$x708->properties[\'column\']=52;$x708->attributes[\'file\']=$x708->attributes[\'line\']=$x708->attributes[\'column\']=0;}throw new JSException($x708,167,52,\'<image>/09_date.js\');}$x705=JS::toObject($leThis,$global);unset($x709,$W709,$S709,$U709);$x710=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x705,JS::toString(\'getDate\',$global),167,52,\'<image>/09_date.js\');$x709=&$x710[0];list(,$W709,$S709,$U709)=$x710;if(!(is_object($x709)&&isset($x709->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x713=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,52,\'<image>/09_date.js\');$_TypeError=&$x713[0];list(,$WTypeError,$STypeError,$UTypeError)=$x713;$x714=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x715=$x714($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x715->class)&&$x715->class===\'Error\'&&!isset($x715->properties[\'file\'])&&!isset($x715->properties[\'line\'])&&!isset($x715->properties[\'column\'])){$x715->properties[\'file\']=\'<image>/09_date.js\';$x715->properties[\'line\']=167;$x715->properties[\'column\']=52;$x715->attributes[\'file\']=$x715->attributes[\'line\']=$x715->attributes[\'column\']=0;}throw new JSException($x715,167,52,\'<image>/09_date.js\');}$x711=$x709->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',167,52);$x712=$x711($global,$x705,$x709,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x717=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,16,\'<image>/09_date.js\');$_TypeError=&$x717[0];list(,$WTypeError,$STypeError,$UTypeError)=$x717;$x718=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x719=$x718($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x719->class)&&$x719->class===\'Error\'&&!isset($x719->properties[\'file\'])&&!isset($x719->properties[\'line\'])&&!isset($x719->properties[\'column\'])){$x719->properties[\'file\']=\'<image>/09_date.js\';$x719->properties[\'line\']=168;$x719->properties[\'column\']=16;$x719->attributes[\'file\']=$x719->attributes[\'line\']=$x719->attributes[\'column\']=0;}throw new JSException($x719,168,16,\'<image>/09_date.js\');}$x716=JS::toObject($leThis,$global);unset($x720,$W720,$S720,$U720);$x721=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x716,JS::toString(\'getHours\',$global),168,16,\'<image>/09_date.js\');$x720=&$x721[0];list(,$W720,$S720,$U720)=$x721;if(!(is_object($x720)&&isset($x720->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x724=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,16,\'<image>/09_date.js\');$_TypeError=&$x724[0];list(,$WTypeError,$STypeError,$UTypeError)=$x724;$x725=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x726=$x725($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x726->class)&&$x726->class===\'Error\'&&!isset($x726->properties[\'file\'])&&!isset($x726->properties[\'line\'])&&!isset($x726->properties[\'column\'])){$x726->properties[\'file\']=\'<image>/09_date.js\';$x726->properties[\'line\']=168;$x726->properties[\'column\']=16;$x726->attributes[\'file\']=$x726->attributes[\'line\']=$x726->attributes[\'column\']=0;}throw new JSException($x726,168,16,\'<image>/09_date.js\');}$x722=$x720->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,16);$x723=$x722($global,$x716,$x720,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x728=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,35,\'<image>/09_date.js\');$_TypeError=&$x728[0];list(,$WTypeError,$STypeError,$UTypeError)=$x728;$x729=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x730=$x729($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x730->class)&&$x730->class===\'Error\'&&!isset($x730->properties[\'file\'])&&!isset($x730->properties[\'line\'])&&!isset($x730->properties[\'column\'])){$x730->properties[\'file\']=\'<image>/09_date.js\';$x730->properties[\'line\']=168;$x730->properties[\'column\']=35;$x730->attributes[\'file\']=$x730->attributes[\'line\']=$x730->attributes[\'column\']=0;}throw new JSException($x730,168,35,\'<image>/09_date.js\');}$x727=JS::toObject($leThis,$global);unset($x731,$W731,$S731,$U731);$x732=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x727,JS::toString(\'getMinutes\',$global),168,35,\'<image>/09_date.js\');$x731=&$x732[0];list(,$W731,$S731,$U731)=$x732;if(!(is_object($x731)&&isset($x731->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x735=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,35,\'<image>/09_date.js\');$_TypeError=&$x735[0];list(,$WTypeError,$STypeError,$UTypeError)=$x735;$x736=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x737=$x736($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x737->class)&&$x737->class===\'Error\'&&!isset($x737->properties[\'file\'])&&!isset($x737->properties[\'line\'])&&!isset($x737->properties[\'column\'])){$x737->properties[\'file\']=\'<image>/09_date.js\';$x737->properties[\'line\']=168;$x737->properties[\'column\']=35;$x737->attributes[\'file\']=$x737->attributes[\'line\']=$x737->attributes[\'column\']=0;}throw new JSException($x737,168,35,\'<image>/09_date.js\');}$x733=$x731->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,35);$x734=$x733($global,$x727,$x731,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x739=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,54,\'<image>/09_date.js\');$_TypeError=&$x739[0];list(,$WTypeError,$STypeError,$UTypeError)=$x739;$x740=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x741=$x740($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x741->class)&&$x741->class===\'Error\'&&!isset($x741->properties[\'file\'])&&!isset($x741->properties[\'line\'])&&!isset($x741->properties[\'column\'])){$x741->properties[\'file\']=\'<image>/09_date.js\';$x741->properties[\'line\']=168;$x741->properties[\'column\']=54;$x741->attributes[\'file\']=$x741->attributes[\'line\']=$x741->attributes[\'column\']=0;}throw new JSException($x741,168,54,\'<image>/09_date.js\');}$x738=JS::toObject($leThis,$global);unset($x742,$W742,$S742,$U742);$x743=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x738,JS::toString(\'getSeconds\',$global),168,54,\'<image>/09_date.js\');$x742=&$x743[0];list(,$W742,$S742,$U742)=$x743;if(!(is_object($x742)&&isset($x742->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x746=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),168,54,\'<image>/09_date.js\');$_TypeError=&$x746[0];list(,$WTypeError,$STypeError,$UTypeError)=$x746;$x747=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x748=$x747($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x748->class)&&$x748->class===\'Error\'&&!isset($x748->properties[\'file\'])&&!isset($x748->properties[\'line\'])&&!isset($x748->properties[\'column\'])){$x748->properties[\'file\']=\'<image>/09_date.js\';$x748->properties[\'line\']=168;$x748->properties[\'column\']=54;$x748->attributes[\'file\']=$x748->attributes[\'line\']=$x748->attributes[\'column\']=0;}throw new JSException($x748,168,54,\'<image>/09_date.js\');}$x744=$x742->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',168,54);$x745=$x744($global,$x738,$x742,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x677=clone JS::$objectTemplate;unset($x749,$W749,$S749,$U749);$x750=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),166,16,\'<image>/09_date.js\');$x749=&$x750[0];list(,$W749,$S749,$U749)=$x750;$x678=$x749;$x677->prototype=$x678;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x753=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,16,\'<image>/09_date.js\');$_TypeError=&$x753[0];list(,$WTypeError,$STypeError,$UTypeError)=$x753;$x754=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x755=$x754($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x755->class)&&$x755->class===\'Error\'&&!isset($x755->properties[\'file\'])&&!isset($x755->properties[\'line\'])&&!isset($x755->properties[\'column\'])){$x755->properties[\'file\']=\'<image>/09_date.js\';$x755->properties[\'line\']=166;$x755->properties[\'column\']=16;$x755->attributes[\'file\']=$x755->attributes[\'line\']=$x755->attributes[\'column\']=0;}throw new JSException($x755,166,16,\'<image>/09_date.js\');}$x751=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',166,16);$x752=$x751($global,$x677,$_Date,array($x690,$x701,$x712,$x723,$x734,$x745,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x678=$x752;if(is_object($x678)&&$x678!==JS::$undefined){$x677=$x678;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x677;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x786 =& $scope->properties['arguments'];
$x786->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x786->properties[$i] = $args[$i];
$x786->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['seconds'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_seconds =& $scope->properties['seconds'];
$Useconds = FALSE;
$scope->properties['ms'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_ms =& $scope->properties['ms'];
$Ums = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x787 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x787, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x789 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 180, 28, '<image>/09_date.js');
$_TypeError =& $x789[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x789;
$x790 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x791 = $x790($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x791->class) && $x791->class === 'Error' && !isset($x791->properties['file']) && !isset($x791->properties['line']) && !isset($x791->properties['column'])) {$x791->properties['file'] = '<image>/09_date.js';$x791->properties['line'] = 180;$x791->properties['column'] = 28;$x791->attributes['file'] = $x791->attributes['line'] = $x791->attributes['column'] = 0; }
throw new JSException($x791, 180, 28, '<image>/09_date.js');
}
$x788 = JS::toObject($leThis, $global);
unset($x792, $W792, $S792, $U792);
$x793 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x788, JS::toString('getMilliseconds', $global), 180, 28, '<image>/09_date.js');
$x792 =& $x793[0]; list(,$W792,$S792,$U792) = $x793;
if (!(is_object($x792) && isset($x792->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x796 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 180, 28, '<image>/09_date.js');
$_TypeError =& $x796[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x796;
$x797 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x798 = $x797($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x798->class) && $x798->class === 'Error' && !isset($x798->properties['file']) && !isset($x798->properties['line']) && !isset($x798->properties['column'])) {$x798->properties['file'] = '<image>/09_date.js';$x798->properties['line'] = 180;$x798->properties['column'] = 28;$x798->attributes['file'] = $x798->attributes['line'] = $x798->attributes['column'] = 0; }
throw new JSException($x798, 180, 28, '<image>/09_date.js');
}
$x794 = $x792->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 180, 28);
$x795 = $x794($global, $x788, $x792, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x795;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x801 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 183, 20, '<image>/09_date.js');
$_Date =& $x801[0]; list(,$WDate,$SDate,$UDate) = $x801;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x802 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 183, 20, '<image>/09_date.js');
$_ReferenceError =& $x802[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x802;
$x803 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 20);
$x804 = $x803($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x804->class) && $x804->class === 'Error' && !isset($x804->properties['file']) && !isset($x804->properties['line']) && !isset($x804->properties['column'])) {$x804->properties['file'] = '<image>/09_date.js';$x804->properties['line'] = 183;$x804->properties['column'] = 20;$x804->attributes['file'] = $x804->attributes['line'] = $x804->attributes['column'] = 0; }
throw new JSException($x804, 183, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x806 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 19, '<image>/09_date.js');
$_TypeError =& $x806[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x806;
$x807 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x808 = $x807($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x808->class) && $x808->class === 'Error' && !isset($x808->properties['file']) && !isset($x808->properties['line']) && !isset($x808->properties['column'])) {$x808->properties['file'] = '<image>/09_date.js';$x808->properties['line'] = 184;$x808->properties['column'] = 19;$x808->attributes['file'] = $x808->attributes['line'] = $x808->attributes['column'] = 0; }
throw new JSException($x808, 184, 19, '<image>/09_date.js');
}
$x805 = JS::toObject($leThis, $global);
unset($x809, $W809, $S809, $U809);
$x810 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x805, JS::toString('getFullYear', $global), 184, 19, '<image>/09_date.js');
$x809 =& $x810[0]; list(,$W809,$S809,$U809) = $x810;
if (!(is_object($x809) && isset($x809->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x813 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 19, '<image>/09_date.js');
$_TypeError =& $x813[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x813;
$x814 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x815 = $x814($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x815->class) && $x815->class === 'Error' && !isset($x815->properties['file']) && !isset($x815->properties['line']) && !isset($x815->properties['column'])) {$x815->properties['file'] = '<image>/09_date.js';$x815->properties['line'] = 184;$x815->properties['column'] = 19;$x815->attributes['file'] = $x815->attributes['line'] = $x815->attributes['column'] = 0; }
throw new JSException($x815, 184, 19, '<image>/09_date.js');
}
$x811 = $x809->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 19);
$x812 = $x811($global, $x805, $x809, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x817 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 36, '<image>/09_date.js');
$_TypeError =& $x817[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x817;
$x818 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x819 = $x818($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x819->class) && $x819->class === 'Error' && !isset($x819->properties['file']) && !isset($x819->properties['line']) && !isset($x819->properties['column'])) {$x819->properties['file'] = '<image>/09_date.js';$x819->properties['line'] = 184;$x819->properties['column'] = 36;$x819->attributes['file'] = $x819->attributes['line'] = $x819->attributes['column'] = 0; }
throw new JSException($x819, 184, 36, '<image>/09_date.js');
}
$x816 = JS::toObject($leThis, $global);
unset($x820, $W820, $S820, $U820);
$x821 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x816, JS::toString('getMonth', $global), 184, 36, '<image>/09_date.js');
$x820 =& $x821[0]; list(,$W820,$S820,$U820) = $x821;
if (!(is_object($x820) && isset($x820->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x824 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 36, '<image>/09_date.js');
$_TypeError =& $x824[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x824;
$x825 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x826 = $x825($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x826->class) && $x826->class === 'Error' && !isset($x826->properties['file']) && !isset($x826->properties['line']) && !isset($x826->properties['column'])) {$x826->properties['file'] = '<image>/09_date.js';$x826->properties['line'] = 184;$x826->properties['column'] = 36;$x826->attributes['file'] = $x826->attributes['line'] = $x826->attributes['column'] = 0; }
throw new JSException($x826, 184, 36, '<image>/09_date.js');
}
$x822 = $x820->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 36);
$x823 = $x822($global, $x816, $x820, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x828 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 52, '<image>/09_date.js');
$_TypeError =& $x828[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x828;
$x829 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x830 = $x829($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x830->class) && $x830->class === 'Error' && !isset($x830->properties['file']) && !isset($x830->properties['line']) && !isset($x830->properties['column'])) {$x830->properties['file'] = '<image>/09_date.js';$x830->properties['line'] = 184;$x830->properties['column'] = 52;$x830->attributes['file'] = $x830->attributes['line'] = $x830->attributes['column'] = 0; }
throw new JSException($x830, 184, 52, '<image>/09_date.js');
}
$x827 = JS::toObject($leThis, $global);
unset($x831, $W831, $S831, $U831);
$x832 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x827, JS::toString('getDate', $global), 184, 52, '<image>/09_date.js');
$x831 =& $x832[0]; list(,$W831,$S831,$U831) = $x832;
if (!(is_object($x831) && isset($x831->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x835 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 52, '<image>/09_date.js');
$_TypeError =& $x835[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x835;
$x836 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x837 = $x836($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x837->class) && $x837->class === 'Error' && !isset($x837->properties['file']) && !isset($x837->properties['line']) && !isset($x837->properties['column'])) {$x837->properties['file'] = '<image>/09_date.js';$x837->properties['line'] = 184;$x837->properties['column'] = 52;$x837->attributes['file'] = $x837->attributes['line'] = $x837->attributes['column'] = 0; }
throw new JSException($x837, 184, 52, '<image>/09_date.js');
}
$x833 = $x831->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 184, 52);
$x834 = $x833($global, $x827, $x831, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x839 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 16, '<image>/09_date.js');
$_TypeError =& $x839[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x839;
$x840 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x841 = $x840($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x841->class) && $x841->class === 'Error' && !isset($x841->properties['file']) && !isset($x841->properties['line']) && !isset($x841->properties['column'])) {$x841->properties['file'] = '<image>/09_date.js';$x841->properties['line'] = 185;$x841->properties['column'] = 16;$x841->attributes['file'] = $x841->attributes['line'] = $x841->attributes['column'] = 0; }
throw new JSException($x841, 185, 16, '<image>/09_date.js');
}
$x838 = JS::toObject($leThis, $global);
unset($x842, $W842, $S842, $U842);
$x843 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x838, JS::toString('getHours', $global), 185, 16, '<image>/09_date.js');
$x842 =& $x843[0]; list(,$W842,$S842,$U842) = $x843;
if (!(is_object($x842) && isset($x842->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x846 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 16, '<image>/09_date.js');
$_TypeError =& $x846[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x846;
$x847 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x848 = $x847($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x848->class) && $x848->class === 'Error' && !isset($x848->properties['file']) && !isset($x848->properties['line']) && !isset($x848->properties['column'])) {$x848->properties['file'] = '<image>/09_date.js';$x848->properties['line'] = 185;$x848->properties['column'] = 16;$x848->attributes['file'] = $x848->attributes['line'] = $x848->attributes['column'] = 0; }
throw new JSException($x848, 185, 16, '<image>/09_date.js');
}
$x844 = $x842->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 16);
$x845 = $x844($global, $x838, $x842, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x850 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/09_date.js');
$_TypeError =& $x850[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x850;
$x851 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x852 = $x851($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x852->class) && $x852->class === 'Error' && !isset($x852->properties['file']) && !isset($x852->properties['line']) && !isset($x852->properties['column'])) {$x852->properties['file'] = '<image>/09_date.js';$x852->properties['line'] = 185;$x852->properties['column'] = 35;$x852->attributes['file'] = $x852->attributes['line'] = $x852->attributes['column'] = 0; }
throw new JSException($x852, 185, 35, '<image>/09_date.js');
}
$x849 = JS::toObject($leThis, $global);
unset($x853, $W853, $S853, $U853);
$x854 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x849, JS::toString('getMinutes', $global), 185, 35, '<image>/09_date.js');
$x853 =& $x854[0]; list(,$W853,$S853,$U853) = $x854;
if (!(is_object($x853) && isset($x853->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x857 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/09_date.js');
$_TypeError =& $x857[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x857;
$x858 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x859 = $x858($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x859->class) && $x859->class === 'Error' && !isset($x859->properties['file']) && !isset($x859->properties['line']) && !isset($x859->properties['column'])) {$x859->properties['file'] = '<image>/09_date.js';$x859->properties['line'] = 185;$x859->properties['column'] = 35;$x859->attributes['file'] = $x859->attributes['line'] = $x859->attributes['column'] = 0; }
throw new JSException($x859, 185, 35, '<image>/09_date.js');
}
$x855 = $x853->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 185, 35);
$x856 = $x855($global, $x849, $x853, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x799 = clone JS::$objectTemplate;
unset($x860, $W860, $S860, $U860);
$x861 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 183, 16, '<image>/09_date.js');
$x860 =& $x861[0]; list(,$W860,$S860,$U860) = $x861;
$x800 = $x860;
$x799->prototype = $x800;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x864 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 183, 16, '<image>/09_date.js');
$_TypeError =& $x864[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x864;
$x865 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x866 = $x865($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x866->class) && $x866->class === 'Error' && !isset($x866->properties['file']) && !isset($x866->properties['line']) && !isset($x866->properties['column'])) {$x866->properties['file'] = '<image>/09_date.js';$x866->properties['line'] = 183;$x866->properties['column'] = 16;$x866->attributes['file'] = $x866->attributes['line'] = $x866->attributes['column'] = 0; }
throw new JSException($x866, 183, 16, '<image>/09_date.js');
}
$x862 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 183, 16);
$x863 = $x862($global, $x799, $_Date, array($x812, $x823, $x834, $x845, $x856, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x800 = $x863;
if (is_object($x800) && $x800 !== JS::$undefined) { $x799 = $x800; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x799;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x786=&$scope->properties[\'arguments\'];$x786->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x786->properties[$i]=$args[$i];$x786->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'seconds\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x787=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x787,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x789=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),180,28,\'<image>/09_date.js\');$_TypeError=&$x789[0];list(,$WTypeError,$STypeError,$UTypeError)=$x789;$x790=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x791=$x790($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x791->class)&&$x791->class===\'Error\'&&!isset($x791->properties[\'file\'])&&!isset($x791->properties[\'line\'])&&!isset($x791->properties[\'column\'])){$x791->properties[\'file\']=\'<image>/09_date.js\';$x791->properties[\'line\']=180;$x791->properties[\'column\']=28;$x791->attributes[\'file\']=$x791->attributes[\'line\']=$x791->attributes[\'column\']=0;}throw new JSException($x791,180,28,\'<image>/09_date.js\');}$x788=JS::toObject($leThis,$global);unset($x792,$W792,$S792,$U792);$x793=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x788,JS::toString(\'getMilliseconds\',$global),180,28,\'<image>/09_date.js\');$x792=&$x793[0];list(,$W792,$S792,$U792)=$x793;if(!(is_object($x792)&&isset($x792->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x796=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),180,28,\'<image>/09_date.js\');$_TypeError=&$x796[0];list(,$WTypeError,$STypeError,$UTypeError)=$x796;$x797=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x798=$x797($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x798->class)&&$x798->class===\'Error\'&&!isset($x798->properties[\'file\'])&&!isset($x798->properties[\'line\'])&&!isset($x798->properties[\'column\'])){$x798->properties[\'file\']=\'<image>/09_date.js\';$x798->properties[\'line\']=180;$x798->properties[\'column\']=28;$x798->attributes[\'file\']=$x798->attributes[\'line\']=$x798->attributes[\'column\']=0;}throw new JSException($x798,180,28,\'<image>/09_date.js\');}$x794=$x792->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',180,28);$x795=$x794($global,$x788,$x792,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x795;}unset($_Date,$WDate,$SDate,$UDate);$x801=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),183,20,\'<image>/09_date.js\');$_Date=&$x801[0];list(,$WDate,$SDate,$UDate)=$x801;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x802=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),183,20,\'<image>/09_date.js\');$_ReferenceError=&$x802[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x802;$x803=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,20);$x804=$x803($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x804->class)&&$x804->class===\'Error\'&&!isset($x804->properties[\'file\'])&&!isset($x804->properties[\'line\'])&&!isset($x804->properties[\'column\'])){$x804->properties[\'file\']=\'<image>/09_date.js\';$x804->properties[\'line\']=183;$x804->properties[\'column\']=20;$x804->attributes[\'file\']=$x804->attributes[\'line\']=$x804->attributes[\'column\']=0;}throw new JSException($x804,183,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x806=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,19,\'<image>/09_date.js\');$_TypeError=&$x806[0];list(,$WTypeError,$STypeError,$UTypeError)=$x806;$x807=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x808=$x807($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x808->class)&&$x808->class===\'Error\'&&!isset($x808->properties[\'file\'])&&!isset($x808->properties[\'line\'])&&!isset($x808->properties[\'column\'])){$x808->properties[\'file\']=\'<image>/09_date.js\';$x808->properties[\'line\']=184;$x808->properties[\'column\']=19;$x808->attributes[\'file\']=$x808->attributes[\'line\']=$x808->attributes[\'column\']=0;}throw new JSException($x808,184,19,\'<image>/09_date.js\');}$x805=JS::toObject($leThis,$global);unset($x809,$W809,$S809,$U809);$x810=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x805,JS::toString(\'getFullYear\',$global),184,19,\'<image>/09_date.js\');$x809=&$x810[0];list(,$W809,$S809,$U809)=$x810;if(!(is_object($x809)&&isset($x809->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x813=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,19,\'<image>/09_date.js\');$_TypeError=&$x813[0];list(,$WTypeError,$STypeError,$UTypeError)=$x813;$x814=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x815=$x814($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x815->class)&&$x815->class===\'Error\'&&!isset($x815->properties[\'file\'])&&!isset($x815->properties[\'line\'])&&!isset($x815->properties[\'column\'])){$x815->properties[\'file\']=\'<image>/09_date.js\';$x815->properties[\'line\']=184;$x815->properties[\'column\']=19;$x815->attributes[\'file\']=$x815->attributes[\'line\']=$x815->attributes[\'column\']=0;}throw new JSException($x815,184,19,\'<image>/09_date.js\');}$x811=$x809->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,19);$x812=$x811($global,$x805,$x809,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x817=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,36,\'<image>/09_date.js\');$_TypeError=&$x817[0];list(,$WTypeError,$STypeError,$UTypeError)=$x817;$x818=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x819=$x818($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x819->class)&&$x819->class===\'Error\'&&!isset($x819->properties[\'file\'])&&!isset($x819->properties[\'line\'])&&!isset($x819->properties[\'column\'])){$x819->properties[\'file\']=\'<image>/09_date.js\';$x819->properties[\'line\']=184;$x819->properties[\'column\']=36;$x819->attributes[\'file\']=$x819->attributes[\'line\']=$x819->attributes[\'column\']=0;}throw new JSException($x819,184,36,\'<image>/09_date.js\');}$x816=JS::toObject($leThis,$global);unset($x820,$W820,$S820,$U820);$x821=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x816,JS::toString(\'getMonth\',$global),184,36,\'<image>/09_date.js\');$x820=&$x821[0];list(,$W820,$S820,$U820)=$x821;if(!(is_object($x820)&&isset($x820->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x824=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,36,\'<image>/09_date.js\');$_TypeError=&$x824[0];list(,$WTypeError,$STypeError,$UTypeError)=$x824;$x825=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x826=$x825($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x826->class)&&$x826->class===\'Error\'&&!isset($x826->properties[\'file\'])&&!isset($x826->properties[\'line\'])&&!isset($x826->properties[\'column\'])){$x826->properties[\'file\']=\'<image>/09_date.js\';$x826->properties[\'line\']=184;$x826->properties[\'column\']=36;$x826->attributes[\'file\']=$x826->attributes[\'line\']=$x826->attributes[\'column\']=0;}throw new JSException($x826,184,36,\'<image>/09_date.js\');}$x822=$x820->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,36);$x823=$x822($global,$x816,$x820,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x828=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,52,\'<image>/09_date.js\');$_TypeError=&$x828[0];list(,$WTypeError,$STypeError,$UTypeError)=$x828;$x829=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x830=$x829($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x830->class)&&$x830->class===\'Error\'&&!isset($x830->properties[\'file\'])&&!isset($x830->properties[\'line\'])&&!isset($x830->properties[\'column\'])){$x830->properties[\'file\']=\'<image>/09_date.js\';$x830->properties[\'line\']=184;$x830->properties[\'column\']=52;$x830->attributes[\'file\']=$x830->attributes[\'line\']=$x830->attributes[\'column\']=0;}throw new JSException($x830,184,52,\'<image>/09_date.js\');}$x827=JS::toObject($leThis,$global);unset($x831,$W831,$S831,$U831);$x832=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x827,JS::toString(\'getDate\',$global),184,52,\'<image>/09_date.js\');$x831=&$x832[0];list(,$W831,$S831,$U831)=$x832;if(!(is_object($x831)&&isset($x831->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x835=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,52,\'<image>/09_date.js\');$_TypeError=&$x835[0];list(,$WTypeError,$STypeError,$UTypeError)=$x835;$x836=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x837=$x836($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x837->class)&&$x837->class===\'Error\'&&!isset($x837->properties[\'file\'])&&!isset($x837->properties[\'line\'])&&!isset($x837->properties[\'column\'])){$x837->properties[\'file\']=\'<image>/09_date.js\';$x837->properties[\'line\']=184;$x837->properties[\'column\']=52;$x837->attributes[\'file\']=$x837->attributes[\'line\']=$x837->attributes[\'column\']=0;}throw new JSException($x837,184,52,\'<image>/09_date.js\');}$x833=$x831->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',184,52);$x834=$x833($global,$x827,$x831,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x839=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,16,\'<image>/09_date.js\');$_TypeError=&$x839[0];list(,$WTypeError,$STypeError,$UTypeError)=$x839;$x840=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x841=$x840($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x841->class)&&$x841->class===\'Error\'&&!isset($x841->properties[\'file\'])&&!isset($x841->properties[\'line\'])&&!isset($x841->properties[\'column\'])){$x841->properties[\'file\']=\'<image>/09_date.js\';$x841->properties[\'line\']=185;$x841->properties[\'column\']=16;$x841->attributes[\'file\']=$x841->attributes[\'line\']=$x841->attributes[\'column\']=0;}throw new JSException($x841,185,16,\'<image>/09_date.js\');}$x838=JS::toObject($leThis,$global);unset($x842,$W842,$S842,$U842);$x843=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x838,JS::toString(\'getHours\',$global),185,16,\'<image>/09_date.js\');$x842=&$x843[0];list(,$W842,$S842,$U842)=$x843;if(!(is_object($x842)&&isset($x842->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x846=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,16,\'<image>/09_date.js\');$_TypeError=&$x846[0];list(,$WTypeError,$STypeError,$UTypeError)=$x846;$x847=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x848=$x847($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x848->class)&&$x848->class===\'Error\'&&!isset($x848->properties[\'file\'])&&!isset($x848->properties[\'line\'])&&!isset($x848->properties[\'column\'])){$x848->properties[\'file\']=\'<image>/09_date.js\';$x848->properties[\'line\']=185;$x848->properties[\'column\']=16;$x848->attributes[\'file\']=$x848->attributes[\'line\']=$x848->attributes[\'column\']=0;}throw new JSException($x848,185,16,\'<image>/09_date.js\');}$x844=$x842->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,16);$x845=$x844($global,$x838,$x842,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x850=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/09_date.js\');$_TypeError=&$x850[0];list(,$WTypeError,$STypeError,$UTypeError)=$x850;$x851=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x852=$x851($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x852->class)&&$x852->class===\'Error\'&&!isset($x852->properties[\'file\'])&&!isset($x852->properties[\'line\'])&&!isset($x852->properties[\'column\'])){$x852->properties[\'file\']=\'<image>/09_date.js\';$x852->properties[\'line\']=185;$x852->properties[\'column\']=35;$x852->attributes[\'file\']=$x852->attributes[\'line\']=$x852->attributes[\'column\']=0;}throw new JSException($x852,185,35,\'<image>/09_date.js\');}$x849=JS::toObject($leThis,$global);unset($x853,$W853,$S853,$U853);$x854=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x849,JS::toString(\'getMinutes\',$global),185,35,\'<image>/09_date.js\');$x853=&$x854[0];list(,$W853,$S853,$U853)=$x854;if(!(is_object($x853)&&isset($x853->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x857=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/09_date.js\');$_TypeError=&$x857[0];list(,$WTypeError,$STypeError,$UTypeError)=$x857;$x858=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x859=$x858($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x859->class)&&$x859->class===\'Error\'&&!isset($x859->properties[\'file\'])&&!isset($x859->properties[\'line\'])&&!isset($x859->properties[\'column\'])){$x859->properties[\'file\']=\'<image>/09_date.js\';$x859->properties[\'line\']=185;$x859->properties[\'column\']=35;$x859->attributes[\'file\']=$x859->attributes[\'line\']=$x859->attributes[\'column\']=0;}throw new JSException($x859,185,35,\'<image>/09_date.js\');}$x855=$x853->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',185,35);$x856=$x855($global,$x849,$x853,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x799=clone JS::$objectTemplate;unset($x860,$W860,$S860,$U860);$x861=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),183,16,\'<image>/09_date.js\');$x860=&$x861[0];list(,$W860,$S860,$U860)=$x861;$x800=$x860;$x799->prototype=$x800;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x864=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),183,16,\'<image>/09_date.js\');$_TypeError=&$x864[0];list(,$WTypeError,$STypeError,$UTypeError)=$x864;$x865=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x866=$x865($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x866->class)&&$x866->class===\'Error\'&&!isset($x866->properties[\'file\'])&&!isset($x866->properties[\'line\'])&&!isset($x866->properties[\'column\'])){$x866->properties[\'file\']=\'<image>/09_date.js\';$x866->properties[\'line\']=183;$x866->properties[\'column\']=16;$x866->attributes[\'file\']=$x866->attributes[\'line\']=$x866->attributes[\'column\']=0;}throw new JSException($x866,183,16,\'<image>/09_date.js\');}$x862=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',183,16);$x863=$x862($global,$x799,$_Date,array($x812,$x823,$x834,$x845,$x856,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x800=$x863;if(is_object($x800)&&$x800!==JS::$undefined){$x799=$x800;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x799;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x897 =& $scope->properties['arguments'];
$x897->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x897->properties[$i] = $args[$i];
$x897->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x898 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x898, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x900 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 28, '<image>/09_date.js');
$_TypeError =& $x900[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x900;
$x901 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x902 = $x901($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x902->class) && $x902->class === 'Error' && !isset($x902->properties['file']) && !isset($x902->properties['line']) && !isset($x902->properties['column'])) {$x902->properties['file'] = '<image>/09_date.js';$x902->properties['line'] = 197;$x902->properties['column'] = 28;$x902->attributes['file'] = $x902->attributes['line'] = $x902->attributes['column'] = 0; }
throw new JSException($x902, 197, 28, '<image>/09_date.js');
}
$x899 = JS::toObject($leThis, $global);
unset($x903, $W903, $S903, $U903);
$x904 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x899, JS::toString('getSeconds', $global), 197, 28, '<image>/09_date.js');
$x903 =& $x904[0]; list(,$W903,$S903,$U903) = $x904;
if (!(is_object($x903) && isset($x903->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x907 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 28, '<image>/09_date.js');
$_TypeError =& $x907[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x907;
$x908 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x909 = $x908($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x909->class) && $x909->class === 'Error' && !isset($x909->properties['file']) && !isset($x909->properties['line']) && !isset($x909->properties['column'])) {$x909->properties['file'] = '<image>/09_date.js';$x909->properties['line'] = 197;$x909->properties['column'] = 28;$x909->attributes['file'] = $x909->attributes['line'] = $x909->attributes['column'] = 0; }
throw new JSException($x909, 197, 28, '<image>/09_date.js');
}
$x905 = $x903->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 197, 28);
$x906 = $x905($global, $x899, $x903, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x906;;
};
$x910 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x910, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x912 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 201, 28, '<image>/09_date.js');
$_TypeError =& $x912[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x912;
$x913 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x914 = $x913($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x914->class) && $x914->class === 'Error' && !isset($x914->properties['file']) && !isset($x914->properties['line']) && !isset($x914->properties['column'])) {$x914->properties['file'] = '<image>/09_date.js';$x914->properties['line'] = 201;$x914->properties['column'] = 28;$x914->attributes['file'] = $x914->attributes['line'] = $x914->attributes['column'] = 0; }
throw new JSException($x914, 201, 28, '<image>/09_date.js');
}
$x911 = JS::toObject($leThis, $global);
unset($x915, $W915, $S915, $U915);
$x916 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x911, JS::toString('getMilliseconds', $global), 201, 28, '<image>/09_date.js');
$x915 =& $x916[0]; list(,$W915,$S915,$U915) = $x916;
if (!(is_object($x915) && isset($x915->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x919 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 201, 28, '<image>/09_date.js');
$_TypeError =& $x919[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x919;
$x920 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x921 = $x920($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x921->class) && $x921->class === 'Error' && !isset($x921->properties['file']) && !isset($x921->properties['line']) && !isset($x921->properties['column'])) {$x921->properties['file'] = '<image>/09_date.js';$x921->properties['line'] = 201;$x921->properties['column'] = 28;$x921->attributes['file'] = $x921->attributes['line'] = $x921->attributes['column'] = 0; }
throw new JSException($x921, 201, 28, '<image>/09_date.js');
}
$x917 = $x915->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 201, 28);
$x918 = $x917($global, $x911, $x915, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x918;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x924 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 204, 20, '<image>/09_date.js');
$_Date =& $x924[0]; list(,$WDate,$SDate,$UDate) = $x924;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x925 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 204, 20, '<image>/09_date.js');
$_ReferenceError =& $x925[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x925;
$x926 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 20);
$x927 = $x926($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x927->class) && $x927->class === 'Error' && !isset($x927->properties['file']) && !isset($x927->properties['line']) && !isset($x927->properties['column'])) {$x927->properties['file'] = '<image>/09_date.js';$x927->properties['line'] = 204;$x927->properties['column'] = 20;$x927->attributes['file'] = $x927->attributes['line'] = $x927->attributes['column'] = 0; }
throw new JSException($x927, 204, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x929 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 19, '<image>/09_date.js');
$_TypeError =& $x929[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x929;
$x930 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x931 = $x930($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x931->class) && $x931->class === 'Error' && !isset($x931->properties['file']) && !isset($x931->properties['line']) && !isset($x931->properties['column'])) {$x931->properties['file'] = '<image>/09_date.js';$x931->properties['line'] = 205;$x931->properties['column'] = 19;$x931->attributes['file'] = $x931->attributes['line'] = $x931->attributes['column'] = 0; }
throw new JSException($x931, 205, 19, '<image>/09_date.js');
}
$x928 = JS::toObject($leThis, $global);
unset($x932, $W932, $S932, $U932);
$x933 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x928, JS::toString('getFullYear', $global), 205, 19, '<image>/09_date.js');
$x932 =& $x933[0]; list(,$W932,$S932,$U932) = $x933;
if (!(is_object($x932) && isset($x932->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x936 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 19, '<image>/09_date.js');
$_TypeError =& $x936[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x936;
$x937 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x938 = $x937($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x938->class) && $x938->class === 'Error' && !isset($x938->properties['file']) && !isset($x938->properties['line']) && !isset($x938->properties['column'])) {$x938->properties['file'] = '<image>/09_date.js';$x938->properties['line'] = 205;$x938->properties['column'] = 19;$x938->attributes['file'] = $x938->attributes['line'] = $x938->attributes['column'] = 0; }
throw new JSException($x938, 205, 19, '<image>/09_date.js');
}
$x934 = $x932->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 19);
$x935 = $x934($global, $x928, $x932, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x940 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 36, '<image>/09_date.js');
$_TypeError =& $x940[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x940;
$x941 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x942 = $x941($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x942->class) && $x942->class === 'Error' && !isset($x942->properties['file']) && !isset($x942->properties['line']) && !isset($x942->properties['column'])) {$x942->properties['file'] = '<image>/09_date.js';$x942->properties['line'] = 205;$x942->properties['column'] = 36;$x942->attributes['file'] = $x942->attributes['line'] = $x942->attributes['column'] = 0; }
throw new JSException($x942, 205, 36, '<image>/09_date.js');
}
$x939 = JS::toObject($leThis, $global);
unset($x943, $W943, $S943, $U943);
$x944 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x939, JS::toString('getMonth', $global), 205, 36, '<image>/09_date.js');
$x943 =& $x944[0]; list(,$W943,$S943,$U943) = $x944;
if (!(is_object($x943) && isset($x943->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x947 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 36, '<image>/09_date.js');
$_TypeError =& $x947[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x947;
$x948 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x949 = $x948($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x949->class) && $x949->class === 'Error' && !isset($x949->properties['file']) && !isset($x949->properties['line']) && !isset($x949->properties['column'])) {$x949->properties['file'] = '<image>/09_date.js';$x949->properties['line'] = 205;$x949->properties['column'] = 36;$x949->attributes['file'] = $x949->attributes['line'] = $x949->attributes['column'] = 0; }
throw new JSException($x949, 205, 36, '<image>/09_date.js');
}
$x945 = $x943->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 36);
$x946 = $x945($global, $x939, $x943, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x951 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 52, '<image>/09_date.js');
$_TypeError =& $x951[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x951;
$x952 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x953 = $x952($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x953->class) && $x953->class === 'Error' && !isset($x953->properties['file']) && !isset($x953->properties['line']) && !isset($x953->properties['column'])) {$x953->properties['file'] = '<image>/09_date.js';$x953->properties['line'] = 205;$x953->properties['column'] = 52;$x953->attributes['file'] = $x953->attributes['line'] = $x953->attributes['column'] = 0; }
throw new JSException($x953, 205, 52, '<image>/09_date.js');
}
$x950 = JS::toObject($leThis, $global);
unset($x954, $W954, $S954, $U954);
$x955 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x950, JS::toString('getDate', $global), 205, 52, '<image>/09_date.js');
$x954 =& $x955[0]; list(,$W954,$S954,$U954) = $x955;
if (!(is_object($x954) && isset($x954->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x958 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 52, '<image>/09_date.js');
$_TypeError =& $x958[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x958;
$x959 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x960 = $x959($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x960->class) && $x960->class === 'Error' && !isset($x960->properties['file']) && !isset($x960->properties['line']) && !isset($x960->properties['column'])) {$x960->properties['file'] = '<image>/09_date.js';$x960->properties['line'] = 205;$x960->properties['column'] = 52;$x960->attributes['file'] = $x960->attributes['line'] = $x960->attributes['column'] = 0; }
throw new JSException($x960, 205, 52, '<image>/09_date.js');
}
$x956 = $x954->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 205, 52);
$x957 = $x956($global, $x950, $x954, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x962 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 16, '<image>/09_date.js');
$_TypeError =& $x962[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x962;
$x963 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x964 = $x963($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x964->class) && $x964->class === 'Error' && !isset($x964->properties['file']) && !isset($x964->properties['line']) && !isset($x964->properties['column'])) {$x964->properties['file'] = '<image>/09_date.js';$x964->properties['line'] = 206;$x964->properties['column'] = 16;$x964->attributes['file'] = $x964->attributes['line'] = $x964->attributes['column'] = 0; }
throw new JSException($x964, 206, 16, '<image>/09_date.js');
}
$x961 = JS::toObject($leThis, $global);
unset($x965, $W965, $S965, $U965);
$x966 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x961, JS::toString('getHours', $global), 206, 16, '<image>/09_date.js');
$x965 =& $x966[0]; list(,$W965,$S965,$U965) = $x966;
if (!(is_object($x965) && isset($x965->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x969 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 16, '<image>/09_date.js');
$_TypeError =& $x969[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x969;
$x970 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x971 = $x970($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x971->class) && $x971->class === 'Error' && !isset($x971->properties['file']) && !isset($x971->properties['line']) && !isset($x971->properties['column'])) {$x971->properties['file'] = '<image>/09_date.js';$x971->properties['line'] = 206;$x971->properties['column'] = 16;$x971->attributes['file'] = $x971->attributes['line'] = $x971->attributes['column'] = 0; }
throw new JSException($x971, 206, 16, '<image>/09_date.js');
}
$x967 = $x965->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 206, 16);
$x968 = $x967($global, $x961, $x965, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x922 = clone JS::$objectTemplate;
unset($x972, $W972, $S972, $U972);
$x973 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 204, 16, '<image>/09_date.js');
$x972 =& $x973[0]; list(,$W972,$S972,$U972) = $x973;
$x923 = $x972;
$x922->prototype = $x923;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x976 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 204, 16, '<image>/09_date.js');
$_TypeError =& $x976[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x976;
$x977 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x978 = $x977($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x978->class) && $x978->class === 'Error' && !isset($x978->properties['file']) && !isset($x978->properties['line']) && !isset($x978->properties['column'])) {$x978->properties['file'] = '<image>/09_date.js';$x978->properties['line'] = 204;$x978->properties['column'] = 16;$x978->attributes['file'] = $x978->attributes['line'] = $x978->attributes['column'] = 0; }
throw new JSException($x978, 204, 16, '<image>/09_date.js');
}
$x974 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 204, 16);
$x975 = $x974($global, $x922, $_Date, array($x935, $x946, $x957, $x968, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x923 = $x975;
if (is_object($x923) && $x923 !== JS::$undefined) { $x922 = $x923; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x922;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x897=&$scope->properties[\'arguments\'];$x897->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x897->properties[$i]=$args[$i];$x897->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'minutes\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x898=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x898,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x900=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,28,\'<image>/09_date.js\');$_TypeError=&$x900[0];list(,$WTypeError,$STypeError,$UTypeError)=$x900;$x901=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x902=$x901($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x902->class)&&$x902->class===\'Error\'&&!isset($x902->properties[\'file\'])&&!isset($x902->properties[\'line\'])&&!isset($x902->properties[\'column\'])){$x902->properties[\'file\']=\'<image>/09_date.js\';$x902->properties[\'line\']=197;$x902->properties[\'column\']=28;$x902->attributes[\'file\']=$x902->attributes[\'line\']=$x902->attributes[\'column\']=0;}throw new JSException($x902,197,28,\'<image>/09_date.js\');}$x899=JS::toObject($leThis,$global);unset($x903,$W903,$S903,$U903);$x904=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x899,JS::toString(\'getSeconds\',$global),197,28,\'<image>/09_date.js\');$x903=&$x904[0];list(,$W903,$S903,$U903)=$x904;if(!(is_object($x903)&&isset($x903->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x907=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,28,\'<image>/09_date.js\');$_TypeError=&$x907[0];list(,$WTypeError,$STypeError,$UTypeError)=$x907;$x908=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x909=$x908($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x909->class)&&$x909->class===\'Error\'&&!isset($x909->properties[\'file\'])&&!isset($x909->properties[\'line\'])&&!isset($x909->properties[\'column\'])){$x909->properties[\'file\']=\'<image>/09_date.js\';$x909->properties[\'line\']=197;$x909->properties[\'column\']=28;$x909->attributes[\'file\']=$x909->attributes[\'line\']=$x909->attributes[\'column\']=0;}throw new JSException($x909,197,28,\'<image>/09_date.js\');}$x905=$x903->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',197,28);$x906=$x905($global,$x899,$x903,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x906;}$x910=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x910,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x912=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),201,28,\'<image>/09_date.js\');$_TypeError=&$x912[0];list(,$WTypeError,$STypeError,$UTypeError)=$x912;$x913=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x914=$x913($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x914->class)&&$x914->class===\'Error\'&&!isset($x914->properties[\'file\'])&&!isset($x914->properties[\'line\'])&&!isset($x914->properties[\'column\'])){$x914->properties[\'file\']=\'<image>/09_date.js\';$x914->properties[\'line\']=201;$x914->properties[\'column\']=28;$x914->attributes[\'file\']=$x914->attributes[\'line\']=$x914->attributes[\'column\']=0;}throw new JSException($x914,201,28,\'<image>/09_date.js\');}$x911=JS::toObject($leThis,$global);unset($x915,$W915,$S915,$U915);$x916=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x911,JS::toString(\'getMilliseconds\',$global),201,28,\'<image>/09_date.js\');$x915=&$x916[0];list(,$W915,$S915,$U915)=$x916;if(!(is_object($x915)&&isset($x915->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x919=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),201,28,\'<image>/09_date.js\');$_TypeError=&$x919[0];list(,$WTypeError,$STypeError,$UTypeError)=$x919;$x920=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x921=$x920($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x921->class)&&$x921->class===\'Error\'&&!isset($x921->properties[\'file\'])&&!isset($x921->properties[\'line\'])&&!isset($x921->properties[\'column\'])){$x921->properties[\'file\']=\'<image>/09_date.js\';$x921->properties[\'line\']=201;$x921->properties[\'column\']=28;$x921->attributes[\'file\']=$x921->attributes[\'line\']=$x921->attributes[\'column\']=0;}throw new JSException($x921,201,28,\'<image>/09_date.js\');}$x917=$x915->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',201,28);$x918=$x917($global,$x911,$x915,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x918;}unset($_Date,$WDate,$SDate,$UDate);$x924=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),204,20,\'<image>/09_date.js\');$_Date=&$x924[0];list(,$WDate,$SDate,$UDate)=$x924;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x925=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),204,20,\'<image>/09_date.js\');$_ReferenceError=&$x925[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x925;$x926=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,20);$x927=$x926($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x927->class)&&$x927->class===\'Error\'&&!isset($x927->properties[\'file\'])&&!isset($x927->properties[\'line\'])&&!isset($x927->properties[\'column\'])){$x927->properties[\'file\']=\'<image>/09_date.js\';$x927->properties[\'line\']=204;$x927->properties[\'column\']=20;$x927->attributes[\'file\']=$x927->attributes[\'line\']=$x927->attributes[\'column\']=0;}throw new JSException($x927,204,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x929=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,19,\'<image>/09_date.js\');$_TypeError=&$x929[0];list(,$WTypeError,$STypeError,$UTypeError)=$x929;$x930=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x931=$x930($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x931->class)&&$x931->class===\'Error\'&&!isset($x931->properties[\'file\'])&&!isset($x931->properties[\'line\'])&&!isset($x931->properties[\'column\'])){$x931->properties[\'file\']=\'<image>/09_date.js\';$x931->properties[\'line\']=205;$x931->properties[\'column\']=19;$x931->attributes[\'file\']=$x931->attributes[\'line\']=$x931->attributes[\'column\']=0;}throw new JSException($x931,205,19,\'<image>/09_date.js\');}$x928=JS::toObject($leThis,$global);unset($x932,$W932,$S932,$U932);$x933=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x928,JS::toString(\'getFullYear\',$global),205,19,\'<image>/09_date.js\');$x932=&$x933[0];list(,$W932,$S932,$U932)=$x933;if(!(is_object($x932)&&isset($x932->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x936=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,19,\'<image>/09_date.js\');$_TypeError=&$x936[0];list(,$WTypeError,$STypeError,$UTypeError)=$x936;$x937=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x938=$x937($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x938->class)&&$x938->class===\'Error\'&&!isset($x938->properties[\'file\'])&&!isset($x938->properties[\'line\'])&&!isset($x938->properties[\'column\'])){$x938->properties[\'file\']=\'<image>/09_date.js\';$x938->properties[\'line\']=205;$x938->properties[\'column\']=19;$x938->attributes[\'file\']=$x938->attributes[\'line\']=$x938->attributes[\'column\']=0;}throw new JSException($x938,205,19,\'<image>/09_date.js\');}$x934=$x932->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,19);$x935=$x934($global,$x928,$x932,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x940=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,36,\'<image>/09_date.js\');$_TypeError=&$x940[0];list(,$WTypeError,$STypeError,$UTypeError)=$x940;$x941=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x942=$x941($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x942->class)&&$x942->class===\'Error\'&&!isset($x942->properties[\'file\'])&&!isset($x942->properties[\'line\'])&&!isset($x942->properties[\'column\'])){$x942->properties[\'file\']=\'<image>/09_date.js\';$x942->properties[\'line\']=205;$x942->properties[\'column\']=36;$x942->attributes[\'file\']=$x942->attributes[\'line\']=$x942->attributes[\'column\']=0;}throw new JSException($x942,205,36,\'<image>/09_date.js\');}$x939=JS::toObject($leThis,$global);unset($x943,$W943,$S943,$U943);$x944=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x939,JS::toString(\'getMonth\',$global),205,36,\'<image>/09_date.js\');$x943=&$x944[0];list(,$W943,$S943,$U943)=$x944;if(!(is_object($x943)&&isset($x943->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x947=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,36,\'<image>/09_date.js\');$_TypeError=&$x947[0];list(,$WTypeError,$STypeError,$UTypeError)=$x947;$x948=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x949=$x948($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x949->class)&&$x949->class===\'Error\'&&!isset($x949->properties[\'file\'])&&!isset($x949->properties[\'line\'])&&!isset($x949->properties[\'column\'])){$x949->properties[\'file\']=\'<image>/09_date.js\';$x949->properties[\'line\']=205;$x949->properties[\'column\']=36;$x949->attributes[\'file\']=$x949->attributes[\'line\']=$x949->attributes[\'column\']=0;}throw new JSException($x949,205,36,\'<image>/09_date.js\');}$x945=$x943->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,36);$x946=$x945($global,$x939,$x943,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x951=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,52,\'<image>/09_date.js\');$_TypeError=&$x951[0];list(,$WTypeError,$STypeError,$UTypeError)=$x951;$x952=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x953=$x952($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x953->class)&&$x953->class===\'Error\'&&!isset($x953->properties[\'file\'])&&!isset($x953->properties[\'line\'])&&!isset($x953->properties[\'column\'])){$x953->properties[\'file\']=\'<image>/09_date.js\';$x953->properties[\'line\']=205;$x953->properties[\'column\']=52;$x953->attributes[\'file\']=$x953->attributes[\'line\']=$x953->attributes[\'column\']=0;}throw new JSException($x953,205,52,\'<image>/09_date.js\');}$x950=JS::toObject($leThis,$global);unset($x954,$W954,$S954,$U954);$x955=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x950,JS::toString(\'getDate\',$global),205,52,\'<image>/09_date.js\');$x954=&$x955[0];list(,$W954,$S954,$U954)=$x955;if(!(is_object($x954)&&isset($x954->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x958=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,52,\'<image>/09_date.js\');$_TypeError=&$x958[0];list(,$WTypeError,$STypeError,$UTypeError)=$x958;$x959=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x960=$x959($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x960->class)&&$x960->class===\'Error\'&&!isset($x960->properties[\'file\'])&&!isset($x960->properties[\'line\'])&&!isset($x960->properties[\'column\'])){$x960->properties[\'file\']=\'<image>/09_date.js\';$x960->properties[\'line\']=205;$x960->properties[\'column\']=52;$x960->attributes[\'file\']=$x960->attributes[\'line\']=$x960->attributes[\'column\']=0;}throw new JSException($x960,205,52,\'<image>/09_date.js\');}$x956=$x954->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',205,52);$x957=$x956($global,$x950,$x954,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x962=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),206,16,\'<image>/09_date.js\');$_TypeError=&$x962[0];list(,$WTypeError,$STypeError,$UTypeError)=$x962;$x963=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x964=$x963($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x964->class)&&$x964->class===\'Error\'&&!isset($x964->properties[\'file\'])&&!isset($x964->properties[\'line\'])&&!isset($x964->properties[\'column\'])){$x964->properties[\'file\']=\'<image>/09_date.js\';$x964->properties[\'line\']=206;$x964->properties[\'column\']=16;$x964->attributes[\'file\']=$x964->attributes[\'line\']=$x964->attributes[\'column\']=0;}throw new JSException($x964,206,16,\'<image>/09_date.js\');}$x961=JS::toObject($leThis,$global);unset($x965,$W965,$S965,$U965);$x966=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x961,JS::toString(\'getHours\',$global),206,16,\'<image>/09_date.js\');$x965=&$x966[0];list(,$W965,$S965,$U965)=$x966;if(!(is_object($x965)&&isset($x965->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x969=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),206,16,\'<image>/09_date.js\');$_TypeError=&$x969[0];list(,$WTypeError,$STypeError,$UTypeError)=$x969;$x970=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x971=$x970($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x971->class)&&$x971->class===\'Error\'&&!isset($x971->properties[\'file\'])&&!isset($x971->properties[\'line\'])&&!isset($x971->properties[\'column\'])){$x971->properties[\'file\']=\'<image>/09_date.js\';$x971->properties[\'line\']=206;$x971->properties[\'column\']=16;$x971->attributes[\'file\']=$x971->attributes[\'line\']=$x971->attributes[\'column\']=0;}throw new JSException($x971,206,16,\'<image>/09_date.js\');}$x967=$x965->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',206,16);$x968=$x967($global,$x961,$x965,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x922=clone JS::$objectTemplate;unset($x972,$W972,$S972,$U972);$x973=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),204,16,\'<image>/09_date.js\');$x972=&$x973[0];list(,$W972,$S972,$U972)=$x973;$x923=$x972;$x922->prototype=$x923;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x976=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),204,16,\'<image>/09_date.js\');$_TypeError=&$x976[0];list(,$WTypeError,$STypeError,$UTypeError)=$x976;$x977=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x978=$x977($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x978->class)&&$x978->class===\'Error\'&&!isset($x978->properties[\'file\'])&&!isset($x978->properties[\'line\'])&&!isset($x978->properties[\'column\'])){$x978->properties[\'file\']=\'<image>/09_date.js\';$x978->properties[\'line\']=204;$x978->properties[\'column\']=16;$x978->attributes[\'file\']=$x978->attributes[\'line\']=$x978->attributes[\'column\']=0;}throw new JSException($x978,204,16,\'<image>/09_date.js\');}$x974=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',204,16);$x975=$x974($global,$x922,$_Date,array($x935,$x946,$x957,$x968,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x923=$x975;if(is_object($x923)&&$x923!==JS::$undefined){$x922=$x923;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x922;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_27($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1009 =& $scope->properties['arguments'];
$x1009->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1009->properties[$i] = $args[$i];
$x1009->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x1010 = (((gettype($_minutes) === gettype(JS::$undefined) && $_minutes === JS::$undefined))|| (((is_float($_minutes) || is_int($_minutes)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_minutes == JS::$undefined));
if (JS::toBoolean($x1010, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1012 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 28, '<image>/09_date.js');
$_TypeError =& $x1012[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1012;
$x1013 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x1014 = $x1013($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1014->class) && $x1014->class === 'Error' && !isset($x1014->properties['file']) && !isset($x1014->properties['line']) && !isset($x1014->properties['column'])) {$x1014->properties['file'] = '<image>/09_date.js';$x1014->properties['line'] = 218;$x1014->properties['column'] = 28;$x1014->attributes['file'] = $x1014->attributes['line'] = $x1014->attributes['column'] = 0; }
throw new JSException($x1014, 218, 28, '<image>/09_date.js');
}
$x1011 = JS::toObject($leThis, $global);
unset($x1015, $W1015, $S1015, $U1015);
$x1016 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1011, JS::toString('getMinutes', $global), 218, 28, '<image>/09_date.js');
$x1015 =& $x1016[0]; list(,$W1015,$S1015,$U1015) = $x1016;
if (!(is_object($x1015) && isset($x1015->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1019 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 28, '<image>/09_date.js');
$_TypeError =& $x1019[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1019;
$x1020 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x1021 = $x1020($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1021->class) && $x1021->class === 'Error' && !isset($x1021->properties['file']) && !isset($x1021->properties['line']) && !isset($x1021->properties['column'])) {$x1021->properties['file'] = '<image>/09_date.js';$x1021->properties['line'] = 218;$x1021->properties['column'] = 28;$x1021->attributes['file'] = $x1021->attributes['line'] = $x1021->attributes['column'] = 0; }
throw new JSException($x1021, 218, 28, '<image>/09_date.js');
}
$x1017 = $x1015->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 218, 28);
$x1018 = $x1017($global, $x1011, $x1015, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uminutes) {$global->properties['minutes'] = $_minutes; $_minutes =& $global->properties['minutes']; }
$_minutes = $x1018;;
};
$x1022 = (((gettype($_seconds) === gettype(JS::$undefined) && $_seconds === JS::$undefined))|| (((is_float($_seconds) || is_int($_seconds)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_seconds == JS::$undefined));
if (JS::toBoolean($x1022, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1024 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 28, '<image>/09_date.js');
$_TypeError =& $x1024[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1024;
$x1025 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x1026 = $x1025($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1026->class) && $x1026->class === 'Error' && !isset($x1026->properties['file']) && !isset($x1026->properties['line']) && !isset($x1026->properties['column'])) {$x1026->properties['file'] = '<image>/09_date.js';$x1026->properties['line'] = 222;$x1026->properties['column'] = 28;$x1026->attributes['file'] = $x1026->attributes['line'] = $x1026->attributes['column'] = 0; }
throw new JSException($x1026, 222, 28, '<image>/09_date.js');
}
$x1023 = JS::toObject($leThis, $global);
unset($x1027, $W1027, $S1027, $U1027);
$x1028 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1023, JS::toString('getSeconds', $global), 222, 28, '<image>/09_date.js');
$x1027 =& $x1028[0]; list(,$W1027,$S1027,$U1027) = $x1028;
if (!(is_object($x1027) && isset($x1027->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1031 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 28, '<image>/09_date.js');
$_TypeError =& $x1031[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1031;
$x1032 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x1033 = $x1032($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1033->class) && $x1033->class === 'Error' && !isset($x1033->properties['file']) && !isset($x1033->properties['line']) && !isset($x1033->properties['column'])) {$x1033->properties['file'] = '<image>/09_date.js';$x1033->properties['line'] = 222;$x1033->properties['column'] = 28;$x1033->attributes['file'] = $x1033->attributes['line'] = $x1033->attributes['column'] = 0; }
throw new JSException($x1033, 222, 28, '<image>/09_date.js');
}
$x1029 = $x1027->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 222, 28);
$x1030 = $x1029($global, $x1023, $x1027, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Useconds) {$global->properties['seconds'] = $_seconds; $_seconds =& $global->properties['seconds']; }
$_seconds = $x1030;;
};
$x1034 = (((gettype($_ms) === gettype(JS::$undefined) && $_ms === JS::$undefined))|| (((is_float($_ms) || is_int($_ms)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ms == JS::$undefined));
if (JS::toBoolean($x1034, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1036 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 226, 28, '<image>/09_date.js');
$_TypeError =& $x1036[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1036;
$x1037 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x1038 = $x1037($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1038->class) && $x1038->class === 'Error' && !isset($x1038->properties['file']) && !isset($x1038->properties['line']) && !isset($x1038->properties['column'])) {$x1038->properties['file'] = '<image>/09_date.js';$x1038->properties['line'] = 226;$x1038->properties['column'] = 28;$x1038->attributes['file'] = $x1038->attributes['line'] = $x1038->attributes['column'] = 0; }
throw new JSException($x1038, 226, 28, '<image>/09_date.js');
}
$x1035 = JS::toObject($leThis, $global);
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1035, JS::toString('getMilliseconds', $global), 226, 28, '<image>/09_date.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
if (!(is_object($x1039) && isset($x1039->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1043 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 226, 28, '<image>/09_date.js');
$_TypeError =& $x1043[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1043;
$x1044 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x1045 = $x1044($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1045->class) && $x1045->class === 'Error' && !isset($x1045->properties['file']) && !isset($x1045->properties['line']) && !isset($x1045->properties['column'])) {$x1045->properties['file'] = '<image>/09_date.js';$x1045->properties['line'] = 226;$x1045->properties['column'] = 28;$x1045->attributes['file'] = $x1045->attributes['line'] = $x1045->attributes['column'] = 0; }
throw new JSException($x1045, 226, 28, '<image>/09_date.js');
}
$x1041 = $x1039->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 226, 28);
$x1042 = $x1041($global, $x1035, $x1039, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ums) {$global->properties['ms'] = $_ms; $_ms =& $global->properties['ms']; }
$_ms = $x1042;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1048 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 229, 20, '<image>/09_date.js');
$_Date =& $x1048[0]; list(,$WDate,$SDate,$UDate) = $x1048;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1049 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 229, 20, '<image>/09_date.js');
$_ReferenceError =& $x1049[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1049;
$x1050 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 20);
$x1051 = $x1050($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1051->class) && $x1051->class === 'Error' && !isset($x1051->properties['file']) && !isset($x1051->properties['line']) && !isset($x1051->properties['column'])) {$x1051->properties['file'] = '<image>/09_date.js';$x1051->properties['line'] = 229;$x1051->properties['column'] = 20;$x1051->attributes['file'] = $x1051->attributes['line'] = $x1051->attributes['column'] = 0; }
throw new JSException($x1051, 229, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1053 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 19, '<image>/09_date.js');
$_TypeError =& $x1053[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1053;
$x1054 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1055 = $x1054($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1055->class) && $x1055->class === 'Error' && !isset($x1055->properties['file']) && !isset($x1055->properties['line']) && !isset($x1055->properties['column'])) {$x1055->properties['file'] = '<image>/09_date.js';$x1055->properties['line'] = 230;$x1055->properties['column'] = 19;$x1055->attributes['file'] = $x1055->attributes['line'] = $x1055->attributes['column'] = 0; }
throw new JSException($x1055, 230, 19, '<image>/09_date.js');
}
$x1052 = JS::toObject($leThis, $global);
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1052, JS::toString('getFullYear', $global), 230, 19, '<image>/09_date.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
if (!(is_object($x1056) && isset($x1056->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1060 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 19, '<image>/09_date.js');
$_TypeError =& $x1060[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1060;
$x1061 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1062 = $x1061($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1062->class) && $x1062->class === 'Error' && !isset($x1062->properties['file']) && !isset($x1062->properties['line']) && !isset($x1062->properties['column'])) {$x1062->properties['file'] = '<image>/09_date.js';$x1062->properties['line'] = 230;$x1062->properties['column'] = 19;$x1062->attributes['file'] = $x1062->attributes['line'] = $x1062->attributes['column'] = 0; }
throw new JSException($x1062, 230, 19, '<image>/09_date.js');
}
$x1058 = $x1056->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 19);
$x1059 = $x1058($global, $x1052, $x1056, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1064 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 36, '<image>/09_date.js');
$_TypeError =& $x1064[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1064;
$x1065 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1066 = $x1065($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1066->class) && $x1066->class === 'Error' && !isset($x1066->properties['file']) && !isset($x1066->properties['line']) && !isset($x1066->properties['column'])) {$x1066->properties['file'] = '<image>/09_date.js';$x1066->properties['line'] = 230;$x1066->properties['column'] = 36;$x1066->attributes['file'] = $x1066->attributes['line'] = $x1066->attributes['column'] = 0; }
throw new JSException($x1066, 230, 36, '<image>/09_date.js');
}
$x1063 = JS::toObject($leThis, $global);
unset($x1067, $W1067, $S1067, $U1067);
$x1068 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1063, JS::toString('getMonth', $global), 230, 36, '<image>/09_date.js');
$x1067 =& $x1068[0]; list(,$W1067,$S1067,$U1067) = $x1068;
if (!(is_object($x1067) && isset($x1067->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1071 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 36, '<image>/09_date.js');
$_TypeError =& $x1071[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1071;
$x1072 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1073 = $x1072($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1073->class) && $x1073->class === 'Error' && !isset($x1073->properties['file']) && !isset($x1073->properties['line']) && !isset($x1073->properties['column'])) {$x1073->properties['file'] = '<image>/09_date.js';$x1073->properties['line'] = 230;$x1073->properties['column'] = 36;$x1073->attributes['file'] = $x1073->attributes['line'] = $x1073->attributes['column'] = 0; }
throw new JSException($x1073, 230, 36, '<image>/09_date.js');
}
$x1069 = $x1067->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 36);
$x1070 = $x1069($global, $x1063, $x1067, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1075 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 52, '<image>/09_date.js');
$_TypeError =& $x1075[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1075;
$x1076 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1077 = $x1076($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1077->class) && $x1077->class === 'Error' && !isset($x1077->properties['file']) && !isset($x1077->properties['line']) && !isset($x1077->properties['column'])) {$x1077->properties['file'] = '<image>/09_date.js';$x1077->properties['line'] = 230;$x1077->properties['column'] = 52;$x1077->attributes['file'] = $x1077->attributes['line'] = $x1077->attributes['column'] = 0; }
throw new JSException($x1077, 230, 52, '<image>/09_date.js');
}
$x1074 = JS::toObject($leThis, $global);
unset($x1078, $W1078, $S1078, $U1078);
$x1079 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1074, JS::toString('getDate', $global), 230, 52, '<image>/09_date.js');
$x1078 =& $x1079[0]; list(,$W1078,$S1078,$U1078) = $x1079;
if (!(is_object($x1078) && isset($x1078->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1082 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 230, 52, '<image>/09_date.js');
$_TypeError =& $x1082[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1082;
$x1083 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1084 = $x1083($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1084->class) && $x1084->class === 'Error' && !isset($x1084->properties['file']) && !isset($x1084->properties['line']) && !isset($x1084->properties['column'])) {$x1084->properties['file'] = '<image>/09_date.js';$x1084->properties['line'] = 230;$x1084->properties['column'] = 52;$x1084->attributes['file'] = $x1084->attributes['line'] = $x1084->attributes['column'] = 0; }
throw new JSException($x1084, 230, 52, '<image>/09_date.js');
}
$x1080 = $x1078->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 230, 52);
$x1081 = $x1080($global, $x1074, $x1078, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1046 = clone JS::$objectTemplate;
unset($x1085, $W1085, $S1085, $U1085);
$x1086 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 229, 16, '<image>/09_date.js');
$x1085 =& $x1086[0]; list(,$W1085,$S1085,$U1085) = $x1086;
$x1047 = $x1085;
$x1046->prototype = $x1047;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1089 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 16, '<image>/09_date.js');
$_TypeError =& $x1089[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1089;
$x1090 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1091 = $x1090($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1091->class) && $x1091->class === 'Error' && !isset($x1091->properties['file']) && !isset($x1091->properties['line']) && !isset($x1091->properties['column'])) {$x1091->properties['file'] = '<image>/09_date.js';$x1091->properties['line'] = 229;$x1091->properties['column'] = 16;$x1091->attributes['file'] = $x1091->attributes['line'] = $x1091->attributes['column'] = 0; }
throw new JSException($x1091, 229, 16, '<image>/09_date.js');
}
$x1087 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 229, 16);
$x1088 = $x1087($global, $x1046, $_Date, array($x1059, $x1070, $x1081, $_hours, $_minutes, $_seconds, $_ms), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1047 = $x1088;
if (is_object($x1047) && $x1047 !== JS::$undefined) { $x1046 = $x1047; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1046;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_27($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1009=&$scope->properties[\'arguments\'];$x1009->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1009->properties[$i]=$args[$i];$x1009->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'hours\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_hours=&$scope->properties[\'hours\'];$Uhours=FALSE;$scope->properties[\'minutes\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_minutes=&$scope->properties[\'minutes\'];$Uminutes=FALSE;$scope->properties[\'seconds\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_seconds=&$scope->properties[\'seconds\'];$Useconds=FALSE;$scope->properties[\'ms\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_ms=&$scope->properties[\'ms\'];$Ums=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1010=(((gettype($_minutes)===gettype(JS::$undefined)&&$_minutes===JS::$undefined))||(((is_float($_minutes)||is_int($_minutes))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_minutes==JS::$undefined));if(JS::toBoolean($x1010,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1012=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,28,\'<image>/09_date.js\');$_TypeError=&$x1012[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1012;$x1013=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x1014=$x1013($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1014->class)&&$x1014->class===\'Error\'&&!isset($x1014->properties[\'file\'])&&!isset($x1014->properties[\'line\'])&&!isset($x1014->properties[\'column\'])){$x1014->properties[\'file\']=\'<image>/09_date.js\';$x1014->properties[\'line\']=218;$x1014->properties[\'column\']=28;$x1014->attributes[\'file\']=$x1014->attributes[\'line\']=$x1014->attributes[\'column\']=0;}throw new JSException($x1014,218,28,\'<image>/09_date.js\');}$x1011=JS::toObject($leThis,$global);unset($x1015,$W1015,$S1015,$U1015);$x1016=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1011,JS::toString(\'getMinutes\',$global),218,28,\'<image>/09_date.js\');$x1015=&$x1016[0];list(,$W1015,$S1015,$U1015)=$x1016;if(!(is_object($x1015)&&isset($x1015->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1019=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,28,\'<image>/09_date.js\');$_TypeError=&$x1019[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1019;$x1020=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x1021=$x1020($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1021->class)&&$x1021->class===\'Error\'&&!isset($x1021->properties[\'file\'])&&!isset($x1021->properties[\'line\'])&&!isset($x1021->properties[\'column\'])){$x1021->properties[\'file\']=\'<image>/09_date.js\';$x1021->properties[\'line\']=218;$x1021->properties[\'column\']=28;$x1021->attributes[\'file\']=$x1021->attributes[\'line\']=$x1021->attributes[\'column\']=0;}throw new JSException($x1021,218,28,\'<image>/09_date.js\');}$x1017=$x1015->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',218,28);$x1018=$x1017($global,$x1011,$x1015,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uminutes){$global->properties[\'minutes\']=$_minutes;$_minutes=&$global->properties[\'minutes\'];}$_minutes=$x1018;}$x1022=(((gettype($_seconds)===gettype(JS::$undefined)&&$_seconds===JS::$undefined))||(((is_float($_seconds)||is_int($_seconds))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_seconds==JS::$undefined));if(JS::toBoolean($x1022,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1024=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,28,\'<image>/09_date.js\');$_TypeError=&$x1024[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1024;$x1025=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x1026=$x1025($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1026->class)&&$x1026->class===\'Error\'&&!isset($x1026->properties[\'file\'])&&!isset($x1026->properties[\'line\'])&&!isset($x1026->properties[\'column\'])){$x1026->properties[\'file\']=\'<image>/09_date.js\';$x1026->properties[\'line\']=222;$x1026->properties[\'column\']=28;$x1026->attributes[\'file\']=$x1026->attributes[\'line\']=$x1026->attributes[\'column\']=0;}throw new JSException($x1026,222,28,\'<image>/09_date.js\');}$x1023=JS::toObject($leThis,$global);unset($x1027,$W1027,$S1027,$U1027);$x1028=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1023,JS::toString(\'getSeconds\',$global),222,28,\'<image>/09_date.js\');$x1027=&$x1028[0];list(,$W1027,$S1027,$U1027)=$x1028;if(!(is_object($x1027)&&isset($x1027->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1031=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,28,\'<image>/09_date.js\');$_TypeError=&$x1031[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1031;$x1032=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x1033=$x1032($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1033->class)&&$x1033->class===\'Error\'&&!isset($x1033->properties[\'file\'])&&!isset($x1033->properties[\'line\'])&&!isset($x1033->properties[\'column\'])){$x1033->properties[\'file\']=\'<image>/09_date.js\';$x1033->properties[\'line\']=222;$x1033->properties[\'column\']=28;$x1033->attributes[\'file\']=$x1033->attributes[\'line\']=$x1033->attributes[\'column\']=0;}throw new JSException($x1033,222,28,\'<image>/09_date.js\');}$x1029=$x1027->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',222,28);$x1030=$x1029($global,$x1023,$x1027,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Useconds){$global->properties[\'seconds\']=$_seconds;$_seconds=&$global->properties[\'seconds\'];}$_seconds=$x1030;}$x1034=(((gettype($_ms)===gettype(JS::$undefined)&&$_ms===JS::$undefined))||(((is_float($_ms)||is_int($_ms))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ms==JS::$undefined));if(JS::toBoolean($x1034,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1036=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),226,28,\'<image>/09_date.js\');$_TypeError=&$x1036[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1036;$x1037=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x1038=$x1037($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1038->class)&&$x1038->class===\'Error\'&&!isset($x1038->properties[\'file\'])&&!isset($x1038->properties[\'line\'])&&!isset($x1038->properties[\'column\'])){$x1038->properties[\'file\']=\'<image>/09_date.js\';$x1038->properties[\'line\']=226;$x1038->properties[\'column\']=28;$x1038->attributes[\'file\']=$x1038->attributes[\'line\']=$x1038->attributes[\'column\']=0;}throw new JSException($x1038,226,28,\'<image>/09_date.js\');}$x1035=JS::toObject($leThis,$global);unset($x1039,$W1039,$S1039,$U1039);$x1040=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1035,JS::toString(\'getMilliseconds\',$global),226,28,\'<image>/09_date.js\');$x1039=&$x1040[0];list(,$W1039,$S1039,$U1039)=$x1040;if(!(is_object($x1039)&&isset($x1039->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1043=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),226,28,\'<image>/09_date.js\');$_TypeError=&$x1043[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1043;$x1044=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x1045=$x1044($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1045->class)&&$x1045->class===\'Error\'&&!isset($x1045->properties[\'file\'])&&!isset($x1045->properties[\'line\'])&&!isset($x1045->properties[\'column\'])){$x1045->properties[\'file\']=\'<image>/09_date.js\';$x1045->properties[\'line\']=226;$x1045->properties[\'column\']=28;$x1045->attributes[\'file\']=$x1045->attributes[\'line\']=$x1045->attributes[\'column\']=0;}throw new JSException($x1045,226,28,\'<image>/09_date.js\');}$x1041=$x1039->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',226,28);$x1042=$x1041($global,$x1035,$x1039,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ums){$global->properties[\'ms\']=$_ms;$_ms=&$global->properties[\'ms\'];}$_ms=$x1042;}unset($_Date,$WDate,$SDate,$UDate);$x1048=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),229,20,\'<image>/09_date.js\');$_Date=&$x1048[0];list(,$WDate,$SDate,$UDate)=$x1048;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1049=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),229,20,\'<image>/09_date.js\');$_ReferenceError=&$x1049[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1049;$x1050=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,20);$x1051=$x1050($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1051->class)&&$x1051->class===\'Error\'&&!isset($x1051->properties[\'file\'])&&!isset($x1051->properties[\'line\'])&&!isset($x1051->properties[\'column\'])){$x1051->properties[\'file\']=\'<image>/09_date.js\';$x1051->properties[\'line\']=229;$x1051->properties[\'column\']=20;$x1051->attributes[\'file\']=$x1051->attributes[\'line\']=$x1051->attributes[\'column\']=0;}throw new JSException($x1051,229,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1053=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,19,\'<image>/09_date.js\');$_TypeError=&$x1053[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1053;$x1054=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1055=$x1054($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1055->class)&&$x1055->class===\'Error\'&&!isset($x1055->properties[\'file\'])&&!isset($x1055->properties[\'line\'])&&!isset($x1055->properties[\'column\'])){$x1055->properties[\'file\']=\'<image>/09_date.js\';$x1055->properties[\'line\']=230;$x1055->properties[\'column\']=19;$x1055->attributes[\'file\']=$x1055->attributes[\'line\']=$x1055->attributes[\'column\']=0;}throw new JSException($x1055,230,19,\'<image>/09_date.js\');}$x1052=JS::toObject($leThis,$global);unset($x1056,$W1056,$S1056,$U1056);$x1057=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1052,JS::toString(\'getFullYear\',$global),230,19,\'<image>/09_date.js\');$x1056=&$x1057[0];list(,$W1056,$S1056,$U1056)=$x1057;if(!(is_object($x1056)&&isset($x1056->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1060=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,19,\'<image>/09_date.js\');$_TypeError=&$x1060[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1060;$x1061=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1062=$x1061($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1062->class)&&$x1062->class===\'Error\'&&!isset($x1062->properties[\'file\'])&&!isset($x1062->properties[\'line\'])&&!isset($x1062->properties[\'column\'])){$x1062->properties[\'file\']=\'<image>/09_date.js\';$x1062->properties[\'line\']=230;$x1062->properties[\'column\']=19;$x1062->attributes[\'file\']=$x1062->attributes[\'line\']=$x1062->attributes[\'column\']=0;}throw new JSException($x1062,230,19,\'<image>/09_date.js\');}$x1058=$x1056->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,19);$x1059=$x1058($global,$x1052,$x1056,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1064=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,36,\'<image>/09_date.js\');$_TypeError=&$x1064[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1064;$x1065=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1066=$x1065($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1066->class)&&$x1066->class===\'Error\'&&!isset($x1066->properties[\'file\'])&&!isset($x1066->properties[\'line\'])&&!isset($x1066->properties[\'column\'])){$x1066->properties[\'file\']=\'<image>/09_date.js\';$x1066->properties[\'line\']=230;$x1066->properties[\'column\']=36;$x1066->attributes[\'file\']=$x1066->attributes[\'line\']=$x1066->attributes[\'column\']=0;}throw new JSException($x1066,230,36,\'<image>/09_date.js\');}$x1063=JS::toObject($leThis,$global);unset($x1067,$W1067,$S1067,$U1067);$x1068=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1063,JS::toString(\'getMonth\',$global),230,36,\'<image>/09_date.js\');$x1067=&$x1068[0];list(,$W1067,$S1067,$U1067)=$x1068;if(!(is_object($x1067)&&isset($x1067->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1071=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,36,\'<image>/09_date.js\');$_TypeError=&$x1071[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1071;$x1072=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1073=$x1072($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1073->class)&&$x1073->class===\'Error\'&&!isset($x1073->properties[\'file\'])&&!isset($x1073->properties[\'line\'])&&!isset($x1073->properties[\'column\'])){$x1073->properties[\'file\']=\'<image>/09_date.js\';$x1073->properties[\'line\']=230;$x1073->properties[\'column\']=36;$x1073->attributes[\'file\']=$x1073->attributes[\'line\']=$x1073->attributes[\'column\']=0;}throw new JSException($x1073,230,36,\'<image>/09_date.js\');}$x1069=$x1067->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,36);$x1070=$x1069($global,$x1063,$x1067,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1075=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,52,\'<image>/09_date.js\');$_TypeError=&$x1075[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1075;$x1076=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1077=$x1076($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1077->class)&&$x1077->class===\'Error\'&&!isset($x1077->properties[\'file\'])&&!isset($x1077->properties[\'line\'])&&!isset($x1077->properties[\'column\'])){$x1077->properties[\'file\']=\'<image>/09_date.js\';$x1077->properties[\'line\']=230;$x1077->properties[\'column\']=52;$x1077->attributes[\'file\']=$x1077->attributes[\'line\']=$x1077->attributes[\'column\']=0;}throw new JSException($x1077,230,52,\'<image>/09_date.js\');}$x1074=JS::toObject($leThis,$global);unset($x1078,$W1078,$S1078,$U1078);$x1079=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1074,JS::toString(\'getDate\',$global),230,52,\'<image>/09_date.js\');$x1078=&$x1079[0];list(,$W1078,$S1078,$U1078)=$x1079;if(!(is_object($x1078)&&isset($x1078->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1082=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),230,52,\'<image>/09_date.js\');$_TypeError=&$x1082[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1082;$x1083=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1084=$x1083($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1084->class)&&$x1084->class===\'Error\'&&!isset($x1084->properties[\'file\'])&&!isset($x1084->properties[\'line\'])&&!isset($x1084->properties[\'column\'])){$x1084->properties[\'file\']=\'<image>/09_date.js\';$x1084->properties[\'line\']=230;$x1084->properties[\'column\']=52;$x1084->attributes[\'file\']=$x1084->attributes[\'line\']=$x1084->attributes[\'column\']=0;}throw new JSException($x1084,230,52,\'<image>/09_date.js\');}$x1080=$x1078->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',230,52);$x1081=$x1080($global,$x1074,$x1078,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1046=clone JS::$objectTemplate;unset($x1085,$W1085,$S1085,$U1085);$x1086=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),229,16,\'<image>/09_date.js\');$x1085=&$x1086[0];list(,$W1085,$S1085,$U1085)=$x1086;$x1047=$x1085;$x1046->prototype=$x1047;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1089=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),229,16,\'<image>/09_date.js\');$_TypeError=&$x1089[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1089;$x1090=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1091=$x1090($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1091->class)&&$x1091->class===\'Error\'&&!isset($x1091->properties[\'file\'])&&!isset($x1091->properties[\'line\'])&&!isset($x1091->properties[\'column\'])){$x1091->properties[\'file\']=\'<image>/09_date.js\';$x1091->properties[\'line\']=229;$x1091->properties[\'column\']=16;$x1091->attributes[\'file\']=$x1091->attributes[\'line\']=$x1091->attributes[\'column\']=0;}throw new JSException($x1091,229,16,\'<image>/09_date.js\');}$x1087=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',229,16);$x1088=$x1087($global,$x1046,$_Date,array($x1059,$x1070,$x1081,$_hours,$_minutes,$_seconds,$_ms),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1047=$x1088;if(is_object($x1047)&&$x1047!==JS::$undefined){$x1046=$x1047;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1046;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_28($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1122 =& $scope->properties['arguments'];
$x1122->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1122->properties[$i] = $args[$i];
$x1122->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['date'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_Date, $WDate, $SDate, $UDate);
$x1125 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 242, 20, '<image>/09_date.js');
$_Date =& $x1125[0]; list(,$WDate,$SDate,$UDate) = $x1125;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1126 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 242, 20, '<image>/09_date.js');
$_ReferenceError =& $x1126[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1126;
$x1127 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 20);
$x1128 = $x1127($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1128->class) && $x1128->class === 'Error' && !isset($x1128->properties['file']) && !isset($x1128->properties['line']) && !isset($x1128->properties['column'])) {$x1128->properties['file'] = '<image>/09_date.js';$x1128->properties['line'] = 242;$x1128->properties['column'] = 20;$x1128->attributes['file'] = $x1128->attributes['line'] = $x1128->attributes['column'] = 0; }
throw new JSException($x1128, 242, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1130 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 19, '<image>/09_date.js');
$_TypeError =& $x1130[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1130;
$x1131 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1132 = $x1131($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1132->class) && $x1132->class === 'Error' && !isset($x1132->properties['file']) && !isset($x1132->properties['line']) && !isset($x1132->properties['column'])) {$x1132->properties['file'] = '<image>/09_date.js';$x1132->properties['line'] = 243;$x1132->properties['column'] = 19;$x1132->attributes['file'] = $x1132->attributes['line'] = $x1132->attributes['column'] = 0; }
throw new JSException($x1132, 243, 19, '<image>/09_date.js');
}
$x1129 = JS::toObject($leThis, $global);
unset($x1133, $W1133, $S1133, $U1133);
$x1134 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1129, JS::toString('getFullYear', $global), 243, 19, '<image>/09_date.js');
$x1133 =& $x1134[0]; list(,$W1133,$S1133,$U1133) = $x1134;
if (!(is_object($x1133) && isset($x1133->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1137 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 19, '<image>/09_date.js');
$_TypeError =& $x1137[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1137;
$x1138 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1139 = $x1138($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1139->class) && $x1139->class === 'Error' && !isset($x1139->properties['file']) && !isset($x1139->properties['line']) && !isset($x1139->properties['column'])) {$x1139->properties['file'] = '<image>/09_date.js';$x1139->properties['line'] = 243;$x1139->properties['column'] = 19;$x1139->attributes['file'] = $x1139->attributes['line'] = $x1139->attributes['column'] = 0; }
throw new JSException($x1139, 243, 19, '<image>/09_date.js');
}
$x1135 = $x1133->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 19);
$x1136 = $x1135($global, $x1129, $x1133, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1141 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 36, '<image>/09_date.js');
$_TypeError =& $x1141[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1141;
$x1142 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1143 = $x1142($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1143->class) && $x1143->class === 'Error' && !isset($x1143->properties['file']) && !isset($x1143->properties['line']) && !isset($x1143->properties['column'])) {$x1143->properties['file'] = '<image>/09_date.js';$x1143->properties['line'] = 243;$x1143->properties['column'] = 36;$x1143->attributes['file'] = $x1143->attributes['line'] = $x1143->attributes['column'] = 0; }
throw new JSException($x1143, 243, 36, '<image>/09_date.js');
}
$x1140 = JS::toObject($leThis, $global);
unset($x1144, $W1144, $S1144, $U1144);
$x1145 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1140, JS::toString('getMonth', $global), 243, 36, '<image>/09_date.js');
$x1144 =& $x1145[0]; list(,$W1144,$S1144,$U1144) = $x1145;
if (!(is_object($x1144) && isset($x1144->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1148 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 36, '<image>/09_date.js');
$_TypeError =& $x1148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1148;
$x1149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1150 = $x1149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1150->class) && $x1150->class === 'Error' && !isset($x1150->properties['file']) && !isset($x1150->properties['line']) && !isset($x1150->properties['column'])) {$x1150->properties['file'] = '<image>/09_date.js';$x1150->properties['line'] = 243;$x1150->properties['column'] = 36;$x1150->attributes['file'] = $x1150->attributes['line'] = $x1150->attributes['column'] = 0; }
throw new JSException($x1150, 243, 36, '<image>/09_date.js');
}
$x1146 = $x1144->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 243, 36);
$x1147 = $x1146($global, $x1140, $x1144, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1152 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 16, '<image>/09_date.js');
$_TypeError =& $x1152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1152;
$x1153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1154 = $x1153($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1154->class) && $x1154->class === 'Error' && !isset($x1154->properties['file']) && !isset($x1154->properties['line']) && !isset($x1154->properties['column'])) {$x1154->properties['file'] = '<image>/09_date.js';$x1154->properties['line'] = 244;$x1154->properties['column'] = 16;$x1154->attributes['file'] = $x1154->attributes['line'] = $x1154->attributes['column'] = 0; }
throw new JSException($x1154, 244, 16, '<image>/09_date.js');
}
$x1151 = JS::toObject($leThis, $global);
unset($x1155, $W1155, $S1155, $U1155);
$x1156 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1151, JS::toString('getHours', $global), 244, 16, '<image>/09_date.js');
$x1155 =& $x1156[0]; list(,$W1155,$S1155,$U1155) = $x1156;
if (!(is_object($x1155) && isset($x1155->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1159 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 16, '<image>/09_date.js');
$_TypeError =& $x1159[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1159;
$x1160 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1161 = $x1160($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1161->class) && $x1161->class === 'Error' && !isset($x1161->properties['file']) && !isset($x1161->properties['line']) && !isset($x1161->properties['column'])) {$x1161->properties['file'] = '<image>/09_date.js';$x1161->properties['line'] = 244;$x1161->properties['column'] = 16;$x1161->attributes['file'] = $x1161->attributes['line'] = $x1161->attributes['column'] = 0; }
throw new JSException($x1161, 244, 16, '<image>/09_date.js');
}
$x1157 = $x1155->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 16);
$x1158 = $x1157($global, $x1151, $x1155, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1163 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 35, '<image>/09_date.js');
$_TypeError =& $x1163[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1163;
$x1164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1165 = $x1164($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1165->class) && $x1165->class === 'Error' && !isset($x1165->properties['file']) && !isset($x1165->properties['line']) && !isset($x1165->properties['column'])) {$x1165->properties['file'] = '<image>/09_date.js';$x1165->properties['line'] = 244;$x1165->properties['column'] = 35;$x1165->attributes['file'] = $x1165->attributes['line'] = $x1165->attributes['column'] = 0; }
throw new JSException($x1165, 244, 35, '<image>/09_date.js');
}
$x1162 = JS::toObject($leThis, $global);
unset($x1166, $W1166, $S1166, $U1166);
$x1167 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1162, JS::toString('getMinutes', $global), 244, 35, '<image>/09_date.js');
$x1166 =& $x1167[0]; list(,$W1166,$S1166,$U1166) = $x1167;
if (!(is_object($x1166) && isset($x1166->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1170 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 35, '<image>/09_date.js');
$_TypeError =& $x1170[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1170;
$x1171 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1172 = $x1171($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1172->class) && $x1172->class === 'Error' && !isset($x1172->properties['file']) && !isset($x1172->properties['line']) && !isset($x1172->properties['column'])) {$x1172->properties['file'] = '<image>/09_date.js';$x1172->properties['line'] = 244;$x1172->properties['column'] = 35;$x1172->attributes['file'] = $x1172->attributes['line'] = $x1172->attributes['column'] = 0; }
throw new JSException($x1172, 244, 35, '<image>/09_date.js');
}
$x1168 = $x1166->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 35);
$x1169 = $x1168($global, $x1162, $x1166, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1174 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 54, '<image>/09_date.js');
$_TypeError =& $x1174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1174;
$x1175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1176 = $x1175($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1176->class) && $x1176->class === 'Error' && !isset($x1176->properties['file']) && !isset($x1176->properties['line']) && !isset($x1176->properties['column'])) {$x1176->properties['file'] = '<image>/09_date.js';$x1176->properties['line'] = 244;$x1176->properties['column'] = 54;$x1176->attributes['file'] = $x1176->attributes['line'] = $x1176->attributes['column'] = 0; }
throw new JSException($x1176, 244, 54, '<image>/09_date.js');
}
$x1173 = JS::toObject($leThis, $global);
unset($x1177, $W1177, $S1177, $U1177);
$x1178 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1173, JS::toString('getSeconds', $global), 244, 54, '<image>/09_date.js');
$x1177 =& $x1178[0]; list(,$W1177,$S1177,$U1177) = $x1178;
if (!(is_object($x1177) && isset($x1177->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1181 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 54, '<image>/09_date.js');
$_TypeError =& $x1181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1181;
$x1182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1183 = $x1182($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1183->class) && $x1183->class === 'Error' && !isset($x1183->properties['file']) && !isset($x1183->properties['line']) && !isset($x1183->properties['column'])) {$x1183->properties['file'] = '<image>/09_date.js';$x1183->properties['line'] = 244;$x1183->properties['column'] = 54;$x1183->attributes['file'] = $x1183->attributes['line'] = $x1183->attributes['column'] = 0; }
throw new JSException($x1183, 244, 54, '<image>/09_date.js');
}
$x1179 = $x1177->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 54);
$x1180 = $x1179($global, $x1173, $x1177, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1185 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 78, '<image>/09_date.js');
$_TypeError =& $x1185[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1185;
$x1186 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1187 = $x1186($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1187->class) && $x1187->class === 'Error' && !isset($x1187->properties['file']) && !isset($x1187->properties['line']) && !isset($x1187->properties['column'])) {$x1187->properties['file'] = '<image>/09_date.js';$x1187->properties['line'] = 244;$x1187->properties['column'] = 78;$x1187->attributes['file'] = $x1187->attributes['line'] = $x1187->attributes['column'] = 0; }
throw new JSException($x1187, 244, 78, '<image>/09_date.js');
}
$x1184 = JS::toObject($leThis, $global);
unset($x1188, $W1188, $S1188, $U1188);
$x1189 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1184, JS::toString('getMilliseconds', $global), 244, 78, '<image>/09_date.js');
$x1188 =& $x1189[0]; list(,$W1188,$S1188,$U1188) = $x1189;
if (!(is_object($x1188) && isset($x1188->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1192 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 78, '<image>/09_date.js');
$_TypeError =& $x1192[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1192;
$x1193 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1194 = $x1193($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1194->class) && $x1194->class === 'Error' && !isset($x1194->properties['file']) && !isset($x1194->properties['line']) && !isset($x1194->properties['column'])) {$x1194->properties['file'] = '<image>/09_date.js';$x1194->properties['line'] = 244;$x1194->properties['column'] = 78;$x1194->attributes['file'] = $x1194->attributes['line'] = $x1194->attributes['column'] = 0; }
throw new JSException($x1194, 244, 78, '<image>/09_date.js');
}
$x1190 = $x1188->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 244, 78);
$x1191 = $x1190($global, $x1184, $x1188, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1123 = clone JS::$objectTemplate;
unset($x1195, $W1195, $S1195, $U1195);
$x1196 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 242, 16, '<image>/09_date.js');
$x1195 =& $x1196[0]; list(,$W1195,$S1195,$U1195) = $x1196;
$x1124 = $x1195;
$x1123->prototype = $x1124;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1199 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 242, 16, '<image>/09_date.js');
$_TypeError =& $x1199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1199;
$x1200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1201 = $x1200($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1201->class) && $x1201->class === 'Error' && !isset($x1201->properties['file']) && !isset($x1201->properties['line']) && !isset($x1201->properties['column'])) {$x1201->properties['file'] = '<image>/09_date.js';$x1201->properties['line'] = 242;$x1201->properties['column'] = 16;$x1201->attributes['file'] = $x1201->attributes['line'] = $x1201->attributes['column'] = 0; }
throw new JSException($x1201, 242, 16, '<image>/09_date.js');
}
$x1197 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 242, 16);
$x1198 = $x1197($global, $x1123, $_Date, array($x1136, $x1147, $_date, $x1158, $x1169, $x1180, $x1191), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1124 = $x1198;
if (is_object($x1124) && $x1124 !== JS::$undefined) { $x1123 = $x1124; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1123;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_28($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1122=&$scope->properties[\'arguments\'];$x1122->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1122->properties[$i]=$args[$i];$x1122->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'date\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_Date,$WDate,$SDate,$UDate);$x1125=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),242,20,\'<image>/09_date.js\');$_Date=&$x1125[0];list(,$WDate,$SDate,$UDate)=$x1125;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1126=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),242,20,\'<image>/09_date.js\');$_ReferenceError=&$x1126[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1126;$x1127=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,20);$x1128=$x1127($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1128->class)&&$x1128->class===\'Error\'&&!isset($x1128->properties[\'file\'])&&!isset($x1128->properties[\'line\'])&&!isset($x1128->properties[\'column\'])){$x1128->properties[\'file\']=\'<image>/09_date.js\';$x1128->properties[\'line\']=242;$x1128->properties[\'column\']=20;$x1128->attributes[\'file\']=$x1128->attributes[\'line\']=$x1128->attributes[\'column\']=0;}throw new JSException($x1128,242,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1130=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,19,\'<image>/09_date.js\');$_TypeError=&$x1130[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1130;$x1131=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1132=$x1131($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1132->class)&&$x1132->class===\'Error\'&&!isset($x1132->properties[\'file\'])&&!isset($x1132->properties[\'line\'])&&!isset($x1132->properties[\'column\'])){$x1132->properties[\'file\']=\'<image>/09_date.js\';$x1132->properties[\'line\']=243;$x1132->properties[\'column\']=19;$x1132->attributes[\'file\']=$x1132->attributes[\'line\']=$x1132->attributes[\'column\']=0;}throw new JSException($x1132,243,19,\'<image>/09_date.js\');}$x1129=JS::toObject($leThis,$global);unset($x1133,$W1133,$S1133,$U1133);$x1134=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1129,JS::toString(\'getFullYear\',$global),243,19,\'<image>/09_date.js\');$x1133=&$x1134[0];list(,$W1133,$S1133,$U1133)=$x1134;if(!(is_object($x1133)&&isset($x1133->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1137=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,19,\'<image>/09_date.js\');$_TypeError=&$x1137[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1137;$x1138=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1139=$x1138($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1139->class)&&$x1139->class===\'Error\'&&!isset($x1139->properties[\'file\'])&&!isset($x1139->properties[\'line\'])&&!isset($x1139->properties[\'column\'])){$x1139->properties[\'file\']=\'<image>/09_date.js\';$x1139->properties[\'line\']=243;$x1139->properties[\'column\']=19;$x1139->attributes[\'file\']=$x1139->attributes[\'line\']=$x1139->attributes[\'column\']=0;}throw new JSException($x1139,243,19,\'<image>/09_date.js\');}$x1135=$x1133->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,19);$x1136=$x1135($global,$x1129,$x1133,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1141=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,36,\'<image>/09_date.js\');$_TypeError=&$x1141[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1141;$x1142=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1143=$x1142($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1143->class)&&$x1143->class===\'Error\'&&!isset($x1143->properties[\'file\'])&&!isset($x1143->properties[\'line\'])&&!isset($x1143->properties[\'column\'])){$x1143->properties[\'file\']=\'<image>/09_date.js\';$x1143->properties[\'line\']=243;$x1143->properties[\'column\']=36;$x1143->attributes[\'file\']=$x1143->attributes[\'line\']=$x1143->attributes[\'column\']=0;}throw new JSException($x1143,243,36,\'<image>/09_date.js\');}$x1140=JS::toObject($leThis,$global);unset($x1144,$W1144,$S1144,$U1144);$x1145=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1140,JS::toString(\'getMonth\',$global),243,36,\'<image>/09_date.js\');$x1144=&$x1145[0];list(,$W1144,$S1144,$U1144)=$x1145;if(!(is_object($x1144)&&isset($x1144->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1148=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),243,36,\'<image>/09_date.js\');$_TypeError=&$x1148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1148;$x1149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1150=$x1149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1150->class)&&$x1150->class===\'Error\'&&!isset($x1150->properties[\'file\'])&&!isset($x1150->properties[\'line\'])&&!isset($x1150->properties[\'column\'])){$x1150->properties[\'file\']=\'<image>/09_date.js\';$x1150->properties[\'line\']=243;$x1150->properties[\'column\']=36;$x1150->attributes[\'file\']=$x1150->attributes[\'line\']=$x1150->attributes[\'column\']=0;}throw new JSException($x1150,243,36,\'<image>/09_date.js\');}$x1146=$x1144->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',243,36);$x1147=$x1146($global,$x1140,$x1144,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1152=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,16,\'<image>/09_date.js\');$_TypeError=&$x1152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1152;$x1153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1154=$x1153($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1154->class)&&$x1154->class===\'Error\'&&!isset($x1154->properties[\'file\'])&&!isset($x1154->properties[\'line\'])&&!isset($x1154->properties[\'column\'])){$x1154->properties[\'file\']=\'<image>/09_date.js\';$x1154->properties[\'line\']=244;$x1154->properties[\'column\']=16;$x1154->attributes[\'file\']=$x1154->attributes[\'line\']=$x1154->attributes[\'column\']=0;}throw new JSException($x1154,244,16,\'<image>/09_date.js\');}$x1151=JS::toObject($leThis,$global);unset($x1155,$W1155,$S1155,$U1155);$x1156=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1151,JS::toString(\'getHours\',$global),244,16,\'<image>/09_date.js\');$x1155=&$x1156[0];list(,$W1155,$S1155,$U1155)=$x1156;if(!(is_object($x1155)&&isset($x1155->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1159=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,16,\'<image>/09_date.js\');$_TypeError=&$x1159[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1159;$x1160=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1161=$x1160($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1161->class)&&$x1161->class===\'Error\'&&!isset($x1161->properties[\'file\'])&&!isset($x1161->properties[\'line\'])&&!isset($x1161->properties[\'column\'])){$x1161->properties[\'file\']=\'<image>/09_date.js\';$x1161->properties[\'line\']=244;$x1161->properties[\'column\']=16;$x1161->attributes[\'file\']=$x1161->attributes[\'line\']=$x1161->attributes[\'column\']=0;}throw new JSException($x1161,244,16,\'<image>/09_date.js\');}$x1157=$x1155->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,16);$x1158=$x1157($global,$x1151,$x1155,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1163=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,35,\'<image>/09_date.js\');$_TypeError=&$x1163[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1163;$x1164=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1165=$x1164($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1165->class)&&$x1165->class===\'Error\'&&!isset($x1165->properties[\'file\'])&&!isset($x1165->properties[\'line\'])&&!isset($x1165->properties[\'column\'])){$x1165->properties[\'file\']=\'<image>/09_date.js\';$x1165->properties[\'line\']=244;$x1165->properties[\'column\']=35;$x1165->attributes[\'file\']=$x1165->attributes[\'line\']=$x1165->attributes[\'column\']=0;}throw new JSException($x1165,244,35,\'<image>/09_date.js\');}$x1162=JS::toObject($leThis,$global);unset($x1166,$W1166,$S1166,$U1166);$x1167=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1162,JS::toString(\'getMinutes\',$global),244,35,\'<image>/09_date.js\');$x1166=&$x1167[0];list(,$W1166,$S1166,$U1166)=$x1167;if(!(is_object($x1166)&&isset($x1166->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1170=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,35,\'<image>/09_date.js\');$_TypeError=&$x1170[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1170;$x1171=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1172=$x1171($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1172->class)&&$x1172->class===\'Error\'&&!isset($x1172->properties[\'file\'])&&!isset($x1172->properties[\'line\'])&&!isset($x1172->properties[\'column\'])){$x1172->properties[\'file\']=\'<image>/09_date.js\';$x1172->properties[\'line\']=244;$x1172->properties[\'column\']=35;$x1172->attributes[\'file\']=$x1172->attributes[\'line\']=$x1172->attributes[\'column\']=0;}throw new JSException($x1172,244,35,\'<image>/09_date.js\');}$x1168=$x1166->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,35);$x1169=$x1168($global,$x1162,$x1166,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1174=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,54,\'<image>/09_date.js\');$_TypeError=&$x1174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1174;$x1175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1176=$x1175($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1176->class)&&$x1176->class===\'Error\'&&!isset($x1176->properties[\'file\'])&&!isset($x1176->properties[\'line\'])&&!isset($x1176->properties[\'column\'])){$x1176->properties[\'file\']=\'<image>/09_date.js\';$x1176->properties[\'line\']=244;$x1176->properties[\'column\']=54;$x1176->attributes[\'file\']=$x1176->attributes[\'line\']=$x1176->attributes[\'column\']=0;}throw new JSException($x1176,244,54,\'<image>/09_date.js\');}$x1173=JS::toObject($leThis,$global);unset($x1177,$W1177,$S1177,$U1177);$x1178=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1173,JS::toString(\'getSeconds\',$global),244,54,\'<image>/09_date.js\');$x1177=&$x1178[0];list(,$W1177,$S1177,$U1177)=$x1178;if(!(is_object($x1177)&&isset($x1177->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1181=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,54,\'<image>/09_date.js\');$_TypeError=&$x1181[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1181;$x1182=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1183=$x1182($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1183->class)&&$x1183->class===\'Error\'&&!isset($x1183->properties[\'file\'])&&!isset($x1183->properties[\'line\'])&&!isset($x1183->properties[\'column\'])){$x1183->properties[\'file\']=\'<image>/09_date.js\';$x1183->properties[\'line\']=244;$x1183->properties[\'column\']=54;$x1183->attributes[\'file\']=$x1183->attributes[\'line\']=$x1183->attributes[\'column\']=0;}throw new JSException($x1183,244,54,\'<image>/09_date.js\');}$x1179=$x1177->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,54);$x1180=$x1179($global,$x1173,$x1177,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1185=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,78,\'<image>/09_date.js\');$_TypeError=&$x1185[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1185;$x1186=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1187=$x1186($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1187->class)&&$x1187->class===\'Error\'&&!isset($x1187->properties[\'file\'])&&!isset($x1187->properties[\'line\'])&&!isset($x1187->properties[\'column\'])){$x1187->properties[\'file\']=\'<image>/09_date.js\';$x1187->properties[\'line\']=244;$x1187->properties[\'column\']=78;$x1187->attributes[\'file\']=$x1187->attributes[\'line\']=$x1187->attributes[\'column\']=0;}throw new JSException($x1187,244,78,\'<image>/09_date.js\');}$x1184=JS::toObject($leThis,$global);unset($x1188,$W1188,$S1188,$U1188);$x1189=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1184,JS::toString(\'getMilliseconds\',$global),244,78,\'<image>/09_date.js\');$x1188=&$x1189[0];list(,$W1188,$S1188,$U1188)=$x1189;if(!(is_object($x1188)&&isset($x1188->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1192=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,78,\'<image>/09_date.js\');$_TypeError=&$x1192[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1192;$x1193=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1194=$x1193($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1194->class)&&$x1194->class===\'Error\'&&!isset($x1194->properties[\'file\'])&&!isset($x1194->properties[\'line\'])&&!isset($x1194->properties[\'column\'])){$x1194->properties[\'file\']=\'<image>/09_date.js\';$x1194->properties[\'line\']=244;$x1194->properties[\'column\']=78;$x1194->attributes[\'file\']=$x1194->attributes[\'line\']=$x1194->attributes[\'column\']=0;}throw new JSException($x1194,244,78,\'<image>/09_date.js\');}$x1190=$x1188->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',244,78);$x1191=$x1190($global,$x1184,$x1188,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1123=clone JS::$objectTemplate;unset($x1195,$W1195,$S1195,$U1195);$x1196=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),242,16,\'<image>/09_date.js\');$x1195=&$x1196[0];list(,$W1195,$S1195,$U1195)=$x1196;$x1124=$x1195;$x1123->prototype=$x1124;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1199=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),242,16,\'<image>/09_date.js\');$_TypeError=&$x1199[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1199;$x1200=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1201=$x1200($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1201->class)&&$x1201->class===\'Error\'&&!isset($x1201->properties[\'file\'])&&!isset($x1201->properties[\'line\'])&&!isset($x1201->properties[\'column\'])){$x1201->properties[\'file\']=\'<image>/09_date.js\';$x1201->properties[\'line\']=242;$x1201->properties[\'column\']=16;$x1201->attributes[\'file\']=$x1201->attributes[\'line\']=$x1201->attributes[\'column\']=0;}throw new JSException($x1201,242,16,\'<image>/09_date.js\');}$x1197=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',242,16);$x1198=$x1197($global,$x1123,$_Date,array($x1136,$x1147,$_date,$x1158,$x1169,$x1180,$x1191),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1124=$x1198;if(is_object($x1124)&&$x1124!==JS::$undefined){$x1123=$x1124;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1123;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_29($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1232 =& $scope->properties['arguments'];
$x1232->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1232->properties[$i] = $args[$i];
$x1232->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['month'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_month =& $scope->properties['month'];
$Umonth = FALSE;
$scope->properties['date'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_date =& $scope->properties['date'];
$Udate = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1233 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1233, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1235 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 22, '<image>/09_date.js');
$_TypeError =& $x1235[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1235;
$x1236 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1237 = $x1236($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1237->class) && $x1237->class === 'Error' && !isset($x1237->properties['file']) && !isset($x1237->properties['line']) && !isset($x1237->properties['column'])) {$x1237->properties['file'] = '<image>/09_date.js';$x1237->properties['line'] = 256;$x1237->properties['column'] = 22;$x1237->attributes['file'] = $x1237->attributes['line'] = $x1237->attributes['column'] = 0; }
throw new JSException($x1237, 256, 22, '<image>/09_date.js');
}
$x1234 = JS::toObject($leThis, $global);
unset($x1238, $W1238, $S1238, $U1238);
$x1239 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1234, JS::toString('getDate', $global), 256, 22, '<image>/09_date.js');
$x1238 =& $x1239[0]; list(,$W1238,$S1238,$U1238) = $x1239;
if (!(is_object($x1238) && isset($x1238->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1242 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 22, '<image>/09_date.js');
$_TypeError =& $x1242[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1242;
$x1243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1244 = $x1243($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1244->class) && $x1244->class === 'Error' && !isset($x1244->properties['file']) && !isset($x1244->properties['line']) && !isset($x1244->properties['column'])) {$x1244->properties['file'] = '<image>/09_date.js';$x1244->properties['line'] = 256;$x1244->properties['column'] = 22;$x1244->attributes['file'] = $x1244->attributes['line'] = $x1244->attributes['column'] = 0; }
throw new JSException($x1244, 256, 22, '<image>/09_date.js');
}
$x1240 = $x1238->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 256, 22);
$x1241 = $x1240($global, $x1234, $x1238, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1241;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1247 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 259, 20, '<image>/09_date.js');
$_Date =& $x1247[0]; list(,$WDate,$SDate,$UDate) = $x1247;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1248 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 259, 20, '<image>/09_date.js');
$_ReferenceError =& $x1248[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1248;
$x1249 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 20);
$x1250 = $x1249($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1250->class) && $x1250->class === 'Error' && !isset($x1250->properties['file']) && !isset($x1250->properties['line']) && !isset($x1250->properties['column'])) {$x1250->properties['file'] = '<image>/09_date.js';$x1250->properties['line'] = 259;$x1250->properties['column'] = 20;$x1250->attributes['file'] = $x1250->attributes['line'] = $x1250->attributes['column'] = 0; }
throw new JSException($x1250, 259, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1252 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 260, 19, '<image>/09_date.js');
$_TypeError =& $x1252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1252;
$x1253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1254 = $x1253($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1254->class) && $x1254->class === 'Error' && !isset($x1254->properties['file']) && !isset($x1254->properties['line']) && !isset($x1254->properties['column'])) {$x1254->properties['file'] = '<image>/09_date.js';$x1254->properties['line'] = 260;$x1254->properties['column'] = 19;$x1254->attributes['file'] = $x1254->attributes['line'] = $x1254->attributes['column'] = 0; }
throw new JSException($x1254, 260, 19, '<image>/09_date.js');
}
$x1251 = JS::toObject($leThis, $global);
unset($x1255, $W1255, $S1255, $U1255);
$x1256 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1251, JS::toString('getFullYear', $global), 260, 19, '<image>/09_date.js');
$x1255 =& $x1256[0]; list(,$W1255,$S1255,$U1255) = $x1256;
if (!(is_object($x1255) && isset($x1255->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1259 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 260, 19, '<image>/09_date.js');
$_TypeError =& $x1259[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1259;
$x1260 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1261 = $x1260($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1261->class) && $x1261->class === 'Error' && !isset($x1261->properties['file']) && !isset($x1261->properties['line']) && !isset($x1261->properties['column'])) {$x1261->properties['file'] = '<image>/09_date.js';$x1261->properties['line'] = 260;$x1261->properties['column'] = 19;$x1261->attributes['file'] = $x1261->attributes['line'] = $x1261->attributes['column'] = 0; }
throw new JSException($x1261, 260, 19, '<image>/09_date.js');
}
$x1257 = $x1255->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 260, 19);
$x1258 = $x1257($global, $x1251, $x1255, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1263 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 16, '<image>/09_date.js');
$_TypeError =& $x1263[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1263;
$x1264 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1265 = $x1264($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1265->class) && $x1265->class === 'Error' && !isset($x1265->properties['file']) && !isset($x1265->properties['line']) && !isset($x1265->properties['column'])) {$x1265->properties['file'] = '<image>/09_date.js';$x1265->properties['line'] = 261;$x1265->properties['column'] = 16;$x1265->attributes['file'] = $x1265->attributes['line'] = $x1265->attributes['column'] = 0; }
throw new JSException($x1265, 261, 16, '<image>/09_date.js');
}
$x1262 = JS::toObject($leThis, $global);
unset($x1266, $W1266, $S1266, $U1266);
$x1267 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1262, JS::toString('getHours', $global), 261, 16, '<image>/09_date.js');
$x1266 =& $x1267[0]; list(,$W1266,$S1266,$U1266) = $x1267;
if (!(is_object($x1266) && isset($x1266->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1270 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 16, '<image>/09_date.js');
$_TypeError =& $x1270[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1270;
$x1271 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1272 = $x1271($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1272->class) && $x1272->class === 'Error' && !isset($x1272->properties['file']) && !isset($x1272->properties['line']) && !isset($x1272->properties['column'])) {$x1272->properties['file'] = '<image>/09_date.js';$x1272->properties['line'] = 261;$x1272->properties['column'] = 16;$x1272->attributes['file'] = $x1272->attributes['line'] = $x1272->attributes['column'] = 0; }
throw new JSException($x1272, 261, 16, '<image>/09_date.js');
}
$x1268 = $x1266->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 16);
$x1269 = $x1268($global, $x1262, $x1266, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1274 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 35, '<image>/09_date.js');
$_TypeError =& $x1274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1274;
$x1275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1276 = $x1275($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1276->class) && $x1276->class === 'Error' && !isset($x1276->properties['file']) && !isset($x1276->properties['line']) && !isset($x1276->properties['column'])) {$x1276->properties['file'] = '<image>/09_date.js';$x1276->properties['line'] = 261;$x1276->properties['column'] = 35;$x1276->attributes['file'] = $x1276->attributes['line'] = $x1276->attributes['column'] = 0; }
throw new JSException($x1276, 261, 35, '<image>/09_date.js');
}
$x1273 = JS::toObject($leThis, $global);
unset($x1277, $W1277, $S1277, $U1277);
$x1278 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1273, JS::toString('getMinutes', $global), 261, 35, '<image>/09_date.js');
$x1277 =& $x1278[0]; list(,$W1277,$S1277,$U1277) = $x1278;
if (!(is_object($x1277) && isset($x1277->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1281 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 35, '<image>/09_date.js');
$_TypeError =& $x1281[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1281;
$x1282 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1283 = $x1282($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1283->class) && $x1283->class === 'Error' && !isset($x1283->properties['file']) && !isset($x1283->properties['line']) && !isset($x1283->properties['column'])) {$x1283->properties['file'] = '<image>/09_date.js';$x1283->properties['line'] = 261;$x1283->properties['column'] = 35;$x1283->attributes['file'] = $x1283->attributes['line'] = $x1283->attributes['column'] = 0; }
throw new JSException($x1283, 261, 35, '<image>/09_date.js');
}
$x1279 = $x1277->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 35);
$x1280 = $x1279($global, $x1273, $x1277, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1285 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 54, '<image>/09_date.js');
$_TypeError =& $x1285[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1285;
$x1286 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1287 = $x1286($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1287->class) && $x1287->class === 'Error' && !isset($x1287->properties['file']) && !isset($x1287->properties['line']) && !isset($x1287->properties['column'])) {$x1287->properties['file'] = '<image>/09_date.js';$x1287->properties['line'] = 261;$x1287->properties['column'] = 54;$x1287->attributes['file'] = $x1287->attributes['line'] = $x1287->attributes['column'] = 0; }
throw new JSException($x1287, 261, 54, '<image>/09_date.js');
}
$x1284 = JS::toObject($leThis, $global);
unset($x1288, $W1288, $S1288, $U1288);
$x1289 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1284, JS::toString('getSeconds', $global), 261, 54, '<image>/09_date.js');
$x1288 =& $x1289[0]; list(,$W1288,$S1288,$U1288) = $x1289;
if (!(is_object($x1288) && isset($x1288->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1292 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 54, '<image>/09_date.js');
$_TypeError =& $x1292[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1292;
$x1293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1294 = $x1293($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1294->class) && $x1294->class === 'Error' && !isset($x1294->properties['file']) && !isset($x1294->properties['line']) && !isset($x1294->properties['column'])) {$x1294->properties['file'] = '<image>/09_date.js';$x1294->properties['line'] = 261;$x1294->properties['column'] = 54;$x1294->attributes['file'] = $x1294->attributes['line'] = $x1294->attributes['column'] = 0; }
throw new JSException($x1294, 261, 54, '<image>/09_date.js');
}
$x1290 = $x1288->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 54);
$x1291 = $x1290($global, $x1284, $x1288, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1296 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 78, '<image>/09_date.js');
$_TypeError =& $x1296[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1296;
$x1297 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1298 = $x1297($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1298->class) && $x1298->class === 'Error' && !isset($x1298->properties['file']) && !isset($x1298->properties['line']) && !isset($x1298->properties['column'])) {$x1298->properties['file'] = '<image>/09_date.js';$x1298->properties['line'] = 261;$x1298->properties['column'] = 78;$x1298->attributes['file'] = $x1298->attributes['line'] = $x1298->attributes['column'] = 0; }
throw new JSException($x1298, 261, 78, '<image>/09_date.js');
}
$x1295 = JS::toObject($leThis, $global);
unset($x1299, $W1299, $S1299, $U1299);
$x1300 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1295, JS::toString('getMilliseconds', $global), 261, 78, '<image>/09_date.js');
$x1299 =& $x1300[0]; list(,$W1299,$S1299,$U1299) = $x1300;
if (!(is_object($x1299) && isset($x1299->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1303 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 261, 78, '<image>/09_date.js');
$_TypeError =& $x1303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1303;
$x1304 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1305 = $x1304($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1305->class) && $x1305->class === 'Error' && !isset($x1305->properties['file']) && !isset($x1305->properties['line']) && !isset($x1305->properties['column'])) {$x1305->properties['file'] = '<image>/09_date.js';$x1305->properties['line'] = 261;$x1305->properties['column'] = 78;$x1305->attributes['file'] = $x1305->attributes['line'] = $x1305->attributes['column'] = 0; }
throw new JSException($x1305, 261, 78, '<image>/09_date.js');
}
$x1301 = $x1299->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 261, 78);
$x1302 = $x1301($global, $x1295, $x1299, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1245 = clone JS::$objectTemplate;
unset($x1306, $W1306, $S1306, $U1306);
$x1307 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 259, 16, '<image>/09_date.js');
$x1306 =& $x1307[0]; list(,$W1306,$S1306,$U1306) = $x1307;
$x1246 = $x1306;
$x1245->prototype = $x1246;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1310 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 259, 16, '<image>/09_date.js');
$_TypeError =& $x1310[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1310;
$x1311 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1312 = $x1311($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1312->class) && $x1312->class === 'Error' && !isset($x1312->properties['file']) && !isset($x1312->properties['line']) && !isset($x1312->properties['column'])) {$x1312->properties['file'] = '<image>/09_date.js';$x1312->properties['line'] = 259;$x1312->properties['column'] = 16;$x1312->attributes['file'] = $x1312->attributes['line'] = $x1312->attributes['column'] = 0; }
throw new JSException($x1312, 259, 16, '<image>/09_date.js');
}
$x1308 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 259, 16);
$x1309 = $x1308($global, $x1245, $_Date, array($x1258, $_month, $_date, $x1269, $x1280, $x1291, $x1302), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1246 = $x1309;
if (is_object($x1246) && $x1246 !== JS::$undefined) { $x1245 = $x1246; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1245;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_29($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1232=&$scope->properties[\'arguments\'];$x1232->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1232->properties[$i]=$args[$i];$x1232->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'month\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1233=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1233,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1235=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,22,\'<image>/09_date.js\');$_TypeError=&$x1235[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1235;$x1236=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1237=$x1236($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1237->class)&&$x1237->class===\'Error\'&&!isset($x1237->properties[\'file\'])&&!isset($x1237->properties[\'line\'])&&!isset($x1237->properties[\'column\'])){$x1237->properties[\'file\']=\'<image>/09_date.js\';$x1237->properties[\'line\']=256;$x1237->properties[\'column\']=22;$x1237->attributes[\'file\']=$x1237->attributes[\'line\']=$x1237->attributes[\'column\']=0;}throw new JSException($x1237,256,22,\'<image>/09_date.js\');}$x1234=JS::toObject($leThis,$global);unset($x1238,$W1238,$S1238,$U1238);$x1239=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1234,JS::toString(\'getDate\',$global),256,22,\'<image>/09_date.js\');$x1238=&$x1239[0];list(,$W1238,$S1238,$U1238)=$x1239;if(!(is_object($x1238)&&isset($x1238->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1242=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,22,\'<image>/09_date.js\');$_TypeError=&$x1242[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1242;$x1243=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1244=$x1243($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1244->class)&&$x1244->class===\'Error\'&&!isset($x1244->properties[\'file\'])&&!isset($x1244->properties[\'line\'])&&!isset($x1244->properties[\'column\'])){$x1244->properties[\'file\']=\'<image>/09_date.js\';$x1244->properties[\'line\']=256;$x1244->properties[\'column\']=22;$x1244->attributes[\'file\']=$x1244->attributes[\'line\']=$x1244->attributes[\'column\']=0;}throw new JSException($x1244,256,22,\'<image>/09_date.js\');}$x1240=$x1238->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',256,22);$x1241=$x1240($global,$x1234,$x1238,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1241;}unset($_Date,$WDate,$SDate,$UDate);$x1247=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),259,20,\'<image>/09_date.js\');$_Date=&$x1247[0];list(,$WDate,$SDate,$UDate)=$x1247;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1248=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),259,20,\'<image>/09_date.js\');$_ReferenceError=&$x1248[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1248;$x1249=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,20);$x1250=$x1249($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1250->class)&&$x1250->class===\'Error\'&&!isset($x1250->properties[\'file\'])&&!isset($x1250->properties[\'line\'])&&!isset($x1250->properties[\'column\'])){$x1250->properties[\'file\']=\'<image>/09_date.js\';$x1250->properties[\'line\']=259;$x1250->properties[\'column\']=20;$x1250->attributes[\'file\']=$x1250->attributes[\'line\']=$x1250->attributes[\'column\']=0;}throw new JSException($x1250,259,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1252=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),260,19,\'<image>/09_date.js\');$_TypeError=&$x1252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1252;$x1253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1254=$x1253($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1254->class)&&$x1254->class===\'Error\'&&!isset($x1254->properties[\'file\'])&&!isset($x1254->properties[\'line\'])&&!isset($x1254->properties[\'column\'])){$x1254->properties[\'file\']=\'<image>/09_date.js\';$x1254->properties[\'line\']=260;$x1254->properties[\'column\']=19;$x1254->attributes[\'file\']=$x1254->attributes[\'line\']=$x1254->attributes[\'column\']=0;}throw new JSException($x1254,260,19,\'<image>/09_date.js\');}$x1251=JS::toObject($leThis,$global);unset($x1255,$W1255,$S1255,$U1255);$x1256=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1251,JS::toString(\'getFullYear\',$global),260,19,\'<image>/09_date.js\');$x1255=&$x1256[0];list(,$W1255,$S1255,$U1255)=$x1256;if(!(is_object($x1255)&&isset($x1255->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1259=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),260,19,\'<image>/09_date.js\');$_TypeError=&$x1259[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1259;$x1260=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1261=$x1260($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1261->class)&&$x1261->class===\'Error\'&&!isset($x1261->properties[\'file\'])&&!isset($x1261->properties[\'line\'])&&!isset($x1261->properties[\'column\'])){$x1261->properties[\'file\']=\'<image>/09_date.js\';$x1261->properties[\'line\']=260;$x1261->properties[\'column\']=19;$x1261->attributes[\'file\']=$x1261->attributes[\'line\']=$x1261->attributes[\'column\']=0;}throw new JSException($x1261,260,19,\'<image>/09_date.js\');}$x1257=$x1255->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',260,19);$x1258=$x1257($global,$x1251,$x1255,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1263=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,16,\'<image>/09_date.js\');$_TypeError=&$x1263[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1263;$x1264=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1265=$x1264($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1265->class)&&$x1265->class===\'Error\'&&!isset($x1265->properties[\'file\'])&&!isset($x1265->properties[\'line\'])&&!isset($x1265->properties[\'column\'])){$x1265->properties[\'file\']=\'<image>/09_date.js\';$x1265->properties[\'line\']=261;$x1265->properties[\'column\']=16;$x1265->attributes[\'file\']=$x1265->attributes[\'line\']=$x1265->attributes[\'column\']=0;}throw new JSException($x1265,261,16,\'<image>/09_date.js\');}$x1262=JS::toObject($leThis,$global);unset($x1266,$W1266,$S1266,$U1266);$x1267=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1262,JS::toString(\'getHours\',$global),261,16,\'<image>/09_date.js\');$x1266=&$x1267[0];list(,$W1266,$S1266,$U1266)=$x1267;if(!(is_object($x1266)&&isset($x1266->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1270=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,16,\'<image>/09_date.js\');$_TypeError=&$x1270[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1270;$x1271=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1272=$x1271($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1272->class)&&$x1272->class===\'Error\'&&!isset($x1272->properties[\'file\'])&&!isset($x1272->properties[\'line\'])&&!isset($x1272->properties[\'column\'])){$x1272->properties[\'file\']=\'<image>/09_date.js\';$x1272->properties[\'line\']=261;$x1272->properties[\'column\']=16;$x1272->attributes[\'file\']=$x1272->attributes[\'line\']=$x1272->attributes[\'column\']=0;}throw new JSException($x1272,261,16,\'<image>/09_date.js\');}$x1268=$x1266->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,16);$x1269=$x1268($global,$x1262,$x1266,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1274=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,35,\'<image>/09_date.js\');$_TypeError=&$x1274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1274;$x1275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1276=$x1275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1276->class)&&$x1276->class===\'Error\'&&!isset($x1276->properties[\'file\'])&&!isset($x1276->properties[\'line\'])&&!isset($x1276->properties[\'column\'])){$x1276->properties[\'file\']=\'<image>/09_date.js\';$x1276->properties[\'line\']=261;$x1276->properties[\'column\']=35;$x1276->attributes[\'file\']=$x1276->attributes[\'line\']=$x1276->attributes[\'column\']=0;}throw new JSException($x1276,261,35,\'<image>/09_date.js\');}$x1273=JS::toObject($leThis,$global);unset($x1277,$W1277,$S1277,$U1277);$x1278=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1273,JS::toString(\'getMinutes\',$global),261,35,\'<image>/09_date.js\');$x1277=&$x1278[0];list(,$W1277,$S1277,$U1277)=$x1278;if(!(is_object($x1277)&&isset($x1277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1281=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,35,\'<image>/09_date.js\');$_TypeError=&$x1281[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1281;$x1282=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1283=$x1282($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1283->class)&&$x1283->class===\'Error\'&&!isset($x1283->properties[\'file\'])&&!isset($x1283->properties[\'line\'])&&!isset($x1283->properties[\'column\'])){$x1283->properties[\'file\']=\'<image>/09_date.js\';$x1283->properties[\'line\']=261;$x1283->properties[\'column\']=35;$x1283->attributes[\'file\']=$x1283->attributes[\'line\']=$x1283->attributes[\'column\']=0;}throw new JSException($x1283,261,35,\'<image>/09_date.js\');}$x1279=$x1277->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,35);$x1280=$x1279($global,$x1273,$x1277,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1285=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,54,\'<image>/09_date.js\');$_TypeError=&$x1285[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1285;$x1286=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1287=$x1286($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1287->class)&&$x1287->class===\'Error\'&&!isset($x1287->properties[\'file\'])&&!isset($x1287->properties[\'line\'])&&!isset($x1287->properties[\'column\'])){$x1287->properties[\'file\']=\'<image>/09_date.js\';$x1287->properties[\'line\']=261;$x1287->properties[\'column\']=54;$x1287->attributes[\'file\']=$x1287->attributes[\'line\']=$x1287->attributes[\'column\']=0;}throw new JSException($x1287,261,54,\'<image>/09_date.js\');}$x1284=JS::toObject($leThis,$global);unset($x1288,$W1288,$S1288,$U1288);$x1289=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1284,JS::toString(\'getSeconds\',$global),261,54,\'<image>/09_date.js\');$x1288=&$x1289[0];list(,$W1288,$S1288,$U1288)=$x1289;if(!(is_object($x1288)&&isset($x1288->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1292=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,54,\'<image>/09_date.js\');$_TypeError=&$x1292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1292;$x1293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1294=$x1293($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1294->class)&&$x1294->class===\'Error\'&&!isset($x1294->properties[\'file\'])&&!isset($x1294->properties[\'line\'])&&!isset($x1294->properties[\'column\'])){$x1294->properties[\'file\']=\'<image>/09_date.js\';$x1294->properties[\'line\']=261;$x1294->properties[\'column\']=54;$x1294->attributes[\'file\']=$x1294->attributes[\'line\']=$x1294->attributes[\'column\']=0;}throw new JSException($x1294,261,54,\'<image>/09_date.js\');}$x1290=$x1288->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,54);$x1291=$x1290($global,$x1284,$x1288,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1296=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,78,\'<image>/09_date.js\');$_TypeError=&$x1296[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1296;$x1297=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1298=$x1297($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1298->class)&&$x1298->class===\'Error\'&&!isset($x1298->properties[\'file\'])&&!isset($x1298->properties[\'line\'])&&!isset($x1298->properties[\'column\'])){$x1298->properties[\'file\']=\'<image>/09_date.js\';$x1298->properties[\'line\']=261;$x1298->properties[\'column\']=78;$x1298->attributes[\'file\']=$x1298->attributes[\'line\']=$x1298->attributes[\'column\']=0;}throw new JSException($x1298,261,78,\'<image>/09_date.js\');}$x1295=JS::toObject($leThis,$global);unset($x1299,$W1299,$S1299,$U1299);$x1300=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1295,JS::toString(\'getMilliseconds\',$global),261,78,\'<image>/09_date.js\');$x1299=&$x1300[0];list(,$W1299,$S1299,$U1299)=$x1300;if(!(is_object($x1299)&&isset($x1299->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1303=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),261,78,\'<image>/09_date.js\');$_TypeError=&$x1303[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1303;$x1304=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1305=$x1304($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1305->class)&&$x1305->class===\'Error\'&&!isset($x1305->properties[\'file\'])&&!isset($x1305->properties[\'line\'])&&!isset($x1305->properties[\'column\'])){$x1305->properties[\'file\']=\'<image>/09_date.js\';$x1305->properties[\'line\']=261;$x1305->properties[\'column\']=78;$x1305->attributes[\'file\']=$x1305->attributes[\'line\']=$x1305->attributes[\'column\']=0;}throw new JSException($x1305,261,78,\'<image>/09_date.js\');}$x1301=$x1299->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',261,78);$x1302=$x1301($global,$x1295,$x1299,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1245=clone JS::$objectTemplate;unset($x1306,$W1306,$S1306,$U1306);$x1307=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),259,16,\'<image>/09_date.js\');$x1306=&$x1307[0];list(,$W1306,$S1306,$U1306)=$x1307;$x1246=$x1306;$x1245->prototype=$x1246;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1310=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),259,16,\'<image>/09_date.js\');$_TypeError=&$x1310[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1310;$x1311=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1312=$x1311($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1312->class)&&$x1312->class===\'Error\'&&!isset($x1312->properties[\'file\'])&&!isset($x1312->properties[\'line\'])&&!isset($x1312->properties[\'column\'])){$x1312->properties[\'file\']=\'<image>/09_date.js\';$x1312->properties[\'line\']=259;$x1312->properties[\'column\']=16;$x1312->attributes[\'file\']=$x1312->attributes[\'line\']=$x1312->attributes[\'column\']=0;}throw new JSException($x1312,259,16,\'<image>/09_date.js\');}$x1308=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',259,16);$x1309=$x1308($global,$x1245,$_Date,array($x1258,$_month,$_date,$x1269,$x1280,$x1291,$x1302),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1246=$x1309;if(is_object($x1246)&&$x1246!==JS::$undefined){$x1245=$x1246;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1245;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_30($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1343 =& $scope->properties['arguments'];
$x1343->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1343->properties[$i] = $args[$i];
$x1343->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x1344 = (((gettype($_month) === gettype(JS::$undefined) && $_month === JS::$undefined))|| (((is_float($_month) || is_int($_month)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_month == JS::$undefined));
if (JS::toBoolean($x1344, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1346 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 24, '<image>/09_date.js');
$_TypeError =& $x1346[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1346;
$x1347 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1348 = $x1347($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1348->class) && $x1348->class === 'Error' && !isset($x1348->properties['file']) && !isset($x1348->properties['line']) && !isset($x1348->properties['column'])) {$x1348->properties['file'] = '<image>/09_date.js';$x1348->properties['line'] = 273;$x1348->properties['column'] = 24;$x1348->attributes['file'] = $x1348->attributes['line'] = $x1348->attributes['column'] = 0; }
throw new JSException($x1348, 273, 24, '<image>/09_date.js');
}
$x1345 = JS::toObject($leThis, $global);
unset($x1349, $W1349, $S1349, $U1349);
$x1350 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1345, JS::toString('getMonth', $global), 273, 24, '<image>/09_date.js');
$x1349 =& $x1350[0]; list(,$W1349,$S1349,$U1349) = $x1350;
if (!(is_object($x1349) && isset($x1349->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1353 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 24, '<image>/09_date.js');
$_TypeError =& $x1353[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1353;
$x1354 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1355 = $x1354($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1355->class) && $x1355->class === 'Error' && !isset($x1355->properties['file']) && !isset($x1355->properties['line']) && !isset($x1355->properties['column'])) {$x1355->properties['file'] = '<image>/09_date.js';$x1355->properties['line'] = 273;$x1355->properties['column'] = 24;$x1355->attributes['file'] = $x1355->attributes['line'] = $x1355->attributes['column'] = 0; }
throw new JSException($x1355, 273, 24, '<image>/09_date.js');
}
$x1351 = $x1349->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 273, 24);
$x1352 = $x1351($global, $x1345, $x1349, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umonth) {$global->properties['month'] = $_month; $_month =& $global->properties['month']; }
$_month = $x1352;;
};
$x1356 = (((gettype($_date) === gettype(JS::$undefined) && $_date === JS::$undefined))|| (((is_float($_date) || is_int($_date)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_date == JS::$undefined));
if (JS::toBoolean($x1356, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1358 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 277, 22, '<image>/09_date.js');
$_TypeError =& $x1358[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1358;
$x1359 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1360 = $x1359($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1360->class) && $x1360->class === 'Error' && !isset($x1360->properties['file']) && !isset($x1360->properties['line']) && !isset($x1360->properties['column'])) {$x1360->properties['file'] = '<image>/09_date.js';$x1360->properties['line'] = 277;$x1360->properties['column'] = 22;$x1360->attributes['file'] = $x1360->attributes['line'] = $x1360->attributes['column'] = 0; }
throw new JSException($x1360, 277, 22, '<image>/09_date.js');
}
$x1357 = JS::toObject($leThis, $global);
unset($x1361, $W1361, $S1361, $U1361);
$x1362 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1357, JS::toString('getDate', $global), 277, 22, '<image>/09_date.js');
$x1361 =& $x1362[0]; list(,$W1361,$S1361,$U1361) = $x1362;
if (!(is_object($x1361) && isset($x1361->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1365 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 277, 22, '<image>/09_date.js');
$_TypeError =& $x1365[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1365;
$x1366 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1367 = $x1366($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1367->class) && $x1367->class === 'Error' && !isset($x1367->properties['file']) && !isset($x1367->properties['line']) && !isset($x1367->properties['column'])) {$x1367->properties['file'] = '<image>/09_date.js';$x1367->properties['line'] = 277;$x1367->properties['column'] = 22;$x1367->attributes['file'] = $x1367->attributes['line'] = $x1367->attributes['column'] = 0; }
throw new JSException($x1367, 277, 22, '<image>/09_date.js');
}
$x1363 = $x1361->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 277, 22);
$x1364 = $x1363($global, $x1357, $x1361, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Udate) {$global->properties['date'] = $_date; $_date =& $global->properties['date']; }
$_date = $x1364;;
};
unset($_Date, $WDate, $SDate, $UDate);
$x1370 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Date', $global), 280, 20, '<image>/09_date.js');
$_Date =& $x1370[0]; list(,$WDate,$SDate,$UDate) = $x1370;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1371 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 280, 20, '<image>/09_date.js');
$_ReferenceError =& $x1371[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1371;
$x1372 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 20);
$x1373 = $x1372($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1373->class) && $x1373->class === 'Error' && !isset($x1373->properties['file']) && !isset($x1373->properties['line']) && !isset($x1373->properties['column'])) {$x1373->properties['file'] = '<image>/09_date.js';$x1373->properties['line'] = 280;$x1373->properties['column'] = 20;$x1373->attributes['file'] = $x1373->attributes['line'] = $x1373->attributes['column'] = 0; }
throw new JSException($x1373, 280, 20, '<image>/09_date.js');
}
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1375 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 16, '<image>/09_date.js');
$_TypeError =& $x1375[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1375;
$x1376 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1377 = $x1376($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1377->class) && $x1377->class === 'Error' && !isset($x1377->properties['file']) && !isset($x1377->properties['line']) && !isset($x1377->properties['column'])) {$x1377->properties['file'] = '<image>/09_date.js';$x1377->properties['line'] = 282;$x1377->properties['column'] = 16;$x1377->attributes['file'] = $x1377->attributes['line'] = $x1377->attributes['column'] = 0; }
throw new JSException($x1377, 282, 16, '<image>/09_date.js');
}
$x1374 = JS::toObject($leThis, $global);
unset($x1378, $W1378, $S1378, $U1378);
$x1379 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1374, JS::toString('getHours', $global), 282, 16, '<image>/09_date.js');
$x1378 =& $x1379[0]; list(,$W1378,$S1378,$U1378) = $x1379;
if (!(is_object($x1378) && isset($x1378->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1382 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 16, '<image>/09_date.js');
$_TypeError =& $x1382[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1382;
$x1383 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1384 = $x1383($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1384->class) && $x1384->class === 'Error' && !isset($x1384->properties['file']) && !isset($x1384->properties['line']) && !isset($x1384->properties['column'])) {$x1384->properties['file'] = '<image>/09_date.js';$x1384->properties['line'] = 282;$x1384->properties['column'] = 16;$x1384->attributes['file'] = $x1384->attributes['line'] = $x1384->attributes['column'] = 0; }
throw new JSException($x1384, 282, 16, '<image>/09_date.js');
}
$x1380 = $x1378->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 16);
$x1381 = $x1380($global, $x1374, $x1378, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1386 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 35, '<image>/09_date.js');
$_TypeError =& $x1386[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1386;
$x1387 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1388 = $x1387($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1388->class) && $x1388->class === 'Error' && !isset($x1388->properties['file']) && !isset($x1388->properties['line']) && !isset($x1388->properties['column'])) {$x1388->properties['file'] = '<image>/09_date.js';$x1388->properties['line'] = 282;$x1388->properties['column'] = 35;$x1388->attributes['file'] = $x1388->attributes['line'] = $x1388->attributes['column'] = 0; }
throw new JSException($x1388, 282, 35, '<image>/09_date.js');
}
$x1385 = JS::toObject($leThis, $global);
unset($x1389, $W1389, $S1389, $U1389);
$x1390 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1385, JS::toString('getMinutes', $global), 282, 35, '<image>/09_date.js');
$x1389 =& $x1390[0]; list(,$W1389,$S1389,$U1389) = $x1390;
if (!(is_object($x1389) && isset($x1389->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1393 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 35, '<image>/09_date.js');
$_TypeError =& $x1393[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1393;
$x1394 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1395 = $x1394($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1395->class) && $x1395->class === 'Error' && !isset($x1395->properties['file']) && !isset($x1395->properties['line']) && !isset($x1395->properties['column'])) {$x1395->properties['file'] = '<image>/09_date.js';$x1395->properties['line'] = 282;$x1395->properties['column'] = 35;$x1395->attributes['file'] = $x1395->attributes['line'] = $x1395->attributes['column'] = 0; }
throw new JSException($x1395, 282, 35, '<image>/09_date.js');
}
$x1391 = $x1389->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 35);
$x1392 = $x1391($global, $x1385, $x1389, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1397 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 54, '<image>/09_date.js');
$_TypeError =& $x1397[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1397;
$x1398 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1399 = $x1398($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1399->class) && $x1399->class === 'Error' && !isset($x1399->properties['file']) && !isset($x1399->properties['line']) && !isset($x1399->properties['column'])) {$x1399->properties['file'] = '<image>/09_date.js';$x1399->properties['line'] = 282;$x1399->properties['column'] = 54;$x1399->attributes['file'] = $x1399->attributes['line'] = $x1399->attributes['column'] = 0; }
throw new JSException($x1399, 282, 54, '<image>/09_date.js');
}
$x1396 = JS::toObject($leThis, $global);
unset($x1400, $W1400, $S1400, $U1400);
$x1401 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1396, JS::toString('getSeconds', $global), 282, 54, '<image>/09_date.js');
$x1400 =& $x1401[0]; list(,$W1400,$S1400,$U1400) = $x1401;
if (!(is_object($x1400) && isset($x1400->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1404 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 54, '<image>/09_date.js');
$_TypeError =& $x1404[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1404;
$x1405 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1406 = $x1405($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1406->class) && $x1406->class === 'Error' && !isset($x1406->properties['file']) && !isset($x1406->properties['line']) && !isset($x1406->properties['column'])) {$x1406->properties['file'] = '<image>/09_date.js';$x1406->properties['line'] = 282;$x1406->properties['column'] = 54;$x1406->attributes['file'] = $x1406->attributes['line'] = $x1406->attributes['column'] = 0; }
throw new JSException($x1406, 282, 54, '<image>/09_date.js');
}
$x1402 = $x1400->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 54);
$x1403 = $x1402($global, $x1396, $x1400, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1408 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 78, '<image>/09_date.js');
$_TypeError =& $x1408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1408;
$x1409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1410 = $x1409($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1410->class) && $x1410->class === 'Error' && !isset($x1410->properties['file']) && !isset($x1410->properties['line']) && !isset($x1410->properties['column'])) {$x1410->properties['file'] = '<image>/09_date.js';$x1410->properties['line'] = 282;$x1410->properties['column'] = 78;$x1410->attributes['file'] = $x1410->attributes['line'] = $x1410->attributes['column'] = 0; }
throw new JSException($x1410, 282, 78, '<image>/09_date.js');
}
$x1407 = JS::toObject($leThis, $global);
unset($x1411, $W1411, $S1411, $U1411);
$x1412 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1407, JS::toString('getMilliseconds', $global), 282, 78, '<image>/09_date.js');
$x1411 =& $x1412[0]; list(,$W1411,$S1411,$U1411) = $x1412;
if (!(is_object($x1411) && isset($x1411->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1415 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 78, '<image>/09_date.js');
$_TypeError =& $x1415[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1415;
$x1416 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1417 = $x1416($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1417->class) && $x1417->class === 'Error' && !isset($x1417->properties['file']) && !isset($x1417->properties['line']) && !isset($x1417->properties['column'])) {$x1417->properties['file'] = '<image>/09_date.js';$x1417->properties['line'] = 282;$x1417->properties['column'] = 78;$x1417->attributes['file'] = $x1417->attributes['line'] = $x1417->attributes['column'] = 0; }
throw new JSException($x1417, 282, 78, '<image>/09_date.js');
}
$x1413 = $x1411->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 282, 78);
$x1414 = $x1413($global, $x1407, $x1411, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1368 = clone JS::$objectTemplate;
unset($x1418, $W1418, $S1418, $U1418);
$x1419 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 280, 16, '<image>/09_date.js');
$x1418 =& $x1419[0]; list(,$W1418,$S1418,$U1418) = $x1419;
$x1369 = $x1418;
$x1368->prototype = $x1369;
if (!(is_object($_Date) && isset($_Date->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1422 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 280, 16, '<image>/09_date.js');
$_TypeError =& $x1422[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1422;
$x1423 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1424 = $x1423($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1424->class) && $x1424->class === 'Error' && !isset($x1424->properties['file']) && !isset($x1424->properties['line']) && !isset($x1424->properties['column'])) {$x1424->properties['file'] = '<image>/09_date.js';$x1424->properties['line'] = 280;$x1424->properties['column'] = 16;$x1424->attributes['file'] = $x1424->attributes['line'] = $x1424->attributes['column'] = 0; }
throw new JSException($x1424, 280, 16, '<image>/09_date.js');
}
$x1420 = $_Date->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 280, 16);
$x1421 = $x1420($global, $x1368, $_Date, array($_year, $_month, $_date, $x1381, $x1392, $x1403, $x1414), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1369 = $x1421;
if (is_object($x1369) && $x1369 !== JS::$undefined) { $x1368 = $x1369; }
$scope->properties['newDate'] = JS::$undefined; $_newDate =& $scope->properties['newDate'];
$UnewDate = FALSE;
$_newDate = $x1368;
$leThis->value =$_newDate->value;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_30($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1343=&$scope->properties[\'arguments\'];$x1343->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1343->properties[$i]=$args[$i];$x1343->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'year\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_year=&$scope->properties[\'year\'];$Uyear=FALSE;$scope->properties[\'month\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_month=&$scope->properties[\'month\'];$Umonth=FALSE;$scope->properties[\'date\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_date=&$scope->properties[\'date\'];$Udate=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1344=(((gettype($_month)===gettype(JS::$undefined)&&$_month===JS::$undefined))||(((is_float($_month)||is_int($_month))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_month==JS::$undefined));if(JS::toBoolean($x1344,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1346=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,24,\'<image>/09_date.js\');$_TypeError=&$x1346[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1346;$x1347=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1348=$x1347($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1348->class)&&$x1348->class===\'Error\'&&!isset($x1348->properties[\'file\'])&&!isset($x1348->properties[\'line\'])&&!isset($x1348->properties[\'column\'])){$x1348->properties[\'file\']=\'<image>/09_date.js\';$x1348->properties[\'line\']=273;$x1348->properties[\'column\']=24;$x1348->attributes[\'file\']=$x1348->attributes[\'line\']=$x1348->attributes[\'column\']=0;}throw new JSException($x1348,273,24,\'<image>/09_date.js\');}$x1345=JS::toObject($leThis,$global);unset($x1349,$W1349,$S1349,$U1349);$x1350=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1345,JS::toString(\'getMonth\',$global),273,24,\'<image>/09_date.js\');$x1349=&$x1350[0];list(,$W1349,$S1349,$U1349)=$x1350;if(!(is_object($x1349)&&isset($x1349->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1353=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,24,\'<image>/09_date.js\');$_TypeError=&$x1353[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1353;$x1354=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1355=$x1354($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1355->class)&&$x1355->class===\'Error\'&&!isset($x1355->properties[\'file\'])&&!isset($x1355->properties[\'line\'])&&!isset($x1355->properties[\'column\'])){$x1355->properties[\'file\']=\'<image>/09_date.js\';$x1355->properties[\'line\']=273;$x1355->properties[\'column\']=24;$x1355->attributes[\'file\']=$x1355->attributes[\'line\']=$x1355->attributes[\'column\']=0;}throw new JSException($x1355,273,24,\'<image>/09_date.js\');}$x1351=$x1349->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',273,24);$x1352=$x1351($global,$x1345,$x1349,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umonth){$global->properties[\'month\']=$_month;$_month=&$global->properties[\'month\'];}$_month=$x1352;}$x1356=(((gettype($_date)===gettype(JS::$undefined)&&$_date===JS::$undefined))||(((is_float($_date)||is_int($_date))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_date==JS::$undefined));if(JS::toBoolean($x1356,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1358=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),277,22,\'<image>/09_date.js\');$_TypeError=&$x1358[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1358;$x1359=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1360=$x1359($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1360->class)&&$x1360->class===\'Error\'&&!isset($x1360->properties[\'file\'])&&!isset($x1360->properties[\'line\'])&&!isset($x1360->properties[\'column\'])){$x1360->properties[\'file\']=\'<image>/09_date.js\';$x1360->properties[\'line\']=277;$x1360->properties[\'column\']=22;$x1360->attributes[\'file\']=$x1360->attributes[\'line\']=$x1360->attributes[\'column\']=0;}throw new JSException($x1360,277,22,\'<image>/09_date.js\');}$x1357=JS::toObject($leThis,$global);unset($x1361,$W1361,$S1361,$U1361);$x1362=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1357,JS::toString(\'getDate\',$global),277,22,\'<image>/09_date.js\');$x1361=&$x1362[0];list(,$W1361,$S1361,$U1361)=$x1362;if(!(is_object($x1361)&&isset($x1361->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1365=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),277,22,\'<image>/09_date.js\');$_TypeError=&$x1365[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1365;$x1366=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1367=$x1366($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1367->class)&&$x1367->class===\'Error\'&&!isset($x1367->properties[\'file\'])&&!isset($x1367->properties[\'line\'])&&!isset($x1367->properties[\'column\'])){$x1367->properties[\'file\']=\'<image>/09_date.js\';$x1367->properties[\'line\']=277;$x1367->properties[\'column\']=22;$x1367->attributes[\'file\']=$x1367->attributes[\'line\']=$x1367->attributes[\'column\']=0;}throw new JSException($x1367,277,22,\'<image>/09_date.js\');}$x1363=$x1361->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',277,22);$x1364=$x1363($global,$x1357,$x1361,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Udate){$global->properties[\'date\']=$_date;$_date=&$global->properties[\'date\'];}$_date=$x1364;}unset($_Date,$WDate,$SDate,$UDate);$x1370=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'Date\',$global),280,20,\'<image>/09_date.js\');$_Date=&$x1370[0];list(,$WDate,$SDate,$UDate)=$x1370;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1371=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),280,20,\'<image>/09_date.js\');$_ReferenceError=&$x1371[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1371;$x1372=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,20);$x1373=$x1372($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1373->class)&&$x1373->class===\'Error\'&&!isset($x1373->properties[\'file\'])&&!isset($x1373->properties[\'line\'])&&!isset($x1373->properties[\'column\'])){$x1373->properties[\'file\']=\'<image>/09_date.js\';$x1373->properties[\'line\']=280;$x1373->properties[\'column\']=20;$x1373->attributes[\'file\']=$x1373->attributes[\'line\']=$x1373->attributes[\'column\']=0;}throw new JSException($x1373,280,20,\'<image>/09_date.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1375=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,16,\'<image>/09_date.js\');$_TypeError=&$x1375[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1375;$x1376=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1377=$x1376($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1377->class)&&$x1377->class===\'Error\'&&!isset($x1377->properties[\'file\'])&&!isset($x1377->properties[\'line\'])&&!isset($x1377->properties[\'column\'])){$x1377->properties[\'file\']=\'<image>/09_date.js\';$x1377->properties[\'line\']=282;$x1377->properties[\'column\']=16;$x1377->attributes[\'file\']=$x1377->attributes[\'line\']=$x1377->attributes[\'column\']=0;}throw new JSException($x1377,282,16,\'<image>/09_date.js\');}$x1374=JS::toObject($leThis,$global);unset($x1378,$W1378,$S1378,$U1378);$x1379=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1374,JS::toString(\'getHours\',$global),282,16,\'<image>/09_date.js\');$x1378=&$x1379[0];list(,$W1378,$S1378,$U1378)=$x1379;if(!(is_object($x1378)&&isset($x1378->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1382=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,16,\'<image>/09_date.js\');$_TypeError=&$x1382[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1382;$x1383=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1384=$x1383($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1384->class)&&$x1384->class===\'Error\'&&!isset($x1384->properties[\'file\'])&&!isset($x1384->properties[\'line\'])&&!isset($x1384->properties[\'column\'])){$x1384->properties[\'file\']=\'<image>/09_date.js\';$x1384->properties[\'line\']=282;$x1384->properties[\'column\']=16;$x1384->attributes[\'file\']=$x1384->attributes[\'line\']=$x1384->attributes[\'column\']=0;}throw new JSException($x1384,282,16,\'<image>/09_date.js\');}$x1380=$x1378->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,16);$x1381=$x1380($global,$x1374,$x1378,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1386=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,35,\'<image>/09_date.js\');$_TypeError=&$x1386[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1386;$x1387=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1388=$x1387($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1388->class)&&$x1388->class===\'Error\'&&!isset($x1388->properties[\'file\'])&&!isset($x1388->properties[\'line\'])&&!isset($x1388->properties[\'column\'])){$x1388->properties[\'file\']=\'<image>/09_date.js\';$x1388->properties[\'line\']=282;$x1388->properties[\'column\']=35;$x1388->attributes[\'file\']=$x1388->attributes[\'line\']=$x1388->attributes[\'column\']=0;}throw new JSException($x1388,282,35,\'<image>/09_date.js\');}$x1385=JS::toObject($leThis,$global);unset($x1389,$W1389,$S1389,$U1389);$x1390=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1385,JS::toString(\'getMinutes\',$global),282,35,\'<image>/09_date.js\');$x1389=&$x1390[0];list(,$W1389,$S1389,$U1389)=$x1390;if(!(is_object($x1389)&&isset($x1389->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1393=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,35,\'<image>/09_date.js\');$_TypeError=&$x1393[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1393;$x1394=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1395=$x1394($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1395->class)&&$x1395->class===\'Error\'&&!isset($x1395->properties[\'file\'])&&!isset($x1395->properties[\'line\'])&&!isset($x1395->properties[\'column\'])){$x1395->properties[\'file\']=\'<image>/09_date.js\';$x1395->properties[\'line\']=282;$x1395->properties[\'column\']=35;$x1395->attributes[\'file\']=$x1395->attributes[\'line\']=$x1395->attributes[\'column\']=0;}throw new JSException($x1395,282,35,\'<image>/09_date.js\');}$x1391=$x1389->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,35);$x1392=$x1391($global,$x1385,$x1389,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1397=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,54,\'<image>/09_date.js\');$_TypeError=&$x1397[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1397;$x1398=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1399=$x1398($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1399->class)&&$x1399->class===\'Error\'&&!isset($x1399->properties[\'file\'])&&!isset($x1399->properties[\'line\'])&&!isset($x1399->properties[\'column\'])){$x1399->properties[\'file\']=\'<image>/09_date.js\';$x1399->properties[\'line\']=282;$x1399->properties[\'column\']=54;$x1399->attributes[\'file\']=$x1399->attributes[\'line\']=$x1399->attributes[\'column\']=0;}throw new JSException($x1399,282,54,\'<image>/09_date.js\');}$x1396=JS::toObject($leThis,$global);unset($x1400,$W1400,$S1400,$U1400);$x1401=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1396,JS::toString(\'getSeconds\',$global),282,54,\'<image>/09_date.js\');$x1400=&$x1401[0];list(,$W1400,$S1400,$U1400)=$x1401;if(!(is_object($x1400)&&isset($x1400->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1404=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,54,\'<image>/09_date.js\');$_TypeError=&$x1404[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1404;$x1405=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1406=$x1405($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1406->class)&&$x1406->class===\'Error\'&&!isset($x1406->properties[\'file\'])&&!isset($x1406->properties[\'line\'])&&!isset($x1406->properties[\'column\'])){$x1406->properties[\'file\']=\'<image>/09_date.js\';$x1406->properties[\'line\']=282;$x1406->properties[\'column\']=54;$x1406->attributes[\'file\']=$x1406->attributes[\'line\']=$x1406->attributes[\'column\']=0;}throw new JSException($x1406,282,54,\'<image>/09_date.js\');}$x1402=$x1400->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,54);$x1403=$x1402($global,$x1396,$x1400,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1408=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,78,\'<image>/09_date.js\');$_TypeError=&$x1408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1408;$x1409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1410=$x1409($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1410->class)&&$x1410->class===\'Error\'&&!isset($x1410->properties[\'file\'])&&!isset($x1410->properties[\'line\'])&&!isset($x1410->properties[\'column\'])){$x1410->properties[\'file\']=\'<image>/09_date.js\';$x1410->properties[\'line\']=282;$x1410->properties[\'column\']=78;$x1410->attributes[\'file\']=$x1410->attributes[\'line\']=$x1410->attributes[\'column\']=0;}throw new JSException($x1410,282,78,\'<image>/09_date.js\');}$x1407=JS::toObject($leThis,$global);unset($x1411,$W1411,$S1411,$U1411);$x1412=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1407,JS::toString(\'getMilliseconds\',$global),282,78,\'<image>/09_date.js\');$x1411=&$x1412[0];list(,$W1411,$S1411,$U1411)=$x1412;if(!(is_object($x1411)&&isset($x1411->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1415=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,78,\'<image>/09_date.js\');$_TypeError=&$x1415[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1415;$x1416=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1417=$x1416($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1417->class)&&$x1417->class===\'Error\'&&!isset($x1417->properties[\'file\'])&&!isset($x1417->properties[\'line\'])&&!isset($x1417->properties[\'column\'])){$x1417->properties[\'file\']=\'<image>/09_date.js\';$x1417->properties[\'line\']=282;$x1417->properties[\'column\']=78;$x1417->attributes[\'file\']=$x1417->attributes[\'line\']=$x1417->attributes[\'column\']=0;}throw new JSException($x1417,282,78,\'<image>/09_date.js\');}$x1413=$x1411->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',282,78);$x1414=$x1413($global,$x1407,$x1411,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1368=clone JS::$objectTemplate;unset($x1418,$W1418,$S1418,$U1418);$x1419=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$_Date,JS::toString(\'prototype\',$global),280,16,\'<image>/09_date.js\');$x1418=&$x1419[0];list(,$W1418,$S1418,$U1418)=$x1419;$x1369=$x1418;$x1368->prototype=$x1369;if(!(is_object($_Date)&&isset($_Date->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1422=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),280,16,\'<image>/09_date.js\');$_TypeError=&$x1422[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1422;$x1423=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1424=$x1423($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1424->class)&&$x1424->class===\'Error\'&&!isset($x1424->properties[\'file\'])&&!isset($x1424->properties[\'line\'])&&!isset($x1424->properties[\'column\'])){$x1424->properties[\'file\']=\'<image>/09_date.js\';$x1424->properties[\'line\']=280;$x1424->properties[\'column\']=16;$x1424->attributes[\'file\']=$x1424->attributes[\'line\']=$x1424->attributes[\'column\']=0;}throw new JSException($x1424,280,16,\'<image>/09_date.js\');}$x1420=$_Date->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',280,16);$x1421=$x1420($global,$x1368,$_Date,array($_year,$_month,$_date,$x1381,$x1392,$x1403,$x1414),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1369=$x1421;if(is_object($x1369)&&$x1369!==JS::$undefined){$x1368=$x1369;}$scope->properties[\'newDate\']=JS::$undefined;$_newDate=&$scope->properties[\'newDate\'];$UnewDate=FALSE;$_newDate=$x1368;$leThis->value=$_newDate->value;return$leThis->value;return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_31($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1471 =& $scope->properties['arguments'];
$x1471->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1471->properties[$i] = $args[$i];
$x1471->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return date('Y-m-d', $leThis->value) .
		'T' . date('H:i:s', $leThis->value) .
		'.' . ((int) (($leThis->value - (int) $leThis->value) * 1000)) .
		date('P', $leThis->value);
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_31($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1471=&$scope->properties[\'arguments\'];$x1471->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1471->properties[$i]=$args[$i];$x1471->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return date(\'Y-m-d\',$leThis->value).\'T\'.date(\'H:i:s\',$leThis->value).\'.\'.((int)(($leThis->value-(int)$leThis->value)*1000)).date(\'P\',$leThis->value);return JS::$undefined;}', "\n";
function _a3686fcdd5b5a69538641de6dddfbea8_32($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1486 =& $scope->properties['arguments'];
$x1486->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1486->properties[$i] = $args[$i];
$x1486->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['key'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_key =& $scope->properties['key'];
$Ukey = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1488 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 25, '<image>/09_date.js');
$_TypeError =& $x1488[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1488;
$x1489 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1490 = $x1489($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1490->class) && $x1490->class === 'Error' && !isset($x1490->properties['file']) && !isset($x1490->properties['line']) && !isset($x1490->properties['column'])) {$x1490->properties['file'] = '<image>/09_date.js';$x1490->properties['line'] = 302;$x1490->properties['column'] = 25;$x1490->attributes['file'] = $x1490->attributes['line'] = $x1490->attributes['column'] = 0; }
throw new JSException($x1490, 302, 25, '<image>/09_date.js');
}
$x1487 = JS::toObject($leThis, $global);
unset($x1491, $W1491, $S1491, $U1491);
$x1492 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1487, JS::toString('toISOString', $global), 302, 25, '<image>/09_date.js');
$x1491 =& $x1492[0]; list(,$W1491,$S1491,$U1491) = $x1492;
if (!(is_object($x1491) && isset($x1491->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1495 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 25, '<image>/09_date.js');
$_TypeError =& $x1495[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1495;
$x1496 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1497 = $x1496($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1497->class) && $x1497->class === 'Error' && !isset($x1497->properties['file']) && !isset($x1497->properties['line']) && !isset($x1497->properties['column'])) {$x1497->properties['file'] = '<image>/09_date.js';$x1497->properties['line'] = 302;$x1497->properties['column'] = 25;$x1497->attributes['file'] = $x1497->attributes['line'] = $x1497->attributes['column'] = 0; }
throw new JSException($x1497, 302, 25, '<image>/09_date.js');
}
$x1493 = $x1491->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 302, 25);
$x1494 = $x1493($global, $x1487, $x1491, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x1494;
;
return JS::$undefined;
}
echo 'function _a3686fcdd5b5a69538641de6dddfbea8_32($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1486=&$scope->properties[\'arguments\'];$x1486->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1486->properties[$i]=$args[$i];$x1486->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'key\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_key=&$scope->properties[\'key\'];$Ukey=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1488=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,25,\'<image>/09_date.js\');$_TypeError=&$x1488[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1488;$x1489=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1490=$x1489($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1490->class)&&$x1490->class===\'Error\'&&!isset($x1490->properties[\'file\'])&&!isset($x1490->properties[\'line\'])&&!isset($x1490->properties[\'column\'])){$x1490->properties[\'file\']=\'<image>/09_date.js\';$x1490->properties[\'line\']=302;$x1490->properties[\'column\']=25;$x1490->attributes[\'file\']=$x1490->attributes[\'line\']=$x1490->attributes[\'column\']=0;}throw new JSException($x1490,302,25,\'<image>/09_date.js\');}$x1487=JS::toObject($leThis,$global);unset($x1491,$W1491,$S1491,$U1491);$x1492=_a3686fcdd5b5a69538641de6dddfbea8_2($global,$scope,$x1487,JS::toString(\'toISOString\',$global),302,25,\'<image>/09_date.js\');$x1491=&$x1492[0];list(,$W1491,$S1491,$U1491)=$x1492;if(!(is_object($x1491)&&isset($x1491->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1495=_a3686fcdd5b5a69538641de6dddfbea8_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,25,\'<image>/09_date.js\');$_TypeError=&$x1495[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1495;$x1496=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1497=$x1496($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1497->class)&&$x1497->class===\'Error\'&&!isset($x1497->properties[\'file\'])&&!isset($x1497->properties[\'line\'])&&!isset($x1497->properties[\'column\'])){$x1497->properties[\'file\']=\'<image>/09_date.js\';$x1497->properties[\'line\']=302;$x1497->properties[\'column\']=25;$x1497->attributes[\'file\']=$x1497->attributes[\'line\']=$x1497->attributes[\'column\']=0;}throw new JSException($x1497,302,25,\'<image>/09_date.js\');}$x1493=$x1491->call;$global->trace[++$global->trace_sp]=array(\'<image>/09_date.js\',302,25);$x1494=$x1493($global,$x1487,$x1491,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x1494;return JS::$undefined;}', "\n";
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
if (isset($_Date->class) && $_Date->class === 'Array') {  if (isset($_Date->properties['length']) && $_Date->properties['length'] !== JS::$undefined) { $x137 = $_Date->properties['length']; }  else { $x137 = 0; } }
if (isset($S131)) {
$x138 = $S131->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 53, 12);
$x139 = $x138($global, $_Date, $S131, array($x126), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x139;
} else {
if (!$U131) {$x136 = $x126;if ($W131) { $x131 = $x126; }  }
else { $x136 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array') {if (is_int('parse') && 'parse' >= $_Date->properties['length']) { $_Date->properties['length'] = 'parse' + 1; }else if ($x127 === 'length' && is_int($x126) && $x137 > $x126) {  for ($i = $x126; $i < $x137; ++$i) {  unset($_Date->properties[$i], $_Date->attributes[$i]); }}};
$x155 = clone JS::$functionTemplate; $x155->call = '_a3686fcdd5b5a69538641de6dddfbea8_6'; $x155->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
  3 => 'hours',
  4 => 'minutes',
  5 => 'seconds',
  6 => 'ms',
); $x155->scope = $scope; $x155->properties['prototype'] = clone JS::$objectTemplate; $x155->attributes['prototype'] = JS::WRITABLE; $x155->properties['prototype']->properties['constructor'] = $x155; $x155->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x155->properties['length'] = 7; $x155->attributes['length'] = 0;
$x156 = JS::toString('UTC', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 10, '<image>/09_date.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x159 = $x158($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/09_date.js';$x159->properties['line'] = 63;$x159->properties['column'] = 10;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 63, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x160, $W160, $S160, $U160);
$x161 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x156, $global), 63, 10, '<image>/09_date.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if ($U160 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x156] = $x160; $x160 =& $_Date->properties[$x156]; $_Date->attributes[$x156] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U160 = FALSE; $W160 = TRUE; }
if (isset($_Date->class) && $_Date->class === 'Array') {  if (isset($_Date->properties['length']) && $_Date->properties['length'] !== JS::$undefined) { $x163 = $_Date->properties['length']; }  else { $x163 = 0; } }
if (isset($S160)) {
$x164 = $S160->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 63, 10);
$x165 = $x164($global, $_Date, $S160, array($x155), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x162 = $x165;
} else {
if (!$U160) {$x162 = $x155;if ($W160) { $x160 = $x155; }  }
else { $x162 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array') {if (is_int('UTC') && 'UTC' >= $_Date->properties['length']) { $_Date->properties['length'] = 'UTC' + 1; }else if ($x156 === 'length' && is_int($x155) && $x163 > $x155) {  for ($i = $x155; $i < $x163; ++$i) {  unset($_Date->properties[$i], $_Date->attributes[$i]); }}};
$x181 = clone JS::$functionTemplate; $x181->call = '_a3686fcdd5b5a69538641de6dddfbea8_7'; $x181->parameters = array (
); $x181->scope = $scope; $x181->properties['prototype'] = clone JS::$objectTemplate; $x181->attributes['prototype'] = JS::WRITABLE; $x181->properties['prototype']->properties['constructor'] = $x181; $x181->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x181->properties['length'] = 0; $x181->attributes['length'] = 0;
$x182 = JS::toString('now', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x183 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 67, 10, '<image>/09_date.js');
$_TypeError =& $x183[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x183;
$x184 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x185 = $x184($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x185->class) && $x185->class === 'Error' && !isset($x185->properties['file']) && !isset($x185->properties['line']) && !isset($x185->properties['column'])) {$x185->properties['file'] = '<image>/09_date.js';$x185->properties['line'] = 67;$x185->properties['column'] = 10;$x185->attributes['file'] = $x185->attributes['line'] = $x185->attributes['column'] = 0; }
throw new JSException($x185, 67, 10, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x186, $W186, $S186, $U186);
$x187 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x182, $global), 67, 10, '<image>/09_date.js');
$x186 =& $x187[0]; list(,$W186,$S186,$U186) = $x187;
if ($U186 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x182] = $x186; $x186 =& $_Date->properties[$x182]; $_Date->attributes[$x182] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U186 = FALSE; $W186 = TRUE; }
if (isset($_Date->class) && $_Date->class === 'Array') {  if (isset($_Date->properties['length']) && $_Date->properties['length'] !== JS::$undefined) { $x189 = $_Date->properties['length']; }  else { $x189 = 0; } }
if (isset($S186)) {
$x190 = $S186->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 67, 10);
$x191 = $x190($global, $_Date, $S186, array($x181), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x188 = $x191;
} else {
if (!$U186) {$x188 = $x181;if ($W186) { $x186 = $x181; }  }
else { $x188 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array') {if (is_int('now') && 'now' >= $_Date->properties['length']) { $_Date->properties['length'] = 'now' + 1; }else if ($x182 === 'length' && is_int($x181) && $x189 > $x181) {  for ($i = $x181; $i < $x189; ++$i) {  unset($_Date->properties[$i], $_Date->attributes[$i]); }}};
$x192 = clone JS::$objectTemplate;
$x193 = JS::toString('prototype', $global);
if ($_Date === JS::$undefined || $_Date === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x194 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 71, 16, '<image>/09_date.js');
$_TypeError =& $x194[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x194;
$x195 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x196 = $x195($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x196->class) && $x196->class === 'Error' && !isset($x196->properties['file']) && !isset($x196->properties['line']) && !isset($x196->properties['column'])) {$x196->properties['file'] = '<image>/09_date.js';$x196->properties['line'] = 71;$x196->properties['column'] = 16;$x196->attributes['file'] = $x196->attributes['line'] = $x196->attributes['column'] = 0; }
throw new JSException($x196, 71, 16, '<image>/09_date.js');
}
$_Date = JS::toObject($_Date, $global);
unset($x197, $W197, $S197, $U197);
$x198 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $_Date, JS::toString($x193, $global), 71, 16, '<image>/09_date.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($U197 && (!isset($_Date->extensible) || $_Date->extensible)) {$_Date->properties[$x193] = $x197; $x197 =& $_Date->properties[$x193]; $_Date->attributes[$x193] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U197 = FALSE; $W197 = TRUE; }
if (isset($_Date->class) && $_Date->class === 'Array') {  if (isset($_Date->properties['length']) && $_Date->properties['length'] !== JS::$undefined) { $x200 = $_Date->properties['length']; }  else { $x200 = 0; } }
if (isset($S197)) {
$x201 = $S197->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 71, 16);
$x202 = $x201($global, $_Date, $S197, array($x192), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x199 = $x202;
} else {
if (!$U197) {$x199 = $x192;if ($W197) { $x197 = $x192; }  }
else { $x199 = JS::$undefined; }
}
if (isset($_Date->class) && $_Date->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Date->properties['length']) { $_Date->properties['length'] = 'prototype' + 1; }else if ($x193 === 'length' && is_int($x192) && $x200 > $x192) {  for ($i = $x192; $i < $x200; ++$i) {  unset($_Date->properties[$i], $_Date->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x203 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('Object', $global), 72, 49, '<image>/09_date.js');
$_Object =& $x203[0]; list(,$WObject,$SObject,$UObject) = $x203;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x204 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 49, '<image>/09_date.js');
$_ReferenceError =& $x204[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x204;
$x205 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 72, 49);
$x206 = $x205($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x206->class) && $x206->class === 'Error' && !isset($x206->properties['file']) && !isset($x206->properties['line']) && !isset($x206->properties['column'])) {$x206->properties['file'] = '<image>/09_date.js';$x206->properties['line'] = 72;$x206->properties['column'] = 49;$x206->attributes['file'] = $x206->attributes['line'] = $x206->attributes['column'] = 0; }
throw new JSException($x206, 72, 49, '<image>/09_date.js');
}
$_Date->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Date->properties['prototype']->class = 'Date';
$_Date->properties['prototype']->extensible = TRUE;
$_Date->properties['prototype']->value = NAN;
unset($x207, $W207, $S207, $U207);
$x208 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 76, 5, '<image>/09_date.js');
$x207 =& $x208[0]; list(,$W207,$S207,$U207) = $x208;
$x209 = JS::toString('constructor', $global);
if ($x207 === JS::$undefined || $x207 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x210 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 76, 28, '<image>/09_date.js');
$_TypeError =& $x210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x210;
$x211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x212 = $x211($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error' && !isset($x212->properties['file']) && !isset($x212->properties['line']) && !isset($x212->properties['column'])) {$x212->properties['file'] = '<image>/09_date.js';$x212->properties['line'] = 76;$x212->properties['column'] = 28;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 76, 28, '<image>/09_date.js');
}
$x207 = JS::toObject($x207, $global);
unset($x213, $W213, $S213, $U213);
$x214 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x207, JS::toString($x209, $global), 76, 28, '<image>/09_date.js');
$x213 =& $x214[0]; list(,$W213,$S213,$U213) = $x214;
if ($U213 && (!isset($x207->extensible) || $x207->extensible)) {$x207->properties[$x209] = $x213; $x213 =& $x207->properties[$x209]; $x207->attributes[$x209] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U213 = FALSE; $W213 = TRUE; }
if (isset($x207->class) && $x207->class === 'Array') {  if (isset($x207->properties['length']) && $x207->properties['length'] !== JS::$undefined) { $x216 = $x207->properties['length']; }  else { $x216 = 0; } }
if (isset($S213)) {
$x217 = $S213->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 76, 28);
$x218 = $x217($global, $x207, $S213, array($_Date), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x215 = $x218;
} else {
if (!$U213) {$x215 = $_Date;if ($W213) { $x213 = $_Date; }  }
else { $x215 = JS::$undefined; }
}
if (isset($x207->class) && $x207->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x207->properties['length']) { $x207->properties['length'] = 'constructor' + 1; }else if ($x209 === 'length' && is_int($_Date) && $x216 > $_Date) {  for ($i = $_Date; $i < $x216; ++$i) {  unset($x207->properties[$i], $x207->attributes[$i]); }}};
$x221 = clone JS::$functionTemplate; $x221->call = '_a3686fcdd5b5a69538641de6dddfbea8_8'; $x221->parameters = array (
); $x221->scope = $scope; $x221->properties['prototype'] = clone JS::$objectTemplate; $x221->attributes['prototype'] = JS::WRITABLE; $x221->properties['prototype']->properties['constructor'] = $x221; $x221->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x221->properties['length'] = 0; $x221->attributes['length'] = 0;
unset($x222, $W222, $S222, $U222);
$x223 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 78, 5, '<image>/09_date.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
$x224 = JS::toString('toString', $global);
if ($x222 === JS::$undefined || $x222 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x225 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 25, '<image>/09_date.js');
$_TypeError =& $x225[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x225;
$x226 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x227 = $x226($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error' && !isset($x227->properties['file']) && !isset($x227->properties['line']) && !isset($x227->properties['column'])) {$x227->properties['file'] = '<image>/09_date.js';$x227->properties['line'] = 78;$x227->properties['column'] = 25;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 78, 25, '<image>/09_date.js');
}
$x222 = JS::toObject($x222, $global);
unset($x228, $W228, $S228, $U228);
$x229 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x222, JS::toString($x224, $global), 78, 25, '<image>/09_date.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
if ($U228 && (!isset($x222->extensible) || $x222->extensible)) {$x222->properties[$x224] = $x228; $x228 =& $x222->properties[$x224]; $x222->attributes[$x224] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U228 = FALSE; $W228 = TRUE; }
if (isset($x222->class) && $x222->class === 'Array') {  if (isset($x222->properties['length']) && $x222->properties['length'] !== JS::$undefined) { $x231 = $x222->properties['length']; }  else { $x231 = 0; } }
if (isset($S228)) {
$x232 = $S228->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 78, 25);
$x233 = $x232($global, $x222, $S228, array($x221), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x230 = $x233;
} else {
if (!$U228) {$x230 = $x221;if ($W228) { $x228 = $x221; }  }
else { $x230 = JS::$undefined; }
}
if (isset($x222->class) && $x222->class === 'Array') {if (is_int('toString') && 'toString' >= $x222->properties['length']) { $x222->properties['length'] = 'toString' + 1; }else if ($x224 === 'length' && is_int($x221) && $x231 > $x221) {  for ($i = $x221; $i < $x231; ++$i) {  unset($x222->properties[$i], $x222->attributes[$i]); }}};
$x236 = clone JS::$functionTemplate; $x236->call = '_a3686fcdd5b5a69538641de6dddfbea8_9'; $x236->parameters = array (
); $x236->scope = $scope; $x236->properties['prototype'] = clone JS::$objectTemplate; $x236->attributes['prototype'] = JS::WRITABLE; $x236->properties['prototype']->properties['constructor'] = $x236; $x236->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x236->properties['length'] = 0; $x236->attributes['length'] = 0;
unset($x237, $W237, $S237, $U237);
$x238 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 82, 5, '<image>/09_date.js');
$x237 =& $x238[0]; list(,$W237,$S237,$U237) = $x238;
$x239 = JS::toString('toDateString', $global);
if ($x237 === JS::$undefined || $x237 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 29, '<image>/09_date.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x242 = $x241($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/09_date.js';$x242->properties['line'] = 82;$x242->properties['column'] = 29;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 82, 29, '<image>/09_date.js');
}
$x237 = JS::toObject($x237, $global);
unset($x243, $W243, $S243, $U243);
$x244 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x237, JS::toString($x239, $global), 82, 29, '<image>/09_date.js');
$x243 =& $x244[0]; list(,$W243,$S243,$U243) = $x244;
if ($U243 && (!isset($x237->extensible) || $x237->extensible)) {$x237->properties[$x239] = $x243; $x243 =& $x237->properties[$x239]; $x237->attributes[$x239] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U243 = FALSE; $W243 = TRUE; }
if (isset($x237->class) && $x237->class === 'Array') {  if (isset($x237->properties['length']) && $x237->properties['length'] !== JS::$undefined) { $x246 = $x237->properties['length']; }  else { $x246 = 0; } }
if (isset($S243)) {
$x247 = $S243->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 82, 29);
$x248 = $x247($global, $x237, $S243, array($x236), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x245 = $x248;
} else {
if (!$U243) {$x245 = $x236;if ($W243) { $x243 = $x236; }  }
else { $x245 = JS::$undefined; }
}
if (isset($x237->class) && $x237->class === 'Array') {if (is_int('toDateString') && 'toDateString' >= $x237->properties['length']) { $x237->properties['length'] = 'toDateString' + 1; }else if ($x239 === 'length' && is_int($x236) && $x246 > $x236) {  for ($i = $x236; $i < $x246; ++$i) {  unset($x237->properties[$i], $x237->attributes[$i]); }}};
$x251 = clone JS::$functionTemplate; $x251->call = '_a3686fcdd5b5a69538641de6dddfbea8_10'; $x251->parameters = array (
); $x251->scope = $scope; $x251->properties['prototype'] = clone JS::$objectTemplate; $x251->attributes['prototype'] = JS::WRITABLE; $x251->properties['prototype']->properties['constructor'] = $x251; $x251->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x251->properties['length'] = 0; $x251->attributes['length'] = 0;
unset($x252, $W252, $S252, $U252);
$x253 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 86, 5, '<image>/09_date.js');
$x252 =& $x253[0]; list(,$W252,$S252,$U252) = $x253;
$x254 = JS::toString('toTimeString', $global);
if ($x252 === JS::$undefined || $x252 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x255 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 86, 29, '<image>/09_date.js');
$_TypeError =& $x255[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x255;
$x256 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x257 = $x256($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x257->class) && $x257->class === 'Error' && !isset($x257->properties['file']) && !isset($x257->properties['line']) && !isset($x257->properties['column'])) {$x257->properties['file'] = '<image>/09_date.js';$x257->properties['line'] = 86;$x257->properties['column'] = 29;$x257->attributes['file'] = $x257->attributes['line'] = $x257->attributes['column'] = 0; }
throw new JSException($x257, 86, 29, '<image>/09_date.js');
}
$x252 = JS::toObject($x252, $global);
unset($x258, $W258, $S258, $U258);
$x259 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x252, JS::toString($x254, $global), 86, 29, '<image>/09_date.js');
$x258 =& $x259[0]; list(,$W258,$S258,$U258) = $x259;
if ($U258 && (!isset($x252->extensible) || $x252->extensible)) {$x252->properties[$x254] = $x258; $x258 =& $x252->properties[$x254]; $x252->attributes[$x254] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U258 = FALSE; $W258 = TRUE; }
if (isset($x252->class) && $x252->class === 'Array') {  if (isset($x252->properties['length']) && $x252->properties['length'] !== JS::$undefined) { $x261 = $x252->properties['length']; }  else { $x261 = 0; } }
if (isset($S258)) {
$x262 = $S258->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 86, 29);
$x263 = $x262($global, $x252, $S258, array($x251), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x260 = $x263;
} else {
if (!$U258) {$x260 = $x251;if ($W258) { $x258 = $x251; }  }
else { $x260 = JS::$undefined; }
}
if (isset($x252->class) && $x252->class === 'Array') {if (is_int('toTimeString') && 'toTimeString' >= $x252->properties['length']) { $x252->properties['length'] = 'toTimeString' + 1; }else if ($x254 === 'length' && is_int($x251) && $x261 > $x251) {  for ($i = $x251; $i < $x261; ++$i) {  unset($x252->properties[$i], $x252->attributes[$i]); }}};
unset($x264, $W264, $S264, $U264);
$x265 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 90, 37, '<image>/09_date.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
unset($x266, $W266, $S266, $U266);
$x267 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x264, JS::toString('toString', $global), 90, 47, '<image>/09_date.js');
$x266 =& $x267[0]; list(,$W266,$S266,$U266) = $x267;
unset($x268, $W268, $S268, $U268);
$x269 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 90, 5, '<image>/09_date.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
$x270 = JS::toString('toLocaleString', $global);
if ($x268 === JS::$undefined || $x268 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x271 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 31, '<image>/09_date.js');
$_TypeError =& $x271[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x271;
$x272 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x273 = $x272($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x273->class) && $x273->class === 'Error' && !isset($x273->properties['file']) && !isset($x273->properties['line']) && !isset($x273->properties['column'])) {$x273->properties['file'] = '<image>/09_date.js';$x273->properties['line'] = 90;$x273->properties['column'] = 31;$x273->attributes['file'] = $x273->attributes['line'] = $x273->attributes['column'] = 0; }
throw new JSException($x273, 90, 31, '<image>/09_date.js');
}
$x268 = JS::toObject($x268, $global);
unset($x274, $W274, $S274, $U274);
$x275 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x268, JS::toString($x270, $global), 90, 31, '<image>/09_date.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
if ($U274 && (!isset($x268->extensible) || $x268->extensible)) {$x268->properties[$x270] = $x274; $x274 =& $x268->properties[$x270]; $x268->attributes[$x270] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U274 = FALSE; $W274 = TRUE; }
if (isset($x268->class) && $x268->class === 'Array') {  if (isset($x268->properties['length']) && $x268->properties['length'] !== JS::$undefined) { $x277 = $x268->properties['length']; }  else { $x277 = 0; } }
if (isset($S274)) {
$x278 = $S274->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 90, 31);
$x279 = $x278($global, $x268, $S274, array($x266), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x276 = $x279;
} else {
if (!$U274) {$x276 = $x266;if ($W274) { $x274 = $x266; }  }
else { $x276 = JS::$undefined; }
}
if (isset($x268->class) && $x268->class === 'Array') {if (is_int('toLocaleString') && 'toLocaleString' >= $x268->properties['length']) { $x268->properties['length'] = 'toLocaleString' + 1; }else if ($x270 === 'length' && is_int($x266) && $x277 > $x266) {  for ($i = $x266; $i < $x277; ++$i) {  unset($x268->properties[$i], $x268->attributes[$i]); }}};
unset($x280, $W280, $S280, $U280);
$x281 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 91, 41, '<image>/09_date.js');
$x280 =& $x281[0]; list(,$W280,$S280,$U280) = $x281;
unset($x282, $W282, $S282, $U282);
$x283 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x280, JS::toString('toDateString', $global), 91, 51, '<image>/09_date.js');
$x282 =& $x283[0]; list(,$W282,$S282,$U282) = $x283;
unset($x284, $W284, $S284, $U284);
$x285 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 91, 5, '<image>/09_date.js');
$x284 =& $x285[0]; list(,$W284,$S284,$U284) = $x285;
$x286 = JS::toString('toLocaleDateString', $global);
if ($x284 === JS::$undefined || $x284 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x287 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 91, 35, '<image>/09_date.js');
$_TypeError =& $x287[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x287;
$x288 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x289 = $x288($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x289->class) && $x289->class === 'Error' && !isset($x289->properties['file']) && !isset($x289->properties['line']) && !isset($x289->properties['column'])) {$x289->properties['file'] = '<image>/09_date.js';$x289->properties['line'] = 91;$x289->properties['column'] = 35;$x289->attributes['file'] = $x289->attributes['line'] = $x289->attributes['column'] = 0; }
throw new JSException($x289, 91, 35, '<image>/09_date.js');
}
$x284 = JS::toObject($x284, $global);
unset($x290, $W290, $S290, $U290);
$x291 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x284, JS::toString($x286, $global), 91, 35, '<image>/09_date.js');
$x290 =& $x291[0]; list(,$W290,$S290,$U290) = $x291;
if ($U290 && (!isset($x284->extensible) || $x284->extensible)) {$x284->properties[$x286] = $x290; $x290 =& $x284->properties[$x286]; $x284->attributes[$x286] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U290 = FALSE; $W290 = TRUE; }
if (isset($x284->class) && $x284->class === 'Array') {  if (isset($x284->properties['length']) && $x284->properties['length'] !== JS::$undefined) { $x293 = $x284->properties['length']; }  else { $x293 = 0; } }
if (isset($S290)) {
$x294 = $S290->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 91, 35);
$x295 = $x294($global, $x284, $S290, array($x282), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x292 = $x295;
} else {
if (!$U290) {$x292 = $x282;if ($W290) { $x290 = $x282; }  }
else { $x292 = JS::$undefined; }
}
if (isset($x284->class) && $x284->class === 'Array') {if (is_int('toLocaleDateString') && 'toLocaleDateString' >= $x284->properties['length']) { $x284->properties['length'] = 'toLocaleDateString' + 1; }else if ($x286 === 'length' && is_int($x282) && $x293 > $x282) {  for ($i = $x282; $i < $x293; ++$i) {  unset($x284->properties[$i], $x284->attributes[$i]); }}};
unset($x296, $W296, $S296, $U296);
$x297 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 92, 41, '<image>/09_date.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
unset($x298, $W298, $S298, $U298);
$x299 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x296, JS::toString('toTimeString', $global), 92, 51, '<image>/09_date.js');
$x298 =& $x299[0]; list(,$W298,$S298,$U298) = $x299;
unset($x300, $W300, $S300, $U300);
$x301 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 92, 5, '<image>/09_date.js');
$x300 =& $x301[0]; list(,$W300,$S300,$U300) = $x301;
$x302 = JS::toString('toLocaleTimeString', $global);
if ($x300 === JS::$undefined || $x300 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x303 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 92, 35, '<image>/09_date.js');
$_TypeError =& $x303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x303;
$x304 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x305 = $x304($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x305->class) && $x305->class === 'Error' && !isset($x305->properties['file']) && !isset($x305->properties['line']) && !isset($x305->properties['column'])) {$x305->properties['file'] = '<image>/09_date.js';$x305->properties['line'] = 92;$x305->properties['column'] = 35;$x305->attributes['file'] = $x305->attributes['line'] = $x305->attributes['column'] = 0; }
throw new JSException($x305, 92, 35, '<image>/09_date.js');
}
$x300 = JS::toObject($x300, $global);
unset($x306, $W306, $S306, $U306);
$x307 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x300, JS::toString($x302, $global), 92, 35, '<image>/09_date.js');
$x306 =& $x307[0]; list(,$W306,$S306,$U306) = $x307;
if ($U306 && (!isset($x300->extensible) || $x300->extensible)) {$x300->properties[$x302] = $x306; $x306 =& $x300->properties[$x302]; $x300->attributes[$x302] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U306 = FALSE; $W306 = TRUE; }
if (isset($x300->class) && $x300->class === 'Array') {  if (isset($x300->properties['length']) && $x300->properties['length'] !== JS::$undefined) { $x309 = $x300->properties['length']; }  else { $x309 = 0; } }
if (isset($S306)) {
$x310 = $S306->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 92, 35);
$x311 = $x310($global, $x300, $S306, array($x298), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x308 = $x311;
} else {
if (!$U306) {$x308 = $x298;if ($W306) { $x306 = $x298; }  }
else { $x308 = JS::$undefined; }
}
if (isset($x300->class) && $x300->class === 'Array') {if (is_int('toLocaleTimeString') && 'toLocaleTimeString' >= $x300->properties['length']) { $x300->properties['length'] = 'toLocaleTimeString' + 1; }else if ($x302 === 'length' && is_int($x298) && $x309 > $x298) {  for ($i = $x298; $i < $x309; ++$i) {  unset($x300->properties[$i], $x300->attributes[$i]); }}};
$x314 = clone JS::$functionTemplate; $x314->call = '_a3686fcdd5b5a69538641de6dddfbea8_11'; $x314->parameters = array (
); $x314->scope = $scope; $x314->properties['prototype'] = clone JS::$objectTemplate; $x314->attributes['prototype'] = JS::WRITABLE; $x314->properties['prototype']->properties['constructor'] = $x314; $x314->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x314->properties['length'] = 0; $x314->attributes['length'] = 0;
unset($x315, $W315, $S315, $U315);
$x316 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 94, 5, '<image>/09_date.js');
$x315 =& $x316[0]; list(,$W315,$S315,$U315) = $x316;
$x317 = JS::toString('valueOf', $global);
if ($x315 === JS::$undefined || $x315 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x318 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 94, 24, '<image>/09_date.js');
$_TypeError =& $x318[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x318;
$x319 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x320 = $x319($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x320->class) && $x320->class === 'Error' && !isset($x320->properties['file']) && !isset($x320->properties['line']) && !isset($x320->properties['column'])) {$x320->properties['file'] = '<image>/09_date.js';$x320->properties['line'] = 94;$x320->properties['column'] = 24;$x320->attributes['file'] = $x320->attributes['line'] = $x320->attributes['column'] = 0; }
throw new JSException($x320, 94, 24, '<image>/09_date.js');
}
$x315 = JS::toObject($x315, $global);
unset($x321, $W321, $S321, $U321);
$x322 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x315, JS::toString($x317, $global), 94, 24, '<image>/09_date.js');
$x321 =& $x322[0]; list(,$W321,$S321,$U321) = $x322;
if ($U321 && (!isset($x315->extensible) || $x315->extensible)) {$x315->properties[$x317] = $x321; $x321 =& $x315->properties[$x317]; $x315->attributes[$x317] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U321 = FALSE; $W321 = TRUE; }
if (isset($x315->class) && $x315->class === 'Array') {  if (isset($x315->properties['length']) && $x315->properties['length'] !== JS::$undefined) { $x324 = $x315->properties['length']; }  else { $x324 = 0; } }
if (isset($S321)) {
$x325 = $S321->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 94, 24);
$x326 = $x325($global, $x315, $S321, array($x314), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x323 = $x326;
} else {
if (!$U321) {$x323 = $x314;if ($W321) { $x321 = $x314; }  }
else { $x323 = JS::$undefined; }
}
if (isset($x315->class) && $x315->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x315->properties['length']) { $x315->properties['length'] = 'valueOf' + 1; }else if ($x317 === 'length' && is_int($x314) && $x324 > $x314) {  for ($i = $x314; $i < $x324; ++$i) {  unset($x315->properties[$i], $x315->attributes[$i]); }}};
unset($x327, $W327, $S327, $U327);
$x328 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 98, 30, '<image>/09_date.js');
$x327 =& $x328[0]; list(,$W327,$S327,$U327) = $x328;
unset($x329, $W329, $S329, $U329);
$x330 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x327, JS::toString('valueOf', $global), 98, 40, '<image>/09_date.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
unset($x331, $W331, $S331, $U331);
$x332 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 98, 5, '<image>/09_date.js');
$x331 =& $x332[0]; list(,$W331,$S331,$U331) = $x332;
$x333 = JS::toString('getTime', $global);
if ($x331 === JS::$undefined || $x331 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x334 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 98, 24, '<image>/09_date.js');
$_TypeError =& $x334[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x334;
$x335 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x336 = $x335($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x336->class) && $x336->class === 'Error' && !isset($x336->properties['file']) && !isset($x336->properties['line']) && !isset($x336->properties['column'])) {$x336->properties['file'] = '<image>/09_date.js';$x336->properties['line'] = 98;$x336->properties['column'] = 24;$x336->attributes['file'] = $x336->attributes['line'] = $x336->attributes['column'] = 0; }
throw new JSException($x336, 98, 24, '<image>/09_date.js');
}
$x331 = JS::toObject($x331, $global);
unset($x337, $W337, $S337, $U337);
$x338 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x331, JS::toString($x333, $global), 98, 24, '<image>/09_date.js');
$x337 =& $x338[0]; list(,$W337,$S337,$U337) = $x338;
if ($U337 && (!isset($x331->extensible) || $x331->extensible)) {$x331->properties[$x333] = $x337; $x337 =& $x331->properties[$x333]; $x331->attributes[$x333] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U337 = FALSE; $W337 = TRUE; }
if (isset($x331->class) && $x331->class === 'Array') {  if (isset($x331->properties['length']) && $x331->properties['length'] !== JS::$undefined) { $x340 = $x331->properties['length']; }  else { $x340 = 0; } }
if (isset($S337)) {
$x341 = $S337->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 98, 24);
$x342 = $x341($global, $x331, $S337, array($x329), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x339 = $x342;
} else {
if (!$U337) {$x339 = $x329;if ($W337) { $x337 = $x329; }  }
else { $x339 = JS::$undefined; }
}
if (isset($x331->class) && $x331->class === 'Array') {if (is_int('getTime') && 'getTime' >= $x331->properties['length']) { $x331->properties['length'] = 'getTime' + 1; }else if ($x333 === 'length' && is_int($x329) && $x340 > $x329) {  for ($i = $x329; $i < $x340; ++$i) {  unset($x331->properties[$i], $x331->attributes[$i]); }}};
$x345 = clone JS::$functionTemplate; $x345->call = '_a3686fcdd5b5a69538641de6dddfbea8_12'; $x345->parameters = array (
); $x345->scope = $scope; $x345->properties['prototype'] = clone JS::$objectTemplate; $x345->attributes['prototype'] = JS::WRITABLE; $x345->properties['prototype']->properties['constructor'] = $x345; $x345->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x345->properties['length'] = 0; $x345->attributes['length'] = 0;
unset($x346, $W346, $S346, $U346);
$x347 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 100, 5, '<image>/09_date.js');
$x346 =& $x347[0]; list(,$W346,$S346,$U346) = $x347;
$x348 = JS::toString('getFullYear', $global);
if ($x346 === JS::$undefined || $x346 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x349 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 100, 28, '<image>/09_date.js');
$_TypeError =& $x349[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x349;
$x350 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x351 = $x350($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error' && !isset($x351->properties['file']) && !isset($x351->properties['line']) && !isset($x351->properties['column'])) {$x351->properties['file'] = '<image>/09_date.js';$x351->properties['line'] = 100;$x351->properties['column'] = 28;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 100, 28, '<image>/09_date.js');
}
$x346 = JS::toObject($x346, $global);
unset($x352, $W352, $S352, $U352);
$x353 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x346, JS::toString($x348, $global), 100, 28, '<image>/09_date.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
if ($U352 && (!isset($x346->extensible) || $x346->extensible)) {$x346->properties[$x348] = $x352; $x352 =& $x346->properties[$x348]; $x346->attributes[$x348] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U352 = FALSE; $W352 = TRUE; }
if (isset($x346->class) && $x346->class === 'Array') {  if (isset($x346->properties['length']) && $x346->properties['length'] !== JS::$undefined) { $x355 = $x346->properties['length']; }  else { $x355 = 0; } }
if (isset($S352)) {
$x356 = $S352->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 100, 28);
$x357 = $x356($global, $x346, $S352, array($x345), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x354 = $x357;
} else {
if (!$U352) {$x354 = $x345;if ($W352) { $x352 = $x345; }  }
else { $x354 = JS::$undefined; }
}
if (isset($x346->class) && $x346->class === 'Array') {if (is_int('getFullYear') && 'getFullYear' >= $x346->properties['length']) { $x346->properties['length'] = 'getFullYear' + 1; }else if ($x348 === 'length' && is_int($x345) && $x355 > $x345) {  for ($i = $x345; $i < $x355; ++$i) {  unset($x346->properties[$i], $x346->attributes[$i]); }}};
$x373 = clone JS::$functionTemplate; $x373->call = '_a3686fcdd5b5a69538641de6dddfbea8_13'; $x373->parameters = array (
); $x373->scope = $scope; $x373->properties['prototype'] = clone JS::$objectTemplate; $x373->attributes['prototype'] = JS::WRITABLE; $x373->properties['prototype']->properties['constructor'] = $x373; $x373->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x373->properties['length'] = 0; $x373->attributes['length'] = 0;
unset($x374, $W374, $S374, $U374);
$x375 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 104, 5, '<image>/09_date.js');
$x374 =& $x375[0]; list(,$W374,$S374,$U374) = $x375;
$x376 = JS::toString('getUTCFullYear', $global);
if ($x374 === JS::$undefined || $x374 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x377 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 104, 31, '<image>/09_date.js');
$_TypeError =& $x377[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x377;
$x378 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x379 = $x378($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x379->class) && $x379->class === 'Error' && !isset($x379->properties['file']) && !isset($x379->properties['line']) && !isset($x379->properties['column'])) {$x379->properties['file'] = '<image>/09_date.js';$x379->properties['line'] = 104;$x379->properties['column'] = 31;$x379->attributes['file'] = $x379->attributes['line'] = $x379->attributes['column'] = 0; }
throw new JSException($x379, 104, 31, '<image>/09_date.js');
}
$x374 = JS::toObject($x374, $global);
unset($x380, $W380, $S380, $U380);
$x381 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x374, JS::toString($x376, $global), 104, 31, '<image>/09_date.js');
$x380 =& $x381[0]; list(,$W380,$S380,$U380) = $x381;
if ($U380 && (!isset($x374->extensible) || $x374->extensible)) {$x374->properties[$x376] = $x380; $x380 =& $x374->properties[$x376]; $x374->attributes[$x376] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U380 = FALSE; $W380 = TRUE; }
if (isset($x374->class) && $x374->class === 'Array') {  if (isset($x374->properties['length']) && $x374->properties['length'] !== JS::$undefined) { $x383 = $x374->properties['length']; }  else { $x383 = 0; } }
if (isset($S380)) {
$x384 = $S380->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 104, 31);
$x385 = $x384($global, $x374, $S380, array($x373), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x382 = $x385;
} else {
if (!$U380) {$x382 = $x373;if ($W380) { $x380 = $x373; }  }
else { $x382 = JS::$undefined; }
}
if (isset($x374->class) && $x374->class === 'Array') {if (is_int('getUTCFullYear') && 'getUTCFullYear' >= $x374->properties['length']) { $x374->properties['length'] = 'getUTCFullYear' + 1; }else if ($x376 === 'length' && is_int($x373) && $x383 > $x373) {  for ($i = $x373; $i < $x383; ++$i) {  unset($x374->properties[$i], $x374->attributes[$i]); }}};
$x399 = clone JS::$functionTemplate; $x399->call = '_a3686fcdd5b5a69538641de6dddfbea8_14'; $x399->parameters = array (
); $x399->scope = $scope; $x399->properties['prototype'] = clone JS::$objectTemplate; $x399->attributes['prototype'] = JS::WRITABLE; $x399->properties['prototype']->properties['constructor'] = $x399; $x399->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x399->properties['length'] = 0; $x399->attributes['length'] = 0;
unset($x400, $W400, $S400, $U400);
$x401 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 108, 5, '<image>/09_date.js');
$x400 =& $x401[0]; list(,$W400,$S400,$U400) = $x401;
$x402 = JS::toString('getYear', $global);
if ($x400 === JS::$undefined || $x400 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x403 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 108, 24, '<image>/09_date.js');
$_TypeError =& $x403[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x403;
$x404 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x405 = $x404($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x405->class) && $x405->class === 'Error' && !isset($x405->properties['file']) && !isset($x405->properties['line']) && !isset($x405->properties['column'])) {$x405->properties['file'] = '<image>/09_date.js';$x405->properties['line'] = 108;$x405->properties['column'] = 24;$x405->attributes['file'] = $x405->attributes['line'] = $x405->attributes['column'] = 0; }
throw new JSException($x405, 108, 24, '<image>/09_date.js');
}
$x400 = JS::toObject($x400, $global);
unset($x406, $W406, $S406, $U406);
$x407 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x400, JS::toString($x402, $global), 108, 24, '<image>/09_date.js');
$x406 =& $x407[0]; list(,$W406,$S406,$U406) = $x407;
if ($U406 && (!isset($x400->extensible) || $x400->extensible)) {$x400->properties[$x402] = $x406; $x406 =& $x400->properties[$x402]; $x400->attributes[$x402] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U406 = FALSE; $W406 = TRUE; }
if (isset($x400->class) && $x400->class === 'Array') {  if (isset($x400->properties['length']) && $x400->properties['length'] !== JS::$undefined) { $x409 = $x400->properties['length']; }  else { $x409 = 0; } }
if (isset($S406)) {
$x410 = $S406->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 108, 24);
$x411 = $x410($global, $x400, $S406, array($x399), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x408 = $x411;
} else {
if (!$U406) {$x408 = $x399;if ($W406) { $x406 = $x399; }  }
else { $x408 = JS::$undefined; }
}
if (isset($x400->class) && $x400->class === 'Array') {if (is_int('getYear') && 'getYear' >= $x400->properties['length']) { $x400->properties['length'] = 'getYear' + 1; }else if ($x402 === 'length' && is_int($x399) && $x409 > $x399) {  for ($i = $x399; $i < $x409; ++$i) {  unset($x400->properties[$i], $x400->attributes[$i]); }}};
unset($x412, $W412, $S412, $U412);
$x413 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 112, 33, '<image>/09_date.js');
$x412 =& $x413[0]; list(,$W412,$S412,$U412) = $x413;
unset($x414, $W414, $S414, $U414);
$x415 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x412, JS::toString('getUTCFullYear', $global), 112, 43, '<image>/09_date.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
unset($x416, $W416, $S416, $U416);
$x417 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 112, 5, '<image>/09_date.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
$x418 = JS::toString('getUTCYear', $global);
if ($x416 === JS::$undefined || $x416 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x419 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 112, 27, '<image>/09_date.js');
$_TypeError =& $x419[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x419;
$x420 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x421 = $x420($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x421->class) && $x421->class === 'Error' && !isset($x421->properties['file']) && !isset($x421->properties['line']) && !isset($x421->properties['column'])) {$x421->properties['file'] = '<image>/09_date.js';$x421->properties['line'] = 112;$x421->properties['column'] = 27;$x421->attributes['file'] = $x421->attributes['line'] = $x421->attributes['column'] = 0; }
throw new JSException($x421, 112, 27, '<image>/09_date.js');
}
$x416 = JS::toObject($x416, $global);
unset($x422, $W422, $S422, $U422);
$x423 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x416, JS::toString($x418, $global), 112, 27, '<image>/09_date.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
if ($U422 && (!isset($x416->extensible) || $x416->extensible)) {$x416->properties[$x418] = $x422; $x422 =& $x416->properties[$x418]; $x416->attributes[$x418] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U422 = FALSE; $W422 = TRUE; }
if (isset($x416->class) && $x416->class === 'Array') {  if (isset($x416->properties['length']) && $x416->properties['length'] !== JS::$undefined) { $x425 = $x416->properties['length']; }  else { $x425 = 0; } }
if (isset($S422)) {
$x426 = $S422->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 112, 27);
$x427 = $x426($global, $x416, $S422, array($x414), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x424 = $x427;
} else {
if (!$U422) {$x424 = $x414;if ($W422) { $x422 = $x414; }  }
else { $x424 = JS::$undefined; }
}
if (isset($x416->class) && $x416->class === 'Array') {if (is_int('getUTCYear') && 'getUTCYear' >= $x416->properties['length']) { $x416->properties['length'] = 'getUTCYear' + 1; }else if ($x418 === 'length' && is_int($x414) && $x425 > $x414) {  for ($i = $x414; $i < $x425; ++$i) {  unset($x416->properties[$i], $x416->attributes[$i]); }}};
$x430 = clone JS::$functionTemplate; $x430->call = '_a3686fcdd5b5a69538641de6dddfbea8_15'; $x430->parameters = array (
); $x430->scope = $scope; $x430->properties['prototype'] = clone JS::$objectTemplate; $x430->attributes['prototype'] = JS::WRITABLE; $x430->properties['prototype']->properties['constructor'] = $x430; $x430->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x430->properties['length'] = 0; $x430->attributes['length'] = 0;
unset($x431, $W431, $S431, $U431);
$x432 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 114, 5, '<image>/09_date.js');
$x431 =& $x432[0]; list(,$W431,$S431,$U431) = $x432;
$x433 = JS::toString('getMonth', $global);
if ($x431 === JS::$undefined || $x431 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x434 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 114, 25, '<image>/09_date.js');
$_TypeError =& $x434[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x434;
$x435 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x436 = $x435($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x436->class) && $x436->class === 'Error' && !isset($x436->properties['file']) && !isset($x436->properties['line']) && !isset($x436->properties['column'])) {$x436->properties['file'] = '<image>/09_date.js';$x436->properties['line'] = 114;$x436->properties['column'] = 25;$x436->attributes['file'] = $x436->attributes['line'] = $x436->attributes['column'] = 0; }
throw new JSException($x436, 114, 25, '<image>/09_date.js');
}
$x431 = JS::toObject($x431, $global);
unset($x437, $W437, $S437, $U437);
$x438 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x431, JS::toString($x433, $global), 114, 25, '<image>/09_date.js');
$x437 =& $x438[0]; list(,$W437,$S437,$U437) = $x438;
if ($U437 && (!isset($x431->extensible) || $x431->extensible)) {$x431->properties[$x433] = $x437; $x437 =& $x431->properties[$x433]; $x431->attributes[$x433] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U437 = FALSE; $W437 = TRUE; }
if (isset($x431->class) && $x431->class === 'Array') {  if (isset($x431->properties['length']) && $x431->properties['length'] !== JS::$undefined) { $x440 = $x431->properties['length']; }  else { $x440 = 0; } }
if (isset($S437)) {
$x441 = $S437->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 114, 25);
$x442 = $x441($global, $x431, $S437, array($x430), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x439 = $x442;
} else {
if (!$U437) {$x439 = $x430;if ($W437) { $x437 = $x430; }  }
else { $x439 = JS::$undefined; }
}
if (isset($x431->class) && $x431->class === 'Array') {if (is_int('getMonth') && 'getMonth' >= $x431->properties['length']) { $x431->properties['length'] = 'getMonth' + 1; }else if ($x433 === 'length' && is_int($x430) && $x440 > $x430) {  for ($i = $x430; $i < $x440; ++$i) {  unset($x431->properties[$i], $x431->attributes[$i]); }}};
unset($x443, $W443, $S443, $U443);
$x444 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 118, 34, '<image>/09_date.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
unset($x445, $W445, $S445, $U445);
$x446 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x443, JS::toString('getUTCFullYear', $global), 118, 44, '<image>/09_date.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
unset($x447, $W447, $S447, $U447);
$x448 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 118, 5, '<image>/09_date.js');
$x447 =& $x448[0]; list(,$W447,$S447,$U447) = $x448;
$x449 = JS::toString('getUTCMonth', $global);
if ($x447 === JS::$undefined || $x447 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x450 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 118, 28, '<image>/09_date.js');
$_TypeError =& $x450[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x450;
$x451 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x452 = $x451($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x452->class) && $x452->class === 'Error' && !isset($x452->properties['file']) && !isset($x452->properties['line']) && !isset($x452->properties['column'])) {$x452->properties['file'] = '<image>/09_date.js';$x452->properties['line'] = 118;$x452->properties['column'] = 28;$x452->attributes['file'] = $x452->attributes['line'] = $x452->attributes['column'] = 0; }
throw new JSException($x452, 118, 28, '<image>/09_date.js');
}
$x447 = JS::toObject($x447, $global);
unset($x453, $W453, $S453, $U453);
$x454 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x447, JS::toString($x449, $global), 118, 28, '<image>/09_date.js');
$x453 =& $x454[0]; list(,$W453,$S453,$U453) = $x454;
if ($U453 && (!isset($x447->extensible) || $x447->extensible)) {$x447->properties[$x449] = $x453; $x453 =& $x447->properties[$x449]; $x447->attributes[$x449] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U453 = FALSE; $W453 = TRUE; }
if (isset($x447->class) && $x447->class === 'Array') {  if (isset($x447->properties['length']) && $x447->properties['length'] !== JS::$undefined) { $x456 = $x447->properties['length']; }  else { $x456 = 0; } }
if (isset($S453)) {
$x457 = $S453->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 118, 28);
$x458 = $x457($global, $x447, $S453, array($x445), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x455 = $x458;
} else {
if (!$U453) {$x455 = $x445;if ($W453) { $x453 = $x445; }  }
else { $x455 = JS::$undefined; }
}
if (isset($x447->class) && $x447->class === 'Array') {if (is_int('getUTCMonth') && 'getUTCMonth' >= $x447->properties['length']) { $x447->properties['length'] = 'getUTCMonth' + 1; }else if ($x449 === 'length' && is_int($x445) && $x456 > $x445) {  for ($i = $x445; $i < $x456; ++$i) {  unset($x447->properties[$i], $x447->attributes[$i]); }}};
$x461 = clone JS::$functionTemplate; $x461->call = '_a3686fcdd5b5a69538641de6dddfbea8_16'; $x461->parameters = array (
); $x461->scope = $scope; $x461->properties['prototype'] = clone JS::$objectTemplate; $x461->attributes['prototype'] = JS::WRITABLE; $x461->properties['prototype']->properties['constructor'] = $x461; $x461->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x461->properties['length'] = 0; $x461->attributes['length'] = 0;
unset($x462, $W462, $S462, $U462);
$x463 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 120, 5, '<image>/09_date.js');
$x462 =& $x463[0]; list(,$W462,$S462,$U462) = $x463;
$x464 = JS::toString('getDate', $global);
if ($x462 === JS::$undefined || $x462 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x465 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 24, '<image>/09_date.js');
$_TypeError =& $x465[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x465;
$x466 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x467 = $x466($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x467->class) && $x467->class === 'Error' && !isset($x467->properties['file']) && !isset($x467->properties['line']) && !isset($x467->properties['column'])) {$x467->properties['file'] = '<image>/09_date.js';$x467->properties['line'] = 120;$x467->properties['column'] = 24;$x467->attributes['file'] = $x467->attributes['line'] = $x467->attributes['column'] = 0; }
throw new JSException($x467, 120, 24, '<image>/09_date.js');
}
$x462 = JS::toObject($x462, $global);
unset($x468, $W468, $S468, $U468);
$x469 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x462, JS::toString($x464, $global), 120, 24, '<image>/09_date.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if ($U468 && (!isset($x462->extensible) || $x462->extensible)) {$x462->properties[$x464] = $x468; $x468 =& $x462->properties[$x464]; $x462->attributes[$x464] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U468 = FALSE; $W468 = TRUE; }
if (isset($x462->class) && $x462->class === 'Array') {  if (isset($x462->properties['length']) && $x462->properties['length'] !== JS::$undefined) { $x471 = $x462->properties['length']; }  else { $x471 = 0; } }
if (isset($S468)) {
$x472 = $S468->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 120, 24);
$x473 = $x472($global, $x462, $S468, array($x461), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x470 = $x473;
} else {
if (!$U468) {$x470 = $x461;if ($W468) { $x468 = $x461; }  }
else { $x470 = JS::$undefined; }
}
if (isset($x462->class) && $x462->class === 'Array') {if (is_int('getDate') && 'getDate' >= $x462->properties['length']) { $x462->properties['length'] = 'getDate' + 1; }else if ($x464 === 'length' && is_int($x461) && $x471 > $x461) {  for ($i = $x461; $i < $x471; ++$i) {  unset($x462->properties[$i], $x462->attributes[$i]); }}};
unset($x474, $W474, $S474, $U474);
$x475 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 124, 33, '<image>/09_date.js');
$x474 =& $x475[0]; list(,$W474,$S474,$U474) = $x475;
unset($x476, $W476, $S476, $U476);
$x477 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x474, JS::toString('getUTCFullYear', $global), 124, 43, '<image>/09_date.js');
$x476 =& $x477[0]; list(,$W476,$S476,$U476) = $x477;
unset($x478, $W478, $S478, $U478);
$x479 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 124, 5, '<image>/09_date.js');
$x478 =& $x479[0]; list(,$W478,$S478,$U478) = $x479;
$x480 = JS::toString('getUTCDate', $global);
if ($x478 === JS::$undefined || $x478 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x481 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 124, 27, '<image>/09_date.js');
$_TypeError =& $x481[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x481;
$x482 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x483 = $x482($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x483->class) && $x483->class === 'Error' && !isset($x483->properties['file']) && !isset($x483->properties['line']) && !isset($x483->properties['column'])) {$x483->properties['file'] = '<image>/09_date.js';$x483->properties['line'] = 124;$x483->properties['column'] = 27;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 124, 27, '<image>/09_date.js');
}
$x478 = JS::toObject($x478, $global);
unset($x484, $W484, $S484, $U484);
$x485 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x478, JS::toString($x480, $global), 124, 27, '<image>/09_date.js');
$x484 =& $x485[0]; list(,$W484,$S484,$U484) = $x485;
if ($U484 && (!isset($x478->extensible) || $x478->extensible)) {$x478->properties[$x480] = $x484; $x484 =& $x478->properties[$x480]; $x478->attributes[$x480] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U484 = FALSE; $W484 = TRUE; }
if (isset($x478->class) && $x478->class === 'Array') {  if (isset($x478->properties['length']) && $x478->properties['length'] !== JS::$undefined) { $x487 = $x478->properties['length']; }  else { $x487 = 0; } }
if (isset($S484)) {
$x488 = $S484->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 124, 27);
$x489 = $x488($global, $x478, $S484, array($x476), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x486 = $x489;
} else {
if (!$U484) {$x486 = $x476;if ($W484) { $x484 = $x476; }  }
else { $x486 = JS::$undefined; }
}
if (isset($x478->class) && $x478->class === 'Array') {if (is_int('getUTCDate') && 'getUTCDate' >= $x478->properties['length']) { $x478->properties['length'] = 'getUTCDate' + 1; }else if ($x480 === 'length' && is_int($x476) && $x487 > $x476) {  for ($i = $x476; $i < $x487; ++$i) {  unset($x478->properties[$i], $x478->attributes[$i]); }}};
$x492 = clone JS::$functionTemplate; $x492->call = '_a3686fcdd5b5a69538641de6dddfbea8_17'; $x492->parameters = array (
); $x492->scope = $scope; $x492->properties['prototype'] = clone JS::$objectTemplate; $x492->attributes['prototype'] = JS::WRITABLE; $x492->properties['prototype']->properties['constructor'] = $x492; $x492->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x492->properties['length'] = 0; $x492->attributes['length'] = 0;
unset($x493, $W493, $S493, $U493);
$x494 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 126, 5, '<image>/09_date.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
$x495 = JS::toString('getDay', $global);
if ($x493 === JS::$undefined || $x493 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x496 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 126, 23, '<image>/09_date.js');
$_TypeError =& $x496[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x496;
$x497 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x498 = $x497($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x498->class) && $x498->class === 'Error' && !isset($x498->properties['file']) && !isset($x498->properties['line']) && !isset($x498->properties['column'])) {$x498->properties['file'] = '<image>/09_date.js';$x498->properties['line'] = 126;$x498->properties['column'] = 23;$x498->attributes['file'] = $x498->attributes['line'] = $x498->attributes['column'] = 0; }
throw new JSException($x498, 126, 23, '<image>/09_date.js');
}
$x493 = JS::toObject($x493, $global);
unset($x499, $W499, $S499, $U499);
$x500 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x493, JS::toString($x495, $global), 126, 23, '<image>/09_date.js');
$x499 =& $x500[0]; list(,$W499,$S499,$U499) = $x500;
if ($U499 && (!isset($x493->extensible) || $x493->extensible)) {$x493->properties[$x495] = $x499; $x499 =& $x493->properties[$x495]; $x493->attributes[$x495] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U499 = FALSE; $W499 = TRUE; }
if (isset($x493->class) && $x493->class === 'Array') {  if (isset($x493->properties['length']) && $x493->properties['length'] !== JS::$undefined) { $x502 = $x493->properties['length']; }  else { $x502 = 0; } }
if (isset($S499)) {
$x503 = $S499->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 126, 23);
$x504 = $x503($global, $x493, $S499, array($x492), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x501 = $x504;
} else {
if (!$U499) {$x501 = $x492;if ($W499) { $x499 = $x492; }  }
else { $x501 = JS::$undefined; }
}
if (isset($x493->class) && $x493->class === 'Array') {if (is_int('getDay') && 'getDay' >= $x493->properties['length']) { $x493->properties['length'] = 'getDay' + 1; }else if ($x495 === 'length' && is_int($x492) && $x502 > $x492) {  for ($i = $x492; $i < $x502; ++$i) {  unset($x493->properties[$i], $x493->attributes[$i]); }}};
unset($x505, $W505, $S505, $U505);
$x506 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 130, 32, '<image>/09_date.js');
$x505 =& $x506[0]; list(,$W505,$S505,$U505) = $x506;
unset($x507, $W507, $S507, $U507);
$x508 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x505, JS::toString('getUTCFullYear', $global), 130, 42, '<image>/09_date.js');
$x507 =& $x508[0]; list(,$W507,$S507,$U507) = $x508;
unset($x509, $W509, $S509, $U509);
$x510 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 130, 5, '<image>/09_date.js');
$x509 =& $x510[0]; list(,$W509,$S509,$U509) = $x510;
$x511 = JS::toString('getUTCDay', $global);
if ($x509 === JS::$undefined || $x509 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x512 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 130, 26, '<image>/09_date.js');
$_TypeError =& $x512[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x512;
$x513 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x514 = $x513($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x514->class) && $x514->class === 'Error' && !isset($x514->properties['file']) && !isset($x514->properties['line']) && !isset($x514->properties['column'])) {$x514->properties['file'] = '<image>/09_date.js';$x514->properties['line'] = 130;$x514->properties['column'] = 26;$x514->attributes['file'] = $x514->attributes['line'] = $x514->attributes['column'] = 0; }
throw new JSException($x514, 130, 26, '<image>/09_date.js');
}
$x509 = JS::toObject($x509, $global);
unset($x515, $W515, $S515, $U515);
$x516 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x509, JS::toString($x511, $global), 130, 26, '<image>/09_date.js');
$x515 =& $x516[0]; list(,$W515,$S515,$U515) = $x516;
if ($U515 && (!isset($x509->extensible) || $x509->extensible)) {$x509->properties[$x511] = $x515; $x515 =& $x509->properties[$x511]; $x509->attributes[$x511] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U515 = FALSE; $W515 = TRUE; }
if (isset($x509->class) && $x509->class === 'Array') {  if (isset($x509->properties['length']) && $x509->properties['length'] !== JS::$undefined) { $x518 = $x509->properties['length']; }  else { $x518 = 0; } }
if (isset($S515)) {
$x519 = $S515->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 130, 26);
$x520 = $x519($global, $x509, $S515, array($x507), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x517 = $x520;
} else {
if (!$U515) {$x517 = $x507;if ($W515) { $x515 = $x507; }  }
else { $x517 = JS::$undefined; }
}
if (isset($x509->class) && $x509->class === 'Array') {if (is_int('getUTCDay') && 'getUTCDay' >= $x509->properties['length']) { $x509->properties['length'] = 'getUTCDay' + 1; }else if ($x511 === 'length' && is_int($x507) && $x518 > $x507) {  for ($i = $x507; $i < $x518; ++$i) {  unset($x509->properties[$i], $x509->attributes[$i]); }}};
$x523 = clone JS::$functionTemplate; $x523->call = '_a3686fcdd5b5a69538641de6dddfbea8_18'; $x523->parameters = array (
); $x523->scope = $scope; $x523->properties['prototype'] = clone JS::$objectTemplate; $x523->attributes['prototype'] = JS::WRITABLE; $x523->properties['prototype']->properties['constructor'] = $x523; $x523->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x523->properties['length'] = 0; $x523->attributes['length'] = 0;
unset($x524, $W524, $S524, $U524);
$x525 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 132, 5, '<image>/09_date.js');
$x524 =& $x525[0]; list(,$W524,$S524,$U524) = $x525;
$x526 = JS::toString('getHours', $global);
if ($x524 === JS::$undefined || $x524 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x527 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 132, 25, '<image>/09_date.js');
$_TypeError =& $x527[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x527;
$x528 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x529 = $x528($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x529->class) && $x529->class === 'Error' && !isset($x529->properties['file']) && !isset($x529->properties['line']) && !isset($x529->properties['column'])) {$x529->properties['file'] = '<image>/09_date.js';$x529->properties['line'] = 132;$x529->properties['column'] = 25;$x529->attributes['file'] = $x529->attributes['line'] = $x529->attributes['column'] = 0; }
throw new JSException($x529, 132, 25, '<image>/09_date.js');
}
$x524 = JS::toObject($x524, $global);
unset($x530, $W530, $S530, $U530);
$x531 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x524, JS::toString($x526, $global), 132, 25, '<image>/09_date.js');
$x530 =& $x531[0]; list(,$W530,$S530,$U530) = $x531;
if ($U530 && (!isset($x524->extensible) || $x524->extensible)) {$x524->properties[$x526] = $x530; $x530 =& $x524->properties[$x526]; $x524->attributes[$x526] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U530 = FALSE; $W530 = TRUE; }
if (isset($x524->class) && $x524->class === 'Array') {  if (isset($x524->properties['length']) && $x524->properties['length'] !== JS::$undefined) { $x533 = $x524->properties['length']; }  else { $x533 = 0; } }
if (isset($S530)) {
$x534 = $S530->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 132, 25);
$x535 = $x534($global, $x524, $S530, array($x523), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x532 = $x535;
} else {
if (!$U530) {$x532 = $x523;if ($W530) { $x530 = $x523; }  }
else { $x532 = JS::$undefined; }
}
if (isset($x524->class) && $x524->class === 'Array') {if (is_int('getHours') && 'getHours' >= $x524->properties['length']) { $x524->properties['length'] = 'getHours' + 1; }else if ($x526 === 'length' && is_int($x523) && $x533 > $x523) {  for ($i = $x523; $i < $x533; ++$i) {  unset($x524->properties[$i], $x524->attributes[$i]); }}};
unset($x536, $W536, $S536, $U536);
$x537 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 136, 34, '<image>/09_date.js');
$x536 =& $x537[0]; list(,$W536,$S536,$U536) = $x537;
unset($x538, $W538, $S538, $U538);
$x539 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x536, JS::toString('getUTCFullYear', $global), 136, 44, '<image>/09_date.js');
$x538 =& $x539[0]; list(,$W538,$S538,$U538) = $x539;
unset($x540, $W540, $S540, $U540);
$x541 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 136, 5, '<image>/09_date.js');
$x540 =& $x541[0]; list(,$W540,$S540,$U540) = $x541;
$x542 = JS::toString('getUTCHours', $global);
if ($x540 === JS::$undefined || $x540 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x543 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 136, 28, '<image>/09_date.js');
$_TypeError =& $x543[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x543;
$x544 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x545 = $x544($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x545->class) && $x545->class === 'Error' && !isset($x545->properties['file']) && !isset($x545->properties['line']) && !isset($x545->properties['column'])) {$x545->properties['file'] = '<image>/09_date.js';$x545->properties['line'] = 136;$x545->properties['column'] = 28;$x545->attributes['file'] = $x545->attributes['line'] = $x545->attributes['column'] = 0; }
throw new JSException($x545, 136, 28, '<image>/09_date.js');
}
$x540 = JS::toObject($x540, $global);
unset($x546, $W546, $S546, $U546);
$x547 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x540, JS::toString($x542, $global), 136, 28, '<image>/09_date.js');
$x546 =& $x547[0]; list(,$W546,$S546,$U546) = $x547;
if ($U546 && (!isset($x540->extensible) || $x540->extensible)) {$x540->properties[$x542] = $x546; $x546 =& $x540->properties[$x542]; $x540->attributes[$x542] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U546 = FALSE; $W546 = TRUE; }
if (isset($x540->class) && $x540->class === 'Array') {  if (isset($x540->properties['length']) && $x540->properties['length'] !== JS::$undefined) { $x549 = $x540->properties['length']; }  else { $x549 = 0; } }
if (isset($S546)) {
$x550 = $S546->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 136, 28);
$x551 = $x550($global, $x540, $S546, array($x538), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x548 = $x551;
} else {
if (!$U546) {$x548 = $x538;if ($W546) { $x546 = $x538; }  }
else { $x548 = JS::$undefined; }
}
if (isset($x540->class) && $x540->class === 'Array') {if (is_int('getUTCHours') && 'getUTCHours' >= $x540->properties['length']) { $x540->properties['length'] = 'getUTCHours' + 1; }else if ($x542 === 'length' && is_int($x538) && $x549 > $x538) {  for ($i = $x538; $i < $x549; ++$i) {  unset($x540->properties[$i], $x540->attributes[$i]); }}};
$x554 = clone JS::$functionTemplate; $x554->call = '_a3686fcdd5b5a69538641de6dddfbea8_19'; $x554->parameters = array (
); $x554->scope = $scope; $x554->properties['prototype'] = clone JS::$objectTemplate; $x554->attributes['prototype'] = JS::WRITABLE; $x554->properties['prototype']->properties['constructor'] = $x554; $x554->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x554->properties['length'] = 0; $x554->attributes['length'] = 0;
unset($x555, $W555, $S555, $U555);
$x556 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 138, 5, '<image>/09_date.js');
$x555 =& $x556[0]; list(,$W555,$S555,$U555) = $x556;
$x557 = JS::toString('getMinutes', $global);
if ($x555 === JS::$undefined || $x555 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x558 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 138, 27, '<image>/09_date.js');
$_TypeError =& $x558[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x558;
$x559 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x560 = $x559($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x560->class) && $x560->class === 'Error' && !isset($x560->properties['file']) && !isset($x560->properties['line']) && !isset($x560->properties['column'])) {$x560->properties['file'] = '<image>/09_date.js';$x560->properties['line'] = 138;$x560->properties['column'] = 27;$x560->attributes['file'] = $x560->attributes['line'] = $x560->attributes['column'] = 0; }
throw new JSException($x560, 138, 27, '<image>/09_date.js');
}
$x555 = JS::toObject($x555, $global);
unset($x561, $W561, $S561, $U561);
$x562 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x555, JS::toString($x557, $global), 138, 27, '<image>/09_date.js');
$x561 =& $x562[0]; list(,$W561,$S561,$U561) = $x562;
if ($U561 && (!isset($x555->extensible) || $x555->extensible)) {$x555->properties[$x557] = $x561; $x561 =& $x555->properties[$x557]; $x555->attributes[$x557] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U561 = FALSE; $W561 = TRUE; }
if (isset($x555->class) && $x555->class === 'Array') {  if (isset($x555->properties['length']) && $x555->properties['length'] !== JS::$undefined) { $x564 = $x555->properties['length']; }  else { $x564 = 0; } }
if (isset($S561)) {
$x565 = $S561->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 138, 27);
$x566 = $x565($global, $x555, $S561, array($x554), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x563 = $x566;
} else {
if (!$U561) {$x563 = $x554;if ($W561) { $x561 = $x554; }  }
else { $x563 = JS::$undefined; }
}
if (isset($x555->class) && $x555->class === 'Array') {if (is_int('getMinutes') && 'getMinutes' >= $x555->properties['length']) { $x555->properties['length'] = 'getMinutes' + 1; }else if ($x557 === 'length' && is_int($x554) && $x564 > $x554) {  for ($i = $x554; $i < $x564; ++$i) {  unset($x555->properties[$i], $x555->attributes[$i]); }}};
unset($x567, $W567, $S567, $U567);
$x568 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 142, 36, '<image>/09_date.js');
$x567 =& $x568[0]; list(,$W567,$S567,$U567) = $x568;
unset($x569, $W569, $S569, $U569);
$x570 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x567, JS::toString('getUTCFullYear', $global), 142, 46, '<image>/09_date.js');
$x569 =& $x570[0]; list(,$W569,$S569,$U569) = $x570;
unset($x571, $W571, $S571, $U571);
$x572 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 142, 5, '<image>/09_date.js');
$x571 =& $x572[0]; list(,$W571,$S571,$U571) = $x572;
$x573 = JS::toString('getUTCMinutes', $global);
if ($x571 === JS::$undefined || $x571 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x574 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 142, 30, '<image>/09_date.js');
$_TypeError =& $x574[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x574;
$x575 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x576 = $x575($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x576->class) && $x576->class === 'Error' && !isset($x576->properties['file']) && !isset($x576->properties['line']) && !isset($x576->properties['column'])) {$x576->properties['file'] = '<image>/09_date.js';$x576->properties['line'] = 142;$x576->properties['column'] = 30;$x576->attributes['file'] = $x576->attributes['line'] = $x576->attributes['column'] = 0; }
throw new JSException($x576, 142, 30, '<image>/09_date.js');
}
$x571 = JS::toObject($x571, $global);
unset($x577, $W577, $S577, $U577);
$x578 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x571, JS::toString($x573, $global), 142, 30, '<image>/09_date.js');
$x577 =& $x578[0]; list(,$W577,$S577,$U577) = $x578;
if ($U577 && (!isset($x571->extensible) || $x571->extensible)) {$x571->properties[$x573] = $x577; $x577 =& $x571->properties[$x573]; $x571->attributes[$x573] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U577 = FALSE; $W577 = TRUE; }
if (isset($x571->class) && $x571->class === 'Array') {  if (isset($x571->properties['length']) && $x571->properties['length'] !== JS::$undefined) { $x580 = $x571->properties['length']; }  else { $x580 = 0; } }
if (isset($S577)) {
$x581 = $S577->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 142, 30);
$x582 = $x581($global, $x571, $S577, array($x569), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x579 = $x582;
} else {
if (!$U577) {$x579 = $x569;if ($W577) { $x577 = $x569; }  }
else { $x579 = JS::$undefined; }
}
if (isset($x571->class) && $x571->class === 'Array') {if (is_int('getUTCMinutes') && 'getUTCMinutes' >= $x571->properties['length']) { $x571->properties['length'] = 'getUTCMinutes' + 1; }else if ($x573 === 'length' && is_int($x569) && $x580 > $x569) {  for ($i = $x569; $i < $x580; ++$i) {  unset($x571->properties[$i], $x571->attributes[$i]); }}};
$x585 = clone JS::$functionTemplate; $x585->call = '_a3686fcdd5b5a69538641de6dddfbea8_20'; $x585->parameters = array (
); $x585->scope = $scope; $x585->properties['prototype'] = clone JS::$objectTemplate; $x585->attributes['prototype'] = JS::WRITABLE; $x585->properties['prototype']->properties['constructor'] = $x585; $x585->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x585->properties['length'] = 0; $x585->attributes['length'] = 0;
unset($x586, $W586, $S586, $U586);
$x587 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 144, 5, '<image>/09_date.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
$x588 = JS::toString('getSeconds', $global);
if ($x586 === JS::$undefined || $x586 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x589 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 27, '<image>/09_date.js');
$_TypeError =& $x589[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x589;
$x590 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x591 = $x590($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x591->class) && $x591->class === 'Error' && !isset($x591->properties['file']) && !isset($x591->properties['line']) && !isset($x591->properties['column'])) {$x591->properties['file'] = '<image>/09_date.js';$x591->properties['line'] = 144;$x591->properties['column'] = 27;$x591->attributes['file'] = $x591->attributes['line'] = $x591->attributes['column'] = 0; }
throw new JSException($x591, 144, 27, '<image>/09_date.js');
}
$x586 = JS::toObject($x586, $global);
unset($x592, $W592, $S592, $U592);
$x593 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x586, JS::toString($x588, $global), 144, 27, '<image>/09_date.js');
$x592 =& $x593[0]; list(,$W592,$S592,$U592) = $x593;
if ($U592 && (!isset($x586->extensible) || $x586->extensible)) {$x586->properties[$x588] = $x592; $x592 =& $x586->properties[$x588]; $x586->attributes[$x588] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U592 = FALSE; $W592 = TRUE; }
if (isset($x586->class) && $x586->class === 'Array') {  if (isset($x586->properties['length']) && $x586->properties['length'] !== JS::$undefined) { $x595 = $x586->properties['length']; }  else { $x595 = 0; } }
if (isset($S592)) {
$x596 = $S592->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 144, 27);
$x597 = $x596($global, $x586, $S592, array($x585), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x594 = $x597;
} else {
if (!$U592) {$x594 = $x585;if ($W592) { $x592 = $x585; }  }
else { $x594 = JS::$undefined; }
}
if (isset($x586->class) && $x586->class === 'Array') {if (is_int('getSeconds') && 'getSeconds' >= $x586->properties['length']) { $x586->properties['length'] = 'getSeconds' + 1; }else if ($x588 === 'length' && is_int($x585) && $x595 > $x585) {  for ($i = $x585; $i < $x595; ++$i) {  unset($x586->properties[$i], $x586->attributes[$i]); }}};
unset($x598, $W598, $S598, $U598);
$x599 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 148, 36, '<image>/09_date.js');
$x598 =& $x599[0]; list(,$W598,$S598,$U598) = $x599;
unset($x600, $W600, $S600, $U600);
$x601 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x598, JS::toString('getUTCFullYear', $global), 148, 46, '<image>/09_date.js');
$x600 =& $x601[0]; list(,$W600,$S600,$U600) = $x601;
unset($x602, $W602, $S602, $U602);
$x603 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 148, 5, '<image>/09_date.js');
$x602 =& $x603[0]; list(,$W602,$S602,$U602) = $x603;
$x604 = JS::toString('getUTCSeconds', $global);
if ($x602 === JS::$undefined || $x602 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x605 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 148, 30, '<image>/09_date.js');
$_TypeError =& $x605[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x605;
$x606 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x607 = $x606($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x607->class) && $x607->class === 'Error' && !isset($x607->properties['file']) && !isset($x607->properties['line']) && !isset($x607->properties['column'])) {$x607->properties['file'] = '<image>/09_date.js';$x607->properties['line'] = 148;$x607->properties['column'] = 30;$x607->attributes['file'] = $x607->attributes['line'] = $x607->attributes['column'] = 0; }
throw new JSException($x607, 148, 30, '<image>/09_date.js');
}
$x602 = JS::toObject($x602, $global);
unset($x608, $W608, $S608, $U608);
$x609 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x602, JS::toString($x604, $global), 148, 30, '<image>/09_date.js');
$x608 =& $x609[0]; list(,$W608,$S608,$U608) = $x609;
if ($U608 && (!isset($x602->extensible) || $x602->extensible)) {$x602->properties[$x604] = $x608; $x608 =& $x602->properties[$x604]; $x602->attributes[$x604] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U608 = FALSE; $W608 = TRUE; }
if (isset($x602->class) && $x602->class === 'Array') {  if (isset($x602->properties['length']) && $x602->properties['length'] !== JS::$undefined) { $x611 = $x602->properties['length']; }  else { $x611 = 0; } }
if (isset($S608)) {
$x612 = $S608->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 148, 30);
$x613 = $x612($global, $x602, $S608, array($x600), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x610 = $x613;
} else {
if (!$U608) {$x610 = $x600;if ($W608) { $x608 = $x600; }  }
else { $x610 = JS::$undefined; }
}
if (isset($x602->class) && $x602->class === 'Array') {if (is_int('getUTCSeconds') && 'getUTCSeconds' >= $x602->properties['length']) { $x602->properties['length'] = 'getUTCSeconds' + 1; }else if ($x604 === 'length' && is_int($x600) && $x611 > $x600) {  for ($i = $x600; $i < $x611; ++$i) {  unset($x602->properties[$i], $x602->attributes[$i]); }}};
$x616 = clone JS::$functionTemplate; $x616->call = '_a3686fcdd5b5a69538641de6dddfbea8_21'; $x616->parameters = array (
); $x616->scope = $scope; $x616->properties['prototype'] = clone JS::$objectTemplate; $x616->attributes['prototype'] = JS::WRITABLE; $x616->properties['prototype']->properties['constructor'] = $x616; $x616->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x616->properties['length'] = 0; $x616->attributes['length'] = 0;
unset($x617, $W617, $S617, $U617);
$x618 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 150, 5, '<image>/09_date.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
$x619 = JS::toString('getMilliseconds', $global);
if ($x617 === JS::$undefined || $x617 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x620 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 150, 32, '<image>/09_date.js');
$_TypeError =& $x620[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x620;
$x621 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x622 = $x621($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x622->class) && $x622->class === 'Error' && !isset($x622->properties['file']) && !isset($x622->properties['line']) && !isset($x622->properties['column'])) {$x622->properties['file'] = '<image>/09_date.js';$x622->properties['line'] = 150;$x622->properties['column'] = 32;$x622->attributes['file'] = $x622->attributes['line'] = $x622->attributes['column'] = 0; }
throw new JSException($x622, 150, 32, '<image>/09_date.js');
}
$x617 = JS::toObject($x617, $global);
unset($x623, $W623, $S623, $U623);
$x624 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x617, JS::toString($x619, $global), 150, 32, '<image>/09_date.js');
$x623 =& $x624[0]; list(,$W623,$S623,$U623) = $x624;
if ($U623 && (!isset($x617->extensible) || $x617->extensible)) {$x617->properties[$x619] = $x623; $x623 =& $x617->properties[$x619]; $x617->attributes[$x619] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U623 = FALSE; $W623 = TRUE; }
if (isset($x617->class) && $x617->class === 'Array') {  if (isset($x617->properties['length']) && $x617->properties['length'] !== JS::$undefined) { $x626 = $x617->properties['length']; }  else { $x626 = 0; } }
if (isset($S623)) {
$x627 = $S623->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 150, 32);
$x628 = $x627($global, $x617, $S623, array($x616), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x625 = $x628;
} else {
if (!$U623) {$x625 = $x616;if ($W623) { $x623 = $x616; }  }
else { $x625 = JS::$undefined; }
}
if (isset($x617->class) && $x617->class === 'Array') {if (is_int('getMilliseconds') && 'getMilliseconds' >= $x617->properties['length']) { $x617->properties['length'] = 'getMilliseconds' + 1; }else if ($x619 === 'length' && is_int($x616) && $x626 > $x616) {  for ($i = $x616; $i < $x626; ++$i) {  unset($x617->properties[$i], $x617->attributes[$i]); }}};
unset($x629, $W629, $S629, $U629);
$x630 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 154, 41, '<image>/09_date.js');
$x629 =& $x630[0]; list(,$W629,$S629,$U629) = $x630;
unset($x631, $W631, $S631, $U631);
$x632 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x629, JS::toString('getUTCFullYear', $global), 154, 51, '<image>/09_date.js');
$x631 =& $x632[0]; list(,$W631,$S631,$U631) = $x632;
unset($x633, $W633, $S633, $U633);
$x634 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 154, 5, '<image>/09_date.js');
$x633 =& $x634[0]; list(,$W633,$S633,$U633) = $x634;
$x635 = JS::toString('getUTCMilliseconds', $global);
if ($x633 === JS::$undefined || $x633 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x636 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 35, '<image>/09_date.js');
$_TypeError =& $x636[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x636;
$x637 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x638 = $x637($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x638->class) && $x638->class === 'Error' && !isset($x638->properties['file']) && !isset($x638->properties['line']) && !isset($x638->properties['column'])) {$x638->properties['file'] = '<image>/09_date.js';$x638->properties['line'] = 154;$x638->properties['column'] = 35;$x638->attributes['file'] = $x638->attributes['line'] = $x638->attributes['column'] = 0; }
throw new JSException($x638, 154, 35, '<image>/09_date.js');
}
$x633 = JS::toObject($x633, $global);
unset($x639, $W639, $S639, $U639);
$x640 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x633, JS::toString($x635, $global), 154, 35, '<image>/09_date.js');
$x639 =& $x640[0]; list(,$W639,$S639,$U639) = $x640;
if ($U639 && (!isset($x633->extensible) || $x633->extensible)) {$x633->properties[$x635] = $x639; $x639 =& $x633->properties[$x635]; $x633->attributes[$x635] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U639 = FALSE; $W639 = TRUE; }
if (isset($x633->class) && $x633->class === 'Array') {  if (isset($x633->properties['length']) && $x633->properties['length'] !== JS::$undefined) { $x642 = $x633->properties['length']; }  else { $x642 = 0; } }
if (isset($S639)) {
$x643 = $S639->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 154, 35);
$x644 = $x643($global, $x633, $S639, array($x631), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x641 = $x644;
} else {
if (!$U639) {$x641 = $x631;if ($W639) { $x639 = $x631; }  }
else { $x641 = JS::$undefined; }
}
if (isset($x633->class) && $x633->class === 'Array') {if (is_int('getUTCMilliseconds') && 'getUTCMilliseconds' >= $x633->properties['length']) { $x633->properties['length'] = 'getUTCMilliseconds' + 1; }else if ($x635 === 'length' && is_int($x631) && $x642 > $x631) {  for ($i = $x631; $i < $x642; ++$i) {  unset($x633->properties[$i], $x633->attributes[$i]); }}};
$x647 = clone JS::$functionTemplate; $x647->call = '_a3686fcdd5b5a69538641de6dddfbea8_22'; $x647->parameters = array (
); $x647->scope = $scope; $x647->properties['prototype'] = clone JS::$objectTemplate; $x647->attributes['prototype'] = JS::WRITABLE; $x647->properties['prototype']->properties['constructor'] = $x647; $x647->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x647->properties['length'] = 0; $x647->attributes['length'] = 0;
unset($x648, $W648, $S648, $U648);
$x649 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 156, 5, '<image>/09_date.js');
$x648 =& $x649[0]; list(,$W648,$S648,$U648) = $x649;
$x650 = JS::toString('getTimezoneOffset', $global);
if ($x648 === JS::$undefined || $x648 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x651 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 156, 34, '<image>/09_date.js');
$_TypeError =& $x651[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x651;
$x652 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x653 = $x652($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x653->class) && $x653->class === 'Error' && !isset($x653->properties['file']) && !isset($x653->properties['line']) && !isset($x653->properties['column'])) {$x653->properties['file'] = '<image>/09_date.js';$x653->properties['line'] = 156;$x653->properties['column'] = 34;$x653->attributes['file'] = $x653->attributes['line'] = $x653->attributes['column'] = 0; }
throw new JSException($x653, 156, 34, '<image>/09_date.js');
}
$x648 = JS::toObject($x648, $global);
unset($x654, $W654, $S654, $U654);
$x655 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x648, JS::toString($x650, $global), 156, 34, '<image>/09_date.js');
$x654 =& $x655[0]; list(,$W654,$S654,$U654) = $x655;
if ($U654 && (!isset($x648->extensible) || $x648->extensible)) {$x648->properties[$x650] = $x654; $x654 =& $x648->properties[$x650]; $x648->attributes[$x650] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U654 = FALSE; $W654 = TRUE; }
if (isset($x648->class) && $x648->class === 'Array') {  if (isset($x648->properties['length']) && $x648->properties['length'] !== JS::$undefined) { $x657 = $x648->properties['length']; }  else { $x657 = 0; } }
if (isset($S654)) {
$x658 = $S654->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 156, 34);
$x659 = $x658($global, $x648, $S654, array($x647), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x656 = $x659;
} else {
if (!$U654) {$x656 = $x647;if ($W654) { $x654 = $x647; }  }
else { $x656 = JS::$undefined; }
}
if (isset($x648->class) && $x648->class === 'Array') {if (is_int('getTimezoneOffset') && 'getTimezoneOffset' >= $x648->properties['length']) { $x648->properties['length'] = 'getTimezoneOffset' + 1; }else if ($x650 === 'length' && is_int($x647) && $x657 > $x647) {  for ($i = $x647; $i < $x657; ++$i) {  unset($x648->properties[$i], $x648->attributes[$i]); }}};
$x662 = clone JS::$functionTemplate; $x662->call = '_a3686fcdd5b5a69538641de6dddfbea8_23'; $x662->parameters = array (
  0 => 'time',
); $x662->scope = $scope; $x662->properties['prototype'] = clone JS::$objectTemplate; $x662->attributes['prototype'] = JS::WRITABLE; $x662->properties['prototype']->properties['constructor'] = $x662; $x662->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x662->properties['length'] = 1; $x662->attributes['length'] = 0;
unset($x663, $W663, $S663, $U663);
$x664 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 160, 5, '<image>/09_date.js');
$x663 =& $x664[0]; list(,$W663,$S663,$U663) = $x664;
$x665 = JS::toString('setTime', $global);
if ($x663 === JS::$undefined || $x663 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x666 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 24, '<image>/09_date.js');
$_TypeError =& $x666[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x666;
$x667 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x668 = $x667($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x668->class) && $x668->class === 'Error' && !isset($x668->properties['file']) && !isset($x668->properties['line']) && !isset($x668->properties['column'])) {$x668->properties['file'] = '<image>/09_date.js';$x668->properties['line'] = 160;$x668->properties['column'] = 24;$x668->attributes['file'] = $x668->attributes['line'] = $x668->attributes['column'] = 0; }
throw new JSException($x668, 160, 24, '<image>/09_date.js');
}
$x663 = JS::toObject($x663, $global);
unset($x669, $W669, $S669, $U669);
$x670 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x663, JS::toString($x665, $global), 160, 24, '<image>/09_date.js');
$x669 =& $x670[0]; list(,$W669,$S669,$U669) = $x670;
if ($U669 && (!isset($x663->extensible) || $x663->extensible)) {$x663->properties[$x665] = $x669; $x669 =& $x663->properties[$x665]; $x663->attributes[$x665] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U669 = FALSE; $W669 = TRUE; }
if (isset($x663->class) && $x663->class === 'Array') {  if (isset($x663->properties['length']) && $x663->properties['length'] !== JS::$undefined) { $x672 = $x663->properties['length']; }  else { $x672 = 0; } }
if (isset($S669)) {
$x673 = $S669->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 160, 24);
$x674 = $x673($global, $x663, $S669, array($x662), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x671 = $x674;
} else {
if (!$U669) {$x671 = $x662;if ($W669) { $x669 = $x662; }  }
else { $x671 = JS::$undefined; }
}
if (isset($x663->class) && $x663->class === 'Array') {if (is_int('setTime') && 'setTime' >= $x663->properties['length']) { $x663->properties['length'] = 'setTime' + 1; }else if ($x665 === 'length' && is_int($x662) && $x672 > $x662) {  for ($i = $x662; $i < $x672; ++$i) {  unset($x663->properties[$i], $x663->attributes[$i]); }}};
$x756 = clone JS::$functionTemplate; $x756->call = '_a3686fcdd5b5a69538641de6dddfbea8_24'; $x756->parameters = array (
  0 => 'ms',
); $x756->scope = $scope; $x756->properties['prototype'] = clone JS::$objectTemplate; $x756->attributes['prototype'] = JS::WRITABLE; $x756->properties['prototype']->properties['constructor'] = $x756; $x756->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x756->properties['length'] = 1; $x756->attributes['length'] = 0;
unset($x757, $W757, $S757, $U757);
$x758 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 165, 5, '<image>/09_date.js');
$x757 =& $x758[0]; list(,$W757,$S757,$U757) = $x758;
$x759 = JS::toString('setMilliseconds', $global);
if ($x757 === JS::$undefined || $x757 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x760 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 165, 32, '<image>/09_date.js');
$_TypeError =& $x760[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x760;
$x761 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x762 = $x761($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x762->class) && $x762->class === 'Error' && !isset($x762->properties['file']) && !isset($x762->properties['line']) && !isset($x762->properties['column'])) {$x762->properties['file'] = '<image>/09_date.js';$x762->properties['line'] = 165;$x762->properties['column'] = 32;$x762->attributes['file'] = $x762->attributes['line'] = $x762->attributes['column'] = 0; }
throw new JSException($x762, 165, 32, '<image>/09_date.js');
}
$x757 = JS::toObject($x757, $global);
unset($x763, $W763, $S763, $U763);
$x764 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x757, JS::toString($x759, $global), 165, 32, '<image>/09_date.js');
$x763 =& $x764[0]; list(,$W763,$S763,$U763) = $x764;
if ($U763 && (!isset($x757->extensible) || $x757->extensible)) {$x757->properties[$x759] = $x763; $x763 =& $x757->properties[$x759]; $x757->attributes[$x759] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U763 = FALSE; $W763 = TRUE; }
if (isset($x757->class) && $x757->class === 'Array') {  if (isset($x757->properties['length']) && $x757->properties['length'] !== JS::$undefined) { $x766 = $x757->properties['length']; }  else { $x766 = 0; } }
if (isset($S763)) {
$x767 = $S763->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 165, 32);
$x768 = $x767($global, $x757, $S763, array($x756), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x765 = $x768;
} else {
if (!$U763) {$x765 = $x756;if ($W763) { $x763 = $x756; }  }
else { $x765 = JS::$undefined; }
}
if (isset($x757->class) && $x757->class === 'Array') {if (is_int('setMilliseconds') && 'setMilliseconds' >= $x757->properties['length']) { $x757->properties['length'] = 'setMilliseconds' + 1; }else if ($x759 === 'length' && is_int($x756) && $x766 > $x756) {  for ($i = $x756; $i < $x766; ++$i) {  unset($x757->properties[$i], $x757->attributes[$i]); }}};
unset($x769, $W769, $S769, $U769);
$x770 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 176, 41, '<image>/09_date.js');
$x769 =& $x770[0]; list(,$W769,$S769,$U769) = $x770;
unset($x771, $W771, $S771, $U771);
$x772 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x769, JS::toString('getUTCFullYear', $global), 176, 51, '<image>/09_date.js');
$x771 =& $x772[0]; list(,$W771,$S771,$U771) = $x772;
unset($x773, $W773, $S773, $U773);
$x774 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 176, 5, '<image>/09_date.js');
$x773 =& $x774[0]; list(,$W773,$S773,$U773) = $x774;
$x775 = JS::toString('setUTCMilliseconds', $global);
if ($x773 === JS::$undefined || $x773 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x776 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 176, 35, '<image>/09_date.js');
$_TypeError =& $x776[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x776;
$x777 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x778 = $x777($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x778->class) && $x778->class === 'Error' && !isset($x778->properties['file']) && !isset($x778->properties['line']) && !isset($x778->properties['column'])) {$x778->properties['file'] = '<image>/09_date.js';$x778->properties['line'] = 176;$x778->properties['column'] = 35;$x778->attributes['file'] = $x778->attributes['line'] = $x778->attributes['column'] = 0; }
throw new JSException($x778, 176, 35, '<image>/09_date.js');
}
$x773 = JS::toObject($x773, $global);
unset($x779, $W779, $S779, $U779);
$x780 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x773, JS::toString($x775, $global), 176, 35, '<image>/09_date.js');
$x779 =& $x780[0]; list(,$W779,$S779,$U779) = $x780;
if ($U779 && (!isset($x773->extensible) || $x773->extensible)) {$x773->properties[$x775] = $x779; $x779 =& $x773->properties[$x775]; $x773->attributes[$x775] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U779 = FALSE; $W779 = TRUE; }
if (isset($x773->class) && $x773->class === 'Array') {  if (isset($x773->properties['length']) && $x773->properties['length'] !== JS::$undefined) { $x782 = $x773->properties['length']; }  else { $x782 = 0; } }
if (isset($S779)) {
$x783 = $S779->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 176, 35);
$x784 = $x783($global, $x773, $S779, array($x771), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x781 = $x784;
} else {
if (!$U779) {$x781 = $x771;if ($W779) { $x779 = $x771; }  }
else { $x781 = JS::$undefined; }
}
if (isset($x773->class) && $x773->class === 'Array') {if (is_int('setUTCMilliseconds') && 'setUTCMilliseconds' >= $x773->properties['length']) { $x773->properties['length'] = 'setUTCMilliseconds' + 1; }else if ($x775 === 'length' && is_int($x771) && $x782 > $x771) {  for ($i = $x771; $i < $x782; ++$i) {  unset($x773->properties[$i], $x773->attributes[$i]); }}};
$x867 = clone JS::$functionTemplate; $x867->call = '_a3686fcdd5b5a69538641de6dddfbea8_25'; $x867->parameters = array (
  0 => 'seconds',
  1 => 'ms',
); $x867->scope = $scope; $x867->properties['prototype'] = clone JS::$objectTemplate; $x867->attributes['prototype'] = JS::WRITABLE; $x867->properties['prototype']->properties['constructor'] = $x867; $x867->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x867->properties['length'] = 2; $x867->attributes['length'] = 0;
unset($x868, $W868, $S868, $U868);
$x869 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 178, 5, '<image>/09_date.js');
$x868 =& $x869[0]; list(,$W868,$S868,$U868) = $x869;
$x870 = JS::toString('setSeconds', $global);
if ($x868 === JS::$undefined || $x868 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x871 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 178, 27, '<image>/09_date.js');
$_TypeError =& $x871[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x871;
$x872 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x873 = $x872($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x873->class) && $x873->class === 'Error' && !isset($x873->properties['file']) && !isset($x873->properties['line']) && !isset($x873->properties['column'])) {$x873->properties['file'] = '<image>/09_date.js';$x873->properties['line'] = 178;$x873->properties['column'] = 27;$x873->attributes['file'] = $x873->attributes['line'] = $x873->attributes['column'] = 0; }
throw new JSException($x873, 178, 27, '<image>/09_date.js');
}
$x868 = JS::toObject($x868, $global);
unset($x874, $W874, $S874, $U874);
$x875 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x868, JS::toString($x870, $global), 178, 27, '<image>/09_date.js');
$x874 =& $x875[0]; list(,$W874,$S874,$U874) = $x875;
if ($U874 && (!isset($x868->extensible) || $x868->extensible)) {$x868->properties[$x870] = $x874; $x874 =& $x868->properties[$x870]; $x868->attributes[$x870] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U874 = FALSE; $W874 = TRUE; }
if (isset($x868->class) && $x868->class === 'Array') {  if (isset($x868->properties['length']) && $x868->properties['length'] !== JS::$undefined) { $x877 = $x868->properties['length']; }  else { $x877 = 0; } }
if (isset($S874)) {
$x878 = $S874->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 178, 27);
$x879 = $x878($global, $x868, $S874, array($x867), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x876 = $x879;
} else {
if (!$U874) {$x876 = $x867;if ($W874) { $x874 = $x867; }  }
else { $x876 = JS::$undefined; }
}
if (isset($x868->class) && $x868->class === 'Array') {if (is_int('setSeconds') && 'setSeconds' >= $x868->properties['length']) { $x868->properties['length'] = 'setSeconds' + 1; }else if ($x870 === 'length' && is_int($x867) && $x877 > $x867) {  for ($i = $x867; $i < $x877; ++$i) {  unset($x868->properties[$i], $x868->attributes[$i]); }}};
unset($x880, $W880, $S880, $U880);
$x881 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 193, 36, '<image>/09_date.js');
$x880 =& $x881[0]; list(,$W880,$S880,$U880) = $x881;
unset($x882, $W882, $S882, $U882);
$x883 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x880, JS::toString('getUTCFullYear', $global), 193, 46, '<image>/09_date.js');
$x882 =& $x883[0]; list(,$W882,$S882,$U882) = $x883;
unset($x884, $W884, $S884, $U884);
$x885 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 193, 5, '<image>/09_date.js');
$x884 =& $x885[0]; list(,$W884,$S884,$U884) = $x885;
$x886 = JS::toString('setUTCSeconds', $global);
if ($x884 === JS::$undefined || $x884 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x887 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 193, 30, '<image>/09_date.js');
$_TypeError =& $x887[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x887;
$x888 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x889 = $x888($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x889->class) && $x889->class === 'Error' && !isset($x889->properties['file']) && !isset($x889->properties['line']) && !isset($x889->properties['column'])) {$x889->properties['file'] = '<image>/09_date.js';$x889->properties['line'] = 193;$x889->properties['column'] = 30;$x889->attributes['file'] = $x889->attributes['line'] = $x889->attributes['column'] = 0; }
throw new JSException($x889, 193, 30, '<image>/09_date.js');
}
$x884 = JS::toObject($x884, $global);
unset($x890, $W890, $S890, $U890);
$x891 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x884, JS::toString($x886, $global), 193, 30, '<image>/09_date.js');
$x890 =& $x891[0]; list(,$W890,$S890,$U890) = $x891;
if ($U890 && (!isset($x884->extensible) || $x884->extensible)) {$x884->properties[$x886] = $x890; $x890 =& $x884->properties[$x886]; $x884->attributes[$x886] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U890 = FALSE; $W890 = TRUE; }
if (isset($x884->class) && $x884->class === 'Array') {  if (isset($x884->properties['length']) && $x884->properties['length'] !== JS::$undefined) { $x893 = $x884->properties['length']; }  else { $x893 = 0; } }
if (isset($S890)) {
$x894 = $S890->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 193, 30);
$x895 = $x894($global, $x884, $S890, array($x882), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x892 = $x895;
} else {
if (!$U890) {$x892 = $x882;if ($W890) { $x890 = $x882; }  }
else { $x892 = JS::$undefined; }
}
if (isset($x884->class) && $x884->class === 'Array') {if (is_int('setUTCSeconds') && 'setUTCSeconds' >= $x884->properties['length']) { $x884->properties['length'] = 'setUTCSeconds' + 1; }else if ($x886 === 'length' && is_int($x882) && $x893 > $x882) {  for ($i = $x882; $i < $x893; ++$i) {  unset($x884->properties[$i], $x884->attributes[$i]); }}};
$x979 = clone JS::$functionTemplate; $x979->call = '_a3686fcdd5b5a69538641de6dddfbea8_26'; $x979->parameters = array (
  0 => 'minutes',
  1 => 'seconds',
  2 => 'ms',
); $x979->scope = $scope; $x979->properties['prototype'] = clone JS::$objectTemplate; $x979->attributes['prototype'] = JS::WRITABLE; $x979->properties['prototype']->properties['constructor'] = $x979; $x979->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x979->properties['length'] = 3; $x979->attributes['length'] = 0;
unset($x980, $W980, $S980, $U980);
$x981 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 195, 5, '<image>/09_date.js');
$x980 =& $x981[0]; list(,$W980,$S980,$U980) = $x981;
$x982 = JS::toString('setMinutes', $global);
if ($x980 === JS::$undefined || $x980 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x983 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 27, '<image>/09_date.js');
$_TypeError =& $x983[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x983;
$x984 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x985 = $x984($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x985->class) && $x985->class === 'Error' && !isset($x985->properties['file']) && !isset($x985->properties['line']) && !isset($x985->properties['column'])) {$x985->properties['file'] = '<image>/09_date.js';$x985->properties['line'] = 195;$x985->properties['column'] = 27;$x985->attributes['file'] = $x985->attributes['line'] = $x985->attributes['column'] = 0; }
throw new JSException($x985, 195, 27, '<image>/09_date.js');
}
$x980 = JS::toObject($x980, $global);
unset($x986, $W986, $S986, $U986);
$x987 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x980, JS::toString($x982, $global), 195, 27, '<image>/09_date.js');
$x986 =& $x987[0]; list(,$W986,$S986,$U986) = $x987;
if ($U986 && (!isset($x980->extensible) || $x980->extensible)) {$x980->properties[$x982] = $x986; $x986 =& $x980->properties[$x982]; $x980->attributes[$x982] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U986 = FALSE; $W986 = TRUE; }
if (isset($x980->class) && $x980->class === 'Array') {  if (isset($x980->properties['length']) && $x980->properties['length'] !== JS::$undefined) { $x989 = $x980->properties['length']; }  else { $x989 = 0; } }
if (isset($S986)) {
$x990 = $S986->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 195, 27);
$x991 = $x990($global, $x980, $S986, array($x979), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x988 = $x991;
} else {
if (!$U986) {$x988 = $x979;if ($W986) { $x986 = $x979; }  }
else { $x988 = JS::$undefined; }
}
if (isset($x980->class) && $x980->class === 'Array') {if (is_int('setMinutes') && 'setMinutes' >= $x980->properties['length']) { $x980->properties['length'] = 'setMinutes' + 1; }else if ($x982 === 'length' && is_int($x979) && $x989 > $x979) {  for ($i = $x979; $i < $x989; ++$i) {  unset($x980->properties[$i], $x980->attributes[$i]); }}};
unset($x992, $W992, $S992, $U992);
$x993 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 214, 36, '<image>/09_date.js');
$x992 =& $x993[0]; list(,$W992,$S992,$U992) = $x993;
unset($x994, $W994, $S994, $U994);
$x995 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x992, JS::toString('getUTCFullYear', $global), 214, 46, '<image>/09_date.js');
$x994 =& $x995[0]; list(,$W994,$S994,$U994) = $x995;
unset($x996, $W996, $S996, $U996);
$x997 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 214, 5, '<image>/09_date.js');
$x996 =& $x997[0]; list(,$W996,$S996,$U996) = $x997;
$x998 = JS::toString('setUTCMinutes', $global);
if ($x996 === JS::$undefined || $x996 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x999 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 214, 30, '<image>/09_date.js');
$_TypeError =& $x999[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x999;
$x1000 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x1001 = $x1000($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1001->class) && $x1001->class === 'Error' && !isset($x1001->properties['file']) && !isset($x1001->properties['line']) && !isset($x1001->properties['column'])) {$x1001->properties['file'] = '<image>/09_date.js';$x1001->properties['line'] = 214;$x1001->properties['column'] = 30;$x1001->attributes['file'] = $x1001->attributes['line'] = $x1001->attributes['column'] = 0; }
throw new JSException($x1001, 214, 30, '<image>/09_date.js');
}
$x996 = JS::toObject($x996, $global);
unset($x1002, $W1002, $S1002, $U1002);
$x1003 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x996, JS::toString($x998, $global), 214, 30, '<image>/09_date.js');
$x1002 =& $x1003[0]; list(,$W1002,$S1002,$U1002) = $x1003;
if ($U1002 && (!isset($x996->extensible) || $x996->extensible)) {$x996->properties[$x998] = $x1002; $x1002 =& $x996->properties[$x998]; $x996->attributes[$x998] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1002 = FALSE; $W1002 = TRUE; }
if (isset($x996->class) && $x996->class === 'Array') {  if (isset($x996->properties['length']) && $x996->properties['length'] !== JS::$undefined) { $x1005 = $x996->properties['length']; }  else { $x1005 = 0; } }
if (isset($S1002)) {
$x1006 = $S1002->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 214, 30);
$x1007 = $x1006($global, $x996, $S1002, array($x994), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1004 = $x1007;
} else {
if (!$U1002) {$x1004 = $x994;if ($W1002) { $x1002 = $x994; }  }
else { $x1004 = JS::$undefined; }
}
if (isset($x996->class) && $x996->class === 'Array') {if (is_int('setUTCMinutes') && 'setUTCMinutes' >= $x996->properties['length']) { $x996->properties['length'] = 'setUTCMinutes' + 1; }else if ($x998 === 'length' && is_int($x994) && $x1005 > $x994) {  for ($i = $x994; $i < $x1005; ++$i) {  unset($x996->properties[$i], $x996->attributes[$i]); }}};
$x1092 = clone JS::$functionTemplate; $x1092->call = '_a3686fcdd5b5a69538641de6dddfbea8_27'; $x1092->parameters = array (
  0 => 'hours',
  1 => 'minutes',
  2 => 'seconds',
  3 => 'ms',
); $x1092->scope = $scope; $x1092->properties['prototype'] = clone JS::$objectTemplate; $x1092->attributes['prototype'] = JS::WRITABLE; $x1092->properties['prototype']->properties['constructor'] = $x1092; $x1092->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1092->properties['length'] = 4; $x1092->attributes['length'] = 0;
unset($x1093, $W1093, $S1093, $U1093);
$x1094 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 216, 5, '<image>/09_date.js');
$x1093 =& $x1094[0]; list(,$W1093,$S1093,$U1093) = $x1094;
$x1095 = JS::toString('setHours', $global);
if ($x1093 === JS::$undefined || $x1093 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1096 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 216, 25, '<image>/09_date.js');
$_TypeError =& $x1096[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1096;
$x1097 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1098 = $x1097($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1098->class) && $x1098->class === 'Error' && !isset($x1098->properties['file']) && !isset($x1098->properties['line']) && !isset($x1098->properties['column'])) {$x1098->properties['file'] = '<image>/09_date.js';$x1098->properties['line'] = 216;$x1098->properties['column'] = 25;$x1098->attributes['file'] = $x1098->attributes['line'] = $x1098->attributes['column'] = 0; }
throw new JSException($x1098, 216, 25, '<image>/09_date.js');
}
$x1093 = JS::toObject($x1093, $global);
unset($x1099, $W1099, $S1099, $U1099);
$x1100 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1093, JS::toString($x1095, $global), 216, 25, '<image>/09_date.js');
$x1099 =& $x1100[0]; list(,$W1099,$S1099,$U1099) = $x1100;
if ($U1099 && (!isset($x1093->extensible) || $x1093->extensible)) {$x1093->properties[$x1095] = $x1099; $x1099 =& $x1093->properties[$x1095]; $x1093->attributes[$x1095] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1099 = FALSE; $W1099 = TRUE; }
if (isset($x1093->class) && $x1093->class === 'Array') {  if (isset($x1093->properties['length']) && $x1093->properties['length'] !== JS::$undefined) { $x1102 = $x1093->properties['length']; }  else { $x1102 = 0; } }
if (isset($S1099)) {
$x1103 = $S1099->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 216, 25);
$x1104 = $x1103($global, $x1093, $S1099, array($x1092), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1101 = $x1104;
} else {
if (!$U1099) {$x1101 = $x1092;if ($W1099) { $x1099 = $x1092; }  }
else { $x1101 = JS::$undefined; }
}
if (isset($x1093->class) && $x1093->class === 'Array') {if (is_int('setHours') && 'setHours' >= $x1093->properties['length']) { $x1093->properties['length'] = 'setHours' + 1; }else if ($x1095 === 'length' && is_int($x1092) && $x1102 > $x1092) {  for ($i = $x1092; $i < $x1102; ++$i) {  unset($x1093->properties[$i], $x1093->attributes[$i]); }}};
unset($x1105, $W1105, $S1105, $U1105);
$x1106 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 239, 34, '<image>/09_date.js');
$x1105 =& $x1106[0]; list(,$W1105,$S1105,$U1105) = $x1106;
unset($x1107, $W1107, $S1107, $U1107);
$x1108 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1105, JS::toString('getUTCFullYear', $global), 239, 44, '<image>/09_date.js');
$x1107 =& $x1108[0]; list(,$W1107,$S1107,$U1107) = $x1108;
unset($x1109, $W1109, $S1109, $U1109);
$x1110 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 239, 5, '<image>/09_date.js');
$x1109 =& $x1110[0]; list(,$W1109,$S1109,$U1109) = $x1110;
$x1111 = JS::toString('setUTCHours', $global);
if ($x1109 === JS::$undefined || $x1109 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1112 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 239, 28, '<image>/09_date.js');
$_TypeError =& $x1112[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1112;
$x1113 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1114 = $x1113($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1114->class) && $x1114->class === 'Error' && !isset($x1114->properties['file']) && !isset($x1114->properties['line']) && !isset($x1114->properties['column'])) {$x1114->properties['file'] = '<image>/09_date.js';$x1114->properties['line'] = 239;$x1114->properties['column'] = 28;$x1114->attributes['file'] = $x1114->attributes['line'] = $x1114->attributes['column'] = 0; }
throw new JSException($x1114, 239, 28, '<image>/09_date.js');
}
$x1109 = JS::toObject($x1109, $global);
unset($x1115, $W1115, $S1115, $U1115);
$x1116 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1109, JS::toString($x1111, $global), 239, 28, '<image>/09_date.js');
$x1115 =& $x1116[0]; list(,$W1115,$S1115,$U1115) = $x1116;
if ($U1115 && (!isset($x1109->extensible) || $x1109->extensible)) {$x1109->properties[$x1111] = $x1115; $x1115 =& $x1109->properties[$x1111]; $x1109->attributes[$x1111] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1115 = FALSE; $W1115 = TRUE; }
if (isset($x1109->class) && $x1109->class === 'Array') {  if (isset($x1109->properties['length']) && $x1109->properties['length'] !== JS::$undefined) { $x1118 = $x1109->properties['length']; }  else { $x1118 = 0; } }
if (isset($S1115)) {
$x1119 = $S1115->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 239, 28);
$x1120 = $x1119($global, $x1109, $S1115, array($x1107), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1117 = $x1120;
} else {
if (!$U1115) {$x1117 = $x1107;if ($W1115) { $x1115 = $x1107; }  }
else { $x1117 = JS::$undefined; }
}
if (isset($x1109->class) && $x1109->class === 'Array') {if (is_int('setUTCHours') && 'setUTCHours' >= $x1109->properties['length']) { $x1109->properties['length'] = 'setUTCHours' + 1; }else if ($x1111 === 'length' && is_int($x1107) && $x1118 > $x1107) {  for ($i = $x1107; $i < $x1118; ++$i) {  unset($x1109->properties[$i], $x1109->attributes[$i]); }}};
$x1202 = clone JS::$functionTemplate; $x1202->call = '_a3686fcdd5b5a69538641de6dddfbea8_28'; $x1202->parameters = array (
  0 => 'date',
); $x1202->scope = $scope; $x1202->properties['prototype'] = clone JS::$objectTemplate; $x1202->attributes['prototype'] = JS::WRITABLE; $x1202->properties['prototype']->properties['constructor'] = $x1202; $x1202->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1202->properties['length'] = 1; $x1202->attributes['length'] = 0;
unset($x1203, $W1203, $S1203, $U1203);
$x1204 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 241, 5, '<image>/09_date.js');
$x1203 =& $x1204[0]; list(,$W1203,$S1203,$U1203) = $x1204;
$x1205 = JS::toString('setDate', $global);
if ($x1203 === JS::$undefined || $x1203 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1206 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 241, 24, '<image>/09_date.js');
$_TypeError =& $x1206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1206;
$x1207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1208 = $x1207($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1208->class) && $x1208->class === 'Error' && !isset($x1208->properties['file']) && !isset($x1208->properties['line']) && !isset($x1208->properties['column'])) {$x1208->properties['file'] = '<image>/09_date.js';$x1208->properties['line'] = 241;$x1208->properties['column'] = 24;$x1208->attributes['file'] = $x1208->attributes['line'] = $x1208->attributes['column'] = 0; }
throw new JSException($x1208, 241, 24, '<image>/09_date.js');
}
$x1203 = JS::toObject($x1203, $global);
unset($x1209, $W1209, $S1209, $U1209);
$x1210 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1203, JS::toString($x1205, $global), 241, 24, '<image>/09_date.js');
$x1209 =& $x1210[0]; list(,$W1209,$S1209,$U1209) = $x1210;
if ($U1209 && (!isset($x1203->extensible) || $x1203->extensible)) {$x1203->properties[$x1205] = $x1209; $x1209 =& $x1203->properties[$x1205]; $x1203->attributes[$x1205] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1209 = FALSE; $W1209 = TRUE; }
if (isset($x1203->class) && $x1203->class === 'Array') {  if (isset($x1203->properties['length']) && $x1203->properties['length'] !== JS::$undefined) { $x1212 = $x1203->properties['length']; }  else { $x1212 = 0; } }
if (isset($S1209)) {
$x1213 = $S1209->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 241, 24);
$x1214 = $x1213($global, $x1203, $S1209, array($x1202), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1211 = $x1214;
} else {
if (!$U1209) {$x1211 = $x1202;if ($W1209) { $x1209 = $x1202; }  }
else { $x1211 = JS::$undefined; }
}
if (isset($x1203->class) && $x1203->class === 'Array') {if (is_int('setDate') && 'setDate' >= $x1203->properties['length']) { $x1203->properties['length'] = 'setDate' + 1; }else if ($x1205 === 'length' && is_int($x1202) && $x1212 > $x1202) {  for ($i = $x1202; $i < $x1212; ++$i) {  unset($x1203->properties[$i], $x1203->attributes[$i]); }}};
unset($x1215, $W1215, $S1215, $U1215);
$x1216 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 252, 33, '<image>/09_date.js');
$x1215 =& $x1216[0]; list(,$W1215,$S1215,$U1215) = $x1216;
unset($x1217, $W1217, $S1217, $U1217);
$x1218 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1215, JS::toString('getUTCFullYear', $global), 252, 43, '<image>/09_date.js');
$x1217 =& $x1218[0]; list(,$W1217,$S1217,$U1217) = $x1218;
unset($x1219, $W1219, $S1219, $U1219);
$x1220 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 252, 5, '<image>/09_date.js');
$x1219 =& $x1220[0]; list(,$W1219,$S1219,$U1219) = $x1220;
$x1221 = JS::toString('setUTCDate', $global);
if ($x1219 === JS::$undefined || $x1219 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1222 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 252, 27, '<image>/09_date.js');
$_TypeError =& $x1222[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1222;
$x1223 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1224 = $x1223($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1224->class) && $x1224->class === 'Error' && !isset($x1224->properties['file']) && !isset($x1224->properties['line']) && !isset($x1224->properties['column'])) {$x1224->properties['file'] = '<image>/09_date.js';$x1224->properties['line'] = 252;$x1224->properties['column'] = 27;$x1224->attributes['file'] = $x1224->attributes['line'] = $x1224->attributes['column'] = 0; }
throw new JSException($x1224, 252, 27, '<image>/09_date.js');
}
$x1219 = JS::toObject($x1219, $global);
unset($x1225, $W1225, $S1225, $U1225);
$x1226 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1219, JS::toString($x1221, $global), 252, 27, '<image>/09_date.js');
$x1225 =& $x1226[0]; list(,$W1225,$S1225,$U1225) = $x1226;
if ($U1225 && (!isset($x1219->extensible) || $x1219->extensible)) {$x1219->properties[$x1221] = $x1225; $x1225 =& $x1219->properties[$x1221]; $x1219->attributes[$x1221] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1225 = FALSE; $W1225 = TRUE; }
if (isset($x1219->class) && $x1219->class === 'Array') {  if (isset($x1219->properties['length']) && $x1219->properties['length'] !== JS::$undefined) { $x1228 = $x1219->properties['length']; }  else { $x1228 = 0; } }
if (isset($S1225)) {
$x1229 = $S1225->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 252, 27);
$x1230 = $x1229($global, $x1219, $S1225, array($x1217), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1227 = $x1230;
} else {
if (!$U1225) {$x1227 = $x1217;if ($W1225) { $x1225 = $x1217; }  }
else { $x1227 = JS::$undefined; }
}
if (isset($x1219->class) && $x1219->class === 'Array') {if (is_int('setUTCDate') && 'setUTCDate' >= $x1219->properties['length']) { $x1219->properties['length'] = 'setUTCDate' + 1; }else if ($x1221 === 'length' && is_int($x1217) && $x1228 > $x1217) {  for ($i = $x1217; $i < $x1228; ++$i) {  unset($x1219->properties[$i], $x1219->attributes[$i]); }}};
$x1313 = clone JS::$functionTemplate; $x1313->call = '_a3686fcdd5b5a69538641de6dddfbea8_29'; $x1313->parameters = array (
  0 => 'month',
  1 => 'date',
); $x1313->scope = $scope; $x1313->properties['prototype'] = clone JS::$objectTemplate; $x1313->attributes['prototype'] = JS::WRITABLE; $x1313->properties['prototype']->properties['constructor'] = $x1313; $x1313->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1313->properties['length'] = 2; $x1313->attributes['length'] = 0;
unset($x1314, $W1314, $S1314, $U1314);
$x1315 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 254, 5, '<image>/09_date.js');
$x1314 =& $x1315[0]; list(,$W1314,$S1314,$U1314) = $x1315;
$x1316 = JS::toString('setMonth', $global);
if ($x1314 === JS::$undefined || $x1314 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1317 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 25, '<image>/09_date.js');
$_TypeError =& $x1317[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1317;
$x1318 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1319 = $x1318($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1319->class) && $x1319->class === 'Error' && !isset($x1319->properties['file']) && !isset($x1319->properties['line']) && !isset($x1319->properties['column'])) {$x1319->properties['file'] = '<image>/09_date.js';$x1319->properties['line'] = 254;$x1319->properties['column'] = 25;$x1319->attributes['file'] = $x1319->attributes['line'] = $x1319->attributes['column'] = 0; }
throw new JSException($x1319, 254, 25, '<image>/09_date.js');
}
$x1314 = JS::toObject($x1314, $global);
unset($x1320, $W1320, $S1320, $U1320);
$x1321 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1314, JS::toString($x1316, $global), 254, 25, '<image>/09_date.js');
$x1320 =& $x1321[0]; list(,$W1320,$S1320,$U1320) = $x1321;
if ($U1320 && (!isset($x1314->extensible) || $x1314->extensible)) {$x1314->properties[$x1316] = $x1320; $x1320 =& $x1314->properties[$x1316]; $x1314->attributes[$x1316] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1320 = FALSE; $W1320 = TRUE; }
if (isset($x1314->class) && $x1314->class === 'Array') {  if (isset($x1314->properties['length']) && $x1314->properties['length'] !== JS::$undefined) { $x1323 = $x1314->properties['length']; }  else { $x1323 = 0; } }
if (isset($S1320)) {
$x1324 = $S1320->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 254, 25);
$x1325 = $x1324($global, $x1314, $S1320, array($x1313), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1322 = $x1325;
} else {
if (!$U1320) {$x1322 = $x1313;if ($W1320) { $x1320 = $x1313; }  }
else { $x1322 = JS::$undefined; }
}
if (isset($x1314->class) && $x1314->class === 'Array') {if (is_int('setMonth') && 'setMonth' >= $x1314->properties['length']) { $x1314->properties['length'] = 'setMonth' + 1; }else if ($x1316 === 'length' && is_int($x1313) && $x1323 > $x1313) {  for ($i = $x1313; $i < $x1323; ++$i) {  unset($x1314->properties[$i], $x1314->attributes[$i]); }}};
unset($x1326, $W1326, $S1326, $U1326);
$x1327 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 269, 34, '<image>/09_date.js');
$x1326 =& $x1327[0]; list(,$W1326,$S1326,$U1326) = $x1327;
unset($x1328, $W1328, $S1328, $U1328);
$x1329 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1326, JS::toString('getUTCFullYear', $global), 269, 44, '<image>/09_date.js');
$x1328 =& $x1329[0]; list(,$W1328,$S1328,$U1328) = $x1329;
unset($x1330, $W1330, $S1330, $U1330);
$x1331 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 269, 5, '<image>/09_date.js');
$x1330 =& $x1331[0]; list(,$W1330,$S1330,$U1330) = $x1331;
$x1332 = JS::toString('setUTCMonth', $global);
if ($x1330 === JS::$undefined || $x1330 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1333 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 269, 28, '<image>/09_date.js');
$_TypeError =& $x1333[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1333;
$x1334 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1335 = $x1334($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1335->class) && $x1335->class === 'Error' && !isset($x1335->properties['file']) && !isset($x1335->properties['line']) && !isset($x1335->properties['column'])) {$x1335->properties['file'] = '<image>/09_date.js';$x1335->properties['line'] = 269;$x1335->properties['column'] = 28;$x1335->attributes['file'] = $x1335->attributes['line'] = $x1335->attributes['column'] = 0; }
throw new JSException($x1335, 269, 28, '<image>/09_date.js');
}
$x1330 = JS::toObject($x1330, $global);
unset($x1336, $W1336, $S1336, $U1336);
$x1337 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1330, JS::toString($x1332, $global), 269, 28, '<image>/09_date.js');
$x1336 =& $x1337[0]; list(,$W1336,$S1336,$U1336) = $x1337;
if ($U1336 && (!isset($x1330->extensible) || $x1330->extensible)) {$x1330->properties[$x1332] = $x1336; $x1336 =& $x1330->properties[$x1332]; $x1330->attributes[$x1332] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1336 = FALSE; $W1336 = TRUE; }
if (isset($x1330->class) && $x1330->class === 'Array') {  if (isset($x1330->properties['length']) && $x1330->properties['length'] !== JS::$undefined) { $x1339 = $x1330->properties['length']; }  else { $x1339 = 0; } }
if (isset($S1336)) {
$x1340 = $S1336->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 269, 28);
$x1341 = $x1340($global, $x1330, $S1336, array($x1328), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1338 = $x1341;
} else {
if (!$U1336) {$x1338 = $x1328;if ($W1336) { $x1336 = $x1328; }  }
else { $x1338 = JS::$undefined; }
}
if (isset($x1330->class) && $x1330->class === 'Array') {if (is_int('setUTCMonth') && 'setUTCMonth' >= $x1330->properties['length']) { $x1330->properties['length'] = 'setUTCMonth' + 1; }else if ($x1332 === 'length' && is_int($x1328) && $x1339 > $x1328) {  for ($i = $x1328; $i < $x1339; ++$i) {  unset($x1330->properties[$i], $x1330->attributes[$i]); }}};
$x1425 = clone JS::$functionTemplate; $x1425->call = '_a3686fcdd5b5a69538641de6dddfbea8_30'; $x1425->parameters = array (
  0 => 'year',
  1 => 'month',
  2 => 'date',
); $x1425->scope = $scope; $x1425->properties['prototype'] = clone JS::$objectTemplate; $x1425->attributes['prototype'] = JS::WRITABLE; $x1425->properties['prototype']->properties['constructor'] = $x1425; $x1425->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1425->properties['length'] = 3; $x1425->attributes['length'] = 0;
unset($x1426, $W1426, $S1426, $U1426);
$x1427 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 271, 5, '<image>/09_date.js');
$x1426 =& $x1427[0]; list(,$W1426,$S1426,$U1426) = $x1427;
$x1428 = JS::toString('setFullYear', $global);
if ($x1426 === JS::$undefined || $x1426 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1429 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 271, 28, '<image>/09_date.js');
$_TypeError =& $x1429[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1429;
$x1430 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1431 = $x1430($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1431->class) && $x1431->class === 'Error' && !isset($x1431->properties['file']) && !isset($x1431->properties['line']) && !isset($x1431->properties['column'])) {$x1431->properties['file'] = '<image>/09_date.js';$x1431->properties['line'] = 271;$x1431->properties['column'] = 28;$x1431->attributes['file'] = $x1431->attributes['line'] = $x1431->attributes['column'] = 0; }
throw new JSException($x1431, 271, 28, '<image>/09_date.js');
}
$x1426 = JS::toObject($x1426, $global);
unset($x1432, $W1432, $S1432, $U1432);
$x1433 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1426, JS::toString($x1428, $global), 271, 28, '<image>/09_date.js');
$x1432 =& $x1433[0]; list(,$W1432,$S1432,$U1432) = $x1433;
if ($U1432 && (!isset($x1426->extensible) || $x1426->extensible)) {$x1426->properties[$x1428] = $x1432; $x1432 =& $x1426->properties[$x1428]; $x1426->attributes[$x1428] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1432 = FALSE; $W1432 = TRUE; }
if (isset($x1426->class) && $x1426->class === 'Array') {  if (isset($x1426->properties['length']) && $x1426->properties['length'] !== JS::$undefined) { $x1435 = $x1426->properties['length']; }  else { $x1435 = 0; } }
if (isset($S1432)) {
$x1436 = $S1432->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 271, 28);
$x1437 = $x1436($global, $x1426, $S1432, array($x1425), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1434 = $x1437;
} else {
if (!$U1432) {$x1434 = $x1425;if ($W1432) { $x1432 = $x1425; }  }
else { $x1434 = JS::$undefined; }
}
if (isset($x1426->class) && $x1426->class === 'Array') {if (is_int('setFullYear') && 'setFullYear' >= $x1426->properties['length']) { $x1426->properties['length'] = 'setFullYear' + 1; }else if ($x1428 === 'length' && is_int($x1425) && $x1435 > $x1425) {  for ($i = $x1425; $i < $x1435; ++$i) {  unset($x1426->properties[$i], $x1426->attributes[$i]); }}};
unset($x1438, $W1438, $S1438, $U1438);
$x1439 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 290, 37, '<image>/09_date.js');
$x1438 =& $x1439[0]; list(,$W1438,$S1438,$U1438) = $x1439;
unset($x1440, $W1440, $S1440, $U1440);
$x1441 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1438, JS::toString('getUTCFullYear', $global), 290, 47, '<image>/09_date.js');
$x1440 =& $x1441[0]; list(,$W1440,$S1440,$U1440) = $x1441;
unset($x1442, $W1442, $S1442, $U1442);
$x1443 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 290, 5, '<image>/09_date.js');
$x1442 =& $x1443[0]; list(,$W1442,$S1442,$U1442) = $x1443;
$x1444 = JS::toString('setUTCFullYear', $global);
if ($x1442 === JS::$undefined || $x1442 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1445 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 290, 31, '<image>/09_date.js');
$_TypeError =& $x1445[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1445;
$x1446 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1447 = $x1446($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1447->class) && $x1447->class === 'Error' && !isset($x1447->properties['file']) && !isset($x1447->properties['line']) && !isset($x1447->properties['column'])) {$x1447->properties['file'] = '<image>/09_date.js';$x1447->properties['line'] = 290;$x1447->properties['column'] = 31;$x1447->attributes['file'] = $x1447->attributes['line'] = $x1447->attributes['column'] = 0; }
throw new JSException($x1447, 290, 31, '<image>/09_date.js');
}
$x1442 = JS::toObject($x1442, $global);
unset($x1448, $W1448, $S1448, $U1448);
$x1449 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1442, JS::toString($x1444, $global), 290, 31, '<image>/09_date.js');
$x1448 =& $x1449[0]; list(,$W1448,$S1448,$U1448) = $x1449;
if ($U1448 && (!isset($x1442->extensible) || $x1442->extensible)) {$x1442->properties[$x1444] = $x1448; $x1448 =& $x1442->properties[$x1444]; $x1442->attributes[$x1444] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1448 = FALSE; $W1448 = TRUE; }
if (isset($x1442->class) && $x1442->class === 'Array') {  if (isset($x1442->properties['length']) && $x1442->properties['length'] !== JS::$undefined) { $x1451 = $x1442->properties['length']; }  else { $x1451 = 0; } }
if (isset($S1448)) {
$x1452 = $S1448->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 290, 31);
$x1453 = $x1452($global, $x1442, $S1448, array($x1440), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1450 = $x1453;
} else {
if (!$U1448) {$x1450 = $x1440;if ($W1448) { $x1448 = $x1440; }  }
else { $x1450 = JS::$undefined; }
}
if (isset($x1442->class) && $x1442->class === 'Array') {if (is_int('setUTCFullYear') && 'setUTCFullYear' >= $x1442->properties['length']) { $x1442->properties['length'] = 'setUTCFullYear' + 1; }else if ($x1444 === 'length' && is_int($x1440) && $x1451 > $x1440) {  for ($i = $x1440; $i < $x1451; ++$i) {  unset($x1442->properties[$i], $x1442->attributes[$i]); }}};
unset($x1454, $W1454, $S1454, $U1454);
$x1455 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 292, 34, '<image>/09_date.js');
$x1454 =& $x1455[0]; list(,$W1454,$S1454,$U1454) = $x1455;
unset($x1456, $W1456, $S1456, $U1456);
$x1457 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $x1454, JS::toString('getUTCFullYear', $global), 292, 44, '<image>/09_date.js');
$x1456 =& $x1457[0]; list(,$W1456,$S1456,$U1456) = $x1457;
unset($x1458, $W1458, $S1458, $U1458);
$x1459 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 292, 5, '<image>/09_date.js');
$x1458 =& $x1459[0]; list(,$W1458,$S1458,$U1458) = $x1459;
$x1460 = JS::toString('toUTCString', $global);
if ($x1458 === JS::$undefined || $x1458 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1461 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 292, 28, '<image>/09_date.js');
$_TypeError =& $x1461[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1461;
$x1462 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1463 = $x1462($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1463->class) && $x1463->class === 'Error' && !isset($x1463->properties['file']) && !isset($x1463->properties['line']) && !isset($x1463->properties['column'])) {$x1463->properties['file'] = '<image>/09_date.js';$x1463->properties['line'] = 292;$x1463->properties['column'] = 28;$x1463->attributes['file'] = $x1463->attributes['line'] = $x1463->attributes['column'] = 0; }
throw new JSException($x1463, 292, 28, '<image>/09_date.js');
}
$x1458 = JS::toObject($x1458, $global);
unset($x1464, $W1464, $S1464, $U1464);
$x1465 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1458, JS::toString($x1460, $global), 292, 28, '<image>/09_date.js');
$x1464 =& $x1465[0]; list(,$W1464,$S1464,$U1464) = $x1465;
if ($U1464 && (!isset($x1458->extensible) || $x1458->extensible)) {$x1458->properties[$x1460] = $x1464; $x1464 =& $x1458->properties[$x1460]; $x1458->attributes[$x1460] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1464 = FALSE; $W1464 = TRUE; }
if (isset($x1458->class) && $x1458->class === 'Array') {  if (isset($x1458->properties['length']) && $x1458->properties['length'] !== JS::$undefined) { $x1467 = $x1458->properties['length']; }  else { $x1467 = 0; } }
if (isset($S1464)) {
$x1468 = $S1464->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 292, 28);
$x1469 = $x1468($global, $x1458, $S1464, array($x1456), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1466 = $x1469;
} else {
if (!$U1464) {$x1466 = $x1456;if ($W1464) { $x1464 = $x1456; }  }
else { $x1466 = JS::$undefined; }
}
if (isset($x1458->class) && $x1458->class === 'Array') {if (is_int('toUTCString') && 'toUTCString' >= $x1458->properties['length']) { $x1458->properties['length'] = 'toUTCString' + 1; }else if ($x1460 === 'length' && is_int($x1456) && $x1467 > $x1456) {  for ($i = $x1456; $i < $x1467; ++$i) {  unset($x1458->properties[$i], $x1458->attributes[$i]); }}};
$x1472 = clone JS::$functionTemplate; $x1472->call = '_a3686fcdd5b5a69538641de6dddfbea8_31'; $x1472->parameters = array (
); $x1472->scope = $scope; $x1472->properties['prototype'] = clone JS::$objectTemplate; $x1472->attributes['prototype'] = JS::WRITABLE; $x1472->properties['prototype']->properties['constructor'] = $x1472; $x1472->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1472->properties['length'] = 0; $x1472->attributes['length'] = 0;
unset($x1473, $W1473, $S1473, $U1473);
$x1474 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 294, 5, '<image>/09_date.js');
$x1473 =& $x1474[0]; list(,$W1473,$S1473,$U1473) = $x1474;
$x1475 = JS::toString('toISOString', $global);
if ($x1473 === JS::$undefined || $x1473 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1476 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 294, 28, '<image>/09_date.js');
$_TypeError =& $x1476[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1476;
$x1477 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1478 = $x1477($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1478->class) && $x1478->class === 'Error' && !isset($x1478->properties['file']) && !isset($x1478->properties['line']) && !isset($x1478->properties['column'])) {$x1478->properties['file'] = '<image>/09_date.js';$x1478->properties['line'] = 294;$x1478->properties['column'] = 28;$x1478->attributes['file'] = $x1478->attributes['line'] = $x1478->attributes['column'] = 0; }
throw new JSException($x1478, 294, 28, '<image>/09_date.js');
}
$x1473 = JS::toObject($x1473, $global);
unset($x1479, $W1479, $S1479, $U1479);
$x1480 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1473, JS::toString($x1475, $global), 294, 28, '<image>/09_date.js');
$x1479 =& $x1480[0]; list(,$W1479,$S1479,$U1479) = $x1480;
if ($U1479 && (!isset($x1473->extensible) || $x1473->extensible)) {$x1473->properties[$x1475] = $x1479; $x1479 =& $x1473->properties[$x1475]; $x1473->attributes[$x1475] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1479 = FALSE; $W1479 = TRUE; }
if (isset($x1473->class) && $x1473->class === 'Array') {  if (isset($x1473->properties['length']) && $x1473->properties['length'] !== JS::$undefined) { $x1482 = $x1473->properties['length']; }  else { $x1482 = 0; } }
if (isset($S1479)) {
$x1483 = $S1479->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 294, 28);
$x1484 = $x1483($global, $x1473, $S1479, array($x1472), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1481 = $x1484;
} else {
if (!$U1479) {$x1481 = $x1472;if ($W1479) { $x1479 = $x1472; }  }
else { $x1481 = JS::$undefined; }
}
if (isset($x1473->class) && $x1473->class === 'Array') {if (is_int('toISOString') && 'toISOString' >= $x1473->properties['length']) { $x1473->properties['length'] = 'toISOString' + 1; }else if ($x1475 === 'length' && is_int($x1472) && $x1482 > $x1472) {  for ($i = $x1472; $i < $x1482; ++$i) {  unset($x1473->properties[$i], $x1473->attributes[$i]); }}};
$x1498 = clone JS::$functionTemplate; $x1498->call = '_a3686fcdd5b5a69538641de6dddfbea8_32'; $x1498->parameters = array (
  0 => 'key',
); $x1498->scope = $scope; $x1498->properties['prototype'] = clone JS::$objectTemplate; $x1498->attributes['prototype'] = JS::WRITABLE; $x1498->properties['prototype']->properties['constructor'] = $x1498; $x1498->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1498->properties['length'] = 1; $x1498->attributes['length'] = 0;
unset($x1499, $W1499, $S1499, $U1499);
$x1500 = _a3686fcdd5b5a69538641de6dddfbea8_2($global, $scope, $_Date, JS::toString('prototype', $global), 301, 5, '<image>/09_date.js');
$x1499 =& $x1500[0]; list(,$W1499,$S1499,$U1499) = $x1500;
$x1501 = JS::toString('toJSON', $global);
if ($x1499 === JS::$undefined || $x1499 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1502 = _a3686fcdd5b5a69538641de6dddfbea8_3($global, $scope, $scope, JS::toString('TypeError', $global), 301, 23, '<image>/09_date.js');
$_TypeError =& $x1502[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1502;
$x1503 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1504 = $x1503($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1504->class) && $x1504->class === 'Error' && !isset($x1504->properties['file']) && !isset($x1504->properties['line']) && !isset($x1504->properties['column'])) {$x1504->properties['file'] = '<image>/09_date.js';$x1504->properties['line'] = 301;$x1504->properties['column'] = 23;$x1504->attributes['file'] = $x1504->attributes['line'] = $x1504->attributes['column'] = 0; }
throw new JSException($x1504, 301, 23, '<image>/09_date.js');
}
$x1499 = JS::toObject($x1499, $global);
unset($x1505, $W1505, $S1505, $U1505);
$x1506 = _a3686fcdd5b5a69538641de6dddfbea8_5($global, $scope, $x1499, JS::toString($x1501, $global), 301, 23, '<image>/09_date.js');
$x1505 =& $x1506[0]; list(,$W1505,$S1505,$U1505) = $x1506;
if ($U1505 && (!isset($x1499->extensible) || $x1499->extensible)) {$x1499->properties[$x1501] = $x1505; $x1505 =& $x1499->properties[$x1501]; $x1499->attributes[$x1501] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1505 = FALSE; $W1505 = TRUE; }
if (isset($x1499->class) && $x1499->class === 'Array') {  if (isset($x1499->properties['length']) && $x1499->properties['length'] !== JS::$undefined) { $x1508 = $x1499->properties['length']; }  else { $x1508 = 0; } }
if (isset($S1505)) {
$x1509 = $S1505->call;
$global->trace[++$global->trace_sp] = array('<image>/09_date.js', 301, 23);
$x1510 = $x1509($global, $x1499, $S1505, array($x1498), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1507 = $x1510;
} else {
if (!$U1505) {$x1507 = $x1498;if ($W1505) { $x1505 = $x1498; }  }
else { $x1507 = JS::$undefined; }
}
if (isset($x1499->class) && $x1499->class === 'Array') {if (is_int('toJSON') && 'toJSON' >= $x1499->properties['length']) { $x1499->properties['length'] = 'toJSON' + 1; }else if ($x1501 === 'length' && is_int($x1498) && $x1508 > $x1498) {  for ($i = $x1498; $i < $x1508; ++$i) {  unset($x1499->properties[$i], $x1499->attributes[$i]); }}};
;
return JS::$undefined;
}
