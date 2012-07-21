<?php
class JSDumper
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
        case 'program':
            list($_, $_0) = $node;
            $ret = $this->_0($_0);
        break;
        case 'block':
            list($_, $_0) = $node;
            $ret = $this->_1($_0);
        break;
        case 'php_statement':
            list($_, $_0) = $node;
            $ret = $this->_2($_0);
        break;
        case 'function':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_3($_0, $_1, $_2);
        break;
        case 'var':
            list($_, $_0) = $node;
            $ret = $this->_4($_0);
        break;
        case 'if':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_5($_0, $_1, $_2);
        break;
        case 'do':
            list($_, $_0, $_1) = $node;
            $ret = $this->_6($_0, $_1);
        break;
        case 'while':
            list($_, $_0, $_1) = $node;
            $ret = $this->_7($_0, $_1);
        break;
        case 'for_in':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_8($_0, $_1, $_2);
        break;
        case 'for':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_9($_0, $_1, $_2, $_3);
        break;
        case 'continue':
            list($_, $_0) = $node;
            $ret = $this->_10($_0);
        break;
        case 'break':
            list($_, $_0) = $node;
            $ret = $this->_11($_0);
        break;
        case 'return':
            list($_, $_0) = $node;
            $ret = $this->_12($_0);
        break;
        case 'with':
            list($_, $_0, $_1) = $node;
            $ret = $this->_13($_0, $_1);
        break;
        case 'labelled':
            list($_, $_0, $_1) = $node;
            $ret = $this->_14($_0, $_1);
        break;
        case 'switch':
            list($_, $_0, $_1) = $node;
            $ret = $this->_15($_0, $_1);
        break;
        case 'case':
            list($_, $_0, $_1) = $node;
            $ret = $this->_16($_0, $_1);
        break;
        case 'default':
            list($_, $_0) = $node;
            $ret = $this->_17($_0);
        break;
        case 'throw':
            list($_, $_0) = $node;
            $ret = $this->_18($_0);
        break;
        case 'try':
            list($_, $_0, $_1, $_2, $_3) = $node;
            $ret = $this->_19($_0, $_1, $_2, $_3);
        break;
        case 'discard':
            list($_, $_0) = $node;
            $ret = $this->_20($_0);
        break;
        case 'exprs':
            list($_, $_0) = $node;
            $ret = $this->_21($_0);
        break;
        case 'assignment':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_22($_0, $_1, $_2);
        break;
        case 'cond':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_23($_0, $_1, $_2);
        break;
        case 'binary':
            list($_, $_0, $_1, $_2) = $node;
            $ret = $this->_24($_0, $_1, $_2);
        break;
        case 'delete':
            list($_, $_0) = $node;
            $ret = $this->_25($_0);
        break;
        case 'void':
            list($_, $_0) = $node;
            $ret = $this->_26($_0);
        break;
        case 'typeof':
            list($_, $_0) = $node;
            $ret = $this->_27($_0);
        break;
        case 'preinc':
            list($_, $_0) = $node;
            $ret = $this->_28($_0);
        break;
        case 'predec':
            list($_, $_0) = $node;
            $ret = $this->_29($_0);
        break;
        case 'positive':
            list($_, $_0) = $node;
            $ret = $this->_30($_0);
        break;
        case 'negative':
            list($_, $_0) = $node;
            $ret = $this->_31($_0);
        break;
        case 'inverse':
            list($_, $_0) = $node;
            $ret = $this->_32($_0);
        break;
        case 'not':
            list($_, $_0) = $node;
            $ret = $this->_33($_0);
        break;
        case 'postinc':
            list($_, $_0) = $node;
            $ret = $this->_34($_0);
        break;
        case 'postdec':
            list($_, $_0) = $node;
            $ret = $this->_35($_0);
        break;
        case 'call':
            list($_, $_0, $_1) = $node;
            $ret = $this->_36($_0, $_1);
        break;
        case 'index':
            list($_, $_0, $_1) = $node;
            $ret = $this->_37($_0, $_1);
        break;
        case 'new':
            list($_, $_0, $_1) = $node;
            $ret = $this->_38($_0, $_1);
        break;
        case 'this':
            $ret = $this->_39();
        break;
        case 'null':
            $ret = $this->_40();
        break;
        case 'true':
            $ret = $this->_41();
        break;
        case 'false':
            $ret = $this->_42();
        break;
        case 'undefined':
            $ret = $this->_43();
        break;
        case 'number':
            list($_, $_0) = $node;
            $ret = $this->_44($_0);
        break;
        case 'string':
            list($_, $_0) = $node;
            $ret = $this->_45($_0);
        break;
        case 'regexp':
            list($_, $_0, $_1) = $node;
            $ret = $this->_46($_0, $_1);
        break;
        case 'identifier':
            list($_, $_0) = $node;
            $ret = $this->_47($_0);
        break;
        case 'array':
            list($_, $_0) = $node;
            $ret = $this->_48($_0);
        break;
        case 'object':
            list($_, $_0) = $node;
            $ret = $this->_49($_0);
        break;
        case 'id_':
            list($_, $_0) = $node;
            $ret = $this->_50($_0);
        break;
        case 'php':
            list($_, $_0) = $node;
            $ret = $this->_51($_0);
        break;
        case 'raw':
            list($_, $_0) = $node;
            $ret = $this->_52($_0);
        break;
        }

        array_pop($this->_stack);
        return $ret;
    }

    public function __invoke($ast)
    {
        /*$this->_init();*/
        extract($this->_env, EXTR_REFS);
        return $this->_walk($ast);

    }

