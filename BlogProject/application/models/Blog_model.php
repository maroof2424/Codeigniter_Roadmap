<?php
class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all posts
    public function get_posts() {
        return $this->db->get('posts')->result_array();
    }

    // Get single post by ID
    public function get_post($id) {
        return $this->db->get_where('posts', ['id' => $id])->row_array();
    }

    // Insert new post
    public function insert_post($data) {
        return $this->db->insert('posts', $data);
    }

    // ✅ Update post
    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    // ✅ Delete post
    public function delete_post($id) {
        $this->db->where('id', $id);
        return $this->db->delete('posts');
    }
}
