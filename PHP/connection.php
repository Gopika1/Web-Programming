<?php
$servername="localhost";
$username="20mca025";
$password="2494";


$mysqli = mysqli_connect("$localhost","$username","$password");

// Check connection
if ($mysqli) {
  echo "Connection Successful ";

}
else
{
echo" connection not successful";
}
?>