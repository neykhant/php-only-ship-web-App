<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$ItineraryID = $_GET ['ItineraryID'];
mysql_query("DELETE FROM `peacock`.`itinerary` WHERE `itinerary`.`ItineraryID` = '$ItineraryID'");
header('Location: AdminItineraryLists.php');
?>