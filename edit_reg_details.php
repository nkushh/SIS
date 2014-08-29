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
$edit = mysql_query("select * from reg_details where id ='$id'");

while($row = mysql_fetch_array($edit)){


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Reg Details</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="update_reg_details.php" method="post" name="contact_form">
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
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
<?php
}
?>
</body>
</html>
