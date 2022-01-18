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
<a href="#">image &raquo;</a>
<ul class="sub" id="sub">
	
<li><a href="DestinationImage.php">Destination Image</a></li>

<li><a href="VesselImage.php">Vessel Image</a></li>
	
<li><a href="EventImage.php">Event Image</a></li>
</ul>
</li>
<li onClick="toggleSub1()">
<a href="#">Vessel &raquo;</a>
<ul class="sub1" id="sub1">
	

<li><a href="VesselTypeLists.php">Vessel Type Lists</a></li>
	
<li><a href="EventTypeLists.php">Event Type Lists</a></li>
<li><a href="ItineraryLists.php">Itinerary Lists</a></li>
<li><a href="DestinationLists.php">Destination Lists</a></li>
</ul>
</li>

<li><a href="AdminLogin.php">Admin Login</a></li>
<li><a href="Logout.php">Logout</a></li>
</ul></div>
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result = mysql_query ("SELECT * FROM `vesseltype`");
?>
	<div id="main1">
	<center>
	<h1> Vessel Type Lists </h1>
<table border='1' >
<tr bgcolor="#c5d5f2"><th>VesselType ID</th>
<th>Vessel Type</th>
<th>Suitable For Events</th>

</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td align="center"> <?php echo $row['VesselTypeID'] ?> </td>
<td align="right"> <?php echo $row['VesselType'] ?></td>
<td align="center"> <?php echo $row['SuitableForEvents'] ?></td>
</tr>
<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>