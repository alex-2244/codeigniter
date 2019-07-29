<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Dashboard_model extends CI_Model {


	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/Login/admin_login');
		}
	}



	public function totalCount(){
	
		$this->db->select('count(*) as id_count');
		$this->db->from('users');
		$res = $this->db->get();
		// print_r($res->row());
		// exit;
		 return $res->row();
	}

	public function countlastsevendays() {
		$this->db->select('count(*) as id_count');
		$this->db->from('users');
		$this->db->where('regdate >= DATE(NOW()) - INTERVAL 10 DAY');
		$res1 = $this->db->get();
		// print_r($res1->row());
		// exit;
		return $res1->row();
	}


	public function countthirtydays() {
		$this->db->select('count(*) as id_count');
		$this->db->from('users');
		$this->db->where('regdate >= DATE(NOW()) - INTERVAL 30 DAY');
		$res2 = $this->db->get();
		// print_r($res2->row());
		// exit;
		return $res2->row();
	}




























}
?>