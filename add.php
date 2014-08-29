<?php
session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link rel="stylesheet" media="screen" href="add.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="adduser.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter User Details</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
                    <label for="name">ID Number:</label>
            <input type="text"  placeholder="ID Number" required  name="ide_no"/>
            </li>
            <li>
                        <label for="name">Email Address:</label>
            <input type="text"  placeholder="Email" required  name="email"/>
            </li>
            <li>
                        <label for="name">Phone Number:</label>
            <input type="text"  placeholder="Phone Number" required  name="phone_no"/>
            </li>
        <li>
            <label for="name">User Name:</label>
            <input type="text"  placeholder="Username" required  name="name"/>
        </li>
	 <li>
            <label for="name">Password:</label>
            <input type="password"  placeholder="password" required name="pass"/>
	    <span class="form_hint">Proper format "xxxxxxx"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Register</button>
        </li>
    </ul>

</form>
</body>
</html>
