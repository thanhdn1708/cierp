<?php
class Tab extends Admin_Model {
	public $tab_name = 'Tab';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Label' => 'label',
		'Module' => 'module',
		'Controller' => 'controller',
		'Table' => 'table',
		'Field' => 'field',
		'Primary Key' => 'key',
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}

	/*Nhóm hàm lấy thông tin tab*/
	/*-----------------------------*/
	// Nếu không truyền vào tên tab thì lấy tên của tab hiện thời
	public function get_tab($tab_name = NULL)
	{
		$where = array('name' => $this->tab_name);
		if ($tab_name != NULL)
			$where = array('name' => $tab_name);
		$this->db->where($where);
		return $this->db->get('cierp_tab')->row();
	}

	// Lấy Object tab theo id
	public function get_tabbyid($id)
	{
		$where = array('id' => $id);
		$this->db->where($where);
		return $this->db->get('cierp_tab')->row();
	}

	//Lấy tab id của tab theo tên tab
	public function get_tab_id($tab_name = NULL)
	{
		$where = array('name' => $this->tab_name);
		if ($tab_name != NULL)
			$where = array('name' => $tab_name);
		$this->db->where($where);
		return $this->db->get('cierp_tab')->row()->id;
	}

}