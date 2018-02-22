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

		<title>Home - Smart Health</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a {
  float: center;
  display:block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <ul class="links">
      	
					<li><a href="pgAdminHome.php" ><input type="submit"  value="Home" /></a></li>
					<li><a href="pgPatientDetails.php"><input type="submit" id="btnDown" value="Patient Details" /></a></li>
					<li><a href="pgDateTimeSlot.php" ><input type="submit" id="btnDown" value="Date/Time slot" /></a></li>
					<li><a href="pgViewAppointment.php" ><input type="submit" id="btnDown" value="View Appointment" /></a></li>
					<li><a href="pgChangePassword.php"><input type="submit" id="btnDown" value="Change Password" /></a></li>
					<li><a href="pgViewMessages.php"><input type="submit" id="btnDown" value="View Message" /></a></li>
					<li><a href="Logout.php" ><input type="submit" id="btnDown" value="Logout" /></a></li>
				
				</ul>
</div>

<div style="padding-left:20px">
  
</div>

</body>
</html>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Smart Health</a></div>
		<!--		<a href="#menu">Menu</a>-->
			</header>

		<!-- Nav -->
		<!--	<nav id="menu">-->
		<!--		<ul class="links">-->
		<!--			<li><a href="pgAdminHome.php">Home</a></li>-->
		<!--			<li><a href="pgPatientDetails.php">Patient Details</a></li>-->
		<!--			<li><a href="pgDateTimeSlot.php">Date/Time Slot</a></li>-->
		<!--			<li><a href="pgViewAppointment.php">View Appointment</a></li>-->
		<!--			<li><a href="pgChangePassword.php">Change Password</a></li>-->
		<!--			<li><a href="pgViewMessages.php">View Messages</a></li>-->
		<!--			<li><a href="Logout.php">Logout</a></li>-->
				
		<!--		</ul>-->
		<!--	</nav>-->

		<!-- Main -->
			<div id="main">
				<section class="wrapper style1">
					<div class="inner">
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

	</body>
</html>