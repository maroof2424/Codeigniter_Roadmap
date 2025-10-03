<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // ✅ Important
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user($username) {
    return $this->db->get_where('users', ['username' => $username])->row(); 
}

}
