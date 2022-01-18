<?php
include("auth.php");
?>

<html>
<head>
<title> Manager_Home</title>
<link href="s1.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div id="header">
	</div>
	<div id="menu">
		<a class="menu" href="Manager_home.php"> Reort </a>
		<a class="menu" href="Manager_Lists.php"> ManagerLists  </a>
		<a class="menu" href="Manager_home.php"> Add Item </a>
		<a class="menu" href="Manager_home.php"> Invoice </a>
		<a class="menu" href="index.php"> Logout </a>
	</div>

<center>
<table border="2">
<tr>
<td>


<h2> Report For........ </h2>
<ul>
<li><a href="Showitem1.php"> Item Lists </a></li>
<li><a href="Customer_Lists.php"> Customer Lists </a></li>
<li><a href="Order_Lists.php"> Order Lists</a></li>
<li><a href="Invoice_Lists.php"> Payment Lists </a></li>
<li><a href="Manager_Lists.php"> Manager Lists </a></li>
</td>
<td>

<h2> Create New........ </h2>
<ul>
<li><a href="Add_Item.php"> Item </a></li>
<li><a href="Add_Invoice.php"> Payment </a></li>
</ul>
</td></tr></table>

</body>
</html>
