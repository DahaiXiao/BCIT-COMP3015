<?php
$host = "lcpbq9az4jklobvq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "tr59eycvf4w6vjo9";
$password = "m496t76of1jtaxgl";
$dbname = "y4a85dv4rk5bsnpo";


// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);  

// check connection
if (!$conn) {  
    die("Connection failed: " . mysqli_connect_error());  
}  
echo "Connected successfully";  
?>