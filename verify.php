<!doctype html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>نتیجه ی تراکنش</title>
</head>

<body>
<?php

$MerchantID = '610f720a-3d27-11e9-83dd-005056a205be';
 $Amount =  $_SESSION['price']; //Amount will be based on Toman
$Authority = $_GET['Authority'];

if ($_GET['Status'] == 'OK') {

$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentVerification(
[
'MerchantID' => $MerchantID,
'Authority' => $Authority,
'Amount' => $Amount,
]
);

if ($result->Status == 100) {
if($Amount==15000) require_once('secard.php');
	else require_once('se.php');}
 else {
echo 'Transaction failed. Status:'.$result->Status;
}
}
else {
require_once('cancel.html');
}
	?>
</body>
</html>
