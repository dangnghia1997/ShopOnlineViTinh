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
		$data['list'] = $this->m_product->get_cate_product();
		$this->load->view('layouts/admin/layout',$data);

	}
	public function list_product()  
	{

		$data['view']='admin/product/v_listproduct';
		$this->load->view('layouts/admin/layout',$data);
		
	}

	public function ajax_pagination()
	{
		$this->load->library('pagination');
		$page = $this->uri->segment(3);
		$config['base_url'] = base_url().'product/list_product';

		$config['total_rows'] = $this->m_product->count_data();//tong san pham
		$config['per_page'] = 10;
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] =TRUE;

		//config giao dien
		$config['full_tag_open']='<ul class="pagination" id="ul_tag">';
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
		$config['cur_tag_open']='<li class="paginate_button page-item active"><a class="page-link">';
		$config['cur_tag_close']='</a></li>';
		$config['num_tag_open']='<li class="paginate_button page-item ">';
		$config['num_tag_close']='</li>';
		$config['_attributes']='class="page-link"';

		$this->pagination->initialize($config);

		$offset = ($page-1)*$config['per_page'];
		$data = $this->m_product->show_data($config['per_page'],$offset);

		$ajax_send = [
		    'pagination' => $this->pagination->create_links(),
		    'htmlString' => $data['htmlString']
		];

		echo(json_encode($ajax_send));
	}

	public function post_from_add_product()
	{
		$ten_san_pham = $this->input->post('ten_san_pham');
		$ma_loai = $this->input->post('ma_loai');
		$don_gia = $this->input->post('don_gia');
		$mo_ta_tom_tat = $this->input->post('mo_ta_tom_tat');

		//xu ly lay du lieu file
		$target_dir = "assets/images/";
		$target_file = $target_dir . basename($_FILES["hinh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["hinh"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		}
		else {
		    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["hinh"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$hinh = basename( $_FILES["hinh"]["name"]);
		$ngay_tao = date("Y/m/d");
		if($this->m_product->insert_product($ten_san_pham,$ma_loai,$mo_ta_tom_tat,$don_gia,$hinh,$ngay_tao)){
			
		}
	}
	//dung de test 
	/*public function test()
	{
		$this->m_product->get_cate_product();
		
	}*/

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */