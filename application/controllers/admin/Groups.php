<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groups extends Admin_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->data['model'] = $this->db->query("select * from groups order by id asc")->result();
        $this->render('admin/groups/list');
    }
}