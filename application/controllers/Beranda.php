<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function index() {
        $this->load->view('v_beranda');
    }

    public function about() {
        $this->load->view('v_about');
    }

    public function buku_tamu() {
        $this->load->view('v_buku_tamu');
    }
}