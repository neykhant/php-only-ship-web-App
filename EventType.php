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
	<div id="register">
	<center>
	<form action="EventTypeDB.php" method="post" enctype="multipart/form-data">
	<table cellpadding="10px">
	<caption><h1> Event Type</h1></caption>
	<tr>
	<td> <label> Event Type Name </label></td><td>:</td>
	<td> <select name="ETName">
	<option value="Full Charter"> Full Charter </option>
	<option value="Dealer"> Dealer </option>
	<option value="Board Meeting"> Board Meeting </option>
	<option value="Staff Party"> Staff Party </option>
	<option value="Full Charter"> Full Charter </option>
	</select>
	</td></tr>
	<tr>
	<td> <label> Event Price </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Event Price" required="required" name="EPrice"></td>
	</tr>
	<tr>
	<td> <label> Event Image </label></td><td>:</td>
	<td> <input type="file" size="30" placeholder="Enter Event Image" required="required" name="EImage"></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Add Event Type" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>