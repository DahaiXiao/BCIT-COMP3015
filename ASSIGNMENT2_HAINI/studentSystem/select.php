<?php
include("conn.php");
?>

<html>

<head>
    <link href="css/css1.css" rel="stylesheet">
    <title>search</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        th {
            text-align: center;
        }

        label {
            font-size: 17px;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <br>
        <h2 style="text-align: center">course search</h2>
        <br>
        <form method="get" action="#" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="searchname" class="control-label col-xs-2 col-xs-offset-2">input course name</label>
                <div class="col-xs-4">
                    <input id="coursename" type="text" name="user" class="form-control" placeholder="input course name">
                </div>
                <input style="padding: 7px 30px;border-radius: 5px;border: none" class="col-xs-1 btn-success" type="submit" name="select" value="search">
            </div>
        </form>
        <table class="table table-bordered table-hover" style="margin-top: 30px; text-align: center">
            <tr class="info">
                <th>name</th>
                <th>id</th>
                <th>course name</th>
                <th>completed</th>

            </tr>
            <?php
            if (isset($_GET['select'])) {
                $user = $_GET['user'];
                $sql = " ";
                foreach ($conn->query($sql) as $stu) {
                    echo "<tr>";
                    echo "<td>{$stu['name']}</td>";
                    echo "<td>{$stu['id']}</td>";
                    echo "<td>{$stu['coursename']}</td>";
                    echo "<td>{$stu['completed']}</td>";

                    echo "</tr>";
                }
            }
            ?>

        </table>
    </div>
</body>

</html>