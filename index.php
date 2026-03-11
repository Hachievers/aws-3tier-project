<?php
$servername = "ade-db-rds-mysql.cuj2q2q88gfq.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Adekunle123!";
$dbname = "webapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT message FROM visitors";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo $row["message"];
}

$conn->close();
?>
