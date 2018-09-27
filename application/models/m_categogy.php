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
}
?>
