<?php

namespace App\Http\Controllers\Com;

use App\Http\Controllers\Controller;
use App\Entities\{Page, Article, Profile, Client};

class PostController extends Controller
{
    public function contact()
    {
        session_status() == PHP_SESSION_ACTIVE ?: session_start();
        $parts = explode('/', $_SERVER['PHP_SELF']);
        $last = array_pop($parts);
        $CD = implode('/', $parts);
        $SERVER_CD = $_SERVER['SERVER_NAME'] . $CD;

        $validate_captcha = function (&$errors, $captcha) {
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
        };

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
            if (!isset($captcha) || !$captcha) {
                $errors[] = "Could not verify the captcha.";
            } else {

                $captcha_success = $validate_captcha($errors, $captcha);

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

                if (!$captcha_success || !empty($errors)) {
                    $_SESSION['submission_errors'] = $errors;
                    header("Location: contact.php");
                    exit();
                }
            }
        }

        if ($captcha_success && empty($errors)) {
            $to = 'sales@pragmaticconsulting.com';
            $subject = 'New Pragmatic Consulting web Submission!!!';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $message = $_POST['message'];


            $messages = <<<EMAIL
This message is from:

Name:       $name

Email:      $email

Telephone:  $telephone

Message:

$message

Other information:

Company		$company
Title		$title
Address1	$address1
Address		$address2
City		$city
State		$state
Zip			$zip
Vercode		$vercode
EMAIL;

            $header = 'From:sales@pragmaticconsulting.com';
            mail($to, $subject, $messages, $header);

            $subject = 'Thank You For Contacting Pragmatic Consulting!';
            $messages = <<<EMAIL
One of our expert consultants will contact you within 2 business days.


Pragmatic Consulting, Inc.
www.PragmaticConsulting.com
Phone: (603) 431-4461
Email: sales@PragmaticConsulting.com
EMAIL;

            $header = 'From:sales@pragmaticconsulting.com';
            mail($email, $subject, $messages, $header);
            $URL = $CD . "/thankyou.php";
            header('Location: ' . $URL);
            die();
        } else {
            return view('pages.com.contact', [
                'errors' => $errors
            ]);
        }
    }
}
