<?php
    $to = 'mex-invest-bud@ukr.net';
    $email= $_POST["emailPopup"];
    $phone = $_POST["phonePopup"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>  
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>

