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
            $this->session->set_userdata(['nama' => $this->user_model->getUserName($username)]);
            redirect('backend/admin/index');
        } else {
            echo 'username / password salah';
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}