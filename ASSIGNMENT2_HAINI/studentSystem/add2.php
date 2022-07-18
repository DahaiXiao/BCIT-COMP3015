<?php
session_start();
include "conn.php";
$coursename = $_POST['coursename'];
$completed = $_POST['completed'];

$rows = "SELECT author_id FROM courses WHERE author_id='$_SESSION[user]'";
$stmt1 = $conn->query($rows);
$row = mysqli_num_rows($stmt1);
$sql = "INSERT INTO courses VALUE (NULL,'$coursename','$completed','$_SESSION[user]')";
$stmt = $conn->query($sql);
echo ("<script>window.location.href='index.php'</script>");


$conn->close();
