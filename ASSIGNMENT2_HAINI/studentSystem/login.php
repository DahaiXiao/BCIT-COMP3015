<?php
session_start();
include "conn.php";
$name = $_POST['name'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM users WHERE name = '$name' and password_digest = '$pwd' ";

$stmt = $conn->query($sql);
$result = mysqli_fetch_array($stmt);

if ($stmt->num_rows > 0) {
    $_SESSION['user'] = $result[0];
    echo "<script>alert(\"Sucess! \")</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert(\"wrong password！\")</script>";
    echo "<script>window.location.href='login.html'</script>";
}
