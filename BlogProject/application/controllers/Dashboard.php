<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index() {
        if(!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // if not logged in, send to login page
        }

        echo "Welcome, " . $this->session->userdata('username');
        echo "<br><a href='".base_url('auth/logout')."'>Logout</a>";
    }
}
