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
	<title>Add Hospitals</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="save_hospital.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter Your Hospital Details Below</h2>&nbsp;&nbsp;&nbsp;&nbsp;<a href="view_data.php" />View data</a>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">Region Name:</label>
            <input type="text"  placeholder="Region Name" required name="region"/>
        </li>
        <li>
            <label for="name">County Name:</label>
            <input type="text"  placeholder="County Name" required name="county"/>
	    <span class="form_hint">Proper format "Hospital Code"</span>
        </li>
        <li>
            <label for="name">District Name:</label>
            <input type="text"  placeholder="District Name" required name="district"/>
	    <span class="form_hint">Proper format "Hospital Code"</span>
        </li>
        <li>
            <label for="name">MFL Code:</label>
            <input type="text"  placeholder="MFL Code" required name="MFL_code"/>
	    <span class="form_hint">Proper format "MFL Code"</span>
        </li>
	 <li>
            <label for="name">Customer Code:</label>
            <input type="text"  placeholder="Customer Code" required name="customer_code"/>
	    <span class="form_hint">Proper format "customer Code"</span>
        </li>
         <li>
            <label for="name">Hospital Name:</label>
            <input type="text"  placeholder="Hospital Name" required name="hospital_name" />
	    <span class="form_hint">Proper format "Hospital Name"</span>
        </li>
	
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
</body>
</html>
