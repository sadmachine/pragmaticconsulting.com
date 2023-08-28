<?php

class CarouselItem {

  public $img_loc;
  public $title;
  public $active;
  public $lazy;

  public function __construct($img_loc, $title, $active=false, $lazy=true) {
    $this->img_loc = $img_loc;
    $this->title = $title;
    $this->active = $active;
    $this->lazy = $lazy;
  }

  public function render() {
    $active_class = "";
    $lazy_class = "lazy";
    $src = "data-src='$this->img_loc'";
    if ($this->lazy == false) {
      $lazy_class = "";
      $src = "src='$this->img_loc'";
    }
    if ($this->active == true) {
      $active_class = "active";
    }
    $rendered = <<<HEREDOC
<div class='carousel-item ${active_class}'>
  <img class='d-block w-100 img-fluid ${lazy_class}' ${src} alt='$this->title'>
  <div class='carousel-caption d-none d-sm-block'>
    <h5>$this->title</h5>
  </div>
  <div class='carousel-caption d-block d-sm-none'>
    <h6>$this->title</h6>
  </div>
</div>
HEREDOC;
    return $rendered;
  }

  public function display() {
    echo $this->render();
  }
}

function carousel_item($img_loc, $title, $active = false, $lazy = true)
{
  $item = new CarouselItem($img_loc, $title, $active, $lazy);
  $item->display();
}
?>

<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>Quality Systems - Pragmatic Consulting, Inc.</title>
  <meta name="description"
    content="Bring your production up to quality standards with the help of Pragmatic Consulting, Inc. Our consultants are experts in a wide-range of quality measures and standards.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <h2 class="content-title">Quality Systems</h2>

        <p>An increasing number of companies are investing time and effort in transforming their operations, processes
          and organizations to world-class levels. Many have achieved responsive manufacturing process capabilities,
          reduced lead times, improved quality and reduced waste. These techniques, in combination with Total Quality
          Management (TQM), enable the operations to be highly responsive and to produce quality at the source. </p>

        <p>This is an underlying theme to our approach in all that we do with our clients. Lean, integrated systems and
          quality at the source become part of an organization’s cultural change. Even when implementing quality
          systems, we do not develop processes for process’s sake. Our experience assures our client organizations
          attain the highest quality standards and compliance, and delivers added value in addition to dramatic
          improvements.</p>

        <div id="qualityCarousel" class="carousel slide" data-ride="carousel" data-interval="3500">
          <div class="carousel-inner">
            <?php
              carousel_item('img/carousel/quality-systems/1 Quality Management.jpg', 'Quality Management', true, false);
              carousel_item('img/carousel/quality-systems/2 Systems Implementations.jpg', 'Systems Implementations', false, false);
              carousel_item('img/carousel/quality-systems/3 Manufacturing.jpg', 'Manufacturing');
              carousel_item('img/carousel/quality-systems/4 Aerospace & Defense.jpg', 'Aerospace & Defense');
              carousel_item('img/carousel/quality-systems/5 Food & Food Service.jpg', 'Food & Food Service Equipment');
              carousel_item('img/carousel/quality-systems/6 Energy.jpg', 'Energy');
              carousel_item('img/carousel/quality-systems/7 Machining.jpg', 'Machining');
              carousel_item('img/carousel/quality-systems/8 Fabrication.jpg', 'Fabrication');
              carousel_item('img/carousel/quality-systems/9 Distribution & Warehousing.jpg', 'Distribution & Warehousing');
              carousel_item('img/carousel/quality-systems/10 Compliance & Project Success.jpg', 'Compliance & Project Success', false, false);
            ?>
          </div>
          <a class="carousel-control-prev" href="#qualityCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#qualityCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <p> Many process steps and procedures satisfy requirements, and are just that - requirements. All others are
          viewed with a jaundiced eye and are not included if there is non-value added waste. We integrate your quality
          system with a culture of continuous
          improvement, involving employees at every step to ensure active participation and transfer of skills. </p>

        <p>For more information on our Quality Systems services, please visit our <a href="contact.php"><strong>contact
              page</strong></a>.

          <div class="row text-left">
            <div class="col-12 col-md-6">
              <h4>Quality System Standards</h4>
              <ul>
                <li>
                  <a href="ISO9000.php">
                    ISO 9000: 2015
                  </a>
                </li>
                <li>ISO 14001: 2015</li>
                <li>ISO/AS 9100D</li>
                <li>ISO 13485: 2016</li>
                <li>OHSAS 18001</li>
                <li>ISO 20000</li>
                <li>ISO 45001: 2018</li>
              </ul>
            </div>
            <div class="col-12 col-md-6">
              <h4>Manufacturing Quality Initiatives</h4>
              <ul>
                <li>Design for Manufacturing</li>
                <li>IT Systems and Automation</li>
                <li>Process Capability</li>
                <li>Customer Satisfaction</li>
                <li>Quality Improvement Tools</li>
                <li>Process Definition and Mapping</li>
              </ul>
            </div>
          </div>
          <div class="row text-left">
            <div class="col-12 col-md-6">
              <h4>Supplier Management</h4>
              <ul>
                <li>Developing a Supplier Certification</li>
                <li>Contract Compliance (Audits)</li>
                <li>Supplier Rating Systems</li>
                <li>Benchmarking Initiatives</li>
                <li>Material Acquisition Management</li>
                <li>Global Supply Chain</li>
              </ul>
            </div>
            <div class="col-12 col-md-6">
              <h4>Strategic Improvement Initiatives</h4>
              <ul>
                <li>Operations (Business) Planning</li>
                <li>Balanced Score Card (BSC)</li>
                <li>Lean and Six Sigma</li>
                <li>DMAIC Process</li>
                <li>
                  <a href="problem-solving.php">
                    Problem Solving
                  </a>
                </li>
                <li>Goal Deployment (Hoshin Kanri)</li>
              </ul>
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