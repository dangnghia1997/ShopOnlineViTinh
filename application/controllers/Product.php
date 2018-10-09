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
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		//Đặt lời nhắn bằng tiếng việt cho lỗi
		$this->form_validation->set_message('min_length', '{field} không được nhỏ hơn {param} ký tự.');
		$this->form_validation->set_message('required', 'Bạn chưa nhập {field}.');
		$this->form_validation->set_message('is_natural', '{field} phải là số.');

		//Đặt luật cho từng field
		$this->form_validation->set_rules('ten_san_pham', 'Tên sản phẩm', 'required|min_length[5]');
		$this->form_validation->set_rules('don_gia', 'Đơn Giá', 'required|is_natural');
		/*if(isset($_FILES['hinh']['name'])){
			$this->form_validation->set_rules('hinh', 'Hình ảnh', 'required', array('required' => 'Chưa chọn hình ảnh để upload'));
		}*/

		/*if($this->form_validation->run()== False){
			$data['view']='admin/product/v_addproduct';
			$data['list'] = $this->m_product->get_cate_product(0);
			$this->load->view('layouts/admin/layout',$data);
		}
		else{*/
			$this->post_from_add_product();
		//}
		echo "tra ve";
	}
	public function list_product()  
	{

		$data['view']='admin/product/v_listproduct';
		$data['edit_product']='admin/product/v_editproduct_ajax.php';
		$data['list']=$this->m_product->get_cate_product(0);
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


	public function upload_file()
	{
		if(isset($_FILES["hinh"]))  
    	{  
            $extension = explode('.', $_FILES['hinh']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = 'assets/images/' . $new_name;  
            move_uploaded_file($_FILES['hinh']['tmp_name'], $destination);  
            return $new_name;
        }else {
        	echo "khong upload dc";
        } 
	}

	public function post_from_add_product()
	{
		$ten_san_pham = $this->input->post('add_ten_san_pham');
		$ma_loai = $this->input->post('add_ma_loai');
		$don_gia = $this->input->post('add_don_gia');
		$mo_ta_tom_tat = $this->input->post('add_mo_ta_tom_tat');
		$hinh = $this->upload_file();
		echo '<pre>';
		var_dump($hinh);
		echo '</pre>';
		$ngay_tao = date("Y/m/d");

		$this->m_product->insert_product($ten_san_pham,$ma_loai,$mo_ta_tom_tat,$don_gia,$hinh,$ngay_tao);
		 echo 1;
	}


	public function ajax_select_category($idparent)
	{
		$result = $this->m_product->get_cate_product($idparent);
		$htmlString ='';
		$htmlString.='<div class="col-lg-3 col-md-12 text-right">';
		$htmlString.='<span>Loại sản phẩm</span></div><div class="col-lg-8 col-md-12">';
        $htmlString.='<select class="select2 form-control custom-select select2-hidden-accessible form-control" name="add_ma_loai" id="add_child_cate">';
        $htmlString.='<option disabled selected>---Chọn loại sản phẩm---</option>';                           
		foreach ($result as $value) {
			$htmlString.='<option value="'.$value['ma_loai'].'">'.$value['ten_loai'].'</option>';
		}
		$htmlString.='</select></div>';
		echo $htmlString;
	}

	public function ajax_edit()
	{
		$id = $this->input->post('id_product');
		$data = $this->m_product->show_data_by_id($id);
		$output = [];
		$output['ma_san_pham'] = $id;
		$output['so_trang'] = $this->input->post('page_product');
		foreach ($data as $value) {
			$output['ten_san_pham'] = $value['ten_san_pham'];
			$output['hinh'] = $value['hinh'];
			$output['mo_ta_tom_tat'] = $value['mo_ta_tom_tat'];
			$output['don_gia'] = $value['don_gia'];
			$output['ma_loai'] = $value['ma_loai'];
			$output['ma_loai_cha'] = $value['ma_loai_cha'];
		}	
		$output['htmlParent'] = $this->get_html_category_string($output['ma_loai_cha'],0);
		$output['htmlChild'] = $this->get_html_category_string($output['ma_loai'],$output['ma_loai_cha']);

		echo json_encode($output);
	}

	public function get_html_category_string($id,$idparent)
	{
		$result = $this->m_product->get_cate_product($idparent);
		$htmlString ='';                         
		foreach ($result as $value) {
			if($value['ma_loai']==$id){
				$htmlString.='<option selected value="'.$value['ma_loai'].'">'.$value['ten_loai'].'</option>';
			}
			else{
				$htmlString.='<option value="'.$value['ma_loai'].'">'.$value['ten_loai'].'</option>';
			}
			
		}
		return $htmlString;
	}

	public function ajax_update()
	{
		# code...
		$ma_san_pham = $this->input->post('ma_san_pham');
		$so_trang = $this->input->post('so_trang');
		$ten_san_pham = $this->input->post('ten_san_pham');
		$don_gia = $this->input->post('don_gia');
		$ma_loai = $this->input->post('ma_loai');
		$ma_loai_cha = $this->input->post('ma_loai_cha');
		$mo_ta_tom_tat = $this->input->post('mo_ta_tom_tat');

		$data = array(
			'ten_san_pham' => $ten_san_pham,
			'don_gia' => $don_gia,
			'ma_loai' => $ma_loai,
			'ma_san_pham' => $ma_san_pham,
			'mo_ta_tom_tat' => $mo_ta_tom_tat
		);

		$this->db->where('ma_san_pham', $ma_san_pham);
		$this->db->update('san_pham', $data);
		echo $so_trang;
	}

	public function ajax_delete()
	{
		$ma_san_pham = $this->input->post('id_product');
		$this->m_product->delete_product($ma_san_pham);
		$so_trang = $this->input->post('page_product');
		echo $so_trang;
	}




	//dung de test 
	/*public function test()
	{
		$this->m_product->get_cate_product();
		
	}*/

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */