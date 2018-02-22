<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();

	$qry="select * from sh_patientdetails"; 
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>ID</th><th>Name</th><th>Address</th><th>Age</th><th>Gender</th><th>Mobile</th><th>Email</th><th>Blood Group</th><th>Edit</th><th>Delete</th><th>New Visit</th><th>View History</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		$table.="<tr>";
		
		$table.="<td>".$i."</td>";
		$table.="<td id='Name".$row["ID"]."'>".$row["Name"]."</td>";
		$table.="<td id='Address".$row["ID"]."'>".$row["Address"]."</td>";
		$table.="<td id='Age".$row["ID"]."'>".$row["Age"]."</td>";
		$table.="<td id='Gender".$row["ID"]."'>".$row["Gender"]."</td>";
		$table.="<td id='MobileNo".$row["ID"]."'>".$row["MobileNo"]."</td>";
		$table.="<td id='Email".$row["ID"]."'>".$row["Email"]."</td>";
		$table.="<td id='BloodGroup".$row["ID"]."'>".$row["BloodGroup"]."</td>";
		$table.="<td><a href='javascript:void(0)' onclick='edit(".$row["ID"].")'>Edit</a></td>";
		$table.="<td><a href='javascript:void(0)' onclick='deleted(".$row["ID"].")'>Delete</a></td>";
		$table.="<td><a href='pgNewVisitDetails.php?id=".$row["ID"]."'>Add Details</a></td>";
		$table.="<td><a href='pgPatientHistory.php?id=".$row["ID"]."'>View</a></td>";
		$table.="</tr>";
		$i++;
	}
	$table.="</tbody>";
	echo $table;
	?>