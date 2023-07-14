<?php
session_start();	
include "./connect_db.inc.php";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "Cannot connect to the database" );
		exit;
	}
//$lab_result_id = $_POST['lab_result_id'];
$patient_id = $_SESSION['uhid'];
$pulse_rate= $_POST['pulse_rate'];
$date = $_POST['date'];




$sql = "insert into pulse_rate(patient_id,pulse_rate,date) values('$patient_id','$pulse_rate','$date')";
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
