<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
   <meta charset="utf-8">
	<title>Project Page</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.js">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fontawesome.min.js"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css"> -->


	 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
	 <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/customJs/main.js"></script> -->
	 <!-- Material Design -->
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">



 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <style>
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




    </style>

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
	      <!-- <a class="nav-item nav-link" href="<?php echo site_url('tasks') ?>">Tasks</a> -->
	    </div>
	  </div>
	   <?php if($this->session->userdata('logged_in')): ?>
	   	<span class="float-right">
				<form action="<?php echo base_url('destroy'); ?>">
					<button class="btn btn-raised btn-primary" type="submit"><i class="fas fa-power-off"></i> Logout</button>
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


	<?php if ($this->session->flashdata('task_updated')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?php echo $this->session->flashdata('task_updated') ?>
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
								<button type="button" data-toggle="modal" title="New" class="btn btn-raised btn-success" data-target="#newProjects"><i class="fas fa-plus"></i></button>

								<span>
									<a href="<?php echo base_url(); ?>projects/delete" title="Delete" class="btn btn-raised btn-danger">
										<i class="fas fa-trash"></i>
									</a>
								</span>
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
					</div>

<!-- ===================================END NEW PROJECTS=================================== -->					
					
					

					<div class="card-body">
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
										<th>
											<input type="checkbox" name="selectAll" id="selectAll">
										</th>
										<th scope="col">Project Name</th>
										<th scope="col">Project Body</th>
										<th scope="col">Edit</th>
										<!-- <th scope="col">Delete</th> -->
										<th scope="col">Tasks</th>
										<!-- <th scope="col">Joined Data</th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($projects as $project): ?>

										<tr>
											<td>
												<input type="checkbox" name="checkbox[]" id="checkbox" class="checkbox" value="<?php echo $project->id; ?>"> <?php echo $project->id; ?>
											</td>
											<td><?php echo $project->project_name; ?></td>
											<td><?php echo $project->project_body; ?></td>
											<td class="text-center">
												<a href="<?php echo site_url('edit/'. $project->id); ?>">
												<i class="far fa-edit"></i></a>
											</td>
											<!-- <td class="text-center">
												<a href="<?php echo site_url('delete_item/' . $project->id); ?>" style="color: red;">
													<i class="fas fa-trash"></i>
												</a>
											</td> -->
											<td>
												<a href="<?php echo base_url(); ?>tasks/create_view/<?php echo $project->id; ?>" class="btn btn-sm btn-raised btn-primary">Create Tasks</a>
											</td>
											<!-- <td><?php echo $project->task_name; ?></td> -->
										</tr>
										
									<?php endforeach ?>
								</tbody>
							</table>
							<p><?php echo $links; ?></p>
						</div>
					</div>
					<div class="card-footer">
						<!-- <p><?php echo $links; ?></p> -->

						<!-- <?php foreach ($links as $link): ?>
							<p><?php echo $link; ?></p>
							<nav aria-label="Page navigation example">
							  <ul class="pagination">
							    <li class="page-item">
							      <a class="page-link" href="<?php echo base_url() . $this->uri->segment(3); ?>" aria-label="Previous">
							        <span aria-hidden="true">&laquo;</span>
							        <span class="sr-only">Previous</span>
							      </a>
							    </li>
							    <li class="page-item">
							    	<a class="page-link" href="<?php echo base_url() . $this->uri->segment(3); ?>">1</a></li>
							    <li class="page-item">
							    	<a class="page-link" href="<?php echo base_url() . $this->uri->segment(3); ?>">2</a></li>
							    <li class="page-item">
							    	<a class="page-link" href="<?php echo base_url() . $this->uri->segment(3); ?>">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#" aria-label="Next">
							        <span aria-hidden="true">&raquo;</span>
							        <span class="sr-only">Next</span>
							      </a>
							    </li>
							  </ul>
							</nav>
						<?php endforeach ?> -->
					</div>
				</div>
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
					<div class="card-body">
							<!-- <button onclick="getLocation()">Click me</button>
						<p id="demo"></p> -->
						<!-- <div id="map"></div> -->
					</div>

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
						</div>

				    <!-- You could add a fallback address gathering form here -->
				  </div>


				</div>
			</div>
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

<script type="text/javascript">
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
</script>


<script type="text/javascript">
	

// console.log('working');
//to diaplay the google map
const mapArea = document.getElementById('map');
//click on motion
const actionBtn = document.getElementById('showMe');
//This will display all the available addresses returned by Google's Geocode Api
const locationsAvailable = document.getElementById('locationList');

//Let's bring in our API_KEY
const __KEY = 'AIzaSyDrCGKujbLwtRlKWENJo-Wrm5OlSeIyGOo';


let Gmap;
let Gmarker;

actionBtn.addEventListener("click", e => {
	// console.log('clicked');
	actionBtn.style.display = "block";
	// console.log('clicked');
	M.toast({html: "Fetching your current location", classes: "rounded"});
	getLocation();
});


getLocation = () => {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(displayLocation, showError, options);
	} else {
		M.toast({html: "Sorry, your browser does not support this feature... Please Update your Browser to enjoy it", classes: "rounded"});
	}
}

showError = (e) => {

			mapArea.style.display = "block";

			switch(e.code) {
				case e.PERMISSION_DENIED:
				mapArea.innerHTML = "You denied the request for your location."
				break;

				case e.POSITION_UNAVAILABLE:
				mapArea.innerHTML = "Your Location information is unavailable."
				break;

				case e.TIMEOUT:
				mapArea.innerHTML = "Your request timed out. Please try again"
				break;

				case e.UNKNOWN_ERROR:
				mapArea.innerHTML = "An unknown error occurred please try again after some time."
				break;
			}
		}

		const options = {
			enableHighAccuracy: true
		}

		displayLocation = (position) => {
			const	lat = position.coords.latitude;
		  const lng = position.coords.longitude;
		  // console.log(`${lat} and ${lng}`);
		  const latlng = {lat, lng};
		  // console.log(latlng);
		  showMap(latlng);
		  createMarker(latlng);
		  mapArea.style.display = "block";
	}

  //creating function for showMap
	showMap = (latlng) => {
		let mapOptions = {
			center: latlng,
			zoom: 17
		};
		Gmap = new google.maps.Map(mapArea, mapOptions);
	}

	createMarker = (latlng) => {
		let mapOptions = {
			position: latlng,
			map: Gmap,
			animation: google.maps.Animation.BOUNCE,
			clickable: true
		}
		Gmarker = new google.maps.Marker(mapOptions);
	}
</script>




<!-- <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>




<script type="text/javascript">
		
		 var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 12.9751285, lng: 77.6363217},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
                      }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
            var img = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDrCGKujbLwtRlKWENJo-Wrm5OlSeIyGOo&callback=initMap";

          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }


</script>


<script async defer
	

    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrCGKujbLwtRlKWENJo-Wrm5OlSeIyGOo&callback=initMap">

</script>

<script type="text/javascript" src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDrCGKujbLwtRlKWENJo-Wrm5OlSeIyGOo"></script>




<script>
	displayLocation = (position) => {
	  const lat = position.coords.latitude;
	  const lng = position.coords.longitude;
	}
	console.log(`${lat} ${lng}`);
</script> -->



























</body>
</html>