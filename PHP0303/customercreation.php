<?php
$servername = "localhost";
$username = "20mca025";
$password = "2494";
$dbname = "20mca025";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Customer (
c_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
c_name VARCHAR(30) NOT NULL,
Item_purchased VARCHAR(30) NOT NULL,
Mob_No VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Customer created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>