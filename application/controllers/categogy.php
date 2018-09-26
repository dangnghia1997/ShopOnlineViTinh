<?php
class Categogy extends CI_Controller
{
    public function list_categogy($id = 0)
    {
		$this->load->model('m_categogy');
		//echo "day la ds loai san pham";
		if($id > 0)
		{
			$list = $this->m_categogy->read_cate_by_parentID($id);

		}
		else
		{
			
			$list = $this->m_categogy->read_all_cate();
			
		}
		$data['list_categogy']=$list;
		$data['view'] = 'admin/categogy/v_list_categogy';
		$this->load->view('layouts/admin/layout',$data);
        
    }
}
?>
