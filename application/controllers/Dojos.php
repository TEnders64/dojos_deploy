<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dojos extends CI_Controller {

	public function index()
	{
		$all_dojos = $this->dojo->get_dojos();
		$this->load->view('index', array('dojos' => $all_dojos));
	}

	public function show($id)
	{
		$dojo = $this->dojo->get_dojo($id);
		$students = $this->dojo->get_students($id);
		$this->load->view('show', array(
			'dojo' => $dojo,
			'students' => $students
		));
	}

	public function create()
	{
		$result = $this->dojo->create_dojo($this->input->post());
		if ($result)
		{
			redirect('/');

		}
	}

	public function add_student($id)
	{
		$result = $this->student->add_student_to_dojo($id, $this->input->post());
		if ($result)
		{
			redirect("/dojos/show/{$id}");
		}
	}

}
