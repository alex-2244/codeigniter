<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Tasks</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">

	<!-- Material Design -->
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg">
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
	   <span class="float-right">
				<form action="<?php echo base_url('destroy'); ?>">
					<button class="btn btn-raised btn-primary" type="submit"><i class="fas fa-power-off"></i> Logout</button>
				</form>
			</span>
	</nav>

	<!-- =======================================================NAVBAR ENDS============================================================ -->
	
	<div class="container mt-4">
		<div class="row">
			<div class="col-lg-9">
				<div class="card">
					<div class="card-header pb-0">
						<h4 class="card-title">Edit Tasks</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('tasks/edit_task/' . $this->uri->segment(3)); ?>
							<div class="form-group">
								<label for="project_name" class="bmd-label-floating">Task Name</label>
								<input type="text" class="form-control" name="task_name" value="<?php echo $the_task->task_name; ?>">
							</div>
							<div class="form-group">
								<label for="project_body" class="bmd-label-floating">Task Body</label>
								<textarea class="form-control" rows="5" name="task_body"><?php echo $the_task->task_body ?></textarea>
							</div>
							<div class="form-group">
								<label for="due_date">Date</label>
								<input type="date" class="form-control" name="due_date" value="<?php echo $the_task->due_date; ?>">
							</div>
							<div class="form-group">
								<button class="btn btn-raised btn-primary" type="submit">Update</button>
								<a class="btn btn-raised btn-success" href="<?php echo site_url('projects'); ?>">Back</a>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>


</body>
</html>