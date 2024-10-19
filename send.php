<!doctype html>
<?php 
// Start the session
session_start();
?>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>پنل کاربری</title>
</head>

<body>
	<?php
	
	$shen = $_POST['shen'] ;
$_SESSION['int']=$shen;
	$sath=$_POST['sath'];
	$noe=$_POST['noe'];
	$onvan=$_POST['onvan'];
	$year=$_POST['year'];
	if($sath=='5')
	$sath1='بین المللی';
	else{ 
	if($sath=='3') $sath1='ملی';
		else $sath1='استانی';
	}
	
	if($noe=='5')
	$noe1='نگارش مقاله';
	else{ 
	if($noe=='10') $noe1='تالیف / گرد آوری کتاب';
		else {
			if($noe=='6') $noe1='حضور در کنفرانس / سمینار و همایش';
			else { 
				if($noe=='7') $noe1='حضور در نمایشگاه / مسابقه';
				else{
					if($noe=='15') $noe1='کسب جایزه در نمایشگاه / کنفرانس / مسابقه';
					else
						if($noe=='12') $noe1='ثبت یا انتشار اثر / اختراع / ابداع';
				}
				 }
			
		}
	}
	
	$emtiaz = $noe*$sath;
	
	$con=new MySQLi("localhost","root","","nokhb");
		//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	echo("can not connect to data base");
else
{
$sql="insert into rez(shen,sath,noe,onvan,year,emtiaz) values 			
					('$shen','$sath1','$noe1','$onvan','$year','$emtiaz')";


if($con->query($sql)==TRUE)
{include "user.php";
	echo "<script type='text/javascript'>alert('ارسال شد');</script>";}	
else 
	{include "user.php";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";}	

$con->close();
} ?>
	
	

</body>
</html>