<?php

class Menu_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'menu';
		$model = $this->model;
		$this->load->model('admin/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}

	public function detailview($id)
	{
		//init
		$model = $this->model;
		$this->actioncustom['sortlist'] = anchor($this->$model->get_baseurl().'sortlist/'.$id, '<i class="glyphicon glyphicon-sort"></i> Sortlist','class="btn btn-success"');
		
		parent::detailview($id);
	}

	public function sortlist ($id)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;

		/*Button*/
		$button = array();
		$button['save'] = form_submit('save', 'Save', 'class="btn btn btn-primary"');
		$button['cancel'] = anchor($this->$model->get_detailurl($id), '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
		$this->sm->assign('button',$button);
		// Các núc thêm ngoài
		$this->sm->assign('actioncustom',$this->actioncustom);

		// Lấy danh sách field pickist của module
		$menuListView = $this->$model->get_menu($id);
		if ($menuListView == NULL) redirect($this->$model->get_detailurl($id));
		$this->sm->assign('menuListView',$menuListView);

		// Biến reload lại trang khi có thay đổi sequence
		$reload = false;
		foreach ($this->$model->get_menu($id) as $j) {
			$record = $this->input->post('result_menulist');
			if ($record!='')
			{
				$record = explode(',',$record);
				for ($i=0; $i < sizeof($record); $i++) { 
					$recordid = str_replace('menuListView_', '', $record[$i]);
					$this->$model->set_sortlist_sequence($recordid,$i+1);
					$reload = true;
				}
			}
		}
		if ($reload) redirect($this->$model->get_baseurl().'sortlist/'.$id);
		
		/*Layout*/
		// kiểm tra layout picklist ở module
		$this->sm->assign('parentid',$id);
		$this->sm->assign('view','admin/menusortlist');
		// Hiển thị layout cha
		$this->sm->assign('subview','layout/index');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

	public function newajax ($id)
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
					}
				}
			// Set relatedInput to view
			$this->sm->assign('relatedInput',$relatedInput);
			// Unset input parentid and set data for input
			unset($fields[2]);
			$record_data['parentid'] =$id;
			// Set input to view
			$this->sm->assign('input',$input);
			// Set field to View
			$this->sm->assign('field_'.$value->id,$fields);		
		}

		// Thiệt đặt rules
		$validationError = '';
		$rules = $this->$model->get_rules(NULL,3);
		unset($rules['parentid']);
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