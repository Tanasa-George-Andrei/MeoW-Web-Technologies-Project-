<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mails_table.css">
    <title>Mail Table</title>
</head>

<body>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "atlaszoologic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM mails";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["message"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
</html>