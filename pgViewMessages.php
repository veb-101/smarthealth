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
		<title>View Messages - Smart Health</title>
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
								<div class="row uniform">
									<div class="12u$">
									<input type="hidden"  id="hdnID"/>
											<label id="lmsg">Message Received</label>
											<textarea  id="txtMsg" style="resize:none" ></textarea>
											<label id="lreply">Reply</label>
											<input type="text"  id="txtReply"/>
											<br>
									</div>
									<div class="12u$">
									<ul class="actions">
											<li><input type="submit" id="btnReply" value="Reply" onclick="replymsg();"/></li>
										</ul>
									</div>	
								</div>
							</div>
						</div>
					</section>
					
					<section class="wrapper">
						<div class="inner">
							<div class="row uniform">
										<div class="flex flex-3">
										<div class="table-wrapper">
										<table  id="tableMessages" width="10%" >
										</table>		
										</div>
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
			$(document).ready(function(){
				showdetails();
				$("#btnReply").hide();
			$("#txtMsg").hide();
			$("#txtReply").hide();
			$("#lmsg").hide();
			$("#lreply").hide();
			});
			
			function replymsg(){
				$.ajax({
					type:"POST",
					url:"reply.php",
					data:{id:$("#hdnID").val(),rmsg:$("#txtReply").val()},
					success:function(response){
						console.log(response);
						if(response=="Success"){
							alert("Message Sent");
							showdetails();
							}
						else{
							alert("Message Sending Failed");
							}
						}
					});
				}
			
			function reply(id){
			$("#btnReply").show();
			$("#txtMsg").show();
			$("#txtReply").show();
			$("#lmsg").show();
			$("#lreply").show();
			$("#hdnID").val(id);
			//$("#txtName").val($("#name"+id).html());
			$("#txtMsg").val($("#Message"+id).html());
		}
			
			function showdetails(){
				$.ajax({
						type:"POST",
						url:"getMessages.php",
						data:{date:$("#txtDate").val()},
						success:function(response)
						{
							$("#tableMessages").html(response);
						}
					});
				}
			</script>
		</body>
	</html>