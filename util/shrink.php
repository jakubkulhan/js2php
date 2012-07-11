<?php
/**
 * DGX's PHP shrinker
 * @copyright David Grudl
 * @author David Grudl
 */
function shrink($input)
{
	if (!defined('T_DOC_COMMENT')) { define ('T_DOC_COMMENT', -1); }
	if (!defined('T_ML_COMMENT')) { define ('T_ML_COMMENT', -1); }

	$space = $output = '';
	$set = '!"#$&\'()*+,-./:;<=>?@[\]^`{|}';
	$set = array_flip(preg_split('//',$set));

	foreach (token_get_all($input) as $token) {
		if (!is_array($token)) { $token = array(0, $token); }

		switch ($token[0]) {
			case T_COMMENT:
			case T_ML_COMMENT:
			case T_DOC_COMMENT:
			case T_WHITESPACE:
				$space = "\n";
			break;

			default:
				if (isset($set[substr($output, -1)]) || isset($set[$token[1]{0}])) { $space = ''; }
				$output .= $space . $token[1] . ($token[0] === T_END_HEREDOC ? PHP_EOL : '');
				$space = '';
		}
	}
	return $output;
}
