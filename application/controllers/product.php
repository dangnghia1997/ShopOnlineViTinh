<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function addProduct()
	{
		# code...
		$data['view']='admin/product/v_addproduct';
		$this->load->view('layouts/admin/layout',$data);
	}

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */