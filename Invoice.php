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
	<div id="register">
	<center>
	<form action="InvoiceDB.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Invoice</h1></caption>
	<?php
// select box open tag
$selectBoxOpen =  "<select name='BookingID'>"; 
// select box close tag
$selectBoxClose =  "</select>";
// select box option tag
$selectBoxOption = ''; 
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result1 = mysql_query ("SELECT * FROM Booking" );
while($row1 = mysql_fetch_array($result1)){   
    $selectBoxOption .="<option value = '".$row1['BookingID']."'>".$row1['BookingID']."</option>"; 
}
 
// create select box tag with Cinema result1
$selectBox =  $selectBoxOpen.$selectBoxOption.$selectBoxClose;

?>
	<tr>
	
	<td> <label> BookingID</label></td><td>:</td>
	<td> <?php echo $selectBox;?></td>
	</tr>
	<?php
// select box open tag
$selectBoxOpen1 =  "<select name='AdminStaffID'>"; 
// select box close tag
$selectBoxClose1 =  "</select>";
// select box option tag
$selectBoxOption1 = ''; 
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result2 = mysql_query ("SELECT * FROM AdminStaff" );
while($row2 = mysql_fetch_array($result2)){   
    $selectBoxOption1 .="<option value = '".$row2['AdminStaffID']."'>".$row2['AdminStaffID']."</option>"; 
}
 
// create select box tag with Cinema result1
$selectBox1 =  $selectBoxOpen1.$selectBoxOption1.$selectBoxClose1;

?>
	<tr>
	<td> <label> AdminStaffID</label></td><td>:</td>
	<td> <?php echo $selectBox1;?></td>
	</tr>
		<tr>
	<td> <label> Date Of Invoice</label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter dd-mm-yyyy" required="required" name="DateOfInvoice"></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Invoice" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>