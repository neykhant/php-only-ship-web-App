<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$DestinationID = $_POST['DestinationID'];
$DName = $_POST['DName'];
$DImage = $_FILES['DImage'] ['name'];
$tmp = $_FILES['DImage'] ['tmp_name'];


mysql_query("UPDATE `peacock`.`destination` SET `DestinationName` = '$DName',
`DestinationImage` = '$DImage' WHERE `destination`.`DestinationID` ='$DestinationID';");


header('Location: AdminDestinationLists.php');
?> 



