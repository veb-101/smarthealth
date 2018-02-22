
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Patient Details - Smart Health</title>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="pgAdminLogin.php">Admin</a></li>
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
										<label for="Name">Name</label>
										<input type="text" id="txtName" placeholder="Name"/><br>
										
										</div>
										<div class="4u$ 6u$">
										<label for="Gender">Gender</label>
										<input type="radio" name="rdnGender" id="male" value="Male" checked>
										<label for="male">Male</label>
										<input type="radio" name="rdnGender" id="female" value="Female" >
										<label for="female">Female<br><br>
										</div>
										
										<!--<label for="BloodGroup" id="Symptom">Symptom</label>
										<input type="text" id="txtSymptom" placeholder="Symptom"/><br>
										<label for="BloodGroup" id="MyUnderstanding">My Understanding</label>
										<input type="text" id="txtMyUnderstanding" placeholder="My Understanding"/><br>
										<label for="BloodGroup" id="RxClinic">Rx Clinic</label>
										<input type="text" id="txtRxClinic" placeholder="Rx Clinic"/><br>
										<label for="BloodGroup" id="RxMedicine">Rx Medicine</label>
										<input type="text" id="txtRxMedicine" placeholder="Rx Medicine"/><br>-->
									 </div>
									<div class="12u$">
										<label for="Qualification">Qualification</label>
										<input type="text" id="txtQualification" placeholder="Qualification"/><br>
										<label for="MobileNo">Mobile Number</label>
										<input type="text" id="txtMobileNo" placeholder="Mobile Number"/><br>
										<label for="Email">Email</label>
										<input type="text" id="txtEmail" placeholder="Email"/><br>
										<ul class="actions">
											<li><input type="submit" id="btnSubmit" value="Submit" onclick="addDetails();"/></li>
										</ul>
									</div>
								</div>
							  </div>	
							</div>
						</div>
					</section>

				<!-- Section -->
					

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
			
			var patt =/[^0-9]/;
			var pat1=/[0-9]/;
			
			function IsEmail(email) {
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				return regex.test(email);
			}
				
			function addDetails(){ 
				if($("#txtName").val()=="" || $("#txtName").val().match(pat1)){
					alert("Please Enter Valid Name");
				}
				else if($("#txtQualification").val()==""){
					alert("Please Enter Qualification");
				}
				else if($("#txtMobileNo").val()=="" || $("#txtMobileNo").val().length!=10 || $("#txtMobileNo").val().match(patt)){
					alert("Please Enter Valid Mobile Number");
				}
				else if($("#txtEmail").val()==""){
					alert("Please Enter Email ID");
				}
				else if(!IsEmail($("#txtEmail").val())){
						alert("Please Enter Valid Email ID");
				}
				
				
				else {
						$.ajax({
								type:"POST",
								url:"addDetails.php",
								data:{name:$("#txtName").val(),qualification:$("#txtQualification").val(),gender:$("input[name='rdnGender']:checked").val(),mobileno:$("#txtMobileNo").val(),email:$("#txtEmail").val(),},
								success:function(response){
								console.log(response);
								if($.trim(response)=="Success"){
										alert("Account Created.Login");
										$("#txtName").val("");
										$("#txtMobileNo").val("");
										$("#txtEmail").val("");
										$("#txtQualification").val("");
										$('input[name=rdnGender][value="Male"]').prop('checked', true);
										$(location).attr('href','pgAdminLogin.php');
										
								}
								else if(response=="Exists"){
									alert("Doctor Details Already Exists");
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