<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Users_Model extends CI_Model {
	

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('adminId'))
		redirect('admin/login/admin_login');
	}


	public function getAllUserDetails() {
		$this->db->select('id, first_name, last_name, username, email, regdate');
		$users = $this->db->get('users');
		return $users->result();
		// echo "<pre>";
		// print_r($users->result());
		// exit();
	}









}