<?php
class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
        // Your own constructor code
        $this->load->helper('url');
    }
	public function login()
	{
		$this->load->view('//admin/login/login');
	}

	public function logout()
	{
		echo 'logout';
	}

	public function regist()
	{

	}
}
