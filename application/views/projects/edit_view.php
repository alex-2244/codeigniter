<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    EditPage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Codeigniter	
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('welcome/home'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('projects'); ?>">
              <i class="material-icons">library_books</i>
              <p>Projects</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
	<!--================================= END SIDEBAR ==================-->

	<!-- ==============================START MAIN CONTENT========================== -->

		<div class="main-panel">
			<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Edit</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->

            <?php if($this->session->userdata('logged_in')): ?>
								<form action="<?php echo base_url('destroy'); ?>">
									<button class="btn btn-info btn-fab" title="Logout" type="submit">
									<i class="material-icons">power_settings_new</i></button>
								</form>
						<?php endif; ?>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                	<h3 class="card-title">
                		Edit your projects: <?php echo $projects->project_name; ?>
                	</h3>
                </div>
                <div class="card-body">
              		<form action="<?php echo base_url('update'); ?>" method="post">
										<div class="form-group">
											<label for="project_name" class="bmd-label-floating">Project Name</label>
											<input type="text" class="form-control" name="project_name" value="<?php echo $projects->project_name; ?>">
										</div>
										<div class="form-group">
											<label for="project_body" class="bmd-label-floating">Project Body</label>
											<textarea class="form-control" rows="5" name="project_body"><?php echo $projects->project_body; ?></textarea>
										</div>
										<input type="hidden" name="id" value="<?php echo $projects->id; ?>">
										<div class="form-group">
											<button class="btn btn-raised btn-info" type="submit">Update</button>
											<a class="btn btn-raised btn-success" href="<?php echo site_url('projects'); ?>">Back</a>
										</div>
									</form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  Codeigniter
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com">Naveen</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
	</div>
	<!-- ==============================END MAIN CONTENT========================== -->
	</div>

	
	<!-- <div class="container mt-4">
		<div class="row">
			<div class="col-lg-9">
				<div class="card">
					<div class="card-header pb-0">
						<h4 class="card-title">Edit your <?php echo $projects->project_name; ?>
							
						</h4>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('update'); ?>" method="post">
							<div class="form-group">
								<label for="project_name" class="bmd-label-floating">Project Name</label>
								<input type="text" class="form-control" name="project_name" value="<?php echo $projects->project_name; ?>">
							</div>
							<div class="form-group">
								<label for="project_body" class="bmd-label-floating">Project Body</label>
								<textarea class="form-control" rows="5" name="project_body"><?php echo $projects->project_body; ?></textarea>
							</div>
							<input type="hidden" name="id" value="<?php echo $projects->id; ?>">
							<div class="form-group">
								<button class="btn btn-raised btn-info" type="submit">Update</button>
								<a class="btn btn-raised btn-success" href="<?php echo site_url('projects'); ?>">Back</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div> -->


</body>
</html>