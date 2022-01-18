<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$BookingID = $_GET ['BookingID'];
mysql_query("DELETE FROM `peacock`.`booking` WHERE `booking`.`BookingID` = '$BookingID'");
header('Location: AdminBookingLists.php');
?>