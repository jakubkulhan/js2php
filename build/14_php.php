function _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _b460327d79aaf3a14905dfba16253ced_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x7=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x8=$x7($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x8;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x9 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x9[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x9;
$x10 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x11 = $x10($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x11->class) && $x11->class === 'Error' && !isset($x11->properties['file']) && !isset($x11->properties['line']) && !isset($x11->properties['column'])) {$x11->properties['file'] = $file;$x11->properties['line'] = $line;$x11->properties['column'] = $column;$x11->attributes['file'] = $x11->attributes['line'] = $x11->attributes['column'] = 0; }
throw new JSException($x11, $line, $column, $file);
}
$W6 = $S6 = $U6 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x6 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x12 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x13 = $x12($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x6 = $x13; }
else { $x6 = JS::$undefined; $U6 = TRUE; }
return array(&$x6, $W6, $S6, $U6);
}
echo 'function _b460327d79aaf3a14905dfba16253ced_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x9=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x9[0];list(,$WTypeError,$STypeError,$UTypeError)=$x9;$x10=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x11=$x10($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x11->class)&&$x11->class===\'Error\'&&!isset($x11->properties[\'file\'])&&!isset($x11->properties[\'line\'])&&!isset($x11->properties[\'column\'])){$x11->properties[\'file\']=$file;$x11->properties[\'line\']=$line;$x11->properties[\'column\']=$column;$x11->attributes[\'file\']=$x11->attributes[\'line\']=$x11->attributes[\'column\']=0;}throw new JSException($x11,$line,$column,$file);}$W6=$S6=$U6=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x6=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x12=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x6=$x13;}else{$x6=JS::$undefined;$U6=TRUE;}return array(&$x6,$W6,$S6,$U6);}', "\n";
function _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x27 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x27[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x27;
$x28 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x29 = $x28($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error' && !isset($x29->properties['file']) && !isset($x29->properties['line']) && !isset($x29->properties['column'])) {$x29->properties['file'] = $file;$x29->properties['line'] = $line;$x29->properties['column'] = $column;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
throw new JSException($x29, $line, $column, $file);
}
$W26 = $S26 = $U26 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x26 =& $lookup->properties[$id]; $W26 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S26 = $lookup->setters[$id]; }
else { $x26 = JS::$undefined; $U26 = TRUE; }
return array(&$x26, $W26, $S26, $U26);
}
echo 'function _b460327d79aaf3a14905dfba16253ced_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x29=$x28($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'&&!isset($x29->properties[\'file\'])&&!isset($x29->properties[\'line\'])&&!isset($x29->properties[\'column\'])){$x29->properties[\'file\']=$file;$x29->properties[\'line\']=$line;$x29->properties[\'column\']=$column;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,$line,$column,$file);}$W26=$S26=$U26=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x26=&$lookup->properties[$id];$W26=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S26=$lookup->setters[$id];}else{$x26=JS::$undefined;$U26=TRUE;}return array(&$x26,$W26,$S26,$U26);}', "\n";
function _b460327d79aaf3a14905dfba16253ced_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x4 =& $scope->properties['arguments'];
$x4->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x4->properties[$i] = $args[$i];
$x4->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['name'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_name =& $scope->properties['name'];
$Uname = FALSE;
$scope->properties['fn'] = $fn;
$_fn =& $scope->properties['fn'];
$global->scope[++$global->scope_sp] = $scope;
unset($x6, $W6, $S6, $U6);
$x14 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedFns', 6, 11, '<image>/14_php.js');
$x6 =& $x14[0]; list(,$W6,$S6,$U6) = $x14;
unset($x15, $W15, $S15, $U15);
$x16 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x6, (string) $_name, 6, 22, '<image>/14_php.js');
$x15 =& $x16[0]; list(,$W15,$S15,$U15) = $x16;
$x5 = !(((gettype($x15) === gettype(JS::$undefined) && $x15 === JS::$undefined))|| (((is_float($x15) || is_int($x15)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x15 == JS::$undefined));
if (JS::toBoolean($x5, $global)) {
unset($x17, $W17, $S17, $U17);
$x18 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedFns', 7, 15, '<image>/14_php.js');
$x17 =& $x18[0]; list(,$W17,$S17,$U17) = $x18;
unset($x19, $W19, $S19, $U19);
$x20 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x17, (string) $_name, 7, 26, '<image>/14_php.js');
$x19 =& $x20[0]; list(,$W19,$S19,$U19) = $x20;
return $x19;;
};
$fn = clone JS::$functionTemplate;
			$reflection = new ReflectionFunction(JS::toString($_name, $global));

			$fn->call = 'JSWrappedFunction';

			$fn->parameters = array();
			foreach ($reflection->getParameters() as $p) {
				$fn->parameters[] = $p->getName();
			}

			$fn->name = $reflection->getName();

			$fn->properties['prototype'] = clone JS::$objectTemplate;
			$fn->attributes['prototype'] = 0;
			$fn->properties['prototype']->properties['constructor'] = $fn;
			$fn->properties['prototype']->attributes['constructor'] = 0;
			$fn->properties['length'] = count($fn->parameters);
			$fn->attributes['length'] = 0;
unset($x21, $W21, $S21, $U21);
$x22 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedFns', 31, 7, '<image>/14_php.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
if ($x21 === JS::$undefined || $x21 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x23 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, (string) 'TypeError', 31, 25, '<image>/14_php.js');
$_TypeError =& $x23[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x23;
$x24 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 31, 25);
$x25 = $x24($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error' && !isset($x25->properties['file']) && !isset($x25->properties['line']) && !isset($x25->properties['column'])) {$x25->properties['file'] = '<image>/14_php.js';$x25->properties['line'] = 31;$x25->properties['column'] = 25;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, 31, 25, '<image>/14_php.js');
}
$x21 = JS::toObject($x21, $global);
unset($x26, $W26, $S26, $U26);
$x30 = _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $x21, (string) $_name, 31, 25, '<image>/14_php.js');
$x26 =& $x30[0]; list(,$W26,$S26,$U26) = $x30;
if ($U26 && (!isset($x21->extensible) || $x21->extensible)) {$x21->properties[$_name] = $x26; $x26 =& $x21->properties[$_name]; $x21->attributes[$_name] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U26 = FALSE; $W26 = TRUE; }
if (isset($S26)) {
$x32 = $S26->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 31, 25);
$x33 = $x32($global, $x21, $S26, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x31 = $x33;
} else {
if (!$U26) {$x31 = $fn;if ($W26) { $x26 = $fn; }  }
else { $x31 = JS::$undefined; }
}
if (isset($x21->class) && $x21->class === 'Array' &&  is_int($_name) && $_name >= $x21->properties['length']) { $x21->properties['length'] = $_name + 1; };
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x4=&$scope->properties[\'arguments\'];$x4->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x4->properties[$i]=$args[$i];$x4->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'fn\']=$fn;$_fn=&$scope->properties[\'fn\'];$global->scope[++$global->scope_sp]=$scope;unset($x6,$W6,$S6,$U6);$x14=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedFns\',6,11,\'<image>/14_php.js\');$x6=&$x14[0];list(,$W6,$S6,$U6)=$x14;unset($x15,$W15,$S15,$U15);$x16=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x6,(string)$_name,6,22,\'<image>/14_php.js\');$x15=&$x16[0];list(,$W15,$S15,$U15)=$x16;$x5=!(((gettype($x15)===gettype(JS::$undefined)&&$x15===JS::$undefined))||(((is_float($x15)||is_int($x15))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x15==JS::$undefined));if(JS::toBoolean($x5,$global)){unset($x17,$W17,$S17,$U17);$x18=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedFns\',7,15,\'<image>/14_php.js\');$x17=&$x18[0];list(,$W17,$S17,$U17)=$x18;unset($x19,$W19,$S19,$U19);$x20=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x17,(string)$_name,7,26,\'<image>/14_php.js\');$x19=&$x20[0];list(,$W19,$S19,$U19)=$x20;return$x19;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionFunction(JS::toString($_name,$global));$fn->call=\'JSWrappedFunction\';$fn->parameters=array();foreach($reflection->getParameters()as$p){$fn->parameters[]=$p->getName();}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x21,$W21,$S21,$U21);$x22=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedFns\',31,7,\'<image>/14_php.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;if($x21===JS::$undefined||$x21===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,(string)\'TypeError\',31,25,\'<image>/14_php.js\');$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x25=$x24($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'&&!isset($x25->properties[\'file\'])&&!isset($x25->properties[\'line\'])&&!isset($x25->properties[\'column\'])){$x25->properties[\'file\']=\'<image>/14_php.js\';$x25->properties[\'line\']=31;$x25->properties[\'column\']=25;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,31,25,\'<image>/14_php.js\');}$x21=JS::toObject($x21,$global);unset($x26,$W26,$S26,$U26);$x30=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x21,(string)$_name,31,25,\'<image>/14_php.js\');$x26=&$x30[0];list(,$W26,$S26,$U26)=$x30;if($U26&&(!isset($x21->extensible)||$x21->extensible)){$x21->properties[$_name]=$x26;$x26=&$x21->properties[$_name];$x21->attributes[$_name]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U26=FALSE;$W26=TRUE;}if(isset($S26)){$x32=$S26->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x33=$x32($global,$x21,$S26,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x31=$x33;}else{if(!$U26){$x31=$fn;if($W26){$x26=$fn;}}else{$x31=JS::$undefined;}}if(isset($x21->class)&&$x21->class===\'Array\'&&is_int($_name)&&$_name>=$x21->properties[\'length\']){$x21->properties[\'length\']=$_name+1;}return$fn;return JS::$undefined;}', "\n";
function _b460327d79aaf3a14905dfba16253ced_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x36 =& $scope->properties['arguments'];
$x36->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x36->properties[$i] = $args[$i];
$x36->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['name'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_name =& $scope->properties['name'];
$Uname = FALSE;
$scope->properties['cls'] = $fn;
$_cls =& $scope->properties['cls'];
$global->scope[++$global->scope_sp] = $scope;
unset($x38, $W38, $S38, $U38);
$x39 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedClasses', 37, 11, '<image>/14_php.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
unset($x40, $W40, $S40, $U40);
$x41 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x38, (string) $_name, 37, 26, '<image>/14_php.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
$x37 = !(((gettype($x40) === gettype(JS::$undefined) && $x40 === JS::$undefined))|| (((is_float($x40) || is_int($x40)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x40 == JS::$undefined));
if (JS::toBoolean($x37, $global)) {
unset($x42, $W42, $S42, $U42);
$x43 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedClasses', 38, 15, '<image>/14_php.js');
$x42 =& $x43[0]; list(,$W42,$S42,$U42) = $x43;
unset($x44, $W44, $S44, $U44);
$x45 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x42, (string) $_name, 38, 30, '<image>/14_php.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
return $x44;;
};
$fn = clone JS::$functionTemplate;
			$reflection = new ReflectionClass(JS::toString($_name, $global));

			$fn->call = 'JSWrappedConstructor';

			$fn->parameters = array();
			if (($ctor = $reflection->getConstructor()) !== NULL) {
				foreach ($ctor->getParameters() as $p) {
					$fn->parameters[] = $p->getName();
				}
			}

			$fn->name = $reflection->getName();

			$fn->properties['prototype'] = clone JS::$objectTemplate;
			$fn->attributes['prototype'] = 0;
			$fn->properties['prototype']->properties['constructor'] = $fn;
			$fn->properties['prototype']->attributes['constructor'] = 0;
			$fn->properties['length'] = count($fn->parameters);
			$fn->attributes['length'] = 0;
unset($x46, $W46, $S46, $U46);
$x47 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, (string) '_cachedClasses', 64, 7, '<image>/14_php.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if ($x46 === JS::$undefined || $x46 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, (string) 'TypeError', 64, 29, '<image>/14_php.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x50 = $x49($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error' && !isset($x50->properties['file']) && !isset($x50->properties['line']) && !isset($x50->properties['column'])) {$x50->properties['file'] = '<image>/14_php.js';$x50->properties['line'] = 64;$x50->properties['column'] = 29;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 64, 29, '<image>/14_php.js');
}
$x46 = JS::toObject($x46, $global);
unset($x51, $W51, $S51, $U51);
$x52 = _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $x46, (string) $_name, 64, 29, '<image>/14_php.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($U51 && (!isset($x46->extensible) || $x46->extensible)) {$x46->properties[$_name] = $x51; $x51 =& $x46->properties[$_name]; $x46->attributes[$_name] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U51 = FALSE; $W51 = TRUE; }
if (isset($S51)) {
$x54 = $S51->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x55 = $x54($global, $x46, $S51, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x55;
} else {
if (!$U51) {$x53 = $fn;if ($W51) { $x51 = $fn; }  }
else { $x53 = JS::$undefined; }
}
if (isset($x46->class) && $x46->class === 'Array' &&  is_int($_name) && $_name >= $x46->properties['length']) { $x46->properties['length'] = $_name + 1; };
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x36=&$scope->properties[\'arguments\'];$x36->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x36->properties[$i]=$args[$i];$x36->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'cls\']=$fn;$_cls=&$scope->properties[\'cls\'];$global->scope[++$global->scope_sp]=$scope;unset($x38,$W38,$S38,$U38);$x39=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedClasses\',37,11,\'<image>/14_php.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;unset($x40,$W40,$S40,$U40);$x41=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x38,(string)$_name,37,26,\'<image>/14_php.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;$x37=!(((gettype($x40)===gettype(JS::$undefined)&&$x40===JS::$undefined))||(((is_float($x40)||is_int($x40))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x40==JS::$undefined));if(JS::toBoolean($x37,$global)){unset($x42,$W42,$S42,$U42);$x43=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedClasses\',38,15,\'<image>/14_php.js\');$x42=&$x43[0];list(,$W42,$S42,$U42)=$x43;unset($x44,$W44,$S44,$U44);$x45=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x42,(string)$_name,38,30,\'<image>/14_php.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;return$x44;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionClass(JS::toString($_name,$global));$fn->call=\'JSWrappedConstructor\';$fn->parameters=array();if(($ctor=$reflection->getConstructor())!==NULL){foreach($ctor->getParameters()as$p){$fn->parameters[]=$p->getName();}}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x46,$W46,$S46,$U46);$x47=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,(string)\'_cachedClasses\',64,7,\'<image>/14_php.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if($x46===JS::$undefined||$x46===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,(string)\'TypeError\',64,29,\'<image>/14_php.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x50=$x49($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'&&!isset($x50->properties[\'file\'])&&!isset($x50->properties[\'line\'])&&!isset($x50->properties[\'column\'])){$x50->properties[\'file\']=\'<image>/14_php.js\';$x50->properties[\'line\']=64;$x50->properties[\'column\']=29;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,64,29,\'<image>/14_php.js\');}$x46=JS::toObject($x46,$global);unset($x51,$W51,$S51,$U51);$x52=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x46,(string)$_name,64,29,\'<image>/14_php.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if($U51&&(!isset($x46->extensible)||$x46->extensible)){$x46->properties[$_name]=$x51;$x51=&$x46->properties[$_name];$x46->attributes[$_name]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U51=FALSE;$W51=TRUE;}if(isset($S51)){$x54=$S51->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x55=$x54($global,$x46,$S51,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x53=$x55;}else{if(!$U51){$x53=$fn;if($W51){$x51=$fn;}}else{$x53=JS::$undefined;}}if(isset($x46->class)&&$x46->class===\'Array\'&&is_int($_name)&&$_name>=$x46->properties[\'length\']){$x46->properties[\'length\']=$_name+1;}return$fn;return JS::$undefined;}', "\n";
function _b460327d79aaf3a14905dfba16253ced_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/14_php.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/14_php.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x0->properties['_cachedFns'] = $x1;
$x0->attributes['_cachedFns'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x2 = clone JS::$objectTemplate;
$x0->properties['_cachedClasses'] = $x2;
$x0->attributes['_cachedClasses'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x34 = clone JS::$functionTemplate; $x34->call = '_b460327d79aaf3a14905dfba16253ced_1'; $x34->parameters = array (
  0 => 'name',
); $x34->name = 'fn'; $x34->scope = $scope; $x34->properties['prototype'] = clone JS::$objectTemplate; $x34->attributes['prototype'] = JS::WRITABLE; $x34->properties['prototype']->properties['constructor'] = $x34; $x34->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x34->properties['length'] = 1; $x34->attributes['length'] = 0;
$x0->properties['fn'] = $x34;
$x0->attributes['fn'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x56 = clone JS::$functionTemplate; $x56->call = '_b460327d79aaf3a14905dfba16253ced_5'; $x56->parameters = array (
  0 => 'name',
); $x56->name = 'cls'; $x56->scope = $scope; $x56->properties['prototype'] = clone JS::$objectTemplate; $x56->attributes['prototype'] = JS::WRITABLE; $x56->properties['prototype']->properties['constructor'] = $x56; $x56->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x56->properties['length'] = 1; $x56->attributes['length'] = 0;
$x0->properties['cls'] = $x56;
$x0->attributes['cls'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['PHP'] = JS::$undefined; $_PHP =& $scope->properties['PHP'];
$UPHP = FALSE;
$_PHP = $x0;
$_PHP->attributes['_cachedFns'] &= ~JS::ENUMERABLE;$_PHP->attributes['_cachedClasses'] &= ~JS::ENUMERABLE;$_PHP->attributes['fn'] &= ~JS::ENUMERABLE;$_PHP->attributes['cls'] &= ~JS::ENUMERABLE;
;
return JS::$undefined;
}
