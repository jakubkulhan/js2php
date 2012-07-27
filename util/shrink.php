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
	$inFor = FALSE; $forParenLevel = 0;

	foreach (token_get_all($input) as $token) {
		if (!is_array($token)) { $token = array(0, $token); }

		switch ($token[0]) {
			case T_COMMENT:
			case T_ML_COMMENT:
			case T_DOC_COMMENT:
			case T_WHITESPACE:
				$space = ' ';
			break;

			case T_FOR:
			case $token[1] === '(':
			case $token[1] === ')':
				if ($token[1] === 'for') {
					$inFor = TRUE;
					$forParenLevel = 0;
				}

				if ($token[1] === '(' && $inFor) { ++$forParenLevel; }

				if ($token[1] === ')' && $inFor) {
					if (--$forParenLevel <= 0) { $inFor = FALSE; }
				}

			default:
				if ($token[1] === ';' && !$inFor &&
					(substr($output, -1) === ';' || substr($output, -1) === '}'))
				{
					continue;
				}

				if ($token[1][0] === "'" && substr($output, -2) === "'." ||
					$token[1][0] === '"' && substr($output, -2) === '".')
				{
					$output = substr($output, 0, -2) . substr($token[1], 1);
					continue;
				}

				$lastc = ord(substr($output, -1));
				if ($token[1] === '.' && $lastc >= 0x30 && $lastc <= 0x39) {
					$space = ' ';
				}

				if (isset($set[substr($output, -1)]) || isset($set[$token[1]{0}])) { $space = ''; }
				$output .= $space . $token[1] . ($token[0] === T_END_HEREDOC ? PHP_EOL : '');
				$space = '';
		}
	}
	return $output;
}
