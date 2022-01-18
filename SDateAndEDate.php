<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
session_start();

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
<li><a href="Contact.php">Contact</a></li>
<li><a href="AdminLogin.php">Admin Login</a></li>
<li><a href="index.php"> Logout</a></li>

</ul></div>
	<div id="booking">
	<center>
	<form action="SDateAndEDateDB.php" method="post">
	<table cellpadding="2px">
	<caption><h1> Start Date And End Date </h1></caption>
		
	<tr>
	<td> <label> Start Date</label></td><td>:</td>
	<td> <input type="date" size="30" placeholder="Enter Start Date: yyyy-mm-dd" required="required" name="SDate"></td>
	</tr>
	<tr>
	<td> <label> End Date</label></td><td>:</td>
	<td> <input type="date" size="30" placeholder="Enter End Date: yyyy-mm-dd" required="required" name="EDate"></td>
	</tr>
	<tr> 
	<th colspan="3">
	
	<input type="Submit" value="Search" class="button1">&nbsp; <input type="reset" value="Cancel" class="button1"></th>
	</tr>
	</table>
	</form>
	
	</center></div>
	</body>
</html>