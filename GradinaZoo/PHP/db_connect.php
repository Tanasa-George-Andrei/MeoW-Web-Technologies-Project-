<?php
    // connect to database

    $conn=mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");

    if(!$conn){
        echo "Connection failed!";
    }
?>