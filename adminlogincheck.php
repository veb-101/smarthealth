<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	   
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$qry = "SELECT count(*) FROM sh_admin WHERE username ='".$username."' and password = '".$password."'";
	//echo $qry;
	$result = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($result);
		
		if($row[0] == 1){
			$query = "SELECT * FROM sh_admin WHERE username ='".$username."' and password = '".$password."'";
			//echo $query;
			$res = mysqli_query($con,$query);
			$data = mysqli_fetch_array($res);
			$_SESSION["username"]=$data["Username"];
			$_SESSION["id"]=$data["ID"];
			echo "Success";
		} 
		else{
			echo "Error";
		}
?>