<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$dbHost = 'your database host';
$dbName = 'your database name';
$dbUsername = 'your database username';
$dbPassword = 'your database password';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
 
?>
