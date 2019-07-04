<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Changepassword_Model extends CI_Model {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/login/admin_login');
		}
	}

	public function getCurrentPassword($adminid) {
		$this->db->where('id', $adminid);
		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}


	public function updatePassword($adminid, $newPassword) {

		$data = array('password' => $newPassword);
		$this->db->where('id', $adminid);
		$query = $this->db->update('admin', $data);
		return $query;
	}




}
?>