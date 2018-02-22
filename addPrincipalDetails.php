<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();

		$qry="insert into  SCM_Principal(Name,Address,DOB,Gender,MobileNo,Email,Password) values('".$_POST["name"]."','".$_POST["address"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["mobileno"]."','".$_POST["email"]."','".$_POST["mobileno"]."')";
	  // echo $qry;
		if(mysqli_query($con,$qry))	{
			echo "Success";
		}
		else{
			echo "Error";
		}
	

?>