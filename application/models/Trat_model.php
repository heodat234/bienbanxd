<?php
class Trat_model extends CI_Model {
  public function __construct()
  {
   parent::__construct();
   $this->load->database();
 }
 public function get_all()
 {
   $this->db->select('*'); 
   $this->db->from('trat');
   $this->db->join('congtrinh', 'congtrinh.id = trat.id_congtrinh');
   $query = $this->db->get();
   $row = $query->last_row();
   return $row;
 }

 public function congviec($id_bienban)
 {
   $this->db->where('id_bienban',$id_bienban);
   $query = $this->db->get('congviec');
   return $query->result();
 }

 public function Insert_CongTrinh($congtrinh)
 {
  $this->db->insert("congtrinh",$congtrinh);
   return $this->db->insert_id();
 }
 public function Insert_Trat($trat)
 {
   $this->db->insert("trat",$trat);
   return $this->db->insert_id();
 }
 public function Count_CongViec($id_bienban)
 {
    $this->db->where('id_bienban',$id_bienban);
    $query=$this->db->get("congviec");
    return $query->num_rows();
 }
 
}
