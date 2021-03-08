<?php
$con=mysqli_connect("localhost","20mca025","2494","20mca025");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student_detail where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>
