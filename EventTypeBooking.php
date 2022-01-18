<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$EventTypeID = $_GET ['EventTypeID'];
$query =mysql_query("SELECT *
FROM `eventtype` WHERE EventTypeID='$EventTypeID'");
 $row = mysql_fetch_assoc($query);
$_SESSION['EventTypeID']=$row['EventTypeID'];
$_SESSION['EventTypeName']=$row['EventTypeName'];
$_SESSION['EventPrice']=$row['EventPrice'];
header('Location:ItineraryLists.php');
?>