<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>News - Pragmatic Consulting, Inc.</title>
  <meta name="description" content="The latest at Pragmatic Consulting, Inc.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <?php
        $LinkID = @$_GET['ID'];
        switch ($LinkID) {
          case 1: include("news/humanresourceswhitepaper.html");
                      break;
          case 2: include("news/davidpoolewelcome.html");
                      break;
          case 3: include("news/richardpennwelcome.html");
                      break;
        }
        ?>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html
