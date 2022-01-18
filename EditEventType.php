<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$EventTypeID = $_POST['EventTypeID'];
$EventTypeName = $_POST['EventTypeName'];
$EventPrice = $_POST['EventPrice'];
$EventImage = $_FILES['EventImage'] ['name'];
$tmp = $_FILES['EventImage'] ['tmp_name'];
mysql_query("UPDATE `peacock`.`eventtype` SET `EventTypeName` = '$EventTypeName',
`EventPrice` = '$EventPrice',
`EventImage` = '$EventImage' WHERE `eventtype`.`EventTypeID` ='$EventTypeID ';");
header('Location: AdminEventTypeLists.php');
?> 



