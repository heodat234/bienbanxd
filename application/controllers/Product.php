<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }
	public function index()
	{
		$this->session->set_userdata("hung","chính là tôi");
		$name= $this->session->userdata("hung");
		$data = array('name' => $name );
		$this->load->view('product',$data);

	}
}
