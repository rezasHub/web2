<?php
$interno=$_POST['interno'];
$nam=$_POST['nam'];
$zamin=$_POST['zamin'];
$page=$_POST['page'];
$tel=$_POST['tel'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into smag(interno,nam,zamin,page,tel) values ('$interno','$nam','$zamin','$page','$tel')";


if($con->query($sql)==TRUE)
{include "smag.html";
	echo "<script type='text/javascript'>alert('ذخیره شد');</script>";}	
else {
include "smag.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>