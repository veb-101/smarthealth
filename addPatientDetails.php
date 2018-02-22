<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
		
		$query="select * from sh_patientdetails where Name='".$_POST["name"]."' and MobileNo='".$_POST["mobileno"]."'";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		
		if($row[0]==0){	
			$qry="insert into  sh_patientdetails(Name,Address,Age,Gender,MobileNo,Email,BloodGroup,Password) values('".$_POST["name"]."','".$_POST["address"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["mobileno"]."','".$_POST["email"]."','".$_POST["bloodgroup"]."','".$_POST["mobileno"]."')";
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