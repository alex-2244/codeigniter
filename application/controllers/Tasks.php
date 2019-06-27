<?php

/**
 * 
 */
class Tasks extends CI_Controller
{
  

  public function index($task_id) {
    $task['task'] = $this->task_model->get_task($task_id);
    $this->load->view('tasks/index', $task);
  }


  public function create_view() {
    $this->load->view('tasks/create_task');
  }



  public function create_task($project_id) {
    // print_r($project_id);
    // exit();
    // $this->load->view('tasks/create_task');
    $task_insert = array(
      'project_id'   => $project_id,
      'task_name'    => $this->input->post('task_name'),
      'task_body'    => $this->input->post('task_body'),
      'due_date'     => $this->input->post('due_date')
    );
    // print_r($task_insert);
    // exit();
    // $new_task['tasks'] = $this->task_model->create_task($task_insert);
    if ($this->task_model->create_task($task_insert)) {
      $this->session->set_flashdata('task_created', 'New task created successfully!');
      redirect('tasks/index');
    } else {
      redirect('tasks/create_task');
    }
  }




  // public function edit_task($edit_id) {
  //   $edit_task['tasks'] = $this->task_model->edit_task($edit_id);
  //   $this->load->view('tasks/edit_task', $edit_task);
  // }

  public function edit_task($task_id) {
    $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('task_body', 'Task Body', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['project_id']   = $this->task_model->get_task_project_id($task_id);
      $data['project_name'] = $this->task_model->get_project_name($data['project_id']);
      $data['the_task']     = $this->task_model->get_task_project_data($task_id);

      $this->load->view('tasks/edit_task', $data);
    } else {

      $project_id = $this->task_model->get_task_project_id($task_id);

      $data = array(
        'project_id'   => $project_id,
        'task_name'    => $this->input->post('task_name'),
        'task_body'    => $this->input->post('task_body'),
        'due_date'     => $this->input->post('due_date')
      );
      if ($this->task_model->create_task($data)) {
        $this->session->set_flashdata('task_created', 'New task created successfully!');
        redirect('projects/index');
      }
    }
  }



















}


?>