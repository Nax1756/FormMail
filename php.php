<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if($_POST['submit'] || $_SERVER["REQUEST_METHOD"] == "POST"){   
   $mail = new PHPMailer(true);
   $mail->isSMTP();
   $mail->SMTPAuth   = true;
   $mail->Port       = 465;
   $mail->SMTPSecure = 'ssl';
   $mail->Host       = 'smtp.gmail.com';
   // ---
   $mail->Username   = 'verifyuks@gmail.com';
   $mail->Password   = 'lkgaddamkqmefcmv';
   // ---
   $mail->setFrom($mail->Username); // от кого будет писаться 
   $mail->Subject    = 'lox';   // тут типа заголовок, то что будет пистать в гл меню почты, мб ты понял
   $mail->Body       = 'olx'; // тут тело того что приходит типу на почту
            
   $mail->addAddress($_POST['mail']); //получатель
   $mail->send();
   
}
