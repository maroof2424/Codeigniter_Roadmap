<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();   // extra safety
    }

    public function get_students() {
        $query = $this->db->get('students');
        return $query->result_array();
    }
}
