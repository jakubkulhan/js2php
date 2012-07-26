function _dc8b81f3d85c475b76d3fad15e533f32_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['path'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_path =& $scope->properties['path'];
$Upath = FALSE;
$scope->properties['normalize'] = $fn;
$_normalize =& $scope->properties['normalize'];
$global->scope[++$global->scope_sp] = $scope;
$_path= JS::toString($_path, $global);
				$absolute =$_path[0] === DIRECTORY_SEPARATOR;
				$newPath = array();

				foreach(explode(DIRECTORY_SEPARATOR,$_path) as $part) {
					if (!empty($part)) {
						switch ($part) {
							case '.': break;

							case '..':
								array_pop($newPath);
							break;

							default:
								$newPath[] = $part;
						}
					}
				}

				return ($absolute ? DIRECTORY_SEPARATOR : '') .
					implode(DIRECTORY_SEPARATOR, $newPath);
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'path\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_path=&$scope->properties[\'path\'];$Upath=FALSE;$scope->properties[\'normalize\']=$fn;$_normalize=&$scope->properties[\'normalize\'];$global->scope[++$global->scope_sp]=$scope;$_path=JS::toString($_path,$global);$absolute=$_path[0]===DIRECTORY_SEPARATOR;$newPath=array();foreach(explode(DIRECTORY_SEPARATOR,$_path)as$part){if(!empty($part)){switch($part){case\'.\':break;case\'..\':array_pop($newPath);break;default:$newPath[]=$part;}}}return($absolute?DIRECTORY_SEPARATOR:\'\').implode(DIRECTORY_SEPARATOR,$newPath);return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x9 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x10; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x9=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x10;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x16[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x16;
$x17 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x18 = $x17($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x18->class) && $x18->class === 'Error' && !isset($x18->properties['file']) && !isset($x18->properties['line']) && !isset($x18->properties['column'])) {$x18->properties['file'] = $file;$x18->properties['line'] = $line;$x18->properties['column'] = $column;$x18->attributes['file'] = $x18->attributes['line'] = $x18->attributes['column'] = 0; }
throw new JSException($x18, $line, $column, $file);
}
$W15 = $S15 = $U15 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x15 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x19 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x20 = $x19($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x20; }
else { $x15 = JS::$undefined; $U15 = TRUE; }
return array(&$x15, $W15, $S15, $U15);
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x18=$x17($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=$file;$x18->properties[\'line\']=$line;$x18->properties[\'column\']=$column;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,$line,$column,$file);}$W15=$S15=$U15=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x15=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x19=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x20=$x19($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x20;}else{$x15=JS::$undefined;$U15=TRUE;}return array(&$x15,$W15,$S15,$U15);}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x6 =& $scope->properties['arguments'];
$x6->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x6->properties[$i] = $args[$i];
$x6->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['join'] = $fn;
$_join =& $scope->properties['join'];
$global->scope[++$global->scope_sp] = $scope;
$x7 = clone JS::$arrayTemplate;
$x7->properties['length'] = 0;
$x7->attributes['length'] = JS::WRITABLE;
$scope->properties['path'] = JS::$undefined; $_path =& $scope->properties['path'];
$Upath = FALSE;
$_path = $x7;
for ($x8 = 0;; ++$x8) {
if ($x8 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x11 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'arguments', 31, 24, '<image>/18_path.js');
$_arguments =& $x11[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x11;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x12 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 31, 24, '<image>/18_path.js');
$_ReferenceError =& $x12[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x12;
$x13 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 31, 24);
$x14 = $x13($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error' && !isset($x14->properties['file']) && !isset($x14->properties['line']) && !isset($x14->properties['column'])) {$x14->properties['file'] = '<image>/18_path.js';$x14->properties['line'] = 31;$x14->properties['column'] = 24;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, 31, 24, '<image>/18_path.js');
}
unset($x15, $W15, $S15, $U15);
$x21 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_arguments, (string) 'length', 31, 33, '<image>/18_path.js');
$x15 =& $x21[0]; list(,$W15,$S15,$U15) = $x21;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x15;
}
if ($x8 !== 0) {
$x22 = ++$_i;
}
$x23 = JS::toPrimitive($_i, $global);
$x24 = JS::toPrimitive($_l, $global);
$x25 = (is_string($x23) && is_string($x24) ? strcmp($x23, $x24) < 0 : (!is_nan($x26 = JS::toNumber($x23, $global)) && !is_nan($x27 = JS::toNumber($x24, $global)) && $x26 < $x27));
if (!JS::toBoolean($x25, $global)) { break; }

unset($x29, $W29, $S29, $U29);
$x30 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_arguments, (string) $_i, 32, 25, '<image>/18_path.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
$x31 = $x29;
$x31 = ($x31 === JS::$undefined ? 'undefined' : (is_int($x31) || is_float($x31) ? 'number' : (is_bool($x31) ? 'boolean' : (is_string($x31) ? 'string' : (is_object($x31) && isset($x31->call) ? 'function' : 'object')))));
$x28 = (((gettype($x31) === gettype('string') && $x31 === 'string'))|| (((is_float($x31) || is_int($x31)) && (is_float('string') || is_int('string'))) && $x31 == 'string'));
if (JS::toBoolean($x28, $global)) {
if ($_path === JS::$undefined || $_path === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x33 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 33, 15, '<image>/18_path.js');
$_TypeError =& $x33[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x33;
$x34 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 33, 15);
$x35 = $x34($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/18_path.js';$x35->properties['line'] = 33;$x35->properties['column'] = 15;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 33, 15, '<image>/18_path.js');
}
$x32 = JS::toObject($_path, $global);
unset($x36, $W36, $S36, $U36);
$x37 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x32, (string) 'push', 33, 15, '<image>/18_path.js');
$x36 =& $x37[0]; list(,$W36,$S36,$U36) = $x37;
unset($x38, $W38, $S38, $U38);
$x39 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_arguments, (string) $_i, 33, 25, '<image>/18_path.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
if (!(is_object($x36) && isset($x36->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 33, 15, '<image>/18_path.js');
$_TypeError =& $x42[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x42;
$x43 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 33, 15);
$x44 = $x43($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x44->class) && $x44->class === 'Error' && !isset($x44->properties['file']) && !isset($x44->properties['line']) && !isset($x44->properties['column'])) {$x44->properties['file'] = '<image>/18_path.js';$x44->properties['line'] = 33;$x44->properties['column'] = 15;$x44->attributes['file'] = $x44->attributes['line'] = $x44->attributes['column'] = 0; }
throw new JSException($x44, 33, 15, '<image>/18_path.js');
}
$x40 = $x36->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 33, 15);
$x41 = $x40($global, $x32, $x36, array($x38), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
unset($_require, $Wrequire, $Srequire, $Urequire);
$x45 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'require', 37, 11, '<image>/18_path.js');
$_require =& $x45[0]; list(,$Wrequire,$Srequire,$Urequire) = $x45;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x46 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 37, 11, '<image>/18_path.js');
$_ReferenceError =& $x46[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x46;
$x47 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 11);
$x48 = $x47($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x48->class) && $x48->class === 'Error' && !isset($x48->properties['file']) && !isset($x48->properties['line']) && !isset($x48->properties['column'])) {$x48->properties['file'] = '<image>/18_path.js';$x48->properties['line'] = 37;$x48->properties['column'] = 11;$x48->attributes['file'] = $x48->attributes['line'] = $x48->attributes['column'] = 0; }
throw new JSException($x48, 37, 11, '<image>/18_path.js');
}
unset($x49, $W49, $S49, $U49);
$x50 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_require, (string) 'modules', 37, 18, '<image>/18_path.js');
$x49 =& $x50[0]; list(,$W49,$S49,$U49) = $x50;
unset($x51, $W51, $S51, $U51);
$x52 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x49, (string) 'path', 37, 26, '<image>/18_path.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
unset($x53, $W53, $S53, $U53);
$x54 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x51, (string) 'exports', 37, 31, '<image>/18_path.js');
$x53 =& $x54[0]; list(,$W53,$S53,$U53) = $x54;
if ($x53 === JS::$undefined || $x53 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x56 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 37, 49, '<image>/18_path.js');
$_TypeError =& $x56[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x56;
$x57 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 49);
$x58 = $x57($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/18_path.js';$x58->properties['line'] = 37;$x58->properties['column'] = 49;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 37, 49, '<image>/18_path.js');
}
$x55 = JS::toObject($x53, $global);
unset($x59, $W59, $S59, $U59);
$x60 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x55, (string) 'normalize', 37, 49, '<image>/18_path.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
if ($_path === JS::$undefined || $_path === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 37, 59, '<image>/18_path.js');
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 59);
$x64 = $x63($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error' && !isset($x64->properties['file']) && !isset($x64->properties['line']) && !isset($x64->properties['column'])) {$x64->properties['file'] = '<image>/18_path.js';$x64->properties['line'] = 37;$x64->properties['column'] = 59;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, 37, 59, '<image>/18_path.js');
}
$x61 = JS::toObject($_path, $global);
unset($x65, $W65, $S65, $U65);
$x66 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x61, (string) 'join', 37, 59, '<image>/18_path.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
if (!(is_object($x65) && isset($x65->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x69 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 37, 59, '<image>/18_path.js');
$_TypeError =& $x69[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x69;
$x70 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 59);
$x71 = $x70($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x71->class) && $x71->class === 'Error' && !isset($x71->properties['file']) && !isset($x71->properties['line']) && !isset($x71->properties['column'])) {$x71->properties['file'] = '<image>/18_path.js';$x71->properties['line'] = 37;$x71->properties['column'] = 59;$x71->attributes['file'] = $x71->attributes['line'] = $x71->attributes['column'] = 0; }
throw new JSException($x71, 37, 59, '<image>/18_path.js');
}
$x67 = $x65->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 59);
$x68 = $x67($global, $x61, $x65, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x59) && isset($x59->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x74 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 37, 49, '<image>/18_path.js');
$_TypeError =& $x74[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x74;
$x75 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 49);
$x76 = $x75($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x76->class) && $x76->class === 'Error' && !isset($x76->properties['file']) && !isset($x76->properties['line']) && !isset($x76->properties['column'])) {$x76->properties['file'] = '<image>/18_path.js';$x76->properties['line'] = 37;$x76->properties['column'] = 49;$x76->attributes['file'] = $x76->attributes['line'] = $x76->attributes['column'] = 0; }
throw new JSException($x76, 37, 49, '<image>/18_path.js');
}
$x72 = $x59->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 37, 49);
$x73 = $x72($global, $x55, $x59, array($x68), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x73;
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'join\']=$fn;$_join=&$scope->properties[\'join\'];$global->scope[++$global->scope_sp]=$scope;$x7=clone JS::$arrayTemplate;$x7->properties[\'length\']=0;$x7->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'path\']=JS::$undefined;$_path=&$scope->properties[\'path\'];$Upath=FALSE;$_path=$x7;for($x8=0;;++$x8){if($x8===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x11=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'arguments\',31,24,\'<image>/18_path.js\');$_arguments=&$x11[0];list(,$Warguments,$Sarguments,$Uarguments)=$x11;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x12=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',31,24,\'<image>/18_path.js\');$_ReferenceError=&$x12[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x12;$x13=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',31,24);$x14=$x13($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'&&!isset($x14->properties[\'file\'])&&!isset($x14->properties[\'line\'])&&!isset($x14->properties[\'column\'])){$x14->properties[\'file\']=\'<image>/18_path.js\';$x14->properties[\'line\']=31;$x14->properties[\'column\']=24;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,31,24,\'<image>/18_path.js\');}unset($x15,$W15,$S15,$U15);$x21=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_arguments,(string)\'length\',31,33,\'<image>/18_path.js\');$x15=&$x21[0];list(,$W15,$S15,$U15)=$x21;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x15;}if($x8!==0){$x22=++$_i;}$x23=JS::toPrimitive($_i,$global);$x24=JS::toPrimitive($_l,$global);$x25=(is_string($x23)&&is_string($x24)?strcmp($x23,$x24)<0:(!is_nan($x26=JS::toNumber($x23,$global))&&!is_nan($x27=JS::toNumber($x24,$global))&&$x26<$x27));if(!JS::toBoolean($x25,$global)){break;}unset($x29,$W29,$S29,$U29);$x30=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_arguments,(string)$_i,32,25,\'<image>/18_path.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;$x31=$x29;$x31=($x31===JS::$undefined?\'undefined\':(is_int($x31)||is_float($x31)?\'number\':(is_bool($x31)?\'boolean\':(is_string($x31)?\'string\':(is_object($x31)&&isset($x31->call)?\'function\':\'object\')))));$x28=(((gettype($x31)===gettype(\'string\')&&$x31===\'string\'))||(((is_float($x31)||is_int($x31))&&(is_float(\'string\')||is_int(\'string\')))&&$x31==\'string\'));if(JS::toBoolean($x28,$global)){if($_path===JS::$undefined||$_path===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x33=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',33,15,\'<image>/18_path.js\');$_TypeError=&$x33[0];list(,$WTypeError,$STypeError,$UTypeError)=$x33;$x34=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',33,15);$x35=$x34($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/18_path.js\';$x35->properties[\'line\']=33;$x35->properties[\'column\']=15;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,33,15,\'<image>/18_path.js\');}$x32=JS::toObject($_path,$global);unset($x36,$W36,$S36,$U36);$x37=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x32,(string)\'push\',33,15,\'<image>/18_path.js\');$x36=&$x37[0];list(,$W36,$S36,$U36)=$x37;unset($x38,$W38,$S38,$U38);$x39=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_arguments,(string)$_i,33,25,\'<image>/18_path.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;if(!(is_object($x36)&&isset($x36->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x42=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',33,15,\'<image>/18_path.js\');$_TypeError=&$x42[0];list(,$WTypeError,$STypeError,$UTypeError)=$x42;$x43=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',33,15);$x44=$x43($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x44->class)&&$x44->class===\'Error\'&&!isset($x44->properties[\'file\'])&&!isset($x44->properties[\'line\'])&&!isset($x44->properties[\'column\'])){$x44->properties[\'file\']=\'<image>/18_path.js\';$x44->properties[\'line\']=33;$x44->properties[\'column\']=15;$x44->attributes[\'file\']=$x44->attributes[\'line\']=$x44->attributes[\'column\']=0;}throw new JSException($x44,33,15,\'<image>/18_path.js\');}$x40=$x36->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',33,15);$x41=$x40($global,$x32,$x36,array($x38),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($_require,$Wrequire,$Srequire,$Urequire);$x45=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'require\',37,11,\'<image>/18_path.js\');$_require=&$x45[0];list(,$Wrequire,$Srequire,$Urequire)=$x45;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x46=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',37,11,\'<image>/18_path.js\');$_ReferenceError=&$x46[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x46;$x47=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,11);$x48=$x47($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x48->class)&&$x48->class===\'Error\'&&!isset($x48->properties[\'file\'])&&!isset($x48->properties[\'line\'])&&!isset($x48->properties[\'column\'])){$x48->properties[\'file\']=\'<image>/18_path.js\';$x48->properties[\'line\']=37;$x48->properties[\'column\']=11;$x48->attributes[\'file\']=$x48->attributes[\'line\']=$x48->attributes[\'column\']=0;}throw new JSException($x48,37,11,\'<image>/18_path.js\');}unset($x49,$W49,$S49,$U49);$x50=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_require,(string)\'modules\',37,18,\'<image>/18_path.js\');$x49=&$x50[0];list(,$W49,$S49,$U49)=$x50;unset($x51,$W51,$S51,$U51);$x52=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x49,(string)\'path\',37,26,\'<image>/18_path.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;unset($x53,$W53,$S53,$U53);$x54=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x51,(string)\'exports\',37,31,\'<image>/18_path.js\');$x53=&$x54[0];list(,$W53,$S53,$U53)=$x54;if($x53===JS::$undefined||$x53===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x56=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',37,49,\'<image>/18_path.js\');$_TypeError=&$x56[0];list(,$WTypeError,$STypeError,$UTypeError)=$x56;$x57=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,49);$x58=$x57($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/18_path.js\';$x58->properties[\'line\']=37;$x58->properties[\'column\']=49;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,37,49,\'<image>/18_path.js\');}$x55=JS::toObject($x53,$global);unset($x59,$W59,$S59,$U59);$x60=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x55,(string)\'normalize\',37,49,\'<image>/18_path.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;if($_path===JS::$undefined||$_path===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x62=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',37,59,\'<image>/18_path.js\');$_TypeError=&$x62[0];list(,$WTypeError,$STypeError,$UTypeError)=$x62;$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,59);$x64=$x63($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x64->class)&&$x64->class===\'Error\'&&!isset($x64->properties[\'file\'])&&!isset($x64->properties[\'line\'])&&!isset($x64->properties[\'column\'])){$x64->properties[\'file\']=\'<image>/18_path.js\';$x64->properties[\'line\']=37;$x64->properties[\'column\']=59;$x64->attributes[\'file\']=$x64->attributes[\'line\']=$x64->attributes[\'column\']=0;}throw new JSException($x64,37,59,\'<image>/18_path.js\');}$x61=JS::toObject($_path,$global);unset($x65,$W65,$S65,$U65);$x66=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x61,(string)\'join\',37,59,\'<image>/18_path.js\');$x65=&$x66[0];list(,$W65,$S65,$U65)=$x66;if(!(is_object($x65)&&isset($x65->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x69=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',37,59,\'<image>/18_path.js\');$_TypeError=&$x69[0];list(,$WTypeError,$STypeError,$UTypeError)=$x69;$x70=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,59);$x71=$x70($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x71->class)&&$x71->class===\'Error\'&&!isset($x71->properties[\'file\'])&&!isset($x71->properties[\'line\'])&&!isset($x71->properties[\'column\'])){$x71->properties[\'file\']=\'<image>/18_path.js\';$x71->properties[\'line\']=37;$x71->properties[\'column\']=59;$x71->attributes[\'file\']=$x71->attributes[\'line\']=$x71->attributes[\'column\']=0;}throw new JSException($x71,37,59,\'<image>/18_path.js\');}$x67=$x65->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,59);$x68=$x67($global,$x61,$x65,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x59)&&isset($x59->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x74=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',37,49,\'<image>/18_path.js\');$_TypeError=&$x74[0];list(,$WTypeError,$STypeError,$UTypeError)=$x74;$x75=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,49);$x76=$x75($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x76->class)&&$x76->class===\'Error\'&&!isset($x76->properties[\'file\'])&&!isset($x76->properties[\'line\'])&&!isset($x76->properties[\'column\'])){$x76->properties[\'file\']=\'<image>/18_path.js\';$x76->properties[\'line\']=37;$x76->properties[\'column\']=49;$x76->attributes[\'file\']=$x76->attributes[\'line\']=$x76->attributes[\'column\']=0;}throw new JSException($x76,37,49,\'<image>/18_path.js\');}$x72=$x59->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',37,49);$x73=$x72($global,$x55,$x59,array($x68),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x73;return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x79 =& $scope->properties['arguments'];
$x79->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x79->properties[$i] = $args[$i];
$x79->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['to'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_to =& $scope->properties['to'];
$Uto = FALSE;
$scope->properties['resolve'] = $fn;
$_resolve =& $scope->properties['resolve'];
$global->scope[++$global->scope_sp] = $scope;
$x80 = clone JS::$arrayTemplate;
$x80->properties['length'] = 1;
$x80->attributes['length'] = JS::WRITABLE;
$x80->properties[0] = getcwd();
$x80->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['path'] = JS::$undefined; $_path =& $scope->properties['path'];
$Upath = FALSE;
$_path = $x80;
for ($x81 = 0;; ++$x81) {
if ($x81 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x82 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'arguments', 42, 24, '<image>/18_path.js');
$_arguments =& $x82[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x82;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x83 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 42, 24, '<image>/18_path.js');
$_ReferenceError =& $x83[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x83;
$x84 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 42, 24);
$x85 = $x84($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x85->class) && $x85->class === 'Error' && !isset($x85->properties['file']) && !isset($x85->properties['line']) && !isset($x85->properties['column'])) {$x85->properties['file'] = '<image>/18_path.js';$x85->properties['line'] = 42;$x85->properties['column'] = 24;$x85->attributes['file'] = $x85->attributes['line'] = $x85->attributes['column'] = 0; }
throw new JSException($x85, 42, 24, '<image>/18_path.js');
}
unset($x86, $W86, $S86, $U86);
$x87 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_arguments, (string) 'length', 42, 33, '<image>/18_path.js');
$x86 =& $x87[0]; list(,$W86,$S86,$U86) = $x87;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x86;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x81 !== 0) {
$x88 = ++$_i;
}
$x89 = JS::toPrimitive($_i, $global);
$x90 = JS::toPrimitive($_l, $global);
$x91 = (is_string($x89) && is_string($x90) ? strcmp($x89, $x90) < 0 : (!is_nan($x92 = JS::toNumber($x89, $global)) && !is_nan($x93 = JS::toNumber($x90, $global)) && $x92 < $x93));
if (!JS::toBoolean($x91, $global)) { break; }

