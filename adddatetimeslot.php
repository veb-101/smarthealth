<?php
	session_start();
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
	$date=$_POST["date"];
	$start =$_POST["startinterval"];
	$end = $_POST["endinterval"];
	$time = strtotime($start);
	$timeStop = strtotime($end);

while($time<$timeStop) {
    $starttime=date('H:i', $time);
	//echo $abc;
    $time = strtotime('+30 minutes', $time);
   // echo ' - ' ;
	$endtime=date('H:i', $time);
	//echo $abcd;
	//echo "<br>";
	$qry="insert into sh_datetimeslot (Date,Time) values('".$date."','".$starttime."-".$endtime."')";
	echo $qry;
	$res=mysqli_query($con,$qry);
} 

?>
