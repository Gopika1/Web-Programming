<html>
<head>
<title>Update a Record in MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['update']))
{
$conn = mysqli_connect("localhost","20mca025","2494","20mca025");
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
$id = $_POST['id'];
$Name= $_POST['Name'];

$sql = "UPDATE student SET Name = '$Name'  WHERE id = $id";     

$retval = mysqli_query( $conn,$sql );
if(!  $retval )
{
  die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">id</td>
<td><input name="id" type="text" id="id"></td>
</tr>
<tr>
<td width="100">Name</td>
<td><input name="Name" type="text" id="Name"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>