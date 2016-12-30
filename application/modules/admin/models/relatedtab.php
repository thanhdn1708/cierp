<?php
class Relatedtab extends Admin_Model {
	public $tab_name = 'Relatedtab';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Id' => 'id',
		'Module' => 'tabname',
		'Field' => 'field',
		'Relatedtab' => 'relatedtab',
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}
}