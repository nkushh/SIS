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
             <h2>List of Issued Nets</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="issue_nets.php" >Issue Nets</a>
             <span class="required_notification">Following search matches our database</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>MFL Code</th>";
				  echo "<th>customer Code</th>";
				  echo "<th>Hospital Name</th>";
				  echo "<th>Month</th>";
				  echo "<th>Pregnant Women(ANC)</th>";
				  echo "<th>Children under 5(CWC)</th>";
				  echo "<th>Date issued</th>";
				  echo "<th>Action</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['MFL_code']."</td>";
				  echo "<td>".$row['customer_code']."</td>";
				  echo "<td>".$row['hospital_name']."</td>";
				  echo "<td>".$row['month']."</td>";
				  echo "<td>".$row['ANC']."</td>";
				  echo "<td>".$row['CWC']."</td>";
				  echo "<td>".$row['date_issued']."</td>";
			?>
				   <td>
					<a href="edit_net_issue.php?id=<?php echo $row['id'];?>" class='action'>Edit</a> | 
					<a href="delete_net_issue.php?id=<?php echo $row['id'];?>" class='action' onClick="return confirm('Are you sure you want to delete?')">Delete</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
		<INPUT type="button" class="submit" value="Print" onClick="window.open('reportaccount.php','mywindow','width=600,height=300,scrollbars=yes')">
	</li>
    </ul>

</form>
</body>
</html>
