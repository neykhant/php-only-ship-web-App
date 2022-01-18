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
<li><a href="Admin.php">Admin Staff Register</a></li>
<li><a href="AdminLogin1.php"> Admin Staff Login</a></li>

</ul></div>
	<div id="Itinerary1">
	<center>
	<form action="AdminStaffDB.php" method="post" name="frm">
	<table cellpadding="10px">
	<caption><h1>  Admin Staff Register </h1></caption>
	<tr>
	<td> <label> Admin  Staff Name </label></td><td>:</td>
	<td> <input type="text" size="30" placeholder="Enter Customer Name"  name="CName" required maxlength="30" pattern="[A-Za-z0-9. ]{3,30}" title="Any letters or digits but not special characters" autofocus /></td></tr>
	<tr>
	<td> <label> Admin Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Password"  name="password" id="password" required maxlength="20" pattern="[\w]{6,20}" title="Atleast 6 characters password" onchange="if(this.checkValidity()) frm.confirmpassword.pattern = this.value;" / ></td>
	</tr>
	<tr>
	<td> <label> Confirm Password </label></td><td>:</td>
	<td> <input type="password" size="30" placeholder="Enter Confirm Password" required="required" name="confirmpassword" id="confirmpassword" required maxlength="20" title="confirm password and password must be matched" /></td>
	</tr>
	<tr>
	<td> <label> Staff Post</label></td><td>:</td>
	<td> <select name="post">
	<option value="staff"> Staff</option>
	<option value="manager">Manager </option>
	<option value="jmanager"> Junior Manager </option>
	</select></td>
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