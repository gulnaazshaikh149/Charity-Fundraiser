<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CHARITY</title>
<h1 class="table">Data Table</h1>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #f5426f;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #f5426f;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.table{
font-family: monospace;
font-size: 45px;
text-align: center;
color:#f5426f;
    
}
</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>type</th>
<th>name</th>
<th>email</th>
<th>number</th>
<th>amount</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "donation");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, type, name, email, number, amount FROM info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["type"] . "</td><td>"
. $row["name"] . "</td><td>" . $row["email"] . "</td><td>". $row["number"] ."</td><td>" . $row["amount"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
 