<?php
class M_categogy extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function read_all_cate()
    {
        $sql = "SELECT * FROM loai_san_pham";
        $query=$this->db->query($sql);
        if ($query)
        {
            return $query->result();
        }
        
            
    }
}
?>