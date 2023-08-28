<?php

session_start();
$parts = explode('/', $_SERVER['PHP_SELF']);
$last = array_pop($parts);
$CD = implode('/', $parts);
$SERVER_CD = $_SERVER['SERVER_NAME'] . $CD;

$captchaSuccess = false;

if (isset($_POST['name'], $_POST['company'], $_POST['email'], $_POST['telephone'], $_POST['message'])) {
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
  if (!$captcha) {
    $errors[] = "Could not verify the captcha.";
  } else {
    $secretKey = "6LfPG70ZAAAAAHuo1OuN_ABwg8GGTbXeegV1X9c2";
    $data = array(
      'secret' => $secretKey,
      'response' => $captcha
    );
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $response = curl_exec($ch);
    curl_close($ch);
    $responseKeys = json_decode($response, true);
    if ($responseKeys['success'] == false) {
      $errors[] = 'reCaptcha verification failed.';
    } else {
      $captchaSuccess = true;
    }
    if ($responseKeys['score'] < 0.5) {
      $errors[] = 'reCaptcha score was too low to accept your response.';
    }
    if (preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST["name"]) === 0) {
      $errors[] = 'Name field allows only letters and spaces.';
    }

    if (empty($company)) {
      $errors[] = 'Company field cannot be left blank.';
    }

    if (empty($name)) {
      $errors[] = 'Name field cannot be left blank.';
    }

    if (empty($message)) {
      $errors[] = 'Message field cannot be left blank.';
    }

    if (empty($email)) {
      $errors[] = 'Email field cannot be left blank.';
    }

    if (empty($telephone)) {
      $errors[] = 'Telephone field cannot be left blank.';
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'Incorrect email format. Please supply an email in the format name@domain.com.';
    }

    if (!empty($errors)) {
      $_SESSION['submission_errors'] = $errors;
      header("Location: contact.php");
      exit();
    }
  }
}

if ($captchaSuccess && empty($errors)) {
  send_to_sales($_POST);

  send_confirmation($_POST);

  save_to_db($_POST);

  $URL = $CD . "/thankyou.php";
  header('Location: ' . $URL);
  exit();
}

function send_to_sales($inquiry)
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

function send_confirmation($inquiry)
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

function save_to_db($inquiry)
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

  $conn = new mysqli($servername, $username, $password, 'inquiries');


  $result = $conn->query("
        INSERT INTO inquiries (name, company, email, telephone, title, message) 
        VALUES ('{$name}', '{$company}', '{$email}', '{$telephone}', '{$title}', '{$message}')
    ");

  $conn->close();
}