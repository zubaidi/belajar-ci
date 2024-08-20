<?php 
defined('BASEPATH') or exit('No dirrect script access allow');

class pendaftaran_model extends CI_Model {
    
    public function getPeserta() {
        return $this->db->query('SELECT e.nama, p.id, p.nama_pendaftar, p.kelas, p.no_hp, p.tgl_daftar FROM tb_inslomba e, tb_pendaftaran p WHERE e.id = p.id_lomba')->result();
    }
    public function getDataPesertaById($id) {
        $this->db->select('e.nama, p.id, p.nama_pendaftar, p.kelas, p.no_hp, p.tgl_daftar');
        $this->db->from('tb_pendaftaran p');
        $this->db->join('tb_inslomba e', 'e.id = p.id_lomba');
        $this->db->where('p.id', $id);
        return $this->db->get()->row();
    }

    public function insertPeserta($data) {
        $this->db->insert('tb_pendaftaran', $data);
    }

    public function deletePeserta($id) {
        $this->db->where($id);
        $this->db->delete('tb_pendaftaran');
    }

    public function updatePeserta($data, $id) {
        return $this->db->where('id', $id)->update('tb_pendaftaran', $data);
    }

}