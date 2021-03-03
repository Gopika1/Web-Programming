<?php

$servername = "localhost";
$username = "20mca025";
$password = "2494";
$dbname = "20mca025";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *  FROM Customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table border='1'>
<tr>
<th>c_no</th>
<th>c_name</th>
<th>Item_purchased</th>
<th>Mob_No</th>
</tr>";
  
  while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
 echo "<td>".$row['c_no']."</td>";
 echo "<td>".$row['c_name']."</td>";
 echo "<td>".$row['Item_purchased']."</td>";
 echo "<td>".$row['Mob_No']."</td>";

 echo "</tr>";
  }
echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 