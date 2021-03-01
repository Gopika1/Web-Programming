<html>
<head>
<title>insert data in form</title>
</head>
<body>
<form action = "getdata.php" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
Contyact No:
<input type = "text" name = "txtc_no">
<br><br>
Email ID:
<input type = "text" name = "txteid">
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancle">
</form>

<?php

echo "Name:" .$_POST["txtname"]."</br>";
echo "Roll no.:".$_POST["txtr_no"]."</br>";
echo "Address:".$_POST["add"]."</br>";
echo "Contact No.:".$_POST["txtc_no"]."</br>";
echo "Email ID:".$_POST["txteid"]."</br>";

 ?>
</body>
</head>
</html>