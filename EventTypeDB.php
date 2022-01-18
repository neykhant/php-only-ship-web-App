<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$ETName = $_POST['ETName'];
$EPrice = $_POST['EPrice'];
$EImage = $_FILES['EImage'] ['name'];
$tmp = $_FILES['EImage'] ['tmp_name'];
mysql_query("INSERT INTO `peacock`.`eventtype` (
`EventTypeName` ,
`EventPrice` ,
`EventImage`
)
VALUES (
'$ETName', '$EPrice', '$EImage'
);");



header('Location: AdminEventTypeLists.php');
?>