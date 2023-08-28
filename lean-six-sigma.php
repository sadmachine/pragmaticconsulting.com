<?php
function carousel_item($img_loc, $title, $active = false, $lazy = true, $second = false)
{
  $active_class = "";
  $lazy_class = "lazy";
  $src = "data-src='${img_loc}'";
  if ($lazy == false) {
      $lazy_class = "";
      $src = "src='${img_loc}'";
  }
  if ($second == true) {
      $src = "src='${img_loc}'";
  }
  if ($active == true) {
      $active_class = "active";
  }


  echo "<div class='carousel-item ${active_class}'>";
  echo "  <img class='d-block w-100 img-fluid ${lazy_class}' ${src} alt='${title}'>";
  echo "  <div class='carousel-caption d-none d-sm-block'>";
  echo "    <h5>${title}</h5>";
  echo "  </div>";
  echo "  <div class='carousel-caption d-block d-sm-none'>";
  echo "    <h6>${title}</h6>";
  echo "  </div>";
  echo "</div>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>LEAN/Six Sigma - Pragmatic Consulting, Inc.</title>
  <meta name="description"
    content="Optimize your organization's manufacturing process with the help of Pragmatic Consulting, Inc. We provide consulting at all levels of an organization with special emphasis on implementation of the Lean enterprise.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <h3 class="content-title">Lean / Six Sigma Business</h3>
        <div id="leanCarousel" class="carousel slide" data-ride="carousel" data-interval="3500">
          <div class="carousel-inner">
            <?php
            carousel_item('img/carousel/lean-six-sigma/1 Lean Manufacturing Implementations.png', 'Lean Manufacturing Implementations', true, false);
            carousel_item('img/carousel/lean-six-sigma/2 Lean Business Planning.jpg', 'Lean Business Planning', false, true, true);
            carousel_item('img/carousel/lean-six-sigma/3 Large Equipment Environments.jpg', 'Large Equipment Environments');
            carousel_item('img/carousel/lean-six-sigma/4 Electromechanical Assembly.jpg', 'Electromechanical Assembly');
            carousel_item('img/carousel/lean-six-sigma/5 Value Stream Training.JPG', 'Value Stream Training');
            carousel_item('img/carousel/lean-six-sigma/6 From Equipment Environments.JPG', 'From Equipment Environments');
            carousel_item('img/carousel/lean-six-sigma/7 To Small PCB Assembly.jpg', 'To Small PCB Assembly');
            carousel_item('img/carousel/lean-six-sigma/8 From Lean CNC Machining Environments.jpg', 'From CNC Machining Environments');
            carousel_item('img/carousel/lean-six-sigma/9 To Lean Fabrication, Large & Small.jpg', 'To Fabrication, Large & Small');
            carousel_item('img/carousel/lean-six-sigma/10 From Lean Distribution Warehousing.jpg', 'From Lean Distribution & Warehousing');
            carousel_item('img/carousel/lean-six-sigma/11 To Pharmaceutical Manufacturing and More!.jpg', 'To Pharmaceutical Manufacturing and more!', false, false);
            ?>
          </div>
          <a class="carousel-control-prev" href="#leanCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#leanCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <p>Our Lean / Six Sigma business focuses on three major elements. First, we provide consulting at all levels of
          an organization with special emphasis on implementation of the Lean enterprise.</p>

        <p>The second major component is our leadership resources. We will lead the initiative if resources and talent
          are in short supply. The addition of our leadership in conjunction with your team creates the environment
          essential to the culture change required to fully adopt the continuous improvement mentality.</p>
        <p>The third element involves the mentoring of decision-makers toward self-sustainability in Lean and Six Sigma
          implementation. This mentoring usually takes on two forms: one-on-one coaching and/or training through a
          variety of programs. Our training programs are customized to the organization's unique needs and range from
          the basics of the lean process for executives to detailed methods and successful implementation for plant
          floor employees.</p>
        <h3 class='d-none d-md-block mt-2 mt-md-0'>Our Approach</h3>
        <div class='row justify-content-center'>
          <div class='col-12 col-md-5 order-1 order-md-2'>
            <img class='img-fluid' src='img/Lean Manufacturing Diagram.jpg' alt='Lean Wastes'>
          </div>
          <div class="col-12 col-md-7 order-2- order-md-1">
            <h3 class='d-md-none mt-2 mt-md-0'>Our Approach</h3>
            <p>Pragmatic's approach is to apply scientific methods to the design and operation of systems and business
              processes that enable employees to deliver the greatest “value” to customers and stakeholders.</p>

            <p>If you are ready to start transforming your organization, realize gains in quality, productivity,
              efficiencies and eliminate waste, take the next steps and contact us for more detailed information.</p>

            <p>Our comprehensive training programs can be delivered to <strong>all levels of your organization.</strong>
            </p>

            <p>For more information on our Lean/Six Sigma services, please visit our <a href="contact.php">contact
                page</a>.</p>
          </div>
        </div>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html>