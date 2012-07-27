function _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $base, $id, $line, $column, $file) {
$WObject = $SObject = $UObject = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_Object =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x4 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x5 = $x4($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_Object = $x5; }
else { $_Object = JS::$undefined; $UObject = TRUE; }
return array(&$_Object, $WObject, $SObject, $UObject);
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$base,$id,$line,$column,$file){$WObject=$SObject=$UObject=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_Object=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_Object=$x5;}else{$_Object=JS::$undefined;$UObject=TRUE;}return array(&$_Object,$WObject,$SObject,$UObject);}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x15[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x15;
$x16 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x17 = $x16($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x17->class) && $x17->class === 'Error' && !isset($x17->properties['file']) && !isset($x17->properties['line']) && !isset($x17->properties['column'])) {$x17->properties['file'] = $file;$x17->properties['line'] = $line;$x17->properties['column'] = $column;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
throw new JSException($x17, $line, $column, $file);
}
$W14 = $S14 = $U14 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x14 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x18 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x19 = $x18($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14 = $x19; }
else { $x14 = JS::$undefined; $U14 = TRUE; }
return array(&$x14, $W14, $S14, $U14);
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x77 = $x76($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = $file;$x77->properties['line'] = $line;$x77->properties['column'] = $column;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, $line, $column, $file);
}
$W74 = $S74 = $U74 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x74 =& $lookup->properties[$id]; $W74 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S74 = $lookup->setters[$id]; }
else { $x74 = JS::$undefined; $U74 = TRUE; }
return array(&$x74, $W74, $S74, $U74);
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x77=$x76($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=$file;$x77->properties[\'line\']=$line;$x77->properties[\'column\']=$column;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,$line,$column,$file);}$W74=$S74=$U74=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x74=&$lookup->properties[$id];$W74=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S74=$lookup->setters[$id];}else{$x74=JS::$undefined;$U74=TRUE;}return array(&$x74,$W74,$S74,$U74);}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$scope->properties['Buffer'] = $fn;
$_Buffer =& $scope->properties['Buffer'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Object, $WObject, $SObject, $UObject);
$x6 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'Object', 4, 14, '<image>/20_buffer.js');
$_Object =& $x6[0]; list(,$WObject,$SObject,$UObject) = $x6;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x7 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 4, 14, '<image>/20_buffer.js');
$_ReferenceError =& $x7[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x7;
$x8 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 4, 14);
$x9 = $x8($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error' && !isset($x9->properties['file']) && !isset($x9->properties['line']) && !isset($x9->properties['column'])) {$x9->properties['file'] = '<image>/20_buffer.js';$x9->properties['line'] = 4;$x9->properties['column'] = 14;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 4, 14, '<image>/20_buffer.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 4, 27, '<image>/20_buffer.js');
$_TypeError =& $x11[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x11;
$x12 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 4, 27);
$x13 = $x12($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/20_buffer.js';$x13->properties['line'] = 4;$x13->properties['column'] = 27;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 4, 27, '<image>/20_buffer.js');
}
$x10 = JS::toObject($_Object, $global);
unset($x14, $W14, $S14, $U14);
$x20 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x10, (string) 'create', 4, 27, '<image>/20_buffer.js');
$x14 =& $x20[0]; list(,$W14,$S14,$U14) = $x20;
unset($x21, $W21, $S21, $U21);
$x22 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_Buffer, (string) 'prototype', 4, 34, '<image>/20_buffer.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
if (!(is_object($x14) && isset($x14->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 4, 27, '<image>/20_buffer.js');
$_TypeError =& $x25[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x25;
$x26 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 4, 27);
$x27 = $x26($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = '<image>/20_buffer.js';$x27->properties['line'] = 4;$x27->properties['column'] = 27;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, 4, 27, '<image>/20_buffer.js');
}
$x23 = $x14->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 4, 27);
$x24 = $x23($global, $x10, $x14, array($x21), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['buf'] = JS::$undefined; $_buf =& $scope->properties['buf'];
$Ubuf = FALSE;
$_buf = $x24;
$_buf->class = 'Buffer';
$x29 = $_x;
$x29 = ($x29 === JS::$undefined ? 'undefined' : (is_int($x29) || is_float($x29) ? 'number' : (is_bool($x29) ? 'boolean' : (is_string($x29) ? 'string' : (is_object($x29) && isset($x29->call) ? 'function' : 'object')))));
$x28 = (((gettype($x29) === gettype('number') && $x29 === 'number'))|| (((is_float($x29) || is_int($x29)) && (is_float('number') || is_int('number'))) && $x29 == 'number'));
if (JS::toBoolean($x28, $global)) {

$_buf->value = str_repeat(chr(0),$_x);;
}
else {
$x31 = $_x;
$x31 = ($x31 === JS::$undefined ? 'undefined' : (is_int($x31) || is_float($x31) ? 'number' : (is_bool($x31) ? 'boolean' : (is_string($x31) ? 'string' : (is_object($x31) && isset($x31->call) ? 'function' : 'object')))));
$x30 = (((gettype($x31) === gettype('string') && $x31 === 'string'))|| (((is_float($x31) || is_int($x31)) && (is_float('string') || is_int('string'))) && $x31 == 'string'));
if (JS::toBoolean($x30, $global)) {

$_buf->value =$_x;;
}
else {
unset($_Array, $WArray, $SArray, $UArray);
$x32 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'Array', 13, 15, '<image>/20_buffer.js');
$_Array =& $x32[0]; list(,$WArray,$SArray,$UArray) = $x32;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x33 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 13, 15, '<image>/20_buffer.js');
$_ReferenceError =& $x33[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x33;
$x34 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 13, 15);
$x35 = $x34($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/20_buffer.js';$x35->properties['line'] = 13;$x35->properties['column'] = 15;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 13, 15, '<image>/20_buffer.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x37 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 13, 28, '<image>/20_buffer.js');
$_TypeError =& $x37[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x37;
$x38 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 13, 28);
$x39 = $x38($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error' && !isset($x39->properties['file']) && !isset($x39->properties['line']) && !isset($x39->properties['column'])) {$x39->properties['file'] = '<image>/20_buffer.js';$x39->properties['line'] = 13;$x39->properties['column'] = 28;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, 13, 28, '<image>/20_buffer.js');
}
$x36 = JS::toObject($_Array, $global);
unset($x40, $W40, $S40, $U40);
$x41 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x36, (string) 'isArray', 13, 28, '<image>/20_buffer.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if (!(is_object($x40) && isset($x40->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x44 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 13, 28, '<image>/20_buffer.js');
$_TypeError =& $x44[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x44;
$x45 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 13, 28);
$x46 = $x45($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x46->class) && $x46->class === 'Error' && !isset($x46->properties['file']) && !isset($x46->properties['line']) && !isset($x46->properties['column'])) {$x46->properties['file'] = '<image>/20_buffer.js';$x46->properties['line'] = 13;$x46->properties['column'] = 28;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
throw new JSException($x46, 13, 28, '<image>/20_buffer.js');
}
$x42 = $x40->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 13, 28);
$x43 = $x42($global, $x36, $x40, array($_x), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x43, $global)) {
$_buf->value = "";
for ($x47 = 0;; ++$x47) {
if ($x47 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x48, $W48, $S48, $U48);
$x49 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_x, (string) 'length', 15, 26, '<image>/20_buffer.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x48;
$scope->properties['octet'] = JS::$undefined; $_octet =& $scope->properties['octet'];
$Uoctet = FALSE;
$_octet = JS::$undefined;
}
if ($x47 !== 0) {
$x50 = ++$_i;
}
$x51 = JS::toPrimitive($_i, $global);
$x52 = JS::toPrimitive($_l, $global);
$x53 = (is_string($x51) && is_string($x52) ? strcmp($x51, $x52) < 0 : (!is_nan($x54 = JS::toNumber($x51, $global)) && !is_nan($x55 = JS::toNumber($x52, $global)) && $x54 < $x55));
if (!JS::toBoolean($x53, $global)) { break; }

unset($x56, $W56, $S56, $U56);
$x57 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_x, (string) $_i, 16, 15, '<image>/20_buffer.js');
$x56 =& $x57[0]; list(,$W56,$S56,$U56) = $x57;
if ($Uoctet) {$global->properties['octet'] = $_octet; $_octet =& $global->properties['octet']; }
$_octet = $x56;
$_buf->value .= chr($_octet);;
};;
}
else {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x60 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 21, 15, '<image>/20_buffer.js');
$_TypeError =& $x60[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x60;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x61 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 21, 15, '<image>/20_buffer.js');
$_ReferenceError =& $x61[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x61;
$x62 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 21, 15);
$x63 = $x62($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x63->class) && $x63->class === 'Error' && !isset($x63->properties['file']) && !isset($x63->properties['line']) && !isset($x63->properties['column'])) {$x63->properties['file'] = '<image>/20_buffer.js';$x63->properties['line'] = 21;$x63->properties['column'] = 15;$x63->attributes['file'] = $x63->attributes['line'] = $x63->attributes['column'] = 0; }
throw new JSException($x63, 21, 15, '<image>/20_buffer.js');
}
$x58 = clone JS::$objectTemplate;
unset($x64, $W64, $S64, $U64);
$x65 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, (string) 'prototype', 21, 11, '<image>/20_buffer.js');
$x64 =& $x65[0]; list(,$W64,$S64,$U64) = $x65;
$x59 = $x64;
$x58->prototype = $x59;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x68 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 21, 11);
$x69 = $x68($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x69->class) && $x69->class === 'Error' && !isset($x69->properties['file']) && !isset($x69->properties['line']) && !isset($x69->properties['column'])) {$x69->properties['file'] = '<image>/20_buffer.js';$x69->properties['line'] = 21;$x69->properties['column'] = 11;$x69->attributes['file'] = $x69->attributes['line'] = $x69->attributes['column'] = 0; }
throw new JSException($x69, 21, 11, '<image>/20_buffer.js');
}
$x66 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 21, 11);
$x67 = $x66($global, $x58, $_TypeError, array('Given argument is not a number, a string, or an array'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x59 = $x67;
if (is_object($x59) && $x59 !== JS::$undefined) { $x58 = $x59; }
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/20_buffer.js';$x58->properties['line'] = 21;$x58->properties['column'] = 5;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 21, 5, '<image>/20_buffer.js');;
};
};
};
$x70 = strlen($_buf->value);
if ($_buf === JS::$undefined || $_buf === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 24, 15, '<image>/20_buffer.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
$x72 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 24, 15);
$x73 = $x72($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/20_buffer.js';$x73->properties['line'] = 24;$x73->properties['column'] = 15;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 24, 15, '<image>/20_buffer.js');
}
$_buf = JS::toObject($_buf, $global);
unset($x74, $W74, $S74, $U74);
$x78 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $_buf, (string) 'length', 24, 15, '<image>/20_buffer.js');
$x74 =& $x78[0]; list(,$W74,$S74,$U74) = $x78;
if ($U74 && (!isset($_buf->extensible) || $_buf->extensible)) {$_buf->properties['length'] = $x74; $x74 =& $_buf->properties['length']; $_buf->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U74 = FALSE; $W74 = TRUE; }
if (isset($S74)) {
$x80 = $S74->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 24, 15);
$x81 = $x80($global, $_buf, $S74, array($x70), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x79 = $x81;
} else {
if (!$U74) {$x79 = $x70;if ($W74) { $x74 = $x70; }  }
else { $x79 = JS::$undefined; }
}
if (isset($_buf->class) && $_buf->class === 'Array' &&  is_int('length') && 'length' >= $_buf->properties['length']) { $_buf->properties['length'] = 'length' + 1; };
$_buf->attributes['length'] = 0;
return $_buf;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'Buffer\']=$fn;$_Buffer=&$scope->properties[\'Buffer\'];$global->scope[++$global->scope_sp]=$scope;unset($_Object,$WObject,$SObject,$UObject);$x6=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'Object\',4,14,\'<image>/20_buffer.js\');$_Object=&$x6[0];list(,$WObject,$SObject,$UObject)=$x6;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x7=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',4,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x7[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x7;$x8=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,14);$x9=$x8($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/20_buffer.js\';$x9->properties[\'line\']=4;$x9->properties[\'column\']=14;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,4,14,\'<image>/20_buffer.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',4,27,\'<image>/20_buffer.js\');$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x13=$x12($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/20_buffer.js\';$x13->properties[\'line\']=4;$x13->properties[\'column\']=27;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,4,27,\'<image>/20_buffer.js\');}$x10=JS::toObject($_Object,$global);unset($x14,$W14,$S14,$U14);$x20=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x10,(string)\'create\',4,27,\'<image>/20_buffer.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;unset($x21,$W21,$S21,$U21);$x22=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_Buffer,(string)\'prototype\',4,34,\'<image>/20_buffer.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;if(!(is_object($x14)&&isset($x14->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',4,27,\'<image>/20_buffer.js\');$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x27=$x26($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/20_buffer.js\';$x27->properties[\'line\']=4;$x27->properties[\'column\']=27;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,4,27,\'<image>/20_buffer.js\');}$x23=$x14->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x24=$x23($global,$x10,$x14,array($x21),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x24;$_buf->class=\'Buffer\';$x29=$_x;$x29=($x29===JS::$undefined?\'undefined\':(is_int($x29)||is_float($x29)?\'number\':(is_bool($x29)?\'boolean\':(is_string($x29)?\'string\':(is_object($x29)&&isset($x29->call)?\'function\':\'object\')))));$x28=(((gettype($x29)===gettype(\'number\')&&$x29===\'number\'))||(((is_float($x29)||is_int($x29))&&(is_float(\'number\')||is_int(\'number\')))&&$x29==\'number\'));if(JS::toBoolean($x28,$global)){$_buf->value=str_repeat(chr(0),$_x);}else{$x31=$_x;$x31=($x31===JS::$undefined?\'undefined\':(is_int($x31)||is_float($x31)?\'number\':(is_bool($x31)?\'boolean\':(is_string($x31)?\'string\':(is_object($x31)&&isset($x31->call)?\'function\':\'object\')))));$x30=(((gettype($x31)===gettype(\'string\')&&$x31===\'string\'))||(((is_float($x31)||is_int($x31))&&(is_float(\'string\')||is_int(\'string\')))&&$x31==\'string\'));if(JS::toBoolean($x30,$global)){$_buf->value=$_x;}else{unset($_Array,$WArray,$SArray,$UArray);$x32=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'Array\',13,15,\'<image>/20_buffer.js\');$_Array=&$x32[0];list(,$WArray,$SArray,$UArray)=$x32;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x33=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',13,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x33[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x33;$x34=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,15);$x35=$x34($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/20_buffer.js\';$x35->properties[\'line\']=13;$x35->properties[\'column\']=15;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,13,15,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x37=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',13,28,\'<image>/20_buffer.js\');$_TypeError=&$x37[0];list(,$WTypeError,$STypeError,$UTypeError)=$x37;$x38=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x39=$x38($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=\'<image>/20_buffer.js\';$x39->properties[\'line\']=13;$x39->properties[\'column\']=28;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,13,28,\'<image>/20_buffer.js\');}$x36=JS::toObject($_Array,$global);unset($x40,$W40,$S40,$U40);$x41=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x36,(string)\'isArray\',13,28,\'<image>/20_buffer.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if(!(is_object($x40)&&isset($x40->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x44=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',13,28,\'<image>/20_buffer.js\');$_TypeError=&$x44[0];list(,$WTypeError,$STypeError,$UTypeError)=$x44;$x45=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x46=$x45($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/20_buffer.js\';$x46->properties[\'line\']=13;$x46->properties[\'column\']=28;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,13,28,\'<image>/20_buffer.js\');}$x42=$x40->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x43=$x42($global,$x36,$x40,array($_x),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x43,$global)){$_buf->value="";for($x47=0;;++$x47){if($x47===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x48,$W48,$S48,$U48);$x49=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,(string)\'length\',15,26,\'<image>/20_buffer.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x48;$scope->properties[\'octet\']=JS::$undefined;$_octet=&$scope->properties[\'octet\'];$Uoctet=FALSE;$_octet=JS::$undefined;}if($x47!==0){$x50=++$_i;}$x51=JS::toPrimitive($_i,$global);$x52=JS::toPrimitive($_l,$global);$x53=(is_string($x51)&&is_string($x52)?strcmp($x51,$x52)<0:(!is_nan($x54=JS::toNumber($x51,$global))&&!is_nan($x55=JS::toNumber($x52,$global))&&$x54<$x55));if(!JS::toBoolean($x53,$global)){break;}unset($x56,$W56,$S56,$U56);$x57=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,(string)$_i,16,15,\'<image>/20_buffer.js\');$x56=&$x57[0];list(,$W56,$S56,$U56)=$x57;if($Uoctet){$global->properties[\'octet\']=$_octet;$_octet=&$global->properties[\'octet\'];}$_octet=$x56;$_buf->value.=chr($_octet);}}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x60=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',21,15,\'<image>/20_buffer.js\');$_TypeError=&$x60[0];list(,$WTypeError,$STypeError,$UTypeError)=$x60;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x61=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',21,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x61[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x61;$x62=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,15);$x63=$x62($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/20_buffer.js\';$x63->properties[\'line\']=21;$x63->properties[\'column\']=15;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,21,15,\'<image>/20_buffer.js\');}$x58=clone JS::$objectTemplate;unset($x64,$W64,$S64,$U64);$x65=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,(string)\'prototype\',21,11,\'<image>/20_buffer.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;$x59=$x64;$x58->prototype=$x59;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x68=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x69=$x68($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x69->class)&&$x69->class===\'Error\'&&!isset($x69->properties[\'file\'])&&!isset($x69->properties[\'line\'])&&!isset($x69->properties[\'column\'])){$x69->properties[\'file\']=\'<image>/20_buffer.js\';$x69->properties[\'line\']=21;$x69->properties[\'column\']=11;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,21,11,\'<image>/20_buffer.js\');}$x66=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x67=$x66($global,$x58,$_TypeError,array(\'Given argument is not a number, a string, or an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x59=$x67;if(is_object($x59)&&$x59!==JS::$undefined){$x58=$x59;}if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/20_buffer.js\';$x58->properties[\'line\']=21;$x58->properties[\'column\']=5;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,21,5,\'<image>/20_buffer.js\');}}}$x70=strlen($_buf->value);if($_buf===JS::$undefined||$_buf===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',24,15,\'<image>/20_buffer.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x73=$x72($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/20_buffer.js\';$x73->properties[\'line\']=24;$x73->properties[\'column\']=15;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,24,15,\'<image>/20_buffer.js\');}$_buf=JS::toObject($_buf,$global);unset($x74,$W74,$S74,$U74);$x78=_f915aaba5b76f6e13a986dca9da58f68_4($global,$scope,$_buf,(string)\'length\',24,15,\'<image>/20_buffer.js\');$x74=&$x78[0];list(,$W74,$S74,$U74)=$x78;if($U74&&(!isset($_buf->extensible)||$_buf->extensible)){$_buf->properties[\'length\']=$x74;$x74=&$_buf->properties[\'length\'];$_buf->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U74=FALSE;$W74=TRUE;}if(isset($S74)){$x80=$S74->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x81=$x80($global,$_buf,$S74,array($x70),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x79=$x81;}else{if(!$U74){$x79=$x70;if($W74){$x74=$x70;}}else{$x79=JS::$undefined;}}if(isset($_buf->class)&&$_buf->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_buf->properties[\'length\']){$_buf->properties[\'length\']=\'length\'+1;}$_buf->attributes[\'length\']=0;return$_buf;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x98 =& $scope->properties['arguments'];
$x98->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x98->properties[$i] = $args[$i];
$x98->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['buf'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_buf =& $scope->properties['buf'];
$Ubuf = FALSE;
$scope->properties['isBuffer'] = $fn;
$_isBuffer =& $scope->properties['isBuffer'];
$global->scope[++$global->scope_sp] = $scope;
return isset($_buf->class) &&$_buf->class === 'Buffer';
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x98=&$scope->properties[\'arguments\'];$x98->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x98->properties[$i]=$args[$i];$x98->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'buf\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$scope->properties[\'isBuffer\']=$fn;$_isBuffer=&$scope->properties[\'isBuffer\'];$global->scope[++$global->scope_sp]=$scope;return isset($_buf->class)&&$_buf->class===\'Buffer\';return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x117 =& $scope->properties['arguments'];
$x117->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x117->properties[$i] = $args[$i];
$x117->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$scope->properties['byteLength'] = $fn;
$_byteLength =& $scope->properties['byteLength'];
$global->scope[++$global->scope_sp] = $scope;
return strlen(JS::toString($_string, $global));
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'byteLength\']=$fn;$_byteLength=&$scope->properties[\'byteLength\'];$global->scope[++$global->scope_sp]=$scope;return strlen(JS::toString($_string,$global));return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x136 =& $scope->properties['arguments'];
$x136->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x136->properties[$i] = $args[$i];
$x136->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['list'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_list =& $scope->properties['list'];
$Ulist = FALSE;
$scope->properties['totalLength'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_totalLength =& $scope->properties['totalLength'];
$UtotalLength = FALSE;
$scope->properties['concat'] = $fn;
$_concat =& $scope->properties['concat'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Array, $WArray, $SArray, $UArray);
$x137 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'Array', 41, 7, '<image>/20_buffer.js');
$_Array =& $x137[0]; list(,$WArray,$SArray,$UArray) = $x137;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x138 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 41, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x138[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x138;
$x139 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 7);
$x140 = $x139($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x140->class) && $x140->class === 'Error' && !isset($x140->properties['file']) && !isset($x140->properties['line']) && !isset($x140->properties['column'])) {$x140->properties['file'] = '<image>/20_buffer.js';$x140->properties['line'] = 41;$x140->properties['column'] = 7;$x140->attributes['file'] = $x140->attributes['line'] = $x140->attributes['column'] = 0; }
throw new JSException($x140, 41, 7, '<image>/20_buffer.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x142 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x142[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x142;
$x143 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x144 = $x143($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/20_buffer.js';$x144->properties['line'] = 41;$x144->properties['column'] = 20;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 41, 20, '<image>/20_buffer.js');
}
$x141 = JS::toObject($_Array, $global);
unset($x145, $W145, $S145, $U145);
$x146 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x141, (string) 'isArray', 41, 20, '<image>/20_buffer.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
if (!(is_object($x145) && isset($x145->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x149 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x149[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x149;
$x150 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x151 = $x150($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x151->class) && $x151->class === 'Error' && !isset($x151->properties['file']) && !isset($x151->properties['line']) && !isset($x151->properties['column'])) {$x151->properties['file'] = '<image>/20_buffer.js';$x151->properties['line'] = 41;$x151->properties['column'] = 20;$x151->attributes['file'] = $x151->attributes['line'] = $x151->attributes['column'] = 0; }
throw new JSException($x151, 41, 20, '<image>/20_buffer.js');
}
$x147 = $x145->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x148 = $x147($global, $x141, $x145, array($_list), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x148, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 42, 13, '<image>/20_buffer.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x155 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 42, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x155[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x155;
$x156 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 13);
$x157 = $x156($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x157->class) && $x157->class === 'Error' && !isset($x157->properties['file']) && !isset($x157->properties['line']) && !isset($x157->properties['column'])) {$x157->properties['file'] = '<image>/20_buffer.js';$x157->properties['line'] = 42;$x157->properties['column'] = 13;$x157->attributes['file'] = $x157->attributes['line'] = $x157->attributes['column'] = 0; }
throw new JSException($x157, 42, 13, '<image>/20_buffer.js');
}
$x152 = clone JS::$objectTemplate;
unset($x158, $W158, $S158, $U158);
$x159 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, (string) 'prototype', 42, 9, '<image>/20_buffer.js');
$x158 =& $x159[0]; list(,$W158,$S158,$U158) = $x159;
$x153 = $x158;
$x152->prototype = $x153;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x163 = $x162($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/20_buffer.js';$x163->properties['line'] = 42;$x163->properties['column'] = 9;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 42, 9, '<image>/20_buffer.js');
}
$x160 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x161 = $x160($global, $x152, $_TypeError, array('Given list is not an array'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x153 = $x161;
if (is_object($x153) && $x153 !== JS::$undefined) { $x152 = $x153; }
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/20_buffer.js';$x152->properties['line'] = 42;$x152->properties['column'] = 3;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 42, 3, '<image>/20_buffer.js');;
};
unset($x166, $W166, $S166, $U166);
$x167 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) 'length', 45, 10, '<image>/20_buffer.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
$x165 = (((gettype($x166) === gettype(0) && $x166 === 0))|| (((is_float($x166) || is_int($x166)) && (is_float(0) || is_int(0))) && $x166 == 0));
$x164 = $x165;
if (!JS::toBoolean($x164, $global)) {
$x168 = (((gettype($_totalLength) === gettype(0) && $_totalLength === 0))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(0) || is_int(0))) && $_totalLength == 0));
$x164 = $x168; }
if (JS::toBoolean($x164, $global)) {
unset($_require, $Wrequire, $Srequire, $Urequire);
$x171 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'require', 46, 14, '<image>/20_buffer.js');
$_require =& $x171[0]; list(,$Wrequire,$Srequire,$Urequire) = $x171;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x172 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 46, 14, '<image>/20_buffer.js');
$_ReferenceError =& $x172[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x172;
$x173 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 14);
$x174 = $x173($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x174->class) && $x174->class === 'Error' && !isset($x174->properties['file']) && !isset($x174->properties['line']) && !isset($x174->properties['column'])) {$x174->properties['file'] = '<image>/20_buffer.js';$x174->properties['line'] = 46;$x174->properties['column'] = 14;$x174->attributes['file'] = $x174->attributes['line'] = $x174->attributes['column'] = 0; }
throw new JSException($x174, 46, 14, '<image>/20_buffer.js');
}
unset($x175, $W175, $S175, $U175);
$x176 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 46, 21, '<image>/20_buffer.js');
$x175 =& $x176[0]; list(,$W175,$S175,$U175) = $x176;
unset($x177, $W177, $S177, $U177);
$x178 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x175, (string) 'buffer', 46, 29, '<image>/20_buffer.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
unset($x179, $W179, $S179, $U179);
$x180 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x177, (string) 'exports', 46, 36, '<image>/20_buffer.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
unset($x181, $W181, $S181, $U181);
$x182 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x179, (string) 'Buffer', 46, 44, '<image>/20_buffer.js');
$x181 =& $x182[0]; list(,$W181,$S181,$U181) = $x182;
$x169 = clone JS::$objectTemplate;
unset($x183, $W183, $S183, $U183);
$x184 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x181, (string) 'prototype', 46, 10, '<image>/20_buffer.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
$x170 = $x183;
$x169->prototype = $x170;
if (!(is_object($x181) && isset($x181->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x187 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 46, 10, '<image>/20_buffer.js');
$_TypeError =& $x187[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x187;
$x188 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x189 = $x188($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x189->class) && $x189->class === 'Error' && !isset($x189->properties['file']) && !isset($x189->properties['line']) && !isset($x189->properties['column'])) {$x189->properties['file'] = '<image>/20_buffer.js';$x189->properties['line'] = 46;$x189->properties['column'] = 10;$x189->attributes['file'] = $x189->attributes['line'] = $x189->attributes['column'] = 0; }
throw new JSException($x189, 46, 10, '<image>/20_buffer.js');
}
$x185 = $x181->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x186 = $x185($global, $x169, $x181, array(0), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x170 = $x186;
if (is_object($x170) && $x170 !== JS::$undefined) { $x169 = $x170; }
return $x169;;
}
else {
unset($x191, $W191, $S191, $U191);
$x192 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) 'length', 48, 17, '<image>/20_buffer.js');
$x191 =& $x192[0]; list(,$W191,$S191,$U191) = $x192;
$x190 = (((gettype($x191) === gettype(1) && $x191 === 1))|| (((is_float($x191) || is_int($x191)) && (is_float(1) || is_int(1))) && $x191 == 1));
if (JS::toBoolean($x190, $global)) {
unset($x193, $W193, $S193, $U193);
$x194 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) 0, 49, 14, '<image>/20_buffer.js');
$x193 =& $x194[0]; list(,$W193,$S193,$U193) = $x194;
return $x193;;
}
else {
$x195 = (((gettype($_totalLength) === gettype(JS::$undefined) && $_totalLength === JS::$undefined))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_totalLength == JS::$undefined));
if (JS::toBoolean($x195, $global)) {
$x196 = 0;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$_totalLength = $x196;
for ($x197 = 0;; ++$x197) {
if ($x197 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x198, $W198, $S198, $U198);
$x199 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) 'length', 54, 28, '<image>/20_buffer.js');
$x198 =& $x199[0]; list(,$W198,$S198,$U198) = $x199;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x198;
}
if ($x197 !== 0) {
$x200 = ++$_i;
}
$x201 = JS::toPrimitive($_i, $global);
$x202 = JS::toPrimitive($_l, $global);
$x203 = (is_string($x201) && is_string($x202) ? strcmp($x201, $x202) < 0 : (!is_nan($x204 = JS::toNumber($x201, $global)) && !is_nan($x205 = JS::toNumber($x202, $global)) && $x204 < $x205));
if (!JS::toBoolean($x203, $global)) { break; }

