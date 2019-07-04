<?php

class Admin_Login_Model extends CI_Model {

	
	public function validateLogin($username, $password) {
		$this->db->where(['username' => $username, 'password' => $password]);
		$adminId = $this->db->get('admin')->row();
		if ($adminId != NULL) {
			return $adminId->id;
		}
		return NULL;

	}





}//MAIN MODEL ENDS
?>