<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$EventTypeID = $_GET ['EventTypeID'];
mysql_query("DELETE FROM `peacock`.`eventtype` WHERE `eventtype`.`EventTypeID` = '$EventTypeID'");
header('Location: AdminEventTypeLists.php');
?>