<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login - Smart Health</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Smart Health</a></div>
				<!--<a href="#menu">Menu</a>-->
			</header>

		<!-- Nav -->
		<!--	<nav id="menu">-->
		<!--		<ul class="links">-->
		<!--			<li><a href="index.php">Home</a></li>-->
		<!--			<li><a href="pgAdminLogin.php">Admin</a></li>-->
		<!--		</ul>-->
		<!--	</nav>-->

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Smart Health</h1>
					</header>
					<a href="#main" class="button big scrolly">Click for Login</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									
									<div class="col col3">
									<input type="text" class="form-control" id="txtUsername" placeholder="Username"/><br>
									<input type="password" class="form-control"  id="txtPassword" placeholder="Password"/><br>
									<input type="submit" id="btnSubmit" class="form-control" value="Submit" onclick="checklogin();"/><br><br>
									<!--<a href="pgNewDoctorRegistration.php" style="color:#0000FF">Create Account</a>-->
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
			function checklogin(){ 
				if($("#txtUsername").val()==""){
					alert("Please Enter Valid Name");
				}
				else if($("#txtPassword").val()==""){
					alert("Please Enter Valid Password");
				}
				else{
					$.ajax({
						type:"POST",
						url:"adminlogincheck.php",
						data:{username:$("#txtUsername").val(),password:$("#txtPassword").val()},
						success:function(response){
							//console.log(response);
							if($.trim(response)=="Success"){
							alert('Login Successful');	
							$("#txtUsername").val("");
							$("#txtPassword").val("");
							$(location).attr('href','pgAdminHome.php');
							}
							else{
								alert("Invalid Username / Password");
								$("#txtUsername").val("");
								$("#txtPassword").val("");
							}
						}
					});
				}
			}
			</script>
	</body>
</html>