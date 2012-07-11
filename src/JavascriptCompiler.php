<?php
class JavascriptCompiler
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
		'prefix' => uniqid(),
		'varCounter' => 0,
		'fnCounter' => 0,
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
        case 'program_':
            list($_, $_0) = $node;
            $ret = $this->_0($_0);
        break;
        case 'genvar_':
            $ret = $this->_1();
        break;
        case 'genfn_':
            $ret = $this->_2();
        break;
        case 'varize_':
            list($_, $_0) = $node;
            $ret = $this->_3($_0);
        break;
        case 'TypeError_':
            list($_, $_0) = $node;
            $ret = $this->_4($_0);
        break;
        case 'ReferenceError_':
            list($_, $_0) = $node;
            $ret = $this->_5($_0);
        break;
        case 'block':
            list($_, $_0) = $node;
            $ret = $this->_6($_0);
        break;
        case 'php_statement':
            list($_, $_0) = $node;
            $ret = $this->_7($_0);
        break;
        case 'function':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_8($_0, $_1, $_2);
        break;
        case 'var':
            list($_, $_0) = $node;
            $ret = $this->_9($_0);
        break;
        case 'if':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_10($_0, $_1, $_2);
        break;
        case 'do':
            list($_, $_0, $_1) = $node;
            $ret = $this->_11($_0, $_1);
        break;
        case 'while':
            list($_, $_0, $_1) = $node;
            $ret = $this->_12($_0, $_1);
        break;
        case 'for_in':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_13($_0, $_1, $_2);
        break;
        case 'for':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_14($_0, $_1, $_2, $_3);
        break;
        case 'continue':
            list($_, $_0) = $node;
            $ret = $this->_15($_0);
        break;
        case 'break':
            list($_, $_0) = $node;
            $ret = $this->_16($_0);
        break;
        case 'return':
            list($_, $_0) = $node;
            $ret = $this->_17($_0);
        break;
        case 'with':
            list($_, $_0, $_1) = $node;
            $ret = $this->_18($_0, $_1);
        break;
        case 'labelled':
            list($_, $_0, $_1) = $node;
            $ret = $this->_19($_0, $_1);
        break;
        case 'switch':
            list($_, $_0, $_1) = $node;
            $ret = $this->_20($_0, $_1);
        break;
        case 'case':
            list($_, $_0, $_1) = $node;
            $ret = $this->_21($_0, $_1);
        break;
        case 'default':
            list($_, $_0) = $node;
            $ret = $this->_22($_0);
        break;
        case 'throw':
            list($_, $_0) = $node;
            $ret = $this->_23($_0);
        break;
        case 'try':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_24($_0, $_1, $_2, $_3);
        break;
        case 'discard':
            list($_, $_0) = $node;
            $ret = $this->_25($_0);
        break;
        case 'exprs':
            list($_, $_0) = $node;
            $ret = $this->_26($_0);
        break;
        case 'assignment':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_27($_0, $_1, $_2);
        break;
        case 'lookup_':
            list($_, $_0, $_1, $_2, $_3, $_4) = $node;
            $ret = $this->_28($_0, $_1, $_2, $_3, $_4);
        break;
        case 'call_':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_29($_0, $_1, $_2, $_3);
        break;
        case 'cond':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_30($_0, $_1, $_2);
        break;
        case 'binary':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_31($_0, $_1, $_2);
        break;
        case 'delete':
            list($_, $_0) = $node;
            $ret = $this->_32($_0);
        break;
        case 'void':
            list($_, $_0) = $node;
            $ret = $this->_33($_0);
        break;
        case 'typeof':
            list($_, $_0) = $node;
            $ret = $this->_34($_0);
        break;
        case 'preinc':
            list($_, $_0) = $node;
            $ret = $this->_35($_0);
        break;
        case 'predec':
            list($_, $_0) = $node;
            $ret = $this->_36($_0);
        break;
        case 'positive':
            list($_, $_0) = $node;
            $ret = $this->_37($_0);
        break;
        case 'negative':
            list($_, $_0) = $node;
            $ret = $this->_38($_0);
        break;
        case 'inverse':
            list($_, $_0) = $node;
            $ret = $this->_39($_0);
        break;
        case 'not':
            list($_, $_0) = $node;
            $ret = $this->_40($_0);
        break;
        case 'postinc':
            list($_, $_0) = $node;
            $ret = $this->_41($_0);
        break;
        case 'postdec':
            list($_, $_0) = $node;
            $ret = $this->_42($_0);
        break;
        case 'call':
            list($_, $_0, $_1) = $node;
            $ret = $this->_43($_0, $_1);
        break;
        case 'index':
            list($_, $_0, $_1) = $node;
            $ret = $this->_44($_0, $_1);
        break;
        case 'new':
            list($_, $_0, $_1) = $node;
            $ret = $this->_45($_0, $_1);
        break;
        case 'this':
            $ret = $this->_46();
        break;
        case 'null':
            $ret = $this->_47();
        break;
        case 'true':
            $ret = $this->_48();
        break;
        case 'false':
            $ret = $this->_49();
        break;
        case 'undefined':
            $ret = $this->_50();
        break;
        case 'number':
            list($_, $_0) = $node;
            $ret = $this->_51($_0);
        break;
        case 'string':
            list($_, $_0) = $node;
            $ret = $this->_52($_0);
        break;
        case 'regexp':
            list($_, $_0, $_1) = $node;
            $ret = $this->_53($_0, $_1);
        break;
        case 'identifier':
            list($_, $_0) = $node;
            $ret = $this->_54($_0);
        break;
        case 'array':
            list($_, $_0) = $node;
            $ret = $this->_55($_0);
        break;
        case 'object':
            list($_, $_0) = $node;
            $ret = $this->_56($_0);
        break;
        case 'php':
            list($_, $_0) = $node;
            $ret = $this->_57($_0);
        break;
        case 'raw':
            list($_, $_0) = $node;
            $ret = $this->_58($_0);
        break;
        }

        array_pop($this->_stack);
        return $ret;
    }

    public function __invoke($ast)
    {
        /*$this->_init();*/
        extract($this->_env, EXTR_REFS);
        $ret = $this->_walk(array("program_", $ast));
        	return implode("\n", $self->functions) . "\n$ret";

    }

