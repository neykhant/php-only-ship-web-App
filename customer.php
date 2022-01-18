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
	<div id="register">
	<center>
	<form action="CustomerDB.php" method="post" name="frm">
	<table cellpadding="10px">
	<caption><h1> Customer Form </h1></caption>
	<tr>
	<td> <label> Customer Name </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Customer Name"  name="CName" required maxlength="30" pattern="[A-Za-z0-9. ]{3,30}" title="Any letters or digits but not special characters" autofocus /></td></tr>
	<tr>
	<td> <label> Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Password"  name="password" id="password" required maxlength="20" pattern="[\w]{6,20}" title="Atleast 6 characters password" onchange="if(this.checkValidity()) frm.confirmpassword.pattern = this.value;" / ></td>
	</tr>
	<tr>
	<td> <label> Confirm Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Confirm Password" required="required" name="confirmpassword" id="confirmpassword" required maxlength="20" title="confirm password and password must be matched" /></td>
	</tr>
	<tr>
	<td> <label> Email </label></td><td>:</td>
	<td> <input type="email" size="30" placeholder="Enter email"  name="Email" required maxlength="50" title="Valid email address" /></td>
	</tr>
	<tr>
	<td> <label> Phone No. </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Phone No" required="required" name="PhNo" maxlength="30" pattern="[0-9\-,]{0,30}" title="valid telephone number." /></td>
	</tr>
	<tr>
	<th colspan="3">
	<input type="submit" value="Register"  class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>