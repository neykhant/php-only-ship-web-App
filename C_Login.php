<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$CName = $_POST['CName'];
$CPassword = $_POST['CPassword'];
$query = "SELECT * FROM Customer WHERE CustomerName = \"$CName\" AND Password = \"$CPassword\" ";
$results = mysql_query($query);
$sql = mysql_num_rows($results);
if($sql>0)
{
$_SESSION['auth']=true;
header("location:SDateAndEDate.php");
}
else{
header("location:Customer_Login.php");
}
$query = mysql_query("SELECT CustomerID FROM Customer WHERE CustomerName = '$CName'");
$row = mysql_fetch_assoc($query);
$_SESSION['CustomerID']=$row['CustomerID'];
?>

