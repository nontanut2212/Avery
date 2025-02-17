<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // โหลดไลบรารีหรือ helper ที่ต้องการใช้งาน
    }

    public function index() {
        // โหลด View ชื่อ "seminar" และส่งไปยังโปรแกรม
        $this->load->view('/Events/contact');
        $this->load->view('/Events/footer');
    }

}
