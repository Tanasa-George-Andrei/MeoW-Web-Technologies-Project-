<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tickets_table.css">
    <title>Ticket Table</title>
</head>

<body>
<table>
<tr>
<th>Date</th>
<th>Name</th>
<th>Email</th>
<th>Ticket</th>
<th>Phone</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "user", "password", "zoo");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tickets";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["date"]. "</td><td>" . $row["name"]. "</td><td>"
. $row["email"]. "</td><td>" . $row["slot"]. "</td><td>" . $row["tel"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
</html>