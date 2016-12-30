<?php

class Article_View extends Content_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'article';
		$model = $this->model;
		$this->load->model('content/'.$model,$model);
		$this->load->model('content/category','category');
	}

	public function index($category_alias,$article_alias){
    	// Fetch the article
    	$category = $this->category->get_by(array('alias' => $category_alias,'visible' => 1), TRUE);
    	count($category) || show_404(current_url());
		$article = $this->article->get_by(array('alias' => $article_alias,'visible' => 1), TRUE);
		count($article) || show_404(current_url());

		// Assgin layout
		$this->sm->assign('page',$article);
		$this->sm->assign('subview','article');
		$this->sm->display($this->theme.$this->con_theme.'/layout.tpl');
	}

}