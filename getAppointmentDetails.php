<?php
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();

	$qry="select * from sh_appointmentdetails where Date='".$_POST["date"]."'"; 
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>ID</th><th>Patient Name</th><th>Mobile</th><th>Date</th><th>Time Slot</th><th>Remove</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		$table.="<tr>";
		$query="Select * from sh_patientdetails where ID=".$row["PatientID"];
		$result=mysqli_query($con,$query);
		$data=mysqli_fetch_array($result);
		$table.="<td>".$i."</td>";
		$table.="<td><label id='Name".$row["ID"]."' style='display:none;'>".$row["PatientID"]."</label>".$data["Name"]."</td>";
		$table.="<td id='MobileNo".$row["ID"]."'>".$row["MobileNo"]."</td>";
		$table.="<td id='Date".$row["ID"]."'>".$row["Date"]."</td>";
		$table.="<td id='Time".$row["ID"]."'>".$row["Time"]."</td>";
		$table.="<td><a href='javascript:void(0)' onclick='deleted(".$row["ID"].")'>Remove</a></td>";
		$table.="</tr>";
		$i++;
	}
	$table.="</tbody>";
	echo $table;
	?>