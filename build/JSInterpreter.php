<?php
/**
 * Interface to Javascript
 */
class JSInterpreter
{
	/** @var string */
	private $code;

	/** @var string|NULL */
	private $file;

	/** @var string */
	private $compiled;

	/** @var callback */
	private $entryPoint;

	/**
	 * @param string
	 */
	public function __construct($code, $file = NULL)
	{
		$this->code = $code;
		$this->file = $file;
	}

	/**
	 * Compiles code and returns it
	 * @return string
	 */
	public function compile()
	{
		if ($this->compiled === NULL) {
			$parser = new JSParser;
			list($ok, $result, $error) = $parser->__invoke($this->code, array('file' => $this->file));

			if (!$ok) {
				throw new Exception(
					"Syntax error " . ($this->file !== NULL ? " in {$this->file} " : "") .
					"on {$error->line}:{$error->column}, expected " .
					implode(', ', $error->expected)
				);
			}

			$compiler = new JSCompiler;
			$this->compiled = $compiler->__invoke($result);
		}

		return $this->compiled;
	}

	/**
	 * Runs the script, returns what script returns
	 * @param array values from array will be added to global object
	 * @return mixed
	 */
	public function run(array $vars = array())
	{
		$this->compile();

		if (!class_exists('JS')) {
			require_once __DIR__ . '/image.php';
		}

		if ($this->entryPoint === NULL) {
			$this->entryPoint = eval($this->compiled);
		}

		$global = JS::$global; // FIXME: no copy

		foreach ($vars as $k => $v) {
			$global->properties[$k] = JS::fromNative($v);
			$global->attributes[$k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
		}

		return JS::toNative(call_user_func($this->entryPoint, $global));
	}
}
