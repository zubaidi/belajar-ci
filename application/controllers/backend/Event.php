<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('event_model');
    }

    public function index() {
        $data['event_data'] = $this->event_model->getDataEvent();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_event', $data);
    }

    public function tambah_event() {
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_tambah_event');
    }

    public function tambah_event_aksi() {
        $data = array (
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('namaevent'),
            'penyelenggara' => $this->input->post('penyelenggara')
        );
        $this->session->set_flashdata('pesan','Data Berhasil Disimpan');
        $this->event_model->insertEvent($data);
        redirect('backend/event/index');
    }

    public function hapus_event($id) {
        $where = array('id' => $id);
        $this->event_model->deleteEvent($where);
        $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        redirect('backend/event/index');
    }

    public function edit_event($id) {
        $data['event_data'] = $this->event_model->getDataEventById($id);
        if(!$data['event_data']) show_404();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_edit_event',$data);
    }

    public function edit_event_aksi($id) {
        $data = array (
            'nama' => $this->input->post('namaevent'),
            'penyelenggara' => $this->input->post('penyelenggara')
        );  
        $this->event_model->updateEvent($data, $id);
        $this->session->set_flashdata('pesan','Data Berhasil diupdate');
        redirect('backend/event/index');
    }
}