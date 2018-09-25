<?php
class Categogy extends CI_Controller
{
    public function list_categogy()
    {
        //echo "day la ds loai san pham";
        $this->load->model('m_categogy');
        $list = $this->m_categogy->read_all_cate();
        echo "<pre>";
       // echo count($list);
        print_r($list);
        echo "</pre";
    }
}
?>