<html>
	<head>
		<title> Peacock Marine Event Rented online System</title>
		<link href="image/peacock.jpg" rel="shortcut icon">
		<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script.js"></script>
<script>
    function myFunction() {
        var Password = document.getElementById("Password").value;
        var Password1 = document.getElementById("Password1").value;
        if (Password != Password1) {
            alert("Passwords Do not match");
            document.getElementById("Password").style.borderColor = "#E34234";
            document.getElementById("Password1").style.borderColor = "#E34234";
        }
        else {
            alert("Passwords Match!!!");
        }
    }
</script>

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

<li><a href="Admin.php">Admin</a></li>
</ul></div>
	<div id="register">
	<center>
	<form action="CustomerDB.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Customer Form </h1></caption>
	<tr>
	<td> <label> Customer Name </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Customer Name" required="required" name="CName"></td></tr>
	<tr>
	<td> <label> Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Password" required="required" name="Password" id="Password"></td>
	</tr>
	<tr>
	<td> <label> Confirm Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Confirm Password" required="required" name="Password1" id="Password1"></td>
	</tr>
	<tr>
	<td> <label> Email </label></td><td>:</td>
	<td> <input type="email" size="30" placeholder="Enter email" required="required" name="Email"></td>
	</tr>
	<tr>
	<td> <label> Phone No. </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Phone No" required="required" name="PhNo"></td>
	</tr>
	<tr>
	<th colspan="3">
	<input type="submit" value="Register" onclick="myFunction()" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>