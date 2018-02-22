<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();
	$result=array();
	
	$EmailID=$_REQUEST['emailid'];
	$ID=$_REQUEST['id'];
	
	
	$qryz = "select ID,Name,MobileNo,Email from sh_patientdetails where Email='".$EmailID."' ";
	//echo $qryz;
		$resul = mysqli_query($con,$qryz);
		$row= mysqli_fetch_array($resul);
		//$ID=$row["ID"];
		
		$qryd="SELECT Username FROM  sh_admin";
		$resd = mysqli_query($con,$qryd);
		$rowd= mysqli_fetch_array($resd);
		
			$sql = "SELECT ID,Message,Reply,CreatedDate,DoctorID FROM SHC_Doctor_Msg where ID='".$ID."' ";
			//echo $sql;
				$rowl = mysqli_query($con,$sql);
		$res = mysqli_fetch_array($rowl);
				array_push($result,array( "qtns"=>$res['Message'],"ans"=>$res['Reply'],"date"=>$res['CreatedDate'],"doctorname"=>$rowd["Username"]));
		
				echo json_encode(array("response"=>$result));
				//echo json_encode($response);
				mysqli_close($con);
	
	
 ?>