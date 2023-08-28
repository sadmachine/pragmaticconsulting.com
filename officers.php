<!DOCTYPE html>
<html>

<?php
function displayProfile($image, $modalid, $name, $title)
{
    // The $modalid variable here should match the corresponding $modalid used in profile-popups.php
    echo  "<div class='col-12 col-sm-5 col-lg-4 col-xl-3 officer mb-3 mx-0 mx-sm-2 mx-lg-3'>";
    echo    "<div class='row picture-frame'>";
    echo      "<div class='col'>";
    echo        "<a data-toggle='modal' data-target='#${modalid}Info'><img class='img-fluid rounded' src='img/team/${image}' alt='${name}'/></a>";
    echo      "</div>";
    echo    "</div>";
    echo    "<div class='row'>";
    echo      "<p class='col'>";
    echo        "<a class='link' data-toggle='modal' data-target='#${modalid}Info' href=''>{$name}</a>";
    echo      "</p>";
    echo    "</div>";
    echo    "<div class='row'>";
    echo      "<h4 class='col'>{$title}</h4>";
    echo    "</div>";
    echo  "</div>";
}
?>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>Officers - Pragmatic Consulting, Inc.</title>
  <meta name="description" content="Get familiar with the key players behind Pragmatic Consulting's success. Our organization's officers have executive level talent in a wide range of manufacturing and other industry consulting.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-xl-9 p-3 p-sm-4">
        <h3 class="content-title mb-3">Officers</h3>
        <p>
		    	At Pragmatic Consulting, Inc. we know that success is a reflection of leadership. Our executive team offers expertise in a wide range of industries and services. Together our diverse backgrounds and experiences create a leadership team unlike any other. Our President and Principal Partners are committed to success through helping our client, not only reach, but far surpass their goals.
        </p>
        <div class="row mx-5 mx-md-3 mx-lg-1 officer-list justify-content-center">
          <?php displayProfile("bio_bull.jpg", "larrybull", "Larry Bull", "Principal Partner"); ?>
          <?php displayProfile("bio_sweeney.jpg", "johnsweeney", "John Sweeney", "President & CEO"); ?>
          <?php displayProfile("bio_elliott.jpg", "dianaelliott", "Dr. Diana B. Elliott", "Principal Partner"); ?>
        </div>
        <!-- 'profile-popups.php' contains the Bootstrap Modals that appear when the profiles are clicked. Update profile information there. -->
        <?php require 'profile-popups.php'?>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html>
