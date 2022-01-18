<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$VesselID = $_GET ['VesselID'];
$query =mysql_query("SELECT *
FROM `vessel` WHERE VesselID='$VesselID'");
 $row = mysql_fetch_assoc($query);
$_SESSION['VesselID']=$row['VesselID'];
$_SESSION['VesselName']=$row['VesselName'];
$_SESSION['VesselPrice']=$row['VesselPrice'];
header('Location: DestinationImage.php');
?>

