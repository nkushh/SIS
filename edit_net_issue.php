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
$edit = mysql_query("select * from net_issue where id ='$id'");

while($row = mysql_fetch_array($edit)){


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Net Issue</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="update_net_issue.php" method="post" name="contact_form">
<input type="hidden" name="id" value ="<?php echo $id; ?>">
    <ul>
        <li>
             <h2>Enter Your Details Below</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
	 <li>
            <label for="name">District Code:</label>
            <input type="text"  placeholder="District Code" required  name="district_code" value="<?php echo $row['district_code']; ?>"/>
	    <span class="form_hint">Proper format "District Code"</span>
        </li>
	 <li>
            <label for="name">Hospital Code:</label>
            <input type="text"  placeholder="Hospital Code" required name="hospital_code" value="<?php echo $row['hospital_code']; ?>"/>
	    <span class="form_hint">Proper format "Hospital Code"</span>
        </li>
         <li>
            <label for="name">Hospital Name:</label>
            <input type="text"  placeholder="Hospital Name" required name="hospital_name" value="<?php echo $row['hospital_name']; ?>" />
	    <span class="form_hint">Proper format "Hospital Name"</span>
        </li>
	 <li>
            <label for="name">Month:</label>
            <input type="text"  placeholder="Month" required name="month" value="<?php echo $row['month']; ?>"/>
	    <span class="form_hint">Proper format "month"</span>
        </li>
	 <li>
            <label for="name">Pregnant women:</label>
            <input type="text"  placeholder="ANC" required  name="ANC" value="<?php echo $row['ANC']; ?>"/>
	    <span class="form_hint">Proper format "ANC"</span>
        </li>
		 <li>
            <label for="name">Children Under 5 <small>yrs</small>:</label>
            <input type="text"  placeholder="CWC" required  name="CWC" value="<?php echo $row['CWC']; ?>"/>
	    <span class="form_hint">Proper format "CWC"</span>
        </li>
		 <li>
            <label for="name">Date Issued:</label>
            <input type="text"  placeholder="Date Issued" required  name="date_issued" value="<?php echo $row['date_issued']; ?>"/>
	    <span class="form_hint">Proper format "Date Issued"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
<?php
}
?>
</body>
</html>
