<?php
include_once 'connect.php';

?>

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
            <h3>Employee Details</h3>
            <br>
            <?php

            $id=$_POST['id'];
            $sql = "SELECT * FROM employee WHERE emp_id='$id';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<strong> ID: " . $row['emp_id'] ."<br>Name: " . $row['firstname'] . " ". $row['lastname']. "<br>Department: " . $row['department'] . "<br> Gender: " . $row['gender'] . "<br> Email: " . $row['emp_email'] . "<br> Contact Number: " . $row['emp_tele'] . "<br> Address " . $row['emp_address'] . "<br> Hire Date " . $row['hire_date'] . "<br><br>";
                }
            }

            ?>

            <a href="index.html"><button type="submit" class="btn btn-dark">BACK</button></a>
        </div>
    </div>
</div>  
</body>

</html>