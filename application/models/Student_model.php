<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();  // database load
    }

    public function get_students() {
        return $this->db->get('students')->result_array();
    }

    public function insert_student($data) {
        return $this->db->insert('students', $data);
    }
}
