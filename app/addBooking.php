<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();

	
	// array for JSON response
$response = array();
	
	if (isset($_REQUEST['emailid']) && isset($_REQUEST['date']) && isset($_REQUEST['time'])) {
	$ID=$_REQUEST['ID'];
	$Date=$_REQUEST['date'];
	$Time=$_REQUEST['time'];
	$EmailID=$_REQUEST['emailid'];
	
	$qryz = "select Name,MobileNo,EmailID from sh_patientdetails where Email='".$EmailID."' ";
	//echo $qryz;
		$resul = mysqli_query($con,$qryz);
		$row= mysqli_fetch_array($resul);
	
		
		
 
	$qry="INSERT INTO SHC_BookingDetail (Name,MobileNo,Date,Time,PatientID) VALUES('".$row['Name']."','".$row['MobileNo']."','".$Date."','".$Time."','".$ID."'";
	 $res = mysqli_query($con,$qry);
		echo $qry;
		 if ($res) {
 	   // check if row inserted or not
	   $response["success"] = 1;
	   
        	$response["message"] = "Booked Appoinmet Successfully !!";
 
        	// echoing JSON response
        	echo json_encode($response);
    	
		}
	
		else {
        	// failed to insert row
        	$response["success"] = 0;
        	$response["message"] = "Oops! An error occurred.";
 
        	// echoing JSON response
        	echo json_encode($response);
    		}
	}
	else {
			// required field is missing
			$response["success"] = 0;
			$response["message"] = "Required field(s) is missing.";
 
			// echoing JSON response
			echo json_encode($response);
		}	
	
 ?>