unset($_String, $WString, $SString, $UString);
$x94 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'String', 43, 11, '<image>/18_path.js');
$_String =& $x94[0]; list(,$WString,$SString,$UString) = $x94;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x95 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 43, 11, '<image>/18_path.js');
$_ReferenceError =& $x95[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x95;
$x96 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 43, 11);
$x97 = $x96($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error' && !isset($x97->properties['file']) && !isset($x97->properties['line']) && !isset($x97->properties['column'])) {$x97->properties['file'] = '<image>/18_path.js';$x97->properties['line'] = 43;$x97->properties['column'] = 11;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 43, 11, '<image>/18_path.js');
}
unset($x98, $W98, $S98, $U98);
$x99 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_arguments, (string) $_i, 43, 27, '<image>/18_path.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 43, 17, '<image>/18_path.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 43, 17);
$x104 = $x103($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/18_path.js';$x104->properties['line'] = 43;$x104->properties['column'] = 17;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 43, 17, '<image>/18_path.js');
}
$x100 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 43, 17);
$x101 = $x100($global, $global, $_String, array($x98), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x101;
if ($_arg === JS::$undefined || $_arg === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 45, 19, '<image>/18_path.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 45, 19);
$x109 = $x108($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/18_path.js';$x109->properties['line'] = 45;$x109->properties['column'] = 19;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 45, 19, '<image>/18_path.js');
}
$x106 = JS::toObject($_arg, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x106, (string) 'charAt', 45, 19, '<image>/18_path.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if (!(is_object($x110) && isset($x110->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x114 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 45, 19, '<image>/18_path.js');
$_TypeError =& $x114[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x114;
$x115 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 45, 19);
$x116 = $x115($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x116->class) && $x116->class === 'Error' && !isset($x116->properties['file']) && !isset($x116->properties['line']) && !isset($x116->properties['column'])) {$x116->properties['file'] = '<image>/18_path.js';$x116->properties['line'] = 45;$x116->properties['column'] = 19;$x116->attributes['file'] = $x116->attributes['line'] = $x116->attributes['column'] = 0; }
throw new JSException($x116, 45, 19, '<image>/18_path.js');
}
$x112 = $x110->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 45, 19);
$x113 = $x112($global, $x106, $x110, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x105 = (((gettype($x113) === gettype(DIRECTORY_SEPARATOR) && $x113 === DIRECTORY_SEPARATOR))|| (((is_float($x113) || is_int($x113)) && (is_float(DIRECTORY_SEPARATOR) || is_int(DIRECTORY_SEPARATOR))) && $x113 == DIRECTORY_SEPARATOR));
if (JS::toBoolean($x105, $global)) {
$x117 = clone JS::$arrayTemplate;
$x117->properties['length'] = 1;
$x117->attributes['length'] = JS::WRITABLE;
$x117->properties[0] = $_arg;
$x117->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($Upath) {$global->properties['path'] = $_path; $_path =& $global->properties['path']; }
$_path = $x117;;
}
else {
if ($_path === JS::$undefined || $_path === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x119 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 49, 15, '<image>/18_path.js');
$_TypeError =& $x119[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x119;
$x120 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 49, 15);
$x121 = $x120($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x121->class) && $x121->class === 'Error' && !isset($x121->properties['file']) && !isset($x121->properties['line']) && !isset($x121->properties['column'])) {$x121->properties['file'] = '<image>/18_path.js';$x121->properties['line'] = 49;$x121->properties['column'] = 15;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 49, 15, '<image>/18_path.js');
}
$x118 = JS::toObject($_path, $global);
unset($x122, $W122, $S122, $U122);
$x123 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x118, (string) 'push', 49, 15, '<image>/18_path.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
if (!(is_object($x122) && isset($x122->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 49, 15, '<image>/18_path.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 49, 15);
$x128 = $x127($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error' && !isset($x128->properties['file']) && !isset($x128->properties['line']) && !isset($x128->properties['column'])) {$x128->properties['file'] = '<image>/18_path.js';$x128->properties['line'] = 49;$x128->properties['column'] = 15;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 49, 15, '<image>/18_path.js');
}
$x124 = $x122->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 49, 15);
$x125 = $x124($global, $x118, $x122, array($_arg), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
unset($_require, $Wrequire, $Srequire, $Urequire);
$x129 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'require', 53, 11, '<image>/18_path.js');
$_require =& $x129[0]; list(,$Wrequire,$Srequire,$Urequire) = $x129;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x130 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 53, 11, '<image>/18_path.js');
$_ReferenceError =& $x130[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x130;
$x131 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 11);
$x132 = $x131($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x132->class) && $x132->class === 'Error' && !isset($x132->properties['file']) && !isset($x132->properties['line']) && !isset($x132->properties['column'])) {$x132->properties['file'] = '<image>/18_path.js';$x132->properties['line'] = 53;$x132->properties['column'] = 11;$x132->attributes['file'] = $x132->attributes['line'] = $x132->attributes['column'] = 0; }
throw new JSException($x132, 53, 11, '<image>/18_path.js');
}
unset($x133, $W133, $S133, $U133);
$x134 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_require, (string) 'modules', 53, 18, '<image>/18_path.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
unset($x135, $W135, $S135, $U135);
$x136 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x133, (string) 'path', 53, 26, '<image>/18_path.js');
$x135 =& $x136[0]; list(,$W135,$S135,$U135) = $x136;
unset($x137, $W137, $S137, $U137);
$x138 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x135, (string) 'exports', 53, 31, '<image>/18_path.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
if ($x137 === JS::$undefined || $x137 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 53, 49, '<image>/18_path.js');
$_TypeError =& $x140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x140;
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 49);
$x142 = $x141($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error' && !isset($x142->properties['file']) && !isset($x142->properties['line']) && !isset($x142->properties['column'])) {$x142->properties['file'] = '<image>/18_path.js';$x142->properties['line'] = 53;$x142->properties['column'] = 49;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 53, 49, '<image>/18_path.js');
}
$x139 = JS::toObject($x137, $global);
unset($x143, $W143, $S143, $U143);
$x144 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x139, (string) 'normalize', 53, 49, '<image>/18_path.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if ($_path === JS::$undefined || $_path === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x146 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 53, 59, '<image>/18_path.js');
$_TypeError =& $x146[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x146;
$x147 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 59);
$x148 = $x147($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x148->class) && $x148->class === 'Error' && !isset($x148->properties['file']) && !isset($x148->properties['line']) && !isset($x148->properties['column'])) {$x148->properties['file'] = '<image>/18_path.js';$x148->properties['line'] = 53;$x148->properties['column'] = 59;$x148->attributes['file'] = $x148->attributes['line'] = $x148->attributes['column'] = 0; }
throw new JSException($x148, 53, 59, '<image>/18_path.js');
}
$x145 = JS::toObject($_path, $global);
unset($x149, $W149, $S149, $U149);
$x150 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x145, (string) 'join', 53, 59, '<image>/18_path.js');
$x149 =& $x150[0]; list(,$W149,$S149,$U149) = $x150;
if (!(is_object($x149) && isset($x149->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x153 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 53, 59, '<image>/18_path.js');
$_TypeError =& $x153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x153;
$x154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 59);
$x155 = $x154($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/18_path.js';$x155->properties['line'] = 53;$x155->properties['column'] = 59;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 53, 59, '<image>/18_path.js');
}
$x151 = $x149->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 59);
$x152 = $x151($global, $x145, $x149, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x143) && isset($x143->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 53, 49, '<image>/18_path.js');
$_TypeError =& $x158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x158;
$x159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 49);
$x160 = $x159($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error' && !isset($x160->properties['file']) && !isset($x160->properties['line']) && !isset($x160->properties['column'])) {$x160->properties['file'] = '<image>/18_path.js';$x160->properties['line'] = 53;$x160->properties['column'] = 49;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 53, 49, '<image>/18_path.js');
}
$x156 = $x143->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 53, 49);
$x157 = $x156($global, $x139, $x143, array($x152), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x157;
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x79=&$scope->properties[\'arguments\'];$x79->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x79->properties[$i]=$args[$i];$x79->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'to\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$scope->properties[\'resolve\']=$fn;$_resolve=&$scope->properties[\'resolve\'];$global->scope[++$global->scope_sp]=$scope;$x80=clone JS::$arrayTemplate;$x80->properties[\'length\']=1;$x80->attributes[\'length\']=JS::WRITABLE;$x80->properties[0]=getcwd();$x80->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'path\']=JS::$undefined;$_path=&$scope->properties[\'path\'];$Upath=FALSE;$_path=$x80;for($x81=0;;++$x81){if($x81===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x82=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'arguments\',42,24,\'<image>/18_path.js\');$_arguments=&$x82[0];list(,$Warguments,$Sarguments,$Uarguments)=$x82;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x83=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',42,24,\'<image>/18_path.js\');$_ReferenceError=&$x83[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x83;$x84=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',42,24);$x85=$x84($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x85->class)&&$x85->class===\'Error\'&&!isset($x85->properties[\'file\'])&&!isset($x85->properties[\'line\'])&&!isset($x85->properties[\'column\'])){$x85->properties[\'file\']=\'<image>/18_path.js\';$x85->properties[\'line\']=42;$x85->properties[\'column\']=24;$x85->attributes[\'file\']=$x85->attributes[\'line\']=$x85->attributes[\'column\']=0;}throw new JSException($x85,42,24,\'<image>/18_path.js\');}unset($x86,$W86,$S86,$U86);$x87=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_arguments,(string)\'length\',42,33,\'<image>/18_path.js\');$x86=&$x87[0];list(,$W86,$S86,$U86)=$x87;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x86;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x81!==0){$x88=++$_i;}$x89=JS::toPrimitive($_i,$global);$x90=JS::toPrimitive($_l,$global);$x91=(is_string($x89)&&is_string($x90)?strcmp($x89,$x90)<0:(!is_nan($x92=JS::toNumber($x89,$global))&&!is_nan($x93=JS::toNumber($x90,$global))&&$x92<$x93));if(!JS::toBoolean($x91,$global)){break;}unset($_String,$WString,$SString,$UString);$x94=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'String\',43,11,\'<image>/18_path.js\');$_String=&$x94[0];list(,$WString,$SString,$UString)=$x94;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x95=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',43,11,\'<image>/18_path.js\');$_ReferenceError=&$x95[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x95;$x96=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',43,11);$x97=$x96($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'&&!isset($x97->properties[\'file\'])&&!isset($x97->properties[\'line\'])&&!isset($x97->properties[\'column\'])){$x97->properties[\'file\']=\'<image>/18_path.js\';$x97->properties[\'line\']=43;$x97->properties[\'column\']=11;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,43,11,\'<image>/18_path.js\');}unset($x98,$W98,$S98,$U98);$x99=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_arguments,(string)$_i,43,27,\'<image>/18_path.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x102=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',43,17,\'<image>/18_path.js\');$_TypeError=&$x102[0];list(,$WTypeError,$STypeError,$UTypeError)=$x102;$x103=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',43,17);$x104=$x103($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x104->class)&&$x104->class===\'Error\'&&!isset($x104->properties[\'file\'])&&!isset($x104->properties[\'line\'])&&!isset($x104->properties[\'column\'])){$x104->properties[\'file\']=\'<image>/18_path.js\';$x104->properties[\'line\']=43;$x104->properties[\'column\']=17;$x104->attributes[\'file\']=$x104->attributes[\'line\']=$x104->attributes[\'column\']=0;}throw new JSException($x104,43,17,\'<image>/18_path.js\');}$x100=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',43,17);$x101=$x100($global,$global,$_String,array($x98),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x101;if($_arg===JS::$undefined||$_arg===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x107=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',45,19,\'<image>/18_path.js\');$_TypeError=&$x107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x107;$x108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',45,19);$x109=$x108($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x109->class)&&$x109->class===\'Error\'&&!isset($x109->properties[\'file\'])&&!isset($x109->properties[\'line\'])&&!isset($x109->properties[\'column\'])){$x109->properties[\'file\']=\'<image>/18_path.js\';$x109->properties[\'line\']=45;$x109->properties[\'column\']=19;$x109->attributes[\'file\']=$x109->attributes[\'line\']=$x109->attributes[\'column\']=0;}throw new JSException($x109,45,19,\'<image>/18_path.js\');}$x106=JS::toObject($_arg,$global);unset($x110,$W110,$S110,$U110);$x111=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x106,(string)\'charAt\',45,19,\'<image>/18_path.js\');$x110=&$x111[0];list(,$W110,$S110,$U110)=$x111;if(!(is_object($x110)&&isset($x110->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x114=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',45,19,\'<image>/18_path.js\');$_TypeError=&$x114[0];list(,$WTypeError,$STypeError,$UTypeError)=$x114;$x115=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',45,19);$x116=$x115($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x116->class)&&$x116->class===\'Error\'&&!isset($x116->properties[\'file\'])&&!isset($x116->properties[\'line\'])&&!isset($x116->properties[\'column\'])){$x116->properties[\'file\']=\'<image>/18_path.js\';$x116->properties[\'line\']=45;$x116->properties[\'column\']=19;$x116->attributes[\'file\']=$x116->attributes[\'line\']=$x116->attributes[\'column\']=0;}throw new JSException($x116,45,19,\'<image>/18_path.js\');}$x112=$x110->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',45,19);$x113=$x112($global,$x106,$x110,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x105=(((gettype($x113)===gettype(DIRECTORY_SEPARATOR)&&$x113===DIRECTORY_SEPARATOR))||(((is_float($x113)||is_int($x113))&&(is_float(DIRECTORY_SEPARATOR)||is_int(DIRECTORY_SEPARATOR)))&&$x113==DIRECTORY_SEPARATOR));if(JS::toBoolean($x105,$global)){$x117=clone JS::$arrayTemplate;$x117->properties[\'length\']=1;$x117->attributes[\'length\']=JS::WRITABLE;$x117->properties[0]=$_arg;$x117->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($Upath){$global->properties[\'path\']=$_path;$_path=&$global->properties[\'path\'];}$_path=$x117;}else{if($_path===JS::$undefined||$_path===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x119=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',49,15,\'<image>/18_path.js\');$_TypeError=&$x119[0];list(,$WTypeError,$STypeError,$UTypeError)=$x119;$x120=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',49,15);$x121=$x120($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x121->class)&&$x121->class===\'Error\'&&!isset($x121->properties[\'file\'])&&!isset($x121->properties[\'line\'])&&!isset($x121->properties[\'column\'])){$x121->properties[\'file\']=\'<image>/18_path.js\';$x121->properties[\'line\']=49;$x121->properties[\'column\']=15;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,49,15,\'<image>/18_path.js\');}$x118=JS::toObject($_path,$global);unset($x122,$W122,$S122,$U122);$x123=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x118,(string)\'push\',49,15,\'<image>/18_path.js\');$x122=&$x123[0];list(,$W122,$S122,$U122)=$x123;if(!(is_object($x122)&&isset($x122->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x126=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',49,15,\'<image>/18_path.js\');$_TypeError=&$x126[0];list(,$WTypeError,$STypeError,$UTypeError)=$x126;$x127=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',49,15);$x128=$x127($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x128->class)&&$x128->class===\'Error\'&&!isset($x128->properties[\'file\'])&&!isset($x128->properties[\'line\'])&&!isset($x128->properties[\'column\'])){$x128->properties[\'file\']=\'<image>/18_path.js\';$x128->properties[\'line\']=49;$x128->properties[\'column\']=15;$x128->attributes[\'file\']=$x128->attributes[\'line\']=$x128->attributes[\'column\']=0;}throw new JSException($x128,49,15,\'<image>/18_path.js\');}$x124=$x122->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',49,15);$x125=$x124($global,$x118,$x122,array($_arg),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($_require,$Wrequire,$Srequire,$Urequire);$x129=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'require\',53,11,\'<image>/18_path.js\');$_require=&$x129[0];list(,$Wrequire,$Srequire,$Urequire)=$x129;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x130=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',53,11,\'<image>/18_path.js\');$_ReferenceError=&$x130[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x130;$x131=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,11);$x132=$x131($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x132->class)&&$x132->class===\'Error\'&&!isset($x132->properties[\'file\'])&&!isset($x132->properties[\'line\'])&&!isset($x132->properties[\'column\'])){$x132->properties[\'file\']=\'<image>/18_path.js\';$x132->properties[\'line\']=53;$x132->properties[\'column\']=11;$x132->attributes[\'file\']=$x132->attributes[\'line\']=$x132->attributes[\'column\']=0;}throw new JSException($x132,53,11,\'<image>/18_path.js\');}unset($x133,$W133,$S133,$U133);$x134=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_require,(string)\'modules\',53,18,\'<image>/18_path.js\');$x133=&$x134[0];list(,$W133,$S133,$U133)=$x134;unset($x135,$W135,$S135,$U135);$x136=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x133,(string)\'path\',53,26,\'<image>/18_path.js\');$x135=&$x136[0];list(,$W135,$S135,$U135)=$x136;unset($x137,$W137,$S137,$U137);$x138=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x135,(string)\'exports\',53,31,\'<image>/18_path.js\');$x137=&$x138[0];list(,$W137,$S137,$U137)=$x138;if($x137===JS::$undefined||$x137===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x140=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',53,49,\'<image>/18_path.js\');$_TypeError=&$x140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x140;$x141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,49);$x142=$x141($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x142->class)&&$x142->class===\'Error\'&&!isset($x142->properties[\'file\'])&&!isset($x142->properties[\'line\'])&&!isset($x142->properties[\'column\'])){$x142->properties[\'file\']=\'<image>/18_path.js\';$x142->properties[\'line\']=53;$x142->properties[\'column\']=49;$x142->attributes[\'file\']=$x142->attributes[\'line\']=$x142->attributes[\'column\']=0;}throw new JSException($x142,53,49,\'<image>/18_path.js\');}$x139=JS::toObject($x137,$global);unset($x143,$W143,$S143,$U143);$x144=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x139,(string)\'normalize\',53,49,\'<image>/18_path.js\');$x143=&$x144[0];list(,$W143,$S143,$U143)=$x144;if($_path===JS::$undefined||$_path===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x146=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',53,59,\'<image>/18_path.js\');$_TypeError=&$x146[0];list(,$WTypeError,$STypeError,$UTypeError)=$x146;$x147=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,59);$x148=$x147($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x148->class)&&$x148->class===\'Error\'&&!isset($x148->properties[\'file\'])&&!isset($x148->properties[\'line\'])&&!isset($x148->properties[\'column\'])){$x148->properties[\'file\']=\'<image>/18_path.js\';$x148->properties[\'line\']=53;$x148->properties[\'column\']=59;$x148->attributes[\'file\']=$x148->attributes[\'line\']=$x148->attributes[\'column\']=0;}throw new JSException($x148,53,59,\'<image>/18_path.js\');}$x145=JS::toObject($_path,$global);unset($x149,$W149,$S149,$U149);$x150=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x145,(string)\'join\',53,59,\'<image>/18_path.js\');$x149=&$x150[0];list(,$W149,$S149,$U149)=$x150;if(!(is_object($x149)&&isset($x149->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x153=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',53,59,\'<image>/18_path.js\');$_TypeError=&$x153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x153;$x154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,59);$x155=$x154($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x155->class)&&$x155->class===\'Error\'&&!isset($x155->properties[\'file\'])&&!isset($x155->properties[\'line\'])&&!isset($x155->properties[\'column\'])){$x155->properties[\'file\']=\'<image>/18_path.js\';$x155->properties[\'line\']=53;$x155->properties[\'column\']=59;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,53,59,\'<image>/18_path.js\');}$x151=$x149->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,59);$x152=$x151($global,$x145,$x149,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x143)&&isset($x143->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x158=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',53,49,\'<image>/18_path.js\');$_TypeError=&$x158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x158;$x159=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,49);$x160=$x159($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x160->class)&&$x160->class===\'Error\'&&!isset($x160->properties[\'file\'])&&!isset($x160->properties[\'line\'])&&!isset($x160->properties[\'column\'])){$x160->properties[\'file\']=\'<image>/18_path.js\';$x160->properties[\'line\']=53;$x160->properties[\'column\']=49;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,53,49,\'<image>/18_path.js\');}$x156=$x143->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',53,49);$x157=$x156($global,$x139,$x143,array($x152),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x157;return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['from'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$scope->properties['to'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_to =& $scope->properties['to'];
$Uto = FALSE;
$scope->properties['relative'] = $fn;
$_relative =& $scope->properties['relative'];
$global->scope[++$global->scope_sp] = $scope;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x164 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'require', 57, 11, '<image>/18_path.js');
$_require =& $x164[0]; list(,$Wrequire,$Srequire,$Urequire) = $x164;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x165 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 57, 11, '<image>/18_path.js');
$_ReferenceError =& $x165[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x165;
$x166 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 11);
$x167 = $x166($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error' && !isset($x167->properties['file']) && !isset($x167->properties['line']) && !isset($x167->properties['column'])) {$x167->properties['file'] = '<image>/18_path.js';$x167->properties['line'] = 57;$x167->properties['column'] = 11;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 57, 11, '<image>/18_path.js');
}
unset($x168, $W168, $S168, $U168);
$x169 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_require, (string) 'modules', 57, 18, '<image>/18_path.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
unset($x170, $W170, $S170, $U170);
$x171 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x168, (string) 'path', 57, 26, '<image>/18_path.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
unset($x172, $W172, $S172, $U172);
$x173 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x170, (string) 'exports', 57, 31, '<image>/18_path.js');
$x172 =& $x173[0]; list(,$W172,$S172,$U172) = $x173;
if ($x172 === JS::$undefined || $x172 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x175 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 57, 47, '<image>/18_path.js');
$_TypeError =& $x175[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x175;
$x176 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 47);
$x177 = $x176($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x177->class) && $x177->class === 'Error' && !isset($x177->properties['file']) && !isset($x177->properties['line']) && !isset($x177->properties['column'])) {$x177->properties['file'] = '<image>/18_path.js';$x177->properties['line'] = 57;$x177->properties['column'] = 47;$x177->attributes['file'] = $x177->attributes['line'] = $x177->attributes['column'] = 0; }
throw new JSException($x177, 57, 47, '<image>/18_path.js');
}
$x174 = JS::toObject($x172, $global);
unset($x178, $W178, $S178, $U178);
$x179 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x174, (string) 'resolve', 57, 47, '<image>/18_path.js');
$x178 =& $x179[0]; list(,$W178,$S178,$U178) = $x179;
if (!(is_object($x178) && isset($x178->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x182 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 57, 47, '<image>/18_path.js');
$_TypeError =& $x182[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x182;
$x183 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 47);
$x184 = $x183($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x184->class) && $x184->class === 'Error' && !isset($x184->properties['file']) && !isset($x184->properties['line']) && !isset($x184->properties['column'])) {$x184->properties['file'] = '<image>/18_path.js';$x184->properties['line'] = 57;$x184->properties['column'] = 47;$x184->attributes['file'] = $x184->attributes['line'] = $x184->attributes['column'] = 0; }
throw new JSException($x184, 57, 47, '<image>/18_path.js');
}
$x180 = $x178->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 47);
$x181 = $x180($global, $x174, $x178, array($_from), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x181 === JS::$undefined || $x181 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 57, 59, '<image>/18_path.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 59);
$x188 = $x187($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/18_path.js';$x188->properties['line'] = 57;$x188->properties['column'] = 59;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 57, 59, '<image>/18_path.js');
}
$x185 = JS::toObject($x181, $global);
unset($x189, $W189, $S189, $U189);
$x190 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x185, (string) 'split', 57, 59, '<image>/18_path.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
if (!(is_object($x189) && isset($x189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x193 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 57, 59, '<image>/18_path.js');
$_TypeError =& $x193[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x193;
$x194 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 59);
$x195 = $x194($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/18_path.js';$x195->properties['line'] = 57;$x195->properties['column'] = 59;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 57, 59, '<image>/18_path.js');
}
$x191 = $x189->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 57, 59);
$x192 = $x191($global, $x185, $x189, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x192;
unset($x196, $W196, $S196, $U196);
$x197 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_require, (string) 'modules', 58, 16, '<image>/18_path.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
unset($x198, $W198, $S198, $U198);
$x199 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x196, (string) 'path', 58, 24, '<image>/18_path.js');
$x198 =& $x199[0]; list(,$W198,$S198,$U198) = $x199;
unset($x200, $W200, $S200, $U200);
$x201 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x198, (string) 'exports', 58, 29, '<image>/18_path.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if ($x200 === JS::$undefined || $x200 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x203 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 58, 45, '<image>/18_path.js');
$_TypeError =& $x203[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x203;
$x204 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 45);
$x205 = $x204($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x205->class) && $x205->class === 'Error' && !isset($x205->properties['file']) && !isset($x205->properties['line']) && !isset($x205->properties['column'])) {$x205->properties['file'] = '<image>/18_path.js';$x205->properties['line'] = 58;$x205->properties['column'] = 45;$x205->attributes['file'] = $x205->attributes['line'] = $x205->attributes['column'] = 0; }
throw new JSException($x205, 58, 45, '<image>/18_path.js');
}
$x202 = JS::toObject($x200, $global);
unset($x206, $W206, $S206, $U206);
$x207 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x202, (string) 'resolve', 58, 45, '<image>/18_path.js');
$x206 =& $x207[0]; list(,$W206,$S206,$U206) = $x207;
if (!(is_object($x206) && isset($x206->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x210 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 58, 45, '<image>/18_path.js');
$_TypeError =& $x210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x210;
$x211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 45);
$x212 = $x211($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error' && !isset($x212->properties['file']) && !isset($x212->properties['line']) && !isset($x212->properties['column'])) {$x212->properties['file'] = '<image>/18_path.js';$x212->properties['line'] = 58;$x212->properties['column'] = 45;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 58, 45, '<image>/18_path.js');
}
$x208 = $x206->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 45);
$x209 = $x208($global, $x202, $x206, array($_to), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x209 === JS::$undefined || $x209 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x214 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 58, 55, '<image>/18_path.js');
$_TypeError =& $x214[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x214;
$x215 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 55);
$x216 = $x215($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error' && !isset($x216->properties['file']) && !isset($x216->properties['line']) && !isset($x216->properties['column'])) {$x216->properties['file'] = '<image>/18_path.js';$x216->properties['line'] = 58;$x216->properties['column'] = 55;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 58, 55, '<image>/18_path.js');
}
$x213 = JS::toObject($x209, $global);
unset($x217, $W217, $S217, $U217);
$x218 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x213, (string) 'split', 58, 55, '<image>/18_path.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
if (!(is_object($x217) && isset($x217->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x221 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 58, 55, '<image>/18_path.js');
$_TypeError =& $x221[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x221;
$x222 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 55);
$x223 = $x222($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x223->class) && $x223->class === 'Error' && !isset($x223->properties['file']) && !isset($x223->properties['line']) && !isset($x223->properties['column'])) {$x223->properties['file'] = '<image>/18_path.js';$x223->properties['line'] = 58;$x223->properties['column'] = 55;$x223->attributes['file'] = $x223->attributes['line'] = $x223->attributes['column'] = 0; }
throw new JSException($x223, 58, 55, '<image>/18_path.js');
}
$x219 = $x217->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 58, 55);
$x220 = $x219($global, $x213, $x217, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uto) {$global->properties['to'] = $_to; $_to =& $global->properties['to']; }
$_to = $x220;
for (;;) {
unset($x227, $W227, $S227, $U227);
$x228 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_from, (string) 0, 60, 15, '<image>/18_path.js');
$x227 =& $x228[0]; list(,$W227,$S227,$U227) = $x228;
unset($x229, $W229, $S229, $U229);
$x230 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_to, (string) 0, 60, 25, '<image>/18_path.js');
$x229 =& $x230[0]; list(,$W229,$S229,$U229) = $x230;
$x226 = (((gettype($x227) === gettype($x229) && $x227 === $x229))|| (((is_float($x227) || is_int($x227)) && (is_float($x229) || is_int($x229))) && $x227 == $x229));
$x225 = $x226;
if (JS::toBoolean($x225, $global)) {
unset($x231, $W231, $S231, $U231);
$x232 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_from, (string) 'length', 60, 36, '<image>/18_path.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
$x225 = $x231; }
$x224 = $x225;
if (JS::toBoolean($x224, $global)) {
unset($x233, $W233, $S233, $U233);
$x234 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_to, (string) 'length', 60, 49, '<image>/18_path.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
$x224 = $x233; }
if (!JS::toBoolean($x224, $global)) { break; }

