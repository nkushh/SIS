<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];;
 }

$rec = "delete from data where id='$id'";

if(mysql_query($rec)){
header('Refresh: 2; url=home.php');
	echo "<center></h1>Data Deleted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds..</h6></center>"."<br />";
	
}
else{
	die("Data failed to delete in the database");
}
?>
