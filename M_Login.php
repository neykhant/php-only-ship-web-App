<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$AName = $_POST['AName'];
$APassword = $_POST['APassword'];
$query = "SELECT * FROM admin WHERE admin_name = \"$AName\" AND admin_password = \"$APassword\" ";
$results = mysql_query($query);
$sql = mysql_num_rows($results);
if($sql>0)
{
$_SESSION['auth']=true;
header("location:Admin.php");
}
else{
header("location:AdminLogin.php");
}
?>

