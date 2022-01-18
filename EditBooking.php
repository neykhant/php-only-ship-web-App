<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$BookingID = $_POST['BookingID'];
$CustomerID = $_POST['CustomerID'];
$EventTypeID = $_POST['EventTypeID'];
$DestinationID = $_POST['DestinationID'];
$SDate = $_POST['SDate'];
$EDate = $_POST['EDate'];
$TotalAmount = $_POST['TotalAmount'];

mysql_query("UPDATE `peacock`.`booking` SET `CustomerID` = '$CustomerID',
`EventTypeID` = '$EventTypeID',
`DestinationID` = '$DestinationID',
`SDate` = '$SDate',
`EDate` = '$EDate',
`TotalAmount` = '$TotalAmount' WHERE `booking`.`BookingID` ='$BookingID';");

header('Location: AdminBookingLists.php');
?> 



