<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class enviodecorreo
{
    function enviaremail($correo, $asunto, $cuerpo)
    {
        require './phpmailer/src/PHPMailer.php';
        require './phpmailer/src/SMTP.php';
        require './phpmailer/src/Exception.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'perezoosvaldopga@gmail.com';
            $mail->Password   = 'ehzpldzailuqcvll';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('perezoosvaldopga@gmail.com', 'SuperBoletos');
            $mail->addAddress($correo);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $asunto;

            $mail->Body    = utf8_decode($cuerpo);

            $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

            if($mail->send()){
                return true;
            }
            else
            {
                return false;
            }
        } catch (Exception $e) {
            echo "Error al mandar el correo electronico de confirmar usuario: {$mail->ErrorInfo}";
            return false;
        }
    }
}
