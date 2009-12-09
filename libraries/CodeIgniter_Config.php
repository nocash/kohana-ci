<?php defined('SYSPATH') OR die('No direct access allowed.');

class CodeIgniter_Config_Core {

	public static function instance()
	{
		static $instance;

		empty($instance) and $instance = new CodeIgniter_Config;

		return $instance;
	}


}
