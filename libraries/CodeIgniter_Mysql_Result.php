<?php defined('SYSPATH') OR die('No direct access allowed.');

class CodeIgniter_Mysql_Result {

	protected $result;

	public static function factory($result)
	{
		return new CodeIgniter_Mysql_Result($result);
	}

	public function __construct($result)
	{
		$this->result = $result;
	}

	public function __call($name, $args)
	{
		return call_user_func_array(array($this->result, $name), $args);
	}

	public function __get($name)
	{
		return $this->result->{$name};
	}

	public function num_rows()
	{
		return $this->result->count();
	}

}
