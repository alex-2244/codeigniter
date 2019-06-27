<?php

class Projects extends CI_Controller {


	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('not_allowed', 'Sorry You are not allowed to access...Please login first ');
			redirect('welcome/login_view');
		}

	}

	public function create() {
		$this->load->view('projects/create');
	}


	public function index() {
		$project['projects'] = $this->project_model->get_projects();
		$this->load->view('projects/index', $project);
	}


	public function create_new() {
		// $user_id = $this->session->userdata('user_id');
		// print_r($user_id);
		// exit();
		$insert = array(
			'project_user_id' => $this->session->userdata('user_id'),
			'project_name' 		=> $this->input->post('project_name'),
			'project_body' 		=> $this->input->post('project_body')
		);
		// print_r($insert);
		// exit();
		$new = $this->project_model->create_new($insert);
		if ($new) {
			$this->session->set_flashdata('new', 'New record created successfully!');
			redirect('projects/index');
		} else {
			redirect('projects/create');
		}
	}


	// public function display_view() {
	// 	$this->load->view('projects/display_view');
	// }



	public function edit_data($edit_id) {
		// $url = $_SERVER['REQUEST_URI'];
		// end(explode("/", $url));
		// $parts = explode("/", $url);
		 // end($parts);
		// $parts = $_GET['project_id'];
		$edit['projects'] = $this->project_model->edit($edit_id);
		// print_r($edit);
		// exit();
		$this->load->view('projects/edit_view', $edit);
	}



	public function update() {
		if ($this->input->post()) {
			$old = array(
				'project_name' => $this->input->post('project_name'),
				'project_body' => $this->input->post('project_body')
			);
			$id = $this->input->post('id');
			// print_r($id);
			// exit();
			$dash = $this->project_model->update_data($id, $old);
			if ($dash) {
				$this->session->set_flashdata('updated', 'Updated your record successfully');
				redirect('projects/index');
			} else {
				redirect('projects/edit_view', $id);
			}
		}
	}



	public function delete($project_id) {
		// $id = $_REQUEST['id'];
		// print_r($project_id);
		// exit();
		$this->session->set_flashdata('deleted', 'Deleted your data successfully');
		$this->project_model->delete_this($project_id);
		redirect('projects/index');

	}


	public function search() {
		// print_r($_POST);
		// exit();
		// $answer = [];
		if ($this->input->post()) {
			$search = $this->project_model->get_search($this->input->post('search'));
			$answer['projects'] = $search;
			// echo "<pre>";
			// print_r($answer);
			// exit();
		}
		$this->load->view('projects/index', $answer);
	}














}

?>
