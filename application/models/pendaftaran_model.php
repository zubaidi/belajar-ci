<?php 
defined('BASEPATH') or exit('No dirrect script access allow');

class pendaftaran_model extends CI_Model {
    
    public function getPeserta() {
        return $this->db->query('SELECT e.nama, p.id, p.nama_pendaftar, p.kelas, p.no_hp, p.tgl_daftar FROM tb_inslomba e, tb_pendaftaran p WHERE e.id = p.id_lomba')->result();
    }

    public function insertPeserta($data) {
        $this->db->insert('tb_pendaftaran', $data);
    }

}