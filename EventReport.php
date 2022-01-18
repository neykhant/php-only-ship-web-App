<?php
include("auth.php");
?>
<html>
	<head>
		<title> Peacock Marine Event Rented online System</title>
		<link href="image/peacock.jpg" rel="shortcut icon">
		<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script.js"></script>


	</head>
	<body>
	<div id="bander">
	<ul class="nav">


<li onClick="toggleSub()">
<a href="#">Add &raquo;</a>
<ul class="sub" id="sub">
	
<li><a href="Destination.php">Destination </a></li>
<li><a href="Itinerary.php">Itinerary </a></li>

<li><a href="Vessel.php">Vessel </a></li>
<li><a href="VesselType.php">Vessel Type</a></li>
	
<li><a href="EventType.php">Event Type</a></li>
</ul>
</li>
<li onClick="toggleSub1()">
<a href="#">Report &raquo;</a>
<ul class="sub1" id="sub1">
	

<li><a href="CustomerReport.php">Customer Report</a></li>
<li><a href="EventReport.php">Event Booking Report</a></li>
<li><a href="Top5EventsOfRentedShipByYearly.php">Top 5 Report</a></li>	
<li><a href="TopItineraryReportByYearly.php">Top Itinerary Report</a></li>
<li><a href="YearlyTopRentedShipReport.php">Yearly Top Rented Ship Report</a></li>

</ul>
</li><li onClick="toggleSub2()">
<a href="#">Edit/Delete &raquo;</a>
<ul class="sub2" id="sub2">
	

<li><a href="AdminBookingLists.php">Booking Lists</a></li>
<li><a href="AdminDestinationLists.php">Destination Lists</a></li>
<li><a href="AdminEventTypeLists.php">Event Type Lists</a></li>	
<li><a href="AdminInvoiceLists.php">Invoice Lists</a></li>
<li><a href="AdminItineraryLists.php">Itinerary Lists</a></li>
</ul>
</li>

<li><a href="Invoice.php">Invoice</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>

	<div id="main112">
	<center>
	<h1> Event booking list report Successful</h1>
	</center></div>
	</body>
</html>
<?php
     require("excelreport/PHPExcel.php");
    $con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
 $reporttime = date("d/m/y H:i:s");
//Creating new object for PHPExcel
    $objPHPexcel = new PHPExcel();
    $objPHPexcel = PHPExcel_IOFactory::load('C:/xampp/htdocs/chuechuenge/EventReport.xlsx');
    $objPHPexcel->getActiveSheet()->getCell('J6')->setValue("$reporttime");
    
    $query = "SELECT *
FROM `booking` ";
        $result = mysql_query($query);
        $i = 9;
        
       //$row = mysql_fetch_array($result);
        while($row = mysql_fetch_array($result))
        {
            $objPHPexcel->getActiveSheet()->getCell('C' . $i)->setValue("$row[BookingID]");
            $objPHPexcel->getActiveSheet()->getCell('D' . $i)->setValue("$row[EventTypeID]");
            $objPHPexcel->getActiveSheet()->getCell('E' . $i)->setValue("$row[EventTypeName]");
            $objPHPexcel->getActiveSheet()->getCell('F' . $i)->setValue("$row[EventPrice]");
            $objPHPexcel->getActiveSheet()->getCell('G' . $i)->setValue("$row[TotalAmount]");
           

            $i = $i +1;
        }
        $range = 'C9:G' . --$i ;
        $objPHPexcel->getActiveSheet()->getStyle("$range")->getBorders()-> getAllBorders() ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel5');
        $objWriter->save('EventReport.xls');
        echo"<script type='text/javascript'>window.location='EventReport.xls'; </script>";
      
        exit();
		?>