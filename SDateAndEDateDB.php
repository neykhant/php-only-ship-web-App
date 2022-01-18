<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$SDate = $_POST['SDate'];
$EDate = $_POST['EDate'];
$result = mysql_query("SELECT VesselName FROM Booking WHERE SDate='$SDate' OR EDate='$EDate'");
$row = mysql_fetch_assoc($result);
$_SESSION['VesselName']=$row['VesselName'];
$result = mysql_query("INSERT INTO `peacock`.`sdateedate` (
`SDate` ,
`EDate`
)
VALUES ( '$SDate', '$EDate'
);");
$row = mysql_fetch_assoc($result);
$_SESSION['SDate']=$row['SDate'];
$_SESSION['EDate']=$row['EDate'];
header('Location: VesselImage.php');

?>
