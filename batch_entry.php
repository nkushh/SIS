<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$find = mysql_query("select * from net_issue");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Date</title>
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
             <h2>Net Issues</h2>
             <span class="required_notification">Following search matches our database</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th width='5px'>Dist Code</th>";
				  echo "<th>Hosp Code</th>";
				  echo "<th>Hosp Name</th>";
				  echo "<th>Month</th>";
				  echo "<th>ANC</th>";
				  echo "<th>CWC</th>";
				  echo "<th>Date</th>";
				  echo "</tr>";
		
				  echo "<tr class='t1'>";
				  echo "<td width='5px'> <input type='text' name='district_code'/> </td>";
				  echo "<td> <input type='text' name='hospital_code'/> </td>";
				  echo "<td> <input type='text' name='hospital_name'/> </td>";
				  echo "<td> <input type='text' name='month'/> </td>";
				  echo "<td> <input type='text' name='ANC'/> </td>";
				  echo "<td> <input type='text' name='CWC'/> </td>";
				  echo "<td> <input type='text' name='date_issued'/> </td>";
				  echo "</tr>";
 				
  			
			echo "</table>";
		?>
		<INPUT type="button" class="submit" value="Print" onClick="window.open('reportaccount.php','mywindow','width=600,height=300,scrollbars=yes')">
	</li>
    </ul>

</form>
</body>
</html>
