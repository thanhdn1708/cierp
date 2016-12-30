<?php

class Category_View extends Content_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'category';
		$model = $this->model;
		$this->load->model('content/'.$model,$model);
		$this->load->model('content/article','article');
	}

	public function index($category_alias){
    	// Fetch the article
    	$category = $this->category->get_by(array('alias' => $category_alias,'visible' => 1), TRUE);
    	count($category) || show_404(current_url());

    	// add body to category
    	$category->body = '';

    	// get all article of category
    	$articlelist = $this->article->get_by(array('categoryid' => $category->id,'visible' => 1));
    	for ($i=0; $i < count($articlelist); $i++) { 
    		$articlelist[$i]->url = $category->alias.'/'.$articlelist[$i]->alias;
    	}
		
		// Assgin layout
		$this->sm->assign('articlelist',$articlelist);
		$this->sm->assign('page',$category);
		$this->sm->assign('subview','index');
		$this->sm->display($this->theme.$this->con_theme.'/layout.tpl');
	}

}