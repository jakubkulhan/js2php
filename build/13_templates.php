function _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $base, $id, $line, $column, $file) {
$WObject = $SObject = $UObject = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_Object =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x2 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x3 = $x2($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_Object = $x3; }
else { $_Object = JS::$undefined; $UObject = TRUE; }
return array(&$_Object, $WObject, $SObject, $UObject);
}
echo 'function _b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$base,$id,$line,$column,$file){$WObject=$SObject=$UObject=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_Object=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x2=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x3=$x2($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_Object=$x3;}else{$_Object=JS::$undefined;$UObject=TRUE;}return array(&$_Object,$WObject,$SObject,$UObject);}', "\n";
function _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x51 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x51[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x51;
$x52 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x53 = $x52($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x53->class) && $x53->class === 'Error' && !isset($x53->properties['file']) && !isset($x53->properties['line']) && !isset($x53->properties['column'])) {$x53->properties['file'] = $file;$x53->properties['line'] = $line;$x53->properties['column'] = $column;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, $line, $column, $file);
}
$W50 = $S50 = $U50 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x50 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x54 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x55 = $x54($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x50 = $x55; }
else { $x50 = JS::$undefined; $U50 = TRUE; }
return array(&$x50, $W50, $S50, $U50);
}
echo 'function _b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x51=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x51[0];list(,$WTypeError,$STypeError,$UTypeError)=$x51;$x52=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x53=$x52($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x53->class)&&$x53->class===\'Error\'&&!isset($x53->properties[\'file\'])&&!isset($x53->properties[\'line\'])&&!isset($x53->properties[\'column\'])){$x53->properties[\'file\']=$file;$x53->properties[\'line\']=$line;$x53->properties[\'column\']=$column;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,$line,$column,$file);}$W50=$S50=$U50=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x50=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x54=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x55=$x54($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x50=$x55;}else{$x50=JS::$undefined;$U50=TRUE;}return array(&$x50,$W50,$S50,$U50);}', "\n";
function _b275a9c6fdea97af3fed893a2c6a1ae3_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
unset($_Object, $WObject, $SObject, $UObject);
$x4 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Object', 4, 6, '<image>/13_templates.js');
$_Object =& $x4[0]; list(,$WObject,$SObject,$UObject) = $x4;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x5 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 4, 6, '<image>/13_templates.js');
$_ReferenceError =& $x5[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x5;
$x6 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 4, 6);
$x7 = $x6($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x7->class) && $x7->class === 'Error' && !isset($x7->properties['file']) && !isset($x7->properties['line']) && !isset($x7->properties['column'])) {$x7->properties['file'] = '<image>/13_templates.js';$x7->properties['line'] = 4;$x7->properties['column'] = 6;$x7->attributes['file'] = $x7->attributes['line'] = $x7->attributes['column'] = 0; }
throw new JSException($x7, 4, 6, '<image>/13_templates.js');
}
unset($_Function, $WFunction, $SFunction, $UFunction);
$x8 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Function', 5, 6, '<image>/13_templates.js');
$_Function =& $x8[0]; list(,$WFunction,$SFunction,$UFunction) = $x8;
if ($UFunction) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x9 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 5, 6, '<image>/13_templates.js');
$_ReferenceError =& $x9[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x9;
$x10 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 5, 6);
$x11 = $x10($global, $global, $_ReferenceError, array('Function is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x11->class) && $x11->class === 'Error' && !isset($x11->properties['file']) && !isset($x11->properties['line']) && !isset($x11->properties['column'])) {$x11->properties['file'] = '<image>/13_templates.js';$x11->properties['line'] = 5;$x11->properties['column'] = 6;$x11->attributes['file'] = $x11->attributes['line'] = $x11->attributes['column'] = 0; }
throw new JSException($x11, 5, 6, '<image>/13_templates.js');
}
unset($_Array, $WArray, $SArray, $UArray);
$x12 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Array', 6, 6, '<image>/13_templates.js');
$_Array =& $x12[0]; list(,$WArray,$SArray,$UArray) = $x12;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x13 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 6, 6, '<image>/13_templates.js');
$_ReferenceError =& $x13[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x13;
$x14 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 6, 6);
$x15 = $x14($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x15->class) && $x15->class === 'Error' && !isset($x15->properties['file']) && !isset($x15->properties['line']) && !isset($x15->properties['column'])) {$x15->properties['file'] = '<image>/13_templates.js';$x15->properties['line'] = 6;$x15->properties['column'] = 6;$x15->attributes['file'] = $x15->attributes['line'] = $x15->attributes['column'] = 0; }
throw new JSException($x15, 6, 6, '<image>/13_templates.js');
}
unset($_String, $WString, $SString, $UString);
$x16 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'String', 7, 6, '<image>/13_templates.js');
$_String =& $x16[0]; list(,$WString,$SString,$UString) = $x16;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x17 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 7, 6, '<image>/13_templates.js');
$_ReferenceError =& $x17[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x17;
$x18 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 7, 6);
$x19 = $x18($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x19->class) && $x19->class === 'Error' && !isset($x19->properties['file']) && !isset($x19->properties['line']) && !isset($x19->properties['column'])) {$x19->properties['file'] = '<image>/13_templates.js';$x19->properties['line'] = 7;$x19->properties['column'] = 6;$x19->attributes['file'] = $x19->attributes['line'] = $x19->attributes['column'] = 0; }
throw new JSException($x19, 7, 6, '<image>/13_templates.js');
}
unset($_Boolean, $WBoolean, $SBoolean, $UBoolean);
$x20 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Boolean', 8, 6, '<image>/13_templates.js');
$_Boolean =& $x20[0]; list(,$WBoolean,$SBoolean,$UBoolean) = $x20;
if ($UBoolean) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 8, 6, '<image>/13_templates.js');
$_ReferenceError =& $x21[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x21;
$x22 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 8, 6);
$x23 = $x22($global, $global, $_ReferenceError, array('Boolean is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error' && !isset($x23->properties['file']) && !isset($x23->properties['line']) && !isset($x23->properties['column'])) {$x23->properties['file'] = '<image>/13_templates.js';$x23->properties['line'] = 8;$x23->properties['column'] = 6;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, 8, 6, '<image>/13_templates.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x24 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Number', 9, 6, '<image>/13_templates.js');
$_Number =& $x24[0]; list(,$WNumber,$SNumber,$UNumber) = $x24;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x25 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 9, 6, '<image>/13_templates.js');
$_ReferenceError =& $x25[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x25;
$x26 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 9, 6);
$x27 = $x26($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = '<image>/13_templates.js';$x27->properties['line'] = 9;$x27->properties['column'] = 6;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, 9, 6, '<image>/13_templates.js');
}
unset($_Math, $WMath, $SMath, $UMath);
$x28 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Math', 10, 6, '<image>/13_templates.js');
$_Math =& $x28[0]; list(,$WMath,$SMath,$UMath) = $x28;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x29 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 10, 6, '<image>/13_templates.js');
$_ReferenceError =& $x29[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x29;
$x30 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 10, 6);
$x31 = $x30($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x31->class) && $x31->class === 'Error' && !isset($x31->properties['file']) && !isset($x31->properties['line']) && !isset($x31->properties['column'])) {$x31->properties['file'] = '<image>/13_templates.js';$x31->properties['line'] = 10;$x31->properties['column'] = 6;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, 10, 6, '<image>/13_templates.js');
}
unset($_Date, $WDate, $SDate, $UDate);
$x32 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Date', 11, 6, '<image>/13_templates.js');
$_Date =& $x32[0]; list(,$WDate,$SDate,$UDate) = $x32;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x33 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 11, 6, '<image>/13_templates.js');
$_ReferenceError =& $x33[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x33;
$x34 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 11, 6);
$x35 = $x34($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/13_templates.js';$x35->properties['line'] = 11;$x35->properties['column'] = 6;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 11, 6, '<image>/13_templates.js');
}
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x36 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'RegExp', 12, 6, '<image>/13_templates.js');
$_RegExp =& $x36[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x36;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x37 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 12, 6, '<image>/13_templates.js');
$_ReferenceError =& $x37[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x37;
$x38 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 12, 6);
$x39 = $x38($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error' && !isset($x39->properties['file']) && !isset($x39->properties['line']) && !isset($x39->properties['column'])) {$x39->properties['file'] = '<image>/13_templates.js';$x39->properties['line'] = 12;$x39->properties['column'] = 6;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, 12, 6, '<image>/13_templates.js');
}
unset($_Error, $WError, $SError, $UError);
$x40 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'Error', 13, 6, '<image>/13_templates.js');
$_Error =& $x40[0]; list(,$WError,$SError,$UError) = $x40;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x41 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 13, 6, '<image>/13_templates.js');
$_ReferenceError =& $x41[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x41;
$x42 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 13, 6);
$x43 = $x42($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error' && !isset($x43->properties['file']) && !isset($x43->properties['line']) && !isset($x43->properties['column'])) {$x43->properties['file'] = '<image>/13_templates.js';$x43->properties['line'] = 13;$x43->properties['column'] = 6;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, 13, 6, '<image>/13_templates.js');
}
unset($_JSON, $WJSON, $SJSON, $UJSON);
$x44 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'JSON', 14, 6, '<image>/13_templates.js');
$_JSON =& $x44[0]; list(,$WJSON,$SJSON,$UJSON) = $x44;
if ($UJSON) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x45 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'ReferenceError', 14, 6, '<image>/13_templates.js');
$_ReferenceError =& $x45[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x45;
$x46 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 14, 6);
$x47 = $x46($global, $global, $_ReferenceError, array('JSON is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = '<image>/13_templates.js';$x47->properties['line'] = 14;$x47->properties['column'] = 6;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 14, 6, '<image>/13_templates.js');
}
foreach (array($_Object,$_Object->properties['prototype'],$_Function,$_Function->properties['prototype'],$_Array,$_Array->properties['prototype'],$_String,$_String->properties['prototype'],$_Boolean,$_Boolean->properties['prototype'],$_Number,$_Number->properties['prototype'],$_Math,$_Date,$_Date->properties['prototype'],$_RegExp,$_RegExp->properties['prototype'],$_Error,$_Error->properties['prototype'],$_JSON) as $o)
		{
			foreach ($o->attributes as $k => $v) {
				$o->attributes[$k] = $v & ~JS::ENUMERABLE;
			}
		}

		JS::$objectTemplate = (object) array(
			'properties' => array(),
			'attributes' => array(),
			'getters' => array(),
			'setters' => array(),
			'prototype' =>$_Object->properties['prototype'],
			'extensible' => TRUE,
			'class' => 'Object',
		);

		JS::$functionTemplate = clone JS::$objectTemplate;
		JS::$functionTemplate->prototype =$_Function->properties['prototype'];
		JS::$functionTemplate->class = 'Function';
		JS::$functionTemplate->loaded = FALSE;

		JS::$argumentsTemplate = clone JS::$objectTemplate;
		JS::$argumentsTemplate->class = 'Arguments';
		JS::$argumentsTemplate->attributes['length'] = JS::WRITABLE | JS::CONFIGURABLE;
$x48 = clone JS::$objectTemplate;
unset($x50, $W50, $S50, $U50);
$x56 = _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $_Array, (string) 'prototype', 42, 10, '<image>/13_templates.js');
$x50 =& $x56[0]; list(,$W50,$S50,$U50) = $x56;
$x49 = $x50;
$x48->prototype = $x49;
if (!(is_object($_Array) && isset($_Array->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 42, 10, '<image>/13_templates.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 42, 10);
$x61 = $x60($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error' && !isset($x61->properties['file']) && !isset($x61->properties['line']) && !isset($x61->properties['column'])) {$x61->properties['file'] = '<image>/13_templates.js';$x61->properties['line'] = 42;$x61->properties['column'] = 10;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 42, 10, '<image>/13_templates.js');
}
$x57 = $_Array->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 42, 10);
$x58 = $x57($global, $x48, $_Array, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x49 = $x58;
if (is_object($x49) && $x49 !== JS::$undefined) { $x48 = $x49; }
$scope->properties['a'] = JS::$undefined; $_a =& $scope->properties['a'];
$Ua = FALSE;
$_a = $x48;
$x62 = clone JS::$objectTemplate;
unset($x64, $W64, $S64, $U64);
$x65 = _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $_String, (string) 'prototype', 43, 7, '<image>/13_templates.js');
$x64 =& $x65[0]; list(,$W64,$S64,$U64) = $x65;
$x63 = $x64;
$x62->prototype = $x63;
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x68 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 43, 7, '<image>/13_templates.js');
$_TypeError =& $x68[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x68;
$x69 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 43, 7);
$x70 = $x69($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error' && !isset($x70->properties['file']) && !isset($x70->properties['line']) && !isset($x70->properties['column'])) {$x70->properties['file'] = '<image>/13_templates.js';$x70->properties['line'] = 43;$x70->properties['column'] = 7;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 43, 7, '<image>/13_templates.js');
}
$x66 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 43, 7);
$x67 = $x66($global, $x62, $_String, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x67;
if (is_object($x63) && $x63 !== JS::$undefined) { $x62 = $x63; }
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = $x62;
$x71 = clone JS::$objectTemplate;
unset($x73, $W73, $S73, $U73);
$x74 = _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $_Boolean, (string) 'prototype', 44, 7, '<image>/13_templates.js');
$x73 =& $x74[0]; list(,$W73,$S73,$U73) = $x74;
$x72 = $x73;
$x71->prototype = $x72;
if (!(is_object($_Boolean) && isset($_Boolean->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x77 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 44, 7, '<image>/13_templates.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 44, 7);
$x79 = $x78($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error' && !isset($x79->properties['file']) && !isset($x79->properties['line']) && !isset($x79->properties['column'])) {$x79->properties['file'] = '<image>/13_templates.js';$x79->properties['line'] = 44;$x79->properties['column'] = 7;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 44, 7, '<image>/13_templates.js');
}
$x75 = $_Boolean->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 44, 7);
$x76 = $x75($global, $x71, $_Boolean, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x72 = $x76;
if (is_object($x72) && $x72 !== JS::$undefined) { $x71 = $x72; }
$scope->properties['b'] = JS::$undefined; $_b =& $scope->properties['b'];
$Ub = FALSE;
$_b = $x71;
$x80 = clone JS::$objectTemplate;
unset($x82, $W82, $S82, $U82);
$x83 = _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $_Number, (string) 'prototype', 45, 7, '<image>/13_templates.js');
$x82 =& $x83[0]; list(,$W82,$S82,$U82) = $x83;
$x81 = $x82;
$x80->prototype = $x81;
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x86 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 45, 7, '<image>/13_templates.js');
$_TypeError =& $x86[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x86;
$x87 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 45, 7);
$x88 = $x87($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x88->class) && $x88->class === 'Error' && !isset($x88->properties['file']) && !isset($x88->properties['line']) && !isset($x88->properties['column'])) {$x88->properties['file'] = '<image>/13_templates.js';$x88->properties['line'] = 45;$x88->properties['column'] = 7;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 45, 7, '<image>/13_templates.js');
}
$x84 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 45, 7);
$x85 = $x84($global, $x80, $_Number, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x81 = $x85;
if (is_object($x81) && $x81 !== JS::$undefined) { $x80 = $x81; }
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = $x80;
$x89 = clone JS::$objectTemplate;
unset($x91, $W91, $S91, $U91);
$x92 = _b275a9c6fdea97af3fed893a2c6a1ae3_3($global, $scope, $_RegExp, (string) 'prototype', 46, 7, '<image>/13_templates.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
$x90 = $x91;
$x89->prototype = $x90;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 46, 7, '<image>/13_templates.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 46, 7);
$x97 = $x96($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error' && !isset($x97->properties['file']) && !isset($x97->properties['line']) && !isset($x97->properties['column'])) {$x97->properties['file'] = '<image>/13_templates.js';$x97->properties['line'] = 46;$x97->properties['column'] = 7;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 46, 7, '<image>/13_templates.js');
}
$x93 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 46, 7);
$x94 = $x93($global, $x89, $_RegExp, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x90 = $x94;
if (is_object($x90) && $x90 !== JS::$undefined) { $x89 = $x90; }
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = $x89;
$x98 = clone JS::$objectTemplate;
$scope->properties['x'] = JS::$undefined; $_x =& $scope->properties['x'];
$Ux = FALSE;
$_x = $x98;
JS::$arrayTemplate =$_a;
		JS::$stringTemplate =$_s;
		JS::$booleanTemplate =$_b;
		JS::$numberTemplate =$_n;
		JS::$regexpTemplate =$_r;
;
return JS::$undefined;
}
echo 'function _b275a9c6fdea97af3fed893a2c6a1ae3_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_Object,$WObject,$SObject,$UObject);$x4=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Object\',4,6,\'<image>/13_templates.js\');$_Object=&$x4[0];list(,$WObject,$SObject,$UObject)=$x4;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x5=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',4,6,\'<image>/13_templates.js\');$_ReferenceError=&$x5[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x5;$x6=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',4,6);$x7=$x6($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x7->class)&&$x7->class===\'Error\'&&!isset($x7->properties[\'file\'])&&!isset($x7->properties[\'line\'])&&!isset($x7->properties[\'column\'])){$x7->properties[\'file\']=\'<image>/13_templates.js\';$x7->properties[\'line\']=4;$x7->properties[\'column\']=6;$x7->attributes[\'file\']=$x7->attributes[\'line\']=$x7->attributes[\'column\']=0;}throw new JSException($x7,4,6,\'<image>/13_templates.js\');}unset($_Function,$WFunction,$SFunction,$UFunction);$x8=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Function\',5,6,\'<image>/13_templates.js\');$_Function=&$x8[0];list(,$WFunction,$SFunction,$UFunction)=$x8;if($UFunction){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x9=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',5,6,\'<image>/13_templates.js\');$_ReferenceError=&$x9[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x9;$x10=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',5,6);$x11=$x10($global,$global,$_ReferenceError,array(\'Function is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x11->class)&&$x11->class===\'Error\'&&!isset($x11->properties[\'file\'])&&!isset($x11->properties[\'line\'])&&!isset($x11->properties[\'column\'])){$x11->properties[\'file\']=\'<image>/13_templates.js\';$x11->properties[\'line\']=5;$x11->properties[\'column\']=6;$x11->attributes[\'file\']=$x11->attributes[\'line\']=$x11->attributes[\'column\']=0;}throw new JSException($x11,5,6,\'<image>/13_templates.js\');}unset($_Array,$WArray,$SArray,$UArray);$x12=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Array\',6,6,\'<image>/13_templates.js\');$_Array=&$x12[0];list(,$WArray,$SArray,$UArray)=$x12;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x13=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',6,6,\'<image>/13_templates.js\');$_ReferenceError=&$x13[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x13;$x14=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',6,6);$x15=$x14($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x15->class)&&$x15->class===\'Error\'&&!isset($x15->properties[\'file\'])&&!isset($x15->properties[\'line\'])&&!isset($x15->properties[\'column\'])){$x15->properties[\'file\']=\'<image>/13_templates.js\';$x15->properties[\'line\']=6;$x15->properties[\'column\']=6;$x15->attributes[\'file\']=$x15->attributes[\'line\']=$x15->attributes[\'column\']=0;}throw new JSException($x15,6,6,\'<image>/13_templates.js\');}unset($_String,$WString,$SString,$UString);$x16=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'String\',7,6,\'<image>/13_templates.js\');$_String=&$x16[0];list(,$WString,$SString,$UString)=$x16;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x17=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',7,6,\'<image>/13_templates.js\');$_ReferenceError=&$x17[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x17;$x18=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',7,6);$x19=$x18($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x19->class)&&$x19->class===\'Error\'&&!isset($x19->properties[\'file\'])&&!isset($x19->properties[\'line\'])&&!isset($x19->properties[\'column\'])){$x19->properties[\'file\']=\'<image>/13_templates.js\';$x19->properties[\'line\']=7;$x19->properties[\'column\']=6;$x19->attributes[\'file\']=$x19->attributes[\'line\']=$x19->attributes[\'column\']=0;}throw new JSException($x19,7,6,\'<image>/13_templates.js\');}unset($_Boolean,$WBoolean,$SBoolean,$UBoolean);$x20=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Boolean\',8,6,\'<image>/13_templates.js\');$_Boolean=&$x20[0];list(,$WBoolean,$SBoolean,$UBoolean)=$x20;if($UBoolean){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x21=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',8,6,\'<image>/13_templates.js\');$_ReferenceError=&$x21[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x21;$x22=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',8,6);$x23=$x22($global,$global,$_ReferenceError,array(\'Boolean is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'&&!isset($x23->properties[\'file\'])&&!isset($x23->properties[\'line\'])&&!isset($x23->properties[\'column\'])){$x23->properties[\'file\']=\'<image>/13_templates.js\';$x23->properties[\'line\']=8;$x23->properties[\'column\']=6;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,8,6,\'<image>/13_templates.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x24=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Number\',9,6,\'<image>/13_templates.js\');$_Number=&$x24[0];list(,$WNumber,$SNumber,$UNumber)=$x24;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x25=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',9,6,\'<image>/13_templates.js\');$_ReferenceError=&$x25[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x25;$x26=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',9,6);$x27=$x26($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/13_templates.js\';$x27->properties[\'line\']=9;$x27->properties[\'column\']=6;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,9,6,\'<image>/13_templates.js\');}unset($_Math,$WMath,$SMath,$UMath);$x28=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Math\',10,6,\'<image>/13_templates.js\');$_Math=&$x28[0];list(,$WMath,$SMath,$UMath)=$x28;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x29=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',10,6,\'<image>/13_templates.js\');$_ReferenceError=&$x29[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x29;$x30=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',10,6);$x31=$x30($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x31->class)&&$x31->class===\'Error\'&&!isset($x31->properties[\'file\'])&&!isset($x31->properties[\'line\'])&&!isset($x31->properties[\'column\'])){$x31->properties[\'file\']=\'<image>/13_templates.js\';$x31->properties[\'line\']=10;$x31->properties[\'column\']=6;$x31->attributes[\'file\']=$x31->attributes[\'line\']=$x31->attributes[\'column\']=0;}throw new JSException($x31,10,6,\'<image>/13_templates.js\');}unset($_Date,$WDate,$SDate,$UDate);$x32=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Date\',11,6,\'<image>/13_templates.js\');$_Date=&$x32[0];list(,$WDate,$SDate,$UDate)=$x32;if($UDate){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x33=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',11,6,\'<image>/13_templates.js\');$_ReferenceError=&$x33[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x33;$x34=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',11,6);$x35=$x34($global,$global,$_ReferenceError,array(\'Date is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/13_templates.js\';$x35->properties[\'line\']=11;$x35->properties[\'column\']=6;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,11,6,\'<image>/13_templates.js\');}unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x36=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'RegExp\',12,6,\'<image>/13_templates.js\');$_RegExp=&$x36[0];list(,$WRegExp,$SRegExp,$URegExp)=$x36;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x37=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',12,6,\'<image>/13_templates.js\');$_ReferenceError=&$x37[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x37;$x38=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',12,6);$x39=$x38($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=\'<image>/13_templates.js\';$x39->properties[\'line\']=12;$x39->properties[\'column\']=6;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,12,6,\'<image>/13_templates.js\');}unset($_Error,$WError,$SError,$UError);$x40=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'Error\',13,6,\'<image>/13_templates.js\');$_Error=&$x40[0];list(,$WError,$SError,$UError)=$x40;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x41=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',13,6,\'<image>/13_templates.js\');$_ReferenceError=&$x41[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x41;$x42=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',13,6);$x43=$x42($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x43->class)&&$x43->class===\'Error\'&&!isset($x43->properties[\'file\'])&&!isset($x43->properties[\'line\'])&&!isset($x43->properties[\'column\'])){$x43->properties[\'file\']=\'<image>/13_templates.js\';$x43->properties[\'line\']=13;$x43->properties[\'column\']=6;$x43->attributes[\'file\']=$x43->attributes[\'line\']=$x43->attributes[\'column\']=0;}throw new JSException($x43,13,6,\'<image>/13_templates.js\');}unset($_JSON,$WJSON,$SJSON,$UJSON);$x44=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'JSON\',14,6,\'<image>/13_templates.js\');$_JSON=&$x44[0];list(,$WJSON,$SJSON,$UJSON)=$x44;if($UJSON){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x45=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'ReferenceError\',14,6,\'<image>/13_templates.js\');$_ReferenceError=&$x45[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x45;$x46=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',14,6);$x47=$x46($global,$global,$_ReferenceError,array(\'JSON is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x47->class)&&$x47->class===\'Error\'&&!isset($x47->properties[\'file\'])&&!isset($x47->properties[\'line\'])&&!isset($x47->properties[\'column\'])){$x47->properties[\'file\']=\'<image>/13_templates.js\';$x47->properties[\'line\']=14;$x47->properties[\'column\']=6;$x47->attributes[\'file\']=$x47->attributes[\'line\']=$x47->attributes[\'column\']=0;}throw new JSException($x47,14,6,\'<image>/13_templates.js\');}foreach(array($_Object,$_Object->properties[\'prototype\'],$_Function,$_Function->properties[\'prototype\'],$_Array,$_Array->properties[\'prototype\'],$_String,$_String->properties[\'prototype\'],$_Boolean,$_Boolean->properties[\'prototype\'],$_Number,$_Number->properties[\'prototype\'],$_Math,$_Date,$_Date->properties[\'prototype\'],$_RegExp,$_RegExp->properties[\'prototype\'],$_Error,$_Error->properties[\'prototype\'],$_JSON)as$o){foreach($o->attributes as$k=>$v){$o->attributes[$k]=$v&~JS::ENUMERABLE;}}JS::$objectTemplate=(object)array(\'properties\'=>array(),\'attributes\'=>array(),\'getters\'=>array(),\'setters\'=>array(),\'prototype\'=>$_Object->properties[\'prototype\'],\'extensible\'=>TRUE,\'class\'=>\'Object\',);JS::$functionTemplate=clone JS::$objectTemplate;JS::$functionTemplate->prototype=$_Function->properties[\'prototype\'];JS::$functionTemplate->class=\'Function\';JS::$functionTemplate->loaded=FALSE;JS::$argumentsTemplate=clone JS::$objectTemplate;JS::$argumentsTemplate->class=\'Arguments\';JS::$argumentsTemplate->attributes[\'length\']=JS::WRITABLE|JS::CONFIGURABLE;$x48=clone JS::$objectTemplate;unset($x50,$W50,$S50,$U50);$x56=_b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$_Array,(string)\'prototype\',42,10,\'<image>/13_templates.js\');$x50=&$x56[0];list(,$W50,$S50,$U50)=$x56;$x49=$x50;$x48->prototype=$x49;if(!(is_object($_Array)&&isset($_Array->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',42,10,\'<image>/13_templates.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;$x60=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',42,10);$x61=$x60($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'&&!isset($x61->properties[\'file\'])&&!isset($x61->properties[\'line\'])&&!isset($x61->properties[\'column\'])){$x61->properties[\'file\']=\'<image>/13_templates.js\';$x61->properties[\'line\']=42;$x61->properties[\'column\']=10;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,42,10,\'<image>/13_templates.js\');}$x57=$_Array->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',42,10);$x58=$x57($global,$x48,$_Array,array(),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x49=$x58;if(is_object($x49)&&$x49!==JS::$undefined){$x48=$x49;}$scope->properties[\'a\']=JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$_a=$x48;$x62=clone JS::$objectTemplate;unset($x64,$W64,$S64,$U64);$x65=_b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$_String,(string)\'prototype\',43,7,\'<image>/13_templates.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;$x63=$x64;$x62->prototype=$x63;if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x68=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',43,7,\'<image>/13_templates.js\');$_TypeError=&$x68[0];list(,$WTypeError,$STypeError,$UTypeError)=$x68;$x69=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',43,7);$x70=$x69($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x70->class)&&$x70->class===\'Error\'&&!isset($x70->properties[\'file\'])&&!isset($x70->properties[\'line\'])&&!isset($x70->properties[\'column\'])){$x70->properties[\'file\']=\'<image>/13_templates.js\';$x70->properties[\'line\']=43;$x70->properties[\'column\']=7;$x70->attributes[\'file\']=$x70->attributes[\'line\']=$x70->attributes[\'column\']=0;}throw new JSException($x70,43,7,\'<image>/13_templates.js\');}$x66=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',43,7);$x67=$x66($global,$x62,$_String,array(),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x63=$x67;if(is_object($x63)&&$x63!==JS::$undefined){$x62=$x63;}$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=$x62;$x71=clone JS::$objectTemplate;unset($x73,$W73,$S73,$U73);$x74=_b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$_Boolean,(string)\'prototype\',44,7,\'<image>/13_templates.js\');$x73=&$x74[0];list(,$W73,$S73,$U73)=$x74;$x72=$x73;$x71->prototype=$x72;if(!(is_object($_Boolean)&&isset($_Boolean->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',44,7,\'<image>/13_templates.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',44,7);$x79=$x78($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'&&!isset($x79->properties[\'file\'])&&!isset($x79->properties[\'line\'])&&!isset($x79->properties[\'column\'])){$x79->properties[\'file\']=\'<image>/13_templates.js\';$x79->properties[\'line\']=44;$x79->properties[\'column\']=7;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,44,7,\'<image>/13_templates.js\');}$x75=$_Boolean->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',44,7);$x76=$x75($global,$x71,$_Boolean,array(),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x72=$x76;if(is_object($x72)&&$x72!==JS::$undefined){$x71=$x72;}$scope->properties[\'b\']=JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$_b=$x71;$x80=clone JS::$objectTemplate;unset($x82,$W82,$S82,$U82);$x83=_b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$_Number,(string)\'prototype\',45,7,\'<image>/13_templates.js\');$x82=&$x83[0];list(,$W82,$S82,$U82)=$x83;$x81=$x82;$x80->prototype=$x81;if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x86=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',45,7,\'<image>/13_templates.js\');$_TypeError=&$x86[0];list(,$WTypeError,$STypeError,$UTypeError)=$x86;$x87=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',45,7);$x88=$x87($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x88->class)&&$x88->class===\'Error\'&&!isset($x88->properties[\'file\'])&&!isset($x88->properties[\'line\'])&&!isset($x88->properties[\'column\'])){$x88->properties[\'file\']=\'<image>/13_templates.js\';$x88->properties[\'line\']=45;$x88->properties[\'column\']=7;$x88->attributes[\'file\']=$x88->attributes[\'line\']=$x88->attributes[\'column\']=0;}throw new JSException($x88,45,7,\'<image>/13_templates.js\');}$x84=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',45,7);$x85=$x84($global,$x80,$_Number,array(),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x81=$x85;if(is_object($x81)&&$x81!==JS::$undefined){$x80=$x81;}$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=$x80;$x89=clone JS::$objectTemplate;unset($x91,$W91,$S91,$U91);$x92=_b275a9c6fdea97af3fed893a2c6a1ae3_3($global,$scope,$_RegExp,(string)\'prototype\',46,7,\'<image>/13_templates.js\');$x91=&$x92[0];list(,$W91,$S91,$U91)=$x92;$x90=$x91;$x89->prototype=$x90;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_b275a9c6fdea97af3fed893a2c6a1ae3_2($global,$scope,$scope,(string)\'TypeError\',46,7,\'<image>/13_templates.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',46,7);$x97=$x96($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'&&!isset($x97->properties[\'file\'])&&!isset($x97->properties[\'line\'])&&!isset($x97->properties[\'column\'])){$x97->properties[\'file\']=\'<image>/13_templates.js\';$x97->properties[\'line\']=46;$x97->properties[\'column\']=7;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,46,7,\'<image>/13_templates.js\');}$x93=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/13_templates.js\',46,7);$x94=$x93($global,$x89,$_RegExp,array(),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x90=$x94;if(is_object($x90)&&$x90!==JS::$undefined){$x89=$x90;}$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=$x89;$x98=clone JS::$objectTemplate;$scope->properties[\'x\']=JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$_x=$x98;JS::$arrayTemplate=$_a;JS::$stringTemplate=$_s;JS::$booleanTemplate=$_b;JS::$numberTemplate=$_n;JS::$regexpTemplate=$_r;return JS::$undefined;}', "\n";
function _b275a9c6fdea97af3fed893a2c6a1ae3_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/13_templates.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/13_templates.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x99 = clone JS::$functionTemplate; $x99->call = '_b275a9c6fdea97af3fed893a2c6a1ae3_1'; $x99->parameters = array (
); $x99->scope = $scope; $x99->properties['prototype'] = clone JS::$objectTemplate; $x99->attributes['prototype'] = JS::WRITABLE; $x99->properties['prototype']->properties['constructor'] = $x99; $x99->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x99->properties['length'] = 0; $x99->attributes['length'] = 0;
if (!(is_object($x99) && isset($x99->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _b275a9c6fdea97af3fed893a2c6a1ae3_2($global, $scope, $scope, (string) 'TypeError', 56, 3, '<image>/13_templates.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 56, 3);
$x104 = $x103($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/13_templates.js';$x104->properties['line'] = 56;$x104->properties['column'] = 3;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 56, 3, '<image>/13_templates.js');
}
$x100 = $x99->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 56, 3);
$x101 = $x100($global, $global, $x99, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
