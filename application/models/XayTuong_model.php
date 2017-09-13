<?php
	class XayTuong_model extends CI_Model {
      public function __construct()
      {
         parent::__construct();
         $this->load->database();
      }
      public function get_all()
      {
      	$this->db->select('*'); 
        $this->db->from('xaytuong');
        $this->db->join('congtrinh', 'congtrinh.id = xaytuong.id_congtrinh');
        $query = $this->db->get();
        $row = $query->last_row();
        return $row;
     }

     public function congviec($id_xaytuong)
     {
       $this->db->where('id_xaytuong',$id_xaytuong);
       $query = $this->db->get('congviec_xaytuong');
       return $query->result();
     }
}
