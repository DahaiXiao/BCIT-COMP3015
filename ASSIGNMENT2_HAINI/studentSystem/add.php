<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ADD PAGE</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css1.css" rel="stylesheet">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <br>
        <h2 style="text-align: center">add courses</h2>
        <br>
        <div>
            <form action="add2.php" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="name" class="control-label col-xs-2">course name</label>
                    <div class="col-xs-8">
                        <input id="coursename" type="text" name="coursename" class="form-control" placeholder="input course name" required>
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <label class="control-label col-xs-2">completion</label>
                    <div class="col-xs-8">
                        <label class="radio-inline"><input type="radio" value="completed" name="completed" required>completed</label>
                        <label class="radio-inline"><input type="radio" value="on progress" name="completed" required>on progress</label>
                    </div>
                </div>
                <br>


                <br>
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-4">
                        <input style="padding: 10px 50px" class="btn btn-success" type="submit" value="submit">
                    </div>

                </div>

            </form>
        </div>
    </div>
</body>

</html>