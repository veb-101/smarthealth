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
										<label for="Name">Name</label>
										<input type="text" id="txtName" placeholder="Name"/><br>
										<label for="Address">Address</label>
										<textarea id="txtAddress" placeholder="Address"></textarea><br>
										<label for="MobileNo">Mobile Number</label>
										<input type="text" id="txtMobileNo" placeholder="Mobile Number"/><br>
										<label for="Email">Email</label>
										<input type="text" id="txtEmail" placeholder="Email"/>
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
										<label for="Age">Age</label>
										<input type="text" id="txtAge" placeholder="Age"/><br>
										<label for="BloodGroup">Blood Group</label>
										<input type="text" id="txtBloodGroup" placeholder="Blood Group"/><br>
										<ul class="actions">
										    	
			                                  	 &nbsp;
										    	<a href="#main" class="button big scrolly "><input type="submit" id="btnSubmit" value="Submit" onclick="addPatientDetails();" "/>
										    	<a> &nbsp;</a>
										    	 
										    		<a href="#bottom" class="button big scrolly "><input type="submit" id="btnDown" value="Go to table" />
										    	 &nbsp;
										    	<div id="btnSubmit"></div></a>
										    		<div id="btnDown"></div>
										    	</a>
										    	
										    	
										    	
											<li></li>
										</ul>
									</div>
								</div>
							  </div>	
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
						    <div id="bottom">
						    
							<header class="align-center">
								<h2>Patient Details</h2>
							</header>
							<div class="flex flex-3">
								<div class="table-wrapper">
								<table  id="tablePatientDetails">
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
					/* $("#txtSymptom").hide();
					$("#txtMyUnderstanding").hide();
					$("#txtRxClinic").hide();
					$("#txtRxMedicine").hide();
					$("#Symptom").hide();
					$("#MyUnderstanding").hide();
					$("#RxClinic").hide();
					$("#RxMedicine").hide(); */
			}); 
			/* function checkVisit(){
				if($("#selVisit").val()=='Yes'){	
					$("#txtSymptom").show();
					$("#txtMyUnderstanding").show();
					$("#txtRxClinic").show();
					$("#txtRxMedicine").show();
					$("#Symptom").show();
					$("#MyUnderstanding").show();
					$("#RxClinic").show();
					$("#RxMedicine").show();
				}	
				else{ 
					$("#txtSymptom").hide();
					$("#txtMyUnderstanding").hide();
					$("#txtRxClinic").hide();
					$("#txtRxMedicine").hide();
				}
			} */
			var patt =/[^0-9]/;
			var pat1=/[0-9]/;
			
			function IsEmail(email) {
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				return regex.test(email);
			}
				
			function addPatientDetails(){ 
				if($("#txtName").val()=="" || $("#txtName").val().match(pat1)){
					alert("Please Enter Valid Name");
				}
				else if($("#txtAddress").val()==""){
					alert("Please Enter Valid Address");
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
				else if (!$("input[name='rdnGender']:checked").val()){
				alert("select gender");
				}
				else if($("#txtAge").val()==""){
					alert("Please Enter Age");
				}
				else if ($("#txtBloodGroup").val()==""){
				alert("Please Enter Blood Group");
				}
				else if($("#btnSubmit").val()=="Submit"){
						$.ajax({
								type:"POST",
								url:"addPatientDetails.php",
								data:{name:$("#txtName").val(),address:$("#txtAddress").val(),age:$("#txtAge").val(),gender:$("input[name='rdnGender']:checked").val(),mobileno:$("#txtMobileNo").val(),email:$("#txtEmail").val(),bloodgroup:$("#txtBloodGroup").val()},
								success:function(response){
								console.log(response);
								if($.trim(response)=="Success"){
										alert("Patient Details Saved Successfully");
										$("#txtName").val("");
										$("#txtAddress").val("");
										$("#txtAge").val("");
										$("#txtMobileNo").val("");
										$("#txtEmail").val("");
										$("#txtBloodGroup").val("");
										$('input[name=rdnGender][value="Male"]').prop('checked', true);
										showdetails(); 
								}
								else if(response=="Exists"){
									alert("Patient Details Already Exist");
								}
								else{
									alert("Invalid details");
								}
								}
						});
					}	
					
				else{
					$.ajax({
					type:"POST",
					url:"updatePatientDetails.php",
					data:{id:$("#hdnID").val(),name:$("#txtName").val(),address:$("#txtAddress").val(),age:$("#txtAge").val(),gender:$("input[name='rdnGender']:checked").val(),mobileno:$("#txtMobileNo").val(),email:$("#txtEmail").val(),bloodgroup:$("#txtBloodGroup").val()},
					success:function(response){
					console.log(response);
							if($.trim(response)=="Success"){
									alert("Patient Details are Updated");
									$("#btnSubmit").val("Submit");
									$("#txtName").val("");
									$("#txtAddress").val("");
									$("#txtAge").val("");
									$("#txtMobileNo").val("");
									$("#txtEmail").val("");
									$("#txtBloodGroup").val("");
									$('input[name=rdnGender][value="Male"]').prop('checked', true);
									showdetails(); 
							}
							else{
								alert("Invalid details");
							}
						}
					});
				}
			}

			function edit(id){
				$("#hdnID").val(id);
				$("#txtName").val($("#Name"+id).html());
				$("#txtAddress").val($("#Address"+id).html());
				$("#txtAge").val($("#Age"+id).html());
				$("input[name=rdnGender][value=" + $("#Gender"+id).html() + "]").attr('checked', 'checked');
				$("#txtMobileNo").val($("#MobileNo"+id).html());
				$("#txtEmail").val($("#Email"+id).html());
				$("#txtBloodGroup").val($("#BloodGroup"+id).html());
				$("#btnSubmit").val("Edit");
			}
			
			function deleted(id){
				var ans= confirm("Are you sure you want to delete this Record");
				if(ans==true)
				{
				$.ajax({
					type:"POST",
					url:"deletePatientDetails.php",
					data:{id:id},
					success:function(response){
						if(response=="Success"){
							alert("Record Deleted");
							showdetails();
							$("#txtName").val("");
							$("#txtAddress").val("");
							$("#txtAge").val("");
							$("#txtMobileNo").val("");
							$("#txtEmail").val("");
							$("#txtBloodGroup").val("");
							$('input[name=rdnGender][value="Male"]').prop('checked', true);
						}
						else{
							alert("Record not Deleted");
							$("#txtName").val("");
							$("#txtAddress").val("");
							$("#txtAge").val("");
							$("#txtMobileNo").val("");
							$("#txtEmail").val("");
							$("#txtBloodGroup").val("");
							$('input[name=rdnGender][value="Male"]').prop('checked', true);
							}
						}
					});
				}
			}
					
			function showdetails(){
				$.ajax({
						type:"POST",
						url:"getPatientDetails.php",
						data:{},
						success:function(response)
						{
							$("#tablePatientDetails").html(response);
						}
					});
				} 
		</script>		
	</body>
</html>