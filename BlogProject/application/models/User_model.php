<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user($email) {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }
}
