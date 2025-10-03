<?php
class Students extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper(['url', 'form']);
    }

    public function index() {
        $data['students'] = $this->Student_model->get_students();
        $this->load->view('students_list', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = [
                'name'   => $this->input->post('name'),
                'age'    => $this->input->post('age'),
                'course' => $this->input->post('course'),
                'bio'    => $this->input->post('bio')
            ];
            $this->Student_model->insert_student($data);
            redirect('students');
        } else {
            $this->load->view('student_form');
        }
    }

    public function edit($id) {
        $student = $this->Student_model->get_student($id);
        if ($this->input->post()) {
            $data = [
                'name'   => $this->input->post('name'),
                'age'    => $this->input->post('age'),
                'course' => $this->input->post('course'),
                'bio'    => $this->input->post('bio')
            ];
            $this->Student_model->update_student($id, $data);
            redirect('students');
        } else {
            $this->load->view('student_form', ['student' => $student]);
        }
    }

    public function delete($id) {
        $this->Student_model->delete_student($id);
        redirect('students');
    }
}
