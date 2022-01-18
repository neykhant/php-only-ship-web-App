<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$VesselTypeID = $_POST['VesselTypeID'];
$VesselType = $_POST['VesselType'];
$SuitableForEvents = $_POST['SuitableForEvents'];
mysql_query("UPDATE `peacock`.`vesseltype` SET `VesselType` = '$VesselType',
`SuitableForEvents` = '$SuitableForEvents' WHERE `vesseltype`.`VesselTypeID` ='$VesselTypeID';");
header('Location: AdminVesselTypeLists.php');
?> 



