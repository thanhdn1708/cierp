<?php
class Picklist extends Admin_Model {
	public $tab_name = 'Picklist';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Id' => 'id',
		'Module' => 'tabname',
		'Field' => 'field',
		'Label' => 'label',
		'Value' => 'value'
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}
}