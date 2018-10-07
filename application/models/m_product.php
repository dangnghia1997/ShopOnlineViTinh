<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function count_data()
	{
		$this->db->select('*');
		$data = $this->db->get('san_pham');
		$data = $data->result_array();
		$size = count($data);
		return $size;
	}

	public function show_data($limit, $offset)
	{
		//$this->db->get('Table', limit, offset);
		$this->db->select('*,sp.hinh');
		$this->db->from('san_pham as sp');
		$this->db->join('loai_san_pham as lsp', 'sp.ma_loai = lsp.ma_loai', 'left');
		$this->db->limit($limit, $offset);
		$this->db->order_by('ma_san_pham', 'desc');
		$result = $this->db->get();

		$page = round($offset/$limit)+1;
		$result = $result->result_array();
		
		//show_data ajax
		$htmlString = '';
		foreach ($result as $value) {
			$htmlString.='<tr role="row" class="odd"><td class="">'.$value['ten_san_pham'].'</td>';
            $htmlString.='<td class=""><img width="120" height="120" src="'.base_url().'assets/images/'.$value['hinh'].'"></td>';
            $htmlString.='<td class="">'.$value['ten_loai'].'</td><td class="" width="250px">'.$value['mo_ta_tom_tat'].'</td>';
            $htmlString.='<td class="">'.$value['don_gia'].'</td><td class="sorting_1">'.$value['so_lan_xem'].'</td>';
            $htmlString.='<td class="sorting_1">'.$value['ngay_tao'].'</td>';
            $htmlString.='<td class="" width="50px"><a href="#" id="edit-product" data-page="'.$page.'" data-id="'.$value['ma_san_pham'].'" data-toggle="modal" data-target="#editProduct"><i class="mdi mdi-lead-pencil" style="color: #3498db; font-size: 20px"></i></a></td><td class="" width="50px"><a href="#"><i class="mdi mdi-delete" style="color: #e74c3c; font-size: 20px"></i></a></td></tr>';
		}

		$data = [
		    'result' => $result,
		    'htmlString' => $htmlString 
		];

		return $data;

	}

	public function show_data_by_id($id)
	{
		$this->db->select('*,sp.hinh');
		$this->db->from('san_pham as sp');
		$this->db->join('loai_san_pham as lsp', 'sp.ma_loai = lsp.ma_loai', 'left');
		$this->db->where('ma_san_pham', $id);
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}

	public function get_page($page)
	{
		return $page;
	}

	public function get_cate_product($id)
	{

		$cate_array = [];
		$this->db->select('*');
		$this->db->from('loai_san_pham');
		$this->db->where('ma_loai_cha', $id);
		$cate_array = $this->db->get();
		$cate_array = $cate_array->result_array();

		return $cate_array;
	}

	public function insert_product($ten_san_pham,$ma_loai,$mo_ta_tom_tat,$don_gia,$hinh,$ngay_tao)
	{
		$data = [
		    'ten_san_pham' => $ten_san_pham,
		    'ma_loai' => $ma_loai,
		    'mo_ta_tom_tat' => $mo_ta_tom_tat,
		    'don_gia' => $don_gia,
		    'hinh' => $hinh,
		    'ngay_tao' => $ngay_tao
		];
		$this->db->insert('san_pham', $data);

		return $this->db->insert_id();
	}

}

/* End of file m_product.php */
/* Location: ./application/models/m_product.php */