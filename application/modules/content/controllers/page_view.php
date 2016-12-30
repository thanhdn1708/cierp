<?php

class Page_View extends Content_Controller {

	public function __construct(){
		parent::__construct();
		$this->model = 'page';
		$model = $this->model;
		$this->load->model('content/'.$model,$model);
		$this->load->model('content/template','template');
		$this->load->model('content/category','category');
		$this->load->model('content/article','article');
	}

	public function index(){
		if ($this->uri->segment(1) == NULL) $page = $this->page->get_by(array('default' => 1,'visible' => 1), TRUE);
		else $page = $this->page->get_by(array('alias' => (string) $this->uri->segment(1),'visible' => 1), TRUE);
    	count($page) || show_404(current_url());
    	$template = $this->template->get($page->templateid,TRUE);

    	// Check tempatle is publish
    	if ($template->visible == '0')
    		show_404(current_url());

    	// Fetch the page data
    	$method = $template->name;
    	if (method_exists($this, $method)) {
    		$this->$method();
    	}

		// Assgin layout
		$this->sm->assign('page',$page);
		$this->sm->assign('subview',$template->layout);
		$this->sm->display($this->theme.$this->con_theme.'/layout.tpl');
	}

	private function homepage(){
    	// get all article
    	$articlelist = $this->article->get_by(array('visible' => 1));
    	for ($i=0; $i < count($articlelist); $i++) { 
    		$category = $this->category->get($articlelist[$i]->categoryid);
    		$articlelist[$i]->url = $category->alias.'/'.$articlelist[$i]->alias;
    	}
		
		// Assgin layout
		$this->sm->assign('articlelist',$articlelist);
	}
}