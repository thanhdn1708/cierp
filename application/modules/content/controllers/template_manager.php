<?php

class Template_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'template';
		$model = $this->model;
		$this->load->model('content/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}
}