<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();
$Date=$_REQUEST['Date'];
//echo $Date;
$qry = "select Date from sh_datetimeslot where Date='".$Date."' ";
	// echo $qry;
		$resu = mysqli_query($con,$qry);
		$rows= mysqli_fetch_array($resu);

$sql = "SELECT ID,Time FROM sh_datetimeslot where Date='".$Date."' ";
//echo $sql;
 $r = mysqli_query($con,$sql);
 $result = array();
 while($res = mysqli_fetch_array($r)){
	 
 array_push($result,array("time"=>$res['Time'] ,"id"=>$res['ID']));
 
 }
 echo json_encode(array("response"=>$result));
 
 mysqli_close($con);
?>