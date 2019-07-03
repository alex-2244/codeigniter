<?php

class Project_model extends CI_Model {

	// protected $table = 'projects';


	public function create_new($value) {
		$create = $this->db->insert('projects', $value);
		return $create;
	}


	public function get_count() {
		return $this->db->count_all('projects');
	}


	public function get_projects($limit, $start) {
		// $this->db->select('*');
		// $this->db->from('projects');
		// $this->db->join('tasks', 'tasks.project_id = projects.id');
		$this->db->limit($limit, $start);
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

		 // $this->db->select('projects.*');
   //  $this->db->from('projects','tasks');   
   //  $this->db->where('projects.id', $delete_id); 
   //  $this->db->where('tasks.project_id', $tasks_project_id);
   //  $this->db->join('tasks','projects.id = tasks.project_id');
   //  $this->db->delete('projects');

		// $this->db->from('projects');
		// $this->db->join('tasks', 'projects.id = tasks.project_id');
		// $this->db->where('tasks.project_id', $delete_id);
		// $this->db->delete('projects');


		// $tables = array('projects', 'tasks');
		// $this->db->where('id', $delete_id);
		$this->db->where('id', $delete_id);
		$del = $this->db->delete('projects');
		// print_r($del);
		// exit();
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





		// private $blogs = 'blogs';   // blog table
  //   private $blog_comments = 'blog_comments';   // blog comment table

  //   function join() {
  //     // Produces:
  //     // SELECT * FROM blogs JOIN blog_comments ON blog_comments.blog_id = blogs.blog_id
      // $this->db->select('*');
      // $this->db->from($this->blogs);
      // $this->db->join($this->blog_comments, $this->blog_comments . 'blog_id = ' . $this->blogs . 'blog_id');
  //     //or
  //     //$this->db->join($this->blog_comments, $this->blog_comments . 'blog_id = ' . $this->blogs . 'blog_id', 'inner');
  //     //$query = $this->db->get();
      
  //     // Produces:
  //     // SELECT blogs.blog_id,comment_id,blog_title,blog_content,blog_date,comment_text,comment_date
  //     //    FROM blogs JOIN blog_comments ON blog_comments.blog_id = blogs.blog_id
  //     $this->db->select($this->blogs . '.blog_id,comment_id,blog_title,blog_content,blog_date,comment_text,comment_date');
  //     $this->db->from($this->blogs);
  //     $this->db->join($this->blog_comments, $this->blog_comments . '.blog_id = ' . $this->blogs . '.blog_id');
  //     //or
  //     //$this->db->join($this->blog_comments, $this->blog_comments . 'blog_id = ' . $this->blogs . 'blog_id', 'inner');
  //     $query = $this->db->get();
  //     return $query->result();
  //   }










}//MAIN MODEL ENDS
//lat = 12.975363
//long = 77.636278

?>