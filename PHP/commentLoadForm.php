<?php

$conn=mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, message FROM review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Name: " . $row["username"]. " " . $row["message"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>