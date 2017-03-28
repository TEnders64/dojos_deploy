<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dojo extends CI_Model {

    public function get_dojos()
    {
        return $this->db->query('SELECT * FROM dojos')->result_array();
    }

    public function get_dojo($id)
    {
        return $this->db->query('SELECT * FROM dojos WHERE id = ?', array($id))->row_array();
    }

    public function create_dojo($post)
    {
        $this->db->query('INSERT INTO dojos (name, city, state, created_at) VALUES (?, ?, ?, NOW())', array($post['name'], $post['city'], $post['state']));
        return true;
    }

    public function get_students($id)
    {
        return $this->db->query('SELECT * FROM students WHERE dojo_id = ?', array($id))->result_array();
    }

}
