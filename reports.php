<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
</head>
<body>

<!--main menu navigation -->
<?php include('includes/menu.php'); ?>

<form class="contact_form" action="search_report.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Generate Reports BY searching Key Words</h2><br/> <small>MFL code/customer Code/ Hospital Name</small>
             
        </li>
        <li>
        <a href="excel/index.php">print excel</a>
        </li>
		<li><a href="graph ANC/index.php">Show graphs For ANC</a> | <a href="graph CWC/index.php" >Show graphs for CWC</a></li>
	<table><tr>
            <td><label for="name">Enter Code:</label></td>
            <td>
		<input type="text"  placeholder="Type Text to search..." required  name="customer_code"/>
	    </td>
	    <td>
		<button class="submit" type="submit">Search</button>
	    </td>
	</tr></table>
	</li>
    </ul>

</form>


<form class="contact_form" action="year_report.php" method="post" name="contact_form" onSubmit="window.open('yearly_report.php','mywindow','width=600,height=300,scrollbars=yes')">
    <ul>
        <li>
	<table><tr>
            <td><label for="name">Select Year to view report:</label></td>
            <td>
		<select name="yearly_report"><?php echo year(); ?></select></li>
	    </td>
	    <td>
		<button class="submit" type="submit">Search</button>
		<!--<INPUT type="button" class="submit" value="Print" onClick="window.open('reportaccount.php','mywindow','width=600,height=300,scrollbars=yes')">-->
	    </td>
	</tr></table>
	</li>
    </ul>

</form>

<form class="contact_form" action="month_report.php" method="post" name="contact_form" onSubmit="window.open('monthly_report.php','mywindow','width=600,height=300,scrollbars=yes')">
    <ul>
        <li>
	<table><tr>
            <td><label for="name">Select Month to view report:</label></td>
            <td>
		<select name="monthly_report"><?php echo month(); ?></select></li>
	    </td>
	    <td>
		<button class="submit" type="submit">Search</button>
		<!--<INPUT type="button" class="submit" value="Print" onClick="window.open('reportaccount.php','mywindow','width=600,height=300,scrollbars=yes')">-->
	    </td>
	</tr></table>
	</li>
    </ul>

</form>

<form class="contact_form" action="semi_annual.php" method="post" name="contact_form" >
    <ul>
	<li>
		Select Report Type
	</li>
        <li>
	<table><tr>
            <td><label for="name">Select Range:</label></td>
            <td>
		<select name="month1"><?php echo month(); ?></select></li>
	    </td>
		<td>
		<select name="month2"><?php echo month(); ?></select></li>
	    </td>
		</tr>
		<tr>
		<td></td>
	    <td>
		<button class="submit" type="submit">Search</button>
		<!--<INPUT type="button" class="submit" value="Print" onClick="window.open('reportaccount.php','mywindow','width=600,height=300,scrollbars=yes')">-->
	    </td>
	</tr></table>
	</li>
    </ul>

</form>





<form class="contact_form" action="advanced_search.php" method="post" name="contact_form">
   <ul>
<li><strong>Select Start Date : </strong></li>
<li><label>Select Year</label>
<select name="year1"><?php echo year(); ?></select></li>

<li><label>Select Month</label>
<select name="month1"><?php echo month(); ?></select></li>

<li><label>Select Day</label>
<select name="day1"><?php echo day(); ?></select></li>



<li><strong>Select End Date : </strong></li>
<li><label>Select Year</label>
<select name="year2"><?php echo year(); ?></select></li>

<li><label>Select Month</label><select name="month2"><?php echo month(); ?></select></li>
<li><label>Select Day</label><select name="day2"><?php echo day(); ?></select></li>
<button class="submit" type="submit">Search</button>
</ul>

</form>

</body>
</html>
<?php 		
function day() 
{		
$day = 0; 
$end = 31;
$data = 0;		
WHILE($day < $end){			
$day++;			
$data .= "<option value='".$day."'>".$day."</option>";				
}		
return $data;	
}	


function month() 
{				
echo  "<option value='Jan'>January</option>";			
echo  "<option value='Feb'>February</option>";			
echo  "<option value='Mar'>March</option>";			
echo  "<option value='Apr'>April</option>";			
echo  "<option value='May'>May</option>";			
echo  "<option value='Jun'>June</option>";			
echo  "<option value='Jul'>July</option>";			
echo  "<option value='Aug'>August</option>";			
echo  "<option value='Sep'>September</option>";			
echo  "<option value='Oct'>October</option>";			
echo  "<option value='Nov'>November</option>";			
echo  "<option value='Dec'>December</option>";				
}	


function semi_annual() 
{				
echo  "<option value='1st'>1st Half</option>";			
echo  "<option value='2nd'>2nd Half</option>";			
			
}	

function year() 
{		
$day = 2000;		
$end = date('Y');		
$data = 0;		
WHILE($day < $end){			
$day++;			
$data .= "<option value=".$day.">".$day."</option>";				
}		
return $data;	
}
?>
