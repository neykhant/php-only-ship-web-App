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
	

<li><a href="AdminVesselTypeLists.php">Vessel Type Lists</a></li>
<li><a href="AdminVesselLists.php">Vessel  Lists</a></li>
<li><a href="AdminBookingLists.php">Booking Lists</a></li>	
<li><a href="AdminEventTypeLists.php">Event Type Lists</a></li>
<li><a href="AdminItineraryLists.php">Itinerary Lists</a></li>
<li><a href="AdminDestinationLists.php">Destination Lists</a></li>
</ul>
</li>
<li><a href="Invoice.php">Invoice</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$ItineraryName = $_POST['ItineraryName'];
	
$result = mysql_query("SELECT *
FROM `itinerary` WHERE `itinerary`.`ItineraryName`= '$ItineraryName'");
?>
	<div id="main1">
	<center>
	
<table border='1' >
<tr><th>Itinerary ID</th>
<th>Itinerary Name</th>
<th>Itineray Price</th>
<th>Delete or Update</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td> <?php echo $row['ItineraryID'] ?> </td>
<td> <?php echo $row['ItineraryName'] ?> </td>
<td> <?php echo $row['ItineraryPrice'] ?> </td>
<td><div id="Del"><a href = "DeleteItinerary.php? ItineraryID=<?php echo $row['ItineraryID'] ?>" >Del</a>&nbsp;<a href = "Update_Itinerary.php? ItineraryID=<?php echo $row['ItineraryID'] ?>" >Update</a> </div></td>
</tr>

<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>