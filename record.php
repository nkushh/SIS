<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$mfl_code = $_POST['mfl_code'];
$customer_code = $_POST['customer_code'];
$hospital_name = $_POST['hospital_name'];
$district = $_POST['district'];
$county = $_POST['county'];
$region = $_POST['region'];


$rec = "insert into reg_details(mfl_code,customer_code,hospital_name,region,county,district)
        values('$mfl_code','$customer_code','$hospital_name','$region','$county','$district')";

if(mysql_query($rec)){

header('Refresh: 2; url=view_data.php');
	echo "<center></h1>Data inserted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds</h6></center>"."<br />";
	
}
else{
	die("Data failed to insert in the database");
}
?>
