<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();

		$qry= "update  sh_patientdetails set Name='".$_POST["name"]."',Address='".$_POST["address"]."',Age='".$_POST["age"]."',Gender='".$_POST["gender"]."',BloodGroup='".$_POST["bloodgroup"]."',MobileNo='".$_POST["mobileno"]."',Email='".$_POST["email"]."' where ID='".$_POST["id"]."'";
		//echo $qry;
	if(mysqli_query($con,$qry))	{
		echo "Success";
	}
		else{
			echo "Error";
		}
		
	
	
?>
