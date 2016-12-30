<?php
class Admin_Entity_Model extends Admin_Model {
	 protected $timestamps = TRUE;
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
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
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		// Join Entity
		$this->db->join('cierp_entity', 'cierp_entity.entityid = '.$this->tablename.'.'.$this->primary_key);
		$this->db->where('cierp_entity.deleted', 0);

		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->order_by,$this->order_type);
		}
		return $this->db->get($this->tablename)->$method();
	}

	// Lấy thông tin đưa Entity
	public function get_entity($entityid){	
		$filter = $this->primary_filter;
		$entityid = $filter($entityid);
		$this->db->where('entityid', $entityid);
		return $this->db->get('cierp_entity')->row();
	}

	// Lấy thông tin đưa lên gird
	public function get_offset($number, $offset, $like=NULL){ 
		// Join Entity
		$this->db->join('cierp_entity', 'cierp_entity.entityid = '.$this->tablename.'.'.$this->primary_key);
		$this->db->where('cierp_entity.deleted', 0);

		if ($like != NULL)
			$this->db->like($like);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->order_by,$this->order_type);
		}

		return $this->db->get($this->tablename,$number,$offset)->result(); 
	} 

	/*Nhóm hàm Thêm sửa xóa dữ liệu*/
	/*-----------------------------*/
	// Hàm tạm mới đội tượng dữ liệu
	//  Hàm lưu dữ liệu 
	public function save($data, $id = NULL)
	{
		// Set timestamps
		if ($this->timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['createdtime'] = $now;
			$data['modifiedtime'] = $now;
		}
		
		// Insert
		if ($id === NULL) {
			!isset($data[$this->primary_key]) || $data[$this->primary_key] = NULL;
			$entity = array(
				'creatorid' => $this->session->userdata['id'] ,
				'ownerid' => $data['ownerid'] ,
				'modifiedid' => $this->session->userdata['id'] ,
				'setype' => $this->tab_name ,
				'description' => $data['description'] ,
				'createdtime' => $data['createdtime']  ,		
				'modifiedtime' => $data['modifiedtime']  ,	
				'deleted' => '0'  ,		
				'label' => $data[$this->get_tab()->field],	
				);
			$this->db->set($entity);
			$this->db->insert('cierp_entity');
			$id = $this->db->insert_id();
			$data['id'] = $id;
			unset($data['ownerid']);
			unset($data['description']);
			unset($data['createdtime']);
			unset($data['modifiedtime']);
			$this->db->set($data);
			$this->db->insert($this->tablename);
		}

		// Update
		else {
			$filter = $this->primary_filter;
			$id = $filter($id);
			$entity = array(
				'ownerid' => $data['ownerid'] ,
				'modifiedid' => $this->session->userdata['id'] ,
				'description' => $data['description'] ,	
				'modifiedtime' => $data['modifiedtime']  ,		
				'label' =>  $data[$this->get_tab()->field],
				);
			$this->db->set($entity);
			$this->db->where('entityid', $id);
			$this->db->update('cierp_entity');
			unset($data['ownerid']);
			unset($data['description']);
			unset($data['createdtime']);
			unset($data['modifiedtime']);
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
		$this->db->set('deleted',1);
		$this->db->where('entityid', $id);
		$this->db->update('cierp_entity');
	}
}