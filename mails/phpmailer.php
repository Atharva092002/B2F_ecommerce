<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php'; 
require 'phpmailer\vendor\phpmailer\phpmailer\src\Exception.php';
require 'phpmailer\vendor\phpmailer\phpmailer\src\SMTP.php';
function mailer()
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "ajavj.26226@gmail.com";
    $mail->Password   = "Atharva123$";
    $mail->IsHTML(true);
    $mail->AddAddress("ajavj.26226@gmail.com", "aj");
    $mail->SetFrom("ajavj.26226@gmail.com", "aj");
    $mail->Subject = "Your Boost-2-Farms Order Confirmation.";
    ob_start();
    include('emailinvoice.php');
    $content = ob_get_contents();
    ob_end_clean();
    $mail->MsgHTML($content); 
    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>