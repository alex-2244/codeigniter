<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Codeigniter
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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
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
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Projects</a>
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


					<?php if ($this->session->flashdata('task_updated')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?php echo $this->session->flashdata('task_updated') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>


          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                	<h3 class="card-title">
                		Projects <span class="float-right">
                		<!-- <a href="<?php echo site_url('create_new'); ?>" class="btn btn-sm btn-info">New Projects</a> -->
										<button type="button" data-toggle="modal" title="New" class="btn btn-fab bg-success" data-target="#newProjects"><i class="material-icons">add</i></button>

										<!-- <span>
											<a href="<?php echo base_url(); ?>projects/delete" title="Delete" class="btn btn-raised btn-danger">
												<i class="fas fa-trash"></i>
											</a>
										</span> -->
										</span>
                	</h3>
                </div>


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
														<label for="project_name" class="bmd-label-floating">Project Name</label>
														<input type="text" class="form-control" name="project_name">
													</div>
													<div class="form-group">
														<label for="project_body" class="bmd-label-floating">Project Body</label>
														<textarea class="form-control" rows="5" name="project_body"></textarea>
													</div>
													<div class="form-group">
														<button class="btn btn-primary" type="submit">Create</button>
														<a class="btn btn-danger" href="<?php echo site_url('projects'); ?>">Cancel</a>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>


                <div class="card-body">
                	<form class="form-inline mb-3" action="<?php echo base_url('search_item'); ?>" method="post">
										<div class="form-group">
											<label for="Search" class="bmd-label-floating">Search</label>
											<input type="text" class="form-control" name="search">
										</div>
										<button type="submit" class="btn btn-fab btn-primary ml-2 mt-0">
                      <i class="material-icons">search</i>          
                    </button>
									</form>

									<div class="table-responsive">
										<table class="table">
											<thead class="text-primary">
												<tr>
													<!-- <th>
														<input type="checkbox" name="selectAll" id="selectAll">
													</th> -->
													<th>Project Name</th>
													<th>Project Body</th>
													<th class="text-center">Edit</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Tasks</th>
													<!-- <th scope="col">Joined Data</th> -->
												</tr>
											</thead>
											<tbody>
												<?php foreach ($projects as $project): ?>

													<tr>
														<!-- <td>
															<input type="checkbox" name="checkbox[]" id="checkbox" class="checkbox" value="<?php echo $project->id; ?>"> <?php echo $project->id; ?>
														</td> -->
														<td><?php echo $project->project_name; ?></td>
														<td><?php echo $project->project_body; ?></td>
														<td class="text-center">
															<a href="<?php echo site_url('edit/'. $project->id); ?>" class="btn btn-primary btn-link" title="Edit">
															<i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
														</td>
														<td class="text-center">
															<a href="<?php echo site_url('delete_item/' . $project->id); ?>" class="btn btn-link btn-danger" title="Delete">
																<i class="material-icons">close</i>
															</a>
														</td>
														<td class="text-center">
															<a href="<?php echo base_url(); ?>tasks/create_view/<?php echo $project->id; ?>" class="btn btn-primary">New Tasks</a>
														</td>
														<!-- <td><?php echo $project->task_name; ?></td> -->
													</tr>
													
												<?php endforeach ?>
											</tbody>
										</table>
									</div>
                </div>
                <hr>
                <div class="card-footer">
                  <div class="row">
                    <?php echo $this->pagination->create_links(); ?>
                  </div>
                    <ul class="pagination">
                      <li class="paginate_button page-item previous disabled" id="dtBasicExample_previous">
                        <a href="#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                      </li>
                      <li class="paginate_button page-item active">
                        <a href="http://localhost/codeigniter/projects?per_page=0" aria-controls="dtBasicExample" data-ci-pagination-page="1" tabindex="-1" class="page-link">1</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="http://localhost/codeigniter/projects?per_page=5" aria-controls="dtBasicExample" data-ci-pagination-page="2" tabindex="-1" class="page-link">2</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="http://localhost/codeigniter/projects?per_page=10" aria-controls="dtBasicExample" data-ci-pagination-page="3" tabindex="-1" class="page-link">3</a>
                      </li>
                      <li class="paginate_button page-item next" id="dtBasicExample_next">
                        <a href="#" aria-controls="dtBasicExample" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                      </li>
                    </ul>
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
</div>
  <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div> -->
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>

</body>

</html>











<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
   <meta charset="utf-8">
	<title>Project Page</title> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.js">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.min.js"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets1/css/all.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css"> -->


	 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
	 <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/customJs/main.js"></script> -->
	 <!-- Material Design -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"> -->



 	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script> -->

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
 <!-- <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }




    </style> -->

