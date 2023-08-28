<?php
function displayProfile($image, $modalid, $name, $title)
{
  // The $modalid variable here should match the corresponding $modalid used in profile-popups.php
  echo  "<div class='col-12 col-sm-5 col-lg-4 col-xl-3 officer mb-3 mx-0 mx-sm-2 mx-lg-3'>";
  echo    "<div class='row picture-frame'>";
  echo      "<div class='col'>";
  echo        "<a data-toggle='modal' data-target='#${modalid}Info'><img class='img-fluid' src='img/team/${image}' alt='${name}'/></a>";
  echo      "</div>";
  echo    "</div>";
  echo    "<div class='row'>";
  echo      "<p class='col'>";
  echo        "<a class='link' data-toggle='modal' data-target='#${modalid}Info' href=''>${name}</a>";
  echo      "</p>";
  echo    "</div>";
  echo    "<div class='row'>";
  echo      "<h4 class='col'>${title}</h4>";
  echo    "</div>";
  echo  "</div>";
}
?>

<!DOCTYPE html>
<html>



  <head>
    <?php require 'template/pre-includes.php' ?>
    <title>Meet Our Team - Pragmatic Consulting, Inc.</title>
    <meta name="description"
          content="Get familiar with the key players behind Pragmatic Consulting's success. Our team of consultants features executive level talent in a wide range of manufacturing and other industry consulting.">
  </head>

  <body>
    <div class="container-fluid">
      <?php require 'template/header.php' ?>

      <section id="content" class="row justify-content-center">
        <main class="col-12 col-md-11 col-xl-9 p-3 p-sm-4">
          <h3 class="content-title mb-3">The Pragmatic Team</h3>
          <div class="row mx-5 mx-md-3 mx-lg-1 officer-list justify-content-center">
            <?php displayProfile("russ.png", 'russellsnyder', "Russell Snyder", "ERP Implementation & Training"); ?>
            <?php displayProfile("richard_penn.JPG", 'richardpenn', 'Richard Penn', 'Project Manager'); ?>
            <?php displayProfile("afishbaugh.png", 'austinfishbaugh', "Austin Fishbaugh", "IT & Applications Consultant"); ?>
            <?php displayProfile("marsha-foxx.jpg", 'marshafoxx', "Marsha Foxx", "Epicor Consultant"); ?>
            <?php /* displayProfile("headshot.gif", 'dwaynejackson', "Dwayne Jackson", "Epicor Consultant"); */ ?>
            <?php displayProfile("wmalcolm.png", 'billmalcolm', "Bill Malcolm", "Project Manager & Senior Dynamics Consultant"); ?>           
            <?php displayProfile("Pascal_Orliac.jpg", 'pascalorliac', "Pascal Orliac", "Human Capital Strategies and Management, Sales & Marketing"); ?>
            <?php displayProfile("tsanborn.jpg", 'timsanborn', "Tim Sanborn", "Sales & Marketing"); ?>
            <?php displayProfile("wes-stone.jpg", 'wesstone', "Wes Stone", "Senior Epicor Consultant"); ?>
            <?php displayProfile("headshot.gif", 'stephentaylor', "Stephen Taylor", "Epicor Consultant"); ?>
            <?php displayProfile("ltracy.jpg", 'elizabethtracy', "Elizabeth Tracy", "Quality Management Consultant"); ?>
            <?php displayProfile("georgeelias.jpeg", 'georgeelias', "George Elias", "Epicor Consultant"); ?>
            <?php displayProfile("bio_poole.jpg", 'davidpoole', "David Poole", "Security, Import & Export Compliance"); ?>
            <?php displayProfile("headshot.gif", 'danmcauliffe', "Dan McAuliffe", "Industrial Engineering, Project Management"); ?>
            
           
            
          </div>
          <!-- 'profile-popups.php' contains the Bootstrap Modals that appear when the profiles are clicked. Update profile information there. -->
          <?php require 'profile-popups.php' ?>
        </main>
      </section>

      <footer id="footer" class="row justify-content-center">
        <?php require 'template/footer.php' ?>
      </footer>
    </div>

    <?php require 'template/post-includes.php' ?>
  </body>

</html>