<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();
$Email=$_REQUEST['emailid'];
//echo $Date;
  $qry = "select ID from sh_patientdetails where Email='".$Email."' ";
	// echo $qry;
		$resu = mysqli_query($con,$qry);
		$rows= mysqli_fetch_array($resu); 

$sql = "SELECT ID,Date FROM sh_newvisitdetails where PatientID='".$rows['ID']."'";
//echo $sql;
 $r = mysqli_query($con,$sql);
 $result = array();
 while($res = mysqli_fetch_array($r)){
	 
 array_push($result,array("date"=>$res['Date'] ,"id"=>$res['ID']));
 
 }
 echo json_encode(array("response"=>$result));
 
 mysqli_close($con);
?>