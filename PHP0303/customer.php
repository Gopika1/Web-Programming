<html>
<head>
<title>display data in table format</title>
</head>
<body>
 <?php

$servername = "localhost";
$username = "20mca025";
$password = "2494";
$dbname = "20mca025";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $con = mysql_connect("localhost","root","");
if(!$con)
{
 die("not connected".mysql_error());
}
echo "Connection open"."<br/>";
$sldb = mysql_select_db("coust",$con);
if(!$sldb)
{
 die("not found".mysql_error());
}
echo "Database selected"."<br/>";
$query = "select * from Customer";
$sql = mysql_query($query);
echo "<table border = '1'>
<tr>
<th>c_no</th>
<th>c_name</th>
<th>Item_purchased</th>
<th>Mob_No</th>
</tr>";
while($row = mysql_fetch_array($sql))
{
 echo "<tr>";
 echo "<td>".$row['c_no']."</td>";
 echo "<td>".$row['c_name']."</td>";
 echo "<td>".$row['Item_purchased']."</td>";
 echo "<td>".$row['Mob_No']."</td>";

 echo "</tr>";
}
echo "</table>";
 ?>
</body>
</html>