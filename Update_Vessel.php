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
	<div id="main1">
<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$VesselID = $_GET['VesselID'];
$result = mysql_query ("SELECT * FROM `peacock`.`vessel` WHERE `vessel`.`VesselID` = '$VesselID'");
$row = mysql_fetch_assoc($result);
?>
<form method="post"  action="EditVessel.php" enctype="multipart/form-data">
<input type = "hidden" name = "VesselID" value = "<?php echo $row['VesselID'] ?>"> 
<center><table cellspacing="20px">
<caption><h1> Editing Vessel </h1></caption>
<tr>
<td><label >Vessel Name </label></td>
<td><input type="text" id = "VName" name = "VName" value= "<?php echo $row['VesselName'] ?>"></td></tr>
<tr>
<td><label >Vessel Type ID</label></td>
<td><input type="text" id = "VTID" name = "VTID" value= "<?php echo $row['VesselTypeID'] ?>"></td></tr>

	<tr>
<td><label >Vessel Price </label></td>
<td><input type="text" id = "VPrice" name = "VPrice" value= "<?php echo $row['VesselPrice'] ?>"></td></tr>
<tr>
<td><label > Vessel Image </label></td>
<td><img src="image/<?php echo $row['VesselImage'] ?>" width="100px" height="100px" >
<input type="file" name = "VImage" id = "VImage"></td>
</tr>
<tr><th colspan="2"><input type = "submit" value = "Edit" class="button1">&nbsp;
<input type="reset" value="Clear" class="button1"></th>
</tr>
</table></center></form>
</body>
</html>