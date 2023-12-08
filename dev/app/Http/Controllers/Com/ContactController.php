<?php

namespace App\Http\Controllers\Com;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    private function sendConfirmation($inquiry)
    {
        $subject = 'Thank You For Contacting Pragmatic Consulting!';
        $email = $inquiry['email'];
        $body = <<<EMAIL
One of our expert consultants will contact you within 2 business days.


Pragmatic Consulting, Inc.
www.PragmaticConsulting.com
Phone: (603) 431-4461
Email: Inquiries@PragmaticConsulting.com
EMAIL;

        $headers = [
            'From: Pragmatic Consulting <Inquiries@pragmaticconsulting.com>',
            'Reply-To: ' . $email,
            'X-Sender: Pragmatic Consulting <Inquiries@pragmaticconsulting.com>',
            'X-Mailer: PHP/' . phpversion(),
            'Return-Path: afishbaugh@pragmaticconsulting.com',
        ];
        $headers = implode("\r\n", $headers);
        $success = mail($email, $subject, $body, $headers);
        if (!$success) {
            $errorMessage = error_get_last()['message'];
            $fileName = date('Y-m-d');
            $timestamp = '[' . date('H:i:s') . ']';
            $logFile = fopen(__DIR__ . '/logs/' . $fileName, 'a');
            fwrite($logFile, $timestamp . ' ' . $errorMessage . '\n');
            fclose($logFile);
        }
    }

    private function sendToSales($inquiry)
    {
        $to = 'Inquiries@pragmaticconsulting.com';
        $subject = 'New PragmaticConsulting.com web Submission!!!';

        $name = $inquiry['name'];
        $email = $inquiry['email'];
        $telephone = $inquiry['telephone'];
        $message = $inquiry['message'];
        $company = $inquiry['company'];
        $title = $inquiry['title'];


        $body = <<<EMAIL
<html>
<head>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    caption {
      font-weight: bold;
    }
    th, td {
      text-align: left;
      padding: 5px;
    }
  </style>
</head>
<body>
<table>
  <caption>Contact Details</caption>
  <tr>
    <th>Name</th>
    <td>$name</td>
  </tr>
  <tr>
    <th>Company</th>
    <td>$company</td>
  </tr>
  <tr>
    <th>Title</th>
    <td>$title</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>$email</td>
  </tr>
  <tr>
    <th>Telephone</th>
    <td>$telephone</td>
  </tr>
</table>

<h3>Message:</h3> </br>
$message

</pre>
</body>
</html>
EMAIL;

        $headers = [
            'From: Pragmatic Consulting <inquiries@pragmaticconsulting.com>',
            'Reply-To: Inquiries@pragmaticconsulting.com',
            'Sender: Pragmatic Consulting <inquiries@pragmaticconsulting.com>',
            'X-Sender: Pragmatic Consulting <inquiries@pragmaticconsulting.com>',
            'X-Mailer: PHP/' . phpversion(),
            'Return-Path: afishbaugh@pragmaticconsulting.com',
            'MIME-Version: 1.0',
            'Content-Type: text/html',
            'Content-Disposition: inline'
        ];
        $headers = implode("\r\n", $headers);

        $success = mail($to, $subject, $body, $headers);
        if (!$success) {
            $errorMessage = error_get_last()['message'];
            $fileName = date('Y-m-d');
            $timestamp = '[' . date('H:i:s') . ']';
            $logFile = fopen(__DIR__ . '/logs/' . $fileName, 'a');
            fwrite($logFile, $timestamp . ' ' . $errorMessage . '\n');
            fclose($logFile);
        }
    }

    private function saveToDB($inquiry)
    {
        // Required fields
        $name = $inquiry['name'];
        $company = $inquiry['company'];
        $email = $inquiry['email'];
        $telephone = $inquiry['telephone'];
        $message = $inquiry['message'];

        // Optional fields
        $title = $inquiry['title'] ?? NULL;

        // DB info
        $servername = 'localhost';
        if ($_SERVER['SERVER_NAME'] != 'prag-01-hv-01') {
            $servername = 'mysqlcluster23';
        }
        $username = 'inquiries';
        $password = 'R3dGl0be!';

        $conn = new \mysqli($servername, $username, $password, 'inquiries');


        $result = $conn->query("
            INSERT INTO inquiries (name, company, email, telephone, title, message) 
            VALUES ('{$name}', '{$company}', '{$email}', '{$telephone}', '{$title}', '{$message}')
        ");

        $conn->close();
    }

    private function validateCaptcha(&$errors, $captcha)
    {
        # Validate interaction using google reCaptcha 
        $secret_key = "6LfPG70ZAAAAAHuo1OuN_ABwg8GGTbXeegV1X9c2";
        $data = array(
            'secret' => $secret_key,
            'response' => $captcha
        );
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $ch = curl_init($url);
        # Form data string
        $post_string = http_build_query($data, '', '&');
        # Setting our options
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Get the response
        $response = curl_exec($ch);
        curl_close($ch);
        $response_keys = json_decode($response, true);

        if ($response_keys['success'] == false) {
            $errors[] = 'reCaptcha verification failed.';
            return false;
        }
        if ($response_keys['score'] < 0.5) {
            $errors[] = 'reCaptcha score was too low to accept your response.';
            return false;
        }

        return true;
    }

    private function validateSubmission()
    {
        $errors = array();

        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];

        $title = $_POST['title'] ?? '';


        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
        }
        if (!isset($captcha) || !$captcha) {
            $errors[] = "Could not verify the captcha.";
        } else {

            $this->validateCaptcha($errors, $captcha);

            if (empty($company)) {
                $errors[] = 'Company field cannot be left blank.';
            }

            if (empty($email)) {
                $errors[] = 'Email field cannot be left blank.';
            }

            if (empty($name)) {
                $errors[] = 'Name field cannot be left blank.';
            }

            if (empty($message)) {
                $errors[] = 'Message field cannot be left blank.';
            }

            if (empty($telephone)) {
                $errors[] = 'Telephone field cannot be left blank.';
            }

            if (preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST["name"]) === 0) {
                $errors[] = 'Name field allows only letters and spaces.';
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $errors[] = 'Email field must contain a valid email.';
            }
        }
        return $errors;
    }

    public function submit()
    {
        session_status() == PHP_SESSION_ACTIVE ?: session_start();
        $parts = explode('/', $_SERVER['PHP_SELF']);
        $last = array_pop($parts);
        $CD = implode('/', $parts);
        $SERVER_CD = $_SERVER['SERVER_NAME'] . $CD;

        $errors = [];
        if (isset($_POST['name'], $_POST['company'], $_POST['email'], $_POST['telephone'], $_POST['message'])) {
            $errors = $this->validateSubmission();
        }

        if (!empty($errors)) {
            $_SESSION['submission_errors'] = $errors;
            header("Location: contact.php");
            exit();
        } else {
            $this->sendToSales($_POST);

            $this->sendConfirmation($_POST);

            $this->saveToDB($_POST);

            $URL = $CD . "/thankyou.php";
            header('Location: ' . $URL);
            exit();
        }
    }

    public function display()
    {
        session_status() == PHP_SESSION_ACTIVE ?: session_start();

        $errors = array();
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }

        return view('shares.pages.contact', [
            'errors' => $errors
        ]);
    }
}
