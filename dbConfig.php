<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'alen.grace@123';
$dbName = 'home_rental';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>