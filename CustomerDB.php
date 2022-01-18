<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$CName = $_POST['CName'];
$Password = $_POST['password'];
$Password1 = $_POST['confirmpassword1'];
$Email = $_POST['Email'];
$PhNo = $_POST['PhNo'];
 
mysql_query("INSERT INTO `peacock`.`customer` (
`CustomerName` ,
`Password` ,
`Email` ,
`PhNo`
)
VALUES (
'$CName', '$Password', '$Email', '$PhNo'
);");

header('Location: C_login.php');
?>