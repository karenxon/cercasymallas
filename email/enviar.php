<?php
    ini_set( 'display_errors', 0 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = 'cercasymallasdehidalgo@yahoo.com.mx';
    $subject = "Mensaje cercasymallasdehidalgo.com";
    $message = 'Tiene un nuevo mensaje---------- Asunto: '.$_POST['subject'].'. Nombre del usuario: '.$_POST['name'].'. Mensaje: '.$_POST['message'].'.';
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    header('Location: http://www.cercasymallasdehidalgo.com/');
?>
