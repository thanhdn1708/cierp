<?php
class Template extends Admin_Entity_Model {
	public $tab_name = 'Template';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Label' => 'templabel', 
		'Layout' => 'layout',
		'Publish' => 'visible',
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}
}