<?php
include "conn.php";
$courseid = $_GET['id'];
echo $courseid;
$sql = "DELETE FROM courses WHERE id = '$courseid'";
$stmt = $conn->query($sql);
if ($stmt > 0) {
    echo "<script>alert('The course is deleted!')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo ("<script>alert('Fail to deleted!')</script>");
    echo ("<script>window.location.href='index.php'</script>");
}
$conn->close();
