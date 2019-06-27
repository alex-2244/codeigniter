<?php

class Project_model extends CI_Model {



	public function create_new($value) {
		$create = $this->db->insert('projects', $value);
		return $create;
	}


	public function get_projects() {
		$query = $this->db->get('projects');
		return $query->result();
	}


	public function edit($edit_id) {
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->where('id', $edit_id);
		// $res = $this->db->get();
		// print_r($id);exit();
		$res = $this->db->get();
		// echo "<pre>"; print_r($res->row());exit();
		 
		 return $res->row();

		// if ($res) {
		// 	return $res->result();
		// }
	}


	public function update_data($id, $old_data) {
		$this->db->where('id', $id);
		$result = $this->db->update('projects', $old_data);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}


	public function delete_this($delete_id) {

		$del = $this->db->delete('projects', ['id' => $delete_id]);
		return $del;
	}


	public function get_search($search) {
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->like('project_name', $search);
		$this->db->or_like('project_body', $search);

		$query = $this->db->get();
		// echo '<pre>';print_r($query->result());
		// exit();
		$result = $query->result();
		// print_r($result);
		// exit();
		return $result;
	}











}//MAIN MODEL ENDS


?>