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
	<title>Issue Nets</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
	
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="save_net_issue.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Issue Nets</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="view.php">List of Issued Nets</a>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">MFL Code:</label>
            <input type="text"  placeholder="MFL Code" required  name="MFL_code"/>
			
			
			<?php
	$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$result = mysql_query("SELECT DISTINCT(MFL_code) FROM districts  ORDER BY MFL_code ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['MFL_code'] .  '<br></option>'; 
        } 
?>
</select>
	    <span class="form_hint">Proper format "District Code"</span>
        </li>
	 <li>
            <label for="name">Customer Code:</label>
            <input type="text"  placeholder="customer Code" required name="customer_code"/>
	    <span class="form_hint">Proper format "Hospital Code"</span>
        </li>
         <li>
            <label for="name">Hospital Name:</label>
            <input type="text"  placeholder="Hospital Name" required name="hospital_name" />
	    <span class="form_hint">Proper format "Hospital Name"</span>
        </li>
	 <li>
            <label for="name">Month:</label>
            <input type="text"  placeholder="Month" required name="month" value="<?php echo date('M'); ?>"/>
	    <span class="form_hint">Proper format "<?php echo date('M'); ?>"</span>
        </li>
	 <li>
            <label for="name">Pregnant women:</label>
            <input type="text"  placeholder="ANC" required  name="ANC"/>
	    <span class="form_hint">Proper format "ANC"</span>
        </li>
		 <li>
            <label for="name">Children Under 5 <small>yrs</small>:</label>
            <input type="text"  placeholder="CWC" required  name="CWC"/>
	    <span class="form_hint">Proper format "CWC"</span>
        </li>
		 <li>
            <label for="name">Date Issued:</label>
            <input type="text"  placeholder="Date Issued" required  name="date_issued" value="<?php echo date('d-m-Y'); ?>"/>
	    <span class="form_hint">Proper format "Date Issued"</span>
        </li>
		<li>
		<input type="hidden"  placeholder="year issued" required  name="year_issued" value="<?php echo date('Y'); ?>"/>
		</li>
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
</body>
</html>
