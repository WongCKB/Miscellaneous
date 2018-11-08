<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

  //require("C:\xampp\php\pear");
  require("C:/xampp/htdocs/example/PHPMailer-master/src/PHPMailer.php");
  require("C:/xampp/htdocs/example/PHPMailer-master/src/SMTP.php");
  //require_once('phpmailer/PHPMailerAutoload.php');
  //include_path=('/pear');

    $mail = new PHPMailer;
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "it@asialinkrealty.com.sg";
    $mail->Password = "XXX";
    $mail->SetFrom("it@asialinkrealty.com.sg");
    $mail->Subject = "Invoice No. XXXXX - AsiaLink Realty";
    $mail->Body = file_get_contents("C:/xampp/htdocs/example/email_template1.html");

    $mail->AddAddress("it@asialinkrealty.com.sg");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>