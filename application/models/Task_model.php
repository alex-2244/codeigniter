<?php
  
  /**
   * 
   */
  class Task_model extends CI_Model
  {
    
    

    public function get_task($task_id) {
      $this->db->where('id', $task_id);
      $query = $this->db->get('tasks');

      // print_r($query->row());
      // exit();
      return $query->row();
    }


    public function create_task($task_insert) {
      $query = $this->db->insert('tasks', $task_insert);
      return $query;
    }


    // public function edit_task($edit_task_id) {

    //   $this->db->select('*');
    //   $this->db->from('tasks');
    //   $this->db->where('id', $edit_task_id);
    //   // $res = $this->db->get();
    //   // print_r($id);exit();
    //   $res = $this->db->get();
    //   // echo "<pre>"; print_r($res->row());exit();
       
    //    return $res->row();

    // }


    public function get_task_project_id($task_id) {
      $this->db->where('id', $task_id);
      $query = $this->db->get('tasks');
      return $query->row()->project_id;
    }


    public function get_project_name($project_id) {
      $this->db->where('id', $project_id);
      $query = $this->db->get('projects');
      return $query->row()->project_name;
    }


    public function get_task_project_data($task_id) {
      $this->db->where('id', $task_id);
      $query = $this->db->get('tasks');
      return $query->row();
    }



    public function edit_task($task_id, $data) {
      $this->db->where('id', $task_id);
      $this->db->update('tasks', $data);
      return true;
    }










  }

?>