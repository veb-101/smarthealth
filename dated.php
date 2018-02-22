<?php
include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
	
	$sql="INSERT INTO sh_timedemo (time) VALUES ";
$start = strtotime("8:00");
$mins = range(0,7200,1800); //Measuredin seconds.
foreach($mins AS $min) {
 $time = date('H:i',$start+$min);
// $sql .="('" . $time . "'),";
// echo $time;
	
	
	$timeto = date('H:i',$start+$min);
	$ab=$time;
 echo $ab;
  echo '<br>';
 echo '<br>';
 $a=$timeto;
 echo $a;
  echo '<br>';
  
 /*  $abc=$time.','.$timeto;
  echo '<br>'; */
	//$sql .="('" . $time . "','" . $timeto . "'),";
echo $abc;
}
$sql = rtrim($sql, ','); 
$res=mysqli_query($con,$sql);
//echo $sql;
?>
