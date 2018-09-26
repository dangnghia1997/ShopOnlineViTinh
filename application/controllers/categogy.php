<?php
class Categogy extends CI_Controller
{
    public function list_categogy($id=-1)
    {
		$this->load->model('m_categogy');
		//echo "day la ds loai san pham";
		$main_cate=$this->m_categogy->read_cate_by_parentID(0);
		if($id != -1)
		{
			$list = $this->m_categogy->read_cate_by_parentID($id);

		}
		else
		{
			
			$list = $this->m_categogy->read_all_cate();
			
		}
		$data['main_categogy']=$main_cate;

		$data['list_categogy']=$list;
		$data['view'] = 'admin/categogy/v_list_categogy';
		$this->load->view('layouts/admin/layout',$data);
        
	}
	
	public function ajax_get_categogy_by_parenID($parenid){
		echo ahihi;
	}
}
?>
