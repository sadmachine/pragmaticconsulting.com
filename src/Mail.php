<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Mail
{

    public static function send($toEmail, $toName, $subject, $body)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        try {
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'SSL';
            $mail->Port = 465;                    //SMTP port
            $mail->Host = 'mail.smtp2go.com';  //gmail SMTP server
            $mail->Username = 'inquiries';   //email
            $mail->Password = '7vif68SJBbGMuwfQ';   //16 character obtained from app password created
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );


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
            $mail->smtpClose();
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            $fileName = date('Y-m-d');
            $timestamp = '[' . date('H:i:s') . ']';
            $logFile = fopen(__DIR__ . '/logs/' . $fileName, 'a');
            fwrite($logFile, $timestamp . ' ' . $errorMessage . '\n');
            fclose($logFile);
            $mail->smtpClose();
        }
    }
}
