<?php
session_start();
include "conn.php";


$coursename = $_POST['coursename'];
$completed = $_POST['completed'];

$courseid = $_POST['id'];
//echo $coursename;
$sql = "UPDATE courses SET coursename='$coursename', completed ='$completed' WHERE id = '$courseid'";
$stmt = $conn->query($sql);
echo ("<script>window.location.href='index.php'</script>");
