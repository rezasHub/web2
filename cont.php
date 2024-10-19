<?php
$nam=$_POST['nam'];
$email=$_POST['email'];
$mess=$_POST['mess'];
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

if($con->connect_error)
	require_once("not.html");
else
{
$sql="insert into cont(nam,email,mess) values ('$nam','$email','$mess')";


if($con->query($sql)==TRUE)
	require_once('save1.html');
else 
	require_once("not2.html");

$con->close();
}
?>