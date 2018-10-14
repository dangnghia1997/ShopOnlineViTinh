<?php
class Categogy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('upload');
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

		$id_parent ='';
		if( $this->input->post('id_parent') !== NULL)
		{
			$id_parent =$this->input->post('id_parent');
		}

		$limit = $this->input->post('limit');


		if($id_parent == -1)
		{
			$total = count($this->m_categogy->read_all_cate());
		}
		else
		{
			$total = count($this->m_categogy->read_cate_by_parentID($id_parent));
		}

		//config pagination render
		$config=array();
		$config['base_url']= '';
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
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
		$config['num_links']=2;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start=($page-1) * $config['per_page'];

		if($id_parent == -1)
		{
			$data_cate_child = $this->m_categogy->ajax_read_all_cate($config['per_page'],$start);
		}
		else
		{
			$data_cate_child = $this->m_categogy->ajax_read_cate_by_parentID($id_parent,$config['per_page'],$start);
		}

		$output = array(
			'pagination_link' => $this->pagination->create_links(),
			'data_cate_child' => $data_cate_child,
			'total' => $total
		);

		echo json_encode($output);
	}

	public function add_categogy()
	{
		//Models
		$data['list_parent_cate'] = $this->m_categogy->read_cate_by_parentID(0);

		//form_Validation
		$this->form_validation->set_rules('ten_loai','Tên Loại','required');
		$this->form_validation->set_rules('ma_loai_cha','Thuộc','required|callback_check_ma_loai_cha',
					array('check_ma_loai_cha'=>'Bạn cần phải chọn 1 trong các lựa ở trường %s'));

		$this->form_validation->set_rules('hinh_anh','Hình ảnh','callback_check_upload',
				array('check_upload'=>'Hình ảnh không đúng quy ước'));

		if($this->form_validation->run() == FALSE)
		{
			//Views
			$data['view']='admin/categogy/v_add_categogy';
			$this->load->view('layouts/admin/layout',$data);
		}
		else
		{
			$this->check_form_add_categogy();
		}


	}
	public function check_form_add_categogy()
	{
		//form validation
		$res['errors'] = array(
			'ten_loai' 		=> 		'',
			'ma_loai_cha' => 		'',
			'hinh_anh'    => 		''
		);


		$res['test']=$_FILES;
		$this->form_validation->set_rules('ten_loai','Tên Loại','required');
		$this->form_validation->set_rules('ma_loai_cha','Thuộc','required|callback_check_ma_loai_cha',
					array('check_ma_loai_cha'=>'Bạn cần phải chọn 1 trong các lựa ở trường %s'));
		$this->form_validation->set_rules('anh','','callback_check_upload');
		$res['status']=0; // 0: là có lỗi validation
		if($this->form_validation->run() == FALSE)
		{
			$res['errors']=array(
				'ten_loai' 		=> 		form_error('ten_loai'),
				'ma_loai_cha' => 		form_error('ma_loai_cha'),
				'hinh_anh'    => 		form_error('anh')
			);
		}
		else
		{
			$res['status']=1;

			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 102400;   //đơn vị kb
			$config['max_width'] =1024;  //đơn vị pixel
			$config['max_height'] = 768;

			//Khởi tạo upload
			$this->upload->initialize($config);



			if(! $this->upload->do_upload('anh'))
			{
					$res['errors']['loi_upload'] = $this->upload->display_errors();
			}
			else
			{

				$ten_loai = $this->input->post('ten_loai');
				$ma_loai_cha = $this->input->post('ma_loai_cha');
				$mo_ta = $this->input->post('mo_ta_them_loai');
				$hinh = $this->upload->data('anh');
				$res['errors']['name_anh'] = $hinh;
					//INSERT dữ liệu vào db
				//	$kq= $this->m_categogy->add_categogy($ten_loai,$mo_ta,$ma_loai_cha,$hinh);
			}
		}


		echo json_encode($res);


	}

	public function check_upload()
	{
		if(!empty($_FILES))
		{
				$allowed_type=array('image/jpeg','image/png','image/jpg','image/gif');
				$allowed_max_size=102400; //kb
				if($_FILES['anh']['size'] <= $allowed_max_size && in_array($_FILES['anh']['type'],$allowed_type))
				{
					return TRUE;
				}
				else
				{
						if($_FILES['anh']['size'] > $allowed_max_size)
						{
							$this->form_validation->set_message('check_upload','Vui lòng chọn file ảnh có kích thước < 100Mb');
							return FALSE;
						}
						else if(!in_array($_FILES['anh']['type'],$allowed_type))
						{
								$this->form_validation->set_message('check_upload','Vui lòng chọn file thuộc loại jpeg | png | jpg|  gif');
								return FALSE;
						}
						else
						{
								$this->form_validation->set_message('check_upload','File phải là jpeg | png | jpg|  gif và kích thước < 100Mb');
								return FALSE;
						}
				}
		}
		else
		{
			$this->form_validation->set_message('check_upload','Vui lòng chọn một ảnh để upload!!');
			return FALSE;
		}
	}


	function check_ma_loai_cha($str_value)
	{
		return ($str_value == -1) ? FALSE : TRUE ;
	}





}

?>
