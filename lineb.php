<?php
$interno=$_POST['interno'];
$nam=$_POST['nam'];
$zamin=$_POST['zamin'];
$print=$_POST['print'];
$page=$_POST['page'];
$tel=$_POST['tel'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into lineb(interno,nam,zamin,print,page,tel) values ('$interno','$nam','$zamin','$print','$page','$tel')";


if($con->query($sql)==TRUE)
{include "lineb.html";
	echo "<script type='text/javascript'>alert('ذخیره شد');</script>";}	
else {
include "lineb.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>