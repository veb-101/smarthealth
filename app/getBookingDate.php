<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();
	$result=array();
	$ID=0;
	$Date=$_REQUEST['date'];
	$Time=$_REQUEST['time'];
	$EmailID=$_REQUEST['emailid'];
	$action=$_REQUEST['action'];
	
	if($action=='view'){
	//$qry = "select Date from SHD_DocterAvailableDetail where ID='".$ID."' ";
	// echo $qry;
		//$resu = mysqli_query($con,$qry);
		//$rows= mysqli_fetch_array($resu);
	
	$qryz = "select ID,Name,MobileNo,Email from sh_patientdetails where Email='".$EmailID."' ";
	//echo $qryz;
		$resul = mysqli_query($con,$qryz);
		$row= mysqli_fetch_array($resul);
		$ID=$row["ID"];
			$sql = "SELECT ID,Date,Time FROM sh_datetimeslot where Date='".$Date."' and Time='".$Time."'";
			//echo $sql;
				$r = mysqli_query($con,$sql);
				//$res = mysqli_fetch_array($r);
				array_push($result,array( "name"=>$row['Name'],"mobileno"=>$row['MobileNo'],"date"=>$Date,"time"=>$Time));
		
				echo json_encode(array("response"=>$result));
				//echo json_encode($response);
				mysqli_close($con);
	}
	else if($action=='add') {
	$qryz = "select ID,Name,MobileNo,Email from sh_patientdetails where Email='".$EmailID."' ";
	//echo $qryz;
		$resul = mysqli_query($con,$qryz);
		$row= mysqli_fetch_array($resul);
		$ID=$row["ID"];
		
	$count = 0;
		$qry="select count(*) from sh_appointmentdetails where Date='".$Date."' and Time='".$Time."' and PatientID='".$ID."'";
		//echo $qry;
		$result = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($result);
		$count = $row[0];
		//echo $count;
		if ($count>=1){	
			$response["success"] = 2;
        	$response["message"] = "This Appoinment Is Already Booked!!";
			echo json_encode($response);
		}
		else{
	$qrys = "select ID,Name,MobileNo,Email from sh_patientdetails where Email='".$EmailID."'";
	//echo $qryz;
		$resu = mysqli_query($con,$qrys);
		$rowsl= mysqli_fetch_array($resu);
		//if (isset($_REQUEST['name']) && isset($_REQUEST['mobileno']) && isset($_REQUEST['date']) && isset($_REQUEST['time'])) {
				
				$qry="INSERT INTO sh_appointmentdetails (Name,PatientID,MobileNo,Date,Time) VALUES('".$rowsl['Name']."','".$rowsl['ID']."','".$rowsl['MobileNo']."','".$Date."','".$Time."')";
				//echo $qry;
	    $res = mysqli_query($con,$qry);
		if ($res) {
        	// successfully inserted into database
	        $response["success"] = 1;
        	$response["message"] = "Booked Appoinment Successfully !!";
 
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
	}	
}	
	else{
		$response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
	}
 ?>