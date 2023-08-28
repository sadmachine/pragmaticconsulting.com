<?php

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy 1 month of engagement!</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/p5/p5.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/firework.js"></script>
  <script src="js/sketch.js"></script>
</head>

<body>
  <main>
  </main>
</body>

</html>