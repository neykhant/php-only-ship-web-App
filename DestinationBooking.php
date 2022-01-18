<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$DestinationID = $_GET ['DestinationID'];
$query =mysql_query("SELECT *
FROM `destination` WHERE DestinationID='$DestinationID'");
 $row = mysql_fetch_assoc($query);
$_SESSION['DestinationID']=$row['DestinationID'];
$_SESSION['DestinationName']=$row['DestinationName'];
header('Location: EventImage.php');
?>