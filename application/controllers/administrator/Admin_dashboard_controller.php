<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Admin_dashboard_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_administrator_logged_in();
    }

    public function index() {
        $data['title'] = '4priMuly44 Store';
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/dashboard');
        $this->load->view('administrator/templates/footer');
    }
}
