<?php
class Field extends Admin_Model {
	public $tab_name = 'Field';
	public $tablename = 'cierp_field';
	public $module = '';
	public $controller = '';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Id' => 'id',
		'Module' => 'tabid',
		'Block' => 'blockid',
		'Label' => 'label',
		'UI Type' => 'ui',
		'Sequence' => 'sequence',
		'Publish' => 'visible',
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		parent::__construct();
	}
}