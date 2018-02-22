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
		<title>New Visit - Smart Health</title>
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
										<label for="Symptom">Symptom</label>
										<input type="text" id="txtSymptom" placeholder="Symptom"/><br>
										<label for="My Understanding">My Understanding</label>
										<input type="text" id="txtMyUnderstanding" placeholder="My Understanding"/><br>
										<label for="Rx Clinic" >Rx Clinic</label>
										<input type="text" id="txtRxClinic" placeholder="Rx Clinic Medicine"/><br>
										<label for="Rx Medicine">Rx Outside</label>
										<input type="text" id="txtRxOutside" placeholder="Rx Outside Medicine"/><br>
									 </div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" id="btnSubmit" value="Submit" onclick="addNewVisitDetails();"/></li>
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
			
			var pat1=/[0-9]/;
			function getUrlVars(){
				var vars = [], hash;
				var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
				for(var i = 0; i < hashes.length; i++)
				{
					hash = hashes[i].split('=');
					vars.push(hash[0]);
					vars[hash[0]] = hash[1];
				}
				return vars;
			}
			
			function addNewVisitDetails(){ 
				if($("#txtSymptom").val()=="" || $("#txtSymptom").val().match(pat1)){
					alert("Please Enter Symptoms");
				}
				else if($("#txtMyUnderstanding").val()=="" || $("#txtMyUnderstanding").val().match(pat1)){
					alert("Please Enter Your Understanding About Symptoms");
				}
				else if($("#txtRxClinic").val()==""){
					alert("Please Enter Rx Clinic Medicine");
				}
				else if($("#txtRxOutside").val()==""){
					alert("Please Enter Rx Outside Medicine");
				}
				else {
					var id = getUrlVars()["id"];
						$.ajax({
								type:"POST",
								url:"addNewVisitDetails.php",
								data:{id:id,symptoms:$("#txtSymptom").val(),myunderstanding:$("#txtMyUnderstanding").val(),rxclinic:$("#txtRxClinic").val(),rxoutside:$("#txtRxOutside").val()},
								success:function(response){
								console.log(response);
								if($.trim(response)=="Success"){
										alert("Patient New Visit Details Have Been Saved Successfully");
										$("#txtSymptom").val("");
										$("#txtMyUnderstanding").val("");
										$("#txtRxClinic").val("");
										$("#txtRxOutside").val("");
										$(location).attr('href','pgPatientDetails.php');
								}
								else if(response=="Exist"){
									alert("Already Exist");
								}
								else{
									alert("Invalid details");
								}
								}
						});
					}	
				}

			</script>		
	</body>
</html>