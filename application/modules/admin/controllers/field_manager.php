<?php

class Field_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'field';
		$model = $this->model;
		$this->load->model('admin/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}

	public function editajax ($id)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		// Khởi tạo biến dữ liệu
		$record = array();
		// Khởi tạo biến dữ liệu từ client
		$record_data = array();

		// Lấy dữ liệu đưa vào biến Record
		$record = $this->$model->get($id, TRUE);
		// Hiển thị dữ liệu lên form
		input_field ($this,$model,$record_data,$record,2);
		// Thiệt đặt rules
		$validationError = '';
		$rules = $this->$model->get_rules(NULL,2);
		$this->form_validation->set_rules($rules);

		/*Form*/
		// Kiểm tra validation khi bấm nút submit
		if ($this->form_validation->run() == TRUE) {
			$reid = $this->$model->save($record_data, $record->id);
			echo 'done';
			return;
		}
		else $validationError = validation_errors();
		// Nếu chưa bấm vào nút submit thì chưa check validtion
		if ($this->input->post('submitAjax') == 'false') 
			$validationError = '';
		$this->sm->assign('validationError',$validationError);

		/*Layout*/
		// kiểm tra layout editview ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/editajax.tpl'))
			$this->sm->display($this->theme.'/'.$this->$model->module.'/editajax.tpl');
		else $this->sm->display($this->theme.'/layout/editajax.tpl');
	}	

	public function newajax ($tabname,$blockid)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		// Khởi tạo biến dữ liệu
		$record = array();
		// Khởi tạo biến dữ liệu từ client
		$record_data = array();

		// Lấy dữ liệu đưa vào biến Record
		$record = $this->$model->get_new();
		// Hiển thị dữ liệu lên form
		$input = array();
		$relatedInput = array();
		$blocks = $this->$model->get_block();
		$this->sm->assign('block',$blocks);
		foreach ($blocks as $value) {
			$fields = $this->$model->get_field(NULL,$value->id,3);
			// Editview
				foreach ($fields as $field) {
				$fieldname = $field->fieldname;// Get data of Post
				$record_data[$fieldname] = $this->input->post('input_'.$fieldname);
				$data = array(
					'name'  => 'input_'.$fieldname,
					'id'    => 'input_'.$fieldname,
					'class' => 'form-control'
					);
				//Show data of model
				if ($record->id != NULL) {
					$data['value'] = $record->$fieldname;
				}
				switch ($field->ui) {
					case 1:
						// Textbox
						if ($fieldname == 'tabid') $data['value'] = 'tabname';
						$input[$field->id] = form_input($data);
					break;
					case 3:
						// checkbox
						unset($data['class']);
						$data['value'] = '1';
						if ($record->id != NULL) {
							if ($record->$fieldname == 1) {
								$data['checked'] = 'checked';
							}
						}
						$input[$field->id] = form_checkbox($data);
						if ($record_data[$fieldname] == false)
							$record_data[$fieldname] = 0;
						else $record_data[$fieldname] = 1;
					break;
					case 4:
						// combobox
						$options = array();
						foreach ($this->$model->get_picklist(NULL,$fieldname) as $i) {
							$options[$i->value] = $i->label;
							if ($this->input->post('input_'.$fieldname) == $i->value)
								$record_data[$fieldname] = $i->value;
						}
						if ($record->id != NULL) {
							$input[$field->id] = form_dropdown('input_'.$fieldname, $options, $record->$fieldname, 'class="form-control"');
						}
						else $input[$field->id] = form_dropdown('input_'.$fieldname, $options, '1', 'class="form-control"');
					break;										
					}
				}
			// Set relatedInput to view
			$this->sm->assign('relatedInput',$relatedInput);
			// Unset input tab id and set data for input
			unset($fields[0]);
			unset($fields[1]);
			unset($fields[4]);
			$record_data['tabid'] =$this->$model->get_tab($tabname)->id;
			$record_data['blockid'] =$blockid;
			$record_data['tablename'] =$this->$model->get_tab($tabname)->table;
			// Set input to view
			$this->sm->assign('input',$input);
			// Set field to View
			$this->sm->assign('field_'.$value->id,$fields);		
		}

		// Thiệt đặt rules
		$validationError = '';
		$rules = $this->$model->get_rules(NULL,3);
		unset($rules['tabid']);
		unset($rules['blockid']);
		unset($rules['tablename']);
		$this->form_validation->set_rules($rules);		

		/*Form*/
		// Kiểm tra validation khi bấm nút submit
		if ($this->form_validation->run() == TRUE) {
			$reid = $this->$model->save($record_data, $record->id);
			echo 'done';
			return;
		}
		else $validationError = validation_errors();
		// Nếu chưa bấm vào nút submit thì chưa check validtion
		if ($this->input->post('submitAjax') == 'false') 
			$validationError = '';
		$this->sm->assign('validationError',$validationError);

		/*Layout*/
		// kiểm tra layout editview ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/editajax.tpl'))
			$this->sm->display($this->theme.'/'.$this->$model->module.'/editajax.tpl');
		else $this->sm->display($this->theme.'/layout/editajax.tpl');
	}	
}