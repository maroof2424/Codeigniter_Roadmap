<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

    // -------------------------------------
    // 📰 INDEX - Show all posts
    // -------------------------------------
    public function index() {
        $data['posts'] = $this->Blog_model->get_all_posts();

        $this->load->view('templates/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    // -------------------------------------
    // ✍️ CREATE - Add new post
    // -------------------------------------
    public function create() {
        // Restrict access if not logged in
        if(!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // If form submitted
        if($this->input->method() === 'post') {
            $title = $this->input->post('title');
            $slug = url_title($title, 'dash', TRUE);
            $data = [
                'title' => $title,
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'author_id' => $this->session->userdata('user_id'),
                'status' => 'published'
            ];

            if ($this->Blog_model->create_post($data)) {
                $this->session->set_flashdata('success', 'Post created successfully ✅');
                redirect('blog');
            } else {
                $this->session->set_flashdata('error', 'Failed to create post ❌');
            }
        }

        // Show form
        $this->load->view('templates/header');
        $this->load->view('blog/create');
        $this->load->view('templates/footer');
    }
}
