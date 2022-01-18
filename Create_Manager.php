
<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Cotton', $con);

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

$sql = "INSERT INTO Admin (admin_name, admin_password) VALUES ('$admin_name', '$admin_password')";

mysql_query($sql);
header('Location: Manager_Home.php');
?>
