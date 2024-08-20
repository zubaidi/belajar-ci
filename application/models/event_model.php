<?php 
defined('BASEPATH') or exit('No dirrect script access allow');

class event_model extends CI_Model {
    
    public function getDataEvent() {
        return $this->db->get('tb_inslomba')->result();
    }

    public function getDataEventById($id) {
        return $this->db->get_where('tb_inslomba', ['id'=>$id])->row();
    }

    public function insertEvent($data) {
        $this->db->insert('tb_inslomba', $data);
    }

    public function deleteEvent($id) {
        $this->db->where($id);
        $this->db->delete('tb_inslomba');
    }

    public function updateEvent($data, $id) {
        return $this->db->where('id', $id)->update('tb_inslomba', $data);
    }

    public function tampilNamaEvent() {
        return $this->db->query('SELECT id, nama FROM tb_inslomba')->result(); 
    }
    public function tampilIDEvent($data) {
        return $this->db->get_where('tb_inslomba', ['id'=>$data])->row(); 
    }

}