<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Change_password extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/login/admin_login');
		}
	}

	public function view() {
		$this->load->view('admin/change_password');
	}



	public function index() {
		// $cpassword = $this->input->post('current_password');
		// $newpass = $this->input->post('new_password');
		// $adminid = $this->session->userdata('adminId');
			
		// echo "<pre>";
		// print_r(array($cpassword, $newpass, $adminid)); 
		// exit();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required');
		$this->form_validation->set_rules('new_password', 'New Password', 'required');
		$this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[new_password]');

		if ($this->form_validation->run()) {
			$cpassword = $this->input->post('current_password');
			$newpass = $this->input->post('new_password');
			$adminid = $this->session->userdata('adminId');

			$this->load->model('Admin_Changepassword_Model');
			$cpass = $this->Admin_Changepassword_Model->getCurrentPassword($adminid);
			$dbpass = $cpass->password;
			// echo "<pre>";
			// print_r($dbpass);
			// exit();
			if ($dbpass == $cpassword) {
				$changePassword = $this->Admin_Changepassword_Model->updatePassword($adminid, $newpass);
				if ($changePassword == TRUE) {
					$this->session->set_flashdata('new_pass', 'New password has been updated');
					redirect('admin/change_password');
				}
			}


		} else {
			$this->load->view('admin/change_password');
		}

	}




}
?>