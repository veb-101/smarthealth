<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();

	$qry="delete from sh_patientdetails where ID=".$_POST["id"];

	if(mysqli_query($con,$qry)){
	
		echo "Success";
	}
	else{
		echo "Error";
	}


?>