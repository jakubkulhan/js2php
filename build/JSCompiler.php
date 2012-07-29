<?php
class JSCompiler
{
    private $_stack = array();
    private $_env;
    private $_index;

    public function __construct()
    {
        $this->_init();
    }

    public function walk($node)
    {
        /*$this->_init();*/
        return $this->_walk($node);
    }

    public function walkeach(array $nodes)
    {
        /*$this->_init();*/
        return $this->_walkeach($nodes);
    }

    protected function _init()
    {
        $this->_env = array();
$self = (object) array(
		'functions' => array(),
		'prestatement' => array(),
		'assigned' => array(),
		'prefix' => '',
		'varCounter' => 0,
		'fnCounter' => 0,
		'catch_return' => FALSE,
		'lookups' => array(
			TRUE => array(TRUE => array(), FALSE => array()),
			FALSE => array(TRUE => array(), FALSE => array()),
		),
		'loader' => NULL,
		'dumpFunctions' => TRUE,
		'dumper' => NULL,
	);

        $this->_env = get_defined_vars();
    }

    protected function _node()
    {
        return end($this->_stack);
    }

    protected function _nodetype()
    {
        return current($this->_node());
    }

    protected function _stack()
    {
        return $this->_stack;
    }

    protected function _root()
    {
        reset($this->_stack);
        return current($this->_stack);
    }

    protected function _index()
    {
        return $this->_index;
    }

    protected function _walkeach(array $nodes)
    {
        $ret = array();

        foreach ($nodes as $k => $node) {
            $this->_index = $k;
            $ret[$k] = $this->_walk($node);
        }

        return $ret;
    }

    protected function _walk($node)
    {
        array_push($this->_stack, $node);
        $ret = NULL;

        switch ($node[0]) {
        case 'genprefix_':
            list($_, $_0) = $node;
            $ret = $this->_0($_0);
        break;
        case 'program':
            list($_, $_0, $_1) = $node;
            $ret = $this->_1($_0, $_1);
        break;
        case 'genvar_':
            $ret = $this->_2();
        break;
        case 'genfn_':
            $ret = $this->_3();
        break;
        case 'varize_':
            list($_, $_0) = $node;
            $ret = $this->_4($_0);
        break;
        case 'TypeError_':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_5($_0, $_1, $_2);
        break;
        case 'ReferenceError_':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_6($_0, $_1, $_2);
        break;
        case 'block':
            list($_, $_0) = $node;
            $ret = $this->_7($_0);
        break;
        case 'php_statement':
            list($_, $_0) = $node;
            $ret = $this->_8($_0);
        break;
        case 'function':
            list($_, $_0, $_1, $_2, $_3, $_4, $_5) = $node;
            $ret = $this->_9($_0, $_1, $_2, $_3, $_4, $_5);
        break;
        case 'var':
            list($_, $_0) = $node;
            $ret = $this->_10($_0);
        break;
        case 'if':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_11($_0, $_1, $_2);
        break;
        case 'do':
            list($_, $_0, $_1) = $node;
            $ret = $this->_12($_0, $_1);
        break;
        case 'while':
            list($_, $_0, $_1) = $node;
            $ret = $this->_13($_0, $_1);
        break;
        case 'for_in':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_14($_0, $_1, $_2);
        break;
        case 'for':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_15($_0, $_1, $_2, $_3);
        break;
        case 'continue':
            list($_, $_0) = $node;
            $ret = $this->_16($_0);
        break;
        case 'break':
            list($_, $_0) = $node;
            $ret = $this->_17($_0);
        break;
        case 'return':
            list($_, $_0) = $node;
            $ret = $this->_18($_0);
        break;
        case 'with':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_19($_0, $_1, $_2, $_3);
        break;
        case 'labelled':
            list($_, $_0, $_1) = $node;
            $ret = $this->_20($_0, $_1);
        break;
        case 'switch':
            list($_, $_0, $_1) = $node;
            $ret = $this->_21($_0, $_1);
        break;
        case 'case':
            list($_, $_0, $_1) = $node;
            $ret = $this->_22($_0, $_1);
        break;
        case 'default':
            list($_, $_0) = $node;
            $ret = $this->_23($_0);
        break;
        case 'throw':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_24($_0, $_1, $_2);
        break;
        case 'try':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_25($_0, $_1, $_2, $_3);
        break;
        case 'discard':
            list($_, $_0) = $node;
            $ret = $this->_26($_0);
        break;
        case 'exprs':
            list($_, $_0) = $node;
            $ret = $this->_27($_0);
        break;
        case 'assignment':
            list($_, $_0, $_1, $_2, $_3, $_4) = $node;
            $ret = $this->_28($_0, $_1, $_2, $_3, $_4);
        break;
        case 'lookup_':
            list($_, $_0, $_1, $_2, $_3, $_4, $_5, $_6) = $node;
            $ret = $this->_29($_0, $_1, $_2, $_3, $_4, $_5, $_6);
        break;
        case 'call_':
            list($_, $_0, $_1, $_2, $_3, $_4, $_5, $_6) = $node;
            $ret = $this->_30($_0, $_1, $_2, $_3, $_4, $_5, $_6);
        break;
        case 'cond':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_31($_0, $_1, $_2);
        break;
        case 'binary':
            list($_, $_0, $_1, $_2, $_3, $_4) = $node;
            $ret = $this->_32($_0, $_1, $_2, $_3, $_4);
        break;
        case 'delete':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_33($_0, $_1, $_2);
        break;
        case 'void':
            list($_, $_0) = $node;
            $ret = $this->_34($_0);
        break;
        case 'typeof':
            list($_, $_0) = $node;
            $ret = $this->_35($_0);
        break;
        case 'preinc':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_36($_0, $_1, $_2);
        break;
        case 'predec':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_37($_0, $_1, $_2);
        break;
        case 'positive':
            list($_, $_0) = $node;
            $ret = $this->_38($_0);
        break;
        case 'negative':
            list($_, $_0) = $node;
            $ret = $this->_39($_0);
        break;
        case 'inverse':
            list($_, $_0) = $node;
            $ret = $this->_40($_0);
        break;
        case 'not':
            list($_, $_0) = $node;
            $ret = $this->_41($_0);
        break;
        case 'postinc':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_42($_0, $_1, $_2);
        break;
        case 'postdec':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_43($_0, $_1, $_2);
        break;
        case 'call':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_44($_0, $_1, $_2, $_3);
        break;
        case 'index':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_45($_0, $_1, $_2, $_3);
        break;
        case 'new':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_46($_0, $_1, $_2, $_3);
        break;
        case 'this':
            $ret = $this->_47();
        break;
        case 'null':
            $ret = $this->_48();
        break;
        case 'true':
            $ret = $this->_49();
        break;
        case 'false':
            $ret = $this->_50();
        break;
        case 'undefined':
            $ret = $this->_51();
        break;
        case 'number':
            list($_, $_0) = $node;
            $ret = $this->_52($_0);
        break;
        case 'string':
            list($_, $_0) = $node;
            $ret = $this->_53($_0);
        break;
        case 'regexp':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_54($_0, $_1, $_2, $_3);
        break;
        case 'identifier':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_55($_0, $_1, $_2, $_3);
        break;
        case 'array':
            list($_, $_0) = $node;
            $ret = $this->_56($_0);
        break;
        case 'object':
            list($_, $_0) = $node;
            $ret = $this->_57($_0);
        break;
        case 'php':
            list($_, $_0) = $node;
            $ret = $this->_58($_0);
        break;
        case 'raw':
            list($_, $_0) = $node;
            $ret = $this->_59($_0);
        break;
        }

        array_pop($this->_stack);
        return $ret;
    }

