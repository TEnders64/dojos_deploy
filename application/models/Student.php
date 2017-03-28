<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {

    public function add_student_to_dojo($id, $post)
    {
        $query = 'INSERT INTO students (name, created_at, dojo_id) VALUES (?, NOW(), ?)';
        $values = array($post['student_name'], $id);

        $this->db->query($query, $values);
        return true;
    }

}
