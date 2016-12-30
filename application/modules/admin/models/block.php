<?php
class Block extends Admin_Model {
	public $tab_name = 'Block';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Label' => 'label',
		'Module' => 'tabid',
		'Sequence' => 'sequence',
		'Publish' => 'visible'
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}
}