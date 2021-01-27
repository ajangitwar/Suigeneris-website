<?php
session_start();

$db = 'user';
$server = 'localhost';
$dbname = 'root';
$dbpass = '';

// --> connect to the database

$connect = mysqli_connect($server,$dbname,$dbpass,$db);
?>

