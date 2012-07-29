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
$x9 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _b460327d79aaf3a14905dfba16253ced_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x9=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x9[0];list(,$WTypeError,$STypeError,$UTypeError)=$x9;$x10=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x11=$x10($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x11->class)&&$x11->class===\'Error\'&&!isset($x11->properties[\'file\'])&&!isset($x11->properties[\'line\'])&&!isset($x11->properties[\'column\'])){$x11->properties[\'file\']=$file;$x11->properties[\'line\']=$line;$x11->properties[\'column\']=$column;$x11->attributes[\'file\']=$x11->attributes[\'line\']=$x11->attributes[\'column\']=0;}throw new JSException($x11,$line,$column,$file);}$W6=$S6=$U6=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x6=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x12=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x6=$x13;}else{$x6=JS::$undefined;$U6=TRUE;}return array(&$x6,$W6,$S6,$U6);}', "\n";
function _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x28 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x28[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x28;
$x29 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x30 = $x29($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x30->class) && $x30->class === 'Error' && !isset($x30->properties['file']) && !isset($x30->properties['line']) && !isset($x30->properties['column'])) {$x30->properties['file'] = $file;$x30->properties['line'] = $line;$x30->properties['column'] = $column;$x30->attributes['file'] = $x30->attributes['line'] = $x30->attributes['column'] = 0; }
throw new JSException($x30, $line, $column, $file);
}
$W27 = $S27 = $U27 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x27 =& $lookup->properties[$id]; $W27 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S27 = $lookup->setters[$id]; }
else { $x27 = JS::$undefined; $U27 = TRUE; }
return array(&$x27, $W27, $S27, $U27);
}
echo 'function _b460327d79aaf3a14905dfba16253ced_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x28=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x28[0];list(,$WTypeError,$STypeError,$UTypeError)=$x28;$x29=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x30=$x29($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x30->class)&&$x30->class===\'Error\'&&!isset($x30->properties[\'file\'])&&!isset($x30->properties[\'line\'])&&!isset($x30->properties[\'column\'])){$x30->properties[\'file\']=$file;$x30->properties[\'line\']=$line;$x30->properties[\'column\']=$column;$x30->attributes[\'file\']=$x30->attributes[\'line\']=$x30->attributes[\'column\']=0;}throw new JSException($x30,$line,$column,$file);}$W27=$S27=$U27=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x27=&$lookup->properties[$id];$W27=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S27=$lookup->setters[$id];}else{$x27=JS::$undefined;$U27=TRUE;}return array(&$x27,$W27,$S27,$U27);}', "\n";
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
$x14 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedFns', $global), 6, 11, '<image>/14_php.js');
$x6 =& $x14[0]; list(,$W6,$S6,$U6) = $x14;
unset($x15, $W15, $S15, $U15);
$x16 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x6, JS::toString($_name, $global), 6, 22, '<image>/14_php.js');
$x15 =& $x16[0]; list(,$W15,$S15,$U15) = $x16;
$x5 = !(((gettype($x15) === gettype(JS::$undefined) && $x15 === JS::$undefined))|| (((is_float($x15) || is_int($x15)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x15 == JS::$undefined));
if (JS::toBoolean($x5, $global)) {
unset($x17, $W17, $S17, $U17);
$x18 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedFns', $global), 7, 15, '<image>/14_php.js');
$x17 =& $x18[0]; list(,$W17,$S17,$U17) = $x18;
unset($x19, $W19, $S19, $U19);
$x20 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x17, JS::toString($_name, $global), 7, 26, '<image>/14_php.js');
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
$x22 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedFns', $global), 31, 7, '<image>/14_php.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
$x23 = JS::toString($_name, $global);
if ($x21 === JS::$undefined || $x21 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x24 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 25, '<image>/14_php.js');
$_TypeError =& $x24[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x24;
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 31, 25);
$x26 = $x25($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error' && !isset($x26->properties['file']) && !isset($x26->properties['line']) && !isset($x26->properties['column'])) {$x26->properties['file'] = '<image>/14_php.js';$x26->properties['line'] = 31;$x26->properties['column'] = 25;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, 31, 25, '<image>/14_php.js');
}
$x21 = JS::toObject($x21, $global);
unset($x27, $W27, $S27, $U27);
$x31 = _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $x21, JS::toString($x23, $global), 31, 25, '<image>/14_php.js');
$x27 =& $x31[0]; list(,$W27,$S27,$U27) = $x31;
if ($U27 && (!isset($x21->extensible) || $x21->extensible)) {$x21->properties[$x23] = $x27; $x27 =& $x21->properties[$x23]; $x21->attributes[$x23] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U27 = FALSE; $W27 = TRUE; }
if (isset($S27)) {
$x33 = $S27->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 31, 25);
$x34 = $x33($global, $x21, $S27, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x32 = $x34;
} else {
if (!$U27) {$x32 = $fn;if ($W27) { $x27 = $fn; }  }
else { $x32 = JS::$undefined; }
}
if (isset($x21->class) && $x21->class === 'Array' &&  is_int($_name) && $_name >= $x21->properties['length']) { $x21->properties['length'] = $_name + 1; };
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x4=&$scope->properties[\'arguments\'];$x4->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x4->properties[$i]=$args[$i];$x4->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'fn\']=$fn;$_fn=&$scope->properties[\'fn\'];$global->scope[++$global->scope_sp]=$scope;unset($x6,$W6,$S6,$U6);$x14=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),6,11,\'<image>/14_php.js\');$x6=&$x14[0];list(,$W6,$S6,$U6)=$x14;unset($x15,$W15,$S15,$U15);$x16=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x6,JS::toString($_name,$global),6,22,\'<image>/14_php.js\');$x15=&$x16[0];list(,$W15,$S15,$U15)=$x16;$x5=!(((gettype($x15)===gettype(JS::$undefined)&&$x15===JS::$undefined))||(((is_float($x15)||is_int($x15))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x15==JS::$undefined));if(JS::toBoolean($x5,$global)){unset($x17,$W17,$S17,$U17);$x18=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),7,15,\'<image>/14_php.js\');$x17=&$x18[0];list(,$W17,$S17,$U17)=$x18;unset($x19,$W19,$S19,$U19);$x20=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x17,JS::toString($_name,$global),7,26,\'<image>/14_php.js\');$x19=&$x20[0];list(,$W19,$S19,$U19)=$x20;return$x19;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionFunction(JS::toString($_name,$global));$fn->call=\'JSWrappedFunction\';$fn->parameters=array();foreach($reflection->getParameters()as$p){$fn->parameters[]=$p->getName();}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x21,$W21,$S21,$U21);$x22=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),31,7,\'<image>/14_php.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x23=JS::toString($_name,$global);if($x21===JS::$undefined||$x21===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x24=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,25,\'<image>/14_php.js\');$_TypeError=&$x24[0];list(,$WTypeError,$STypeError,$UTypeError)=$x24;$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x26=$x25($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=\'<image>/14_php.js\';$x26->properties[\'line\']=31;$x26->properties[\'column\']=25;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,31,25,\'<image>/14_php.js\');}$x21=JS::toObject($x21,$global);unset($x27,$W27,$S27,$U27);$x31=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x21,JS::toString($x23,$global),31,25,\'<image>/14_php.js\');$x27=&$x31[0];list(,$W27,$S27,$U27)=$x31;if($U27&&(!isset($x21->extensible)||$x21->extensible)){$x21->properties[$x23]=$x27;$x27=&$x21->properties[$x23];$x21->attributes[$x23]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U27=FALSE;$W27=TRUE;}if(isset($S27)){$x33=$S27->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x34=$x33($global,$x21,$S27,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x32=$x34;}else{if(!$U27){$x32=$fn;if($W27){$x27=$fn;}}else{$x32=JS::$undefined;}}if(isset($x21->class)&&$x21->class===\'Array\'&&is_int($_name)&&$_name>=$x21->properties[\'length\']){$x21->properties[\'length\']=$_name+1;}return$fn;return JS::$undefined;}', "\n";
function _b460327d79aaf3a14905dfba16253ced_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x37 =& $scope->properties['arguments'];
$x37->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x37->properties[$i] = $args[$i];
$x37->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['name'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_name =& $scope->properties['name'];
$Uname = FALSE;
$scope->properties['cls'] = $fn;
$_cls =& $scope->properties['cls'];
$global->scope[++$global->scope_sp] = $scope;
unset($x39, $W39, $S39, $U39);
$x40 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 37, 11, '<image>/14_php.js');
$x39 =& $x40[0]; list(,$W39,$S39,$U39) = $x40;
unset($x41, $W41, $S41, $U41);
$x42 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x39, JS::toString($_name, $global), 37, 26, '<image>/14_php.js');
$x41 =& $x42[0]; list(,$W41,$S41,$U41) = $x42;
$x38 = !(((gettype($x41) === gettype(JS::$undefined) && $x41 === JS::$undefined))|| (((is_float($x41) || is_int($x41)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x41 == JS::$undefined));
if (JS::toBoolean($x38, $global)) {
unset($x43, $W43, $S43, $U43);
$x44 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 38, 15, '<image>/14_php.js');
$x43 =& $x44[0]; list(,$W43,$S43,$U43) = $x44;
unset($x45, $W45, $S45, $U45);
$x46 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x43, JS::toString($_name, $global), 38, 30, '<image>/14_php.js');
$x45 =& $x46[0]; list(,$W45,$S45,$U45) = $x46;
return $x45;;
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
unset($x47, $W47, $S47, $U47);
$x48 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 64, 7, '<image>/14_php.js');
$x47 =& $x48[0]; list(,$W47,$S47,$U47) = $x48;
$x49 = JS::toString($_name, $global);
if ($x47 === JS::$undefined || $x47 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 29, '<image>/14_php.js');
$_TypeError =& $x50[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x50;
$x51 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x52 = $x51($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x52->class) && $x52->class === 'Error' && !isset($x52->properties['file']) && !isset($x52->properties['line']) && !isset($x52->properties['column'])) {$x52->properties['file'] = '<image>/14_php.js';$x52->properties['line'] = 64;$x52->properties['column'] = 29;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
throw new JSException($x52, 64, 29, '<image>/14_php.js');
}
$x47 = JS::toObject($x47, $global);
unset($x53, $W53, $S53, $U53);
$x54 = _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $x47, JS::toString($x49, $global), 64, 29, '<image>/14_php.js');
$x53 =& $x54[0]; list(,$W53,$S53,$U53) = $x54;
if ($U53 && (!isset($x47->extensible) || $x47->extensible)) {$x47->properties[$x49] = $x53; $x53 =& $x47->properties[$x49]; $x47->attributes[$x49] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U53 = FALSE; $W53 = TRUE; }
if (isset($S53)) {
$x56 = $S53->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x57 = $x56($global, $x47, $S53, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x55 = $x57;
} else {
if (!$U53) {$x55 = $fn;if ($W53) { $x53 = $fn; }  }
else { $x55 = JS::$undefined; }
}
if (isset($x47->class) && $x47->class === 'Array' &&  is_int($_name) && $_name >= $x47->properties['length']) { $x47->properties['length'] = $_name + 1; };
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x37=&$scope->properties[\'arguments\'];$x37->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x37->properties[$i]=$args[$i];$x37->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'cls\']=$fn;$_cls=&$scope->properties[\'cls\'];$global->scope[++$global->scope_sp]=$scope;unset($x39,$W39,$S39,$U39);$x40=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),37,11,\'<image>/14_php.js\');$x39=&$x40[0];list(,$W39,$S39,$U39)=$x40;unset($x41,$W41,$S41,$U41);$x42=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x39,JS::toString($_name,$global),37,26,\'<image>/14_php.js\');$x41=&$x42[0];list(,$W41,$S41,$U41)=$x42;$x38=!(((gettype($x41)===gettype(JS::$undefined)&&$x41===JS::$undefined))||(((is_float($x41)||is_int($x41))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x41==JS::$undefined));if(JS::toBoolean($x38,$global)){unset($x43,$W43,$S43,$U43);$x44=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),38,15,\'<image>/14_php.js\');$x43=&$x44[0];list(,$W43,$S43,$U43)=$x44;unset($x45,$W45,$S45,$U45);$x46=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x43,JS::toString($_name,$global),38,30,\'<image>/14_php.js\');$x45=&$x46[0];list(,$W45,$S45,$U45)=$x46;return$x45;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionClass(JS::toString($_name,$global));$fn->call=\'JSWrappedConstructor\';$fn->parameters=array();if(($ctor=$reflection->getConstructor())!==NULL){foreach($ctor->getParameters()as$p){$fn->parameters[]=$p->getName();}}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x47,$W47,$S47,$U47);$x48=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),64,7,\'<image>/14_php.js\');$x47=&$x48[0];list(,$W47,$S47,$U47)=$x48;$x49=JS::toString($_name,$global);if($x47===JS::$undefined||$x47===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,29,\'<image>/14_php.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x52=$x51($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'&&!isset($x52->properties[\'file\'])&&!isset($x52->properties[\'line\'])&&!isset($x52->properties[\'column\'])){$x52->properties[\'file\']=\'<image>/14_php.js\';$x52->properties[\'line\']=64;$x52->properties[\'column\']=29;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,64,29,\'<image>/14_php.js\');}$x47=JS::toObject($x47,$global);unset($x53,$W53,$S53,$U53);$x54=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x47,JS::toString($x49,$global),64,29,\'<image>/14_php.js\');$x53=&$x54[0];list(,$W53,$S53,$U53)=$x54;if($U53&&(!isset($x47->extensible)||$x47->extensible)){$x47->properties[$x49]=$x53;$x53=&$x47->properties[$x49];$x47->attributes[$x49]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U53=FALSE;$W53=TRUE;}if(isset($S53)){$x56=$S53->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x57=$x56($global,$x47,$S53,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x55=$x57;}else{if(!$U53){$x55=$fn;if($W53){$x53=$fn;}}else{$x55=JS::$undefined;}}if(isset($x47->class)&&$x47->class===\'Array\'&&is_int($_name)&&$_name>=$x47->properties[\'length\']){$x47->properties[\'length\']=$_name+1;}return$fn;return JS::$undefined;}', "\n";
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
$x35 = clone JS::$functionTemplate; $x35->call = '_b460327d79aaf3a14905dfba16253ced_1'; $x35->parameters = array (
  0 => 'name',
); $x35->name = 'fn'; $x35->scope = $scope; $x35->properties['prototype'] = clone JS::$objectTemplate; $x35->attributes['prototype'] = JS::WRITABLE; $x35->properties['prototype']->properties['constructor'] = $x35; $x35->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x35->properties['length'] = 1; $x35->attributes['length'] = 0;
$x0->properties['fn'] = $x35;
$x0->attributes['fn'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x58 = clone JS::$functionTemplate; $x58->call = '_b460327d79aaf3a14905dfba16253ced_5'; $x58->parameters = array (
  0 => 'name',
); $x58->name = 'cls'; $x58->scope = $scope; $x58->properties['prototype'] = clone JS::$objectTemplate; $x58->attributes['prototype'] = JS::WRITABLE; $x58->properties['prototype']->properties['constructor'] = $x58; $x58->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x58->properties['length'] = 1; $x58->attributes['length'] = 0;
$x0->properties['cls'] = $x58;
$x0->attributes['cls'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['PHP'] = JS::$undefined; $_PHP =& $scope->properties['PHP'];
$UPHP = FALSE;
$_PHP = $x0;
$_PHP->attributes['_cachedFns'] &= ~JS::ENUMERABLE;$_PHP->attributes['_cachedClasses'] &= ~JS::ENUMERABLE;$_PHP->attributes['fn'] &= ~JS::ENUMERABLE;$_PHP->attributes['cls'] &= ~JS::ENUMERABLE;
;
return JS::$undefined;
}
