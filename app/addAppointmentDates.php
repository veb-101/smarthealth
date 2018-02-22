<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();


$sql = "SELECT DISTINCT Date FROM sh_datetimeslot order by ID";
//echo $sql;
 $r = mysqli_query($con,$sql);
 $result = array();
 while($res = mysqli_fetch_array($r)){
	 
 array_push($result,array( "date"=>$res['Date'] ,"id"=>$res['ID']));
 
 }
 echo json_encode(array("response"=>$result));
 
 mysqli_close($con);
?>