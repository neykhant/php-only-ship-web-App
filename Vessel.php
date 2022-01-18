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
</li><li onClick="toggleSub2()">
<a href="#">Edit/Delete &raquo;</a>
<ul class="sub2" id="sub2">
	

<li><a href="AdminBookingLists.php">Booking Lists</a></li>
<li><a href="AdminDestinationLists.php">Destination Lists</a></li>
<li><a href="AdminEventTypeLists.php">Event Type Lists</a></li>	
<li><a href="AdminInvoiceLists.php">Invoice Lists</a></li>
<li><a href="AdminItineraryLists.php">Itinerary Lists</a></li>
</ul>
</li>

<li><a href="Invoice.php">Invoice</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>
	<div id="register">
	<center>
	<form action="VesselDB.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Add Vessel </h1></caption>
	<tr>
	<td> <label> Vessel Name </label></td><td>:</td>
	<td> <select name="VName">
	<option value="SS Diana"> SS Diana </option>
	<option value="SS Esmereida"> SS Esmereida </option>
	<option value="SS Madam "> SS Madam </option>
	<option value="Missy"> Missy </option>
	<option value="WhitstableYY Esmereida"> YY Esmereida </option>
	<option value="YY Diana"> YY Diana </option>
	<option value="YY Easten"> YY Easten </option>
	<option value="YY Weasr "> YY Weasr </option>
	<option value="YY Sunshine"> YY Sunshine </option>
	
	</select></td>
	</tr>
	<?php
// select box open tag
$selectBoxOpen =  "<select name='VesselTypeID'>"; 
// select box close tag
$selectBoxClose =  "</select>";
// select box option tag
$selectBoxOption = ''; 
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result1 = mysql_query ("SELECT * FROM VesselType" );
while($row1 = mysql_fetch_array($result1)){   
    $selectBoxOption .="<option value = '".$row1['VesselTypeID']."'>".$row1['VesselTypeID']."</option>"; 
}
 
// create select box tag with Cinema result1
$selectBox =  $selectBoxOpen.$selectBoxOption.$selectBoxClose;

?>
	<tr>
	
	<td> <label> Vessel Type ID</label></td><td>:</td>
	<td> <?php echo $selectBox;?>
</td>
	</tr>
	<tr>
	<td> <label> Vessel Price </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Vessel Price" required="required" name="VPrice"></td>
	</tr>
	<tr>
	<td> <label> Vessel Image</label></td><td>:</td>
	<td> <input type="file" size="30" placeholder="Enter Destination Image" required="required" name="VImage"></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Add Vessel" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>