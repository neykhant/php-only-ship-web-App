<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$VesselID = $_GET ['VesselID'];
mysql_query("DELETE FROM `peacock`.`vessel` WHERE `vessel`.`VesselID` = '$VesselID'");
header('Location: AdminVesselLists.php');
?>