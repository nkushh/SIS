<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$find = mysql_query("select * from districts");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Districts</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Are you sure you want to delete")) {
   				 document.location = delUrl;
 			 }
		}
	</script>
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="search.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Districts</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="add_district.php"/>Add District</a>
             <span class="required_notification">Following search matches our database</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>MFL Code</th>";
				  echo "<th>District name</th>";
				  echo "<th>Action</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['MFL_code']."</td>";
				  echo "<td>".$row['district_name']."</td>";
				 
			?>
				   <td>
					<a href="edit_reg_details.php?id=<?php echo $row['id'];?>" class='action'>Edit</a> | 
					<a href="delete_reg_details.php?id=<?php echo $row['id'];?>" class='action' onClick="return confirm('Are you sure you want to delete?')">Delete</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>
    </ul>

</form>
</body>
</html>
