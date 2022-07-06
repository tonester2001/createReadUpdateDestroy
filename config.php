<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$dbHost = 'localhost';
$dbName = 'test';
$dbUsername = 'root';
$dbPassword = '';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
 
?>
