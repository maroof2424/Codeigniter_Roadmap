<?php
class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

    public function index() {
        $data['posts'] = $this->Blog_model->get_posts();
        $this->load->view('templates/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        if ($this->input->post()) {
            $slug = url_title($this->input->post('title'), 'dash', TRUE);
            $data = [
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'author_id' => 1,
                'status' => 'published'
            ];
            $this->Blog_model->insert_post($data);
            $this->session->set_flashdata('msg', 'Post created successfully!');
            redirect('blog');
        }
        $this->load->view('templates/header');
        $this->load->view('blog/create');
        $this->load->view('templates/footer');
    }

    // ✅ Edit Post
    public function edit($id) {
        $data['post'] = $this->Blog_model->get_post($id);

        if (empty($data['post'])) {
            show_404();
        }

        if ($this->input->post()) {
            $updateData = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'status' => $this->input->post('status')
            ];
            $this->Blog_model->update_post($id, $updateData);
            $this->session->set_flashdata('msg', 'Post updated successfully!');
            redirect('blog');
        }

        $this->load->view('templates/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('templates/footer');
    }

    // ✅ Delete Post
    public function delete($id) {
        $this->Blog_model->delete_post($id);
        $this->session->set_flashdata('msg', 'Post deleted successfully!');
        redirect('blog');
    }
}
