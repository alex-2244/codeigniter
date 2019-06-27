<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.js">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.min.js"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">
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
					<button class="btn btn-sm btn-outline-primary" type="submit"><i class="fas fa-power-off"></i> Logout</button>
				</form>
			</span>
		<?php endif; ?>
	</nav>

	<!-- =======================================================NAVBAR ENDS============================================================ -->
	<?php if ($this->session->flashdata('deleted')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('deleted') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('new')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('new') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('updated')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('updated') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<div class="container mt-4">
		<div class="row">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header pb-0">
						<h4 class="card-title">Projects
							<span class="float-right">
								<!-- <a href="<?php echo site_url('create_new'); ?>" class="btn btn-sm btn-info">New Projects</a> -->
								<button type="button" data-toggle="modal" class="btn btn-sm btn-info" data-target="#newProjects">New Projects</button>
							</span>
						</h4>
						
					</div>
<!-- ===================================NEW PROJECTS=================================== -->
					<div class="modal fade" id="newProjects" tabindex="-1" role="dialog" aria-labelledby="newProjectsLabel" aria-hidden="true">
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
											<input type="text" class="form-control" name="project_name" value="" placeholder="Enter project name">
										</div>
										<div class="form-group">
											<label for="project_body">Project Body</label>
											<textarea class="form-control" rows="5" name="project_body" placeholder="Enter Description"></textarea>
										</div>
										<div class="form-group">
											<button class="btn btn-sm btn-primary" type="submit">Create</button>
											<a class="btn btn-sm btn-danger" href="<?php echo site_url('projects'); ?>">Cancel</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

<!-- ===================================END NEW PROJECTS=================================== -->					
					
					

					<div class="card-body">
						<form class="form-inline mb-3" action="<?php echo base_url('search_item'); ?>" method="post">
							<div class="form-group">
								<input type="text" class="form-control form-control-sm" name="search" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-sm btn-primary">Search</button>
						</form>

						<div class="table-responsive">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th scope="col">Project Name</th>
										<th scope="col">Project Body</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>
										<th scope="col">Tasks</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($projects as $project): ?>

										<tr>
											<td><?php echo $project->project_name; ?></td>
											<td><?php echo $project->project_body; ?></td>
											<td class="text-center">
												<a href="<?php echo site_url('edit/'. $project->id); ?>">
												<i class="far fa-edit"></i></a>
											</td>
											<td class="text-center">
												<!-- <a href="<?php echo site_url('delete_item'); ?>?id=<?php echo $project->id ?>" style="color: red;"> -->
												<a href="<?php echo site_url('delete_item/' . $project->id); ?>" style="color: red;">
													<i class="fas fa-trash"></i>
												</a>
											</td>
											<td>
												<a href="<?php echo base_url(); ?>tasks/create_view/<?php echo $project->id; ?>" class="btn btn-sm btn-info">Create Tasks</a>
											</td>
										</tr>
										
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>



	<!-- ===================================TASK CREATE=================================== -->

		<!-- <div class="modal fade" id="taskCreate" tabindex="-1" role="dialog" aria-labelledby="taskCreateLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="taskCreateLabel">New Tasks</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('tasks/create_new/' . $this->uri->segment(3)); ?>" method="post">
							<div class="form-group">
								<label for="project_name">Task Name</label>
								<input type="text" class="form-control" name="task_name" value="" placeholder="Enter task name">
							</div>
							<div class="form-group">
								<label for="project_body">Task Description</label>
								<textarea class="form-control" rows="5" name="task_body" placeholder="Enter Description"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-sm btn-primary" type="submit">Create Task</button>
								<a class="btn btn-sm btn-success" href="">Back</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->

<!-- ===================================END TASK CREATE=================================== -->


</body>
</html>