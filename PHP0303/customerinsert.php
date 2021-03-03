<?php
$servername = "localhost";
$username = "20mca025";
$password = "2494";
$dbname = "20mca025";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Customer(  c_name,Item_purchased,Mob_No)
VALUES ( 'Karthik','Soap','8876453291')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
