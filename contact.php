<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="intl-tel-input/css/intlTelInput.css">
  <link rel="stylesheet" href="intl-tel-input/css/overrides.css">
  <?php require 'template/pre-includes.php' ?>
  <title>Contact - Pragmatic Consulting, Inc.</title>
  <meta name="description"
    content="Get in touch for more information about how Pragmatic Consulting, Inc. can provide a wide-range of consulting services for your business or organizations needs!">
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php' ?>
    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 py-3 px-2">
        <h3 class="content-title mb-3 px-0 mx-0">Contact Us</h3>
        <div class="row justify-content-center">
          <div class="col-auto">
            <?php
            if (isset($_SESSION['submission_errors'])) {
              $errors = $_SESSION['submission_errors'];
              unset($_SESSION['submission_errors']);
              foreach ($errors as $error) {
                echo '<strong style="color: #D60606;">', $error, '</strong><br>';
              }
            }
            ?>
          </div>
        </div>
        <div class="row justify-content-around px-2">
          <div class="col-12 col-lg-6">
            <div class="row justify-content-start ">
              <div class="col-6 col-lg-auto contact-blurb">
                <h5 class="sans-serif mb-2">We'd love to hear more about your business needs.</h5>
                <p class="sans-serif">Get in touch to learn what Pragmatic Consulting can do for you.</p>
              </div>
              <div class="col-6 col-lg-auto mb-4 pl-3">
                <div class="contact-block">
                  <p>
                    <strong>Call us</strong> <br>
                    <a href="tel:+1-603-431-4461">(603) 431-4461</a>
                  </p>
                  <p class="mb-2">
                    <strong>Email us</strong> <br>
                    <a href="mailto:inquiries@pragmaticconsulting.com">Inquiries@<wbr>Pragmatic<wbr>Consulting.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <form id='contactForm' class="form-style-8 p-3 p-lg-3" action="contact.submit.php" method="post">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
              </div>
              <div class="form-row">
                <div class="form-group col-6 col-lg-12 col-xl-6">
                  <label for="company">Company *</label>
                  <input type="text" class="form-control" id="company" name="company" placeholder="ABC Corporation"
                    required>
                </div>
                <div class="form-group col-6 col-lg-12 col-xl-6">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Director of Sales">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-md-6 col-lg-12 col-xl-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com"
                    required>
                </div>
                <div class="form-group col-12 col-md-6 col-lg-12 col-xl-6">
                  <label for="telephone">Telephone *</label>
                  <input type="tel" class="form-control" id="phone" name="telephone" required>
                </div>
              </div>
              <legend>Message *</legend>
              <div class="form-group">
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="How can we help?"
                  required></textarea>
              </div>
              <div class="form-group mb-0">
                <button class="g-recaptcha btn btn-prag px-4 py-2"
                  data-sitekey="6LfPG70ZAAAAAEEDYMu7fV0pVSvIGzJZDfF-HhGA" data-callback='onSubmit'
                  data-action='submit'>Submit</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php' ?>
    </footer>
  </div>

  <?php require 'template/post-includes.php' ?>
  <script src="intl-tel-input/js/intlTelInput.min.js"></script>
  <script>
  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
    utilsScript: "intl-tel-input/js/utils.js"
  });

  function onSubmit(token) {
    $("#phone").val(iti.getNumber());
    document.getElementById("contactForm").submit();
  }
  $("#contactForm").on("submit", function(e) {
    e.preventDefault();
    var self = $(this);
    $("#phone").val(iti.getNumber());
    $("#contactForm").off("submit");
    self.submit();
  });
  </script>
</body>

</html>