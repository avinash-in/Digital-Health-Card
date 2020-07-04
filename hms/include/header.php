<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header"  style="border:none;">	
							<h3 style="padding-top:15px; padding-left:20px; font-weight:300">Health Services</h3>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:2%">
								<h1 style="padding-right:20px">Digital Health Card</h1>
							</li>
						
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/images.png"> <span class="username">



									<?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];
}
									?> <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="edit-profile.php">
											My Profile
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Change Password
										</a>
									</li>
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
					</div>
				
					
					<!-- end: NAVBAR COLLAPSE -->
				</header>
