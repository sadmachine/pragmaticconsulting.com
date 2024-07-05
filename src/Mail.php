<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Mail
{

    public static function send($toEmail, $toName, $subject, $body)
    {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'netsol-smtp-oxcs.hostingplatform.com';  //gmail SMTP server
            $mail->Username = 'inquiries@pragmaticconsulting.com';   //email
            $mail->Password = 'Info!Prag234';   //16 character obtained from app password created

            //sender information
            $mail->isHTML(true);
            $mail->setFrom('inquiries@pragmaticconsulting.com', 'Pragmatic Consulting Inc.');

            //receiver email address and name
            $mail->addAddress($toEmail, $toName);

            $mail->Subject = $subject;
            $mail->MsgHTML($body);

            $mail->send();
        } catch (PHPMailerException $e) {
            $errorMessage = $e->errorMessage();
            $fileName = date('Y-m-d');
            $timestamp = '[' . date('H:i:s') . ']';
            $logFile = fopen(__DIR__ . '/logs/' . $fileName, 'a');
            fwrite($logFile, $timestamp . ' ' . $errorMessage . '\n');
            fclose($logFile);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            $fileName = date('Y-m-d');
            $timestamp = '[' . date('H:i:s') . ']';
            $logFile = fopen(__DIR__ . '/logs/' . $fileName, 'a');
            fwrite($logFile, $timestamp . ' ' . $errorMessage . '\n');
            fclose($logFile);
        }
        
        $mail->smtpClose();
    }
}
