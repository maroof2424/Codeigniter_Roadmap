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
}
