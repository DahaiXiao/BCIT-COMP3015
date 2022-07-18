<?php
include("conn.php");
?>

<html>

<head>
    <title>home page</title>
    <!--    <link href="css/css1.css" rel="stylesheet">-->
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-warning {
            background-color: #d0455a;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <br>
        <h2 style="text-align: center">Course Management System</h2>
        <br>
        <table class="table table-bordered table-hover" style="text-align: center">
            <tr class="info">
                <th>Course Name</th>
                <th>Completed</th>
                <th>Action</th>
            </tr>


            <?php
            $sql = "SELECT * FROM courses WHERE author_id=$_SESSION[user]";
            //$sql = "select * from `student` order by `id`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) >= 0) {

                $number = mysqli_num_rows($result);
                if (!isset($_GET['p'])) {
                    $p = 0;
                } else {
                    $p = $_GET['p'];
                }
                $check = $p + 8;                             //each page has 8 data
                for ($i = 0; $i < $number; $i++) {
                    $stu = mysqli_fetch_array($result);

                    //select $p 
                    if ($i >= $p && $i < $check) {
                        echo "<tr>";
                        echo "<td>{$stu['coursename']}</td>";
                        echo "<td>{$stu['completed']}</td>";

                        echo "<td><a href='delete.php?id={$stu['id']}' class='btn btn-warning'>Delete</a>
                      <a href='update3.php?id={$stu['id']}' class='btn btn-warning'>update</a></td>";
                        echo "</tr>";
                        $j = $i + 1;
                    }
                } // for
            }
            ?>
        </table>
        <div style="text-align:center"> <a href='add.php' class='btn btn-warning'>ADD NEW COURSES</a></div>

        <ul class="row pager" style="font-size: 16px;line-height: 30px">
            <li class="col-xs-2 col-xs-push-3">
                <!--- p = 0, start from #1 data ---->
                <a href="index.php?p=0">page 1</a>
            </li>
            <li class="col-xs-2 col-xs-push-2" style="margin-left: 20px">
                <?php
                if ($p > 7) {
                    $last = (floor($p / 8) * 8) - 8;
                    echo "<a href='index.php?p=$last'>previous page</a>";
                } else
                    echo "<a class='disabled'>previous page</a>";
                ?>
            </li>
            <li class="col-xs-2 col-xs-push-1" style="margin-left: 20px">
                <?php
                if ($i > 7 and $number > $check)
                    echo "<a href='index.php?p=$j'>next page</a>";
                else
                    echo "<a class='disabled'>next page</a>";
                ?>
            </li>
            <li class="col-xs-2" style="margin-left: 30px">
                <?php
                if ($i > 7) {

                    $final = floor($number / 8) * 8;
                    echo "<a href='index.php?p=$final'>last page</a>";
                } else
                    echo "<a class='disabled'>first page</a>";
                ?>
            </li>
        </ul>
    </div>
</body>

</html>