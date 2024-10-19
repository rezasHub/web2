<!doctype html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<link  href="img/favicon.ico"  rel="shortcut icon" />
<meta charset="utf-8">
<title>انتقال به درگاه پرداخت</title>
</head>
<body>
	
<?php 
$MerchantID = '610f720a-3d27-11e9-83dd-005056a205be'; //Required
 $Amount =  $_SESSION['price']; //Amount will be based on Toman - Required
$Description = 'پرداخت خق عضویت سالانه سایت نخبه ایرانی'; // Required


$CallbackURL = 'http://www.irannokhbeh.ir/verify.php'; // Required


$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
[
'MerchantID' => $MerchantID,
'Amount' => $Amount,
'Description' => $Description,
'CallbackURL' => $CallbackURL,
]
);

//Redirect to URL You can do it also by creating a form
if ($result->Status == 100) {
//Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
//برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
} else {
echo'ERR: '.$result->Status;
}?>
</body>
</html>
