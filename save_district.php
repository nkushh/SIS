<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$district_code = $_POST['district_code'];
$district_name = $_POST['district_name'];

$rec = "insert into districts values('','$district_code','$district_name')";

if(mysql_query($rec)){
header('Refresh: 2; url=districts.php');
	echo "<center></h1>Data inserted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds</h6></center>"."<br />";
	
}
else{
	die("Data failed to insert in the database");
}
?>
