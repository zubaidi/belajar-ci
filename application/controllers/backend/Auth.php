<?php

class Auth extends CI_Controller {
    
    private function rules() {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required | max_length[32]',
            ]
        ];
    }
    public function index() {
        show_404();
    }

    public function login() {
        $this->load->model('user_model');
        $rules = $this->user_model->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {return $this->load->view('v_login');}
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->user_model->login($username, $password)) {
            redirect('backend/admin');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

        $this->load->view('v_login');
    }
}