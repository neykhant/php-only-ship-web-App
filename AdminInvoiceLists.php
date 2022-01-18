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
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result = mysql_query ("SELECT * FROM Invoice");
?>
	<div id="main112">
	<center>
	<form action = "Report_InvoiceDate.php" method = "post" >Invoice Lists Report Search <font color="red">By  Date</font><br/>
 <input type="text" size="35" id="DateOfInvoice" name="DateOfInvoice" Placeholder="yyyy-mm-dd"><input type="submit" value="Search"></form>
  <form action = "Report_InvoiceDate1.php" method = "post" >Invoice Lists Report Search <font color="red">By Between Date</font><br/>
 <input type="text" size="35" id="DateOfInvoice" name="DateOfInvoice" Placeholder="yyyy-mm-dd"> <font color="red" size="5">&amp;</font>
 <input type="text" size="35" id="DateOfInvoice1" name="DateOfInvoice1" Placeholder="yyyy-mm-dd"><input type="submit" value="Search"></form>
</color>
<table border='1' >
<tr bgcolor="#c5d5f2"><th>Invoice ID</th>
<th>Booking ID</th>
<th>Admin ID</th>
<th>Date Of Invoice</th>
<th>Delete or Update</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td align="center"> <?php echo $row['InvoiceID'] ?> </td>
<td align="center"> <?php echo $row['BookingID'] ?> </td>
<td align="center"> <?php echo $row['AdminStaffID'] ?> </td>
<td align="center"> <?php echo $row['DateOfInvoice'] ?> </td>
<td><div id="Del"><a href = "Delete_Invoice.php? InvoiceID=<?php echo $row['InvoiceID'] ?>" >Del</a>&nbsp;<a href = "Update_Invoice.php? InvoiceID=<?php echo $row['InvoiceID'] ?>" class="update">Update</a> </div></td>
</tr>
<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>