unset($x206, $W206, $S206, $U206);
$x207 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) $_i, 55, 24, '<image>/20_buffer.js');
$x206 =& $x207[0]; list(,$W206,$S206,$U206) = $x207;
unset($x208, $W208, $S208, $U208);
$x209 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x206, (string) 'length', 55, 27, '<image>/20_buffer.js');
$x208 =& $x209[0]; list(,$W208,$S208,$U208) = $x209;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$x210 = JS::toPrimitive($_totalLength, $global);
$x211 = JS::toPrimitive($x208, $global);
$_totalLength = (is_string($x210) || is_string($x211) ? JS::toString($x210, $global) . JS::toString($x211, $global) : JS::toNumber($x210, $global) + JS::toNumber($x211, $global));;
};;
};
unset($_require, $Wrequire, $Srequire, $Urequire);
$x214 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'require', 59, 17, '<image>/20_buffer.js');
$_require =& $x214[0]; list(,$Wrequire,$Srequire,$Urequire) = $x214;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x215 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 59, 17, '<image>/20_buffer.js');
$_ReferenceError =& $x215[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x215;
$x216 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 17);
$x217 = $x216($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x217->class) && $x217->class === 'Error' && !isset($x217->properties['file']) && !isset($x217->properties['line']) && !isset($x217->properties['column'])) {$x217->properties['file'] = '<image>/20_buffer.js';$x217->properties['line'] = 59;$x217->properties['column'] = 17;$x217->attributes['file'] = $x217->attributes['line'] = $x217->attributes['column'] = 0; }
throw new JSException($x217, 59, 17, '<image>/20_buffer.js');
}
unset($x218, $W218, $S218, $U218);
$x219 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 59, 24, '<image>/20_buffer.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
unset($x220, $W220, $S220, $U220);
$x221 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x218, (string) 'buffer', 59, 32, '<image>/20_buffer.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
unset($x222, $W222, $S222, $U222);
$x223 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x220, (string) 'exports', 59, 39, '<image>/20_buffer.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
unset($x224, $W224, $S224, $U224);
$x225 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x222, (string) 'Buffer', 59, 47, '<image>/20_buffer.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
$x212 = clone JS::$objectTemplate;
unset($x226, $W226, $S226, $U226);
$x227 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x224, (string) 'prototype', 59, 13, '<image>/20_buffer.js');
$x226 =& $x227[0]; list(,$W226,$S226,$U226) = $x227;
$x213 = $x226;
$x212->prototype = $x213;
if (!(is_object($x224) && isset($x224->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x230 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 59, 13, '<image>/20_buffer.js');
$_TypeError =& $x230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x230;
$x231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x232 = $x231($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x232->class) && $x232->class === 'Error' && !isset($x232->properties['file']) && !isset($x232->properties['line']) && !isset($x232->properties['column'])) {$x232->properties['file'] = '<image>/20_buffer.js';$x232->properties['line'] = 59;$x232->properties['column'] = 13;$x232->attributes['file'] = $x232->attributes['line'] = $x232->attributes['column'] = 0; }
throw new JSException($x232, 59, 13, '<image>/20_buffer.js');
}
$x228 = $x224->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x229 = $x228($global, $x212, $x224, array($_totalLength), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x213 = $x229;
if (is_object($x213) && $x213 !== JS::$undefined) { $x212 = $x213; }
$scope->properties['buf'] = JS::$undefined; $_buf =& $scope->properties['buf'];
$Ubuf = FALSE;
$_buf = $x212;
for ($x233 = 0;; ++$x233) {
if ($x233 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x234, $W234, $S234, $U234);
$x235 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) 'length', 61, 27, '<image>/20_buffer.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x234;
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = 0;
}
if ($x233 !== 0) {
$x236 = ++$_i;
}
$x237 = JS::toPrimitive($_i, $global);
$x238 = JS::toPrimitive($_l, $global);
$x239 = (is_string($x237) && is_string($x238) ? strcmp($x237, $x238) < 0 : (!is_nan($x240 = JS::toNumber($x237, $global)) && !is_nan($x241 = JS::toNumber($x238, $global)) && $x240 < $x241));
if (!JS::toBoolean($x239, $global)) { break; }

