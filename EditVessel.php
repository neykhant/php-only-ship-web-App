<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$VesselID = $_POST['VesselID'];
$VName = $_POST['VName'];
$VTID = $_POST['VTID'];
$VPrice = $_POST['VPrice'];
$VImage = $_FILES['VImage'] ['name'];
$tmp = $_FILES['VImage'] ['tmp_name'];


mysql_query("UPDATE `peacock`.`vessel` SET `VesselName` = '$VName',
`VesselTypeID` = '$VTID',
`VesselPrice` = '$VPrice',
`VesselImage` = '$VImage' WHERE `vessel`.`VesselID` ='$VesselID';");


header('Location: AdminVesselLists.php');
?> 



