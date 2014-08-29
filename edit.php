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
$edit = mysql_query("select * from data where id ='$id'");

while($row = mysql_fetch_array($edit)){


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit user</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="update.php" method="post" name="contact_form">
<input type="hidden" name="id" value ="<?php echo $id; ?>">
    <ul>
        <li>
             <h2>Enter Your Details Below</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">First Name:</label>
            <input type="text"  placeholder="Joe" required  name="name" value="<?php echo $row['fname']; ?>"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">Middle Name:</label>
            <input type="text"  placeholder="Dinagat" required name="mname" value="<?php echo $row['mname']; ?>"/>
	    <span class="form_hint">Proper format "Dinagat"</span>
        </li>
         <li>
            <label for="name">Last Name:</label>
            <input type="text"  placeholder="Basanta" required name="lname" value="<?php echo $row['lname']; ?>"/>
	    <span class="form_hint">Proper format "Basanta"</span>
        </li>
	 <li>
            <label for="name">Age:</label>
            <input type="text"  placeholder="19" required name="age" value="<?php echo $row['age']; ?>"/>
	    <span class="form_hint">Proper format "19"</span>
        </li>
	 <li>
            <label for="name">Grade:</label>
            <input type="text"  placeholder="90" required  name="grade" value="<?php echo $row['grade']; ?>"/>
	    <span class="form_hint">Proper format "90"</span>
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