unset($x242, $W242, $S242, $U242);
$x243 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) $_i, 62, 8, '<image>/20_buffer.js');
$x242 =& $x243[0]; list(,$W242,$S242,$U242) = $x243;
if ($x242 === JS::$undefined || $x242 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x245 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x245[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x245;
$x246 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x247 = $x246($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x247->class) && $x247->class === 'Error' && !isset($x247->properties['file']) && !isset($x247->properties['line']) && !isset($x247->properties['column'])) {$x247->properties['file'] = '<image>/20_buffer.js';$x247->properties['line'] = 62;$x247->properties['column'] = 16;$x247->attributes['file'] = $x247->attributes['line'] = $x247->attributes['column'] = 0; }
throw new JSException($x247, 62, 16, '<image>/20_buffer.js');
}
$x244 = JS::toObject($x242, $global);
unset($x248, $W248, $S248, $U248);
$x249 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x244, (string) 'copy', 62, 16, '<image>/20_buffer.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
if (!(is_object($x248) && isset($x248->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x252 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x252;
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x254 = $x253($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x254->class) && $x254->class === 'Error' && !isset($x254->properties['file']) && !isset($x254->properties['line']) && !isset($x254->properties['column'])) {$x254->properties['file'] = '<image>/20_buffer.js';$x254->properties['line'] = 62;$x254->properties['column'] = 16;$x254->attributes['file'] = $x254->attributes['line'] = $x254->attributes['column'] = 0; }
throw new JSException($x254, 62, 16, '<image>/20_buffer.js');
}
$x250 = $x248->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x251 = $x250($global, $x244, $x248, array($_buf, $_offset), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x255, $W255, $S255, $U255);
$x256 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, (string) $_i, 63, 18, '<image>/20_buffer.js');
$x255 =& $x256[0]; list(,$W255,$S255,$U255) = $x256;
unset($x257, $W257, $S257, $U257);
$x258 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x255, (string) 'length', 63, 21, '<image>/20_buffer.js');
$x257 =& $x258[0]; list(,$W257,$S257,$U257) = $x258;
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$x259 = JS::toPrimitive($_offset, $global);
$x260 = JS::toPrimitive($x257, $global);
$_offset = (is_string($x259) || is_string($x260) ? JS::toString($x259, $global) . JS::toString($x260, $global) : JS::toNumber($x259, $global) + JS::toNumber($x260, $global));;
};
return $_buf;;
};
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x136=&$scope->properties[\'arguments\'];$x136->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x136->properties[$i]=$args[$i];$x136->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'list\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_list=&$scope->properties[\'list\'];$Ulist=FALSE;$scope->properties[\'totalLength\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_totalLength=&$scope->properties[\'totalLength\'];$UtotalLength=FALSE;$scope->properties[\'concat\']=$fn;$_concat=&$scope->properties[\'concat\'];$global->scope[++$global->scope_sp]=$scope;unset($_Array,$WArray,$SArray,$UArray);$x137=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'Array\',41,7,\'<image>/20_buffer.js\');$_Array=&$x137[0];list(,$WArray,$SArray,$UArray)=$x137;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x138=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',41,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x138[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x138;$x139=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,7);$x140=$x139($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x140->class)&&$x140->class===\'Error\'&&!isset($x140->properties[\'file\'])&&!isset($x140->properties[\'line\'])&&!isset($x140->properties[\'column\'])){$x140->properties[\'file\']=\'<image>/20_buffer.js\';$x140->properties[\'line\']=41;$x140->properties[\'column\']=7;$x140->attributes[\'file\']=$x140->attributes[\'line\']=$x140->attributes[\'column\']=0;}throw new JSException($x140,41,7,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x142=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',41,20,\'<image>/20_buffer.js\');$_TypeError=&$x142[0];list(,$WTypeError,$STypeError,$UTypeError)=$x142;$x143=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x144=$x143($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/20_buffer.js\';$x144->properties[\'line\']=41;$x144->properties[\'column\']=20;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,41,20,\'<image>/20_buffer.js\');}$x141=JS::toObject($_Array,$global);unset($x145,$W145,$S145,$U145);$x146=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x141,(string)\'isArray\',41,20,\'<image>/20_buffer.js\');$x145=&$x146[0];list(,$W145,$S145,$U145)=$x146;if(!(is_object($x145)&&isset($x145->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x149=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',41,20,\'<image>/20_buffer.js\');$_TypeError=&$x149[0];list(,$WTypeError,$STypeError,$UTypeError)=$x149;$x150=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x151=$x150($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x151->class)&&$x151->class===\'Error\'&&!isset($x151->properties[\'file\'])&&!isset($x151->properties[\'line\'])&&!isset($x151->properties[\'column\'])){$x151->properties[\'file\']=\'<image>/20_buffer.js\';$x151->properties[\'line\']=41;$x151->properties[\'column\']=20;$x151->attributes[\'file\']=$x151->attributes[\'line\']=$x151->attributes[\'column\']=0;}throw new JSException($x151,41,20,\'<image>/20_buffer.js\');}$x147=$x145->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x148=$x147($global,$x141,$x145,array($_list),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x148,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x154=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',42,13,\'<image>/20_buffer.js\');$_TypeError=&$x154[0];list(,$WTypeError,$STypeError,$UTypeError)=$x154;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x155=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',42,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x155[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x155;$x156=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,13);$x157=$x156($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x157->class)&&$x157->class===\'Error\'&&!isset($x157->properties[\'file\'])&&!isset($x157->properties[\'line\'])&&!isset($x157->properties[\'column\'])){$x157->properties[\'file\']=\'<image>/20_buffer.js\';$x157->properties[\'line\']=42;$x157->properties[\'column\']=13;$x157->attributes[\'file\']=$x157->attributes[\'line\']=$x157->attributes[\'column\']=0;}throw new JSException($x157,42,13,\'<image>/20_buffer.js\');}$x152=clone JS::$objectTemplate;unset($x158,$W158,$S158,$U158);$x159=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,(string)\'prototype\',42,9,\'<image>/20_buffer.js\');$x158=&$x159[0];list(,$W158,$S158,$U158)=$x159;$x153=$x158;$x152->prototype=$x153;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x162=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x163=$x162($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x163->class)&&$x163->class===\'Error\'&&!isset($x163->properties[\'file\'])&&!isset($x163->properties[\'line\'])&&!isset($x163->properties[\'column\'])){$x163->properties[\'file\']=\'<image>/20_buffer.js\';$x163->properties[\'line\']=42;$x163->properties[\'column\']=9;$x163->attributes[\'file\']=$x163->attributes[\'line\']=$x163->attributes[\'column\']=0;}throw new JSException($x163,42,9,\'<image>/20_buffer.js\');}$x160=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x161=$x160($global,$x152,$_TypeError,array(\'Given list is not an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x153=$x161;if(is_object($x153)&&$x153!==JS::$undefined){$x152=$x153;}if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/20_buffer.js\';$x152->properties[\'line\']=42;$x152->properties[\'column\']=3;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,42,3,\'<image>/20_buffer.js\');}unset($x166,$W166,$S166,$U166);$x167=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)\'length\',45,10,\'<image>/20_buffer.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;$x165=(((gettype($x166)===gettype(0)&&$x166===0))||(((is_float($x166)||is_int($x166))&&(is_float(0)||is_int(0)))&&$x166==0));$x164=$x165;if(!JS::toBoolean($x164,$global)){$x168=(((gettype($_totalLength)===gettype(0)&&$_totalLength===0))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(0)||is_int(0)))&&$_totalLength==0));$x164=$x168;}if(JS::toBoolean($x164,$global)){unset($_require,$Wrequire,$Srequire,$Urequire);$x171=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'require\',46,14,\'<image>/20_buffer.js\');$_require=&$x171[0];list(,$Wrequire,$Srequire,$Urequire)=$x171;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x172=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',46,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x172[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x172;$x173=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,14);$x174=$x173($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x174->class)&&$x174->class===\'Error\'&&!isset($x174->properties[\'file\'])&&!isset($x174->properties[\'line\'])&&!isset($x174->properties[\'column\'])){$x174->properties[\'file\']=\'<image>/20_buffer.js\';$x174->properties[\'line\']=46;$x174->properties[\'column\']=14;$x174->attributes[\'file\']=$x174->attributes[\'line\']=$x174->attributes[\'column\']=0;}throw new JSException($x174,46,14,\'<image>/20_buffer.js\');}unset($x175,$W175,$S175,$U175);$x176=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,(string)\'modules\',46,21,\'<image>/20_buffer.js\');$x175=&$x176[0];list(,$W175,$S175,$U175)=$x176;unset($x177,$W177,$S177,$U177);$x178=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x175,(string)\'buffer\',46,29,\'<image>/20_buffer.js\');$x177=&$x178[0];list(,$W177,$S177,$U177)=$x178;unset($x179,$W179,$S179,$U179);$x180=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x177,(string)\'exports\',46,36,\'<image>/20_buffer.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;unset($x181,$W181,$S181,$U181);$x182=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x179,(string)\'Buffer\',46,44,\'<image>/20_buffer.js\');$x181=&$x182[0];list(,$W181,$S181,$U181)=$x182;$x169=clone JS::$objectTemplate;unset($x183,$W183,$S183,$U183);$x184=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x181,(string)\'prototype\',46,10,\'<image>/20_buffer.js\');$x183=&$x184[0];list(,$W183,$S183,$U183)=$x184;$x170=$x183;$x169->prototype=$x170;if(!(is_object($x181)&&isset($x181->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x187=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',46,10,\'<image>/20_buffer.js\');$_TypeError=&$x187[0];list(,$WTypeError,$STypeError,$UTypeError)=$x187;$x188=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x189=$x188($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x189->class)&&$x189->class===\'Error\'&&!isset($x189->properties[\'file\'])&&!isset($x189->properties[\'line\'])&&!isset($x189->properties[\'column\'])){$x189->properties[\'file\']=\'<image>/20_buffer.js\';$x189->properties[\'line\']=46;$x189->properties[\'column\']=10;$x189->attributes[\'file\']=$x189->attributes[\'line\']=$x189->attributes[\'column\']=0;}throw new JSException($x189,46,10,\'<image>/20_buffer.js\');}$x185=$x181->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x186=$x185($global,$x169,$x181,array(0),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x170=$x186;if(is_object($x170)&&$x170!==JS::$undefined){$x169=$x170;}return$x169;}else{unset($x191,$W191,$S191,$U191);$x192=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)\'length\',48,17,\'<image>/20_buffer.js\');$x191=&$x192[0];list(,$W191,$S191,$U191)=$x192;$x190=(((gettype($x191)===gettype(1)&&$x191===1))||(((is_float($x191)||is_int($x191))&&(is_float(1)||is_int(1)))&&$x191==1));if(JS::toBoolean($x190,$global)){unset($x193,$W193,$S193,$U193);$x194=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)0,49,14,\'<image>/20_buffer.js\');$x193=&$x194[0];list(,$W193,$S193,$U193)=$x194;return$x193;}else{$x195=(((gettype($_totalLength)===gettype(JS::$undefined)&&$_totalLength===JS::$undefined))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_totalLength==JS::$undefined));if(JS::toBoolean($x195,$global)){$x196=0;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$_totalLength=$x196;for($x197=0;;++$x197){if($x197===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x198,$W198,$S198,$U198);$x199=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)\'length\',54,28,\'<image>/20_buffer.js\');$x198=&$x199[0];list(,$W198,$S198,$U198)=$x199;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x198;}if($x197!==0){$x200=++$_i;}$x201=JS::toPrimitive($_i,$global);$x202=JS::toPrimitive($_l,$global);$x203=(is_string($x201)&&is_string($x202)?strcmp($x201,$x202)<0:(!is_nan($x204=JS::toNumber($x201,$global))&&!is_nan($x205=JS::toNumber($x202,$global))&&$x204<$x205));if(!JS::toBoolean($x203,$global)){break;}unset($x206,$W206,$S206,$U206);$x207=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)$_i,55,24,\'<image>/20_buffer.js\');$x206=&$x207[0];list(,$W206,$S206,$U206)=$x207;unset($x208,$W208,$S208,$U208);$x209=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x206,(string)\'length\',55,27,\'<image>/20_buffer.js\');$x208=&$x209[0];list(,$W208,$S208,$U208)=$x209;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$x210=JS::toPrimitive($_totalLength,$global);$x211=JS::toPrimitive($x208,$global);$_totalLength=(is_string($x210)||is_string($x211)?JS::toString($x210,$global).JS::toString($x211,$global):JS::toNumber($x210,$global)+JS::toNumber($x211,$global));}}unset($_require,$Wrequire,$Srequire,$Urequire);$x214=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'require\',59,17,\'<image>/20_buffer.js\');$_require=&$x214[0];list(,$Wrequire,$Srequire,$Urequire)=$x214;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x215=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',59,17,\'<image>/20_buffer.js\');$_ReferenceError=&$x215[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x215;$x216=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,17);$x217=$x216($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x217->class)&&$x217->class===\'Error\'&&!isset($x217->properties[\'file\'])&&!isset($x217->properties[\'line\'])&&!isset($x217->properties[\'column\'])){$x217->properties[\'file\']=\'<image>/20_buffer.js\';$x217->properties[\'line\']=59;$x217->properties[\'column\']=17;$x217->attributes[\'file\']=$x217->attributes[\'line\']=$x217->attributes[\'column\']=0;}throw new JSException($x217,59,17,\'<image>/20_buffer.js\');}unset($x218,$W218,$S218,$U218);$x219=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,(string)\'modules\',59,24,\'<image>/20_buffer.js\');$x218=&$x219[0];list(,$W218,$S218,$U218)=$x219;unset($x220,$W220,$S220,$U220);$x221=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x218,(string)\'buffer\',59,32,\'<image>/20_buffer.js\');$x220=&$x221[0];list(,$W220,$S220,$U220)=$x221;unset($x222,$W222,$S222,$U222);$x223=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x220,(string)\'exports\',59,39,\'<image>/20_buffer.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;unset($x224,$W224,$S224,$U224);$x225=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x222,(string)\'Buffer\',59,47,\'<image>/20_buffer.js\');$x224=&$x225[0];list(,$W224,$S224,$U224)=$x225;$x212=clone JS::$objectTemplate;unset($x226,$W226,$S226,$U226);$x227=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x224,(string)\'prototype\',59,13,\'<image>/20_buffer.js\');$x226=&$x227[0];list(,$W226,$S226,$U226)=$x227;$x213=$x226;$x212->prototype=$x213;if(!(is_object($x224)&&isset($x224->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x230=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',59,13,\'<image>/20_buffer.js\');$_TypeError=&$x230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x230;$x231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x232=$x231($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x232->class)&&$x232->class===\'Error\'&&!isset($x232->properties[\'file\'])&&!isset($x232->properties[\'line\'])&&!isset($x232->properties[\'column\'])){$x232->properties[\'file\']=\'<image>/20_buffer.js\';$x232->properties[\'line\']=59;$x232->properties[\'column\']=13;$x232->attributes[\'file\']=$x232->attributes[\'line\']=$x232->attributes[\'column\']=0;}throw new JSException($x232,59,13,\'<image>/20_buffer.js\');}$x228=$x224->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x229=$x228($global,$x212,$x224,array($_totalLength),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x213=$x229;if(is_object($x213)&&$x213!==JS::$undefined){$x212=$x213;}$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x212;for($x233=0;;++$x233){if($x233===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x234,$W234,$S234,$U234);$x235=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)\'length\',61,27,\'<image>/20_buffer.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x234;$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=0;}if($x233!==0){$x236=++$_i;}$x237=JS::toPrimitive($_i,$global);$x238=JS::toPrimitive($_l,$global);$x239=(is_string($x237)&&is_string($x238)?strcmp($x237,$x238)<0:(!is_nan($x240=JS::toNumber($x237,$global))&&!is_nan($x241=JS::toNumber($x238,$global))&&$x240<$x241));if(!JS::toBoolean($x239,$global)){break;}unset($x242,$W242,$S242,$U242);$x243=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)$_i,62,8,\'<image>/20_buffer.js\');$x242=&$x243[0];list(,$W242,$S242,$U242)=$x243;if($x242===JS::$undefined||$x242===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x245=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',62,16,\'<image>/20_buffer.js\');$_TypeError=&$x245[0];list(,$WTypeError,$STypeError,$UTypeError)=$x245;$x246=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x247=$x246($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x247->class)&&$x247->class===\'Error\'&&!isset($x247->properties[\'file\'])&&!isset($x247->properties[\'line\'])&&!isset($x247->properties[\'column\'])){$x247->properties[\'file\']=\'<image>/20_buffer.js\';$x247->properties[\'line\']=62;$x247->properties[\'column\']=16;$x247->attributes[\'file\']=$x247->attributes[\'line\']=$x247->attributes[\'column\']=0;}throw new JSException($x247,62,16,\'<image>/20_buffer.js\');}$x244=JS::toObject($x242,$global);unset($x248,$W248,$S248,$U248);$x249=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x244,(string)\'copy\',62,16,\'<image>/20_buffer.js\');$x248=&$x249[0];list(,$W248,$S248,$U248)=$x249;if(!(is_object($x248)&&isset($x248->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x252=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',62,16,\'<image>/20_buffer.js\');$_TypeError=&$x252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x252;$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x254=$x253($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x254->class)&&$x254->class===\'Error\'&&!isset($x254->properties[\'file\'])&&!isset($x254->properties[\'line\'])&&!isset($x254->properties[\'column\'])){$x254->properties[\'file\']=\'<image>/20_buffer.js\';$x254->properties[\'line\']=62;$x254->properties[\'column\']=16;$x254->attributes[\'file\']=$x254->attributes[\'line\']=$x254->attributes[\'column\']=0;}throw new JSException($x254,62,16,\'<image>/20_buffer.js\');}$x250=$x248->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x251=$x250($global,$x244,$x248,array($_buf,$_offset),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x255,$W255,$S255,$U255);$x256=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,(string)$_i,63,18,\'<image>/20_buffer.js\');$x255=&$x256[0];list(,$W255,$S255,$U255)=$x256;unset($x257,$W257,$S257,$U257);$x258=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x255,(string)\'length\',63,21,\'<image>/20_buffer.js\');$x257=&$x258[0];list(,$W257,$S257,$U257)=$x258;if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$x259=JS::toPrimitive($_offset,$global);$x260=JS::toPrimitive($x257,$global);$_offset=(is_string($x259)||is_string($x260)?JS::toString($x259,$global).JS::toString($x260,$global):JS::toNumber($x259,$global)+JS::toNumber($x260,$global));}return$_buf;}}return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_9($global, $scope, $base, $id, $line, $column, $file) {
$Wmaxlen = $Smaxlen = $Umaxlen = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_maxlen =& $lookup->properties[$id]; $Wmaxlen = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $Smaxlen = $lookup->setters[$id]; }
else { $_maxlen = JS::$undefined; $Umaxlen = TRUE; }
return array(&$_maxlen, $Wmaxlen, $Smaxlen, $Umaxlen);
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_9($global,$scope,$base,$id,$line,$column,$file){$Wmaxlen=$Smaxlen=$Umaxlen=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_maxlen=&$lookup->properties[$id];$Wmaxlen=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$Smaxlen=$lookup->setters[$id];}else{$_maxlen=JS::$undefined;$Umaxlen=TRUE;}return array(&$_maxlen,$Wmaxlen,$Smaxlen,$Umaxlen);}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x279 =& $scope->properties['arguments'];
$x279->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x279->properties[$i] = $args[$i];
$x279->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$scope->properties['offset'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$scope->properties['length'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$scope->properties['encoding'] = array_key_exists(3, $args) ? $args[3] : JS::$undefined;
$_encoding =& $scope->properties['encoding'];
$Uencoding = FALSE;
$scope->properties['write'] = $fn;
$_write =& $scope->properties['write'];
$global->scope[++$global->scope_sp] = $scope;
$x280 = !(((gettype($_encoding) === gettype(JS::$undefined) && $_encoding === JS::$undefined))|| (((is_float($_encoding) || is_int($_encoding)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_encoding == JS::$undefined));
if (JS::toBoolean($x280, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x283 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'NotImplementedError', 72, 13, '<image>/20_buffer.js');
$_NotImplementedError =& $x283[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x283;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x284 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 72, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x284[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x284;
$x285 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 13);
$x286 = $x285($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x286->class) && $x286->class === 'Error' && !isset($x286->properties['file']) && !isset($x286->properties['line']) && !isset($x286->properties['column'])) {$x286->properties['file'] = '<image>/20_buffer.js';$x286->properties['line'] = 72;$x286->properties['column'] = 13;$x286->attributes['file'] = $x286->attributes['line'] = $x286->attributes['column'] = 0; }
throw new JSException($x286, 72, 13, '<image>/20_buffer.js');
}
$x281 = clone JS::$objectTemplate;
unset($x287, $W287, $S287, $U287);
$x288 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_NotImplementedError, (string) 'prototype', 72, 9, '<image>/20_buffer.js');
$x287 =& $x288[0]; list(,$W287,$S287,$U287) = $x288;
$x282 = $x287;
$x281->prototype = $x282;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x291 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 72, 9, '<image>/20_buffer.js');
$_TypeError =& $x291[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x291;
$x292 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x293 = $x292($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x293->class) && $x293->class === 'Error' && !isset($x293->properties['file']) && !isset($x293->properties['line']) && !isset($x293->properties['column'])) {$x293->properties['file'] = '<image>/20_buffer.js';$x293->properties['line'] = 72;$x293->properties['column'] = 9;$x293->attributes['file'] = $x293->attributes['line'] = $x293->attributes['column'] = 0; }
throw new JSException($x293, 72, 9, '<image>/20_buffer.js');
}
$x289 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x290 = $x289($global, $x281, $_NotImplementedError, array('encoding argument not implemented'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x282 = $x290;
if (is_object($x282) && $x282 !== JS::$undefined) { $x281 = $x282; }
if (isset($x281->class) && $x281->class === 'Error' && !isset($x281->properties['file']) && !isset($x281->properties['line']) && !isset($x281->properties['column'])) {$x281->properties['file'] = '<image>/20_buffer.js';$x281->properties['line'] = 72;$x281->properties['column'] = 3;$x281->attributes['file'] = $x281->attributes['line'] = $x281->attributes['column'] = 0; }
throw new JSException($x281, 72, 3, '<image>/20_buffer.js');;
};
$x294 = $_offset;
if (!JS::toBoolean($x294, $global)) {
$x294 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x294;
$x295 = $_length;
if (!JS::toBoolean($x295, $global)) {
unset($x296, $W296, $S296, $U296);
$x297 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, (string) 'length', 76, 25, '<image>/20_buffer.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
$x295 = (JS::toNumber($x296, $global) - JS::toNumber($_offset, $global)); }
if ($Ulength) {$global->properties['length'] = $_length; $_length =& $global->properties['length']; }
$_length = $x295;
$x298 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x298;
unset($x299, $W299, $S299, $U299);
$x300 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, (string) 'length', 78, 15, '<image>/20_buffer.js');
$x299 =& $x300[0]; list(,$W299,$S299,$U299) = $x300;
unset($_maxlen, $Wmaxlen, $Smaxlen, $Umaxlen);
$x301 = _f915aaba5b76f6e13a986dca9da58f68_9($global, $scope, $scope, (string) 'maxlen', 78, 9, '<image>/20_buffer.js');
$_maxlen =& $x301[0]; list(,$Wmaxlen,$Smaxlen,$Umaxlen) = $x301;
if ($Umaxlen) {$global->properties['maxlen'] = $_maxlen; $_maxlen =& $global->properties['maxlen']; }
$_maxlen = $x299;
$leThis->value = substr(substr($leThis->value, 0,$_offset) . substr($_string, 0,$_length) .
		substr($leThis->value,$_offset+$_length), 0,$_maxlen);
return $_length;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x279=&$scope->properties[\'arguments\'];$x279->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x279->properties[$i]=$args[$i];$x279->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'length\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$scope->properties[\'encoding\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_encoding=&$scope->properties[\'encoding\'];$Uencoding=FALSE;$scope->properties[\'write\']=$fn;$_write=&$scope->properties[\'write\'];$global->scope[++$global->scope_sp]=$scope;$x280=!(((gettype($_encoding)===gettype(JS::$undefined)&&$_encoding===JS::$undefined))||(((is_float($_encoding)||is_int($_encoding))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_encoding==JS::$undefined));if(JS::toBoolean($x280,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x283=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'NotImplementedError\',72,13,\'<image>/20_buffer.js\');$_NotImplementedError=&$x283[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x283;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x284=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',72,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x284[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x284;$x285=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,13);$x286=$x285($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x286->class)&&$x286->class===\'Error\'&&!isset($x286->properties[\'file\'])&&!isset($x286->properties[\'line\'])&&!isset($x286->properties[\'column\'])){$x286->properties[\'file\']=\'<image>/20_buffer.js\';$x286->properties[\'line\']=72;$x286->properties[\'column\']=13;$x286->attributes[\'file\']=$x286->attributes[\'line\']=$x286->attributes[\'column\']=0;}throw new JSException($x286,72,13,\'<image>/20_buffer.js\');}$x281=clone JS::$objectTemplate;unset($x287,$W287,$S287,$U287);$x288=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_NotImplementedError,(string)\'prototype\',72,9,\'<image>/20_buffer.js\');$x287=&$x288[0];list(,$W287,$S287,$U287)=$x288;$x282=$x287;$x281->prototype=$x282;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x291=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',72,9,\'<image>/20_buffer.js\');$_TypeError=&$x291[0];list(,$WTypeError,$STypeError,$UTypeError)=$x291;$x292=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x293=$x292($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x293->class)&&$x293->class===\'Error\'&&!isset($x293->properties[\'file\'])&&!isset($x293->properties[\'line\'])&&!isset($x293->properties[\'column\'])){$x293->properties[\'file\']=\'<image>/20_buffer.js\';$x293->properties[\'line\']=72;$x293->properties[\'column\']=9;$x293->attributes[\'file\']=$x293->attributes[\'line\']=$x293->attributes[\'column\']=0;}throw new JSException($x293,72,9,\'<image>/20_buffer.js\');}$x289=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x290=$x289($global,$x281,$_NotImplementedError,array(\'encoding argument not implemented\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x282=$x290;if(is_object($x282)&&$x282!==JS::$undefined){$x281=$x282;}if(isset($x281->class)&&$x281->class===\'Error\'&&!isset($x281->properties[\'file\'])&&!isset($x281->properties[\'line\'])&&!isset($x281->properties[\'column\'])){$x281->properties[\'file\']=\'<image>/20_buffer.js\';$x281->properties[\'line\']=72;$x281->properties[\'column\']=3;$x281->attributes[\'file\']=$x281->attributes[\'line\']=$x281->attributes[\'column\']=0;}throw new JSException($x281,72,3,\'<image>/20_buffer.js\');}$x294=$_offset;if(!JS::toBoolean($x294,$global)){$x294=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x294;$x295=$_length;if(!JS::toBoolean($x295,$global)){unset($x296,$W296,$S296,$U296);$x297=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,(string)\'length\',76,25,\'<image>/20_buffer.js\');$x296=&$x297[0];list(,$W296,$S296,$U296)=$x297;$x295=(JS::toNumber($x296,$global)-JS::toNumber($_offset,$global));}if($Ulength){$global->properties[\'length\']=$_length;$_length=&$global->properties[\'length\'];}$_length=$x295;$x298=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x298;unset($x299,$W299,$S299,$U299);$x300=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,(string)\'length\',78,15,\'<image>/20_buffer.js\');$x299=&$x300[0];list(,$W299,$S299,$U299)=$x300;unset($_maxlen,$Wmaxlen,$Smaxlen,$Umaxlen);$x301=_f915aaba5b76f6e13a986dca9da58f68_9($global,$scope,$scope,(string)\'maxlen\',78,9,\'<image>/20_buffer.js\');$_maxlen=&$x301[0];list(,$Wmaxlen,$Smaxlen,$Umaxlen)=$x301;if($Umaxlen){$global->properties[\'maxlen\']=$_maxlen;$_maxlen=&$global->properties[\'maxlen\'];}$_maxlen=$x299;$leThis->value=substr(substr($leThis->value,0,$_offset).substr($_string,0,$_length).substr($leThis->value,$_offset+$_length),0,$_maxlen);return$_length;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x322 =& $scope->properties['arguments'];
$x322->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x322->properties[$i] = $args[$i];
$x322->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['toString'] = $fn;
$_toString =& $scope->properties['toString'];
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x322=&$scope->properties[\'arguments\'];$x322->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x322->properties[$i]=$args[$i];$x322->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'toString\']=$fn;$_toString=&$scope->properties[\'toString\'];$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x343 =& $scope->properties['arguments'];
$x343->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x343->properties[$i] = $args[$i];
$x343->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['targetBuffer'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_targetBuffer =& $scope->properties['targetBuffer'];
$UtargetBuffer = FALSE;
$scope->properties['targetStart'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_targetStart =& $scope->properties['targetStart'];
$UtargetStart = FALSE;
$scope->properties['sourceStart'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_sourceStart =& $scope->properties['sourceStart'];
$UsourceStart = FALSE;
$scope->properties['sourceEnd'] = array_key_exists(3, $args) ? $args[3] : JS::$undefined;
$_sourceEnd =& $scope->properties['sourceEnd'];
$UsourceEnd = FALSE;
$scope->properties['copy'] = $fn;
$_copy =& $scope->properties['copy'];
$global->scope[++$global->scope_sp] = $scope;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x344 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'require', 91, 7, '<image>/20_buffer.js');
$_require =& $x344[0]; list(,$Wrequire,$Srequire,$Urequire) = $x344;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x345 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 91, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x345[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x345;
$x346 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 7);
$x347 = $x346($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x347->class) && $x347->class === 'Error' && !isset($x347->properties['file']) && !isset($x347->properties['line']) && !isset($x347->properties['column'])) {$x347->properties['file'] = '<image>/20_buffer.js';$x347->properties['line'] = 91;$x347->properties['column'] = 7;$x347->attributes['file'] = $x347->attributes['line'] = $x347->attributes['column'] = 0; }
throw new JSException($x347, 91, 7, '<image>/20_buffer.js');
}
unset($x348, $W348, $S348, $U348);
$x349 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 91, 14, '<image>/20_buffer.js');
$x348 =& $x349[0]; list(,$W348,$S348,$U348) = $x349;
unset($x350, $W350, $S350, $U350);
$x351 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x348, (string) 'buffer', 91, 22, '<image>/20_buffer.js');
$x350 =& $x351[0]; list(,$W350,$S350,$U350) = $x351;
unset($x352, $W352, $S352, $U352);
$x353 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x350, (string) 'exports', 91, 29, '<image>/20_buffer.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
unset($x354, $W354, $S354, $U354);
$x355 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x352, (string) 'Buffer', 91, 37, '<image>/20_buffer.js');
$x354 =& $x355[0]; list(,$W354,$S354,$U354) = $x355;
if ($x354 === JS::$undefined || $x354 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x357 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x357[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x357;
$x358 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x359 = $x358($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x359->class) && $x359->class === 'Error' && !isset($x359->properties['file']) && !isset($x359->properties['line']) && !isset($x359->properties['column'])) {$x359->properties['file'] = '<image>/20_buffer.js';$x359->properties['line'] = 91;$x359->properties['column'] = 53;$x359->attributes['file'] = $x359->attributes['line'] = $x359->attributes['column'] = 0; }
throw new JSException($x359, 91, 53, '<image>/20_buffer.js');
}
$x356 = JS::toObject($x354, $global);
unset($x360, $W360, $S360, $U360);
$x361 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x356, (string) 'isBuffer', 91, 53, '<image>/20_buffer.js');
$x360 =& $x361[0]; list(,$W360,$S360,$U360) = $x361;
if (!(is_object($x360) && isset($x360->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x364 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x364[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x364;
$x365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x366 = $x365($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x366->class) && $x366->class === 'Error' && !isset($x366->properties['file']) && !isset($x366->properties['line']) && !isset($x366->properties['column'])) {$x366->properties['file'] = '<image>/20_buffer.js';$x366->properties['line'] = 91;$x366->properties['column'] = 53;$x366->attributes['file'] = $x366->attributes['line'] = $x366->attributes['column'] = 0; }
throw new JSException($x366, 91, 53, '<image>/20_buffer.js');
}
$x362 = $x360->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x363 = $x362($global, $x356, $x360, array($_targetBuffer), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x363, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x369 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 92, 13, '<image>/20_buffer.js');
$_TypeError =& $x369[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x369;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x370 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 92, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x370[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x370;
$x371 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 13);
$x372 = $x371($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x372->class) && $x372->class === 'Error' && !isset($x372->properties['file']) && !isset($x372->properties['line']) && !isset($x372->properties['column'])) {$x372->properties['file'] = '<image>/20_buffer.js';$x372->properties['line'] = 92;$x372->properties['column'] = 13;$x372->attributes['file'] = $x372->attributes['line'] = $x372->attributes['column'] = 0; }
throw new JSException($x372, 92, 13, '<image>/20_buffer.js');
}
$x367 = clone JS::$objectTemplate;
unset($x373, $W373, $S373, $U373);
$x374 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, (string) 'prototype', 92, 9, '<image>/20_buffer.js');
$x373 =& $x374[0]; list(,$W373,$S373,$U373) = $x374;
$x368 = $x373;
$x367->prototype = $x368;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x377 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x378 = $x377($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x378->class) && $x378->class === 'Error' && !isset($x378->properties['file']) && !isset($x378->properties['line']) && !isset($x378->properties['column'])) {$x378->properties['file'] = '<image>/20_buffer.js';$x378->properties['line'] = 92;$x378->properties['column'] = 9;$x378->attributes['file'] = $x378->attributes['line'] = $x378->attributes['column'] = 0; }
throw new JSException($x378, 92, 9, '<image>/20_buffer.js');
}
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x376 = $x375($global, $x367, $_TypeError, array('Given first argument is not a buffer'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x368 = $x376;
if (is_object($x368) && $x368 !== JS::$undefined) { $x367 = $x368; }
if (isset($x367->class) && $x367->class === 'Error' && !isset($x367->properties['file']) && !isset($x367->properties['line']) && !isset($x367->properties['column'])) {$x367->properties['file'] = '<image>/20_buffer.js';$x367->properties['line'] = 92;$x367->properties['column'] = 3;$x367->attributes['file'] = $x367->attributes['line'] = $x367->attributes['column'] = 0; }
throw new JSException($x367, 92, 3, '<image>/20_buffer.js');;
};
$x379 = $_targetStart;
if (!JS::toBoolean($x379, $global)) {
$x379 = 0; }
if ($UtargetStart) {$global->properties['targetStart'] = $_targetStart; $_targetStart =& $global->properties['targetStart']; }
$_targetStart = $x379;
$x380 = $_sourceStart;
if (!JS::toBoolean($x380, $global)) {
$x380 = 0; }
if ($UsourceStart) {$global->properties['sourceStart'] = $_sourceStart; $_sourceStart =& $global->properties['sourceStart']; }
$_sourceStart = $x380;
$x381 = $_sourceEnd;
if (!JS::toBoolean($x381, $global)) {
unset($x382, $W382, $S382, $U382);
$x383 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, (string) 'length', 97, 31, '<image>/20_buffer.js');
$x382 =& $x383[0]; list(,$W382,$S382,$U382) = $x383;
$x381 = $x382; }
if ($UsourceEnd) {$global->properties['sourceEnd'] = $_sourceEnd; $_sourceEnd =& $global->properties['sourceEnd']; }
$_sourceEnd = $x381;
if ($_targetBuffer === JS::$undefined || $_targetBuffer === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x385 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x385[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x385;
$x386 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x387 = $x386($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x387->class) && $x387->class === 'Error' && !isset($x387->properties['file']) && !isset($x387->properties['line']) && !isset($x387->properties['column'])) {$x387->properties['file'] = '<image>/20_buffer.js';$x387->properties['line'] = 99;$x387->properties['column'] = 20;$x387->attributes['file'] = $x387->attributes['line'] = $x387->attributes['column'] = 0; }
throw new JSException($x387, 99, 20, '<image>/20_buffer.js');
}
$x384 = JS::toObject($_targetBuffer, $global);
unset($x388, $W388, $S388, $U388);
$x389 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x384, (string) 'write', 99, 20, '<image>/20_buffer.js');
$x388 =& $x389[0]; list(,$W388,$S388,$U388) = $x389;
if (!(is_object($x388) && isset($x388->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x392 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x392[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x392;
$x393 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x394 = $x393($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x394->class) && $x394->class === 'Error' && !isset($x394->properties['file']) && !isset($x394->properties['line']) && !isset($x394->properties['column'])) {$x394->properties['file'] = '<image>/20_buffer.js';$x394->properties['line'] = 99;$x394->properties['column'] = 20;$x394->attributes['file'] = $x394->attributes['line'] = $x394->attributes['column'] = 0; }
throw new JSException($x394, 99, 20, '<image>/20_buffer.js');
}
$x390 = $x388->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x391 = $x390($global, $x384, $x388, array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart), $_targetStart), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x343=&$scope->properties[\'arguments\'];$x343->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x343->properties[$i]=$args[$i];$x343->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'targetBuffer\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_targetBuffer=&$scope->properties[\'targetBuffer\'];$UtargetBuffer=FALSE;$scope->properties[\'targetStart\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_targetStart=&$scope->properties[\'targetStart\'];$UtargetStart=FALSE;$scope->properties[\'sourceStart\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_sourceStart=&$scope->properties[\'sourceStart\'];$UsourceStart=FALSE;$scope->properties[\'sourceEnd\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_sourceEnd=&$scope->properties[\'sourceEnd\'];$UsourceEnd=FALSE;$scope->properties[\'copy\']=$fn;$_copy=&$scope->properties[\'copy\'];$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x344=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'require\',91,7,\'<image>/20_buffer.js\');$_require=&$x344[0];list(,$Wrequire,$Srequire,$Urequire)=$x344;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x345=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',91,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x345[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x345;$x346=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,7);$x347=$x346($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x347->class)&&$x347->class===\'Error\'&&!isset($x347->properties[\'file\'])&&!isset($x347->properties[\'line\'])&&!isset($x347->properties[\'column\'])){$x347->properties[\'file\']=\'<image>/20_buffer.js\';$x347->properties[\'line\']=91;$x347->properties[\'column\']=7;$x347->attributes[\'file\']=$x347->attributes[\'line\']=$x347->attributes[\'column\']=0;}throw new JSException($x347,91,7,\'<image>/20_buffer.js\');}unset($x348,$W348,$S348,$U348);$x349=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,(string)\'modules\',91,14,\'<image>/20_buffer.js\');$x348=&$x349[0];list(,$W348,$S348,$U348)=$x349;unset($x350,$W350,$S350,$U350);$x351=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x348,(string)\'buffer\',91,22,\'<image>/20_buffer.js\');$x350=&$x351[0];list(,$W350,$S350,$U350)=$x351;unset($x352,$W352,$S352,$U352);$x353=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x350,(string)\'exports\',91,29,\'<image>/20_buffer.js\');$x352=&$x353[0];list(,$W352,$S352,$U352)=$x353;unset($x354,$W354,$S354,$U354);$x355=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x352,(string)\'Buffer\',91,37,\'<image>/20_buffer.js\');$x354=&$x355[0];list(,$W354,$S354,$U354)=$x355;if($x354===JS::$undefined||$x354===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x357=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',91,53,\'<image>/20_buffer.js\');$_TypeError=&$x357[0];list(,$WTypeError,$STypeError,$UTypeError)=$x357;$x358=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x359=$x358($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x359->class)&&$x359->class===\'Error\'&&!isset($x359->properties[\'file\'])&&!isset($x359->properties[\'line\'])&&!isset($x359->properties[\'column\'])){$x359->properties[\'file\']=\'<image>/20_buffer.js\';$x359->properties[\'line\']=91;$x359->properties[\'column\']=53;$x359->attributes[\'file\']=$x359->attributes[\'line\']=$x359->attributes[\'column\']=0;}throw new JSException($x359,91,53,\'<image>/20_buffer.js\');}$x356=JS::toObject($x354,$global);unset($x360,$W360,$S360,$U360);$x361=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x356,(string)\'isBuffer\',91,53,\'<image>/20_buffer.js\');$x360=&$x361[0];list(,$W360,$S360,$U360)=$x361;if(!(is_object($x360)&&isset($x360->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x364=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',91,53,\'<image>/20_buffer.js\');$_TypeError=&$x364[0];list(,$WTypeError,$STypeError,$UTypeError)=$x364;$x365=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x366=$x365($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x366->class)&&$x366->class===\'Error\'&&!isset($x366->properties[\'file\'])&&!isset($x366->properties[\'line\'])&&!isset($x366->properties[\'column\'])){$x366->properties[\'file\']=\'<image>/20_buffer.js\';$x366->properties[\'line\']=91;$x366->properties[\'column\']=53;$x366->attributes[\'file\']=$x366->attributes[\'line\']=$x366->attributes[\'column\']=0;}throw new JSException($x366,91,53,\'<image>/20_buffer.js\');}$x362=$x360->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x363=$x362($global,$x356,$x360,array($_targetBuffer),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x363,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x369=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',92,13,\'<image>/20_buffer.js\');$_TypeError=&$x369[0];list(,$WTypeError,$STypeError,$UTypeError)=$x369;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x370=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',92,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x370[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x370;$x371=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,13);$x372=$x371($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x372->class)&&$x372->class===\'Error\'&&!isset($x372->properties[\'file\'])&&!isset($x372->properties[\'line\'])&&!isset($x372->properties[\'column\'])){$x372->properties[\'file\']=\'<image>/20_buffer.js\';$x372->properties[\'line\']=92;$x372->properties[\'column\']=13;$x372->attributes[\'file\']=$x372->attributes[\'line\']=$x372->attributes[\'column\']=0;}throw new JSException($x372,92,13,\'<image>/20_buffer.js\');}$x367=clone JS::$objectTemplate;unset($x373,$W373,$S373,$U373);$x374=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,(string)\'prototype\',92,9,\'<image>/20_buffer.js\');$x373=&$x374[0];list(,$W373,$S373,$U373)=$x374;$x368=$x373;$x367->prototype=$x368;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x377=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x378=$x377($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x378->class)&&$x378->class===\'Error\'&&!isset($x378->properties[\'file\'])&&!isset($x378->properties[\'line\'])&&!isset($x378->properties[\'column\'])){$x378->properties[\'file\']=\'<image>/20_buffer.js\';$x378->properties[\'line\']=92;$x378->properties[\'column\']=9;$x378->attributes[\'file\']=$x378->attributes[\'line\']=$x378->attributes[\'column\']=0;}throw new JSException($x378,92,9,\'<image>/20_buffer.js\');}$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x376=$x375($global,$x367,$_TypeError,array(\'Given first argument is not a buffer\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x368=$x376;if(is_object($x368)&&$x368!==JS::$undefined){$x367=$x368;}if(isset($x367->class)&&$x367->class===\'Error\'&&!isset($x367->properties[\'file\'])&&!isset($x367->properties[\'line\'])&&!isset($x367->properties[\'column\'])){$x367->properties[\'file\']=\'<image>/20_buffer.js\';$x367->properties[\'line\']=92;$x367->properties[\'column\']=3;$x367->attributes[\'file\']=$x367->attributes[\'line\']=$x367->attributes[\'column\']=0;}throw new JSException($x367,92,3,\'<image>/20_buffer.js\');}$x379=$_targetStart;if(!JS::toBoolean($x379,$global)){$x379=0;}if($UtargetStart){$global->properties[\'targetStart\']=$_targetStart;$_targetStart=&$global->properties[\'targetStart\'];}$_targetStart=$x379;$x380=$_sourceStart;if(!JS::toBoolean($x380,$global)){$x380=0;}if($UsourceStart){$global->properties[\'sourceStart\']=$_sourceStart;$_sourceStart=&$global->properties[\'sourceStart\'];}$_sourceStart=$x380;$x381=$_sourceEnd;if(!JS::toBoolean($x381,$global)){unset($x382,$W382,$S382,$U382);$x383=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,(string)\'length\',97,31,\'<image>/20_buffer.js\');$x382=&$x383[0];list(,$W382,$S382,$U382)=$x383;$x381=$x382;}if($UsourceEnd){$global->properties[\'sourceEnd\']=$_sourceEnd;$_sourceEnd=&$global->properties[\'sourceEnd\'];}$_sourceEnd=$x381;if($_targetBuffer===JS::$undefined||$_targetBuffer===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x385=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',99,20,\'<image>/20_buffer.js\');$_TypeError=&$x385[0];list(,$WTypeError,$STypeError,$UTypeError)=$x385;$x386=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x387=$x386($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x387->class)&&$x387->class===\'Error\'&&!isset($x387->properties[\'file\'])&&!isset($x387->properties[\'line\'])&&!isset($x387->properties[\'column\'])){$x387->properties[\'file\']=\'<image>/20_buffer.js\';$x387->properties[\'line\']=99;$x387->properties[\'column\']=20;$x387->attributes[\'file\']=$x387->attributes[\'line\']=$x387->attributes[\'column\']=0;}throw new JSException($x387,99,20,\'<image>/20_buffer.js\');}$x384=JS::toObject($_targetBuffer,$global);unset($x388,$W388,$S388,$U388);$x389=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x384,(string)\'write\',99,20,\'<image>/20_buffer.js\');$x388=&$x389[0];list(,$W388,$S388,$U388)=$x389;if(!(is_object($x388)&&isset($x388->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x392=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',99,20,\'<image>/20_buffer.js\');$_TypeError=&$x392[0];list(,$WTypeError,$STypeError,$UTypeError)=$x392;$x393=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x394=$x393($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x394->class)&&$x394->class===\'Error\'&&!isset($x394->properties[\'file\'])&&!isset($x394->properties[\'line\'])&&!isset($x394->properties[\'column\'])){$x394->properties[\'file\']=\'<image>/20_buffer.js\';$x394->properties[\'line\']=99;$x394->properties[\'column\']=20;$x394->attributes[\'file\']=$x394->attributes[\'line\']=$x394->attributes[\'column\']=0;}throw new JSException($x394,99,20,\'<image>/20_buffer.js\');}$x390=$x388->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x391=$x390($global,$x384,$x388,array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart),$_targetStart),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x415 =& $scope->properties['arguments'];
$x415->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x415->properties[$i] = $args[$i];
$x415->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$scope->properties['slice'] = $fn;
$_slice =& $scope->properties['slice'];
$global->scope[++$global->scope_sp] = $scope;
$x416 = JS::toNumber($_start, $global);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x416;
$x417 = JS::toNumber($_end, $global);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x417;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x420 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'require', 106, 13, '<image>/20_buffer.js');
$_require =& $x420[0]; list(,$Wrequire,$Srequire,$Urequire) = $x420;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x421 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 106, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x421[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x421;
$x422 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 13);
$x423 = $x422($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error' && !isset($x423->properties['file']) && !isset($x423->properties['line']) && !isset($x423->properties['column'])) {$x423->properties['file'] = '<image>/20_buffer.js';$x423->properties['line'] = 106;$x423->properties['column'] = 13;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 106, 13, '<image>/20_buffer.js');
}
unset($x424, $W424, $S424, $U424);
$x425 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 106, 20, '<image>/20_buffer.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
unset($x426, $W426, $S426, $U426);
$x427 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x424, (string) 'buffer', 106, 28, '<image>/20_buffer.js');
$x426 =& $x427[0]; list(,$W426,$S426,$U426) = $x427;
unset($x428, $W428, $S428, $U428);
$x429 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x426, (string) 'exports', 106, 35, '<image>/20_buffer.js');
$x428 =& $x429[0]; list(,$W428,$S428,$U428) = $x429;
unset($x430, $W430, $S430, $U430);
$x431 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x428, (string) 'Buffer', 106, 43, '<image>/20_buffer.js');
$x430 =& $x431[0]; list(,$W430,$S430,$U430) = $x431;
$x418 = clone JS::$objectTemplate;
unset($x432, $W432, $S432, $U432);
$x433 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x430, (string) 'prototype', 106, 9, '<image>/20_buffer.js');
$x432 =& $x433[0]; list(,$W432,$S432,$U432) = $x433;
$x419 = $x432;
$x418->prototype = $x419;
if (!(is_object($x430) && isset($x430->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x436 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 106, 9, '<image>/20_buffer.js');
$_TypeError =& $x436[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x436;
$x437 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x438 = $x437($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x438->class) && $x438->class === 'Error' && !isset($x438->properties['file']) && !isset($x438->properties['line']) && !isset($x438->properties['column'])) {$x438->properties['file'] = '<image>/20_buffer.js';$x438->properties['line'] = 106;$x438->properties['column'] = 9;$x438->attributes['file'] = $x438->attributes['line'] = $x438->attributes['column'] = 0; }
throw new JSException($x438, 106, 9, '<image>/20_buffer.js');
}
$x434 = $x430->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x435 = $x434($global, $x418, $x430, array(substr($leThis->value,$_start,$_end-$_start)), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x419 = $x435;
if (is_object($x419) && $x419 !== JS::$undefined) { $x418 = $x419; }
return $x418;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x415=&$scope->properties[\'arguments\'];$x415->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x415->properties[$i]=$args[$i];$x415->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'slice\']=$fn;$_slice=&$scope->properties[\'slice\'];$global->scope[++$global->scope_sp]=$scope;$x416=JS::toNumber($_start,$global);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x416;$x417=JS::toNumber($_end,$global);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x417;unset($_require,$Wrequire,$Srequire,$Urequire);$x420=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'require\',106,13,\'<image>/20_buffer.js\');$_require=&$x420[0];list(,$Wrequire,$Srequire,$Urequire)=$x420;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x421=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'ReferenceError\',106,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x421[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x421;$x422=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,13);$x423=$x422($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x423->class)&&$x423->class===\'Error\'&&!isset($x423->properties[\'file\'])&&!isset($x423->properties[\'line\'])&&!isset($x423->properties[\'column\'])){$x423->properties[\'file\']=\'<image>/20_buffer.js\';$x423->properties[\'line\']=106;$x423->properties[\'column\']=13;$x423->attributes[\'file\']=$x423->attributes[\'line\']=$x423->attributes[\'column\']=0;}throw new JSException($x423,106,13,\'<image>/20_buffer.js\');}unset($x424,$W424,$S424,$U424);$x425=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,(string)\'modules\',106,20,\'<image>/20_buffer.js\');$x424=&$x425[0];list(,$W424,$S424,$U424)=$x425;unset($x426,$W426,$S426,$U426);$x427=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x424,(string)\'buffer\',106,28,\'<image>/20_buffer.js\');$x426=&$x427[0];list(,$W426,$S426,$U426)=$x427;unset($x428,$W428,$S428,$U428);$x429=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x426,(string)\'exports\',106,35,\'<image>/20_buffer.js\');$x428=&$x429[0];list(,$W428,$S428,$U428)=$x429;unset($x430,$W430,$S430,$U430);$x431=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x428,(string)\'Buffer\',106,43,\'<image>/20_buffer.js\');$x430=&$x431[0];list(,$W430,$S430,$U430)=$x431;$x418=clone JS::$objectTemplate;unset($x432,$W432,$S432,$U432);$x433=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x430,(string)\'prototype\',106,9,\'<image>/20_buffer.js\');$x432=&$x433[0];list(,$W432,$S432,$U432)=$x433;$x419=$x432;$x418->prototype=$x419;if(!(is_object($x430)&&isset($x430->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x436=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',106,9,\'<image>/20_buffer.js\');$_TypeError=&$x436[0];list(,$WTypeError,$STypeError,$UTypeError)=$x436;$x437=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x438=$x437($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x438->class)&&$x438->class===\'Error\'&&!isset($x438->properties[\'file\'])&&!isset($x438->properties[\'line\'])&&!isset($x438->properties[\'column\'])){$x438->properties[\'file\']=\'<image>/20_buffer.js\';$x438->properties[\'line\']=106;$x438->properties[\'column\']=9;$x438->attributes[\'file\']=$x438->attributes[\'line\']=$x438->attributes[\'column\']=0;}throw new JSException($x438,106,9,\'<image>/20_buffer.js\');}$x434=$x430->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x435=$x434($global,$x418,$x430,array(substr($leThis->value,$_start,$_end-$_start)),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x419=$x435;if(is_object($x419)&&$x419!==JS::$undefined){$x418=$x419;}return$x418;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x459 =& $scope->properties['arguments'];
$x459->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x459->properties[$i] = $args[$i];
$x459->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['offset'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$scope->properties['end'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$scope->properties['fill'] = $fn;
$_fill =& $scope->properties['fill'];
$global->scope[++$global->scope_sp] = $scope;
$x460 = JS::toString($_value, $global);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x460;
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x462 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x462[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x462;
$x463 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x464 = $x463($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x464->class) && $x464->class === 'Error' && !isset($x464->properties['file']) && !isset($x464->properties['line']) && !isset($x464->properties['column'])) {$x464->properties['file'] = '<image>/20_buffer.js';$x464->properties['line'] = 113;$x464->properties['column'] = 25;$x464->attributes['file'] = $x464->attributes['line'] = $x464->attributes['column'] = 0; }
throw new JSException($x464, 113, 25, '<image>/20_buffer.js');
}
$x461 = JS::toObject($_value, $global);
unset($x465, $W465, $S465, $U465);
$x466 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x461, (string) 'substring', 113, 25, '<image>/20_buffer.js');
$x465 =& $x466[0]; list(,$W465,$S465,$U465) = $x466;
if (!(is_object($x465) && isset($x465->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x469 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x469[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x469;
$x470 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x471 = $x470($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x471->class) && $x471->class === 'Error' && !isset($x471->properties['file']) && !isset($x471->properties['line']) && !isset($x471->properties['column'])) {$x471->properties['file'] = '<image>/20_buffer.js';$x471->properties['line'] = 113;$x471->properties['column'] = 25;$x471->attributes['file'] = $x471->attributes['line'] = $x471->attributes['column'] = 0; }
throw new JSException($x471, 113, 25, '<image>/20_buffer.js');
}
$x467 = $x465->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x468 = $x467($global, $x461, $x465, array(0, 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x468;
$x472 = $_offset;
if (!JS::toBoolean($x472, $global)) {
$x472 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x472;
$x473 = $_end;
if (!JS::toBoolean($x473, $global)) {
unset($x474, $W474, $S474, $U474);
$x475 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, (string) 'length', 115, 19, '<image>/20_buffer.js');
$x474 =& $x475[0]; list(,$W474,$S474,$U474) = $x475;
$x473 = $x474; }
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x473;
for ($x476 = 0;; ++$x476) {
if ($x476 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_offset;
}
if ($x476 !== 0) {
$x477 = ++$_i;
}
$x478 = JS::toPrimitive($_i, $global);
$x479 = JS::toPrimitive($_end, $global);
$x480 = (is_string($x478) && is_string($x479) ? strcmp($x478, $x479) < 0 : (!is_nan($x481 = JS::toNumber($x478, $global)) && !is_nan($x482 = JS::toNumber($x479, $global)) && $x481 < $x482));
if (!JS::toBoolean($x480, $global)) { break; }


$leThis->value[$_i] =$_value;;
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x459=&$scope->properties[\'arguments\'];$x459->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x459->properties[$i]=$args[$i];$x459->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'end\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'fill\']=$fn;$_fill=&$scope->properties[\'fill\'];$global->scope[++$global->scope_sp]=$scope;$x460=JS::toString($_value,$global);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x460;if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x462=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',113,25,\'<image>/20_buffer.js\');$_TypeError=&$x462[0];list(,$WTypeError,$STypeError,$UTypeError)=$x462;$x463=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x464=$x463($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x464->class)&&$x464->class===\'Error\'&&!isset($x464->properties[\'file\'])&&!isset($x464->properties[\'line\'])&&!isset($x464->properties[\'column\'])){$x464->properties[\'file\']=\'<image>/20_buffer.js\';$x464->properties[\'line\']=113;$x464->properties[\'column\']=25;$x464->attributes[\'file\']=$x464->attributes[\'line\']=$x464->attributes[\'column\']=0;}throw new JSException($x464,113,25,\'<image>/20_buffer.js\');}$x461=JS::toObject($_value,$global);unset($x465,$W465,$S465,$U465);$x466=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x461,(string)\'substring\',113,25,\'<image>/20_buffer.js\');$x465=&$x466[0];list(,$W465,$S465,$U465)=$x466;if(!(is_object($x465)&&isset($x465->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x469=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,(string)\'TypeError\',113,25,\'<image>/20_buffer.js\');$_TypeError=&$x469[0];list(,$WTypeError,$STypeError,$UTypeError)=$x469;$x470=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x471=$x470($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x471->class)&&$x471->class===\'Error\'&&!isset($x471->properties[\'file\'])&&!isset($x471->properties[\'line\'])&&!isset($x471->properties[\'column\'])){$x471->properties[\'file\']=\'<image>/20_buffer.js\';$x471->properties[\'line\']=113;$x471->properties[\'column\']=25;$x471->attributes[\'file\']=$x471->attributes[\'line\']=$x471->attributes[\'column\']=0;}throw new JSException($x471,113,25,\'<image>/20_buffer.js\');}$x467=$x465->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x468=$x467($global,$x461,$x465,array(0,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x468;$x472=$_offset;if(!JS::toBoolean($x472,$global)){$x472=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x472;$x473=$_end;if(!JS::toBoolean($x473,$global)){unset($x474,$W474,$S474,$U474);$x475=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,(string)\'length\',115,19,\'<image>/20_buffer.js\');$x474=&$x475[0];list(,$W474,$S474,$U474)=$x475;$x473=$x474;}if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x473;for($x476=0;;++$x476){if($x476===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_offset;}if($x476!==0){$x477=++$_i;}$x478=JS::toPrimitive($_i,$global);$x479=JS::toPrimitive($_end,$global);$x480=(is_string($x478)&&is_string($x479)?strcmp($x478,$x479)<0:(!is_nan($x481=JS::toNumber($x478,$global))&&!is_nan($x482=JS::toNumber($x479,$global))&&$x481<$x482));if(!JS::toBoolean($x480,$global)){break;}$leThis->value[$_i]=$_value;}return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/20_buffer.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/20_buffer.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x82 = clone JS::$functionTemplate; $x82->call = '_f915aaba5b76f6e13a986dca9da58f68_1'; $x82->parameters = array (
  0 => 'x',
); $x82->name = 'Buffer'; $x82->scope = $scope; $x82->properties['prototype'] = clone JS::$objectTemplate; $x82->attributes['prototype'] = JS::WRITABLE; $x82->properties['prototype']->properties['constructor'] = $x82; $x82->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x82->properties['length'] = 1; $x82->attributes['length'] = 0;
$x1->properties['Buffer'] = $x82;
$x1->attributes['Buffer'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['exports'] = $x1;
$x0->attributes['exports'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x83 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'require', 1, 1, '<image>/20_buffer.js');
$_require =& $x83[0]; list(,$Wrequire,$Srequire,$Urequire) = $x83;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x84 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'ReferenceError', 1, 1, '<image>/20_buffer.js');
$_ReferenceError =& $x84[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x84;
$x85 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 1);
$x86 = $x85($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/20_buffer.js';$x86->properties['line'] = 1;$x86->properties['column'] = 1;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 1, 1, '<image>/20_buffer.js');
}
unset($x87, $W87, $S87, $U87);
$x88 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 1, 8, '<image>/20_buffer.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($x87 === JS::$undefined || $x87 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x89 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 1, 24, '<image>/20_buffer.js');
$_TypeError =& $x89[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x89;
$x90 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x91 = $x90($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x91->class) && $x91->class === 'Error' && !isset($x91->properties['file']) && !isset($x91->properties['line']) && !isset($x91->properties['column'])) {$x91->properties['file'] = '<image>/20_buffer.js';$x91->properties['line'] = 1;$x91->properties['column'] = 24;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 1, 24, '<image>/20_buffer.js');
}
$x87 = JS::toObject($x87, $global);
unset($x92, $W92, $S92, $U92);
$x93 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x87, (string) 'buffer', 1, 24, '<image>/20_buffer.js');
$x92 =& $x93[0]; list(,$W92,$S92,$U92) = $x93;
if ($U92 && (!isset($x87->extensible) || $x87->extensible)) {$x87->properties['buffer'] = $x92; $x92 =& $x87->properties['buffer']; $x87->attributes['buffer'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U92 = FALSE; $W92 = TRUE; }
if (isset($S92)) {
$x95 = $S92->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x96 = $x95($global, $x87, $S92, array($x0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x94 = $x96;
} else {
if (!$U92) {$x94 = $x0;if ($W92) { $x92 = $x0; }  }
else { $x94 = JS::$undefined; }
}
if (isset($x87->class) && $x87->class === 'Array' &&  is_int('buffer') && 'buffer' >= $x87->properties['length']) { $x87->properties['length'] = 'buffer' + 1; };
$x99 = clone JS::$functionTemplate; $x99->call = '_f915aaba5b76f6e13a986dca9da58f68_5'; $x99->parameters = array (
  0 => 'buf',
); $x99->name = 'isBuffer'; $x99->scope = $scope; $x99->properties['prototype'] = clone JS::$objectTemplate; $x99->attributes['prototype'] = JS::WRITABLE; $x99->properties['prototype']->properties['constructor'] = $x99; $x99->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x99->properties['length'] = 1; $x99->attributes['length'] = 0;
unset($x100, $W100, $S100, $U100);
$x101 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 32, 8, '<image>/20_buffer.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
unset($x102, $W102, $S102, $U102);
$x103 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x100, (string) 'buffer', 32, 16, '<image>/20_buffer.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
unset($x104, $W104, $S104, $U104);
$x105 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x102, (string) 'exports', 32, 23, '<image>/20_buffer.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
unset($x106, $W106, $S106, $U106);
$x107 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x104, (string) 'Buffer', 32, 31, '<image>/20_buffer.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
if ($x106 === JS::$undefined || $x106 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x108 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 32, 48, '<image>/20_buffer.js');
$_TypeError =& $x108[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x108;
$x109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x110 = $x109($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x110->class) && $x110->class === 'Error' && !isset($x110->properties['file']) && !isset($x110->properties['line']) && !isset($x110->properties['column'])) {$x110->properties['file'] = '<image>/20_buffer.js';$x110->properties['line'] = 32;$x110->properties['column'] = 48;$x110->attributes['file'] = $x110->attributes['line'] = $x110->attributes['column'] = 0; }
throw new JSException($x110, 32, 48, '<image>/20_buffer.js');
}
$x106 = JS::toObject($x106, $global);
unset($x111, $W111, $S111, $U111);
$x112 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x106, (string) 'isBuffer', 32, 48, '<image>/20_buffer.js');
$x111 =& $x112[0]; list(,$W111,$S111,$U111) = $x112;
if ($U111 && (!isset($x106->extensible) || $x106->extensible)) {$x106->properties['isBuffer'] = $x111; $x111 =& $x106->properties['isBuffer']; $x106->attributes['isBuffer'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U111 = FALSE; $W111 = TRUE; }
if (isset($S111)) {
$x114 = $S111->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x115 = $x114($global, $x106, $S111, array($x99), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x113 = $x115;
} else {
if (!$U111) {$x113 = $x99;if ($W111) { $x111 = $x99; }  }
else { $x113 = JS::$undefined; }
}
if (isset($x106->class) && $x106->class === 'Array' &&  is_int('isBuffer') && 'isBuffer' >= $x106->properties['length']) { $x106->properties['length'] = 'isBuffer' + 1; };
$x118 = clone JS::$functionTemplate; $x118->call = '_f915aaba5b76f6e13a986dca9da58f68_6'; $x118->parameters = array (
  0 => 'string',
); $x118->name = 'byteLength'; $x118->scope = $scope; $x118->properties['prototype'] = clone JS::$objectTemplate; $x118->attributes['prototype'] = JS::WRITABLE; $x118->properties['prototype']->properties['constructor'] = $x118; $x118->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x118->properties['length'] = 1; $x118->attributes['length'] = 0;
unset($x119, $W119, $S119, $U119);
$x120 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 36, 8, '<image>/20_buffer.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
unset($x121, $W121, $S121, $U121);
$x122 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x119, (string) 'buffer', 36, 16, '<image>/20_buffer.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
unset($x123, $W123, $S123, $U123);
$x124 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x121, (string) 'exports', 36, 23, '<image>/20_buffer.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
unset($x125, $W125, $S125, $U125);
$x126 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x123, (string) 'Buffer', 36, 31, '<image>/20_buffer.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
if ($x125 === JS::$undefined || $x125 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x127 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 36, 50, '<image>/20_buffer.js');
$_TypeError =& $x127[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x127;
$x128 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x129 = $x128($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error' && !isset($x129->properties['file']) && !isset($x129->properties['line']) && !isset($x129->properties['column'])) {$x129->properties['file'] = '<image>/20_buffer.js';$x129->properties['line'] = 36;$x129->properties['column'] = 50;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 36, 50, '<image>/20_buffer.js');
}
$x125 = JS::toObject($x125, $global);
unset($x130, $W130, $S130, $U130);
$x131 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x125, (string) 'byteLength', 36, 50, '<image>/20_buffer.js');
$x130 =& $x131[0]; list(,$W130,$S130,$U130) = $x131;
if ($U130 && (!isset($x125->extensible) || $x125->extensible)) {$x125->properties['byteLength'] = $x130; $x130 =& $x125->properties['byteLength']; $x125->attributes['byteLength'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U130 = FALSE; $W130 = TRUE; }
if (isset($S130)) {
$x133 = $S130->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x134 = $x133($global, $x125, $S130, array($x118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x132 = $x134;
} else {
if (!$U130) {$x132 = $x118;if ($W130) { $x130 = $x118; }  }
else { $x132 = JS::$undefined; }
}
if (isset($x125->class) && $x125->class === 'Array' &&  is_int('byteLength') && 'byteLength' >= $x125->properties['length']) { $x125->properties['length'] = 'byteLength' + 1; };
$x261 = clone JS::$functionTemplate; $x261->call = '_f915aaba5b76f6e13a986dca9da58f68_7'; $x261->parameters = array (
  0 => 'list',
  1 => 'totalLength',
); $x261->name = 'concat'; $x261->scope = $scope; $x261->properties['prototype'] = clone JS::$objectTemplate; $x261->attributes['prototype'] = JS::WRITABLE; $x261->properties['prototype']->properties['constructor'] = $x261; $x261->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x261->properties['length'] = 2; $x261->attributes['length'] = 0;
unset($x262, $W262, $S262, $U262);
$x263 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 40, 8, '<image>/20_buffer.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
unset($x264, $W264, $S264, $U264);
$x265 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x262, (string) 'buffer', 40, 16, '<image>/20_buffer.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
unset($x266, $W266, $S266, $U266);
$x267 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x264, (string) 'exports', 40, 23, '<image>/20_buffer.js');
$x266 =& $x267[0]; list(,$W266,$S266,$U266) = $x267;
unset($x268, $W268, $S268, $U268);
$x269 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x266, (string) 'Buffer', 40, 31, '<image>/20_buffer.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
if ($x268 === JS::$undefined || $x268 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x270 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 40, 46, '<image>/20_buffer.js');
$_TypeError =& $x270[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x270;
$x271 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x272 = $x271($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x272->class) && $x272->class === 'Error' && !isset($x272->properties['file']) && !isset($x272->properties['line']) && !isset($x272->properties['column'])) {$x272->properties['file'] = '<image>/20_buffer.js';$x272->properties['line'] = 40;$x272->properties['column'] = 46;$x272->attributes['file'] = $x272->attributes['line'] = $x272->attributes['column'] = 0; }
throw new JSException($x272, 40, 46, '<image>/20_buffer.js');
}
$x268 = JS::toObject($x268, $global);
unset($x273, $W273, $S273, $U273);
$x274 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x268, (string) 'concat', 40, 46, '<image>/20_buffer.js');
$x273 =& $x274[0]; list(,$W273,$S273,$U273) = $x274;
if ($U273 && (!isset($x268->extensible) || $x268->extensible)) {$x268->properties['concat'] = $x273; $x273 =& $x268->properties['concat']; $x268->attributes['concat'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U273 = FALSE; $W273 = TRUE; }
if (isset($S273)) {
$x276 = $S273->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x277 = $x276($global, $x268, $S273, array($x261), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x275 = $x277;
} else {
if (!$U273) {$x275 = $x261;if ($W273) { $x273 = $x261; }  }
else { $x275 = JS::$undefined; }
}
if (isset($x268->class) && $x268->class === 'Array' &&  is_int('concat') && 'concat' >= $x268->properties['length']) { $x268->properties['length'] = 'concat' + 1; };
$x302 = clone JS::$functionTemplate; $x302->call = '_f915aaba5b76f6e13a986dca9da58f68_8'; $x302->parameters = array (
  0 => 'string',
  1 => 'offset',
  2 => 'length',
  3 => 'encoding',
); $x302->name = 'write'; $x302->scope = $scope; $x302->properties['prototype'] = clone JS::$objectTemplate; $x302->attributes['prototype'] = JS::WRITABLE; $x302->properties['prototype']->properties['constructor'] = $x302; $x302->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x302->properties['length'] = 4; $x302->attributes['length'] = 0;
unset($x303, $W303, $S303, $U303);
$x304 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 70, 8, '<image>/20_buffer.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
unset($x305, $W305, $S305, $U305);
$x306 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x303, (string) 'buffer', 70, 16, '<image>/20_buffer.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
unset($x307, $W307, $S307, $U307);
$x308 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x305, (string) 'exports', 70, 23, '<image>/20_buffer.js');
$x307 =& $x308[0]; list(,$W307,$S307,$U307) = $x308;
unset($x309, $W309, $S309, $U309);
$x310 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x307, (string) 'Buffer', 70, 31, '<image>/20_buffer.js');
$x309 =& $x310[0]; list(,$W309,$S309,$U309) = $x310;
unset($x311, $W311, $S311, $U311);
$x312 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x309, (string) 'prototype', 70, 38, '<image>/20_buffer.js');
$x311 =& $x312[0]; list(,$W311,$S311,$U311) = $x312;
if ($x311 === JS::$undefined || $x311 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x313 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 70, 55, '<image>/20_buffer.js');
$_TypeError =& $x313[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x313;
$x314 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x315 = $x314($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x315->class) && $x315->class === 'Error' && !isset($x315->properties['file']) && !isset($x315->properties['line']) && !isset($x315->properties['column'])) {$x315->properties['file'] = '<image>/20_buffer.js';$x315->properties['line'] = 70;$x315->properties['column'] = 55;$x315->attributes['file'] = $x315->attributes['line'] = $x315->attributes['column'] = 0; }
throw new JSException($x315, 70, 55, '<image>/20_buffer.js');
}
$x311 = JS::toObject($x311, $global);
unset($x316, $W316, $S316, $U316);
$x317 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x311, (string) 'write', 70, 55, '<image>/20_buffer.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
if ($U316 && (!isset($x311->extensible) || $x311->extensible)) {$x311->properties['write'] = $x316; $x316 =& $x311->properties['write']; $x311->attributes['write'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U316 = FALSE; $W316 = TRUE; }
if (isset($S316)) {
$x319 = $S316->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x320 = $x319($global, $x311, $S316, array($x302), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x318 = $x320;
} else {
if (!$U316) {$x318 = $x302;if ($W316) { $x316 = $x302; }  }
else { $x318 = JS::$undefined; }
}
if (isset($x311->class) && $x311->class === 'Array' &&  is_int('write') && 'write' >= $x311->properties['length']) { $x311->properties['length'] = 'write' + 1; };
$x323 = clone JS::$functionTemplate; $x323->call = '_f915aaba5b76f6e13a986dca9da58f68_10'; $x323->parameters = array (
); $x323->name = 'toString'; $x323->scope = $scope; $x323->properties['prototype'] = clone JS::$objectTemplate; $x323->attributes['prototype'] = JS::WRITABLE; $x323->properties['prototype']->properties['constructor'] = $x323; $x323->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x323->properties['length'] = 0; $x323->attributes['length'] = 0;
unset($x324, $W324, $S324, $U324);
$x325 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 86, 8, '<image>/20_buffer.js');
$x324 =& $x325[0]; list(,$W324,$S324,$U324) = $x325;
unset($x326, $W326, $S326, $U326);
$x327 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x324, (string) 'buffer', 86, 16, '<image>/20_buffer.js');
$x326 =& $x327[0]; list(,$W326,$S326,$U326) = $x327;
unset($x328, $W328, $S328, $U328);
$x329 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x326, (string) 'exports', 86, 23, '<image>/20_buffer.js');
$x328 =& $x329[0]; list(,$W328,$S328,$U328) = $x329;
unset($x330, $W330, $S330, $U330);
$x331 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x328, (string) 'Buffer', 86, 31, '<image>/20_buffer.js');
$x330 =& $x331[0]; list(,$W330,$S330,$U330) = $x331;
unset($x332, $W332, $S332, $U332);
$x333 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x330, (string) 'prototype', 86, 38, '<image>/20_buffer.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
if ($x332 === JS::$undefined || $x332 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x334 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 86, 58, '<image>/20_buffer.js');
$_TypeError =& $x334[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x334;
$x335 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x336 = $x335($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x336->class) && $x336->class === 'Error' && !isset($x336->properties['file']) && !isset($x336->properties['line']) && !isset($x336->properties['column'])) {$x336->properties['file'] = '<image>/20_buffer.js';$x336->properties['line'] = 86;$x336->properties['column'] = 58;$x336->attributes['file'] = $x336->attributes['line'] = $x336->attributes['column'] = 0; }
throw new JSException($x336, 86, 58, '<image>/20_buffer.js');
}
$x332 = JS::toObject($x332, $global);
unset($x337, $W337, $S337, $U337);
$x338 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x332, (string) 'toString', 86, 58, '<image>/20_buffer.js');
$x337 =& $x338[0]; list(,$W337,$S337,$U337) = $x338;
if ($U337 && (!isset($x332->extensible) || $x332->extensible)) {$x332->properties['toString'] = $x337; $x337 =& $x332->properties['toString']; $x332->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U337 = FALSE; $W337 = TRUE; }
if (isset($S337)) {
$x340 = $S337->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x341 = $x340($global, $x332, $S337, array($x323), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x339 = $x341;
} else {
if (!$U337) {$x339 = $x323;if ($W337) { $x337 = $x323; }  }
else { $x339 = JS::$undefined; }
}
if (isset($x332->class) && $x332->class === 'Array' &&  is_int('toString') && 'toString' >= $x332->properties['length']) { $x332->properties['length'] = 'toString' + 1; };
$x395 = clone JS::$functionTemplate; $x395->call = '_f915aaba5b76f6e13a986dca9da58f68_11'; $x395->parameters = array (
  0 => 'targetBuffer',
  1 => 'targetStart',
  2 => 'sourceStart',
  3 => 'sourceEnd',
); $x395->name = 'copy'; $x395->scope = $scope; $x395->properties['prototype'] = clone JS::$objectTemplate; $x395->attributes['prototype'] = JS::WRITABLE; $x395->properties['prototype']->properties['constructor'] = $x395; $x395->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x395->properties['length'] = 4; $x395->attributes['length'] = 0;
unset($x396, $W396, $S396, $U396);
$x397 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 90, 8, '<image>/20_buffer.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
unset($x398, $W398, $S398, $U398);
$x399 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x396, (string) 'buffer', 90, 16, '<image>/20_buffer.js');
$x398 =& $x399[0]; list(,$W398,$S398,$U398) = $x399;
unset($x400, $W400, $S400, $U400);
$x401 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x398, (string) 'exports', 90, 23, '<image>/20_buffer.js');
$x400 =& $x401[0]; list(,$W400,$S400,$U400) = $x401;
unset($x402, $W402, $S402, $U402);
$x403 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x400, (string) 'Buffer', 90, 31, '<image>/20_buffer.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
unset($x404, $W404, $S404, $U404);
$x405 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x402, (string) 'prototype', 90, 38, '<image>/20_buffer.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if ($x404 === JS::$undefined || $x404 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x406 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 90, 54, '<image>/20_buffer.js');
$_TypeError =& $x406[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x406;
$x407 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x408 = $x407($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x408->class) && $x408->class === 'Error' && !isset($x408->properties['file']) && !isset($x408->properties['line']) && !isset($x408->properties['column'])) {$x408->properties['file'] = '<image>/20_buffer.js';$x408->properties['line'] = 90;$x408->properties['column'] = 54;$x408->attributes['file'] = $x408->attributes['line'] = $x408->attributes['column'] = 0; }
throw new JSException($x408, 90, 54, '<image>/20_buffer.js');
}
$x404 = JS::toObject($x404, $global);
unset($x409, $W409, $S409, $U409);
$x410 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x404, (string) 'copy', 90, 54, '<image>/20_buffer.js');
$x409 =& $x410[0]; list(,$W409,$S409,$U409) = $x410;
if ($U409 && (!isset($x404->extensible) || $x404->extensible)) {$x404->properties['copy'] = $x409; $x409 =& $x404->properties['copy']; $x404->attributes['copy'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U409 = FALSE; $W409 = TRUE; }
if (isset($S409)) {
$x412 = $S409->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x413 = $x412($global, $x404, $S409, array($x395), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x411 = $x413;
} else {
if (!$U409) {$x411 = $x395;if ($W409) { $x409 = $x395; }  }
else { $x411 = JS::$undefined; }
}
if (isset($x404->class) && $x404->class === 'Array' &&  is_int('copy') && 'copy' >= $x404->properties['length']) { $x404->properties['length'] = 'copy' + 1; };
$x439 = clone JS::$functionTemplate; $x439->call = '_f915aaba5b76f6e13a986dca9da58f68_12'; $x439->parameters = array (
  0 => 'start',
  1 => 'end',
); $x439->name = 'slice'; $x439->scope = $scope; $x439->properties['prototype'] = clone JS::$objectTemplate; $x439->attributes['prototype'] = JS::WRITABLE; $x439->properties['prototype']->properties['constructor'] = $x439; $x439->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x439->properties['length'] = 2; $x439->attributes['length'] = 0;
unset($x440, $W440, $S440, $U440);
$x441 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 102, 8, '<image>/20_buffer.js');
$x440 =& $x441[0]; list(,$W440,$S440,$U440) = $x441;
unset($x442, $W442, $S442, $U442);
$x443 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x440, (string) 'buffer', 102, 16, '<image>/20_buffer.js');
$x442 =& $x443[0]; list(,$W442,$S442,$U442) = $x443;
unset($x444, $W444, $S444, $U444);
$x445 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x442, (string) 'exports', 102, 23, '<image>/20_buffer.js');
$x444 =& $x445[0]; list(,$W444,$S444,$U444) = $x445;
unset($x446, $W446, $S446, $U446);
$x447 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x444, (string) 'Buffer', 102, 31, '<image>/20_buffer.js');
$x446 =& $x447[0]; list(,$W446,$S446,$U446) = $x447;
unset($x448, $W448, $S448, $U448);
$x449 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x446, (string) 'prototype', 102, 38, '<image>/20_buffer.js');
$x448 =& $x449[0]; list(,$W448,$S448,$U448) = $x449;
if ($x448 === JS::$undefined || $x448 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x450 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 102, 55, '<image>/20_buffer.js');
$_TypeError =& $x450[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x450;
$x451 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x452 = $x451($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x452->class) && $x452->class === 'Error' && !isset($x452->properties['file']) && !isset($x452->properties['line']) && !isset($x452->properties['column'])) {$x452->properties['file'] = '<image>/20_buffer.js';$x452->properties['line'] = 102;$x452->properties['column'] = 55;$x452->attributes['file'] = $x452->attributes['line'] = $x452->attributes['column'] = 0; }
throw new JSException($x452, 102, 55, '<image>/20_buffer.js');
}
$x448 = JS::toObject($x448, $global);
unset($x453, $W453, $S453, $U453);
$x454 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x448, (string) 'slice', 102, 55, '<image>/20_buffer.js');
$x453 =& $x454[0]; list(,$W453,$S453,$U453) = $x454;
if ($U453 && (!isset($x448->extensible) || $x448->extensible)) {$x448->properties['slice'] = $x453; $x453 =& $x448->properties['slice']; $x448->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U453 = FALSE; $W453 = TRUE; }
if (isset($S453)) {
$x456 = $S453->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x457 = $x456($global, $x448, $S453, array($x439), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x455 = $x457;
} else {
if (!$U453) {$x455 = $x439;if ($W453) { $x453 = $x439; }  }
else { $x455 = JS::$undefined; }
}
if (isset($x448->class) && $x448->class === 'Array' &&  is_int('slice') && 'slice' >= $x448->properties['length']) { $x448->properties['length'] = 'slice' + 1; };
$x483 = clone JS::$functionTemplate; $x483->call = '_f915aaba5b76f6e13a986dca9da58f68_13'; $x483->parameters = array (
  0 => 'value',
  1 => 'offset',
  2 => 'end',
); $x483->name = 'fill'; $x483->scope = $scope; $x483->properties['prototype'] = clone JS::$objectTemplate; $x483->attributes['prototype'] = JS::WRITABLE; $x483->properties['prototype']->properties['constructor'] = $x483; $x483->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x483->properties['length'] = 3; $x483->attributes['length'] = 0;
unset($x484, $W484, $S484, $U484);
$x485 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, (string) 'modules', 111, 8, '<image>/20_buffer.js');
$x484 =& $x485[0]; list(,$W484,$S484,$U484) = $x485;
unset($x486, $W486, $S486, $U486);
$x487 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x484, (string) 'buffer', 111, 16, '<image>/20_buffer.js');
$x486 =& $x487[0]; list(,$W486,$S486,$U486) = $x487;
unset($x488, $W488, $S488, $U488);
$x489 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x486, (string) 'exports', 111, 23, '<image>/20_buffer.js');
$x488 =& $x489[0]; list(,$W488,$S488,$U488) = $x489;
unset($x490, $W490, $S490, $U490);
$x491 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x488, (string) 'Buffer', 111, 31, '<image>/20_buffer.js');
$x490 =& $x491[0]; list(,$W490,$S490,$U490) = $x491;
unset($x492, $W492, $S492, $U492);
$x493 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x490, (string) 'prototype', 111, 38, '<image>/20_buffer.js');
$x492 =& $x493[0]; list(,$W492,$S492,$U492) = $x493;
if ($x492 === JS::$undefined || $x492 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x494 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, (string) 'TypeError', 111, 54, '<image>/20_buffer.js');
$_TypeError =& $x494[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x494;
$x495 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x496 = $x495($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x496->class) && $x496->class === 'Error' && !isset($x496->properties['file']) && !isset($x496->properties['line']) && !isset($x496->properties['column'])) {$x496->properties['file'] = '<image>/20_buffer.js';$x496->properties['line'] = 111;$x496->properties['column'] = 54;$x496->attributes['file'] = $x496->attributes['line'] = $x496->attributes['column'] = 0; }
throw new JSException($x496, 111, 54, '<image>/20_buffer.js');
}
$x492 = JS::toObject($x492, $global);
unset($x497, $W497, $S497, $U497);
$x498 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x492, (string) 'fill', 111, 54, '<image>/20_buffer.js');
$x497 =& $x498[0]; list(,$W497,$S497,$U497) = $x498;
if ($U497 && (!isset($x492->extensible) || $x492->extensible)) {$x492->properties['fill'] = $x497; $x497 =& $x492->properties['fill']; $x492->attributes['fill'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U497 = FALSE; $W497 = TRUE; }
if (isset($S497)) {
$x500 = $S497->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x501 = $x500($global, $x492, $S497, array($x483), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x499 = $x501;
} else {
if (!$U497) {$x499 = $x483;if ($W497) { $x497 = $x483; }  }
else { $x499 = JS::$undefined; }
}
if (isset($x492->class) && $x492->class === 'Array' &&  is_int('fill') && 'fill' >= $x492->properties['length']) { $x492->properties['length'] = 'fill' + 1; };
;
return JS::$undefined;
}
