<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        // Load the Model
        
    }
    public function XayTuong()
    {
    	$this->load->model("XayTuong_model");
    	$data['congviec'] = $this->XayTuong_model->CongViec(1);
    	$this->load->view('xaytuong',$data);
    }
    // public function Trat()
    // {
    // 	$this->load->model("Trat_model");
    // 	$data['congviec'] = $this->Trat_model->CongViec(2);
    // 	$this->load->view('trat',$data);
    // }
}