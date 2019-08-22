<?php

include_once 'connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dept=$_POST['dept'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$tele = $_POST['tele'];
$addr = $_POST['addr'];


$sql = "INSERT INTO employee(firstname,lastname,department,gender,emp_email,emp_tele,emp_address,hire_date) VALUES ('$fname','$lname','$dept','$gender','$email','$tele','$addr',now())";

mysqli_query($conn, $sql);

header("Location: index.html?add=success");