    public function __invoke($ast)
    {
        /*$this->_init();*/
        extract($this->_env, EXTR_REFS);
        $self->functions = $self->prestatement = $self->assigned = array();
        	$self->prefix = $this->_walk(array('genprefix_', $ast));
        	$self->varCounter = $self->fnCounter = 0;
        	$self->catch_return = FALSE;
        	$self->lookups = array(
        		TRUE => array(TRUE => array(), FALSE => array()),
        		FALSE => array(TRUE => array(), FALSE => array()),
        	);
        	$self->loader = NULL;
        	$self->dumpFunctions = TRUE;
        
        	$force = FALSE;
        	$generate = 'string';
        
        	if (func_num_args() > 1) {
        		foreach ((array) func_get_arg(1) as $k => $v) {
        			if ($k === 'force') {
        				$force = $v;
        
        			} else if ($k === 'generate') {
        				$generate = $v;
        
        			} else if ($k === 'loader') {
        				$self->loader = $v;
        
        			} else if ($k === 'dumpFunctions') {
        				$self->dumpFunctions = $v;
        
        			} else {
        				throw new Exception("Unknown option $k.");
        			}
        		}
        	}
        
        	if ($self->dumpFunctions) {
        		$self->dumper = new JSDumper;
        	}
        
        
        	if ($force || !function_exists("_{$self->prefix}_0")) {
        		$this->_walk($ast);
        	}
        
        	if ($generate === 'string') {
        		return implode("\n", $self->functions) . "\nreturn '_{$self->prefix}_0';";
        
        	} else if ($generate === 'object') {
        		return (object) array(
        			'functions' => $self->functions,
        			'main' => "_{$self->prefix}_0",
        		);
        
        	} else {
        		throw new Exception("Unknown generate option $generate.");
        	}

    }

protected function _0($ast) { extract($this->_env, EXTR_REFS); $ret = '';

	if (is_array($ast)) {
		foreach ($ast as $v) {
			$ret .= $this->_walk(array('genprefix_', $v));
		}

	} else {
		$ret = (string) $ast;
	}

	return md5($ret);

}
protected function _1($ast, $file) { extract($this->_env, EXTR_REFS); $body = array();
	$fn = $this->_walk(array("genfn_"));

	$body[] = 'function ' . $fn . '($global = NULL, $scope = NULL) {';
	$body[] = "if (!is_object(\$global)) {" .
			"\$global = (object) array(" .
				"'properties' => array()," .
				"'attributes' => array()," .
				"'getters' => array()," .
				"'setters' => array()," .
				"'prototype' => NULL," .
				"'up' => NULL," .
			");" .
			"\$set_scope = TRUE;" .
			"\$global->trace = array(array(" . var_export($file, TRUE) . ", NULL, NULL)); \$global->trace_sp = 0;" .
		"}";

	$body[] = "if (\$scope === NULL) {" .
			"\$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => \$global);" .
			"\$scope->properties['global'] = \$global;" .
			"\$scope->properties['__filename'] = " . var_export($file, TRUE) . ";" .
			"\$scope->properties['__dirname'] = " . var_export(dirname($file), TRUE) . ";" .
		"}";

	$body[] = "if (isset(\$global->properties['require'])) {" .
			"\$global->properties['require']->properties['.'] = " . var_export(dirname($file), TRUE) . ";" .
			"\$global->properties['require']->attributes['.'] = 0;" .
		"}";

	$body[] = 'if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }';
	$body[] = '$leThis = $global;';

	$code = $this->_walk($ast);

	if (!empty($self->prestatement)) {
		$body[] = implode("\n", $self->prestatement);
	}

	if (!empty($code)) {
		$body[] = $code;
	}
	$body[] = ';';
	$body[] = 'return JS::$undefined;';
	$body[] = '}';

	$self->functions[$fn] = implode("\n", $body);

}
protected function _2() { extract($this->_env, EXTR_REFS); return '$x' . $self->varCounter++;
}
protected function _3() { extract($this->_env, EXTR_REFS); return '_' . $self->prefix . '_' . $self->fnCounter++;
}
protected function _4($identifier) { extract($this->_env, EXTR_REFS); return '$_' . str_replace(array('$', '_'), array('_dlr_', '__'), $identifier);
}
protected function _5($msg, $p, $file) { extract($this->_env, EXTR_REFS); $saved_assigned = $self->assigned;
	$error = $this->_walk(array('call',
		array('identifier', 'TypeError', $p, $file, FALSE),
		array(array('string', $msg)), $p, $file));
	$self->prestatement[] = $this->_walk(array('throw', array('raw', $error), $p, $file));
	$self->assigned = $saved_assigned;

}
protected function _6($msg, $p, $file) { extract($this->_env, EXTR_REFS); $saved_assigned = $self->assigned;
	$error = $this->_walk(array('call',
		array('identifier', 'ReferenceError', $p, $file, FALSE),
		array(array('string', $msg)), $p, $file));
	$self->prestatement[] = $this->_walk(array('throw', array('raw', $error), $p, $file));
	$self->assigned = $saved_assigned;

}
protected function _7($statements) { extract($this->_env, EXTR_REFS); $ret = array();
	foreach ($statements as $statement) {
		if ($statement === NULL) {
			continue;
		}

		$s = $this->_walk($statement);

		if (!empty($s)) {
			$s = trim($s);
			if (substr($s, -1) !== ';') {
				$s .= ';';
			}
			$ret[] = $s;
		}
	}

	return implode("\n", $ret);

}
protected function _8($parts) { extract($this->_env, EXTR_REFS); $ret = array();
	$parts = $this->_walkeach($parts);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = implode('', $parts);
	return implode("\n", $ret);

}
protected function _9($name, $parameters_list, $body, $pStart, $pEnd, $file) { extract($this->_env, EXTR_REFS); $fn = $this->_walk(array('genfn_'));

	$saved_prestatement = $self->prestatement;
	$saved_assigned = $self->assigned;
	$self->prestatement = array();
	$self->assigned = array();

	$ret = $this->_walk(array('genvar_'));
	$arguments = $this->_walk(array('genvar_'));

	$self->prestatement[] = 'if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }';
	$self->prestatement[] = 'if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }';

	$self->prestatement[] = '$scope = clone JS::$emptyScope;';
	$self->prestatement[] = '$scope->up = $fn->scope;';

	if (!in_array('arguments', $parameters_list)) {
		$self->prestatement[] = '$scope->properties[\'arguments\'] = clone JS::$argumentsTemplate;';
		$self->prestatement[] = $arguments . ' =& $scope->properties[\'arguments\'];';
		$self->prestatement[] = $arguments . '->properties[\'length\'] = count($args);';
		$self->prestatement[] = 'foreach ($args as $i => $arg) {';
		$self->prestatement[] = $arguments . '->properties[$i] = $args[$i];';
		$self->prestatement[] = $arguments . '->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;';
		$self->prestatement[] = '}';
	}

	foreach ($parameters_list as $i => $parameter) {
		$self->assigned[$parameter] = $this->_walk(array('varize_', $parameter));
		$self->prestatement[] = '$scope->properties[' . var_export($parameter, TRUE) . '] = ' .
			'array_key_exists(' . $i . ', $args) ? $args[' . $i . '] : JS::$undefined;';
		$self->prestatement[] = $self->assigned[$parameter] . ' =& $scope->properties[' .
			var_export($parameter, TRUE) . '];';
		$self->prestatement[] = '$U' . substr($self->assigned[$parameter], 2) . ' = FALSE;';
	}

	if (!empty($name) && !in_array($name, $parameters_list)) {
		$self->assigned[$name] = $this->_walk(array('varize_', $name));
		$self->prestatement[] = '$scope->properties[' . var_export($name, TRUE) . '] = $fn;';
		$self->prestatement[] = $self->assigned[$name] . ' =& $scope->properties[' . var_export($name, TRUE) . '];';
	}

	$self->prestatement[] = '$global->scope[++$global->scope_sp] = $scope;';

	$body = $this->_walk($body);
	$self->functions[$fn] = implode("\n", array('function ' . $fn . '($global, $leThis, $fn, $args, $constructor = FALSE) {',
		implode("\n", $self->prestatement), $body, ';', 'return JS::$undefined;', '}'));
	$self->prestatement = $saved_prestatement;
	$self->assigned = $saved_assigned;

	$var = $this->_walk(array('genvar_'));
	$self->prestatement[] = $var . ' = clone JS::$functionTemplate; ' .
		$var . '->call = ' . var_export($fn, TRUE) . '; ' .
		$var . '->parameters = ' . var_export($parameters_list, TRUE) . '; ' .
		($name !== NULL ? $var . '->name = ' . var_export($name, TRUE) . '; ' : '') .
		$var . '->scope = $scope; ' .
		($self->loader !== NULL ? $var . '->loaded = FALSE; ' : '') .
		($self->dumpFunctions
			? $var . '->string = ' . var_export($self->dumper->__invoke($this->_node()), TRUE) . ';'
			: '') .
		$var . '->properties[\'prototype\'] = clone JS::$objectTemplate; ' .
		$var . '->attributes[\'prototype\'] = JS::WRITABLE; ' .
		$var . '->properties[\'prototype\']->properties[\'constructor\'] = ' . $var . '; ' .
		$var . '->properties[\'prototype\']->attributes[\'constructor\'] = JS::WRITABLE | JS::CONFIGURABLE; ' .
		$var . '->properties[\'length\'] = ' . count($parameters_list) . '; ' .
		$var . '->attributes[\'length\'] = 0;';
	
	return $var;

}
protected function _10($declarations_list) { extract($this->_env, EXTR_REFS); $ret = '';

	foreach ($declarations_list as $declaration) {
		list($varname, $expr) = $declaration;
		$phpVarname = $this->_walk(array('varize_', $varname));

		if (isset($self->assigned[$varname]) && !$expr) {
			$ret = $phpVarname;
			continue;
		}

		if (!$expr) {
			$expr = array('raw', 'JS::$undefined');
		}

		$expr = $this->_walk($expr);

		if (isset($self->assigned[$varname])) {
			$self->prestatement[] = 'unset(' . $self->assigned[$varname] . ');';
		}

		$self->prestatement[] = '$scope->properties[' . var_export($varname, TRUE) . '] = JS::$undefined; ' .
			$phpVarname . ' =& $scope->properties[' . var_export($varname, TRUE) . '];';
		$self->assigned[$varname] = $ret = $phpVarname;
		$self->prestatement[] = '$U' . substr($phpVarname, 2) . ' = FALSE;';

		$self->prestatement[] = $phpVarname . ' = ' . $expr . ';';
	}

	return $ret;

}
protected function _11($cond_expr, $statement, $else_statement) { extract($this->_env, EXTR_REFS); $ret = array();

	$cond_expr = $this->_walk($cond_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'if (JS::toBoolean(' . $cond_expr . ', $global)) {';
	$saved_assigned = $self->assigned;
	$ret[] = $this->_walk($statement) . ';';
	$self->assigned = $saved_assigned;
	$ret[] = '}';

	if ($else_statement !== NULL) {
		$ret[] = 'else {';
		$saved_assigned = $self->assigned;
		$ret[] = $this->_walk($else_statement) . ';';
		$self->assigned = $saved_assigned;
		$ret[] = '}';
	}

	return implode("\n", $ret);

}
protected function _12($cond_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();

	// does not need to save $self->assigned, everything is done at least once
	$statement = $this->_walk($statement);
	$ret[] = 'do {';
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$cond_expr = $this->_walk($cond_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = '} while(' . $cond_expr . ');';

	return implode("\n", $ret);

}
protected function _13($cond_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();

	$ret[] = 'for (;;) {';

	$cond = $this->_walk($cond_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'if (!JS::toBoolean(' . $cond . ', $global)) { break; }';

	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _14($assignment_expr, $in_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();
	$tmp = $this->_walk(array('genvar_'));
	$keys = $this->_walk(array('genvar_'));

	$in_expr = $this->_walk($in_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	$assignment_expr = $this->_walk($assignment_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	$ret[] = "if ($in_expr !== JS::\$undefined && $in_expr !== NULL) {";
	$ret[] = "for ($keys = array(), $tmp = JS::toObject($in_expr, \$global); $tmp; $tmp = {$tmp}->prototype) {";

	$ret[] = 'foreach (' . $tmp . '->attributes as $property => $attributes) {';
	$ret[] = "if (!(\$attributes & JS::ENUMERABLE) || isset({$keys}[\$property])) { continue; }";
	$ret[] = "{$keys}[\$property] = TRUE;";

	$ret[] = $assignment_expr . ' = $property;';

	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$ret[] = '}';

	$ret[] = '}';

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _15($init_expr, $cond_expr, $iter_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();
	$counter = $this->_walk(array('genvar_'));

	$ret[] = 'for (' . $counter . ' = 0;; ++' . $counter . ') {';

	if ($init_expr !== NULL) {
		$ret[] = 'if (' . $counter . ' === 0) {';
		$this->_walk($init_expr);
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = '}';
	}

	if ($iter_expr !== NULL) {
		$ret[] = 'if (' . $counter .' !== 0) {';
		$saved_assigned = $self->assigned;
		$this->_walk($iter_expr);
		$self->assigned = $saved_assigned;
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = '}';
	}

	if ($cond_expr !== NULL) {
		$cond = $this->_walk($cond_expr);
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = 'if (!JS::toBoolean(' . $cond . ', $global)) { break; }';
	}

	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _16($label) { extract($this->_env, EXTR_REFS); if ($label) {
		throw new Exception('Labels not implemented.');
	}

	return 'continue;';

}
protected function _17($label) { extract($this->_env, EXTR_REFS); if ($label) {
		throw new Exception('Labels not implemented.');
	}

	return 'break;';

}
protected function _18($expr) { extract($this->_env, EXTR_REFS); $ret = array();

	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	if ($self->catch_return) {
		$ret[] = 'throw new JSCatchReturn;';
	} else {
		$ret[] = 'return ' . $expr . ';';
	}

	return implode("\n", $ret);

}
protected function _19($expr, $statement, $p, $file) { extract($this->_env, EXTR_REFS); $ret = array();

	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	if ($expr[0] !== '$') {
		$tmp = $this->_walk(array('genvar_'));
		$self->prestatement[] = "$tmp = $expr;";
		$expr = $tmp;
	}

	$self->prestatement[] = "if ($expr === JS::\$undefined || $expr === NULL) {";
	$this->_walk(array('TypeError_', 'Supplied value has no properties.', $p, $file));
	$self->prestatement[] = "}";

	$self->prestatement[] = "{$expr}->up = \$scope; " .
		"\$scope = clone JS::\$emptyScope; " .
		"\$scope->up = {$expr};;";

	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$self->assigned = array(); // flush assigned variables
	$ret[] = $this->_walk($statement);
	$ret[] = '; foreach ($scope->properties as $k => $v) { $scope->up->up->properties[$k] = $v; }';
	$tmp = $this->_walk(array('genvar_'));
	$ret[] = "$tmp = \$scope->up; " .
		"\$scope = \$scope->up->up; " .
		"unset({$tmp}->up);";
	$self->assigned = array(); // flush assigned variables

	return implode("\n", $ret);

}
protected function _20($label, $statement) { extract($this->_env, EXTR_REFS); throw new Exception('Labels not implemented.');

}
protected function _21($expr, $clauses_list) { extract($this->_env, EXTR_REFS); // FIXME
	$ret = array();

	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'switch (' . $expr . ') {';

	$ret = array_merge($ret, $this->_walkeach($clauses_list));

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _22($expr, $statement) { extract($this->_env, EXTR_REFS); // FIXME
	$ret = array();
	$ret[] = 'case ' . $this->_walk($expr) . ':';
	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	return implode("\n", $ret);

}
protected function _23($statement) { extract($this->_env, EXTR_REFS); // FIXME
	$ret = array();
	$ret[] = 'default:';
	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';
	
	return implode("\n", $ret);

}
protected function _24($expr, $p, $file) { extract($this->_env, EXTR_REFS); $ret = array();
	$expr = $this->_walk($expr);

	if ($expr[0] !== '$') {
		$tmp = $this->_walk(array('genvar_'));
		$self->prestatement[] = "$tmp = $expr;";
		$expr = $tmp;
	}

	$self->prestatement[] = "if (isset({$expr}->class) && {$expr}->class === 'Error' && " .
		"!isset({$expr}->properties['file']) && !isset({$expr}->properties['line']) && " .
		"!isset({$expr}->properties['column'])) {" .
			"{$expr}->properties['file'] = " . $this->_walk($file) . ";" .
			"{$expr}->properties['line'] = " . $this->_walk($p[0]) . ";" .
			"{$expr}->properties['column'] = " . $this->_walk($p[1]) . ";" .
			"{$expr}->attributes['file'] = {$expr}->attributes['line'] = {$expr}->attributes['column'] = 0; }";

	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = "throw new JSException($expr, " . $this->_walk($p[0]) . ", " . $this->_walk($p[1]) . ", " . $this->_walk($file) . ");";

	return implode("\n", $ret);

}
protected function _25($try_block, $catch_var, $catch_block, $finally_block) { extract($this->_env, EXTR_REFS); $ret = array(implode("\n", $self->prestatement));
	$self->prestatement = array();
	$finally = '';

	if ($finally_block) {
		$saved_assigned = $self->assigned;
		$finally_block = $this->_walk($finally_block);
		$finally = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$finally .= "\n" . $finally_block . ';';
		$self->assigned = $saved_assigned;
	}

	if (!empty($finally)) {
		$ret[] = 'try {';
	}

	$ret[] = 'try {';
	$saved_assigned = $self->assigned;
	$try_block = $this->_walk($try_block);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $try_block . ';';
	$ret[] = '}';
	
	if ($catch_block === NULL) {
		$ret[] = 'catch (JSException $e) {}';

	} else {
		$saved_assigned = $self->assigned;
		$self->catch_return = !empty($finally);
		$catch_block = $this->_walk($catch_block);
		$catch_block = implode("\n", $self->prestatement) . $catch_block;
		$self->prestatement = array();
		$self->catch_return = FALSE;
		$self->assigned = $saved_assigned;

		$ret[] = 'catch (JSException $e) {';
		$this->_walk(array('var', array(array($catch_var, array('raw', '$e->value'))))); // FIXME: leaks into current scope
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = $catch_block . ';';
		$ret[] = '}';

		$ret[] = 'catch (Exception $e) {';
		$e = $this->_walk(array('var', array(array($catch_var, array('raw', 'JS::fromNative($e)'))))); // FIXME: leaks into current scope
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = "if (!isset({$e}->properties['name'])) {" .
			"{$e}->properties['name'] = {$e}->class;" .
			"{$e}->attributes['name'] = 0; }";
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = $catch_block . ';';
		$ret[] = '}';
	}

	if (!empty($finally)) {
		$ret[] = '$processingFinally = TRUE;';
		$ret[] = $finally;
		$ret[] = '} catch (Exception $e) {';
		$ret[] = 'if (!isset($processingFinally)) {';
		$ret[] = $finally;
		$ret[] = '}';
		$ret[] = 'if ($e instanceof JSCatchReturn) { return $e->value; }';
		$ret[] = 'throw $e;';
		$ret[] = '}';
	}

	return implode("\n", $ret);

}
protected function _26($expr) { extract($this->_env, EXTR_REFS); $this->_walk($expr);
	$ret = $self->prestatement;
	$self->prestatement = array();
	return implode("\n", $ret);

}
protected function _27($exprs) { extract($this->_env, EXTR_REFS); foreach ($exprs as $expr) {
		$last = $this->_walk($expr);
	}

	return $last;

}
protected function _28($op, $lhs_expr, $rhs_expr, $p, $file) { extract($this->_env, EXTR_REFS); $rhs = $this->_walk($rhs_expr);

	if ($rhs[0] !== '$') {
		$tmp = $this->_walk(array('genvar_'));
		$self->prestatement[] = "$tmp = $rhs;";
		$rhs = $tmp;
	}

	if ($lhs_expr[0] === 'identifier') {
		$lhs = $this->_walk(array('lookup_', '$scope', $lhs_expr[1], 'up', TRUE, FALSE, $p, $file));

		$self->prestatement[] = 'if ($U' . substr($lhs, 2) . ') {' .
			'$global->properties[' . var_export($lhs_expr[1], TRUE) . '] = ' .
			$lhs . '; ' . $lhs . ' =& $global->properties[' . var_export($lhs_expr[1], TRUE) . ']; }';

	} else if ($lhs_expr[0] === 'index') {
		list(,$base, $index) = $lhs_expr;
		$base = $this->_walk($base);
		$index = $this->_walk($index);

		if ($base[0] !== '$') {
			$tmp = $this->_walk(array('genvar_'));
			$self->prestatement[] = $tmp . ' = ' . $base . ';';
			$base = $tmp;
		}

		$tmpIndex = $this->_walk(array('genvar_'));
		$self->prestatement[] = "$tmpIndex = JS::toString($index, \$global);";

		$self->prestatement[] = "if ($base === JS::\$undefined || $base === NULL) {";
		$this->_walk(array('TypeError_', 'Cannot assign property of undefined/null.', $p, $file));
		$self->prestatement[] = "}";
		$self->prestatement[] = $base . ' = JS::toObject(' . $base . ', $global);';

		$lhs = $this->_walk(array('lookup_', $base, $tmpIndex, 'prototype', FALSE, FALSE, $p, $file));

		$self->prestatement[] = 'if ($U' . substr($lhs, 2) . ' && (!isset(' . 
			$base . '->extensible) || ' . $base . '->extensible)) {' .
			$base . '->properties[' . $tmpIndex . '] = ' .
			$lhs . '; ' . $lhs . ' =& ' . $base . '->properties[' . $tmpIndex . ']; ' .
			$base . '->attributes[' . $tmpIndex . '] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; ' .
			'$U' . substr($lhs, 2) . ' = FALSE; $W' . substr($lhs, 2) . ' = TRUE; }';

	} else {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in assignment.', $p, $file));
		return '';
	}

	if ($op !== '=') {
		$rhs = $this->_walk(array('binary', substr($op, 0, -1), array('raw', $lhs), array('raw', $rhs), $p, $file));
	}

	if ($lhs_expr[0] === 'index') {
		$ret = $this->_walk(array('genvar_'));
		$tmp = $this->_walk(array('genvar_'));

		$self->prestatement[] = "if (isset({$base}->class) && {$base}->class === 'Array') { " .
			"if (isset({$base}->properties['length']) && {$base}->properties['length'] !== JS::\$undefined) { " .
				"$tmp = {$base}->properties['length']; } " .
			"else { $tmp = 0; } }";

		$self->prestatement[] = 'if (isset($S' . substr($lhs, 2) . ')) {';
		$self->prestatement[] =
			$ret . ' = ' . $this->_walk(array('call_', '$S' . substr($lhs, 2), array($rhs), $base, FALSE, $p, $file, FALSE)) . ';';
		$self->prestatement[] = '} else {';
		$self->prestatement[] = 'if (!$U' . substr($lhs, 2) . ') {' .
			$ret . ' = ' . $rhs . ';' .
			'if ($W' . substr($lhs, 2) . ') { ' . $lhs . ' = ' . $rhs . '; } ' .
			' }';
		$self->prestatement[] = 'else { ' . $ret . ' = JS::$undefined; }';
		$self->prestatement[] = '}';

		$self->prestatement[] = "if (isset({$base}->class) && {$base}->class === 'Array') {" .
				"if (is_int($index) && $index >= {$base}->properties['length']) { " .
					"{$base}->properties['length'] = $index + 1; }" .
				"else if ($tmpIndex === 'length' && is_int($rhs) && $tmp > $rhs) { " .
					"for (\$i = $rhs; \$i < $tmp; ++\$i) { " .
						"unset({$base}->properties[\$i], {$base}->attributes[\$i]); }" .
				"}" .
			"}";

		return $ret;

	} else {
		$self->prestatement[] = $lhs . ' = ' . $rhs . ';';
		return $lhs;
	}

}
protected function _29($base, $id, $up, $assign, $get, $p, $file) { extract($this->_env, EXTR_REFS); if (isset($self->assigned[$id])) {
		return $self->assigned[$id];
	}

	if ($assign) {
		$var = $this->_walk(array('varize_', $id));
		$self->assigned[$id] = $var;
	} else {
		$var = $this->_walk(array('genvar_'));
	}

	if ($assign) {
		$id = var_export($id, TRUE);
	}

	$v = substr($var, 2);
	$throw = !in_array($base, array('$scope', '$global'));

	if (!isset($self->lookups[$get][$throw][$up])) {
		$fn = $this->_walk(array('genfn_'));
		$saved_prestatement = $self->prestatement;
		$self->prestatement = array();
		$body[] = "function $fn(\$global, \$scope, \$base, \$id, \$line, \$column, \$file) {";


		if ($throw) {
			$self->prestatement[] = 'if ($base === JS::$undefined || $base === NULL) {';
			$this->_walk(array('TypeError_', 'Cannot lookup property of undefined/null.', array(array('raw', '$line'), array('raw', '$column')), array('raw', '$file')));
			$self->prestatement[] = '}';
		}

		$self->prestatement[] = "\$W$v = \$S$v = \$U$v = NULL;";
		$self->prestatement[] = '$lookup = JS::toObject($base, $global);';

		if ($get || !$throw) {
			$self->prestatement[] =
				'for (; $lookup && !(array_key_exists($id, $lookup->properties) || ' .
				'isset($lookup->attributes[$id])) && ' .
				'isset($lookup->' . $up . '); $lookup = $lookup->' . $up . ');';
		}

		$self->prestatement[] = 'if (array_key_exists($id, $lookup->properties)) { ' .
			$var . ' =& $lookup->properties[$id]; ' .
			(!$get ? ('$W' . substr($var, 2) . ' = !isset($lookup->attributes[$id]) || ' .
				'($lookup->attributes[$id] & JS::WRITABLE !== 0);') : '') .
			'}';

		if ($get) {
			$self->prestatement[] = 'else if (isset($lookup->attributes[$id]) && ' .
				'$lookup->attributes[$id] & JS::HAS_GETTER) { ';
			$self->prestatement[] =
				$var . ' = ' . $this->_walk(array('call_', '$lookup->getters[$id]', array(), '$lookup', FALSE, array(array('raw', '$line'), array('raw', '$column')), array('raw', '$file'), FALSE)) . '; }';

		} else {
			$self->prestatement[] = 'else if (isset($lookup->attributes[$id]) && ' .
				'$lookup->attributes[$id] & JS::HAS_SETTER) { ' .
					'$S' . substr($var, 2) . ' = $lookup->setters[$id]; ' .
				'}';
		}

		$self->prestatement[] = 'else { ' . $var . ' = JS::$undefined; $U' . substr($var, 2) . ' = TRUE; }';


		$body[] = implode("\n", $self->prestatement);

		$body[] = "return array(&$var, \$W$v, \$S$v, \$U$v);";
		$body[] = "}";

		$self->functions[$fn] = implode("\n", $body);
		$self->prestatement = $saved_prestatement;
		$self->lookups[$get][$throw][$up] = $fn;
	}

	$self->prestatement[] = "unset($var, \$W$v, \$S$v, \$U$v);";
	$tmp = $this->_walk(array('genvar_'));
	$self->prestatement[] =
		"$tmp = {$self->lookups[$get][$throw][$up]}(\$global, \$scope, $base, JS::toString($id, \$global), " .
		$this->_walk($p[0]) . ", " . $this->_walk($p[1]) . ", " . $this->_walk($file) . ");";
	$self->prestatement[] = "$var =& {$tmp}[0]; list(,\$W$v,\$S$v,\$U$v) = $tmp;";

	return $var;

}
protected function _30($function, $args, $leThis, $check, $p, $file, $constructor) { extract($this->_env, EXTR_REFS); $call = $this->_walk(array('genvar_'));
	$ret = $this->_walk(array('genvar_'));

	if ($check) {
		$self->prestatement[] = 'if (!(is_object(' . $function . ') && isset(' . $function . '->call))) { ';
		$this->_walk(array('TypeError_', 'Trying to call what is not a function.', $p, $file));
		$self->prestatement[] = '}';
	}

	if ($self->loader !== NULL) {
		$self->prestatement[] = "if (isset({$function}->loaded) && !{$function}->loaded) { " .
			"{$self->loader}({$function}, \$global); }";
	}

	$self->prestatement[] = $call . ' = ' . $function . '->call;';
	$self->prestatement[] = "\$global->trace[++\$global->trace_sp] = array(" . $this->_walk($file) . ", " . $this->_walk($p[0]) . ", " . $this->_walk($p[1]) . ");";
	$self->prestatement[] = $ret . ' = ' . $call . '($global, ' . $leThis . ', ' . $function .
		', array(' . implode(', ', $args) . '), ' . var_export($constructor, TRUE) . ');';
	$self->prestatement[] = "unset(\$global->trace[\$global->trace_sp--], \$global->scope[\$global->scope_sp--]);";

	return $ret;

}
protected function _31($cond_expr, $iftrue_expr, $iffalse_expr) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));
	$cond_expr = $this->_walk($cond_expr);

	$self->prestatement[] = 'if (JS::toBoolean(' . $cond_expr . ', $global)) {';

	$saved_assigned = $self->assigned;
	$iftrue_expr = $this->_walk($iftrue_expr);
	$self->assigned = $saved_assigned;

	$self->prestatement[] = $ret . ' = ' . $iftrue_expr . ';';

	$self->prestatement[] = '} else {';

	$saved_assigned = $self->assigned;
	$iffalse_expr = $this->_walk($iffalse_expr);
	$self->assigned = $saved_assigned;

	$self->prestatement[] = $ret . ' = ' . $iffalse_expr . ';';

	$self->prestatement[] = '}';

	return $ret;

}
protected function _32($op, $left_expr, $right_expr, $p, $file) { extract($this->_env, EXTR_REFS); switch ($op) {
		case '/':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);
			$self->prestatement[] = "if (JS::toNumber($r, \$global) == 0) { " .
				"$ret = ((string) JS::toNumber($r, \$global)) === '-0' ? -INF : INF; } " .
				"else { $ret = JS::toNumber($l, \$global) / JS::toNumber($r, \$global); }";
			return $ret;

		case '*':
		case '%':
		case '-':
			return '(JS::toNumber(' . $this->_walk($left_expr) . ', $global) ' . $op .
				' JS::toNumber(' . $this->_walk($right_expr) . ', $global))';

		case '<<':
		case '>>':
		case '&':
		case '|':
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$tmpL = $this->_walk(array('genvar_'));
			$tmpR = $this->_walk(array('genvar_'));
			$ret = $this->_walk(array('genvar_'));

			$self->prestatement[] = "$tmpL = JS::toNumber($l, \$global);";
			$self->prestatement[] = "$tmpR = JS::toNumber($r, \$global);";

			$l = $tmpL;
			$r = $tmpR;

			$self->prestatement[] = "if (is_nan($l)) { $l = 0; }";
			$self->prestatement[] = "if (is_nan($r)) { $r = 0; }";
			$self->prestatement[] = "$ret = $l $op $r;";

			return $ret;

		case '+':
			$l = $this->_walk(array('genvar_'));
			$r = $this->_walk(array('genvar_'));
			$left_expr = $this->_walk($left_expr);
			$right_expr = $this->_walk($right_expr);

			$self->prestatement[] = $l . ' = JS::toPrimitive(' . $left_expr . ', $global);';
			$self->prestatement[] = $r . ' = JS::toPrimitive(' . $right_expr . ', $global);';

			return '(is_string(' . $l . ') || is_string(' . $r . ') ' .
				'? JS::toString(' . $l . ', $global) . JS::toString(' . $r . ', $global) ' .
				': JS::toNumber(' . $l . ', $global) + JS::toNumber(' . $r . ', $global))';

		case '<':
		case '>':
		case '<=':
		case '>=':
			$not = FALSE;
			$l = $this->_walk(array('genvar_'));
			$r = $this->_walk(array('genvar_'));
			$result = $this->_walk(array('genvar_'));
			$left_expr = $this->_walk($left_expr);
			$right_expr = $this->_walk($right_expr);

			$self->prestatement[] = $l . ' = JS::toPrimitive(' . $left_expr . ', $global);';
			$self->prestatement[] = $r . ' = JS::toPrimitive(' . $right_expr . ', $global);';

			if ($op === '<') { // ok
			} else if ($op === '>') {
				$tmp = $r;
				$r = $l;
				$l = $tmp;

			} else if ($op === '<=') {
				$tmp = $r;
				$r = $l;
				$l = $tmp;
				$not = TRUE;
			} else if ($op === '>=') {
				$not = TRUE;
			}

			$tmpL = $this->_walk(array('genvar_'));
			$tmpR = $this->_walk(array('genvar_'));

			$self->prestatement[] = $result . ' = ' . ($not ? '!' : '') .
				'(is_string(' . $l . ') && is_string(' . $r . ') ? strcmp(' . $l . ', ' .  $r . ') < 0 : ' .
				"(!is_nan($tmpL = JS::toNumber($l, \$global)) && !is_nan($tmpR = JS::toNumber($r, \$global)) && " .
				"$tmpL < $tmpR));";

			return $result;

		case 'instanceof':
			$ret = $this->_walk(array('genvar_'));
			$tmp = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$self->prestatement[] = 'if (!is_object(' . $r . ') || ' . $r . ' === JS::$undefined || !isset(' . $r . '->call)) {';
			$this->_walk(array('TypeError_', 'Right-hand side of instanceof operator is not a function.', $p, $file));
			$self->prestatement[] = '}';

			$r = $this->_walk(array('index', array('raw', $r), array('string', 'prototype'), $p, $file));

			$self->prestatement[] = $ret . ' = FALSE;';
			$self->prestatement[] =
				"if (is_object($l) && $l !== JS::\$undefined) { " .
					"for ($tmp = $l, $tmp = {$tmp}->prototype; $tmp; $tmp = {$tmp}->prototype) { " .
						"if ($tmp === {$r}) { $ret = TRUE; break; } " .
					"} " .
				"}";

			return $ret;

		case 'in':
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			if ($l[0] !== '$') {
				$tmp = $this->_walk(array('genvar_'));
				$self->prestatement[] = $tmp . ' = ' . $l . ';';
				$l = $tmp;
			}

			if ($r[0] !== '$') {
				$tmp = $this->_walk(array('genvar_'));
				$self->prestatement[] = "$tmp = $r;";
				$r = $tmp;
			}

			$self->prestatement[] = $l . ' = JS::toString(' . $l . ', $global);';
			$self->prestatement[] = 'if (!is_object(' . $r . ') || ' . $r . ' === JS::$undefined) {';
			$this->_walk(array('TypeError_', 'Right-hand side of in operator is not an object.', $p, $file));
			$self->prestatement[] = '}';
			
			return '(array_key_exists(' . $l . ', ' . $r . '->properties) || ' .
				'array_key_exists(' . $l . ', ' . $r . '->attributes))';

		case '==':
		case '!=':
			$ret = $this->_walk(array('genvar_'));
			$tmpL = $this->_walk(array('genvar_'));
			$tmpR = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);
			
			$self->prestatement[] = $tmpL . ' = ' . $l . ';';
			$self->prestatement[] = $tmpR . ' = ' . $r . ';';
			$l = $tmpL;
			$r = $tmpR;

			$self->prestatement[] = 'if (gettype(' . $l . ') === gettype(' . $r . ')) { ' .
				$ret . ' = ' . $l . $op . '=' . $r . '; }';
			$self->prestatement[] = "else if ($l === JS::\$undefined && $r === NULL || " .
				"$l === NULL && $r === JS::\$undefined) { $ret = " . ($op === '!=' ? 'FALSE' : 'TRUE') . "; }";
			$self->prestatement[] = "else if ($l === NULL || $r === NULL) { $ret = " . ($op === '!=' ? 'TRUE' : 'FALSE') . "; }";
			$self->prestatement[] = 'else { ' . $l . ' = JS::toPrimitive(' . $l . ', $global); ' .
				$r . ' = JS::toPrimitive(' . $r . ', $global); ';
			$self->prestatement[] = "if (is_bool($l)) { $l = (int) $l; }";
			$self->prestatement[] = "if (is_bool($r)) { $r = (int) $r; }";
			$self->prestatement[] = 'if (is_numeric(' . $l . ') || is_numeric(' . $r . ')) { ' .
				$l . ' = JS::toNumber(' . $l . ', $global); ' .
				$r . ' = JS::toNumber(' . $r . ', $global); }';
			$self->prestatement[] = $ret . ' = ' . $l . $op . '=' . $r . ';}';

			return $ret;

		case '===':
		case '!==':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$self->prestatement[] = $ret . ' = ' . ($op === '!==' ? '!' : '') .
				'(((gettype(' . $l . ') === gettype(' . $r . ') && ' .
				$l . ' === ' . $r . '))' .
				"|| (((is_float($l) || is_int($l)) && (is_float($r) || is_int($r))) && $l == $r));";

			return $ret;

		case '&&':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);

			$self->prestatement[] = $ret . ' = ' . $l . ';';
			$self->prestatement[] = 'if (JS::toBoolean(' . $ret . ', $global)) {';
			$saved_assigned = $self->assigned;
			$r = $this->_walk($right_expr);
			$self->assigned = $saved_assigned;
			$self->prestatement[] = $ret . ' = ' . $r . '; }';

			return $ret;

		case '||':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);

			$self->prestatement[] = $ret . ' = ' . $l . ';';
			$self->prestatement[] = 'if (!JS::toBoolean(' . $ret . ', $global)) {';
			$saved_assigned = $self->assigned;
			$r = $this->_walk($right_expr);
			$self->assigned = $saved_assigned;
			$self->prestatement[] = $ret . ' = ' . $r . '; }';

			return $ret;

		case '>>>':
		case '^':
		default:
			throw new Exception('Operator ' . $op . ' not implemented.');
	}

}
protected function _33($expr, $p, $file) { extract($this->_env, EXTR_REFS); $ret_var = $this->_walk(array('genvar_'));

	if ($expr[0] === 'call') {
		$this->_walk($expr);
		return 'TRUE';

	} else if ($expr[0] === 'identifier') {
		$base = $this->_walk(array('genvar_'));
		$index = var_export($expr[1], TRUE);
		$self->prestatement[] =
			"for ($base = \$scope; $base && {$base}->up && !array_key_exists($index, " .
			"{$base}->attributes) && !array_key_exists($index, {$base}->properties); $base = {$base}->up);";

	} else if ($expr[0] === 'index') {
		list(,$base, $index) = $expr;
		$base = $this->_walk($base);
		$index = $this->_walk($index);

	} else {
		$this->_walk(array('ReferenceError_', 'Invalid delete expression.', $p, $file));
	}

	if (isset($base) && isset($index)) {
		$self->prestatement[] = 'if (!array_key_exists(' . $index . ', ' . $base . '->attributes)) { ' .
			'unset(' . $base . '->properties[' . $index . ']' .
			($expr[0] === 'identifier' && isset($self->assigned[$expr[1]]) ? ', ' .
				$self->assigned[$expr[1]] : '') . '); ' .
			$ret_var . ' = TRUE; }';
		$self->prestatement[] = 'else if (' . $base . '->attributes[' . $index . '] & JS::CONFIGURABLE) { ' .
			'unset(' . $base . '->properties[' . $index . '], ' . $base . '->attributes[' . $index . '], ' .
			$base . '->getters[' . $index . '], ' . $base . '->setters[' . $index . ']' .
			($expr[0] === 'identifier' && isset($self->assigned[$expr[1]]) ? ', ' .
				$self->assigned[$expr[1]] : '') . '); ' .
			$ret_var . ' = TRUE; }';
		$self->prestatement[] = 'else { ' . $ret_var . ' = FALSE; }';

		if ($expr[0] === 'identifier') {
			unset($self->assigned[$expr[1]]);
		}
	}

	return $ret_var;

}
protected function _34($expr) { extract($this->_env, EXTR_REFS); $this->_walk($expr);
	return 'JS::$undefined';

}
protected function _35($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = $ret . " = ({$ret} === JS::\$undefined ? 'undefined' : (" .
		"is_int($ret) || is_float($ret) ? 'number' : (" .
		"is_bool($ret) ? 'boolean' : (" .
		"is_string($ret) ? 'string' : (" .
		"is_object($ret) && isset({$ret}->call) ? 'function' : 'object')))));";
	
	return $ret;

}
protected function _36($expr, $p, $file) { extract($this->_env, EXTR_REFS); if ($expr[0] !== 'identifier' && $expr[0] !== 'index') {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in preincrement.', $p, $file));
		return 'JS::$undefined';
	}

	$expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ++' . $expr . ';';
	return $ret;

}
protected function _37($expr, $p, $file) { extract($this->_env, EXTR_REFS); if ($expr[0] !== 'identifier' && $expr[0] !== 'index') {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in predecrement.', $p, $file));
		return 'JS::$undefined';
	}

	$expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = --' . $expr . ';';
	return $ret;

}
protected function _38($expr) { extract($this->_env, EXTR_REFS); return '(+JS::toNumber(' . $this->_walk($expr) . ', $global))';
}
protected function _39($expr) { extract($this->_env, EXTR_REFS); return '(-1.0 * JS::toNumber(' . $this->_walk($expr) . ', $global))';
}
protected function _40($expr) { extract($this->_env, EXTR_REFS); return '(~JS::toNumber(' . $this->_walk($expr) . ', $global))';
}
protected function _41($expr) { extract($this->_env, EXTR_REFS); return '(!JS::toBoolean(' . $this->_walk($expr) . ', $global))';
}
protected function _42($expr, $p, $file) { extract($this->_env, EXTR_REFS); if ($expr[0] !== 'identifier' && $expr[0] !== 'index') {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in postincrement.', $p, $file));
		return 'JS::$undefined';
	}

	$expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = '++' . $expr . ';';
	return $ret;

}
protected function _43($expr, $p, $file) { extract($this->_env, EXTR_REFS); if ($expr[0] !== 'identifier' && $expr[0] !== 'index') {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in postdecrement.', $p, $file));
		return 'JS::$undefined';
	}

	$expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = '--' . $expr . ';';
	return $ret;

}
protected function _44($fn_expr, $arguments, $p, $file) { extract($this->_env, EXTR_REFS); if ($fn_expr[0] === 'index') {
		list(,$base, $index) = $fn_expr;
		$base = $this->_walk($base);
		$index = $this->_walk($index);

		$tmp = $this->_walk(array('genvar_'));

		$self->prestatement[] = "if ($base === JS::\$undefined || $base === NULL) {";
		$this->_walk(array('TypeError_', 'Cannot call function on undefined/null.', $p, $file));
		$self->prestatement[] = "}";
		$self->prestatement[] = $tmp . ' = JS::toObject(' . $base . ', $global);';

		$fn = $this->_walk(array('lookup_', $tmp, $index, 'prototype', FALSE, TRUE, $p, $file));

		return $this->_walk(array('call_', $fn, $this->_walkeach($arguments), $tmp, TRUE, $p, $file, FALSE));

	} else {
		$check = !($fn_expr[0] === 'identifier' && preg_match('~Error$~', $fn_expr[1]));
		$fn = $this->_walk($fn_expr);
		return $this->_walk(array('call_', $fn, $this->_walkeach($arguments), '$global', $check, $p, $file, FALSE));
	}

}
protected function _45($base, $index_expr, $p, $file) { extract($this->_env, EXTR_REFS); $base = $this->_walk($base);
	$index = $this->_walk($index_expr);

	if ($base[0] !== '$') {
		$tmp = $this->_walk(array('genvar_'));
		$self->prestatement[] = $tmp . ' = ' . $base . ';';
		$base = $tmp;
	}

	return $this->_walk(array('lookup_', $base, $index, 'prototype', FALSE, TRUE, $p, $file));

}
protected function _46($expr, $arguments_exprs_list, $p, $file) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));
	$tmp = $this->_walk(array('genvar_'));

