<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>Infor - Pragmatic Consulting, Inc.</title>
  <meta name="description" content="Implement Infor properly with the help of Pragmatic Consulting, Inc. We help fully utilize the large range of tools Infor offers into your organization.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <h2 class="content-title">Infor Syteline</h2>
        <?php require 'content/erp/syteline.php'; ?>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html>
