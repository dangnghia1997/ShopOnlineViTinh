<?php
class Admin extends CI_Controller
{
	public function index()
	{
		$data['view']='admin/v_dashboard';
		$this->load->view('layouts/admin/layout',$data);
	}

	public function test()
	{
		
		$this->load->view('layouts/admin/layout');
	}
}
?>
