<?php

class Article_Manager extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'article';
		$model = $this->model;
		$this->load->model('content/'.$model,$model);
		$this->sm->assign('model',$this->$model->get_tab());
		$this->sm->assign('moduleurl',$this->$model->get_baseurl());
	}
}