<!doctype html>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>همکاری با ما</title>
</head>

<body>
	<?php

	$nam=$_POST['nam'];
	$shakhs=$_POST['shakhs'];
	$tel=$_POST['tel'];
	$job=$_POST['job'];
	$city=$_POST['city'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$zamin=$_POST['zamin'];
	$mass=$_POST['mass'];
	
	$con=new MySQLi("localhost","root","","nokhb");
			//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	echo("can not connect to data base");
else
{
$sql="insert into ham(shakhs,nam,tel,email,city,hamtel,zamine,noe,mess) values 			
					('$shakhs','$nam','$tel','$email','$city','$mobile','$zamin','$job','$mass')";


if($con->query($sql)==TRUE)
{include "work.html";
	echo "<script type='text/javascript'>alert('ارسال شد');</script>";}	
else 
	{include "work.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";}	

$con->close();
} ?>
	
	

</body>
</html>