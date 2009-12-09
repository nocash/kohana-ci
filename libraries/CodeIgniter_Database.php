<?php defined('SYSPATH') OR die('No direct access allowed.');

class CodeIgniter_Database_Core {

	protected $db;

	public static function instance()
	{
		static $instance;

		empty($instance) and $instance = new CodeIgniter_Database;

		return $instance;
	}

	protected function __construct()
	{
		$this->db = Database::instance();
	}

	public function __call($name, $args)
	{
		return call_user_func_array(array($this->db, $name), $args);
	}

	public function list_fields($table)
	{
		return array_keys($this->db->list_fields($table));
	}

	public function field_exists($field, $table)
	{
		$fields = $this->list_fields($table);
		return in_array($field, $fields);
	}

	public function query($sql)
	{
		$result = $this->db->query($sql);
		return CodeIgniter_Mysql_Result::factory($result);
	}

}
