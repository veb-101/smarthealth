<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();

$EmailID=$_REQUEST['emailid'];


		$qryz = "select ID from sh_patientdetails where Email='".$EmailID."'  ";
			//echo $qryz;
				$resul = mysqli_query($con,$qryz);
				$rowi= mysqli_fetch_array($resul);
		
		$sql = "SELECT Name,MobileNo,Date,Time FROM sh_appointmentdetails Where PatientID='".$rowi["ID"]."'";
		//echo $sql;
			 $r = mysqli_query($con,$sql);
			 $result = array();
		while($res = mysqli_fetch_array($r)){
	 
			array_push($result,array( "name"=>$res['Name'] ,"number"=>$res['MobileNo'],"date"=>$res['Date'],"time"=>$res['Time']));
 
		}
		echo json_encode(array("response"=>$result));
 
		mysqli_close($con);
?>