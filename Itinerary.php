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
	<div id="Itinerary">
	<center>
	<form action="ItineraryDB.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Itinerary</h1></caption>
	<tr>
	<td> <label> Itinerary Name </label></td><td>:</td>
	<td> <select name="IName">
	<option value="Post of London">Post of London</option>
	<option value="Post of London 2">Post of London 2</option>
	<option value="Caribbean 1">Caribbean 1</option>
	<option value="Caribbean 2">Caribbean 2</option>
	<option value="Caribbean 3">Caribbean 3</option>
	<option value="Caribbean 4">Caribbean 4</option>
	<option value="Greek Islands 1">Greek Islands 1</option>
	<option value="Greek Islands 2">Greek Islands 2</option>
	
	</td></tr>
	<tr>
	<td> <label> Itinerary Price </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Itinerary Price" required="required" name="IPrice"></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Add Itinerary" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>