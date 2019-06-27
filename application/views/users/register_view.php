<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Codeigniter</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link" href="<?php echo site_url('login_view'); ?>">Login</a>
	      <a class="nav-item nav-link" href="<?php echo site_url('register_view'); ?>">Register</a>
	    </div>
	  </div>
	</nav>

	<!-- =======================================================NAVBAR ENDS============================================================ -->

	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-danger">
			<?php echo $this->session->flashdata('error'); ?>
		</div>
	<?php endif; ?>

	<?php if($this->session->flashdata('reg_required')): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('reg_required'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php endif; ?>

	<div class="container pt-4">
		<div class="card w-50 m-auto">
			<div class="card-header pb-0">
				<h4 class="card-title">Register Page</h4>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('register'); ?>" method="POST">
					<div class="row form-group">
						<div class="col">
							<label for="First Name">First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="First Name" />
						</div>
						<div class="col">
							<label for="Last Name">Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" />
						</div>
						</div>
						<div class="form-group">
							<label for="Email">E-mail</label>
							<input type="email" name="email" class="form-control" placeholder="E-mail" />
						</div>
						<div class="form-group">
							<label for="Username">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username" />
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" />
						</div>
						<div class="form-group">
							<label for="Confirm Password">Password</label>
							<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary">Register</button>&nbsp;
							<span>
								<a href="<?php echo site_url('login_view'); ?>">Login</a>
							</span>
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>