<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="home" style="height: 140vh; width: 100%; background-image:url(wallpaper.jpg); ">
    <div class="container">
        <div class="jumbotron">
            <h3>Enter Employee Number To Delete</h3>
            <form action="delEmployee.php" method="POST">
                <div class="form-group">
                    <label for="id">Employee ID:</label>
                    <input type="text" class="form-control" name="emp_id">
                </div>
                <button type="submit" class="btn btn-danger" name="delete">DELETE</button><br><br>
                
            </form>

            <a href="index.html"> <button type="submit" class="btn btn-dark">BACK</button></a>
        </div>

    </div>
</div>
</body>

</html>