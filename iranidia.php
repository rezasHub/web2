<!doctype html>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>ایده برای نخبه ی ایرانی</title>
</head>

<body>
	<?php
$interno=$_POST['interno'];
$mass=$_POST['mass'];
$tel=$_POST['tel'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into iranidia(interno,mass,tel) values ('$interno','$mass','$tel')";


if($con->query($sql)==TRUE)
{include "iranidia.html";
	echo "<script type='text/javascript'>alert('ارسال شد');</script>";}	
else {
include "iranidia.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>
</body>
</html>