<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$DestinationID = $_GET ['DestinationID'];
mysql_query("DELETE FROM `peacock`.`destination` WHERE `destination`.`DestinationID` = '$DestinationID'");
header('Location: AdminDestinationLists.php');
?>