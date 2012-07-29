function _b41eda56643ee8c6ef132899460f4000_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['Boolean'] = $fn;
$_Boolean =& $scope->properties['Boolean'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {

return JS::toBoolean($_value, $global);;
};
$x3 = clone JS::$objectTemplate;
$scope->properties['b'] = JS::$undefined; $_b =& $scope->properties['b'];
$Ub = FALSE;
$_b = $x3;
$_b->prototype =$_Boolean->properties['prototype'];
$_b->class = 'Boolean';
$_b->value = JS::toBoolean($_value, $global);
$_b->extensible = TRUE;
return $_b;
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'Boolean\']=$fn;$_Boolean=&$scope->properties[\'Boolean\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toBoolean($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'b\']=JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$_b=$x3;$_b->prototype=$_Boolean->properties[\'prototype\'];$_b->class=\'Boolean\';$_b->value=JS::toBoolean($_value,$global);$_b->extensible=TRUE;return$_b;return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x7 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x8 = $x7($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x8; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x7=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x8=$x7($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x8;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x13 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x13[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x13;
$x14 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x15 = $x14($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x15->class) && $x15->class === 'Error' && !isset($x15->properties['file']) && !isset($x15->properties['line']) && !isset($x15->properties['column'])) {$x15->properties['file'] = $file;$x15->properties['line'] = $line;$x15->properties['column'] = $column;$x15->attributes['file'] = $x15->attributes['line'] = $x15->attributes['column'] = 0; }
throw new JSException($x15, $line, $column, $file);
}
$W12 = $S12 = $U12 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x12 =& $lookup->properties[$id]; $W12 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S12 = $lookup->setters[$id]; }
else { $x12 = JS::$undefined; $U12 = TRUE; }
return array(&$x12, $W12, $S12, $U12);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x13=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x13[0];list(,$WTypeError,$STypeError,$UTypeError)=$x13;$x14=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x15=$x14($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x15->class)&&$x15->class===\'Error\'&&!isset($x15->properties[\'file\'])&&!isset($x15->properties[\'line\'])&&!isset($x15->properties[\'column\'])){$x15->properties[\'file\']=$file;$x15->properties[\'line\']=$line;$x15->properties[\'column\']=$column;$x15->attributes[\'file\']=$x15->attributes[\'line\']=$x15->attributes[\'column\']=0;}throw new JSException($x15,$line,$column,$file);}$W12=$S12=$U12=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x12=&$lookup->properties[$id];$W12=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S12=$lookup->setters[$id];}else{$x12=JS::$undefined;$U12=TRUE;}return array(&$x12,$W12,$S12,$U12);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x25[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x25;
$x26 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x27 = $x26($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = $file;$x27->properties['line'] = $line;$x27->properties['column'] = $column;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, $line, $column, $file);
}
$W24 = $S24 = $U24 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x24 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x28 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x29 = $x28($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x24 = $x29; }
else { $x24 = JS::$undefined; $U24 = TRUE; }
return array(&$x24, $W24, $S24, $U24);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x27=$x26($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=$file;$x27->properties[\'line\']=$line;$x27->properties[\'column\']=$column;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,$line,$column,$file);}$W24=$S24=$U24=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x24=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x28=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x29=$x28($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x24=$x29;}else{$x24=JS::$undefined;$U24=TRUE;}return array(&$x24,$W24,$S24,$U24);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x41 =& $scope->properties['arguments'];
$x41->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x41->properties[$i] = $args[$i];
$x41->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x44 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 23, 13, '<image>/06_boolean.js');
$_TypeError =& $x44[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x44;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x45 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 23, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x45[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x45;
$x46 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 13);
$x47 = $x46($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = '<image>/06_boolean.js';$x47->properties['line'] = 23;$x47->properties['column'] = 13;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 23, 13, '<image>/06_boolean.js');
}
$x42 = clone JS::$objectTemplate;
unset($x48, $W48, $S48, $U48);
$x49 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 23, 9, '<image>/06_boolean.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
$x43 = $x48;
$x42->prototype = $x43;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x52 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x53 = $x52($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x53->class) && $x53->class === 'Error' && !isset($x53->properties['file']) && !isset($x53->properties['line']) && !isset($x53->properties['column'])) {$x53->properties['file'] = '<image>/06_boolean.js';$x53->properties['line'] = 23;$x53->properties['column'] = 9;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, 23, 9, '<image>/06_boolean.js');
}
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x51 = $x50($global, $x42, $_TypeError, array('Boolean.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x43 = $x51;
if (is_object($x43) && $x43 !== JS::$undefined) { $x42 = $x43; }
if (isset($x42->class) && $x42->class === 'Error' && !isset($x42->properties['file']) && !isset($x42->properties['line']) && !isset($x42->properties['column'])) {$x42->properties['file'] = '<image>/06_boolean.js';$x42->properties['line'] = 23;$x42->properties['column'] = 3;$x42->attributes['file'] = $x42->attributes['line'] = $x42->attributes['column'] = 0; }
throw new JSException($x42, 23, 3, '<image>/06_boolean.js');;
};
if (JS::toBoolean($leThis->value, $global)) {

return 'true';;
};
return 'false';
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x41=&$scope->properties[\'arguments\'];$x41->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x41->properties[$i]=$args[$i];$x41->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x44=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),23,13,\'<image>/06_boolean.js\');$_TypeError=&$x44[0];list(,$WTypeError,$STypeError,$UTypeError)=$x44;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x45=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),23,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x45[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x45;$x46=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,13);$x47=$x46($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x47->class)&&$x47->class===\'Error\'&&!isset($x47->properties[\'file\'])&&!isset($x47->properties[\'line\'])&&!isset($x47->properties[\'column\'])){$x47->properties[\'file\']=\'<image>/06_boolean.js\';$x47->properties[\'line\']=23;$x47->properties[\'column\']=13;$x47->attributes[\'file\']=$x47->attributes[\'line\']=$x47->attributes[\'column\']=0;}throw new JSException($x47,23,13,\'<image>/06_boolean.js\');}$x42=clone JS::$objectTemplate;unset($x48,$W48,$S48,$U48);$x49=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),23,9,\'<image>/06_boolean.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$x43=$x48;$x42->prototype=$x43;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x52=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x53=$x52($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x53->class)&&$x53->class===\'Error\'&&!isset($x53->properties[\'file\'])&&!isset($x53->properties[\'line\'])&&!isset($x53->properties[\'column\'])){$x53->properties[\'file\']=\'<image>/06_boolean.js\';$x53->properties[\'line\']=23;$x53->properties[\'column\']=9;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,23,9,\'<image>/06_boolean.js\');}$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x51=$x50($global,$x42,$_TypeError,array(\'Boolean.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x43=$x51;if(is_object($x43)&&$x43!==JS::$undefined){$x42=$x43;}if(isset($x42->class)&&$x42->class===\'Error\'&&!isset($x42->properties[\'file\'])&&!isset($x42->properties[\'line\'])&&!isset($x42->properties[\'column\'])){$x42->properties[\'file\']=\'<image>/06_boolean.js\';$x42->properties[\'line\']=23;$x42->properties[\'column\']=3;$x42->attributes[\'file\']=$x42->attributes[\'line\']=$x42->attributes[\'column\']=0;}throw new JSException($x42,23,3,\'<image>/06_boolean.js\');}if(JS::toBoolean($leThis->value,$global)){return\'true\';}return\'false\';return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x67 =& $scope->properties['arguments'];
$x67->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x67->properties[$i] = $args[$i];
$x67->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/06_boolean.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x71 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x71[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x71;
$x72 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 13);
$x73 = $x72($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/06_boolean.js';$x73->properties['line'] = 35;$x73->properties['column'] = 13;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 35, 13, '<image>/06_boolean.js');
}
$x68 = clone JS::$objectTemplate;
unset($x74, $W74, $S74, $U74);
$x75 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/06_boolean.js');
$x74 =& $x75[0]; list(,$W74,$S74,$U74) = $x75;
$x69 = $x74;
$x68->prototype = $x69;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x79 = $x78($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error' && !isset($x79->properties['file']) && !isset($x79->properties['line']) && !isset($x79->properties['column'])) {$x79->properties['file'] = '<image>/06_boolean.js';$x79->properties['line'] = 35;$x79->properties['column'] = 9;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 35, 9, '<image>/06_boolean.js');
}
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x77 = $x76($global, $x68, $_TypeError, array('Boolean.prototype.valueOf(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x69 = $x77;
if (is_object($x69) && $x69 !== JS::$undefined) { $x68 = $x69; }
if (isset($x68->class) && $x68->class === 'Error' && !isset($x68->properties['file']) && !isset($x68->properties['line']) && !isset($x68->properties['column'])) {$x68->properties['file'] = '<image>/06_boolean.js';$x68->properties['line'] = 35;$x68->properties['column'] = 3;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 35, 3, '<image>/06_boolean.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x67=&$scope->properties[\'arguments\'];$x67->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x67->properties[$i]=$args[$i];$x67->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/06_boolean.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x71=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x71[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x71;$x72=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,13);$x73=$x72($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/06_boolean.js\';$x73->properties[\'line\']=35;$x73->properties[\'column\']=13;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,35,13,\'<image>/06_boolean.js\');}$x68=clone JS::$objectTemplate;unset($x74,$W74,$S74,$U74);$x75=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/06_boolean.js\');$x74=&$x75[0];list(,$W74,$S74,$U74)=$x75;$x69=$x74;$x68->prototype=$x69;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x79=$x78($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'&&!isset($x79->properties[\'file\'])&&!isset($x79->properties[\'line\'])&&!isset($x79->properties[\'column\'])){$x79->properties[\'file\']=\'<image>/06_boolean.js\';$x79->properties[\'line\']=35;$x79->properties[\'column\']=9;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,35,9,\'<image>/06_boolean.js\');}$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x77=$x76($global,$x68,$_TypeError,array(\'Boolean.prototype.valueOf(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x69=$x77;if(is_object($x69)&&$x69!==JS::$undefined){$x68=$x69;}if(isset($x68->class)&&$x68->class===\'Error\'&&!isset($x68->properties[\'file\'])&&!isset($x68->properties[\'line\'])&&!isset($x68->properties[\'column\'])){$x68->properties[\'file\']=\'<image>/06_boolean.js\';$x68->properties[\'line\']=35;$x68->properties[\'column\']=3;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,35,3,\'<image>/06_boolean.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/06_boolean.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/06_boolean.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Boolean;
$x4 = clone JS::$functionTemplate; $x4->call = '_b41eda56643ee8c6ef132899460f4000_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'Boolean'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['Boolean'] = JS::$undefined; $_Boolean =& $scope->properties['Boolean'];
$UBoolean = FALSE;
$_Boolean = $x4;
$x5 = clone JS::$objectTemplate;
$x6 = JS::toString('prototype', $global);
if ($_Boolean === JS::$undefined || $_Boolean === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x9 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 15, 19, '<image>/06_boolean.js');
$_TypeError =& $x9[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x9;
$x10 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 15, 19);
$x11 = $x10($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x11->class) && $x11->class === 'Error' && !isset($x11->properties['file']) && !isset($x11->properties['line']) && !isset($x11->properties['column'])) {$x11->properties['file'] = '<image>/06_boolean.js';$x11->properties['line'] = 15;$x11->properties['column'] = 19;$x11->attributes['file'] = $x11->attributes['line'] = $x11->attributes['column'] = 0; }
throw new JSException($x11, 15, 19, '<image>/06_boolean.js');
}
$_Boolean = JS::toObject($_Boolean, $global);
unset($x12, $W12, $S12, $U12);
$x16 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $_Boolean, JS::toString($x6, $global), 15, 19, '<image>/06_boolean.js');
$x12 =& $x16[0]; list(,$W12,$S12,$U12) = $x16;
if ($U12 && (!isset($_Boolean->extensible) || $_Boolean->extensible)) {$_Boolean->properties[$x6] = $x12; $x12 =& $_Boolean->properties[$x6]; $_Boolean->attributes[$x6] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U12 = FALSE; $W12 = TRUE; }
if (isset($S12)) {
$x18 = $S12->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 15, 19);
$x19 = $x18($global, $_Boolean, $S12, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x19;
} else {
if (!$U12) {$x17 = $x5;if ($W12) { $x12 = $x5; }  }
else { $x17 = JS::$undefined; }
}
if (isset($_Boolean->class) && $_Boolean->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Boolean->properties['length']) { $_Boolean->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x20 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('Object', $global), 16, 52, '<image>/06_boolean.js');
$_Object =& $x20[0]; list(,$WObject,$SObject,$UObject) = $x20;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 16, 52, '<image>/06_boolean.js');
$_ReferenceError =& $x21[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x21;
$x22 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 16, 52);
$x23 = $x22($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error' && !isset($x23->properties['file']) && !isset($x23->properties['line']) && !isset($x23->properties['column'])) {$x23->properties['file'] = '<image>/06_boolean.js';$x23->properties['line'] = 16;$x23->properties['column'] = 52;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, 16, 52, '<image>/06_boolean.js');
}
$_Boolean->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Boolean->properties['prototype']->class = 'Boolean';
$_Boolean->properties['prototype']->extensible = TRUE;
unset($x24, $W24, $S24, $U24);
$x30 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 19, 8, '<image>/06_boolean.js');
$x24 =& $x30[0]; list(,$W24,$S24,$U24) = $x30;
$x31 = JS::toString('constructor', $global);
if ($x24 === JS::$undefined || $x24 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x32 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 19, 31, '<image>/06_boolean.js');
$_TypeError =& $x32[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x32;
$x33 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x34 = $x33($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x34->class) && $x34->class === 'Error' && !isset($x34->properties['file']) && !isset($x34->properties['line']) && !isset($x34->properties['column'])) {$x34->properties['file'] = '<image>/06_boolean.js';$x34->properties['line'] = 19;$x34->properties['column'] = 31;$x34->attributes['file'] = $x34->attributes['line'] = $x34->attributes['column'] = 0; }
throw new JSException($x34, 19, 31, '<image>/06_boolean.js');
}
$x24 = JS::toObject($x24, $global);
unset($x35, $W35, $S35, $U35);
$x36 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x24, JS::toString($x31, $global), 19, 31, '<image>/06_boolean.js');
$x35 =& $x36[0]; list(,$W35,$S35,$U35) = $x36;
if ($U35 && (!isset($x24->extensible) || $x24->extensible)) {$x24->properties[$x31] = $x35; $x35 =& $x24->properties[$x31]; $x24->attributes[$x31] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U35 = FALSE; $W35 = TRUE; }
if (isset($S35)) {
$x38 = $S35->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x39 = $x38($global, $x24, $S35, array($_Boolean), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x37 = $x39;
} else {
if (!$U35) {$x37 = $_Boolean;if ($W35) { $x35 = $_Boolean; }  }
else { $x37 = JS::$undefined; }
}
if (isset($x24->class) && $x24->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x24->properties['length']) { $x24->properties['length'] = 'constructor' + 1; };
$x54 = clone JS::$functionTemplate; $x54->call = '_b41eda56643ee8c6ef132899460f4000_5'; $x54->parameters = array (
); $x54->scope = $scope; $x54->properties['prototype'] = clone JS::$objectTemplate; $x54->attributes['prototype'] = JS::WRITABLE; $x54->properties['prototype']->properties['constructor'] = $x54; $x54->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x54->properties['length'] = 0; $x54->attributes['length'] = 0;
unset($x55, $W55, $S55, $U55);
$x56 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 21, 8, '<image>/06_boolean.js');
$x55 =& $x56[0]; list(,$W55,$S55,$U55) = $x56;
$x57 = JS::toString('toString', $global);
if ($x55 === JS::$undefined || $x55 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 21, 28, '<image>/06_boolean.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x60 = $x59($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/06_boolean.js';$x60->properties['line'] = 21;$x60->properties['column'] = 28;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 21, 28, '<image>/06_boolean.js');
}
$x55 = JS::toObject($x55, $global);
unset($x61, $W61, $S61, $U61);
$x62 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x55, JS::toString($x57, $global), 21, 28, '<image>/06_boolean.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
if ($U61 && (!isset($x55->extensible) || $x55->extensible)) {$x55->properties[$x57] = $x61; $x61 =& $x55->properties[$x57]; $x55->attributes[$x57] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U61 = FALSE; $W61 = TRUE; }
if (isset($S61)) {
$x64 = $S61->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x65 = $x64($global, $x55, $S61, array($x54), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x65;
} else {
if (!$U61) {$x63 = $x54;if ($W61) { $x61 = $x54; }  }
else { $x63 = JS::$undefined; }
}
if (isset($x55->class) && $x55->class === 'Array' &&  is_int('toString') && 'toString' >= $x55->properties['length']) { $x55->properties['length'] = 'toString' + 1; };
$x80 = clone JS::$functionTemplate; $x80->call = '_b41eda56643ee8c6ef132899460f4000_6'; $x80->parameters = array (
); $x80->scope = $scope; $x80->properties['prototype'] = clone JS::$objectTemplate; $x80->attributes['prototype'] = JS::WRITABLE; $x80->properties['prototype']->properties['constructor'] = $x80; $x80->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x80->properties['length'] = 0; $x80->attributes['length'] = 0;
unset($x81, $W81, $S81, $U81);
$x82 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 33, 8, '<image>/06_boolean.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
$x83 = JS::toString('valueOf', $global);
if ($x81 === JS::$undefined || $x81 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/06_boolean.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x86 = $x85($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/06_boolean.js';$x86->properties['line'] = 33;$x86->properties['column'] = 27;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 33, 27, '<image>/06_boolean.js');
}
$x81 = JS::toObject($x81, $global);
unset($x87, $W87, $S87, $U87);
$x88 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x81, JS::toString($x83, $global), 33, 27, '<image>/06_boolean.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($U87 && (!isset($x81->extensible) || $x81->extensible)) {$x81->properties[$x83] = $x87; $x87 =& $x81->properties[$x83]; $x81->attributes[$x83] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U87 = FALSE; $W87 = TRUE; }
if (isset($S87)) {
$x90 = $S87->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x91 = $x90($global, $x81, $S87, array($x80), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x91;
} else {
if (!$U87) {$x89 = $x80;if ($W87) { $x87 = $x80; }  }
else { $x89 = JS::$undefined; }
}
if (isset($x81->class) && $x81->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x81->properties['length']) { $x81->properties['length'] = 'valueOf' + 1; };
;
return JS::$undefined;
}
