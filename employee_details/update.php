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
            <h3>Enter Employee Number To Update</h3>
            <form action="upEmployee.php" method="POST">
                <div class="form-group">
                    <label for="id">Employee ID:</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="fname">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="lname">
                </div>
                <div class="form-group">
                    <label for="dept">Department:</label>
                    <select class="form-control" name="dept">
                        <option>Select Department</option>
                        <option>Account</option>
                        <option>IT</option>
                        <option>HRM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="gender">Gender:</label>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="tele">Tele-No:</label>
                    <input type="text" class="form-control" name="tele">
                </div>

                <div class="form-group">
                    <label for="addr">Address:</label>
                    <textarea class="form-control" rows="5" name="addr"></textarea>
                </div>

                <button type="submit" class="btn btn-dark" name="update">UPDATE</button><br><br>
            </form>

            <a href="index.html"> <button type="submit" class="btn btn-dark">BACK</button></a>
        </div>
    </div>
</div>
</body>

</html>