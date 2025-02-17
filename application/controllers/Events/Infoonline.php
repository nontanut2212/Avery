<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoonline extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // โหลดไลบรารีหรือ helper ที่ต้องการใช้งาน
    }

    public function index() {
        
        $this->load->view('/Events/infoonline');
        $this->load->view('/Events/footer');
    }

}
