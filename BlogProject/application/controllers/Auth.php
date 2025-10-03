<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url','form']);
        $this->load->library(['form_validation','session']);
        $this->load->model('User_model');
    }

    // ----------------------------
    // REGISTER
    // ----------------------------
    public function register() {
        // Validation rules
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password_confirm','Confirm Password','required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];

            $this->User_model->insert_user($data);
            $this->session->set_flashdata('success','Registration successful! You can login now.');
            redirect('auth/login');
        }
    }

    // ----------------------------
    // LOGIN
    // ----------------------------
    public function login() {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user($email);

            if($user && password_verify($password, $user['password'])) {
                // Set session
                $this->session->set_userdata([
                    'logged_in' => TRUE,
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email']
                ]);
                redirect('dashboard'); // dashboard controller
            } else {
                $this->session->set_flashdata('error','Invalid Credentials ❌');
                redirect('auth/login');
            }
        }
    }

    // ----------------------------
    // LOGOUT
    // ----------------------------
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
