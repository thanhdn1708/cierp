<?php

class Picklist_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'picklist';
		$model = $this->model;
		$this->load->model('admin/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}

	public function editajax ($id = NULL)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		// Khởi tạo biến dữ liệu
		$record = array();
		// Khởi tạo biến dữ liệu từ client
		$record_data = array();

		if ($id != NULL)
		{
			// Lấy dữ liệu đưa vào biến Record
			$record = $this->$model->get($id, TRUE);
			// Hiển thị dữ liệu lên form
			input_field ($this,$model,$record_data,$record,2);
			// Thiệt đặt rules
			$validationError = '';
			$rules = $this->$model->get_rules(NULL,2);
			$this->form_validation->set_rules($rules);
		}
		else
		{
			// Lấy dữ liệu đưa vào biến Record
			$record = $this->$model->get_new();
			// Hiển thị dữ liệu lên form
			input_field ($this,$model,$record_data,$record,3);
			// Thiệt đặt rules
			$validationError = '';
			$rules = $this->$model->get_rules(NULL,3);
			$this->form_validation->set_rules($rules);		
		}

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