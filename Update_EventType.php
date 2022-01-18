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
$EventTypeID = $_GET['EventTypeID'];
$result = mysql_query ("SELECT * FROM EventType WHERE EventTypeID=$EventTypeID");
$row = mysql_fetch_assoc($result);
?>
<form method="post"  action="EditEventType.php" enctype="multipart/form-data">
<input type = "hidden" name = "EventTypeID" value = "<?php echo $row['EventTypeID'] ?>"> 
<center><table cellspacing="20px">
<caption><h1> Editing Event Type </h1></caption>
<tr>
<td><label > Event Image </label></td>
<td><input type="text" id = "EventTypeName" name = "EventTypeName" value= "<?php echo $row['EventTypeName'] ?>"></td></tr>
<tr>
<td>
<label>Event Price (&pound;)</label></td>
<td><input type="text" id = "EventPrice" value= "<?php echo $row['EventPrice'] ?>" name = "EventPrice"></td>
</tr>
<tr>
<td><label > Event Image </label></td>
<td><img src="image/<?php echo $row['EventImage'] ?>" width="100px" height="100px" >
<input type="file" name = "EventImage" id = "EventImage"></td>
</tr>
<tr><th colspan="2"><input type = "submit" value = "Edit" class="button1">&nbsp;
<input type="reset" value="Clear" class="button1"></th>
</tr>
</table></center></form>
</body>
</html>