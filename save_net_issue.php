<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$MFL_code = $_POST['MFL_code'];
$customer_code = $_POST['customer_code'];
$hospital_name = $_POST['hospital_name'];
$month = $_POST['month'];
$ANC = $_POST['ANC'];
$CWC = $_POST['CWC'];
$date_issued = $_POST['date_issued'];
$year_issued = $_POST['year_issued'];


$rec = "insert into net_issue values('','$MFL_code','$customer_code','$hospital_name','$month','$ANC','$CWC','$date_issued','$year_issued')";

if(mysql_query($rec)){
	header('Refresh: 2; url=issue_nets.php');
	echo "<center></h1>Data inserted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds</h6></center>"."<br />";

}
else{
	die("Data failed to insert in the database");
}
?>
