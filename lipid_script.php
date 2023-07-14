<?php
session_start();	
include "./connect_db.inc.php";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "Cannot connect to the database" );
		exit;
	}

$patient_id = $_SESSION['uhid'];
$lgl = $_POST['lgl'];
$vgl = $_POST['vgl'];
$htl = $_POST['htl'];
$total_cholesterol = $_POST['total_cholesterol'];
$date = $_POST['date'];




$sql = "insert into lipid(patient_id,lgl,vgl,htl,total_cholesterol,date) values('$patient_id','$lgl','$vgl','$htl','$total_cholesterol','$date')";
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
