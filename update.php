<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$id=$_POST['id'];
$name = $_POST['name'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$rec = "update data set fname = '$name',mname = '$mname',lname='$lname',age='$age',grade='$grade' where id='$id'";

if(mysql_query($rec)){
header('Refresh: 2; url=view.php');
	echo "<center></h1>Data updated in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds..</h6></center>"."<br />";
	
}
else{
	die("Data failed to update in the database");
}
?>
