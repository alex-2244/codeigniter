<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/Login/admin_login');
		}
	}



	public function index() {
    $this->load->model('Admin_Dashboard_model');
    $data['totalcount'] = $this->Admin_Dashboard_model->totalCount()->id_count;
    $data['beforeSevenDay'] = $this->Admin_Dashboard_model->countlastsevendays()->id_count;
    $data['beforeThirtyDays'] = $this->Admin_Dashboard_model->countthirtydays()->id_count;
    $this->load->view('admin/dashboard', $data);

	}









}
?>