<?php
class M_categogy extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function read_all_cate($limit = -1, $vt =-1)
    {
        $sql = "SELECT * FROM loai_san_pham";
        if($limit > 0 && $vt > -1)
        {
            $sql.=" LIMIT $vt,$limit";
        }
        $query=$this->db->query($sql);
        if ($query)
        {
            return $query->result();
        }
        
            
	}
	
	public function read_cate_by_parentID($id,$limit = -1,$vt = -1)
	{
        $sql = "SELECT * FROM loai_san_pham WHERE ma_loai_cha = ?";
        if($limit > 0 && $vt >-1)
        {
            $sql.=" LIMIT $vt,$limit";
        }
		$parrams=array($id);
		$query = $this->db->query($sql,$parrams);
		if ($query)
		{
			return $query->result();
		}
    }
    
    public function ajax_read_all_cate($limit,$start)
    {
        $output='';
        $sql = "SELECT * FROM loai_san_pham";
        $sql.=" LIMIT $start,$limit";
        $query=$this->db->query($sql);
        $result=$query->result();
        

        foreach($result as $l)
        {
            $output.='<tr role="row" class="even">';
            $output.='<td class="sorting_1">'.$l->ten_loai.'</td>';
            $output.='<td>'.$l->mo_ta.'</td>';
            $output.='<td>'.$l->ma_loai_cha.'</td>';
            $output.='</tr>';
        }

        return $output;
	}
	
	public function ajax_read_cate_by_parentID($id,$limit,$start)
	{
		$output ='';
		$sql = "SELECT * FROM loai_san_pham WHERE ma_loai_cha = ?";
		$sql.=" LIMIT $start,$limit";
		$parrams=array($id);
		$query = $this->db->query($sql,$parrams);
		$result = $query->result();

		foreach($result as $l)
        {
            $output.='<tr role="row" class="even">';
            $output.='<td class="sorting_1">'.$l->ten_loai.'</td>';
            $output.='<td>'.$l->mo_ta.'</td>';
            $output.='<td>'.$l->ma_loai_cha.'</td>';
            $output.='</tr>';
        }

		return $output;
		
	}
}
?>
