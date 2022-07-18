<?php

$hostname = 'lcpbq9az4jklobvq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username = 'tr59eycvf4w6vjo9';
$databasePassword = 'm496t76of1jtaxgl';
$databaseName = 'y4a85dv4rk5bsnpo';
//create mysql connection

$conn = new mysqli($hostname, $username, $databasePassword, $databaseName);


// check sql connection status
if ($conn->connect_error) {
    die("connection wrong!: " . $conn->connect_error);
}
