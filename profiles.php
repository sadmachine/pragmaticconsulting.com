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
        <?php
        $LinkID = @$_GET['ID'];

        switch ($LinkID) {
          case 2: include("profiles/bull.html");
                  break;
          case 3: include("profiles/elliot.html");
                  break;
          case 4: include("profiles/gaynor.html");
                  break;
          case 5: include("profiles/sweeney.html");
                  break;
          case 6: include("profiles/Orliac.html");
                  break;
          case 7: include("profiles/David Poole.html");
                  break;
          case 10: include("profiles/liz_tracy.html");
                  break;
          case 13: include("profiles/Dwayne Jackson.html");
                  break;
          case 14: include("profiles/James Skinner.html");
                  break;
          case 17: include("profiles/Dan McAuliffe.html");
                  break;
          case 19: include("profiles/Russell Snyder.html");
                  break;
         case 20: include("profiles/George Elias.html"); 
                  break;
          case 21: include("profiles/Tim Sanborn.html");
                  break;
          case 23: include("profiles/Marsha Foxx.html");
                  break;
          case 24: include("profiles/Austin Fishbaugh.html");
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

</html>
