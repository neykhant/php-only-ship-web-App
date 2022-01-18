<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db('Peacock', $con);
$CustomerID = $_POST['CustomerID'];
$EventTypeID = $_POST['EventTypeID'];
$DestinationID = $_POST['DestinationID'];
$VesselName = $_POST['VesselName'];
$DestinationName = $_POST['DestinationName'];
$EventTypeName = $_POST['EventTypeName'];
$ItineraryName = $_POST['ItineraryName'];
$EventPrice = $_POST['EventPrice'];
$VesselPrice = $_POST['VesselPrice'];
$ItineraryPrice= $_POST['ItineraryPrice'];
$SDate = $_POST['SDate'];
$EDate = $_POST['EDate'];
$TDay = $_POST['TDay'];
$Amount = $_POST['Amount'];
$TAmount = $_POST['TAmount'];
mysql_query("INSERT INTO `peacock`.`booking` (
`CustomerID` ,
`EventTypeID` ,
`DestinationID` ,
`VesselName` ,
`DestinationName` ,
`EventTypeName` ,
`ItineraryName` ,
`EventPrice` ,
`VesselPrice` ,
`ItineraryPrice` ,
`SDate` ,
`EDate` ,
`TDay` ,
`TotalAmount`
)
VALUES (
 '$CustomerID', '$EventTypeID', '$DestinationID', '$VesselName', '$DestinationName', 
 '$EventTypeName', '$ItineraryName', '$EventPrice', '$VesselPrice', 
 '$ItineraryPrice', '$SDate', '$EDate', '$TDay', '$TotalAmount'
);

");

header('Location: ConfirmBooking.php');
?>