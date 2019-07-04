<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('adminId')) {
			redirect('admin/login/admin_login');
		}
	}



	public function index(){
    $this->load->model('Admin_Dashboard_model');
    $totalcount=$this->Admin_Dashboard_model->totalcount();
    $sevendayscount=$this->Admin_Dashboard_model->countlastsevendays();
    $thirtydayscount=$this->Admin_Dashboard_model->countthirtydays();
    $this->load->view('admin/dashboard',['tcount'=>$totalcount,'tsevencount'=>$sevendayscount,'tthirycount'=>$thirtydayscount]);	

}

}





}
?>