<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();

	$qry="select * from sh_datetimeslot"; 
	//echo $qry;
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>ID</th><th>Date</th><th>Time</th><th>Remove</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		$table.="<tr>";
		
		$table.="<td>".$i."</td>";
		$table.="<td id='Date".$row["ID"]."'>".$row["Date"]."</td>";
		$table.="<td id='Time".$row["ID"]."'>".$row["Time"]."</td>";
		//$table.="<td id='EndTime".$row["ID"]."'>".$row["EndTime"]."</td>";
		$table.="<td><a href='javascript:void(0)' onclick='deleted(".$row["ID"].")'>Remove</a></td>";
		$table.="</tr>";
		$i++;
	}
	$table.="</tbody>";
	echo $table;
	?>