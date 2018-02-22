<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();

$EmailID=$_REQUEST['emailid'];
$Message=$_REQUEST['msg'];

$qryz = "select ID,DoctorID,Name,MobileNo,Email from sh_patientdetails where Email='".$EmailID."' ";
	//echo $qryz;
		$resul = mysqli_query($con,$qryz);
		$rown= mysqli_fetch_array($resul);
		
		$qry="INSERT INTO SHC_Doctor_Msg (Message,Reply,PatientID,DoctorID,CreatedDate) VALUES('".$Message."','','".$rown['ID']."','".$rown['DoctorID']."','')";
				//echo $qry;
				$res = mysqli_query($con,$qry);
		
		// check if row inserted or not
	    if ($res) {
        	// successfully inserted into database
	        $response["success"] = 1;
        	$response["message"] = "Message Send Successfully !!";
 
        	// echoing JSON response
        	echo json_encode($response);
			
    	} 
		else {
        	// failed to insert row
        	$response["success"] = 0;
        	$response["message"] = "Oops! An error occurred.";
 
        	// echoing JSON response
        	//echo json_encode($response);
    		}
	
/* 	}
	
	else {
        	// failed to insert row
        	$response["success"] = 0;
        	$response["message"] = "Oops! An error occurred.";
 
        	// echoing JSON response
        	//echo json_encode($response);
    		} */
?>