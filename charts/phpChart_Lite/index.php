 <?php
    //require_once('../includes/public-application-header.php');
    $con=mysql_connect("localhost","root","") or die("Failed to connect with database!!!!");
  mysql_select_db("wiz", $con); 

   // $sql  =" SELECT DATE_FORMAT( FROM_UNIXTIME( transaction_date ) , '%d/%m/%Y') 'transaction_date', COUNT(*) 'total count', SUM(transaction_status = 'Success') ";
    //$sql .=" success, SUM(transaction_status = 'Inprocess') inprocess, SUM(transaction_status = 'fail') fail, ";
    //$sql .=" SUM(transaction_status = 'cancelled') cancelled FROM user_transaction WHERE ";
    $sql .=" SELECT * FROM net_issue WHERE date_issued="$from_date" AND date_issued="$to_date" ";
	$sql .="";
  
    $r= mysql_query($sql) or die(mysql_error()); 
    $transactions = array();
    while($result  = mysql_fetch_array($r, MYSQL_ASSOC)){
      $transactions[] = $result;
    } 
    $rows = array();
      //flag is not needed
      $flag = true;
      $table = array();
      $table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Transaction Date', 'type' => 'string'),
    array('label' => 'Total Count', 'type' => 'number'),
    array('label' => 'Success', 'type' => 'number'),
    array('label' => 'Inprocess', 'type' => 'number'),
    array('label' => 'Failed', 'type' => 'number'),
    array('label' => 'Cancelled', 'type' => 'number'),
    );
  $rows = array();

  foreach($transactions as $tr) {
    $temp = array();

     foreach($tr as $key=>$value){

    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $key); 

    // Values of each slice
    $temp[] = array('v' => (int) $value);     
    }
  $rows[] = array('c' => $temp); 
}
    $table['rows'] = $rows;

    $jsonTable = json_encode($table);
    //echo $jsonTable;
?>

<html>
    <head>
	<title>Charts</title>
    <!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
          var options = {
          title: 'User Transaction Statistics',
          is3D: 'true',
          width: 800,
          height: 600
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="chart_div">user transaction statistics</div>
  </body>
</html>