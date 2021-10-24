<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'Librerias/PHPMailer-master/src/Exception.php';
    require 'Librerias/PHPMailer-master/src/PHPMailer.php';
    require 'Librerias/PHPMailer-master/src/SMTP.php';


    $Nombre     = $_POST['nombre'];
    $DNI        = $_POST['dni'];
    $Email      = $_POST['email'];
    $Mensaje    = $_POST['mensaje'];

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "worklancerbit@gmail.com";
    $mail->Password = "forworklancerbit21";

    //Set Params
    $mail->SetFrom("worklancerbit@gmail.com");
    $mail->AddAddress("elglitchdebaltimore@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "<h2>Hola</h2><br><p style='color: rgb(20,20,20);''>Este es un mensaje de prueba</p>";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
