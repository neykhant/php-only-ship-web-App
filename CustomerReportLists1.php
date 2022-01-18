
				
	
	  
	  <?php
         
	if(isset($_POST['btnGenerate'])) {
	$date=date("m/d/y");
$AuctionID=$_POST["AuctionID"];      
        require("C:/xampp/htdocs/ChueChueNge/Classes/PHPExcel.php");

$objPHPexcel = new PHPExcel();
$objPHPexcel = PHPExcel_IOFactory::load('C:/xampp/htdocs/ChueChueNge/Report/CustomerReportLists1..xls');
                $objPHPexcel->getActiveSheet()->getCell('I30')->setValue("$date");


	$host = "localhost";
	$username = "root";
	$password ="";
	$db="peacock";

	$dbconect = mysql_connect($host, $username, $password) or die("Connection Failed!!");
	mysql_select_db($db,$dbconect) or die("Cannot connect database!!");
        
    
    $i = 34;
     $query2 = "SELECT *
FROM `customer`";
    $result1 = mysql_query($query2,$dbconect);

    while($row2= mysql_fetch_array($result1)) {
       	 $objPHPexcel->getActiveSheet()->getCell('D' . $i)->setValue("$row2[CustomerID]");
         $objPHPexcel->getActiveSheet()->getCell('E' . $i)->setValue("$row2[CustomerName]");
         $objPHPexcel->getActiveSheet()->getCell('F' . $i)->setValue("$row2[Password]");
		  $objPHPexcel->getActiveSheet()->getCell('G' . $i)->setValue("$row2[PhNo]");
		   $objPHPexcel->getActiveSheet()->getCell('H' . $i)->setValue("$row2[Email]");
		 
        $i = $i +1;
    }
    $range = 'D34:H' . --$i ;

    $objPHPexcel->getActiveSheet()->getStyle("$range")->getBorders()-> getAllBorders() ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);


     $objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel5');
$objWriter->save('CustomerReportLists1.xls');



	exit;    	
}
error_reporting(0);
?>

	  
	  
      
      <!-- End Top Image -->
      <!-- Box -->
     
      </div>
      <!-- End Box -->
    </div>
    <!-- End Main -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Content -->
  <!-- Footer -->
 <!-- <div id="footer">
    <p>&copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a></p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
<div align=center></a></div></body>
</html>
