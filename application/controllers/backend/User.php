<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $data['user_data'] = $this->user_model->getDataUser();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_user', $data);
    }

    public function tambah_user() {
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_tambah_user');
    }

    public function tambah_user_aksi() {
        $data = array (
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('namauser'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('pass'))
        );
        $this->user_model->insertUser($data);
        redirect('backend/user/index');
    }

    public function hapus_user($id) {
        $where = array('id' => $id);
        $this->user_model->deleteUser($where);
        redirect('backend/user/index');
    }
}