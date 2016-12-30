<?php
class Admin_Controller extends Cierp_Controller
{
	/*Khai báo biến thông tin cho model*/
	/*-----------------------------*/
	// Tên Model
	public $model = '';
	// Danh sách action tạo thêm
	public $actioncustom = array();
	// Biến lọc dữ liệu từ client gửi lên
	public $filter_value = array();

	function __construct ()
	{
		parent::__construct();
		// Load class CI
		// Load Model User
		$this->load->model('user/user','user');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		// Menu, header, footer
		$this->sm->assign('header','layout/header');
		$this->sm->assign('footer','layout/footer');
		$this->sm->assign('sidebar','layout/sidebar');
		$this->sm->assign('notification','layout/notification');
		$this->sm->assign('menu','admin/menu');
		// Test thử chức năng menu, xuất main menu ra tpl
		$mainmenu = gen_menu($this,14);
		$this->sm->assign('mainmenu',$mainmenu);
		$sidebarmenu = gen_menu_sidebar($this,1);
		$this->sm->assign('sidebarmenu',$sidebarmenu);

		// Login check
		$exception_uris = array(
			'user/index/login', 
			'user/index/signup',
			'user/index/logout'
			);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user->loggedin() == FALSE) {
				redirect('user/index/login');
			}
			else
			{
				// Link
				$link = array();
				$link['logout'] = anchor('user/index/logout', '<i class="glyphicon glyphicon-log-out"></i> Logout');
				$link['setting'] = anchor('#', '<i class="glyphicon glyphicon-cog"></i> Settings');
				$link['user'] = anchor('user/index/detailview/'.$this->session->userdata['id'], '<i class="glyphicon glyphicon-user"></i> '.$this->session->userdata['name']);
				$this->sm->assign('link',$link);
			}
		}
	}

	public function postwidth ()
	{
		// Get width
		if ($this->input->post('width')<768)
			echo "onecols";
		else echo "towcols";
	}

	public function sortview ()
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;

		/*Button*/
		$button = array();
		$button['save'] = form_submit('save', 'Save', 'class="btn btn btn-primary"');
		$button['newblock'] = anchor('admin/block_manager/newajax/'.$this->$model->get_tab_id(), '<i class="glyphicon glyphicon glyphicon-plus"></i> Add Block', 'class="btn btn-primary" name="block_label_editajax"');
		$button['cancel'] = anchor($this->$model->get_baseurl().'listview', '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
		$this->sm->assign('button',$button);
		// Các núc thêm ngoài
		$this->sm->assign('actioncustom',$this->actioncustom);

		/*Data*/
		// Lấy dữ liệu từ model
		$record = $this->$model->get_new();
		// Hiển thị dữ liệu ra view
		input_field ($this,$model,$record_data,$record,0);

		/*Form*/
		// Biến reload lại trang khi có thay đổi sequence
		save_sortview ($this,$model);

		/*Layout*/
		// kiểm tra layout detailview ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/sortview.tpl'))
			$this->sm->assign('view',$this->$model->module.'/sortview');
		else $this->sm->assign('view','layout/sortview');
		// Hiển thị layout cha
		$this->sm->assign('subview','layout/index');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

	public function picklist ($tabid = NULL)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;

		/*Button*/
		$button = array();
		$button['save'] = form_submit('save', 'Save', 'class="btn btn btn-primary"');
		$button['cancel'] = anchor($this->$model->get_baseurl().'listview', '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
		$this->sm->assign('button',$button);
		// Các núc thêm ngoài
		$this->sm->assign('actioncustom',$this->actioncustom);

		// Lấy danh sách field pickist của module
		$relatedField = $this->$model->get_field_picklist($tabid);
		if ($relatedField == NULL) redirect($this->$model->get_baseurl().'listview');
		$picklistValue = array();
		foreach ($relatedField as $i) {
			$picklistValue = $this->$model->get_picklist($tabid,$i->fieldname);
			$this->sm->assign('picklistValue_'.$i->id,$picklistValue);
		}
		$this->sm->assign('relatedField',$relatedField);

		// Biến reload lại trang khi có thay đổi sequence
		save_picklist ($this,$model,$tabid);
		
		/*Layout*/
		// kiểm tra layout picklist ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/picklist.tpl'))
			$this->sm->assign('view',$this->$model->module.'/picklist');
		else $this->sm->assign('view','layout/picklist');
		// Hiển thị layout cha
		$this->sm->assign('subview','layout/index');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

	public function detailview ($id)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		// Khởi tạo biến dữ liệu
		$record = array();

		/*Button*/
		// Các nút mặc định, thêm sửa xóa
		$button = array();
		$button['new'] = anchor($this->$model->get_baseurl().'editview', '<i class="glyphicon glyphicon glyphicon-plus"></i> New','class="btn btn-primary"');
		$button['edit'] = anchor($this->$model->get_baseurl().'editview/'.$id, '<i class="glyphicon glyphicon glyphicon-edit"></i> Edit', 'class="btn btn-primary"');
		$button['cancel'] = anchor($this->$model->get_baseurl().'listview', '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
		$this->sm->assign('button',$button);
		// Các núc thêm ngoài
		$this->sm->assign('actioncustom',$this->actioncustom);

		/*Data*/
		// Lấy dữ liệu từ model
		$record = $this->$model->get($id, TRUE);
		// Hiển thị dữ liệu ra view
		input_field ($this,$model,$record_data,$record,1);

		/*Layout*/
		// kiểm tra layout detailview ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/detailview.tpl'))
			$this->sm->assign('view',$this->$model->module.'/detailview');
		else $this->sm->assign('view','layout/detailview');
		// Hiển thị layout cha
		$this->sm->assign('subview','layout/index');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}	

	public function editview ($id = NULL)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		// Khởi tạo biến dữ liệu
		$record = array();
		// Khởi tạo biến dữ liệu từ client
		$record_data = array();
		// View mặc định là Edit =2, New = 3
		$view = 2;

		/*Button*/
		$button = array();
		
		// Lấy dữ liệu đưa vào biến Record
		$button['save'] = form_submit('save', 'Save', 'class="btn btn btn-primary"');
		if ($id != NULL)
		{
			// Edit
			$record = $this->$model->get($id, TRUE);
			$button['cancel'] = anchor($this->$model->get_baseurl().'detailview/'.$id, '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
			$view = 2;
		}
		else
		{
			// New
			$record = $this->$model->get_new();
			$button['cancel'] = anchor($this->$model->get_baseurl().'listview/', '<i class="glyphicon glyphicon glyphicon-remove"></i> Cancel', 'class="btn btn-default"');
			$view = 3;
		}
		$this->sm->assign('button',$button);
		$this->sm->assign('actioncustom',$this->actioncustom);

		// Hiển thị dữ liệu lên form
		input_field ($this,$model,$record_data,$record,$view);

		/*Form*/
		// Thiệt đặt rules
		$validationError = '';
		$rules = $this->$model->get_rules(NULL,$view);
		$this->form_validation->set_rules($rules);

		// Kiểm tra khi bấm nút submit
		if ($this->form_validation->run() == TRUE) {
			$reid = $this->$model->save($record_data, $record->id);
			redirect($this->$model->get_baseurl().'detailview/'.$reid);
		}
		else $validationError = validation_errors();
		$this->sm->assign('validationError',$validationError);

		/*Layout*/
		// kiểm tra layout editview ở module
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/editview.tpl'))
			$this->sm->assign('view',$this->$model->module.'/editview');
		else $this->sm->assign('view','layout/editview');
		// Hiển thị layout cha
		$this->sm->assign('subview','layout/index');
		$this->sm->display($this->theme.'/layout/layout.tpl');
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

		/*Form*/
		// Thiệt đặt rules
		$validationError = '';
		$rules = $this->$model->get_rules(NULL,2);
		$this->form_validation->set_rules($rules);

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

	public function delete ($id = NULL)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;

		if ($id != NULL)
		{
			$this->$model->delete($id);
		}

		$data = $this->input->post('ids');
		foreach ($data as $value) {
			$this->$model->delete($value);
		}
		redirect($this->$model->get_baseurl().'listview');
	}	

	public function listview( $order = 'id', $order_type = 'asc' ,$page = 0)
	{
		/*init*/
		// Lấy tên model
		$model = $this->model;
		$this->$model->order_by = $order;
		$this->$model->order_type = $order_type;

		/*Lấy dữ liệu tìm kiếm từ client*/
		$like = array();
		foreach ($this->$model->filter_view as $value) {
			$this->filter_value[$value] = $this->input->post($value); 
		}
		foreach ($this->$model->filter_view as $value) {
			$like[$value] = $this->input->post($value); 
		}
		
		/*Danh sách các liên kết*/
		// Header link dùng để sắp xếp dữ liệu theo header
		$hearderlink = array();
		// input tạo ra form input dữ liệu để tìm kiếm dữ liệu theo header
		$input = array();
		$relatedInput = array();
		// Các nút thêm sửa xóa tạo mới
		$action = array();
		
		$action['new'] = anchor($this->$model->get_baseurl().'new', '<i class="glyphicon glyphicon glyphicon-plus"></i> New','class="btn btn-success"');
		$action['edit'] = anchor($this->$model->get_baseurl().'editajax', '<i class="glyphicon glyphicon glyphicon-edit"></i> Edit','class="btn btn-success"');
		$action['delete'] = anchor('#', '<i class="glyphicon glyphicon glyphicon-remove"></i> Delete', array('class'=>'btn btn-success','data-toggle' => "modal",'data-target' => "#deleteModal"));
		$action['search'] = anchor($this->$model->get_baseurl().'listview', '<i class="glyphicon glyphicon glyphicon-search"></i> Search','class="btn btn-success"');
		$action['sort'] = anchor($this->$model->get_baseurl().'sortview', '<i class="glyphicon glyphicon glyphicon-sort"></i> Sort Field','class="btn btn-success"');
		$action['picklist'] = anchor($this->$model->get_baseurl().'picklist', '<i class="glyphicon glyphicon glyphicon-cog"></i> Picklist','class="btn btn-success"');

		foreach ($this->$model->filter_view as $key => $value) {
			if ($value == $order && $order_type == 'desc')
				$hearderlink[$value] = anchor($this->$model->get_baseurl().'listview/'.$value.'/'.'asc/'.$page, $key.'&#9660');
			else if ($value == $order && $order_type == 'asc')
				$hearderlink[$value] = anchor($this->$model->get_baseurl().'listview/'.$value.'/'.'desc/'.$page, $key.'&#9650');
			else
				$hearderlink[$value] = anchor($this->$model->get_baseurl().'listview/'.$value.'/'.$order_type.'/'.$page, $key);
			//$input[$value] = form_input($value, $this->filter_value[$value], 'class="form-control"');
			inputfilter ($this,$model,$value,$this->filter_value[$value],$input,$relatedInput);
		}
		
		$this->sm->assign('relatedInput',$relatedInput);
		$this->sm->assign('input',$input);
		$this->sm->assign('action',$action);
		$this->sm->assign('hearderlink',$hearderlink);

		// Pagination
		$pagination = pagination_list($this,count($this->$model->get_offset(count($this->$model->get()),0,$like)),$this->$model->get_baseurl().'listview/'.$order.'/'.$order_type.'/');
        $this->sm->assign('pagination',$pagination);

		// Data of Listview
        $this->sm->assign('filter',$this->$model->filter_view);
        $data = data_list($this,$model,$page,$like);
        $this->sm->assign('data',$data);
        
		// Layout
		//Check model layout
		if (file_exists(APPPATH.'views/'.$this->theme.'/'.$this->$model->module.'/listview.tpl'))
			$this->sm->assign('view',$this->$model->module.'/listview');
		else $this->sm->assign('view','layout/listview');
        $this->sm->assign('subview','layout/index');
        $this->sm->display($this->theme.'/layout/layout.tpl');
    }
}