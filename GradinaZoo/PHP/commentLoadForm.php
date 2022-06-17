<?php
// $conn=  $db=new PDO("mysql:host=localhost;dbname=review;charset-utf8","root","");

// $query = "SELECT * FROM review WHERE username = 'stefan1997' ORDER BY id DESC";

// $statement = $conn->prepare($query);

// $statement->execute();

// $result = $statement->fetchAll();

$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
$query = "SELECT username, comment FROM review";
$result = $conn->query($query);

?>
