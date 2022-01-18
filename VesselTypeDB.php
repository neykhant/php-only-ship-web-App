<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$VType = $_POST['VType'];
$SFEvents = $_POST['SFEvents'] ;
mysql_query("INSERT INTO `peacock`.`vesseltype` (
`VesselType` ,
`SuitableForEvents`
)
VALUES (
'$VType', '$SFEvents'
);");




header('Location: AdminVesselTypeLists.php');
?>