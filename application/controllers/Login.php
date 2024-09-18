<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('templete/header');
        $this->load->view('v_login');
    }

    public function login_aksi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->user_model->login($where);
        if ($cek->num_rows() > 0) {
            $data_session = $cek->row_array();
            $userdata = array(
                'nama' => $data_session['nama']
            );
            $this->session->set_userdata($userdata);
            redirect('backend/admin/index');
        } else {
            echo 'username / password salah';
        }
    }

    
}