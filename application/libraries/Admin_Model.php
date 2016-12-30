<?php
class Admin_Model extends Cierp_Model {
	
	function __construct() {
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

	/*Nhóm hàm lấy thông tin block*/
	/*-----------------------------*/
	// Lấy thông tin block theo tabid
	public function get_block($tabid = NULL){
		$where = array('tabid' => $this->get_tab_id(), 'visible' => '1');
		if ($tabid != NULL)
			$where = array('tabid' => $tabid, 'visible' => '1');
		$this->db->where($where);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('sequence','asc');
		}
		return $this->db->get('cierp_block')->result();
	}

	// Cập nhật sequence cho block
	public function set_block_sequence($blockid,$sequence){
		$filter = $this->primary_filter;
		$id = $filter($blockid);
		$this->db->set('sequence',$sequence);
		$this->db->where($this->primary_key, $blockid);
		$this->db->update('cierp_block');
		return $id;
	}

	/*Nhóm hàm lấy thông tin Field*/
	/*-----------------------------*/
	// Lấy thông tin field theo tabid, block và kiểu hiển thị dữ liệu view
	// View = 0, lấy tất cả dữ liệu
	// View = 1, hiển thì Detail show presence 1,2,4
	// View = 2, hiển thì Edit show presence 1,3
	// View = 3, hiển thì New show presence 1,3,4,5
	public function get_field($tabid = NULL,$blockid = NULL,$view=0){
		if ($tabid != NULL)
		{
			if ($blockid != NULL)
				$where = array('tabid' => $tabid, 'blockid' => $blockid, 'visible' => '1');
			else $where = array('tabid' => $tabid, 'visible' => '1');		
		}
		else
		{
			if ($blockid != NULL)
				$where = array('tabid' => $this->get_tab_id(), 'blockid' => $blockid, 'visible' => '1');
			else $where = array('tabid' => $this->get_tab_id(), 'visible' => '1');
		}
		$this->db->where($where);
		switch ($view) {
			case 0:
				// all
				break;
			case 1:
				// Detail
				$where_in = array('1','2','4');
				$this->db->where_in('presence',$where_in); 
				break;
			case 2:
				// Edit
				$where_in = array('1','3');
				$this->db->where_in('presence',$where_in); 
				break;
			case 3:
				// New
				$where_in = array('1','3','4','5');
				$this->db->where_in('presence',$where_in); 
				# code...
				break;
		}
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('sequence','asc');
		}
		return $this->db->get('cierp_field')->result();
	}

	// Lấy thông tin field theo tabid, và fieldname
	public function get_fieldbyname($tabid = NULL,$fieldname){
		if ($tabid != NULL)
		{
			$where = array('tabid' => $tabid, 'fieldname' => $fieldname, 'visible' => '1');		
		}
		else
		{
			$where = array('tabid' => $this->get_tab_id(), 'fieldname' => $fieldname, 'visible' => '1');
		}
		$this->db->where($where);		
		return $this->db->get('cierp_field')->row();
	}	

	// Cập nhật sequence cho field
	public function set_field_sequence($fieldid,$sequence){
		$filter = $this->primary_filter;
		$id = $filter($fieldid);
		$this->db->set('sequence',$sequence);
		$this->db->where($this->primary_key, $fieldid);
		$this->db->update('cierp_field');
		return $id;
	}

	// Get picklist field
	public function get_field_picklist($tabid = NULL){
		if ($tabid != NULL)
		$where = array('tabid' => $tabid, 'ui' => '4', 'visible' => '1');
		else $where = array('tabid' => $this->get_tab_id(), 'ui' => '4', 'visible' => '1');
		$this->db->where($where);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('sequence','asc');
		}
		return $this->db->get('cierp_field')->result();
	}

	// Lấy rule theo trường mandatory và 
	public function get_rules($tabid = NULL,$view){
		if ($tabid != NULL) {
			$field = $this->get_field($tabid,NULL,$view);
			$tab = $this->get_tabbyid($tabid);
		}
		else {
			$field = $this->get_field($this->get_tab_id(),NULL,$view);
			$tab = $this->get_tab();
		}
		$rules = array();
		foreach ($field as $i) {
			if ($i->mandatory == 1)
			{
				$rule = array();
				$rule['field'] = 'input_'.$i->fieldname;
				$rule['label'] = $i->label;
				$rule['rules'] = 'trim|required';
				if ($i->fieldname == $tab->key)
				{
					$unique = $this->get_tab()->table.'.'.$i->fieldname;
					$rule['rules'] = 'trim|required|is_unique['.$unique.']';
				}	
				$rules[$i->fieldname] = $rule;
				if ($i->ui == 10) {
					$rule = array();
					$rule['field'] = 'inputhiden_'.$i->fieldname;
					$rule['label'] = $i->label;
					$rule['rules'] = 'trim|required';
					$rules[$i->fieldname] = $rule;
				}
			}
		}
		return $rules;
	}	


	/*Nhóm hàm lấy thông tin Relatedtab*/
	/*-----------------------------*/
	// Lấy thông tin Related
	public function get_relatedtab ($tab_name = NULL,$fieldname)
	{
		if ($tab_name != NULL)
			$where = array('tabname' => $tab_name, 'field' => $fieldname);
		else $where = array('tabname' => $this->tab_name, 'field' => $fieldname);
		$this->db->where($where);
		return $this->db->get('cierp_relatedtab')->row();
	}

	// Lấy thông tin label của trường liên kết dữ liệu
	// Id record của module chính
	// relatedtab tên của module liên kết
	public function get_label($id,$relatedtab){
		$label = $this->get_tab($relatedtab)->field;
		$table = $this->get_tab($relatedtab)->table;
		$where = array('id' => $id);
		$this->db->where($where);
		$result = $this->db->get($table)->row();
		if ($result != NULL)
			return $result->$label;
		else
			return '';
	}

	// Lấy thông tin id theo label của trường liên kết dữ liệu
	// label được truyền vào 
	public function get_label_id($data,$relatedtab){
		$label = $this->get_tab($relatedtab)->field;
		$table = $this->get_tab($relatedtab)->table;
		$where = array($label => $data);
		$this->db->where($where);
		$result = $this->db->get($table)->row();
		if ($result != NULL)
		return $result->id;
	}
	
	// Lấy thông tin dữ liệu Related
	public function get_relatedtab_autocomplete ($tab_name)
	{
		$tab = $this->get_tab($tab_name);
		$data = $this->db->get($tab->table)->result();
		$result = "[";
		foreach ($data as $i) {
			$result = $result . "{ id:".$i->id.",name:'".$this->get_label($i->id,$tab_name)."'},";
		}
		$result = $result . "]";
		return $result;
	}

	/*Nhóm hàm lấy thông tin picklist*/
	/*-----------------------------*/
	// Get picklist for combobox
	public function get_picklist($tab_name = NULL,$field){
		if ($tab_name != NULL)
		$where = array('tabname' => $tab_name, 'field' => $field, 'visible' => '1');
		else $where = array('tabname' => $this->tab_name, 'field' => $field, 'visible' => '1');
		$this->db->where($where);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('sequence','asc');
		}
		return $this->db->get('cierp_picklist')->result();
	}

	// Cập nhật sequence cho picklist
	public function set_picklist_sequence($fieldid,$sequence){
		$filter = $this->primary_filter;
		$id = $filter($fieldid);
		$this->db->set('sequence',$sequence);
		$this->db->where($this->primary_key, $fieldid);
		$this->db->update('cierp_picklist');
		return $id;
	}

	/*Nhóm hàm lấy thông tin Menu*/
	/*-----------------------------*/
	// Lấy thông tin Menu theo parent id
	public function get_menu($parentid){
		$where = array('parentid' => $parentid, 'visible' => '1');
		$this->db->where($where);
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('sequence','asc');
		}
		return $this->db->get('cierp_menu')->result();
	}
}