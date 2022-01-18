<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$ItineraryID = $_GET ['ItineraryID'];
$query =mysql_query("SELECT *
FROM `itinerary` WHERE ItineraryID='$ItineraryID'");
 $row = mysql_fetch_assoc($query);
$_SESSION['ItineraryID']=$row['ItineraryID'];
$_SESSION['ItineraryName']=$row['ItineraryName'];
$_SESSION['ItineraryPrice']=$row['ItineraryPrice'];
header('Location:Booking.php');
?>