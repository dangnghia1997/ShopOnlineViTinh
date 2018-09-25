<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_product');
	}

	public function index()
	{
		
	}

	public function add_product()
	{
		# code...
		$data['view']='admin/product/v_addproduct';
		$this->load->view('layouts/admin/layout',$data);
	}
	public function list_product()
	{
		# code...
		$data['list']=$this->m_product->show_data();
		$data['view']='admin/product/v_listproduct';
		$this->load->view('layouts/admin/layout',$data);
	}
	//dung de test 
	/*public function test()
	{
		$data['list']=$this->m_product->showData();
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}*/

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */