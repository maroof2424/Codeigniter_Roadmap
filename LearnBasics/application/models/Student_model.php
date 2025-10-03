<?php
class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_students() {
        return $this->db->get('students')->result_array();
    }

    public function insert_student($data) {
        return $this->db->insert('students', $data);
    }

    public function get_student($id) {
        return $this->db->get_where('students', ['id' => $id])->row_array();
    }

    public function update_student($id, $data) {
        return $this->db->where('id', $id)->update('students', $data);
    }

    public function delete_student($id) {
        return $this->db->delete('students', ['id' => $id]);
    }
}
