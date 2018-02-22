<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();

	$qry="select * from SHC_Doctor_Msg"; 
	//echo $qry;
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>ID</th><th>Patient Name</th><th>Message</th><th style='width:130px'>Sent Messages</th><th>Reply</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		$table.="<tr>";
		$query="Select * from sh_patientdetails where ID=".$row["PatientID"];
		$result=mysqli_query($con,$query);
		$data=mysqli_fetch_array($result);
		$table.="<td>".$i."</td>";
		$table.="<td><label id='Name".$row["ID"]."' style='display:none;'>".$row["PatientID"]."</label>".$data["Name"]."</td>";
		$table.="<td style='width:13px' id='Message".$row["ID"]."'>".$row["Message"]."</td>";
		$table.="<td style='width=13px' id='Reply".$row["ID"]."'>".$row["Reply"]."</td>";
		if($row["Reply"]=="")
		$table.="<td><a href='javascript:void(0)' onclick='reply(".$row["ID"].")'>Reply</a></td>";
		else
		$table.="<td><a href='#'>Replied</a></td>";	
		$table.="</tr>";
		$i++;
	}
	$table.="</tbody>";
	echo $table;
	?>