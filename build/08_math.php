function _420026a1fb085c6053dae1bd17e9a63a_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x2 =& $scope->properties['arguments'];
$x2->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x2->properties[$i] = $args[$i];
$x2->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return abs(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return abs(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x5 =& $scope->properties['arguments'];
$x5->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x5->properties[$i] = $args[$i];
$x5->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return acos(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x5=&$scope->properties[\'arguments\'];$x5->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x5->properties[$i]=$args[$i];$x5->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return acos(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_3($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x8 =& $scope->properties['arguments'];
$x8->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x8->properties[$i] = $args[$i];
$x8->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return asin(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_3($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x8=&$scope->properties[\'arguments\'];$x8->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x8->properties[$i]=$args[$i];$x8->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return asin(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x11 =& $scope->properties['arguments'];
$x11->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x11->properties[$i] = $args[$i];
$x11->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return atan(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x11=&$scope->properties[\'arguments\'];$x11->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x11->properties[$i]=$args[$i];$x11->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return atan(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x14 =& $scope->properties['arguments'];
$x14->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x14->properties[$i] = $args[$i];
$x14->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return atan2(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x14=&$scope->properties[\'arguments\'];$x14->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x14->properties[$i]=$args[$i];$x14->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return atan2(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x17 =& $scope->properties['arguments'];
$x17->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x17->properties[$i] = $args[$i];
$x17->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return ceil(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x17=&$scope->properties[\'arguments\'];$x17->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x17->properties[$i]=$args[$i];$x17->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return ceil(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x20 =& $scope->properties['arguments'];
$x20->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x20->properties[$i] = $args[$i];
$x20->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return cos(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x20=&$scope->properties[\'arguments\'];$x20->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x20->properties[$i]=$args[$i];$x20->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return cos(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x23 =& $scope->properties['arguments'];
$x23->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x23->properties[$i] = $args[$i];
$x23->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return exp(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x23=&$scope->properties[\'arguments\'];$x23->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x23->properties[$i]=$args[$i];$x23->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return exp(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x26 =& $scope->properties['arguments'];
$x26->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x26->properties[$i] = $args[$i];
$x26->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return floor(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x26=&$scope->properties[\'arguments\'];$x26->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x26->properties[$i]=$args[$i];$x26->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return floor(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x29 =& $scope->properties['arguments'];
$x29->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x29->properties[$i] = $args[$i];
$x29->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return log(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x29=&$scope->properties[\'arguments\'];$x29->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x29->properties[$i]=$args[$i];$x29->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return log(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x34 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x35 = $x34($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x35; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x34=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x35=$x34($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x35;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x41 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x41[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x41;
$x42 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x43 = $x42($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error') {$x43->properties['file'] = $file;$x43->properties['line'] = $line;$x43->properties['column'] = $column;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, $line, $column, $file);
}
$W40 = $S40 = $U40 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x40 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x44 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x45 = $x44($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x40 = $x45; }
else { $x40 = JS::$undefined; $U40 = TRUE; }
return array(&$x40, $W40, $S40, $U40);
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x41=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x41[0];list(,$WTypeError,$STypeError,$UTypeError)=$x41;$x42=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x43=$x42($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x43->class)&&$x43->class===\'Error\'){$x43->properties[\'file\']=$file;$x43->properties[\'line\']=$line;$x43->properties[\'column\']=$column;$x43->attributes[\'file\']=$x43->attributes[\'line\']=$x43->attributes[\'column\']=0;}throw new JSException($x43,$line,$column,$file);}$W40=$S40=$U40=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x40=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x44=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x45=$x44($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x40=$x45;}else{$x40=JS::$undefined;$U40=TRUE;}return array(&$x40,$W40,$S40,$U40);}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_11($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x33 = 0;; ++$x33) {
if ($x33 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x32 =& $scope->properties['arguments'];
$x32->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x32->properties[$i] = $args[$i];
$x32->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x36 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'arguments', 52, 23, '<image>/08_math.js');
$_arguments =& $x36[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x36;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x37 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 52, 23, '<image>/08_math.js');
$_ReferenceError =& $x37[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x37;
$x38 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 52, 23);
$x39 = $x38($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error') {$x39->properties['file'] = '<image>/08_math.js';$x39->properties['line'] = 52;$x39->properties['column'] = 23;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, 52, 23, '<image>/08_math.js');
}
unset($x40, $W40, $S40, $U40);
$x46 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) 'length', 52, 32, '<image>/08_math.js');
$x40 =& $x46[0]; list(,$W40,$S40,$U40) = $x46;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x40;
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x47 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'Infinity', 52, 48, '<image>/08_math.js');
$_Infinity =& $x47[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x47;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x48 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 52, 48, '<image>/08_math.js');
$_ReferenceError =& $x48[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x48;
$x49 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 52, 48);
$x50 = $x49($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error') {$x50->properties['file'] = '<image>/08_math.js';$x50->properties['line'] = 52;$x50->properties['column'] = 48;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 52, 48, '<image>/08_math.js');
}
$scope->properties['max'] = JS::$undefined; $_max =& $scope->properties['max'];
$Umax = FALSE;
$_max = (-1.0 * JS::toNumber($_Infinity, $global));
}
if ($x33 !== 0) {
$x51 = ++$_i;
}
$x52 = JS::toPrimitive($_i, $global);
$x53 = JS::toPrimitive($_l, $global);
$x54 = (is_string($x52) && is_string($x53) ? strcmp($x52, $x53) < 0 : (!is_nan($x55 = JS::toNumber($x52, $global)) && !is_nan($x56 = JS::toNumber($x53, $global)) && $x55 < $x56));
if (!JS::toBoolean($x54, $global)) { break; }

unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x57 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'isNaN', 53, 8, '<image>/08_math.js');
$_isNaN =& $x57[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x57;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 53, 8, '<image>/08_math.js');
$_ReferenceError =& $x58[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x58;
$x59 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 53, 8);
$x60 = $x59($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/08_math.js';$x60->properties['line'] = 53;$x60->properties['column'] = 8;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 53, 8, '<image>/08_math.js');
}
unset($x61, $W61, $S61, $U61);
$x62 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 53, 23, '<image>/08_math.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x65 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'TypeError', 53, 13, '<image>/08_math.js');
$_TypeError =& $x65[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x65;
$x66 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 53, 13);
$x67 = $x66($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x67->class) && $x67->class === 'Error') {$x67->properties['file'] = '<image>/08_math.js';$x67->properties['line'] = 53;$x67->properties['column'] = 13;$x67->attributes['file'] = $x67->attributes['line'] = $x67->attributes['column'] = 0; }
throw new JSException($x67, 53, 13, '<image>/08_math.js');
}
$x63 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 53, 13);
$x64 = $x63($global, $global, $_isNaN, array($x61), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x64, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x68 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'NaN', 54, 12, '<image>/08_math.js');
$_NaN =& $x68[0]; list(,$WNaN,$SNaN,$UNaN) = $x68;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x69 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 54, 12, '<image>/08_math.js');
$_ReferenceError =& $x69[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x69;
$x70 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 54, 12);
$x71 = $x70($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x71->class) && $x71->class === 'Error') {$x71->properties['file'] = '<image>/08_math.js';$x71->properties['line'] = 54;$x71->properties['column'] = 12;$x71->attributes['file'] = $x71->attributes['line'] = $x71->attributes['column'] = 0; }
throw new JSException($x71, 54, 12, '<image>/08_math.js');
}
return $_NaN;;
};
unset($x75, $W75, $S75, $U75);
$x76 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 57, 17, '<image>/08_math.js');
$x75 =& $x76[0]; list(,$W75,$S75,$U75) = $x76;
$x72 = JS::toPrimitive($x75, $global);
$x73 = JS::toPrimitive($_max, $global);
$x74 = (is_string($x73) && is_string($x72) ? strcmp($x73, $x72) < 0 : (!is_nan($x77 = JS::toNumber($x73, $global)) && !is_nan($x78 = JS::toNumber($x72, $global)) && $x77 < $x78));
if (JS::toBoolean($x74, $global)) {
unset($x79, $W79, $S79, $U79);
$x80 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 58, 20, '<image>/08_math.js');
$x79 =& $x80[0]; list(,$W79,$S79,$U79) = $x80;
if ($Umax) {$global->properties['max'] = $_max; $_max =& $global->properties['max']; }
$_max = $x79;;
};;
};
return $_max;
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_11($global,$leThis,$fn,$args,$constructor=FALSE){for($x33=0;;++$x33){if($x33===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x32=&$scope->properties[\'arguments\'];$x32->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x32->properties[$i]=$args[$i];$x32->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x36=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'arguments\',52,23,\'<image>/08_math.js\');$_arguments=&$x36[0];list(,$Warguments,$Sarguments,$Uarguments)=$x36;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x37=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',52,23,\'<image>/08_math.js\');$_ReferenceError=&$x37[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x37;$x38=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',52,23);$x39=$x38($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'){$x39->properties[\'file\']=\'<image>/08_math.js\';$x39->properties[\'line\']=52;$x39->properties[\'column\']=23;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,52,23,\'<image>/08_math.js\');}unset($x40,$W40,$S40,$U40);$x46=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)\'length\',52,32,\'<image>/08_math.js\');$x40=&$x46[0];list(,$W40,$S40,$U40)=$x46;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x40;unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x47=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'Infinity\',52,48,\'<image>/08_math.js\');$_Infinity=&$x47[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x47;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x48=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',52,48,\'<image>/08_math.js\');$_ReferenceError=&$x48[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x48;$x49=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',52,48);$x50=$x49($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'){$x50->properties[\'file\']=\'<image>/08_math.js\';$x50->properties[\'line\']=52;$x50->properties[\'column\']=48;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,52,48,\'<image>/08_math.js\');}$scope->properties[\'max\']=JS::$undefined;$_max=&$scope->properties[\'max\'];$Umax=FALSE;$_max=(-1.0*JS::toNumber($_Infinity,$global));}if($x33!==0){$x51=++$_i;}$x52=JS::toPrimitive($_i,$global);$x53=JS::toPrimitive($_l,$global);$x54=(is_string($x52)&&is_string($x53)?strcmp($x52,$x53)<0:(!is_nan($x55=JS::toNumber($x52,$global))&&!is_nan($x56=JS::toNumber($x53,$global))&&$x55<$x56));if(!JS::toBoolean($x54,$global)){break;}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x57=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'isNaN\',53,8,\'<image>/08_math.js\');$_isNaN=&$x57[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x57;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x58=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',53,8,\'<image>/08_math.js\');$_ReferenceError=&$x58[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x58;$x59=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',53,8);$x60=$x59($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/08_math.js\';$x60->properties[\'line\']=53;$x60->properties[\'column\']=8;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,53,8,\'<image>/08_math.js\');}unset($x61,$W61,$S61,$U61);$x62=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,53,23,\'<image>/08_math.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x65=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'TypeError\',53,13,\'<image>/08_math.js\');$_TypeError=&$x65[0];list(,$WTypeError,$STypeError,$UTypeError)=$x65;$x66=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',53,13);$x67=$x66($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'){$x67->properties[\'file\']=\'<image>/08_math.js\';$x67->properties[\'line\']=53;$x67->properties[\'column\']=13;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,53,13,\'<image>/08_math.js\');}$x63=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',53,13);$x64=$x63($global,$global,$_isNaN,array($x61),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x64,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x68=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'NaN\',54,12,\'<image>/08_math.js\');$_NaN=&$x68[0];list(,$WNaN,$SNaN,$UNaN)=$x68;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x69=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',54,12,\'<image>/08_math.js\');$_ReferenceError=&$x69[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x69;$x70=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',54,12);$x71=$x70($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x71->class)&&$x71->class===\'Error\'){$x71->properties[\'file\']=\'<image>/08_math.js\';$x71->properties[\'line\']=54;$x71->properties[\'column\']=12;$x71->attributes[\'file\']=$x71->attributes[\'line\']=$x71->attributes[\'column\']=0;}throw new JSException($x71,54,12,\'<image>/08_math.js\');}return$_NaN;}unset($x75,$W75,$S75,$U75);$x76=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,57,17,\'<image>/08_math.js\');$x75=&$x76[0];list(,$W75,$S75,$U75)=$x76;$x72=JS::toPrimitive($x75,$global);$x73=JS::toPrimitive($_max,$global);$x74=(is_string($x73)&&is_string($x72)?strcmp($x73,$x72)<0:(!is_nan($x77=JS::toNumber($x73,$global))&&!is_nan($x78=JS::toNumber($x72,$global))&&$x77<$x78));if(JS::toBoolean($x74,$global)){unset($x79,$W79,$S79,$U79);$x80=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,58,20,\'<image>/08_math.js\');$x79=&$x80[0];list(,$W79,$S79,$U79)=$x80;if($Umax){$global->properties[\'max\']=$_max;$_max=&$global->properties[\'max\'];}$_max=$x79;}}return$_max;return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_14($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x84 = 0;; ++$x84) {
if ($x84 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x83 =& $scope->properties['arguments'];
$x83->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x83->properties[$i] = $args[$i];
$x83->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x85 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'arguments', 66, 23, '<image>/08_math.js');
$_arguments =& $x85[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x85;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x86 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 66, 23, '<image>/08_math.js');
$_ReferenceError =& $x86[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x86;
$x87 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 66, 23);
$x88 = $x87($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x88->class) && $x88->class === 'Error') {$x88->properties['file'] = '<image>/08_math.js';$x88->properties['line'] = 66;$x88->properties['column'] = 23;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 66, 23, '<image>/08_math.js');
}
unset($x89, $W89, $S89, $U89);
$x90 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) 'length', 66, 32, '<image>/08_math.js');
$x89 =& $x90[0]; list(,$W89,$S89,$U89) = $x90;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x89;
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x91 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'Infinity', 66, 48, '<image>/08_math.js');
$_Infinity =& $x91[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x91;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x92 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 66, 48, '<image>/08_math.js');
$_ReferenceError =& $x92[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x92;
$x93 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 66, 48);
$x94 = $x93($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error') {$x94->properties['file'] = '<image>/08_math.js';$x94->properties['line'] = 66;$x94->properties['column'] = 48;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, 66, 48, '<image>/08_math.js');
}
$scope->properties['min'] = JS::$undefined; $_min =& $scope->properties['min'];
$Umin = FALSE;
$_min = (+JS::toNumber($_Infinity, $global));
}
if ($x84 !== 0) {
$x95 = ++$_i;
}
$x96 = JS::toPrimitive($_i, $global);
$x97 = JS::toPrimitive($_l, $global);
$x98 = (is_string($x96) && is_string($x97) ? strcmp($x96, $x97) < 0 : (!is_nan($x99 = JS::toNumber($x96, $global)) && !is_nan($x100 = JS::toNumber($x97, $global)) && $x99 < $x100));
if (!JS::toBoolean($x98, $global)) { break; }

unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x101 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'isNaN', 67, 8, '<image>/08_math.js');
$_isNaN =& $x101[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x101;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x102 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 67, 8, '<image>/08_math.js');
$_ReferenceError =& $x102[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x102;
$x103 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 67, 8);
$x104 = $x103($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error') {$x104->properties['file'] = '<image>/08_math.js';$x104->properties['line'] = 67;$x104->properties['column'] = 8;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 67, 8, '<image>/08_math.js');
}
unset($x105, $W105, $S105, $U105);
$x106 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 67, 23, '<image>/08_math.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x109 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'TypeError', 67, 13, '<image>/08_math.js');
$_TypeError =& $x109[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x109;
$x110 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 67, 13);
$x111 = $x110($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x111->class) && $x111->class === 'Error') {$x111->properties['file'] = '<image>/08_math.js';$x111->properties['line'] = 67;$x111->properties['column'] = 13;$x111->attributes['file'] = $x111->attributes['line'] = $x111->attributes['column'] = 0; }
throw new JSException($x111, 67, 13, '<image>/08_math.js');
}
$x107 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 67, 13);
$x108 = $x107($global, $global, $_isNaN, array($x105), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x108, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x112 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'NaN', 68, 12, '<image>/08_math.js');
$_NaN =& $x112[0]; list(,$WNaN,$SNaN,$UNaN) = $x112;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x113 = _420026a1fb085c6053dae1bd17e9a63a_12($global, $scope, $scope, (string) 'ReferenceError', 68, 12, '<image>/08_math.js');
$_ReferenceError =& $x113[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x113;
$x114 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/08_math.js', 68, 12);
$x115 = $x114($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x115->class) && $x115->class === 'Error') {$x115->properties['file'] = '<image>/08_math.js';$x115->properties['line'] = 68;$x115->properties['column'] = 12;$x115->attributes['file'] = $x115->attributes['line'] = $x115->attributes['column'] = 0; }
throw new JSException($x115, 68, 12, '<image>/08_math.js');
}
return $_NaN;;
};
unset($x119, $W119, $S119, $U119);
$x120 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 71, 17, '<image>/08_math.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
$x116 = JS::toPrimitive($x119, $global);
$x117 = JS::toPrimitive($_min, $global);
$x118 = (is_string($x116) && is_string($x117) ? strcmp($x116, $x117) < 0 : (!is_nan($x121 = JS::toNumber($x116, $global)) && !is_nan($x122 = JS::toNumber($x117, $global)) && $x121 < $x122));
if (JS::toBoolean($x118, $global)) {
unset($x123, $W123, $S123, $U123);
$x124 = _420026a1fb085c6053dae1bd17e9a63a_13($global, $scope, $_arguments, (string) $_i, 72, 20, '<image>/08_math.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
if ($Umin) {$global->properties['min'] = $_min; $_min =& $global->properties['min']; }
$_min = $x123;;
};;
};
return $_min;
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_14($global,$leThis,$fn,$args,$constructor=FALSE){for($x84=0;;++$x84){if($x84===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x83=&$scope->properties[\'arguments\'];$x83->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x83->properties[$i]=$args[$i];$x83->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x85=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'arguments\',66,23,\'<image>/08_math.js\');$_arguments=&$x85[0];list(,$Warguments,$Sarguments,$Uarguments)=$x85;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x86=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',66,23,\'<image>/08_math.js\');$_ReferenceError=&$x86[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x86;$x87=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',66,23);$x88=$x87($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x88->class)&&$x88->class===\'Error\'){$x88->properties[\'file\']=\'<image>/08_math.js\';$x88->properties[\'line\']=66;$x88->properties[\'column\']=23;$x88->attributes[\'file\']=$x88->attributes[\'line\']=$x88->attributes[\'column\']=0;}throw new JSException($x88,66,23,\'<image>/08_math.js\');}unset($x89,$W89,$S89,$U89);$x90=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)\'length\',66,32,\'<image>/08_math.js\');$x89=&$x90[0];list(,$W89,$S89,$U89)=$x90;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x89;unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x91=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'Infinity\',66,48,\'<image>/08_math.js\');$_Infinity=&$x91[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x91;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x92=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',66,48,\'<image>/08_math.js\');$_ReferenceError=&$x92[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x92;$x93=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',66,48);$x94=$x93($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x94->class)&&$x94->class===\'Error\'){$x94->properties[\'file\']=\'<image>/08_math.js\';$x94->properties[\'line\']=66;$x94->properties[\'column\']=48;$x94->attributes[\'file\']=$x94->attributes[\'line\']=$x94->attributes[\'column\']=0;}throw new JSException($x94,66,48,\'<image>/08_math.js\');}$scope->properties[\'min\']=JS::$undefined;$_min=&$scope->properties[\'min\'];$Umin=FALSE;$_min=(+JS::toNumber($_Infinity,$global));}if($x84!==0){$x95=++$_i;}$x96=JS::toPrimitive($_i,$global);$x97=JS::toPrimitive($_l,$global);$x98=(is_string($x96)&&is_string($x97)?strcmp($x96,$x97)<0:(!is_nan($x99=JS::toNumber($x96,$global))&&!is_nan($x100=JS::toNumber($x97,$global))&&$x99<$x100));if(!JS::toBoolean($x98,$global)){break;}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x101=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'isNaN\',67,8,\'<image>/08_math.js\');$_isNaN=&$x101[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x101;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x102=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',67,8,\'<image>/08_math.js\');$_ReferenceError=&$x102[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x102;$x103=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',67,8);$x104=$x103($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x104->class)&&$x104->class===\'Error\'){$x104->properties[\'file\']=\'<image>/08_math.js\';$x104->properties[\'line\']=67;$x104->properties[\'column\']=8;$x104->attributes[\'file\']=$x104->attributes[\'line\']=$x104->attributes[\'column\']=0;}throw new JSException($x104,67,8,\'<image>/08_math.js\');}unset($x105,$W105,$S105,$U105);$x106=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,67,23,\'<image>/08_math.js\');$x105=&$x106[0];list(,$W105,$S105,$U105)=$x106;if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x109=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'TypeError\',67,13,\'<image>/08_math.js\');$_TypeError=&$x109[0];list(,$WTypeError,$STypeError,$UTypeError)=$x109;$x110=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',67,13);$x111=$x110($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x111->class)&&$x111->class===\'Error\'){$x111->properties[\'file\']=\'<image>/08_math.js\';$x111->properties[\'line\']=67;$x111->properties[\'column\']=13;$x111->attributes[\'file\']=$x111->attributes[\'line\']=$x111->attributes[\'column\']=0;}throw new JSException($x111,67,13,\'<image>/08_math.js\');}$x107=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',67,13);$x108=$x107($global,$global,$_isNaN,array($x105),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x108,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x112=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'NaN\',68,12,\'<image>/08_math.js\');$_NaN=&$x112[0];list(,$WNaN,$SNaN,$UNaN)=$x112;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x113=_420026a1fb085c6053dae1bd17e9a63a_12($global,$scope,$scope,(string)\'ReferenceError\',68,12,\'<image>/08_math.js\');$_ReferenceError=&$x113[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x113;$x114=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/08_math.js\',68,12);$x115=$x114($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x115->class)&&$x115->class===\'Error\'){$x115->properties[\'file\']=\'<image>/08_math.js\';$x115->properties[\'line\']=68;$x115->properties[\'column\']=12;$x115->attributes[\'file\']=$x115->attributes[\'line\']=$x115->attributes[\'column\']=0;}throw new JSException($x115,68,12,\'<image>/08_math.js\');}return$_NaN;}unset($x119,$W119,$S119,$U119);$x120=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,71,17,\'<image>/08_math.js\');$x119=&$x120[0];list(,$W119,$S119,$U119)=$x120;$x116=JS::toPrimitive($x119,$global);$x117=JS::toPrimitive($_min,$global);$x118=(is_string($x116)&&is_string($x117)?strcmp($x116,$x117)<0:(!is_nan($x121=JS::toNumber($x116,$global))&&!is_nan($x122=JS::toNumber($x117,$global))&&$x121<$x122));if(JS::toBoolean($x118,$global)){unset($x123,$W123,$S123,$U123);$x124=_420026a1fb085c6053dae1bd17e9a63a_13($global,$scope,$_arguments,(string)$_i,72,20,\'<image>/08_math.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;if($Umin){$global->properties[\'min\']=$_min;$_min=&$global->properties[\'min\'];}$_min=$x123;}}return$_min;return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x127 =& $scope->properties['arguments'];
$x127->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x127->properties[$i] = $args[$i];
$x127->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$scope->properties['y'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_y =& $scope->properties['y'];
$Uy = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return pow(JS::toNumber($_x, $global), JS::toNumber($_y, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x127=&$scope->properties[\'arguments\'];$x127->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x127->properties[$i]=$args[$i];$x127->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'y\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_y=&$scope->properties[\'y\'];$Uy=FALSE;$global->scope[++$global->scope_sp]=$scope;return pow(JS::toNumber($_x,$global),JS::toNumber($_y,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x130 =& $scope->properties['arguments'];
$x130->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x130->properties[$i] = $args[$i];
$x130->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return mt_rand() / mt_getrandmax();
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x130=&$scope->properties[\'arguments\'];$x130->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x130->properties[$i]=$args[$i];$x130->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return mt_rand()/mt_getrandmax();return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x133 =& $scope->properties['arguments'];
$x133->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x133->properties[$i] = $args[$i];
$x133->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return round(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x133=&$scope->properties[\'arguments\'];$x133->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x133->properties[$i]=$args[$i];$x133->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return round(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x136 =& $scope->properties['arguments'];
$x136->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x136->properties[$i] = $args[$i];
$x136->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return sin(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x136=&$scope->properties[\'arguments\'];$x136->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x136->properties[$i]=$args[$i];$x136->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return sin(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x139 =& $scope->properties['arguments'];
$x139->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x139->properties[$i] = $args[$i];
$x139->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return sqrt(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x139=&$scope->properties[\'arguments\'];$x139->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x139->properties[$i]=$args[$i];$x139->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return sqrt(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x142 =& $scope->properties['arguments'];
$x142->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x142->properties[$i] = $args[$i];
$x142->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return tan(JS::toNumber($_x, $global));
;
return JS::$undefined;
}
echo 'function _420026a1fb085c6053dae1bd17e9a63a_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x142=&$scope->properties[\'arguments\'];$x142->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x142->properties[$i]=$args[$i];$x142->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$global->scope[++$global->scope_sp]=$scope;return tan(JS::toNumber($_x,$global));return JS::$undefined;}', "\n";
function _420026a1fb085c6053dae1bd17e9a63a_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/08_math.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/08_math.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x0->properties['E'] = 2.718281828459;
$x0->attributes['E'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['LN10'] = 2.302585092994;
$x0->attributes['LN10'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['LN2'] = 0.69314718055995;
$x0->attributes['LN2'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['LOG2E'] = 1.442695040889;
$x0->attributes['LOG2E'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['LOG10E'] = 0.43429448190325;
$x0->attributes['LOG10E'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['PI'] = 3.1415926535898;
$x0->attributes['PI'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['SQRT1_2'] = 0.70710678118655;
$x0->attributes['SQRT1_2'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['SQRT2'] = 1.4142135623731;
$x0->attributes['SQRT2'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x3 = clone JS::$functionTemplate; $x3->call = '_420026a1fb085c6053dae1bd17e9a63a_1'; $x3->parameters = array (
  0 => 'x',
); $x3->scope = $scope; $x3->properties['prototype'] = clone JS::$objectTemplate; $x3->attributes['prototype'] = JS::WRITABLE; $x3->properties['prototype']->properties['constructor'] = $x3; $x3->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x3->properties['length'] = 1; $x3->attributes['length'] = 0;
$x0->properties['abs'] = $x3;
$x0->attributes['abs'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6 = clone JS::$functionTemplate; $x6->call = '_420026a1fb085c6053dae1bd17e9a63a_2'; $x6->parameters = array (
  0 => 'x',
); $x6->scope = $scope; $x6->properties['prototype'] = clone JS::$objectTemplate; $x6->attributes['prototype'] = JS::WRITABLE; $x6->properties['prototype']->properties['constructor'] = $x6; $x6->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x6->properties['length'] = 1; $x6->attributes['length'] = 0;
$x0->properties['acos'] = $x6;
$x0->attributes['acos'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x9 = clone JS::$functionTemplate; $x9->call = '_420026a1fb085c6053dae1bd17e9a63a_3'; $x9->parameters = array (
  0 => 'x',
); $x9->scope = $scope; $x9->properties['prototype'] = clone JS::$objectTemplate; $x9->attributes['prototype'] = JS::WRITABLE; $x9->properties['prototype']->properties['constructor'] = $x9; $x9->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x9->properties['length'] = 1; $x9->attributes['length'] = 0;
$x0->properties['asin'] = $x9;
$x0->attributes['asin'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x12 = clone JS::$functionTemplate; $x12->call = '_420026a1fb085c6053dae1bd17e9a63a_4'; $x12->parameters = array (
  0 => 'x',
); $x12->scope = $scope; $x12->properties['prototype'] = clone JS::$objectTemplate; $x12->attributes['prototype'] = JS::WRITABLE; $x12->properties['prototype']->properties['constructor'] = $x12; $x12->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x12->properties['length'] = 1; $x12->attributes['length'] = 0;
$x0->properties['atan'] = $x12;
$x0->attributes['atan'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x15 = clone JS::$functionTemplate; $x15->call = '_420026a1fb085c6053dae1bd17e9a63a_5'; $x15->parameters = array (
  0 => 'x',
); $x15->scope = $scope; $x15->properties['prototype'] = clone JS::$objectTemplate; $x15->attributes['prototype'] = JS::WRITABLE; $x15->properties['prototype']->properties['constructor'] = $x15; $x15->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x15->properties['length'] = 1; $x15->attributes['length'] = 0;
$x0->properties['atan2'] = $x15;
$x0->attributes['atan2'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x18 = clone JS::$functionTemplate; $x18->call = '_420026a1fb085c6053dae1bd17e9a63a_6'; $x18->parameters = array (
  0 => 'x',
); $x18->scope = $scope; $x18->properties['prototype'] = clone JS::$objectTemplate; $x18->attributes['prototype'] = JS::WRITABLE; $x18->properties['prototype']->properties['constructor'] = $x18; $x18->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x18->properties['length'] = 1; $x18->attributes['length'] = 0;
$x0->properties['ceil'] = $x18;
$x0->attributes['ceil'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x21 = clone JS::$functionTemplate; $x21->call = '_420026a1fb085c6053dae1bd17e9a63a_7'; $x21->parameters = array (
  0 => 'x',
); $x21->scope = $scope; $x21->properties['prototype'] = clone JS::$objectTemplate; $x21->attributes['prototype'] = JS::WRITABLE; $x21->properties['prototype']->properties['constructor'] = $x21; $x21->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x21->properties['length'] = 1; $x21->attributes['length'] = 0;
$x0->properties['cos'] = $x21;
$x0->attributes['cos'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x24 = clone JS::$functionTemplate; $x24->call = '_420026a1fb085c6053dae1bd17e9a63a_8'; $x24->parameters = array (
  0 => 'x',
); $x24->scope = $scope; $x24->properties['prototype'] = clone JS::$objectTemplate; $x24->attributes['prototype'] = JS::WRITABLE; $x24->properties['prototype']->properties['constructor'] = $x24; $x24->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x24->properties['length'] = 1; $x24->attributes['length'] = 0;
$x0->properties['exp'] = $x24;
$x0->attributes['exp'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x27 = clone JS::$functionTemplate; $x27->call = '_420026a1fb085c6053dae1bd17e9a63a_9'; $x27->parameters = array (
  0 => 'x',
); $x27->scope = $scope; $x27->properties['prototype'] = clone JS::$objectTemplate; $x27->attributes['prototype'] = JS::WRITABLE; $x27->properties['prototype']->properties['constructor'] = $x27; $x27->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x27->properties['length'] = 1; $x27->attributes['length'] = 0;
$x0->properties['floor'] = $x27;
$x0->attributes['floor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x30 = clone JS::$functionTemplate; $x30->call = '_420026a1fb085c6053dae1bd17e9a63a_10'; $x30->parameters = array (
  0 => 'x',
); $x30->scope = $scope; $x30->properties['prototype'] = clone JS::$objectTemplate; $x30->attributes['prototype'] = JS::WRITABLE; $x30->properties['prototype']->properties['constructor'] = $x30; $x30->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x30->properties['length'] = 1; $x30->attributes['length'] = 0;
$x0->properties['log'] = $x30;
$x0->attributes['log'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x81 = clone JS::$functionTemplate; $x81->call = '_420026a1fb085c6053dae1bd17e9a63a_11'; $x81->parameters = array (
  0 => 'a',
  1 => 'b',
); $x81->scope = $scope; $x81->properties['prototype'] = clone JS::$objectTemplate; $x81->attributes['prototype'] = JS::WRITABLE; $x81->properties['prototype']->properties['constructor'] = $x81; $x81->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x81->properties['length'] = 2; $x81->attributes['length'] = 0;
$x0->properties['max'] = $x81;
$x0->attributes['max'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x125 = clone JS::$functionTemplate; $x125->call = '_420026a1fb085c6053dae1bd17e9a63a_14'; $x125->parameters = array (
  0 => 'a',
  1 => 'b',
); $x125->scope = $scope; $x125->properties['prototype'] = clone JS::$objectTemplate; $x125->attributes['prototype'] = JS::WRITABLE; $x125->properties['prototype']->properties['constructor'] = $x125; $x125->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x125->properties['length'] = 2; $x125->attributes['length'] = 0;
$x0->properties['min'] = $x125;
$x0->attributes['min'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x128 = clone JS::$functionTemplate; $x128->call = '_420026a1fb085c6053dae1bd17e9a63a_15'; $x128->parameters = array (
  0 => 'x',
  1 => 'y',
); $x128->scope = $scope; $x128->properties['prototype'] = clone JS::$objectTemplate; $x128->attributes['prototype'] = JS::WRITABLE; $x128->properties['prototype']->properties['constructor'] = $x128; $x128->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x128->properties['length'] = 2; $x128->attributes['length'] = 0;
$x0->properties['pow'] = $x128;
$x0->attributes['pow'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x131 = clone JS::$functionTemplate; $x131->call = '_420026a1fb085c6053dae1bd17e9a63a_16'; $x131->parameters = array (
); $x131->scope = $scope; $x131->properties['prototype'] = clone JS::$objectTemplate; $x131->attributes['prototype'] = JS::WRITABLE; $x131->properties['prototype']->properties['constructor'] = $x131; $x131->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x131->properties['length'] = 0; $x131->attributes['length'] = 0;
$x0->properties['random'] = $x131;
$x0->attributes['random'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x134 = clone JS::$functionTemplate; $x134->call = '_420026a1fb085c6053dae1bd17e9a63a_17'; $x134->parameters = array (
  0 => 'x',
); $x134->scope = $scope; $x134->properties['prototype'] = clone JS::$objectTemplate; $x134->attributes['prototype'] = JS::WRITABLE; $x134->properties['prototype']->properties['constructor'] = $x134; $x134->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x134->properties['length'] = 1; $x134->attributes['length'] = 0;
$x0->properties['round'] = $x134;
$x0->attributes['round'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x137 = clone JS::$functionTemplate; $x137->call = '_420026a1fb085c6053dae1bd17e9a63a_18'; $x137->parameters = array (
  0 => 'x',
); $x137->scope = $scope; $x137->properties['prototype'] = clone JS::$objectTemplate; $x137->attributes['prototype'] = JS::WRITABLE; $x137->properties['prototype']->properties['constructor'] = $x137; $x137->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x137->properties['length'] = 1; $x137->attributes['length'] = 0;
$x0->properties['sin'] = $x137;
$x0->attributes['sin'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x140 = clone JS::$functionTemplate; $x140->call = '_420026a1fb085c6053dae1bd17e9a63a_19'; $x140->parameters = array (
  0 => 'x',
); $x140->scope = $scope; $x140->properties['prototype'] = clone JS::$objectTemplate; $x140->attributes['prototype'] = JS::WRITABLE; $x140->properties['prototype']->properties['constructor'] = $x140; $x140->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x140->properties['length'] = 1; $x140->attributes['length'] = 0;
$x0->properties['sqrt'] = $x140;
$x0->attributes['sqrt'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x143 = clone JS::$functionTemplate; $x143->call = '_420026a1fb085c6053dae1bd17e9a63a_20'; $x143->parameters = array (
  0 => 'x',
); $x143->scope = $scope; $x143->properties['prototype'] = clone JS::$objectTemplate; $x143->attributes['prototype'] = JS::WRITABLE; $x143->properties['prototype']->properties['constructor'] = $x143; $x143->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x143->properties['length'] = 1; $x143->attributes['length'] = 0;
$x0->properties['tan'] = $x143;
$x0->attributes['tan'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['Math'] = JS::$undefined; $_Math =& $scope->properties['Math'];
$UMath = FALSE;
$_Math = $x0;
$_Math->class = "Math";
;
return JS::$undefined;
}
