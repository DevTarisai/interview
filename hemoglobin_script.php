<?php
session_start();	
include "./connect_db.inc.php";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "Cannot connect to the database." );
		exit;
	}
//$lab_result_id = $_POST['lab_result_id'];
$patient_id = $_POST['patient_id'];
$hemoglobin = $_POST['hemoglobin'];
$date = $_POST['date'];




$sql = "insert into hemoglobin(patient_id,hemoglobin,date) values('$patient_id','$hemoglobin','$date')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	
	header("location:homepage.php");
}


?>
