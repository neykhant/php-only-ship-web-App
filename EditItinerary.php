<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$ItineraryID = $_POST['ItineraryID'];
$ItineraryName = $_POST['ItineraryName'];
$ItineraryPrice = $_POST['ItineraryPrice'];
mysql_query("UPDATE `peacock`.`itinerary` SET `ItineraryName` = '$ItineraryName',
`ItineraryPrice` = '$ItineraryPrice' WHERE `itinerary`.`ItineraryID` ='$ItineraryID';");

header('Location: AdminItineraryLists.php');
?> 



