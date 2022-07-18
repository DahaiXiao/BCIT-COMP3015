<?php
include("conn.php");
session_start();
?>

<html>

<head>
    <title>header</title>
    <link href="css/css1.css" rel="stylesheet">
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        button {
            top: 7px;
            right: 15px;
        }

        th {
            text-align: center;
        }

        .container {
            width: 100%;
        }

        .row {
            line-height: 50px;
        }

        .btn-warning {
            background-color: #f2226b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="background-color: #2e7ad5;color: white">
            <div style="font-size: 20px" class="col-xs-4">Course Management System </div>
            <a href="index.php"><span class="col-xs-1">CourseInfo</span></a>
            <a href="update.php"><span class="col-xs-1">Edit</span></a>
            <a href="select.php"><span class="col-xs-1">Search</span></a>
            <a href="add.php"><span class="col-xs-1">Add New </span></a>
            <span style="left: 60px" class="col-xs-2 col-xs-offset-1">User：<?php echo $_SESSION['user'] ?></span>
            <a href="login.html"><button class="col-xs-1 btn btn-danger">log out</button></a>
        </div>
    </div>
</body>

</html>