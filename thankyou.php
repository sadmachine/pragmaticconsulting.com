<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>Pragmatic Consulting, Inc.</title>
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <h1 class="content-title mb-3">Thanks</h1>

        <h4>Thank you for contacting Pragmatic Consulting, Inc. We appreciate your contacting us about our services. We will respond as soon as possible. One of our expert consultants will reach out
            to you. Have a great day!
        </h4>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html>
