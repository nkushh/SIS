<?php 
	session_start();

	if(isset($_SESSION['valid'])){
		header("Location:home.php");
	}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PSI</title>
	<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<form class="contact_form" action="verify.php" method="post" name="contact_form">
    <ul>
        <li>
              <img src="images/PSI-Kenya-logo.jpg" height="100" width="150"><br></h2>
         <li>    <h2>Please Login</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">User Name:</label>
            <input type="text"  placeholder="Username" required  name="name"/>
	    <span class="form_hint">Proper format "piero"</span>
        </li>
	 <li>
            <label for="name">Password:</label>
            <input type="password"  placeholder="Password" required name="pass"/>
	    <span class="form_hint">Proper format "********"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Login</button>
        </li>
    </ul>

</form>
</body>
</html>
