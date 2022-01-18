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
</li>
<li><a href="Invoice.php">Invoice</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$SDate = $_POST['SDate'];
$SDate1 = $_POST['SDate1'];
	
$result = mysql_query("SELECT * FROM `Peacock`.`Booking` WHERE `Booking`.`SDate` between '$SDate' AND '$SDate1' ORDER BY ItineraryPrice");
?>
	<div id="main112">
	<center>
<table border='1' >
<tr bgcolor="#c5d5f2"><th>Itinerary Name</th>
<th>Itinerary Price</th>
<th>Start Date</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td align="center"> <?php echo $row['ItineraryName'] ?> </td>
<td align="center"> <?php echo $row['ItineraryPrice'] ?> </td>
<td align="center"> <?php echo $row['SDate'] ?> </td>
</tr>
<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>