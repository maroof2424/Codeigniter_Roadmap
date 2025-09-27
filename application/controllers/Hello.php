<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index () {
        echo "Hello CodeIgniter!";
    }
    public function greet($name = "Guest") {
        echo "Wellcome " . $name;
    }
    public function sum($a, $b) {
    echo $a + $b;
    }
}