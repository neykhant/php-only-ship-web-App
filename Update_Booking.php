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
$BookingID = $_GET['BookingID'];
$result = mysql_query ("SELECT * FROM Booking WHERE BookingID=$BookingID");
$row = mysql_fetch_assoc($result);
?>
<form method="post"  action="EditBooking.php" >
<input type = "hidden" name = "BookingID" value = "<?php echo $row['BookingID'] ?>"> 
<center><table cellspacing="20px">
<caption><h1> Editing Booking </h1></caption>
<tr>
<td><label > Customer ID </label></td>
<td><input type="text" id = "CustomerID" name = "CustomerID" value= "<?php echo $row['CustomerID'] ?>"></td></tr>
<?php
// select box open tag
$selectBoxOpen =  "<select name='EventTypeID'>"; 
// select box close tag
$selectBoxClose =  "</select>";
// select box option tag
$selectBoxOption = ''; 
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result1 = mysql_query ("SELECT * FROM EventType" );
while($row1 = mysql_fetch_array($result1)){   
    $selectBoxOption .="<option value = '".$row1['EventTypeID']."'>".$row1['EventTypeID']."</option>"; 
}
 
// create select box tag with Cinema result1
$selectBox =  $selectBoxOpen.$selectBoxOption.$selectBoxClose;

?>
	<tr>
	
	<td> <label> Event Type ID</label></td>
	<td> <?php echo $selectBox;?>
</td>
	</tr>
	<?php
// select box open tag
$selectBoxOpen1 =  "<select name='DestinationID'>"; 
// select box close tag
$selectBoxClose1 =  "</select>";
// select box option tag
$selectBoxOption1 = ''; 
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result2 = mysql_query ("SELECT * FROM Destination" );
while($row2 = mysql_fetch_array($result2)){   
    $selectBoxOption1 .="<option value = '".$row2['DestinationID']."'>".$row2['DestinationID']."</option>"; 
}
 
// create select box tag with Cinema result1
$selectBox1 =  $selectBoxOpen1.$selectBoxOption1.$selectBoxClose1;

?>
	<tr>
	<td> <label> Destrinadion ID</label></td>
	<td> <?php echo $selectBox1;?></td>
	</tr>
	
	<tr>
	<td> <label> Start Date</label></td>
	<td> <input type="date" size="30" value= "<?php echo $row['SDate'] ?>" required="required" name="SDate"></td>
	</tr>
	<tr>
	<td> <label> End Date</label></td>
	<td> <input type="date" size="30" value= "<?php echo $row['EDate'] ?>" required="required" name="EDate"></td>
	</tr>
	<tr>
	<td> <label> Total Amount </label></td>
	<td> <input type="text" size="30" value= "<?php echo $row['TotalAmount'] ?>" required="required" name="TotalAmount"></td>
	</tr>
	<tr>
	<th colspan="2">
	<input type="submit" value="Booking" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
</body>
</html>