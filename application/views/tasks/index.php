<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tasks Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <b>
          <?php if($this->session->userdata('username')): ?>
            <?php echo $this->session->userdata('username'); ?>
          <?php endif; ?>
        </b>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
            </a>
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="Image">
              <span class="hidden-xs">
                <?php if($this->session->userdata('username')): ?>
                  <?php echo $this->session->userdata('username'); ?>
                <?php endif; ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Welcome&nbsp;<span>
                    <?php if($this->session->userdata('username')): ?>
                      <?php echo $this->session->userdata('username'); ?>
                    <?php endif; ?>
                  </span>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <?php if($this->session->userdata('logged_in')): ?>
                    <form action="<?php echo base_url('destroy'); ?>">
                      <button class="btn btn-info" title="Logout" type="submit">
                      <i class="fa fa-power"></i>Logout
                      </button>
                    </form>
                  <?php endif; ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            <?php if($this->session->userdata('username')): ?>
              <?php echo $this->session->userdata('username'); ?>
            <?php endif; ?>
          </p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo site_url('welcome/home'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('projects'); ?>">
            <i class="fa fa-files-o"></i>
            <span>Projects</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tasks
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tasks</a></li>
        <li class="active">Home</li>
      </ol>
    </section>
    
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible show" role="alert">
        <?php echo $this->session->flashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Tasks</h3>
            </div>
            <div class="box-body">
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
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Naveen</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
</body>
</html>



























<!DOCTYPE html>
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