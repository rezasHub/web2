<!doctype html>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>خبر خوان</title>
</head>

<body>
	<?php
	$email=$_POST['email11'];
	$con=new MySQLi("localhost","root","","nokhb");
		//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	echo("can not connect to data base");
else
{
$sql="insert into rss(email) values ('$email')";


if($con->query($sql)==TRUE)
	echo('ایمیل شما ثبت شد');
else 
	echo('مجددا تلاش کنید');

$con->close();
} ?>
	
	
	

</body>
</html>