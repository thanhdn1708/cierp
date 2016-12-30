<?php
class Cierp_Controller extends CI_Controller
{
	/*Khai báo biến mặc định, theme và smarty*/
	// Biến Smarty
	public $sm;
	// Tên thư mục chứa theme
	public $theme = 'default_theme'; 

	function __construct()
	{
		parent::__construct();
		/*Load class CI*/
		$this->load->helper('url');

		/*Khai báo chung cho Smarty*/
		$this->sm = new Smartycore();
		$this->sm->assign('theme',$this->theme);
		$this->sm->assign('site_name',config_item('site_name'));
		$this->sm->assign('base_url',base_url());
		$this->sm->assign('csspath',base_url().config_item('assets_dir').'/css');
		$this->sm->assign('jspath',base_url().config_item('assets_dir').'/js');
		$this->sm->assign('imgpath',base_url().config_item('assets_dir').'/image');
	}
}
?>