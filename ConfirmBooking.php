
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
	session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$CustomerID = $_GET ['CustomerID'];
$result = mysql_query ("SELECT BookingID,CustomerID,VesselName,VesselPrice,EventPrice,ItineraryPrice,SDate,EDate,EDate-SDate AS TDay,VesselPrice+EventPrice+ItineraryPrice AS TotalAmount
FROM booking WHERE CustomerID='$CustomerID'");
$row = mysql_fetch_assoc($result);


?>
	<div id="main112">
	<form method="post"  action="" >

<center><table cellspacing="20px">
<caption><h1> Confirm Booking </h1></caption>
<tr>
<td><label > Booking ID </label></td>
<td><input type="text" id = "BookingID" name = "BookingID" value= "<?php echo $row['BookingID'] ?>"></td></tr>
<tr>
<td><label > Customer ID </label></td>
<td><input type="text" id = "CustomerID" name = "CustomerID" value= "<?php echo $row['CustomerID'] ?>"></td></tr>
<tr>
<td><label > VesselName </label></td>
<td><input type="text" id = "VesselName" name = "VesselName" value= "<?php echo $row['VesselName'] ?>"></td></tr>
<tr>
<td><label > VesselPrice </label></td>
<td><input type="text" id = "VesselPrice" name = "VesselPrice" value= "<?php echo $row['VesselPrice'] ?>"></td></tr>
<tr>
<td><label > Event Price </label></td>
<td><input type="text" id = "EventPrice" name = "EventPrice" value= "<?php echo $row['EventPrice'] ?>"></td></tr>
<tr>
<td><label > ItineraryPrice </label></td>
<td><input type="text" id = "ItinerayPrice" name = "ItineraryPrice" value= "<?php echo $row['ItineraryPrice'] ?>"></td></tr>
<tr>
<td><label > TDay </label></td>
<td><input type="text" id = "TDay" name = "TDay" value= "<?php echo $row['TDay'] ?>"></td></tr>
<tr>
<td><label > Total Amount </label></td>
<td><input type="text" id = "TotalAmount" name = "TotalAmount" value= "<?php echo $row['TotalAmount'] ?>"></td></tr>
<tr>
<td><label > Total Price </label></td>
<td><input type="text" id = "TotalPrice" name = "TotalPrice" value= "<?php echo $row['TotalAmount']*$row['TDay'] ?>"></td></tr>
<tr>
<th colspan="2"> 
<a href="Thanks.php"><input type="button" value="OK" class="button1"> </a><a href="SDateAndEDate.php"><input type="button" class="button1" value="Cancel"></a></th>
</tr>
</table></form>
</div>

	</body>
</html>