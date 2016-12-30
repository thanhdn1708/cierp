<?php

class Tab_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'tab';
		$model = $this->model;
		$this->load->model('admin/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}
}