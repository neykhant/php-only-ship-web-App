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
$result = mysql_query ("SELECT *
FROM `booking`");
?>
	<div id="main112">
	<center>
	<form action = "Report_StartDate.php" method = "post" >Booking Lists Report Search <font color="red">By Start Date</font><br/>
 <input type="text" size="35" id="SDate" name="SDate" Placeholder="yyyy-mm-dd"><input type="submit" value="Search"></form>
 <form action = "Report_EndDate.php" method = "post" >Booking Lists Report Search <font color="red">By End Date</font><br/>
 <input type="text" size="35" id="EDate" name="EDate" Placeholder="yyyy-mm-dd"><input type="submit" value="Search"></form>
 <form action = "Report_Start&EndDate.php" method = "post" >Booking Lists Report Search <font color="red">By Start Date And End Date</font><br/>
 <input type="text" size="35" id="SDate" name="SDate" Placeholder="yyyy-mm-dd"> <font color="red" size="5">&amp;</font>
 <input type="text" size="35" id="EDate" name="EDate" Placeholder="yyyy-mm-dd"><input type="submit" value="Search"></form>
</color>
<table border='1' >
<tr bgcolor="#c5d5f2"><th>Booking ID</th>
<th>Customer ID</th>
<th>VesselName</th>
<th>DestinationName</th>
<th>EventTypeName</th>
<th>ItineraryName</th>
<th>VesselPrice</th>
<th>EventPrice</th>
<th>ItineraryPrice</th>
<th>Start Date</th>
<th>End Date</th>
<th>TDay</th>
<th>Total Amount<br/>&pound;</th>
<th>Delete or Update</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td align="center"> <?php echo $row['BookingID'] ?> </td>
<td align="center"> <?php echo $row['CustomerID'] ?> </td>
<td align="center"> <?php echo $row['VesselName'] ?> </td>
<td align="center"> <?php echo $row['DestinationName'] ?> </td>
<td align="center"> <?php echo $row['EventTypeName'] ?> </td>
<td align="center"> <?php echo $row['VesselPrice'] ?> </td>
<td align="center"> <?php echo $row['EventPrice'] ?> </td>
<td align="center"> <?php echo $row['ItineraryPrice'] ?> </td>
<td align="right"> <?php echo $row['SDate'] ?></td>
<td align="right"> <?php echo $row['EDate'] ?></td>
<td align="center"> <?php echo $row['TDay'] ?> </td>
<td align="center"> <?php echo $row['TotalAmount'] ?></td>
<td><div id="Del"><a href = "Delete_Booking.php? BookingID=<?php echo $row['BookingID'] ?>" >Del</a>&nbsp;<a href = "Update_Booking.php? BookingID=<?php echo $row['BookingID'] ?>" class="update">Update</a> </div></td>
</tr>
<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>