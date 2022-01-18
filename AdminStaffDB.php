<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$AdminStaffName = $_POST['CName'];
$Password = $_POST['password'];
$ConPassword = $_POST['confirmpassword'];
$Post = $_POST['post'];
mysql_query ("INSERT INTO `peacock`.`adminstaff` (
`AdminStaffName` ,
`Password` ,
`ConPassword` ,
`Post`
)
VALUES (
 '$AdminStaffName', '$Password', '$ConPassword', '$Post'
);");


header('Location: AdminLogin1.php');
?>