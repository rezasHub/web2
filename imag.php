<?php
$interno=$_POST['interno'];
$nam=$_POST['nam'];
$zamin=$_POST['zamin'];
$print=$_POST['print'];
$page=$_POST['page'];
$tel=$_POST['tel'];
$lang=$_POST['lang'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into imag(interno,nam,zamin,print,page,tel,lang) values ('$interno','$nam','$zamin','$print','$page','$tel','$lang')";


if($con->query($sql)==TRUE)
{include "imag.html";
	echo "<script type='text/javascript'>alert('ذخیره شد');</script>";}	
else {
include "imag.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>