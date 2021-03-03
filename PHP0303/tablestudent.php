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
 
 $sql = "SELECT  *  FROM STUDREG";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Marks</th>
</tr>";
while($row = mysqli_fetch_assoc($result ))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Branch']."</td>";
echo "<td>".$row['Marks']."</td>";
echo "</tr>";
}

echo "</table>";
} else {
  echo "0 results";
}
mysqli_close($conn);
?>