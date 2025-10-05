<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // ---------------------------
    // CREATE a new post
    // ---------------------------
    public function create_post($data) {
        return $this->db->insert('posts', $data);
    }

    // ---------------------------
    // READ - Get all posts
    // ---------------------------
    public function get_all_posts() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('posts')->result_array();
    }

    // ---------------------------
    // READ - Get single post by ID
    // ---------------------------
    public function get_post($id) {
        return $this->db->get_where('posts', ['id' => $id])->row_array();
    }

    // ---------------------------
    // READ - Get single post by slug
    // ---------------------------
    public function get_post_by_slug($slug) {
        return $this->db->get_where('posts', ['slug' => $slug])->row_array();
    }

    // ---------------------------
    // UPDATE - Edit post
    // ---------------------------
    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    // ---------------------------
    // DELETE - Remove post
    // ---------------------------
    public function delete_post($id) {
        return $this->db->delete('posts', ['id' => $id]);
    }
}
