<?php
class Dashboard extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{ 		
    	$this->sm->assign('subview','admin/dashboard');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}
}