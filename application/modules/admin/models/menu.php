<?php
class Menu extends Admin_Model {
	public $tab_name = 'Menu';
	public $tablename = 'cierp_menu';
	public $module = '';
	public $controller = '';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Label' => 'label',
		'Name' => 'name',
		'Parent' => 'parentid',
		'Url' => 'url',	
		'Sequence' => 'sequence',	
		'Publish' => 'visible'
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		parent::__construct();
	}

	// Cập nhật sequence cho picklist
	public function set_sortlist_sequence($id,$sequence){
		$filter = $this->primary_filter;
		$id = $filter($id);
		$this->db->set('sequence',$sequence);
		$this->db->where($this->primary_key, $id);
		$this->db->update('cierp_menu');
		return $id;
	}
}