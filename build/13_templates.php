function _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $base, $id, $line, $column, $file) {
$WObject = $SObject = $UObject = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_Object =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x0 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x1 = $x0($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_Object = $x1; }
else { $_Object = JS::$undefined; $UObject = TRUE; }
return array(&$_Object, $WObject, $SObject, $UObject);
}
echo 'function _ecf3fad0d52e74769fda4b5ad81706d2_1($global,$scope,$base,$id,$line,$column,$file){$WObject=$SObject=$UObject=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_Object=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x0=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x1=$x0($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_Object=$x1;}else{$_Object=JS::$undefined;$UObject=TRUE;}return array(&$_Object,$WObject,$SObject,$UObject);}', "\n";
function _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x49 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x49[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x49;
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x51 = $x50($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error' && !isset($x51->properties['file']) && !isset($x51->properties['line']) && !isset($x51->properties['column'])) {$x51->properties['file'] = $file;$x51->properties['line'] = $line;$x51->properties['column'] = $column;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, $line, $column, $file);
}
$W48 = $S48 = $U48 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x48 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x52 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x53 = $x52($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x48 = $x53; }
else { $x48 = JS::$undefined; $U48 = TRUE; }
return array(&$x48, $W48, $S48, $U48);
}
echo 'function _ecf3fad0d52e74769fda4b5ad81706d2_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_ecf3fad0d52e74769fda4b5ad81706d2_1($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x51=$x50($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=$file;$x51->properties[\'line\']=$line;$x51->properties[\'column\']=$column;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,$line,$column,$file);}$W48=$S48=$U48=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x48=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x52=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x53=$x52($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x48=$x53;}else{$x48=JS::$undefined;$U48=TRUE;}return array(&$x48,$W48,$S48,$U48);}', "\n";
function _ecf3fad0d52e74769fda4b5ad81706d2_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/13_templates.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/13_templates.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
unset($_Object, $WObject, $SObject, $UObject);
$x2 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Object', $global), 3, 5, '<image>/13_templates.js');
$_Object =& $x2[0]; list(,$WObject,$SObject,$UObject) = $x2;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x3 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 3, 5, '<image>/13_templates.js');
$_ReferenceError =& $x3[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x3;
$x4 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 3, 5);
$x5 = $x4($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x5->class) && $x5->class === 'Error' && !isset($x5->properties['file']) && !isset($x5->properties['line']) && !isset($x5->properties['column'])) {$x5->properties['file'] = '<image>/13_templates.js';$x5->properties['line'] = 3;$x5->properties['column'] = 5;$x5->attributes['file'] = $x5->attributes['line'] = $x5->attributes['column'] = 0; }
throw new JSException($x5, 3, 5, '<image>/13_templates.js');
}
unset($_Function, $WFunction, $SFunction, $UFunction);
$x6 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Function', $global), 4, 5, '<image>/13_templates.js');
$_Function =& $x6[0]; list(,$WFunction,$SFunction,$UFunction) = $x6;
if ($UFunction) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x7 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 4, 5, '<image>/13_templates.js');
$_ReferenceError =& $x7[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x7;
$x8 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 4, 5);
$x9 = $x8($global, $global, $_ReferenceError, array('Function is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error' && !isset($x9->properties['file']) && !isset($x9->properties['line']) && !isset($x9->properties['column'])) {$x9->properties['file'] = '<image>/13_templates.js';$x9->properties['line'] = 4;$x9->properties['column'] = 5;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 4, 5, '<image>/13_templates.js');
}
unset($_Array, $WArray, $SArray, $UArray);
$x10 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Array', $global), 5, 5, '<image>/13_templates.js');
$_Array =& $x10[0]; list(,$WArray,$SArray,$UArray) = $x10;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 5, 5, '<image>/13_templates.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 5, 5);
$x13 = $x12($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/13_templates.js';$x13->properties['line'] = 5;$x13->properties['column'] = 5;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 5, 5, '<image>/13_templates.js');
}
unset($_String, $WString, $SString, $UString);
$x14 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('String', $global), 6, 5, '<image>/13_templates.js');
$_String =& $x14[0]; list(,$WString,$SString,$UString) = $x14;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x15 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 6, 5, '<image>/13_templates.js');
$_ReferenceError =& $x15[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x15;
$x16 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 6, 5);
$x17 = $x16($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x17->class) && $x17->class === 'Error' && !isset($x17->properties['file']) && !isset($x17->properties['line']) && !isset($x17->properties['column'])) {$x17->properties['file'] = '<image>/13_templates.js';$x17->properties['line'] = 6;$x17->properties['column'] = 5;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
throw new JSException($x17, 6, 5, '<image>/13_templates.js');
}
unset($_Boolean, $WBoolean, $SBoolean, $UBoolean);
$x18 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Boolean', $global), 7, 5, '<image>/13_templates.js');
$_Boolean =& $x18[0]; list(,$WBoolean,$SBoolean,$UBoolean) = $x18;
if ($UBoolean) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x19 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 7, 5, '<image>/13_templates.js');
$_ReferenceError =& $x19[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x19;
$x20 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 7, 5);
$x21 = $x20($global, $global, $_ReferenceError, array('Boolean is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x21->class) && $x21->class === 'Error' && !isset($x21->properties['file']) && !isset($x21->properties['line']) && !isset($x21->properties['column'])) {$x21->properties['file'] = '<image>/13_templates.js';$x21->properties['line'] = 7;$x21->properties['column'] = 5;$x21->attributes['file'] = $x21->attributes['line'] = $x21->attributes['column'] = 0; }
throw new JSException($x21, 7, 5, '<image>/13_templates.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x22 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Number', $global), 8, 5, '<image>/13_templates.js');
$_Number =& $x22[0]; list(,$WNumber,$SNumber,$UNumber) = $x22;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x23 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 8, 5, '<image>/13_templates.js');
$_ReferenceError =& $x23[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x23;
$x24 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 8, 5);
$x25 = $x24($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error' && !isset($x25->properties['file']) && !isset($x25->properties['line']) && !isset($x25->properties['column'])) {$x25->properties['file'] = '<image>/13_templates.js';$x25->properties['line'] = 8;$x25->properties['column'] = 5;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, 8, 5, '<image>/13_templates.js');
}
unset($_Math, $WMath, $SMath, $UMath);
$x26 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Math', $global), 9, 5, '<image>/13_templates.js');
$_Math =& $x26[0]; list(,$WMath,$SMath,$UMath) = $x26;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x27 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 9, 5, '<image>/13_templates.js');
$_ReferenceError =& $x27[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x27;
$x28 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 9, 5);
$x29 = $x28($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error' && !isset($x29->properties['file']) && !isset($x29->properties['line']) && !isset($x29->properties['column'])) {$x29->properties['file'] = '<image>/13_templates.js';$x29->properties['line'] = 9;$x29->properties['column'] = 5;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
throw new JSException($x29, 9, 5, '<image>/13_templates.js');
}
unset($_Date, $WDate, $SDate, $UDate);
$x30 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Date', $global), 10, 5, '<image>/13_templates.js');
$_Date =& $x30[0]; list(,$WDate,$SDate,$UDate) = $x30;
if ($UDate) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x31 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 10, 5, '<image>/13_templates.js');
$_ReferenceError =& $x31[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x31;
$x32 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 10, 5);
$x33 = $x32($global, $global, $_ReferenceError, array('Date is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x33->class) && $x33->class === 'Error' && !isset($x33->properties['file']) && !isset($x33->properties['line']) && !isset($x33->properties['column'])) {$x33->properties['file'] = '<image>/13_templates.js';$x33->properties['line'] = 10;$x33->properties['column'] = 5;$x33->attributes['file'] = $x33->attributes['line'] = $x33->attributes['column'] = 0; }
throw new JSException($x33, 10, 5, '<image>/13_templates.js');
}
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x34 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('RegExp', $global), 11, 5, '<image>/13_templates.js');
$_RegExp =& $x34[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x34;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x35 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 11, 5, '<image>/13_templates.js');
$_ReferenceError =& $x35[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x35;
$x36 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 11, 5);
$x37 = $x36($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/13_templates.js';$x37->properties['line'] = 11;$x37->properties['column'] = 5;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 11, 5, '<image>/13_templates.js');
}
unset($_Error, $WError, $SError, $UError);
$x38 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('Error', $global), 12, 5, '<image>/13_templates.js');
$_Error =& $x38[0]; list(,$WError,$SError,$UError) = $x38;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x39 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 12, 5, '<image>/13_templates.js');
$_ReferenceError =& $x39[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x39;
$x40 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 12, 5);
$x41 = $x40($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error' && !isset($x41->properties['file']) && !isset($x41->properties['line']) && !isset($x41->properties['column'])) {$x41->properties['file'] = '<image>/13_templates.js';$x41->properties['line'] = 12;$x41->properties['column'] = 5;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, 12, 5, '<image>/13_templates.js');
}
unset($_JSON, $WJSON, $SJSON, $UJSON);
$x42 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('JSON', $global), 13, 5, '<image>/13_templates.js');
$_JSON =& $x42[0]; list(,$WJSON,$SJSON,$UJSON) = $x42;
if ($UJSON) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x43 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('ReferenceError', $global), 13, 5, '<image>/13_templates.js');
$_ReferenceError =& $x43[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x43;
$x44 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 13, 5);
$x45 = $x44($global, $global, $_ReferenceError, array('JSON is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error' && !isset($x45->properties['file']) && !isset($x45->properties['line']) && !isset($x45->properties['column'])) {$x45->properties['file'] = '<image>/13_templates.js';$x45->properties['line'] = 13;$x45->properties['column'] = 5;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 13, 5, '<image>/13_templates.js');
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
$x46 = clone JS::$objectTemplate;
unset($x48, $W48, $S48, $U48);
$x54 = _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $_Array, JS::toString('prototype', $global), 41, 9, '<image>/13_templates.js');
$x48 =& $x54[0]; list(,$W48,$S48,$U48) = $x54;
$x47 = $x48;
$x46->prototype = $x47;
if (!(is_object($_Array) && isset($_Array->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x57 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), 41, 9, '<image>/13_templates.js');
$_TypeError =& $x57[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x57;
$x58 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 41, 9);
$x59 = $x58($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x59->class) && $x59->class === 'Error' && !isset($x59->properties['file']) && !isset($x59->properties['line']) && !isset($x59->properties['column'])) {$x59->properties['file'] = '<image>/13_templates.js';$x59->properties['line'] = 41;$x59->properties['column'] = 9;$x59->attributes['file'] = $x59->attributes['line'] = $x59->attributes['column'] = 0; }
throw new JSException($x59, 41, 9, '<image>/13_templates.js');
}
$x55 = $_Array->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 41, 9);
$x56 = $x55($global, $x46, $_Array, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x47 = $x56;
if (is_object($x47) && $x47 !== JS::$undefined) { $x46 = $x47; }
$scope->properties['a'] = JS::$undefined; $_a =& $scope->properties['a'];
$Ua = FALSE;
$_a = $x46;
$x60 = clone JS::$objectTemplate;
unset($x62, $W62, $S62, $U62);
$x63 = _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $_String, JS::toString('prototype', $global), 42, 6, '<image>/13_templates.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
$x61 = $x62;
$x60->prototype = $x61;
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x66 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), 42, 6, '<image>/13_templates.js');
$_TypeError =& $x66[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x66;
$x67 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 42, 6);
$x68 = $x67($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x68->class) && $x68->class === 'Error' && !isset($x68->properties['file']) && !isset($x68->properties['line']) && !isset($x68->properties['column'])) {$x68->properties['file'] = '<image>/13_templates.js';$x68->properties['line'] = 42;$x68->properties['column'] = 6;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 42, 6, '<image>/13_templates.js');
}
$x64 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 42, 6);
$x65 = $x64($global, $x60, $_String, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x61 = $x65;
if (is_object($x61) && $x61 !== JS::$undefined) { $x60 = $x61; }
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = $x60;
$x69 = clone JS::$objectTemplate;
unset($x71, $W71, $S71, $U71);
$x72 = _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $_Boolean, JS::toString('prototype', $global), 43, 6, '<image>/13_templates.js');
$x71 =& $x72[0]; list(,$W71,$S71,$U71) = $x72;
$x70 = $x71;
$x69->prototype = $x70;
if (!(is_object($_Boolean) && isset($_Boolean->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), 43, 6, '<image>/13_templates.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 43, 6);
$x77 = $x76($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = '<image>/13_templates.js';$x77->properties['line'] = 43;$x77->properties['column'] = 6;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 43, 6, '<image>/13_templates.js');
}
$x73 = $_Boolean->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 43, 6);
$x74 = $x73($global, $x69, $_Boolean, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x70 = $x74;
if (is_object($x70) && $x70 !== JS::$undefined) { $x69 = $x70; }
$scope->properties['b'] = JS::$undefined; $_b =& $scope->properties['b'];
$Ub = FALSE;
$_b = $x69;
$x78 = clone JS::$objectTemplate;
unset($x80, $W80, $S80, $U80);
$x81 = _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $_Number, JS::toString('prototype', $global), 44, 6, '<image>/13_templates.js');
$x80 =& $x81[0]; list(,$W80,$S80,$U80) = $x81;
$x79 = $x80;
$x78->prototype = $x79;
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), 44, 6, '<image>/13_templates.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 44, 6);
$x86 = $x85($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/13_templates.js';$x86->properties['line'] = 44;$x86->properties['column'] = 6;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 44, 6, '<image>/13_templates.js');
}
$x82 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 44, 6);
$x83 = $x82($global, $x78, $_Number, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x79 = $x83;
if (is_object($x79) && $x79 !== JS::$undefined) { $x78 = $x79; }
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = $x78;
$x87 = clone JS::$objectTemplate;
unset($x89, $W89, $S89, $U89);
$x90 = _ecf3fad0d52e74769fda4b5ad81706d2_2($global, $scope, $_RegExp, JS::toString('prototype', $global), 45, 6, '<image>/13_templates.js');
$x89 =& $x90[0]; list(,$W89,$S89,$U89) = $x90;
$x88 = $x89;
$x87->prototype = $x88;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _ecf3fad0d52e74769fda4b5ad81706d2_1($global, $scope, $scope, JS::toString('TypeError', $global), 45, 6, '<image>/13_templates.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 45, 6);
$x95 = $x94($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = '<image>/13_templates.js';$x95->properties['line'] = 45;$x95->properties['column'] = 6;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, 45, 6, '<image>/13_templates.js');
}
$x91 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/13_templates.js', 45, 6);
$x92 = $x91($global, $x87, $_RegExp, array(), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x88 = $x92;
if (is_object($x88) && $x88 !== JS::$undefined) { $x87 = $x88; }
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = $x87;
$x96 = clone JS::$objectTemplate;
$scope->properties['x'] = JS::$undefined; $_x =& $scope->properties['x'];
$Ux = FALSE;
$_x = $x96;
JS::$arrayTemplate =$_a;
	JS::$stringTemplate =$_s;
	JS::$booleanTemplate =$_b;
	JS::$numberTemplate =$_n;
	JS::$regexpTemplate =$_r;
for ($x98 = $scope; $x98 && $x98->up && !array_key_exists('a', $x98->attributes) && !array_key_exists('a', $x98->properties); $x98 = $x98->up);
if (!array_key_exists('a', $x98->attributes)) { unset($x98->properties['a'], $_a); $x97 = TRUE; }
else if ($x98->attributes['a'] & JS::CONFIGURABLE) { unset($x98->properties['a'], $x98->attributes['a'], $x98->getters['a'], $x98->setters['a'], $_a); $x97 = TRUE; }
else { $x97 = FALSE; };
for ($x100 = $scope; $x100 && $x100->up && !array_key_exists('s', $x100->attributes) && !array_key_exists('s', $x100->properties); $x100 = $x100->up);
if (!array_key_exists('s', $x100->attributes)) { unset($x100->properties['s'], $_s); $x99 = TRUE; }
else if ($x100->attributes['s'] & JS::CONFIGURABLE) { unset($x100->properties['s'], $x100->attributes['s'], $x100->getters['s'], $x100->setters['s'], $_s); $x99 = TRUE; }
else { $x99 = FALSE; };
for ($x102 = $scope; $x102 && $x102->up && !array_key_exists('b', $x102->attributes) && !array_key_exists('b', $x102->properties); $x102 = $x102->up);
if (!array_key_exists('b', $x102->attributes)) { unset($x102->properties['b'], $_b); $x101 = TRUE; }
else if ($x102->attributes['b'] & JS::CONFIGURABLE) { unset($x102->properties['b'], $x102->attributes['b'], $x102->getters['b'], $x102->setters['b'], $_b); $x101 = TRUE; }
else { $x101 = FALSE; };
for ($x104 = $scope; $x104 && $x104->up && !array_key_exists('n', $x104->attributes) && !array_key_exists('n', $x104->properties); $x104 = $x104->up);
if (!array_key_exists('n', $x104->attributes)) { unset($x104->properties['n'], $_n); $x103 = TRUE; }
else if ($x104->attributes['n'] & JS::CONFIGURABLE) { unset($x104->properties['n'], $x104->attributes['n'], $x104->getters['n'], $x104->setters['n'], $_n); $x103 = TRUE; }
else { $x103 = FALSE; };
for ($x106 = $scope; $x106 && $x106->up && !array_key_exists('r', $x106->attributes) && !array_key_exists('r', $x106->properties); $x106 = $x106->up);
if (!array_key_exists('r', $x106->attributes)) { unset($x106->properties['r'], $_r); $x105 = TRUE; }
else if ($x106->attributes['r'] & JS::CONFIGURABLE) { unset($x106->properties['r'], $x106->attributes['r'], $x106->getters['r'], $x106->setters['r'], $_r); $x105 = TRUE; }
else { $x105 = FALSE; };
for ($x108 = $scope; $x108 && $x108->up && !array_key_exists('x', $x108->attributes) && !array_key_exists('x', $x108->properties); $x108 = $x108->up);
if (!array_key_exists('x', $x108->attributes)) { unset($x108->properties['x'], $_x); $x107 = TRUE; }
else if ($x108->attributes['x'] & JS::CONFIGURABLE) { unset($x108->properties['x'], $x108->attributes['x'], $x108->getters['x'], $x108->setters['x'], $_x); $x107 = TRUE; }
else { $x107 = FALSE; };
;
return JS::$undefined;
}
