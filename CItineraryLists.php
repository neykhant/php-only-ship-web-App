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
<li><a href="index.php">Home</a></li>
<li><a href="customer.php"> Register</a></li>
<li><a href="Customer_login.php"> Login</a></li>

<li onClick="toggleSub()">
<a href="#">image &raquo;</a>
<ul class="sub" id="sub">
	
<li><a href="CDestinationImage.php">Destination Image</a></li>

<li><a href="CVesselImage.php">Vessel Image</a></li>
	
<li><a href="CEventImage.php">Event Image</a></li>
</ul>
</li>
<li onClick="toggleSub1()">
<a href="#">Vessel &raquo;</a>
<ul class="sub1" id="sub1">
	
<li><a href="CVesselTypeLists.php">Vessel Type Lists</a></li>
	
<li><a href="CEventTypeLists.php">Event Type Lists</a></li>
<li><a href="CItineraryLists.php">Itinerary Lists</a></li>
<li><a href="CDestinationLists.php">Destination Lists</a></li>
</ul>
</li>

<li><a href="AdminLogin.php">Admin Login</a></li>
</ul></div>
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result = mysql_query ("SELECT * FROM Itinerary");
?>
	<div id="main1">
	<center>
	<h1> Itinerary Lists </h1>
<table border='1' >
<tr bgcolor="#c5d5f2"><th>Itinerary ID</th>
<th>Itinerary Name</th>
<th>Itinerary Price<br/>&pound;</th>
</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td align="center"> <?php echo $row['ItineraryID'] ?> </td>
<td align="right"> <?php echo $row['ItineraryName'] ?></td>
<td align="center"> <?php echo $row['ItineraryPrice'] ?></td>

</tr>
<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>