<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

//$key = $_POST['month1'];
$month1 =  $_POST['month1'] ;
$month2 =  $_POST['month2'] ;
//$find = mysql_query("SELECT * FROM net_issue WHERE month LIKE'%$key%'");
$find = mysql_query("SELECT * FROM net_issue WHERE month BETWEEN '$month1' AND '$month2'");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monthly Report</title>
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
             <h2>Search Results By Month</h2>
             <!--<span class="required_notification">Following search matches our database</span>-->
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>District Code</th>";
				  echo "<th>Hospital Code</th>";
				  echo "<th>Hospital Name</th>";
				  echo "<th>Month</th>";
				  echo "<th>Pregnant Women(ANC)</th>";
				  echo "<th>Children under 5(CWC)</th>";
				  echo "<th>Date issued</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['district_code']."</td>";
				  echo "<td>".$row['hospital_code']."</td>";
				  echo "<td>".$row['hospital_name']."</td>";
				  echo "<td>".$row['month']."</td>";
				  echo "<td>".$row['ANC']."</td>";
				  echo "<td>".$row['CWC']."</td>";
				  echo "<td>".$row['date_issued']."</td>";
			?>
				  
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