protected function _0($ast) { extract($this->_env, EXTR_REFS); $ret = array();
	$fn = $this->_walk(array("genfn_"));

	$ret[] = 'function ' . $fn . '($global = NULL) {';
	$ret[] = "if (!is_object(\$global)) {
		\$global = (object) array(
			'properties' => array(),
			'attributes' => array(),
			'getters' => array(),
			'setters' => array(),
			'prototype' => NULL,
			'up' => NULL,
		); }";
	$ret[] = '$scope = $global;';

	$code = $this->_walk($ast);

	if (!empty($self->prestatement)) {
		$ret[] = implode("\n", $self->prestatement);
	}

	if (!empty($code)) {
		$ret[] = $code;
	}
	$ret[] = ';';
	$ret[] = 'return JS::$undefined;';
	$ret[] = '}';
	$ret[] = 'return ' . var_export($fn, TRUE) . ';';

	return implode("\n", $ret) . "\n";

}
protected function _1() { extract($this->_env, EXTR_REFS); return '$x' . $self->varCounter++;
}
protected function _2() { extract($this->_env, EXTR_REFS); return '_' . $self->prefix . '_' . $self->fnCounter++;
}
protected function _3($identifier) { extract($this->_env, EXTR_REFS); return '$_' . str_replace(array('$', '_'), array('_dlr_', '__'), $identifier);
}
protected function _4($msg) { extract($this->_env, EXTR_REFS); $saved_assigned = $self->assigned;
	$error = $this->_walk(array('call',
		array('identifier', 'TypeError'),
		array(array('string', $msg))));
	$self->prestatement[] = $this->_walk(array('throw', array('raw', $error)));
	$self->assigned = $saved_assigned;

}
protected function _5($msg) { extract($this->_env, EXTR_REFS); $saved_assigned = $self->assigned;
	$error = $this->_walk(array('call',
		array('identifier', 'ReferenceError'),
		array(array('string', $msg))));
	$self->prestatement[] = $this->_walk(array('throw', array('raw', $error)));
	$self->assigned = $saved_assigned;

}
protected function _6($statements) { extract($this->_env, EXTR_REFS); $ret = array();
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
protected function _7($parts) { extract($this->_env, EXTR_REFS); $ret = array();
	$parts = $this->_walkeach($parts);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = implode('', $parts);
	return implode("\n", $ret);

}
protected function _8($name, $parameters_list, $body) { extract($this->_env, EXTR_REFS); $fn = $this->_walk(array('genfn_'));

	$saved_prestatement = $self->prestatement;
	$saved_assigned = $self->assigned;
	$self->prestatement = array();
	$self->assigned = array();

	$ret = $this->_walk(array('genvar_'));
	$arguments = $this->_walk(array('genvar_'));

	$self->prestatement[] = 'if (isset($fn->boundThis)) { $leThis = $fn->boundThis; }';
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
	}

	if (!empty($name) && !in_array($name, $parameters_list)) {
		$self->assigned[$name] = $this->_walk(array('varize_', $name));
		$self->prestatement[] = '$scope->properties[' . var_export($name, TRUE) . '] = $fn;';
		$self->prestatement[] = $self->assigned[$name] . ' =& $scope->properties[' . var_export($name, TRUE) . '];';
	}

	$body = $this->_walk($body);
	$self->functions[] = implode("\n", array('function ' . $fn . '($global, $leThis, $fn, $args) {',
		implode("\n", $self->prestatement), $body, ';', 'return JS::$undefined;', '}'));
	$self->prestatement = $saved_prestatement;
	$self->assigned = $saved_assigned;

	$var = $this->_walk(array('genvar_'));
	$self->prestatement[] = $var . ' = clone JS::$functionTemplate; ' .
		$var . '->call = ' . var_export($fn, TRUE) . '; ' .
		$var . '->parameters = ' . var_export($parameters_list, TRUE) . '; ' .
		($name !== NULL ? $var . '->name = ' . var_export($name, TRUE) . '; ' : '') .
		$var . '->scope = $scope; ' .
		$var . '->properties[\'prototype\'] = clone JS::$objectTemplate; ' .
		$var . '->attributes[\'prototype\'] = JS::WRITABLE; ' .
		$var . '->properties[\'prototype\']->properties[\'constructor\'] = ' . $var . '; ' .
		$var . '->properties[\'prototype\']->attributes[\'constructor\'] = JS::WRITABLE | JS::CONFIGURABLE; ' .
		$var . '->properties[\'length\'] = ' . count($parameters_list) . '; ' .
		$var . '->attributes[\'length\'] = 0;';
	
	return $var;

}
protected function _9($declarations_list) { extract($this->_env, EXTR_REFS); $ret = '';

	foreach ($declarations_list as $declaration) {
		list($varname, $expr) = $declaration;
		$phpVarname = $this->_walk(array('varize_', $varname));

		if (!$expr) {
			$expr = array('raw', 'JS::$undefined');
		}

		$expr = $this->_walk($expr);

		if (isset($self->assigned[$varname])) {
			$self->prestatement[] = 'unset(' . $self->assigned[$varname] . ');';
		}

		$self->prestatement[] = '$scope->properties[' . var_export($varname, TRUE) . '] = ' .
			$expr . '; ' . $phpVarname . ' =& $scope->properties[' . var_export($varname, TRUE) . '];';
		$self->assigned[$varname] = $ret = $phpVarname;
	}

	return $ret;

}
protected function _10($cond_expr, $statement, $else_statement) { extract($this->_env, EXTR_REFS); $ret = array();

	$cond_expr = $this->_walk($cond_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'if (JS::toBoolean(' . $cond_expr . ')) {';
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
protected function _11($cond_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();

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
protected function _12($cond_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();

	$ret[] = 'for (;;) {';

	$cond = $this->_walk($cond_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'if (!JS::toBoolean(' . $cond . ')) { break; }';

	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _13($assignment_expr, $in_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();
	$tmp = $this->_walk(array('genvar_'));

	$in_expr = $this->_walk($in_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	$assignment_expr = $this->_walk($assignment_expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();

	$ret[] = "for ($tmp = $in_expr; $tmp; $tmp = {$tmp}->prototype) {";

	$ret[] = 'foreach (' . $tmp . '->attributes as $property => $attributes) {';
	$ret[] = 'if (!($attributes & JS::ENUMERABLE)) { continue; }';

	$ret[] = $assignment_expr . ' = $property;';

	$saved_assigned = $self->assigned;
	$statement = $this->_walk($statement);
	$self->assigned = $saved_assigned;
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = $statement . ';';

	$ret[] = '}';

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _14($init_expr, $cond_expr, $iter_expr, $statement) { extract($this->_env, EXTR_REFS); $ret = array();
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
		$ret[] = 'if (!JS::toBoolean(' . $cond . ')) { break; }';
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
protected function _15($label) { extract($this->_env, EXTR_REFS); if ($label) {
		throw new Exception('Labels not implemented.');
	}

	return 'continue;';

}
protected function _16($label) { extract($this->_env, EXTR_REFS); if ($label) {
		throw new Exception('Labels not implemented.');
	}

	return 'break;';

}
protected function _17($expr) { extract($this->_env, EXTR_REFS); $ret = array();

	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'return ' . $expr . ';';

	return implode("\n", $ret);

}
protected function _18($expr, $statement) { extract($this->_env, EXTR_REFS); throw new Exception('with not implemented.');

}
protected function _19($label, $statement) { extract($this->_env, EXTR_REFS); throw new Exception('Labels not implemented.');

}
protected function _20($expr, $clauses_list) { extract($this->_env, EXTR_REFS); // FIXME
	$ret = array();

	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'switch (' . $expr . ') {';

	$ret = array_merge($ret, $this->_walkeach($clauses_list));

	$ret[] = '}';

	return implode("\n", $ret);

}
protected function _21($expr, $statement) { extract($this->_env, EXTR_REFS); // FIXME
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
protected function _22($statement) { extract($this->_env, EXTR_REFS); // FIXME
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
protected function _23($expr) { extract($this->_env, EXTR_REFS); $ret = array();
	$expr = $this->_walk($expr);
	$ret[] = implode("\n", $self->prestatement);
	$self->prestatement = array();
	$ret[] = 'throw new JSException(' . $expr . ');';

	return implode("\n", $ret);

}
protected function _24($try_block, $catch_var, $catch_block, $finally_block) { extract($this->_env, EXTR_REFS); $ret = array();
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
		$catch_block = $this->_walk($catch_block);
		$self->assigned = $saved_assigned;
		$ret[] = 'catch (JSException $e) {';
		$this->_walk(array('var', array(array($catch_var, array('raw', '$e->value'))))); // FIXME: leaks into current scope
		$ret[] = implode("\n", $self->prestatement);
		$self->prestatement = array();
		$ret[] = $catch_block . ';';
		$ret[] = '}';
	}

	if (!empty($finally)) {
		$ret[] = '$processingFinally = TRUE;';
		$ret[] = $finally;
		$ret[] = '} catch (Exception $e) {';
		$ret[] = 'if (!$processingFinally) {';
		$ret[] = $finally;
		$ret[] = '}';
		$ret[] = 'throw $e;';
		$ret[] = '}';
	}

	return implode("\n", $ret);

}
protected function _25($expr) { extract($this->_env, EXTR_REFS); $this->_walk($expr);
	$ret = $self->prestatement;
	$self->prestatement = array();
	return implode("\n", $ret);

}
protected function _26($exprs) { extract($this->_env, EXTR_REFS); foreach ($exprs as $expr) {
		$last = $this->_walk($expr);
	}

	return $last;

}
protected function _27($op, $lhs_expr, $rhs_expr) { extract($this->_env, EXTR_REFS); if ($lhs_expr[0] === 'identifier') {
		$lhs = $this->_walk(array('lookup_', '$scope', $lhs_expr[1], 'up', TRUE, FALSE));

		$self->prestatement[] = 'if (isset($U' . substr($lhs, 2) . ')) {' .
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

		$self->prestatement[] = $base . ' = JS::toObject(' . $base . ');';

		$lhs = $this->_walk(array('lookup_', $base, $index, 'prototype', FALSE, FALSE));

		$self->prestatement[] = 'if (isset($U' . substr($lhs, 2) . ') && (!isset(' . 
			$base . '->extensible) || ' . $base . '->extensible)) {' .
			$base . '->properties[' . $index . '] = ' .
			$lhs . '; ' . $lhs . ' =& ' . $base . '->properties[' . $index . ']; ' .
			$base . '->attributes[' . $index . '] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; ' .
			'unset($U' . substr($lhs, 2) . '); $W' . substr($lhs, 2) . ' = TRUE; }';

	} else {
		$this->_walk(array('ReferenceError_', 'Invalid left-hand side in assignment.'));
		return '';
	}

	$rhs = $this->_walk($rhs_expr);

	if ($op !== '=') {
		$rhs = $this->_walk(array('binary', substr($op, 0, -1), array('raw', $lhs), array('raw', $rhs)));
	}

	if ($lhs_expr[0] === 'index') {
		$ret = $this->_walk(array('genvar_'));

		$self->prestatement[] = 'if (isset($S' . substr($lhs, 2) . ')) {';
		$self->prestatement[] =
			$ret . ' = ' . $this->_walk(array('call_', '$S' . substr($lhs, 2), array($rhs), $base, FALSE)) . ';';
		$self->prestatement[] = '} else {';
		$self->prestatement[] = 'if (!isset($U' . substr($lhs, 2) . ')) {' .
			$ret . ' = ' . $rhs . ';' .
			'if ($W' . substr($lhs, 2) . ') { ' . $lhs . ' = ' . $rhs . '; } ' .
			' }';
		$self->prestatement[] = 'else { ' . $ret . ' = JS::$undefined; }';
		$self->prestatement[] = '}';

		return $ret;

	} else {
		$self->prestatement[] = $lhs . ' = ' . $rhs . ';';
		return $lhs;
	}

}
protected function _28($base, $id, $up, $assign, $get) { extract($this->_env, EXTR_REFS); if (isset($self->assigned[$id])) {
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

	if (!in_array($base, array('$scope', '$global'))) {
		$self->prestatement[] = 'if (' . $base . ' === JS::$undefined || ' . $base . ' === NULL) {';
		$this->_walk(array('TypeError_', 'Cannot lookup property of undefined/null.'));
		$self->prestatement[] = '}';
	}

	$self->prestatement[] = '$lookup = JS::toObject(' . $base . ');';

	if ($get) {
		$self->prestatement[] =
			'for (; $lookup && !(array_key_exists(' . $id . ', $lookup->properties) ||
			isset($lookup->attributes[' . $id . '])) &&
			isset($lookup->' . $up . '); $lookup = $lookup->' . $up . ');';
	}
	
	$self->prestatement[] = 'if (array_key_exists(' . $id . ', $lookup->properties)) { ' .
		$var . ' =& $lookup->properties[' . $id . ']; ' . 
		(!$get ? ('$W' . substr($var, 2) . ' = !isset($lookup->attributes[' . $id . ']) || ' .
			'($lookup->attributes[' . $id . '] & JS::WRITABLE !== 0);') : '') .
		'}';
	
	if ($get) {
		$self->prestatement[] = 'else if (isset($lookup->attributes[' . $id . ']) && ' .
			'$lookup->attributes[' . $id . '] & JS::HAS_GETTER) { ';
		$self->prestatement[] =
			$var . ' = ' . $this->_walk(array('call_', '$lookup->getters[' . $id . ']', array(), '$lookup', FALSE)) . '; }';

	} else {
		$self->prestatement[] = 'else if (isset($lookup->attributes[' . $id . ']) && ' .
			'$lookup->attributes[' . $id . '] & JS::HAS_SETTER) { ' .
				'$S' . substr($var, 2) . ' = $lookup->setters[' . $id . ']; ' .
			'}';
	}

	$self->prestatement[] = 'else { ' . $var . ' = JS::$undefined; $U' . substr($var, 2) . ' = TRUE; }'; 

	return $var;

}
protected function _29($function, $args, $leThis, $check) { extract($this->_env, EXTR_REFS); $call = $this->_walk(array('genvar_'));
	$ret = $this->_walk(array('genvar_'));

	if ($check) {
		$self->prestatement[] = 'if (!(is_object(' . $function . ') && isset(' . $function . '->call))) { ';
		$this->_walk(array('TypeError_', 'Trying to call what is not a function.'));
		$self->prestatement[] = '}';
	}

	$self->prestatement[] = $call . ' = ' . $function . '->call;';
	$self->prestatement[] = $ret . ' = ' . $call . '($global, ' . $leThis . ', ' . $function .
		', array(' . implode(', ', $args) . '));';

	return $ret;

}
protected function _30($cond_expr, $iftrue_expr, $iffalse_expr) { extract($this->_env, EXTR_REFS); $var = $this->_walk(array('genvar_'));
	$cond_expr = $this->_walk($cond_expr);
	$self->prestatement[] = 'if (JS::toBoolean(' . $cond_expr . ')) {';
	$iftrue_expr = $this->_walk($iftrue_expr);
	$self->prestatement[] = '} else {';
	$iffalse_expr = $this->_walk($iffalse_expr);
	$self->prestatement[] = '}';

	return 'JS::toBoolean(' . $cond_expr . ') ? ' . $iftrue_expr . ' : ' . $iffalse_expr;

}
protected function _31($op, $left_expr, $right_expr) { extract($this->_env, EXTR_REFS); switch ($op) {
		case '*':
		case '/':
		case '%':
		case '-':
		case '<<':
		case '>>':
		case '&':
		case '|':
		case '^':
			return 'JS::toNumber(' . $this->_walk($left_expr) . ') ' . $op .
				' JS::toNumber(' . $this->_walk($right_expr) . ')';

		case '+':
			$l = $this->_walk(array('genvar_'));
			$r = $this->_walk(array('genvar_'));
			$left_expr = $this->_walk($left_expr);
			$right_expr = $this->_walk($right_expr);

			$self->prestatement[] = $l . ' = JS::toPrimitive(' . $left_expr . ');';
			$self->prestatement[] = $r . ' = JS::toPrimitive(' . $right_expr . ');';

			return 'is_string(' . $l . ') || is_string(' . $r . ') ' .
				'? JS::toString(' . $l . ') . JS::toString(' . $r . ') ' .
				': JS::toNumber(' . $l . ') + JS::toNumber(' . $r . ')';

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

			$self->prestatement[] = $l . ' = JS::toPrimitive(' . $left_expr . ');';
			$self->prestatement[] = $r . ' = JS::toPrimitive(' . $right_expr . ');';

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

			$self->prestatement[] = $result . ' = ' . ($not ? '!' : '') .
				'(is_string(' . $l . ') && is_string(' . $r . ') ? strcmp($l, $r) < 0 : ' .
				'JS::toNumber(' . $l . ') < JS::toNumber(' . $r . '));';

			return $result;

		case 'instanceof':
			$ret = $this->_walk(array('genvar_'));
			$tmp = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$self->prestatement[] = 'if (!is_object(' . $r . ') || ' . $r . ' === JS::$undefined) {';
			$this->_walk(array('TypeError_', 'Right-hand side of instanceof operator is not an object.'));
			$self->prestatement[] = '}';

			$r = $this->_walk(array('index', array('raw', $r), array('string', 'prototype')));

			$self->prestatement[] = $ret . ' = FALSE;';
			$self->prestatement[] =
				"if (is_object($l) && $l !== JS::\$undefined) { " .
					"for ($tmp = {$l}->prototype; $tmp; $tmp = {$tmp}->prototype) { " .
						"if ($tmp === {$r}) { $ret = TRUE; break; } " .
					"} " .
				"}";

			return $ret;

		case 'in':
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$self->prestatement[] = $l . ' = JS::toString(' . $l . ');';
			$self->prestatement[] = 'if (!is_object(' . $r . ') || ' . $r . ' === JS::$undefined) {';
			$this->_walk(array('TypeError_', 'Right-hand side of in operator is not an object.'));
			$self->prestatement[] = '}';
			
			return 'array_key_exists(' . $l . ', ' . $r . '->properties) ||
				array_key_exists(' . $l . ', ' . $r . '->attributes)';

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
				$ret . ' = ' . $l . ' == ' . $r . '; }';
			$self->prestatement[] = 'else { ' . $l . ' = JS::toPrimitive(' . $l . '); ' .
				$r . ' = JS::toPrimitive(' . $r . '); ';
			$self->prestatement[] = 'if (is_numeric(' . $l . ') || is_numeric(' . $r . ')) { ' .
				$l . ' = JS::toNumber(' . $l . '); ' .
				$r . ' = JS::toNumber(' . $r . '); }';
			$self->prestatement[] = $ret . ' = ' . $l . $op . $r . '; }';

			return $ret;

		case '===':
		case '!==':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);
			$r = $this->_walk($right_expr);

			$self->prestatement[] = $ret . ' = ' . ($op === '!==' ? '!' : '') .
				'(gettype(' . $l . ') === gettype(' . $r . ') && ' .
				$l . ' === ' . $r . ');';

			return $ret;

		case '&&':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);

			$self->prestatement[] = $ret . ' = ' . $l . ';';
			$self->prestatement[] = 'if (JS::toBoolean(' . $ret . ')) {';
			$saved_assigned = $self->assigned;
			$r = $this->_walk($right_expr);
			$self->assigned = $saved_assigned;
			$self->prestatement[] = $ret . ' = ' . $r . '; }';

			return $ret;

		case '||':
			$ret = $this->_walk(array('genvar_'));
			$l = $this->_walk($left_expr);

			$self->prestatement[] = $ret . ' = ' . $l . ';';
			$self->prestatement[] = 'if (!JS::toBoolean(' . $ret . ')) {';
			$saved_assigned = $self->assigned;
			$r = $this->_walk($right_expr);
			$self->assigned = $saved_assigned;
			$self->prestatement[] = $ret . ' = ' . $r . '; }';

			return $ret;

		case '>>>':
		default:
			throw new Exception('Operator ' . $op . ' not implemented.');
	}

}
protected function _32($expr) { extract($this->_env, EXTR_REFS); $ret_var = $this->_walk(array('genvar_'));

	if ($expr[0] === 'identifier') {
		$base = '$scope';
		$index = var_export($expr[1], TRUE);

	} else if ($expr[0] === 'index') {
		list(,$base, $index) = $expr;
		$base = $this->_walk($base);
		$index = $this->_walk($index);

	} else {
		$this->_walk(array('ReferenceError_', 'Invalid delete expression.'));
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
protected function _33($expr) { extract($this->_env, EXTR_REFS); $this->_walk($expr);
	return 'JS::$undefined';

}
protected function _34($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = $ret . " = ({$ret} === JS::\$undefined ? 'undefined' : (" .
		"is_int($ret) || is_float($ret) ? 'number' : (" .
		"is_bool($ret) ? 'boolean' : (" .
		"is_string($ret) ? 'string' : (" .
		"is_object($ret) && isset({$ret}->call) ? 'function' : 'object')))));";
	
	return $ret;

}
protected function _35($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ++' . $expr . ';';
	return $ret;

}
protected function _36($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = --' . $expr . ';';
	return $ret;

}
protected function _37($expr) { extract($this->_env, EXTR_REFS); return '+JS::toNumber(' . $this->_walk($expr) . ')';
}
protected function _38($expr) { extract($this->_env, EXTR_REFS); return '-JS::toNumber(' . $this->_walk($expr) . ')';
}
protected function _39($expr) { extract($this->_env, EXTR_REFS); return '~JS::toNumber(' . $this->_walk($expr) . ')';
}
protected function _40($expr) { extract($this->_env, EXTR_REFS); return '!JS::toBoolean(' . $this->_walk($expr) . ')';
}
protected function _41($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = '++' . $expr . ';';
	return $ret;

}
protected function _42($expr) { extract($this->_env, EXTR_REFS); $expr = $this->_walk($expr);
	$ret = $this->_walk(array('genvar_'));
	$self->prestatement[] = $ret . ' = ' . $expr . ';';
	$self->prestatement[] = '--' . $expr . ';';
	return $ret;

}
protected function _43($fn_expr, $arguments) { extract($this->_env, EXTR_REFS); if ($fn_expr[0] === 'index') {
		list(,$base, $index) = $fn_expr;
		$base = $this->_walk($base);
		$index = $this->_walk($index);

		if ($base[0] !== '$') {
			$tmp = $this->_walk(array('genvar_'));
			$self->prestatement[] = $tmp . ' = ' . $base . ';';
			$base = $tmp;
		}

		$self->prestatement[] = $base . ' = JS::toObject(' . $base . ');';

		$fn = $this->_walk(array('lookup_', $base, $index, 'prototype', FALSE, TRUE));

		return $this->_walk(array('call_', $fn, $this->_walkeach($arguments), $base, TRUE));

	} else {
		$check = !($fn_expr[0] === 'identifier' && preg_match('~Error$~', $fn_expr[1]));
		$fn = $this->_walk($fn_expr);
		return $this->_walk(array('call_', $fn, $this->_walkeach($arguments), '$global', $check));
	}

}
protected function _44($base, $index_expr) { extract($this->_env, EXTR_REFS); $base = $this->_walk($base);
	$index = $this->_walk($index_expr);

	if ($base[0] !== '$') {
		$tmp = $this->_walk(array('genvar_'));
		$self->prestatement[] = $tmp . ' = ' . $base . ';';
		$base = $tmp;
	}

	$self->prestatement[] = $base . ' = JS::toObject(' . $base . ');';

	return $this->_walk(array('lookup_', $base, $index, 'prototype', FALSE, TRUE));

}
protected function _45($expr, $arguments_exprs_list) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));
	$tmp = $this->_walk(array('genvar_'));

	$constructor = $this->_walk($expr);
	$arguments = $this->_walkeach($arguments_exprs_list);

	$self->prestatement[] = $ret . ' = clone JS::$objectTemplate;';
	$self->prestatement[] = $tmp . ' = ' .
		$this->_walk(array('lookup_', $constructor, var_export('prototype', TRUE), 'prototype', FALSE, TRUE)) . ';';
	$self->prestatement[] = $ret . '->prototype = ' . $tmp . ';';

	$self->prestatement[] = $tmp . ' = ' . $this->_walk(array('call_', $constructor, $arguments, $ret, TRUE)) . ';';
	$self->prestatement[] = 'if (is_object(' . $tmp . ') && ' . $tmp . ' !== JS::$undefined) { ' .
		$ret . ' = ' . $tmp . '; }';

	return $ret;

}
protected function _46() { extract($this->_env, EXTR_REFS); return '$leThis';
}
protected function _47() { extract($this->_env, EXTR_REFS); return var_export(NULL, TRUE);
}
protected function _48() { extract($this->_env, EXTR_REFS); return var_export(TRUE, TRUE);
}
protected function _49() { extract($this->_env, EXTR_REFS); return var_export(FALSE, TRUE);
}
protected function _50() { extract($this->_env, EXTR_REFS); return 'JS::$undefined';
}
protected function _51($n) { extract($this->_env, EXTR_REFS); return var_export($n, TRUE);
}
protected function _52($s) { extract($this->_env, EXTR_REFS); return var_export($s, TRUE);
}
protected function _53($regexp, $flags) { extract($this->_env, EXTR_REFS); return $this->_walk(array('new',
		array('identifier', 'RegExp'),
		array(array('string', $regexp), array('string', $flags))));

}
protected function _54($identifier) { extract($this->_env, EXTR_REFS); return $this->_walk(array('lookup_', '$scope', $identifier, 'up', TRUE, TRUE));;
}
protected function _55($elements_list) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));

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
protected function _56($properties_list) { extract($this->_env, EXTR_REFS); $ret = $this->_walk(array('genvar_'));

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
protected function _57($parts) { extract($this->_env, EXTR_REFS); return implode('', $this->_walkeach($parts));
}
protected function _58($code) { extract($this->_env, EXTR_REFS); return trim($code);
}

}
