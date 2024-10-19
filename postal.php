<?php
$interno=$_POST['interno'];
$state=$_POST['state'];
$city=$_POST['city'];
$add=$_POST['add'];
$postal=$_POST['postal'];
$tel=$_POST['tel'];

$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into send(shen,state,city,add1,postal,tel) values ('$interno','$state','$city','$add','$postal','$tel')";


if($con->query($sql)==TRUE)
require_once("secard.html");
else {
include "makecard.php";
	echo "<script type='text/javascript'>alert('مجددا تلاش کنید');</script>";
}
$con->close();
}
?>