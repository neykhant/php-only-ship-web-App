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
	<div id="Itinerary">
	<center>
	<form action="C_Login.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Login Form</h1></caption>
	<tr>
	<td> <label> Customer Name </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Customer Name" required="required" name="CName"></td></tr>
	<tr>
	<td> <label> Customer Password</label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Password" required="required" name="CPassword"></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Login" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	<h3> If you are not member </h3> <a href="Customer.php"> Register </a>
	</center></div>
	</body>
</html>