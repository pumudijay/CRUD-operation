<?php

include_once 'connect.php';

$id = $_POST['emp_id'];

$sql = "DELETE FROM employee WHERE emp_id= '$id'";

mysqli_query($conn, $sql);

header("Location: index.html?delete=success");
