<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registeronline extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // โหลดไลบรารีหรือ helper ที่ต้องการใช้งาน
    }

    public function index() {
        // โหลด View ชื่อ "seminar" และส่งไปยังโปรแกรม
        $this->load->view('/Events/registeronline');
        $this->load->view('/Events/footer');
    }

}
