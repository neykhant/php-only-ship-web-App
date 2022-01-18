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
<li><a href="AdminLogin.php">Admin Login</a></li>

</ul></div>
	<div id="Itinerary">
	<center>
	<form action="M_Login.php" method="post">
	<table cellpadding="10px">
	<caption><h1> Admin</h1></caption>
	<tr>
	<td> <label> Admin Name </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Admin Name"  name="AName" required maxlength="30" pattern="[A-Za-z0-9. ]{3,30}" title="Any letters or digits but not special characters" autofocus /></td></tr>
	<tr>
	<td> <label> Admin Password</label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Password" title="Atleast 6 characters password" name="APassword" required maxlength="20" pattern="[\w]{6,20}" / ></td>
	</tr>
	
	<tr>
	<th colspan="3">
	<input type="submit" value="Admin" class="button1">&nbsp; 
	<input type="reset" value="Cancel" class="button1">
	</th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>