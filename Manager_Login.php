
<html>
<head>
<title> Manager_Login </title>
<link href="s1.css" type="text/css" rel="stylesheet"/>
<script>
	function validateform() {
	var user=document.login.M_Username.value;
	var user=user.trim();
	var pass=document.login.M_Password.value;
		if (user=="")
		{ document.getElementById("error").innerHTML="Please Enter Manager Username";
			return false;
		}
		if (pass=="")
		{ document.getElementById("error").innerHTML="Please Enter Manager Password";
			return false;
		}
	}
	</script>
</head>
<body>
<div id="header">
	</div>
	<div id="menu">
		<a class="menu" href="index.php"> Home </a>
		
	</div>

<center>
<h1>Manager Login</h1>

<form action="M_Login.php" method="post" onsubmit="return validateform()" id="login" name="login" class="form2">
<font color="white">
<fieldset width="300px"> <legend> Manager Login </legend>
<div id = "error" class="div2"></div>
<img src="images/aa.gif" width="30px" height="30px">
<label for = "admin_name">Manager Username</label>

<input type="text" name="admin_name" id="admin_name" placeholder="Enter Manager Username"><br/>

<img src="images/bb.png" width="30px" height="30px">

<label for = "admin_password"> Manager Password</label>

<input type="password" name="admin_password" id="admin_password" placeholder="Enter Manager Password">
<br/>
<input type="submit" value="Log In" name="button" id="button">
</fieldset>
</font>
</form>
 



</body>
</html>
