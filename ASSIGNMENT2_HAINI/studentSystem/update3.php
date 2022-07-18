<?php
include("conn.php");
$sql = "SELECT * FROM courses WHERE id =" . $_GET['id'];
$stmt = $conn->query($sql);
$stu = $stmt->fetch_array(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>course update</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css1.css" rel="stylesheet">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <br>
        <h2 style="text-align: center">course update</h2>
        <br>
        <div>
            <form action="update2.php" method="post" class="form-horizontal" role="form">

                <div class="form-group">

                    <div class="col-xs-8">
                        <input id="id" type="hidden" name="id" class="form-control" value="<?php echo $stu['id'] ?>">
                    </div>
                </div>
                <br>


                <div class="form-group">
                    <label for="show course name" class="control-label col-xs-2">Course Name</label>
                    <div class="col-xs-8">
                        <input id="coursename" type="text" name="coursename" class="form-control" value="<?php echo $stu['coursename'] ?>" placeholder="input course name" required>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label class="control-label col-xs-2">completed</label>
                    <div class="col-xs-8">
                        <label class="radio-inline"><input type="radio" value="completed" name="completed" required>compeleted</label>
                        <label class="radio-inline"><input type="radio" value="on progress" name="completed" required>on progress</label>
                    </div>
                </div>
                <br>


                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-4">
                        <input style="padding: 10px 50px" class="btn btn-success" type="submit" value="Update">
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>