<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$nam=$_POST['$nam'];
$lnam=$_POST['$lname'];
$shen=$_POST['$shen'];
$email=$_POST['$email'];
$sal=$_POST['$year'];
$tel=$_POST['$tel'];


$con=new MySQLi("localhost","root","","nokhb");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	echo("can not connect to data base");
else
{
$sql="insert into submit(nam,lnam,shen,email,pass,sal,tel) values ('$nam','$lnam','$shen','$email','$shen','$sal','$tel')";


if($con->query($sql)==TRUE)
	echo("pre submit is seved");
else 
	echo("we cant seve pre submit");

$con->close();
}
?>
</body>
</html>