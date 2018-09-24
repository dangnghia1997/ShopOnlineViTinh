<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->view('admin/html/ltr/index.php');
	}
	public function test1()
	{
		return 1;
	}
	public function FunctionName()
	{
		# code...
		return 2;
	}

}

/* End of file controller.php */
/* Location: ./application/controllers/controller.php */