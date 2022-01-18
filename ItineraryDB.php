<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$IName = $_POST['IName'];
$IPrice = $_POST['IPrice'] ;
mysql_query("INSERT INTO `peacock`.`itinerary` (
`ItineraryName` ,
`ItineraryPrice`
)
VALUES (
'$IName', '$IPrice'
);");



header('Location: AdminItineraryLists.php');
?>