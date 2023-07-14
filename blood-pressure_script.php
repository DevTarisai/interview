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
$patient_id = $_SESSION['uhid'];
$blood_pressure = $_POST['blood_pressure'];
$date = $_POST['date'];




$sql = "insert into blood_pressure(patient_id,blood_pressure,date) values('$patient_id','$blood_pressure','$date')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	
	header("location:index1.php");

}


?>
