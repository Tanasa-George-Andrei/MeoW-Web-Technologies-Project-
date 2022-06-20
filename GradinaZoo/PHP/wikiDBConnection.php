<?php

$dbServername = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "atlaszoologic";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 