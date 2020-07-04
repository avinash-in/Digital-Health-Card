<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<style>
		body{
			background-image: url('3d.jpg');
			background-size: cover;
		}
		</style>

	</head>
	<body>
		<div id="app">		

			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw" style="background-color:none; background-size:cover; border-radius:20px; border:none; margin-top:100px; margin-left:0px; margin-right:70px;">
							<div class="row" >
								<div class="col-sm-4" >
									<div class="panel panel-white text-center" style="border-radius:10px;box-shadow:grey 0 10px 10px">
										<div class="panel-body" >
											<span class="fa-stack fa-2x" style="color: white;background-color:black;border-radius:10px"><i class="fa fa-user"></i> </span>
											<h3 class="StepTitle" style="padding-top: 5px; color:black">My Profile</h3>
											
											<p class="links cl-effect-1">
												<a href="edit-profile.php">
													Update Profile
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white text-center" style="border-radius:10px; box-shadow:grey 0 10px 10px">
										<div class="panel-body">
											<span class="fa-stack fa-2x" style="color: white;background-color:black;border-radius:10px"><i class="fa fa-briefcase"></i> </span>
											<h3 class="StepTitle" style="padding-top: 5px; color:black">My Appointments</h3>
										
											<p class="cl-effect-1">
												<a href="appointment-history.php">
													View Appointment History
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white text-center" style="border-radius:10px; box-shadow:grey 0 10px 10px">
										<div class="panel-body">
											<span class="fa-stack fa-2x" style="color: white;background-color:black;border-radius:10px"><i class="fa fa-pencil"></i> </span>
											<h3 class="StepTitle" style="padding-top: 5px; color:black">Book Appointment</h3>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													Book Appointment
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white text-center" style="border-radius:10px; box-shadow:grey 0 10px 10px">
										<div class="panel-body">
											<span class="fa-stack fa-2x" style="color: white;background-color:black;border-radius:10px"><i class="fa fa-plus"></i> </span>
											<h3 class="StepTitle" style="padding-top: 5px; color:black">Add History</h3>
											
											<p class="links cl-effect-1">
												<a href="add-doc.php">
													Insert Documents
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white text-center" style="border-radius:10px; box-shadow:grey 0 10px 10px">
										<div class="panel-body">
											<span class="fa-stack fa-2x" style="color: white;background-color:black;border-radius:10px"><i class="fa fa-eye"></i> </span>
											<h3 class="StepTitle" style="padding-top: 5px; color:black">My Documents</h3>
											
											<p class="links cl-effect-1">
												<a href="view-doc.php">
													View Your Documents
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	
			<!-- end: FOOTER -->
		
			
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
