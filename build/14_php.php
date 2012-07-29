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
if (isset($x21->class) && $x21->class === 'Array') {  if (isset($x21->properties['length']) && $x21->properties['length'] !== JS::$undefined) { $x33 = $x21->properties['length']; }  else { $x33 = 0; } }
if (isset($S27)) {
$x34 = $S27->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 31, 25);
$x35 = $x34($global, $x21, $S27, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x32 = $x35;
} else {
if (!$U27) {$x32 = $fn;if ($W27) { $x27 = $fn; }  }
else { $x32 = JS::$undefined; }
}
if (isset($x21->class) && $x21->class === 'Array') {if (is_int($_name) && $_name >= $x21->properties['length']) { $x21->properties['length'] = $_name + 1; }else if ($x23 === 'length' && is_int($fn) && $x33 > $fn) {  for ($i = $fn; $i < $x33; ++$i) {  unset($x21->properties[$i], $x21->attributes[$i]); }}};
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x4=&$scope->properties[\'arguments\'];$x4->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x4->properties[$i]=$args[$i];$x4->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'fn\']=$fn;$_fn=&$scope->properties[\'fn\'];$global->scope[++$global->scope_sp]=$scope;unset($x6,$W6,$S6,$U6);$x14=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),6,11,\'<image>/14_php.js\');$x6=&$x14[0];list(,$W6,$S6,$U6)=$x14;unset($x15,$W15,$S15,$U15);$x16=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x6,JS::toString($_name,$global),6,22,\'<image>/14_php.js\');$x15=&$x16[0];list(,$W15,$S15,$U15)=$x16;$x5=!(((gettype($x15)===gettype(JS::$undefined)&&$x15===JS::$undefined))||(((is_float($x15)||is_int($x15))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x15==JS::$undefined));if(JS::toBoolean($x5,$global)){unset($x17,$W17,$S17,$U17);$x18=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),7,15,\'<image>/14_php.js\');$x17=&$x18[0];list(,$W17,$S17,$U17)=$x18;unset($x19,$W19,$S19,$U19);$x20=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x17,JS::toString($_name,$global),7,26,\'<image>/14_php.js\');$x19=&$x20[0];list(,$W19,$S19,$U19)=$x20;return$x19;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionFunction(JS::toString($_name,$global));$fn->call=\'JSWrappedFunction\';$fn->parameters=array();foreach($reflection->getParameters()as$p){$fn->parameters[]=$p->getName();}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x21,$W21,$S21,$U21);$x22=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedFns\',$global),31,7,\'<image>/14_php.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x23=JS::toString($_name,$global);if($x21===JS::$undefined||$x21===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x24=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,25,\'<image>/14_php.js\');$_TypeError=&$x24[0];list(,$WTypeError,$STypeError,$UTypeError)=$x24;$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x26=$x25($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=\'<image>/14_php.js\';$x26->properties[\'line\']=31;$x26->properties[\'column\']=25;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,31,25,\'<image>/14_php.js\');}$x21=JS::toObject($x21,$global);unset($x27,$W27,$S27,$U27);$x31=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x21,JS::toString($x23,$global),31,25,\'<image>/14_php.js\');$x27=&$x31[0];list(,$W27,$S27,$U27)=$x31;if($U27&&(!isset($x21->extensible)||$x21->extensible)){$x21->properties[$x23]=$x27;$x27=&$x21->properties[$x23];$x21->attributes[$x23]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U27=FALSE;$W27=TRUE;}if(isset($x21->class)&&$x21->class===\'Array\'){if(isset($x21->properties[\'length\'])&&$x21->properties[\'length\']!==JS::$undefined){$x33=$x21->properties[\'length\'];}else{$x33=0;}}if(isset($S27)){$x34=$S27->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',31,25);$x35=$x34($global,$x21,$S27,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x32=$x35;}else{if(!$U27){$x32=$fn;if($W27){$x27=$fn;}}else{$x32=JS::$undefined;}}if(isset($x21->class)&&$x21->class===\'Array\'){if(is_int($_name)&&$_name>=$x21->properties[\'length\']){$x21->properties[\'length\']=$_name+1;}else if($x23===\'length\'&&is_int($fn)&&$x33>$fn){for($i=$fn;$i<$x33;++$i){unset($x21->properties[$i],$x21->attributes[$i]);}}}return$fn;return JS::$undefined;}', "\n";
function _b460327d79aaf3a14905dfba16253ced_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x38 =& $scope->properties['arguments'];
$x38->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x38->properties[$i] = $args[$i];
$x38->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['name'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_name =& $scope->properties['name'];
$Uname = FALSE;
$scope->properties['cls'] = $fn;
$_cls =& $scope->properties['cls'];
$global->scope[++$global->scope_sp] = $scope;
unset($x40, $W40, $S40, $U40);
$x41 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 37, 11, '<image>/14_php.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
unset($x42, $W42, $S42, $U42);
$x43 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x40, JS::toString($_name, $global), 37, 26, '<image>/14_php.js');
$x42 =& $x43[0]; list(,$W42,$S42,$U42) = $x43;
$x39 = !(((gettype($x42) === gettype(JS::$undefined) && $x42 === JS::$undefined))|| (((is_float($x42) || is_int($x42)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x42 == JS::$undefined));
if (JS::toBoolean($x39, $global)) {
unset($x44, $W44, $S44, $U44);
$x45 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 38, 15, '<image>/14_php.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
unset($x46, $W46, $S46, $U46);
$x47 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $x44, JS::toString($_name, $global), 38, 30, '<image>/14_php.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
return $x46;;
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
unset($x48, $W48, $S48, $U48);
$x49 = _b460327d79aaf3a14905dfba16253ced_2($global, $scope, $leThis, JS::toString('_cachedClasses', $global), 64, 7, '<image>/14_php.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
$x50 = JS::toString($_name, $global);
if ($x48 === JS::$undefined || $x48 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x51 = _b460327d79aaf3a14905dfba16253ced_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 29, '<image>/14_php.js');
$_TypeError =& $x51[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x51;
$x52 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x53 = $x52($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x53->class) && $x53->class === 'Error' && !isset($x53->properties['file']) && !isset($x53->properties['line']) && !isset($x53->properties['column'])) {$x53->properties['file'] = '<image>/14_php.js';$x53->properties['line'] = 64;$x53->properties['column'] = 29;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, 64, 29, '<image>/14_php.js');
}
$x48 = JS::toObject($x48, $global);
unset($x54, $W54, $S54, $U54);
$x55 = _b460327d79aaf3a14905dfba16253ced_4($global, $scope, $x48, JS::toString($x50, $global), 64, 29, '<image>/14_php.js');
$x54 =& $x55[0]; list(,$W54,$S54,$U54) = $x55;
if ($U54 && (!isset($x48->extensible) || $x48->extensible)) {$x48->properties[$x50] = $x54; $x54 =& $x48->properties[$x50]; $x48->attributes[$x50] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U54 = FALSE; $W54 = TRUE; }
if (isset($x48->class) && $x48->class === 'Array') {  if (isset($x48->properties['length']) && $x48->properties['length'] !== JS::$undefined) { $x57 = $x48->properties['length']; }  else { $x57 = 0; } }
if (isset($S54)) {
$x58 = $S54->call;
$global->trace[++$global->trace_sp] = array('<image>/14_php.js', 64, 29);
$x59 = $x58($global, $x48, $S54, array($fn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x56 = $x59;
} else {
if (!$U54) {$x56 = $fn;if ($W54) { $x54 = $fn; }  }
else { $x56 = JS::$undefined; }
}
if (isset($x48->class) && $x48->class === 'Array') {if (is_int($_name) && $_name >= $x48->properties['length']) { $x48->properties['length'] = $_name + 1; }else if ($x50 === 'length' && is_int($fn) && $x57 > $fn) {  for ($i = $fn; $i < $x57; ++$i) {  unset($x48->properties[$i], $x48->attributes[$i]); }}};
return $fn;
;
return JS::$undefined;
}
echo 'function _b460327d79aaf3a14905dfba16253ced_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x38=&$scope->properties[\'arguments\'];$x38->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x38->properties[$i]=$args[$i];$x38->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'name\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$scope->properties[\'cls\']=$fn;$_cls=&$scope->properties[\'cls\'];$global->scope[++$global->scope_sp]=$scope;unset($x40,$W40,$S40,$U40);$x41=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),37,11,\'<image>/14_php.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;unset($x42,$W42,$S42,$U42);$x43=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x40,JS::toString($_name,$global),37,26,\'<image>/14_php.js\');$x42=&$x43[0];list(,$W42,$S42,$U42)=$x43;$x39=!(((gettype($x42)===gettype(JS::$undefined)&&$x42===JS::$undefined))||(((is_float($x42)||is_int($x42))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x42==JS::$undefined));if(JS::toBoolean($x39,$global)){unset($x44,$W44,$S44,$U44);$x45=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),38,15,\'<image>/14_php.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;unset($x46,$W46,$S46,$U46);$x47=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$x44,JS::toString($_name,$global),38,30,\'<image>/14_php.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;return$x46;}$fn=clone JS::$functionTemplate;$reflection=new ReflectionClass(JS::toString($_name,$global));$fn->call=\'JSWrappedConstructor\';$fn->parameters=array();if(($ctor=$reflection->getConstructor())!==NULL){foreach($ctor->getParameters()as$p){$fn->parameters[]=$p->getName();}}$fn->name=$reflection->getName();$fn->properties[\'prototype\']=clone JS::$objectTemplate;$fn->attributes[\'prototype\']=0;$fn->properties[\'prototype\']->properties[\'constructor\']=$fn;$fn->properties[\'prototype\']->attributes[\'constructor\']=0;$fn->properties[\'length\']=count($fn->parameters);$fn->attributes[\'length\']=0;unset($x48,$W48,$S48,$U48);$x49=_b460327d79aaf3a14905dfba16253ced_2($global,$scope,$leThis,JS::toString(\'_cachedClasses\',$global),64,7,\'<image>/14_php.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$x50=JS::toString($_name,$global);if($x48===JS::$undefined||$x48===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x51=_b460327d79aaf3a14905dfba16253ced_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,29,\'<image>/14_php.js\');$_TypeError=&$x51[0];list(,$WTypeError,$STypeError,$UTypeError)=$x51;$x52=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x53=$x52($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x53->class)&&$x53->class===\'Error\'&&!isset($x53->properties[\'file\'])&&!isset($x53->properties[\'line\'])&&!isset($x53->properties[\'column\'])){$x53->properties[\'file\']=\'<image>/14_php.js\';$x53->properties[\'line\']=64;$x53->properties[\'column\']=29;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,64,29,\'<image>/14_php.js\');}$x48=JS::toObject($x48,$global);unset($x54,$W54,$S54,$U54);$x55=_b460327d79aaf3a14905dfba16253ced_4($global,$scope,$x48,JS::toString($x50,$global),64,29,\'<image>/14_php.js\');$x54=&$x55[0];list(,$W54,$S54,$U54)=$x55;if($U54&&(!isset($x48->extensible)||$x48->extensible)){$x48->properties[$x50]=$x54;$x54=&$x48->properties[$x50];$x48->attributes[$x50]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U54=FALSE;$W54=TRUE;}if(isset($x48->class)&&$x48->class===\'Array\'){if(isset($x48->properties[\'length\'])&&$x48->properties[\'length\']!==JS::$undefined){$x57=$x48->properties[\'length\'];}else{$x57=0;}}if(isset($S54)){$x58=$S54->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_php.js\',64,29);$x59=$x58($global,$x48,$S54,array($fn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x56=$x59;}else{if(!$U54){$x56=$fn;if($W54){$x54=$fn;}}else{$x56=JS::$undefined;}}if(isset($x48->class)&&$x48->class===\'Array\'){if(is_int($_name)&&$_name>=$x48->properties[\'length\']){$x48->properties[\'length\']=$_name+1;}else if($x50===\'length\'&&is_int($fn)&&$x57>$fn){for($i=$fn;$i<$x57;++$i){unset($x48->properties[$i],$x48->attributes[$i]);}}}return$fn;return JS::$undefined;}', "\n";
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
$x36 = clone JS::$functionTemplate; $x36->call = '_b460327d79aaf3a14905dfba16253ced_1'; $x36->parameters = array (
  0 => 'name',
); $x36->name = 'fn'; $x36->scope = $scope; $x36->properties['prototype'] = clone JS::$objectTemplate; $x36->attributes['prototype'] = JS::WRITABLE; $x36->properties['prototype']->properties['constructor'] = $x36; $x36->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x36->properties['length'] = 1; $x36->attributes['length'] = 0;
$x0->properties['fn'] = $x36;
$x0->attributes['fn'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x60 = clone JS::$functionTemplate; $x60->call = '_b460327d79aaf3a14905dfba16253ced_5'; $x60->parameters = array (
  0 => 'name',
); $x60->name = 'cls'; $x60->scope = $scope; $x60->properties['prototype'] = clone JS::$objectTemplate; $x60->attributes['prototype'] = JS::WRITABLE; $x60->properties['prototype']->properties['constructor'] = $x60; $x60->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x60->properties['length'] = 1; $x60->attributes['length'] = 0;
$x0->properties['cls'] = $x60;
$x0->attributes['cls'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['PHP'] = JS::$undefined; $_PHP =& $scope->properties['PHP'];
$UPHP = FALSE;
$_PHP = $x0;
$_PHP->attributes['_cachedFns'] &= ~JS::ENUMERABLE;$_PHP->attributes['_cachedClasses'] &= ~JS::ENUMERABLE;$_PHP->attributes['fn'] &= ~JS::ENUMERABLE;$_PHP->attributes['cls'] &= ~JS::ENUMERABLE;
;
return JS::$undefined;
}
