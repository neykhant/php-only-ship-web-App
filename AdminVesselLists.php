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
$result = mysql_query ("SELECT * FROM Vessel");
?>
	<div id="main112">
	<center>
	<form action = "Report_VesselName.php" method = "post" >Vessel Lists Report Search <font color="red">By Vessel Name</font><br/>
 <input type="text" size="35" id="VName" name="VName" Placeholder="Enter Vessel Name"><input type="submit" value="Search"></form>
</color>
	<table border='1' >
<tr><th>Vessel ID</th>
<th>Vessel Name</th>
<th>Vessel Type ID</th>
<th>Vessel Price</th>
<th>Vessel Image</th>
<th>Delete or Update</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td> <?php echo $row['VesselID'] ?> </td>
<td> <?php echo $row['VesselName'] ?> </td>
<td> <?php echo $row['VesselTypeID'] ?> </td>
<td> <?php echo $row['VesselPrice'] ?></td>
<td> <img src="image/<?php echo $row['VesselImage'] ?>" width="100px" height="100px"></td>
<td><div id="Del"><a href = "DeleteVessel.php? VesselID=<?php echo $row['VesselID'] ?>" >Del</a>&nbsp;<a href = "Update_Vessel.php? VesselID=<?php echo $row['VesselID'] ?>" >Update</a> </div></td>
</tr>

<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>