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
if (isset($S75)) {
$x81 = $S75->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 24, 15);
$x82 = $x81($global, $_buf, $S75, array($x70), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x80 = $x82;
} else {
if (!$U75) {$x80 = $x70;if ($W75) { $x75 = $x70; }  }
else { $x80 = JS::$undefined; }
}
if (isset($_buf->class) && $_buf->class === 'Array' &&  is_int('length') && 'length' >= $_buf->properties['length']) { $_buf->properties['length'] = 'length' + 1; };
$_buf->attributes['length'] = 0;
return $_buf;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'Buffer\']=$fn;$_Buffer=&$scope->properties[\'Buffer\'];$global->scope[++$global->scope_sp]=$scope;unset($_Object,$WObject,$SObject,$UObject);$x6=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Object\',$global),4,14,\'<image>/20_buffer.js\');$_Object=&$x6[0];list(,$WObject,$SObject,$UObject)=$x6;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x7=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),4,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x7[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x7;$x8=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,14);$x9=$x8($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/20_buffer.js\';$x9->properties[\'line\']=4;$x9->properties[\'column\']=14;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,4,14,\'<image>/20_buffer.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),4,27,\'<image>/20_buffer.js\');$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x13=$x12($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/20_buffer.js\';$x13->properties[\'line\']=4;$x13->properties[\'column\']=27;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,4,27,\'<image>/20_buffer.js\');}$x10=JS::toObject($_Object,$global);unset($x14,$W14,$S14,$U14);$x20=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x10,JS::toString(\'create\',$global),4,27,\'<image>/20_buffer.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;unset($x21,$W21,$S21,$U21);$x22=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_Buffer,JS::toString(\'prototype\',$global),4,34,\'<image>/20_buffer.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;if(!(is_object($x14)&&isset($x14->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),4,27,\'<image>/20_buffer.js\');$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x27=$x26($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/20_buffer.js\';$x27->properties[\'line\']=4;$x27->properties[\'column\']=27;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,4,27,\'<image>/20_buffer.js\');}$x23=$x14->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',4,27);$x24=$x23($global,$x10,$x14,array($x21),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x24;$_buf->class=\'Buffer\';$x29=$_x;$x29=($x29===JS::$undefined?\'undefined\':(is_int($x29)||is_float($x29)?\'number\':(is_bool($x29)?\'boolean\':(is_string($x29)?\'string\':(is_object($x29)&&isset($x29->call)?\'function\':\'object\')))));$x28=(((gettype($x29)===gettype(\'number\')&&$x29===\'number\'))||(((is_float($x29)||is_int($x29))&&(is_float(\'number\')||is_int(\'number\')))&&$x29==\'number\'));if(JS::toBoolean($x28,$global)){$_buf->value=str_repeat(chr(0),$_x);}else{$x31=$_x;$x31=($x31===JS::$undefined?\'undefined\':(is_int($x31)||is_float($x31)?\'number\':(is_bool($x31)?\'boolean\':(is_string($x31)?\'string\':(is_object($x31)&&isset($x31->call)?\'function\':\'object\')))));$x30=(((gettype($x31)===gettype(\'string\')&&$x31===\'string\'))||(((is_float($x31)||is_int($x31))&&(is_float(\'string\')||is_int(\'string\')))&&$x31==\'string\'));if(JS::toBoolean($x30,$global)){$_buf->value=$_x;}else{unset($_Array,$WArray,$SArray,$UArray);$x32=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Array\',$global),13,15,\'<image>/20_buffer.js\');$_Array=&$x32[0];list(,$WArray,$SArray,$UArray)=$x32;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x33=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),13,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x33[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x33;$x34=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,15);$x35=$x34($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/20_buffer.js\';$x35->properties[\'line\']=13;$x35->properties[\'column\']=15;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,13,15,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x37=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),13,28,\'<image>/20_buffer.js\');$_TypeError=&$x37[0];list(,$WTypeError,$STypeError,$UTypeError)=$x37;$x38=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x39=$x38($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=\'<image>/20_buffer.js\';$x39->properties[\'line\']=13;$x39->properties[\'column\']=28;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,13,28,\'<image>/20_buffer.js\');}$x36=JS::toObject($_Array,$global);unset($x40,$W40,$S40,$U40);$x41=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x36,JS::toString(\'isArray\',$global),13,28,\'<image>/20_buffer.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if(!(is_object($x40)&&isset($x40->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x44=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),13,28,\'<image>/20_buffer.js\');$_TypeError=&$x44[0];list(,$WTypeError,$STypeError,$UTypeError)=$x44;$x45=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x46=$x45($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/20_buffer.js\';$x46->properties[\'line\']=13;$x46->properties[\'column\']=28;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,13,28,\'<image>/20_buffer.js\');}$x42=$x40->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',13,28);$x43=$x42($global,$x36,$x40,array($_x),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x43,$global)){$_buf->value="";for($x47=0;;++$x47){if($x47===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x48,$W48,$S48,$U48);$x49=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,JS::toString(\'length\',$global),15,26,\'<image>/20_buffer.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x48;$scope->properties[\'octet\']=JS::$undefined;$_octet=&$scope->properties[\'octet\'];$Uoctet=FALSE;$_octet=JS::$undefined;}if($x47!==0){$x50=++$_i;}$x51=JS::toPrimitive($_i,$global);$x52=JS::toPrimitive($_l,$global);$x53=(is_string($x51)&&is_string($x52)?strcmp($x51,$x52)<0:(!is_nan($x54=JS::toNumber($x51,$global))&&!is_nan($x55=JS::toNumber($x52,$global))&&$x54<$x55));if(!JS::toBoolean($x53,$global)){break;}unset($x56,$W56,$S56,$U56);$x57=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_x,JS::toString($_i,$global),16,15,\'<image>/20_buffer.js\');$x56=&$x57[0];list(,$W56,$S56,$U56)=$x57;if($Uoctet){$global->properties[\'octet\']=$_octet;$_octet=&$global->properties[\'octet\'];}$_octet=$x56;$_buf->value.=chr($_octet);}}else{unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x60=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),21,15,\'<image>/20_buffer.js\');$_TypeError=&$x60[0];list(,$WTypeError,$STypeError,$UTypeError)=$x60;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x61=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),21,15,\'<image>/20_buffer.js\');$_ReferenceError=&$x61[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x61;$x62=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,15);$x63=$x62($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/20_buffer.js\';$x63->properties[\'line\']=21;$x63->properties[\'column\']=15;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,21,15,\'<image>/20_buffer.js\');}$x58=clone JS::$objectTemplate;unset($x64,$W64,$S64,$U64);$x65=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),21,11,\'<image>/20_buffer.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;$x59=$x64;$x58->prototype=$x59;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x68=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x69=$x68($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x69->class)&&$x69->class===\'Error\'&&!isset($x69->properties[\'file\'])&&!isset($x69->properties[\'line\'])&&!isset($x69->properties[\'column\'])){$x69->properties[\'file\']=\'<image>/20_buffer.js\';$x69->properties[\'line\']=21;$x69->properties[\'column\']=11;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,21,11,\'<image>/20_buffer.js\');}$x66=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',21,11);$x67=$x66($global,$x58,$_TypeError,array(\'Given argument is not a number, a string, or an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x59=$x67;if(is_object($x59)&&$x59!==JS::$undefined){$x58=$x59;}if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/20_buffer.js\';$x58->properties[\'line\']=21;$x58->properties[\'column\']=5;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,21,5,\'<image>/20_buffer.js\');}}}$x70=strlen($_buf->value);$x71=JS::toString(\'length\',$global);if($_buf===JS::$undefined||$_buf===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x72=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),24,15,\'<image>/20_buffer.js\');$_TypeError=&$x72[0];list(,$WTypeError,$STypeError,$UTypeError)=$x72;$x73=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x74=$x73($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'&&!isset($x74->properties[\'file\'])&&!isset($x74->properties[\'line\'])&&!isset($x74->properties[\'column\'])){$x74->properties[\'file\']=\'<image>/20_buffer.js\';$x74->properties[\'line\']=24;$x74->properties[\'column\']=15;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,24,15,\'<image>/20_buffer.js\');}$_buf=JS::toObject($_buf,$global);unset($x75,$W75,$S75,$U75);$x79=_f915aaba5b76f6e13a986dca9da58f68_4($global,$scope,$_buf,JS::toString($x71,$global),24,15,\'<image>/20_buffer.js\');$x75=&$x79[0];list(,$W75,$S75,$U75)=$x79;if($U75&&(!isset($_buf->extensible)||$_buf->extensible)){$_buf->properties[$x71]=$x75;$x75=&$_buf->properties[$x71];$_buf->attributes[$x71]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U75=FALSE;$W75=TRUE;}if(isset($S75)){$x81=$S75->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',24,15);$x82=$x81($global,$_buf,$S75,array($x70),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x80=$x82;}else{if(!$U75){$x80=$x70;if($W75){$x75=$x70;}}else{$x80=JS::$undefined;}}if(isset($_buf->class)&&$_buf->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_buf->properties[\'length\']){$_buf->properties[\'length\']=\'length\'+1;}$_buf->attributes[\'length\']=0;return$_buf;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x100 =& $scope->properties['arguments'];
$x100->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x100->properties[$i] = $args[$i];
$x100->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _f915aaba5b76f6e13a986dca9da58f68_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x100=&$scope->properties[\'arguments\'];$x100->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x100->properties[$i]=$args[$i];$x100->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'buf\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$scope->properties[\'isBuffer\']=$fn;$_isBuffer=&$scope->properties[\'isBuffer\'];$global->scope[++$global->scope_sp]=$scope;return isset($_buf->class)&&$_buf->class===\'Buffer\';return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['byteLength'] = $fn;
$_byteLength =& $scope->properties['byteLength'];
$global->scope[++$global->scope_sp] = $scope;
return strlen(JS::toString($_string, $global));
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x120=&$scope->properties[\'arguments\'];$x120->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x120->properties[$i]=$args[$i];$x120->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'byteLength\']=$fn;$_byteLength=&$scope->properties[\'byteLength\'];$global->scope[++$global->scope_sp]=$scope;return strlen(JS::toString($_string,$global));return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x141 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('Array', $global), 41, 7, '<image>/20_buffer.js');
$_Array =& $x141[0]; list(,$WArray,$SArray,$UArray) = $x141;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x142 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 41, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x142[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x142;
$x143 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 7);
$x144 = $x143($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/20_buffer.js';$x144->properties['line'] = 41;$x144->properties['column'] = 7;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 41, 7, '<image>/20_buffer.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x146 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x146[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x146;
$x147 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x148 = $x147($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x148->class) && $x148->class === 'Error' && !isset($x148->properties['file']) && !isset($x148->properties['line']) && !isset($x148->properties['column'])) {$x148->properties['file'] = '<image>/20_buffer.js';$x148->properties['line'] = 41;$x148->properties['column'] = 20;$x148->attributes['file'] = $x148->attributes['line'] = $x148->attributes['column'] = 0; }
throw new JSException($x148, 41, 20, '<image>/20_buffer.js');
}
$x145 = JS::toObject($_Array, $global);
unset($x149, $W149, $S149, $U149);
$x150 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x145, JS::toString('isArray', $global), 41, 20, '<image>/20_buffer.js');
$x149 =& $x150[0]; list(,$W149,$S149,$U149) = $x150;
if (!(is_object($x149) && isset($x149->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x153 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 41, 20, '<image>/20_buffer.js');
$_TypeError =& $x153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x153;
$x154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x155 = $x154($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/20_buffer.js';$x155->properties['line'] = 41;$x155->properties['column'] = 20;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 41, 20, '<image>/20_buffer.js');
}
$x151 = $x149->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 41, 20);
$x152 = $x151($global, $x145, $x149, array($_list), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x152, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 42, 13, '<image>/20_buffer.js');
$_TypeError =& $x158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x158;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x159 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 42, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x159[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x159;
$x160 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 13);
$x161 = $x160($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x161->class) && $x161->class === 'Error' && !isset($x161->properties['file']) && !isset($x161->properties['line']) && !isset($x161->properties['column'])) {$x161->properties['file'] = '<image>/20_buffer.js';$x161->properties['line'] = 42;$x161->properties['column'] = 13;$x161->attributes['file'] = $x161->attributes['line'] = $x161->attributes['column'] = 0; }
throw new JSException($x161, 42, 13, '<image>/20_buffer.js');
}
$x156 = clone JS::$objectTemplate;
unset($x162, $W162, $S162, $U162);
$x163 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, JS::toString('prototype', $global), 42, 9, '<image>/20_buffer.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
$x157 = $x162;
$x156->prototype = $x157;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x167 = $x166($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error' && !isset($x167->properties['file']) && !isset($x167->properties['line']) && !isset($x167->properties['column'])) {$x167->properties['file'] = '<image>/20_buffer.js';$x167->properties['line'] = 42;$x167->properties['column'] = 9;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 42, 9, '<image>/20_buffer.js');
}
$x164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 42, 9);
$x165 = $x164($global, $x156, $_TypeError, array('Given list is not an array'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x157 = $x165;
if (is_object($x157) && $x157 !== JS::$undefined) { $x156 = $x157; }
if (isset($x156->class) && $x156->class === 'Error' && !isset($x156->properties['file']) && !isset($x156->properties['line']) && !isset($x156->properties['column'])) {$x156->properties['file'] = '<image>/20_buffer.js';$x156->properties['line'] = 42;$x156->properties['column'] = 3;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 42, 3, '<image>/20_buffer.js');;
};
unset($x170, $W170, $S170, $U170);
$x171 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 45, 10, '<image>/20_buffer.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
$x169 = (((gettype($x170) === gettype(0) && $x170 === 0))|| (((is_float($x170) || is_int($x170)) && (is_float(0) || is_int(0))) && $x170 == 0));
$x168 = $x169;
if (!JS::toBoolean($x168, $global)) {
$x172 = (((gettype($_totalLength) === gettype(0) && $_totalLength === 0))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(0) || is_int(0))) && $_totalLength == 0));
$x168 = $x172; }
if (JS::toBoolean($x168, $global)) {
unset($_require, $Wrequire, $Srequire, $Urequire);
$x175 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 46, 14, '<image>/20_buffer.js');
$_require =& $x175[0]; list(,$Wrequire,$Srequire,$Urequire) = $x175;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x176 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 46, 14, '<image>/20_buffer.js');
$_ReferenceError =& $x176[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x176;
$x177 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 14);
$x178 = $x177($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error' && !isset($x178->properties['file']) && !isset($x178->properties['line']) && !isset($x178->properties['column'])) {$x178->properties['file'] = '<image>/20_buffer.js';$x178->properties['line'] = 46;$x178->properties['column'] = 14;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 46, 14, '<image>/20_buffer.js');
}
unset($x179, $W179, $S179, $U179);
$x180 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 46, 21, '<image>/20_buffer.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
unset($x181, $W181, $S181, $U181);
$x182 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x179, JS::toString('buffer', $global), 46, 29, '<image>/20_buffer.js');
$x181 =& $x182[0]; list(,$W181,$S181,$U181) = $x182;
unset($x183, $W183, $S183, $U183);
$x184 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x181, JS::toString('exports', $global), 46, 36, '<image>/20_buffer.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
unset($x185, $W185, $S185, $U185);
$x186 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x183, JS::toString('Buffer', $global), 46, 44, '<image>/20_buffer.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
$x173 = clone JS::$objectTemplate;
unset($x187, $W187, $S187, $U187);
$x188 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x185, JS::toString('prototype', $global), 46, 10, '<image>/20_buffer.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
$x174 = $x187;
$x173->prototype = $x174;
if (!(is_object($x185) && isset($x185->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x191 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 46, 10, '<image>/20_buffer.js');
$_TypeError =& $x191[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x191;
$x192 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x193 = $x192($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x193->class) && $x193->class === 'Error' && !isset($x193->properties['file']) && !isset($x193->properties['line']) && !isset($x193->properties['column'])) {$x193->properties['file'] = '<image>/20_buffer.js';$x193->properties['line'] = 46;$x193->properties['column'] = 10;$x193->attributes['file'] = $x193->attributes['line'] = $x193->attributes['column'] = 0; }
throw new JSException($x193, 46, 10, '<image>/20_buffer.js');
}
$x189 = $x185->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 46, 10);
$x190 = $x189($global, $x173, $x185, array(0), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x174 = $x190;
if (is_object($x174) && $x174 !== JS::$undefined) { $x173 = $x174; }
return $x173;;
}
else {
unset($x195, $W195, $S195, $U195);
$x196 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 48, 17, '<image>/20_buffer.js');
$x195 =& $x196[0]; list(,$W195,$S195,$U195) = $x196;
$x194 = (((gettype($x195) === gettype(1) && $x195 === 1))|| (((is_float($x195) || is_int($x195)) && (is_float(1) || is_int(1))) && $x195 == 1));
if (JS::toBoolean($x194, $global)) {
unset($x197, $W197, $S197, $U197);
$x198 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString(0, $global), 49, 14, '<image>/20_buffer.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
return $x197;;
}
else {
$x199 = (((gettype($_totalLength) === gettype(JS::$undefined) && $_totalLength === JS::$undefined))|| (((is_float($_totalLength) || is_int($_totalLength)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_totalLength == JS::$undefined));
if (JS::toBoolean($x199, $global)) {
$x200 = 0;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$_totalLength = $x200;
for ($x201 = 0;; ++$x201) {
if ($x201 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x202, $W202, $S202, $U202);
$x203 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 54, 28, '<image>/20_buffer.js');
$x202 =& $x203[0]; list(,$W202,$S202,$U202) = $x203;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x202;
}
if ($x201 !== 0) {
$x204 = ++$_i;
}
$x205 = JS::toPrimitive($_i, $global);
$x206 = JS::toPrimitive($_l, $global);
$x207 = (is_string($x205) && is_string($x206) ? strcmp($x205, $x206) < 0 : (!is_nan($x208 = JS::toNumber($x205, $global)) && !is_nan($x209 = JS::toNumber($x206, $global)) && $x208 < $x209));
if (!JS::toBoolean($x207, $global)) { break; }

unset($x210, $W210, $S210, $U210);
$x211 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 55, 24, '<image>/20_buffer.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
unset($x212, $W212, $S212, $U212);
$x213 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x210, JS::toString('length', $global), 55, 27, '<image>/20_buffer.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if ($UtotalLength) {$global->properties['totalLength'] = $_totalLength; $_totalLength =& $global->properties['totalLength']; }
$x214 = JS::toPrimitive($_totalLength, $global);
$x215 = JS::toPrimitive($x212, $global);
$_totalLength = (is_string($x214) || is_string($x215) ? JS::toString($x214, $global) . JS::toString($x215, $global) : JS::toNumber($x214, $global) + JS::toNumber($x215, $global));;
};;
};
unset($_require, $Wrequire, $Srequire, $Urequire);
$x218 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 59, 17, '<image>/20_buffer.js');
$_require =& $x218[0]; list(,$Wrequire,$Srequire,$Urequire) = $x218;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x219 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 59, 17, '<image>/20_buffer.js');
$_ReferenceError =& $x219[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x219;
$x220 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 17);
$x221 = $x220($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x221->class) && $x221->class === 'Error' && !isset($x221->properties['file']) && !isset($x221->properties['line']) && !isset($x221->properties['column'])) {$x221->properties['file'] = '<image>/20_buffer.js';$x221->properties['line'] = 59;$x221->properties['column'] = 17;$x221->attributes['file'] = $x221->attributes['line'] = $x221->attributes['column'] = 0; }
throw new JSException($x221, 59, 17, '<image>/20_buffer.js');
}
unset($x222, $W222, $S222, $U222);
$x223 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 59, 24, '<image>/20_buffer.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
unset($x224, $W224, $S224, $U224);
$x225 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x222, JS::toString('buffer', $global), 59, 32, '<image>/20_buffer.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
unset($x226, $W226, $S226, $U226);
$x227 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x224, JS::toString('exports', $global), 59, 39, '<image>/20_buffer.js');
$x226 =& $x227[0]; list(,$W226,$S226,$U226) = $x227;
unset($x228, $W228, $S228, $U228);
$x229 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x226, JS::toString('Buffer', $global), 59, 47, '<image>/20_buffer.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
$x216 = clone JS::$objectTemplate;
unset($x230, $W230, $S230, $U230);
$x231 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x228, JS::toString('prototype', $global), 59, 13, '<image>/20_buffer.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
$x217 = $x230;
$x216->prototype = $x217;
if (!(is_object($x228) && isset($x228->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x234 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 59, 13, '<image>/20_buffer.js');
$_TypeError =& $x234[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x234;
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x236 = $x235($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error' && !isset($x236->properties['file']) && !isset($x236->properties['line']) && !isset($x236->properties['column'])) {$x236->properties['file'] = '<image>/20_buffer.js';$x236->properties['line'] = 59;$x236->properties['column'] = 13;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 59, 13, '<image>/20_buffer.js');
}
$x232 = $x228->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 59, 13);
$x233 = $x232($global, $x216, $x228, array($_totalLength), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x217 = $x233;
if (is_object($x217) && $x217 !== JS::$undefined) { $x216 = $x217; }
$scope->properties['buf'] = JS::$undefined; $_buf =& $scope->properties['buf'];
$Ubuf = FALSE;
$_buf = $x216;
for ($x237 = 0;; ++$x237) {
if ($x237 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x238, $W238, $S238, $U238);
$x239 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString('length', $global), 61, 27, '<image>/20_buffer.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x238;
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = 0;
}
if ($x237 !== 0) {
$x240 = ++$_i;
}
$x241 = JS::toPrimitive($_i, $global);
$x242 = JS::toPrimitive($_l, $global);
$x243 = (is_string($x241) && is_string($x242) ? strcmp($x241, $x242) < 0 : (!is_nan($x244 = JS::toNumber($x241, $global)) && !is_nan($x245 = JS::toNumber($x242, $global)) && $x244 < $x245));
if (!JS::toBoolean($x243, $global)) { break; }

unset($x246, $W246, $S246, $U246);
$x247 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 62, 8, '<image>/20_buffer.js');
$x246 =& $x247[0]; list(,$W246,$S246,$U246) = $x247;
if ($x246 === JS::$undefined || $x246 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x249 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x249[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x249;
$x250 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x251 = $x250($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x251->class) && $x251->class === 'Error' && !isset($x251->properties['file']) && !isset($x251->properties['line']) && !isset($x251->properties['column'])) {$x251->properties['file'] = '<image>/20_buffer.js';$x251->properties['line'] = 62;$x251->properties['column'] = 16;$x251->attributes['file'] = $x251->attributes['line'] = $x251->attributes['column'] = 0; }
throw new JSException($x251, 62, 16, '<image>/20_buffer.js');
}
$x248 = JS::toObject($x246, $global);
unset($x252, $W252, $S252, $U252);
$x253 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x248, JS::toString('copy', $global), 62, 16, '<image>/20_buffer.js');
$x252 =& $x253[0]; list(,$W252,$S252,$U252) = $x253;
if (!(is_object($x252) && isset($x252->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x256 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 16, '<image>/20_buffer.js');
$_TypeError =& $x256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x256;
$x257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x258 = $x257($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x258->class) && $x258->class === 'Error' && !isset($x258->properties['file']) && !isset($x258->properties['line']) && !isset($x258->properties['column'])) {$x258->properties['file'] = '<image>/20_buffer.js';$x258->properties['line'] = 62;$x258->properties['column'] = 16;$x258->attributes['file'] = $x258->attributes['line'] = $x258->attributes['column'] = 0; }
throw new JSException($x258, 62, 16, '<image>/20_buffer.js');
}
$x254 = $x252->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 62, 16);
$x255 = $x254($global, $x248, $x252, array($_buf, $_offset), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x259, $W259, $S259, $U259);
$x260 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_list, JS::toString($_i, $global), 63, 18, '<image>/20_buffer.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
unset($x261, $W261, $S261, $U261);
$x262 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x259, JS::toString('length', $global), 63, 21, '<image>/20_buffer.js');
$x261 =& $x262[0]; list(,$W261,$S261,$U261) = $x262;
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$x263 = JS::toPrimitive($_offset, $global);
$x264 = JS::toPrimitive($x261, $global);
$_offset = (is_string($x263) || is_string($x264) ? JS::toString($x263, $global) . JS::toString($x264, $global) : JS::toNumber($x263, $global) + JS::toNumber($x264, $global));;
};
return $_buf;;
};
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x140=&$scope->properties[\'arguments\'];$x140->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x140->properties[$i]=$args[$i];$x140->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'list\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_list=&$scope->properties[\'list\'];$Ulist=FALSE;$scope->properties[\'totalLength\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_totalLength=&$scope->properties[\'totalLength\'];$UtotalLength=FALSE;$scope->properties[\'concat\']=$fn;$_concat=&$scope->properties[\'concat\'];$global->scope[++$global->scope_sp]=$scope;unset($_Array,$WArray,$SArray,$UArray);$x141=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'Array\',$global),41,7,\'<image>/20_buffer.js\');$_Array=&$x141[0];list(,$WArray,$SArray,$UArray)=$x141;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x142=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),41,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x142[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x142;$x143=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,7);$x144=$x143($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/20_buffer.js\';$x144->properties[\'line\']=41;$x144->properties[\'column\']=7;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,41,7,\'<image>/20_buffer.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x146=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),41,20,\'<image>/20_buffer.js\');$_TypeError=&$x146[0];list(,$WTypeError,$STypeError,$UTypeError)=$x146;$x147=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x148=$x147($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x148->class)&&$x148->class===\'Error\'&&!isset($x148->properties[\'file\'])&&!isset($x148->properties[\'line\'])&&!isset($x148->properties[\'column\'])){$x148->properties[\'file\']=\'<image>/20_buffer.js\';$x148->properties[\'line\']=41;$x148->properties[\'column\']=20;$x148->attributes[\'file\']=$x148->attributes[\'line\']=$x148->attributes[\'column\']=0;}throw new JSException($x148,41,20,\'<image>/20_buffer.js\');}$x145=JS::toObject($_Array,$global);unset($x149,$W149,$S149,$U149);$x150=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x145,JS::toString(\'isArray\',$global),41,20,\'<image>/20_buffer.js\');$x149=&$x150[0];list(,$W149,$S149,$U149)=$x150;if(!(is_object($x149)&&isset($x149->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x153=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),41,20,\'<image>/20_buffer.js\');$_TypeError=&$x153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x153;$x154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x155=$x154($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x155->class)&&$x155->class===\'Error\'&&!isset($x155->properties[\'file\'])&&!isset($x155->properties[\'line\'])&&!isset($x155->properties[\'column\'])){$x155->properties[\'file\']=\'<image>/20_buffer.js\';$x155->properties[\'line\']=41;$x155->properties[\'column\']=20;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,41,20,\'<image>/20_buffer.js\');}$x151=$x149->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',41,20);$x152=$x151($global,$x145,$x149,array($_list),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x152,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x158=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),42,13,\'<image>/20_buffer.js\');$_TypeError=&$x158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x158;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x159=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),42,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x159[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x159;$x160=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,13);$x161=$x160($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x161->class)&&$x161->class===\'Error\'&&!isset($x161->properties[\'file\'])&&!isset($x161->properties[\'line\'])&&!isset($x161->properties[\'column\'])){$x161->properties[\'file\']=\'<image>/20_buffer.js\';$x161->properties[\'line\']=42;$x161->properties[\'column\']=13;$x161->attributes[\'file\']=$x161->attributes[\'line\']=$x161->attributes[\'column\']=0;}throw new JSException($x161,42,13,\'<image>/20_buffer.js\');}$x156=clone JS::$objectTemplate;unset($x162,$W162,$S162,$U162);$x163=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),42,9,\'<image>/20_buffer.js\');$x162=&$x163[0];list(,$W162,$S162,$U162)=$x163;$x157=$x162;$x156->prototype=$x157;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x166=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x167=$x166($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x167->class)&&$x167->class===\'Error\'&&!isset($x167->properties[\'file\'])&&!isset($x167->properties[\'line\'])&&!isset($x167->properties[\'column\'])){$x167->properties[\'file\']=\'<image>/20_buffer.js\';$x167->properties[\'line\']=42;$x167->properties[\'column\']=9;$x167->attributes[\'file\']=$x167->attributes[\'line\']=$x167->attributes[\'column\']=0;}throw new JSException($x167,42,9,\'<image>/20_buffer.js\');}$x164=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',42,9);$x165=$x164($global,$x156,$_TypeError,array(\'Given list is not an array\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x157=$x165;if(is_object($x157)&&$x157!==JS::$undefined){$x156=$x157;}if(isset($x156->class)&&$x156->class===\'Error\'&&!isset($x156->properties[\'file\'])&&!isset($x156->properties[\'line\'])&&!isset($x156->properties[\'column\'])){$x156->properties[\'file\']=\'<image>/20_buffer.js\';$x156->properties[\'line\']=42;$x156->properties[\'column\']=3;$x156->attributes[\'file\']=$x156->attributes[\'line\']=$x156->attributes[\'column\']=0;}throw new JSException($x156,42,3,\'<image>/20_buffer.js\');}unset($x170,$W170,$S170,$U170);$x171=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),45,10,\'<image>/20_buffer.js\');$x170=&$x171[0];list(,$W170,$S170,$U170)=$x171;$x169=(((gettype($x170)===gettype(0)&&$x170===0))||(((is_float($x170)||is_int($x170))&&(is_float(0)||is_int(0)))&&$x170==0));$x168=$x169;if(!JS::toBoolean($x168,$global)){$x172=(((gettype($_totalLength)===gettype(0)&&$_totalLength===0))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(0)||is_int(0)))&&$_totalLength==0));$x168=$x172;}if(JS::toBoolean($x168,$global)){unset($_require,$Wrequire,$Srequire,$Urequire);$x175=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),46,14,\'<image>/20_buffer.js\');$_require=&$x175[0];list(,$Wrequire,$Srequire,$Urequire)=$x175;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x176=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),46,14,\'<image>/20_buffer.js\');$_ReferenceError=&$x176[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x176;$x177=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,14);$x178=$x177($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'&&!isset($x178->properties[\'file\'])&&!isset($x178->properties[\'line\'])&&!isset($x178->properties[\'column\'])){$x178->properties[\'file\']=\'<image>/20_buffer.js\';$x178->properties[\'line\']=46;$x178->properties[\'column\']=14;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,46,14,\'<image>/20_buffer.js\');}unset($x179,$W179,$S179,$U179);$x180=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),46,21,\'<image>/20_buffer.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;unset($x181,$W181,$S181,$U181);$x182=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x179,JS::toString(\'buffer\',$global),46,29,\'<image>/20_buffer.js\');$x181=&$x182[0];list(,$W181,$S181,$U181)=$x182;unset($x183,$W183,$S183,$U183);$x184=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x181,JS::toString(\'exports\',$global),46,36,\'<image>/20_buffer.js\');$x183=&$x184[0];list(,$W183,$S183,$U183)=$x184;unset($x185,$W185,$S185,$U185);$x186=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x183,JS::toString(\'Buffer\',$global),46,44,\'<image>/20_buffer.js\');$x185=&$x186[0];list(,$W185,$S185,$U185)=$x186;$x173=clone JS::$objectTemplate;unset($x187,$W187,$S187,$U187);$x188=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x185,JS::toString(\'prototype\',$global),46,10,\'<image>/20_buffer.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;$x174=$x187;$x173->prototype=$x174;if(!(is_object($x185)&&isset($x185->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x191=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),46,10,\'<image>/20_buffer.js\');$_TypeError=&$x191[0];list(,$WTypeError,$STypeError,$UTypeError)=$x191;$x192=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x193=$x192($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x193->class)&&$x193->class===\'Error\'&&!isset($x193->properties[\'file\'])&&!isset($x193->properties[\'line\'])&&!isset($x193->properties[\'column\'])){$x193->properties[\'file\']=\'<image>/20_buffer.js\';$x193->properties[\'line\']=46;$x193->properties[\'column\']=10;$x193->attributes[\'file\']=$x193->attributes[\'line\']=$x193->attributes[\'column\']=0;}throw new JSException($x193,46,10,\'<image>/20_buffer.js\');}$x189=$x185->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',46,10);$x190=$x189($global,$x173,$x185,array(0),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x174=$x190;if(is_object($x174)&&$x174!==JS::$undefined){$x173=$x174;}return$x173;}else{unset($x195,$W195,$S195,$U195);$x196=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),48,17,\'<image>/20_buffer.js\');$x195=&$x196[0];list(,$W195,$S195,$U195)=$x196;$x194=(((gettype($x195)===gettype(1)&&$x195===1))||(((is_float($x195)||is_int($x195))&&(is_float(1)||is_int(1)))&&$x195==1));if(JS::toBoolean($x194,$global)){unset($x197,$W197,$S197,$U197);$x198=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(0,$global),49,14,\'<image>/20_buffer.js\');$x197=&$x198[0];list(,$W197,$S197,$U197)=$x198;return$x197;}else{$x199=(((gettype($_totalLength)===gettype(JS::$undefined)&&$_totalLength===JS::$undefined))||(((is_float($_totalLength)||is_int($_totalLength))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_totalLength==JS::$undefined));if(JS::toBoolean($x199,$global)){$x200=0;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$_totalLength=$x200;for($x201=0;;++$x201){if($x201===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x202,$W202,$S202,$U202);$x203=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),54,28,\'<image>/20_buffer.js\');$x202=&$x203[0];list(,$W202,$S202,$U202)=$x203;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x202;}if($x201!==0){$x204=++$_i;}$x205=JS::toPrimitive($_i,$global);$x206=JS::toPrimitive($_l,$global);$x207=(is_string($x205)&&is_string($x206)?strcmp($x205,$x206)<0:(!is_nan($x208=JS::toNumber($x205,$global))&&!is_nan($x209=JS::toNumber($x206,$global))&&$x208<$x209));if(!JS::toBoolean($x207,$global)){break;}unset($x210,$W210,$S210,$U210);$x211=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),55,24,\'<image>/20_buffer.js\');$x210=&$x211[0];list(,$W210,$S210,$U210)=$x211;unset($x212,$W212,$S212,$U212);$x213=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x210,JS::toString(\'length\',$global),55,27,\'<image>/20_buffer.js\');$x212=&$x213[0];list(,$W212,$S212,$U212)=$x213;if($UtotalLength){$global->properties[\'totalLength\']=$_totalLength;$_totalLength=&$global->properties[\'totalLength\'];}$x214=JS::toPrimitive($_totalLength,$global);$x215=JS::toPrimitive($x212,$global);$_totalLength=(is_string($x214)||is_string($x215)?JS::toString($x214,$global).JS::toString($x215,$global):JS::toNumber($x214,$global)+JS::toNumber($x215,$global));}}unset($_require,$Wrequire,$Srequire,$Urequire);$x218=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),59,17,\'<image>/20_buffer.js\');$_require=&$x218[0];list(,$Wrequire,$Srequire,$Urequire)=$x218;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x219=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),59,17,\'<image>/20_buffer.js\');$_ReferenceError=&$x219[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x219;$x220=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,17);$x221=$x220($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x221->class)&&$x221->class===\'Error\'&&!isset($x221->properties[\'file\'])&&!isset($x221->properties[\'line\'])&&!isset($x221->properties[\'column\'])){$x221->properties[\'file\']=\'<image>/20_buffer.js\';$x221->properties[\'line\']=59;$x221->properties[\'column\']=17;$x221->attributes[\'file\']=$x221->attributes[\'line\']=$x221->attributes[\'column\']=0;}throw new JSException($x221,59,17,\'<image>/20_buffer.js\');}unset($x222,$W222,$S222,$U222);$x223=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),59,24,\'<image>/20_buffer.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;unset($x224,$W224,$S224,$U224);$x225=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x222,JS::toString(\'buffer\',$global),59,32,\'<image>/20_buffer.js\');$x224=&$x225[0];list(,$W224,$S224,$U224)=$x225;unset($x226,$W226,$S226,$U226);$x227=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x224,JS::toString(\'exports\',$global),59,39,\'<image>/20_buffer.js\');$x226=&$x227[0];list(,$W226,$S226,$U226)=$x227;unset($x228,$W228,$S228,$U228);$x229=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x226,JS::toString(\'Buffer\',$global),59,47,\'<image>/20_buffer.js\');$x228=&$x229[0];list(,$W228,$S228,$U228)=$x229;$x216=clone JS::$objectTemplate;unset($x230,$W230,$S230,$U230);$x231=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x228,JS::toString(\'prototype\',$global),59,13,\'<image>/20_buffer.js\');$x230=&$x231[0];list(,$W230,$S230,$U230)=$x231;$x217=$x230;$x216->prototype=$x217;if(!(is_object($x228)&&isset($x228->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x234=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),59,13,\'<image>/20_buffer.js\');$_TypeError=&$x234[0];list(,$WTypeError,$STypeError,$UTypeError)=$x234;$x235=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x236=$x235($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x236->class)&&$x236->class===\'Error\'&&!isset($x236->properties[\'file\'])&&!isset($x236->properties[\'line\'])&&!isset($x236->properties[\'column\'])){$x236->properties[\'file\']=\'<image>/20_buffer.js\';$x236->properties[\'line\']=59;$x236->properties[\'column\']=13;$x236->attributes[\'file\']=$x236->attributes[\'line\']=$x236->attributes[\'column\']=0;}throw new JSException($x236,59,13,\'<image>/20_buffer.js\');}$x232=$x228->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',59,13);$x233=$x232($global,$x216,$x228,array($_totalLength),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x217=$x233;if(is_object($x217)&&$x217!==JS::$undefined){$x216=$x217;}$scope->properties[\'buf\']=JS::$undefined;$_buf=&$scope->properties[\'buf\'];$Ubuf=FALSE;$_buf=$x216;for($x237=0;;++$x237){if($x237===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x238,$W238,$S238,$U238);$x239=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString(\'length\',$global),61,27,\'<image>/20_buffer.js\');$x238=&$x239[0];list(,$W238,$S238,$U238)=$x239;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x238;$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=0;}if($x237!==0){$x240=++$_i;}$x241=JS::toPrimitive($_i,$global);$x242=JS::toPrimitive($_l,$global);$x243=(is_string($x241)&&is_string($x242)?strcmp($x241,$x242)<0:(!is_nan($x244=JS::toNumber($x241,$global))&&!is_nan($x245=JS::toNumber($x242,$global))&&$x244<$x245));if(!JS::toBoolean($x243,$global)){break;}unset($x246,$W246,$S246,$U246);$x247=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),62,8,\'<image>/20_buffer.js\');$x246=&$x247[0];list(,$W246,$S246,$U246)=$x247;if($x246===JS::$undefined||$x246===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x249=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,16,\'<image>/20_buffer.js\');$_TypeError=&$x249[0];list(,$WTypeError,$STypeError,$UTypeError)=$x249;$x250=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x251=$x250($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x251->class)&&$x251->class===\'Error\'&&!isset($x251->properties[\'file\'])&&!isset($x251->properties[\'line\'])&&!isset($x251->properties[\'column\'])){$x251->properties[\'file\']=\'<image>/20_buffer.js\';$x251->properties[\'line\']=62;$x251->properties[\'column\']=16;$x251->attributes[\'file\']=$x251->attributes[\'line\']=$x251->attributes[\'column\']=0;}throw new JSException($x251,62,16,\'<image>/20_buffer.js\');}$x248=JS::toObject($x246,$global);unset($x252,$W252,$S252,$U252);$x253=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x248,JS::toString(\'copy\',$global),62,16,\'<image>/20_buffer.js\');$x252=&$x253[0];list(,$W252,$S252,$U252)=$x253;if(!(is_object($x252)&&isset($x252->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x256=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,16,\'<image>/20_buffer.js\');$_TypeError=&$x256[0];list(,$WTypeError,$STypeError,$UTypeError)=$x256;$x257=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x258=$x257($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x258->class)&&$x258->class===\'Error\'&&!isset($x258->properties[\'file\'])&&!isset($x258->properties[\'line\'])&&!isset($x258->properties[\'column\'])){$x258->properties[\'file\']=\'<image>/20_buffer.js\';$x258->properties[\'line\']=62;$x258->properties[\'column\']=16;$x258->attributes[\'file\']=$x258->attributes[\'line\']=$x258->attributes[\'column\']=0;}throw new JSException($x258,62,16,\'<image>/20_buffer.js\');}$x254=$x252->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',62,16);$x255=$x254($global,$x248,$x252,array($_buf,$_offset),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x259,$W259,$S259,$U259);$x260=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_list,JS::toString($_i,$global),63,18,\'<image>/20_buffer.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;unset($x261,$W261,$S261,$U261);$x262=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x259,JS::toString(\'length\',$global),63,21,\'<image>/20_buffer.js\');$x261=&$x262[0];list(,$W261,$S261,$U261)=$x262;if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$x263=JS::toPrimitive($_offset,$global);$x264=JS::toPrimitive($x261,$global);$_offset=(is_string($x263)||is_string($x264)?JS::toString($x263,$global).JS::toString($x264,$global):JS::toNumber($x263,$global)+JS::toNumber($x264,$global));}return$_buf;}}return JS::$undefined;}', "\n";
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
$x284 =& $scope->properties['arguments'];
$x284->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x284->properties[$i] = $args[$i];
$x284->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x285 = !(((gettype($_encoding) === gettype(JS::$undefined) && $_encoding === JS::$undefined))|| (((is_float($_encoding) || is_int($_encoding)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_encoding == JS::$undefined));
if (JS::toBoolean($x285, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x288 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('NotImplementedError', $global), 72, 13, '<image>/20_buffer.js');
$_NotImplementedError =& $x288[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x288;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x289 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x289[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x289;
$x290 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 13);
$x291 = $x290($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x291->class) && $x291->class === 'Error' && !isset($x291->properties['file']) && !isset($x291->properties['line']) && !isset($x291->properties['column'])) {$x291->properties['file'] = '<image>/20_buffer.js';$x291->properties['line'] = 72;$x291->properties['column'] = 13;$x291->attributes['file'] = $x291->attributes['line'] = $x291->attributes['column'] = 0; }
throw new JSException($x291, 72, 13, '<image>/20_buffer.js');
}
$x286 = clone JS::$objectTemplate;
unset($x292, $W292, $S292, $U292);
$x293 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 72, 9, '<image>/20_buffer.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
$x287 = $x292;
$x286->prototype = $x287;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x296 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 72, 9, '<image>/20_buffer.js');
$_TypeError =& $x296[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x296;
$x297 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x298 = $x297($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x298->class) && $x298->class === 'Error' && !isset($x298->properties['file']) && !isset($x298->properties['line']) && !isset($x298->properties['column'])) {$x298->properties['file'] = '<image>/20_buffer.js';$x298->properties['line'] = 72;$x298->properties['column'] = 9;$x298->attributes['file'] = $x298->attributes['line'] = $x298->attributes['column'] = 0; }
throw new JSException($x298, 72, 9, '<image>/20_buffer.js');
}
$x294 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 72, 9);
$x295 = $x294($global, $x286, $_NotImplementedError, array('encoding argument not implemented'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x287 = $x295;
if (is_object($x287) && $x287 !== JS::$undefined) { $x286 = $x287; }
if (isset($x286->class) && $x286->class === 'Error' && !isset($x286->properties['file']) && !isset($x286->properties['line']) && !isset($x286->properties['column'])) {$x286->properties['file'] = '<image>/20_buffer.js';$x286->properties['line'] = 72;$x286->properties['column'] = 3;$x286->attributes['file'] = $x286->attributes['line'] = $x286->attributes['column'] = 0; }
throw new JSException($x286, 72, 3, '<image>/20_buffer.js');;
};
$x299 = $_offset;
if (!JS::toBoolean($x299, $global)) {
$x299 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x299;
$x300 = $_length;
if (!JS::toBoolean($x300, $global)) {
unset($x301, $W301, $S301, $U301);
$x302 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 76, 25, '<image>/20_buffer.js');
$x301 =& $x302[0]; list(,$W301,$S301,$U301) = $x302;
$x300 = (JS::toNumber($x301, $global) - JS::toNumber($_offset, $global)); }
if ($Ulength) {$global->properties['length'] = $_length; $_length =& $global->properties['length']; }
$_length = $x300;
$x303 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x303;
unset($x304, $W304, $S304, $U304);
$x305 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 78, 15, '<image>/20_buffer.js');
$x304 =& $x305[0]; list(,$W304,$S304,$U304) = $x305;
unset($_maxlen, $Wmaxlen, $Smaxlen, $Umaxlen);
$x306 = _f915aaba5b76f6e13a986dca9da58f68_9($global, $scope, $scope, JS::toString('maxlen', $global), 78, 9, '<image>/20_buffer.js');
$_maxlen =& $x306[0]; list(,$Wmaxlen,$Smaxlen,$Umaxlen) = $x306;
if ($Umaxlen) {$global->properties['maxlen'] = $_maxlen; $_maxlen =& $global->properties['maxlen']; }
$_maxlen = $x304;
$leThis->value = substr(substr($leThis->value, 0,$_offset) . substr($_string, 0,$_length) .
		substr($leThis->value,$_offset+$_length), 0,$_maxlen);
return $_length;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x284=&$scope->properties[\'arguments\'];$x284->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x284->properties[$i]=$args[$i];$x284->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'length\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$scope->properties[\'encoding\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_encoding=&$scope->properties[\'encoding\'];$Uencoding=FALSE;$scope->properties[\'write\']=$fn;$_write=&$scope->properties[\'write\'];$global->scope[++$global->scope_sp]=$scope;$x285=!(((gettype($_encoding)===gettype(JS::$undefined)&&$_encoding===JS::$undefined))||(((is_float($_encoding)||is_int($_encoding))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_encoding==JS::$undefined));if(JS::toBoolean($x285,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x288=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),72,13,\'<image>/20_buffer.js\');$_NotImplementedError=&$x288[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x288;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x289=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x289[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x289;$x290=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,13);$x291=$x290($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x291->class)&&$x291->class===\'Error\'&&!isset($x291->properties[\'file\'])&&!isset($x291->properties[\'line\'])&&!isset($x291->properties[\'column\'])){$x291->properties[\'file\']=\'<image>/20_buffer.js\';$x291->properties[\'line\']=72;$x291->properties[\'column\']=13;$x291->attributes[\'file\']=$x291->attributes[\'line\']=$x291->attributes[\'column\']=0;}throw new JSException($x291,72,13,\'<image>/20_buffer.js\');}$x286=clone JS::$objectTemplate;unset($x292,$W292,$S292,$U292);$x293=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),72,9,\'<image>/20_buffer.js\');$x292=&$x293[0];list(,$W292,$S292,$U292)=$x293;$x287=$x292;$x286->prototype=$x287;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x296=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,9,\'<image>/20_buffer.js\');$_TypeError=&$x296[0];list(,$WTypeError,$STypeError,$UTypeError)=$x296;$x297=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x298=$x297($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x298->class)&&$x298->class===\'Error\'&&!isset($x298->properties[\'file\'])&&!isset($x298->properties[\'line\'])&&!isset($x298->properties[\'column\'])){$x298->properties[\'file\']=\'<image>/20_buffer.js\';$x298->properties[\'line\']=72;$x298->properties[\'column\']=9;$x298->attributes[\'file\']=$x298->attributes[\'line\']=$x298->attributes[\'column\']=0;}throw new JSException($x298,72,9,\'<image>/20_buffer.js\');}$x294=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',72,9);$x295=$x294($global,$x286,$_NotImplementedError,array(\'encoding argument not implemented\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x287=$x295;if(is_object($x287)&&$x287!==JS::$undefined){$x286=$x287;}if(isset($x286->class)&&$x286->class===\'Error\'&&!isset($x286->properties[\'file\'])&&!isset($x286->properties[\'line\'])&&!isset($x286->properties[\'column\'])){$x286->properties[\'file\']=\'<image>/20_buffer.js\';$x286->properties[\'line\']=72;$x286->properties[\'column\']=3;$x286->attributes[\'file\']=$x286->attributes[\'line\']=$x286->attributes[\'column\']=0;}throw new JSException($x286,72,3,\'<image>/20_buffer.js\');}$x299=$_offset;if(!JS::toBoolean($x299,$global)){$x299=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x299;$x300=$_length;if(!JS::toBoolean($x300,$global)){unset($x301,$W301,$S301,$U301);$x302=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),76,25,\'<image>/20_buffer.js\');$x301=&$x302[0];list(,$W301,$S301,$U301)=$x302;$x300=(JS::toNumber($x301,$global)-JS::toNumber($_offset,$global));}if($Ulength){$global->properties[\'length\']=$_length;$_length=&$global->properties[\'length\'];}$_length=$x300;$x303=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x303;unset($x304,$W304,$S304,$U304);$x305=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),78,15,\'<image>/20_buffer.js\');$x304=&$x305[0];list(,$W304,$S304,$U304)=$x305;unset($_maxlen,$Wmaxlen,$Smaxlen,$Umaxlen);$x306=_f915aaba5b76f6e13a986dca9da58f68_9($global,$scope,$scope,JS::toString(\'maxlen\',$global),78,9,\'<image>/20_buffer.js\');$_maxlen=&$x306[0];list(,$Wmaxlen,$Smaxlen,$Umaxlen)=$x306;if($Umaxlen){$global->properties[\'maxlen\']=$_maxlen;$_maxlen=&$global->properties[\'maxlen\'];}$_maxlen=$x304;$leThis->value=substr(substr($leThis->value,0,$_offset).substr($_string,0,$_length).substr($leThis->value,$_offset+$_length),0,$_maxlen);return$_length;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x328 =& $scope->properties['arguments'];
$x328->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x328->properties[$i] = $args[$i];
$x328->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['toString'] = $fn;
$_toString =& $scope->properties['toString'];
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x328=&$scope->properties[\'arguments\'];$x328->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x328->properties[$i]=$args[$i];$x328->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'toString\']=$fn;$_toString=&$scope->properties[\'toString\'];$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x350 =& $scope->properties['arguments'];
$x350->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x350->properties[$i] = $args[$i];
$x350->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x351 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 91, 7, '<image>/20_buffer.js');
$_require =& $x351[0]; list(,$Wrequire,$Srequire,$Urequire) = $x351;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x352 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 91, 7, '<image>/20_buffer.js');
$_ReferenceError =& $x352[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x352;
$x353 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 7);
$x354 = $x353($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x354->class) && $x354->class === 'Error' && !isset($x354->properties['file']) && !isset($x354->properties['line']) && !isset($x354->properties['column'])) {$x354->properties['file'] = '<image>/20_buffer.js';$x354->properties['line'] = 91;$x354->properties['column'] = 7;$x354->attributes['file'] = $x354->attributes['line'] = $x354->attributes['column'] = 0; }
throw new JSException($x354, 91, 7, '<image>/20_buffer.js');
}
unset($x355, $W355, $S355, $U355);
$x356 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 91, 14, '<image>/20_buffer.js');
$x355 =& $x356[0]; list(,$W355,$S355,$U355) = $x356;
unset($x357, $W357, $S357, $U357);
$x358 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x355, JS::toString('buffer', $global), 91, 22, '<image>/20_buffer.js');
$x357 =& $x358[0]; list(,$W357,$S357,$U357) = $x358;
unset($x359, $W359, $S359, $U359);
$x360 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x357, JS::toString('exports', $global), 91, 29, '<image>/20_buffer.js');
$x359 =& $x360[0]; list(,$W359,$S359,$U359) = $x360;
unset($x361, $W361, $S361, $U361);
$x362 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x359, JS::toString('Buffer', $global), 91, 37, '<image>/20_buffer.js');
$x361 =& $x362[0]; list(,$W361,$S361,$U361) = $x362;
if ($x361 === JS::$undefined || $x361 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x364 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x364[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x364;
$x365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x366 = $x365($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x366->class) && $x366->class === 'Error' && !isset($x366->properties['file']) && !isset($x366->properties['line']) && !isset($x366->properties['column'])) {$x366->properties['file'] = '<image>/20_buffer.js';$x366->properties['line'] = 91;$x366->properties['column'] = 53;$x366->attributes['file'] = $x366->attributes['line'] = $x366->attributes['column'] = 0; }
throw new JSException($x366, 91, 53, '<image>/20_buffer.js');
}
$x363 = JS::toObject($x361, $global);
unset($x367, $W367, $S367, $U367);
$x368 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x363, JS::toString('isBuffer', $global), 91, 53, '<image>/20_buffer.js');
$x367 =& $x368[0]; list(,$W367,$S367,$U367) = $x368;
if (!(is_object($x367) && isset($x367->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x371 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 91, 53, '<image>/20_buffer.js');
$_TypeError =& $x371[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x371;
$x372 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x373 = $x372($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x373->class) && $x373->class === 'Error' && !isset($x373->properties['file']) && !isset($x373->properties['line']) && !isset($x373->properties['column'])) {$x373->properties['file'] = '<image>/20_buffer.js';$x373->properties['line'] = 91;$x373->properties['column'] = 53;$x373->attributes['file'] = $x373->attributes['line'] = $x373->attributes['column'] = 0; }
throw new JSException($x373, 91, 53, '<image>/20_buffer.js');
}
$x369 = $x367->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 91, 53);
$x370 = $x369($global, $x363, $x367, array($_targetBuffer), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x370, $global)), $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x376 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 92, 13, '<image>/20_buffer.js');
$_TypeError =& $x376[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x376;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x377 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 92, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x377[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x377;
$x378 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 13);
$x379 = $x378($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x379->class) && $x379->class === 'Error' && !isset($x379->properties['file']) && !isset($x379->properties['line']) && !isset($x379->properties['column'])) {$x379->properties['file'] = '<image>/20_buffer.js';$x379->properties['line'] = 92;$x379->properties['column'] = 13;$x379->attributes['file'] = $x379->attributes['line'] = $x379->attributes['column'] = 0; }
throw new JSException($x379, 92, 13, '<image>/20_buffer.js');
}
$x374 = clone JS::$objectTemplate;
unset($x380, $W380, $S380, $U380);
$x381 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_TypeError, JS::toString('prototype', $global), 92, 9, '<image>/20_buffer.js');
$x380 =& $x381[0]; list(,$W380,$S380,$U380) = $x381;
$x375 = $x380;
$x374->prototype = $x375;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x384 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x385 = $x384($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x385->class) && $x385->class === 'Error' && !isset($x385->properties['file']) && !isset($x385->properties['line']) && !isset($x385->properties['column'])) {$x385->properties['file'] = '<image>/20_buffer.js';$x385->properties['line'] = 92;$x385->properties['column'] = 9;$x385->attributes['file'] = $x385->attributes['line'] = $x385->attributes['column'] = 0; }
throw new JSException($x385, 92, 9, '<image>/20_buffer.js');
}
$x382 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 92, 9);
$x383 = $x382($global, $x374, $_TypeError, array('Given first argument is not a buffer'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x375 = $x383;
if (is_object($x375) && $x375 !== JS::$undefined) { $x374 = $x375; }
if (isset($x374->class) && $x374->class === 'Error' && !isset($x374->properties['file']) && !isset($x374->properties['line']) && !isset($x374->properties['column'])) {$x374->properties['file'] = '<image>/20_buffer.js';$x374->properties['line'] = 92;$x374->properties['column'] = 3;$x374->attributes['file'] = $x374->attributes['line'] = $x374->attributes['column'] = 0; }
throw new JSException($x374, 92, 3, '<image>/20_buffer.js');;
};
$x386 = $_targetStart;
if (!JS::toBoolean($x386, $global)) {
$x386 = 0; }
if ($UtargetStart) {$global->properties['targetStart'] = $_targetStart; $_targetStart =& $global->properties['targetStart']; }
$_targetStart = $x386;
$x387 = $_sourceStart;
if (!JS::toBoolean($x387, $global)) {
$x387 = 0; }
if ($UsourceStart) {$global->properties['sourceStart'] = $_sourceStart; $_sourceStart =& $global->properties['sourceStart']; }
$_sourceStart = $x387;
$x388 = $_sourceEnd;
if (!JS::toBoolean($x388, $global)) {
unset($x389, $W389, $S389, $U389);
$x390 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 97, 31, '<image>/20_buffer.js');
$x389 =& $x390[0]; list(,$W389,$S389,$U389) = $x390;
$x388 = $x389; }
if ($UsourceEnd) {$global->properties['sourceEnd'] = $_sourceEnd; $_sourceEnd =& $global->properties['sourceEnd']; }
$_sourceEnd = $x388;
if ($_targetBuffer === JS::$undefined || $_targetBuffer === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x392 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x392[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x392;
$x393 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x394 = $x393($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x394->class) && $x394->class === 'Error' && !isset($x394->properties['file']) && !isset($x394->properties['line']) && !isset($x394->properties['column'])) {$x394->properties['file'] = '<image>/20_buffer.js';$x394->properties['line'] = 99;$x394->properties['column'] = 20;$x394->attributes['file'] = $x394->attributes['line'] = $x394->attributes['column'] = 0; }
throw new JSException($x394, 99, 20, '<image>/20_buffer.js');
}
$x391 = JS::toObject($_targetBuffer, $global);
unset($x395, $W395, $S395, $U395);
$x396 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x391, JS::toString('write', $global), 99, 20, '<image>/20_buffer.js');
$x395 =& $x396[0]; list(,$W395,$S395,$U395) = $x396;
if (!(is_object($x395) && isset($x395->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 20, '<image>/20_buffer.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
$x400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x401 = $x400($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x401->class) && $x401->class === 'Error' && !isset($x401->properties['file']) && !isset($x401->properties['line']) && !isset($x401->properties['column'])) {$x401->properties['file'] = '<image>/20_buffer.js';$x401->properties['line'] = 99;$x401->properties['column'] = 20;$x401->attributes['file'] = $x401->attributes['line'] = $x401->attributes['column'] = 0; }
throw new JSException($x401, 99, 20, '<image>/20_buffer.js');
}
$x397 = $x395->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 99, 20);
$x398 = $x397($global, $x391, $x395, array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart), $_targetStart), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x350=&$scope->properties[\'arguments\'];$x350->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x350->properties[$i]=$args[$i];$x350->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'targetBuffer\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_targetBuffer=&$scope->properties[\'targetBuffer\'];$UtargetBuffer=FALSE;$scope->properties[\'targetStart\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_targetStart=&$scope->properties[\'targetStart\'];$UtargetStart=FALSE;$scope->properties[\'sourceStart\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_sourceStart=&$scope->properties[\'sourceStart\'];$UsourceStart=FALSE;$scope->properties[\'sourceEnd\']=array_key_exists(3,$args)?$args[3]:JS::$undefined;$_sourceEnd=&$scope->properties[\'sourceEnd\'];$UsourceEnd=FALSE;$scope->properties[\'copy\']=$fn;$_copy=&$scope->properties[\'copy\'];$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x351=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),91,7,\'<image>/20_buffer.js\');$_require=&$x351[0];list(,$Wrequire,$Srequire,$Urequire)=$x351;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x352=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),91,7,\'<image>/20_buffer.js\');$_ReferenceError=&$x352[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x352;$x353=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,7);$x354=$x353($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x354->class)&&$x354->class===\'Error\'&&!isset($x354->properties[\'file\'])&&!isset($x354->properties[\'line\'])&&!isset($x354->properties[\'column\'])){$x354->properties[\'file\']=\'<image>/20_buffer.js\';$x354->properties[\'line\']=91;$x354->properties[\'column\']=7;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,91,7,\'<image>/20_buffer.js\');}unset($x355,$W355,$S355,$U355);$x356=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),91,14,\'<image>/20_buffer.js\');$x355=&$x356[0];list(,$W355,$S355,$U355)=$x356;unset($x357,$W357,$S357,$U357);$x358=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x355,JS::toString(\'buffer\',$global),91,22,\'<image>/20_buffer.js\');$x357=&$x358[0];list(,$W357,$S357,$U357)=$x358;unset($x359,$W359,$S359,$U359);$x360=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x357,JS::toString(\'exports\',$global),91,29,\'<image>/20_buffer.js\');$x359=&$x360[0];list(,$W359,$S359,$U359)=$x360;unset($x361,$W361,$S361,$U361);$x362=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x359,JS::toString(\'Buffer\',$global),91,37,\'<image>/20_buffer.js\');$x361=&$x362[0];list(,$W361,$S361,$U361)=$x362;if($x361===JS::$undefined||$x361===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x364=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),91,53,\'<image>/20_buffer.js\');$_TypeError=&$x364[0];list(,$WTypeError,$STypeError,$UTypeError)=$x364;$x365=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x366=$x365($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x366->class)&&$x366->class===\'Error\'&&!isset($x366->properties[\'file\'])&&!isset($x366->properties[\'line\'])&&!isset($x366->properties[\'column\'])){$x366->properties[\'file\']=\'<image>/20_buffer.js\';$x366->properties[\'line\']=91;$x366->properties[\'column\']=53;$x366->attributes[\'file\']=$x366->attributes[\'line\']=$x366->attributes[\'column\']=0;}throw new JSException($x366,91,53,\'<image>/20_buffer.js\');}$x363=JS::toObject($x361,$global);unset($x367,$W367,$S367,$U367);$x368=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x363,JS::toString(\'isBuffer\',$global),91,53,\'<image>/20_buffer.js\');$x367=&$x368[0];list(,$W367,$S367,$U367)=$x368;if(!(is_object($x367)&&isset($x367->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x371=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),91,53,\'<image>/20_buffer.js\');$_TypeError=&$x371[0];list(,$WTypeError,$STypeError,$UTypeError)=$x371;$x372=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x373=$x372($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x373->class)&&$x373->class===\'Error\'&&!isset($x373->properties[\'file\'])&&!isset($x373->properties[\'line\'])&&!isset($x373->properties[\'column\'])){$x373->properties[\'file\']=\'<image>/20_buffer.js\';$x373->properties[\'line\']=91;$x373->properties[\'column\']=53;$x373->attributes[\'file\']=$x373->attributes[\'line\']=$x373->attributes[\'column\']=0;}throw new JSException($x373,91,53,\'<image>/20_buffer.js\');}$x369=$x367->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',91,53);$x370=$x369($global,$x363,$x367,array($_targetBuffer),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x370,$global)),$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x376=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),92,13,\'<image>/20_buffer.js\');$_TypeError=&$x376[0];list(,$WTypeError,$STypeError,$UTypeError)=$x376;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x377=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),92,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x377[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x377;$x378=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,13);$x379=$x378($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x379->class)&&$x379->class===\'Error\'&&!isset($x379->properties[\'file\'])&&!isset($x379->properties[\'line\'])&&!isset($x379->properties[\'column\'])){$x379->properties[\'file\']=\'<image>/20_buffer.js\';$x379->properties[\'line\']=92;$x379->properties[\'column\']=13;$x379->attributes[\'file\']=$x379->attributes[\'line\']=$x379->attributes[\'column\']=0;}throw new JSException($x379,92,13,\'<image>/20_buffer.js\');}$x374=clone JS::$objectTemplate;unset($x380,$W380,$S380,$U380);$x381=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),92,9,\'<image>/20_buffer.js\');$x380=&$x381[0];list(,$W380,$S380,$U380)=$x381;$x375=$x380;$x374->prototype=$x375;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x384=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x385=$x384($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x385->class)&&$x385->class===\'Error\'&&!isset($x385->properties[\'file\'])&&!isset($x385->properties[\'line\'])&&!isset($x385->properties[\'column\'])){$x385->properties[\'file\']=\'<image>/20_buffer.js\';$x385->properties[\'line\']=92;$x385->properties[\'column\']=9;$x385->attributes[\'file\']=$x385->attributes[\'line\']=$x385->attributes[\'column\']=0;}throw new JSException($x385,92,9,\'<image>/20_buffer.js\');}$x382=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',92,9);$x383=$x382($global,$x374,$_TypeError,array(\'Given first argument is not a buffer\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x375=$x383;if(is_object($x375)&&$x375!==JS::$undefined){$x374=$x375;}if(isset($x374->class)&&$x374->class===\'Error\'&&!isset($x374->properties[\'file\'])&&!isset($x374->properties[\'line\'])&&!isset($x374->properties[\'column\'])){$x374->properties[\'file\']=\'<image>/20_buffer.js\';$x374->properties[\'line\']=92;$x374->properties[\'column\']=3;$x374->attributes[\'file\']=$x374->attributes[\'line\']=$x374->attributes[\'column\']=0;}throw new JSException($x374,92,3,\'<image>/20_buffer.js\');}$x386=$_targetStart;if(!JS::toBoolean($x386,$global)){$x386=0;}if($UtargetStart){$global->properties[\'targetStart\']=$_targetStart;$_targetStart=&$global->properties[\'targetStart\'];}$_targetStart=$x386;$x387=$_sourceStart;if(!JS::toBoolean($x387,$global)){$x387=0;}if($UsourceStart){$global->properties[\'sourceStart\']=$_sourceStart;$_sourceStart=&$global->properties[\'sourceStart\'];}$_sourceStart=$x387;$x388=$_sourceEnd;if(!JS::toBoolean($x388,$global)){unset($x389,$W389,$S389,$U389);$x390=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),97,31,\'<image>/20_buffer.js\');$x389=&$x390[0];list(,$W389,$S389,$U389)=$x390;$x388=$x389;}if($UsourceEnd){$global->properties[\'sourceEnd\']=$_sourceEnd;$_sourceEnd=&$global->properties[\'sourceEnd\'];}$_sourceEnd=$x388;if($_targetBuffer===JS::$undefined||$_targetBuffer===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x392=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),99,20,\'<image>/20_buffer.js\');$_TypeError=&$x392[0];list(,$WTypeError,$STypeError,$UTypeError)=$x392;$x393=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x394=$x393($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x394->class)&&$x394->class===\'Error\'&&!isset($x394->properties[\'file\'])&&!isset($x394->properties[\'line\'])&&!isset($x394->properties[\'column\'])){$x394->properties[\'file\']=\'<image>/20_buffer.js\';$x394->properties[\'line\']=99;$x394->properties[\'column\']=20;$x394->attributes[\'file\']=$x394->attributes[\'line\']=$x394->attributes[\'column\']=0;}throw new JSException($x394,99,20,\'<image>/20_buffer.js\');}$x391=JS::toObject($_targetBuffer,$global);unset($x395,$W395,$S395,$U395);$x396=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x391,JS::toString(\'write\',$global),99,20,\'<image>/20_buffer.js\');$x395=&$x396[0];list(,$W395,$S395,$U395)=$x396;if(!(is_object($x395)&&isset($x395->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),99,20,\'<image>/20_buffer.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;$x400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x401=$x400($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x401->class)&&$x401->class===\'Error\'&&!isset($x401->properties[\'file\'])&&!isset($x401->properties[\'line\'])&&!isset($x401->properties[\'column\'])){$x401->properties[\'file\']=\'<image>/20_buffer.js\';$x401->properties[\'line\']=99;$x401->properties[\'column\']=20;$x401->attributes[\'file\']=$x401->attributes[\'line\']=$x401->attributes[\'column\']=0;}throw new JSException($x401,99,20,\'<image>/20_buffer.js\');}$x397=$x395->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',99,20);$x398=$x397($global,$x391,$x395,array(substr($leThis->value,$_sourceStart,$_sourceEnd-$_sourceStart),$_targetStart),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x423 =& $scope->properties['arguments'];
$x423->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x423->properties[$i] = $args[$i];
$x423->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x424 = JS::toNumber($_start, $global);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x424;
$x425 = JS::toNumber($_end, $global);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x425;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x428 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 106, 13, '<image>/20_buffer.js');
$_require =& $x428[0]; list(,$Wrequire,$Srequire,$Urequire) = $x428;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x429 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 106, 13, '<image>/20_buffer.js');
$_ReferenceError =& $x429[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x429;
$x430 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 13);
$x431 = $x430($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x431->class) && $x431->class === 'Error' && !isset($x431->properties['file']) && !isset($x431->properties['line']) && !isset($x431->properties['column'])) {$x431->properties['file'] = '<image>/20_buffer.js';$x431->properties['line'] = 106;$x431->properties['column'] = 13;$x431->attributes['file'] = $x431->attributes['line'] = $x431->attributes['column'] = 0; }
throw new JSException($x431, 106, 13, '<image>/20_buffer.js');
}
unset($x432, $W432, $S432, $U432);
$x433 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 106, 20, '<image>/20_buffer.js');
$x432 =& $x433[0]; list(,$W432,$S432,$U432) = $x433;
unset($x434, $W434, $S434, $U434);
$x435 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x432, JS::toString('buffer', $global), 106, 28, '<image>/20_buffer.js');
$x434 =& $x435[0]; list(,$W434,$S434,$U434) = $x435;
unset($x436, $W436, $S436, $U436);
$x437 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x434, JS::toString('exports', $global), 106, 35, '<image>/20_buffer.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
unset($x438, $W438, $S438, $U438);
$x439 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x436, JS::toString('Buffer', $global), 106, 43, '<image>/20_buffer.js');
$x438 =& $x439[0]; list(,$W438,$S438,$U438) = $x439;
$x426 = clone JS::$objectTemplate;
unset($x440, $W440, $S440, $U440);
$x441 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x438, JS::toString('prototype', $global), 106, 9, '<image>/20_buffer.js');
$x440 =& $x441[0]; list(,$W440,$S440,$U440) = $x441;
$x427 = $x440;
$x426->prototype = $x427;
if (!(is_object($x438) && isset($x438->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x444 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 106, 9, '<image>/20_buffer.js');
$_TypeError =& $x444[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x444;
$x445 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x446 = $x445($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x446->class) && $x446->class === 'Error' && !isset($x446->properties['file']) && !isset($x446->properties['line']) && !isset($x446->properties['column'])) {$x446->properties['file'] = '<image>/20_buffer.js';$x446->properties['line'] = 106;$x446->properties['column'] = 9;$x446->attributes['file'] = $x446->attributes['line'] = $x446->attributes['column'] = 0; }
throw new JSException($x446, 106, 9, '<image>/20_buffer.js');
}
$x442 = $x438->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 106, 9);
$x443 = $x442($global, $x426, $x438, array(substr($leThis->value,$_start,$_end-$_start)), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x427 = $x443;
if (is_object($x427) && $x427 !== JS::$undefined) { $x426 = $x427; }
return $x426;
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x423=&$scope->properties[\'arguments\'];$x423->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x423->properties[$i]=$args[$i];$x423->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'slice\']=$fn;$_slice=&$scope->properties[\'slice\'];$global->scope[++$global->scope_sp]=$scope;$x424=JS::toNumber($_start,$global);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x424;$x425=JS::toNumber($_end,$global);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x425;unset($_require,$Wrequire,$Srequire,$Urequire);$x428=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'require\',$global),106,13,\'<image>/20_buffer.js\');$_require=&$x428[0];list(,$Wrequire,$Srequire,$Urequire)=$x428;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x429=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),106,13,\'<image>/20_buffer.js\');$_ReferenceError=&$x429[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x429;$x430=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,13);$x431=$x430($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x431->class)&&$x431->class===\'Error\'&&!isset($x431->properties[\'file\'])&&!isset($x431->properties[\'line\'])&&!isset($x431->properties[\'column\'])){$x431->properties[\'file\']=\'<image>/20_buffer.js\';$x431->properties[\'line\']=106;$x431->properties[\'column\']=13;$x431->attributes[\'file\']=$x431->attributes[\'line\']=$x431->attributes[\'column\']=0;}throw new JSException($x431,106,13,\'<image>/20_buffer.js\');}unset($x432,$W432,$S432,$U432);$x433=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$_require,JS::toString(\'modules\',$global),106,20,\'<image>/20_buffer.js\');$x432=&$x433[0];list(,$W432,$S432,$U432)=$x433;unset($x434,$W434,$S434,$U434);$x435=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x432,JS::toString(\'buffer\',$global),106,28,\'<image>/20_buffer.js\');$x434=&$x435[0];list(,$W434,$S434,$U434)=$x435;unset($x436,$W436,$S436,$U436);$x437=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x434,JS::toString(\'exports\',$global),106,35,\'<image>/20_buffer.js\');$x436=&$x437[0];list(,$W436,$S436,$U436)=$x437;unset($x438,$W438,$S438,$U438);$x439=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x436,JS::toString(\'Buffer\',$global),106,43,\'<image>/20_buffer.js\');$x438=&$x439[0];list(,$W438,$S438,$U438)=$x439;$x426=clone JS::$objectTemplate;unset($x440,$W440,$S440,$U440);$x441=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x438,JS::toString(\'prototype\',$global),106,9,\'<image>/20_buffer.js\');$x440=&$x441[0];list(,$W440,$S440,$U440)=$x441;$x427=$x440;$x426->prototype=$x427;if(!(is_object($x438)&&isset($x438->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x444=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),106,9,\'<image>/20_buffer.js\');$_TypeError=&$x444[0];list(,$WTypeError,$STypeError,$UTypeError)=$x444;$x445=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x446=$x445($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x446->class)&&$x446->class===\'Error\'&&!isset($x446->properties[\'file\'])&&!isset($x446->properties[\'line\'])&&!isset($x446->properties[\'column\'])){$x446->properties[\'file\']=\'<image>/20_buffer.js\';$x446->properties[\'line\']=106;$x446->properties[\'column\']=9;$x446->attributes[\'file\']=$x446->attributes[\'line\']=$x446->attributes[\'column\']=0;}throw new JSException($x446,106,9,\'<image>/20_buffer.js\');}$x442=$x438->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',106,9);$x443=$x442($global,$x426,$x438,array(substr($leThis->value,$_start,$_end-$_start)),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x427=$x443;if(is_object($x427)&&$x427!==JS::$undefined){$x426=$x427;}return$x426;return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x468 =& $scope->properties['arguments'];
$x468->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x468->properties[$i] = $args[$i];
$x468->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x469 = JS::toString($_value, $global);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x469;
if ($_value === JS::$undefined || $_value === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x471 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x471[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x471;
$x472 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x473 = $x472($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x473->class) && $x473->class === 'Error' && !isset($x473->properties['file']) && !isset($x473->properties['line']) && !isset($x473->properties['column'])) {$x473->properties['file'] = '<image>/20_buffer.js';$x473->properties['line'] = 113;$x473->properties['column'] = 25;$x473->attributes['file'] = $x473->attributes['line'] = $x473->attributes['column'] = 0; }
throw new JSException($x473, 113, 25, '<image>/20_buffer.js');
}
$x470 = JS::toObject($_value, $global);
unset($x474, $W474, $S474, $U474);
$x475 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x470, JS::toString('substring', $global), 113, 25, '<image>/20_buffer.js');
$x474 =& $x475[0]; list(,$W474,$S474,$U474) = $x475;
if (!(is_object($x474) && isset($x474->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x478 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 25, '<image>/20_buffer.js');
$_TypeError =& $x478[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x478;
$x479 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x480 = $x479($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x480->class) && $x480->class === 'Error' && !isset($x480->properties['file']) && !isset($x480->properties['line']) && !isset($x480->properties['column'])) {$x480->properties['file'] = '<image>/20_buffer.js';$x480->properties['line'] = 113;$x480->properties['column'] = 25;$x480->attributes['file'] = $x480->attributes['line'] = $x480->attributes['column'] = 0; }
throw new JSException($x480, 113, 25, '<image>/20_buffer.js');
}
$x476 = $x474->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 113, 25);
$x477 = $x476($global, $x470, $x474, array(0, 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x477;
$x481 = $_offset;
if (!JS::toBoolean($x481, $global)) {
$x481 = 0; }
if ($Uoffset) {$global->properties['offset'] = $_offset; $_offset =& $global->properties['offset']; }
$_offset = $x481;
$x482 = $_end;
if (!JS::toBoolean($x482, $global)) {
unset($x483, $W483, $S483, $U483);
$x484 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $leThis, JS::toString('length', $global), 115, 19, '<image>/20_buffer.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
$x482 = $x483; }
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x482;
for ($x485 = 0;; ++$x485) {
if ($x485 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_offset;
}
if ($x485 !== 0) {
$x486 = ++$_i;
}
$x487 = JS::toPrimitive($_i, $global);
$x488 = JS::toPrimitive($_end, $global);
$x489 = (is_string($x487) && is_string($x488) ? strcmp($x487, $x488) < 0 : (!is_nan($x490 = JS::toNumber($x487, $global)) && !is_nan($x491 = JS::toNumber($x488, $global)) && $x490 < $x491));
if (!JS::toBoolean($x489, $global)) { break; }


$leThis->value[$_i] =$_value;;
};
;
return JS::$undefined;
}
echo 'function _f915aaba5b76f6e13a986dca9da58f68_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x468=&$scope->properties[\'arguments\'];$x468->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x468->properties[$i]=$args[$i];$x468->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'offset\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$scope->properties[\'end\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$scope->properties[\'fill\']=$fn;$_fill=&$scope->properties[\'fill\'];$global->scope[++$global->scope_sp]=$scope;$x469=JS::toString($_value,$global);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x469;if($_value===JS::$undefined||$_value===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x471=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,25,\'<image>/20_buffer.js\');$_TypeError=&$x471[0];list(,$WTypeError,$STypeError,$UTypeError)=$x471;$x472=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x473=$x472($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x473->class)&&$x473->class===\'Error\'&&!isset($x473->properties[\'file\'])&&!isset($x473->properties[\'line\'])&&!isset($x473->properties[\'column\'])){$x473->properties[\'file\']=\'<image>/20_buffer.js\';$x473->properties[\'line\']=113;$x473->properties[\'column\']=25;$x473->attributes[\'file\']=$x473->attributes[\'line\']=$x473->attributes[\'column\']=0;}throw new JSException($x473,113,25,\'<image>/20_buffer.js\');}$x470=JS::toObject($_value,$global);unset($x474,$W474,$S474,$U474);$x475=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$x470,JS::toString(\'substring\',$global),113,25,\'<image>/20_buffer.js\');$x474=&$x475[0];list(,$W474,$S474,$U474)=$x475;if(!(is_object($x474)&&isset($x474->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x478=_f915aaba5b76f6e13a986dca9da58f68_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,25,\'<image>/20_buffer.js\');$_TypeError=&$x478[0];list(,$WTypeError,$STypeError,$UTypeError)=$x478;$x479=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x480=$x479($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x480->class)&&$x480->class===\'Error\'&&!isset($x480->properties[\'file\'])&&!isset($x480->properties[\'line\'])&&!isset($x480->properties[\'column\'])){$x480->properties[\'file\']=\'<image>/20_buffer.js\';$x480->properties[\'line\']=113;$x480->properties[\'column\']=25;$x480->attributes[\'file\']=$x480->attributes[\'line\']=$x480->attributes[\'column\']=0;}throw new JSException($x480,113,25,\'<image>/20_buffer.js\');}$x476=$x474->call;$global->trace[++$global->trace_sp]=array(\'<image>/20_buffer.js\',113,25);$x477=$x476($global,$x470,$x474,array(0,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x477;$x481=$_offset;if(!JS::toBoolean($x481,$global)){$x481=0;}if($Uoffset){$global->properties[\'offset\']=$_offset;$_offset=&$global->properties[\'offset\'];}$_offset=$x481;$x482=$_end;if(!JS::toBoolean($x482,$global)){unset($x483,$W483,$S483,$U483);$x484=_f915aaba5b76f6e13a986dca9da58f68_3($global,$scope,$leThis,JS::toString(\'length\',$global),115,19,\'<image>/20_buffer.js\');$x483=&$x484[0];list(,$W483,$S483,$U483)=$x484;$x482=$x483;}if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x482;for($x485=0;;++$x485){if($x485===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_offset;}if($x485!==0){$x486=++$_i;}$x487=JS::toPrimitive($_i,$global);$x488=JS::toPrimitive($_end,$global);$x489=(is_string($x487)&&is_string($x488)?strcmp($x487,$x488)<0:(!is_nan($x490=JS::toNumber($x487,$global))&&!is_nan($x491=JS::toNumber($x488,$global))&&$x490<$x491));if(!JS::toBoolean($x489,$global)){break;}$leThis->value[$_i]=$_value;}return JS::$undefined;}', "\n";
function _f915aaba5b76f6e13a986dca9da58f68_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/20_buffer.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/20_buffer.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x83 = clone JS::$functionTemplate; $x83->call = '_f915aaba5b76f6e13a986dca9da58f68_1'; $x83->parameters = array (
  0 => 'x',
); $x83->name = 'Buffer'; $x83->scope = $scope; $x83->properties['prototype'] = clone JS::$objectTemplate; $x83->attributes['prototype'] = JS::WRITABLE; $x83->properties['prototype']->properties['constructor'] = $x83; $x83->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x83->properties['length'] = 1; $x83->attributes['length'] = 0;
$x1->properties['Buffer'] = $x83;
$x1->attributes['Buffer'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['exports'] = $x1;
$x0->attributes['exports'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x84 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('require', $global), 1, 1, '<image>/20_buffer.js');
$_require =& $x84[0]; list(,$Wrequire,$Srequire,$Urequire) = $x84;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x85 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 1, 1, '<image>/20_buffer.js');
$_ReferenceError =& $x85[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x85;
$x86 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 1);
$x87 = $x86($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x87->class) && $x87->class === 'Error' && !isset($x87->properties['file']) && !isset($x87->properties['line']) && !isset($x87->properties['column'])) {$x87->properties['file'] = '<image>/20_buffer.js';$x87->properties['line'] = 1;$x87->properties['column'] = 1;$x87->attributes['file'] = $x87->attributes['line'] = $x87->attributes['column'] = 0; }
throw new JSException($x87, 1, 1, '<image>/20_buffer.js');
}
unset($x88, $W88, $S88, $U88);
$x89 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 1, 8, '<image>/20_buffer.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
$x90 = JS::toString('buffer', $global);
if ($x88 === JS::$undefined || $x88 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 1, 24, '<image>/20_buffer.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/20_buffer.js';$x93->properties['line'] = 1;$x93->properties['column'] = 24;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 1, 24, '<image>/20_buffer.js');
}
$x88 = JS::toObject($x88, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x88, JS::toString($x90, $global), 1, 24, '<image>/20_buffer.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($x88->extensible) || $x88->extensible)) {$x88->properties[$x90] = $x94; $x94 =& $x88->properties[$x90]; $x88->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($S94)) {
$x97 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 1, 24);
$x98 = $x97($global, $x88, $S94, array($x0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x98;
} else {
if (!$U94) {$x96 = $x0;if ($W94) { $x94 = $x0; }  }
else { $x96 = JS::$undefined; }
}
if (isset($x88->class) && $x88->class === 'Array' &&  is_int('buffer') && 'buffer' >= $x88->properties['length']) { $x88->properties['length'] = 'buffer' + 1; };
$x101 = clone JS::$functionTemplate; $x101->call = '_f915aaba5b76f6e13a986dca9da58f68_5'; $x101->parameters = array (
  0 => 'buf',
); $x101->name = 'isBuffer'; $x101->scope = $scope; $x101->properties['prototype'] = clone JS::$objectTemplate; $x101->attributes['prototype'] = JS::WRITABLE; $x101->properties['prototype']->properties['constructor'] = $x101; $x101->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x101->properties['length'] = 1; $x101->attributes['length'] = 0;
unset($x102, $W102, $S102, $U102);
$x103 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 32, 8, '<image>/20_buffer.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
unset($x104, $W104, $S104, $U104);
$x105 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x102, JS::toString('buffer', $global), 32, 16, '<image>/20_buffer.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
unset($x106, $W106, $S106, $U106);
$x107 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x104, JS::toString('exports', $global), 32, 23, '<image>/20_buffer.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
unset($x108, $W108, $S108, $U108);
$x109 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x106, JS::toString('Buffer', $global), 32, 31, '<image>/20_buffer.js');
$x108 =& $x109[0]; list(,$W108,$S108,$U108) = $x109;
$x110 = JS::toString('isBuffer', $global);
if ($x108 === JS::$undefined || $x108 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x111 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 32, 48, '<image>/20_buffer.js');
$_TypeError =& $x111[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x111;
$x112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x113 = $x112($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error' && !isset($x113->properties['file']) && !isset($x113->properties['line']) && !isset($x113->properties['column'])) {$x113->properties['file'] = '<image>/20_buffer.js';$x113->properties['line'] = 32;$x113->properties['column'] = 48;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 32, 48, '<image>/20_buffer.js');
}
$x108 = JS::toObject($x108, $global);
unset($x114, $W114, $S114, $U114);
$x115 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x108, JS::toString($x110, $global), 32, 48, '<image>/20_buffer.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
if ($U114 && (!isset($x108->extensible) || $x108->extensible)) {$x108->properties[$x110] = $x114; $x114 =& $x108->properties[$x110]; $x108->attributes[$x110] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U114 = FALSE; $W114 = TRUE; }
if (isset($S114)) {
$x117 = $S114->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 32, 48);
$x118 = $x117($global, $x108, $S114, array($x101), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x116 = $x118;
} else {
if (!$U114) {$x116 = $x101;if ($W114) { $x114 = $x101; }  }
else { $x116 = JS::$undefined; }
}
if (isset($x108->class) && $x108->class === 'Array' &&  is_int('isBuffer') && 'isBuffer' >= $x108->properties['length']) { $x108->properties['length'] = 'isBuffer' + 1; };
$x121 = clone JS::$functionTemplate; $x121->call = '_f915aaba5b76f6e13a986dca9da58f68_6'; $x121->parameters = array (
  0 => 'string',
); $x121->name = 'byteLength'; $x121->scope = $scope; $x121->properties['prototype'] = clone JS::$objectTemplate; $x121->attributes['prototype'] = JS::WRITABLE; $x121->properties['prototype']->properties['constructor'] = $x121; $x121->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x121->properties['length'] = 1; $x121->attributes['length'] = 0;
unset($x122, $W122, $S122, $U122);
$x123 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 36, 8, '<image>/20_buffer.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
unset($x124, $W124, $S124, $U124);
$x125 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x122, JS::toString('buffer', $global), 36, 16, '<image>/20_buffer.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
unset($x126, $W126, $S126, $U126);
$x127 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x124, JS::toString('exports', $global), 36, 23, '<image>/20_buffer.js');
$x126 =& $x127[0]; list(,$W126,$S126,$U126) = $x127;
unset($x128, $W128, $S128, $U128);
$x129 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x126, JS::toString('Buffer', $global), 36, 31, '<image>/20_buffer.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x130 = JS::toString('byteLength', $global);
if ($x128 === JS::$undefined || $x128 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 36, 50, '<image>/20_buffer.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x133 = $x132($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error' && !isset($x133->properties['file']) && !isset($x133->properties['line']) && !isset($x133->properties['column'])) {$x133->properties['file'] = '<image>/20_buffer.js';$x133->properties['line'] = 36;$x133->properties['column'] = 50;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 36, 50, '<image>/20_buffer.js');
}
$x128 = JS::toObject($x128, $global);
unset($x134, $W134, $S134, $U134);
$x135 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x128, JS::toString($x130, $global), 36, 50, '<image>/20_buffer.js');
$x134 =& $x135[0]; list(,$W134,$S134,$U134) = $x135;
if ($U134 && (!isset($x128->extensible) || $x128->extensible)) {$x128->properties[$x130] = $x134; $x134 =& $x128->properties[$x130]; $x128->attributes[$x130] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U134 = FALSE; $W134 = TRUE; }
if (isset($S134)) {
$x137 = $S134->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 36, 50);
$x138 = $x137($global, $x128, $S134, array($x121), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x138;
} else {
if (!$U134) {$x136 = $x121;if ($W134) { $x134 = $x121; }  }
else { $x136 = JS::$undefined; }
}
if (isset($x128->class) && $x128->class === 'Array' &&  is_int('byteLength') && 'byteLength' >= $x128->properties['length']) { $x128->properties['length'] = 'byteLength' + 1; };
$x265 = clone JS::$functionTemplate; $x265->call = '_f915aaba5b76f6e13a986dca9da58f68_7'; $x265->parameters = array (
  0 => 'list',
  1 => 'totalLength',
); $x265->name = 'concat'; $x265->scope = $scope; $x265->properties['prototype'] = clone JS::$objectTemplate; $x265->attributes['prototype'] = JS::WRITABLE; $x265->properties['prototype']->properties['constructor'] = $x265; $x265->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x265->properties['length'] = 2; $x265->attributes['length'] = 0;
unset($x266, $W266, $S266, $U266);
$x267 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 40, 8, '<image>/20_buffer.js');
$x266 =& $x267[0]; list(,$W266,$S266,$U266) = $x267;
unset($x268, $W268, $S268, $U268);
$x269 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x266, JS::toString('buffer', $global), 40, 16, '<image>/20_buffer.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
unset($x270, $W270, $S270, $U270);
$x271 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x268, JS::toString('exports', $global), 40, 23, '<image>/20_buffer.js');
$x270 =& $x271[0]; list(,$W270,$S270,$U270) = $x271;
unset($x272, $W272, $S272, $U272);
$x273 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x270, JS::toString('Buffer', $global), 40, 31, '<image>/20_buffer.js');
$x272 =& $x273[0]; list(,$W272,$S272,$U272) = $x273;
$x274 = JS::toString('concat', $global);
if ($x272 === JS::$undefined || $x272 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x275 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 40, 46, '<image>/20_buffer.js');
$_TypeError =& $x275[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x275;
$x276 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x277 = $x276($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x277->class) && $x277->class === 'Error' && !isset($x277->properties['file']) && !isset($x277->properties['line']) && !isset($x277->properties['column'])) {$x277->properties['file'] = '<image>/20_buffer.js';$x277->properties['line'] = 40;$x277->properties['column'] = 46;$x277->attributes['file'] = $x277->attributes['line'] = $x277->attributes['column'] = 0; }
throw new JSException($x277, 40, 46, '<image>/20_buffer.js');
}
$x272 = JS::toObject($x272, $global);
unset($x278, $W278, $S278, $U278);
$x279 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x272, JS::toString($x274, $global), 40, 46, '<image>/20_buffer.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
if ($U278 && (!isset($x272->extensible) || $x272->extensible)) {$x272->properties[$x274] = $x278; $x278 =& $x272->properties[$x274]; $x272->attributes[$x274] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U278 = FALSE; $W278 = TRUE; }
if (isset($S278)) {
$x281 = $S278->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 40, 46);
$x282 = $x281($global, $x272, $S278, array($x265), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x280 = $x282;
} else {
if (!$U278) {$x280 = $x265;if ($W278) { $x278 = $x265; }  }
else { $x280 = JS::$undefined; }
}
if (isset($x272->class) && $x272->class === 'Array' &&  is_int('concat') && 'concat' >= $x272->properties['length']) { $x272->properties['length'] = 'concat' + 1; };
$x307 = clone JS::$functionTemplate; $x307->call = '_f915aaba5b76f6e13a986dca9da58f68_8'; $x307->parameters = array (
  0 => 'string',
  1 => 'offset',
  2 => 'length',
  3 => 'encoding',
); $x307->name = 'write'; $x307->scope = $scope; $x307->properties['prototype'] = clone JS::$objectTemplate; $x307->attributes['prototype'] = JS::WRITABLE; $x307->properties['prototype']->properties['constructor'] = $x307; $x307->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x307->properties['length'] = 4; $x307->attributes['length'] = 0;
unset($x308, $W308, $S308, $U308);
$x309 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 70, 8, '<image>/20_buffer.js');
$x308 =& $x309[0]; list(,$W308,$S308,$U308) = $x309;
unset($x310, $W310, $S310, $U310);
$x311 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x308, JS::toString('buffer', $global), 70, 16, '<image>/20_buffer.js');
$x310 =& $x311[0]; list(,$W310,$S310,$U310) = $x311;
unset($x312, $W312, $S312, $U312);
$x313 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x310, JS::toString('exports', $global), 70, 23, '<image>/20_buffer.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
unset($x314, $W314, $S314, $U314);
$x315 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x312, JS::toString('Buffer', $global), 70, 31, '<image>/20_buffer.js');
$x314 =& $x315[0]; list(,$W314,$S314,$U314) = $x315;
unset($x316, $W316, $S316, $U316);
$x317 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x314, JS::toString('prototype', $global), 70, 38, '<image>/20_buffer.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
$x318 = JS::toString('write', $global);
if ($x316 === JS::$undefined || $x316 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x319 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 70, 55, '<image>/20_buffer.js');
$_TypeError =& $x319[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x319;
$x320 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x321 = $x320($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x321->class) && $x321->class === 'Error' && !isset($x321->properties['file']) && !isset($x321->properties['line']) && !isset($x321->properties['column'])) {$x321->properties['file'] = '<image>/20_buffer.js';$x321->properties['line'] = 70;$x321->properties['column'] = 55;$x321->attributes['file'] = $x321->attributes['line'] = $x321->attributes['column'] = 0; }
throw new JSException($x321, 70, 55, '<image>/20_buffer.js');
}
$x316 = JS::toObject($x316, $global);
unset($x322, $W322, $S322, $U322);
$x323 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x316, JS::toString($x318, $global), 70, 55, '<image>/20_buffer.js');
$x322 =& $x323[0]; list(,$W322,$S322,$U322) = $x323;
if ($U322 && (!isset($x316->extensible) || $x316->extensible)) {$x316->properties[$x318] = $x322; $x322 =& $x316->properties[$x318]; $x316->attributes[$x318] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U322 = FALSE; $W322 = TRUE; }
if (isset($S322)) {
$x325 = $S322->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 70, 55);
$x326 = $x325($global, $x316, $S322, array($x307), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x324 = $x326;
} else {
if (!$U322) {$x324 = $x307;if ($W322) { $x322 = $x307; }  }
else { $x324 = JS::$undefined; }
}
if (isset($x316->class) && $x316->class === 'Array' &&  is_int('write') && 'write' >= $x316->properties['length']) { $x316->properties['length'] = 'write' + 1; };
$x329 = clone JS::$functionTemplate; $x329->call = '_f915aaba5b76f6e13a986dca9da58f68_10'; $x329->parameters = array (
); $x329->name = 'toString'; $x329->scope = $scope; $x329->properties['prototype'] = clone JS::$objectTemplate; $x329->attributes['prototype'] = JS::WRITABLE; $x329->properties['prototype']->properties['constructor'] = $x329; $x329->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x329->properties['length'] = 0; $x329->attributes['length'] = 0;
unset($x330, $W330, $S330, $U330);
$x331 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 86, 8, '<image>/20_buffer.js');
$x330 =& $x331[0]; list(,$W330,$S330,$U330) = $x331;
unset($x332, $W332, $S332, $U332);
$x333 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x330, JS::toString('buffer', $global), 86, 16, '<image>/20_buffer.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
unset($x334, $W334, $S334, $U334);
$x335 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x332, JS::toString('exports', $global), 86, 23, '<image>/20_buffer.js');
$x334 =& $x335[0]; list(,$W334,$S334,$U334) = $x335;
unset($x336, $W336, $S336, $U336);
$x337 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x334, JS::toString('Buffer', $global), 86, 31, '<image>/20_buffer.js');
$x336 =& $x337[0]; list(,$W336,$S336,$U336) = $x337;
unset($x338, $W338, $S338, $U338);
$x339 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x336, JS::toString('prototype', $global), 86, 38, '<image>/20_buffer.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x340 = JS::toString('toString', $global);
if ($x338 === JS::$undefined || $x338 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x341 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 86, 58, '<image>/20_buffer.js');
$_TypeError =& $x341[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x341;
$x342 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x343 = $x342($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x343->class) && $x343->class === 'Error' && !isset($x343->properties['file']) && !isset($x343->properties['line']) && !isset($x343->properties['column'])) {$x343->properties['file'] = '<image>/20_buffer.js';$x343->properties['line'] = 86;$x343->properties['column'] = 58;$x343->attributes['file'] = $x343->attributes['line'] = $x343->attributes['column'] = 0; }
throw new JSException($x343, 86, 58, '<image>/20_buffer.js');
}
$x338 = JS::toObject($x338, $global);
unset($x344, $W344, $S344, $U344);
$x345 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x338, JS::toString($x340, $global), 86, 58, '<image>/20_buffer.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
if ($U344 && (!isset($x338->extensible) || $x338->extensible)) {$x338->properties[$x340] = $x344; $x344 =& $x338->properties[$x340]; $x338->attributes[$x340] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U344 = FALSE; $W344 = TRUE; }
if (isset($S344)) {
$x347 = $S344->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 86, 58);
$x348 = $x347($global, $x338, $S344, array($x329), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x346 = $x348;
} else {
if (!$U344) {$x346 = $x329;if ($W344) { $x344 = $x329; }  }
else { $x346 = JS::$undefined; }
}
if (isset($x338->class) && $x338->class === 'Array' &&  is_int('toString') && 'toString' >= $x338->properties['length']) { $x338->properties['length'] = 'toString' + 1; };
$x402 = clone JS::$functionTemplate; $x402->call = '_f915aaba5b76f6e13a986dca9da58f68_11'; $x402->parameters = array (
  0 => 'targetBuffer',
  1 => 'targetStart',
  2 => 'sourceStart',
  3 => 'sourceEnd',
); $x402->name = 'copy'; $x402->scope = $scope; $x402->properties['prototype'] = clone JS::$objectTemplate; $x402->attributes['prototype'] = JS::WRITABLE; $x402->properties['prototype']->properties['constructor'] = $x402; $x402->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x402->properties['length'] = 4; $x402->attributes['length'] = 0;
unset($x403, $W403, $S403, $U403);
$x404 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 90, 8, '<image>/20_buffer.js');
$x403 =& $x404[0]; list(,$W403,$S403,$U403) = $x404;
unset($x405, $W405, $S405, $U405);
$x406 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x403, JS::toString('buffer', $global), 90, 16, '<image>/20_buffer.js');
$x405 =& $x406[0]; list(,$W405,$S405,$U405) = $x406;
unset($x407, $W407, $S407, $U407);
$x408 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x405, JS::toString('exports', $global), 90, 23, '<image>/20_buffer.js');
$x407 =& $x408[0]; list(,$W407,$S407,$U407) = $x408;
unset($x409, $W409, $S409, $U409);
$x410 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x407, JS::toString('Buffer', $global), 90, 31, '<image>/20_buffer.js');
$x409 =& $x410[0]; list(,$W409,$S409,$U409) = $x410;
unset($x411, $W411, $S411, $U411);
$x412 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x409, JS::toString('prototype', $global), 90, 38, '<image>/20_buffer.js');
$x411 =& $x412[0]; list(,$W411,$S411,$U411) = $x412;
$x413 = JS::toString('copy', $global);
if ($x411 === JS::$undefined || $x411 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x414 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 54, '<image>/20_buffer.js');
$_TypeError =& $x414[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x414;
$x415 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x416 = $x415($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x416->class) && $x416->class === 'Error' && !isset($x416->properties['file']) && !isset($x416->properties['line']) && !isset($x416->properties['column'])) {$x416->properties['file'] = '<image>/20_buffer.js';$x416->properties['line'] = 90;$x416->properties['column'] = 54;$x416->attributes['file'] = $x416->attributes['line'] = $x416->attributes['column'] = 0; }
throw new JSException($x416, 90, 54, '<image>/20_buffer.js');
}
$x411 = JS::toObject($x411, $global);
unset($x417, $W417, $S417, $U417);
$x418 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x411, JS::toString($x413, $global), 90, 54, '<image>/20_buffer.js');
$x417 =& $x418[0]; list(,$W417,$S417,$U417) = $x418;
if ($U417 && (!isset($x411->extensible) || $x411->extensible)) {$x411->properties[$x413] = $x417; $x417 =& $x411->properties[$x413]; $x411->attributes[$x413] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U417 = FALSE; $W417 = TRUE; }
if (isset($S417)) {
$x420 = $S417->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 90, 54);
$x421 = $x420($global, $x411, $S417, array($x402), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x419 = $x421;
} else {
if (!$U417) {$x419 = $x402;if ($W417) { $x417 = $x402; }  }
else { $x419 = JS::$undefined; }
}
if (isset($x411->class) && $x411->class === 'Array' &&  is_int('copy') && 'copy' >= $x411->properties['length']) { $x411->properties['length'] = 'copy' + 1; };
$x447 = clone JS::$functionTemplate; $x447->call = '_f915aaba5b76f6e13a986dca9da58f68_12'; $x447->parameters = array (
  0 => 'start',
  1 => 'end',
); $x447->name = 'slice'; $x447->scope = $scope; $x447->properties['prototype'] = clone JS::$objectTemplate; $x447->attributes['prototype'] = JS::WRITABLE; $x447->properties['prototype']->properties['constructor'] = $x447; $x447->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x447->properties['length'] = 2; $x447->attributes['length'] = 0;
unset($x448, $W448, $S448, $U448);
$x449 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 102, 8, '<image>/20_buffer.js');
$x448 =& $x449[0]; list(,$W448,$S448,$U448) = $x449;
unset($x450, $W450, $S450, $U450);
$x451 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x448, JS::toString('buffer', $global), 102, 16, '<image>/20_buffer.js');
$x450 =& $x451[0]; list(,$W450,$S450,$U450) = $x451;
unset($x452, $W452, $S452, $U452);
$x453 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x450, JS::toString('exports', $global), 102, 23, '<image>/20_buffer.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
unset($x454, $W454, $S454, $U454);
$x455 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x452, JS::toString('Buffer', $global), 102, 31, '<image>/20_buffer.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
unset($x456, $W456, $S456, $U456);
$x457 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x454, JS::toString('prototype', $global), 102, 38, '<image>/20_buffer.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
$x458 = JS::toString('slice', $global);
if ($x456 === JS::$undefined || $x456 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x459 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 102, 55, '<image>/20_buffer.js');
$_TypeError =& $x459[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x459;
$x460 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x461 = $x460($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x461->class) && $x461->class === 'Error' && !isset($x461->properties['file']) && !isset($x461->properties['line']) && !isset($x461->properties['column'])) {$x461->properties['file'] = '<image>/20_buffer.js';$x461->properties['line'] = 102;$x461->properties['column'] = 55;$x461->attributes['file'] = $x461->attributes['line'] = $x461->attributes['column'] = 0; }
throw new JSException($x461, 102, 55, '<image>/20_buffer.js');
}
$x456 = JS::toObject($x456, $global);
unset($x462, $W462, $S462, $U462);
$x463 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x456, JS::toString($x458, $global), 102, 55, '<image>/20_buffer.js');
$x462 =& $x463[0]; list(,$W462,$S462,$U462) = $x463;
if ($U462 && (!isset($x456->extensible) || $x456->extensible)) {$x456->properties[$x458] = $x462; $x462 =& $x456->properties[$x458]; $x456->attributes[$x458] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U462 = FALSE; $W462 = TRUE; }
if (isset($S462)) {
$x465 = $S462->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 102, 55);
$x466 = $x465($global, $x456, $S462, array($x447), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x464 = $x466;
} else {
if (!$U462) {$x464 = $x447;if ($W462) { $x462 = $x447; }  }
else { $x464 = JS::$undefined; }
}
if (isset($x456->class) && $x456->class === 'Array' &&  is_int('slice') && 'slice' >= $x456->properties['length']) { $x456->properties['length'] = 'slice' + 1; };
$x492 = clone JS::$functionTemplate; $x492->call = '_f915aaba5b76f6e13a986dca9da58f68_13'; $x492->parameters = array (
  0 => 'value',
  1 => 'offset',
  2 => 'end',
); $x492->name = 'fill'; $x492->scope = $scope; $x492->properties['prototype'] = clone JS::$objectTemplate; $x492->attributes['prototype'] = JS::WRITABLE; $x492->properties['prototype']->properties['constructor'] = $x492; $x492->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x492->properties['length'] = 3; $x492->attributes['length'] = 0;
unset($x493, $W493, $S493, $U493);
$x494 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $_require, JS::toString('modules', $global), 111, 8, '<image>/20_buffer.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
unset($x495, $W495, $S495, $U495);
$x496 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x493, JS::toString('buffer', $global), 111, 16, '<image>/20_buffer.js');
$x495 =& $x496[0]; list(,$W495,$S495,$U495) = $x496;
unset($x497, $W497, $S497, $U497);
$x498 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x495, JS::toString('exports', $global), 111, 23, '<image>/20_buffer.js');
$x497 =& $x498[0]; list(,$W497,$S497,$U497) = $x498;
unset($x499, $W499, $S499, $U499);
$x500 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x497, JS::toString('Buffer', $global), 111, 31, '<image>/20_buffer.js');
$x499 =& $x500[0]; list(,$W499,$S499,$U499) = $x500;
unset($x501, $W501, $S501, $U501);
$x502 = _f915aaba5b76f6e13a986dca9da58f68_3($global, $scope, $x499, JS::toString('prototype', $global), 111, 38, '<image>/20_buffer.js');
$x501 =& $x502[0]; list(,$W501,$S501,$U501) = $x502;
$x503 = JS::toString('fill', $global);
if ($x501 === JS::$undefined || $x501 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x504 = _f915aaba5b76f6e13a986dca9da58f68_2($global, $scope, $scope, JS::toString('TypeError', $global), 111, 54, '<image>/20_buffer.js');
$_TypeError =& $x504[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x504;
$x505 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x506 = $x505($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x506->class) && $x506->class === 'Error' && !isset($x506->properties['file']) && !isset($x506->properties['line']) && !isset($x506->properties['column'])) {$x506->properties['file'] = '<image>/20_buffer.js';$x506->properties['line'] = 111;$x506->properties['column'] = 54;$x506->attributes['file'] = $x506->attributes['line'] = $x506->attributes['column'] = 0; }
throw new JSException($x506, 111, 54, '<image>/20_buffer.js');
}
$x501 = JS::toObject($x501, $global);
unset($x507, $W507, $S507, $U507);
$x508 = _f915aaba5b76f6e13a986dca9da58f68_4($global, $scope, $x501, JS::toString($x503, $global), 111, 54, '<image>/20_buffer.js');
$x507 =& $x508[0]; list(,$W507,$S507,$U507) = $x508;
if ($U507 && (!isset($x501->extensible) || $x501->extensible)) {$x501->properties[$x503] = $x507; $x507 =& $x501->properties[$x503]; $x501->attributes[$x503] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U507 = FALSE; $W507 = TRUE; }
if (isset($S507)) {
$x510 = $S507->call;
$global->trace[++$global->trace_sp] = array('<image>/20_buffer.js', 111, 54);
$x511 = $x510($global, $x501, $S507, array($x492), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x509 = $x511;
} else {
if (!$U507) {$x509 = $x492;if ($W507) { $x507 = $x492; }  }
else { $x509 = JS::$undefined; }
}
if (isset($x501->class) && $x501->class === 'Array' &&  is_int('fill') && 'fill' >= $x501->properties['length']) { $x501->properties['length'] = 'fill' + 1; };
;
return JS::$undefined;
}
