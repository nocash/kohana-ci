<?php defined('SYSPATH') OR die('No direct access allowed.');

class CodeIgniter_Core {

	public $config;
	public $db;
	public $load;
	public $input;

	public static function instance()
	{
		static $instance;

		empty($instance) and $instance = new CodeIgniter;

		return $instance;
	}

	protected function __construct()
	{
		$this->input = Input::instance();

		$this->config = CodeIgniter_Config::instance();
		$this->db     = CodeIgniter_Database::instance();
		$this->load   = CodeIgniter_Loader::instance();
	}

}
