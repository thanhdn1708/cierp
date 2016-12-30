<?php
class Category extends Admin_Entity_Model {
	public $tab_name = 'Category';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Tilte' => 'title', 
		'Alias' => 'alias',
		'Parent' => 'parentid',
		'Publish' => 'visible',
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}

	// Fix save to alias
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
			if (!$data['alias']) $data['alias'] = url_title($data['title'] , '-', TRUE);
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
			if (!$data['alias']) $data['alias'] = url_title($data['title'] , '-', TRUE);
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
}