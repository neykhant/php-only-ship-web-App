<?php
session_start();
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$BookingID = $_POST['BookingID'];
$AdminStaffID = $_POST['AdminStaffID'];
$DateOfInvoice = $_POST['DateOfInvoice'] ;
mysql_query("INSERT INTO `peacock`.`invoice` (
`BookingID` ,
`AdminStaffID` ,
`DateOfInvoice`
)
VALUES (
'$BookingID', '$AdminStaffID', '$DateOfInvoice'
);");




header('Location: InvoiceSuccess.php');
?>