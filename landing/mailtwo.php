<?php
    $to = 'mex-invest-bud@ukr.net';
    $firstname = $_POST["nameSend"];
    $email= $_POST["emailSend"];
    $text= $_POST["messageSend"];
    $phone = $_POST["phoneSend"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Name: '.$firstname.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>

