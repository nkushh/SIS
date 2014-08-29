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
	<title>Search</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="search.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter Your Search Below</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
	<table><tr>
            <td><label for="name">First Name:</label></td>
            <td>
		<input type="text"  placeholder="Joe" required  name="name"/>
	    </td>
	    <td>
		<button class="submit" type="submit">Search</button>
	    </td>
	</tr></table>
	</li>
    </ul>

</form>
</body>
</html>
