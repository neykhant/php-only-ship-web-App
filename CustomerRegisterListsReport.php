<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
session_start();
$VesselName=$_SESSION['VesselName'];
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
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result = mysql_query ("SELECT *
FROM `customer`");
?>
	<div id="main112">
	<center>
	
	<table border='1' >
<tr><th>Customer ID</th>
<th>Customer Name</th>
<th>Password</th>
<th>Phone No</th>
<th>Email</th>


</tr>
<tr>
<?php while ($row = mysql_fetch_assoc($result)):
?>
<td> <?php echo $row['CustomerID'] ?> </td>
<td> <?php echo $row['CustomerName'] ?> </td>
<td> <?php echo $row['Password'] ?> </td>
<td> <?php echo $row['PhNo'] ?></td>
<td> <?php echo $row['Email'] ?></td>
</tr>

<?php endwhile; ?>
</table>
	</center></div>
	</body>
</html>