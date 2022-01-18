<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$VesselTypeID = $_GET ['VesselTypeID'];
mysql_query("DELETE FROM `peacock`.`vesseltype` WHERE `vesseltype`.`VesselTypeID` = '$VesselTypeID'");
header('Location: AdminVesselTypeLists.php');
?>