<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$VName = $_POST['VName'];
$VesselTypeID = $_POST['VesselTypeID'];
$VPrice = $_POST['VPrice'];
$VImage = $_FILES['VImage'] ['name'];
$tmp = $_FILES['VImage'] ['tmp_name'];
mysql_query("INSERT INTO `peacock`.`vessel` (
`VesselName` ,
`VesselTypeID` ,
`VesselPrice` ,
`VesselImage`
)
VALUES (
 '$VName', '$VesselTypeID', '$VPrice', '$VImage'
);");


header('Location: AdminVesselLists.php');
?>