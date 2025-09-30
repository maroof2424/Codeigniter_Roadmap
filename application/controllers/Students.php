<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index() {
        $data['students'] = $this->Student_model->get_students();
        $this->load->view('students_list', $data);
    }

    public function add() {
        // Form view load
        $this->load->view('student_form');
    }

    public function save() {
        $data = array(
            'name'   => $this->input->post('name'),
            'age'    => $this->input->post('age'),
            'course' => $this->input->post('course'),
            'bio'    => $this->input->post('bio')
        );

        $this->Student_model->insert_student($data);
        redirect('students');
    }
}
