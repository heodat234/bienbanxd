<?php
	class User_model extends CI_Model {
      public function __construct()
      {
         parent::__construct();
         $this->load->database();
      }
      public function get_all()
      {
      	$this->db->select('*'); 
      	$query=$this->db->get("user"); 
        return $query->result();
     }
     
}
