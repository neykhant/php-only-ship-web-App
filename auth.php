<?php
session_start();
if(!isset($_SESSION['auth'])){
header("Location: Admin.php");
exist();}
?>