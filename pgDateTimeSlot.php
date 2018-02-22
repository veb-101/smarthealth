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
		<title>Date/Time Slot - Smart Health</title>
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
		<center> 
			<div id="main" class="align-center">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner" align="center">
							<div class="flex flex-2">
							  <div class="row uniform">
											<div class="12u$" align="center" >
													<label for="Date">Date</label>
													<input type="date"  id="txtDate" value=""  style="background:#ECECEC;border-color:#ECECEC;height:2.75em;border-radius:4px;width:100%;" align="center" />
													<br><br>
													<label>Time</label>
												</div>
												<div class="6u 12u$(xsmall)" align="center">
													<input type="time" id="txtFrom" placeholder="From" style="background:#ECECEC;border-color:#ECECEC;height:2.75em;border-radius:4px;width:100%;" />
												</div>
												<div class="6u$ 12u$(xsmall)">
													<input type="time" id="txtTo" placeholder="To" style="background:#ECECEC;border-color:#ECECEC;height:2.75em;border-radius:4px;width:100%;" />
												</div>
												<!-- Break -->
												
									<div class="12u$" align="center">
										<ul class="actions">
											<li>	<a href="#bottom" class="button big scrolly "><input type="submit" id="btnSubmit" value="Submit" onclick="addDateTimeSlot();"/></a></li>
										</ul>
							 </div>	
							 </div>
							</div>
						</div>
					</section>
					<section class="wrapper style1">
						<div class="inner">
						    <div id="bottom">
							<header class="align-center">
								<h2>Date/Time Slot</h2>
							</header>
							<div class="flex flex-3" align="center">
								<div class="table-wrapper" align="center">
								<table  id="tableDateTimeSlot">
								</table>	
								</div>
								</div>
							</div>
						</div>
					</section>
				</div>
</center>
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
			$(document).ready(function(){
				showdetails();
			}); 
			
				function showdetails(){
					$.ajax({
							type:"POST",
							url:"getDateTimeSlot.php",
							data:{},
							success:function(response)
							{
								//console.log(response);
								$("#tableDateTimeSlot").html(response);
							}
						});
				} 
				
				function addDateTimeSlot(){ 
			
					if($("#txtDate").val()==""){
						alert("Please Enter Date");
					}
					else if($("#txtFrom").val()==""){
						alert("Please Enter Time From");
					}
					else if($("#txtTo").val()==""){
						alert("Please Enter Time To");
					}	
					else {
						$.ajax({
						type:"POST",
						url:"adddatetimeslot.php",
						data:{date:$("#txtDate").val(),startinterval:$("#txtFrom").val(),endinterval:$("#txtTo").val()},
						success:function(response){
						console.log(response);
						alert("Your Time Slot Has Been Saved");
							$("#txtDate").val("");
							$("#txtFrom").val("");
							$("#txtTo").val("");
							showdetails();
						}
					});
					}
				}
				
				function deleted(id){
				var ans= confirm("Are you sure you want to delete this Record");
				if(ans==true)
				{
				$.ajax({
					type:"POST",
					url:"deleteDateTimeSlot.php",
					data:{id:id},
					success:function(response){
						if(response=="Success"){
							alert("Record Deleted");
							showdetails();
							$("#txtDate").val("");
							$("#txtFrom").val("");
							$("#txtTo").val("");
						}
						else{
							alert("Record not Deleted");
							$("#txtDate").val("");
							$("#txtFrom").val("");
							$("#txtTo").val("");
							}
						}
					});
				}
			}
			
		</script>		
	</body>
</html>