<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$dbHost = 'YOUR_DB_HOST';
$dbName = 'YOUR_DB_NAME';
$dbUsername = 'YOUR_DB_USERNAME';
$dbPassword = 'YOUR_DB_PASSWORD';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
 
?>
