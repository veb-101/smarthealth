<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	   
	$username=$_SESSION["username"];
	$oldpassword=$_POST["oldpassword"];
	$newpassword=$_POST["newpassword"];
		
	$qry = "SELECT count(*) FROM sh_admin WHERE  Username='".$username."' and Password = '".$oldpassword."'";
	$result = mysqli_query($con,$qry);
    $row = mysqli_fetch_array($result);
	
	if($row[0]==1)
	{
		$fqry="update sh_admin set Password='".$newpassword."' where Username='".$_SESSION["username"]."'";
			
			if(mysqli_query($con,$fqry)){
				echo "Success";
			}
			else{
				echo "Error";
			}
	}
	else{
		echo "Invalid";
	}	
?>
	