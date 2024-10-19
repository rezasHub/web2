<?php
    $to = 'info@irannokhbeh.ir';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $mass= $_POST["mass"];
    $phone=$_POST["phone"];

$name -> charSet = "UTF-8";

$mass -> charSet = "UTF-8";
$phone -> charSet = "UTF-8";


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'<br>'.$email.'</td>
        </tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$mass.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'پیام شما با موفقت ارسال شد ، ظرف 24 ساعت آینده پاسخ آنرا دریافت خواهید کرد ';
    }else{
        echo 'پیام شما ارسال نشد';
    }

?>
