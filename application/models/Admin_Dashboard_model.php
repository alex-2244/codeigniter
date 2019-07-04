<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Dashboard_model extends CI_Model {


	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/login/admin_login');
		}
	}



	public function totalcount(){
		$query=$this->db->select('id')   
		                 ->get('users');
		return  $query->num_rows();
	}




























}
?>