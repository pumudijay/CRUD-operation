<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "company";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
