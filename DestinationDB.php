<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$DName = $_POST['DName'];
$DImage = $_FILES['DImage'] ['name'];
$tmp = $_FILES['DImage'] ['tmp_name'];
mysql_query("INSERT INTO `peacock`.`destination` (
`DestinationName` ,
`DestinationImage`
)
VALUES (
'$DName', '$DImage'
);");


header('Location: AdminDestinationLists.php');
?>