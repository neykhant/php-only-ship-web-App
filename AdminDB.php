<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$AName = $_POST['AName'];
$APassword = $_POST['APassword'];

mysql_query("INSERT INTO `peacock`.`admin` (
`admin_name` ,
`admin_password`
)
VALUES (
'$AName', '$APassword'
);");

header('Location: Adminlogin.php');
?>