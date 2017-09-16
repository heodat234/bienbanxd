<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Xay_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
        // Load the Model
		$this->load->model("XayTuong_model");
	}
	public function Insert_Xay()
	{
		$ten    		= $this->input->post('name');
		$diadiem 		= $this->input->post('address');
		$so 			= $this->input->post('so');
		$hang_muc 		= $this->input->post('hang_muc');
		$vitri 			= $this->input->post('vi_tri');
		$ten_caukien 	= $this->input->post('ten_caukien');
		$so_thietke 	= $this->input->post('so_thietke');
		$so_thicong 	= $this->input->post('so_thicong');
		$y_kien 		= $this->input->post('y_kien');
		$ketluan 		= $this->input->post('ketluan');

		$count   		= $this->input->post('count');
		$thoigian = array();
		$danhgia = array();
		for ($i=1; $i < $count+1; $i++) { 
			$thoigian[$i]	= $this->input->post('date'.$i.'');
			$danhgia[$i]		= $this->input->post('danhgia'.$i.'');
		}
		// print_r($danhgia);
		$thoigian = serialize($thoigian); //mã hóa đẻ lưu vào DB
		$danhgia  = serialize($danhgia);

		if (!empty($_FILES['image']['name'])) {
			$config['upload_path'] = './image/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['image']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image')) {
				$uploadData = $this->upload->data();
				$data["image"] = $uploadData['file_name'];
			} else{
				$data["image"] = '';
			}
		}else{
			$data["image"] = '';
		}
    	// var_dump($ten);


		$congtrinh=array(
			"ten" 				=> $ten,
			"diadiem" 			=> $diadiem,
			"so"   				=> $so,
			"hang_muc"     		=> $hang_muc,
			"vitri"				=> $vitri,
			"so_banve_thietke" 	=> $so_thietke,
			"so_banve_thicong" 	=> $so_thicong
		);
		$id_congtrinh = $this->XayTuong_model->Insert_CongTrinh($congtrinh);

		$xaytuong=array(
			"id_congtrinh" 	=> $id_congtrinh,
			"Ykien" 		=> $y_kien,
			"Ketluan"   	=> $ketluan,
			"hinh_sodo"		=> $data["image"],
			"ten_caukien"  	=> $ten_caukien,
			"thoigian"		=> $thoigian,
			"danhgia"		=> $danhgia
		);
		$id_xaytuong = $this->XayTuong_model->Insert_XayTuong($xaytuong);

		


		echo $data["image"];
	}
}