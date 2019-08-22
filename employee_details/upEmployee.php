<?php

include_once 'connect.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dept = $_POST['dept'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$addr = $_POST['addr'];

$sql = "UPDATE employee SET firstname= '$fname',lastname='$lname',department='$dept',gender='$gender',emp_email='$email',emp_tele='$tele',emp_address='$addr' WHERE emp_id='$id'";

mysqli_query($conn, $sql);

header("Location: index.html?update=success");
