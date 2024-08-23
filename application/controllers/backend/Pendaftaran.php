<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('pendaftaran_model');
        $this->load->model('event_model');
    }

    public function index() {
        $data['peserta'] = $this->pendaftaran_model->getPeserta();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_pendaftaran', $data);
    }

    public function tambah_peserta() {
        $data['nama_event'] = $this->event_model->tampilNamaEvent();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_tambah_pendaftar', $data);
    }

    public function tambah_peserta_aksi() {
        $data = array (
            'id' => $this->input->post('idpeserta'),
            'id_lomba' => $this->input->post('idlomba'),
            'nama_pendaftar' => $this->input->post('namapeserta'),
            'kelas' => $this->input->post('kelas'),
            'no_hp' => $this->input->post('notelp'),
            'tgl_daftar' => $this->input->post('tgldaftar')
        );
        $this->pendaftaran_model->insertPeserta($data);
        redirect('backend/pendaftaran/index');
    }

    public function hapus_peserta($id) {
        $where = array('id' => $id);
        $this->pendaftaran_model->deletePeserta($where);
        redirect('backend/pendaftaran/index');
    }

    public function edit_peserta($id) {
        $data['peserta_data'] = $this->pendaftaran_model->getDataPesertaById($id);
        $data['nama_event'] = $this->event_model->tampilNamaEvent();
        if(!$data['peserta_data']) show_404();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
        $this->load->view('v_backend/v_edit_pendaftar',$data);
    }

    public function edit_peserta_aksi($id) {
        $data = array (
            'id_lomba' => $this->input->post('idlomba'),
            'nama_pendaftar' => $this->input->post('namapeserta'),
            'kelas' => $this->input->post('kelas'),
            'no_hp' => $this->input->post('notelp'),
            'tgl_daftar' => $this->input->post('tgldaftar')
        );  
        $this->pendaftaran_model->updatePeserta($data, $id);
        $this->session->set_flashdata('pesan','Data Berhasil diupdate');
        redirect('backend/pendaftaran/index');
    }


}