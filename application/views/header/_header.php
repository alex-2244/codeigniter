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
	      <a class="nav-item nav-link active" href="<?php echo site_url('welcome/home') ?>">Home</a>
	      <a class="nav-item nav-link" href="<?php echo site_url('projects') ?>">Projects</a>
	    </div>
	  </div>
	   <?php if($this->session->userdata('logged_in')): ?>
	   	<span class="float-right">
				<form action="<?php echo base_url('destroy'); ?>">
					<button class="btn btn-sm btn-outline-primary" type="submit">Logout</button>
				</form>
			</span>
		<?php endif; ?>
	</nav>

	<!-- =======================================================NAVBAR ENDS============================================================ -->


</body>
</html>