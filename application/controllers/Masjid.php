<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid extends CI_Controller {
    public function index(){
        $data['judul'] = "masjid";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/masjid');
        $this->load->view('templates/footer');
    }
}