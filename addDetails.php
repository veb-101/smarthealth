<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
		
		$query="select * from sh_admin where Username='".$_POST["email"]."' and Mobile='".$_POST["mobileno"]."'";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		
		if($row[0]==0){	
			$qry="insert into  sh_admin(Name,Qualification,Gender,Mobile,Username,Password) values('".$_POST["name"]."','".$_POST["qualification"]."','".$_POST["gender"]."','".$_POST["mobileno"]."','".$_POST["email"]."','".$_POST["mobileno"]."')";
			// echo $qry;
			if(mysqli_query($con,$qry))	{
				echo "Success";
			}
			else{
				echo "Error";
			}	
		}
		else{
			echo "Exists";
		}
?>