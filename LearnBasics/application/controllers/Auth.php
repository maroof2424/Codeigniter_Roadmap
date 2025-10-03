<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function register()
    {
        if ($this->input->post()) {
            $this->load->model('User_model');

            $data = [
                'username' => $this->input->post('username'),
                // password ko hash karna (never plain text)
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];

            $this->User_model->insert_user($data);

            echo "User registered successfully!";
        } else {
            $this->load->view('register_form');
        }
    }
    public function login()
{
    if ($this->input->post()) {
        $this->load->model('User_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            echo "Login Successful! ✅";
        } else {
            echo "Invalid Credentials ❌";
        }
    } else {
        $this->load->view('login_form');
    }
}

}
