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

}

/* End of file controller.php */
/* Location: ./application/controllers/controller.php */