<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index () {
        $this->load->view('hello_view');
    }
    public function greet($name = "Guest") {
        $data["person"] = $name;
        $data["title"] = "Greeting page for {$name}";

        $this->load->view('greet_view', $data);

    }
    public function sum($a, $b) {
    echo $a + $b;
    }
}