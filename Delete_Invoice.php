<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
$InvoiceID = $_GET ['InvoiceID'];
mysql_query("DELETE FROM `peacock`.`invoice` WHERE `invoice`.`InvoiceID` = '$InvoiceID'");
header('Location: AdminInvoiceLists.php');
?>