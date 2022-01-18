<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
session_start();

$cid=$_SESSION["CustomerID"];
$etname=$_SESSION['EventTypeID'];
$dtname=$_SESSION['DestinationID'];
$vname=$_SESSION['VesselName'];
$dname=$_SESSION['DestinationName'];
$ename=$_SESSION['EventTypeName'];
$iname=$_SESSION['ItineraryName'];
$epname=$_SESSION['EventPrice'];
$vpname=$_SESSION['VesselPrice'];
$ipname=$_SESSION['ItineraryPrice'];
$sname=$_SESSION['SDate'];
$ename=$_SESSION['EDate'];
$tday=$ename-$sname; 
$amount=$epname+$ipname+$vpname;
$total=$amount*$tday;
//$tdname=
$result=mysql_query("Insert Into booking(CustomerID,EventTypeID,DestinationID,VesselName,DestinationName,EventTypeName,ItineraryName,EventPrice,VesselPrice,ItineraryPrice,SDate,EDate,TDay,Amount,TotalAmount) 
Values
($cid,$etname,$dtname,'$vname','$dname','$ename','$iname',$epname,$vpname,$ipname,'$sname','$ename',$tday,$amount,$total)
");

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
	<div id="booking">
	<center>
	<form action="BookingDB.php" method="post">
	<table cellpadding="2px">
	<caption><h1> Booking Form </h1></caption>
		
	<tr>
	<td> <label> Customer ID </label></td><td>:</td>
	<td> <input type="text" size="30" id = "CustomerID" value="<?php echo $_SESSION['CustomerID'] ?>" required="required" name="CustomerID"></td></tr>
	<tr>
	<td> <label>Vessel Name  </label></td><td>:</td>
	<td> <input type="text" size="30" id = "VesselName" value="<?php echo $_SESSION['VesselName'] ?>" required="required"  name="VesselName"></td></tr>
	<tr>
	<td> <label> Destination Name </label></td><td>:</td>
	<td> <input type="text" size="30" id = "DestinationName" value="<?php echo $_SESSION['DestinationName'] ?>" required="required"  name="DestinationName"></td></tr>
	<tr>
	<td> <label> Event Type Name </label></td><td>:</td>
	<td> <input type="text" size="30" id = "EventTypeName" value="<?php echo $_SESSION['EventTypeName'] ?>" required="required"  name="EventTypeName"></td></tr>
	<tr>
	<td> <label> Itinerary Name </label></td><td>:</td>
	<td> <input type="text" size="30" id = "ItineraryName" value="<?php echo $_SESSION['ItineraryName'] ?>" required="required"  name="ItineraryName"></td></tr>
	<tr>
	<td> <label> Event Price </label></td><td>:</td>
	<td> <input type="text" size="30" id = "EventPrice" value="<?php echo $_SESSION['EventPrice'] ?>" required="required"  name="EventPrice"></td></tr>
	<tr>
	<td> <label> Vessel Price </label></td><td>:</td>
	<td> <input type="text" size="30" id = "VesselPrice" value="<?php echo $_SESSION['VesselPrice'] ?>" required="required"  name="VesselPrice"></td></tr>
	<tr>
	<td> <label> Itinerary Price </label></td><td>:</td>
	<td> <input type="text" size="30" id = "ItineraryPrice" value="<?php echo $_SESSION['ItineraryPrice'] ?>" required="required"  name="ItineraryPrice"></td></tr>
	<tr>
	<td> <label> Start Date</label></td><td>:</td>
	<td> <input type="date" size="30" value="<?php echo $_SESSION['SDate'] ?>" required="required" name="SDate"></td>
	</tr>
	<tr>
	<td> <label> End Date</label></td><td>:</td>
	<td> <input type="date" size="30" value="<?php echo $_SESSION['EDate'] ?>" required="required" name="EDate"></td>
	</tr>
	<tr> 
	<th colspan="3">
	<a href = "ConfirmBooking.php? CustomerID=<?php echo $_SESSION['CustomerID'] ?>" >
	<input type="button" value="Booking" class="button1"> <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	<tr>
	<td> <label>  </label></td><td></td>
	<td> <input type="hidden"   size="30" id = "EventTypeID" value="<?php echo $_SESSION['EventTypeID'] ?>" required="required"  name="EventTypeID"></td></tr>
	<tr>
	<td> <label>  </label></td><td></td>
	<td> <input type="hidden"   size="30" id = "DestinationID" value="<?php echo $_SESSION['DestinationID'] ?>" required="required"  name="DestinationID"></td></tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>