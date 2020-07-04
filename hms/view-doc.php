<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Reg Users | View Documents</title>
		
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
	</head>
	<style>
	body{
		background-image: url('3d.jpg');
			background-size: cover;

	}
	</style>
	<body>
		<div id="app">		
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" style="width: 800px;" >
<div class="wrap-content container" id="container" >
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle" style="font-weight:bold; color:black ">Medical History</h1>
</div>
</div>
</section  style="background-color:yellow";>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h4 class="over-title margin-bottom-15">View <span class="text-bold">Medical History</span></h4>
<!-- <?php
$uid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from medical_image join users on users.email=medical_image.Email where users.id='$uid'");


while($row=mysqli_fetch_assoc($sql))
{
	echo'
	<tr>
	<td>
	<img src="data:image/jpeg/png/jpg;base64,' .base64_encode($row['$media']).'" width="250" height="250"/>
	</td>
	</td>
	</tr>';
}	 

?> -->


</div>
</div>
</div>
<p style="color:blue; text-decoration:underline; font-size:20px; padding:10px 0 10px 30px">Only one record found</p>

<div style="padding:40px 0px 60px 200px;color:black; font-size:20px">
<h3 style="display: inline;font-weight:500;color:black">Document Type</h2>
<h3 style="padding-left:120px;display:inline; font-weight:500; color:black" >Image</h2>
<table style="border: 1px solid black;">
	<tr>
		<td style="padding:60px;text-decoration:underline">Preception Image</td>
		<td><img style="width: 300px;height:300px" src="fake/dis.jpg" alt="">  </td>
</tr>
</table>
</div>
</div>

</div>
</div>
</div>
</div>

			<!-- start: FOOTER -->

			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			
			<!-- end: SETTINGS -->
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
