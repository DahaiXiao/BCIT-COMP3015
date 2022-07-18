<?php
session_start();
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

$rows = "SELECT '$name' FROM users WHERE name ='$name'";
$stmt1 = $conn->query($rows);
$row = mysqli_num_rows($stmt1);
//check empty data row
if ($row == 1) {
    echo "<script>alert('already exists！')</script>";
    echo ("<script>window.location.href='register.html'</script>");
} elseif ($pwd1 == $pwd2) {

    // $bcryptCost = 12;
    //$bcryptPasswordDigest = password_hash($pwd1, PASSWORD_BCRYPT, ['cost' => $bcryptCost]);

    $sql = "INSERT INTO users VALUES (NULL,'$pwd1','$email','$name')";
    $conn->query($sql);
    echo ("<script>alert('SUCESSFUL!')</script>");
    echo ("<script>window.location.href='login.html'</script>");
} else {
    echo "<script>alert('PW WRONG！')</script>";
    echo ("<script>window.location.href='register.html'</script>");
}
$conn->close();
