<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$key = $_POST['yearly_report'];
$find = mysql_query("SELECT * FROM net_issue WHERE year_issued LIKE'%$key%'");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yearly Report</title>
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
             <h2>Search Results By Year</h2>
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
		<table border="1" width="100%">
		<tr><td><strong>Total Nets issued to Pregnant women(ANC):<strong></td>
				<td style="border-left: 1px solid #C1DAD7;">
				<?php
					$results = mysql_query("SELECT sum(ANC) FROM net_issue WHERE year_issued LIKE'%$key%'");
							while($row2 = mysql_fetch_array($results))
							  {
							   $gggg=$row2['sum(ANC)'];
							   echo $gggg;
							  }
				?>
				</td>
				</tr>
				<tr><td><strong>Total Nets issued to children under 5(CWC):<strong></td>
				<td style="border-left: 1px solid #C1DAD7;">
				<?php
					$results = mysql_query("SELECT sum(CWC) FROM net_issue WHERE year_issued LIKE'%$key%'");
							while($row2 = mysql_fetch_array($results))
							  {
							   $gggg=$row2['sum(CWC)'];
							   echo $gggg;
							  }
				?>
				</td>
				</tr>
				
				<tr><td><strong>Total Nets issued to Both ANC & CWC:<strong></td>
				<td style="border-left: 1px solid #C1DAD7;">
				<?php
					$results = mysql_query("SELECT sum(CWC), sum(ANC) FROM net_issue WHERE year_issued LIKE'%$key%' ");
							while($row2 = mysql_fetch_array($results))
							  {
							   $gggg=$row2['sum(CWC)'];
							   $cccc=$row2['sum(ANC)'];
							   //echo $gggg;

							  }
							  $total="total is";
							  echo $total=$gggg+$cccc;
				?>
				</td>
				</tr>
				
				</table>

		
	</li>
    </ul>

</form>
</body>
</html>
