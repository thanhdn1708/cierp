<?php

class Index extends Admin_Controller {

	private $username = '';
	private $password = '';
	private $name = '';
	private $email = '';

	public function __construct(){
		parent::__construct();
		$this->model = 'user';
		$this->tabid = $this->user->get_tab($this->model)->id;
		$this->sm->assign('model',$this->user->get_tab());
		$this->sm->assign('moduleurl',$this->user->get_baseurl());
	}

	public function changepassword($id){
		// Change passowrd form
		// Set form
		$user = $this->user->get($id, TRUE);
		$rules = $this->user->ruleschangepassword;
		$this->form_validation->set_rules($rules);
		$record_data = array(); // Data of post

		// Set value for input form
		$validationError = '';

		// Process form
		if ($this->form_validation->run() == TRUE) {
			$record_data['password']= $this->user->hash($this->input->post('newpassword'));
			if ($this->user->changepassword($user->username) == TRUE) {
				$this->user->save($record_data,$user->id);
				$validationError = 'done';
			}
			else $validationError = 'Password not correct!';
		}
		// Validation Error
		else 
			$validationError = validation_errors();
		echo $validationError;
	}

	public function detailview($id)
	{
		//init
		$_model = $this->model;
		$this->actioncustom['changepass'] = anchor('#', '<i class="glyphicon glyphicon-lock"></i> Change Password',array(
			'id'=>'action_changepassword','class'=>'btn btn-success','data-toggle' => "modal",'data-target' => "#changepassModal"));
		
		$this->sm->assign('formPass',form_password('password', $this->password,'class="form-control"'));
		$this->sm->assign('formNewPass',form_password('newpassword', $this->password,'class="form-control"'));
		$this->sm->assign('formRePass',form_password('repassword', $this->password,'class="form-control"'));
		
		parent::detailview($id);
	}

	public function signup ()
	{
		// Set form
		$rules = $this->user->rulessignup;
		$this->form_validation->set_rules($rules);
		$record_data = array(); // Data of post

		// Set value for input form
		$validationError = '';
		$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');
		$this->name = $this->input->post('name');
		$this->email = $this->input->post('email');

		// Process form
		if ($this->form_validation->run() == TRUE) {
			$record = $this->user->get_new();
			$record_data['username'] = $this->username;
			$record_data['password']= $this->user->hash($this->password);
			$record_data['name'] = $this->name;
			$record_data['email'] = $this->email;
			$this->user->save($record_data,$record->id);
			if ($this->user->login() == TRUE) {
				redirect($dashboard);
			}
		}
		// Validation Error
		else $validationError = validation_errors();

    	// Assgin Data
		$this->sm->assign('formUser',form_input('username', $this->username, 'class="form-control"'));
		$this->sm->assign('formPass',form_password('password', $this->password,'class="form-control"'));
		$this->sm->assign('formRePass',form_password('repassword', $this->password,'class="form-control"'));
		$this->sm->assign('formEmail',form_input('email', $this->email,'class="form-control"'));
		$this->sm->assign('formName',form_input('name', $this->name,'class="form-control"'));

		// Assgin layout
		$this->sm->assign('subview','user/signup');
		$this->sm->assign('validationError',$validationError);
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

	public function login() {
    	// Redirect a user if he's already logged in
		$dashboard = 'admin/dashboard';
		$this->user->loggedin() == FALSE || redirect($dashboard);


		// Set form
		$rules = $this->user->ruleslogin;
		$this->form_validation->set_rules($rules);

		// Set value for input form
		$validationError = '';
		$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');

		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->user->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				$validationError = 'That email/password combination does not exist';
				//redirect('user/index/login', 'refresh');
			}
		}
		// Validation Error
		else $validationError = validation_errors();
		
    	// Assgin Data
		$this->sm->assign('formUser',form_input('username', $this->username, 'class="form-control"'));
		$this->sm->assign('formPass',form_password('password', $this->password,'class="form-control"'));
		
		// Assgin layout
		$this->sm->assign('subview','user/login');
		$this->sm->assign('validationError',$validationError);
		$this->sm->display($this->theme.'/layout/layout.tpl');
	}

	public function logout ()
	{
		$this->user->logout();
		redirect('user/index/login');
	}
}