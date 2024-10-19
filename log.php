<!doctype html>
<?php 
// Start the session
session_start();
?>
<html><head>

	<link  href="img/favicon.ico"  rel="shortcut icon" />
	 
<meta charset="utf-8">
<title>پروفایل </title>
</head>

<body>

<?php
	//session_start();
$usern=$_POST['usern'];
$pass=$_POST['pass'];
$flag=0;
	
	$_SESSION['int'] = $usern;
	
	$con=new MySQLi("localhost","root","","nokhb");
	//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

	
if($con->connect_error)
{   echo($con->connect_error);
	require_once("not.html");}
else
{
 $result=mysqli_query($con,"select pass from submit where shen='$usern'");
}
	

while($crs=mysqli_fetch_assoc($result))	
{
	$pass2=$crs["pass"];
	$flag=1;
}

if($flag==0)
{
	 include("pro.html");
		 echo "<script type='text/javascript'>alert('نام کاربری یا رمز عبور وارد شده صحیح نیست');</script>";
}
	
if($flag==1)	
{
	if($pass==$pass2) { 
	//	$_SESSION['usern'] = $usern->ID;
		include("user.php");}
	else { include("pro.html");
		 echo "<script type='text/javascript'>alert('نام کاربری یا رمز عبور وارد شده صحیح نیست');</script>";}	
		 
}
$con->close();

?>	
	
</body>
	
</html>