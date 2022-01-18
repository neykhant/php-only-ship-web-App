<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$AName = $_POST['AName'];
$APassword = $_POST['APassword'];
$query = "SELECT *
FROM `adminstaff` WHERE AdminStaffName = \"$AName\" AND Password = \"$APassword\" ";
$results = mysql_query($query);
$sql = mysql_num_rows($results);
if($sql>0)
{
$_SESSION['auth']=true;
header("location:Invoice.php");
}
else{
header("location:AdminLogin1.php");
}
?>

