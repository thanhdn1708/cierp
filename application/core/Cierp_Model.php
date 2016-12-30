<?php
class Cierp_Model extends CI_Model {
	
	/*Khai báo biến thông tin cho model*/
	/*-----------------------------*/
	// Tên tab
	protected $tab_name = ''; 
	// Khóa chính
	protected $primary_key = 'id';
	protected $primary_filter = 'intval';
	// Lưu giờ tạo và giờ thay đổi
	protected $timestamps = FALSE;
	// Sắp xếp dữ liệu
	protected $order_by = '';
	protected $order_type = '';
	// Tên table
	public $tablename = ''; 
	// Tên module
	public $module = '';
	// Tên controller
	public $controller = '';
	
	function __construct() {
		parent::__construct();
	}

	/*Nhóm hàm lấy dữ liệu của Model*/
	/*-----------------------------*/
	// Lấy thông tin Object của model theo id, hoặc lấy tất cả dữ liệu
	public function get($id = NULL, $single = FALSE){
		if ($id != NULL) {
			$filter = $this->primary_filter;
			$id = $filter($id);
			$this->db->where($this->primary_key, $id);
			$method = 'row';
		}
		elseif ($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->order_by,$this->order_type);
		}
		return $this->db->get($this->tablename)->$method();
	}

	// Lấy thông tin 1 Object với điều kiện kèm theo
	public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	// Lấy thông tin đưa lên gird
	public function get_offset($number, $offset, $like=NULL){ 
		if ($like != NULL)
			$this->db->like($like);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->order_by,$this->order_type);
		}
		return $this->db->get($this->tablename,$number,$offset)->result(); 
	} 
	
	/*Nhóm hàm lấy đường dẫn tới các view*/
	/*-----------------------------*/
	// Detail URl
	public function get_detailurl($id,$tab_name = NULL){
		if ($tab_name != NULL)
		{
			$tab = $this->get_tab($tab_name);
			return $tab->module.'/'.$tab->controller.'/'.'detailview/'.$id;
		}
		return $this->module.'/'.$this->controller.'/'.'detailview/'.$id;
	}

	// Edit URl
	public function get_editurl($id,$tab_name = NULL){
		if ($tab_name != NULL)
		{
			$tab = $this->get_tab($tab_name);
			return $tab->module.'/'.$tab->controller.'/'.'editview/'.$id;
		}
		return $this->module.'/'.$this->controller.'/'.'editview/'.$id;
	}

	// Base URL
	public function get_baseurl($tab_name = NULL){
		if ($tab_name != NULL)
		{
			$tab = $this->get_tab($tab_name);
			return $tab->module.'/'.$tab->controller.'/';
		}
		return $this->module.'/'.$this->controller.'/';
	}

	/*Nhóm hàm Thêm sửa xóa dữ liệu*/
	/*-----------------------------*/
	// Hàm tạm mới đội tượng dữ liệu
	public function get_new(){
		$record = new stdClass();
		$record->id = NULL;
		return $record;
	}

	//  Hàm lưu dữ liệu 
	public function save($data, $id = NULL){
		// Set timestamps
		if ($this->timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
		
		// Insert
		if ($id === NULL) {
			!isset($data[$this->primary_key]) || $data[$this->primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->tablename);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->primary_key, $id);
			$this->db->update($this->tablename);
		}
		return $id;
	}
	
	// Hàm xóa dữ liệu
	public function delete($id){
		$filter = $this->primary_filter;
		$id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->tablename);
	}

	// Hàm lấy version của migration
	public function get_migration(){
		return $this->db->get('migrations')->row()->version;
	}
}