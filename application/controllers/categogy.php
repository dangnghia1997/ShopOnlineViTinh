<?php
class Categogy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		
		$this->load->model('m_categogy');
	}

	public function index()
	{
		//model
		$data['main_categogy'] = $this->m_categogy->read_cate_by_parentID(0);
		$data['list_cate'] = $this->m_categogy->read_all_cate();
		//view
		$data['view'] = 'admin/categogy/v_list_categogy';
		$this->load->view('layouts/admin/layout',$data);
	}

	public function pagination()
	{
		$config=array();
		$config['base_url']= '';
		$config['total_rows'] = count($this->m_categogy->read_all_cate());
		$config['per_page'] = 3;
		$config['use_page_numbers'] =TRUE;
		$config['full_tag_open']='<ul class="pagination">';
		$config['full_tag_close']='</ul>';
		$config['first_link']='Đầu';
		$config['first_tag_open']='<li>';
		$config['first_tag_close']='</li>';
		$config['last_link']='Cuối';
		$config['last_tag_open']='<li>';
		$config['last_tag_close']='</li>';
		$config['next_link']='Sau';
		$config['next_tag_open']='<li class="paginate_button page-item next">';
		$config['next_tag_close']='</li>';
		$config['prev_link']='Trước';
		$config['prev_tag_open']='<li class="paginate_button page-item previous">';
		$config['prev_tag_close']='</li>';
		$config['cur_tag_open']='<li class="paginate_button page-item active"><a class="page-link1">';
		$config['cur_tag_close']='</a></li>';
		$config['num_tag_open']='<li class="paginate_button page-item ">';
		$config['num_tag_close']='</li>';
		$config['_attributes']='class="page-link1"';
		$config['num_links']=3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start=($page-1) * $config['per_page'];
		$output = array(
			'pagination_link' => $this->pagination->create_links(),
			'data_cate_child' => $this->m_categogy->ajax_read_all_cate($config['per_page'],$start)
		);

		echo json_encode($output);
	}



	
}

?>
