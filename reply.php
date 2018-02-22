<?php
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
		$curr_timestamp = date('Y-m-d H:i:s');
		$qry= "update  SHC_Doctor_Msg set Reply='".$_POST["rmsg"]."',CreatedDate='".$curr_timestamp."' where ID='".$_POST["id"]."'";
		//echo $qry;
	if(mysqli_query($con,$qry))	{
		echo "Success";
	}
		else{
			echo "Error";
		}
		
	
	
?>
