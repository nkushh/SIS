<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
		header("Location:index.php");
	}

	define('MyConst', TRUE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add District</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="save_district.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter Your District Details Below</h2>&nbsp;&nbsp;&nbsp;&nbsp;<a href="districts.php" />View data</a>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">District Code:</label>
            <input type="text"  placeholder="District Code" required  name="district_code"/>
	    <span class="form_hint">Proper format "District Code"</span>
        </li>
	 <li>
            <label for="name">District Name:</label>
            <input type="text"  placeholder="District name" required name="district_name"/>
	    <span class="form_hint">Proper format "District Name"</span>
        </li>
	
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
</body>
</html>
