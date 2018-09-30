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
	public function list_product($page=1)  
	{
		# code...
		$data['count']=$this->m_product->count_data();
		$data['list']=$this->m_product->show_data($page);
		$data['view']='admin/product/v_listproduct';
		$data['page'] = $this->m_product->get_page($page);
		$this->load->view('layouts/admin/layout',$data);
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