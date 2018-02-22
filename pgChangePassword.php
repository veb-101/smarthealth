<?php
	session_start();
	if($_SESSION["username"]==""){
		header("location:pgAdminLogin.php");
	}
?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Change Password - Smart Health</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Smart Health</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="pgAdminHome.php">Home</a></li>
					<li><a href="pgPatientDetails.php">Patient Details</a></li>
					<li><a href="pgDateTimeSlot.php">Date/Time Slot</a></li>
					<li><a href="pgViewAppointment.php">View Appointment</a></li>
					<li><a href="pgViewMessages.php">View Messages</a></li>
					<li><a href="pgChangePassword.php">Change Password</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<div class="flex flex-2">
							  <div class="col col3">		
								<input type="hidden" id="hdnID"/>
										<label for="Old Password">Old Password</label>
										<input type="text" id="txtOldPassword" placeholder="Old Password"/><br>
										<label for="New Password">New Password</label>
										<input type="text" id="txtNewPassword" placeholder="New Password"/><br>
										<label for="Re-Type Password">Re-Type Password</label>
										<input type="text" id="txtRePassword" placeholder="Re-Type New Password"/><br>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" id="btnSubmit" value="Submit" onclick="changePassword();"/></li>
										</ul>
							 </div>	
							</div>
						</div>
					</section>
				</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
			
			
		function changePassword(){ 
			
			if($("#txtOldPassword").val()==""){
						alert("Please Enter Password");
					}
					else if($("#txtNewPassword").val()==""){
						alert("Please Enter New Password");
					}
					else if($("#txtRePassword").val()==""){
						alert("Please Re-Type Password");
					}	
					else if($("#txtNewPassword").val()== $("#txtOldPassword").val() ){
					alert("Password cannot be same");
					}	
					else if($("#txtNewPassword").val()!= $("#txtRePassword").val() ){
					alert("Password dosen't match");
					}
				
			else {
					$.ajax({
					type:"POST",
					url:"changePassword.php",
					data:{oldpassword:$("#txtOldPassword").val(),newpassword:$("#txtNewPassword").val()},
					success:function(response){
					console.log(response);
					if($.trim(response)=="Success"){
						alert("Password Changed");
						$("#txtOldPassword").val("");
						$("#txtNewPassword").val("");
						$("#txtRePassword").val("");
						var ans= confirm("Do You Want to Logout");
						if(ans==true){
							$(location).attr('href','pgAdminLogin.php');	
						}
						else{
							$(location).attr('href','pgAdminHome.php');		
						}
					}
					else if($.trim(response)=="Invalid"){
						alert("Invalid Old Password Provided");
						$("#txtOldPassword").val("");
						$("#txtNewPassword").val("");
						$("#txtRePassword").val("");
					}
					else{
						alert("Something Went Wrong. Please Try Again");
					}
					}
				});
			}
		}
		</script>		
	</body>
</html>