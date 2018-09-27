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
	public function list_product($page=1)  
	{
		# code...
		$data['count']=$this->m_product->count_data();
		$data['list']=$this->m_product->show_data($page);
		$data['view']='admin/product/v_listproduct';
		$data['page'] = $this->m_product->get_page($page);
		$this->load->view('layouts/admin/layout',$data);
	}
	//dung de test 
/*	public function test()
	{
		$this->m_product->get_page();
		
	}*/

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */