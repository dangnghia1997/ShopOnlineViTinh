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

	public function show_data($page)
	{
		//$this->db->get('Table', limit, offset);
		$this->db->select('*,sp.hinh');
		$this->db->from('san_pham as sp');
		$this->db->join('loai_san_pham as lsp', 'sp.ma_loai = lsp.ma_loai', 'left');
		$this->db->limit(10,($page-1)*10);
		$this->db->order_by('ma_san_pham', 'desc');
		$data = $this->db->get();
		$data = $data->result_array();
		return $data;
	}

	public function get_page($page)
	{
		return $page;
	}

	public function get_cate_product()
	{

		$cate_array = [];
		$this->db->select('*');
		$this->db->from('loai_san_pham');
		$this->db->where('ma_loai_cha', 0);
		$cate_array = $this->db->get();
		$cate_array = $cate_array->result_array();

		foreach ($cate_array as $key=>$value) {
			$this->db->select('*');
			$this->db->from('loai_san_pham');
			$this->db->where('ma_loai_cha', $cate_array[$key]['ma_loai']);
			$cate_array[$key]['child'] =  $this->db->get();
			$cate_array[$key]['child'] = $cate_array[$key]['child']->result_array();
		}

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