<?php  

class User_model extends CI_Model {


public function create_user() {
	$options = ['cost' => 12];
	$encrypt_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

	$reg_data = array(
		'first_name' => $this->input->post('first_name'),
		'last_name'  => $this->input->post('last_name'),
		'email'      => $this->input->post('email'),
		'username'   => $this->input->post('username'),
		'password'   => $encrypt_pass
	);

	$insert_data = $this->db->insert('users', $reg_data);
	return $insert_data;
}

public function login_user($username, $password) {
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where('username', $username);
	// $this->db->where('password', $password);
	$query = $this->db->get();
	$db_pass = $query->row(5)->password;

	if (password_verify($password, $db_pass)) {
		return $query->row(0)->id;
	} else {
		return false;
	}
}





}

?>