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
	<div id="main112"><center>
	<h1> Image </h1>
	<h3>Event Image</h3>
	
	<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$result = mysql_query ("SELECT * FROM EventType");
?>
	

<?php while ($row = mysql_fetch_assoc($result)):
?>
<div class="s"> <div class="pic">
 <a href="CEventTypeLists.php"><img src="image/<?php echo $row['EventImage'] ?>" width="100px" height="100px"></a>

<?php endwhile; ?>
</div></div>
	
	</body>
</html>