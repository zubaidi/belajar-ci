<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    const SESSION_KEY = 'user_id';

    public function getDataUser() {
        return $this->db->get('tb_user')->result();
    }

    public function insertUser($data) {
        $this->db->insert('tb_user', $data);
    }

    public function deleteUser($id) {
        $this->db->where($id);
        $this->db->delete('tb_user');
    }

    public function login($where) {
        return $this->db->get_where('tb_user', $where);
    }

    public function getUserName($username) {
        $this->db->select('nama');
        $this->db->where('username', $username);
        $this->db->from('tb_user');
        $query = $this->db->get();
        return $query->result();
    }

    /* membuat model untuk login user
    public function login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_user')->row();
        if (!$query) return false;
        if (!password_verify($password, $query->password)) return false;
        $this->session->set_userdata([self::SESSION_KEY => $query->id]);
    }

    /*
    public function current_user() {
        if ($this->session->has_userdata(self::SESSION_KEY)) return null;
        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where('tb_user', ['id' => $user_id]);
        return $query->row();
    }

    public function logout() {
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    } */

}