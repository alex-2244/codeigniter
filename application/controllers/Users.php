<?php  


/**
 * 
 */
class Users extends CI_Controller {
	

	public function login_submit() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if ($this->form_validation->run() === FALSE) {
			// $error = array(
			// 	'error' => validation_errors()
			// );
			$this->session->set_flashdata('log_required', 'Please fill all the fields');
			redirect('welcome/login_view');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->user_model->login_user($username, $password);
			// print_r($user);
			// exit();
			
			if ($user) {

				$user_data = array(
					'user_id'   => $user,
					'username'  => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('success', 'Logged in successfully');
				redirect('welcome/home');		
			} else {
				$this->session->set_flashdata('log_error', 'Please log in with correct username and password!');
				redirect('welcome/login_view');
			}

		}

	}


	public function logout() {
		$this->session->sess_destroy();
		// $this->session->set_flashdata('logout', 'You are logged out successfully!');
		redirect('welcome/login_view', 'refresh');
	}


	public function register_submit() {

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('reg_required', 'Please fill out all the fields');
			redirect('welcome/register_view');
		} else {

				$reg_data = $this->user_model->create_user();
				if ($reg_data) {
					$this->session->set_flashdata('success', 'Registered successfully!');
					redirect('welcome/login_view');
				} else {
					$this->session->set_flashdata('error', 'Sorry! something went wrong...');
					redirect('welcome/register_view');
				}
		}
	}
















}



?>