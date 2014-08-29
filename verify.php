<?php
	session_start();

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("wiz", $conn) or die(mysql_error());

	$uname=$_POST['name'];
	$pass=$_POST['pass'];
	$password = md5($pass);
	
	$result = mysql_query("select * from users where username='$uname' and password='$password'",$conn)
		or die("Could not execute the select query.");

	$row = mysql_fetch_assoc($result);
	
	if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
	else
		{
		header('Refresh: 2; url=index.php');
			echo "<center></h1>Access Denied</h1></center>"."<br />";
			echo "<center></h6>Please wait while you are redirected in 2 seconds</h6></center>"."<br />";
			
		}


	if(isset($_SESSION['valid']))
		{
			header("Location:home.php");
		}

	
?>
