<?php
include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
// array for JSON response
$response = array();
 
// check for required fields
	if ((isset($_REQUEST['Name']) && isset($_REQUEST['EmailID']) && isset($_REQUEST['Address']) && isset($_REQUEST['MobileNo']) && isset($_REQUEST['Age']) && isset($_REQUEST['Gender'])&& isset($_REQUEST['Bloodgrp']) && isset($_REQUEST['Password']))) {
	
		$Name = $_REQUEST['Name'];
		//echo $Name;
		$MobileNo = $_REQUEST['MobileNo'];
		$EmailID = $_REQUEST['EmailID'];
		$Password = $_REQUEST['Password'];
		$Address = $_REQUEST['Address'];
		$Gender = $_REQUEST['Gender'];
		$Age = $_REQUEST['Age'];
		$BloodGroup = $_REQUEST['Bloodgrp'];
		
		
		
		$count = 0;
		$result = mysqli_query($con,"select count(*) from sh_patientdetails where Email='".$EmailID."' or MobileNo='".$MobileNo."'");
		//echo $result;
		$row = mysqli_fetch_array($result);
		$count = $row[0];
		//echo $count;
		if ($count==0){	

 //echo $sql;
 	   // mysql inserting a new row
	    $res = mysqli_query($con,"INSERT INTO sh_patientdetails (DoctorID,Name,Email,Address,MobileNo,Age,Gender,BloodGroup,Password) VALUES('NULL','".$Name."','".$EmailID."','".$Address."','".$MobileNo."','".$Age."','".$Gender."','".$BloodGroup."','".$Password."')");
		
 
 	   // check if row inserted or not
	    if ($res) {
        	// successfully inserted into database
	        $response["success"] = 1;
        	$response["message"] = "New Account Successfully !!";
 
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

		else{
		// User already exits
        	$response["success"] = 2;
        	$response["message"] = "Sorry !! Email ID or Mobile No already in use.";
 
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