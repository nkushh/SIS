<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$ide_no = $_POST['ide_no'];
$phone_no = $_POST['phone_no'];

$rec = "insert into users values('','$name',md5('$pass'),'$ide_no','$phone_no','$email')";

if(mysql_query($rec)){
	header('Refresh: 2; url=add.php');
	echo "<center></h1>User is Added in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 2 seconds..</h6></center>"."<br />";

}
else{
	die("User adding error");
}
?>
