<?php 
require_once "loginHelpers.php";

$email = $_POST["email"];
$password = $_POST["password"];
  
if (emptyLoginFields($email, $password)) {
  header("location: login.php?error=emptyFields");//errow will be called on log in page
  exit();
}
loginUser($email, $password);

