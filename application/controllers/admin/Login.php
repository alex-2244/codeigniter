<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {



	public function index() {
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('adlog_error', 'Please out the all the fields');
			redirect('admin/login/admin_login');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Admin_Login_Model');

			$validate = $this->Admin_Login_Model->validateLogin($username, $password);
			// print_r($validate);
			// exit();
			if ($validate) {



				$this->session->set_userdata('adminId', $validate);
				$this->load->view('admin/dashboard');
			} else {
				// $this->session->set_flashdata('ad_log', 'Something went wrong!');
				redirect('admin/login/admin_login');
			}
			
		}

	}



	public function admin_login() {
		$this->load->view('admin/admin_login');
	}

	public function dashboard() {
		$this->load->view('admin/dashboard');
	}



	public function logout() {
		$this->session->unset_userdata('adminId');
		$this->session->sess_destroy();
		redirect('admin/login/admin_login');
	}



	





}

?>
