<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$customer_code = $_POST['customer_code'];
$region = $_POST['region'];
$county = $_POST['county'];
$district = $_POST['district'];
$hospital_name = $_POST['hospital_name'];
$mfl_code = $_POST['mfl_code'];


$rec = "insert into hospitals values('','$customer_code','$hospital_name','$mfl_code','$District','$County','$Region')";

if(mysql_query($rec)){
header('Refresh: 2; url=hospitals.php');
	echo "<center></h1>Data inserted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds</h6></center>"."<br />";
	
}
else{
	die("Data failed to insert in the database");
}
?>
