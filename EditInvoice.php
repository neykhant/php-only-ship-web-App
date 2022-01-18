<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);

$InvoiceID = $_POST['InvoiceID'];
$BookingID = $_POST['BookingID'];
$AdminStaffID = $_POST['AdminStaffID'];
$DateOfInvoice = $_POST['DateOfInvoice'];
mysql_query("UPDATE `peacock`.`invoice` SET `BookingID` = '$BookingID', `AdminStaffID` = '$AdminStaffID',
`DateOfInvoice` = '$DateOfInvoice' WHERE `invoice`.`InvoiceID` ='$InvoiceID';");
header('Location: AdminInvoiceLists.php');
?> 



