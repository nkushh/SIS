<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('dbcon.php');
  


    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  // HTTP headers
HeaderingExcel('net issue.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('net issue report');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);
  $worksheet1->set_column(1, 8, 20);










   $worksheet1->write_string(0,0,"id");
   $worksheet1->write_string(0,1,"district_code");
   $worksheet1->write_string(0,2,"hospital_code");
   $worksheet1->write_string(0,3,"hospital_name");
   $worksheet1->write_string(0,4,"month");
   $worksheet1->write_string(0,5,"ANC");
   $worksheet1->write_string(0,6,"CWC");
   $worksheet1->write_string(0,7,"date_isseud");
   $worksheet1->write_string(0,8,"year_issued");

 






/////////////////
	

	$qryreport = mysql_query("SELECT * FROM net_issue") or die(mysql_error());
	
	$sqlrows=mysql_num_rows($qryreport);
	$j=0;
	
	WHILE ($reportdisp=mysql_fetch_array($qryreport)) { $id=$reportdisp['id'];
	$j=$j+1;
                    
                        $id=$reportdisp['id'];
                        $district_code=$reportdisp['district_code'];
                        $hospital_code=$reportdisp['hospital_code'];
                        $hospital_name=$reportdisp['hospital_name'];
                        $month=$reportdisp['month'];
						$ANC=$reportdisp['ANC'];
						$CWC=$reportdisp['CWC'];
						$date_isseud=$reportdisp['date_isseud'];
						$year_isseud=$reportdisp['year_issued'];						

			
			
			
				
			
			
			 $worksheet1->write_string($j,0,"$id");
			 $worksheet1->write_string($j,1,"$district_code");
			 $worksheet1->write_string($j,2,"$hospital_code");
			 $worksheet1->write_string($j,3,"$hospital_name");
			 $worksheet1->write_string($j,4,"$month");
			 $worksheet1->write_string($j,5,"$ANC");
			 $worksheet1->write_string($j,6,"$CWC");
			 $worksheet1->write_string($j,7,"$date_isseud");
			 $worksheet1->write_string($j,8,"$year_isseud");
	
			
		
			
			 
	}
	
	
	
/////////////////
  
  

  
$workbook->close();
?>