<!-- </head>
<body>
	<nav class="navbar navbar-expand-lg">
	  <a class="navbar-brand" href="#">Codeigniter</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="<?php echo site_url('welcome/home') ?>">Home</a>
	      <a class="nav-item nav-link" href="<?php echo site_url('projects') ?>">Projects</a> -->
	      <!-- <a class="nav-item nav-link" href="<?php echo site_url('tasks') ?>">Tasks</a> -->
	   <!--  </div>
	  </div>
	   <?php if($this->session->userdata('logged_in')): ?>
	   	<span class="float-right">
				<form action="<?php echo base_url('destroy'); ?>">
					<button class="btn btn-raised btn-primary" type="submit"><i class="fas fa-power-off"></i> Logout</button>
				</form>
			</span>
		<?php endif; ?>
	</nav> -->

	<!-- =======================================================NAVBAR ENDS============================================================ -->
	

	<!-- <div class="container mt-4">
		<div class="row">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header pb-0">
						<h4 class="card-title">Projects
							<span class="float-right">
								
								<button type="button" data-toggle="modal" title="New" class="btn btn-raised btn-success" data-target="#newProjects"><i class="fas fa-plus"></i></button>

								
							</span>
							
						</h4>
						
					</div> -->
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
											<label for="project_name" class="bmd-label-floating">Project Name</label>
											<input type="text" class="form-control" name="project_name">
										</div>
										<div class="form-group">
											<label for="project_body" class="bmd-label-floating">Project Body</label>
											<textarea class="form-control" rows="5" name="project_body"></textarea>
										</div>
										<div class="form-group">
											<button class="btn btn-raised btn-primary" type="submit">Create</button>
											<a class="btn btn-raised btn-danger" href="<?php echo site_url('projects'); ?>">Cancel</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div> -->

<!-- ===================================END NEW PROJECTS=================================== -->					
					
					

					<!-- <div class="card-body">
						<form class="form-inline mb-3" action="<?php echo base_url('search_item'); ?>" method="post">
							<div class="form-group">
								<label for="Search" class="bmd-label-floating">Search</label>
								<input type="text" class="form-control" name="search">
							</div>
							<button type="submit" class="btn btn-raised btn-primary ml-2">Search</button>
						</form>

						<div class="table-responsive">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										
										<th scope="col">Project Name</th>
										<th scope="col">Project Body</th>
										<th scope="col" class="text-center">Edit</th>
										<th scope="col" class="text-center">Delete</th>
										<th scope="col" class="text-center">Tasks</th>
										
									</tr>
								</thead>
								<tbody>
									<?php foreach ($projects as $project): ?>

										<tr>
											
											<td><?php echo $project->project_name; ?></td>
											<td><?php echo $project->project_body; ?></td>
											<td class="text-center">
												<a href="<?php echo site_url('edit/'. $project->id); ?>" class="btn btn-raised btn-primary">
												<i class="far fa-edit"></i></a>
											</td>
											<td class="text-center">
												<a href="<?php echo site_url('delete_item/' . $project->id); ?>" class="btn btn-raised btn-danger" >
													<i class="fas fa-trash"></i>
												</a>
											</td>
											<td class="text-center">
												<a href="<?php echo base_url(); ?>tasks/create_view/<?php echo $project->id; ?>" class="btn btn-sm btn-raised btn-primary">Create Tasks</a>
											</td>
											
										</tr>
										
									<?php endforeach ?>
								</tbody>
							</table>
							<p><?php echo $links; ?></p>
						</div>
					</div> -->
					
				<!-- </div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>

	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="card-title">Your location</h5>
					</div>
					<div class="card-body"> -->
							<!-- <button onclick="getLocation()">Click me</button>
						<p id="demo"></p> -->
						<!-- <div id="map"></div> -->
					<!-- </div>

					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h3>Skills Address</h3>
						    <p>Get the address by clicking below button</p>
				    		<button id="showMe" class="btn btn-raised btn-warning">My Location</button>
						    <div id="map" style="height: 67%;"></div>
							</div>
							<div class="col-lg-6">
								<form id="shippingAddress">
						      <div id="locationList"></div>
						      <br>
						      <div class="form-group">
						      	<label class="bmd-label-floating" for="address">Address (Area and Street)</label>
						        <textarea class="form-control" id="address" type="text"></textarea>
						      </div>
						      <div class="form-group">
						        <label class="bmd-label-floating" for="locality">Locality</label>
						        <input class="form-control" id="locality" type="text">
						      </div>
						      <div class="form-group">
						        <label class="bmd-label-floating" for="city">City/District/Town</label>
						        <input class="form-control" id="city" type="text">
						      </div>
						      <div class="form-group">
						        <label class="bmd-label-floating" for="pin_code">Pin Code</label>
						        <input class="form-control" id="postal_code" type="text">
						      </div>
						      <div class="form-group">
						        <label class="bmd-label-floating" for="landmark">Landmark</label>
						        <input class="form-control" id="landmark" type="text">
						      </div>
						      <div class="form-group">
						        <label class="bmd-label-floating" for="State">State</label>
						        <input class="form-control" id="state" type="text">
						      </div>
						    </form>
							</div>
						</div> -->

				    <!-- You could add a fallback address gathering form here -->
				  <!-- </div>


				</div>
			</div>
		</div>
	</div> -->


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



 <!-- <script type="text/javascript">
	
	var x = document.getElementsById("demo");

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
	}

	function showPosition(position) {
		x.innerHTML = "Latitude: " + position.coords.latitude + "<br> Longitude: " + position.coords.longitude; 
	}




 </script> -->




 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrCGKujbLwtRlKWENJo-Wrm5OlSeIyGOo"></script>

<!-- <script type="text/javascript">
	$(document).ready(function(){
    $('#selectAll').on('click',function(){
      if(this.checked){
        $('.checkbox').each(function(){
          this.checked = true;
            });
        }else{
         $('.checkbox').each(function(){
            this.checked = false;
        	});
        }
    });
    
    $('.checkbox').on('click',function(){
      if($('.checkbox:checked').length == $('.checkbox').length){
          $('#selectAll').prop('checked',true);
      }else{
          $('#selectAll').prop('checked',false);
      }
    });
	});
</script> -->







</body>
</html>











