	$constructor = $this->_walk($expr);
	$arguments = $this->_walkeach($arguments_exprs_list);

	$self->prestatement[] = $ret . ' = clone JS::$objectTemplate;';
	$self->prestatement[] = $tmp . ' = ' .
		$this->_walk(array('lookup_', $constructor, var_export('prototype', TRUE), 'prototype', FALSE, TRUE, $p, $file)) . ';';
	$self->prestatement[] = $ret . '->prototype = ' . $tmp . ';';

	$self->prestatement[] = $tmp . ' = ' . $this->_walk(array('call_', $constructor, $arguments, $ret, TRUE, $p, $file, TRUE)) . ';';
	$self->prestatement[] = 'if (is_object(' . $tmp . ') && ' . $tmp . ' !== JS::$undefined) { ' .
		$ret . ' = ' . $tmp . '; }';

	return $ret;

}
protected function _47() { extract($this->_env, EXTR_REFS); return '$leThis';
}
protected function _48() { extract($this->_env, EXTR_REFS); return var_export(NULL, TRUE);
}
protected function _49() { extract($this->_env, EXTR_REFS); return var_export(TRUE, TRUE);
}
protected function _50() { extract($this->_env, EXTR_REFS); return var_export(FALSE, TRUE);
}
protected function _51() { extract($this->_env, EXTR_REFS); return 'JS::$undefined';
}
protected function _52($n) { extract($this->_env, EXTR_REFS); return var_export($n, TRUE);
}
protected function _53($s) { extract($this->_env, EXTR_REFS); return var_export($s, TRUE);
}
protected function _54($regexp, $flags, $p, $file) { extract($this->_env, EXTR_REFS); return $this->_walk(array('new',
		array('identifier', 'RegExp', $p, $file, TRUE),
		array(array('string', $regexp), array('string', $flags)),
		$p, $file));

}
protected function _55($identifier, $p, $file, $throw) { extract($this->_env, EXTR_REFS); $assigned = isset($self->assigned[$identifier]);

	$ret = $this->_walk(array('lookup_', '$scope', $identifier, 'up', TRUE, TRUE, $p, $file));

	if ($throw && !$assigned) {
		$self->prestatement[] = "if (\$U" . substr($ret, 2) . ") {";
		$this->_walk(array('ReferenceError_', "$identifier is not defined", $p, $file));
		$self->prestatement[] = "}";
	}

	return $ret;

}
protected function _56($elements_list) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));

	$self->prestatement[] = $ret . ' = clone JS::$arrayTemplate;';
	$self->prestatement[] = $ret . '->properties[\'length\'] = ' . count($elements_list) . ';';
	$self->prestatement[] = $ret . '->attributes[\'length\'] = JS::WRITABLE;';

	foreach ($elements_list as $i => $element) {
		if ($element === NULL) { continue; }
		$element = $this->_walk($element);
		$self->prestatement[] = $ret . '->properties[' . $i . '] = ' . $element . ';';
		$self->prestatement[] = $ret . '->attributes[' . $i . '] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;';
	}

	return $ret;

}
protected function _57($properties_list) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));

	$self->prestatement[] = $ret . ' = clone JS::$objectTemplate;';

	foreach ($properties_list as $property) {
		list($name, $value) = $property;
		$name = var_export($name, TRUE);
		$value = $this->_walk($value);
		$self->prestatement[] = $ret . '->properties[' . $name . '] = ' . $value . ';';
		$self->prestatement[] = $ret . '->attributes[' . $name . '] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;';
	}

	return $ret;

}
protected function _58($parts) { extract($this->_env, EXTR_REFS); return implode('', $this->_walkeach($parts));
}
protected function _59($code) { extract($this->_env, EXTR_REFS); return trim($code);
}

}
