<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Users extends CI_Controller {
	

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('adminId'))
		redirect('admin/login/admin_login');
	}



	public function index() {
		// echo "welcome";
		$this->load->model('Manage_Users_Model');
		$allUsers = $this->Manage_Users_Model->getAllUserDetails();
		// echo "<pre>";
		// print_r($allUsers);
		// exit();
		$this->load->view('admin/manage_users', ['userDetails' => $allUsers]);
	}







}