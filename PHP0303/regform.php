<?php
$servername = "localhost";
$username = "25mca025";
$password = "2494";
$dbname = "25mca025";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE Studinfo (
Roll No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Gender CHAR(1) NOT NULL,
Address VARCHAR(50)
};
?>
if(isset($_POST['insert']))
 {
 $con = mysql_connect("localhost","root","");
 if($con)
 {
echo "Mysql connection ok<br>";
mysql_select_db("Studinfo",$con);
$name =$_POST['txtname'];
$rollno = $_POST['txtr_no'];
$gender =$_POST['txtgen'];
$address = $_POST['add'];
$insert = "insert into info values('$Roll No','$Name','$Gender','$Address')";
if(mysql_query($insert,$con))
{
echo "Data inserted successfully<br>";
}
$query = "select * from Studinfo";
$sldt = mysql_query($query,$con);
echo "<table border='1'>
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
</tr>";
while($row = mysql_fetch_array($sldt))

{
echo "<tr>";
echo "<td>".$row['Roll No']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['Address']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
 }
 }
?>