if ($_from === JS::$undefined || $_from === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x236 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 61, 15, '<image>/18_path.js');
$_TypeError =& $x236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x236;
$x237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 61, 15);
$x238 = $x237($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x238->class) && $x238->class === 'Error' && !isset($x238->properties['file']) && !isset($x238->properties['line']) && !isset($x238->properties['column'])) {$x238->properties['file'] = '<image>/18_path.js';$x238->properties['line'] = 61;$x238->properties['column'] = 15;$x238->attributes['file'] = $x238->attributes['line'] = $x238->attributes['column'] = 0; }
throw new JSException($x238, 61, 15, '<image>/18_path.js');
}
$x235 = JS::toObject($_from, $global);
unset($x239, $W239, $S239, $U239);
$x240 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x235, (string) 'shift', 61, 15, '<image>/18_path.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
if (!(is_object($x239) && isset($x239->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x243 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 61, 15, '<image>/18_path.js');
$_TypeError =& $x243[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x243;
$x244 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 61, 15);
$x245 = $x244($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x245->class) && $x245->class === 'Error' && !isset($x245->properties['file']) && !isset($x245->properties['line']) && !isset($x245->properties['column'])) {$x245->properties['file'] = '<image>/18_path.js';$x245->properties['line'] = 61;$x245->properties['column'] = 15;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 61, 15, '<image>/18_path.js');
}
$x241 = $x239->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 61, 15);
$x242 = $x241($global, $x235, $x239, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_to === JS::$undefined || $_to === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x247 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 62, 13, '<image>/18_path.js');
$_TypeError =& $x247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x247;
$x248 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 62, 13);
$x249 = $x248($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x249->class) && $x249->class === 'Error' && !isset($x249->properties['file']) && !isset($x249->properties['line']) && !isset($x249->properties['column'])) {$x249->properties['file'] = '<image>/18_path.js';$x249->properties['line'] = 62;$x249->properties['column'] = 13;$x249->attributes['file'] = $x249->attributes['line'] = $x249->attributes['column'] = 0; }
throw new JSException($x249, 62, 13, '<image>/18_path.js');
}
$x246 = JS::toObject($_to, $global);
unset($x250, $W250, $S250, $U250);
$x251 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x246, (string) 'shift', 62, 13, '<image>/18_path.js');
$x250 =& $x251[0]; list(,$W250,$S250,$U250) = $x251;
if (!(is_object($x250) && isset($x250->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x254 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 62, 13, '<image>/18_path.js');
$_TypeError =& $x254[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x254;
$x255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 62, 13);
$x256 = $x255($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error' && !isset($x256->properties['file']) && !isset($x256->properties['line']) && !isset($x256->properties['column'])) {$x256->properties['file'] = '<image>/18_path.js';$x256->properties['line'] = 62;$x256->properties['column'] = 13;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 62, 13, '<image>/18_path.js');
}
$x252 = $x250->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 62, 13);
$x253 = $x252($global, $x246, $x250, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($_Array, $WArray, $SArray, $UArray);
$x259 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'Array', 65, 18, '<image>/18_path.js');
$_Array =& $x259[0]; list(,$WArray,$SArray,$UArray) = $x259;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x260 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 65, 18, '<image>/18_path.js');
$_ReferenceError =& $x260[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x260;
$x261 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 18);
$x262 = $x261($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x262->class) && $x262->class === 'Error' && !isset($x262->properties['file']) && !isset($x262->properties['line']) && !isset($x262->properties['column'])) {$x262->properties['file'] = '<image>/18_path.js';$x262->properties['line'] = 65;$x262->properties['column'] = 18;$x262->attributes['file'] = $x262->attributes['line'] = $x262->attributes['column'] = 0; }
throw new JSException($x262, 65, 18, '<image>/18_path.js');
}
unset($x265, $W265, $S265, $U265);
$x266 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_from, (string) 'length', 65, 28, '<image>/18_path.js');
$x265 =& $x266[0]; list(,$W265,$S265,$U265) = $x266;
$x263 = JS::toPrimitive($x265, $global);
$x264 = JS::toPrimitive(1, $global);
if (!(is_object($_Array) && isset($_Array->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x269 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 65, 23, '<image>/18_path.js');
$_TypeError =& $x269[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x269;
$x270 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 23);
$x271 = $x270($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x271->class) && $x271->class === 'Error' && !isset($x271->properties['file']) && !isset($x271->properties['line']) && !isset($x271->properties['column'])) {$x271->properties['file'] = '<image>/18_path.js';$x271->properties['line'] = 65;$x271->properties['column'] = 23;$x271->attributes['file'] = $x271->attributes['line'] = $x271->attributes['column'] = 0; }
throw new JSException($x271, 65, 23, '<image>/18_path.js');
}
$x267 = $_Array->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 23);
$x268 = $x267($global, $global, $_Array, array((is_string($x263) || is_string($x264) ? JS::toString($x263, $global) . JS::toString($x264, $global) : JS::toNumber($x263, $global) + JS::toNumber($x264, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x268 === JS::$undefined || $x268 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x273 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 65, 45, '<image>/18_path.js');
$_TypeError =& $x273[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x273;
$x274 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 45);
$x275 = $x274($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x275->class) && $x275->class === 'Error' && !isset($x275->properties['file']) && !isset($x275->properties['line']) && !isset($x275->properties['column'])) {$x275->properties['file'] = '<image>/18_path.js';$x275->properties['line'] = 65;$x275->properties['column'] = 45;$x275->attributes['file'] = $x275->attributes['line'] = $x275->attributes['column'] = 0; }
throw new JSException($x275, 65, 45, '<image>/18_path.js');
}
$x272 = JS::toObject($x268, $global);
unset($x276, $W276, $S276, $U276);
$x277 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x272, (string) 'join', 65, 45, '<image>/18_path.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
$x278 = JS::toPrimitive('..', $global);
$x279 = JS::toPrimitive(DIRECTORY_SEPARATOR, $global);
if (!(is_object($x276) && isset($x276->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x282 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 65, 45, '<image>/18_path.js');
$_TypeError =& $x282[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x282;
$x283 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 45);
$x284 = $x283($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x284->class) && $x284->class === 'Error' && !isset($x284->properties['file']) && !isset($x284->properties['line']) && !isset($x284->properties['column'])) {$x284->properties['file'] = '<image>/18_path.js';$x284->properties['line'] = 65;$x284->properties['column'] = 45;$x284->attributes['file'] = $x284->attributes['line'] = $x284->attributes['column'] = 0; }
throw new JSException($x284, 65, 45, '<image>/18_path.js');
}
$x280 = $x276->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 65, 45);
$x281 = $x280($global, $x272, $x276, array((is_string($x278) || is_string($x279) ? JS::toString($x278, $global) . JS::toString($x279, $global) : JS::toNumber($x278, $global) + JS::toNumber($x279, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_to === JS::$undefined || $_to === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x286 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 66, 12, '<image>/18_path.js');
$_TypeError =& $x286[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x286;
$x287 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 66, 12);
$x288 = $x287($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x288->class) && $x288->class === 'Error' && !isset($x288->properties['file']) && !isset($x288->properties['line']) && !isset($x288->properties['column'])) {$x288->properties['file'] = '<image>/18_path.js';$x288->properties['line'] = 66;$x288->properties['column'] = 12;$x288->attributes['file'] = $x288->attributes['line'] = $x288->attributes['column'] = 0; }
throw new JSException($x288, 66, 12, '<image>/18_path.js');
}
$x285 = JS::toObject($_to, $global);
unset($x289, $W289, $S289, $U289);
$x290 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x285, (string) 'join', 66, 12, '<image>/18_path.js');
$x289 =& $x290[0]; list(,$W289,$S289,$U289) = $x290;
if (!(is_object($x289) && isset($x289->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x293 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 66, 12, '<image>/18_path.js');
$_TypeError =& $x293[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x293;
$x294 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 66, 12);
$x295 = $x294($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x295->class) && $x295->class === 'Error' && !isset($x295->properties['file']) && !isset($x295->properties['line']) && !isset($x295->properties['column'])) {$x295->properties['file'] = '<image>/18_path.js';$x295->properties['line'] = 66;$x295->properties['column'] = 12;$x295->attributes['file'] = $x295->attributes['line'] = $x295->attributes['column'] = 0; }
throw new JSException($x295, 66, 12, '<image>/18_path.js');
}
$x291 = $x289->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 66, 12);
$x292 = $x291($global, $x285, $x289, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x257 = JS::toPrimitive($x281, $global);
$x258 = JS::toPrimitive($x292, $global);
$scope->properties['newPath'] = JS::$undefined; $_newPath =& $scope->properties['newPath'];
$UnewPath = FALSE;
$_newPath = (is_string($x257) || is_string($x258) ? JS::toString($x257, $global) . JS::toString($x258, $global) : JS::toNumber($x257, $global) + JS::toNumber($x258, $global));
if ($_newPath === JS::$undefined || $_newPath === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x298 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 68, 22, '<image>/18_path.js');
$_TypeError =& $x298[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x298;
$x299 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 68, 22);
$x300 = $x299($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x300->class) && $x300->class === 'Error' && !isset($x300->properties['file']) && !isset($x300->properties['line']) && !isset($x300->properties['column'])) {$x300->properties['file'] = '<image>/18_path.js';$x300->properties['line'] = 68;$x300->properties['column'] = 22;$x300->attributes['file'] = $x300->attributes['line'] = $x300->attributes['column'] = 0; }
throw new JSException($x300, 68, 22, '<image>/18_path.js');
}
$x297 = JS::toObject($_newPath, $global);
unset($x301, $W301, $S301, $U301);
$x302 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x297, (string) 'charAt', 68, 22, '<image>/18_path.js');
$x301 =& $x302[0]; list(,$W301,$S301,$U301) = $x302;
unset($x303, $W303, $S303, $U303);
$x304 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_newPath, (string) 'length', 68, 30, '<image>/18_path.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
if (!(is_object($x301) && isset($x301->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x307 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 68, 22, '<image>/18_path.js');
$_TypeError =& $x307[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x307;
$x308 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 68, 22);
$x309 = $x308($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x309->class) && $x309->class === 'Error' && !isset($x309->properties['file']) && !isset($x309->properties['line']) && !isset($x309->properties['column'])) {$x309->properties['file'] = '<image>/18_path.js';$x309->properties['line'] = 68;$x309->properties['column'] = 22;$x309->attributes['file'] = $x309->attributes['line'] = $x309->attributes['column'] = 0; }
throw new JSException($x309, 68, 22, '<image>/18_path.js');
}
$x305 = $x301->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 68, 22);
$x306 = $x305($global, $x297, $x301, array((JS::toNumber($x303, $global) - JS::toNumber(1, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x296 = (((gettype($x306) === gettype('/') && $x306 === '/'))|| (((is_float($x306) || is_int($x306)) && (is_float('/') || is_int('/'))) && $x306 == '/'));
if (JS::toBoolean($x296, $global)) {
if ($_newPath === JS::$undefined || $_newPath === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x311 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 69, 29, '<image>/18_path.js');
$_TypeError =& $x311[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x311;
$x312 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 69, 29);
$x313 = $x312($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x313->class) && $x313->class === 'Error' && !isset($x313->properties['file']) && !isset($x313->properties['line']) && !isset($x313->properties['column'])) {$x313->properties['file'] = '<image>/18_path.js';$x313->properties['line'] = 69;$x313->properties['column'] = 29;$x313->attributes['file'] = $x313->attributes['line'] = $x313->attributes['column'] = 0; }
throw new JSException($x313, 69, 29, '<image>/18_path.js');
}
$x310 = JS::toObject($_newPath, $global);
unset($x314, $W314, $S314, $U314);
$x315 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x310, (string) 'substring', 69, 29, '<image>/18_path.js');
$x314 =& $x315[0]; list(,$W314,$S314,$U314) = $x315;
unset($x316, $W316, $S316, $U316);
$x317 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_newPath, (string) 'length', 69, 40, '<image>/18_path.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
if (!(is_object($x314) && isset($x314->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x320 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 69, 29, '<image>/18_path.js');
$_TypeError =& $x320[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x320;
$x321 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 69, 29);
$x322 = $x321($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x322->class) && $x322->class === 'Error' && !isset($x322->properties['file']) && !isset($x322->properties['line']) && !isset($x322->properties['column'])) {$x322->properties['file'] = '<image>/18_path.js';$x322->properties['line'] = 69;$x322->properties['column'] = 29;$x322->attributes['file'] = $x322->attributes['line'] = $x322->attributes['column'] = 0; }
throw new JSException($x322, 69, 29, '<image>/18_path.js');
}
$x318 = $x314->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 69, 29);
$x319 = $x318($global, $x310, $x314, array(0, (JS::toNumber($x316, $global) - JS::toNumber(1, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x319;;
};
return $_newPath;
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x163=&$scope->properties[\'arguments\'];$x163->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x163->properties[$i]=$args[$i];$x163->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'from\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$scope->properties[\'to\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$scope->properties[\'relative\']=$fn;$_relative=&$scope->properties[\'relative\'];$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x164=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'require\',57,11,\'<image>/18_path.js\');$_require=&$x164[0];list(,$Wrequire,$Srequire,$Urequire)=$x164;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x165=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',57,11,\'<image>/18_path.js\');$_ReferenceError=&$x165[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x165;$x166=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,11);$x167=$x166($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x167->class)&&$x167->class===\'Error\'&&!isset($x167->properties[\'file\'])&&!isset($x167->properties[\'line\'])&&!isset($x167->properties[\'column\'])){$x167->properties[\'file\']=\'<image>/18_path.js\';$x167->properties[\'line\']=57;$x167->properties[\'column\']=11;$x167->attributes[\'file\']=$x167->attributes[\'line\']=$x167->attributes[\'column\']=0;}throw new JSException($x167,57,11,\'<image>/18_path.js\');}unset($x168,$W168,$S168,$U168);$x169=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_require,(string)\'modules\',57,18,\'<image>/18_path.js\');$x168=&$x169[0];list(,$W168,$S168,$U168)=$x169;unset($x170,$W170,$S170,$U170);$x171=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x168,(string)\'path\',57,26,\'<image>/18_path.js\');$x170=&$x171[0];list(,$W170,$S170,$U170)=$x171;unset($x172,$W172,$S172,$U172);$x173=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x170,(string)\'exports\',57,31,\'<image>/18_path.js\');$x172=&$x173[0];list(,$W172,$S172,$U172)=$x173;if($x172===JS::$undefined||$x172===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x175=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',57,47,\'<image>/18_path.js\');$_TypeError=&$x175[0];list(,$WTypeError,$STypeError,$UTypeError)=$x175;$x176=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,47);$x177=$x176($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x177->class)&&$x177->class===\'Error\'&&!isset($x177->properties[\'file\'])&&!isset($x177->properties[\'line\'])&&!isset($x177->properties[\'column\'])){$x177->properties[\'file\']=\'<image>/18_path.js\';$x177->properties[\'line\']=57;$x177->properties[\'column\']=47;$x177->attributes[\'file\']=$x177->attributes[\'line\']=$x177->attributes[\'column\']=0;}throw new JSException($x177,57,47,\'<image>/18_path.js\');}$x174=JS::toObject($x172,$global);unset($x178,$W178,$S178,$U178);$x179=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x174,(string)\'resolve\',57,47,\'<image>/18_path.js\');$x178=&$x179[0];list(,$W178,$S178,$U178)=$x179;if(!(is_object($x178)&&isset($x178->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x182=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',57,47,\'<image>/18_path.js\');$_TypeError=&$x182[0];list(,$WTypeError,$STypeError,$UTypeError)=$x182;$x183=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,47);$x184=$x183($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x184->class)&&$x184->class===\'Error\'&&!isset($x184->properties[\'file\'])&&!isset($x184->properties[\'line\'])&&!isset($x184->properties[\'column\'])){$x184->properties[\'file\']=\'<image>/18_path.js\';$x184->properties[\'line\']=57;$x184->properties[\'column\']=47;$x184->attributes[\'file\']=$x184->attributes[\'line\']=$x184->attributes[\'column\']=0;}throw new JSException($x184,57,47,\'<image>/18_path.js\');}$x180=$x178->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,47);$x181=$x180($global,$x174,$x178,array($_from),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x181===JS::$undefined||$x181===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x186=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',57,59,\'<image>/18_path.js\');$_TypeError=&$x186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x186;$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,59);$x188=$x187($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/18_path.js\';$x188->properties[\'line\']=57;$x188->properties[\'column\']=59;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,57,59,\'<image>/18_path.js\');}$x185=JS::toObject($x181,$global);unset($x189,$W189,$S189,$U189);$x190=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x185,(string)\'split\',57,59,\'<image>/18_path.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;if(!(is_object($x189)&&isset($x189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x193=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',57,59,\'<image>/18_path.js\');$_TypeError=&$x193[0];list(,$WTypeError,$STypeError,$UTypeError)=$x193;$x194=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,59);$x195=$x194($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/18_path.js\';$x195->properties[\'line\']=57;$x195->properties[\'column\']=59;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,57,59,\'<image>/18_path.js\');}$x191=$x189->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',57,59);$x192=$x191($global,$x185,$x189,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x192;unset($x196,$W196,$S196,$U196);$x197=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_require,(string)\'modules\',58,16,\'<image>/18_path.js\');$x196=&$x197[0];list(,$W196,$S196,$U196)=$x197;unset($x198,$W198,$S198,$U198);$x199=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x196,(string)\'path\',58,24,\'<image>/18_path.js\');$x198=&$x199[0];list(,$W198,$S198,$U198)=$x199;unset($x200,$W200,$S200,$U200);$x201=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x198,(string)\'exports\',58,29,\'<image>/18_path.js\');$x200=&$x201[0];list(,$W200,$S200,$U200)=$x201;if($x200===JS::$undefined||$x200===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x203=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',58,45,\'<image>/18_path.js\');$_TypeError=&$x203[0];list(,$WTypeError,$STypeError,$UTypeError)=$x203;$x204=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,45);$x205=$x204($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x205->class)&&$x205->class===\'Error\'&&!isset($x205->properties[\'file\'])&&!isset($x205->properties[\'line\'])&&!isset($x205->properties[\'column\'])){$x205->properties[\'file\']=\'<image>/18_path.js\';$x205->properties[\'line\']=58;$x205->properties[\'column\']=45;$x205->attributes[\'file\']=$x205->attributes[\'line\']=$x205->attributes[\'column\']=0;}throw new JSException($x205,58,45,\'<image>/18_path.js\');}$x202=JS::toObject($x200,$global);unset($x206,$W206,$S206,$U206);$x207=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x202,(string)\'resolve\',58,45,\'<image>/18_path.js\');$x206=&$x207[0];list(,$W206,$S206,$U206)=$x207;if(!(is_object($x206)&&isset($x206->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x210=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',58,45,\'<image>/18_path.js\');$_TypeError=&$x210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x210;$x211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,45);$x212=$x211($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'&&!isset($x212->properties[\'file\'])&&!isset($x212->properties[\'line\'])&&!isset($x212->properties[\'column\'])){$x212->properties[\'file\']=\'<image>/18_path.js\';$x212->properties[\'line\']=58;$x212->properties[\'column\']=45;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,58,45,\'<image>/18_path.js\');}$x208=$x206->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,45);$x209=$x208($global,$x202,$x206,array($_to),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x209===JS::$undefined||$x209===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x214=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',58,55,\'<image>/18_path.js\');$_TypeError=&$x214[0];list(,$WTypeError,$STypeError,$UTypeError)=$x214;$x215=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,55);$x216=$x215($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x216->class)&&$x216->class===\'Error\'&&!isset($x216->properties[\'file\'])&&!isset($x216->properties[\'line\'])&&!isset($x216->properties[\'column\'])){$x216->properties[\'file\']=\'<image>/18_path.js\';$x216->properties[\'line\']=58;$x216->properties[\'column\']=55;$x216->attributes[\'file\']=$x216->attributes[\'line\']=$x216->attributes[\'column\']=0;}throw new JSException($x216,58,55,\'<image>/18_path.js\');}$x213=JS::toObject($x209,$global);unset($x217,$W217,$S217,$U217);$x218=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x213,(string)\'split\',58,55,\'<image>/18_path.js\');$x217=&$x218[0];list(,$W217,$S217,$U217)=$x218;if(!(is_object($x217)&&isset($x217->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x221=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',58,55,\'<image>/18_path.js\');$_TypeError=&$x221[0];list(,$WTypeError,$STypeError,$UTypeError)=$x221;$x222=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,55);$x223=$x222($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x223->class)&&$x223->class===\'Error\'&&!isset($x223->properties[\'file\'])&&!isset($x223->properties[\'line\'])&&!isset($x223->properties[\'column\'])){$x223->properties[\'file\']=\'<image>/18_path.js\';$x223->properties[\'line\']=58;$x223->properties[\'column\']=55;$x223->attributes[\'file\']=$x223->attributes[\'line\']=$x223->attributes[\'column\']=0;}throw new JSException($x223,58,55,\'<image>/18_path.js\');}$x219=$x217->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',58,55);$x220=$x219($global,$x213,$x217,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uto){$global->properties[\'to\']=$_to;$_to=&$global->properties[\'to\'];}$_to=$x220;for(;;){unset($x227,$W227,$S227,$U227);$x228=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_from,(string)0,60,15,\'<image>/18_path.js\');$x227=&$x228[0];list(,$W227,$S227,$U227)=$x228;unset($x229,$W229,$S229,$U229);$x230=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_to,(string)0,60,25,\'<image>/18_path.js\');$x229=&$x230[0];list(,$W229,$S229,$U229)=$x230;$x226=(((gettype($x227)===gettype($x229)&&$x227===$x229))||(((is_float($x227)||is_int($x227))&&(is_float($x229)||is_int($x229)))&&$x227==$x229));$x225=$x226;if(JS::toBoolean($x225,$global)){unset($x231,$W231,$S231,$U231);$x232=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_from,(string)\'length\',60,36,\'<image>/18_path.js\');$x231=&$x232[0];list(,$W231,$S231,$U231)=$x232;$x225=$x231;}$x224=$x225;if(JS::toBoolean($x224,$global)){unset($x233,$W233,$S233,$U233);$x234=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_to,(string)\'length\',60,49,\'<image>/18_path.js\');$x233=&$x234[0];list(,$W233,$S233,$U233)=$x234;$x224=$x233;}if(!JS::toBoolean($x224,$global)){break;}if($_from===JS::$undefined||$_from===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x236=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',61,15,\'<image>/18_path.js\');$_TypeError=&$x236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x236;$x237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',61,15);$x238=$x237($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x238->class)&&$x238->class===\'Error\'&&!isset($x238->properties[\'file\'])&&!isset($x238->properties[\'line\'])&&!isset($x238->properties[\'column\'])){$x238->properties[\'file\']=\'<image>/18_path.js\';$x238->properties[\'line\']=61;$x238->properties[\'column\']=15;$x238->attributes[\'file\']=$x238->attributes[\'line\']=$x238->attributes[\'column\']=0;}throw new JSException($x238,61,15,\'<image>/18_path.js\');}$x235=JS::toObject($_from,$global);unset($x239,$W239,$S239,$U239);$x240=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x235,(string)\'shift\',61,15,\'<image>/18_path.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;if(!(is_object($x239)&&isset($x239->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x243=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',61,15,\'<image>/18_path.js\');$_TypeError=&$x243[0];list(,$WTypeError,$STypeError,$UTypeError)=$x243;$x244=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',61,15);$x245=$x244($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/18_path.js\';$x245->properties[\'line\']=61;$x245->properties[\'column\']=15;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,61,15,\'<image>/18_path.js\');}$x241=$x239->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',61,15);$x242=$x241($global,$x235,$x239,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_to===JS::$undefined||$_to===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x247=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',62,13,\'<image>/18_path.js\');$_TypeError=&$x247[0];list(,$WTypeError,$STypeError,$UTypeError)=$x247;$x248=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',62,13);$x249=$x248($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x249->class)&&$x249->class===\'Error\'&&!isset($x249->properties[\'file\'])&&!isset($x249->properties[\'line\'])&&!isset($x249->properties[\'column\'])){$x249->properties[\'file\']=\'<image>/18_path.js\';$x249->properties[\'line\']=62;$x249->properties[\'column\']=13;$x249->attributes[\'file\']=$x249->attributes[\'line\']=$x249->attributes[\'column\']=0;}throw new JSException($x249,62,13,\'<image>/18_path.js\');}$x246=JS::toObject($_to,$global);unset($x250,$W250,$S250,$U250);$x251=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x246,(string)\'shift\',62,13,\'<image>/18_path.js\');$x250=&$x251[0];list(,$W250,$S250,$U250)=$x251;if(!(is_object($x250)&&isset($x250->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x254=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',62,13,\'<image>/18_path.js\');$_TypeError=&$x254[0];list(,$WTypeError,$STypeError,$UTypeError)=$x254;$x255=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',62,13);$x256=$x255($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x256->class)&&$x256->class===\'Error\'&&!isset($x256->properties[\'file\'])&&!isset($x256->properties[\'line\'])&&!isset($x256->properties[\'column\'])){$x256->properties[\'file\']=\'<image>/18_path.js\';$x256->properties[\'line\']=62;$x256->properties[\'column\']=13;$x256->attributes[\'file\']=$x256->attributes[\'line\']=$x256->attributes[\'column\']=0;}throw new JSException($x256,62,13,\'<image>/18_path.js\');}$x252=$x250->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',62,13);$x253=$x252($global,$x246,$x250,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($_Array,$WArray,$SArray,$UArray);$x259=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'Array\',65,18,\'<image>/18_path.js\');$_Array=&$x259[0];list(,$WArray,$SArray,$UArray)=$x259;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x260=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',65,18,\'<image>/18_path.js\');$_ReferenceError=&$x260[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x260;$x261=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,18);$x262=$x261($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x262->class)&&$x262->class===\'Error\'&&!isset($x262->properties[\'file\'])&&!isset($x262->properties[\'line\'])&&!isset($x262->properties[\'column\'])){$x262->properties[\'file\']=\'<image>/18_path.js\';$x262->properties[\'line\']=65;$x262->properties[\'column\']=18;$x262->attributes[\'file\']=$x262->attributes[\'line\']=$x262->attributes[\'column\']=0;}throw new JSException($x262,65,18,\'<image>/18_path.js\');}unset($x265,$W265,$S265,$U265);$x266=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_from,(string)\'length\',65,28,\'<image>/18_path.js\');$x265=&$x266[0];list(,$W265,$S265,$U265)=$x266;$x263=JS::toPrimitive($x265,$global);$x264=JS::toPrimitive(1,$global);if(!(is_object($_Array)&&isset($_Array->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x269=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',65,23,\'<image>/18_path.js\');$_TypeError=&$x269[0];list(,$WTypeError,$STypeError,$UTypeError)=$x269;$x270=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,23);$x271=$x270($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x271->class)&&$x271->class===\'Error\'&&!isset($x271->properties[\'file\'])&&!isset($x271->properties[\'line\'])&&!isset($x271->properties[\'column\'])){$x271->properties[\'file\']=\'<image>/18_path.js\';$x271->properties[\'line\']=65;$x271->properties[\'column\']=23;$x271->attributes[\'file\']=$x271->attributes[\'line\']=$x271->attributes[\'column\']=0;}throw new JSException($x271,65,23,\'<image>/18_path.js\');}$x267=$_Array->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,23);$x268=$x267($global,$global,$_Array,array((is_string($x263)||is_string($x264)?JS::toString($x263,$global).JS::toString($x264,$global):JS::toNumber($x263,$global)+JS::toNumber($x264,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x268===JS::$undefined||$x268===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x273=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',65,45,\'<image>/18_path.js\');$_TypeError=&$x273[0];list(,$WTypeError,$STypeError,$UTypeError)=$x273;$x274=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,45);$x275=$x274($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x275->class)&&$x275->class===\'Error\'&&!isset($x275->properties[\'file\'])&&!isset($x275->properties[\'line\'])&&!isset($x275->properties[\'column\'])){$x275->properties[\'file\']=\'<image>/18_path.js\';$x275->properties[\'line\']=65;$x275->properties[\'column\']=45;$x275->attributes[\'file\']=$x275->attributes[\'line\']=$x275->attributes[\'column\']=0;}throw new JSException($x275,65,45,\'<image>/18_path.js\');}$x272=JS::toObject($x268,$global);unset($x276,$W276,$S276,$U276);$x277=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x272,(string)\'join\',65,45,\'<image>/18_path.js\');$x276=&$x277[0];list(,$W276,$S276,$U276)=$x277;$x278=JS::toPrimitive(\'..\',$global);$x279=JS::toPrimitive(DIRECTORY_SEPARATOR,$global);if(!(is_object($x276)&&isset($x276->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x282=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',65,45,\'<image>/18_path.js\');$_TypeError=&$x282[0];list(,$WTypeError,$STypeError,$UTypeError)=$x282;$x283=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,45);$x284=$x283($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x284->class)&&$x284->class===\'Error\'&&!isset($x284->properties[\'file\'])&&!isset($x284->properties[\'line\'])&&!isset($x284->properties[\'column\'])){$x284->properties[\'file\']=\'<image>/18_path.js\';$x284->properties[\'line\']=65;$x284->properties[\'column\']=45;$x284->attributes[\'file\']=$x284->attributes[\'line\']=$x284->attributes[\'column\']=0;}throw new JSException($x284,65,45,\'<image>/18_path.js\');}$x280=$x276->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',65,45);$x281=$x280($global,$x272,$x276,array((is_string($x278)||is_string($x279)?JS::toString($x278,$global).JS::toString($x279,$global):JS::toNumber($x278,$global)+JS::toNumber($x279,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_to===JS::$undefined||$_to===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x286=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',66,12,\'<image>/18_path.js\');$_TypeError=&$x286[0];list(,$WTypeError,$STypeError,$UTypeError)=$x286;$x287=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',66,12);$x288=$x287($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x288->class)&&$x288->class===\'Error\'&&!isset($x288->properties[\'file\'])&&!isset($x288->properties[\'line\'])&&!isset($x288->properties[\'column\'])){$x288->properties[\'file\']=\'<image>/18_path.js\';$x288->properties[\'line\']=66;$x288->properties[\'column\']=12;$x288->attributes[\'file\']=$x288->attributes[\'line\']=$x288->attributes[\'column\']=0;}throw new JSException($x288,66,12,\'<image>/18_path.js\');}$x285=JS::toObject($_to,$global);unset($x289,$W289,$S289,$U289);$x290=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x285,(string)\'join\',66,12,\'<image>/18_path.js\');$x289=&$x290[0];list(,$W289,$S289,$U289)=$x290;if(!(is_object($x289)&&isset($x289->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x293=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',66,12,\'<image>/18_path.js\');$_TypeError=&$x293[0];list(,$WTypeError,$STypeError,$UTypeError)=$x293;$x294=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',66,12);$x295=$x294($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x295->class)&&$x295->class===\'Error\'&&!isset($x295->properties[\'file\'])&&!isset($x295->properties[\'line\'])&&!isset($x295->properties[\'column\'])){$x295->properties[\'file\']=\'<image>/18_path.js\';$x295->properties[\'line\']=66;$x295->properties[\'column\']=12;$x295->attributes[\'file\']=$x295->attributes[\'line\']=$x295->attributes[\'column\']=0;}throw new JSException($x295,66,12,\'<image>/18_path.js\');}$x291=$x289->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',66,12);$x292=$x291($global,$x285,$x289,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x257=JS::toPrimitive($x281,$global);$x258=JS::toPrimitive($x292,$global);$scope->properties[\'newPath\']=JS::$undefined;$_newPath=&$scope->properties[\'newPath\'];$UnewPath=FALSE;$_newPath=(is_string($x257)||is_string($x258)?JS::toString($x257,$global).JS::toString($x258,$global):JS::toNumber($x257,$global)+JS::toNumber($x258,$global));if($_newPath===JS::$undefined||$_newPath===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x298=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',68,22,\'<image>/18_path.js\');$_TypeError=&$x298[0];list(,$WTypeError,$STypeError,$UTypeError)=$x298;$x299=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',68,22);$x300=$x299($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x300->class)&&$x300->class===\'Error\'&&!isset($x300->properties[\'file\'])&&!isset($x300->properties[\'line\'])&&!isset($x300->properties[\'column\'])){$x300->properties[\'file\']=\'<image>/18_path.js\';$x300->properties[\'line\']=68;$x300->properties[\'column\']=22;$x300->attributes[\'file\']=$x300->attributes[\'line\']=$x300->attributes[\'column\']=0;}throw new JSException($x300,68,22,\'<image>/18_path.js\');}$x297=JS::toObject($_newPath,$global);unset($x301,$W301,$S301,$U301);$x302=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x297,(string)\'charAt\',68,22,\'<image>/18_path.js\');$x301=&$x302[0];list(,$W301,$S301,$U301)=$x302;unset($x303,$W303,$S303,$U303);$x304=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_newPath,(string)\'length\',68,30,\'<image>/18_path.js\');$x303=&$x304[0];list(,$W303,$S303,$U303)=$x304;if(!(is_object($x301)&&isset($x301->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x307=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',68,22,\'<image>/18_path.js\');$_TypeError=&$x307[0];list(,$WTypeError,$STypeError,$UTypeError)=$x307;$x308=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',68,22);$x309=$x308($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x309->class)&&$x309->class===\'Error\'&&!isset($x309->properties[\'file\'])&&!isset($x309->properties[\'line\'])&&!isset($x309->properties[\'column\'])){$x309->properties[\'file\']=\'<image>/18_path.js\';$x309->properties[\'line\']=68;$x309->properties[\'column\']=22;$x309->attributes[\'file\']=$x309->attributes[\'line\']=$x309->attributes[\'column\']=0;}throw new JSException($x309,68,22,\'<image>/18_path.js\');}$x305=$x301->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',68,22);$x306=$x305($global,$x297,$x301,array((JS::toNumber($x303,$global)-JS::toNumber(1,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x296=(((gettype($x306)===gettype(\'/\')&&$x306===\'/\'))||(((is_float($x306)||is_int($x306))&&(is_float(\'/\')||is_int(\'/\')))&&$x306==\'/\'));if(JS::toBoolean($x296,$global)){if($_newPath===JS::$undefined||$_newPath===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x311=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',69,29,\'<image>/18_path.js\');$_TypeError=&$x311[0];list(,$WTypeError,$STypeError,$UTypeError)=$x311;$x312=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',69,29);$x313=$x312($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x313->class)&&$x313->class===\'Error\'&&!isset($x313->properties[\'file\'])&&!isset($x313->properties[\'line\'])&&!isset($x313->properties[\'column\'])){$x313->properties[\'file\']=\'<image>/18_path.js\';$x313->properties[\'line\']=69;$x313->properties[\'column\']=29;$x313->attributes[\'file\']=$x313->attributes[\'line\']=$x313->attributes[\'column\']=0;}throw new JSException($x313,69,29,\'<image>/18_path.js\');}$x310=JS::toObject($_newPath,$global);unset($x314,$W314,$S314,$U314);$x315=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x310,(string)\'substring\',69,29,\'<image>/18_path.js\');$x314=&$x315[0];list(,$W314,$S314,$U314)=$x315;unset($x316,$W316,$S316,$U316);$x317=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$_newPath,(string)\'length\',69,40,\'<image>/18_path.js\');$x316=&$x317[0];list(,$W316,$S316,$U316)=$x317;if(!(is_object($x314)&&isset($x314->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x320=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',69,29,\'<image>/18_path.js\');$_TypeError=&$x320[0];list(,$WTypeError,$STypeError,$UTypeError)=$x320;$x321=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',69,29);$x322=$x321($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x322->class)&&$x322->class===\'Error\'&&!isset($x322->properties[\'file\'])&&!isset($x322->properties[\'line\'])&&!isset($x322->properties[\'column\'])){$x322->properties[\'file\']=\'<image>/18_path.js\';$x322->properties[\'line\']=69;$x322->properties[\'column\']=29;$x322->attributes[\'file\']=$x322->attributes[\'line\']=$x322->attributes[\'column\']=0;}throw new JSException($x322,69,29,\'<image>/18_path.js\');}$x318=$x314->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',69,29);$x319=$x318($global,$x310,$x314,array(0,(JS::toNumber($x316,$global)-JS::toNumber(1,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x319;}return$_newPath;return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x325 =& $scope->properties['arguments'];
$x325->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x325->properties[$i] = $args[$i];
$x325->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$scope->properties['dirname'] = $fn;
$_dirname =& $scope->properties['dirname'];
$global->scope[++$global->scope_sp] = $scope;
$x326 = (((gettype($_p) === gettype('') && $_p === ''))|| (((is_float($_p) || is_int($_p)) && (is_float('') || is_int(''))) && $_p == ''));
if (JS::toBoolean($x326, $global)) {

return '.';;
};
return dirname(JS::toString($_p, $global));
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x325=&$scope->properties[\'arguments\'];$x325->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x325->properties[$i]=$args[$i];$x325->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'dirname\']=$fn;$_dirname=&$scope->properties[\'dirname\'];$global->scope[++$global->scope_sp]=$scope;$x326=(((gettype($_p)===gettype(\'\')&&$_p===\'\'))||(((is_float($_p)||is_int($_p))&&(is_float(\'\')||is_int(\'\')))&&$_p==\'\'));if(JS::toBoolean($x326,$global)){return\'.\';}return dirname(JS::toString($_p,$global));return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x329 =& $scope->properties['arguments'];
$x329->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x329->properties[$i] = $args[$i];
$x329->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$scope->properties['ext'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_ext =& $scope->properties['ext'];
$Uext = FALSE;
$scope->properties['basename'] = $fn;
$_basename =& $scope->properties['basename'];
$global->scope[++$global->scope_sp] = $scope;
$x330 = !(((gettype($_ext) === gettype(JS::$undefined) && $_ext === JS::$undefined))|| (((is_float($_ext) || is_int($_ext)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_ext == JS::$undefined));
if (JS::toBoolean($x330, $global)) {

return basename(JS::toString($_p, $global), JS::toString($_ext, $global));;
};
return basename(JS::toString($_p, $global));
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x329=&$scope->properties[\'arguments\'];$x329->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x329->properties[$i]=$args[$i];$x329->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'ext\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_ext=&$scope->properties[\'ext\'];$Uext=FALSE;$scope->properties[\'basename\']=$fn;$_basename=&$scope->properties[\'basename\'];$global->scope[++$global->scope_sp]=$scope;$x330=!(((gettype($_ext)===gettype(JS::$undefined)&&$_ext===JS::$undefined))||(((is_float($_ext)||is_int($_ext))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_ext==JS::$undefined));if(JS::toBoolean($x330,$global)){return basename(JS::toString($_p,$global),JS::toString($_ext,$global));}return basename(JS::toString($_p,$global));return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x333 =& $scope->properties['arguments'];
$x333->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x333->properties[$i] = $args[$i];
$x333->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$scope->properties['extname'] = $fn;
$_extname =& $scope->properties['extname'];
$global->scope[++$global->scope_sp] = $scope;
unset($_String, $WString, $SString, $UString);
$x334 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'String', 89, 8, '<image>/18_path.js');
$_String =& $x334[0]; list(,$WString,$SString,$UString) = $x334;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x335 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 89, 8, '<image>/18_path.js');
$_ReferenceError =& $x335[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x335;
$x336 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 89, 8);
$x337 = $x336($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x337->class) && $x337->class === 'Error' && !isset($x337->properties['file']) && !isset($x337->properties['line']) && !isset($x337->properties['column'])) {$x337->properties['file'] = '<image>/18_path.js';$x337->properties['line'] = 89;$x337->properties['column'] = 8;$x337->attributes['file'] = $x337->attributes['line'] = $x337->attributes['column'] = 0; }
throw new JSException($x337, 89, 8, '<image>/18_path.js');
}
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x340 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 89, 14, '<image>/18_path.js');
$_TypeError =& $x340[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x340;
$x341 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 89, 14);
$x342 = $x341($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x342->class) && $x342->class === 'Error' && !isset($x342->properties['file']) && !isset($x342->properties['line']) && !isset($x342->properties['column'])) {$x342->properties['file'] = '<image>/18_path.js';$x342->properties['line'] = 89;$x342->properties['column'] = 14;$x342->attributes['file'] = $x342->attributes['line'] = $x342->attributes['column'] = 0; }
throw new JSException($x342, 89, 14, '<image>/18_path.js');
}
$x338 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 89, 14);
$x339 = $x338($global, $global, $_String, array($_p), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x339;
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x345 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 91, 21, '<image>/18_path.js');
$_TypeError =& $x345[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x345;
$x346 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 91, 21);
$x347 = $x346($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x347->class) && $x347->class === 'Error' && !isset($x347->properties['file']) && !isset($x347->properties['line']) && !isset($x347->properties['column'])) {$x347->properties['file'] = '<image>/18_path.js';$x347->properties['line'] = 91;$x347->properties['column'] = 21;$x347->attributes['file'] = $x347->attributes['line'] = $x347->attributes['column'] = 0; }
throw new JSException($x347, 91, 21, '<image>/18_path.js');
}
$x344 = JS::toObject($_p, $global);
unset($x348, $W348, $S348, $U348);
$x349 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x344, (string) 'lastIndexOf', 91, 21, '<image>/18_path.js');
$x348 =& $x349[0]; list(,$W348,$S348,$U348) = $x349;
if (!(is_object($x348) && isset($x348->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x352 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 91, 21, '<image>/18_path.js');
$_TypeError =& $x352[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x352;
$x353 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 91, 21);
$x354 = $x353($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x354->class) && $x354->class === 'Error' && !isset($x354->properties['file']) && !isset($x354->properties['line']) && !isset($x354->properties['column'])) {$x354->properties['file'] = '<image>/18_path.js';$x354->properties['line'] = 91;$x354->properties['column'] = 21;$x354->attributes['file'] = $x354->attributes['line'] = $x354->attributes['column'] = 0; }
throw new JSException($x354, 91, 21, '<image>/18_path.js');
}
$x350 = $x348->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 91, 21);
$x351 = $x350($global, $x344, $x348, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x343 = !(((gettype($x351) === gettype((-1.0 * JS::toNumber(1, $global))) && $x351 === (-1.0 * JS::toNumber(1, $global))))|| (((is_float($x351) || is_int($x351)) && (is_float((-1.0 * JS::toNumber(1, $global))) || is_int((-1.0 * JS::toNumber(1, $global))))) && $x351 == (-1.0 * JS::toNumber(1, $global))));
if (JS::toBoolean($x343, $global)) {
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x356 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 92, 20, '<image>/18_path.js');
$_TypeError =& $x356[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x356;
$x357 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 20);
$x358 = $x357($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x358->class) && $x358->class === 'Error' && !isset($x358->properties['file']) && !isset($x358->properties['line']) && !isset($x358->properties['column'])) {$x358->properties['file'] = '<image>/18_path.js';$x358->properties['line'] = 92;$x358->properties['column'] = 20;$x358->attributes['file'] = $x358->attributes['line'] = $x358->attributes['column'] = 0; }
throw new JSException($x358, 92, 20, '<image>/18_path.js');
}
$x355 = JS::toObject($_p, $global);
unset($x359, $W359, $S359, $U359);
$x360 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x355, (string) 'substring', 92, 20, '<image>/18_path.js');
$x359 =& $x360[0]; list(,$W359,$S359,$U359) = $x360;
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x364 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 92, 34, '<image>/18_path.js');
$_TypeError =& $x364[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x364;
$x365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 34);
$x366 = $x365($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x366->class) && $x366->class === 'Error' && !isset($x366->properties['file']) && !isset($x366->properties['line']) && !isset($x366->properties['column'])) {$x366->properties['file'] = '<image>/18_path.js';$x366->properties['line'] = 92;$x366->properties['column'] = 34;$x366->attributes['file'] = $x366->attributes['line'] = $x366->attributes['column'] = 0; }
throw new JSException($x366, 92, 34, '<image>/18_path.js');
}
$x363 = JS::toObject($_p, $global);
unset($x367, $W367, $S367, $U367);
$x368 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x363, (string) 'lastIndexOf', 92, 34, '<image>/18_path.js');
$x367 =& $x368[0]; list(,$W367,$S367,$U367) = $x368;
if (!(is_object($x367) && isset($x367->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x371 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 92, 34, '<image>/18_path.js');
$_TypeError =& $x371[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x371;
$x372 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 34);
$x373 = $x372($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x373->class) && $x373->class === 'Error' && !isset($x373->properties['file']) && !isset($x373->properties['line']) && !isset($x373->properties['column'])) {$x373->properties['file'] = '<image>/18_path.js';$x373->properties['line'] = 92;$x373->properties['column'] = 34;$x373->attributes['file'] = $x373->attributes['line'] = $x373->attributes['column'] = 0; }
throw new JSException($x373, 92, 34, '<image>/18_path.js');
}
$x369 = $x367->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 34);
$x370 = $x369($global, $x363, $x367, array(DIRECTORY_SEPARATOR), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x361 = JS::toPrimitive($x370, $global);
$x362 = JS::toPrimitive(1, $global);
if (!(is_object($x359) && isset($x359->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x376 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 92, 20, '<image>/18_path.js');
$_TypeError =& $x376[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x376;
$x377 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 20);
$x378 = $x377($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x378->class) && $x378->class === 'Error' && !isset($x378->properties['file']) && !isset($x378->properties['line']) && !isset($x378->properties['column'])) {$x378->properties['file'] = '<image>/18_path.js';$x378->properties['line'] = 92;$x378->properties['column'] = 20;$x378->attributes['file'] = $x378->attributes['line'] = $x378->attributes['column'] = 0; }
throw new JSException($x378, 92, 20, '<image>/18_path.js');
}
$x374 = $x359->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 92, 20);
$x375 = $x374($global, $x355, $x359, array((is_string($x361) || is_string($x362) ? JS::toString($x361, $global) . JS::toString($x362, $global) : JS::toNumber($x361, $global) + JS::toNumber($x362, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x375;;
};
$x382 = (((gettype($_p) === gettype('.') && $_p === '.'))|| (((is_float($_p) || is_int($_p)) && (is_float('.') || is_int('.'))) && $_p == '.'));
$x381 = $x382;
if (!JS::toBoolean($x381, $global)) {
$x383 = (((gettype($_p) === gettype('..') && $_p === '..'))|| (((is_float($_p) || is_int($_p)) && (is_float('..') || is_int('..'))) && $_p == '..'));
$x381 = $x383; }
$x380 = $x381;
if (!JS::toBoolean($x380, $global)) {
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x386 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 96, 18, '<image>/18_path.js');
$_TypeError =& $x386[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x386;
$x387 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 18);
$x388 = $x387($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x388->class) && $x388->class === 'Error' && !isset($x388->properties['file']) && !isset($x388->properties['line']) && !isset($x388->properties['column'])) {$x388->properties['file'] = '<image>/18_path.js';$x388->properties['line'] = 96;$x388->properties['column'] = 18;$x388->attributes['file'] = $x388->attributes['line'] = $x388->attributes['column'] = 0; }
throw new JSException($x388, 96, 18, '<image>/18_path.js');
}
$x385 = JS::toObject($_p, $global);
unset($x389, $W389, $S389, $U389);
$x390 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x385, (string) 'lastIndexOf', 96, 18, '<image>/18_path.js');
$x389 =& $x390[0]; list(,$W389,$S389,$U389) = $x390;
if (!(is_object($x389) && isset($x389->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x393 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 96, 18, '<image>/18_path.js');
$_TypeError =& $x393[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x393;
$x394 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 18);
$x395 = $x394($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x395->class) && $x395->class === 'Error' && !isset($x395->properties['file']) && !isset($x395->properties['line']) && !isset($x395->properties['column'])) {$x395->properties['file'] = '<image>/18_path.js';$x395->properties['line'] = 96;$x395->properties['column'] = 18;$x395->attributes['file'] = $x395->attributes['line'] = $x395->attributes['column'] = 0; }
throw new JSException($x395, 96, 18, '<image>/18_path.js');
}
$x391 = $x389->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 18);
$x392 = $x391($global, $x385, $x389, array('.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x384 = (((gettype($x392) === gettype(0) && $x392 === 0))|| (((is_float($x392) || is_int($x392)) && (is_float(0) || is_int(0))) && $x392 == 0));
$x380 = $x384; }
$x379 = $x380;
if (!JS::toBoolean($x379, $global)) {
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x398 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 96, 46, '<image>/18_path.js');
$_TypeError =& $x398[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x398;
$x399 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 46);
$x400 = $x399($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x400->class) && $x400->class === 'Error' && !isset($x400->properties['file']) && !isset($x400->properties['line']) && !isset($x400->properties['column'])) {$x400->properties['file'] = '<image>/18_path.js';$x400->properties['line'] = 96;$x400->properties['column'] = 46;$x400->attributes['file'] = $x400->attributes['line'] = $x400->attributes['column'] = 0; }
throw new JSException($x400, 96, 46, '<image>/18_path.js');
}
$x397 = JS::toObject($_p, $global);
unset($x401, $W401, $S401, $U401);
$x402 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x397, (string) 'lastIndexOf', 96, 46, '<image>/18_path.js');
$x401 =& $x402[0]; list(,$W401,$S401,$U401) = $x402;
if (!(is_object($x401) && isset($x401->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x405 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 96, 46, '<image>/18_path.js');
$_TypeError =& $x405[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x405;
$x406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 46);
$x407 = $x406($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x407->class) && $x407->class === 'Error' && !isset($x407->properties['file']) && !isset($x407->properties['line']) && !isset($x407->properties['column'])) {$x407->properties['file'] = '<image>/18_path.js';$x407->properties['line'] = 96;$x407->properties['column'] = 46;$x407->attributes['file'] = $x407->attributes['line'] = $x407->attributes['column'] = 0; }
throw new JSException($x407, 96, 46, '<image>/18_path.js');
}
$x403 = $x401->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 96, 46);
$x404 = $x403($global, $x397, $x401, array('.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x396 = (((gettype($x404) === gettype((-1.0 * JS::toNumber(1, $global))) && $x404 === (-1.0 * JS::toNumber(1, $global))))|| (((is_float($x404) || is_int($x404)) && (is_float((-1.0 * JS::toNumber(1, $global))) || is_int((-1.0 * JS::toNumber(1, $global))))) && $x404 == (-1.0 * JS::toNumber(1, $global))));
$x379 = $x396; }
if (JS::toBoolean($x379, $global)) {

return '';;
};
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x409 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 98, 22, '<image>/18_path.js');
$_TypeError =& $x409[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x409;
$x410 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 22);
$x411 = $x410($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x411->class) && $x411->class === 'Error' && !isset($x411->properties['file']) && !isset($x411->properties['line']) && !isset($x411->properties['column'])) {$x411->properties['file'] = '<image>/18_path.js';$x411->properties['line'] = 98;$x411->properties['column'] = 22;$x411->attributes['file'] = $x411->attributes['line'] = $x411->attributes['column'] = 0; }
throw new JSException($x411, 98, 22, '<image>/18_path.js');
}
$x408 = JS::toObject($_p, $global);
unset($x412, $W412, $S412, $U412);
$x413 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x408, (string) 'substring', 98, 22, '<image>/18_path.js');
$x412 =& $x413[0]; list(,$W412,$S412,$U412) = $x413;
if ($_p === JS::$undefined || $_p === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x415 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 98, 36, '<image>/18_path.js');
$_TypeError =& $x415[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x415;
$x416 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 36);
$x417 = $x416($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x417->class) && $x417->class === 'Error' && !isset($x417->properties['file']) && !isset($x417->properties['line']) && !isset($x417->properties['column'])) {$x417->properties['file'] = '<image>/18_path.js';$x417->properties['line'] = 98;$x417->properties['column'] = 36;$x417->attributes['file'] = $x417->attributes['line'] = $x417->attributes['column'] = 0; }
throw new JSException($x417, 98, 36, '<image>/18_path.js');
}
$x414 = JS::toObject($_p, $global);
unset($x418, $W418, $S418, $U418);
$x419 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $x414, (string) 'lastIndexOf', 98, 36, '<image>/18_path.js');
$x418 =& $x419[0]; list(,$W418,$S418,$U418) = $x419;
if (!(is_object($x418) && isset($x418->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x422 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 98, 36, '<image>/18_path.js');
$_TypeError =& $x422[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x422;
$x423 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 36);
$x424 = $x423($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x424->class) && $x424->class === 'Error' && !isset($x424->properties['file']) && !isset($x424->properties['line']) && !isset($x424->properties['column'])) {$x424->properties['file'] = '<image>/18_path.js';$x424->properties['line'] = 98;$x424->properties['column'] = 36;$x424->attributes['file'] = $x424->attributes['line'] = $x424->attributes['column'] = 0; }
throw new JSException($x424, 98, 36, '<image>/18_path.js');
}
$x420 = $x418->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 36);
$x421 = $x420($global, $x414, $x418, array('.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x412) && isset($x412->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x427 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 98, 22, '<image>/18_path.js');
$_TypeError =& $x427[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x427;
$x428 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 22);
$x429 = $x428($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x429->class) && $x429->class === 'Error' && !isset($x429->properties['file']) && !isset($x429->properties['line']) && !isset($x429->properties['column'])) {$x429->properties['file'] = '<image>/18_path.js';$x429->properties['line'] = 98;$x429->properties['column'] = 22;$x429->attributes['file'] = $x429->attributes['line'] = $x429->attributes['column'] = 0; }
throw new JSException($x429, 98, 22, '<image>/18_path.js');
}
$x425 = $x412->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 98, 22);
$x426 = $x425($global, $x408, $x412, array($x421), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x426;
;
return JS::$undefined;
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x333=&$scope->properties[\'arguments\'];$x333->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x333->properties[$i]=$args[$i];$x333->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'extname\']=$fn;$_extname=&$scope->properties[\'extname\'];$global->scope[++$global->scope_sp]=$scope;unset($_String,$WString,$SString,$UString);$x334=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'String\',89,8,\'<image>/18_path.js\');$_String=&$x334[0];list(,$WString,$SString,$UString)=$x334;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x335=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'ReferenceError\',89,8,\'<image>/18_path.js\');$_ReferenceError=&$x335[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x335;$x336=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',89,8);$x337=$x336($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x337->class)&&$x337->class===\'Error\'&&!isset($x337->properties[\'file\'])&&!isset($x337->properties[\'line\'])&&!isset($x337->properties[\'column\'])){$x337->properties[\'file\']=\'<image>/18_path.js\';$x337->properties[\'line\']=89;$x337->properties[\'column\']=8;$x337->attributes[\'file\']=$x337->attributes[\'line\']=$x337->attributes[\'column\']=0;}throw new JSException($x337,89,8,\'<image>/18_path.js\');}if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x340=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',89,14,\'<image>/18_path.js\');$_TypeError=&$x340[0];list(,$WTypeError,$STypeError,$UTypeError)=$x340;$x341=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',89,14);$x342=$x341($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x342->class)&&$x342->class===\'Error\'&&!isset($x342->properties[\'file\'])&&!isset($x342->properties[\'line\'])&&!isset($x342->properties[\'column\'])){$x342->properties[\'file\']=\'<image>/18_path.js\';$x342->properties[\'line\']=89;$x342->properties[\'column\']=14;$x342->attributes[\'file\']=$x342->attributes[\'line\']=$x342->attributes[\'column\']=0;}throw new JSException($x342,89,14,\'<image>/18_path.js\');}$x338=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',89,14);$x339=$x338($global,$global,$_String,array($_p),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x339;if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x345=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',91,21,\'<image>/18_path.js\');$_TypeError=&$x345[0];list(,$WTypeError,$STypeError,$UTypeError)=$x345;$x346=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',91,21);$x347=$x346($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x347->class)&&$x347->class===\'Error\'&&!isset($x347->properties[\'file\'])&&!isset($x347->properties[\'line\'])&&!isset($x347->properties[\'column\'])){$x347->properties[\'file\']=\'<image>/18_path.js\';$x347->properties[\'line\']=91;$x347->properties[\'column\']=21;$x347->attributes[\'file\']=$x347->attributes[\'line\']=$x347->attributes[\'column\']=0;}throw new JSException($x347,91,21,\'<image>/18_path.js\');}$x344=JS::toObject($_p,$global);unset($x348,$W348,$S348,$U348);$x349=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x344,(string)\'lastIndexOf\',91,21,\'<image>/18_path.js\');$x348=&$x349[0];list(,$W348,$S348,$U348)=$x349;if(!(is_object($x348)&&isset($x348->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x352=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',91,21,\'<image>/18_path.js\');$_TypeError=&$x352[0];list(,$WTypeError,$STypeError,$UTypeError)=$x352;$x353=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',91,21);$x354=$x353($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x354->class)&&$x354->class===\'Error\'&&!isset($x354->properties[\'file\'])&&!isset($x354->properties[\'line\'])&&!isset($x354->properties[\'column\'])){$x354->properties[\'file\']=\'<image>/18_path.js\';$x354->properties[\'line\']=91;$x354->properties[\'column\']=21;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,91,21,\'<image>/18_path.js\');}$x350=$x348->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',91,21);$x351=$x350($global,$x344,$x348,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x343=!(((gettype($x351)===gettype((-1.0*JS::toNumber(1,$global)))&&$x351===(-1.0*JS::toNumber(1,$global))))||(((is_float($x351)||is_int($x351))&&(is_float((-1.0*JS::toNumber(1,$global)))||is_int((-1.0*JS::toNumber(1,$global)))))&&$x351==(-1.0*JS::toNumber(1,$global))));if(JS::toBoolean($x343,$global)){if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x356=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',92,20,\'<image>/18_path.js\');$_TypeError=&$x356[0];list(,$WTypeError,$STypeError,$UTypeError)=$x356;$x357=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,20);$x358=$x357($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x358->class)&&$x358->class===\'Error\'&&!isset($x358->properties[\'file\'])&&!isset($x358->properties[\'line\'])&&!isset($x358->properties[\'column\'])){$x358->properties[\'file\']=\'<image>/18_path.js\';$x358->properties[\'line\']=92;$x358->properties[\'column\']=20;$x358->attributes[\'file\']=$x358->attributes[\'line\']=$x358->attributes[\'column\']=0;}throw new JSException($x358,92,20,\'<image>/18_path.js\');}$x355=JS::toObject($_p,$global);unset($x359,$W359,$S359,$U359);$x360=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x355,(string)\'substring\',92,20,\'<image>/18_path.js\');$x359=&$x360[0];list(,$W359,$S359,$U359)=$x360;if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x364=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',92,34,\'<image>/18_path.js\');$_TypeError=&$x364[0];list(,$WTypeError,$STypeError,$UTypeError)=$x364;$x365=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,34);$x366=$x365($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x366->class)&&$x366->class===\'Error\'&&!isset($x366->properties[\'file\'])&&!isset($x366->properties[\'line\'])&&!isset($x366->properties[\'column\'])){$x366->properties[\'file\']=\'<image>/18_path.js\';$x366->properties[\'line\']=92;$x366->properties[\'column\']=34;$x366->attributes[\'file\']=$x366->attributes[\'line\']=$x366->attributes[\'column\']=0;}throw new JSException($x366,92,34,\'<image>/18_path.js\');}$x363=JS::toObject($_p,$global);unset($x367,$W367,$S367,$U367);$x368=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x363,(string)\'lastIndexOf\',92,34,\'<image>/18_path.js\');$x367=&$x368[0];list(,$W367,$S367,$U367)=$x368;if(!(is_object($x367)&&isset($x367->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x371=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',92,34,\'<image>/18_path.js\');$_TypeError=&$x371[0];list(,$WTypeError,$STypeError,$UTypeError)=$x371;$x372=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,34);$x373=$x372($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x373->class)&&$x373->class===\'Error\'&&!isset($x373->properties[\'file\'])&&!isset($x373->properties[\'line\'])&&!isset($x373->properties[\'column\'])){$x373->properties[\'file\']=\'<image>/18_path.js\';$x373->properties[\'line\']=92;$x373->properties[\'column\']=34;$x373->attributes[\'file\']=$x373->attributes[\'line\']=$x373->attributes[\'column\']=0;}throw new JSException($x373,92,34,\'<image>/18_path.js\');}$x369=$x367->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,34);$x370=$x369($global,$x363,$x367,array(DIRECTORY_SEPARATOR),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x361=JS::toPrimitive($x370,$global);$x362=JS::toPrimitive(1,$global);if(!(is_object($x359)&&isset($x359->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x376=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',92,20,\'<image>/18_path.js\');$_TypeError=&$x376[0];list(,$WTypeError,$STypeError,$UTypeError)=$x376;$x377=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,20);$x378=$x377($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x378->class)&&$x378->class===\'Error\'&&!isset($x378->properties[\'file\'])&&!isset($x378->properties[\'line\'])&&!isset($x378->properties[\'column\'])){$x378->properties[\'file\']=\'<image>/18_path.js\';$x378->properties[\'line\']=92;$x378->properties[\'column\']=20;$x378->attributes[\'file\']=$x378->attributes[\'line\']=$x378->attributes[\'column\']=0;}throw new JSException($x378,92,20,\'<image>/18_path.js\');}$x374=$x359->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',92,20);$x375=$x374($global,$x355,$x359,array((is_string($x361)||is_string($x362)?JS::toString($x361,$global).JS::toString($x362,$global):JS::toNumber($x361,$global)+JS::toNumber($x362,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x375;}$x382=(((gettype($_p)===gettype(\'.\')&&$_p===\'.\'))||(((is_float($_p)||is_int($_p))&&(is_float(\'.\')||is_int(\'.\')))&&$_p==\'.\'));$x381=$x382;if(!JS::toBoolean($x381,$global)){$x383=(((gettype($_p)===gettype(\'..\')&&$_p===\'..\'))||(((is_float($_p)||is_int($_p))&&(is_float(\'..\')||is_int(\'..\')))&&$_p==\'..\'));$x381=$x383;}$x380=$x381;if(!JS::toBoolean($x380,$global)){if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x386=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',96,18,\'<image>/18_path.js\');$_TypeError=&$x386[0];list(,$WTypeError,$STypeError,$UTypeError)=$x386;$x387=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,18);$x388=$x387($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x388->class)&&$x388->class===\'Error\'&&!isset($x388->properties[\'file\'])&&!isset($x388->properties[\'line\'])&&!isset($x388->properties[\'column\'])){$x388->properties[\'file\']=\'<image>/18_path.js\';$x388->properties[\'line\']=96;$x388->properties[\'column\']=18;$x388->attributes[\'file\']=$x388->attributes[\'line\']=$x388->attributes[\'column\']=0;}throw new JSException($x388,96,18,\'<image>/18_path.js\');}$x385=JS::toObject($_p,$global);unset($x389,$W389,$S389,$U389);$x390=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x385,(string)\'lastIndexOf\',96,18,\'<image>/18_path.js\');$x389=&$x390[0];list(,$W389,$S389,$U389)=$x390;if(!(is_object($x389)&&isset($x389->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x393=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',96,18,\'<image>/18_path.js\');$_TypeError=&$x393[0];list(,$WTypeError,$STypeError,$UTypeError)=$x393;$x394=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,18);$x395=$x394($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x395->class)&&$x395->class===\'Error\'&&!isset($x395->properties[\'file\'])&&!isset($x395->properties[\'line\'])&&!isset($x395->properties[\'column\'])){$x395->properties[\'file\']=\'<image>/18_path.js\';$x395->properties[\'line\']=96;$x395->properties[\'column\']=18;$x395->attributes[\'file\']=$x395->attributes[\'line\']=$x395->attributes[\'column\']=0;}throw new JSException($x395,96,18,\'<image>/18_path.js\');}$x391=$x389->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,18);$x392=$x391($global,$x385,$x389,array(\'.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x384=(((gettype($x392)===gettype(0)&&$x392===0))||(((is_float($x392)||is_int($x392))&&(is_float(0)||is_int(0)))&&$x392==0));$x380=$x384;}$x379=$x380;if(!JS::toBoolean($x379,$global)){if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x398=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',96,46,\'<image>/18_path.js\');$_TypeError=&$x398[0];list(,$WTypeError,$STypeError,$UTypeError)=$x398;$x399=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,46);$x400=$x399($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x400->class)&&$x400->class===\'Error\'&&!isset($x400->properties[\'file\'])&&!isset($x400->properties[\'line\'])&&!isset($x400->properties[\'column\'])){$x400->properties[\'file\']=\'<image>/18_path.js\';$x400->properties[\'line\']=96;$x400->properties[\'column\']=46;$x400->attributes[\'file\']=$x400->attributes[\'line\']=$x400->attributes[\'column\']=0;}throw new JSException($x400,96,46,\'<image>/18_path.js\');}$x397=JS::toObject($_p,$global);unset($x401,$W401,$S401,$U401);$x402=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x397,(string)\'lastIndexOf\',96,46,\'<image>/18_path.js\');$x401=&$x402[0];list(,$W401,$S401,$U401)=$x402;if(!(is_object($x401)&&isset($x401->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x405=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',96,46,\'<image>/18_path.js\');$_TypeError=&$x405[0];list(,$WTypeError,$STypeError,$UTypeError)=$x405;$x406=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,46);$x407=$x406($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x407->class)&&$x407->class===\'Error\'&&!isset($x407->properties[\'file\'])&&!isset($x407->properties[\'line\'])&&!isset($x407->properties[\'column\'])){$x407->properties[\'file\']=\'<image>/18_path.js\';$x407->properties[\'line\']=96;$x407->properties[\'column\']=46;$x407->attributes[\'file\']=$x407->attributes[\'line\']=$x407->attributes[\'column\']=0;}throw new JSException($x407,96,46,\'<image>/18_path.js\');}$x403=$x401->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',96,46);$x404=$x403($global,$x397,$x401,array(\'.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x396=(((gettype($x404)===gettype((-1.0*JS::toNumber(1,$global)))&&$x404===(-1.0*JS::toNumber(1,$global))))||(((is_float($x404)||is_int($x404))&&(is_float((-1.0*JS::toNumber(1,$global)))||is_int((-1.0*JS::toNumber(1,$global)))))&&$x404==(-1.0*JS::toNumber(1,$global))));$x379=$x396;}if(JS::toBoolean($x379,$global)){return\'\';}if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x409=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',98,22,\'<image>/18_path.js\');$_TypeError=&$x409[0];list(,$WTypeError,$STypeError,$UTypeError)=$x409;$x410=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,22);$x411=$x410($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x411->class)&&$x411->class===\'Error\'&&!isset($x411->properties[\'file\'])&&!isset($x411->properties[\'line\'])&&!isset($x411->properties[\'column\'])){$x411->properties[\'file\']=\'<image>/18_path.js\';$x411->properties[\'line\']=98;$x411->properties[\'column\']=22;$x411->attributes[\'file\']=$x411->attributes[\'line\']=$x411->attributes[\'column\']=0;}throw new JSException($x411,98,22,\'<image>/18_path.js\');}$x408=JS::toObject($_p,$global);unset($x412,$W412,$S412,$U412);$x413=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x408,(string)\'substring\',98,22,\'<image>/18_path.js\');$x412=&$x413[0];list(,$W412,$S412,$U412)=$x413;if($_p===JS::$undefined||$_p===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x415=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',98,36,\'<image>/18_path.js\');$_TypeError=&$x415[0];list(,$WTypeError,$STypeError,$UTypeError)=$x415;$x416=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,36);$x417=$x416($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x417->class)&&$x417->class===\'Error\'&&!isset($x417->properties[\'file\'])&&!isset($x417->properties[\'line\'])&&!isset($x417->properties[\'column\'])){$x417->properties[\'file\']=\'<image>/18_path.js\';$x417->properties[\'line\']=98;$x417->properties[\'column\']=36;$x417->attributes[\'file\']=$x417->attributes[\'line\']=$x417->attributes[\'column\']=0;}throw new JSException($x417,98,36,\'<image>/18_path.js\');}$x414=JS::toObject($_p,$global);unset($x418,$W418,$S418,$U418);$x419=_dc8b81f3d85c475b76d3fad15e533f32_4($global,$scope,$x414,(string)\'lastIndexOf\',98,36,\'<image>/18_path.js\');$x418=&$x419[0];list(,$W418,$S418,$U418)=$x419;if(!(is_object($x418)&&isset($x418->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x422=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',98,36,\'<image>/18_path.js\');$_TypeError=&$x422[0];list(,$WTypeError,$STypeError,$UTypeError)=$x422;$x423=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,36);$x424=$x423($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x424->class)&&$x424->class===\'Error\'&&!isset($x424->properties[\'file\'])&&!isset($x424->properties[\'line\'])&&!isset($x424->properties[\'column\'])){$x424->properties[\'file\']=\'<image>/18_path.js\';$x424->properties[\'line\']=98;$x424->properties[\'column\']=36;$x424->attributes[\'file\']=$x424->attributes[\'line\']=$x424->attributes[\'column\']=0;}throw new JSException($x424,98,36,\'<image>/18_path.js\');}$x420=$x418->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,36);$x421=$x420($global,$x414,$x418,array(\'.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x412)&&isset($x412->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x427=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',98,22,\'<image>/18_path.js\');$_TypeError=&$x427[0];list(,$WTypeError,$STypeError,$UTypeError)=$x427;$x428=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,22);$x429=$x428($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x429->class)&&$x429->class===\'Error\'&&!isset($x429->properties[\'file\'])&&!isset($x429->properties[\'line\'])&&!isset($x429->properties[\'column\'])){$x429->properties[\'file\']=\'<image>/18_path.js\';$x429->properties[\'line\']=98;$x429->properties[\'column\']=22;$x429->attributes[\'file\']=$x429->attributes[\'line\']=$x429->attributes[\'column\']=0;}throw new JSException($x429,98,22,\'<image>/18_path.js\');}$x425=$x412->call;$global->trace[++$global->trace_sp]=array(\'<image>/18_path.js\',98,22);$x426=$x425($global,$x408,$x412,array($x421),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x426;return JS::$undefined;}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_10($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x441 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x441[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x441;
$x442 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x443 = $x442($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x443->class) && $x443->class === 'Error' && !isset($x443->properties['file']) && !isset($x443->properties['line']) && !isset($x443->properties['column'])) {$x443->properties['file'] = $file;$x443->properties['line'] = $line;$x443->properties['column'] = $column;$x443->attributes['file'] = $x443->attributes['line'] = $x443->attributes['column'] = 0; }
throw new JSException($x443, $line, $column, $file);
}
$W440 = $S440 = $U440 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x440 =& $lookup->properties[$id]; $W440 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S440 = $lookup->setters[$id]; }
else { $x440 = JS::$undefined; $U440 = TRUE; }
return array(&$x440, $W440, $S440, $U440);
}
echo 'function _dc8b81f3d85c475b76d3fad15e533f32_10($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x441=_dc8b81f3d85c475b76d3fad15e533f32_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x441[0];list(,$WTypeError,$STypeError,$UTypeError)=$x441;$x442=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x443=$x442($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x443->class)&&$x443->class===\'Error\'&&!isset($x443->properties[\'file\'])&&!isset($x443->properties[\'line\'])&&!isset($x443->properties[\'column\'])){$x443->properties[\'file\']=$file;$x443->properties[\'line\']=$line;$x443->properties[\'column\']=$column;$x443->attributes[\'file\']=$x443->attributes[\'line\']=$x443->attributes[\'column\']=0;}throw new JSException($x443,$line,$column,$file);}$W440=$S440=$U440=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x440=&$lookup->properties[$id];$W440=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S440=$lookup->setters[$id];}else{$x440=JS::$undefined;$U440=TRUE;}return array(&$x440,$W440,$S440,$U440);}', "\n";
function _dc8b81f3d85c475b76d3fad15e533f32_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/18_path.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/18_path.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x4 = clone JS::$functionTemplate; $x4->call = '_dc8b81f3d85c475b76d3fad15e533f32_1'; $x4->parameters = array (
  0 => 'path',
); $x4->name = 'normalize'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$x1->properties['normalize'] = $x4;
$x1->attributes['normalize'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x77 = clone JS::$functionTemplate; $x77->call = '_dc8b81f3d85c475b76d3fad15e533f32_2'; $x77->parameters = array (
); $x77->name = 'join'; $x77->scope = $scope; $x77->properties['prototype'] = clone JS::$objectTemplate; $x77->attributes['prototype'] = JS::WRITABLE; $x77->properties['prototype']->properties['constructor'] = $x77; $x77->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x77->properties['length'] = 0; $x77->attributes['length'] = 0;
$x1->properties['join'] = $x77;
$x1->attributes['join'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x161 = clone JS::$functionTemplate; $x161->call = '_dc8b81f3d85c475b76d3fad15e533f32_5'; $x161->parameters = array (
  0 => 'to',
); $x161->name = 'resolve'; $x161->scope = $scope; $x161->properties['prototype'] = clone JS::$objectTemplate; $x161->attributes['prototype'] = JS::WRITABLE; $x161->properties['prototype']->properties['constructor'] = $x161; $x161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x161->properties['length'] = 1; $x161->attributes['length'] = 0;
$x1->properties['resolve'] = $x161;
$x1->attributes['resolve'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x323 = clone JS::$functionTemplate; $x323->call = '_dc8b81f3d85c475b76d3fad15e533f32_6'; $x323->parameters = array (
  0 => 'from',
  1 => 'to',
); $x323->name = 'relative'; $x323->scope = $scope; $x323->properties['prototype'] = clone JS::$objectTemplate; $x323->attributes['prototype'] = JS::WRITABLE; $x323->properties['prototype']->properties['constructor'] = $x323; $x323->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x323->properties['length'] = 2; $x323->attributes['length'] = 0;
$x1->properties['relative'] = $x323;
$x1->attributes['relative'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x327 = clone JS::$functionTemplate; $x327->call = '_dc8b81f3d85c475b76d3fad15e533f32_7'; $x327->parameters = array (
  0 => 'p',
); $x327->name = 'dirname'; $x327->scope = $scope; $x327->properties['prototype'] = clone JS::$objectTemplate; $x327->attributes['prototype'] = JS::WRITABLE; $x327->properties['prototype']->properties['constructor'] = $x327; $x327->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x327->properties['length'] = 1; $x327->attributes['length'] = 0;
$x1->properties['dirname'] = $x327;
$x1->attributes['dirname'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x331 = clone JS::$functionTemplate; $x331->call = '_dc8b81f3d85c475b76d3fad15e533f32_8'; $x331->parameters = array (
  0 => 'p',
  1 => 'ext',
); $x331->name = 'basename'; $x331->scope = $scope; $x331->properties['prototype'] = clone JS::$objectTemplate; $x331->attributes['prototype'] = JS::WRITABLE; $x331->properties['prototype']->properties['constructor'] = $x331; $x331->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x331->properties['length'] = 2; $x331->attributes['length'] = 0;
$x1->properties['basename'] = $x331;
$x1->attributes['basename'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x430 = clone JS::$functionTemplate; $x430->call = '_dc8b81f3d85c475b76d3fad15e533f32_9'; $x430->parameters = array (
  0 => 'p',
); $x430->name = 'extname'; $x430->scope = $scope; $x430->properties['prototype'] = clone JS::$objectTemplate; $x430->attributes['prototype'] = JS::WRITABLE; $x430->properties['prototype']->properties['constructor'] = $x430; $x430->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x430->properties['length'] = 1; $x430->attributes['length'] = 0;
$x1->properties['extname'] = $x430;
$x1->attributes['extname'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x1->properties['sep'] = DIRECTORY_SEPARATOR;
$x1->attributes['sep'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['exports'] = $x1;
$x0->attributes['exports'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x431 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'require', 1, 1, '<image>/18_path.js');
$_require =& $x431[0]; list(,$Wrequire,$Srequire,$Urequire) = $x431;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x432 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'ReferenceError', 1, 1, '<image>/18_path.js');
$_ReferenceError =& $x432[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x432;
$x433 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 1, 1);
$x434 = $x433($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x434->class) && $x434->class === 'Error' && !isset($x434->properties['file']) && !isset($x434->properties['line']) && !isset($x434->properties['column'])) {$x434->properties['file'] = '<image>/18_path.js';$x434->properties['line'] = 1;$x434->properties['column'] = 1;$x434->attributes['file'] = $x434->attributes['line'] = $x434->attributes['column'] = 0; }
throw new JSException($x434, 1, 1, '<image>/18_path.js');
}
unset($x435, $W435, $S435, $U435);
$x436 = _dc8b81f3d85c475b76d3fad15e533f32_4($global, $scope, $_require, (string) 'modules', 1, 8, '<image>/18_path.js');
$x435 =& $x436[0]; list(,$W435,$S435,$U435) = $x436;
if ($x435 === JS::$undefined || $x435 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x437 = _dc8b81f3d85c475b76d3fad15e533f32_3($global, $scope, $scope, (string) 'TypeError', 1, 22, '<image>/18_path.js');
$_TypeError =& $x437[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x437;
$x438 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 1, 22);
$x439 = $x438($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x439->class) && $x439->class === 'Error' && !isset($x439->properties['file']) && !isset($x439->properties['line']) && !isset($x439->properties['column'])) {$x439->properties['file'] = '<image>/18_path.js';$x439->properties['line'] = 1;$x439->properties['column'] = 22;$x439->attributes['file'] = $x439->attributes['line'] = $x439->attributes['column'] = 0; }
throw new JSException($x439, 1, 22, '<image>/18_path.js');
}
$x435 = JS::toObject($x435, $global);
unset($x440, $W440, $S440, $U440);
$x444 = _dc8b81f3d85c475b76d3fad15e533f32_10($global, $scope, $x435, (string) 'path', 1, 22, '<image>/18_path.js');
$x440 =& $x444[0]; list(,$W440,$S440,$U440) = $x444;
if ($U440 && (!isset($x435->extensible) || $x435->extensible)) {$x435->properties['path'] = $x440; $x440 =& $x435->properties['path']; $x435->attributes['path'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U440 = FALSE; $W440 = TRUE; }
if (isset($S440)) {
$x446 = $S440->call;
$global->trace[++$global->trace_sp] = array('<image>/18_path.js', 1, 22);
$x447 = $x446($global, $x435, $S440, array($x0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x445 = $x447;
} else {
if (!$U440) {$x445 = $x0;if ($W440) { $x440 = $x0; }  }
else { $x445 = JS::$undefined; }
}
if (isset($x435->class) && $x435->class === 'Array' &&  is_int('path') && 'path' >= $x435->properties['length']) { $x435->properties['length'] = 'path' + 1; }
;
return JS::$undefined;
}
