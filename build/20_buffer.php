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
$x15 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x76 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x76[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x76;
$x77 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x78 = $x77($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x78->class) && $x78->class === 'Error' && !isset($x78->properties['file']) && !isset($x78->properties['line']) && !isset($x78->properties['column'])) {$x78->properties['file'] = $file;$x78->properties['line'] = $line;$x78->properties['column'] = $column;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
throw new JSException($x78, $line, $column, $file);
}
$W75 = $S75 = $U75 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x75 =& $lookup->properties[$id]; $W75 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S75 = $lookup->setters[$id]; }
else { $x75 = JS::$undefined; $U75 = TRUE; }
return array(&$x75, $W75, $S75, $U75);
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x76=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x76[0];list(,$WTypeError,$STypeError,$UTypeError)=$x76;$x77=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x78=$x77($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'&&!isset($x78->properties[\'file\'])&&!isset($x78->properties[\'line\'])&&!isset($x78->properties[\'column\'])){$x78->properties[\'file\']=$file;$x78->properties[\'line\']=$line;$x78->properties[\'column\']=$column;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,$line,$column,$file);}$W75=$S75=$U75=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x75=&$lookup->properties[$id];$W75=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S75=$lookup->setters[$id];}else{$x75=JS::$undefined;$U75=TRUE;}return array(&$x75,$W75,$S75,$U75);}', "\n";
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
$x6 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('Object', $global), 4, 14, '<image>/20_buffer.js');
$_Object =& $x6[0]; list(,$WObject,$SObject,$UObject) = $x6;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x7 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 4, 14, '<image>/20_buffer.js');
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
$x11 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 4, 27, '<image>/20_buffer.js');
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
$x20 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x10, JS::toString('create', $global), 4, 27, '<image>/20_buffer.js');
$x14 =& $x20[0]; list(,$W14,$S14,$U14) = $x20;
unset($x21, $W21, $S21, $U21);
$x22 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_Buffer, JS::toString('prototype', $global), 4, 34, '<image>/20_buffer.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
if (!(is_object($x14) && isset($x14->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 4, 27, '<image>/20_buffer.js');
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
$x32 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('Array', $global), 13, 15, '<image>/20_buffer.js');
$_Array =& $x32[0]; list(,$WArray,$SArray,$UArray) = $x32;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x33 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 13, 15, '<image>/20_buffer.js');
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
$x37 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 13, 28, '<image>/20_buffer.js');
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
$x41 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x36, JS::toString('isArray', $global), 13, 28, '<image>/20_buffer.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if (!(is_object($x40) && isset($x40->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x44 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 13, 28, '<image>/20_buffer.js');
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
$x49 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_x, JS::toString('length', $global), 15, 26, '<image>/20_buffer.js');
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
$x57 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_x, JS::toString($_i, $global), 16, 15, '<image>/20_buffer.js');
$x56 =& $x57[0]; list(,$W56,$S56,$U56) = $x57;
if ($Uoctet) {$global->properties['octet'] = $_octet; $_octet =& $global->properties['octet']; }
$_octet = $x56;
$_buf->value .= chr($_octet);;
};;
}
else {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x60 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 21, 15, '<image>/20_buffer.js');
$_TypeError =& $x60[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x60;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x61 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 21, 15, '<image>/20_buffer.js');
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
$x65 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, JS::toString('prototype', $global), 21, 11, '<image>/20_buffer.js');
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
$x71 = JS::toString('length', $global);
if ($_buf === JS::$undefined || $_buf === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x72 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 24, 15, '<image>/20_buffer.js');
$_TypeError =& $x72[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x72;
$x73 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 24, 15);
$x74 = $x73($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x74->class) && $x74->class === 'Error' && !isset($x74->properties['file']) && !isset($x74->properties['line']) && !isset($x74->properties['column'])) {$x74->properties['file'] = '<image>/20_buffer.js';$x74->properties['line'] = 24;$x74->properties['column'] = 15;$x74->attributes['file'] = $x74->attributes['line'] = $x74->attributes['column'] = 0; }
throw new JSException($x74, 24, 15, '<image>/20_buffer.js');
}
$_buf = JS::toObject($_buf, $global);
unset($x75, $W75, $S75, $U75);
$x79 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $_buf, JS::toString($x71, $global), 24, 15, '<image>/20_buffer.js');
$x75 =& $x79[0]; list(,$W75,$S75,$U75) = $x79;
if ($U75 && (!isset($_buf->extensible) || $_buf->extensible)) {$_buf->properties[$x71] = $x75; $x75 =& $_buf->properties[$x71]; $_buf->attributes[$x71] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U75 = FALSE; $W75 = TRUE; }
if (isset($_buf->class) && $_buf->class === 'Array') {  if (isset($_buf->properties['length']) && $_buf->properties['length'] !== JS::$undefined) { $x81 = $_buf->properties['length']; }  else { $x81 = 0; } }
if (isset($S75)) {
$x82 = $S75->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 24, 15);
$x83 = $x82($global, $_buf, $S75, array($x70), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x80 = $x83;
} else {
if (!$U75) {$x80 = $x70;if ($W75) { $x75 = $x70; }  }
else { $x80 = JS::$undefined; }
}
if (isset($_buf->class) && $_buf->class === 'Array') {if (is_int('length') && 'length' >= $_buf->properties['length']) { $_buf->properties['length'] = 'length' + 1; }else if ($x71 === 'length' && is_int($x70) && $x81 > $x70) {  for ($i = $x70; $i < $x81; ++$i) {  unset($_buf->properties[$i], $_buf->attributes[$i]); }}};
$_buf->attributes['length'] = 0;
return $_buf;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'Buffer\']=$fn;$_Buffer=&$scope->properties[\'Buffer\'];$global->scope[++$global->scope_sp]=$scope;unset($_Object,$WObject,$SObject,$UObject);$x6=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Object\',$global),4,14,\'<image>/20_buffer.js\');$_Object=&$x6[0];list(,$WObject,$SObject,$UObject)=$x6;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x7=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),4,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x7[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x7;$x8=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,14);$x9=$x8($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/20_buffer.js\';$x9->properties[\'line\']=4;$x9->properties[\'column\']=14;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,4,14,\'<image>/20_buffer.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),4,27,\'<image>/20_buffer.js\');$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x13=$x12($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/20_buffer.js\';$x13->properties[\'line\']=4;$x13->properties[\'column\']=27;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,4,27,\'<image>/20_buffer.js\');}$x10=JS::toObject($_Object,$global);unset($x14,$W14,$S14,$U14);$x20=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x10,JS::toString(\'create\',$global),4,27,\'<image>/20_buffer.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;unset($x21,$W21,$S21,$U21);$x22=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_Buffer,JS::toString(\'prototype\',$global),4,34,\'<image>/20_buffer.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;if(!(is_object($x14)&&isset($x14->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),4,27,\'<image>/20_buffer.js\');$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x27=$x26($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/20_buffer.js\';$x27->properties[\'line\']=4;$x27->properties[\'column\']=27;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,4,27,\'<image>/20_buffer.js\');}$x23=$x14->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x24=$x23($global,$x10,$x14,array($x21),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x24;$_buf->class=\'Buffer\';$x29=$_x;$x29=($x29===JS::$undefined?\'undefined\':(is_int($x29)||is_float($x29)?\'number\':(is_bool($x29)?\'boolean\':(is_string($x29)?\'string\':(is_object($x29)&&isset($x29->call)?\'function\':\'object\')))));$x28=(((gettype($x29)===gettype(\'number\')&&$x29===\'number\'))||(((is_float($x29)||is_int($x29))&&(is_float(\'number\')||is_int(\'number\')))&&$x29==\'number\'));if(JS::toBoolean($x28,$global)){$_buf->value=str_repeat(chr(0),$_x);}else{$x31=$_x;$x31=($x31===JS::$undefined?\'undefined\':(is_int($x31)||is_float($x31)?\'number\':(is_bool($x31)?\'boolean\':(is_string($x31)?\'string\':(is_object($x31)&&isset($x31->call)?\'function\':\'object\')))));$x30=(((gettype($x31)===gettype(\'string\')&&$x31===\'string\'))||(((is_float($x31)||is_int($x31))&&(is_float(\'string\')||is_int(\'string\')))&&$x31==\'string\'));if(JS::toBoolean($x30,$global)){$_buf->value=$_x;}else{unset($_Array,$WArray,$SArray,$UArray);$x32=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Array\',$global),13,15,\'<image>/20_buffer.js\');$_Array=&$x32[0];list(,$WArray,$SArray,$UArray)=$x32;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x33=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),13,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x33[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x33;$x34=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,15);$x35=$x34($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/20_buffer.js\';$x35->properties[\'line\']=13;$x35->properties[\'column\']=15;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,13,15,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x37=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),13,28,\'<image>/20_buffer.js\');$_TypeError=&$x37[0];list(,$WTypeError,$STypeError,$UTypeError)=$x37;$x38=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x39=$x38($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=\'<image>/20_buffer.js\';$x39->properties[\'line\']=13;$x39->properties[\'column\']=28;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,13,28,\'<image>/20_buffer.js\');}$x36=JS::toObject($_Array,$global);unset($x40,$W40,$S40,$U40);$x41=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x36,JS::toString(\'isArray\',$global),13,28,\'<image>/20_buffer.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if(!(is_object($x40)&&isset($x40->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x44=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),13,28,\'<image>/20_buffer.js\');$_TypeError=&$x44[0];list(,$WTypeError,$STypeError,$UTypeError)=$x44;$x45=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x46=$x45($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/20_buffer.js\';$x46->properties[\'line\']=13;$x46->properties[\'column\']=28;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,13,28,\'<image>/20_buffer.js\');}$x42=$x40->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x43=$x42($global,$x36,$x40,array($_x),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x43,$global)){$_buf->value="";for($x47=0;;++$x47){if($x47===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x48,$W48,$S48,$U48);$x49=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,JS::toString(\'length\',$global),15,26,\'<image>/20_buffer.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x48;$scope->properties[\'octet\']=JS::$undefined;$_octet=&$scope->properties[\'octet\'];$Uoctet=FALSE;$_octet=JS::$undefined;}if($x47!==0){$x50=++$_i;}$x51=JS::toPrimitive($_i,$global);$x52=JS::toPrimitive($_l,$global);$x53=(is_string($x51)&&is_string($x52)?strcmp($x51,$x52)<0:(!is_nan($x54=JS::toNumber($x51,$global))&&!is_nan($x55=JS::toNumber($x52,$global))&&$x54<$x55));if(!JS::toBoolean($x53,$global)){break;}unset($x56,$W56,$S56,$U56);$x57=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,JS::toString($_i,$global),16,15,\'<image>/20_buffer.js\');$x56=&$x57[0];list(,$W56,$S56,$U56)=$x57;if($Uoctet){$global->properties[\'octet\']=$_octet;$_octet=&$global->properties[\'octet\'];}$_octet=$x56;$_buf->value.=chr($_octet);}}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x60=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),21,15,\'<image>/20_buffer.js\');$_TypeError=&$x60[0];list(,$WTypeError,$STypeError,$UTypeError)=$x60;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x61=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),21,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x61[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x61;$x62=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,15);$x63=$x62($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/20_buffer.js\';$x63->properties[\'line\']=21;$x63->properties[\'column\']=15;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,21,15,\'<image>/20_buffer.js\');}$x58=clone JS::$objectTemplate;unset($x64,$W64,$S64,$U64);$x65=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),21,11,\'<image>/20_buffer.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;$x59=$x64;$x58->prototype=$x59;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x68=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x69=$x68($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x69->class)&&$x69->class===\'Error\'&&!isset($x69->properties[\'file\'])&&!isset($x69->properties[\'line\'])&&!isset($x69->properties[\'column\'])){$x69->properties[\'file\']=\'<image>/20_buffer.js\';$x69->properties[\'line\']=21;$x69->properties[\'column\']=11;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,21,11,\'<image>/20_buffer.js\');}$x66=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x67=$x66($global,$x58,$_TypeError,array(\'Given argument is not a number, a string, or an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x59=$x67;if(is_object($x59)&&$x59!==JS::$undefined){$x58=$x59;}if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/20_buffer.js\';$x58->properties[\'line\']=21;$x58->properties[\'column\']=5;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,21,5,\'<image>/20_buffer.js\');}}}$x70=strlen($_buf->value);$x71=JS::toString(\'length\',$global);if($_buf===JS::$undefined||$_buf===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x72=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),24,15,\'<image>/20_buffer.js\');$_TypeError=&$x72[0];list(,$WTypeError,$STypeError,$UTypeError)=$x72;$x73=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x74=$x73($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'&&!isset($x74->properties[\'file\'])&&!isset($x74->properties[\'line\'])&&!isset($x74->properties[\'column\'])){$x74->properties[\'file\']=\'<image>/20_buffer.js\';$x74->properties[\'line\']=24;$x74->properties[\'column\']=15;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,24,15,\'<image>/20_buffer.js\');}$_buf=JS::toObject($_buf,$global);unset($x75,$W75,$S75,$U75);$x79=_f915aaba5b76f6e13a986dca9da58f68_4($global,$scope,$_buf,JS::toString($x71,$global),24,15,\'<image>/20_buffer.js\');$x75=&$x79[0];list(,$W75,$S75,$U75)=$x79;if($U75&&(!isset($_buf->extensible)||$_buf->extensible)){$_buf->properties[$x71]=$x75;$x75=&$_buf->properties[$x71];$_buf->attributes[$x71]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U75=FALSE;$W75=TRUE;}if(isset($_buf->class)&&$_buf->class===\'Array\'){if(isset($_buf->properties[\'length\'])&&$_buf->properties[\'length\']!==JS::$undefined){$x81=$_buf->properties[\'length\'];}else{$x81=0;}}if(isset($S75)){$x82=$S75->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x83=$x82($global,$_buf,$S75,array($x70),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x80=$x83;}else{if(!$U75){$x80=$x70;if($W75){$x75=$x70;}}else{$x80=JS::$undefined;}}if(isset($_buf->class)&&$_buf->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$_buf->properties[\'length\']){$_buf->properties[\'length\']=\'length\'+1;}else if($x71===\'length\'&&is_int($x70)&&$x81>$x70){for($i=$x70;$i<$x81;++$i){unset($_buf->properties[$i],$_buf->attributes[$i]);}}}$_buf->attributes[\'length\']=0;return$_buf;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x102 =& $scope->properties['arguments'];
$x102->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x102->properties[$i] = $args[$i];
$x102->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _f915aaba5b76f6e13a986dca9da58f68_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x102=&$scope->properties[\'arguments\'];$x102->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x102->properties[$i]=$args[$i];$x102->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'buf\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$scope->properties[\'isBuffer\']=$fn;$_isBuffer=&$scope->properties[\'isBuffer\'];$global->scope[++$global->scope_sp]=$scope;return isset($_buf->class)&&$_buf->class===\'Buffer\';return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x123 =& $scope->properties['arguments'];
$x123->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x123->properties[$i] = $args[$i];
$x123->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _f915aaba5b76f6e13a986dca9da58f68_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x123=&$scope->properties[\'arguments\'];$x123->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x123->properties[$i]=$args[$i];$x123->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'byteLength\']=$fn;$_byteLength=&$scope->properties[\'byteLength\'];$global->scope[++$global->scope_sp]=$scope;return strlen(JS::toString($_string,$global));return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x144 =& $scope->properties['arguments'];
$x144->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x144->properties[$i] = $args[$i];
$x144->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x145 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('Array', $global), 41, 7, '<image>/20_buffer.js');
$_Array =& $x145[0]; list(,$WArray,$SArray,$UArray) = $x145;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x146 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 41, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x146[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x146;
$x147 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 7);
$x148 = $x147($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x148->class) && $x148->class === 'Error' && !isset($x148->properties['file']) && !isset($x148->properties['line']) && !isset($x148->properties['column'])) {$x148->properties['file'] = '<image>/20_buffer.js';$x148->properties['line'] = 41;$x148->properties['column'] = 7;$x148->attributes['file'] = $x148->attributes['line'] = $x148->attributes['column'] = 0; }
throw new JSException($x148, 41, 7, '<image>/20_buffer.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x150 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x150[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x150;
$x151 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x152 = $x151($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/20_buffer.js';$x152->properties['line'] = 41;$x152->properties['column'] = 20;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 41, 20, '<image>/20_buffer.js');
}
$x149 = JS::toObject($_Array, $global);
unset($x153, $W153, $S153, $U153);
$x154 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x149, JS::toString('isArray', $global), 41, 20, '<image>/20_buffer.js');
$x153 =& $x154[0]; list(,$W153,$S153,$U153) = $x154;
if (!(is_object($x153) && isset($x153->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x159 = $x158($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/20_buffer.js';$x159->properties['line'] = 41;$x159->properties['column'] = 20;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 41, 20, '<image>/20_buffer.js');
}
$x155 = $x153->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x156 = $x155($global, $x149, $x153, array($_list), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x156, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x162 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 42, 13, '<image>/20_buffer.js');
$_TypeError =& $x162[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x162;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x163 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 42, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x163[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x163;
$x164 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 13);
$x165 = $x164($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x165->class) && $x165->class === 'Error' && !isset($x165->properties['file']) && !isset($x165->properties['line']) && !isset($x165->properties['column'])) {$x165->properties['file'] = '<image>/20_buffer.js';$x165->properties['line'] = 42;$x165->properties['column'] = 13;$x165->attributes['file'] = $x165->attributes['line'] = $x165->attributes['column'] = 0; }
throw new JSException($x165, 42, 13, '<image>/20_buffer.js');
}
$x160 = clone JS::$objectTemplate;
unset($x166, $W166, $S166, $U166);
$x167 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, JS::toString('prototype', $global), 42, 9, '<image>/20_buffer.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
$x161 = $x166;
$x160->prototype = $x161;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x170 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x171 = $x170($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x171->class) && $x171->class === 'Error' && !isset($x171->properties['file']) && !isset($x171->properties['line']) && !isset($x171->properties['column'])) {$x171->properties['file'] = '<image>/20_buffer.js';$x171->properties['line'] = 42;$x171->properties['column'] = 9;$x171->attributes['file'] = $x171->attributes['line'] = $x171->attributes['column'] = 0; }
throw new JSException($x171, 42, 9, '<image>/20_buffer.js');
}
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x169 = $x168($global, $x160, $_TypeError, array('Given list is not an array'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x161 = $x169;
if (is_object($x161) && $x161 !== JS::$undefined) { $x160 = $x161; }
if (isset($x160->class) && $x160->class === 'Error' && !isset($x160->properties['file']) && !isset($x160->properties['line']) && !isset($x160->properties['column'])) {$x160->properties['file'] = '<image>/20_buffer.js';$x160->properties['line'] = 42;$x160->properties['column'] = 3;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 42, 3, '<image>/20_buffer.js');;
};
unset($x174, $W174, $S174, $U174);
$x175 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 45, 10, '<image>/20_buffer.js');
$x174 =& $x175[0]; list(,$W174,$S174,$U174) = $x175;
$x173 = (((gettype($x174) === gettype(0) && $x174 === 0))|| (((is_float($x174) || is_int($x174)) && (is_float(0) || is_int(0))) && $x174 == 0));
$x172 = $x173;
if (!JS::toBoolean($x172, $global)) {
$x176 = (((gettype($_totalLength) === gettype(0) && $_totalLength === 0))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(0) || is_int(0))) && $_totalLength == 0));
$x172 = $x176; }
if (JS::toBoolean($x172, $global)) {
unset($_require, $Wrequire, $Srequire, $Urequire);
$x179 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 46, 14, '<image>/20_buffer.js');
$_require =& $x179[0]; list(,$Wrequire,$Srequire,$Urequire) = $x179;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x180 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 46, 14, '<image>/20_buffer.js');
$_ReferenceError =& $x180[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x180;
$x181 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 14);
$x182 = $x181($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x182->class) && $x182->class === 'Error' && !isset($x182->properties['file']) && !isset($x182->properties['line']) && !isset($x182->properties['column'])) {$x182->properties['file'] = '<image>/20_buffer.js';$x182->properties['line'] = 46;$x182->properties['column'] = 14;$x182->attributes['file'] = $x182->attributes['line'] = $x182->attributes['column'] = 0; }
throw new JSException($x182, 46, 14, '<image>/20_buffer.js');
}
unset($x183, $W183, $S183, $U183);
$x184 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 46, 21, '<image>/20_buffer.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
unset($x185, $W185, $S185, $U185);
$x186 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x183, JS::toString('buffer', $global), 46, 29, '<image>/20_buffer.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
unset($x187, $W187, $S187, $U187);
$x188 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x185, JS::toString('exports', $global), 46, 36, '<image>/20_buffer.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
unset($x189, $W189, $S189, $U189);
$x190 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x187, JS::toString('Buffer', $global), 46, 44, '<image>/20_buffer.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
$x177 = clone JS::$objectTemplate;
unset($x191, $W191, $S191, $U191);
$x192 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x189, JS::toString('prototype', $global), 46, 10, '<image>/20_buffer.js');
$x191 =& $x192[0]; list(,$W191,$S191,$U191) = $x192;
$x178 = $x191;
$x177->prototype = $x178;
if (!(is_object($x189) && isset($x189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x195 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 46, 10, '<image>/20_buffer.js');
$_TypeError =& $x195[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x195;
$x196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x197 = $x196($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x197->class) && $x197->class === 'Error' && !isset($x197->properties['file']) && !isset($x197->properties['line']) && !isset($x197->properties['column'])) {$x197->properties['file'] = '<image>/20_buffer.js';$x197->properties['line'] = 46;$x197->properties['column'] = 10;$x197->attributes['file'] = $x197->attributes['line'] = $x197->attributes['column'] = 0; }
throw new JSException($x197, 46, 10, '<image>/20_buffer.js');
}
$x193 = $x189->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x194 = $x193($global, $x177, $x189, array(0), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x178 = $x194;
if (is_object($x178) && $x178 !== JS::$undefined) { $x177 = $x178; }
return $x177;;
}
else {
unset($x199, $W199, $S199, $U199);
$x200 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 48, 17, '<image>/20_buffer.js');
$x199 =& $x200[0]; list(,$W199,$S199,$U199) = $x200;
$x198 = (((gettype($x199) === gettype(1) && $x199 === 1))|| (((is_float($x199) || is_int($x199)) && (is_float(1) || is_int(1))) && $x199 == 1));
if (JS::toBoolean($x198, $global)) {
unset($x201, $W201, $S201, $U201);
$x202 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString(0, $global), 49, 14, '<image>/20_buffer.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
return $x201;;
}
else {
$x203 = (((gettype($_totalLength) === gettype(JS::$undefined) && $_totalLength === JS::$undefined))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_totalLength == JS::$undefined));
if (JS::toBoolean($x203, $global)) {
$x204 = 0;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$_totalLength = $x204;
for ($x205 = 0;; ++$x205) {
if ($x205 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x206, $W206, $S206, $U206);
$x207 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 54, 28, '<image>/20_buffer.js');
$x206 =& $x207[0]; list(,$W206,$S206,$U206) = $x207;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x206;
}
if ($x205 !== 0) {
$x208 = ++$_i;
}
$x209 = JS::toPrimitive($_i, $global);
$x210 = JS::toPrimitive($_l, $global);
$x211 = (is_string($x209) && is_string($x210) ? strcmp($x209, $x210) < 0 : (!is_nan($x212 = JS::toNumber($x209, $global)) && !is_nan($x213 = JS::toNumber($x210, $global)) && $x212 < $x213));
if (!JS::toBoolean($x211, $global)) { break; }

unset($x214, $W214, $S214, $U214);
$x215 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 55, 24, '<image>/20_buffer.js');
$x214 =& $x215[0]; list(,$W214,$S214,$U214) = $x215;
unset($x216, $W216, $S216, $U216);
$x217 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x214, JS::toString('length', $global), 55, 27, '<image>/20_buffer.js');
$x216 =& $x217[0]; list(,$W216,$S216,$U216) = $x217;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$x218 = JS::toPrimitive($_totalLength, $global);
$x219 = JS::toPrimitive($x216, $global);
$_totalLength = (is_string($x218) || is_string($x219) ? JS::toString($x218, $global) . JS::toString($x219, $global) : JS::toNumber($x218, $global) + JS::toNumber($x219, $global));;
};;
};
unset($_require, $Wrequire, $Srequire, $Urequire);
$x222 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 59, 17, '<image>/20_buffer.js');
$_require =& $x222[0]; list(,$Wrequire,$Srequire,$Urequire) = $x222;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x223 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 59, 17, '<image>/20_buffer.js');
$_ReferenceError =& $x223[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x223;
$x224 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 17);
$x225 = $x224($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x225->class) && $x225->class === 'Error' && !isset($x225->properties['file']) && !isset($x225->properties['line']) && !isset($x225->properties['column'])) {$x225->properties['file'] = '<image>/20_buffer.js';$x225->properties['line'] = 59;$x225->properties['column'] = 17;$x225->attributes['file'] = $x225->attributes['line'] = $x225->attributes['column'] = 0; }
throw new JSException($x225, 59, 17, '<image>/20_buffer.js');
}
unset($x226, $W226, $S226, $U226);
$x227 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 59, 24, '<image>/20_buffer.js');
$x226 =& $x227[0]; list(,$W226,$S226,$U226) = $x227;
unset($x228, $W228, $S228, $U228);
$x229 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x226, JS::toString('buffer', $global), 59, 32, '<image>/20_buffer.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
unset($x230, $W230, $S230, $U230);
$x231 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x228, JS::toString('exports', $global), 59, 39, '<image>/20_buffer.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
unset($x232, $W232, $S232, $U232);
$x233 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x230, JS::toString('Buffer', $global), 59, 47, '<image>/20_buffer.js');
$x232 =& $x233[0]; list(,$W232,$S232,$U232) = $x233;
$x220 = clone JS::$objectTemplate;
unset($x234, $W234, $S234, $U234);
$x235 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x232, JS::toString('prototype', $global), 59, 13, '<image>/20_buffer.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
$x221 = $x234;
$x220->prototype = $x221;
if (!(is_object($x232) && isset($x232->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x238 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 59, 13, '<image>/20_buffer.js');
$_TypeError =& $x238[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x238;
$x239 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x240 = $x239($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x240->class) && $x240->class === 'Error' && !isset($x240->properties['file']) && !isset($x240->properties['line']) && !isset($x240->properties['column'])) {$x240->properties['file'] = '<image>/20_buffer.js';$x240->properties['line'] = 59;$x240->properties['column'] = 13;$x240->attributes['file'] = $x240->attributes['line'] = $x240->attributes['column'] = 0; }
throw new JSException($x240, 59, 13, '<image>/20_buffer.js');
}
$x236 = $x232->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x237 = $x236($global, $x220, $x232, array($_totalLength), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x221 = $x237;
if (is_object($x221) && $x221 !== JS::$undefined) { $x220 = $x221; }
$scope->properties['buf'] = JS::$undefined; $_buf =& $scope->properties['buf'];
$Ubuf = FALSE;
$_buf = $x220;
for ($x241 = 0;; ++$x241) {
if ($x241 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x242, $W242, $S242, $U242);
$x243 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 61, 27, '<image>/20_buffer.js');
$x242 =& $x243[0]; list(,$W242,$S242,$U242) = $x243;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x242;
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = 0;
}
if ($x241 !== 0) {
$x244 = ++$_i;
}
$x245 = JS::toPrimitive($_i, $global);
$x246 = JS::toPrimitive($_l, $global);
$x247 = (is_string($x245) && is_string($x246) ? strcmp($x245, $x246) < 0 : (!is_nan($x248 = JS::toNumber($x245, $global)) && !is_nan($x249 = JS::toNumber($x246, $global)) && $x248 < $x249));
if (!JS::toBoolean($x247, $global)) { break; }

unset($x250, $W250, $S250, $U250);
$x251 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 62, 8, '<image>/20_buffer.js');
$x250 =& $x251[0]; list(,$W250,$S250,$U250) = $x251;
if ($x250 === JS::$undefined || $x250 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x253 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x253[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x253;
$x254 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x255 = $x254($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x255->class) && $x255->class === 'Error' && !isset($x255->properties['file']) && !isset($x255->properties['line']) && !isset($x255->properties['column'])) {$x255->properties['file'] = '<image>/20_buffer.js';$x255->properties['line'] = 62;$x255->properties['column'] = 16;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 62, 16, '<image>/20_buffer.js');
}
$x252 = JS::toObject($x250, $global);
unset($x256, $W256, $S256, $U256);
$x257 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x252, JS::toString('copy', $global), 62, 16, '<image>/20_buffer.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
if (!(is_object($x256) && isset($x256->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x260 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x260[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x260;
$x261 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x262 = $x261($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x262->class) && $x262->class === 'Error' && !isset($x262->properties['file']) && !isset($x262->properties['line']) && !isset($x262->properties['column'])) {$x262->properties['file'] = '<image>/20_buffer.js';$x262->properties['line'] = 62;$x262->properties['column'] = 16;$x262->attributes['file'] = $x262->attributes['line'] = $x262->attributes['column'] = 0; }
throw new JSException($x262, 62, 16, '<image>/20_buffer.js');
}
$x258 = $x256->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x259 = $x258($global, $x252, $x256, array($_buf, $_offset), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x263, $W263, $S263, $U263);
$x264 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 63, 18, '<image>/20_buffer.js');
$x263 =& $x264[0]; list(,$W263,$S263,$U263) = $x264;
unset($x265, $W265, $S265, $U265);
$x266 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x263, JS::toString('length', $global), 63, 21, '<image>/20_buffer.js');
$x265 =& $x266[0]; list(,$W265,$S265,$U265) = $x266;
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$x267 = JS::toPrimitive($_offset, $global);
$x268 = JS::toPrimitive($x265, $global);
$_offset = (is_string($x267) || is_string($x268) ? JS::toString($x267, $global) . JS::toString($x268, $global) : JS::toNumber($x267, $global) + JS::toNumber($x268, $global));;
};
return $_buf;;
};
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x144=&$scope->properties[\'arguments\'];$x144->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x144->properties[$i]=$args[$i];$x144->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'list\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_list=&$scope->properties[\'list\'];$Ulist=FALSE;$scope->properties[\'totalLength\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_totalLength=&$scope->properties[\'totalLength\'];$UtotalLength=FALSE;$scope->properties[\'concat\']=$fn;$_concat=&$scope->properties[\'concat\'];$global->scope[++$global->scope_sp]=$scope;unset($_Array,$WArray,$SArray,$UArray);$x145=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Array\',$global),41,7,\'<image>/20_buffer.js\');$_Array=&$x145[0];list(,$WArray,$SArray,$UArray)=$x145;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x146=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),41,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x146[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x146;$x147=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,7);$x148=$x147($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x148->class)&&$x148->class===\'Error\'&&!isset($x148->properties[\'file\'])&&!isset($x148->properties[\'line\'])&&!isset($x148->properties[\'column\'])){$x148->properties[\'file\']=\'<image>/20_buffer.js\';$x148->properties[\'line\']=41;$x148->properties[\'column\']=7;$x148->attributes[\'file\']=$x148->attributes[\'line\']=$x148->attributes[\'column\']=0;}throw new JSException($x148,41,7,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x150=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),41,20,\'<image>/20_buffer.js\');$_TypeError=&$x150[0];list(,$WTypeError,$STypeError,$UTypeError)=$x150;$x151=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x152=$x151($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/20_buffer.js\';$x152->properties[\'line\']=41;$x152->properties[\'column\']=20;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,41,20,\'<image>/20_buffer.js\');}$x149=JS::toObject($_Array,$global);unset($x153,$W153,$S153,$U153);$x154=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x149,JS::toString(\'isArray\',$global),41,20,\'<image>/20_buffer.js\');$x153=&$x154[0];list(,$W153,$S153,$U153)=$x154;if(!(is_object($x153)&&isset($x153->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),41,20,\'<image>/20_buffer.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x159=$x158($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'&&!isset($x159->properties[\'file\'])&&!isset($x159->properties[\'line\'])&&!isset($x159->properties[\'column\'])){$x159->properties[\'file\']=\'<image>/20_buffer.js\';$x159->properties[\'line\']=41;$x159->properties[\'column\']=20;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,41,20,\'<image>/20_buffer.js\');}$x155=$x153->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x156=$x155($global,$x149,$x153,array($_list),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x156,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x162=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),42,13,\'<image>/20_buffer.js\');$_TypeError=&$x162[0];list(,$WTypeError,$STypeError,$UTypeError)=$x162;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x163=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),42,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x163[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x163;$x164=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,13);$x165=$x164($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x165->class)&&$x165->class===\'Error\'&&!isset($x165->properties[\'file\'])&&!isset($x165->properties[\'line\'])&&!isset($x165->properties[\'column\'])){$x165->properties[\'file\']=\'<image>/20_buffer.js\';$x165->properties[\'line\']=42;$x165->properties[\'column\']=13;$x165->attributes[\'file\']=$x165->attributes[\'line\']=$x165->attributes[\'column\']=0;}throw new JSException($x165,42,13,\'<image>/20_buffer.js\');}$x160=clone JS::$objectTemplate;unset($x166,$W166,$S166,$U166);$x167=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),42,9,\'<image>/20_buffer.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;$x161=$x166;$x160->prototype=$x161;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x170=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x171=$x170($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x171->class)&&$x171->class===\'Error\'&&!isset($x171->properties[\'file\'])&&!isset($x171->properties[\'line\'])&&!isset($x171->properties[\'column\'])){$x171->properties[\'file\']=\'<image>/20_buffer.js\';$x171->properties[\'line\']=42;$x171->properties[\'column\']=9;$x171->attributes[\'file\']=$x171->attributes[\'line\']=$x171->attributes[\'column\']=0;}throw new JSException($x171,42,9,\'<image>/20_buffer.js\');}$x168=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x169=$x168($global,$x160,$_TypeError,array(\'Given list is not an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x161=$x169;if(is_object($x161)&&$x161!==JS::$undefined){$x160=$x161;}if(isset($x160->class)&&$x160->class===\'Error\'&&!isset($x160->properties[\'file\'])&&!isset($x160->properties[\'line\'])&&!isset($x160->properties[\'column\'])){$x160->properties[\'file\']=\'<image>/20_buffer.js\';$x160->properties[\'line\']=42;$x160->properties[\'column\']=3;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,42,3,\'<image>/20_buffer.js\');}unset($x174,$W174,$S174,$U174);$x175=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),45,10,\'<image>/20_buffer.js\');$x174=&$x175[0];list(,$W174,$S174,$U174)=$x175;$x173=(((gettype($x174)===gettype(0)&&$x174===0))||(((is_float($x174)||is_int($x174))&&(is_float(0)||is_int(0)))&&$x174==0));$x172=$x173;if(!JS::toBoolean($x172,$global)){$x176=(((gettype($_totalLength)===gettype(0)&&$_totalLength===0))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(0)||is_int(0)))&&$_totalLength==0));$x172=$x176;}if(JS::toBoolean($x172,$global)){unset($_require,$Wrequire,$Srequire,$Urequire);$x179=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),46,14,\'<image>/20_buffer.js\');$_require=&$x179[0];list(,$Wrequire,$Srequire,$Urequire)=$x179;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x180=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),46,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x180[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x180;$x181=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,14);$x182=$x181($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x182->class)&&$x182->class===\'Error\'&&!isset($x182->properties[\'file\'])&&!isset($x182->properties[\'line\'])&&!isset($x182->properties[\'column\'])){$x182->properties[\'file\']=\'<image>/20_buffer.js\';$x182->properties[\'line\']=46;$x182->properties[\'column\']=14;$x182->attributes[\'file\']=$x182->attributes[\'line\']=$x182->attributes[\'column\']=0;}throw new JSException($x182,46,14,\'<image>/20_buffer.js\');}unset($x183,$W183,$S183,$U183);$x184=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),46,21,\'<image>/20_buffer.js\');$x183=&$x184[0];list(,$W183,$S183,$U183)=$x184;unset($x185,$W185,$S185,$U185);$x186=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x183,JS::toString(\'buffer\',$global),46,29,\'<image>/20_buffer.js\');$x185=&$x186[0];list(,$W185,$S185,$U185)=$x186;unset($x187,$W187,$S187,$U187);$x188=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x185,JS::toString(\'exports\',$global),46,36,\'<image>/20_buffer.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;unset($x189,$W189,$S189,$U189);$x190=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x187,JS::toString(\'Buffer\',$global),46,44,\'<image>/20_buffer.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;$x177=clone JS::$objectTemplate;unset($x191,$W191,$S191,$U191);$x192=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x189,JS::toString(\'prototype\',$global),46,10,\'<image>/20_buffer.js\');$x191=&$x192[0];list(,$W191,$S191,$U191)=$x192;$x178=$x191;$x177->prototype=$x178;if(!(is_object($x189)&&isset($x189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x195=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),46,10,\'<image>/20_buffer.js\');$_TypeError=&$x195[0];list(,$WTypeError,$STypeError,$UTypeError)=$x195;$x196=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x197=$x196($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x197->class)&&$x197->class===\'Error\'&&!isset($x197->properties[\'file\'])&&!isset($x197->properties[\'line\'])&&!isset($x197->properties[\'column\'])){$x197->properties[\'file\']=\'<image>/20_buffer.js\';$x197->properties[\'line\']=46;$x197->properties[\'column\']=10;$x197->attributes[\'file\']=$x197->attributes[\'line\']=$x197->attributes[\'column\']=0;}throw new JSException($x197,46,10,\'<image>/20_buffer.js\');}$x193=$x189->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x194=$x193($global,$x177,$x189,array(0),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x178=$x194;if(is_object($x178)&&$x178!==JS::$undefined){$x177=$x178;}return$x177;}else{unset($x199,$W199,$S199,$U199);$x200=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),48,17,\'<image>/20_buffer.js\');$x199=&$x200[0];list(,$W199,$S199,$U199)=$x200;$x198=(((gettype($x199)===gettype(1)&&$x199===1))||(((is_float($x199)||is_int($x199))&&(is_float(1)||is_int(1)))&&$x199==1));if(JS::toBoolean($x198,$global)){unset($x201,$W201,$S201,$U201);$x202=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(0,$global),49,14,\'<image>/20_buffer.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;return$x201;}else{$x203=(((gettype($_totalLength)===gettype(JS::$undefined)&&$_totalLength===JS::$undefined))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_totalLength==JS::$undefined));if(JS::toBoolean($x203,$global)){$x204=0;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$_totalLength=$x204;for($x205=0;;++$x205){if($x205===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x206,$W206,$S206,$U206);$x207=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),54,28,\'<image>/20_buffer.js\');$x206=&$x207[0];list(,$W206,$S206,$U206)=$x207;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x206;}if($x205!==0){$x208=++$_i;}$x209=JS::toPrimitive($_i,$global);$x210=JS::toPrimitive($_l,$global);$x211=(is_string($x209)&&is_string($x210)?strcmp($x209,$x210)<0:(!is_nan($x212=JS::toNumber($x209,$global))&&!is_nan($x213=JS::toNumber($x210,$global))&&$x212<$x213));if(!JS::toBoolean($x211,$global)){break;}unset($x214,$W214,$S214,$U214);$x215=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),55,24,\'<image>/20_buffer.js\');$x214=&$x215[0];list(,$W214,$S214,$U214)=$x215;unset($x216,$W216,$S216,$U216);$x217=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x214,JS::toString(\'length\',$global),55,27,\'<image>/20_buffer.js\');$x216=&$x217[0];list(,$W216,$S216,$U216)=$x217;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$x218=JS::toPrimitive($_totalLength,$global);$x219=JS::toPrimitive($x216,$global);$_totalLength=(is_string($x218)||is_string($x219)?JS::toString($x218,$global).JS::toString($x219,$global):JS::toNumber($x218,$global)+JS::toNumber($x219,$global));}}unset($_require,$Wrequire,$Srequire,$Urequire);$x222=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),59,17,\'<image>/20_buffer.js\');$_require=&$x222[0];list(,$Wrequire,$Srequire,$Urequire)=$x222;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x223=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),59,17,\'<image>/20_buffer.js\');$_ReferenceError=&$x223[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x223;$x224=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,17);$x225=$x224($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x225->class)&&$x225->class===\'Error\'&&!isset($x225->properties[\'file\'])&&!isset($x225->properties[\'line\'])&&!isset($x225->properties[\'column\'])){$x225->properties[\'file\']=\'<image>/20_buffer.js\';$x225->properties[\'line\']=59;$x225->properties[\'column\']=17;$x225->attributes[\'file\']=$x225->attributes[\'line\']=$x225->attributes[\'column\']=0;}throw new JSException($x225,59,17,\'<image>/20_buffer.js\');}unset($x226,$W226,$S226,$U226);$x227=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),59,24,\'<image>/20_buffer.js\');$x226=&$x227[0];list(,$W226,$S226,$U226)=$x227;unset($x228,$W228,$S228,$U228);$x229=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x226,JS::toString(\'buffer\',$global),59,32,\'<image>/20_buffer.js\');$x228=&$x229[0];list(,$W228,$S228,$U228)=$x229;unset($x230,$W230,$S230,$U230);$x231=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x228,JS::toString(\'exports\',$global),59,39,\'<image>/20_buffer.js\');$x230=&$x231[0];list(,$W230,$S230,$U230)=$x231;unset($x232,$W232,$S232,$U232);$x233=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x230,JS::toString(\'Buffer\',$global),59,47,\'<image>/20_buffer.js\');$x232=&$x233[0];list(,$W232,$S232,$U232)=$x233;$x220=clone JS::$objectTemplate;unset($x234,$W234,$S234,$U234);$x235=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x232,JS::toString(\'prototype\',$global),59,13,\'<image>/20_buffer.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;$x221=$x234;$x220->prototype=$x221;if(!(is_object($x232)&&isset($x232->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x238=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),59,13,\'<image>/20_buffer.js\');$_TypeError=&$x238[0];list(,$WTypeError,$STypeError,$UTypeError)=$x238;$x239=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x240=$x239($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x240->class)&&$x240->class===\'Error\'&&!isset($x240->properties[\'file\'])&&!isset($x240->properties[\'line\'])&&!isset($x240->properties[\'column\'])){$x240->properties[\'file\']=\'<image>/20_buffer.js\';$x240->properties[\'line\']=59;$x240->properties[\'column\']=13;$x240->attributes[\'file\']=$x240->attributes[\'line\']=$x240->attributes[\'column\']=0;}throw new JSException($x240,59,13,\'<image>/20_buffer.js\');}$x236=$x232->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x237=$x236($global,$x220,$x232,array($_totalLength),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x221=$x237;if(is_object($x221)&&$x221!==JS::$undefined){$x220=$x221;}$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x220;for($x241=0;;++$x241){if($x241===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x242,$W242,$S242,$U242);$x243=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),61,27,\'<image>/20_buffer.js\');$x242=&$x243[0];list(,$W242,$S242,$U242)=$x243;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x242;$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=0;}if($x241!==0){$x244=++$_i;}$x245=JS::toPrimitive($_i,$global);$x246=JS::toPrimitive($_l,$global);$x247=(is_string($x245)&&is_string($x246)?strcmp($x245,$x246)<0:(!is_nan($x248=JS::toNumber($x245,$global))&&!is_nan($x249=JS::toNumber($x246,$global))&&$x248<$x249));if(!JS::toBoolean($x247,$global)){break;}unset($x250,$W250,$S250,$U250);$x251=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),62,8,\'<image>/20_buffer.js\');$x250=&$x251[0];list(,$W250,$S250,$U250)=$x251;if($x250===JS::$undefined||$x250===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x253=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,16,\'<image>/20_buffer.js\');$_TypeError=&$x253[0];list(,$WTypeError,$STypeError,$UTypeError)=$x253;$x254=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x255=$x254($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x255->class)&&$x255->class===\'Error\'&&!isset($x255->properties[\'file\'])&&!isset($x255->properties[\'line\'])&&!isset($x255->properties[\'column\'])){$x255->properties[\'file\']=\'<image>/20_buffer.js\';$x255->properties[\'line\']=62;$x255->properties[\'column\']=16;$x255->attributes[\'file\']=$x255->attributes[\'line\']=$x255->attributes[\'column\']=0;}throw new JSException($x255,62,16,\'<image>/20_buffer.js\');}$x252=JS::toObject($x250,$global);unset($x256,$W256,$S256,$U256);$x257=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x252,JS::toString(\'copy\',$global),62,16,\'<image>/20_buffer.js\');$x256=&$x257[0];list(,$W256,$S256,$U256)=$x257;if(!(is_object($x256)&&isset($x256->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x260=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,16,\'<image>/20_buffer.js\');$_TypeError=&$x260[0];list(,$WTypeError,$STypeError,$UTypeError)=$x260;$x261=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x262=$x261($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x262->class)&&$x262->class===\'Error\'&&!isset($x262->properties[\'file\'])&&!isset($x262->properties[\'line\'])&&!isset($x262->properties[\'column\'])){$x262->properties[\'file\']=\'<image>/20_buffer.js\';$x262->properties[\'line\']=62;$x262->properties[\'column\']=16;$x262->attributes[\'file\']=$x262->attributes[\'line\']=$x262->attributes[\'column\']=0;}throw new JSException($x262,62,16,\'<image>/20_buffer.js\');}$x258=$x256->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x259=$x258($global,$x252,$x256,array($_buf,$_offset),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x263,$W263,$S263,$U263);$x264=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),63,18,\'<image>/20_buffer.js\');$x263=&$x264[0];list(,$W263,$S263,$U263)=$x264;unset($x265,$W265,$S265,$U265);$x266=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x263,JS::toString(\'length\',$global),63,21,\'<image>/20_buffer.js\');$x265=&$x266[0];list(,$W265,$S265,$U265)=$x266;if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$x267=JS::toPrimitive($_offset,$global);$x268=JS::toPrimitive($x265,$global);$_offset=(is_string($x267)||is_string($x268)?JS::toString($x267,$global).JS::toString($x268,$global):JS::toNumber($x267,$global)+JS::toNumber($x268,$global));}return$_buf;}}return JS::$undefined;}', "\n";
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
$x289 =& $scope->properties['arguments'];
$x289->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x289->properties[$i] = $args[$i];
$x289->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x290 = !(((gettype($_encoding) === gettype(JS::$undefined) && $_encoding === JS::$undefined))|| (((is_float($_encoding) || is_int($_encoding)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_encoding == JS::$undefined));
if (JS::toBoolean($x290, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x293 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('NotImplementedError', $global), 72, 13, '<image>/20_buffer.js');
$_NotImplementedError =& $x293[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x293;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x294 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x294[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x294;
$x295 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 13);
$x296 = $x295($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x296->class) && $x296->class === 'Error' && !isset($x296->properties['file']) && !isset($x296->properties['line']) && !isset($x296->properties['column'])) {$x296->properties['file'] = '<image>/20_buffer.js';$x296->properties['line'] = 72;$x296->properties['column'] = 13;$x296->attributes['file'] = $x296->attributes['line'] = $x296->attributes['column'] = 0; }
throw new JSException($x296, 72, 13, '<image>/20_buffer.js');
}
$x291 = clone JS::$objectTemplate;
unset($x297, $W297, $S297, $U297);
$x298 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 72, 9, '<image>/20_buffer.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
$x292 = $x297;
$x291->prototype = $x292;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x301 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 72, 9, '<image>/20_buffer.js');
$_TypeError =& $x301[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x301;
$x302 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x303 = $x302($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x303->class) && $x303->class === 'Error' && !isset($x303->properties['file']) && !isset($x303->properties['line']) && !isset($x303->properties['column'])) {$x303->properties['file'] = '<image>/20_buffer.js';$x303->properties['line'] = 72;$x303->properties['column'] = 9;$x303->attributes['file'] = $x303->attributes['line'] = $x303->attributes['column'] = 0; }
throw new JSException($x303, 72, 9, '<image>/20_buffer.js');
}
$x299 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x300 = $x299($global, $x291, $_NotImplementedError, array('encoding argument not implemented'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x292 = $x300;
if (is_object($x292) && $x292 !== JS::$undefined) { $x291 = $x292; }
if (isset($x291->class) && $x291->class === 'Error' && !isset($x291->properties['file']) && !isset($x291->properties['line']) && !isset($x291->properties['column'])) {$x291->properties['file'] = '<image>/20_buffer.js';$x291->properties['line'] = 72;$x291->properties['column'] = 3;$x291->attributes['file'] = $x291->attributes['line'] = $x291->attributes['column'] = 0; }
throw new JSException($x291, 72, 3, '<image>/20_buffer.js');;
};
$x304 = $_offset;
if (!JS::toBoolean($x304, $global)) {
$x304 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x304;
$x305 = $_length;
if (!JS::toBoolean($x305, $global)) {
unset($x306, $W306, $S306, $U306);
$x307 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 76, 25, '<image>/20_buffer.js');
$x306 =& $x307[0]; list(,$W306,$S306,$U306) = $x307;
$x305 = (JS::toNumber($x306, $global) - JS::toNumber($_offset, $global)); }
if ($Ulength) {$global->properties['length'] = $_length; $_length =& $global->properties['length']; }
$_length = $x305;
$x308 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x308;
unset($x309, $W309, $S309, $U309);
$x310 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 78, 15, '<image>/20_buffer.js');
$x309 =& $x310[0]; list(,$W309,$S309,$U309) = $x310;
unset($_maxlen, $Wmaxlen, $Smaxlen, $Umaxlen);
$x311 = _f915aaba5b76f6e13a986dca9da58f68_9($global, $scope, $scope, JS::toString('maxlen', $global), 78, 9, '<image>/20_buffer.js');
$_maxlen =& $x311[0]; list(,$Wmaxlen,$Smaxlen,$Umaxlen) = $x311;
if ($Umaxlen) {$global->properties['maxlen'] = $_maxlen; $_maxlen =& $global->properties['maxlen']; }
$_maxlen = $x309;
$leThis->value = substr(substr($leThis->value, 0,$_offset) . substr($_string, 0,$_length) .
		substr($leThis->value,$_offset+$_length), 0,$_maxlen);
return $_length;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x289=&$scope->properties[\'arguments\'];$x289->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x289->properties[$i]=$args[$i];$x289->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'length\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$scope->properties[\'encoding\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_encoding=&$scope->properties[\'encoding\'];$Uencoding=FALSE;$scope->properties[\'write\']=$fn;$_write=&$scope->properties[\'write\'];$global->scope[++$global->scope_sp]=$scope;$x290=!(((gettype($_encoding)===gettype(JS::$undefined)&&$_encoding===JS::$undefined))||(((is_float($_encoding)||is_int($_encoding))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_encoding==JS::$undefined));if(JS::toBoolean($x290,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x293=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),72,13,\'<image>/20_buffer.js\');$_NotImplementedError=&$x293[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x293;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x294=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x294[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x294;$x295=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,13);$x296=$x295($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x296->class)&&$x296->class===\'Error\'&&!isset($x296->properties[\'file\'])&&!isset($x296->properties[\'line\'])&&!isset($x296->properties[\'column\'])){$x296->properties[\'file\']=\'<image>/20_buffer.js\';$x296->properties[\'line\']=72;$x296->properties[\'column\']=13;$x296->attributes[\'file\']=$x296->attributes[\'line\']=$x296->attributes[\'column\']=0;}throw new JSException($x296,72,13,\'<image>/20_buffer.js\');}$x291=clone JS::$objectTemplate;unset($x297,$W297,$S297,$U297);$x298=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),72,9,\'<image>/20_buffer.js\');$x297=&$x298[0];list(,$W297,$S297,$U297)=$x298;$x292=$x297;$x291->prototype=$x292;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x301=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,9,\'<image>/20_buffer.js\');$_TypeError=&$x301[0];list(,$WTypeError,$STypeError,$UTypeError)=$x301;$x302=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x303=$x302($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x303->class)&&$x303->class===\'Error\'&&!isset($x303->properties[\'file\'])&&!isset($x303->properties[\'line\'])&&!isset($x303->properties[\'column\'])){$x303->properties[\'file\']=\'<image>/20_buffer.js\';$x303->properties[\'line\']=72;$x303->properties[\'column\']=9;$x303->attributes[\'file\']=$x303->attributes[\'line\']=$x303->attributes[\'column\']=0;}throw new JSException($x303,72,9,\'<image>/20_buffer.js\');}$x299=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x300=$x299($global,$x291,$_NotImplementedError,array(\'encoding argument not implemented\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x292=$x300;if(is_object($x292)&&$x292!==JS::$undefined){$x291=$x292;}if(isset($x291->class)&&$x291->class===\'Error\'&&!isset($x291->properties[\'file\'])&&!isset($x291->properties[\'line\'])&&!isset($x291->properties[\'column\'])){$x291->properties[\'file\']=\'<image>/20_buffer.js\';$x291->properties[\'line\']=72;$x291->properties[\'column\']=3;$x291->attributes[\'file\']=$x291->attributes[\'line\']=$x291->attributes[\'column\']=0;}throw new JSException($x291,72,3,\'<image>/20_buffer.js\');}$x304=$_offset;if(!JS::toBoolean($x304,$global)){$x304=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x304;$x305=$_length;if(!JS::toBoolean($x305,$global)){unset($x306,$W306,$S306,$U306);$x307=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),76,25,\'<image>/20_buffer.js\');$x306=&$x307[0];list(,$W306,$S306,$U306)=$x307;$x305=(JS::toNumber($x306,$global)-JS::toNumber($_offset,$global));}if($Ulength){$global->properties[\'length\']=$_length;$_length=&$global->properties[\'length\'];}$_length=$x305;$x308=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x308;unset($x309,$W309,$S309,$U309);$x310=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),78,15,\'<image>/20_buffer.js\');$x309=&$x310[0];list(,$W309,$S309,$U309)=$x310;unset($_maxlen,$Wmaxlen,$Smaxlen,$Umaxlen);$x311=_f915aaba5b76f6e13a986dca9da58f68_9($global,$scope,$scope,JS::toString(\'maxlen\',$global),78,9,\'<image>/20_buffer.js\');$_maxlen=&$x311[0];list(,$Wmaxlen,$Smaxlen,$Umaxlen)=$x311;if($Umaxlen){$global->properties[\'maxlen\']=$_maxlen;$_maxlen=&$global->properties[\'maxlen\'];}$_maxlen=$x309;$leThis->value=substr(substr($leThis->value,0,$_offset).substr($_string,0,$_length).substr($leThis->value,$_offset+$_length),0,$_maxlen);return$_length;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x334 =& $scope->properties['arguments'];
$x334->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x334->properties[$i] = $args[$i];
$x334->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['toString'] = $fn;
$_toString =& $scope->properties['toString'];
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x334=&$scope->properties[\'arguments\'];$x334->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x334->properties[$i]=$args[$i];$x334->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'toString\']=$fn;$_toString=&$scope->properties[\'toString\'];$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_11($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x358 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 91, 7, '<image>/20_buffer.js');
$_require =& $x358[0]; list(,$Wrequire,$Srequire,$Urequire) = $x358;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x359 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 91, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x359[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x359;
$x360 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 7);
$x361 = $x360($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x361->class) && $x361->class === 'Error' && !isset($x361->properties['file']) && !isset($x361->properties['line']) && !isset($x361->properties['column'])) {$x361->properties['file'] = '<image>/20_buffer.js';$x361->properties['line'] = 91;$x361->properties['column'] = 7;$x361->attributes['file'] = $x361->attributes['line'] = $x361->attributes['column'] = 0; }
throw new JSException($x361, 91, 7, '<image>/20_buffer.js');
}
unset($x362, $W362, $S362, $U362);
$x363 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 91, 14, '<image>/20_buffer.js');
$x362 =& $x363[0]; list(,$W362,$S362,$U362) = $x363;
unset($x364, $W364, $S364, $U364);
$x365 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x362, JS::toString('buffer', $global), 91, 22, '<image>/20_buffer.js');
$x364 =& $x365[0]; list(,$W364,$S364,$U364) = $x365;
unset($x366, $W366, $S366, $U366);
$x367 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x364, JS::toString('exports', $global), 91, 29, '<image>/20_buffer.js');
$x366 =& $x367[0]; list(,$W366,$S366,$U366) = $x367;
unset($x368, $W368, $S368, $U368);
$x369 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x366, JS::toString('Buffer', $global), 91, 37, '<image>/20_buffer.js');
$x368 =& $x369[0]; list(,$W368,$S368,$U368) = $x369;
if ($x368 === JS::$undefined || $x368 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x371 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x371[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x371;
$x372 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x373 = $x372($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x373->class) && $x373->class === 'Error' && !isset($x373->properties['file']) && !isset($x373->properties['line']) && !isset($x373->properties['column'])) {$x373->properties['file'] = '<image>/20_buffer.js';$x373->properties['line'] = 91;$x373->properties['column'] = 53;$x373->attributes['file'] = $x373->attributes['line'] = $x373->attributes['column'] = 0; }
throw new JSException($x373, 91, 53, '<image>/20_buffer.js');
}
$x370 = JS::toObject($x368, $global);
unset($x374, $W374, $S374, $U374);
$x375 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x370, JS::toString('isBuffer', $global), 91, 53, '<image>/20_buffer.js');
$x374 =& $x375[0]; list(,$W374,$S374,$U374) = $x375;
if (!(is_object($x374) && isset($x374->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x378 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x378[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x378;
$x379 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x380 = $x379($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x380->class) && $x380->class === 'Error' && !isset($x380->properties['file']) && !isset($x380->properties['line']) && !isset($x380->properties['column'])) {$x380->properties['file'] = '<image>/20_buffer.js';$x380->properties['line'] = 91;$x380->properties['column'] = 53;$x380->attributes['file'] = $x380->attributes['line'] = $x380->attributes['column'] = 0; }
throw new JSException($x380, 91, 53, '<image>/20_buffer.js');
}
$x376 = $x374->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x377 = $x376($global, $x370, $x374, array($_targetBuffer), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x377, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x383 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 92, 13, '<image>/20_buffer.js');
$_TypeError =& $x383[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x383;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x384 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 92, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x384[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x384;
$x385 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 13);
$x386 = $x385($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x386->class) && $x386->class === 'Error' && !isset($x386->properties['file']) && !isset($x386->properties['line']) && !isset($x386->properties['column'])) {$x386->properties['file'] = '<image>/20_buffer.js';$x386->properties['line'] = 92;$x386->properties['column'] = 13;$x386->attributes['file'] = $x386->attributes['line'] = $x386->attributes['column'] = 0; }
throw new JSException($x386, 92, 13, '<image>/20_buffer.js');
}
$x381 = clone JS::$objectTemplate;
unset($x387, $W387, $S387, $U387);
$x388 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, JS::toString('prototype', $global), 92, 9, '<image>/20_buffer.js');
$x387 =& $x388[0]; list(,$W387,$S387,$U387) = $x388;
$x382 = $x387;
$x381->prototype = $x382;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x391 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x392 = $x391($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x392->class) && $x392->class === 'Error' && !isset($x392->properties['file']) && !isset($x392->properties['line']) && !isset($x392->properties['column'])) {$x392->properties['file'] = '<image>/20_buffer.js';$x392->properties['line'] = 92;$x392->properties['column'] = 9;$x392->attributes['file'] = $x392->attributes['line'] = $x392->attributes['column'] = 0; }
throw new JSException($x392, 92, 9, '<image>/20_buffer.js');
}
$x389 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x390 = $x389($global, $x381, $_TypeError, array('Given first argument is not a buffer'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x382 = $x390;
if (is_object($x382) && $x382 !== JS::$undefined) { $x381 = $x382; }
if (isset($x381->class) && $x381->class === 'Error' && !isset($x381->properties['file']) && !isset($x381->properties['line']) && !isset($x381->properties['column'])) {$x381->properties['file'] = '<image>/20_buffer.js';$x381->properties['line'] = 92;$x381->properties['column'] = 3;$x381->attributes['file'] = $x381->attributes['line'] = $x381->attributes['column'] = 0; }
throw new JSException($x381, 92, 3, '<image>/20_buffer.js');;
};
$x393 = $_targetStart;
if (!JS::toBoolean($x393, $global)) {
$x393 = 0; }
if ($UtargetStart) {$global->properties['targetStart'] = $_targetStart; $_targetStart =& $global->properties['targetStart']; }
$_targetStart = $x393;
$x394 = $_sourceStart;
if (!JS::toBoolean($x394, $global)) {
$x394 = 0; }
if ($UsourceStart) {$global->properties['sourceStart'] = $_sourceStart; $_sourceStart =& $global->properties['sourceStart']; }
$_sourceStart = $x394;
$x395 = $_sourceEnd;
if (!JS::toBoolean($x395, $global)) {
unset($x396, $W396, $S396, $U396);
$x397 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 97, 31, '<image>/20_buffer.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
$x395 = $x396; }
if ($UsourceEnd) {$global->properties['sourceEnd'] = $_sourceEnd; $_sourceEnd =& $global->properties['sourceEnd']; }
$_sourceEnd = $x395;
if ($_targetBuffer === JS::$undefined || $_targetBuffer === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
$x400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x401 = $x400($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x401->class) && $x401->class === 'Error' && !isset($x401->properties['file']) && !isset($x401->properties['line']) && !isset($x401->properties['column'])) {$x401->properties['file'] = '<image>/20_buffer.js';$x401->properties['line'] = 99;$x401->properties['column'] = 20;$x401->attributes['file'] = $x401->attributes['line'] = $x401->attributes['column'] = 0; }
throw new JSException($x401, 99, 20, '<image>/20_buffer.js');
}
$x398 = JS::toObject($_targetBuffer, $global);
unset($x402, $W402, $S402, $U402);
$x403 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x398, JS::toString('write', $global), 99, 20, '<image>/20_buffer.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
if (!(is_object($x402) && isset($x402->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x406 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x406[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x406;
$x407 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x408 = $x407($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x408->class) && $x408->class === 'Error' && !isset($x408->properties['file']) && !isset($x408->properties['line']) && !isset($x408->properties['column'])) {$x408->properties['file'] = '<image>/20_buffer.js';$x408->properties['line'] = 99;$x408->properties['column'] = 20;$x408->attributes['file'] = $x408->attributes['line'] = $x408->attributes['column'] = 0; }
throw new JSException($x408, 99, 20, '<image>/20_buffer.js');
}
$x404 = $x402->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x405 = $x404($global, $x398, $x402, array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart), $_targetStart), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x357=&$scope->properties[\'arguments\'];$x357->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x357->properties[$i]=$args[$i];$x357->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'targetBuffer\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_targetBuffer=&$scope->properties[\'targetBuffer\'];$UtargetBuffer=FALSE;$scope->properties[\'targetStart\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_targetStart=&$scope->properties[\'targetStart\'];$UtargetStart=FALSE;$scope->properties[\'sourceStart\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_sourceStart=&$scope->properties[\'sourceStart\'];$UsourceStart=FALSE;$scope->properties[\'sourceEnd\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_sourceEnd=&$scope->properties[\'sourceEnd\'];$UsourceEnd=FALSE;$scope->properties[\'copy\']=$fn;$_copy=&$scope->properties[\'copy\'];$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x358=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),91,7,\'<image>/20_buffer.js\');$_require=&$x358[0];list(,$Wrequire,$Srequire,$Urequire)=$x358;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x359=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),91,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x359[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x359;$x360=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,7);$x361=$x360($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x361->class)&&$x361->class===\'Error\'&&!isset($x361->properties[\'file\'])&&!isset($x361->properties[\'line\'])&&!isset($x361->properties[\'column\'])){$x361->properties[\'file\']=\'<image>/20_buffer.js\';$x361->properties[\'line\']=91;$x361->properties[\'column\']=7;$x361->attributes[\'file\']=$x361->attributes[\'line\']=$x361->attributes[\'column\']=0;}throw new JSException($x361,91,7,\'<image>/20_buffer.js\');}unset($x362,$W362,$S362,$U362);$x363=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),91,14,\'<image>/20_buffer.js\');$x362=&$x363[0];list(,$W362,$S362,$U362)=$x363;unset($x364,$W364,$S364,$U364);$x365=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x362,JS::toString(\'buffer\',$global),91,22,\'<image>/20_buffer.js\');$x364=&$x365[0];list(,$W364,$S364,$U364)=$x365;unset($x366,$W366,$S366,$U366);$x367=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x364,JS::toString(\'exports\',$global),91,29,\'<image>/20_buffer.js\');$x366=&$x367[0];list(,$W366,$S366,$U366)=$x367;unset($x368,$W368,$S368,$U368);$x369=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x366,JS::toString(\'Buffer\',$global),91,37,\'<image>/20_buffer.js\');$x368=&$x369[0];list(,$W368,$S368,$U368)=$x369;if($x368===JS::$undefined||$x368===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x371=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),91,53,\'<image>/20_buffer.js\');$_TypeError=&$x371[0];list(,$WTypeError,$STypeError,$UTypeError)=$x371;$x372=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x373=$x372($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x373->class)&&$x373->class===\'Error\'&&!isset($x373->properties[\'file\'])&&!isset($x373->properties[\'line\'])&&!isset($x373->properties[\'column\'])){$x373->properties[\'file\']=\'<image>/20_buffer.js\';$x373->properties[\'line\']=91;$x373->properties[\'column\']=53;$x373->attributes[\'file\']=$x373->attributes[\'line\']=$x373->attributes[\'column\']=0;}throw new JSException($x373,91,53,\'<image>/20_buffer.js\');}$x370=JS::toObject($x368,$global);unset($x374,$W374,$S374,$U374);$x375=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x370,JS::toString(\'isBuffer\',$global),91,53,\'<image>/20_buffer.js\');$x374=&$x375[0];list(,$W374,$S374,$U374)=$x375;if(!(is_object($x374)&&isset($x374->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x378=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),91,53,\'<image>/20_buffer.js\');$_TypeError=&$x378[0];list(,$WTypeError,$STypeError,$UTypeError)=$x378;$x379=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x380=$x379($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x380->class)&&$x380->class===\'Error\'&&!isset($x380->properties[\'file\'])&&!isset($x380->properties[\'line\'])&&!isset($x380->properties[\'column\'])){$x380->properties[\'file\']=\'<image>/20_buffer.js\';$x380->properties[\'line\']=91;$x380->properties[\'column\']=53;$x380->attributes[\'file\']=$x380->attributes[\'line\']=$x380->attributes[\'column\']=0;}throw new JSException($x380,91,53,\'<image>/20_buffer.js\');}$x376=$x374->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x377=$x376($global,$x370,$x374,array($_targetBuffer),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x377,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x383=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),92,13,\'<image>/20_buffer.js\');$_TypeError=&$x383[0];list(,$WTypeError,$STypeError,$UTypeError)=$x383;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x384=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),92,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x384[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x384;$x385=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,13);$x386=$x385($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x386->class)&&$x386->class===\'Error\'&&!isset($x386->properties[\'file\'])&&!isset($x386->properties[\'line\'])&&!isset($x386->properties[\'column\'])){$x386->properties[\'file\']=\'<image>/20_buffer.js\';$x386->properties[\'line\']=92;$x386->properties[\'column\']=13;$x386->attributes[\'file\']=$x386->attributes[\'line\']=$x386->attributes[\'column\']=0;}throw new JSException($x386,92,13,\'<image>/20_buffer.js\');}$x381=clone JS::$objectTemplate;unset($x387,$W387,$S387,$U387);$x388=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),92,9,\'<image>/20_buffer.js\');$x387=&$x388[0];list(,$W387,$S387,$U387)=$x388;$x382=$x387;$x381->prototype=$x382;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x391=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x392=$x391($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x392->class)&&$x392->class===\'Error\'&&!isset($x392->properties[\'file\'])&&!isset($x392->properties[\'line\'])&&!isset($x392->properties[\'column\'])){$x392->properties[\'file\']=\'<image>/20_buffer.js\';$x392->properties[\'line\']=92;$x392->properties[\'column\']=9;$x392->attributes[\'file\']=$x392->attributes[\'line\']=$x392->attributes[\'column\']=0;}throw new JSException($x392,92,9,\'<image>/20_buffer.js\');}$x389=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x390=$x389($global,$x381,$_TypeError,array(\'Given first argument is not a buffer\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x382=$x390;if(is_object($x382)&&$x382!==JS::$undefined){$x381=$x382;}if(isset($x381->class)&&$x381->class===\'Error\'&&!isset($x381->properties[\'file\'])&&!isset($x381->properties[\'line\'])&&!isset($x381->properties[\'column\'])){$x381->properties[\'file\']=\'<image>/20_buffer.js\';$x381->properties[\'line\']=92;$x381->properties[\'column\']=3;$x381->attributes[\'file\']=$x381->attributes[\'line\']=$x381->attributes[\'column\']=0;}throw new JSException($x381,92,3,\'<image>/20_buffer.js\');}$x393=$_targetStart;if(!JS::toBoolean($x393,$global)){$x393=0;}if($UtargetStart){$global->properties[\'targetStart\']=$_targetStart;$_targetStart=&$global->properties[\'targetStart\'];}$_targetStart=$x393;$x394=$_sourceStart;if(!JS::toBoolean($x394,$global)){$x394=0;}if($UsourceStart){$global->properties[\'sourceStart\']=$_sourceStart;$_sourceStart=&$global->properties[\'sourceStart\'];}$_sourceStart=$x394;$x395=$_sourceEnd;if(!JS::toBoolean($x395,$global)){unset($x396,$W396,$S396,$U396);$x397=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),97,31,\'<image>/20_buffer.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;$x395=$x396;}if($UsourceEnd){$global->properties[\'sourceEnd\']=$_sourceEnd;$_sourceEnd=&$global->properties[\'sourceEnd\'];}$_sourceEnd=$x395;if($_targetBuffer===JS::$undefined||$_targetBuffer===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),99,20,\'<image>/20_buffer.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;$x400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x401=$x400($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x401->class)&&$x401->class===\'Error\'&&!isset($x401->properties[\'file\'])&&!isset($x401->properties[\'line\'])&&!isset($x401->properties[\'column\'])){$x401->properties[\'file\']=\'<image>/20_buffer.js\';$x401->properties[\'line\']=99;$x401->properties[\'column\']=20;$x401->attributes[\'file\']=$x401->attributes[\'line\']=$x401->attributes[\'column\']=0;}throw new JSException($x401,99,20,\'<image>/20_buffer.js\');}$x398=JS::toObject($_targetBuffer,$global);unset($x402,$W402,$S402,$U402);$x403=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x398,JS::toString(\'write\',$global),99,20,\'<image>/20_buffer.js\');$x402=&$x403[0];list(,$W402,$S402,$U402)=$x403;if(!(is_object($x402)&&isset($x402->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x406=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),99,20,\'<image>/20_buffer.js\');$_TypeError=&$x406[0];list(,$WTypeError,$STypeError,$UTypeError)=$x406;$x407=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x408=$x407($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x408->class)&&$x408->class===\'Error\'&&!isset($x408->properties[\'file\'])&&!isset($x408->properties[\'line\'])&&!isset($x408->properties[\'column\'])){$x408->properties[\'file\']=\'<image>/20_buffer.js\';$x408->properties[\'line\']=99;$x408->properties[\'column\']=20;$x408->attributes[\'file\']=$x408->attributes[\'line\']=$x408->attributes[\'column\']=0;}throw new JSException($x408,99,20,\'<image>/20_buffer.js\');}$x404=$x402->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x405=$x404($global,$x398,$x402,array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart),$_targetStart),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x431 =& $scope->properties['arguments'];
$x431->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x431->properties[$i] = $args[$i];
$x431->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x432 = JS::toNumber($_start, $global);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x432;
$x433 = JS::toNumber($_end, $global);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x433;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x436 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 106, 13, '<image>/20_buffer.js');
$_require =& $x436[0]; list(,$Wrequire,$Srequire,$Urequire) = $x436;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x437 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 106, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x437[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x437;
$x438 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 13);
$x439 = $x438($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x439->class) && $x439->class === 'Error' && !isset($x439->properties['file']) && !isset($x439->properties['line']) && !isset($x439->properties['column'])) {$x439->properties['file'] = '<image>/20_buffer.js';$x439->properties['line'] = 106;$x439->properties['column'] = 13;$x439->attributes['file'] = $x439->attributes['line'] = $x439->attributes['column'] = 0; }
throw new JSException($x439, 106, 13, '<image>/20_buffer.js');
}
unset($x440, $W440, $S440, $U440);
$x441 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 106, 20, '<image>/20_buffer.js');
$x440 =& $x441[0]; list(,$W440,$S440,$U440) = $x441;
unset($x442, $W442, $S442, $U442);
$x443 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x440, JS::toString('buffer', $global), 106, 28, '<image>/20_buffer.js');
$x442 =& $x443[0]; list(,$W442,$S442,$U442) = $x443;
unset($x444, $W444, $S444, $U444);
$x445 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x442, JS::toString('exports', $global), 106, 35, '<image>/20_buffer.js');
$x444 =& $x445[0]; list(,$W444,$S444,$U444) = $x445;
unset($x446, $W446, $S446, $U446);
$x447 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x444, JS::toString('Buffer', $global), 106, 43, '<image>/20_buffer.js');
$x446 =& $x447[0]; list(,$W446,$S446,$U446) = $x447;
$x434 = clone JS::$objectTemplate;
unset($x448, $W448, $S448, $U448);
$x449 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x446, JS::toString('prototype', $global), 106, 9, '<image>/20_buffer.js');
$x448 =& $x449[0]; list(,$W448,$S448,$U448) = $x449;
$x435 = $x448;
$x434->prototype = $x435;
if (!(is_object($x446) && isset($x446->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x452 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 106, 9, '<image>/20_buffer.js');
$_TypeError =& $x452[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x452;
$x453 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x454 = $x453($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x454->class) && $x454->class === 'Error' && !isset($x454->properties['file']) && !isset($x454->properties['line']) && !isset($x454->properties['column'])) {$x454->properties['file'] = '<image>/20_buffer.js';$x454->properties['line'] = 106;$x454->properties['column'] = 9;$x454->attributes['file'] = $x454->attributes['line'] = $x454->attributes['column'] = 0; }
throw new JSException($x454, 106, 9, '<image>/20_buffer.js');
}
$x450 = $x446->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x451 = $x450($global, $x434, $x446, array(substr($leThis->value,$_start,$_end-$_start)), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x435 = $x451;
if (is_object($x435) && $x435 !== JS::$undefined) { $x434 = $x435; }
return $x434;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x431=&$scope->properties[\'arguments\'];$x431->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x431->properties[$i]=$args[$i];$x431->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'slice\']=$fn;$_slice=&$scope->properties[\'slice\'];$global->scope[++$global->scope_sp]=$scope;$x432=JS::toNumber($_start,$global);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x432;$x433=JS::toNumber($_end,$global);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x433;unset($_require,$Wrequire,$Srequire,$Urequire);$x436=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),106,13,\'<image>/20_buffer.js\');$_require=&$x436[0];list(,$Wrequire,$Srequire,$Urequire)=$x436;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x437=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),106,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x437[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x437;$x438=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,13);$x439=$x438($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x439->class)&&$x439->class===\'Error\'&&!isset($x439->properties[\'file\'])&&!isset($x439->properties[\'line\'])&&!isset($x439->properties[\'column\'])){$x439->properties[\'file\']=\'<image>/20_buffer.js\';$x439->properties[\'line\']=106;$x439->properties[\'column\']=13;$x439->attributes[\'file\']=$x439->attributes[\'line\']=$x439->attributes[\'column\']=0;}throw new JSException($x439,106,13,\'<image>/20_buffer.js\');}unset($x440,$W440,$S440,$U440);$x441=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),106,20,\'<image>/20_buffer.js\');$x440=&$x441[0];list(,$W440,$S440,$U440)=$x441;unset($x442,$W442,$S442,$U442);$x443=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x440,JS::toString(\'buffer\',$global),106,28,\'<image>/20_buffer.js\');$x442=&$x443[0];list(,$W442,$S442,$U442)=$x443;unset($x444,$W444,$S444,$U444);$x445=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x442,JS::toString(\'exports\',$global),106,35,\'<image>/20_buffer.js\');$x444=&$x445[0];list(,$W444,$S444,$U444)=$x445;unset($x446,$W446,$S446,$U446);$x447=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x444,JS::toString(\'Buffer\',$global),106,43,\'<image>/20_buffer.js\');$x446=&$x447[0];list(,$W446,$S446,$U446)=$x447;$x434=clone JS::$objectTemplate;unset($x448,$W448,$S448,$U448);$x449=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x446,JS::toString(\'prototype\',$global),106,9,\'<image>/20_buffer.js\');$x448=&$x449[0];list(,$W448,$S448,$U448)=$x449;$x435=$x448;$x434->prototype=$x435;if(!(is_object($x446)&&isset($x446->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x452=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),106,9,\'<image>/20_buffer.js\');$_TypeError=&$x452[0];list(,$WTypeError,$STypeError,$UTypeError)=$x452;$x453=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x454=$x453($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x454->class)&&$x454->class===\'Error\'&&!isset($x454->properties[\'file\'])&&!isset($x454->properties[\'line\'])&&!isset($x454->properties[\'column\'])){$x454->properties[\'file\']=\'<image>/20_buffer.js\';$x454->properties[\'line\']=106;$x454->properties[\'column\']=9;$x454->attributes[\'file\']=$x454->attributes[\'line\']=$x454->attributes[\'column\']=0;}throw new JSException($x454,106,9,\'<image>/20_buffer.js\');}$x450=$x446->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x451=$x450($global,$x434,$x446,array(substr($leThis->value,$_start,$_end-$_start)),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x435=$x451;if(is_object($x435)&&$x435!==JS::$undefined){$x434=$x435;}return$x434;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_13($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x478 = JS::toString($_value, $global);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x478;
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x480 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x480[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x480;
$x481 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x482 = $x481($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x482->class) && $x482->class === 'Error' && !isset($x482->properties['file']) && !isset($x482->properties['line']) && !isset($x482->properties['column'])) {$x482->properties['file'] = '<image>/20_buffer.js';$x482->properties['line'] = 113;$x482->properties['column'] = 25;$x482->attributes['file'] = $x482->attributes['line'] = $x482->attributes['column'] = 0; }
throw new JSException($x482, 113, 25, '<image>/20_buffer.js');
}
$x479 = JS::toObject($_value, $global);
unset($x483, $W483, $S483, $U483);
$x484 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x479, JS::toString('substring', $global), 113, 25, '<image>/20_buffer.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
if (!(is_object($x483) && isset($x483->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x487 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x487[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x487;
$x488 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x489 = $x488($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x489->class) && $x489->class === 'Error' && !isset($x489->properties['file']) && !isset($x489->properties['line']) && !isset($x489->properties['column'])) {$x489->properties['file'] = '<image>/20_buffer.js';$x489->properties['line'] = 113;$x489->properties['column'] = 25;$x489->attributes['file'] = $x489->attributes['line'] = $x489->attributes['column'] = 0; }
throw new JSException($x489, 113, 25, '<image>/20_buffer.js');
}
$x485 = $x483->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x486 = $x485($global, $x479, $x483, array(0, 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x486;
$x490 = $_offset;
if (!JS::toBoolean($x490, $global)) {
$x490 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x490;
$x491 = $_end;
if (!JS::toBoolean($x491, $global)) {
unset($x492, $W492, $S492, $U492);
$x493 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 115, 19, '<image>/20_buffer.js');
$x492 =& $x493[0]; list(,$W492,$S492,$U492) = $x493;
$x491 = $x492; }
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x491;
for ($x494 = 0;; ++$x494) {
if ($x494 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_offset;
}
if ($x494 !== 0) {
$x495 = ++$_i;
}
$x496 = JS::toPrimitive($_i, $global);
$x497 = JS::toPrimitive($_end, $global);
$x498 = (is_string($x496) && is_string($x497) ? strcmp($x496, $x497) < 0 : (!is_nan($x499 = JS::toNumber($x496, $global)) && !is_nan($x500 = JS::toNumber($x497, $global)) && $x499 < $x500));
if (!JS::toBoolean($x498, $global)) { break; }


$leThis->value[$_i] =$_value;;
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x477=&$scope->properties[\'arguments\'];$x477->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x477->properties[$i]=$args[$i];$x477->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'end\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'fill\']=$fn;$_fill=&$scope->properties[\'fill\'];$global->scope[++$global->scope_sp]=$scope;$x478=JS::toString($_value,$global);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x478;if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x480=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,25,\'<image>/20_buffer.js\');$_TypeError=&$x480[0];list(,$WTypeError,$STypeError,$UTypeError)=$x480;$x481=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x482=$x481($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x482->class)&&$x482->class===\'Error\'&&!isset($x482->properties[\'file\'])&&!isset($x482->properties[\'line\'])&&!isset($x482->properties[\'column\'])){$x482->properties[\'file\']=\'<image>/20_buffer.js\';$x482->properties[\'line\']=113;$x482->properties[\'column\']=25;$x482->attributes[\'file\']=$x482->attributes[\'line\']=$x482->attributes[\'column\']=0;}throw new JSException($x482,113,25,\'<image>/20_buffer.js\');}$x479=JS::toObject($_value,$global);unset($x483,$W483,$S483,$U483);$x484=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x479,JS::toString(\'substring\',$global),113,25,\'<image>/20_buffer.js\');$x483=&$x484[0];list(,$W483,$S483,$U483)=$x484;if(!(is_object($x483)&&isset($x483->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x487=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,25,\'<image>/20_buffer.js\');$_TypeError=&$x487[0];list(,$WTypeError,$STypeError,$UTypeError)=$x487;$x488=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x489=$x488($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x489->class)&&$x489->class===\'Error\'&&!isset($x489->properties[\'file\'])&&!isset($x489->properties[\'line\'])&&!isset($x489->properties[\'column\'])){$x489->properties[\'file\']=\'<image>/20_buffer.js\';$x489->properties[\'line\']=113;$x489->properties[\'column\']=25;$x489->attributes[\'file\']=$x489->attributes[\'line\']=$x489->attributes[\'column\']=0;}throw new JSException($x489,113,25,\'<image>/20_buffer.js\');}$x485=$x483->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x486=$x485($global,$x479,$x483,array(0,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x486;$x490=$_offset;if(!JS::toBoolean($x490,$global)){$x490=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x490;$x491=$_end;if(!JS::toBoolean($x491,$global)){unset($x492,$W492,$S492,$U492);$x493=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),115,19,\'<image>/20_buffer.js\');$x492=&$x493[0];list(,$W492,$S492,$U492)=$x493;$x491=$x492;}if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x491;for($x494=0;;++$x494){if($x494===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_offset;}if($x494!==0){$x495=++$_i;}$x496=JS::toPrimitive($_i,$global);$x497=JS::toPrimitive($_end,$global);$x498=(is_string($x496)&&is_string($x497)?strcmp($x496,$x497)<0:(!is_nan($x499=JS::toNumber($x496,$global))&&!is_nan($x500=JS::toNumber($x497,$global))&&$x499<$x500));if(!JS::toBoolean($x498,$global)){break;}$leThis->value[$_i]=$_value;}return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/20_buffer.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/20_buffer.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x84 = clone JS::$functionTemplate; $x84->call = '_f915aaba5b76f6e13a986dca9da58f68_1'; $x84->parameters = array (
  0 => 'x',
); $x84->name = 'Buffer'; $x84->scope = $scope; $x84->properties['prototype'] = clone JS::$objectTemplate; $x84->attributes['prototype'] = JS::WRITABLE; $x84->properties['prototype']->properties['constructor'] = $x84; $x84->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x84->properties['length'] = 1; $x84->attributes['length'] = 0;
$x1->properties['Buffer'] = $x84;
$x1->attributes['Buffer'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['exports'] = $x1;
$x0->attributes['exports'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x85 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 1, 1, '<image>/20_buffer.js');
$_require =& $x85[0]; list(,$Wrequire,$Srequire,$Urequire) = $x85;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x86 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 1, 1, '<image>/20_buffer.js');
$_ReferenceError =& $x86[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x86;
$x87 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 1);
$x88 = $x87($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x88->class) && $x88->class === 'Error' && !isset($x88->properties['file']) && !isset($x88->properties['line']) && !isset($x88->properties['column'])) {$x88->properties['file'] = '<image>/20_buffer.js';$x88->properties['line'] = 1;$x88->properties['column'] = 1;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 1, 1, '<image>/20_buffer.js');
}
unset($x89, $W89, $S89, $U89);
$x90 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 1, 8, '<image>/20_buffer.js');
$x89 =& $x90[0]; list(,$W89,$S89,$U89) = $x90;
$x91 = JS::toString('buffer', $global);
if ($x89 === JS::$undefined || $x89 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x92 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 1, 24, '<image>/20_buffer.js');
$_TypeError =& $x92[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x92;
$x93 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x94 = $x93($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error' && !isset($x94->properties['file']) && !isset($x94->properties['line']) && !isset($x94->properties['column'])) {$x94->properties['file'] = '<image>/20_buffer.js';$x94->properties['line'] = 1;$x94->properties['column'] = 24;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, 1, 24, '<image>/20_buffer.js');
}
$x89 = JS::toObject($x89, $global);
unset($x95, $W95, $S95, $U95);
$x96 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x89, JS::toString($x91, $global), 1, 24, '<image>/20_buffer.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
if ($U95 && (!isset($x89->extensible) || $x89->extensible)) {$x89->properties[$x91] = $x95; $x95 =& $x89->properties[$x91]; $x89->attributes[$x91] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U95 = FALSE; $W95 = TRUE; }
if (isset($x89->class) && $x89->class === 'Array') {  if (isset($x89->properties['length']) && $x89->properties['length'] !== JS::$undefined) { $x98 = $x89->properties['length']; }  else { $x98 = 0; } }
if (isset($S95)) {
$x99 = $S95->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x100 = $x99($global, $x89, $S95, array($x0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x97 = $x100;
} else {
if (!$U95) {$x97 = $x0;if ($W95) { $x95 = $x0; }  }
else { $x97 = JS::$undefined; }
}
if (isset($x89->class) && $x89->class === 'Array') {if (is_int('buffer') && 'buffer' >= $x89->properties['length']) { $x89->properties['length'] = 'buffer' + 1; }else if ($x91 === 'length' && is_int($x0) && $x98 > $x0) {  for ($i = $x0; $i < $x98; ++$i) {  unset($x89->properties[$i], $x89->attributes[$i]); }}};
$x103 = clone JS::$functionTemplate; $x103->call = '_f915aaba5b76f6e13a986dca9da58f68_5'; $x103->parameters = array (
  0 => 'buf',
); $x103->name = 'isBuffer'; $x103->scope = $scope; $x103->properties['prototype'] = clone JS::$objectTemplate; $x103->attributes['prototype'] = JS::WRITABLE; $x103->properties['prototype']->properties['constructor'] = $x103; $x103->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x103->properties['length'] = 1; $x103->attributes['length'] = 0;
unset($x104, $W104, $S104, $U104);
$x105 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 32, 8, '<image>/20_buffer.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
unset($x106, $W106, $S106, $U106);
$x107 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x104, JS::toString('buffer', $global), 32, 16, '<image>/20_buffer.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
unset($x108, $W108, $S108, $U108);
$x109 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x106, JS::toString('exports', $global), 32, 23, '<image>/20_buffer.js');
$x108 =& $x109[0]; list(,$W108,$S108,$U108) = $x109;
unset($x110, $W110, $S110, $U110);
$x111 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x108, JS::toString('Buffer', $global), 32, 31, '<image>/20_buffer.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
$x112 = JS::toString('isBuffer', $global);
if ($x110 === JS::$undefined || $x110 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x113 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 32, 48, '<image>/20_buffer.js');
$_TypeError =& $x113[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x113;
$x114 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x115 = $x114($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x115->class) && $x115->class === 'Error' && !isset($x115->properties['file']) && !isset($x115->properties['line']) && !isset($x115->properties['column'])) {$x115->properties['file'] = '<image>/20_buffer.js';$x115->properties['line'] = 32;$x115->properties['column'] = 48;$x115->attributes['file'] = $x115->attributes['line'] = $x115->attributes['column'] = 0; }
throw new JSException($x115, 32, 48, '<image>/20_buffer.js');
}
$x110 = JS::toObject($x110, $global);
unset($x116, $W116, $S116, $U116);
$x117 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x110, JS::toString($x112, $global), 32, 48, '<image>/20_buffer.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
if ($U116 && (!isset($x110->extensible) || $x110->extensible)) {$x110->properties[$x112] = $x116; $x116 =& $x110->properties[$x112]; $x110->attributes[$x112] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U116 = FALSE; $W116 = TRUE; }
if (isset($x110->class) && $x110->class === 'Array') {  if (isset($x110->properties['length']) && $x110->properties['length'] !== JS::$undefined) { $x119 = $x110->properties['length']; }  else { $x119 = 0; } }
if (isset($S116)) {
$x120 = $S116->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x121 = $x120($global, $x110, $S116, array($x103), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x118 = $x121;
} else {
if (!$U116) {$x118 = $x103;if ($W116) { $x116 = $x103; }  }
else { $x118 = JS::$undefined; }
}
if (isset($x110->class) && $x110->class === 'Array') {if (is_int('isBuffer') && 'isBuffer' >= $x110->properties['length']) { $x110->properties['length'] = 'isBuffer' + 1; }else if ($x112 === 'length' && is_int($x103) && $x119 > $x103) {  for ($i = $x103; $i < $x119; ++$i) {  unset($x110->properties[$i], $x110->attributes[$i]); }}};
$x124 = clone JS::$functionTemplate; $x124->call = '_f915aaba5b76f6e13a986dca9da58f68_6'; $x124->parameters = array (
  0 => 'string',
); $x124->name = 'byteLength'; $x124->scope = $scope; $x124->properties['prototype'] = clone JS::$objectTemplate; $x124->attributes['prototype'] = JS::WRITABLE; $x124->properties['prototype']->properties['constructor'] = $x124; $x124->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x124->properties['length'] = 1; $x124->attributes['length'] = 0;
unset($x125, $W125, $S125, $U125);
$x126 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 36, 8, '<image>/20_buffer.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
unset($x127, $W127, $S127, $U127);
$x128 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x125, JS::toString('buffer', $global), 36, 16, '<image>/20_buffer.js');
$x127 =& $x128[0]; list(,$W127,$S127,$U127) = $x128;
unset($x129, $W129, $S129, $U129);
$x130 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x127, JS::toString('exports', $global), 36, 23, '<image>/20_buffer.js');
$x129 =& $x130[0]; list(,$W129,$S129,$U129) = $x130;
unset($x131, $W131, $S131, $U131);
$x132 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x129, JS::toString('Buffer', $global), 36, 31, '<image>/20_buffer.js');
$x131 =& $x132[0]; list(,$W131,$S131,$U131) = $x132;
$x133 = JS::toString('byteLength', $global);
if ($x131 === JS::$undefined || $x131 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x134 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 36, 50, '<image>/20_buffer.js');
$_TypeError =& $x134[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x134;
$x135 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x136 = $x135($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error' && !isset($x136->properties['file']) && !isset($x136->properties['line']) && !isset($x136->properties['column'])) {$x136->properties['file'] = '<image>/20_buffer.js';$x136->properties['line'] = 36;$x136->properties['column'] = 50;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 36, 50, '<image>/20_buffer.js');
}
$x131 = JS::toObject($x131, $global);
unset($x137, $W137, $S137, $U137);
$x138 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x131, JS::toString($x133, $global), 36, 50, '<image>/20_buffer.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
if ($U137 && (!isset($x131->extensible) || $x131->extensible)) {$x131->properties[$x133] = $x137; $x137 =& $x131->properties[$x133]; $x131->attributes[$x133] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U137 = FALSE; $W137 = TRUE; }
if (isset($x131->class) && $x131->class === 'Array') {  if (isset($x131->properties['length']) && $x131->properties['length'] !== JS::$undefined) { $x140 = $x131->properties['length']; }  else { $x140 = 0; } }
if (isset($S137)) {
$x141 = $S137->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x142 = $x141($global, $x131, $S137, array($x124), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x139 = $x142;
} else {
if (!$U137) {$x139 = $x124;if ($W137) { $x137 = $x124; }  }
else { $x139 = JS::$undefined; }
}
if (isset($x131->class) && $x131->class === 'Array') {if (is_int('byteLength') && 'byteLength' >= $x131->properties['length']) { $x131->properties['length'] = 'byteLength' + 1; }else if ($x133 === 'length' && is_int($x124) && $x140 > $x124) {  for ($i = $x124; $i < $x140; ++$i) {  unset($x131->properties[$i], $x131->attributes[$i]); }}};
$x269 = clone JS::$functionTemplate; $x269->call = '_f915aaba5b76f6e13a986dca9da58f68_7'; $x269->parameters = array (
  0 => 'list',
  1 => 'totalLength',
); $x269->name = 'concat'; $x269->scope = $scope; $x269->properties['prototype'] = clone JS::$objectTemplate; $x269->attributes['prototype'] = JS::WRITABLE; $x269->properties['prototype']->properties['constructor'] = $x269; $x269->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x269->properties['length'] = 2; $x269->attributes['length'] = 0;
unset($x270, $W270, $S270, $U270);
$x271 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 40, 8, '<image>/20_buffer.js');
$x270 =& $x271[0]; list(,$W270,$S270,$U270) = $x271;
unset($x272, $W272, $S272, $U272);
$x273 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x270, JS::toString('buffer', $global), 40, 16, '<image>/20_buffer.js');
$x272 =& $x273[0]; list(,$W272,$S272,$U272) = $x273;
unset($x274, $W274, $S274, $U274);
$x275 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x272, JS::toString('exports', $global), 40, 23, '<image>/20_buffer.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
unset($x276, $W276, $S276, $U276);
$x277 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x274, JS::toString('Buffer', $global), 40, 31, '<image>/20_buffer.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
$x278 = JS::toString('concat', $global);
if ($x276 === JS::$undefined || $x276 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x279 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 40, 46, '<image>/20_buffer.js');
$_TypeError =& $x279[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x279;
$x280 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x281 = $x280($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x281->class) && $x281->class === 'Error' && !isset($x281->properties['file']) && !isset($x281->properties['line']) && !isset($x281->properties['column'])) {$x281->properties['file'] = '<image>/20_buffer.js';$x281->properties['line'] = 40;$x281->properties['column'] = 46;$x281->attributes['file'] = $x281->attributes['line'] = $x281->attributes['column'] = 0; }
throw new JSException($x281, 40, 46, '<image>/20_buffer.js');
}
$x276 = JS::toObject($x276, $global);
unset($x282, $W282, $S282, $U282);
$x283 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x276, JS::toString($x278, $global), 40, 46, '<image>/20_buffer.js');
$x282 =& $x283[0]; list(,$W282,$S282,$U282) = $x283;
if ($U282 && (!isset($x276->extensible) || $x276->extensible)) {$x276->properties[$x278] = $x282; $x282 =& $x276->properties[$x278]; $x276->attributes[$x278] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U282 = FALSE; $W282 = TRUE; }
if (isset($x276->class) && $x276->class === 'Array') {  if (isset($x276->properties['length']) && $x276->properties['length'] !== JS::$undefined) { $x285 = $x276->properties['length']; }  else { $x285 = 0; } }
if (isset($S282)) {
$x286 = $S282->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x287 = $x286($global, $x276, $S282, array($x269), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x284 = $x287;
} else {
if (!$U282) {$x284 = $x269;if ($W282) { $x282 = $x269; }  }
else { $x284 = JS::$undefined; }
}
if (isset($x276->class) && $x276->class === 'Array') {if (is_int('concat') && 'concat' >= $x276->properties['length']) { $x276->properties['length'] = 'concat' + 1; }else if ($x278 === 'length' && is_int($x269) && $x285 > $x269) {  for ($i = $x269; $i < $x285; ++$i) {  unset($x276->properties[$i], $x276->attributes[$i]); }}};
$x312 = clone JS::$functionTemplate; $x312->call = '_f915aaba5b76f6e13a986dca9da58f68_8'; $x312->parameters = array (
  0 => 'string',
  1 => 'offset',
  2 => 'length',
  3 => 'encoding',
); $x312->name = 'write'; $x312->scope = $scope; $x312->properties['prototype'] = clone JS::$objectTemplate; $x312->attributes['prototype'] = JS::WRITABLE; $x312->properties['prototype']->properties['constructor'] = $x312; $x312->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x312->properties['length'] = 4; $x312->attributes['length'] = 0;
unset($x313, $W313, $S313, $U313);
$x314 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 70, 8, '<image>/20_buffer.js');
$x313 =& $x314[0]; list(,$W313,$S313,$U313) = $x314;
unset($x315, $W315, $S315, $U315);
$x316 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x313, JS::toString('buffer', $global), 70, 16, '<image>/20_buffer.js');
$x315 =& $x316[0]; list(,$W315,$S315,$U315) = $x316;
unset($x317, $W317, $S317, $U317);
$x318 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x315, JS::toString('exports', $global), 70, 23, '<image>/20_buffer.js');
$x317 =& $x318[0]; list(,$W317,$S317,$U317) = $x318;
unset($x319, $W319, $S319, $U319);
$x320 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x317, JS::toString('Buffer', $global), 70, 31, '<image>/20_buffer.js');
$x319 =& $x320[0]; list(,$W319,$S319,$U319) = $x320;
unset($x321, $W321, $S321, $U321);
$x322 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x319, JS::toString('prototype', $global), 70, 38, '<image>/20_buffer.js');
$x321 =& $x322[0]; list(,$W321,$S321,$U321) = $x322;
$x323 = JS::toString('write', $global);
if ($x321 === JS::$undefined || $x321 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x324 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 70, 55, '<image>/20_buffer.js');
$_TypeError =& $x324[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x324;
$x325 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x326 = $x325($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x326->class) && $x326->class === 'Error' && !isset($x326->properties['file']) && !isset($x326->properties['line']) && !isset($x326->properties['column'])) {$x326->properties['file'] = '<image>/20_buffer.js';$x326->properties['line'] = 70;$x326->properties['column'] = 55;$x326->attributes['file'] = $x326->attributes['line'] = $x326->attributes['column'] = 0; }
throw new JSException($x326, 70, 55, '<image>/20_buffer.js');
}
$x321 = JS::toObject($x321, $global);
unset($x327, $W327, $S327, $U327);
$x328 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x321, JS::toString($x323, $global), 70, 55, '<image>/20_buffer.js');
$x327 =& $x328[0]; list(,$W327,$S327,$U327) = $x328;
if ($U327 && (!isset($x321->extensible) || $x321->extensible)) {$x321->properties[$x323] = $x327; $x327 =& $x321->properties[$x323]; $x321->attributes[$x323] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U327 = FALSE; $W327 = TRUE; }
if (isset($x321->class) && $x321->class === 'Array') {  if (isset($x321->properties['length']) && $x321->properties['length'] !== JS::$undefined) { $x330 = $x321->properties['length']; }  else { $x330 = 0; } }
if (isset($S327)) {
$x331 = $S327->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x332 = $x331($global, $x321, $S327, array($x312), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x329 = $x332;
} else {
if (!$U327) {$x329 = $x312;if ($W327) { $x327 = $x312; }  }
else { $x329 = JS::$undefined; }
}
if (isset($x321->class) && $x321->class === 'Array') {if (is_int('write') && 'write' >= $x321->properties['length']) { $x321->properties['length'] = 'write' + 1; }else if ($x323 === 'length' && is_int($x312) && $x330 > $x312) {  for ($i = $x312; $i < $x330; ++$i) {  unset($x321->properties[$i], $x321->attributes[$i]); }}};
$x335 = clone JS::$functionTemplate; $x335->call = '_f915aaba5b76f6e13a986dca9da58f68_10'; $x335->parameters = array (
); $x335->name = 'toString'; $x335->scope = $scope; $x335->properties['prototype'] = clone JS::$objectTemplate; $x335->attributes['prototype'] = JS::WRITABLE; $x335->properties['prototype']->properties['constructor'] = $x335; $x335->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x335->properties['length'] = 0; $x335->attributes['length'] = 0;
unset($x336, $W336, $S336, $U336);
$x337 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 86, 8, '<image>/20_buffer.js');
$x336 =& $x337[0]; list(,$W336,$S336,$U336) = $x337;
unset($x338, $W338, $S338, $U338);
$x339 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x336, JS::toString('buffer', $global), 86, 16, '<image>/20_buffer.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
unset($x340, $W340, $S340, $U340);
$x341 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x338, JS::toString('exports', $global), 86, 23, '<image>/20_buffer.js');
$x340 =& $x341[0]; list(,$W340,$S340,$U340) = $x341;
unset($x342, $W342, $S342, $U342);
$x343 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x340, JS::toString('Buffer', $global), 86, 31, '<image>/20_buffer.js');
$x342 =& $x343[0]; list(,$W342,$S342,$U342) = $x343;
unset($x344, $W344, $S344, $U344);
$x345 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x342, JS::toString('prototype', $global), 86, 38, '<image>/20_buffer.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
$x346 = JS::toString('toString', $global);
if ($x344 === JS::$undefined || $x344 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x347 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 86, 58, '<image>/20_buffer.js');
$_TypeError =& $x347[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x347;
$x348 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x349 = $x348($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x349->class) && $x349->class === 'Error' && !isset($x349->properties['file']) && !isset($x349->properties['line']) && !isset($x349->properties['column'])) {$x349->properties['file'] = '<image>/20_buffer.js';$x349->properties['line'] = 86;$x349->properties['column'] = 58;$x349->attributes['file'] = $x349->attributes['line'] = $x349->attributes['column'] = 0; }
throw new JSException($x349, 86, 58, '<image>/20_buffer.js');
}
$x344 = JS::toObject($x344, $global);
unset($x350, $W350, $S350, $U350);
$x351 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x344, JS::toString($x346, $global), 86, 58, '<image>/20_buffer.js');
$x350 =& $x351[0]; list(,$W350,$S350,$U350) = $x351;
if ($U350 && (!isset($x344->extensible) || $x344->extensible)) {$x344->properties[$x346] = $x350; $x350 =& $x344->properties[$x346]; $x344->attributes[$x346] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U350 = FALSE; $W350 = TRUE; }
if (isset($x344->class) && $x344->class === 'Array') {  if (isset($x344->properties['length']) && $x344->properties['length'] !== JS::$undefined) { $x353 = $x344->properties['length']; }  else { $x353 = 0; } }
if (isset($S350)) {
$x354 = $S350->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x355 = $x354($global, $x344, $S350, array($x335), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x352 = $x355;
} else {
if (!$U350) {$x352 = $x335;if ($W350) { $x350 = $x335; }  }
else { $x352 = JS::$undefined; }
}
if (isset($x344->class) && $x344->class === 'Array') {if (is_int('toString') && 'toString' >= $x344->properties['length']) { $x344->properties['length'] = 'toString' + 1; }else if ($x346 === 'length' && is_int($x335) && $x353 > $x335) {  for ($i = $x335; $i < $x353; ++$i) {  unset($x344->properties[$i], $x344->attributes[$i]); }}};
$x409 = clone JS::$functionTemplate; $x409->call = '_f915aaba5b76f6e13a986dca9da58f68_11'; $x409->parameters = array (
  0 => 'targetBuffer',
  1 => 'targetStart',
  2 => 'sourceStart',
  3 => 'sourceEnd',
); $x409->name = 'copy'; $x409->scope = $scope; $x409->properties['prototype'] = clone JS::$objectTemplate; $x409->attributes['prototype'] = JS::WRITABLE; $x409->properties['prototype']->properties['constructor'] = $x409; $x409->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x409->properties['length'] = 4; $x409->attributes['length'] = 0;
unset($x410, $W410, $S410, $U410);
$x411 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 90, 8, '<image>/20_buffer.js');
$x410 =& $x411[0]; list(,$W410,$S410,$U410) = $x411;
unset($x412, $W412, $S412, $U412);
$x413 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x410, JS::toString('buffer', $global), 90, 16, '<image>/20_buffer.js');
$x412 =& $x413[0]; list(,$W412,$S412,$U412) = $x413;
unset($x414, $W414, $S414, $U414);
$x415 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x412, JS::toString('exports', $global), 90, 23, '<image>/20_buffer.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
unset($x416, $W416, $S416, $U416);
$x417 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x414, JS::toString('Buffer', $global), 90, 31, '<image>/20_buffer.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
unset($x418, $W418, $S418, $U418);
$x419 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x416, JS::toString('prototype', $global), 90, 38, '<image>/20_buffer.js');
$x418 =& $x419[0]; list(,$W418,$S418,$U418) = $x419;
$x420 = JS::toString('copy', $global);
if ($x418 === JS::$undefined || $x418 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 54, '<image>/20_buffer.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
$x422 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x423 = $x422($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error' && !isset($x423->properties['file']) && !isset($x423->properties['line']) && !isset($x423->properties['column'])) {$x423->properties['file'] = '<image>/20_buffer.js';$x423->properties['line'] = 90;$x423->properties['column'] = 54;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 90, 54, '<image>/20_buffer.js');
}
$x418 = JS::toObject($x418, $global);
unset($x424, $W424, $S424, $U424);
$x425 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x418, JS::toString($x420, $global), 90, 54, '<image>/20_buffer.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if ($U424 && (!isset($x418->extensible) || $x418->extensible)) {$x418->properties[$x420] = $x424; $x424 =& $x418->properties[$x420]; $x418->attributes[$x420] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U424 = FALSE; $W424 = TRUE; }
if (isset($x418->class) && $x418->class === 'Array') {  if (isset($x418->properties['length']) && $x418->properties['length'] !== JS::$undefined) { $x427 = $x418->properties['length']; }  else { $x427 = 0; } }
if (isset($S424)) {
$x428 = $S424->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x429 = $x428($global, $x418, $S424, array($x409), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x426 = $x429;
} else {
if (!$U424) {$x426 = $x409;if ($W424) { $x424 = $x409; }  }
else { $x426 = JS::$undefined; }
}
if (isset($x418->class) && $x418->class === 'Array') {if (is_int('copy') && 'copy' >= $x418->properties['length']) { $x418->properties['length'] = 'copy' + 1; }else if ($x420 === 'length' && is_int($x409) && $x427 > $x409) {  for ($i = $x409; $i < $x427; ++$i) {  unset($x418->properties[$i], $x418->attributes[$i]); }}};
$x455 = clone JS::$functionTemplate; $x455->call = '_f915aaba5b76f6e13a986dca9da58f68_12'; $x455->parameters = array (
  0 => 'start',
  1 => 'end',
); $x455->name = 'slice'; $x455->scope = $scope; $x455->properties['prototype'] = clone JS::$objectTemplate; $x455->attributes['prototype'] = JS::WRITABLE; $x455->properties['prototype']->properties['constructor'] = $x455; $x455->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x455->properties['length'] = 2; $x455->attributes['length'] = 0;
unset($x456, $W456, $S456, $U456);
$x457 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 102, 8, '<image>/20_buffer.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
unset($x458, $W458, $S458, $U458);
$x459 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x456, JS::toString('buffer', $global), 102, 16, '<image>/20_buffer.js');
$x458 =& $x459[0]; list(,$W458,$S458,$U458) = $x459;
unset($x460, $W460, $S460, $U460);
$x461 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x458, JS::toString('exports', $global), 102, 23, '<image>/20_buffer.js');
$x460 =& $x461[0]; list(,$W460,$S460,$U460) = $x461;
unset($x462, $W462, $S462, $U462);
$x463 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x460, JS::toString('Buffer', $global), 102, 31, '<image>/20_buffer.js');
$x462 =& $x463[0]; list(,$W462,$S462,$U462) = $x463;
unset($x464, $W464, $S464, $U464);
$x465 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x462, JS::toString('prototype', $global), 102, 38, '<image>/20_buffer.js');
$x464 =& $x465[0]; list(,$W464,$S464,$U464) = $x465;
$x466 = JS::toString('slice', $global);
if ($x464 === JS::$undefined || $x464 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x467 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 102, 55, '<image>/20_buffer.js');
$_TypeError =& $x467[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x467;
$x468 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x469 = $x468($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x469->class) && $x469->class === 'Error' && !isset($x469->properties['file']) && !isset($x469->properties['line']) && !isset($x469->properties['column'])) {$x469->properties['file'] = '<image>/20_buffer.js';$x469->properties['line'] = 102;$x469->properties['column'] = 55;$x469->attributes['file'] = $x469->attributes['line'] = $x469->attributes['column'] = 0; }
throw new JSException($x469, 102, 55, '<image>/20_buffer.js');
}
$x464 = JS::toObject($x464, $global);
unset($x470, $W470, $S470, $U470);
$x471 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x464, JS::toString($x466, $global), 102, 55, '<image>/20_buffer.js');
$x470 =& $x471[0]; list(,$W470,$S470,$U470) = $x471;
if ($U470 && (!isset($x464->extensible) || $x464->extensible)) {$x464->properties[$x466] = $x470; $x470 =& $x464->properties[$x466]; $x464->attributes[$x466] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U470 = FALSE; $W470 = TRUE; }
if (isset($x464->class) && $x464->class === 'Array') {  if (isset($x464->properties['length']) && $x464->properties['length'] !== JS::$undefined) { $x473 = $x464->properties['length']; }  else { $x473 = 0; } }
if (isset($S470)) {
$x474 = $S470->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x475 = $x474($global, $x464, $S470, array($x455), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x472 = $x475;
} else {
if (!$U470) {$x472 = $x455;if ($W470) { $x470 = $x455; }  }
else { $x472 = JS::$undefined; }
}
if (isset($x464->class) && $x464->class === 'Array') {if (is_int('slice') && 'slice' >= $x464->properties['length']) { $x464->properties['length'] = 'slice' + 1; }else if ($x466 === 'length' && is_int($x455) && $x473 > $x455) {  for ($i = $x455; $i < $x473; ++$i) {  unset($x464->properties[$i], $x464->attributes[$i]); }}};
$x501 = clone JS::$functionTemplate; $x501->call = '_f915aaba5b76f6e13a986dca9da58f68_13'; $x501->parameters = array (
  0 => 'value',
  1 => 'offset',
  2 => 'end',
); $x501->name = 'fill'; $x501->scope = $scope; $x501->properties['prototype'] = clone JS::$objectTemplate; $x501->attributes['prototype'] = JS::WRITABLE; $x501->properties['prototype']->properties['constructor'] = $x501; $x501->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x501->properties['length'] = 3; $x501->attributes['length'] = 0;
unset($x502, $W502, $S502, $U502);
$x503 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 111, 8, '<image>/20_buffer.js');
$x502 =& $x503[0]; list(,$W502,$S502,$U502) = $x503;
unset($x504, $W504, $S504, $U504);
$x505 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x502, JS::toString('buffer', $global), 111, 16, '<image>/20_buffer.js');
$x504 =& $x505[0]; list(,$W504,$S504,$U504) = $x505;
unset($x506, $W506, $S506, $U506);
$x507 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x504, JS::toString('exports', $global), 111, 23, '<image>/20_buffer.js');
$x506 =& $x507[0]; list(,$W506,$S506,$U506) = $x507;
unset($x508, $W508, $S508, $U508);
$x509 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x506, JS::toString('Buffer', $global), 111, 31, '<image>/20_buffer.js');
$x508 =& $x509[0]; list(,$W508,$S508,$U508) = $x509;
unset($x510, $W510, $S510, $U510);
$x511 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x508, JS::toString('prototype', $global), 111, 38, '<image>/20_buffer.js');
$x510 =& $x511[0]; list(,$W510,$S510,$U510) = $x511;
$x512 = JS::toString('fill', $global);
if ($x510 === JS::$undefined || $x510 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x513 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 111, 54, '<image>/20_buffer.js');
$_TypeError =& $x513[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x513;
$x514 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x515 = $x514($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x515->class) && $x515->class === 'Error' && !isset($x515->properties['file']) && !isset($x515->properties['line']) && !isset($x515->properties['column'])) {$x515->properties['file'] = '<image>/20_buffer.js';$x515->properties['line'] = 111;$x515->properties['column'] = 54;$x515->attributes['file'] = $x515->attributes['line'] = $x515->attributes['column'] = 0; }
throw new JSException($x515, 111, 54, '<image>/20_buffer.js');
}
$x510 = JS::toObject($x510, $global);
unset($x516, $W516, $S516, $U516);
$x517 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x510, JS::toString($x512, $global), 111, 54, '<image>/20_buffer.js');
$x516 =& $x517[0]; list(,$W516,$S516,$U516) = $x517;
if ($U516 && (!isset($x510->extensible) || $x510->extensible)) {$x510->properties[$x512] = $x516; $x516 =& $x510->properties[$x512]; $x510->attributes[$x512] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U516 = FALSE; $W516 = TRUE; }
if (isset($x510->class) && $x510->class === 'Array') {  if (isset($x510->properties['length']) && $x510->properties['length'] !== JS::$undefined) { $x519 = $x510->properties['length']; }  else { $x519 = 0; } }
if (isset($S516)) {
$x520 = $S516->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x521 = $x520($global, $x510, $S516, array($x501), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x518 = $x521;
} else {
if (!$U516) {$x518 = $x501;if ($W516) { $x516 = $x501; }  }
else { $x518 = JS::$undefined; }
}
if (isset($x510->class) && $x510->class === 'Array') {if (is_int('fill') && 'fill' >= $x510->properties['length']) { $x510->properties['length'] = 'fill' + 1; }else if ($x512 === 'length' && is_int($x501) && $x519 > $x501) {  for ($i = $x501; $i < $x519; ++$i) {  unset($x510->properties[$i], $x510->attributes[$i]); }}};
;
return JS::$undefined;
}
