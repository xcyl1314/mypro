<?php
class Pages extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
        // Your own constructor code
    }

    public function view($page = 'home')
	{
	  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	    {
	        // Whoops, we don't have a page for that!
	        show_404();
	    }

	    //$this->load->helper('MY_hello');
	    //echo hello();

	    $this->load->library('calendar');
	    echo $this->calendar->generate(2006, 6);

	    $data['title'] = ucfirst($page); // Capitalize the first letter
	    //echo $this->calendar->generate();exit;
	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);

	    //程序分析
	    //$this->output->enable_profiler(TRUE);
	 //    $sections = array(
		//     'config'  => TRUE,
		//     'queries' => TRUE
		// );

		// $this->output->set_profiler_sections($sections);
	}

    public function index()
    {
    	echo "string";
    }

    //重映射方法
    public function _remap($method, $params = array()){
    	if($method == 'hhh'){
    		echo 'yes';exit;
    	}else if (method_exists($this, $method))
	    {
	        return call_user_func_array(array($this, $method), $params);
	    }
    }

    //处理输出
    public function _output($output)
	{
	    //echo $output;echo 'ok';
	}

}