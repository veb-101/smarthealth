<?php
	session_start();
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
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
		<title>Patient History - Smart Health</title>
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
								<div class="row uniform">
									<div class="12u$">
										<input type="hidden" id="hdnID"/>
										<?php
										$i=1;
										$qry="select * from sh_newvisitdetails where PatientID='".$_REQUEST["id"]."'"; 
										$run=mysqli_query($con,$qry);
										while($row=mysqli_fetch_array($run)){
										?>
										<label for="Visit" style="text-align:center"><font size="5%" face="verdana" color="black">Visit <?php echo $i;
										$i++;
										?></font></label>
										<label for="Symptom">Symptom</label>
										<input type="text" id="txtSymptom" placeholder="Symptom" value="<?php echo $row["Symptoms"] ?>" disabled /><br>
										<label for="My Understanding">My Understanding</label>
										<input type="text" id="txtMyUnderstanding" placeholder="My Understanding" value="<?php echo $row["MyUnderstanding"] ?>" disabled /><br>
										<label for="Rx Clinic" >Rx Clinic</label>
										<input type="text" id="txtRxClinic" placeholder="Rx Clinic Medicine" value="<?php echo $row["RxClinic"] ?>" disabled /><br>
										<label for="Rx Medicine">Rx Outside</label>
										<input type="text" id="txtRxOutside" placeholder="Rx Outside Medicine" value="<?php echo $row["RxOutside"] ?>" disabled /><br>
										<label for="Date">Date</label>
										<input type="text" id="txtDate" placeholder="Date" value="<?php echo $row["Date"] ?>" disabled /><br>
									<?php } ?>
									 </div>
									<div class="12u$">
										<ul class="actions">
											<li><a href="pgPatientDetails.php"><input type="submit" id="btnSubmit" value="Go Back"/></li></a>
										</ul>
									</div>
								</div>
							  </div>	
							</div>
						</div>
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
		</body>
	</html>