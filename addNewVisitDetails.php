<?php
	session_start();
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
		$date=date('Y-m-d');
		$qry="insert into  sh_newvisitdetails(DoctorID,PatientID,Symptoms,MyUnderstanding,RxClinic,RxOutside,Date) values('".$_SESSION["id"]."','".$_POST["id"]."','".$_POST["symptoms"]."','".$_POST["myunderstanding"]."','".$_POST["rxclinic"]."','".$_POST["rxoutside"]."','".$date."')";
			//echo $qry;
			if(mysqli_query($con,$qry))	{
				echo "Success";
			}
			else{
				echo "Error";
			}	
?>