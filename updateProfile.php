<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();

		$qry= "update  SCM_Principal set Name='".$_POST["name"]."',Address='".$_POST["address"]."',DOB='".$_POST["dob"]."',Gender='".$_POST["gender"]."',MobileNo='".$_POST["mobileno"]."',Email='".$_POST["email"]."' where ID='".$_SESSION["id"]."'";
		//echo $qry;
	if(mysqli_query($con,$qry))	{
		echo "Success";
	}
		else{
			echo "Error";
		}
		
	
	
?>
