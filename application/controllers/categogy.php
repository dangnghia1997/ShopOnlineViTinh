<?php
class Categogy extends CI_Controller
{
    public function list_categogy($id=-1)
    {
		$this->load->model('m_categogy');
		//echo "day la ds loai san pham";
		$main_cate=$this->m_categogy->read_cate_by_parentID(0);
		$list = $this->m_categogy->read_all_cate();
		
		$data['list_cate'] = $list;
		$data['main_categogy']=$main_cate;
		$data['view'] = 'admin/categogy/v_list_categogy';
		$this->load->view('layouts/admin/layout',$data);
        
	}
	
	public function ajax_get_categogy_by_parenID(){
		$this->load->model('m_categogy');
		$parenID = $_POST['parenID'];
		if($parenID >0)
		{
			$list_cate_child=$this->m_categogy->read_cate_by_parentID($parenID);
		}
		else
		{
			$list_cate_child = $this->m_categogy->read_all_cate();
		}
		

		foreach($list_cate_child as $l)
		{
		echo '<tr role="row" class="even">
                  <td class="sorting_1">'.$l->ten_loai.'</td>
                  <td>'.$l->mo_ta.'</td>
                  <td>'.$l->ma_loai_cha.'</td>
				</tr>';
		}		
	}
}
?>
