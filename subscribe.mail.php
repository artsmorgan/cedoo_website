<?php
       // from the form
       $email = trim(strip_tags($_POST['submit_email']));
       
       // $name = 'alex morgan';
       // $email = 'alexander.morgan@united-devs.com';
       // $message = 'test de envio de mensaje';

       // set here
       $subject = "Contacto desde Cedoo!";
       $to = 'alexander.morgan@united-devs.com';

       $msg = 'Subscripcion: '.$email;


       $body = <<<HTML
$msg
HTML;

       $headers = "From: no-reply@united-devs.com\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       echo 'success';
?>