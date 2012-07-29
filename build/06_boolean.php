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
$x26 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x26[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x26;
$x27 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x28->class) && $x28->class === 'Error' && !isset($x28->properties['file']) && !isset($x28->properties['line']) && !isset($x28->properties['column'])) {$x28->properties['file'] = $file;$x28->properties['line'] = $line;$x28->properties['column'] = $column;$x28->attributes['file'] = $x28->attributes['line'] = $x28->attributes['column'] = 0; }
throw new JSException($x28, $line, $column, $file);
}
$W25 = $S25 = $U25 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x25 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x29 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x30 = $x29($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x25 = $x30; }
else { $x25 = JS::$undefined; $U25 = TRUE; }
return array(&$x25, $W25, $S25, $U25);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'&&!isset($x28->properties[\'file\'])&&!isset($x28->properties[\'line\'])&&!isset($x28->properties[\'column\'])){$x28->properties[\'file\']=$file;$x28->properties[\'line\']=$line;$x28->properties[\'column\']=$column;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,$line,$column,$file);}$W25=$S25=$U25=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x25=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x29=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x30=$x29($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x25=$x30;}else{$x25=JS::$undefined;$U25=TRUE;}return array(&$x25,$W25,$S25,$U25);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x43 =& $scope->properties['arguments'];
$x43->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x43->properties[$i] = $args[$i];
$x43->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x46 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 23, 13, '<image>/06_boolean.js');
$_TypeError =& $x46[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x46;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x47 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 23, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x47[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x47;
$x48 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 13);
$x49 = $x48($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x49->class) && $x49->class === 'Error' && !isset($x49->properties['file']) && !isset($x49->properties['line']) && !isset($x49->properties['column'])) {$x49->properties['file'] = '<image>/06_boolean.js';$x49->properties['line'] = 23;$x49->properties['column'] = 13;$x49->attributes['file'] = $x49->attributes['line'] = $x49->attributes['column'] = 0; }
throw new JSException($x49, 23, 13, '<image>/06_boolean.js');
}
$x44 = clone JS::$objectTemplate;
unset($x50, $W50, $S50, $U50);
$x51 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 23, 9, '<image>/06_boolean.js');
$x50 =& $x51[0]; list(,$W50,$S50,$U50) = $x51;
$x45 = $x50;
$x44->prototype = $x45;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x54 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x55 = $x54($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x55->class) && $x55->class === 'Error' && !isset($x55->properties['file']) && !isset($x55->properties['line']) && !isset($x55->properties['column'])) {$x55->properties['file'] = '<image>/06_boolean.js';$x55->properties['line'] = 23;$x55->properties['column'] = 9;$x55->attributes['file'] = $x55->attributes['line'] = $x55->attributes['column'] = 0; }
throw new JSException($x55, 23, 9, '<image>/06_boolean.js');
}
$x52 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x53 = $x52($global, $x44, $_TypeError, array('Boolean.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x45 = $x53;
if (is_object($x45) && $x45 !== JS::$undefined) { $x44 = $x45; }
if (isset($x44->class) && $x44->class === 'Error' && !isset($x44->properties['file']) && !isset($x44->properties['line']) && !isset($x44->properties['column'])) {$x44->properties['file'] = '<image>/06_boolean.js';$x44->properties['line'] = 23;$x44->properties['column'] = 3;$x44->attributes['file'] = $x44->attributes['line'] = $x44->attributes['column'] = 0; }
throw new JSException($x44, 23, 3, '<image>/06_boolean.js');;
};
if (JS::toBoolean($leThis->value, $global)) {

return 'true';;
};
return 'false';
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x43=&$scope->properties[\'arguments\'];$x43->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x43->properties[$i]=$args[$i];$x43->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x46=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),23,13,\'<image>/06_boolean.js\');$_TypeError=&$x46[0];list(,$WTypeError,$STypeError,$UTypeError)=$x46;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x47=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),23,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x47[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x47;$x48=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,13);$x49=$x48($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x49->class)&&$x49->class===\'Error\'&&!isset($x49->properties[\'file\'])&&!isset($x49->properties[\'line\'])&&!isset($x49->properties[\'column\'])){$x49->properties[\'file\']=\'<image>/06_boolean.js\';$x49->properties[\'line\']=23;$x49->properties[\'column\']=13;$x49->attributes[\'file\']=$x49->attributes[\'line\']=$x49->attributes[\'column\']=0;}throw new JSException($x49,23,13,\'<image>/06_boolean.js\');}$x44=clone JS::$objectTemplate;unset($x50,$W50,$S50,$U50);$x51=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),23,9,\'<image>/06_boolean.js\');$x50=&$x51[0];list(,$W50,$S50,$U50)=$x51;$x45=$x50;$x44->prototype=$x45;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x54=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x55=$x54($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x55->class)&&$x55->class===\'Error\'&&!isset($x55->properties[\'file\'])&&!isset($x55->properties[\'line\'])&&!isset($x55->properties[\'column\'])){$x55->properties[\'file\']=\'<image>/06_boolean.js\';$x55->properties[\'line\']=23;$x55->properties[\'column\']=9;$x55->attributes[\'file\']=$x55->attributes[\'line\']=$x55->attributes[\'column\']=0;}throw new JSException($x55,23,9,\'<image>/06_boolean.js\');}$x52=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x53=$x52($global,$x44,$_TypeError,array(\'Boolean.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x45=$x53;if(is_object($x45)&&$x45!==JS::$undefined){$x44=$x45;}if(isset($x44->class)&&$x44->class===\'Error\'&&!isset($x44->properties[\'file\'])&&!isset($x44->properties[\'line\'])&&!isset($x44->properties[\'column\'])){$x44->properties[\'file\']=\'<image>/06_boolean.js\';$x44->properties[\'line\']=23;$x44->properties[\'column\']=3;$x44->attributes[\'file\']=$x44->attributes[\'line\']=$x44->attributes[\'column\']=0;}throw new JSException($x44,23,3,\'<image>/06_boolean.js\');}if(JS::toBoolean($leThis->value,$global)){return\'true\';}return\'false\';return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x70 =& $scope->properties['arguments'];
$x70->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x70->properties[$i] = $args[$i];
$x70->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/06_boolean.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x74 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x74[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x74;
$x75 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 13);
$x76 = $x75($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x76->class) && $x76->class === 'Error' && !isset($x76->properties['file']) && !isset($x76->properties['line']) && !isset($x76->properties['column'])) {$x76->properties['file'] = '<image>/06_boolean.js';$x76->properties['line'] = 35;$x76->properties['column'] = 13;$x76->attributes['file'] = $x76->attributes['line'] = $x76->attributes['column'] = 0; }
throw new JSException($x76, 35, 13, '<image>/06_boolean.js');
}
$x71 = clone JS::$objectTemplate;
unset($x77, $W77, $S77, $U77);
$x78 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/06_boolean.js');
$x77 =& $x78[0]; list(,$W77,$S77,$U77) = $x78;
$x72 = $x77;
$x71->prototype = $x72;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x81 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x82 = $x81($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x82->class) && $x82->class === 'Error' && !isset($x82->properties['file']) && !isset($x82->properties['line']) && !isset($x82->properties['column'])) {$x82->properties['file'] = '<image>/06_boolean.js';$x82->properties['line'] = 35;$x82->properties['column'] = 9;$x82->attributes['file'] = $x82->attributes['line'] = $x82->attributes['column'] = 0; }
throw new JSException($x82, 35, 9, '<image>/06_boolean.js');
}
$x79 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x80 = $x79($global, $x71, $_TypeError, array('Boolean.prototype.valueOf(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x72 = $x80;
if (is_object($x72) && $x72 !== JS::$undefined) { $x71 = $x72; }
if (isset($x71->class) && $x71->class === 'Error' && !isset($x71->properties['file']) && !isset($x71->properties['line']) && !isset($x71->properties['column'])) {$x71->properties['file'] = '<image>/06_boolean.js';$x71->properties['line'] = 35;$x71->properties['column'] = 3;$x71->attributes['file'] = $x71->attributes['line'] = $x71->attributes['column'] = 0; }
throw new JSException($x71, 35, 3, '<image>/06_boolean.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x70=&$scope->properties[\'arguments\'];$x70->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x70->properties[$i]=$args[$i];$x70->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/06_boolean.js\');$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x74=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x74[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x74;$x75=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,13);$x76=$x75($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x76->class)&&$x76->class===\'Error\'&&!isset($x76->properties[\'file\'])&&!isset($x76->properties[\'line\'])&&!isset($x76->properties[\'column\'])){$x76->properties[\'file\']=\'<image>/06_boolean.js\';$x76->properties[\'line\']=35;$x76->properties[\'column\']=13;$x76->attributes[\'file\']=$x76->attributes[\'line\']=$x76->attributes[\'column\']=0;}throw new JSException($x76,35,13,\'<image>/06_boolean.js\');}$x71=clone JS::$objectTemplate;unset($x77,$W77,$S77,$U77);$x78=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/06_boolean.js\');$x77=&$x78[0];list(,$W77,$S77,$U77)=$x78;$x72=$x77;$x71->prototype=$x72;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x81=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x82=$x81($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x82->class)&&$x82->class===\'Error\'&&!isset($x82->properties[\'file\'])&&!isset($x82->properties[\'line\'])&&!isset($x82->properties[\'column\'])){$x82->properties[\'file\']=\'<image>/06_boolean.js\';$x82->properties[\'line\']=35;$x82->properties[\'column\']=9;$x82->attributes[\'file\']=$x82->attributes[\'line\']=$x82->attributes[\'column\']=0;}throw new JSException($x82,35,9,\'<image>/06_boolean.js\');}$x79=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x80=$x79($global,$x71,$_TypeError,array(\'Boolean.prototype.valueOf(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x72=$x80;if(is_object($x72)&&$x72!==JS::$undefined){$x71=$x72;}if(isset($x71->class)&&$x71->class===\'Error\'&&!isset($x71->properties[\'file\'])&&!isset($x71->properties[\'line\'])&&!isset($x71->properties[\'column\'])){$x71->properties[\'file\']=\'<image>/06_boolean.js\';$x71->properties[\'line\']=35;$x71->properties[\'column\']=3;$x71->attributes[\'file\']=$x71->attributes[\'line\']=$x71->attributes[\'column\']=0;}throw new JSException($x71,35,3,\'<image>/06_boolean.js\');}return$leThis->value;return JS::$undefined;}', "\n";
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
if (isset($_Boolean->class) && $_Boolean->class === 'Array') {  if (isset($_Boolean->properties['length']) && $_Boolean->properties['length'] !== JS::$undefined) { $x18 = $_Boolean->properties['length']; }  else { $x18 = 0; } }
if (isset($S12)) {
$x19 = $S12->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 15, 19);
$x20 = $x19($global, $_Boolean, $S12, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x20;
} else {
if (!$U12) {$x17 = $x5;if ($W12) { $x12 = $x5; }  }
else { $x17 = JS::$undefined; }
}
if (isset($_Boolean->class) && $_Boolean->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Boolean->properties['length']) { $_Boolean->properties['length'] = 'prototype' + 1; }else if ($x6 === 'length' && is_int($x5) && $x18 > $x5) {  for ($i = $x5; $i < $x18; ++$i) {  unset($_Boolean->properties[$i], $_Boolean->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x21 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('Object', $global), 16, 52, '<image>/06_boolean.js');
$_Object =& $x21[0]; list(,$WObject,$SObject,$UObject) = $x21;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x22 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 16, 52, '<image>/06_boolean.js');
$_ReferenceError =& $x22[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x22;
$x23 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 16, 52);
$x24 = $x23($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x24->class) && $x24->class === 'Error' && !isset($x24->properties['file']) && !isset($x24->properties['line']) && !isset($x24->properties['column'])) {$x24->properties['file'] = '<image>/06_boolean.js';$x24->properties['line'] = 16;$x24->properties['column'] = 52;$x24->attributes['file'] = $x24->attributes['line'] = $x24->attributes['column'] = 0; }
throw new JSException($x24, 16, 52, '<image>/06_boolean.js');
}
$_Boolean->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Boolean->properties['prototype']->class = 'Boolean';
$_Boolean->properties['prototype']->extensible = TRUE;
unset($x25, $W25, $S25, $U25);
$x31 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 19, 8, '<image>/06_boolean.js');
$x25 =& $x31[0]; list(,$W25,$S25,$U25) = $x31;
$x32 = JS::toString('constructor', $global);
if ($x25 === JS::$undefined || $x25 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x33 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 19, 31, '<image>/06_boolean.js');
$_TypeError =& $x33[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x33;
$x34 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x35 = $x34($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/06_boolean.js';$x35->properties['line'] = 19;$x35->properties['column'] = 31;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 19, 31, '<image>/06_boolean.js');
}
$x25 = JS::toObject($x25, $global);
unset($x36, $W36, $S36, $U36);
$x37 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x25, JS::toString($x32, $global), 19, 31, '<image>/06_boolean.js');
$x36 =& $x37[0]; list(,$W36,$S36,$U36) = $x37;
if ($U36 && (!isset($x25->extensible) || $x25->extensible)) {$x25->properties[$x32] = $x36; $x36 =& $x25->properties[$x32]; $x25->attributes[$x32] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U36 = FALSE; $W36 = TRUE; }
if (isset($x25->class) && $x25->class === 'Array') {  if (isset($x25->properties['length']) && $x25->properties['length'] !== JS::$undefined) { $x39 = $x25->properties['length']; }  else { $x39 = 0; } }
if (isset($S36)) {
$x40 = $S36->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x41 = $x40($global, $x25, $S36, array($_Boolean), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x38 = $x41;
} else {
if (!$U36) {$x38 = $_Boolean;if ($W36) { $x36 = $_Boolean; }  }
else { $x38 = JS::$undefined; }
}
if (isset($x25->class) && $x25->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x25->properties['length']) { $x25->properties['length'] = 'constructor' + 1; }else if ($x32 === 'length' && is_int($_Boolean) && $x39 > $_Boolean) {  for ($i = $_Boolean; $i < $x39; ++$i) {  unset($x25->properties[$i], $x25->attributes[$i]); }}};
$x56 = clone JS::$functionTemplate; $x56->call = '_b41eda56643ee8c6ef132899460f4000_5'; $x56->parameters = array (
); $x56->scope = $scope; $x56->properties['prototype'] = clone JS::$objectTemplate; $x56->attributes['prototype'] = JS::WRITABLE; $x56->properties['prototype']->properties['constructor'] = $x56; $x56->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x56->properties['length'] = 0; $x56->attributes['length'] = 0;
unset($x57, $W57, $S57, $U57);
$x58 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 21, 8, '<image>/06_boolean.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
$x59 = JS::toString('toString', $global);
if ($x57 === JS::$undefined || $x57 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x60 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 21, 28, '<image>/06_boolean.js');
$_TypeError =& $x60[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x60;
$x61 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x62 = $x61($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/06_boolean.js';$x62->properties['line'] = 21;$x62->properties['column'] = 28;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 21, 28, '<image>/06_boolean.js');
}
$x57 = JS::toObject($x57, $global);
unset($x63, $W63, $S63, $U63);
$x64 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x57, JS::toString($x59, $global), 21, 28, '<image>/06_boolean.js');
$x63 =& $x64[0]; list(,$W63,$S63,$U63) = $x64;
if ($U63 && (!isset($x57->extensible) || $x57->extensible)) {$x57->properties[$x59] = $x63; $x63 =& $x57->properties[$x59]; $x57->attributes[$x59] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U63 = FALSE; $W63 = TRUE; }
if (isset($x57->class) && $x57->class === 'Array') {  if (isset($x57->properties['length']) && $x57->properties['length'] !== JS::$undefined) { $x66 = $x57->properties['length']; }  else { $x66 = 0; } }
if (isset($S63)) {
$x67 = $S63->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x68 = $x67($global, $x57, $S63, array($x56), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x65 = $x68;
} else {
if (!$U63) {$x65 = $x56;if ($W63) { $x63 = $x56; }  }
else { $x65 = JS::$undefined; }
}
if (isset($x57->class) && $x57->class === 'Array') {if (is_int('toString') && 'toString' >= $x57->properties['length']) { $x57->properties['length'] = 'toString' + 1; }else if ($x59 === 'length' && is_int($x56) && $x66 > $x56) {  for ($i = $x56; $i < $x66; ++$i) {  unset($x57->properties[$i], $x57->attributes[$i]); }}};
$x83 = clone JS::$functionTemplate; $x83->call = '_b41eda56643ee8c6ef132899460f4000_6'; $x83->parameters = array (
); $x83->scope = $scope; $x83->properties['prototype'] = clone JS::$objectTemplate; $x83->attributes['prototype'] = JS::WRITABLE; $x83->properties['prototype']->properties['constructor'] = $x83; $x83->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x83->properties['length'] = 0; $x83->attributes['length'] = 0;
unset($x84, $W84, $S84, $U84);
$x85 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, JS::toString('prototype', $global), 33, 8, '<image>/06_boolean.js');
$x84 =& $x85[0]; list(,$W84,$S84,$U84) = $x85;
$x86 = JS::toString('valueOf', $global);
if ($x84 === JS::$undefined || $x84 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/06_boolean.js');
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x89 = $x88($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/06_boolean.js';$x89->properties['line'] = 33;$x89->properties['column'] = 27;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 33, 27, '<image>/06_boolean.js');
}
$x84 = JS::toObject($x84, $global);
unset($x90, $W90, $S90, $U90);
$x91 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x84, JS::toString($x86, $global), 33, 27, '<image>/06_boolean.js');
$x90 =& $x91[0]; list(,$W90,$S90,$U90) = $x91;
if ($U90 && (!isset($x84->extensible) || $x84->extensible)) {$x84->properties[$x86] = $x90; $x90 =& $x84->properties[$x86]; $x84->attributes[$x86] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U90 = FALSE; $W90 = TRUE; }
if (isset($x84->class) && $x84->class === 'Array') {  if (isset($x84->properties['length']) && $x84->properties['length'] !== JS::$undefined) { $x93 = $x84->properties['length']; }  else { $x93 = 0; } }
if (isset($S90)) {
$x94 = $S90->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x95 = $x94($global, $x84, $S90, array($x83), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x92 = $x95;
} else {
if (!$U90) {$x92 = $x83;if ($W90) { $x90 = $x83; }  }
else { $x92 = JS::$undefined; }
}
if (isset($x84->class) && $x84->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x84->properties['length']) { $x84->properties['length'] = 'valueOf' + 1; }else if ($x86 === 'length' && is_int($x83) && $x93 > $x83) {  for ($i = $x83; $i < $x93; ++$i) {  unset($x84->properties[$i], $x84->attributes[$i]); }}};
;
return JS::$undefined;
}
