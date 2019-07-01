<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Task Page</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.js">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.min.js"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets1/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets1/css/all.min.css">

  <!-- Material Design -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Codeigniter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?php echo site_url('welcome/home') ?>">Home</a>
        <a class="nav-item nav-link" href="<?php echo site_url('projects') ?>">Projects</a>
      </div>
    </div>
     <?php if($this->session->userdata('logged_in')): ?>
      <span class="float-right">
        <form action="<?php echo base_url('destroy'); ?>">
          <button class="btn btn-info btn-fab" title="Logout" type="submit">
            <i class="material-icons">power_settings_new</i>
          </button>
        </form>
      </span>
    <?php endif; ?>
  </nav>

  <!-- =======================================================NAVBAR ENDS============================================================ -->
  
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-9">
        <div class="card">
          <div class="card-header pb-0">
            <h4 class="card-title">Tasks
              <span class="float-right">
                <!-- <a href="<?php echo site_url('create_new'); ?>" class="btn btn-sm btn-info">New Projects</a> -->
                <!-- <button type="button" data-toggle="modal" class="btn btn-sm btn-info" data-target="#newProjects">New Projects</button>
              </span> -->
            </h4>
            
          </div>
<!-- ===================================NEW PROJECTS=================================== -->
          <!-- <div class="modal fade" id="newProjects" tabindex="-1" role="dialog" aria-labelledby="newProjectsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="newProjectsLabel">New Projects</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('new_projects'); ?>" method="post">
                    <div class="form-group">
                      <label for="project_name">Project Name</label>
                      <input type="text" class="form-control" name="project_name" value="">
                    </div>
                    <div class="form-group">
                      <label for="project_body">Project Body</label>
                      <textarea class="form-control" rows="5" name="project_body"></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-sm btn-primary" type="submit">Create</button>
                      <a class="btn btn-sm btn-danger" href="<?php echo site_url('projects'); ?>">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> -->

<!-- ===================================END NEW PROJECTS=================================== -->         
          
          

          <div class="card-body">
            <!-- <form class="form-inline mb-3" action="<?php echo base_url('search_item'); ?>" method="post">
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="search" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-sm btn-primary">Search</button>
            </form> -->

            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Tasks Name</th>
                    <th scope="col">Tasks Body</th>
                    <th scope="col">Date Created</th>
                  </tr>
                </thead>
                

                <tbody>
                  <tr>
                    <td>
                      <div class="tag-name">
                        <?php echo $task->task_name; ?>
                      </div>
                      <div class="tag-actions">
                        <a href="<?php echo base_url() ?>tasks/edit_task/<?php echo $task->id; ?>" style="font-size: 14px;">Edit</a>
                        <a href="<?php echo base_url() ?>tasks/delete_task/<?php echo $task->id; ?>" class="text-danger" style="font-size: 14px;">Delete</a>
                      </div>
                    </td>
                    <td><?php echo $task->task_body; ?></td>
                    <td><?php echo $task->date_created; ?></td>
                  </tr>
                  <!-- <?php foreach ($tasks as $task): ?>

                    <tr>
                      <td><?php echo $task->task_name; ?></td>
                      <td><?php echo $task->task_body; ?></td>
                      
                    </tr>
                    
                  <?php endforeach ?> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>



  <!-- ===================================EDIT PROJECTS=================================== -->
    <!-- <div class="modal fade" id="editDetail" tabindex="-1" role="dialog" aria-labelledby="newProjectsLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newProjectsLabel">New Projects</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('update'); ?>" method="post">
              <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" name="project_name" value="<?php echo $projects->project_name; ?>">
              </div>
              <div class="form-group">
                <label for="project_body">Project Body</label>
                <textarea class="form-control" rows="5" name="project_body"><?php echo $projects->project_body; ?></textarea>
              </div>
              <input type="hidden" name="id" value="<?php echo $projects->id; ?>">
              <div class="form-group">
                <button class="btn btn-sm btn-primary" type="submit">Update</button>
                <a class="btn btn-sm btn-success" href="<?php echo site_url('projects'); ?>">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

<!-- ===================================END EDIT PROJECTS=================================== -->


</body>
</html>