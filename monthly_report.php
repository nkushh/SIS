<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$key = $_POST['monthly_report'];
$find = mysql_query("SELECT * FROM net_issue WHERE month LIKE'%$key%' ");


?>
<html>
<head>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=600, height=300, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="font-size:11px; font-family:arial;"><center>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</center></body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
</head>
<body>
<div id="print_content">


<?php
			echo "<h1>This page is still Under Construction. Pliz bear with us!!!!!!!!!!!<br/>Use the non printable view</h1>";
			echo "<table border='1' width='100%'>";
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


</div>
<br>
<a href="javascript:Clickheretoprint()"> Click here to print</a>
</body>
</html>