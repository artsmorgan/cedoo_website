<?php
       // from the form
       $name = trim(strip_tags($_POST['nombre']));
       $lastname = trim(strip_tags($_POST['apellidos']));
       $email = trim(strip_tags($_POST['email']));
       $phone = trim(strip_tags($_POST['telefono']));
       $centroEducativo = trim(strip_tags($_POST['centro_edu']));
       $puesto = htmlentities($_POST['puesto']);
       $country = htmlentities($_POST['country']);
       // $name = 'alex morgan';
       // $email = 'alexander.morgan@united-devs.com';
       // $message = 'test de envio de mensaje';

       // set here
       $subject = "Contacto desde Cedoo!";
       $to = 'alexander.morgan@united-devs.com';

       $msg = 'Nombre: '.$name.' '.$lastname .' <br> email: '. $email . '<br> Telefono:' .$phone.'<br> Centro Educativo: '. $centroEducativo.'<br> Puesto: '.$puesto.'<br> Pais: '.$country;


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