protected function _0($ast) { extract($this->_env, EXTR_REFS); return $this->_walk($ast);
}
protected function _1($statements) { extract($this->_env, EXTR_REFS); return "{" . implode("", $this->_walkeach($statements)) . "}";
}
protected function _2($parts) { extract($this->_env, EXTR_REFS); return "@@" . implode("", $this->_walkeach($parts)) . "@@";
}
protected function _3($name, $parameters_list, $body) { extract($this->_env, EXTR_REFS); return "function" . ($name !== NULL ? " " : "") . "$name(" . implode(",", $parameters_list) . "){" . $this->_walk($body) . "}";
}
protected function _4($declarations_list) { extract($this->_env, EXTR_REFS); $ret = array();

	foreach ($declarations_list as $declaration) {
		list($varname, $expr) = $declaration;
		$ret[] = "$varname=" . $this->_walk($expr);
	}

	return "var " . implode("", $ret) . ";";

}
protected function _5($cond_expr, $statement, $else_statement) { extract($this->_env, EXTR_REFS); return "if(" . $this->_walk($cond_expr) . ")" . $this->_walk($statement) .
		($else_statement ? "else " . $this->_walk($else_statement) : "");

}
protected function _6($cond_expr, $statement) { extract($this->_env, EXTR_REFS); return "do " . $this->_walk($statement) . "while(" . $this->_walk($cond_expr) . ");";;
}
protected function _7($cond_expr, $statement) { extract($this->_env, EXTR_REFS); return "while(" . $this->_walk($cond_expr) . ")" . $this->_walk($statement);;
}
protected function _8($assignment_expr, $in_expr, $statement) { extract($this->_env, EXTR_REFS); return "for(" . rtrim($this->_walk($assignment_expr), ";") . " in " . $this->_walk($in_expr) . ")" . $this->_walk($statement);
}
protected function _9($init_expr, $cond_expr, $iter_expr, $statement) { extract($this->_env, EXTR_REFS); $init = $cond = $iter = '';

	if ($init_expr) { $init = rtrim($this->_walk($init_expr), ";"); }
	if ($cond_expr) { $cond = $this->_walk($cond_expr); }
	if ($iter_expr) { $iter = $this->_walk($iter_expr); }

	return "for($init;$cond;$iter)" . $this->_walk($statement);

}
protected function _10($label) { extract($this->_env, EXTR_REFS); return "continue $label;";
}
protected function _11($label) { extract($this->_env, EXTR_REFS); return "break $label;";
}
protected function _12($expr) { extract($this->_env, EXTR_REFS); return "return " . $this->_walk($expr) . ";";
}
protected function _13($expr, $statement) { extract($this->_env, EXTR_REFS); return "with(" . $this->_walk($expr) . ")" . $this->_walk($statement);
}
protected function _14($label, $statement) { extract($this->_env, EXTR_REFS); return "$label:" . $this->_walk($statement);
}
protected function _15($expr, $clauses_list) { extract($this->_env, EXTR_REFS); return "switch(" . $this->_walk($expr) . "){" . implode("", $this->_walkeach($clauses_list)) . "}";
}
protected function _16($expr, $statement) { extract($this->_env, EXTR_REFS); return "case " . $this->_walk($expr) . ":" . $this->_walk($statement);
}
protected function _17($statement) { extract($this->_env, EXTR_REFS); return "default:" . $this->_walk($statement);
}
protected function _18($expr) { extract($this->_env, EXTR_REFS); return "throw " . $this->_walk($expr) . ";";
}
protected function _19($try_block, $catch_var, $catch_block, $finally_block) { extract($this->_env, EXTR_REFS); return "try" . $this->_walk($try_block) . 
		($catch_block ? "catch($catch_var)" . $this->_walk($catch_block) : "") .
		($finally_block ? "finally" . $this->_walk($finally_block) : "");

}
protected function _20($expr) { extract($this->_env, EXTR_REFS); return rtrim($this->_walk($expr), ";") . ";";
}
protected function _21($exprs) { extract($this->_env, EXTR_REFS); return implode(",", $this->_walkeach($exprs));
}
protected function _22($op, $lhs_expr, $rhs_expr) { extract($this->_env, EXTR_REFS); return $this->_walk($lhs_expr) . $op . $this->_walk($rhs_expr);
}
protected function _23($cond_expr, $iftrue_expr, $iffalse_expr) { extract($this->_env, EXTR_REFS); return $this->_walk($cond_expr) . "?" . $this->_walk($iftrue_expr) . ":" . $this->_walk($iffalse_expr);
}
protected function _24($op, $left_expr, $right_expr) { extract($this->_env, EXTR_REFS); return "(" . $this->_walk($left_expr) . ")$op(" . $this->_walk($right_expr) . ")";
}
protected function _25($expr) { extract($this->_env, EXTR_REFS); return "delete " . $this->_walk($expr);
}
protected function _26($expr) { extract($this->_env, EXTR_REFS); return "void " . $this->_walk($expr);
}
protected function _27($expr) { extract($this->_env, EXTR_REFS); return "typeof " . $this->_walk($expr);
}
protected function _28($expr) { extract($this->_env, EXTR_REFS); return "++" . $this->_walk($expr);
}
protected function _29($expr) { extract($this->_env, EXTR_REFS); return "--" . $this->_walk($expr);
}
protected function _30($expr) { extract($this->_env, EXTR_REFS); return "+" . $this->_walk($expr);
}
protected function _31($expr) { extract($this->_env, EXTR_REFS); return "-" . $this->_walk($expr);
}
protected function _32($expr) { extract($this->_env, EXTR_REFS); return "~" . $this->_walk($expr);
}
protected function _33($expr) { extract($this->_env, EXTR_REFS); return "!" . $this->_walk($expr);
}
protected function _34($expr) { extract($this->_env, EXTR_REFS); return $this->_walk($expr) . "++";
}
protected function _35($expr) { extract($this->_env, EXTR_REFS); return $this->_walk($expr) . "--";
}
protected function _36($fn_expr, $arguments) { extract($this->_env, EXTR_REFS); return $this->_walk($fn_expr) . "(" . implode(",", $this->_walkeach($arguments)) . ")";
}
protected function _37($base, $index_expr) { extract($this->_env, EXTR_REFS); return $this->_walk($base) . "[" . $this->_walk($index_expr) . "]";
}
protected function _38($expr, $arguments_exprs_list) { extract($this->_env, EXTR_REFS); return "new " . $this->_walk($expr) . "(" . implode(",", $this->_walkeach($arguments_exprs_list)) . ")";
}
protected function _39() { extract($this->_env, EXTR_REFS); return "this";
}
protected function _40() { extract($this->_env, EXTR_REFS); return "null";
}
protected function _41() { extract($this->_env, EXTR_REFS); return "true";
}
protected function _42() { extract($this->_env, EXTR_REFS); return "false";
}
protected function _43() { extract($this->_env, EXTR_REFS); return "undefined";
}
protected function _44($n) { extract($this->_env, EXTR_REFS); return json_encode($n);
}
protected function _45($s) { extract($this->_env, EXTR_REFS); return json_encode($s);
}
protected function _46($regexp, $flags) { extract($this->_env, EXTR_REFS); return "/$regexp/$flags";
}
protected function _47($identifier) { extract($this->_env, EXTR_REFS); return $identifier;
}
protected function _48($elements_list) { extract($this->_env, EXTR_REFS); return "[" . implode(",", $this->_walkeach($elements_list)) . "]";
}
protected function _49($properties_list) { extract($this->_env, EXTR_REFS); $ret = array();

	foreach ($properties_list as $property) {
		list($name, $value) = $property;
		$ret[] = $this->_walk(array("id_", $name)) . ":" . $this->_walk($value);
	}

	return "{" . implode(",", $ret) . "}";

}
protected function _50($name) { extract($this->_env, EXTR_REFS); return preg_match("/^[a-zA-Z_$][a-zA-Z0-9_$]*$|^\d+$/", $name) ? $name : $this->_walk(array("string", $name));;
}
protected function _51($parts) { extract($this->_env, EXTR_REFS); return "@@" . implode("", $this->_walkeach($parts)) . "@@";
}
protected function _52($code) { extract($this->_env, EXTR_REFS); return trim($code);
}

}
