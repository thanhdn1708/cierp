<?php
class Migration extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		$version = array(
              'name'        => 'version',
              'id'          => 'version',
              'value'       => $this->user->get_migration(),
              'class' => "form-control",
            );
		$enable = array(
			'name'        => 'enable',
			'id'          => 'enable',
			'value'       =>  '1',
			);
		// Kiểm tra khi bấm nút submit
		$this->form_validation->set_rules('enable', 'Enable', 'required');
		if ($this->form_validation->run() == TRUE) {
			$this->load->library('migration');
			$this->migration->version($this->input->post('version'));
			if (! $this->migration->current()) {
				//show_error($this->migration->error_string());
			}
			else {
				//echo 'Migration worked!';
			}
		}

		$this->sm->assign('enable',form_checkbox($enable));
		$this->sm->assign('version',form_input($version));
		$this->sm->assign('subview','admin/migration');
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

}