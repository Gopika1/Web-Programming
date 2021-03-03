<html>
<head>
<form action = "getdata.php" method = "POST">
Name:
<input type ="text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
Contact No:
<input type = "text" name = "txtc_no">
<br><br>
Email ID:
<input type = "text" name = "txteid">
<br><br>
<input type = "Submit" name = "insert"  value = "Save">
<input type = "Reset" value = "Cancel">
</form>
<?php
$sql = "CREATE TABLE Studinfo (
 Roll No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Gender CHAR(1) NOT NULL,
Address VARCHAR(50)
  )";
?>
</body>
</html>