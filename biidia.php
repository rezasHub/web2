<?php
$interno=$_POST['interno'];
$nam=$_POST['nam'];
$patent=$_POST['patent'];
$price=$_POST['price'];
$dowork=$_POST['dowork'];
$users=$_POST['users'];
$tel=$_POST['tel'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into buidea(interno,nam,patent,price,dowork,users,tel) values ('$interno','$nam','$patent','$price','$dowork','$users','$tel')";


if($con->query($sql)==TRUE)
{include "biidia.html";
	echo "<script type='text/javascript'>alert('ارسال شد');</script>";}	
else {
include "biidia.html";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>