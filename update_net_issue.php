<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$id=$_POST['id'];
$district_code = $_POST['district_code'];
$hospital_code = $_POST['hospital_code'];
$hospital_name = $_POST['hospital_name'];
$month = $_POST['month'];
$ANC = $_POST['ANC'];
$CWC = $_POST['CWC'];
$date_issued = $_POST['date_issued'];

$rec = "update net_issue set district_code = '$district_code',hospital_code = '$hospital_code',hospital_name='$hospital_name',month='$month',ANC='$ANC',CWC='$CWC',date_issued='$date_issued' where id='$id'";

if(mysql_query($rec)){
header('Refresh: 2; url=view.php');
	echo "<center></h1>Data updated in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds..</h6></center>"."<br />";
	
}
else{
	die("Data failed to update in the database");
}
?>
