<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class export extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        // Load the Library
        $this->load->library("excel");
        // Load the Model
        $this->load->model("user_model");
    }

    public function index() {
        $this->excel->setActiveSheetIndex(0);
        // Gets all the data using MY_Model.php
        $data["users"] = $this->user_model->get_all();

        $this->load->view("excelTable",$data);
    }
    public function action()
     {
        $object = new PHPExcel();


        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load("template/excel/UserData.xls");

        $objPHPExcel->setActiveSheetIndex(0);
        // $table_columns = array("ID","Name","Email");
        // $column = 0;
        // foreach ($table_columns as $field) {
        //     $object->getActiveSheet()->setCellValueByColumnAndRow($column,1,$field);
        //     $column++;
        // }

        $users = $this->user_model->get_all();
        $excel_row =2;
        foreach ($users as $user) {
           $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$user->id);
           $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$user->name);
           $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$user->email);
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
        header('Content-type: application/ms-excel');
        header('Content-Disposition: attachment; filename="User.xls"');
        
        $object_writer->save('php://output');
        
    }

    public function excelXayTuong()
     {
        $this->load->model("XayTuong_model");
        $object = new PHPExcel();


        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel = $objReader->load("template/excel/xay.xlsx");

        $objPHPExcel->setActiveSheetIndex(0);

        $congtrinh = $this->XayTuong_model->get_all();
        $count = $this->XayTuong_model->Count_CongViec(1);
        $thoigian = unserialize($congtrinh->thoigian);
        $danhgia  = unserialize($congtrinh->danhgia);
        // var_dump($congtrinh->vitri);
        // if ($danhgia[5] == 1){
        //     var_dump($danhgia[1]);
        // }else{ echo "sadasda";}
        


        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,3,$congtrinh->ten);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,5,$congtrinh->diadiem);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,3,$congtrinh->so);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,4,$congtrinh->hang_muc);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,5,$congtrinh->vitri);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,21,$congtrinh->so_banve_thietke);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,22,$congtrinh->so_banve_thicong);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,8,$congtrinh->ten_caukien);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,41,$congtrinh->Ykien);
        if ($congtrinh->Ketluan == 1) {
           $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,44,'X');
        }else{
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,44,'X');
        }
        

        $row = 26;
        for ($i=1; $i < $count+1; $i++)
         {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,$row,$thoigian[$i]);
            if ($danhgia[$i] == 1) {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,$row,'X');
            }else{
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,$row,'X');
            }
            $row++;
        }

        //anh
        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName($congtrinh->hinh_sodo);
        $objDrawing->setDescription($congtrinh->hinh_sodo);
        $objDrawing->setPath('./image/'.$congtrinh->hinh_sodo.'');
        $objDrawing->setCoordinates('B8');
        $objDrawing->setHeight(235);
        $objDrawing->setWidth(435);
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

        $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="xay.xlsx"');
        header('Cache-Control: max-age=0');
        $object_writer->save('php://output');
        
    }
}