<?php
class Content_Controller extends Cierp_Controller
{

	// Tên Model
	public $model = '';
	// Tên thư mục chứa theme
	public $con_theme = '/content/cierpblog'; 

	function __construct ()
	{
		parent::__construct();
		$this->sm->assign('con_theme',$this->con_theme);
		$this->sm->assign('csspath',base_url().config_item('assets_dir').'/'.$this->con_theme.'/css');
		$this->sm->assign('jspath',base_url().config_item('assets_dir').'/'.$this->con_theme.'/js');
		$this->sm->assign('imgpath',base_url().config_item('assets_dir').'/'.$this->con_theme.'/img');
	}
}