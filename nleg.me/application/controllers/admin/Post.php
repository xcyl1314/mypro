<?php
class Post extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
        // Your own constructor code
    }

	public function index()
	{
		$this->load->view('//admin/post/index');
	}

}