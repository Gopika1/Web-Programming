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
$sql = "CREATE TABLE STUDREG (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Branch VARCHAR(30) NOT NULL,
Marks VARCHAR(20),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table STUDREG created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>