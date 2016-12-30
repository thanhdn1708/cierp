<?php
class User extends Admin_Model {
	public $tab_name = 'User';
	public $order_by = 'id';
	public $order_type = 'asc';
	public $filter_view =  array(
		'Username' => 'username', 
		'Email' => 'email',
		'Name' => 'name',
		'Gender' => 'gender',
		'Birthday' => 'birthday',
		);
	public $ruleslogin = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'Username', 
			'rules' => 'trim|required|xss_clean'
			), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
			)
		);
	public $rulessignup = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'Username', 
			'rules' => 'trim|required|xss_clean|is_unique[cierp_user.username]'
			), 
		'name' => array(
			'field' => 'name', 
			'label' => 'Name', 
			'rules' => 'trim|required'
			), 		
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
			),
		'repassword' => array(
			'field' => 'repassword', 
			'label' => 'Confirm Password', 
			'rules' => 'trim|required|matches[password]'
			),
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|xss_clean|valid_email'
			), 
		);
	public $ruleschangepassword = array(	
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
			),
		'repassword' => array(
			'field' => 'repassword', 
			'label' => 'Confirm Password', 
			'rules' => 'trim|required|matches[newpassword]'
			),
		'newpassword' => array(
			'field' => 'newpassword', 
			'label' => 'New Password', 
			'rules' => 'trim|required'
			), 
		);

	function __construct ()
	{
		$this->module = $this->get_tab()->module;
		$this->controller = $this->get_tab()->controller;
		$this->tablename = $this->get_tab()->table;
		parent::__construct();
	}

	public function login ()
	{
		$user = $this->get_by(array(
			'username' => $this->input->post('username'),
			'password' => $this->hash($this->input->post('password')),
			), TRUE);
		
		//var_dump($this->hash($this->input->post('password')));

		if (count($user)) {
			// Log in user
			$data = array(
				'name' => $user->username,
				'email' => $user->email,
				'id' => $user->id,
				'loggedin' => TRUE,
				);
			$this->session->set_userdata($data);
			return TRUE;
		}

        // If we get to here then login did not succeed
		return FALSE;
	}

	public function logout ()
	{
		$this->session->sess_destroy();
	}

	public function loggedin ()
	{
		return (bool) $this->session->userdata('loggedin');
	}

	public function changepassword ($username)
	{
		$user = $this->get_by(array(
			'username' => $username,
			'password' => $this->hash($this->input->post('password')),
			), TRUE);
		
		//var_dump($this->hash($this->input->post('password')));

		if (count($user)) {
			return TRUE;
		}

        // If we get to here then login did not succeed
		return FALSE;
	}
	
	public function hash ($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}
}