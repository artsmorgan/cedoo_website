<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);
       // $name = 'alex morgan';
       // $email = 'alexander.morgan@united-devs.com';
       // $message = 'test de envio de mensaje';

       // set here
       $subject = "Contacto desde Cedoo!";
       $to = 'amorgan115@gmail.com';

       $msg = 'Nombre: '.$name. ' <br> email: '. $email . '<br>' .$message;


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