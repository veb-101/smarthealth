<?php
include_once 'db_connect.php';
$db=new DB_Connect();
$con=$db->connect();
$disease=$_REQUEST['disease'];

$sql = "select Disease from sh_Disease  where Symptoms Like '%".$disease."%' ";	
 $r = mysqli_query($con,$sql);
 $result = array();
 while($res = mysqli_fetch_array($r)){
	 
 array_push($result,array("disease"=>$res["Disease"]));
/*  } */
  } 
 echo json_encode(array("response"=>$result));
 
 mysqli_close($con);
?>